<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Permission extends CI_Controller
{

//    function __construct() {
//        parent::__construct();
//    }
    function __construct()
    {
        parent::__construct();
        $this->load->library('auth');
        $this->load->library('lpermission');
        $this->load->library('session');
        $this->load->model('Permission_model');
        $this->auth->check_admin_auth();
    }

    //Permission form
    public function index()
    {
        $content = $this->lpermission->permission_form();
        $this->template->full_admin_html_view($content);
    }

    public function create()

    {
        $CI =& get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->model('Permission_model');


        $data['title'] = display('add_role_permission');
        /*-----------------------------------*/
      //  $this->form_validation->set_rules('role_id', display('required'), 'required|numeric|max_length[11]');
        /*-----------------------------------*/
        $data = array(
            'type' => $this->input->post('role_id'),
        );
        $insert_id=$CI->Permission_model->insert_user_entry($data);
        /*-----------------------------------*/
        //$module       = $this->input->post('module'); 

        $fk_module_id = $this->input->post('fk_module_id');
        $create = $this->input->post('create');
        $read = $this->input->post('read');
        $update = $this->input->post('update');
        $delete = $this->input->post('delete');


        $new_array = array();
        for ($m = 0; $m < sizeof($fk_module_id); $m++) {
            for ($i = 0; $i < sizeof($fk_module_id[$m]); $i++) {
                for ($j = 0; $j < sizeof($fk_module_id[$m][$i]); $j++) {
                    $dataStore = array(
                        'role_id' => $insert_id,
                        'fk_module_id' => $fk_module_id[$m][$i][$j],
                        'create' => (!empty($create[$m][$i][$j]) ? $create[$m][$i][$j] : 0),
                        'read' =>   (!empty($read[$m][$i][$j]) ? $read[$m][$i][$j] : 0),
                        'update' => (!empty($update[$m][$i][$j]) ? $update[$m][$i][$j] : 0),
                        'delete' => (!empty($delete[$m][$i][$j]) ? $delete[$m][$i][$j] : 0),
                    );
                    array_push($new_array, $dataStore);
                }
            }
        }
        /*-----------------------------------*/
            if ($this->Permission_model->create($new_array)) {
                $id = $this->db->insert_id();
                $accesslog = array(
                    'action_page' => 'Role Permission',
                    'action_done' => 'create',
                    'remarks' => 'Role id :' . $id,
                    'user_name' => $this->session->userdata('user_id'),
                    'entry_date' => date('Y-m-d H:i:s')
                );
                $this->db->insert('accesslog', $accesslog);
                $this->session->set_flashdata('message', display('role_permission_added_successfully'));
            }
            else {
                $this->session->set_flashdata('exception', display('please_try_again'));
            }
            redirect("Permission/add_role");
    }

    public function user_assign()
    {
        $CI =& get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->library('lpermission');
        $content = $this->lpermission->assign_form();
        $this->template->full_admin_html_view($content);
    }

    public function usercreate($id = null)
    {
        $data['title'] = display('list_Role_setup');
        #-------------------------------#
        $this->form_validation->set_rules('user_id', display('user_id'), 'required');
        $this->form_validation->set_rules('user_type', display('user_type'), 'required|max_length[30]');

        $user_id = $this->input->post('user_id');
        $roleid = $this->input->post('user_type');
        $create_by = $this->session->userdata('user_id');
        $create_date = date('Y-m-d h:i:s');
        #-------------------------------#
        $data['role_data'] = (Object)$postData = array(
            'id' => $this->input->post('id'),
            'user_id' => $user_id,
            'roleid' => $roleid,
            'createby' => $create_by,
            'createdate' => $create_date
        );
        if ($this->form_validation->run()) {
            if (empty($postData['id'])) {
                if ($this->Permission_model->role_create($postData)) {
                    $id = $this->db->insert_id();
                    $accesslog = array(
                        'action_page' => 'User Role',
                        'action_done' => 'create',
                        'remarks' => 'Role id :' . $id,
                        'user_name' => $this->session->userdata('id'),
                        'entry_date' => date('Y-m-d H:i:s')
                    );
                    $this->db->insert('accesslog', $accesslog);
                    $this->session->set_flashdata('exception', display('please_try_again'));
                } else {


                }
                $this->session->set_flashdata('message', display('save_successfully'));
                redirect("Permission/user_assign");

            } else {

                $this->permission->method('dashboard', 'update')->redirect();

                if ($this->user_model->update_role($postData)) {
                    $accesslog = array(
                        'action_page' => 'User Role',
                        'action_done' => 'update',
                        'remarks' => 'Role id :' . $postData['id'],
                        'user_name' => $this->session->userdata('id'),
                        'entry_date' => date('Y-m-d H:i:s')
                    );
                    $this->db->insert('accesslog', $accesslog);
                    $this->session->set_flashdata('message', display('update_successfully'));
                } else {
                    $this->session->set_flashdata('exception', display('please_try_again'));
                }

                redirect("dashboard/user/create_user_role/" . $postData['id']);
            }

        } else {
            if (!empty($id)) {
                $data['title'] = display('update');
                $data['role'] = $this->user_model->findById($id);
            }
            $data['module'] = "dashboard";
            $data['user_list'] = $this->user_model->dropdown();
            $data['role_list'] = $this->user_model->role_list();
            $data['roles'] = $this->user_model->viewRole();
            $data['page'] = "user/role_setupform";
            redirect("Permission/user_assign");
        }
    }

    public function select_to_rol($id)
    {
        $role_reult = $this->db->select('sec_role.*,sec_userrole.*')
            ->from('sec_userrole')
            ->join('sec_role', 'sec_userrole.roleid=sec_role.id')
            ->where('sec_userrole.user_id', $id)
            ->group_by('sec_role.type')
            ->get()
            ->result();
        if ($role_reult) {
            $html = "";
            $html .= "<table id=\"dataTableExample2\" class=\"table table-bordered table-striped table-hover\">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>role_name</th>
                            </tr>
                        </thead>
                       <tbody>";
            $i = 1;
            foreach ($role_reult as $key => $role) {
                $html .= "<tr>
                                <td>$i</td>
                                <td>$role->type</td>
                            </tr>";
                $i++;
            }
            $html .= "</tbody>
                    </table>";
        }
        echo json_encode($html);
    }

    public function add_role()
    {
        $content = $this->lpermission->role_form();
        $this->template->full_admin_html_view($content);
    }
    public function role_list(){

        $content = $this->lpermission->role_view();
        $this->template->full_admin_html_view($content);
    }
    public function insert_role_user(){
        $CI =& get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->library('lpermission');

        $data = array(
            'type' => $this->input->post('type'),
        );

        $this->lpermission->roleinsert_user($data);
        $this->session->set_userdata(array('message' => display('successfully_added')));
        redirect("Permission/add_role");
    }

    public function edit_user($id){

        $content = $this->lpermission->user_edit_data($id);
        $this->template->full_admin_html_view($content);
    }

    public function role_update(){
        $this->load->model('Permission_model');
        $id = $this->input->post('id');
        $data = array(
            'type' => $this->input->post('type'),

        );
        $this->Permission_model->update_role($data, $id);
        $this->session->set_userdata(array('message' => display('successfully_updated')));
        redirect("Permission/add_role");
    }

    public function role_delete($id){
        $this->load->model('Permission_model');
        $role=$this->Permission_model->delete_role($id);
        $role_per=$this->Permission_model->delete_role_permission($id);

             $data=array(
                 'role'=>$role,
                 'role_per'=>$role_per
             );

        if($data){
            $this->session->set_userdata(array('message' => display('successfully_delete')));
        }
        else{
            $this->session->set_flashdata('exception', display('please_try_again'));
        }
        redirect("Permission/role_list");
    }
    public function edit_role($id){

        $content = $this->lpermission->edit_role_data($id);
        $this->template->full_admin_html_view($content);
    }

    public function update(){

        $CI =& get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->model('Permission_model');

        $id = $this->input->post('rid');

        $data = array(
            'type' => $this->input->post('role_id'),
            'id' => $this->input->post('rid'),
        );

        $CI->Permission_model->role_update($data,$id);


        $fk_module_id = $this->input->post('fk_module_id');
        $create = $this->input->post('create');
        $read = $this->input->post('read');
        $update = $this->input->post('update');
        $delete = $this->input->post('delete');


        $new_array = array();
        for ($m = 0; $m < sizeof($fk_module_id); $m++) {
            for ($i = 0; $i < sizeof($fk_module_id[$m]); $i++) {
                for ($j = 0; $j < sizeof($fk_module_id[$m][$i]); $j++) {
                    $dataStore = array(
                        'role_id' =>$this->input->post('rid'),
                        'fk_module_id' => $fk_module_id[$m][$i][$j],
                        'create' => (!empty($create[$m][$i][$j]) ? $create[$m][$i][$j] : 0),
                        'read'   =>   (!empty($read[$m][$i][$j]) ? $read[$m][$i][$j] : 0),
                        'update' => (!empty($update[$m][$i][$j]) ? $update[$m][$i][$j] : 0),
                        'delete' => (!empty($delete[$m][$i][$j]) ? $delete[$m][$i][$j] : 0),
                    );
                    array_push($new_array, $dataStore);
                }
            }
        }
        if($this->Permission_model->create($new_array)){
            $id = $this->db->insert_id();
            $accesslog = array(
                'action_page' => 'Role Permission',
                'action_done' => 'create',
                'remarks' => 'Role id :' . $id,
                'user_name' => $this->session->userdata('user_id'),
                'entry_date' => date('Y-m-d H:i:s')
            );
            $this->db->insert('accesslog', $accesslog);
            $this->session->set_flashdata('message', display('role_permission_updated_successfully'));
        }
        else{
            $this->session->set_flashdata('exception', display('please_try_again'));
        }
        redirect("Permission/role_list");
    }
}