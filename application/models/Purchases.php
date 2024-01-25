<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Purchases extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //Count purchase
    public function count_purchase()
    {
        $this->db->select('a.*,b.manufacturer_name');
        $this->db->from('product_purchase a');
        $this->db->join('manufacturer_information b', 'b.manufacturer_id = a.manufacturer_id');
        $this->db->order_by('a.purchase_date', 'desc');
        $query = $this->db->get();

        $last_query = $this->db->last_query();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        }
        return false;
    }

    public function getPurchaseList($postData = null)
    {
        $this->load->library('occational');
        $this->load->model('Web_settings');
        $currency_details = $this->Web_settings->retrieve_setting_editdata();
        $response = array();
        $fromdate = $this->input->post('fromdate');
        $todate = $this->input->post('todate');
        if (!empty($fromdate)) {
            $datbetween = "(a.purchase_date BETWEEN '$fromdate' AND '$todate')";
        } else {
            $datbetween = "";
        }
        ## Read value
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value

        ## Search
        $searchQuery = "";
        if ($searchValue != '') {
            $searchQuery = " (b.manufacturer_name like '%" . $searchValue . "%' or a.chalan_no like '%" . $searchValue . "%' or a.purchase_id like'%" . $searchValue . "%')";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->from('product_purchase a');
        $this->db->join('manufacturer_information b', 'b.manufacturer_id = a.manufacturer_id', 'left');
        if (!empty($fromdate) && !empty($todate)) {
            $this->db->where($datbetween);
        }
        if ($searchValue != '') {
            $this->db->where($searchQuery);
        }

        $records = $this->db->get()->result();
        //echo $this->db->last_query();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        $this->db->from('product_purchase a');
        $this->db->join('manufacturer_information b', 'b.manufacturer_id = a.manufacturer_id', 'left');
        if (!empty($fromdate) && !empty($todate)) {
            $this->db->where($datbetween);
        }
        if ($searchValue != '') {
            $this->db->where($searchQuery);
        }

        $records = $this->db->get()->result();
        //echo $this->db->last_query();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('a.*,b.manufacturer_name');
        $this->db->from('product_purchase a');
        $this->db->join('manufacturer_information b', 'b.manufacturer_id = a.manufacturer_id', 'left');
        if (!empty($fromdate) && !empty($todate)) {
            $this->db->where($datbetween);
        }
        if ($searchValue != '') {
            $this->db->where($searchQuery);
        }

        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get()->result();
        // echo $this->db->last_query();
        $data = array();
        $sl = 1;
        foreach ($records as $record) {
            $due_amt = $record->grand_total_amount - $record->paid_amt;
            $button = '';
            $base_url = base_url();
            $jsaction = "return confirm('Are You Sure ?')";
            if ($this->permission1->method('manage_purchase', 'update')->access()) {
                $button .= ' <a pid="' . $record->purchase_id . '" class="btn btn-danger btn-sm btn-pay-history"  title="History">Payment</a>';
            }
            $button .= '  <a href="' . $base_url . 'Cpurchase/invoice_html/' . $record->purchase_id . '" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="left" title="' . display('purchase_details') . '">View</a>';
            if ($this->permission1->method('manage_purchase', 'update')->access()) {
                $button .= ' <a style="margin-right: 5px;" href="' . $base_url . 'Cpurchase/purchase_update_form/' . $record->purchase_id . '" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="' . display('update') . '">Edit</a>';
            }

            if ($this->permission1->method('manage_purchase', 'delete')->access()) {
                $button .= '<a href="' . $base_url . 'Cpurchase/delete_purchase/' . $record->purchase_id . '" class="btn btn-danger btn-sm"  data-toggle="tooltip" data-placement="left" title="' . display('delete') . '"  onclick="' . $jsaction . '"><i class="fa fa-trash"></i></a>';
            }

            $data[] = array(
                'sl' => $sl,
                'chalan_no' => ' <a href="' . $base_url . 'Cpurchase/invoice_html/' . $record->purchase_id . '" class="" data-toggle="tooltip" data-placement="left" title="' . display('purchase_details') . '">' . $record->chalan_no . '</a>',
                'purchase_id' => $record->purchase_id,
                'manufacturer_name' => $record->manufacturer_name,
                'purchase_id' => $record->purchase_id,
                'purchase_date' => $record->purchase_date,
                'total_amount' => $record->grand_total_amount,
                'due_amount' => $due_amt,
                'button' => $button,
            );
            $sl++;
        }

        ## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecordwithFilter,
            "iTotalDisplayRecords" => $totalRecords,
            "aaData" => $data,
        );

        return $response;
    }
    //purchase List
    public function purchase_list($per_page, $page)
    {
        $this->db->select('a.*,b.manufacturer_name');
        $this->db->from('product_purchase a');
        $this->db->join('manufacturer_information b', 'b.manufacturer_id = a.manufacturer_id');
        $this->db->order_by('a.purchase_date', 'desc');
        $this->db->order_by('purchase_id', 'desc');
        $this->db->limit($per_page, $page);
        $query = $this->db->get();

        $last_query = $this->db->last_query();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
//purchase info by invoice id
    public function purchase_list_invoice_id($invoice_no)
    {
        $this->db->select('a.*,b.manufacturer_name');
        $this->db->from('product_purchase a');
        $this->db->join('manufacturer_information b', 'b.manufacturer_id = a.manufacturer_id');
        $this->db->where('a.chalan_no', $invoice_no);
        $this->db->order_by('a.purchase_date', 'desc');
        $this->db->order_by('purchase_id', 'desc');
        $query = $this->db->get();

        $last_query = $this->db->last_query();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    //Select All manufacturer List
    public function select_all_manufacturer()
    {
        $query = $this->db->select('*')
            ->from('manufacturer_information')
            ->where('status', '1')
            ->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

    //purchase Search  List
    public function purchase_by_search($manufacturer_id)
    {
        $this->db->select('a.*,b.manufacturer_name');
        $this->db->from('product_purchase a');
        $this->db->join('manufacturer_information b', 'b.manufacturer_id = a.manufacturer_id');
        $this->db->where('b.manufacturer_id', $manufacturer_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    //Count purchase
    public function purchase_entry()
    {
        $purchase_id = date('YmdHis');
        $p_id = $this->input->post('product_id');
        $chaln_no = $this->input->post('chalan_no');
        $manufacturer_id = $this->input->post('manufacturer_id');
        //manufacturer coa head
        $manufacturer_info = $this->db->select('*')->from('manufacturer_information')->where('manufacturer_id', $manufacturer_id)->get()->row();
        $manuf_head = $manufacturer_info->manufacturer_name . '-' . $manufacturer_id;
        $manuf_coa = $this->db->select('*')->from('acc_coa')->where('HeadName', $manuf_head)->get()->row();
        $receive_by = $this->session->userdata('user_id');
        $receive_date = date('Y-m-d');
        $createdate = date('Y-m-d H:i:s');
        $bank_id = $this->input->post('bank_id');
        $bankcoaid = '';
        if (!empty($bank_id)) {
            $bankname = $this->db->select('bank_name')->from('bank_add')->where('bank_id', $bank_id)->get()->row()->bank_name;
            $bankcoaid = $this->db->select('HeadCode')->from('acc_coa')->where('HeadName', $bankname)->get()->row()->HeadCode;
        }

        $this->db->select('*');
        $this->db->from('product_purchase');
        $this->db->where('status', 1);
        $this->db->where('chalan_no', $chaln_no);
        $this->db->where('manufacturer_id', $manufacturer_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $this->session->set_flashdata('error_message', display('Choose_another_invno'));
            redirect(base_url('Cpurchase'));
            exit();
        }

        //manufacturer & product id relation ship checker.
        for ($i = 0, $n = count($p_id); $i < $n; $i++) {
            $product_id = $p_id[$i];
            $value = $this->product_manufacturer_check($product_id, $manufacturer_id);
            if ($value == 0) {
                $this->session->set_userdata(array('message' => "product_and_manufacturer_did_not_match"));
                redirect(base_url('Cpurchase'));
                exit();
            }
        }

        $paid_amt = $this->input->post('paid_amt');

        if ($paid_amt) {
            $data0 = [
                'purchase_id' => $purchase_id,
                'payment_amt' => $paid_amt,
                'payment_date' => $this->input->post('purchase_date'),
                'payment_type' => $this->input->post('paytype'),
            ];
            $this->db->insert('product_purchase_paydate', $data0);
        }

        $data = array(
            'purchase_id' => $purchase_id,
            'chalan_no' => $this->input->post('chalan_no'),
            'manufacturer_id' => $this->input->post('manufacturer_id'),
            'grand_total_amount' => $this->input->post('grand_total_price'),
            'total_discount' => $this->input->post('total_discount'),
            'paid_amt' => $paid_amt,
            'purchase_date' => $this->input->post('purchase_date'),
            'invoice_date' => $this->input->post('invoice_date'),
            'purchase_details' => $this->input->post('purchase_details'),
            'status' => 1,
            'bank_id' => $this->input->post('bank_id'),
            'payment_type' => $this->input->post('paytype'),
            'other_charges' => $this->input->post('other_charges'),
        );
        $this->db->insert('product_purchase', $data);
        //manufacturer credit
        $purchasecoatran = array(
            'VNo' => $purchase_id,
            'Vtype' => 'Purchase',
            'VDate' => $this->input->post('purchase_date'),
            'COAID' => $manuf_coa ? $manuf_coa->HeadCode : "",
            'Narration' => 'Purchase No.' . $purchase_id,
            'Debit' => 0,
            'Credit' => $this->input->post('grand_total_price'),
            'IsPosted' => 1,
            'CreateBy' => $receive_by,
            'CreateDate' => $receive_date,
            'IsAppove' => 1,
        );
        ///Inventory Debit
        $coscr = array(
            'VNo' => $purchase_id,
            'Vtype' => 'Purchase',
            'VDate' => $this->input->post('purchase_date'),
            'COAID' => 10107,
            'Narration' => 'Inventory Debit For Purchase No' . $purchase_id,
            'Debit' => $this->input->post('grand_total_price'),
            'Credit' => 0, //purchase price asbe
            'IsPosted' => 1,
            'CreateBy' => $receive_by,
            'CreateDate' => $createdate,
            'IsAppove' => 1,
        );
        // Expense for company
        $expense = array(
            'VNo' => $purchase_id,
            'Vtype' => 'Purchase',
            'VDate' => $this->input->post('purchase_date'),
            'COAID' => 402,
            'Narration' => 'Company Credit For Purchase No' . $purchase_id,
            'Debit' => $this->input->post('grand_total_price'),
            'Credit' => 0, //purchase price asbe
            'IsPosted' => 1,
            'CreateBy' => $receive_by,
            'CreateDate' => $createdate,
            'IsAppove' => 1,
        );
        $cashinhand = array(
            'VNo' => $purchase_id,
            'Vtype' => 'Purchase',
            'VDate' => $this->input->post('purchase_date'),
            'COAID' => 1020101,
            'Narration' => 'Cash in Hand For Purchase No' . $purchase_id,
            'Debit' => 0,
            'Credit' => $this->input->post('grand_total_price'),
            'IsPosted' => 1,
            'CreateBy' => $receive_by,
            'CreateDate' => $createdate,
            'IsAppove' => 1,
        );

        $manufacurerdebit = array(
            'VNo' => $purchase_id,
            'Vtype' => 'Purchase',
            'VDate' => $this->input->post('purchase_date'),
            'COAID' => $manuf_coa ? $manuf_coa->HeadCode : "",
            'Narration' => 'Purchase No.' . $purchase_id,
            'Debit' => $this->input->post('grand_total_price'),
            'Credit' => 0,
            'IsPosted' => 1,
            'CreateBy' => $receive_by,
            'CreateDate' => $receive_date,
            'IsAppove' => 1,
        );

        // bank ledger
        $bankc = array(
            'VNo' => $purchase_id,
            'Vtype' => 'Purchase',
            'VDate' => $this->input->post('purchase_date'),
            'COAID' => $bankcoaid,
            'Narration' => 'Paid amount for Purchase No ' . $purchase_id,
            'Debit' => 0,
            'Credit' => $this->input->post('grand_total_price'),
            'IsPosted' => 1,
            'CreateBy' => $receive_by,
            'CreateDate' => $createdate,
            'IsAppove' => 1,
        );
        // Bank summary for credit
        $banksummary = array(
            'date' => $this->input->post('purchase_date'),
            'ac_type' => 'Credit(-)',
            'bank_id' => $this->input->post('bank_id'),
            'description' => 'product purchase',
            'deposite_id' => $purchase_id,
            'dr' => null,
            'cr' => $this->input->post('grand_total_price'),
            'ammount' => $this->input->post('grand_total_price'),
            'status' => 1,

        );

        $ledger = array(
            'transaction_id' => $purchase_id,
            'chalan_no' => $this->input->post('chalan_no'),
            'manufacturer_id' => $this->input->post('manufacturer_id'),
            'amount' => $this->input->post('grand_total_price'),
            'date' => $this->input->post('purchase_date'),
            'description' => 'Purchase From Manufacturer. ' . $this->input->post('purchase_details'),
            'status' => 1,
            'd_c' => 'c',
        );
        $ledger_debit = array(
            'transaction_id' => $purchase_id,
            'chalan_no' => $this->input->post('chalan_no'),
            'manufacturer_id' => $this->input->post('manufacturer_id'),
            'amount' => $this->input->post('grand_total_price'),
            'date' => $this->input->post('purchase_date'),
            'description' => 'Purchase From Manufacturer. ' . $this->input->post('purchase_details'),
            'status' => 1,
            'd_c' => 'd',
        );
        $this->db->insert('manufacturer_ledger', $ledger);
        $this->db->insert('acc_transaction', $coscr);
        $this->db->insert('acc_transaction', $purchasecoatran);
        $this->db->insert('acc_transaction', $expense);
        if ($this->input->post('paytype') == 2) {
            $this->db->insert('acc_transaction', $bankc);
            $this->db->insert('bank_summary', $banksummary);
            $this->db->insert('manufacturer_ledger', $ledger_debit);
            $this->db->insert('acc_transaction', $manufacurerdebit);
        } else {
            $this->db->insert('acc_transaction', $cashinhand);
            $this->db->insert('manufacturer_ledger', $ledger_debit);
            $this->db->insert('acc_transaction', $manufacurerdebit);
        }
        $rate = $this->input->post('product_rate');
        $quantity = $this->input->post('product_quantity');
        $free = $this->input->post('free');
        $t_price = $this->input->post('total_price');
        $discount = $this->input->post('discount');
        $batch = $this->input->post('batch_id');
        $exp_date = $this->input->post('expeire_date');
        $strengths = $this->input->post('strength');

        for ($i = 0, $n = count($p_id); $i < $n; $i++) {
            $free_qty = $free[$i] ?: 0;
            $product_quantity = $quantity[$i] + $free_qty;
            $product_rate = $rate[$i];
            $strength = $strengths[$i];
            $product_id = $p_id[$i];
            $total_price = $t_price[$i];
            $disc = $discount[$i] / 100;
            $batch_id = $batch[$i];
            $expre_date = $exp_date[$i];

            $data1 = array(
                'purchase_detail_id' => $this->generator(15),
                'purchase_id' => $purchase_id,
                'product_id' => $product_id,
                'quantity' => $product_quantity * ($strength ?: 1),
                'pack_quantity' => $product_quantity,
                'free' => $free_qty,
                'rate' => $product_rate / ($strength ?: 1),
                'manufacturer_pack_price' => $product_rate,
                'total_amount' => $total_price,
                'discount' => $disc,
                'batch_id' => $batch_id,
                'strength' => $strength,
                'expeire_date' => $expre_date,
                'status' => 1,
            );

            $data2 = [
                'product_id' => $product_id,
                'quantity' => $product_quantity * ($strength ?: 1),
            ];

            if (!empty($quantity)) {
                $this->db->insert('product_purchase_details', $data1);
                manage_stock($data2, 'update');
            }

        }

        $message = 'Mr/Mrs.' . $manufacturer_info->manufacturer_name . ',
        ' . 'You have Sold ' . $this->input->post('grand_total_price');
        $this->send_sms($manufacturer_info->mobile, $message);
        return $purchase_id;

    }

    public function payment_entry()
    {
        $paid_amt = $this->input->post('payment_amt');
        $date = $this->input->post('payment_date');
        $id = $this->input->post('pid');
        $type = $this->input->post('payment_type');
        if ($id && $paid_amt && $type) {
            $data0 = [
                'purchase_id' => $id,
                'payment_amt' => $paid_amt,
                'payment_date' => $date,
                'payment_type' => $type,
            ];
            $this->db->insert('product_purchase_paydate', $data0);

            $ta = $this->db->select('SUM(payment_amt) as total')->from('product_purchase_paydate')->where('purchase_id', $id)->get()->result();
            $data = array(
                'paid_amt' => $ta[0]->total,
            );
            $this->db->where('purchase_id', $id);
            $this->db->update('product_purchase', $data);
            return true;
        }
        return false;
    }
    //send sms
    public function send_sms($phone = null, $msg = null)
    {
        $config_data = $this->db->select('*')->from('sms_settings')->get()->row();
        if ($config_data->ispurchase == 0) {
            return true;
        } else {
            $recipients = $phone;
            $url = $config_data->url; //"http://sms.sgmh.com/smsapi";
            $senderid = $config_data->sender_id; //"8801847169884";
            $apikey = $config_data->api_key; //"C20029865c42c504afc711.77492546";
            $message = $msg;
            //echo "$url?api_key=$apikey&type=text&contacts=$recipients&senderid=$senderid&msg=$message";
            $urltopost = $config_data->url; //"http://sms.sgmh.com/smsapi";
            $datatopost = array(
                "api_key" => $apikey,
                "type" => 'text',
                "senderid" => $senderid,
                "msg" => $message,
                "contacts" => $recipients,
            );

            $ch = curl_init($urltopost);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $datatopost);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
//print_r($result);
            if ($result === false) {
                echo sprintf('<span>%s</span>CURL error:', curl_error($ch));
                return;
            }
            curl_close($ch);
            return $result;
        }
    }
    //Retrieve purchase Edit Data
    public function retrieve_purchase_editdata($purchase_id)
    {
        $this->db->select('a.*,
						b.*,
                        (b.discount*100) as discount,
                        (b.discount*b.total_amount) as discount_price,
						c.product_id,
						c.product_name,
                        c.mrp,
                        (c.tax*100) as tax,
						c.product_model,
						d.manufacturer_id,
						d.manufacturer_name'
        );
        $this->db->from('product_purchase a');
        $this->db->join('product_purchase_details b', 'b.purchase_id =a.purchase_id');
        $this->db->join('product_information c', 'c.product_id =b.product_id');
        $this->db->join('manufacturer_information d', 'd.manufacturer_id = a.manufacturer_id');
        $this->db->where('a.purchase_id', $purchase_id);
        $this->db->order_by('b.id', 'asc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
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
    //Update Categories
    public function update_purchase()
    {
        $purchase_id = $this->input->post('purchase_id');
        $bank_id = $this->input->post('bank_id');
        $bankcoaid = '';
        if (!empty($bank_id)) {
            $bankname = $this->db->select('bank_name')->from('bank_add')->where('bank_id', $bank_id)->get()->row()->bank_name;
            $bankcoaid = $this->db->select('HeadCode')->from('acc_coa')->where('HeadName', $bankname)->get()->row()->HeadCode;
        }
        $manufacturer_id = $this->input->post('manufacturer_id');
        //manufacturer coa head
        $manufacturer_info = $this->db->select('*')->from('manufacturer_information')->where('manufacturer_id', $manufacturer_id)->get()->row();
        $manuf_head = $manufacturer_info->manufacturer_name . '-' . $manufacturer_id;
        $manuf_coa = $this->db->select('*')->from('acc_coa')->where('HeadName', $manuf_head)->get()->row();

        $receive_by = $this->session->userdata('user_id');
        $receive_date = date('Y-m-d');
        $createdate = date('Y-m-d H:i:s');
        $paid_amt = $this->input->post('paid_amt');

        $data = array(
            'purchase_id' => $purchase_id,
            'chalan_no' => $this->input->post('chalan_no'),
            'manufacturer_id' => $this->input->post('manufacturer_id'),
            'grand_total_amount' => $this->input->post('grand_total_price'),
            'total_discount' => $this->input->post('total_discount'),
            'paid_amt' => $paid_amt,
            'purchase_date' => $this->input->post('purchase_date'),
            'invoice_date' => $this->input->post('invoice_date'),
            'purchase_details' => $this->input->post('purchase_details'),
            'bank_id' => $this->input->post('bank_id'),
            'payment_type' => $this->input->post('paytype'),
            'other_charges' => $this->input->post('other_charges'),
        );
        $cashinhand = array(
            'VNo' => $purchase_id,
            'Vtype' => 'Purchase',
            'VDate' => $this->input->post('purchase_date'),
            'COAID' => 1020101,
            'Narration' => 'Cash in Hand For Purchase No' . $purchase_id,
            'Debit' => 0,
            'Credit' => $this->input->post('grand_total_price'),
            'IsPosted' => 1,
            'CreateBy' => $receive_by,
            'CreateDate' => $createdate,
            'IsAppove' => 1,
        );
        // bank ledger
        $bankc = array(
            'VNo' => $purchase_id,
            'Vtype' => 'Purchase',
            'VDate' => $this->input->post('purchase_date'),
            'COAID' => $bankcoaid,
            'Narration' => 'Paid amount for Purchase No ' . $purchase_id,
            'Debit' => 0,
            'Credit' => $this->input->post('grand_total_price'),
            'IsPosted' => 1,
            'CreateBy' => $receive_by,
            'CreateDate' => $createdate,
            'IsAppove' => 1,
        );
        // Bank summary for credit
        $banksummary = array(
            'date' => $this->input->post('purchase_date'),
            'ac_type' => 'Credit(-)',
            'bank_id' => $this->input->post('bank_id'),
            'description' => 'product purchase',
            'deposite_id' => $purchase_id,
            'dr' => null,
            'cr' => $this->input->post('grand_total_price'),
            'ammount' => $this->input->post('grand_total_price'),
            'status' => 1,
        );

        $ledger = array(
            'transaction_id' => $purchase_id,
            'chalan_no' => $this->input->post('chalan_no'),
            'manufacturer_id' => $this->input->post('manufacturer_id'),
            'amount' => $this->input->post('grand_total_price'),
            'date' => $this->input->post('purchase_date'),
            'description' => 'Purchase From Manufacturer. ' . $this->input->post('purchase_details'),
            'status' => 1,
            'd_c' => 'c',
        );
        $ledger_debit = array(
            'transaction_id' => $purchase_id,
            'chalan_no' => $this->input->post('chalan_no'),
            'manufacturer_id' => $this->input->post('manufacturer_id'),
            'amount' => $this->input->post('grand_total_price'),
            'date' => $this->input->post('purchase_date'),
            'description' => 'Purchase From Manufacturer. ' . $this->input->post('purchase_details'),
            'status' => 1,
            'd_c' => 'd',
        );
        $purchasecoatran = array(
            'VNo' => $purchase_id,
            'Vtype' => 'Purchase',
            'VDate' => $this->input->post('purchase_date'),
            'COAID' => $manuf_coa ? $manuf_coa->HeadCode : "",
            'Narration' => 'Purchase No.' . $purchase_id,
            'Debit' => 0,
            'Credit' => $this->input->post('grand_total_price'),
            'IsPosted' => 1,
            'CreateBy' => $receive_by,
            'CreateDate' => $receive_date,
            'IsAppove' => 1,
        );
        $manufacurerdebit = array(
            'VNo' => $purchase_id,
            'Vtype' => 'Purchase',
            'VDate' => $this->input->post('purchase_date'),
            'COAID' => $manuf_coa ? $manuf_coa->HeadCode : "",
            'Narration' => 'Purchase No.' . $purchase_id,
            'Debit' => $this->input->post('grand_total_price'),
            'Credit' => 0,
            'IsPosted' => 1,
            'CreateBy' => $receive_by,
            'CreateDate' => $receive_date,
            'IsAppove' => 1,
        );
        ///Inventory Debit
        $coscr = array(
            'VNo' => $purchase_id,
            'Vtype' => 'Purchase',
            'VDate' => $this->input->post('purchase_date'),
            'COAID' => 10107,
            'Narration' => 'Inventory Debit For Purchase No' . $purchase_id,
            'Debit' => $this->input->post('grand_total_price'),
            'Credit' => 0, //purchase price asbe
            'IsPosted' => 1,
            'CreateBy' => $receive_by,
            'CreateDate' => $createdate,
            'IsAppove' => 1,
        );
        // Expense for company
        $expense = array(
            'VNo' => $purchase_id,
            'Vtype' => 'Purchase',
            'VDate' => $this->input->post('purchase_date'),
            'COAID' => 402,
            'Narration' => 'Company Credit For Purchase No' . $purchase_id,
            'Debit' => $this->input->post('grand_total_price'),
            'Credit' => 0, //purchase price asbe
            'IsPosted' => 1,
            'CreateBy' => $receive_by,
            'CreateDate' => $createdate,
            'IsAppove' => 1,
        );

        $purchase_all_data = $this->db->select('product_id,sum(quantity) as quantity')->from('product_purchase_details')->where('purchase_id', $purchase_id)->group_by('product_id')->get()->result();
        foreach ($purchase_all_data as $v) {
            $delete_row_data = [
                'product_id' => $v->product_id,
                'quantity' => "-" . ($v->quantity ?: 0),
            ];
            manage_stock($delete_row_data, 'update');
        }

        if ($purchase_id != '') {
            $this->db->where('purchase_id', $purchase_id);
            $this->db->update('product_purchase', $data);
            //manufacturer ledger update
            $this->db->where('transaction_id', $purchase_id);
            $this->db->update('manufacturer_ledger', $ledger);
            $this->db->where('purchase_id', $purchase_id);
            $this->db->delete('product_purchase_details');
            $this->db->where('VNo', $purchase_id);
            $this->db->delete('acc_transaction');
            $this->db->where('deposite_id', $purchase_id);
            $this->db->delete('bank_summary');

            $this->db->insert('acc_transaction', $coscr);
            $this->db->insert('acc_transaction', $purchasecoatran);
            $this->db->insert('acc_transaction', $expense);
            //bank summary

            if ($this->input->post('paytype') == 2) {
                $this->db->insert('acc_transaction', $bankc);
                $this->db->insert('bank_summary', $banksummary);
                $this->db->insert('manufacturer_ledger', $ledger_debit);
                $this->db->insert('acc_transaction', $manufacurerdebit);
            } else {
                $this->db->insert('acc_transaction', $cashinhand);
                $this->db->insert('manufacturer_ledger', $ledger_debit);
                $this->db->insert('acc_transaction', $manufacurerdebit);
            }
        }

        $rate = $this->input->post('product_rate');
        $p_id = $this->input->post('product_id');

        $quantity = $this->input->post('product_quantity');
        $free = $this->input->post('free');
        $t_price = $this->input->post('total_price');

        $discount = $this->input->post('discount');
        $batch = $this->input->post('batch_id');
        $exp_date = $this->input->post('expeire_date');
        $strengths = $this->input->post('strength');
        for ($i = 0, $n = count($p_id); $i < $n; $i++) {
            $free_qty = $free[$i];
            $product_quantity = $quantity[$i] + $free_qty;
            $product_rate = $rate[$i];
            $product_id = $p_id[$i];
            $total_price = $t_price[$i];
            $batch_id = $batch[$i];
            $expre_date = $exp_date[$i];
            $disc = $discount[$i] / 100;
            $strength = $strengths[$i];
            $data1 = array(
                'purchase_detail_id' => $this->generator(15),
                'purchase_id' => $purchase_id,
                'product_id' => $product_id,
                'quantity' => $product_quantity * ($strength ?: 1),
                'pack_quantity' => $product_quantity,
                'free' => $free_qty,
                'rate' => $product_rate / ($strength ?: 1),
                'manufacturer_pack_price' => $product_rate,
                'batch_id' => $batch_id,
                'expeire_date' => $expre_date,
                'total_amount' => $total_price,
                'strength' => $strength,
                'discount' => $disc,
            );

            $data2 = [
                'product_id' => $product_id,
                'quantity' => $product_quantity * ($strength ?: 1),
            ];

            if (!empty($quantity)) {
                $this->db->insert('product_purchase_details', $data1);
                manage_stock($data2, 'update');
            }
        }
        return $purchase_id;
    }
    // Delete purchase Item

    public function purchase_search_list($cat_id, $company_id)
    {
        $this->db->select('a.*,b.sub_category_name,c.category_name');
        $this->db->from('purchases a');
        $this->db->join('purchase_sub_category b', 'b.sub_category_id = a.sub_category_id');
        $this->db->join('purchase_category c', 'c.category_id = b.category_id');
        $this->db->where('a.sister_company_id', $company_id);
        $this->db->where('c.category_id', $cat_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    //Retrieve purchase_details_data
    public function purchase_details_data($purchase_id)
    {
        $this->db->select('a.*,b.*,c.*,e.purchase_details,d.product_id,d.product_name,d.strength,d.product_model');
        $this->db->from('product_purchase a');
        $this->db->join('manufacturer_information b', 'b.manufacturer_id = a.manufacturer_id');
        $this->db->join('product_purchase_details c', 'c.purchase_id = a.purchase_id');
        $this->db->join('product_information d', 'd.product_id = c.product_id');
        $this->db->join('product_purchase e', 'e.purchase_id = c.purchase_id');
        $this->db->where('a.purchase_id', $purchase_id);
        $this->db->group_by('d.product_id');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

    //This function will check the product & manufacturer relationship.
    public function product_manufacturer_check($product_id, $manufacturer_id)
    {
        $this->db->select('*');
        $this->db->from('product_information');
        $this->db->where('product_id', $product_id);
        $this->db->where('manufacturer_id', $manufacturer_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return true;
        }
        return 0;
    }
    //This function is used to Generate Key
    public function generator($lenth)
    {
        $number = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "N", "M", "O", "P", "Q", "R", "S", "U", "V", "T", "W", "X", "Y", "Z", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0");

        for ($i = 0; $i < $lenth; $i++) {
            $rand_value = rand(0, 61);
            $rand_number = $number["$rand_value"];

            if (empty($con)) {
                $con = $rand_number;
            } else {
                $con = "$con" . "$rand_number";}
        }
        return $con;
    }

    public function purchase_delete($purchase_id = null)
    {
        //manage stock in stock_management table
        $purchase_all_data = $this->db->select('product_id,sum(quantity) as quantity')->from('product_purchase_details')->where('purchase_id', $purchase_id)->group_by('product_id')->get()->result();
        foreach ($purchase_all_data as $v) {
            $delete_row_data = [
                'product_id' => $v->product_id,
                'quantity' => "-" . ($v->quantity ?: 0),
            ];
            manage_stock($delete_row_data, 'update');
        }
        //Delete product_purchase table
        $this->db->where('purchase_id', $purchase_id);
        $this->db->delete('product_purchase');
        //Delete product_purchase_details table
        $this->db->where('purchase_id', $purchase_id);
        $this->db->delete('product_purchase_details');
        //Delete manufacturer ledger
        $this->db->where('transaction_id', $purchase_id);
        $this->db->delete('manufacturer_ledger');
        return true;
        if ($this->db->affected_rows()) {
            return true;
        } else {
            return false;
        }
    }
//purchase list date to date
    public function purchase_list_date_to_date($start, $end)
    {
        $this->db->select('a.*,b.manufacturer_name');
        $this->db->from('product_purchase a');
        $this->db->join('manufacturer_information b', 'b.manufacturer_id = a.manufacturer_id');
        $this->db->order_by('a.purchase_date', 'desc');
        $this->db->where('a.purchase_date >=', $start);
        $this->db->where('a.purchase_date <=', $end);
        $query = $this->db->get();

        $last_query = $this->db->last_query();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

    public function purchasedatabyid($purchase_id)
    {
        $this->db->select('a.*,b.manufacturer_name');
        $this->db->from('product_purchase a');
        $this->db->join('manufacturer_information b', 'b.manufacturer_id = a.manufacturer_id', 'left');
        $this->db->where('a.purchase_id', $purchase_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    //purchase details by id
    public function purchase_detailsbyid($purchase_id)
    {
        $this->db->select('a.*,b.*');
        $this->db->from('product_purchase_details a'); //
        $this->db->join('product_information b', 'b.product_id = a.product_id', 'left');
        $this->db->where('a.purchase_id', $purchase_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;

    }

    // manufacturer info
    public function manufacturer_info($id)
    {
        $this->db->select('*');
        $this->db->from('manufacturer_information');
        $this->db->where('manufacturer_id', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

}