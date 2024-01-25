<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api_model extends CI_Model {

	private $table  = "language";
    private $phrase = "phrase";

	public function __construct(){
		parent::__construct();
	}
	//Retrieve Setting Edit Data
    public function category_name(){
    	return $this->db->select('category_name')
    	         ->from('product_category')
    	         ->get()
    	         ->result();
    }
	
}