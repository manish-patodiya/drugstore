<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Ccustomer extends CI_Controller
{
    public $menu;
    public function __construct()
    {
        parent::__construct();
        $this->load->library('auth');
        $this->load->library('lcustomer');
        $this->load->library('session');
        $this->load->model('Customers');
        $this->auth->check_admin_auth();
    }

    //Default loading for Customer System.
    public function index()
    {
        //Calling Customer add form which will be loaded by help of "lcustomer,located in library folder"
        $content = $this->lcustomer->customer_add_form();
        //Here ,0 means array position 0 will be active class
        $this->template->full_admin_html_view($content);
    }

    //customer_search_item
    public function customer_search_item()
    {
        $customer_id = $this->input->post('customer_id');
        $content = $this->lcustomer->customer_search_item($customer_id);
        $this->template->full_admin_html_view($content);
    }

    //credit customer_search_item
    public function credit_customer_search_item()
    {
        $customer_id = $this->input->post('customer_id');
        $content = $this->lcustomer->credit_customer_search_item($customer_id);
        $this->template->full_admin_html_view($content);
    }

    //paid customer_search_item
    public function paid_customer_search_item()
    {
        $customer_id = $this->input->post('customer_id');
        $content = $this->lcustomer->paid_customer_search_item($customer_id);
        $this->template->full_admin_html_view($content);
    }

    public function manage_customer()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lcustomer');
        $CI->load->model('Customers');
        $content = $this->lcustomer->customer_list();
        $this->template->full_admin_html_view($content);
    }

    public function CheckCustomerList()
    {
        // GET data
        $this->load->model('Customers');
        $postData = $this->input->post();
        $data = $this->Customers->getCustomerList($postData);
        echo json_encode($data);
    }

    //Product Add Form
    public function credit_customer()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lcustomer');
        $CI->load->model('Customers');
        $content = $this->lcustomer->credit_customer_list();
        $this->template->full_admin_html_view($content);

    }

    public function CheckCreditCustomerList()
    {
        // GET data
        $this->load->model('Customers');
        $postData = $this->input->post();
        $data = $this->Customers->getCreditCustomerList($postData);
        echo json_encode($data);
    }

    //Paid Customer list. The customer who will pay 100%.
    public function paid_customer()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lcustomer');
        $CI->load->model('Customers');
        $content = $this->lcustomer->paid_customer_list();
        $this->template->full_admin_html_view($content);

    }

    public function CheckPaidCustomerList()
    {
        // GET data
        $this->load->model('Customers');
        $postData = $this->input->post();
        $data = $this->Customers->getPaidCustomerList($postData);
        echo json_encode($data);
    }

    //Insert Product and upload
    public function insert_customer()
    {

        $vouchar_no = $this->auth->generator(10);

        //Customer  basic information adding.
        $data = array(
            'customer_name' => $this->input->post('customer_name'),
            'customer_address' => $this->input->post('address'),
            'customer_mobile' => $this->input->post('mobile'),
            'customer_email' => $this->input->post('email'),
            'status' => 1,
        );

        $this->db->insert('customer_information', $data);

        $customer_id = $this->db->insert_id();
        $coa = $this->Customers->headcode();
        if ($coa->HeadCode != null) {
            $headcode = $coa->HeadCode + 1;
        } else {
            $headcode = "10203000001";
        }
        $c_acc = $this->input->post('customer_name') . '-' . $customer_id;
        $createby = $this->session->userdata('user_id');
        $createdate = date('Y-m-d H:i:s');
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
        //Previous balance adding -> Sending to customer model to adjust the data.
        $this->db->insert('acc_coa', $customer_coa);
        $this->Customers->previous_balance_add($this->input->post('previous_balance'), $customer_id);

        $this->session->set_userdata(array('message' => display('successfully_added')));
        if (isset($_POST['add-customer'])) {
            redirect(base_url('Ccustomer/manage_customer'));
            exit;
        } elseif (isset($_POST['add-customer-another'])) {
            redirect(base_url('Ccustomer'));
            exit;
        }

    }
    //CSV Customer Add From here
    public function uploadCsv_Customer()
    {
        $filename = $_FILES['upload_csv_file']['name'];
        $ext = end(explode('.', $filename));
        $ext = substr(strrchr($filename, '.'), 1);
        if ($ext == 'csv') {
            $count = 0;
            $fp = fopen($_FILES['upload_csv_file']['tmp_name'], 'r') or die("can't open file");

            if (($handle = fopen($_FILES['upload_csv_file']['tmp_name'], 'r')) !== false) {

                while ($csv_line = fgetcsv($fp, 1024)) {
                    //keep this if condition if you want to remove the first row
                    for ($i = 0, $j = count($csv_line); $i < $j; $i++) {
                        $insert_csv = array();
                        $insert_csv['customer_name'] = (!empty($csv_line[0]) ? $csv_line[0] : null);
                        $insert_csv['customer_email'] = (!empty($csv_line[1]) ? $csv_line[1] : '');
                        $insert_csv['customer_mobile'] = (!empty($csv_line[2]) ? $csv_line[2] : '');
                        $insert_csv['customer_address'] = (!empty($csv_line[3]) ? $csv_line[3] : '');
                        $insert_csv['previousbalance'] = (!empty($csv_line[4]) ? $csv_line[4] : 0);
                    }

                    $customerdata = array(
                        'customer_name' => $insert_csv['customer_name'],
                        'customer_email' => $insert_csv['customer_email'],
                        'customer_mobile' => $insert_csv['customer_mobile'],
                        'customer_address' => $insert_csv['customer_address'],
                        'status' => 1,
                    );

                    if ($count > 0) {
                        $this->db->insert('customer_information', $customerdata);
                        $customer_id = $this->db->insert_id();
                        $coa = $this->Customers->headcode();
                        if ($coa->HeadCode != null) {
                            $headcode = $coa->HeadCode + 1;
                        } else {
                            $headcode = "102030001";
                        }
                        $c_acc = $insert_csv['customer_name'] . '-' . $customer_id;
                        $createby = $this->session->userdata('user_id');
                        $createdate = date('Y-m-d H:i:s');
                        $transaction_id = $this->auth->generator(10);

                        $ledger = array(
                            'transaction_id' => $transaction_id,
                            'customer_id' => $customer_id,
                            'invoice_no' => "NA",
                            'receipt_no' => null,
                            'amount' => $insert_csv['previousbalance'],
                            'description' => "Previous adjustment with software",
                            'payment_type' => "NA",
                            'cheque_no' => "NA",
                            'date' => date("Y-m-d"),
                            'status' => 1,
                            'd_c' => "d",

                        );

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

                        $cosdr = array(
                            'VNo' => $transaction_id,
                            'Vtype' => 'PR Balance',
                            'VDate' => date("Y-m-d"),
                            'COAID' => $headcode,
                            'Narration' => 'Customer debit For Transaction No' . $transaction_id,
                            'Debit' => $insert_csv['previousbalance'],
                            'Credit' => 0,
                            'IsPosted' => 1,
                            'CreateBy' => $this->session->userdata('user_id'),
                            'CreateDate' => date('Y-m-d H:i:s'),
                            'IsAppove' => 1,
                        );
                        $this->db->insert('customer_ledger', $ledger);
                        $this->db->insert('acc_coa', $customer_coa);
                        $this->db->insert('acc_coa', $cosdr);
                    }
                    $count++;
                }

            }
            $this->db->select('*');
            $this->db->from('customer_information');
            $query = $this->db->get();
            foreach ($query->result() as $row) {
                $json_customer[] = array('label' => $row->customer_name, 'value' => $row->customer_id);
            }
            $cache_file = './my-assets/js/admin_js/json/customer.json';
            $customerList = json_encode($json_customer);
            file_put_contents($cache_file, $customerList);
            fclose($fp) or die("can't close file");
            $this->session->set_userdata(array('message' => display('successfully_added')));
            redirect(base_url('Ccustomer/manage_customer'));
        } else {
            $this->session->set_userdata(array('error_message' => 'Please Import Only Csv File'));
            redirect(base_url('Ccustomer/manage_customer'));
        }

    }

    //customer Update Form
    public function customer_update_form($customer_id)
    {
        $content = $this->lcustomer->customer_edit_data($customer_id);
        $this->template->full_admin_html_view($content);
    }

    //Customer Ledger
    public function customer_ledger($customer_id)
    {
        $content = $this->lcustomer->customer_ledger_data($customer_id);
        $this->template->full_admin_html_view($content);
    }

    //Customer Final Ledger
    public function customerledger($customer_id)
    {
        $content = $this->lcustomer->customerledger_data($customer_id);
        $this->template->full_admin_html_view($content);
    }
    //Customer Previous Balance
    public function previous_balance_form()
    {
        $content = $this->lcustomer->previous_balance_form();
        $this->template->full_admin_html_view($content);
    }
    // customer Update
    public function customer_update()
    {
        $this->load->model('Customers');
        $customer_id = $this->input->post('customer_id');
        $old_headnam = $this->input->post('oldname') . '-' . $customer_id;
        $c_acc = $this->input->post('customer_name') . '-' . $customer_id;
        $data = array(
            'customer_name' => $this->input->post('customer_name'),
            'customer_address' => $this->input->post('address'),
            'customer_mobile' => $this->input->post('mobile'),
            'customer_email' => $this->input->post('email'),
        );
        // Customer Acc Coa update
        $customer_coa = [
            'HeadName' => $c_acc,
        ];
        $result = $this->Customers->update_customer($data, $customer_id);
        if ($result == true) {
            $this->db->where('HeadName', $old_headnam);
            $this->db->update('acc_coa', $customer_coa);
            $this->session->set_userdata(array('message' => display('successfully_updated')));
            redirect(base_url('Ccustomer/manage_customer'));
            exit;
        } else {
            $this->session->set_userdata(array('error_message' => display('please_try_again')));
            redirect(base_url('Ccustomer'));
        }
    }
    // product_delete
    public function customer_delete($customer_id)
    {
        $this->load->model('Customers');
        $customerinfo = $this->db->select('customer_name')->from('customer_information')->where('customer_id', $customer_id)->get()->row();
        $customer_head = $customerinfo->customer_name . '-' . $customer_id;
        $this->Customers->delete_customer($customer_id);
        $this->Customers->delete_customer_ledger($customer_id, $customer_head);
        $this->Customers->delete_invoic($customer_id);
        $this->session->set_userdata(array('message' => display('successfully_delete')));
        redirect(base_url('Ccustomer/manage_customer'));
    }
}