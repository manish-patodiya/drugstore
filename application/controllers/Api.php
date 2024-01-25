<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Api extends CI_Controller{
    public $menu;

    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('api_model');
      
    }
   public function api(){
        $category_name = $this->api_model->category_name();
        $obj = (object) [
          'category' => $category_name
        ];
        echo json_encode($obj);
    }

    

}