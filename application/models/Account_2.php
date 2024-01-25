<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Account_2 extends CI_Model{
	 function __construct(){
		parent::__construct();
	}


public function add_account($data = array())
	{
		return $this->db->insert('account_2', $data);
	}
	public function account_list()
	{
		$query=$this->db->select('a.*,b.*')

				->from('account_2 a')
				->join('transection b','a.parent_id=b.transection_category','left')
				->order_by('a.account_id','desc')
				->group_by('a.account_id')
				->limit('500')
				->get();

		if ($query->num_rows() > 0) {
		 	return $query->result_array();	
		}
		return false;

	}

	public function delete_account($id){
		$this->db->where('account_id',$id);
		$this->db->delete('account_2');
		return true;
	}
	public function update_account($data,$id){
		$this->db->where('account_id',$id);
		$this->db->update('account_2',$data);
		return true;

	}
	public function account_updata($id){
		 $this->db->select('*');
		 $this->db->from('account_2');
		 $this->db->where('account_id',$id);
		 $query=$this->db->get();
		 if($query->num_rows() > 0){
		 	return $query->result_array();
		 }
		 return false;
	}

	 public function get_details($transection_category){

  
  $this->db->select('
   i.*, i.amount as debit,
    i.pay_amount as credit,i.transaction_id,i.relation_id,f.customer_name,,h.manufacturer_name,k.person_name,m.parent_id');
  $this->db->from('transection i');
  $this->db->join('customer_information f','i.relation_id=f.customer_id','left');
  $this->db->join('account_2 m','i.transection_category=m.parent_id','left');
   $this->db->join('manufacturer_information h','i.relation_id=h.manufacturer_id','left');
   $this->db->join('person_information k','i.relation_id=k.person_id','left');
  
  $this->db->where("i.transection_category",$transection_category);
 $query=$this->db->get();

        return $query->result_array();

    }
    // Account view details
     public function date_summary_query($category_id)
  {
    $this->db->select('
     i.*, i.amount as debit,
      i.pay_amount as credit,q.*,r.*,s.*');
    $this->db->from('transection i');
    $this->db->join('view_customer_transection q','i.transaction_id=q.transaction_id','left');
    $this->db->join('view_manufacturer_transection r','i.transaction_id=r.transaction_id','left');
     $this->db->join('view_person_transection s','i.transaction_id=s.transaction_id','left');
   
    $this->db->where('i.transection_category',$category_id);
  $this->db->group_by('i.transaction_id');
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result_array();  
    }
    return false;
  } 

}