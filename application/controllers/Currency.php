<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Currency extends CI_Controller {

    public $menu;

    function __construct() {
        parent::__construct();
        $this->load->library('auth');
        $this->load->library('session');
        $this->load->model('Settings');
        $this->auth->check_admin_auth();
        $this->template->current_menu = 'web_setting';
    }

    public function index() {
    $data['title'] = display('currency_list');
    $data['list'] = $this->Settings->currencylist();
    $content = $this->parser->parse('settings/currency_list', $data, true);
    $this->template->full_admin_html_view($content); 
    }
    // Add Currency
    public function currency_form($id = null){
        if(!empty($id)){
            $data['title'] = 'Currency Update';
        }else{
             $data['title'] = 'Add Currency';
        }
    $data['cuerrencyinfo'] = $this->Settings->currencyinfo($id);
    $content = $this->parser->parse('settings/currency_form', $data, true);
    $this->template->full_admin_html_view($content); 
    }
    public function submit_currency(){
    $data =[
   'id'            => $this->input->post('id'),
   'currency_name' => $this->input->post('currency_name'),
   'icon'          => $this->input->post('currency_icon'),
    ];
    if(!empty($this->input->post('id'))){
         $this->db->where('id',$this->input->post('id'))
         ->update('currency_tbl',$data);
          $this->session->set_userdata(array('message' => display('successfully_updated')));
          redirect("Currency");
    }else{
        $this->db->insert('currency_tbl',$data);
         $this->session->set_userdata(array('message' => display('successfully_inserted')));
         redirect("Currency");
    }

    }

}
