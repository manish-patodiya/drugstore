<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Csms extends CI_Controller {
	
	public $company_id;
	function __construct() {
        parent::__construct(); 
		$this->load->library('auth');
		$this->auth->check_admin_auth();
		$this->load->library('session');
		$this->load->model('Web_settings');
		
		
    }

  
	#===========Purchase search============#
	public function configure()
	{
		$data['configdata'] = $this->db->select('*')->from('sms_settings')->get()->result_array();
		$data['title'] = 'sms configuration';
		$content = $this->parser->parse('sms/configure_form',$data,true);
		$this->template->full_admin_html_view($content);
	}
	public function add_update_configure(){
       
      $id = $this->input->post('id');
		$data=array(
				'url' 	      => $this->input->post('url'),
				'sender_id'   => $this->input->post('sender_id'),
				'api_key' 	  => $this->input->post('api_key'),
				'isinvoice'   => $this->input->post('isinvoice'),
				'ispurchase'  => $this->input->post('ispurchase'),
				'isservice'   => $this->input->post('isservice'),
				'ispayment'   => $this->input->post('ispayment'),
				'isreceive'   => $this->input->post('isreceive'),

				);

	if(!empty($id)){
           $this->db->where('id', $id);
			$this->db->update('sms_settings',$data);
	}else{
      $this->db->insert('sms_settings',$data);
	}
	$this->session->set_userdata(array('message'=>display('successfully_updated')));
	redirect('Csms/configure');
 }
	
}