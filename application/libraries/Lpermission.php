<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lpermission {

	public function permission_form(){


		$CI=& get_instance();
		$CI->load->model('Permission_model');

		$user_list=$CI->Permission_model->user_list();
		$account=$CI->Permission_model->permission_list();
		$data = array(
          'title' => 'Create permission',
          'account'=>$account,
          'user_list'=>$user_list,
		);
		
		$account = $CI->parser->parse('permission/permission_form',$data,true);
		return $account;
	}
	public function assign_form(){

		$CI=& get_instance();
		$CI->load->model('Permission_model');
		$user=$CI->Permission_model->user();
		$user_list=$CI->Permission_model->user_list();

		$data = array(
          'title' => 'User assign role',
          'user'=>$user,
          'user_list'=>$user_list,
		);
		$account = $CI->parser->parse('permission/assign_form',$data,true);
		return $account;
	}
	public function role_form(){

        $CI=& get_instance();
        $CI->load->model('Permission_model');

        $account=$CI->Permission_model->permission_list();
        $data = array(
            'title' => 'Create role name',
            'account'=>$account
        );
        $account = $CI->parser->parse('permission/role_form',$data,true);
        return $account;
    }
    public function role_view(){
        $CI=& get_instance();
        $CI->load->model('Permission_model');
        $user_count=$CI->Permission_model->user_count();
        $user_list=$CI->Permission_model->user_list();
        $data = array(
            'title' => 'Role List',
            'user_count'=> $user_count,
            'user_list'=>$user_list
        );
        $page = $CI->parser->parse('permission/role_view_form',$data,true);
        return $page;
    }
    public function roleinsert_user($data){
        $CI=& get_instance();
        $CI->load->model('Permission_model');

        $CI->Permission_model->insert_user_entry($data);
        return true;
    }

    public function user_edit_data($id){
        $CI =& get_instance();
        $CI->load->model('Permission_model');
        $category_detail = $CI->Permission_model->userdata_editdata($id);
        $data=array(
            'id' 			=> $category_detail[0]['id'],
            'type' 			=> $category_detail[0]['type'],
        );
        $chapterList = $CI->parser->parse('permission/edit_role_form',$data,true);
        return $chapterList;
    }

    public function edit_role_data($id){

        $CI=& get_instance();
        $CI->load->model('Permission_model');

        $role = $CI->Permission_model->role($id);
        $module = $CI->Permission_model->module();
        $role_detail = $CI->Permission_model->role_edit($id);


        $data = array(
            'role' 			=> $role,
            'module' 		=> $module,
            'role_detail'   => $role_detail
        );
        $account = $CI->parser->parse('permission/editroleform',$data,true);
        return $account;


    }
	
}