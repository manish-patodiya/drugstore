<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Laccount2 {
	public function account_form(){

		$CI=& get_instance();
		$CI->load->model('Account_2');
		$account=$CI->Account_2->account_list("110","0");
		$data = array(
          'title' => display('create_accounts'),
          'account'=>$account,
		);
		
		$account = $CI->parser->parse('account2/form',$data,true);
		return $account;
	}
	//Account list
	public function account_list()
	{
		$CI =& get_instance();
		$CI->load->model('Account_2');
		$CI->load->model('Web_settings');
		$account_list = $CI->Account_2->account_list();

		$i=0;
		if(!empty($account_list)){		
			foreach($account_list as $k=>$v){$i++;
			   $account_list[$k]['sl']=$i;
			}
		}
		$data = array(
				'title' => display('manage_accounts'),
				'account_list' => $account_list,
				
			);

		$payment = $CI->parser->parse('account2/account',$data,true);
		return $payment;
	}

	public function account_up_data($id)
	{
		$CI =& get_instance();
		$CI->load->model('Account_2');
		$account = $CI->Account_2->account_updata($id);
		$data=array(
			'title' 		 => display('account_edit'),
			'account_id'     => $account[0]['account_id'],
			'account_name' 	 => $account[0]['account_name'],
			'parent_id'      => $account[0]['parent_id'],
			
			);
		$updateaccount = $CI->parser->parse('account2/update_account',$data,true);
		return $updateaccount;
	}

	public function trans_custom_report_data($category_id){
		$CI =& get_instance();
		$CI->load->model('Account_2');
		$CI->load->model('Web_settings');
		$CI->load->model('Payment');

		$ledger 	= $CI->Account_2->date_summary_query($category_id);
       	$category = $CI->Payment->tran_cat_list();
 
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
			'title'			=> display('transaction_details_datewise'),
			'currency' 		=> $currency_details[0]['currency'],
			'position' 		=> $currency_details[0]['currency_position'],
			'ledger' 		=> $ledger,
			'category'      => $category,
			'subtotalDebit' => number_format($total_debit, 2, '.', ','),
			'subtotalCredit' => number_format($total_credit, 2, '.', ','),
			'subtotalBalance' => number_format($total_balance, 2, '.', ','),	
			'links' => '',
			);
		$chapterList = $CI->parser->parse('payment/custom_report',$data,true);
		return $chapterList;
	}
	
}