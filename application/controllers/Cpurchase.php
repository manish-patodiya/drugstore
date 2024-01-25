<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Cpurchase extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $CI = &get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->library('lpurchase');
        $content = $CI->lpurchase->purchase_add_form();
        $this->template->full_admin_html_view($content);
    }

    //Manage purchase
    public function manage_purchase()
    {
        $this->load->library('lpurchase');
        $content = $this->lpurchase->purchase_list();
        $this->template->full_admin_html_view($content);
    }

    public function CheckPurchaseList()
    {
        // GET data
        $this->load->model('Purchases');
        $postData = $this->input->post();
        $data = $this->Purchases->getPurchaseList($postData);
        echo json_encode($data);
    }
//purchase list by invoice no
    public function purchase_info_id()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lpurchase');
        $CI->load->model('Purchases');
        $invoice_no = $this->input->post('invoice_no');
        $content = $this->lpurchase->purchase_list_invoice_no($invoice_no);
        $this->template->full_admin_html_view($content);
    }
    //Insert purchase
    public function insert_purchase()
    {
        $CI = &get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->model('Purchases');
        $purchase_id = $CI->Purchases->purchase_entry();
        $this->session->set_userdata(array('message' => display('successfully_added')));
        redirect("Cpurchase/invoice_html/" . $purchase_id);

    }

    //purchase Update Form
    public function purchase_update_form($purchase_id)
    {
        $CI = &get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->library('lpurchase');
        $content = $CI->lpurchase->purchase_edit_data($purchase_id);
        $this->template->full_admin_html_view($content);
    }

    // purchase Update
    public function purchase_update()
    {
        $CI = &get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->model('Purchases');
        $purchase_id = $CI->Purchases->update_purchase();
        $this->session->set_userdata(array('message' => display('successfully_updated')));
        redirect("Cpurchase/invoice_html/" . $purchase_id);
    }

    //Purchase item by search
    public function purchase_item_by_search()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lpurchase');
        $manufacturer_id = $this->input->post('manufacturer_id');
        $content = $CI->lpurchase->purchase_by_search($manufacturer_id);
        $this->template->full_admin_html_view($content);
    }

    //Product search by manufacturer id
    public function product_search_by_manufacturer()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lpurchase');
        $CI->load->model('Manufacturers');
        $manufacturer_id = $this->input->post('manufacturer_id');
        $product_name = $this->input->post('product_name');
        $product_info = $CI->Manufacturers->product_search_item($manufacturer_id, $product_name);
        if (!empty($product_info)) {
            $list[''] = '';
            foreach ($product_info as $value) {
                $json_product[] = array('label' => $value['product_name'], 'value' => $value['product_id']);
            }
        } else {
            $json_product[] = 'No Medicine Found';
        }
        echo json_encode($json_product);

    }

    //Retrive right now inserted data to cretae html
    public function purchase_details_data($purchase_id)
    {
        $CI = &get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->library('lpurchase');
        $content = $CI->lpurchase->purchase_details_data($purchase_id);
        $this->template->full_admin_html_view($content);
    }

    public function delete_purchase($purchase_id = null)
    {
        $this->load->model('Purchases');
        if ($this->Purchases->purchase_delete($purchase_id)) {
            #set success message
            $this->session->set_flashdata('message', display('delete_successfully'));
        } else {
            #set exception message
            $this->session->set_flashdata('error_message', display('please_try_again'));

        }
        redirect(base_url('Cpurchase/manage_purchase'));
    }
    // purchase info date to date
    public function manage_purchase_date_to_date()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lpurchase');
        $CI->load->model('Purchases');
        $start = $this->input->post('from_date');
        $end = $this->input->post('to_date');

        $content = $this->lpurchase->purchase_list_date_to_date($start, $end);
        $this->template->full_admin_html_view($content);
    }
    // search batch id
    public function batch_search_by_product()
    {

        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lpurchase');
        $CI->load->model('Products');
        $product_id = $this->input->post('product_id');

        $content = $CI->Products->batch_search_item($product_id);

        if (empty($content)) {
            echo "No Product Found !";
        } else {
            // Select option created for product
            echo "<select name=\"batch_id[]\"   class=\"batch_id_1 form-control\" id=\"batch_id_1\">";
            echo "<option value=\"0\">" . display('select_one') . "</option>";
            foreach ($content as $product) {
                echo "<option value=" . $product['batch_id'] . ">";
                echo $product['batch_id'];
                echo "</option>";
            }
            echo "</select>";
        }
    }
    //Csv Purchase upload
    public function uploadCsv_Purchase()
    {
        $count = 0;
        $fp = fopen($_FILES['upload_csv_file']['tmp_name'], 'r') or die("can't open file");

        if (($handle = fopen($_FILES['upload_csv_file']['tmp_name'], 'r')) !== false) {

            while ($csv_line = fgetcsv($fp, 1024)) {
                //keep this if condition if you want to remove the first row
                for ($i = 0, $j = count($csv_line); $i < $j; $i++) {
                    $insert_csv = array();
                    $insert_csv['manufacturer_name'] = (!empty($csv_line[0]) ? $csv_line[0] : null);
                    $insert_csv['purchase_date'] = (!empty($csv_line[1]) ? $csv_line[1] : null);
                    $insert_csv['purchase_id'] = (!empty($csv_line[2]) ? $csv_line[2] : null);
                    $insert_csv['details'] = (!empty($csv_line[3]) ? $csv_line[3] : null);
                    $insert_csv['product_name'] = (!empty($csv_line[4]) ? $csv_line[4] : null);
                    $insert_csv['batch_id'] = (!empty($csv_line[5]) ? $csv_line[5] : null);
                    $insert_csv['expiry_date'] = (!empty($csv_line[6]) ? $csv_line[6] : null);
                    $insert_csv['qty'] = (!empty($csv_line[7]) ? $csv_line[7] : null);
                    $insert_csv['manufacturer_price'] = (!empty($csv_line[8]) ? $csv_line[8] : null);
                }
                $product_id = $this->db->select('product_id')->from('product_information')->where('product_name', $insert_csv['product_name'])->get()->row()->product_id;
                $manufacturer_id = $this->db->select('manufacturer_id')->from('manufacturer_information')->where('manufacturer_name', $insert_csv['manufacturer_name'])->get()->row()->manufacturer_id;
                $purchase_id = $insert_csv['purchase_id'];
                $chalan_no = date(ymdHi);
                $purchasedata = array(
                    'purchase_id' => $purchase_id,
                    'chalan_no' => $chalan_no,
                    'manufacturer_id' => $manufacturer_id,
                    'grand_total_amount' => $insert_csv['manufacturer_price'] * $insert_csv['qty'],
                    'total_discount' => 0,
                    'purchase_date' => date("Y-m-d", strtotime($insert_csv['purchase_date'])),
                    'purchase_details' => $insert_csv['details'],
                    'status' => 1,
                );

                $manufacturer_ledger = array(
                    'transaction_id' => $purchase_id,
                    'chalan_no' => $chalan_no,
                    'manufacturer_id' => $manufacturer_id,
                    'amount' => $insert_csv['manufacturer_price'] * $insert_csv['qty'],
                    'date' => date("Y-m-d", strtotime($insert_csv['purchase_date'])),
                    'description' => 'Purchase From Manufacturer. ' . $insert_csv['details'],
                    'status' => 1,
                );
                $purchasedetails = array(
                    'purchase_detail_id' => $this->generator(15),
                    'purchase_id' => $purchase_id,
                    'product_id' => $product_id,
                    'quantity' => $insert_csv['qty'],
                    'rate' => $insert_csv['manufacturer_price'],
                    'total_amount' => $insert_csv['manufacturer_price'] * $insert_csv['qty'],
                    'discount' => 0,
                    'batch_id' => $insert_csv['batch_id'],
                    'expeire_date' => date("Y-m-d", strtotime($insert_csv['expiry_date'])),
                    'status' => 1,
                );

                if ($count > 0) {
                    $this->db->insert('product_purchase_details', $purchasedetails);
                    $pur_main = $this->db->select('*')->from('product_purchase')->where_in('purchase_id', $purchase_id)->get()->num_rows();
                    if ($pur_main < 1) {
                        $this->db->insert('product_purchase', $purchasedata);
                        $this->db->insert('manufacturer_ledger', $manufacturer_ledger);
                    } else {
                        $purtotal = $this->db->select('*')->from('product_purchase_details')->where_in('purchase_id', $purchasedata)->get()->result();
                        $total = 0;
                        foreach ($purtotal as $totalpurchase) {
                            $producttotal = $totalpurchase->quantity * $totalpurchase->rate;
                            $total += $producttotal;
                        }
                        $purupdate = array(
                            'grand_total_amount' => $total,
                        );
                        $purdetailsupdate = array(
                            'amount' => $total,
                        );
                        $this->db->where('purchase_id', $purchase_id);
                        $this->db->update('product_purchase', $purupdate);
                        $this->db->where('transaction_id', $purchase_id);
                        $this->db->update('manufacturer_ledger', $purdetailsupdate);
                    }

                }
                $count++;
            }

        }
        //     $this->db->select('*');
        //     $this->db->from('manufacturer_information');
        //     $this->db->where('status',1);
        // $query = $this->db->get();
        // foreach ($query->result() as $row) {
        //     $json_product[] = array('label'=>$row->manufacturer_name,'value'=>$row->manufacturer_id);
        // }
        // $cache_file = './my-assets/js/admin_js/json/manufacturer.json';
        // $productList = json_encode($json_product);
        // file_put_contents($cache_file,$productList);
        fclose($fp) or die("can't close file");
        $this->session->set_userdata(array('message' => display('successfully_added')));
        redirect(base_url('Cpurchase/manage_purchase'));

    }

    public function get_payment_details()
    {
        $id = $this->input->post('pid');
        $pd = $this->db->select('*')->from('product_purchase_paydate')->where('purchase_id', $id)->get()->result();
        $ta = $this->db->select('grand_total_amount,paid_amt')->from('product_purchase')->where('purchase_id', $id)->get()->result();
        $due = $ta[0]->grand_total_amount - $ta[0]->paid_amt;
        foreach ($pd as $key => $value) {
            if ($value->payment_type == 1) {
                $value->payment_type = "Cash";
            } else if ($value->payment_type == 3) {
                $value->payment_type = "UPI";
            } else if ($value->payment_type == 4) {
                $value->payment_type = "Credit Card";
            } else if ($value->payment_type == 5) {
                $value->payment_type = "Cheque";
            } else {
                $value->payment_type = "Cash";
            }
        }
        if (!empty($pd)) {
            echo json_encode([
                "status" => 1,
                "msg" => "Successfully fetched",
                "data" => $pd,
                'due' => $due,
            ]);
        } else {
            echo json_encode([
                "status" => 0,
                "msg" => "Failed",
                "data" => '',
                "due" => $due,
            ]);
        }
    }

    public function insert_payment()
    {
        $CI = &get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->model('Purchases');
        $purchase_id = $CI->Purchases->payment_entry();
        $this->session->set_userdata(array('message' => display('successfully_added')));
        redirect("Cpurchase/manage_purchase");
    }

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

    public function invoice_html($purchase_id)
    {
        $CI = &get_instance();
        $CI->load->library('lpurchase');
        $content = $CI->lpurchase->purchase_inovice_data($purchase_id);
        $this->template->full_admin_html_view($content);
    }
}