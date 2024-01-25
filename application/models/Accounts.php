<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Accounts extends CI_Model {
  
    public $todays_date;
    public $sub_total;
    public $Idtrack_link=1;


  public function __construct()
  {
    parent::__construct();
    
    date_default_timezone_set('Asia/Dhaka');
    $this->todays_date = date("Y-m-d");
  }
        
  //Payment account finder
  public function accounts_name_finder($status=1)
  {
    $this->db->select("*");
     $this->db->from('account_2');
     $this->db->where('status',$status);
    $query = $this->db->get();
    return $query->result_array();
      
  }

  //tax entry
  public function tax_entry($data)
  {

    $this->db->select("*");
    $this->db->from('tax_information');
    $this->db->where('tax',$data['tax']);
    $query = $this->db->get()->num_rows();

    if ($query > 0) {
      return FALSE;
    }else{
        $this->db->insert('tax_information',$data);  
        return true;
    }  
  }

  //tax entry
  public function update_tax_data($data,$id)
  {
   
    $this->db->where('tax_id',$id);
    $this->db->update('tax_information',$data);
    return true;
  }
        
  //customer_ledger ENTRY
  public function customer_ledger( $data )
  {
    $this->db->insert('customer_ledger',$data); 
  }
        
 // manufacturer_ledger Entry
  public function manufacturer_ledger($data)
  {
          $this->db->insert('manufacturer_ledger',$data); 

  }
public function manufacturer_ledger_2($datapay)
  {
          $this->db->insert('manufacturer_ledger',$datapay); 

  }
  //Following function will receive payment inflow & Outflow.
  public function pay_table($data,$account_table)
  {
    $this->db->insert($account_table,$data);
  }

  /// transection sent pay and receipt table
  public function tan_pay_table($data)
  {
    $this->db->insert('payment_trans',$data);
  }
// receipt table
   public function receipt_table($data)
  {
    $this->db->insert('receipt_trans',$data);
  }

  //DRAWING ENTRY
  public function drawing_entry( $data )
  {
    $this->db->insert('drawing_add',$data); 
  }
  //TRANSACTION ENTRY
  public function expence_entry( $data )
  {
    $this->db->insert('expence_add',$data); 
  }
  //BANKING ENTRY
  public function banking_data_entry( $data )
  {
    $this->db->insert('daily_banking_add',$data); 
  }
  //BANKING ENTRY
  public function daily_closing_entry( $data )
  {
    $this->db->insert('daily_closing',$data); 
    }
  // This function will find out all closing information of daily closing.
  public function accounts_closing_data()
  {
      $this->load->model('Reports');
      $last_closing_amount = $this->get_last_closing_amount();
      $lastcloseingamnt=$last_closing_amount[0]['amount']+$last_closing_amount[0]['adjustment'];
      $cash_in  =  $this->cash_data_receipt();
      $cash_out =  $this->cash_data();
      $cash_in_hand = $last_closing_amount[0]['amount']+$cash_in-$cash_out;
      $company_info = $this->Reports->retrieve_company();
      return array(
            "last_day_closing"  =>  number_format($lastcloseingamnt, 2, '.', ','),
            "cash_in"           =>  number_format($cash_in, 2, '.', ','),
            "cash_out"          =>  number_format($cash_out, 2, '.', ','),
            "company_info"      =>  $company_info,
            "cash_in_hand"      =>  number_format($cash_in_hand, 2, '.', ',')
        );
  }
  
  public function cash_data_receipt()
  {
    //-----------
    $cash=0;
    $datse=date('Y-m-d');
     $this->db->select('
      transection.*,
      sum(transection.amount) as amount');
    $this->db->from('transection');
    $this->db->where('transection_type',2);
    $this->db->where('date_of_transection',$datse);
     $result_amount=  $this->db->get();
          $amount=$result_amount->result_array();
          $cash +=$amount[0]['amount'];
          return $cash;
  }

  public function cash_data()
  {
    //-----------
    $cash=0;
    $datse=date('Y-m-d');
     $this->db->select('
      transection.*,
      sum(transection.pay_amount) as amount');
    $this->db->from('transection');
    $this->db->where('transection_type',1);
    $this->db->where('date_of_transection',$datse);
     $result_amount=  $this->db->get();
          $amount=$result_amount->result_array();
          $cash +=$amount[0]['amount'];
          return $cash;
  }
  
   public function accounts_summary($type)
  {
     $this->db->select(' * ');
     $this->db->from('account_2');
     $this->db->where('status',$type);
     $query=  $this->db->get();
     $accounts=array();
     $serial=1;
     $total=0;
     foreach($query->result_array() as $result)
     {
         
         $table=$result['account_table_name'];
         
          $this->db->select("count(amount) as no_trans,sum(amount) as 'total'");
          $this->db->from($table);
          $this->db->where(array('date >='=>$this->todays_date));
          $result_account=  $this->db->get();
          $account=$result_account->result_array();
          
          $no_trans=$account[0]['no_trans'];
          $total +=$account[0]['total'];
          if($no_trans > 0)
          {
              $gmdate = gmdate("Y-m-d", time()-(24*60*60));
              
             $link= base_url()."Caccounts/summary_single/".$gmdate."/".$this->todays_date."/".$table;
             
           $account_name="<a href='".$link."' >".$result['account_name']."</a>";
            
            $accounts[]=array("sl"=>$serial,"table"=>$account_name,"no_transection"=>$no_trans,"sub_total"=>$account[0]['total']);
            $serial++;
          }
          
     }
     $this->sub_total=$total;
     
    return $accounts;
  }



  public function accounts_summary_datewise($start,$end,$type)
  {
     $this->db->select(' * ');
     $this->db->from('account_2');
     $this->db->where('status',$type);
     $query=  $this->db->get();
     $accounts=array();
     $serial=1;
     $total=0;
     foreach($query->result_array() as $result)
     {
         
         $table=$result['account_table_name'];
         
          $this->db->select("count(amount) as no_trans,sum(amount) as 'total'");
          $this->db->from($table);
          $this->db->where(array('date >='=>$start , 'date <='=>$end));
          $result_account=  $this->db->get();
          $account=$result_account->result_array();
          
          $no_trans=$account[0]['no_trans'];
          $total +=$account[0]['total'];
          if($no_trans > 0)
          {
               $gmdate = gmdate("Y-m-d", time()-(24*60*60));
              
             $link= base_url()."Caccounts/summary_single/".$start."/".$end."/".$table;
             $account_name="<a href='".$link."' >".$result['account_name']."</a>";
             
            $accounts[]=array("sl"=>$serial,"table"=>$account_name,"no_transection"=>$no_trans,"sub_total"=>$account[0]['total']);
            $serial++;
          }
          
          //echo $query=$this->db->last_query();
          
     }
     $this->sub_total=$total;
     
    return $accounts;
  }
        
        
  public function accounts_summary_details($start,$end,$table)
  {
    $this->db->select(" * ");
    $this->db->from($table);
    $this->db->where(array('date >='=>$start , 'date <='=>$end));
    // $this->db->where("status",1);
    $result_account=  $this->db->get();
    $account=$result_account->result_array();
    $serial=1;
    $data=array();
    foreach ($account as $account)
    {
        $date=substr($account['date'], 0, 10);
        
        if($account['payment_type']==1){$payment_type="Cash";}elseif($account['payment_type']==2){$payment_type="Cheque";}else{$payment_type="Pay Order";}
        
       $data[]= array("sl"=>$serial++,"table"=>$table,"date"=>$date,"transection_id"=>$account['transection_id'],"tracing_id"=>$this->idtracker($account['tracing_id']),"description"=>$account['description'],"amount"=>$account['amount'],"payment_type"=>$payment_type);
        
    }
    
    return $data;
  }
        
  public function idtracker($id)
  {
   
    $this->db->select(" * ");
    $this->db->from('customer_information');
    $this->db->where(array('customer_id ='=>$id));
    $result_account=  $this->db->get();
    $account=$result_account->result_array();
    
    $afrows=$this->db->affected_rows();
    if($afrows==0)
    {
        $this->db->select(" * ");
        $this->db->from('manufacturer_information');
        $this->db->where(array('manufacturer_id ='=>$id));
        $result_account=  $this->db->get();
        $account=$result_account->result_array();
        $afrows=$this->db->affected_rows();
        
        if($afrows==0)
        {
            return $id;
        }
        else {
            
            $manufacturer="<a href=".base_url()."Cmanufacturer/manufacturer_ledger/".$id.">".$account[0]['manufacturer_name']."</a>";
            if($this->Idtrack_link==1)
            {
                return $manufacturer;
            }
            else
            {
                return $account[0]['manufacturer_name'];
            }
        }
        
    }
    else 
    {
      $customer="<a href=".base_url()."Ccustomer/customerledger/".$id.">".$account[0]['customer_name']."</a>";
        
        if($this->Idtrack_link==1)
        {
             return $customer;
        }
        else
        {
            return $account[0]['customer_name'];
        }
    }
  }
        
  public function in_out_del($transection_id,$table)
  {
      if(substr($table,0,2)=="in")
      {
         $this->db->delete('customer_ledger', array('transaction_id' => $transection_id));  
      }
      else 
      {
          $this->db->delete('manufacturer_ledger', array('transaction_id' => $transection_id));
      }
      
      $this->db->delete($table, array('transection_id' => $transection_id)); 
      
  }
  
  //THis function will delete any data from table.
  public function data_del_table($table,$transection_id)
  {
         $this->db->delete($table, array('transection_id' => $transection_id)); 
  }
  //THis function will delete any data from table.
  
  public function delete_all_table_data($table,$condation)
  {
    $this->db->delete($table, $condation); 
  }

  public function inflow_edit($transection_id,$table,$type)
  {
     $this->load->model('settings');
     
     $this->db->select(' * ');
     $this->db->from('customer_ledger');
     $this->db->where('transaction_id',$transection_id);
     $query=  $this->db->get();
     $result=$query->result_array();
     
     if($result[0]["payment_type"]==1){$result[0]["payment"]="Cash";}else{$result[0]["payment"]="Cheque";}
     $this->Idtrack_link=0; //0 means return will be without link.
     $result[0]["name"]=$this->idtracker($result[0]["customer_id"]);
     $result[0]["accounts"]=$this->table_name($type);
     $result[0]["selected"]=$this->table_name_finder($table);
     $result[0]["selected_table_id"]=$table;
     
     $result[0]["transection_id"]=$transection_id;
     
     $result[0]["bank"]=$this->settings->get_bank_list();
    
    //Banking selection
     $cheque_manager=$this->transection_info($transection_id,"cheque_manger",array("transection_id"=>$transection_id));

     if ($cheque_manager) {
       $bank_name=$this->transection_info($transection_id,"bank_add",array("bank_id"=>$cheque_manager[0]["bank_id"]));
      $result[0]["selected_bank_id"]=$cheque_manager[0]["bank_id"];
      $result[0]["selected_bank"]=$bank_name[0]["bank_name"];
     }
     return $result;
  }

  public function outflow_edit($transection_id,$table,$type)
  {
     $this->load->model('settings');
     
     $this->db->select(' * ');
     $this->db->from('manufacturer_ledger');
     $this->db->where('transaction_id',$transection_id);
     $query=  $this->db->get();
     $result=$query->result_array();
     
     if($result[0]["payment_type"]==1){$result[0]["payment"]="Cash";}else{$result[0]["payment"]="Cheque";}
     $this->Idtrack_link=0; //0 means return will be without link.
     $result[0]["name"]=$this->idtracker($result[0]["manufacturer_id"]);
     $result[0]["accounts"]=$this->table_name($type);
     $result[0]["selected"]=$this->table_name_finder($table);
     $result[0]["selected_table_id"]=$table;
     $result[0]["transaction_id"]=$transection_id;
     
     $result[0]["bank"]=$this->settings->get_bank_list();
    
      
    //Banking selection
     $cheque_manager=$this->transection_info($transection_id,"cheque_manger",array("transection_id"=>$transection_id));
     if ($cheque_manager) {
        $bank_name=$this->transection_info($transection_id,"bank_add",array("bank_id"=>$cheque_manager[0]["bank_id"]));
        $result[0]["selected_bank_id"]=$cheque_manager[0]["bank_id"];
        $result[0]["selected_bank"]=$bank_name[0]["bank_name"];
     }
    
     return $result;
     
  }

  ######### Cheque Manager  || data Retreive ########## 
  public function cheque_manager($limit, $page)
  {
    $this->db->select(' * ');
    $this->db->from('cheque_manger');
    $this->db->where('status',1);
    $this->db->limit($limit, $page);
    $this->db->order_by('date','desc');
    $query=  $this->db->get();
     
    $result=$query->result_array();
     // Rearrange the internal data.
    
    $i=0;

    foreach($result as $res)
    {
        $result[$i]["sl"]=$i+1;
        $result[$i]["date"]=substr($res['date'], 0, 10);
        $result[$i]["name"]=$this->idtracker($res['customer_id']);

        if($res['cheque_status']=="0")
        { 
            $result[$i]["action"]=1;
            $result[$i]["action_value"]="No Clear";
        }
        else{ 
            $result[$i]["action"]=0;
            $result[$i]["action_value"]="Cleared";
        }

        $bank_name=$this->transection_info("","bank_add",array("bank_id"=>$res["bank_id"]));
        $result[$i]["bank_name"]=$bank_name[0]["bank_name"];
    $i++;
    }       
    return $result;
  }
        
  ######### Cheque Manager  || data Retreive ##########   
  public function table_name($type)
  {
     $this->db->select(' * ');
     $this->db->from('account_2');
     $this->db->where('status',$type);
     $query=  $this->db->get();
     return $query->result_array();
  } 

   // public function table_name()
   //  {
   //          return $this->db->select('account_2.*, transection.*')   
   //          ->from('transection')
   //          ->join('account_2', 'transection.transection_category = account_2.parent_id', 'left')
   //          ->order_by('transection_category', 'desc')
   //          ->get()
   //          ->result();
   //  }
  
  public function table_name_finder($table_id)
  {
     $this->db->select(' * ');
     $this->db->from('accounts');
     $this->db->where('account_table_name',$table_id);
     $query=  $this->db->get();
     return $query->result_array();
  } 

    ######### Common function for updating data ############  
    public function data_update($data,$table,$condation)
    {
        $this->db->update($table,$data,$condation);
    }

  ##### ******* Update All *** &&&& End &&&&& #############
  public function transection_info($transection_id,$table,$condation)
  {
     $this->db->select(' * ');
     $this->db->from($table);
     $this->db->where($condation);
     $query=  $this->db->get();
     return $result=$query->result_array();
      
  }

  public function get_last_closing_amount( )
  {
    $sql = "SELECT amount,adjustment FROM daily_closing WHERE date = ( SELECT MAX(date) FROM daily_closing)";
    $query = $this->db->query($sql);
    $result= $query->result_array();
    if ($result) {
      return $result;
    }else{
      return FALSE;
    }
  } 
  
  public function get_todays_draw_amount( )
  {
    $this->db->select("sum(amount) as 'total_draw_amount'");
    $this->db->from('drawing_add');
    $this->db->where('date',$this->todays_date);
    $query = $this->db->get();      
    return $query->result_array();
  }
  
  public function get_todays_expense_amount( )
  {
    $this->db->select("sum(amount) as 'total_expense_amount'");
    $this->db->from('expence_add');
    $this->db->where('date',$this->todays_date);
    $query = $this->db->get();      
    return $query->result_array();
  }
  
  public function get_todays_cheque_sales_amount( )
  {
    $this->db->select("sum(amount) as 'total_chq_sales_amount'");
    $this->db->from('customer_ledger');
    $this->db->where(array('payment_type'=>2,'date'=>$this->todays_date));
    $query = $this->db->get();      
    return $query->result_array();
  }
  
  public function get_todays_cash_sales_amount( )
  {
    $this->db->select("sum(amount) as 'total_cash_sales_amount'");
    $this->db->from('customer_ledger');
    $this->db->where(array('payment_type'=>1,'date'=>$this->todays_date));
    $query = $this->db->get();      
    return $query->result_array();
  } 
  
  public function get_todays_cheque_to_cash( )
  {
    $this->db->select("sum(amount) as 'cheque_to_cash_amount'");
    $this->db->from('daily_banking_add');
    $this->db->where(array('deposit_type'=>"cheque",'transaction_type'=>"draw",'date'=>$this->todays_date));
    $query = $this->db->get();      
    return $query->result_array();
  }
    
  public function count_daily_closing_data( )
  {
    $this->db->select('*');
    $this->db->from('daily_closing');
    $this->db->where('status',1);
    $query = $this->db->get();      
    return $query->num_rows();
  }
  
  public function get_closing_report($per_page=null,$page=null)
  {
    $this->db->select("* ,cash_in - cash_out as 'cash_in_hand'");
    $this->db->from('daily_closing');
    $this->db->where('status',1);
    $this->db->order_by('date','desc');
    $this->db->limit($per_page,$page);
    $query = $this->db->get();     
    return $query->result_array();
  }  

  public function get_closing_report_count()
  {
    $this->db->select("* ,cash_in - cash_out as 'cash_in_hand'");
    $this->db->from('daily_closing');
    $this->db->where('status',1);
    $this->db->order_by('date','desc');
    $query = $this->db->get();     
    return $query->num_rows();
  }
  
  public function get_date_wise_closing_report($from_date,$to_date )
  {
    
    $dateRange = "date BETWEEN '$from_date%' AND '$to_date%'";
    $this->db->select("* ,cash_in - cash_out as 'cash_in_hand'");
    $this->db->from('daily_closing');
    $this->db->where('status',1);
    $this->db->where($dateRange, NULL, FALSE); 
    $this->db->order_by('date','desc');
    $query = $this->db->get();      
    return $query->result_array();    
  }  

  public function get_date_wise_closing_report_count( $from_date,$to_date )
  {
    
    $dateRange = "date BETWEEN '$from_date%' AND '$to_date%'";
    $this->db->select("* ,cash_in - cash_out as 'cash_in_hand'");
    $this->db->from('daily_closing');
    $this->db->where('status',1);
    $this->db->where($dateRange, NULL, FALSE); 
    $this->db->order_by('date','desc');
    $query = $this->db->get();      
    return $query->num_rows();    
  }
//tax info
         public function viewTaxsetup()
    {
        return $this->db->select('*')   
            ->from('payroll_tax_setup')
            ->order_by('tax_setup_id', 'asc')
            ->get()
            ->result();
    }
     public function taxsetup_updateForm($id){
        $this->db->where('tax_setup_id',$id);
        $query = $this->db->get('payroll_tax_setup');
        return $query->row();
    }//
    public function update_taxsetup($data = array())
    {
        return $this->db->where('tax_setup_id', $data["tax_setup_id"])
            ->update("payroll_tax_setup", $data);


    }

        public function taxsetup_delete($id = null)
    {
        $this->db->where('tax_setup_id',$id)
            ->delete('payroll_tax_setup');

        if ($this->db->affected_rows()) {
            return true;
        } else {
            return false;
        }
    }

public function taxsetup_create($data = array())
    {
$this->db->insert('payroll_tax_setup',$data);
    }

        //tax report query
    public function taxdata($from_date,$to_date){
        return $this->db->select('a.*,b.invoice')
                        ->from('tax_collection a')
                        ->join('invoice b','a.relation_id = b.invoice_id','left')
                        ->where('a.date >=', $from_date)
                        ->where('a.date <=', $to_date)
                        ->get()
                        ->result_array();
    }

       // customer information for tax info
    public function tax_customer(){
        return $this->db->select('*')
                        ->from('customer_information')
                        ->get()
                        ->result_array();
    }

       // customer wise tax data
       public function customer_taxdata($from_date,$to_date,$invoice_id){
        $this->db->select('a.*,b.invoice');
        $this->db->from('tax_collection a');
        $this->db->join('invoice b','a.relation_id = b.invoice_id','left');
        $this->db->where('a.date >=', $from_date);
        $this->db->where('a.date <=', $to_date);
        if (!empty($invoice_id)) {
            $this->db->where('b.invoice', $invoice_id);
            $this->db->or_where('a.relation_id', $invoice_id);
        }
        $query = $this->db->get();
        return $query->result_array();

    }
}