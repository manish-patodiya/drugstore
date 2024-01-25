<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Synchronizer_model extends CI_Model {
 
	public function create($data = array())
	{
		return $this->db->insert('synchronizer_setting', $data);
	}

	public function read()
	{
		$query =  $this->db->select('*')
			->from('synchronizer_setting')
			->get();


		if ($query->num_rows() > 0) {
		 	return $query->result_array();	
		}
		return false;
	}

	public function check_exists()
	{
		$num_rows = $this->db->select('*')
			->from('synchronizer_setting')
			->get()
			->num_rows();
		if ($num_rows > 0) {
			return true;
		} else {
			return false; 
		}
	}

	public function update($data = array())
	{
		return $this->db->update("synchronizer_setting", $data);
	}

}
