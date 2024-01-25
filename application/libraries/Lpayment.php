<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Lpayment {
	public function payement_form(){

		$CI=& get_instance();
		$CI->load->model('Payment');
		$CI->load->model('manufacturers');
		$CI->load->model('Customers');
		$CI->load->model('Settings');
		$CI->load->model('Accounts');//
		$bank=$CI->Settings->get_bank_list();
		$manufacturer=$CI->manufacturers->manufacturer_list("110","0");
		$customer=$CI->Customers->customer_list("110","0");
        $account_list=$CI->Payment->account_list("110","0");
        $account_list_category=$CI->Payment->account_list_category("110","0");
		$payment=$CI->Accounts->accounts_name_finder(2);
		$expense=$CI->Accounts->accounts_name_finder(1);
		$loan_list = $CI->Settings->loan_list();
		$data = array(
          'title' => 'Add Payement',
          'manufacturer'=>$manufacturer,
          'customer'=>$customer,
          'bank'    =>$bank,
          'account_list'=>$account_list,
          'accounts'=>$payment,
          'expense'=>$expense,
          'trans_category'=>$account_list_category,
          'loan_list'=>$loan_list,
			);
		
		$paymentform = $CI->parser->parse('payment/form',$data,true);
		return $paymentform;
	}

	public function receipt_form(){

		$CI=& get_instance();
		$CI->load->model('Payment');
		$CI->load->model('manufacturers');
		$CI->load->model('Customers');
		$CI->load->model('Settings');
		$CI->load->model('Accounts');//
		$bank=$CI->Settings->get_bank_list();
		$manufacturer=$CI->manufacturers->manufacturer_list("110","0");
		$customer=$CI->Customers->customer_list("110","0");
		$account_list_category=$CI->Payment->account_list_category("110","0");
        $account_list=$CI->Payment->account_list("110","0");
		$payment=$CI->Accounts->accounts_name_finder(2);
		$expense=$CI->Accounts->accounts_name_finder(1);
		$loan_list = $CI->Settings->loan_list();
		$data = array(
          'title' => 'Add Payement',
          'manufacturer'=>$manufacturer,
          'customer'=>$customer,
          'bank'    =>$bank,
          'account_list'=>$account_list,
          'accounts'=>$payment,
          'trans_category'=>$account_list_category,
          'expense'=>$expense,
          'loan_list'=>$loan_list,
			);
		
		$paymentform = $CI->parser->parse('payment/receipt_form',$data,true);
		return $paymentform;
	}

public function payment_list($links,$per_page,$page)
	{
		$CI =& get_instance();
		$CI->load->model('Payment');
		$CI->load->model('Reports');

		$ledger 	= $CI->Payment->date_summary_query($per_page,$page);
       	$category 	= $CI->Payment->tran_cat_list();
       
		$balance = 0;
		$total_credit = 0;
		$total_debit = 0;
		$total_balance = 0;
		$i = 0;
		if(!empty($ledger)){
			foreach ($ledger as $k => $v) {
				$i++;
				$ledger[$k]['sl']=$i+$CI->uri->segment(3);

                if(!empty($ledger[$k]['debit'])){
                    $debit=$ledger[$k]['debit'];
                }
                else{
                    $debit=0;
                }

                if(!empty($ledger[$k]['credit'])){
                    $credit=$ledger[$k]['credit'];
                }
                else{
                    $credit=0;
                }

                $ledger[$k]['balance'] = ($debit-$credit)+$balance;
				//$ledger[$k]['balance'] = ($ledger[$k]['debit']-$ledger[$k]['credit'])+$balance;

				$balance=$ledger[$k]['balance'];

				$ledger[$k]['subtotalDebit'] = $total_debit +  $debit;
				//$ledger[$k]['subtotalDebit'] = $total_debit + $ledger[$k]['debit'];
				$total_debit = $ledger[$k]['subtotalDebit'];

				$ledger[$k]['subtotalCredit'] = $total_credit + $ledger[$k]['credit'];
				$total_credit = $ledger[$k]['subtotalCredit'];

				$ledger[$k]['subtotalBalance'] = $total_balance + $ledger[$k]['balance'];
				$total_balance = $ledger[$k]['subtotalBalance'];
			}
		}

		$currency_details = $CI->Web_settings->retrieve_setting_editdata();
		$company_info = $CI->Reports->retrieve_company();
		$data=array(
			'title' 		=> display('manage_transaction'),
			'currency' 		=> $currency_details[0]['currency'],
			'position' 		=> $currency_details[0]['currency_position'],
			'ledger' 		=> $ledger,
			'transaction_id'=> $ledger[0]['transaction_id'],
			'category'      => $category,
			'subtotalDebit' => number_format($total_debit, 2, '.', ','),
			'subtotalCredit' => number_format($total_credit, 2, '.', ','),
			'subtotalBalance' => number_format($total_balance, 2, '.', ','),	
			'links' 		=> $links,
			'company_info' 	=> 	$company_info,
			);
		$chapterList = $CI->parser->parse('payment/payment',$data,true);
		return $chapterList;

	}

		public function payment_up_data($trans)
	{
		$CI =& get_instance();
	   $CI->load->model('Payment');
		$CI->load->model('manufacturers');
		$CI->load->model('Customers');
		$CI->load->model('Settings');
		$CI->load->model('Accounts');//
		
		
		$bank=$CI->Settings->get_bank_list();
		$manufacturer=$CI->manufacturers->manufacturer_list("110","0");
		$customer=$CI->Customers->customer_list("110","0");
        $account_list=$CI->Payment->account_list("110","0");
		$payment=$CI->Accounts->accounts_name_finder(2);
		$expense=$CI->Accounts->accounts_name_finder(1);
		$loan_list = $CI->Settings->loan_list();
		
		$payment = $CI->Payment->payment_updata($trans);
		@$category_id= $payment[0]['transection_category'];
		$category_selected=$CI->Payment->selected_transection($category_id);//
		$manufacturer_selected=$CI->Payment->selected_manufacturer($trans);
		$customer_selected=$CI->Payment->selected_customer($trans); 
		$tran_type_selected=$CI->Payment->selected_transection_type($trans);          
		$loan_selected=$CI->Payment->selected_loan($trans);
		$office_selected=$CI->Payment->selected_office_trns($trans);
		$category = $CI->Payment->tran_cat_list();
		
		$data=array(
	     'transaction_id'  => $payment[0]['transaction_id'],
	    'date_of_transection'=> $payment[0]['date_of_transection'],
	    'relation_id' 		 => $payment[0]['relation_id'],
        'transection_category'  => $payment[0]['transection_category'],
        'transection_type'   => $payment[0]['transection_type'],
        'description'        => $payment[0]['description'],
        'amount'             => $payment[0]['amount'],
        'pay_amount'         => $payment[0]['pay_amount'],
        'category_list'      => $category,
        'category_selected'  => $category_selected,
        'manufacturer_seleced'   => $manufacturer_selected,
        'office'             => $office_selected,
        'customer_id'        => $customer_selected[0]['customer_name'],
        'sel_loan'           => $loan_selected[0]['person_name'],
        'manufacturer'           => $manufacturer,
        'customer'         => $customer,
        'bank'             => $bank,
        'trn_mood'         => $payment[0]['transection_mood'],
        'tran_type'        => $tran_type_selected[0]['transection_type'],
        'account_list'     => $account_list,
        'accounts'         => $payment,
        'expense'          => $expense,
        'loan_list'        => $loan_list,
  
			);
		$updatepayment = $CI->parser->parse('payment/update_payment',$data,true);
		return $updatepayment;
	}

// transection report start
	public function transection_report_details()
	{
		$CI =& get_instance();
		$CI->load->model('Payment');
		$CI->load->model('Web_settings');
		$trans_report = $CI->Payment->transection_report();

		$i=0;
		if(!empty($trans_report)){		
			foreach($trans_report as $k=>$v){$i++;
			   $trans_report[$k]['sl']=$i;
			}
		}
		$data = array(
				'title' => 'report List',
				'trans_report' => $trans_report,
				
			);

		$report = $CI->parser->parse('payment/trans_details',$data,true);
		return $report;
	}
	// transection details by id
public function transection_data($id){
		$CI =& get_instance();
		$CI->load->model('Payment');

		$ledger 	= $CI->Payment->transection_rp_id($id);

		
		$data=array(
			'trans' 		=> $ledger,
			);
	
		$chapterList = $CI->parser->parse('payment/detail_byid',$data,true);
		return $chapterList;
	}

	// transaction report
	public function trans_data(){
		$CI =& get_instance();
		$CI->load->model('Payment');

		// $person_details_all = $CI->Settings->person_list();
		// $person_details = $CI->Settings->select_person_by_id($person_id);
		$ledger 	= $CI->Payment->tran_rep_query();

		$balance = 0;
		$total_credit = 0;
		$total_debit = 0;
		$total_balance = 0;

		if(!empty($ledger)){
			foreach ($ledger as $k => $v) {
				$ledger[$k]['balance'] = ($ledger[$k]['debit']-$ledger[$k]['credit'])+$balance;
				$balance=$ledger[$k]['balance'];

				$ledger[$k]['subtotalDebit'] = $total_debit + $ledger[$k]['debit'];
				$total_debit = $ledger[$k]['subtotalDebit'];	

				$ledger[$k]['subtotalCredit'] = $total_credit + $ledger[$k]['credit'];
				$total_credit = $ledger[$k]['subtotalCredit'];

				$ledger[$k]['subtotalBalance'] = $total_balance + $ledger[$k]['balance'];
				$total_balance = $ledger[$k]['subtotalBalance'];
			}
		}
		$currency_details = $CI->Web_settings->retrieve_setting_editdata();
		$data=array(
		
			'currency' 		=> $currency_details[0]['currency'],
			'position' 		=> $currency_details[0]['currency_position'],
			'ledger' 		=> $ledger,
			'subtotalDebit' => number_format($total_debit, 2, '.', ','),
			'subtotalCredit' => number_format($total_credit, 2, '.', ','),
			'subtotalBalance' => number_format($total_balance, 2, '.', ','),	
			'links' => '',
			);
		$chapterList = $CI->parser->parse('payment/trans_report',$data,true);
		return $chapterList;
	}

	
	// date wise report
	public function trans_datewise_data($links,$per_page,$page){
		$CI =& get_instance();
		$CI->load->model('Payment');

		// $person_details_all = $CI->Settings->person_list();
		// $person_details = $CI->Settings->select_person_by_id($person_id);
		$ledger 	= $CI->Payment->date_summary_query11($per_page,$page);

		$balance = 0;
		$total_credit = 0;
		$total_debit = 0;
		$total_balance = 0;

		if(!empty($ledger)){
			foreach ($ledger as $k => $v) {

                if(!empty($ledger[$k]['debit'])){
                    $debit=$ledger[$k]['debit'];
                }
                else{
                    $debit=0;
                }

                if(!empty($ledger[$k]['credit'])){
                    $credit=$ledger[$k]['credit'];
                }
                else{
                    $credit=0;
                }


                $ledger[$k]['balance'] = ($debit-$credit)+$balance;
				//$ledger[$k]['balance'] = ($ledger[$k]['debit']-$ledger[$k]['credit'])+$balance;
				$balance=$ledger[$k]['balance'];

				$ledger[$k]['subtotalDebit'] = $total_debit + $debit;
				//$ledger[$k]['subtotalDebit'] = $total_debit + $ledger[$k]['debit'];
				$total_debit = $ledger[$k]['subtotalDebit'];

				$ledger[$k]['subtotalCredit'] = $total_credit + $ledger[$k]['credit'];
				$total_credit = $ledger[$k]['subtotalCredit'];

				$ledger[$k]['subtotalBalance'] = $total_balance + $ledger[$k]['balance'];
				$total_balance = $ledger[$k]['subtotalBalance'];
			}
		}
		$currency_details = $CI->Web_settings->retrieve_setting_editdata();
		$data=array(
			
		
			'currency' 		=> $currency_details[0]['currency'],
			'position' 		=> $currency_details[0]['currency_position'],
			'ledger' 		=> $ledger,
			'subtotalDebit' => number_format($total_debit, 2, '.', ','),
			'subtotalCredit' => number_format($total_credit, 2, '.', ','),
			'subtotalBalance' => number_format($total_balance, 2, '.', ','),	
			'links' => $links,
			);
		$chapterList = $CI->parser->parse('payment/date_wise',$data,true);
		return $chapterList;
	}

	//date between search result
	public function result_datewise_data($start,$end){
		$CI =& get_instance();
		$CI->load->model('Payment');

		$stdate=$start;
		$end=$end;
		$ledger 	= $CI->Payment->search_query($start,$end);
		$previous_balance= $CI->Payment->manufacturer_product_sale_previous_debit($start);
  foreach ($previous_balance as $k => $v) {
  $previous_balance['pre_balance']=$previous_balance[$k]['pre_debit']-$previous_balance[$k]['pre_credit'];
  $pr_bal=$previous_balance['pre_balance'];
  }

		$balance = 0;
		$total_credit = 0;
		$total_debit = 0;
		$total_balance = 0;
		$subtotalbal=0;

		if(!empty($ledger)){
			foreach ($ledger as $k => $v) {

//			    if(!empty($ledger[$k]['debit'])){
//			        $debit=$ledger[$k]['debit'];
//                }
//                else{
//			        $debit=0;
//                }
//
//                if(!empty($ledger[$k]['credit'])){
//                    $credit=$ledger[$k]['credit'];
//                }
//                else{
//                    $credit=0;
//                }

				$ledger[$k]['balance'] = ($ledger[$k]['debit']-$ledger[$k]['credit']);
				$balance=$ledger[$k]['balance'];

				$ledger[$k]['subtotalDebit'] = $total_debit + $ledger[$k]['debit'];
				$total_debit = $ledger[$k]['subtotalDebit'];

				$ledger[$k]['subtotalCredit'] = $total_credit + $ledger[$k]['credit'];
				$total_credit = $ledger[$k]['subtotalCredit'];

				
			}
		}
		$currency_details = $CI->Web_settings->retrieve_setting_editdata();
		$data=array(
			//'person_details_all' => $person_details_all,
			//'person_details' => $ledger[$k]['transection_category'],
		
			'currency' 		=> $currency_details[0]['currency'],
			'position' 		=> $currency_details[0]['currency_position'],
			'ledger' 		=> $ledger,
			'subtotalDebit' => $total_debit+$pr_bal,
			'subtotalCredit' => number_format($total_credit, 2, '.', ','),
			
			'balance'        =>	$total_debit+$pr_bal+$total_credit,
			'balnce_sub'     => $subtotalbal,
			'links'          => '',
			'start'          =>$stdate,
			'endt'            =>$end,
			'previous_bal'   =>$pr_bal,
			);
		$chapterList = $CI->parser->parse('payment/date_wise_cash_flow',$data,true);
		return $chapterList;
	}


	// customr report data
public function trans_custom_report_data($links,$per_page,$page){
		$CI =& get_instance();
		$CI->load->model('Payment');

		
		$ledger 	= $CI->Payment->date_summary_query11($per_page,$page);
       $category = $CI->Payment->tran_cat_list();
		$balance = 0;
		$total_credit = 0;
		$total_debit = 0;
		$total_balance = 0;

		if(!empty($ledger)){
			foreach ($ledger as $k => $v) {

                if(!empty($ledger[$k]['debit'])){
                    $debit=$ledger[$k]['debit'];
                }
                else{
                    $debit=0;
                }

                if(!empty($ledger[$k]['credit'])){
                    $credit=$ledger[$k]['credit'];
                }
                else{
                    $credit=0;
                }



                $ledger[$k]['balance'] = ($debit-$credit)+$balance;
                //$ledger[$k]['balance'] = ($ledger[$k]['debit']-$ledger[$k]['credit'])+$balance;
				$balance=$ledger[$k]['balance'];

				$ledger[$k]['subtotalDebit'] = $total_debit + $debit;
				//$ledger[$k]['subtotalDebit'] = $total_debit + $ledger[$k]['debit'];
				$total_debit = $ledger[$k]['subtotalDebit'];

				$ledger[$k]['subtotalCredit'] = $total_credit + $ledger[$k]['credit'];
				$total_credit = $ledger[$k]['subtotalCredit'];

				$ledger[$k]['subtotalBalance'] = $total_balance + $ledger[$k]['balance'];
				$total_balance = $ledger[$k]['subtotalBalance'];
			}
		}
		$currency_details = $CI->Web_settings->retrieve_setting_editdata();
		$data=array(
			//'person_details_all' => $person_details_all,
			'currency' 		=> $currency_details[0]['currency'],
			'position' 		=> $currency_details[0]['currency_position'],
			'ledger' 		=> $ledger,
			//'invoice_no'    => $invoice,
			'category'      => $category,
			//'invoice'       => $invoice,
			'subtotalDebit' => number_format($total_debit, 2, '.', ','),
			'subtotalCredit' => number_format($total_credit, 2, '.', ','),
			'subtotalBalance' => number_format($total_balance, 2, '.', ','),	
			'links' => $links,
			);
		$chapterList = $CI->parser->parse('payment/custom_report',$data,true);
		return $chapterList;
	}

	// custom report search result info
	public function custom_result_datewise_data($start,$end,$account){
		$CI =& get_instance();
		$CI->load->model('Payment');

		// $person_details_all = $CI->Settings->person_list();
		// $person_details = $CI->Settings->select_person_by_id($person_id);
		$category = $CI->Payment->tran_cat_list();
		$ledger 	= $CI->Payment->custom_search_query($start,$end,$account);
		

		$balance = 0;
		$total_credit = 0;
		$total_debit = 0;
		$total_balance = 0;

		if(!empty($ledger)){
			foreach ($ledger as $k => $v) {
				$ledger[$k]['balance'] = ($ledger[$k]['debit']-$ledger[$k]['credit'])+$balance;
				$balance=$ledger[$k]['balance'];

				$ledger[$k]['subtotalDebit'] = $total_debit + $ledger[$k]['debit'];
				$total_debit = $ledger[$k]['subtotalDebit'];	

				$ledger[$k]['subtotalCredit'] = $total_credit + $ledger[$k]['credit'];
				$total_credit = $ledger[$k]['subtotalCredit'];

				$ledger[$k]['subtotalBalance'] = $total_balance + $ledger[$k]['balance'];
				$total_balance = $ledger[$k]['subtotalBalance'];
			}
		}
		$currency_details = $CI->Web_settings->retrieve_setting_editdata();
		$data=array(
			//'person_details_all' => $person_details_all,
			//'person_details' => $ledger[$k]['transection_category'],
		
			'currency' 		=> $currency_details[0]['currency'],
			'position' 		=> $currency_details[0]['currency_position'],
			'ledger' 		=> $ledger,
			'category'      => $category,
			'subtotalDebit' => number_format($total_debit, 2, '.', ','),
			'subtotalCredit' => number_format($total_credit, 2, '.', ','),
			'subtotalBalance' => number_format($total_balance, 2, '.', ','),	
			'links' => '',
			);
		$chapterList = $CI->parser->parse('payment/custom_report_datewise',$data,true);
		return $chapterList;
	}


	public function payment_date_date_info($star_date,$end_date)
	{
		$CI =& get_instance();
		$CI->load->model('Payment');
        $CI->load->model('Reports');
		
		$ledger 	= $CI->Payment->date_summary_date_to_date($star_date,$end_date);
       $category = $CI->Payment->tran_cat_list();
      
		$balance = 0;
		$total_credit = 0;
		$total_debit = 0;
		$total_balance = 0;
       	$i = 0;
		if(!empty($ledger)){
			foreach ($ledger as $k => $v) {
         
				$i++;
				$ledger[$k]['sl']=$i+$CI->uri->segment(3);


				$ledger[$k]['balance'] = ($ledger[$k]['debit']-$ledger[$k]['credit'])+$balance;
				$balance=$ledger[$k]['balance'];

				$ledger[$k]['subtotalDebit'] = $total_debit + $ledger[$k]['debit'];
				$total_debit = $ledger[$k]['subtotalDebit'];	

				$ledger[$k]['subtotalCredit'] = $total_credit + $ledger[$k]['credit'];
				$total_credit = $ledger[$k]['subtotalCredit'];

				$ledger[$k]['subtotalBalance'] = $total_balance + $ledger[$k]['balance'];
				$total_balance = $ledger[$k]['subtotalBalance'];
			}
		}
		$company_info = $CI->Reports->retrieve_company();
		$currency_details = $CI->Web_settings->retrieve_setting_editdata();
		$data=array(
			//'person_details_all' => $person_details_all,
			//'person_details' => $ledger[$k]['transection_category'],
		
			'currency' 		=> $currency_details[0]['currency'],
			'position' 		=> $currency_details[0]['currency_position'],
			'ledger' 		=> $ledger,
			'transaction_id'=> $ledger[0]['transaction_id'],
			//'invoice_no'    => $invoice,
			'category'      => $category,
			'links'		    =>'',
			'subtotalDebit' => number_format($total_debit, 2, '.', ','),
			'subtotalCredit' => number_format($total_credit, 2, '.', ','),
			'subtotalBalance' => number_format($total_balance, 2, '.', ','),
			'company_info' 	=> 	$company_info,	
			
			);
		$chapterList = $CI->parser->parse('payment/payment',$data,true);
		return $chapterList;

	}
	
	
}