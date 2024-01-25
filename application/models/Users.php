<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Users extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function check_valid_user($username, $password)
    {
        $password = md5("gef" . $password);
        $this->db->where(array('username' => $username, 'password' => $password, 'status' => 1));
        $query = $this->db->get('user_login');
        $result = $query->result_array();
        if (count($result) == 1) {
            $user_id = $result[0]['user_id'];

            $this->db->select('a.*,b.*');
            $this->db->from('user_login a');
            $this->db->join('users b', 'b.user_id = a.user_id');
            $this->db->where('a.user_id', $user_id);
            $query = $this->db->get();
            return $query->result_array();
        }
        return false;
    }

    public function userPermissionadmin($id = null)
    {

        return $this->db->select("
			sub_module.directory,
			role_permission.fk_module_id,
			role_permission.create,
			role_permission.read,
			role_permission.update,
			role_permission.delete
			")
            ->from('role_permission')
            ->join('sub_module', 'sub_module.id = role_permission.fk_module_id', 'full')
            ->where('role_permission.role_id', $id)
            ->where('sub_module.status', 1)
            ->group_start()
            ->where('create', 1)
            ->or_where('read', 1)
            ->or_where('update', 1)
            ->or_where('delete', 1)
            ->group_end()
            ->get()
            ->result();
    }

    public function userPermission($id = null)
    {

        $userrole = $this->db->select('sec_userrole.*,sec_role.*')->from('sec_userrole')->join('sec_role', 'sec_userrole.roleid=sec_role.id')->where('sec_userrole.user_id', $id)->get()->result();

        $roleid = array();
        foreach ($userrole as $role) {
            $roleid[] = $role->roleid;
        }

        if (!empty($roleid)) {
            return $result = $this->db->select("

					role_permission.fk_module_id,
					sub_module.directory,
					IF(SUM(role_permission.create) >= 1,1,0) AS 'create',
					IF(SUM(role_permission.read) >= 1,1,0) AS 'read',
					IF(SUM(role_permission.update) >= 1,1,0) AS 'update',
					IF(SUM(role_permission.delete) >= 1,1,0) AS 'delete'
				")
                ->from('role_permission')
                ->join('sub_module', 'sub_module.id = role_permission.fk_module_id', 'full')
                ->where_in('role_permission.role_id', $roleid)
                ->where('sub_module.status', 1)
                ->group_by('role_permission.fk_module_id')
                ->group_start()
                ->where('create', 1)
                ->or_where('read', 1)
                ->or_where('update', 1)
                ->or_where('delete', 1)
                ->group_end()

                ->get()
                ->result();
        } else {

            return $this->db->select("
			sub_module.directory,
			role_permission.fk_module_id,
			role_permission.create,
			role_permission.read,
			role_permission.update,
			role_permission.delete
			")
                ->from('role_permission')
                ->join('sub_module', 'sub_module.id = role_permission.fk_module_id', 0)
                ->where('role_permission.role_id', 0)
                ->where('sub_module.status', 1)
                ->group_start()
                ->where('create', 1)
                ->or_where('read', 1)
                ->or_where('update', 1)
                ->or_where('delete', 1)
                ->group_end()
                ->get()
                ->result();
        }
    }

    /*
     **User registration
     */
    public function user_registration()
    {
        $birth_day = $this->input->post('birth_day');
        $birth_month = $this->input->post('birth_month');
        $birth_year = $this->input->post('birth_year');
        $dbo = $birth_year . '-' . $birth_month . '-' . $birth_day;

        $data1 = array(
            'user_id' => null,
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'gender' => $this->input->post('user_sex'),
            'date_of_birth' => $dbo,
            'status' => 1,
        );
        $this->db->insert('users', $data1);
        $insert_id = $this->db->insert_id();
        //Inset user Login table

        $password = $this->input->post('password');
        $password = md5("ctgs" . $password);

        $data = array(
            'user_id' => 1, //$insert_id ,
            'username' => $this->input->post('username'),
            'password' => $password,
            'user_type' => 2,
            'security_code' => '',
            'status' => 0,
        );
        $this->db->insert('user_login', $data);
    }
    public function profile_edit_data()
    {
        $user_id = $this->session->userdata('user_id');
        $this->db->select('a.*,b.username');
        $this->db->from('users a');
        $this->db->join('user_login b', 'b.user_id = a.user_id');
        $this->db->where('a.user_id', $user_id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    //Update Profile
    public function profile_update()
    {
        $this->load->library('upload');

        if (($_FILES['logo']['name'])) {
            $files = $_FILES;
            $config = array();
            $config['upload_path'] = 'assets/dist/img/profile_picture/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|JPEG|GIF|JPG|PNG';
            $config['max_size'] = '1000000';
            $config['max_width'] = '1024000';
            $config['max_height'] = '768000';
            $config['overwrite'] = false;
            $config['encrypt_name'] = true;

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('logo')) {
                $sdata['error_message'] = $this->upload->display_errors();
                $this->session->set_userdata($sdata);
                redirect('Admin_dashboard/edit_profile');
            } else {
                $view = $this->upload->data();
                $logo = base_url($config['upload_path'] . $view['file_name']);
            }
        }

        $old_logo = $this->input->post('old_logo');

        $user_id = $this->session->userdata('user_id');
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $user_name = $this->input->post('user_name');
        $new_logo = (!empty($logo) ? $logo : $old_logo);

        return $this->db->query("UPDATE `users` AS `a`,`user_login` AS `b` SET `a`.`first_name` = '$first_name', `a`.`last_name` = '$last_name', `b`.`username` = '$user_name',`a`.`logo` = '$new_logo' WHERE `a`.`user_id` = '$user_id' AND `a`.`user_id` = `b`.`user_id`");
    }
    //Change Password
    public function change_password($email, $old_password, $new_password)
    {
        $user_name = md5("gef" . $new_password);
        $password = md5("gef" . $old_password);
        $this->db->where(array('username' => $email, 'password' => $password, 'status' => 1));
        $query = $this->db->get('user_login');
        $result = $query->result_array();

        if (count($result) == 1) {
            $this->db->set('password', $user_name);
            $this->db->where('password', $password);
            $this->db->where('username', $email);
            $this->db->update('user_login');

            return true;
        }
        return false;
    }

}