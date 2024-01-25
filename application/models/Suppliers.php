<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Suppliers extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	//Count supplier
	public function count_supplier()
	{
		return $this->db->count_all("supplier_information");
	}
	//supplier List
	public function supplier_list()
	{
		$this->db->select('*');
		$this->db->from('supplier_information');
		$this->db->order_by('supplier_id','desc');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
	// manufacter list info
	public function supplier_list_index($per_page,$page)
	{
		$this->db->select('*');
		$this->db->from('supplier_information');
		$this->db->order_by('supplier_id','desc');
		$this->db->limit($per_page,$page);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
	//supplier List For Report
	public function supplier_list_report()
	{
		$this->db->select('*');
		$this->db->from('supplier_information');
		$this->db->order_by('supplier_id','desc');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}

	//supplier List
	public function supplier_list_count()
	{
		$this->db->select('*');
		$this->db->from('supplier_information');
		$this->db->order_by('supplier_id','desc');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->num_rows();	
		}
		return false;
	}
	//Retrieve company Edit Data
	public function retrieve_company()
	{
		$this->db->select('*');
		$this->db->from('company_information');
		$this->db->limit('1');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
	//supplier Search List
	public function supplier_search_item($supplier_id)
	{
		$this->db->select('*');
		$this->db->from('supplier_information');
		$this->db->where('supplier_id',$supplier_id);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
	//Selected supplier List
	public function selected_product($product_id)
	{
		$this->db->select('*');
		$this->db->from('product_information');
		$this->db->where('product_id',$product_id);
		return $query = $this->db->get()->row();
	}
	//Product search item
	public function product_search_item($supplier_id,$product_name){
		$query=$this->db->select('*')
				->from('supplier_product a')
				->join('product_information b','a.product_id = b.product_id')
				->where('a.supplier_id',$supplier_id)
				->like('b.product_model', $product_name, 'after')
				->or_where('a.supplier_id',$supplier_id)
				->like('b.product_name', $product_name, 'after')
				->group_by('a.product_id')
				->order_by('b.product_name','asc')
				->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
	//supplier product
	public function supplier_product($supplier_id){
		$this->db->select('*');
		$this->db->from('product_information');
		$this->db->where('supplier_id',$supplier_id);
		return $query = $this->db->get()->result();
	}
	//Count supplier
	public function supplier_entry($data)
	{

		$this->db->select('*');
		$this->db->from('supplier_information');
		$this->db->where('supplier_name',$data['supplier_name']);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return FALSE;
		}else{

			$this->db->insert('supplier_information',$data);
			//Data is sending for syncronizing
		
			$this->db->select('*');
			$this->db->from('supplier_information');
			$this->db->where('status',1);
			$query = $this->db->get();
			foreach ($query->result() as $row) {
				$json_product[] = array('label'=>$row->supplier_name,'value'=>$row->supplier_id);
			}
			$cache_file = './my-assets/js/admin_js/json/supplier.json';
			$productList = json_encode($json_product);
			file_put_contents($cache_file,$productList);
			return TRUE;
		}
	}
	//Retrieve supplier Edit Data
	public function retrieve_supplier_editdata($supplier_id)
	{
		$this->db->select('*');
		$this->db->from('supplier_information');
		$this->db->where('supplier_id',$supplier_id);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
	//Update Categories
	public function update_supplier($data,$supplier_id)
	{
		$this->db->where('supplier_id',$supplier_id);
		$this->db->update('supplier_information',$data); 	
		$this->db->select('*');
		$this->db->from('supplier_information');
		$this->db->where('status',1);
		$query = $this->db->get();
		foreach ($query->result() as $row) {
			$json_product[] = array('label'=>$row->supplier_name,'value'=>$row->supplier_id);
		}
		$cache_file = './my-assets/js/admin_js/json/supplier.json';
		$productList = json_encode($json_product);
		file_put_contents($cache_file,$productList);
		return true;
	}
	// Delete supplier ledger
	public function delete_supplier_ledger($supplier_id)
	{
		$this->db->where('supplier_id',$supplier_id);
		$this->db->delete('supplier_ledger'); 
			}
// Delete supplier from transection 

   // Delete supplier from transection 
	

	// Delete supplier Item
	public function delete_supplier($supplier_id)
	{
        $supplier_info = $this->db->select('supplier_name')->from('supplier_information')->where('supplier_id',$supplier_id)->get()->row();
        $supplier_head = $supplier_info->supplier_name.'-'.$supplier_id;
        $this->db->where('HeadName', $supplier_head);
        $this->db->delete('acc_coa');

		$this->db->where('supplier_id',$supplier_id);
		$this->db->delete('supplier_information'); 	

		$this->db->select('*');
		$this->db->from('supplier_information');
		$this->db->where('status',1);
		$query = $this->db->get();
		foreach ($query->result() as $row) {
			$json_product[] = array('label'=>$row->supplier_name,'value'=>$row->supplier_id);
		}
		$cache_file = './my-assets/js/admin_js/json/supplier.json';
		$productList = json_encode($json_product);
		file_put_contents($cache_file,$productList);
		return true;
	}
	//Retrieve supplier Personal Data 
	public function supplier_personal_data($supplier_id)
	{
		$this->db->select('*');
		$this->db->from('supplier_information');
		$this->db->where('supplier_id',$supplier_id);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}

	/// supplier person data all
	public function supplier_personal_data_all()
	{
		$this->db->select('*');
		$this->db->from('supplier_information');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
	// second
	public function supplier_personal_data1()
	{
		$this->db->select('*');
		$this->db->from('supplier_information');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
	//Retrieve supplier Purchase Data 
	public function supplier_purchase_data($supplier_id)
	{
		$this->db->select('*');
		$this->db->from('product_purchase');
		$this->db->where(array('supplier_id'=>$supplier_id,'status'=>1));
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
	//supplier Search Data
	public function supplier_search_list($cat_id,$company_id)
	{
		$this->db->select('a.*,b.sub_category_name,c.category_name');
		$this->db->from('suppliers a');
		$this->db->join('supplier_sub_category b','b.sub_category_id = a.sub_category_id');
		$this->db->join('supplier_category c','c.category_id = b.category_id');
		$this->db->where('a.sister_company_id',$company_id);
		$this->db->where('c.category_id',$cat_id);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
	//Supplioer product information
	public function supplier_product_sale($supplier_id){
		$query = $this->db->select('
								a.product_name,
								a.supplier_price,
								b.quantity,
								CAST(sum(b.quantity * b.supplier_rate) AS DECIMAL(16,2)) as total_taka,
								c.date
								')
						
						->from('product_information a')
						->join('invoice_details b','a.product_id = b.product_id','left')
						->join('invoice c','c.invoice_id = b.invoice_id','left')
						->where('a.supplier_id' , $supplier_id)
						->group_by('c.date')
						->order_by('c.date')
						->get();

		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}else{
			return false;
		}
	}
	// Second 
	public function supplier_product_sale1(){
		$this->db->select('*');
		$this->db->from('supplier_ledger');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
	
	//To get certain supplier's chalan info by which this company got products day by day
	public function suppliers_ledger($supplier_id,$start,$end)
	{ 
		$this->db->select('*');
		$this->db->from('supplier_ledger');
		$this->db->where('supplier_id',$supplier_id);
		$this->db->where(array('date >='=>$start , 'date <='=>$end));
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}

	//Retrieve supplier Transaction Summary
	public function suppliers_transection_summary($supplier_id,$start,$end)
	{
	 	$result=array();
		$this->db->select_sum('amount','total_credit');
		$this->db->from('supplier_ledger');
		$this->db->where(array('d_c'=>'c','status'=>1));
		$this->db->where(array('supplier_id' => $supplier_id,'date >='=>$start , 'date <='=>$end));
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			$result[]=$query->result_array();	
		}
		
		$this->db->select_sum('amount','total_debit');
		$this->db->from('supplier_ledger');
		$this->db->where(array('d_c'=>'d','status'=>1));
		$this->db->where(array('supplier_id' => $supplier_id,'date >='=>$start , 'date <='=>$end));
		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {
			$result[]=$query->result_array();	
		}
		return $result;
	}

	public function suppliers_transection_summary1()
	{
		$result=array();
		$this->db->select_sum('amount','total_credit');
		$this->db->from('supplier_ledger');
		$this->db->where(array('d_c'=>'c','status'=>1));
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			$result[]=$query->result_array();	
		}
		
		$this->db->select_sum('amount','total_debit');
		$this->db->from('supplier_ledger');
		$this->db->where(array('d_c'=>'d','status'=>1));
		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {
			$result[]=$query->result_array();	
		}
		return $result;
	}
	//Findings a certain supplier products sales information
	public function supplier_sales_details()
	{
		$supplier_id=$this->uri->segment(3);
		$start=$this->uri->segment(4);
		$end=$this->uri->segment(5);

		$this->db->select('
					date,
					product_name,
					product_model,
					product_id,
					quantity,
					supplier_rate,
					CAST(quantity*supplier_rate AS DECIMAL(16,2) ) as total
				');
		$this->db->from('view_g_sales_abreport');
		$this->db->where('supplier_id',$supplier_id);
		$this->db->where(array('date >='=>$start , 'date <='=>$end));
		$this->db->order_by('date','desc');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
	

	
	
	################## Ssales & Payment Details ####################
	public function sales_payment_actual($per_page,$page)
	{
		$supplier_id=$this->uri->segment(3);
		$start=$this->uri->segment(4);
		$end=$this->uri->segment(5);

		$this->db->select('*');
		$this->db->from('supplier_ledger');
		$this->db->where('supplier_id',$supplier_id);
		$this->db->where(array('date >='=>$start , 'date <='=>$end));
		$this->db->limit($per_page,$page);
		$this->db->order_by('date');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		
		return false;
	}	
	################## Ssales & Payment Details ####################
	public function sales_payment_actual_count()
	{
		$supplier_id=$this->uri->segment(3);
	

		$start=$this->uri->segment(4);
		$end=$this->uri->segment(5);

		$this->db->select('*');
		$this->db->from('supplier_ledger');
		$this->db->where('supplier_id',$supplier_id);
		$this->db->where(array('date >='=>$start , 'date <='=>$end));
		$this->db->order_by('date');
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return $query->num_rows();	
		}
		
		return false;
	}
################## total sales & payment information ####################
	public function sales_payment_actual_total()
	{
		$supplier_id=$this->uri->segment(3);
		$start=$this->uri->segment(4);
		$end=$this->uri->segment(5);


		$this->db->select_sum('sub_total');
		$this->db->from('sales_actual');
		$this->db->where('supplier_id',$supplier_id);
		//$this->db->where(array('date >='=>$start , 'date <='=>$end));
		$this->db->where('sub_total >',0);
		$query = $this->db->get();
		$result=$query->result_array();
		$data[0]["debit"]=$result[0]["sub_total"];
	
		$this->db->select_sum('sub_total');
		$this->db->from('sales_actual');
		$this->db->where('supplier_id',$supplier_id);
		//$this->db->where(array('date >='=>$start , 'date <='=>$end));
		$this->db->where('sub_total <',0);
		$query = $this->db->get();
		$result=$query->result_array();
		$data[0]["credit"]=$result[0]["sub_total"];
		
		$data[0]["balance"]=$data[0]["debit"]+$data[0]["credit"];
		
		return $data;
	}
//To get certain supplier's payment info which was paid day by day
	public function supplier_paid_details($supplier_id)
	{
		$this->db->select('*');
		$this->db->from('supplier_ledger');
		$this->db->where('supplier_id',$supplier_id);
		$this->db->where('chalan_no',NULL);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
//To get certain supplier's chalan info by which this company got products day by day
	public function supplier_chalan_details($supplier_id)
	{ 
		$this->db->select('*');
		$this->db->from('supplier_ledger');
		$this->db->where('supplier_id',$supplier_id);
		$this->db->where('deposit_no',NULL);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}

	#############################################################################################Search supplier report by id and datebetween####################################################
	public function suppliers_transection_report($supplier_id,$start,$end)
	{
	 $result=array();
		
		$this->db->select('
			CAST(amount AS DECIMAL(16,2)) as total_debit,
			date as ledger_date,
			description,
			deposit_no

			');
		$this->db->from('supplier_ledger');
		$this->db->where(array('date >='=>$start , 'date <='=>$end));
      $this->db->where('supplier_id',$supplier_id);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}else{
			return false;
		}
	}

	//Retrieve supplier Transaction Summary by supplier id
	public function suppliers_transection_summary_info($supplier_id)
	{
	 	$result=array();
		$this->db->select_sum('amount','total_credit');
		$this->db->from('supplier_ledger');
		$this->db->where(array('d_c'=>'c'));
		$this->db->where(array('supplier_id' => $supplier_id));
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			$result[]=$query->result_array();	
		}
		
		$this->db->select_sum('amount','total_debit');
		$this->db->from('supplier_ledger');
		$this->db->where(array('d_c'=>'d'));
		$this->db->where(array('supplier_id' => $supplier_id));
		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {
			$result[]=$query->result_array();	
		}
		return $result;
	}


	public function supplier_product_sale_info($supplier_id){
		$this->db->select('*');
		$this->db->from('supplier_ledger');
		$this->db->where('supplier_id',$supplier_id);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
	// ACC Coa head code
	      public function headcode(){

        $query=$this->db->query("SELECT MAX(HeadCode) as HeadCode FROM acc_coa WHERE HeadLevel='3' And HeadCode LIKE '5020500%'");
        return $query->row();

    }
}