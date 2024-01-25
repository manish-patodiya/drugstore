<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Account_Controller extends CI_Controller{
    public $menu;

    function __construct(){
        parent::__construct();
        $this->load->library('auth');
        $this->load->library('laccount2');
        $this->load->library('session');
        $this->load->model('Account_2');
        $this->auth->check_admin_auth();
    }

    //Account form
    public function index(){
        $content=$this->laccount2->account_form();
        $this->template->full_admin_html_view($content);
    }

    //Add new account
    public function insert_account(){

        $data=array(
            'account_name'=>$this->input->post('account_name'),
            'parent_id'=>$this->input->post('parent_id'),
            
            );

        $result=$this->Account_2->add_account($data);
        $this->session->set_userdata(array('message'=>display('successfully_updated')));
        if ($result == TRUE) {
            redirect(base_url('Account_Controller'));
        }
    }

    //Manage account
    public function manage_account()
    {
        $CI =& get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('laccount2');
        $CI->load->model('Account_2');
        $content = $CI->laccount2->account_list();
        $this->template->full_admin_html_view($content);
    }

    public function account_delete()
    {   
        $CI =& get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Account_2');
        $id =  $_POST['account_id'];
        $result=$CI->Account_2->delete_account($id);
        return true;
    }

    public function account_update_form($id)
    {   
        $content = $this->laccount2->account_up_data($id);
        $this->template->full_admin_html_view($content);
    }

    public function account_update()
    {
        $this->load->model('Account_2');
        $id  = $this->input->post('account_id');
        
        $data=array(
            'account_id'  =>$id,
            'account_name'=>$this->input->post('account_name'),
            'parent_id'=>$this->input->post('parent_id'),
            );

        $this->Account_2->update_account($data,$id);
        $this->session->set_userdata(array('message'=>display('successfully_updated')));
        redirect(base_url('Account_Controller/manage_account'));
    }

    public function date_summary()
    {
        $this->load->model('Account_2');
        $acc_id=$this->uri->segment(3);
        $this->db->select('*');
        $this->db->from('account_2');
        $this->db->where('account_id',$acc_id);
        $query=$this->db->get()->result_array();
		 
		 foreach($query as $row){}
		 $category_id=$row['parent_id'];
        $content = $this->laccount2->trans_custom_report_data($category_id);
        $this->template->full_admin_html_view($content);
    }

}