<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Fixedasset extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

  
    //asset List
    public function asset_list($per_page, $page) {
        $query = $this->db->select('*')
                ->from('fixed_assets')
                ->order_by('id', 'desc')
                ->limit($per_page, $page)
                ->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

    public function item_code_check($code){
        $this->db->select('*');
        $this->db->from('fixed_assets');
        $this->db->where('item_code', $code);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return true;
        }
        return false;
    }
 public function asset_list_count() {
        $query = $this->db->select('*')
                ->from('fixed_assets')
                ->order_by('id', 'desc')
                ->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        }
        return false;
    }

    //Assets entry
    public function asset_entry($data) {

            $this->db->insert('fixed_assets', $data);
            return TRUE;
        
    }
        //assets search item
    public function assets_search_item($item_code) {
        $this->db->select('*');
        $this->db->from('fixed_assets');
        $this->db->like('item_code', $item_code, 'both');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

       
    /// assets retrieve information
        public function get_total_product($asset_item_code) {
        $this->db->select('*');
        $this->db->from('fixed_assets');
        $this->db->where(array('item_code' => $asset_item_code));
        $assets_information = $this->db->get()->row();

        // $available_quantity = ($total_stockin - $totalmove->total_sale);

        $CI = & get_instance();
        $CI->load->model('Web_settings');
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();

        $data2 = array(
           // 'total_product'  => $available_quantity,
            'purchase_price' => $assets_information->price,
            'item_name'      => $assets_information->item_name,
        );

        return $data2;
    }

public function get_total_assets($asset_item_code,$store_code) {
        $this->db->select('*');
        $this->db->from('fixed_assets');
        $this->db->where(array('item_code' => $asset_item_code));
        $assets_information = $this->db->get()->row();

        $this->db->select('SUM(a.qty) as total_purchase');
        $this->db->from('stock_fixed_asset a');
        $this->db->where('a.item_code', $asset_item_code);
        $this->db->where('a.store_code', $store_code);
        $total_purchase = $this->db->get()->row()->total_purchase;

        $this->db->select('SUM(a.qty) as total_t_in');
        $this->db->from('store_wise_fixed_assets a');
        $this->db->where('a.item_code', $asset_item_code);
        $this->db->where('a.to_store_code', $store_code);
        $total_transfer_in = $this->db->get()->row()->total_t_in;

        $this->db->select('SUM(a.qty) as total_t_out');
        $this->db->from('store_wise_fixed_assets a');
        $this->db->where('a.item_code', $asset_item_code);
        $this->db->where('a.from_store_code', $store_code);
        $total_transfer_out = $this->db->get()->row()->total_t_out;

         $available_quantity = (($total_purchase + $total_transfer_in) - $total_transfer_out);

        $CI = & get_instance();
        $CI->load->model('Web_settings');
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();

        $data2 = array(
            'total_item'     => $available_quantity,
            'purchase_price' => $assets_information->price,
            'item_name'      => $assets_information->item_name,
        );

        return $data2;
    }
    public function purchase_entry() {

    $item_c = $this->input->post('item_code');
    $supplier_id = $this->input->post('supplier_id');
    $supinfo =$this->db->select('*')->from('supplier_information')->where('supplier_id',$supplier_id)->get()->row();
    $sup_head = $supinfo->supplier_name.'-'.$supinfo->supplier_id;
    $sup_coa = $this->db->select('*')->from('acc_coa')->where('HeadName',$sup_head)->get()->row();
        $receive_by=$this->session->userdata('user_id');
        $receive_date = date('Y-m-d');
        $createdate   = date('Y-m-d H:i:s');
        $chalan_no    = date('YmdHi');
        $payment_type = $this->input->post('paytype');
        $bank_id = $this->input->post('bank_id');
        $bankname = $this->db->select('bank_name')->from('bank_add')->where('bank_id',$bank_id)->get()->row()->bank_name;
       $bcoaid = $this->db->select('HeadCode')->from('acc_coa')->where('HeadName',$bankname)->get()->row()->HeadCode;
        $data = array(
            'p_date'             => $this->input->post('purchase_date'),
            'supplier_id'    => $this->input->post('supplier_id'),
            'grand_total'        => $this->input->post('grand_total_price'),
            'payment_type'       => $payment_type,
            'bank_id'            => $bank_id,
        );
       $this->db->insert('asset_purchase', $data);
           $purchase_id = $this->db->insert_id();

     $cashinhand = array(
      'VNo'            =>  $purchase_id,
      'Vtype'          =>  'Purcahse Assets',
      'VDate'          =>  $this->input->post('purchase_date'),
      'COAID'          =>  1020101,
      'Narration'      =>  'Cash in Hand For Voucher No'.$purchase_id,
      'Debit'          =>  0,
      'Credit'         =>  $this->input->post('grand_total_price'),
      'IsPosted'       =>  1,
      'CreateBy'       =>  $receive_by,
      'CreateDate'     =>  $receive_date,
      'IsAppove'       =>  1
    ); 

         $bankcredit = array(
      'VNo'            =>  $purchase_id,
      'Vtype'          =>  'Purcahse Assets',
      'VDate'          =>  $this->input->post('purchase_date'),
      'COAID'          =>  $bcoaid,
      'Narration'      =>  'Fixed assets purchase',
      'Debit'          =>  0,
      'Credit'         =>  $this->input->post('grand_total_price'),
      'IsPosted'       =>  1,
      'CreateBy'       =>  $receive_by,
      'CreateDate'     =>  $receive_date,
      'IsAppove'       =>  1
    ); 


                //supplier Debit
        $purchasecoatran = array(
          'VNo'            =>  $purchase_id,
          'Vtype'          =>  'Purcahse Assets',
          'VDate'          =>  $this->input->post('purchase_date'),
          'COAID'          =>  $sup_coa->HeadCode,
          'Narration'      =>  'Purchase Assets Purchase No.'.$purchase_id,
          'Debit'          =>  $this->input->post('grand_total_price'),
          'Credit'         =>  0,
          'IsPosted'       =>  1,
          'CreateBy'       =>  $receive_by,
          'CreateDate'     =>  $receive_date,
          'IsAppove'       =>  1
        ); 

        //expense for fixed assets
        $fixedassetexpense = array(
          'VNo'            =>  $purchase_id,
          'Vtype'          =>  'Purcahse Assets',
          'VDate'          =>  $this->input->post('purchase_date'),
          'COAID'          =>  405,
          'Narration'      =>  'Purchase Assets Purchase No.'.$purchase_id,
          'Debit'          =>  0,
          'Credit'         =>  $this->input->post('grand_total_price'),
          'IsPosted'       =>  1,
          'CreateBy'       =>  $receive_by,
          'CreateDate'     =>  $receive_date,
          'IsAppove'       =>  1
        ); 
        $this->db->insert('acc_transaction',$fixedassetexpense);
         $accsupplier_credit = array(
          'VNo'            =>  $purchase_id,
          'Vtype'          =>  'Assets',
          'VDate'          =>  $this->input->post('purchase_date'),
          'COAID'          =>  $sup_coa->HeadCode,
          'Narration'      =>  'Purchase Assets Purchase No.'.$purchase_id,
          'Debit'          =>  0,
          'Credit'         =>  $this->input->post('grand_total_price'),
          'IsPosted'       =>  1,
          'CreateBy'       =>  $receive_by,
          'CreateDate'     =>  $receive_date,
          'IsAppove'       =>  1
        ); 
          ///Inventory Debit
       $coscr = array(
      'VNo'            =>  $purchase_id,
      'Vtype'          =>  'Assets',
      'VDate'          =>  $this->input->post('purchase_date'),
      'COAID'          =>  10107,
      'Narration'      =>  'Inventory Debit For Purchase Assets Purchase No'.$purchase_id,
      'Debit'          =>  $this->input->post('grand_total_price'),
      'Credit'         =>  0,//purchase price asbe
      'IsPosted'       => 1,
      'CreateBy'       => $receive_by,
      'CreateDate'     => $createdate,
      'IsAppove'       => 1
    );  
         ///Inventory Credit
       $inventory_cdredit = array(
      'VNo'            =>  $purchase_id,
      'Vtype'          =>  'Assets',
      'VDate'          =>  $this->input->post('purchase_date'),
      'COAID'          =>  10107,
      'Narration'      =>  'Inventory Debit For Purchase Assets Purchase No'.$purchase_id,
      'Debit'          =>  0,
      'Credit'         =>  $this->input->post('grand_total_price'),//purchase price asbe
      'IsPosted'       => 1,
      'CreateBy'       => $receive_by,
      'CreateDate'     => $createdate,
      'IsAppove'       => 1
    );  
        $ledger = array(
        'transaction_id' => $purchase_id,
        'chalan_no'      => $chalan_no,
        'supplier_id'    => $this->input->post('supplier_id'),
        'amount'         => $this->input->post('grand_total_price'),
        'date'           => $this->input->post('purchase_date'),
        'description'    => '',
        'status'         => 1,
        'd_c'            => 'd',
        );
        $ledger_credit = array(
        'transaction_id' => $purchase_id,
        'chalan_no'      => $chalan_no,
        'supplier_id'=> $this->input->post('supplier_id'),
        'amount'         => $this->input->post('grand_total_price'),
        'date'           => $this->input->post('purchase_date'),
        'description'    => '',
        'status'         => 1,
        'd_c'            => 'c',
        );
     

 
        $this->db->insert('acc_transaction', $inventory_cdredit);
        $this->db->insert('acc_transaction',$accsupplier_credit);
        $this->db->insert('supplier_ledger',$ledger_credit);
        if($payment_type == 1){
 
        $this->db->insert('supplier_ledger', $ledger);
        $this->db->insert('acc_transaction',$coscr);
        $this->db->insert('acc_transaction',$purchasecoatran);
        $this->db->insert('acc_transaction',$cashinhand);
    }
          if($payment_type == 3){
        
        $this->db->insert('supplier_ledger', $ledger);
        $this->db->insert('acc_transaction',$coscr);
        $this->db->insert('acc_transaction',$purchasecoatran);
        $this->db->insert('acc_transaction',$bankcredit);
        $this->db->insert('acc_transaction',$cashinhand);

    }
    

        $rate     = $this->input->post('item_price');
        $quantity = $this->input->post('item_qty');
        $t_price  = $this->input->post('total_price');

        for ($i = 0, $n = count($item_c); $i < $n; $i++) {
            $item_qunatity    = $quantity[$i];
            $item_price       = $rate[$i];
            $item_code        = $item_c[$i];
            $total_price      = $t_price[$i];

            $asset_purchase_details = array(
                'purchase_id'        => $purchase_id,
                'item_code'          => $item_code,
                'qty'                => $item_qunatity,
                'price'              => $item_price,
            );

            if (!empty($quantity)) {
                $this->db->insert('stock_fixed_asset', $asset_purchase_details);
            }
        }
        return true;
    }

    // purchase update 
    public function update_purchase(){
    $purchase_id = $this->input->post('id');  
    $item_c = $this->input->post('item_code');
    $supplier_id = $this->input->post('supplier_id');
    $supinfo =$this->db->select('*')->from('supplier_information')->where('supplier_id',$supplier_id)->get()->row();
    $sup_head     = $supinfo->supplier_id.'-'.$supinfo->supplier_name;
    $sup_coa      = $this->db->select('*')->from('acc_coa')->where('HeadName',$sup_head)->get()->row();
    $receive_by   = $this->session->userdata('user_id');
    $receive_date = date('Y-m-d');
    $createdate   = date('Y-m-d H:i:s');
    $chalan_no    = date('YmdHi');
    $payment_type = $this->input->post('paytype');
    $bank_id      = $this->input->post('bank_id');
    $bankname = $this->db->select('bank_name')->from('bank_add')->where('bank_id',$bank_id)->get()->row()->bank_name;
    $bcoaid = $this->db->select('HeadCode')->from('acc_coa')->where('HeadName',$bankname)->get()->row()->HeadCode;

        $data = array(
            'p_date'             => $this->input->post('purchase_date'),
            'supplier_id'        => $this->input->post('supplier_id'),
            'grand_total'        => $this->input->post('grand_total_price'),
            'payment_type'       => $payment_type,
            'bank_id'            =>  $bank_id,
        );
        $this->db->where('id', $purchase_id);
        $this->db->update('asset_purchase', $data);
        //purchase delete
        $this->db->where('purchase_id', $purchase_id);
        $this->db->delete('stock_fixed_asset');
        //acc transactio delete
        $this->db->where('VNo', $purchase_id);
        $this->db->where('Vtype', 'Assets');
        $this->db->delete('acc_transaction');
        //supplier ledger delete
         $this->db->where('transaction_id', $purchase_id);
        $this->db->where('description', 'Purchase Asset');
        $this->db->delete('supplier_ledger');
                //supplier Debit
        $purchasecoatran = array(
          'VNo'            =>  $purchase_id,
          'Vtype'          =>  'Assets',
          'VDate'          =>  $this->input->post('purchase_date'),
          'COAID'          =>  $sup_coa->HeadCode,
          'Narration'      =>  'Purchase Assets Purchase No.'.$purchase_id,
          'Debit'          =>  $this->input->post('grand_total_price'),
          'Credit'         => 0,
          'IsPosted'       =>  1,
          'CreateBy'       =>  $receive_by,
          'CreateDate'     =>  $receive_date,
          'IsAppove'       =>  1
        ); 
         $accsupplier_credit = array(
          'VNo'            =>  $purchase_id,
          'Vtype'          =>  'Assets',
          'VDate'          =>  $this->input->post('purchase_date'),
          'COAID'          =>  $sup_coa->HeadCode,
          'Narration'      =>  'Purchase Assets Purchase No.'.$purchase_id,
          'Debit'          =>  0,
          'Credit'         =>  $this->input->post('grand_total_price'),
          'IsPosted'       =>  1,
          'CreateBy'       =>  $receive_by,
          'CreateDate'     =>  $receive_date,
          'IsAppove'       =>  1
        ); 
         // Cash in Hand credit
              $cashinhand = array(
      'VNo'            =>  $purchase_id,
      'Vtype'          =>  'Purcahse Assets',
      'VDate'          =>  $this->input->post('purchase_date'),
      'COAID'          =>  1020101,
      'Narration'      =>  'Cash in Hand For Voucher No'.$purchase_id,
      'Debit'          =>  0,
      'Credit'         =>  $this->input->post('grand_total_price'),
      'IsPosted'       =>  1,
      'CreateBy'       =>  $receive_by,
      'CreateDate'     =>  $receive_date,
      'IsAppove'       =>  1
    ); 
        // bank credit
         $bankcredit = array(
      'VNo'            =>  $purchase_id,
      'Vtype'          =>  'Purcahse Assets',
      'VDate'          =>  $this->input->post('purchase_date'),
      'COAID'          =>  $bcoaid,
      'Narration'      =>  'Fixed assets purchase',
      'Debit'          =>  0,
      'Credit'         =>  $this->input->post('grand_total_price'),
      'IsPosted'       =>  1,
      'CreateBy'       =>  $receive_by,
      'CreateDate'     =>  $receive_date,
      'IsAppove'       =>  1
    ); 
          //expense for fixed assets
        $fixedassetexpense = array(
          'VNo'            =>  $purchase_id,
          'Vtype'          =>  'Purcahse Assets',
          'VDate'          =>  $this->input->post('purchase_date'),
          'COAID'          =>  405,
          'Narration'      =>  'Purchase Assets Purchase No.'.$purchase_id,
          'Debit'          =>  0,
          'Credit'         =>  $this->input->post('grand_total_price'),
          'IsPosted'       =>  1,
          'CreateBy'       =>  $receive_by,
          'CreateDate'     =>  $receive_date,
          'IsAppove'       =>  1
        ); 
        $this->db->insert('acc_transaction',$fixedassetexpense);
          ///Inventory Debit
       $coscr = array(
      'VNo'            =>  $purchase_id,
      'Vtype'          =>  'Assets',
      'VDate'          =>  $this->input->post('purchase_date'),
      'COAID'          =>  10107,
      'Narration'      =>  'Inventory Debit For Purchase Assets Purchase No'.$purchase_id,
      'Debit'          =>  $this->input->post('grand_total_price'),
      'Credit'         =>  0,//purchase price asbe
      'IsPosted'       => 1,
      'CreateBy'       => $receive_by,
      'CreateDate'     => $createdate,
      'IsAppove'       => 1
    );  
         ///Inventory Credit
       $inventory_cdredit = array(
      'VNo'            =>  $purchase_id,
      'Vtype'          =>  'Assets',
      'VDate'          =>  $this->input->post('purchase_date'),
      'COAID'          =>  10107,
      'Narration'      =>  'Inventory Debit For Purchase Assets Purchase No'.$purchase_id,
      'Debit'          =>  0,
      'Credit'         =>  $this->input->post('grand_total_price'),//purchase price asbe
      'IsPosted'       => 1,
      'CreateBy'       => $receive_by,
      'CreateDate'     => $createdate,
      'IsAppove'       => 1
    );  
        $ledger = array(
        'transaction_id' => $purchase_id,
        'chalan_no'      => $chalan_no,
        'supplier_id'=> $this->input->post('supplier_id'),
        'amount'         => $this->input->post('grand_total_price'),
        'date'           => $this->input->post('purchase_date'),
        'description'    => 'Purchase Asset',
        'status'         => 1,
        'd_c'            => 'd',
        );
        $ledger_credit = array(
        'transaction_id' => $purchase_id,
        'chalan_no'      => $chalan_no,
        'supplier_id'=> $this->input->post('supplier_id'),
        'amount'         => $this->input->post('grand_total_price'),
        'date'           => $this->input->post('purchase_date'),
        'description'    => 'Purchase Asset',
        'status'         => 1,
        'd_c'            => 'c',
        );
     

 
        $this->db->insert('acc_transaction', $inventory_cdredit);
        $this->db->insert('acc_transaction',$accsupplier_credit);
        $this->db->insert('supplier_ledger',$ledger_credit);
         if($payment_type == 1){
 
        $this->db->insert('supplier_ledger', $ledger);
        $this->db->insert('acc_transaction',$coscr);
        $this->db->insert('acc_transaction',$purchasecoatran);
        $this->db->insert('acc_transaction',$cashinhand);
    }
          if($payment_type == 3){
        
        $this->db->insert('supplier_ledger', $ledger);
        $this->db->insert('acc_transaction',$coscr);
        $this->db->insert('acc_transaction',$purchasecoatran);
        $this->db->insert('acc_transaction',$bankcredit);
        $this->db->insert('acc_transaction',$cashinhand);

    }
    

        $rate     = $this->input->post('item_price');
        $quantity = $this->input->post('item_qty');
        $t_price  = $this->input->post('total_price');

        for ($i = 0, $n = count($item_c); $i < $n; $i++) {
            $item_qunatity   = $quantity[$i];
            $item_price       = $rate[$i];
            $item_code        = $item_c[$i];
            $total_price      = $t_price[$i];

            $asset_purchase_details = array(
                'purchase_id'        => $purchase_id,
                'item_code'          => $item_code,
                'qty'                => $item_qunatity,
                'price'              => $item_price,
            );

            if (!empty($quantity)) {
                $this->db->insert('stock_fixed_asset', $asset_purchase_details);
            }
        }
        return true;
    }
    //Retrieve Product Edit Data
    public function retrieve_product_editdata($product_id) {
        $this->db->select('*');
        $this->db->from('product_information');
        $this->db->where('product_id', $product_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

 // purchase update data
public function retrieve_purchase_editdata($purchase_id){
        $this->db->select('a.*,a.id as purchase_id,b.*');
        $this->db->from('asset_purchase a');
        $this->db->join('supplier_information b','a.supplier_id=b.supplier_id');
        $this->db->where('a.id', $purchase_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;

}
public function retrieve_asset_purchase_detailsdata($purchase_id){
        $this->db->select('a.*,(a.qty*a.price) as total,b.*');
        $this->db->from('stock_fixed_asset a');
        $this->db->join('fixed_assets b','a.item_code=b.item_code');
        $this->db->where('a.purchase_id', $purchase_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;

}

    //Retrieve company Edit Data
    public function retrieve_company() {
        $this->db->select('*');
        $this->db->from('company_information');
        $this->db->limit('1');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

    //Update assets
    public function update_assets($data, $item_code,$id,$n_item_code) {
            $this->db->where('id', $id);
            $this->db->update('fixed_assets', $data);
            $stock_asset = array(
            'item_code' => $n_item_code,
           );
            $this->db->where('item_code', $item_code);
            $this->db->update('stock_fixed_asset', $stock_asset);
            $this->db->where('item_code', $item_code);
            $this->db->update('store_wise_fixed_assets', $stock_asset);
            return true;
      
    }

    // Delete Assets Item
    public function delete_assets($item_code) {

        $this->db->select('item_code');
        $this->db->from('fixed_assets');
        $this->db->where('item_code', $item_code);
        $query = $this->db->get();
        $affected_row = $this->db->affected_rows();

        if ($affected_row > 0) {
            $this->db->where('item_code', $item_code);
            $this->db->delete('fixed_assets');
            $this->db->where('item_code', $item_code);
            $this->db->delete('stock_fixed_asset');
            $this->db->where('item_code', $item_code);
            $this->db->delete('store_wise_fixed_assets');
            $this->session->set_userdata(array('message' => display('successfully_delete')));
            return true;
        } else {
            $this->session->set_userdata(array('error_message' => display('please_try_again')));
            return false;
        }
    }

    // Assets Purchase list
    public function asset_purchase_list($per_page, $page) {
        $query = $this->db->select('a.*,b.supplier_name')
                ->from('asset_purchase a')
                ->join('supplier_information b','a.supplier_id = b.supplier_id')
                ->order_by('a.id', 'desc')
                ->limit($per_page, $page)
                ->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
public function asset_purchase_list_count() {
        $query = $this->db->select('a.*,b.supplier_name')
                ->from('asset_purchase a')
                ->join('supplier_information b','a.supplier_id = b.supplier_id')
                ->order_by('a.id', 'desc')
                ->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        }
        return false;
    }

    // Invoice Data for specific data
    public function invoice_data($product_id) {
        $this->db->select('a.*,b.*,c.customer_name');
        $this->db->from('invoice a');
        $this->db->join('invoice_details b', 'b.invoice_id = a.invoice_id');
        $this->db->join('customer_information c', 'c.customer_id = a.customer_id');
        $this->db->where('b.product_id', $product_id);
        $this->db->order_by('a.invoice_id', 'asc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

    //Retrieve purchase_details_data
    public function purchase_details_data($purchase_id) {
        $this->db->select('a.*,c.*,d.item_code,d.item_name,(c.qty*c.price) as total_amount');
        $this->db->from('asset_purchase a');
        $this->db->join('stock_fixed_asset c', 'c.purchase_id = a.id');
        $this->db->join('fixed_assets d', 'd.item_code = c.item_code');
        $this->db->where('a.id', $purchase_id);
        $this->db->group_by('d.item_code');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

   
    // asset updata
    public function retrieve_asset_editdata($item_code){
        $this->db->select('*');
        $this->db->from('fixed_assets');
        $this->db->where('item_code', $item_code);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

       
        public function supplier_search_bycode($supplier_code){
 $query = $this->db->select('*')->from('supplier_information')
        ->group_start()
                ->like('supplier_name', $supplier_code)
        ->group_end()
        ->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();  
        }
        return false;
    }

    // Bank List
    public function bank_list(){
    $bdata =  $this->db->select('*')->from('bank_add')->get()->result_array();
    return $bdata;
    }

    // Supplier data
    public function supplier_data($supplier_id){
   $data = $this->db->select('*')
                    ->from('supplier_information')
                    ->where('supplier_id',$supplier_id)
                    ->get()
                    ->result_array();
    }
}
