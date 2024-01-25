<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cloan extends CI_Controller {
	function __construct() {
      parent::__construct();
	  $this->load->library('lsettings');
	  $this->load->library('auth');
	  $this->load->library('session');
	  $this->load->model('Settings');
	  $this->auth->check_admin_auth();
	  $this->load->model('Web_settings');

//	   if ($this->session->userdata('user_type') == '2') {
//            $this->session->set_userdata(array('error_message'=>display('you_are_not_access_this_part')));
//            redirect('Admin_dashboard');
//        }
    }

    #================Add Person==============#
	public function add1_person()
	{
		$content = $this->lsettings->add_person1();
		$this->template->full_admin_html_view($content);
	}	
	#================Manage Person==============#
	public function manage1_person()
	{
		#
        #pagination starts
        #
        $config["base_url"] = base_url('Csettings/manage_person/');
        $config["total_rows"] = $this->Settings->person_list_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;
        $config["num_links"] = 5; 
        /* This Application Must Be Used With BootStrap 3 * */
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tag_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        /* ends of bootstrap */
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $links = $this->pagination->create_links();
        #
        #pagination ends
        #  
        $content =$this->lsettings->manage_person($links,$config["per_page"],$page);
		$this->template->full_admin_html_view($content);
	}

    public function submit_person1()
    {
        $data = array(
            'person_id'         =>  $this->auth->generator(10),
            'person_name'       =>  $this->input->post('name'),
            'person_phone'      =>  $this->input->post('phone'),
            'person_address'    =>  $this->input->post('address'),
            'status'            =>  1
        );
        $result = $this->Settings->submit_person($data);
        if ($result) {
            $this->session->set_userdata(array('message'=>display('successfully_added')));
            redirect(base_url('Cloan/manage1_person'));
        }else{
            $this->session->set_userdata(array('error_message'=>display('not_added')));
            redirect(base_url('Cloan/manage1_person'));
        }
    }   

}