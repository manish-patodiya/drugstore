<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Returnse extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('auth');
        $this->load->library('lcustomer');
        $this->load->library('session');
        $this->load->model('Customers');
        $this->auth->check_admin_auth();
    }

    public function return_invoice_entry()
    {
        $invoice_id = $this->input->post('invoice_id');

        $ret_id = $this->generator(15);

        $tran = $this->db->select('*')->from('customer_ledger')->where('invoice_no', $invoice_id)->get()->result();
        foreach ($tran as $value) {}
        $transection_id = $value->transaction_id;

        $total = $this->input->post('grand_total_price');
        $customer_id = $this->input->post('customer_id');
        $isrtn = $this->input->post('rtn');
        $cusifo = $this->db->select('*')->from('customer_information')->where('customer_id', $customer_id)->get()->row();
        $headn = $cusifo->customer_name . '-' . $customer_id;
        $coainfo = $this->db->select('*')->from('acc_coa')->where('HeadName', $headn)->get()->row();
        $customer_headcode = $coainfo->HeadCode;
        $createby = $this->session->userdata('user_id');
        $createdate = date('Y-m-d H:i:s');

        $date = date('Y-m-d');
        $data4 = array(
            'transaction_id' => $transection_id,
            'customer_id' => $customer_id,
            'invoice_no' => $invoice_id,
            'date' => $date,
            'description' => 'Return',
            'amount' => $total,
            'status' => 1,
            'd_c' => 'd',
        );
        $cosdr = array(
            'VNo' => $invoice_id,
            'Vtype' => 'Return',
            'VDate' => $date,
            'COAID' => $customer_headcode,
            'Narration' => 'Customer Return from  ' . $cusifo->customer_name,
            'Debit' => $total,
            'Credit' => 0,
            'IsPosted' => 1,
            'CreateBy' => $createby,
            'CreateDate' => $createdate,
            'IsAppove' => 1,
        );
        $this->db->insert('acc_transaction', $cosdr);

        $this->db->insert('customer_ledger', $data4);

        $quantity = $this->input->post('product_quantity');
        $available_quantity = $this->input->post('available_quantity');

        $rate = $this->input->post('product_rate');
        $p_id = $this->input->post('product_id');

        $total_amount = $this->input->post('total_price');
        $discount_rate = $this->input->post('discount');
        $tax_amount = $this->input->post('tax');
        $soldqty = $this->input->post('sold_qty');
        $batch = $this->input->post('batch_id');

        if (is_array($p_id)) {
            for ($i = 0; $i < count($p_id); $i++) {

                $product_quantity = $quantity[$i] ?: 0;
                $product_rate = $rate[$i];
                $product_id = $p_id[$i];
                //$manufacturer_rate=$this->manufacturer_rate($product_id);
                $sqty = $soldqty[$i];
                $total_price = $total_amount[$i];
                $batch_id = $batch[$i];
                $discount = $discount_rate[$i];
                $tax = -$tax_amount[$i];

                $ads = $this->input->post('radio');
                $data1 = array(
                    'invoice_details_id' => $this->generator(15),
                    'invoice_id' => $invoice_id,
                    'product_id' => $product_id,
                    'quantity' => '-' . $product_quantity,
                    'rate' => $product_rate,
                    'discount' => '-' . $discount,
                    'tax' => $tax,
                    'batch_id' => $batch_id,
                    'paid_amount' => '-' . $total,
                    'total_price' => '-' . $total_price,
                    'status' => 1,
                );

                $data2 = [
                    'product_id' => $product_id,
                    'quantity' => $product_quantity,
                ];

                $returns = array(
                    'return_id' => $ret_id,
                    'invoice_id' => $invoice_id,
                    'product_id' => $product_id,
                    'customer_id' => $this->input->post('customer_id'),
                    'ret_qty' => $product_quantity,
                    'byy_qty' => $sqty,
                    'date_purchase' => $this->input->post('invoice_date'),
                    'date_return' => $date,
                    'product_rate' => $product_rate,
                    'deduction' => $discount,
                    'total_deduct' => $this->input->post('total_discount'),
                    'total_tax' => $this->input->post('total_tax'),
                    'total_ret_amount' => $total_price,
                    'net_total_amount' => $this->input->post('grand_total_price'),
                    'reason' => $this->input->post('details'),
                    'usablity' => $this->input->post('radio'),
                );

                if ($ads) {
                    $this->db->insert('invoice_details', $data1);
                    manage_stock($data2, 'update');
                }
                $this->db->insert('product_return', $returns);

            }
            $gt = $this->db->select('total_amount,total_tax')->where('invoice_id', $invoice_id)->get('invoice')->row();
            $nt = $gt->total_amount - $total;
            $tt = $gt->total_tax - $this->input->post('total_tax');
            $this->db->update('invoice', ['total_amount' => $nt, 'total_tax' => $tt], "invoice_id = $invoice_id");
        }

        return $ret_id;
    }
    ///////#################### manufacturer return  Entry ############///////////
    public function return_manufacturer_entry()
    {
        $purchase_id = $this->input->post('purchase_id');

        $total = $this->input->post('grand_total_price');
        $manufacturer_id = $this->input->post('manufacturer_id');
        $isrtn = $this->input->post('rtn');
        $supinfo = $this->db->select('*')->from('manufacturer_information')->where('manufacturer_id', $manufacturer_id)->get()->row();
        $sup_head = $supinfo->manufacturer_name . '-' . $supinfo->manufacturer_id;
        $sup_coa = $this->db->select('*')->from('acc_coa')->where('HeadName', $sup_head)->get()->row();
        $receive_by = $this->session->userdata('user_id');
        $receive_date = date('Y-m-d');

        $date = date('Y-m-d');
        $data4 = array(
            'transaction_id' => $purchase_id,
            'manufacturer_id' => $manufacturer_id,
            'chalan_no' => null,
            'deposit_no' => $this->auth->generator(10),
            'date' => $date,
            'description' => 'Return',
            'amount' => $total,
            'status' => 1,
            'd_c' => 'c',
        );

        $manufacturerledger = array(
            'VNo' => $purchase_id,
            'Vtype' => 'Return',
            'VDate' => $date,
            'COAID' => $sup_coa ? $sup_coa->HeadCode : "",
            'Narration' => 'manufacturer Return to .' . $supinfo->manufacturer_name,
            'Debit' => 0,
            'Credit' => $total,
            'IsPosted' => 1,
            'CreateBy' => $receive_by,
            'CreateDate' => $receive_date,
            'IsAppove' => 1,
        );

        $this->db->insert('manufacturer_ledger', $data4);
        $this->db->insert('acc_transaction', $manufacturerledger);
        $quantity = $this->input->post('product_quantity');
        $available_quantity = $this->input->post('available_quantity');
        $cartoon = $this->input->post('cartoon');
        $rate = $this->input->post('product_rate');
        $p_id = $this->input->post('product_id');
        $total_amount = $this->input->post('total_price');
        $discount_rate = $this->input->post('discount');
        $soldqty = $this->input->post('ret_qty');
        $batch = $this->input->post('batch_id');
        $strengths = $this->input->post('strength');
        $expire_date = $this->input->post('expire_date');
        $pdid = $this->generator(15);
        $ret_id = $this->generator(15);

        if (is_array($p_id)) {
            for ($i = 0; $i < count($p_id); $i++) {
                $cartoon_quantity = !empty($cartoon) ? $cartoon[$i] : "";
                $product_quantity = $quantity[$i];
                $product_rate = $rate[$i];
                $product_id = $p_id[$i];
                $batch_id = $batch[$i];
                $expire = $expire_date[$i];
                $sqty = $soldqty[$i];
                $total_price = $total_amount[$i];
                $return_id = $ret_id[$i];
                $discount = $discount_rate[$i] ?: 0;
                $strength = $strengths[$i];

                $detais_id = $pdid[$i];
                $data1 = array(
                    'strength' => $strength,
                    'purchase_detail_id' => $this->generator(15),
                    'purchase_id' => $purchase_id,
                    'product_id' => $product_id,
                    'batch_id' => $batch_id,
                    'expeire_date' => $expire,
                    'pack_quantity' => -($product_quantity / $strength),
                    'quantity' => -$product_quantity,
                    'rate' => $product_rate,
                    'manufacturer_pack_price' => $product_rate * $strength,
                    'discount' => -$discount,
                    'total_amount' => -$total_price,
                    'status' => 1,
                );

                $data2 = [
                    'product_id' => $product_id,
                    'quantity' => '-' . $product_quantity,
                ];

                $returns = array(
                    'return_id' => $ret_id,
                    'purchase_id' => $purchase_id,
                    'product_id' => $product_id,
                    'manufacturer_id' => $this->input->post('manufacturer_id'),
                    'ret_qty' => $product_quantity,
                    'byy_qty' => $sqty,
                    'date_purchase' => $this->input->post('return_date'),
                    'date_return' => $date,
                    'product_rate' => $product_rate,
                    'deduction' => $discount,
                    'total_deduct' => $this->input->post('total_discount'),
                    'total_ret_amount' => $total_price,
                    'net_total_amount' => $this->input->post('grand_total_price'),
                    'reason' => $this->input->post('details'),
                    'usablity' => $this->input->post('radio'),
                );
                $this->db->insert('product_purchase_details', $data1);
                manage_stock($data2, 'update');
                $this->db->insert('product_return', $returns);

            }
            $gt = $this->db->select('grand_total_amount')->where('purchase_id', $purchase_id)->get('product_purchase')->row();
            $nt = $gt->grand_total_amount - $total;
            $this->db->update('product_purchase', ['grand_total_amount' => $nt], "purchase_id = $purchase_id");
        }

        return $ret_id;
    }

    // return list count
    public function return_list_count()
    {
        $this->db->select('a.*,b.customer_name');
        $this->db->from('product_return a');
        $this->db->join('customer_information b', 'b.customer_id = a.customer_id');
        $this->db->where('usablity', 1);
        $this->db->group_by('a.invoice_id', 'desc');
        $this->db->limit('500');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        }
        return false;
    }

///start  return list
    public function return_list($perpage, $page)
    {
        $this->db->select('a.net_total_amount,a.*,b.customer_name');
        $this->db->from('product_return a');
        $this->db->join('customer_information b', 'b.customer_id = a.customer_id');
        $this->db->where('usablity', 1);
        $this->db->group_by('a.return_id', 'desc');
        $this->db->limit($perpage, $page);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    // date between search return list  invoice
    public function return_dateWise_invoice($from_date, $to_date, $perpage, $page)
    {
        $dateRange = "a.date_return BETWEEN '$from_date%' AND '$to_date%'";

        $this->db->select('a.net_total_amount,a.*,b.customer_name');
        $this->db->from('product_return a');
        $this->db->join('customer_information b', 'b.customer_id = a.customer_id');
        $this->db->where('usablity', 1);
        $this->db->where($dateRange, null, false);
        $this->db->group_by('a.return_id', 'desc');
        $this->db->limit($perpage, $page);
        $query = $this->db->get();
        return $query->result_array();
    }
// manufacturer return list
    public function manufacturer_return_list($perpage, $page)
    {
        $this->db->select('a.net_total_amount,a.*,b.manufacturer_name');
        $this->db->from('product_return a');
        $this->db->join('manufacturer_information b', 'b.manufacturer_id = a.manufacturer_id');
        $this->db->where('usablity', 2);
        $this->db->group_by('a.return_id', 'desc');
        $this->db->limit($perpage, $page);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
// date between search return list  manufacturer/purchase
    public function return_dateWise_manufacturer($from_date, $to_date, $perpage, $page)
    {
        $dateRange = "a.date_return BETWEEN '$from_date%' AND '$to_date%'";

        $this->db->select('a.net_total_amount,a.*,b.manufacturer_name');
        $this->db->from('product_return a');
        $this->db->join('manufacturer_information b', 'b.manufacturer_id = a.manufacturer_id');
        $this->db->where('usablity', 2);
        $this->db->where($dateRange, null, false);
        $this->db->group_by('a.purchase_id', 'desc');
        $this->db->limit($perpage, $page);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function retrieve_invoice_html_data($ret_id)
    {
        $this->db->select('c.total_ret_amount,
						c.*,
						b.*,
						d.product_id,
						d.product_name,
						d.product_details,
						d.product_model');
        $this->db->from('product_return c');
        $this->db->join('customer_information b', 'b.customer_id = c.customer_id');
        $this->db->join('product_information d', 'd.product_id = c.product_id');
        $this->db->where('c.return_id', $ret_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

    // manufacturer return html data
    public function manufacturer_return_html_data($ret_id)
    {
        $this->db->select('c.total_ret_amount,
						c.*,
						b.*,
						d.product_id,
						d.product_name,
						d.product_details,
						d.product_model');
        $this->db->from('product_return c');
        $this->db->join('manufacturer_information b', 'b.manufacturer_id = c.manufacturer_id');
        $this->db->join('product_information d', 'd.product_id = c.product_id');
        $this->db->where('c.return_id', $ret_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

    public function generator($lenth)
    {
        $number = array("1", "2", "3", "4", "5", "6", "7", "8", "9");

        for ($i = 0; $i < $lenth; $i++) {
            $rand_value = rand(0, 8);
            $rand_number = $number["$rand_value"];

            if (empty($con)) {
                $con = $rand_number;
            } else {
                $con = "$con" . "$rand_number";}
        }
        return $con;
    }
    // wastage return list bellow
    public function wastage_return_list_count()
    {
        $this->db->select('a.*,b.customer_name');
        $this->db->from('product_return a');
        $this->db->join('customer_information b', 'b.customer_id = a.customer_id');
        $this->db->where('usablity', 3);
        $this->db->group_by('a.invoice_id', 'desc');
        $this->db->limit('500');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        }
        return false;
    }
// manufacturer list count
    public function manufacturer_return_list_count()
    {
        $this->db->select('a.*,b.customer_name');
        $this->db->from('product_return a');
        $this->db->join('customer_information b', 'b.customer_id = a.customer_id');
        $this->db->where('usablity', 2);
        $this->db->group_by('a.invoice_id', 'desc');
        $this->db->limit('500');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        }
        return false;
    }
///start  return list
    public function wastage_return_list($perpage, $page)
    {
        $this->db->select('a.net_total_amount,a.*,b.manufacturer_name');
        $this->db->from('product_return a');
        $this->db->join('manufacturer_information b', 'b.manufacturer_id = a.manufacturer_id');
        $this->db->where('usablity', 3);
        $this->db->group_by('a.return_id', 'desc');
        $this->db->limit($perpage, $page);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

    /////////// manufacturer returns form data
    public function manufacturer_return($purchase_id)
    {
        $this->db->select('c.*,a.*,b.*,a.product_id,d.product_name,d.product_model');
        $this->db->from('product_purchase c');
        $this->db->join('product_purchase_details a', 'a.purchase_id = c.purchase_id');
        $this->db->join('product_information d', 'd.product_id = a.product_id');
        $this->db->join('manufacturer_information b', 'd.manufacturer_id = b.manufacturer_id');
        $this->db->where('c.purchase_id', $purchase_id);
        $this->db->group_by('d.product_id', 'desc');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

// return delete with invoice id
    public function returninvoice_delete($invoice_id = null)
    {
        $this->db->where('return_id', $invoice_id)
            ->delete('product_return');

        if ($this->db->affected_rows()) {
            return true;
        } else {
            return false;
        }
    }
// return delete with purchase id
    public function return_purchase_delete($purchase_id = null)
    {
        $this->db->where('return_id', $purchase_id)
            ->delete('product_return');

        if ($this->db->affected_rows()) {
            return true;
        } else {
            return false;
        }
    }

    public function manufacturer_rate($product_id)
    {
        $this->db->select('manufacturer_price');
        $this->db->from('product_information');
        $this->db->where(array('product_id' => $product_id));
        $query = $this->db->get();
        return $query->result_array();

    }

    public function manufacturer_info($manufacturer_id)
    {
        $this->db->select('a.*,b.*');
        $this->db->from('product_purchase a');
        $this->db->join('manufacturer_information b', 'b.manufacturer_id = a.manufacturer_id');
        $this->db->order_by('a.purchase_date', 'desc');
        $this->db->order_by('a.purchase_id', 'desc');
        $this->db->where('b.manufacturer_id', $manufacturer_id);
        $this->db->limit(500);
        $query = $this->db->get();

        $last_query = $this->db->last_query();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    // customer return data
    //Retrieve invoice Edit Data
    public function retrieve_invoice_editdata($invoice_no)
    {
        $this->db->select('
			a.*,
			c.*,
			a.total_tax,
			b.customer_name,
			c.batch_id,
			c.tax as t_p_tax,
			c.product_id,
			d.product_name,
			d.product_model,
			d.tax,
			d.unit
			');
        $this->db->from('invoice a');
        $this->db->join('customer_information b', 'b.customer_id = a.customer_id');
        $this->db->join('invoice_details c', 'c.invoice_id = a.invoice_id');
        $this->db->join('product_information d', 'd.product_id = c.product_id');
        $this->db->where('a.invoice', $invoice_no);
        $this->db->where('c.quantity >', 0);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

    public function return_dateWise_wastage($from_date, $to_date, $perpage, $page)
    {
        $dateRange = "a.date_return BETWEEN '$from_date%' AND '$to_date%'";

        $this->db->select('a.net_total_amount,a.*,b.manufacturer_name');
        $this->db->from('product_return a');
        $this->db->join('manufacturer_information b', 'b.manufacturer_id = a.manufacturer_id');
        $this->db->where('usablity', 3);
        $this->db->where($dateRange, null, false);
        $this->db->group_by('a.purchase_id', 'desc');
        $this->db->limit($perpage, $page);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function wastage_return_list_countdate($from_date, $to_date)
    {
        $dateRange = "a.date_return BETWEEN '$from_date%' AND '$to_date%'";
        $this->db->select('a.net_total_amount,a.*,b.manufacturer_name');
        $this->db->from('product_return a');
        $this->db->join('manufacturer_information b', 'b.manufacturer_id = a.manufacturer_id');
        $this->db->where('usablity', 3);
        $this->db->where($dateRange, null, false);
        $this->db->group_by('a.purchase_id', 'desc');
        $query = $this->db->get();
        return $query->num_rows();
    }
}