<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Companies extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	#============Count Company=============#
	public function count_company()
	{
		return $this->db->count_all("company_information");
	}
	#=============Company List=============#
	public function company_list($limit,$page)
	{
		$this->db->select('*');
		$this->db->from('company_information');
		$this->db->limit($limit, $page);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
	#==============Company search list==============#
	public function company_search_item($company_id)
	{
		$this->db->select('*');
		$this->db->from('company_information');
		$this->db->where('company_id',$company_id);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
	#============Insert company to database========#
	public function company_entry($data)
	{
		$this->db->insert('company_information',$data);
		
		$this->db->select('*');
		$this->db->from('company_information');
		$this->db->where('status',1);
		$query = $this->db->get();
		foreach ($query->result() as $row) {
			$json_product[] = array('label'=>$row->company_name,'value'=>$row->company_id);
		}
		$cache_file = './my-assets/js/admin_js/json/company.json';
		$productList = json_encode($json_product);
		file_put_contents($cache_file,$productList);
	}
	#==============Company edit data===============#
	public function retrieve_company_editdata($company_id)
	{
		$this->db->select('*');
		$this->db->from('company_information');
		$this->db->where('company_id',$company_id);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
	#==============Update company==================#
	public function update_company($data,$company_id)
	{

		$this->db->where('company_id',$company_id);
		$this->db->update('company_information',$data); 
	
		
		$this->db->select('*');
		$this->db->from('company_information');
		$this->db->where('status',1);
		$query = $this->db->get();
		foreach ($query->result() as $row) {
			$json_product[] = array('label'=>$row->company_name,'value'=>$row->company_id);
		}
		$cache_file = './my-assets/js/admin_js/json/company.json';
		$productList = json_encode($json_product);
		file_put_contents($cache_file,$productList);
		return true;
	}

	//Retrieve manufacturer Personal Data 
	public function manufacturer_personal_data($manufacturer_id)
	{
		$this->db->select('*');
		$this->db->from('manufacturer_information');
		$this->db->where('manufacturer_id',$manufacturer_id);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
	//Retrieve manufacturer Purchase Data 
	public function manufacturer_purchase_data($manufacturer_id)
	{
		$this->db->select('*');
		$this->db->from('product_purchase');
		$this->db->where(array('manufacturer_id'=>$manufacturer_id,'status'=>1));
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
	//manufacturer Search Data
	public function manufacturer_search_list($cat_id,$company_id)
	{
		$this->db->select('a.*,b.sub_category_name,c.category_name');
		$this->db->from('manufacturers a');
		$this->db->join('manufacturer_sub_category b','b.sub_category_id = a.sub_category_id');
		$this->db->join('manufacturer_category c','c.category_id = b.category_id');
		$this->db->where('a.sister_company_id',$company_id);
		$this->db->where('c.category_id',$cat_id);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
	
	//To get certain manufacturer's chalan info by which this company got products day by day
	public function manufacturers_ledger($manufacturer_id)
	{ 
		$this->db->select('*');
		$this->db->from('manufacturer_ledger');
		$this->db->where('manufacturer_id',$manufacturer_id);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
//Retrieve manufacturer Transaction Summary
	public function manufacturers_transection_summary($manufacturer_id)
	{
	 $result=array();
		$this->db->select_sum('amount','total_credit');
		$this->db->from('manufacturer_ledger');
		$this->db->where(array('manufacturer_id'=>$manufacturer_id,'deposit_no'=>NULL,'status'=>1));
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			$result[]=$query->result_array();	
		}
		
		$this->db->select_sum('amount','total_debit');
		$this->db->from('manufacturer_ledger');
		$this->db->where(array('manufacturer_id'=>$manufacturer_id,'chalan_no'=>NULL,'status'=>1));
		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {
			$result[]=$query->result_array();	
		}
		return $result;
	
	}
//Findings a certain manufacturer products sales information
	public function manufacturer_sales_details($manufacturer_id)
	{
		$from_date = $this->input->post('from_date');		
		$to_date = $this->input->post('to_date');
		
		$this->db->select('date,product_name,product_model,product_id,cartoon,quantity,manufacturer_rate,(quantity*manufacturer_rate) as total');
		$this->db->from('sales_report');
		$this->db->where('manufacturer_id',$manufacturer_id);
		if($from_date!=null AND $to_date!=null)
		{
			$this->db->where('date >',$from_date.' 00:00:00');
			$this->db->where('date <',$to_date.' 00:00:00');
		}
		$this->db->order_by('date','desc');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
	
	public function manufacturer_sales_summary($manufacturer_id)
	{
		$from_date = $this->input->post('from_date');		
		$to_date = $this->input->post('to_date');
		
		
		$this->db->select('date,product_name,product_model,product_id,sum(cartoon) as cartoon, sum(quantity) as quantity ,manufacturer_rate,sum(quantity*manufacturer_rate) as total');
		$this->db->from('sales_report');
		$this->db->where('manufacturer_id',$manufacturer_id);
		if($from_date!=null AND $to_date!=null)
		{
			$this->db->where('date >=',$from_date.' 00:00:00');
			$this->db->where('date <=',$to_date.' 00:00:00');
		}
		$this->db->group_by('product_id,date,manufacturer_rate');
		$this->db->order_by('date','desc');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		
		
		return false;
	}
	
	################## Ssales & Payment Details ####################
	public function sales_payment_actual($manufacturer_id,$limit,$start_record,$from_date=null,$to_date=null)
	{
		$this->db->select('*');
		$this->db->from('sales_actual');
		$this->db->where('manufacturer_id',$manufacturer_id);
		if($from_date!=null AND $to_date!=null)
		{
			$this->db->where('date >',$from_date.' 00:00:00');
			$this->db->where('date <',$to_date.' 00:00:00');
		}
		$this->db->limit($limit, $start_record);
		$this->db->order_by('date');
		$query = $this->db->get();
		//echo $str = $this->db->last_query();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		
		return false;
	}
################## total sales & payment information ####################
	public function sales_payment_actual_total($manufacturer_id)
	{
		$this->db->select_sum('sub_total');
		$this->db->from('sales_actual');
		$this->db->where('manufacturer_id',$manufacturer_id);
		$this->db->where('sub_total >',0);
		$query = $this->db->get();
		$result=$query->result_array();
		$data[0]["debit"]=$result[0]["sub_total"];
	
		$this->db->select_sum('sub_total');
		$this->db->from('sales_actual');
		$this->db->where('manufacturer_id',$manufacturer_id);
		$this->db->where('sub_total <',0);
		$query = $this->db->get();
		$result=$query->result_array();
		$data[0]["credit"]=$result[0]["sub_total"];
		
		$data[0]["balance"]=$data[0]["debit"]+$data[0]["credit"];
		
		return $data;
	}
//To get certain manufacturer's payment info which was paid day by day
	public function manufacturer_paid_details($manufacturer_id)
	{
		$this->db->select('*');
		$this->db->from('manufacturer_ledger');
		$this->db->where('manufacturer_id',$manufacturer_id);
		$this->db->where('chalan_no',NULL);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
//To get certain manufacturer's chalan info by which this company got products day by day
	public function manufacturer_chalan_details($manufacturer_id)
	{ 
		$this->db->select('*');
		$this->db->from('manufacturer_ledger');
		$this->db->where('manufacturer_id',$manufacturer_id);
		$this->db->where('deposit_no',NULL);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}

}