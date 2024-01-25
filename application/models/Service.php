<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Service extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->library('auth');
        $this->load->library('lservice');
        $this->load->library('session');
        $this->load->model('Service');
        $this->auth->check_admin_auth();
    }

    //customer List
    public function service_list() {
        $this->db->select('*');
        $this->db->from('product_service');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

    //customer List
    public function service_list_product() {
        $this->db->select('*');
        $this->db->from('product_service');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

    //customer List
    public function service_list_count() {
        $this->db->select('*');
        $this->db->from('product_service');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        }
        return false;
    }

    //service Search Item
    public function service_search_item($service_id) {
        $this->db->select('*');
        $this->db->from('product_service');
        $this->db->where('service_id', $service_id);
        $this->db->limit('500');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

    //Count customer
    public function service_entry($data) {
        $this->db->select('*');
        $this->db->from('product_service');
        $this->db->where('service_name', $data['service_name']);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return FALSE;
        } else {
            $this->db->insert('product_service', $data);
            $this->db->select('*');
            $this->db->from('product_service');
            $query = $this->db->get();
            foreach ($query->result() as $row) {
                $json_service[] = array('label' => $row->service_name, 'value' => $row->service_id);
            }
            $cache_file = './my-assets/js/admin_js/json/service.json';
            $serviceList = json_encode($json_service);
            file_put_contents($cache_file, $serviceList);
            return TRUE;
        }
    }

    //Retrieve customer Edit Data
    public function retrieve_service_editdata($service_id) {
        $this->db->select('*');
        $this->db->from('product_service');
        $this->db->where('service_id', $service_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

    //Update Categories
    public function update_service($data, $service_id) {
        $this->db->where('service_id', $service_id);
        $this->db->update('product_service', $data);
            $this->db->select('*');
            $this->db->from('product_service');
            $query = $this->db->get();
            foreach ($query->result() as $row) {
                $json_service[] = array('label' => $row->service_name, 'value' => $row->service_id);
            }
            $cache_file = './my-assets/js/admin_js/json/service.json';
            $serviceList = json_encode($json_service);
            file_put_contents($cache_file, $serviceList);
        return true;
    }

    // Delete customer Item
    public function delete_service($service_id) {
        $this->db->where('service_id', $service_id);
        $this->db->delete('product_service');
            $this->db->select('*');
            $this->db->from('product_service');
            $query = $this->db->get();
            foreach ($query->result() as $row) {
                $json_service[] = array('label' => $row->service_name, 'value' => $row->service_id);
            }
            $cache_file = './my-assets/js/admin_js/json/service.json';
            $serviceList = json_encode($json_service);
            file_put_contents($cache_file, $serviceList);
        return true;
    }

        public function get_total_service_invoic($service_id) {
      
        $this->db->select('*');
        $this->db->from('product_service');
        $this->db->where(array('service_id' => $service_id));
        $serviceinfo = $this->db->get()->row();

        $CI = & get_instance();
        $CI->load->model('Web_settings');
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $tablecolumn = $this->db->list_fields('product_service');
               $num_column = count($tablecolumn)-4;
  $taxfield='';
  $taxvar = [];
   for($i=0;$i<$num_column;$i++){
    $taxfield = 'tax'.$i;
    $data2[$taxfield]=$serviceinfo->$taxfield;
    $taxvar[$i] = $serviceinfo->$taxfield;
    $data2['taxdta'] = $taxvar;
    //
   } $data2['txnmber'] = $num_column;
     $data2['price'] = $serviceinfo->charge;
     $data2['discount_type'] = $currency_details[0]['discount_type'];

        return $data2;
    }
    // Employee list
    public function employee_list(){
        return $list = $this->db->select('*')->from('employee_history')->get()->result_array();
    }

    public function invoice_entry(){
        $this->load->model('Web_settings');
           $currency_details = $this->Web_settings->retrieve_setting_editdata();
        $tablecolumn = $this->db->list_fields('tax_collection');
               $num_column = count($tablecolumn)-4;
               // print_r($num_column);exit();

        $employee = $this->input->post('employee_id');
        $employee_id = implode(',' , $employee);
         $invoice_id  = 'serv-'.date('Ymdhis');
        $createby=$this->session->userdata('user_id');
        $createdate=date('Y-m-d H:i:s');

        if (($this->input->post('customer_name_others') == null) && ($this->input->post('customer_id') == null ) && ($this->input->post('customer_name') == null )) {
            $this->session->set_userdata(array('error_message' => display('please_select_customer')));
            redirect(base_url() . 'Cservice/service_invoice_form');
        }
         if ($this->input->post('employee_id') == null ) {
            $this->session->set_userdata(array('error_message' => display('please_select_employee')));
            redirect(base_url() . 'Cservice/service_invoice_form');
        }


        if (($this->input->post('customer_id') == null ) && ($this->input->post('customer_name') == null )) {
            $customer_id = $this->auth->generator(15);
            //Customer  basic information adding.
             $coa = $this->headcode();
           if($coa->HeadCode!=NULL){
                $headcode=$coa->HeadCode+1;
           }else{
                $headcode="102030101";
            }
             $c_acc=$customer_id.'-'.$this->input->post('customer_name_others');
            $createby=$this->session->userdata('user_id');
            $createdate=date('Y-m-d H:i:s');
            $data = array(
                'customer_id'      => $customer_id,
                'customer_name'    => $this->input->post('customer_name_others'),
                'customer_address' => $this->input->post('customer_name_others_address'),
                'customer_mobile'  => $this->input->post('customer_mobile'),
                'customer_email'   => "",
                'status'           => 2
            );
           $customer_coa = [
             'HeadCode'         => $headcode,
             'HeadName'         => $c_acc,
             'PHeadName'        => 'Customer Receivable',
             'HeadLevel'        => '4',
             'IsActive'         => '1',
             'IsTransaction'    => '1',
             'IsGL'             => '0',
             'HeadType'         => 'A',
             'IsBudget'         => '0',
             'IsDepreciation'   => '0',
             'DepreciationRate' => '0',
             'CreateBy'         => $createby,
             'CreateDate'       => $createdate,
        ];

            $this->db->insert('customer_information', $data);
            $this->db->insert('acc_coa',$customer_coa);
            $this->db->select('*');
            $this->db->from('customer_information');
            $query = $this->db->get();
            foreach ($query->result() as $row) {
                $json_customer[] = array('label' => $row->customer_name, 'value' => $row->customer_id);
            }
            $cache_file = './my-assets/js/admin_js/json/customer.json';
            $customerList = json_encode($json_customer);
            file_put_contents($cache_file, $customerList);


            //Previous balance adding -> Sending to customer model to adjust the data.
            $this->Customers->previous_balance_add(0, $customer_id);
        } else {
            $customer_id = $this->input->post('customer_id');
        }


        //Full or partial Payment record.
        $paid_amount = $this->input->post('paid_amount');
        if ($this->input->post('paid_amount') >= 0) {

            $this->db->set('status', '1');
            $this->db->where('customer_id', $customer_id);

            $this->db->update('customer_information');

            $transection_id = $this->auth->generator(15);


            // Insert to customer_ledger Table 
            $data4 = array(
            'transaction_id'  => $transection_id,
            'customer_id'     => $customer_id,
            'invoice_no'      => $invoice_id,
            'date'            => (!empty($this->input->post('invoice_date'))?$this->input->post('invoice_date'):date('Y-m-d')),
            'amount'          => $this->input->post('n_total')-(!empty($this->input->post('previous'))?$this->input->post('previous'):0),
            'description'     => 'Service ',
            'status'          => 1,
            'd_c'             => 'd'
            );
            $this->db->insert('customer_ledger', $data4);

            //Insert to customer_ledger Table 
            $data2 = array(
                'transaction_id'  => $transection_id,
                'customer_id'     => $customer_id,
                'receipt_no'      => $this->auth->generator(10),
                'date'            => (!empty($this->input->post('invoice_date'))?$this->input->post('invoice_date'):date('Y-m-d')),
                'amount'          => $this->input->post('paid_amount'),
                'payment_type'    => 1,
                'invoice_no'      => $invoice_id,
                'description'     => 'Paid by customer',
                'status'          => 1,
                'd_c'             => 'c'
            );
            $this->db->insert('customer_ledger', $data2);

           
            // Inserting for Accounts adjustment.
            ############ default table :: customer_payment :: inflow_92mizdldrv #################
        }

        //Data inserting into invoice table
        $datainv = array(
            'employee_id'     => $employee_id,
            'customer_id'     => $customer_id,
            'date'            => (!empty($this->input->post('invoice_date'))?$this->input->post('invoice_date'):date('Y-m-d')),
            'total_amount'    => $this->input->post('grand_total_price'),
            'total_tax'       => $this->input->post('total_tax_amount'),
            'voucher_no'      => $invoice_id,
            'details'         => (!empty($this->input->post('inva_details'))?$this->input->post('inva_details'):'Service Invoice'),
            'invoice_discount'=> $this->input->post('invoice_discount'),
            'total_discount'  => $this->input->post('total_discount'),
            'shipping_cost'   => $this->input->post('shipping_cost'),
            'paid_amount'     => $this->input->post('paid_amount'),
            'due_amount'      => $this->input->post('due_amount'),
            'previous'        => $this->input->post('previous'),
            
        );
        //  print_r($datainv);exit;

        $this->db->insert('service_invoice', $datainv);
       

   $cusifo = $this->db->select('*')->from('customer_information')->where('customer_id',$customer_id)->get()->row();
    $headn = $cusifo->customer_name.'-'.$customer_id;
    $coainfo = $this->db->select('*')->from('acc_coa')->where('HeadName',$headn)->get()->row();
    $customer_headcode = $coainfo->HeadCode;
// Cash in Hand debit
      $cc = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'SERVICE',
      'VDate'          =>  $createdate,
      'COAID'          =>  1020101,
      'Narration'      =>  'Cash in Hand For SERVICE No'.$invoice_id,
      'Debit'          =>  $this->input->post('paid_amount'),
      'Credit'         =>  0,
      'IsPosted'       =>  1,
      'CreateBy'       =>  $createby,
      'CreateDate'     =>  $createdate,
      'IsAppove'       =>  1
    ); 
   // Service income  
$service_income = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'SERVICE',
      'VDate'          =>  $createdate,
      'COAID'          =>  305,
      'Narration'      =>  'Service Income For SERVICE No'.$invoice_id,
      'Debit'          =>  0,
      'Credit'         =>  $this->input->post('grand_total_price'),
      'IsPosted'       =>  1,
      'CreateBy'       =>  $createby,
      'CreateDate'     =>  $createdate,
      'IsAppove'       =>  1
    );

 $this->db->insert('acc_transaction',$service_income);
    //Customer debit for service Value
    $cosdr = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'SERVICE',
      'VDate'          =>  $createdate,
      'COAID'          =>  $customer_headcode,
      'Narration'      =>  'Customer debit For service No'.$invoice_id,
      'Debit'          =>  $this->input->post('grand_total_price'),
      'Credit'         =>  0,
      'IsPosted'       => 1,
      'CreateBy'       => $createby,
      'CreateDate'     => $createdate,
      'IsAppove'       => 1
    ); 
       $this->db->insert('acc_transaction',$cosdr);

       ///Customer credit for Paid Amount
       $coscr = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'SERVICE',
      'VDate'          =>  $createdate,
      'COAID'          =>  $customer_headcode,
      'Narration'      =>  'Customer credit for Paid Amount For Service No'.$invoice_id,
      'Debit'          =>  0,
      'Credit'         =>  $this->input->post('paid_amount'),
      'IsPosted'       => 1,
      'CreateBy'       => $createby,
      'CreateDate'     => $createdate,
      'IsAppove'       => 1
    ); 
       if(!empty($this->input->post('paid_amount'))){
       $this->db->insert('acc_transaction',$coscr);
       $this->db->insert('acc_transaction',$cc);
  }
   
        $quantity            = $this->input->post('product_quantity');
        $rate                = $this->input->post('product_rate');
        $serv_id             = $this->input->post('service_id');
        $total_amount        = $this->input->post('total_price');
        $discount_rate       = $this->input->post('discount_amount');
        $discount_per        = $this->input->post('discount');
        $tax_amount          = $this->input->post('tax');
        $invoice_description = $this->input->post('desc');

        for ($i = 0, $n   = count($serv_id); $i < $n; $i++) {
            $service_qty  = $quantity[$i];
            $product_rate = $rate[$i];
            $service_id   = $serv_id[$i];
            $total_price  = $total_amount[$i];
            $disper       = $discount_per[$i];
            $disamnt      = $discount_rate[$i];
           
            $service_details = array(
                'service_inv_id'     => $invoice_id,
                'service_id'         => $service_id,
                'qty'                => $service_qty,
                'charge'             => $product_rate,
                'discount'           => $disper,
                'discount_amount'    => $disamnt,
                'total'              => $total_price,
            );
            if (!empty($quantity)) {
                $this->db->insert('service_invoice_details', $service_details);
            }
           

        }
         for($j=0;$j<$num_column;$j++){
                $taxfield = 'tax'.$j;
                $taxvalue = 'total_tax'.$j;
              $taxdata[$taxfield]=$this->input->post($taxvalue);
            }
            $taxdata['customer_id'] = $customer_id;
            $taxdata['date']        = (!empty($this->input->post('invoice_date'))?$this->input->post('invoice_date'):date('Y-m-d'));
            $taxdata['relation_id'] = $invoice_id;
            $this->db->insert('tax_collection',$taxdata);

        $message = 'Mr.'.$cusifo->customer_name.',
        '.'Your Service Charge '.$this->input->post('grand_total_price').' '.$currency_details[0]['currency'].' You have paid .'.$this->input->post('paid_amount').' '.$currency_details[0]['currency'];
        $this->send_sms($cusifo->customer_mobile,$message);
        return $invoice_id;
    }

     public function number_generator() {
        $this->db->select_max('voucher_no', 'voucher_no');
        $query = $this->db->get('service_invoice');
        $result = $query->result_array();
        $voucher_no = $result[0]['voucher_no'];
        if ($voucher_no != '') {
            $voucher_no = $voucher_no + 1;
        } else {
            $voucher_no = 1000;
        }
        return $voucher_no;
    }
          // Service invoice list
            public function service_invoice_list($limit = null, $start = null)
    {
             return $this->db->select('a.*,b.customer_name')   
            ->from('service_invoice a')
            ->join('customer_information b','b.customer_id=a.customer_id','left')
            ->order_by('a.id', 'desc')
            ->limit($limit, $start)
            ->get()
            ->result_array();
    }

    // Service Invoice Delete
    public function delete_service_invoice($invoice_id){
        //service invoice delete
      $this->db->where('voucher_no', $invoice_id);
        $this->db->delete('service_invoice');
       //service invoice details delete
        $this->db->where('service_inv_id', $invoice_id);
        $this->db->delete('service_invoice_details');
     //customer ledger delete
         $this->db->where('invoice_no', $invoice_id);
        $this->db->delete('customer_ledger');
        //acc transaction delete
         $this->db->where('VNo', $invoice_id);
        $this->db->delete('acc_transaction');
    }
    // Service Invoice Update Information
    public function service_invoice_updata($invoice_id){
      return $this->db->select('a.*,b.*,c.service_name')   
            ->from('service_invoice a')
            ->join('service_invoice_details b','b.service_inv_id=a.voucher_no','left')
            ->join('product_service c','c.service_id=b.service_id','left')
            ->where('a.voucher_no',$invoice_id)
            ->order_by('b.id', 'asc')
            ->get()
            ->result_array(); 
    }

    // customer information 
    public function customer_info($customer_id){
        return $this->db->select('*')
                    ->from('customer_information')
                    ->where('customer_id',$customer_id)
                    ->get()
                    ->row();
    }

    // tax for service information
    public function service_invoice_taxinfo($invoice_id){
       return $this->db->select('*')   
            ->from('tax_collection')
            ->where('relation_id',$invoice_id)
            ->get()
            ->result_array(); 
    }

    public function invoice_update(){


         $tablecolumn = $this->db->list_fields('tax_collection');
               $num_column = count($tablecolumn)-4;
               // print_r($num_column);exit();
        $invoice_id = $this->input->post('invoice_id');
        $employee = $this->input->post('employee_id');
        $employee_id = implode(',' , $employee);
        $createby=$this->session->userdata('user_id');
        $createdate=date('Y-m-d H:i:s');
        if(!empty($invoice_id)){
            //Customer Ledger
        $this->db->where('invoice_no', $invoice_id);
        $this->db->delete('customer_ledger');
        // Account Transaction
        $this->db->where('VNo', $invoice_id);
        $this->db->delete('acc_transaction');
        //Service Invoice Details
        
        $this->db->where('service_inv_id', $invoice_id);
        $this->db->delete('service_invoice_details');
        //tax_collection
        $this->db->where('relation_id', $invoice_id);
        $this->db->delete('tax_collection');
        }

        if (($this->input->post('customer_name_others') == null) && ($this->input->post('customer_id') == null ) && ($this->input->post('customer_name') == null )) {
            $this->session->set_userdata(array('error_message' => display('please_select_customer')));
            redirect(base_url() . 'Cservice/service_invoice_form');
        }
         if ($this->input->post('employee_id') == null ) {
            $this->session->set_userdata(array('error_message' => display('please_select_employee')));
            redirect(base_url() . 'Cservice/service_invoice_form');
        }


        if (($this->input->post('customer_id') == null ) && ($this->input->post('customer_name') == null )) {
            $customer_id = $this->auth->generator(15);
            //Customer  basic information adding.
             $coa = $this->headcode();
           if($coa->HeadCode!=NULL){
                $headcode=$coa->HeadCode+1;
           }else{
                $headcode="102030101";
            }
             $c_acc=$customer_id.'-'.$this->input->post('customer_name_others');
            $createby=$this->session->userdata('user_id');
            $createdate=date('Y-m-d H:i:s');
            $data = array(
                'customer_id'      => $customer_id,
                'customer_name'    => $this->input->post('customer_name_others'),
                'customer_address' => $this->input->post('customer_name_others_address'),
                'customer_mobile'  => $this->input->post('customer_mobile'),
                'customer_email'   => "",
                'status'           => 2
            );
           $customer_coa = [
             'HeadCode'         => $headcode,
             'HeadName'         => $c_acc,
             'PHeadName'        => 'Customer Receivable',
             'HeadLevel'        => '4',
             'IsActive'         => '1',
             'IsTransaction'    => '1',
             'IsGL'             => '0',
             'HeadType'         => 'A',
             'IsBudget'         => '0',
             'IsDepreciation'   => '0',
             'DepreciationRate' => '0',
             'CreateBy'         => $createby,
             'CreateDate'       => $createdate,
        ];

            $this->db->insert('customer_information', $data);
            $this->db->insert('acc_coa',$customer_coa);
            $this->db->select('*');
            $this->db->from('customer_information');
            $query = $this->db->get();
            foreach ($query->result() as $row) {
                $json_customer[] = array('label' => $row->customer_name, 'value' => $row->customer_id);
            }
            $cache_file = './my-assets/js/admin_js/json/customer.json';
            $customerList = json_encode($json_customer);
            file_put_contents($cache_file, $customerList);


            //Previous balance adding -> Sending to customer model to adjust the data.
            $this->Customers->previous_balance_add(0, $customer_id);
        } else {
            $customer_id = $this->input->post('customer_id');
        }


        //Full or partial Payment record.
        $paid_amount = $this->input->post('paid_amount');
        if ($this->input->post('paid_amount') >= 0) {

            $this->db->set('status', '1');
            $this->db->where('customer_id', $customer_id);

            $this->db->update('customer_information');

            $transection_id = $this->auth->generator(15);


            // Insert to customer_ledger Table 
            $data4 = array(
            'transaction_id'  => $transection_id,
            'customer_id'     => $customer_id,
            'invoice_no'      => $invoice_id,
            'date'            => (!empty($this->input->post('invoice_date'))?$this->input->post('invoice_date'):date('Y-m-d')),
            'amount'          => $this->input->post('n_total')-(!empty($this->input->post('previous'))?$this->input->post('previous'):0),
            'description'     => 'Service ',
            'status'          => 1,
            'd_c'             => 'd'
            );
            $this->db->insert('customer_ledger', $data4);

            //Insert to customer_ledger Table 
            $data2 = array(
                'transaction_id'  => $transection_id,
                'customer_id'     => $customer_id,
                'receipt_no'      => $this->auth->generator(10),
                'date'            => (!empty($this->input->post('invoice_date'))?$this->input->post('invoice_date'):date('Y-m-d')),
                'amount'          => $this->input->post('paid_amount'),
                'payment_type'    => 1,
                'invoice_no'      => $invoice_id,
                'description'     => 'Paid by customer',
                'status'          => 1,
                'd_c'             => 'c'
            );
            $this->db->insert('customer_ledger', $data2);

           
            // Inserting for Accounts adjustment.
            ############ default table :: customer_payment :: inflow_92mizdldrv #################
        }

        //Data inserting into invoice table
        $datainv = array(
            'employee_id'     => $employee_id,
            'customer_id'     => $customer_id,
            'date'            => (!empty($this->input->post('invoice_date'))?$this->input->post('invoice_date'):date('Y-m-d')),
            'total_amount'    => $this->input->post('grand_total_price'),
            'total_tax'       => $this->input->post('total_tax_amount'),
            'voucher_no'      => $invoice_id,
            'details'         => (!empty($this->input->post('inva_details'))?$this->input->post('inva_details'):'Service Invoice'),
            'invoice_discount'=> $this->input->post('invoice_discount'),
            'total_discount'  => $this->input->post('total_discount'),
            'shipping_cost'   => $this->input->post('shipping_cost'),
            'paid_amount'     => $this->input->post('paid_amount'),
            'due_amount'      => $this->input->post('due_amount'),
            'previous'        => $this->input->post('previous'),
            
        );
        //  print_r($datainv);exit;

         $this->db->where('voucher_no', $invoice_id);
        $this->db->update('service_invoice',$datainv);


   $cusifo = $this->db->select('*')->from('customer_information')->where('customer_id',$customer_id)->get()->row();
    $headn = $customer_id.'-'.$cusifo->customer_name;
    $coainfo = $this->db->select('*')->from('acc_coa')->where('HeadName',$headn)->get()->row();
    $customer_headcode = $coainfo->HeadCode;
// Cash in Hand debit
      $cc = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'SERVICE',
      'VDate'          =>  $createdate,
      'COAID'          =>  1020101,
      'Narration'      =>  'Cash in Hand For SERVICE No'.$invoice_id,
      'Debit'          =>  $this->input->post('paid_amount'),
      'Credit'         =>  0,
      'IsPosted'       =>  1,
      'CreateBy'       =>  $createby,
      'CreateDate'     =>  $createdate,
      'IsAppove'       =>  1
    ); 
     

$service_income = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'SERVICE',
      'VDate'          =>  $createdate,
      'COAID'          =>  305,
      'Narration'      =>  'Service Income For SERVICE No'.$invoice_id,
      'Debit'          =>  0,
      'Credit'         =>  $this->input->post('grand_total_price'),
      'IsPosted'       =>  1,
      'CreateBy'       =>  $createby,
      'CreateDate'     =>  $createdate,
      'IsAppove'       =>  1
    );

 $this->db->insert('acc_transaction',$service_income);
    //Customer debit for service Value
    $cosdr = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'SERVICE',
      'VDate'          =>  $createdate,
      'COAID'          =>  $customer_headcode,
      'Narration'      =>  'Customer debit For service No'.$invoice_id,
      'Debit'          =>  $this->input->post('grand_total_price'),
      'Credit'         =>  0,
      'IsPosted'       => 1,
      'CreateBy'       => $createby,
      'CreateDate'     => $createdate,
      'IsAppove'       => 1
    ); 
       $this->db->insert('acc_transaction',$cosdr);

       ///Customer credit for Paid Amount
       $coscr = array(
      'VNo'            =>  $invoice_id,
      'Vtype'          =>  'SERVICE',
      'VDate'          =>  $createdate,
      'COAID'          =>  $customer_headcode,
      'Narration'      =>  'Customer credit for Paid Amount For Service No'.$invoice_id,
      'Debit'          =>  0,
      'Credit'         =>  $this->input->post('paid_amount'),
      'IsPosted'       => 1,
      'CreateBy'       => $createby,
      'CreateDate'     => $createdate,
      'IsAppove'       => 1
    ); 
       if(!empty($this->input->post('paid_amount'))){
       $this->db->insert('acc_transaction',$coscr);
       $this->db->insert('acc_transaction',$cc);
  }
   
        $quantity            = $this->input->post('product_quantity');
        $rate                = $this->input->post('product_rate');
        $serv_id             = $this->input->post('service_id');
        $total_amount        = $this->input->post('total_price');
        $discount_rate       = $this->input->post('discount_amount');
        $discount_per        = $this->input->post('discount');
        $tax_amount          = $this->input->post('tax');
        $invoice_description = $this->input->post('desc');

        for ($i = 0, $n   = count($serv_id); $i < $n; $i++) {
            $service_qty  = $quantity[$i];
            $product_rate = $rate[$i];
            $service_id   = $serv_id[$i];
            $total_price  = $total_amount[$i];
            $disper       = $discount_per[$i];
            $disamnt      = $discount_rate[$i];
           
            $service_details = array(
                'service_inv_id'     => $invoice_id,
                'service_id'         => $service_id,
                'qty'                => $service_qty,
                'charge'             => $product_rate,
                'discount'           => $disper,
                'discount_amount'    => $disamnt,
                'total'              => $total_price,
            );
            if (!empty($quantity)) {
                $this->db->insert('service_invoice_details', $service_details);
            }
           

        }
         for($j=0;$j<$num_column;$j++){
                $taxfield = 'tax'.$j;
                $taxvalue = 'total_tax'.$j;
              $taxdata[$taxfield]=$this->input->post($taxvalue);
            }
            $taxdata['customer_id'] = $customer_id;
            $taxdata['date']        = (!empty($this->input->post('invoice_date'))?$this->input->post('invoice_date'):date('Y-m-d'));
            $taxdata['relation_id'] = $invoice_id;
            $this->db->insert('tax_collection',$taxdata);

        $message = 'Mr.'.$cusifo->customer_name.',
        '.'Your Service Charge '.$this->input->post('grand_total_price').' You have paid .'.$this->input->post('paid_amount');
        $this->send_sms($cusifo->customer_mobile,$message);
        return $invoice_id;

    }


        public function send_sms($phone=null,$msg=null){
        $config_data = $this->db->select('*')->from('sms_settings')->get()->row();
        if($config_data->isservice == 0){
            return true;
        }else{
        $recipients=$phone;
         $url      = $config_data->url;//"http://sms.sgmh.com/smsapi"; 
         $senderid =$config_data->sender_id;//"8801847169884";
         $apikey= $config_data->api_key;//"C20029865c42c504afc711.77492546";
         $message=$msg;
 //echo "$url?api_key=$apikey&type=text&contacts=$recipients&senderid=$senderid&msg=$message";
         $urltopost = $config_data->url;//"http://sms.sgmh.com/smsapi";
        $datatopost = array (
        "api_key"  => $apikey,
        "type"     => 'text',
        "senderid" => $senderid,
        "msg"      => $message,
        "contacts" => $recipients
);

$ch = curl_init ($urltopost);
curl_setopt ($ch, CURLOPT_POST, true);
curl_setopt ($ch, CURLOPT_POSTFIELDS, $datatopost);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
//print_r($result);
 if ($result === false)
{
echo sprintf('<span>%s</span>CURL error:', curl_error($ch));
return;
}
        curl_close($ch);
        return $result;
    }
    }

}
