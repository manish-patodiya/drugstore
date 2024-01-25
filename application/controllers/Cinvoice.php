<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Cinvoice extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $CI = &get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->library('linvoice');
        $content = $CI->linvoice->invoice_add_form();
        $this->template->full_admin_html_view($content);
    }
    //Insert invoice
    public function insert_invoice()
    {
        $CI = &get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->model('Invoices');
        // $CI->permission1->method('invoice','create')->redirect();
        $invoice_id = $CI->Invoices->invoice_entry();
        $this->session->set_userdata(array('message' => display('successfully_added')));
        //$this->invoice_inserted_data($invoice_id);
        redirect("Cinvoice/invoice_inserted_data/" . $invoice_id);
    }

    public function manual_sales_insert()
    {
        $CI = &get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->model('Invoices');
        $invoice_id = $CI->Invoices->invoice_entry();
        if (!empty($invoice_id)) {
            $data['status'] = true;
            $data['invoice_id'] = $invoice_id;
            $data['details'] = $this->load->view('invoice/invoice_html', $data, true);
            $data['message'] = display('save_successfully');
        } else {
            $data['status'] = false;
            $data['error_message'] = 'Sorry';

        }
        // $this->session->set_userdata(array('message' => display('successfully_added')));
        echo json_encode($data);
    }

    public function invoice_inserted_data_manual()
    {
        $CI = &get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->library('linvoice');
        $invoice_id = $this->input->post('invoice_id');
        $content = $CI->linvoice->invoice_html_data_manual($invoice_id);
        $this->template->full_admin_html_view($content);
    }
    public function pos_invoice_inserted_data_manual()
    {
        $CI = &get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->library('linvoice');
        $invoice_id = $this->input->post('invoice_id');
        $content = $CI->linvoice->pos_invoice_html_data_manual($invoice_id);
        $this->template->full_admin_html_view($content);
    }

    //invoice Update Form
    public function invoice_update_form($invoice_id)
    {
        $CI = &get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->library('linvoice');
        //$CI->permission1->method('invoice','update')->redirect();
        $content = $CI->linvoice->invoice_edit_data($invoice_id);

        $this->template->full_admin_html_view($content);
    }
    // invoice Update
    public function invoice_update()
    {
        $CI = &get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->model('Invoices');
        //$CI->permission1->method('invoice','update')->redirect();
        $invoice_id = $CI->Invoices->update_invoice();
        $this->session->set_userdata(array('message' => display('successfully_updated')));
        redirect("Cinvoice/invoice_inserted_data/" . $invoice_id);
    }
    //Search Inovoice Item
    public function search_inovoice_item()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('linvoice');

        $customer_id = $this->input->post('customer_id');
        $content = $CI->linvoice->search_inovoice_item($customer_id);
        $this->template->full_admin_html_view($content);
    }
    //Manage invoice list
    public function manage_invoice()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('linvoice');
        $CI->load->model('Invoices');
        $content = $this->linvoice->invoice_list();
        $this->template->full_admin_html_view($content);
    }

    public function CheckInvoiceList()
    {
        // GET data
        $this->load->model('Invoices');
        $postData = $this->input->post();
        $data = $this->Invoices->getInvoiceList($postData);
        echo json_encode($data);
    }
    // search invoice by invoice id
    public function manage_invoice_invoice_id()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('linvoice');
        $CI->load->model('Invoices');
        //check permission
        //$CI->permission1->method('invoice','read')->redirect();

        $invoice_no = $this->input->post('invoice_no');
        $content = $this->linvoice->invoice_list_invoice_no($invoice_no);
        $this->template->full_admin_html_view($content);
    }
    // invoice list date to date
    public function date_to_date_invoice()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('linvoice');
        $CI->load->model('Invoices');

        //check permission

        //$CI->permission1->method('invoice','read')->redirect();

        #
        #pagination starts
        #
        $config["base_url"] = base_url('Cinvoice/date_to_date_invoice/');
        $config["total_rows"] = $this->Invoices->invoice_list_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;
        $config["num_links"] = 5;
        /* This Application Must Be Used With BootStrap 3 * */
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tag_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        /* ends of bootstrap */
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $links = $this->pagination->create_links();
        #
        #pagination ends
        #
        $from_date = $this->input->post('from_date');
        $to_date = $this->input->post('to_date');
        $content = $this->linvoice->invoice_list_date_to_date($from_date, $to_date, $links, $config["per_page"], $page);
        $this->template->full_admin_html_view($content);
    }

    //POS invoice page load
    public function pos_invoice()
    {
        $CI = &get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->library('linvoice');

        //$CI->permission1->method('invoice','create')->redirect();

        $content = $CI->linvoice->pos_invoice_add_form();
        $this->template->full_admin_html_view($content);
    }

    //Insert pos invoice
    public function insert_pos_invoice()
    {
        $CI = &get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->model('Invoices');
        $CI->load->model('Web_settings');
        $CI->load->model('Products');
        // $CI->permission1->method('invoice','create')->redirect();

        $product_id = $this->input->post('product_id');

        $product_details = $CI->Invoices->pos_invoice_setup($product_id);
        $batch = $CI->Products->batch_search_item($product_id);
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $taxfield = $CI->db->select('tax_name,default_value')
            ->from('tax_settings')
            ->get()
            ->result_array();
        $prinfo = $this->db->select('*')->from('product_information')->where('product_id', $product_id)->get()->result_array();
        $tr = " ";
        if (!empty($product_details)) {
            $product_id = $this->generator(5);

            //Batch id retrive from database
            $html = "";
            if (empty($batch)) {
                $html .= "No Product Found !";
            } else {
                // Select option created for product
                $html .= "<select name=\"batch_id[]\"   class=\"batch_id_" . $product_details->product_id . " form-control\" id=\"batch_id_" . $product_details->product_id . "\" required=\"required\" onchange=\"product_stock('" . $product_details->product_id . "')\">";
                $html .= "<option>" . display('select_one') . "</option>";
                foreach ($batch as $product) {
                    $html .= "<option value=" . $product['batch_id'] . ">" . $product['batch_id'] . "</option>";
                }
                $html .= "</select>";
            }

            $tr .= "<tr id=\"row_" . $product_details->product_id . "\">
						<td class=\"\" style=\"width:220px\">
							<input type=\"text\" name=\"product_name\" onkeypress=\"invoice_productList('" . $product_details->product_id . "');\" class=\"form-control productSelection \" value='" . $product_details->product_name . ($product_details->strength ? "- (" . $product_details->strength . ")" : "") . "' placeholder='" . display('product_name') . "' required=\"\" id=\"product_name_" . $product_details->product_id . "\" tabindex=\"\" >
							<input type=\"hidden\" class=\"form-control autocomplete_hidden_value product_id_" . $product_details->product_id . "\" name=\"product_id[]\" id=\"SchoolHiddenId_" . $product_details->product_id . "\" value = \"$product_details->product_id\" />
						</td>
						<td>$html</td>
						<td>
                            <input type=\"text\" name=\"available_quantity[]\" class=\"form-control text-right available_quantity_" . $product_details->product_id . "\" value=\"0\" readonly=\"\" id=\"available_quantity_" . $product_details->product_id . "\"/>
                        </td>

                        <td  id=\"expire_date_" . $product_details->product_id . "\"> </td>

                        <td>
                         <input class=\"form-control text-right unit_" . $product_details->product_id . "\" valid\" value='" . $product_details->unit . "' aria-invalid=\"false\" type=\"text\" readonly=\"readonly\">
                        </td>

						<td style=\"width:85px\">
							<input type=\"text\" name=\"product_quantity[]\" onkeyup=\"quantity_calculate('" . $product_details->product_id . "');\" onchange=\"quantity_calculate('" . $product_details->product_id . "'),checkqty('" . $product_details->product_id . "');\" onkeyup=\"quantity_calculate('" . $product_details->product_id . "'),checkqty('" . $product_details->product_id . "');\" class=\"total_qntt_" . $product_details->product_id . " form-control text-right\" id=\"total_qntt_" . $product_details->product_id . "\" placeholder=\"0.00\" min=\"0\" autocomplete=\"off\"  value=\"1\" tabindex=\"8\" />
						</td>

						<td>
							 <input type=\"text\" name=\"product_rate[]\" id=\"price_item_" . $product_details->product_id . "\" class=\"price_item1 price_item form-control text-right\" tabindex=\"9\" required=\"\" onkeyup=\"quantity_calculate('" . $product_details->product_id . "');\" onchange=\"quantity_calculate('" . $product_details->product_id . "');\" value='" . $product_details->price . "' placeholder=\"0.00\" min=\"0\" />
						</td>

						<td>
						 	<input type=\"text\" name=\"discount[]\" onkeyup=\"quantity_calculate('" . $product_details->product_id . "');\"  onchange=\"quantity_calculate('" . $product_details->product_id . "');\" id=\"discount_" . $product_details->product_id . "\" class=\"form-control text-right\" min=\"0\" tabindex=\"10\" placeholder=\"0.00\"/>

                               <input type=\"hidden\" value=\"" . $currency_details[0]['discount_type'] . "\" name=\"discount_type\" id=\"discount_type_" . $product_details->product_id . "\">
						</td>
						<td class=\"text-right\" style=\"width:100px\">
							 <input class=\"total_price form-control text-right\" type=\"text\" name=\"total_price[]\" id=\"total_price_" . $product_details->product_id . "\" value=\"0.00\" readonly=\"readonly\" />
						</td>

						<td>";
            $sl = 0;
            foreach ($taxfield as $taxes) {
                $txs = 'tax' . $sl;
                $tr .= "<input type=\"hidden\" id=\"total_tax" . $sl . "_" . $product_details->product_id . "\" class=\"total_tax" . $sl . "_" . $product_details->product_id . "\" value='" . $prinfo[0][$txs] . "'/>
                            <input type=\"hidden\" id=\"all_tax" . $sl . "_" . $product_details->product_id . "\" class=\" total_tax" . $sl . "\" value='" . $prinfo[0][$txs] * $product_details->price . "' name=\"tax[]\"/>";
                $sl++;}

            $tr .= "<input type=\"hidden\" id=\"total_discount_" . $product_details->product_id . "\" class=\"\" />
                            <input type=\"hidden\" id=\"all_discount_" . $product_details->product_id . "\" class=\"total_discount dppr\"/>

                            <a style=\"text-align: right;\" class=\"btn btn-danger\"   onclick=\"deleteRow(this)\"><i class='fa fa-close'></i></a>
						</td>
					</tr>";
            echo $tr;

        } else {
            return false;
        }
    }

    public function autocompleteproductsearch()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Invoices');
        $product_name = $this->input->post('product_name');
        $product_info = $CI->Invoices->autocompletproductdata($product_name);
        if (!empty($product_info)) {
            $list[''] = '';
            foreach ($product_info as $value) {
                $json_product[] = array('label' => $value['product_name'] . ($value['product_model'] ? ' (' . $value['product_model'] . ')' : ""), 'value' => $value['product_id']);
            }
        } else {
            $json_product[] = 'No Medicine Found';
        }
        echo json_encode($json_product);

    }

    //Retrive right now inserted data to cretae html
    public function invoice_inserted_data($invoice_id)
    {
        $CI = &get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->library('linvoice');
        $content = $CI->linvoice->invoice_html_data($invoice_id);
        $this->template->full_admin_html_view($content);
    }

    //Retrive right now inserted data to cretae html
    public function pos_invoice_inserted_data($invoice_id)
    {
        $CI = &get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->library('linvoice');
        //check permission
        // $CI->permission1->method('invoice','read')->redirect();

        $content = $CI->linvoice->pos_invoice_html_data($invoice_id);
        $this->template->full_admin_html_view($content);
    }

    // Retrieve_product_data
    public function retrieve_product_data()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Invoices');
        $product_id = $this->input->post('product_id');
        $manufacturer_id = $this->input->post('manufacturer_id');

        $product_info = $CI->Invoices->get_total_product($product_id, $manufacturer_id);

        echo json_encode($product_info);
    }
    //available qty by batch id
    public function retrieve_product_batchid()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Invoices');
        $batch_id = $this->input->post('batch_id');
        $product_info = $CI->Invoices->get_total_product_batch($batch_id);
        echo json_encode($product_info);
    }
    //product info retrive by product id for invoice
    public function retrieve_product_data_inv()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Invoices');
        $product_id = $this->input->post('product_id');
        $product_info = $CI->Invoices->get_total_product_invoic($product_id);
        echo json_encode($product_info);
    }
    // Invoice delete
    public function invoice_delete($invoice_id)
    {
        //print_r($invoice_id);exit;
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Invoices');
        //$invoice_id =  $_POST['invoice_id'];

        $result = $CI->Invoices->delete_invoice($invoice_id);
        if ($result) {
            $this->session->set_userdata(array('message' => display('successfully_delete')));
            return redirect("Cinvoice/manage_invoice");
        }

    }

    //AJAX INVOICE STOCKs
    public function product_stock_check($product_id)
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Invoices');
        //$product_id =  $this->input->post('product_id');

        $purchase_stocks = $CI->Invoices->get_total_purchase_item($product_id);
        $total_purchase = 0;
        if (!empty($purchase_stocks)) {
            foreach ($purchase_stocks as $k => $v) {
                $total_purchase = ($total_purchase + $purchase_stocks[$k]['quantity']);
            }
        }
        $sales_stocks = $CI->Invoices->get_total_sales_item($product_id);
        $total_sales = 0;
        if (!empty($sales_stocks)) {
            foreach ($sales_stocks as $k => $v) {
                $total_sales = ($total_sales + $sales_stocks[$k]['quantity']);
            }
        }

        $final_total = ($total_purchase - $total_sales);
        return $final_total;
    }

    //This function is used to Generate Key
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

    //Csv Invoice upload
    public function uploadCsv_Invoice()
    {
        $count = 0;
        $fp = fopen($_FILES['upload_csv_file']['tmp_name'], 'r') or die("can't open file");

        if (($handle = fopen($_FILES['upload_csv_file']['tmp_name'], 'r')) !== false) {

            while ($csv_line = fgetcsv($fp, 1024)) {
                //keep this if condition if you want to remove the first row
                for ($i = 0, $j = count($csv_line); $i < $j; $i++) {
                    $insert_csv = array();
                    $insert_csv['customer_name'] = (!empty($csv_line[0]) ? $csv_line[0] : null);
                    $insert_csv['invoice_date'] = (!empty($csv_line[1]) ? $csv_line[1] : null);
                    $insert_csv['invoice_id'] = (!empty($csv_line[2]) ? $csv_line[2] : null);
                    $insert_csv['details'] = (!empty($csv_line[3]) ? $csv_line[3] : null);
                    $insert_csv['product_name'] = (!empty($csv_line[4]) ? $csv_line[4] : null);
                    $insert_csv['batch_id'] = (!empty($csv_line[5]) ? $csv_line[5] : null);
                    $insert_csv['qty'] = (!empty($csv_line[6]) ? $csv_line[6] : 0);
                    $insert_csv['price'] = (!empty($csv_line[7]) ? $csv_line[7] : 0);
                    $insert_csv['paid_amount'] = (!empty($csv_line[8]) ? $csv_line[8] : 0);
                    $insert_csv['due_amount'] = (!empty($csv_line[9]) ? $csv_line[9] : 0);
                    $insert_csv['discount'] = (!empty($csv_line[11]) ? $csv_line[11] : 0);
                    $insert_csv['total_discount'] = (!empty($csv_line[12]) ? $csv_line[12] : 0);
                }
                $product_id = $this->db->select('product_id')->from('product_information')->where('product_name', $insert_csv['product_name'])->get()->row()->product_id;
                $manufacturer_rate = $this->db->select('manufacturer_price')->from('manufacturer_product')->where('product_id', $product_id)->get()->row()->manufacturer_price;
                $customer_id = $this->db->select('customer_id')->from('customer_information')->where('customer_name', $insert_csv['customer_name'])->get()->row()->customer_id;
                $invoice_id = $insert_csv['invoice_id'];
                $chalan_no = date(ymdHi);
                $transection_id = $this->auth->generator(8);
                $datainv = array(
                    'invoice_id' => $invoice_id,
                    'customer_id' => $customer_id,
                    'date' => date("Y-m-d", strtotime($insert_csv['invoice_date'])),
                    'total_amount' => $insert_csv['qty'] * $insert_csv['price'],
                    'total_tax' => 0,
                    'invoice' => $this->number_generator(),
                    'invoice_details' => $insert_csv['details'],
                    'total_discount' => 0,
                    'invoice_discount' => 0,
                    'status' => 1,
                );

                $customer_credit_ledger = array(
                    'transaction_id' => $transection_id,
                    'customer_id' => $customer_id,
                    'invoice_no' => $invoice_id,
                    'date' => date("Y-m-d", strtotime($insert_csv['invoice_date'])),
                    'amount' => $insert_csv['paid_amount'],
                    'description' => 'Cash Paid By Customer',
                    'status' => 1,
                    'd_c' => 'c',
                );
                $cudtomer_debit = array(
                    'transaction_id' => $transection_id,
                    'customer_id' => $customer_id,
                    'receipt_no' => $this->auth->generator(8),
                    'date' => date("Y-m-d", strtotime($insert_csv['invoice_date'])),
                    'amount' => $insert_csv['paid_amount'] + $insert_csv['due_amount'],
                    'payment_type' => 1,
                    'description' => 'Medicine Received By Customer',
                    'status' => 1,
                    'd_c' => 'd',

                );
                $invoicedetails = array(
                    'invoice_details_id' => $this->generator(8),
                    'invoice_id' => $invoice_id,
                    'product_id' => $product_id,
                    'batch_id' => $insert_csv['batch_id'],
                    'quantity' => $insert_csv['qty'],
                    'rate' => $insert_csv['price'],
                    'discount' => $insert_csv['discount'],
                    'tax' => 0,
                    'paid_amount' => $insert_csv['paid_amount'],
                    'due_amount' => $insert_csv['due_amount'],
                    'manufacturer_rate' => $manufacturer_rate,
                    'total_price' => $insert_csv['qty'] * $insert_csv['qty'],
                    'status' => 1,
                );

                if ($count > 0) {
                    // print_r($datainv);
                    $this->db->insert('invoice_details', $invoicedetails);
                    $pur_main = $this->db->select('*')->from('invoice')->where_in('invoice_id', $invoice_id)->get()->num_rows();
                    if ($pur_main < 1) {
                        $this->db->insert('invoice', $datainv);
                        $this->db->insert('customer_ledger', $customer_credit_ledger);
                        $this->db->insert('customer_ledger', $cudtomer_debit);
                    } else {
                        $totalinvoicedata = $this->db->select('*')->from('invoice_details')->where_in('invoice_id', $invoice_id)->get()->result();
                        $total = 0;
                        $total_dicount = 0;
                        foreach ($totalinvoicedata as $totalinfo) {
                            $producttotal = $totalinfo->quantity * $totalinfo->rate;
                            $total += $producttotal;
                            $total_dicount += $totalinfo->discount;
                        }
                        $invupdate = array(
                            'total_amount' => $total,
                            'total_discount' => $total_dicount,
                        );

                        $this->db->where('invoice_id', $invoice_id);
                        $this->db->update('invoice', $invupdate);
                    }

                }
                $count++;
            }

        }
        fclose($fp) or die("can't close file");
        $this->session->set_userdata(array('message' => display('successfully_added')));
        redirect(base_url('Cinvoice/manage_invoice'));

    }

    public function number_generator()
    {
        $this->db->select_max('invoice', 'invoice_no');
        $query = $this->db->get('invoice');
        $result = $query->result_array();
        $invoice_no = $result[0]['invoice_no'];
        if ($invoice_no != '') {
            $invoice_no = $invoice_no + 1;
        } else {
            $invoice_no = 1000;
        }
        return $invoice_no;
    }
    // auto suggest customer
    public function customer_autocomplete()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lpurchase');
        $CI->load->model('Customers');
        $customer_id = $this->input->post('customer_id');
        $customer_info = $CI->Customers->customer_search($customer_id);

        $list[''] = '';
        foreach ($customer_info as $value) {
            $json_customer[] = array('label' => $value['customer_name'], 'value' => $value['customer_id']);
        }
        echo json_encode($json_customer);
    }

    //customer previous due
    public function previous()
    {
        $CI = &get_instance();
        $CI->load->model('Customers');
        $customer_id = $this->input->post('customer_id');
        $sql = 'SELECT (SELECT SUM(amount) FROM customer_ledger WHERE d_c = "d" AND customer_id = "' . $customer_id . '") dr,
        (SELECT sum(amount) FROM customer_ledger WHERE d_c = "c" AND customer_id = "' . $customer_id . '") cr';
        $result = $this->db->query($sql)->result();
        $balance = $result[0]->dr - $result[0]->cr;
        $b = (!empty($balance) ? $balance : 0);
        if ($b) {
            echo json_encode($b);
        } else {
            return false;
        }
    }

    //gui pos invoice
    public function gui_pos()
    {
        $this->load->model('Invoices');
        $this->load->model('Web_settings');
        $currency_details = $this->Web_settings->retrieve_setting_editdata();
        $taxfield = $this->db->select('tax_name,default_value')
            ->from('tax_settings')
            ->get()
            ->result_array();
        $tablecolumn = $this->db->list_fields('tax_collection');
        $num_column = count($tablecolumn) - 4;
        $data['title'] = display('gui_pos');
        $saveid = $this->session->userdata('user_id');
        $walking_customer = $this->Invoices->pos_customer_setup();
        $data['customer_id'] = !empty($walking_customer) ? $walking_customer[0]['customer_id'] : "";
        $data['customer_name'] = !empty($walking_customer) ? $walking_customer[0]['customer_name'] : "";
        $customer_details = $this->Invoices->pos_customer_setup();
        $currency_details = $this->Web_settings->retrieve_setting_editdata();
        $data['customer_name'] = !empty($customer_details) ? $customer_details[0]['customer_name'] : "";
        $data['typelist'] = $this->Invoices->type_dropdown();
        $data['categorylist'] = $this->Invoices->category_dropdown();
        $data['customer_id'] = !empty($customer_details) ? $customer_details[0]['customer_id'] : "";
        $data['itemlist'] = $this->Invoices->allproduct();
        $data['discount_type'] = $currency_details[0]['discount_type'];
        $data['taxes'] = $taxfield;
        $data['currency'] = $currency_details[0]['currency'];
        $data['position'] = $currency_details[0]['currency_position'];
        $data['taxnumber'] = $num_column;
        $data['todays_invoice'] = $this->Invoices->todays_invoice();
        $content = $this->parser->parse('invoice/gui_pos_invoice', $data, true);
        $this->template->full_admin_html_view($content);
    }

    public function instant_customer()
    {
        $this->load->model('Customers');
        $vouchar_no = $this->auth->generator(10);
        $createby = $this->session->userdata('user_id');
        $createdate = date('Y-m-d H:i:s');
        $data = array(
            'customer_name' => $this->input->post('customer_name'),
            'customer_address' => $this->input->post('address'),
            'customer_mobile' => $this->input->post('mobile'),
            'customer_email' => $this->input->post('email'),
            'status' => 2,
        );

        $result = $this->Customers->customer_entry($data);
        if ($result == true) {
            $customer_id = $this->db->insert_id();
            $coa = $this->Customers->headcode();
            if ($coa->HeadCode != null) {
                $headcode = $coa->HeadCode + 1;
            } else {
                $headcode = "102030001";
            }
            $c_acc = $this->input->post('customer_name') . '-' . $customer_id;

            $customer_coa = [
                'HeadCode' => $headcode,
                'HeadName' => $c_acc,
                'PHeadName' => 'Customer Receivable',
                'HeadLevel' => '4',
                'IsActive' => '1',
                'IsTransaction' => '1',
                'IsGL' => '0',
                'HeadType' => 'A',
                'IsBudget' => '0',
                'IsDepreciation' => '0',
                'DepreciationRate' => '0',
                'CreateBy' => $createby,
                'CreateDate' => $createdate,
            ];

            //Customer  basic information adding.

            //Previous balance adding -> Sending to customer model to adjust the data.
            $this->db->insert('acc_coa', $customer_coa);
            $this->Customers->previous_balance_add($this->input->post('previous_balance'), $customer_id);

            $data['status'] = true;
            $data['message'] = display('save_successfully');
            $data['customer_id'] = $data['customer_id'];
            $data['customer_name'] = $data['customer_name'];
        } else {
            $data['status'] = false;
            $data['error_message'] = display('please_try_again');
        }
        echo json_encode($data);
    }

    public function getitemlist()
    {
        $this->load->model('Invoices');
        $prod = $this->input->post('product_name');
        $category_id = $this->input->post('category_id');
        $getproduct = $this->Invoices->searchprod($category_id, $prod);
        if (!empty($getproduct)) {
            $data['itemlist'] = $getproduct;
            $this->load->view('invoice/getproductlist', $data);
        } else {
            echo 420;
        }
    }

    //gui pos invoice
    public function gui_pos_invoice()
    {
        $CI = &get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->model('Invoices');
        $CI->load->model('Web_settings');
        $CI->load->model('Products');
        // $CI->permission1->method('invoice','create')->redirect();

        $product_id = $this->input->post('product_id');

        $product_details = $CI->Invoices->pos_invoice_setup($product_id);
        $batch = $CI->Products->batch_search_item($product_id);
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $taxfield = $CI->db->select('tax_name,default_value')
            ->from('tax_settings')
            ->get()
            ->result_array();
        $prinfo = $this->db->select('*')->from('product_information')->where('product_id', $product_id)->get()->result_array();
        $tr = " ";
        if (!empty($product_details)) {
            $product_id = $product_id;

            //Batch id retrive from database
            $html = "";
            if (empty($batch)) {
                $html .= "Not Found!";
            } else {
                // Select option created for product
                $html .= "<select name=\"batch_id[]\"   class=\"batch_id_" . $product_details->product_id . " form-control\" id=\"batch_id_" . $product_details->product_id . "\" required=\"required\" onchange=\"product_stock('" . $product_details->product_id . "')\">";
                $html .= "<option>" . display('select_one') . "</option>";
                foreach ($batch as $product) {
                    $html .= "<option value=" . $product['batch_id'] . ">" . $product['batch_id'] . "</option>";
                }
                $html .= "</select>";
            }

            $tr .= "<tr id=\"row_" . $product_details->product_id . "\">
						<td class=\"\" style=\"width:220px\">
							<input type=\"text\" name=\"product_name\" onkeypress=\"invoice_productList(" . $product_details->product_id . ");\" class=\"form-control productSelection \" value='" . $product_details->product_name . ($product_details->strength ? "- (" . $product_details->strength . ")" : "") . "' placeholder='" . display('product_name') . "' required=\"\" id=\"product_name_" . $product_details->product_id . "\" tabindex=\"\" >
							<input type=\"hidden\" class=\"form-control autocomplete_hidden_value product_id_" . $product_details->product_id . "\" name=\"product_id[]\" id=\"SchoolHiddenId_" . $product_details->product_id . "\" value = \"$product_details->product_id\" />
						</td>
						<td>$html</td>


                        <td> <span id=\"expire_date_" . $product_details->product_id . "\"></span> <input type=\"hidden\" name=\"available_quantity[]\" class=\"form-control text-right available_quantity_" . $product_details->product_id . "\" value=\"0\" readonly=\"\" id=\"available_quantity_" . $product_details->product_id . "\"/></td>



						<td style=\"width:85px\">
							<input type=\"text\" name=\"product_quantity[]\" onkeyup=\"quantity_calculate('" . $product_details->product_id . "');\" onchange=\"quantity_calculate('" . $product_details->product_id . "'),checkqty('" . $product_details->product_id . "');\" onkeyup=\"quantity_calculate('" . $product_details->product_id . "'),checkqty('" . $product_details->product_id . "');\" class=\"total_qntt_" . $product_details->product_id . " form-control text-right\" id=\"total_qntt_" . $product_details->product_id . "\" placeholder=\"0.00\" autocomplete=\"off\" min=\"0\"  value=\"1\" tabindex=\"8\" />
						</td>

						<td>
							 <input type=\"text\" name=\"product_rate[]\" id=\"price_item_" . $product_details->product_id . "\" class=\"price_item1 price_item form-control text-right\" tabindex=\"9\" required=\"\" onkeyup=\"quantity_calculate('" . $product_details->product_id . "');\" onchange=\"quantity_calculate('" . $product_details->product_id . "');\" value='" . $product_details->price . "' placeholder=\"0.00\" min=\"0\" />
						</td>

						<td>
						 	<input type=\"text\" name=\"discount[]\" onkeyup=\"quantity_calculate('" . $product_details->product_id . "');\"  onchange=\"quantity_calculate('" . $product_details->product_id . "'');\" id=\"discount_" . $product_details->product_id . "\" class=\"form-control text-right\" min=\"0\" tabindex=\"10\" placeholder=\"0.00\"/>

                               <input type=\"hidden\" value=\"" . $currency_details[0]['discount_type'] . "\" name=\"discount_type\" id=\"discount_type_" . $product_details->product_id . "\">
						</td>
						<td class=\"text-right\" style=\"width:100px\">
							 <input class=\"total_price form-control text-right\" type=\"text\" name=\"total_price[]\" id=\"total_price_" . $product_details->product_id . "\" value=\"0.00\" readonly=\"readonly\" />
						</td>

						<td>";
            $sl = 0;
            foreach ($taxfield as $taxes) {
                $txs = 'tax' . $sl;
                $tr .= "<input type=\"hidden\" id=\"total_tax" . $sl . "_" . $product_details->product_id . "\" class=\"total_tax" . $sl . "_" . $product_details->product_id . "\" value='" . $prinfo[0][$txs] . "'/>
                            <input type=\"hidden\" id=\"all_tax" . $sl . "_" . $product_details->product_id . "\" class=\" total_tax" . $sl . "\" value='" . $prinfo[0][$txs] * $product_details->price . "' name=\"tax[]\"/>";
                $sl++;}

            $tr .= "<input type=\"hidden\" id=\"total_discount_" . $product_details->product_id . "\" class=\"\" />
                            <input type=\"hidden\" id=\"all_discount_" . $product_details->product_id . "\" class=\"total_discount dppr\"/>

                            <a style=\"text-align: right;\" class=\"btn btn-danger btn-xs\" href=\"#\"  onclick=\"deleteRow(this)\">" . '<i class="fa fa-close"></i>' . "</a>

						</td>
					</tr>";
            echo $tr;

        } else {
            return false;
        }
    }

}