<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Lsupplier {

	//supplier add form
	public function supplier_add_form()
	{
		$CI =& get_instance();
		$CI->load->model('suppliers');
		$data = array(
				'title' => display('add_supplier')
			);
		$supplierForm = $CI->parser->parse('supplier/add_supplier_form',$data,true);
		return $supplierForm;
	}
	
	//Insert supplier
	public function insert_supplier($data)
	{
		$CI =& get_instance();
		$CI->load->model('suppliers');
        $result = $CI->suppliers->supplier_entry($data);
		if ($result == TRUE) {
			return TRUE;
		}else{
			return FALSE;
		}
	}

	//supplier List
	public function supplier_list($links,$per_page,$page)
	{
		$CI =& get_instance();
		$CI->load->model('suppliers');
		$suppliers_list = $CI->suppliers->supplier_list_index($per_page,$page);
		$i=0;
		if(!empty($suppliers_list)){	
			foreach($suppliers_list as $k=>$v){$i++;
			   $suppliers_list[$k]['sl']=$i;
			}
		}

		$data = array(
			'title' => display('manage_suppiler'),
			'suppliers_list' => $suppliers_list,
			'links' 			=> $links,
		);

		$supplierList = $CI->parser->parse('supplier/supplier',$data,true);
		return $supplierList;
	}

	//supplier Search Item
	public function supplier_search_item($supplier_id)
	{
		$CI =& get_instance();
		$CI->load->model('suppliers');
		$suppliers_list = $CI->suppliers->supplier_search_item($supplier_id);
		$i=0;
		if ($suppliers_list) {
			foreach($suppliers_list as $k=>$v){$i++;
           $suppliers_list[$k]['sl']=$i;
		}

		$data = array(
				'title'              => display('manage_suppiler'),
				'suppliers_list' => $suppliers_list
			);
		$supplierList = $CI->parser->parse('supplier/supplier',$data,true);
		return $supplierList;

		}else{
			redirect('Csupplier/manage_supplier');
		}
	}

	//Product search by supplier
	public function product_by_search(){
		$CI =& get_instance();
		$CI->load->model('suppliers');
		$suppliers_list = $CI->suppliers->product_search_item($supplier_id);
		$i=0;
		foreach($suppliers_list as $k=>$v){$i++;
           $suppliers_list[$k]['sl']=$i;
		}
		$data = array(
				'title'              => display('manage_supplier'),
				'suppliers_list' => $suppliers_list
			);
		$supplierList = $CI->parser->parse('supplier/supplier',$data,true);
		return $supplierList;
	}

	//supplier Edit Data
	public function supplier_edit_data($supplier_id)
	{
		$CI =& get_instance();
		$CI->load->model('suppliers');
		$supplier_detail = $CI->suppliers->retrieve_supplier_editdata($supplier_id);
		$data=array(
		'title' 		   => display('supplier_edit'),
		'supplier_id'  => $supplier_detail[0]['supplier_id'],
		'supplier_name'=> $supplier_detail[0]['supplier_name'],
		'address' 		   => $supplier_detail[0]['address'],
		'mobile' 		   => $supplier_detail[0]['mobile'],
		'details' 		   => $supplier_detail[0]['details'],
		'status' 		   => $supplier_detail[0]['status']
			);
		$chapterList = $CI->parser->parse('supplier/edit_supplier_form',$data,true);
		return $chapterList;
	}

	//supplier Details Data
	public function supplier_detail_data($supplier_id)
	{
		$CI =& get_instance();
		$CI->load->model('suppliers');
		$CI->load->model('Web_settings');
		$CI->load->library('occational');
		$supplier_detail = $CI->suppliers->supplier_personal_data($supplier_id);
		$purchase_info 	= $CI->suppliers->supplier_purchase_data($supplier_id);
		$total_amount = 0;
		if(!empty($purchase_info)){
			foreach($purchase_info as $k=>$v){
				$purchase_info[$k]['final_date'] = $CI->occational->dateConvert($purchase_info[$k]['purchase_date']);
				$total_amount = $total_amount+$purchase_info[$k]['grand_total_amount'];
			}
		}
		$currency_details = $CI->Web_settings->retrieve_setting_editdata();
		$data=array(
		'title' 		      => display('supplier_details'),
		'supplier_id' 	  => $supplier_detail[0]['supplier_id'],
		'supplier_name'   => $supplier_detail[0]['supplier_name'],
		'supplier_address'=> $supplier_detail[0]['address'],
		'supplier_mobile' => $supplier_detail[0]['mobile'],
		'details' 		      => $supplier_detail[0]['details'],
		'total_amount' 	      => number_format($total_amount, 2, '.', ','),
		'purchase_info'       => $purchase_info,
		'currency'            => $currency_details[0]['currency'],
		'position'            => $currency_details[0]['currency_position'],	
			);
		$chapterList = $CI->parser->parse('supplier/supplier_details',$data,true);
		return $chapterList;
	}
	

	public function supplier_sales_data($supplier_id)
	{
		$CI =& get_instance();
		$CI->load->model('suppliers');
		$CI->load->library('occational');
		$supplier_detail = $CI->suppliers->supplier_personal_data($supplier_id);
		$sales_info 	= $CI->suppliers->supplier_sales_data($supplier_id,null);
		
		if(!empty($sales_info)){
			foreach($sales_info as $k=>$v){
				$sales_info[$k]['date'] = $CI->occational->dateConvert($sales_info[$k]['date']);
			}
		}
		$data=array(
		'supplier_id' 	  => $supplier_detail[0]['supplier_id'],
		'supplier_name'   => $supplier_detail[0]['supplier_name'],
		'supplier_address'=> $supplier_detail[0]['address'],
		'supplier_mobile' => $supplier_detail[0]['mobile'],
		'details' 			  => $supplier_detail[0]['details'],
		'sales_info' 		  => $sales_info,

			);
		$sales_report = $CI->parser->parse('supplier/supplier_sales_report',$data,true);
		return $sales_report;
	}

	//Ledger Book Maintaining information....
	public function supplier_ledger($supplier_id,$start,$end)
	{
		$CI =& get_instance();
		$CI->load->model('suppliers');
		$CI->load->model('Web_settings');
		$CI->load->library('occational');
		$supplier=$CI->suppliers->supplier_list("110","0");
		$supplier_details = $CI->suppliers->supplier_personal_data($supplier_id,$start,$end);
		$ledger 	= $CI->suppliers->suppliers_ledger($supplier_id,$start,$end);
		$summary 	= $CI->suppliers->suppliers_transection_summary($supplier_id,$start,$end);

		$total_ammount = 0;
		$total_credit = 0;
		$total_debit = 0;

		$balance = 0;
		if(!empty($ledger)){
			foreach($ledger as $index=>$value){
				if($ledger[$index]['d_c']=="c")
				{
					$ledger[$index]['credit']=$ledger[$index]['amount'];
					$ledger[$index]['balance']=$balance-$ledger[$index]['amount'];
					$ledger[$index]['debit']="";
					$balance=$ledger[$index]['balance'];
				}
				else
				{
					$ledger[$index]['debit']=$ledger[$index]['amount'];
					$ledger[$index]['balance']=$balance+$ledger[$index]['amount'];
					$ledger[$index]['credit']="";
					$balance=$ledger[$index]['balance'];
				}
			}
		}

		$currency_details = $CI->Web_settings->retrieve_setting_editdata();
		
		$data=array(
		'title' 			=> 	display('supplier_ledger'),
		'ledger' 			=> 	$ledger,
		'supplier_name' => 	$supplier_details[0]['supplier_name'],
		'address' 			=> 	$supplier_details[0]['address'],
		'total_amount'		=>	number_format($summary[1][0]['total_debit']-$summary[0][0]['total_credit'], 2, '.', ','),
		'SubTotal_debit'	=>	number_format($summary[1][0]['total_debit'], 2, '.', ','),
		'SubTotal_credit'	=>	number_format($summary[0][0]['total_credit'], 2, '.', ','),
		'supplier_ledger'=> 'Csupplier/supplier_ledger',
		'supplier'		=>	$supplier,
		'start_date'        =>  $start,
		'end_date'          =>  $end,
		'supplier_id'   =>  $supplier_id,
		'currency' 			=> 	$currency_details[0]['currency'],
		'position' 			=> 	$currency_details[0]['currency_position'],
			);
			
		$singlecustomerdetails = $CI->parser->parse('supplier/supplier_ledger',$data,true);
		return $singlecustomerdetails;
	}

	public function supplier_sales_details($supplier_id,$start,$end)
	{
		$CI =& get_instance();
		$CI->load->model('suppliers');
		$CI->load->model('Web_settings');
		$CI->load->library('occational');

		$supplier_detail = $CI->suppliers->supplier_personal_data($supplier_id);
		$sales_info 	= $CI->suppliers->supplier_sales_details($supplier_id,$start,$end);

		$sub_total=0;
		if(!empty($sales_info)){
			foreach($sales_info as $k=>$v){
				$sales_info[$k]['date'] = $CI->occational->dateConvert($sales_info[$k]['date']);
				$sub_total+=$sales_info[$k]['total'];
			}
		}
		$currency_details = $CI->Web_settings->retrieve_setting_editdata();
		$data=array(
		'title' 		      => display('supplier_sales_details'),
		'supplier_id' 	  => $supplier_detail[0]['supplier_id'],
		'supplier_name'   => $supplier_detail[0]['supplier_name'],
		'supplier_address'=> $supplier_detail[0]['address'],
		'supplier_mobile' => $supplier_detail[0]['mobile'],
		'details' 			  => $supplier_detail[0]['details'],
		'sub_total'			  => number_format($sub_total, 2, '.', ','),
		'sales_info' 		  => $sales_info,
		'currency'			  => $currency_details[0]['currency'],
		'position' 			  => $currency_details[0]['currency_position'],	
			);
		$sales_report = $CI->parser->parse('supplier/supplier_sales_details',$data,true);
		return $sales_report;
	}

	
	
	########################## Sales & Payment ledger #########################
	#	This function will be responsible for retreive all actual sales information 
	# 	as well as payment info.Whatever stock that will not be matter .
	############################################################################
	function sales_payment_actual($supplier_id,$links,$per_page,$page)
	{
		$CI =& get_instance();
		$CI->load->model('suppliers');
		$CI->load->model('Web_settings');
		$CI->load->library('occational');
		
		$sales_payment_actual = $CI->suppliers->sales_payment_actual($per_page,$page);
        $sup_per_info=$CI->suppliers->supplier_personal_data($supplier_id);

		$total_amount = 0;
		if(!empty($sales_payment_actual)){
			foreach($sales_payment_actual as $k=>$v){
				$sales_payment_actual[$k]['total_amount'] = $total_amount+$sales_payment_actual[$k]['amount'];
				$total_amount=$sales_payment_actual[$k]['total_amount'];
			}
		}

		$currency_details = $CI->Web_settings->retrieve_setting_editdata();

		$data = array(
	'title' 		            => display('supplier_actual_ledger'),
	'info'			            => $CI->suppliers->supplier_personal_data($supplier_id),
	'total_details'             => $CI->suppliers->sales_payment_actual_total($supplier_id),
	'ledger' 		            => $sales_payment_actual, 
	'links' 		            => $links, 
	'company_info'	            => $CI->suppliers->retrieve_company(),
	'supplier_ledger'       => 'Csupplier/supplier_ledger/'.$supplier_id,
	'supplier_sales_details'=> 'Csupplier/supplier_sales_details/'.$supplier_id,
	'supplier_sales_summary'=> 'Csupplier/supplier_sales_summary/'.$supplier_id,
	'sales_payment_actual'      => 'Csupplier/sales_payment_actual/'.$supplier_id,
	'currency' 		            => $currency_details[0]['currency'],
	'position' 		            => $currency_details[0]['currency_position'],	);

		$sales_actual_report = $CI->parser->parse('supplier/sales_payment_ledger',$data,true);
		return $sales_actual_report;
	
	}
	
	//Search supplier
	public function supplier_search_list($cat_id,$company_id)
	{
		$CI =& get_instance();
		$CI->load->model('suppliers');
		$category_list = $CI->suppliers->retrieve_category_list();
		$suppliers_list = $CI->suppliers->supplier_search_list($cat_id,$company_id);
		$data = array(
				'title' 		    => display('manage_suppiler'),
				'suppliers_list'=> $suppliers_list,
				'category_list'     => $category_list
			);
		$supplierList = $CI->parser->parse('supplier/supplier',$data,true);
		return $supplierList;
	}
	################################################################################################################################################### supplier Report Part ################################
	public function supplier_ledger_report()
	{
		$CI =& get_instance();
		$CI->load->model('suppliers');
		$CI->load->model('Web_settings');
		$CI->load->library('occational');

		$supplier 	= $CI->suppliers->supplier_list();
		$supplier_details = $CI->suppliers->supplier_personal_data1();
		$ledger 	= $CI->suppliers->supplier_product_sale1();
		$summary 	= $CI->suppliers->suppliers_transection_summary1();

		$total_ammount = 0;
		$total_credit = 0;
		$total_debit = 0;

		$balance = 0;
		if(!empty($ledger)){
			foreach($ledger as $index=>$value){
				if($ledger[$index]['d_c']  =='c')
				{
					$ledger[$index]['credit']=$ledger[$index]['amount'];
					$ledger[$index]['balance']=$balance-$ledger[$index]['amount'];
					$ledger[$index]['debit']="";
					$balance=$ledger[$index]['balance'];
				}
				else
				{
					$ledger[$index]['debit']=$ledger[$index]['amount'];
					$ledger[$index]['balance']=$balance-$ledger[$index]['amount'];
					$ledger[$index]['credit']="";
					$balance=$ledger[$index]['balance'];
				}
			}
		}

		$currency_details = $CI->Web_settings->retrieve_setting_editdata();
		
		$data=array(
		'title' 			=> 	display('supplier_ledger'),
		'ledger' 			=> 	$ledger,
		'supplier_name' => 	'',
		'supplier_ledger'=> 'Csupplier/supplier_ledger',
		'supplier'		=>	$supplier,
		'currency' 			=> 	$currency_details[0]['currency'],
		'supplier_id'   => '',
		'start_date'        => '',
		'end_date'          => '',
		'position' 			=> 	$currency_details[0]['currency_position'],
			);
			
		$singlecustomerdetails = $CI->parser->parse('supplier/supplier_ledger',$data,true);
		return $singlecustomerdetails;
	}

	// supplier id wise info from view/mange page
	public function supplier_ledger_info($supplier_id)
	{
		$CI =& get_instance();
		$CI->load->model('suppliers');
		$CI->load->model('Web_settings');
		$CI->load->library('occational');

		$supplier_details = $CI->suppliers->supplier_personal_data($supplier_id);
		$supplier 	=	$CI->suppliers->supplier_list("110","0");
		$ledger 	= 	$CI->suppliers->supplier_product_sale_info($supplier_id);
		$summary 	= 	$CI->suppliers->suppliers_transection_summary_info($supplier_id);

		$total_ammount = 0;
		$total_credit = 0;
		$total_debit = 0;

		$balance = 0;
		if(!empty($ledger)){
			foreach($ledger as $index=>$value){
				if($ledger[$index]['d_c']=="c")
				{
					$ledger[$index]['credit']=$ledger[$index]['amount'];
					$ledger[$index]['balance']=$balance-$ledger[$index]['amount'];
					$ledger[$index]['debit']="";
					$balance=$ledger[$index]['balance'];
				}
				else
				{
					$ledger[$index]['debit']=$ledger[$index]['amount'];
					$ledger[$index]['balance']=$balance+$ledger[$index]['amount'];
					$ledger[$index]['credit']="";
					$balance=$ledger[$index]['balance'];
				}
			}
		}

		$currency_details = $CI->Web_settings->retrieve_setting_editdata();
		
		$data=array(
	'title' 			    => 	display('supplier_ledger'),
	'ledger' 			    => 	$ledger,
	'supplier_name' 	    => 	$supplier_details[0]['supplier_name'],
	'address' 			    => 	$supplier_details[0]['address'],
	'total_amount'		    =>	number_format($summary[1][0]['total_debit']-$summary[0][0]['total_credit'], 2, '.', ','),
	'SubTotal_debit'        =>	number_format($summary[1][0]['total_debit'], 2, '.', ','),
	'SubTotal_credit'       =>	number_format($summary[0][0]['total_credit'], 2, '.', ','),
	'supplier_ledger'	    => 'Csupplier/supplier_ledger',
	'supplier'			    =>	$supplier,
	'currency' 			    => 	$currency_details[0]['currency'],
	'position' 			    => 	$currency_details[0]['currency_position'],
		);
			
		$singlecustomerdetails = $CI->parser->parse('supplier/supplier_ledger',$data,true);
		return $singlecustomerdetails;
	}
}
?>