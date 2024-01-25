<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Settings extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	//BANK LIST
	public function get_bank_list()
	{
		$this->db->select('
				bank_add.*,
				sum(bank_summary.dr) as debit,
				sum(bank_summary.cr) as credit
			');
		$this->db->from('bank_add');
		$this->db->join('bank_summary','bank_summary.bank_id = bank_add.bank_id','left');
		$this->db->group_by('bank_add.bank_id');
		$this->db->where('bank_add.status',1);

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}	
	//Person  List
	public function person_list()
	{
		$this->db->select('*');
		$this->db->from('person_information');
		$this->db->where('status',1);

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}	
	//Person  List
	public function person_list_limt($per_page,$limit)
	{
		$this->db->select('*');
		$this->db->from('person_information');
		$this->db->where('status',1);
		$this->db->limit($per_page,$limit);

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
	//Selecst Person
	public function select_person_by_id($person_id)
	{
		$this->db->select('*');
		$this->db->from('person_information');
		$this->db->where('person_id',$person_id);
		$this->db->where('status',1);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}

	// personal loan person id selecetd
	public function select_loan_person_by_id($person_id)
	{
		$this->db->select('*');
		$this->db->from('pesonal_loan_information');
		$this->db->where('person_id',$person_id);
		$this->db->where('status',1);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
	//update date for loan
	public function updata_loan_id($person_id)
	{
		$this->db->select('a.*,b.*');
		$this->db->from('personal_loan a');
		$this->db->join('pesonal_loan_information  b','a.person_id=b.person_id','left');
		$this->db->where('per_loan_id',$person_id);
		
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}

	//Person  List Count
	public function person_list_count()
	{
		$this->db->select('*');
		$this->db->from('person_information');
		$this->db->where('status',1);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->num_rows();	
		}
		return false;
	}

	public function person_loan_count()
	{
		$this->db->select('*');
		$this->db->from('personal_loan');
		
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->num_rows();	
		}
		return false;
	}

	//Retrieve customer All data 
	public function personledger_tradational($person_id)
	{

		$this->db->select('
			person_ledger.*,
			sum(person_ledger.debit) as debit,
			sum(person_ledger.credit) as credit
			');
		$this->db->from('person_ledger');
		$this->db->where('person_id',$person_id);
		$this->db->order_by('id','asc');
		$this->db->group_by('transaction_id');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
	//Personal loan detail ledger
	public function personal_loan_tradational($person_id)
	{

		$this->db->select('
			personal_loan.*,
			sum(personal_loan.debit) as debit,
			sum(personal_loan.credit) as credit
			');
		$this->db->from('personal_loan');
		$this->db->where('person_id',$person_id);
		$this->db->group_by('transaction_id');
		$this->db->order_by('per_loan_id','asc');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
	//personal loan limit 
	public function person_list_limt_loan($per_page,$limit)
	{
    $this->db->select('personal_loan.person_id,personal_loan.debit as debit,personal_loan.credit as credit,
				pesonal_loan_information.*');
    $this->db->select_sum('personal_loan.debit');
    $this->db->select_sum('personal_loan.credit');
	$this->db->from('pesonal_loan_information');
	$this->db->join('personal_loan','personal_loan.person_id = pesonal_loan_information.person_id','left');
    $this->db->group_by('pesonal_loan_information.person_id');
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
			return $query->result_array();	
	}
	return false;
       
		// $this->db->select('
		// 		pesonal_loan_information.*,
		// 		sum(personal_loan.debit) as debit,
		// 		sum(personal_loan.credit) as credit
		// 	');
		// $this->db->from('pesonal_loan_information');
		// $this->db->join('personal_loan','pesonal_loan_information.person_id = personal_loan.person_id','left');
		// $this->db->where('pesonal_loan_information.status',1);
		// //$this->db->group_by('pesonal_loan_information.person_id');
		// $this->db->limit($per_page,$limit);
		// $query = $this->db->get();

		// if ($query->num_rows() > 0) {
		// 	return $query->result_array();	
		// }
		// return false;
	}
	// personal loan list
	public function loan_list_personal($per_page,$limit)
	{
		$this->db->select('a.*,b.*');
		$this->db->from('personal_loan a');
		$this->db->join('pesonal_loan_information  b','a.person_id=b.person_id','left');
		
		$this->db->limit($per_page,$limit);

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
	//loan person list for update form
	public function loan_updatlist_personal()
	{
		$this->db->select('*');
		$this->db->from('pesonal_loan_information');

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}

	// submit person for personal loan
	public function submit_person_personal_loan( $data )
	{
		$result = $this->db->insert('pesonal_loan_information',$data);
		if ($result) {
		$this->db->select('*');
			$this->db->from('pesonal_loan_information');
			$query = $this->db->get();
			foreach ($query->result() as $row) {
				$json_loan[] = array('label'=>$row->person_name,'value'=>$row->person_id);
			}
			$cache_file = './my-assets/js/admin_js/json/loan_personl.json';
			$loanList = json_encode($json_loan);
			file_put_contents($cache_file,$loanList);
			return TRUE;
			
		}else{
			return false;
		}
	}
	
	public function person_list_personal_loan()
	{
		$this->db->select('*');
		$this->db->from('pesonal_loan_information');
		$this->db->where('status',1);

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}

	//Retrieve customer All data 
	public function ledger_search_by_date($person_id,$from_date,$to_date)
	{

		$this->db->select('
			person_ledger.*,
			sum(person_ledger.debit) as debit,
			sum(person_ledger.credit) as credit
			');
		$this->db->from('person_ledger');
		$this->db->where('person_id',$person_id);
		$this->db->where('date >=', $from_date);
		$this->db->where('date <=', $to_date);
		$this->db->group_by('transaction_id');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}

	//
	public function ledger_search_by_date_count($person_id,$from_date,$to_date){
		$this->db->select('
			person_ledger.*,
			sum(person_ledger.debit) as debit,
			sum(person_ledger.credit) as credit
			');
		$this->db->from('person_ledger');
		$this->db->where('person_id',$person_id);
		$this->db->where('date >=', $from_date);
		$this->db->where('date <=', $to_date);
		$this->db->group_by('transaction_id');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->num_rows();	
		}
		return false;
	}

	//Get bank by id
	public function get_bank_by_id($bank_id)
	{
		$this->db->select('*');
		$this->db->from('bank_add');
		$this->db->where('bank_id',$bank_id);
		$this->db->where('status',1);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
	//Bank updaet by id
	public function bank_update_by_id($bank_id)
	{
		if ($_FILES['signature_pic']['name']) {
			
			$config['upload_path']          = './my-assets/image/logo/';
	        $config['allowed_types']        = 'gif|jpg|png|jpeg|JPEG|GIF|JPG|PNG';
	        $config['max_size']             = "*";
	        $config['max_width']            = "*";
	        $config['max_height']           = "*";
	        $config['encrypt_name'] 		= TRUE;

	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('signature_pic'))
	        {
	            $error = array('error' => $this->upload->display_errors());
	            $this->session->set_userdata(array('error_message'=> $this->upload->display_errors()));
	            redirect(base_url('Csettings/index'));
	        }
	        else
	        {
	        	$image =$this->upload->data();
	        	$signature_pic = base_url()."my-assets/image/logo/".$image['file_name'];
	        }
		}
        $old_head = $this->input->post('oldname');
		$old_logo = $this->input->post('old_pic');
        $bank_coa = [
             'HeadName'         => $this->input->post('bank_name'),
         ];
		$data = array(
			'bank_id'		=>	$this->auth->generator(10),
			'bank_name'		=>	$this->input->post('bank_name'),
			'ac_name'		=>	$this->input->post('ac_name'),
			'ac_number'		=>	$this->input->post('ac_no'),
			'branch'		=>	$this->input->post('branch'),
			'signature_pic'	=>	(!empty($signature_pic)?$signature_pic:$old_logo),
			'status'		=>  1
		
		);

		$data['bank_name']=$this->input->post('bank_name');
		$this->db->where('bank_id',$bank_id);
		$this->db->update('bank_add',$data); 
		$this->db->where('HeadName',$old_head);
		$this->db->update('acc_coa',$bank_coa); 
		return true;
	}
	//==========Bank Ledger=============//
	public function bank_ledger($bank_id){
		$this->db->select('*');
		$this->db->from('bank_summary');
		$this->db->where('bank_id',$bank_id);
		$this->db->limit('500');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;	
	}	
	//==========Bank Info=============//
	public function bank_info($bank_id){
		$this->db->select('*');
		$this->db->from('bank_add');
		$this->db->where('bank_id',$bank_id);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;	
	}

	//Table list
	public function table_list($per_page,$page)
	{
		$this->db->select('*');
		$this->db->from('accounts');
		$this->db->limit($per_page,$page);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}	
	//Table list _count
	public function table_list_count()
	{
		$this->db->select('*');
		$this->db->from('accounts');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->num_rows();	
		}
		return false;
	}
	//COUNT PRODUCT
	public function bank_entry($data )
	{
		$this->db->insert('bank_add',$data);
	}
	//Add person
	public function submit_person( $data )
	{
		$result = $this->db->insert('person_information',$data);
		if ($result) {
		$this->db->select('*');
			$this->db->from('person_information');
			$query = $this->db->get();
			foreach ($query->result() as $row) {
				$json_loan[] = array('label'=>$row->person_name,'value'=>$row->person_id);
			}
			$cache_file = './my-assets/js/admin_js/json/loan.json';
			$loanList = json_encode($json_loan);
			file_put_contents($cache_file,$loanList);
			return TRUE;
			
		}else{
			return false;
		}
	}		

	//Update person 
	public function update_person( $data,$person_id )
	{
		$this->db->where('person_id',$person_id);
		$result = $this->db->update('person_information',$data);
		
		if ($result) {
			return true;
		}else{
			return false;
		}
	}	

	// Update loan 
		public function update_per_loan( $data,$person_id )
	{
		$this->db->where('per_loan_id',$person_id);
		$result = $this->db->update('personal_loan',$data);
		
		if ($result) {
			return true;
		}else{
			return false;
		}
	}	
// update loan Person
	public function update_loan_person( $data,$person_id )
	{
		$this->db->where('person_id',$person_id);
		$result = $this->db->update('pesonal_loan_information',$data);
		
		if ($result) {
			return true;
		}else{
			return false;
		}
	}	
	//Add loan
	public function submit_loan( $data )
	{
		$result = $this->db->insert('person_ledger',$data);
		if ($result) {
			$cache_file = './my-assets/js/admin_js/json/loan.json';
			file_put_contents($cache_file);
			return TRUE;
		}else{
			return false;
		}
	}	

		public function submit_loan_personal($data)
	{
		$result = $this->db->insert('personal_loan',$data);
		if ($result) {
			$cache_file = './my-assets/js/admin_js/json/loan.json';
			$loanList = json_encode($result);
			file_put_contents($cache_file,$loanList);
			return TRUE;
		}else{
			return false;
		}
	}	


	// loan person select list
	public function loan_list()
	{
		$this->db->select('*');
		$this->db->from('person_information');
		$this->db->order_by('person_id','desc');
		$this->db->limit('500');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}	
	//Submit payment
	public function submit_payment( $data )
	{
		$result = $this->db->insert('person_ledger',$data);
		if ($result) {
			return true;
		}else{
			return false;
		}
	}	
	####===========Submit payment personal loan ==================###
	public function submit_payment_per_loan( $data )
	{
		$result = $this->db->insert('personal_loan',$data);
		if ($result) {
			return true;
		}else{
			return false;
		}
	}
	public function bank_debit_credit_manage_entry( $data )
	{
		$this->db->insert('bank_summary',$data);
	}
	//Table create
	public function table_create($account_id)
	{
		$account_name=$this->input->post('account_name');
		$status=$this->input->post('account_type');

		$account_exists = $this->db->select('*')
								->from('accounts')
								->where('account_name',$account_name)
								->get()
								->num_rows();
		if ($account_exists > 0) {
			$this->session->set_userdata(array('error_message'=>display('account_already_exists')));
			return true;
		}else{
			if($status==1){$account_table_name="outflow_".$account_id;}else{$account_table_name="inflow_".$account_id ;}
		
			$data = array(
					'account_id'		=>	$this->auth->generator(10),
					'account_name'		=>	$account_name,
					'account_table_name'=>	$account_table_name,
					'status'			=>	$status
				
				);
			
			$this->db->insert('accounts',$data);
			$sql="CREATE TABLE IF NOT EXISTS ".$account_table_name." (
					`transection_id` varchar(200) NOT NULL,
					`tracing_id` varchar(200) NOT NULL,
					`payment_type` varchar(10) NOT NULL,
					`date` varchar(255) NOT NULL,
					`amount` float NOT NULL,
					`description` varchar(255) NOT NULL,
					`status` int(5) NOT NULL,
					 PRIMARY KEY (`transection_id`)
				) ENGINE=InnoDB DEFAULT CHARSET=latin1";
			$this->db->query($sql);
			$this->session->set_userdata(array('message'=>display('successfully_created')));
		}
	}
	//Retrive table data by id
	public function retrive_table_data($account_id){
		$this->db->select('*');
		$this->db->from('accounts');
		$this->db->where('account_id',$account_id);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
	//Update table data by id
	public function update_table_data($account_name,$account_id){

		$account_exists = $this->db->select('*')
								->from('accounts')
								->where('account_name',$account_name['account_name'])
								->get()
								->num_rows();
		if ($account_exists > 0) {
			$this->session->set_userdata(array('error_message'=>display('account_already_exists')));
			return false;
		}else{
			$this->db->where('account_id',$account_id);
			$this->db->update('accounts',$account_name);
			$this->session->set_userdata(array('message'=>display('successfully_updated')));
			return true;
		}
	}
	//Select customer from invoice
	public function customer_info(){
		$query = $this->db->select('*')
						->from('customer_information')
						->join('invoice','invoice.customer_id = customer_information.customer_id')
						->group_by('invoice.customer_id')
						->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}
	//Retrive product info
	public function product_info(){

		$product_id = $this->input->post('product_model');
		$customer_id = $this->input->post('customer_name');
		$from = $this->input->post('from');
		$to = $this->input->post('to');

		$query = $this->db->select('
								invoice.date,
								invoice_details.*,
								product_information.product_model
								')		
							->from('invoice_details')
							->join('product_information','invoice_details.product_id = product_information.product_id')
							->join('invoice','invoice.invoice_id = invoice_details.invoice_id')
							->where('invoice.customer_id',$customer_id)
							->where('invoice.date >=',$from)
							->where('invoice.date <=',$to)
							->where('invoice_details.product_id',$product_id)
							->get();

		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}

	    // Currency list
 public function currencylist(){
         $this->db->select('*');
        $this->db->from('currency_tbl');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return false;
 }
 public function currencyinfo($id){
return $info = $this->db->select('*')->from('currency_tbl')->where('id',$id)->get()->row();
 }
 // coa head code
         public function headcode(){
        $query=$this->db->query("SELECT MAX(HeadCode) as HeadCode FROM acc_coa WHERE HeadLevel='4' And HeadCode LIKE '1020102%'");
        return $query->row();

    }

        //setting update data
    public function tax_setting_info(){
        $this->db->select('*');
        $this->db->from('tax_settings');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
 }
}