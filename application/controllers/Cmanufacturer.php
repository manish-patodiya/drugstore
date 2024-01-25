<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Cmanufacturer extends CI_Controller
{

    public $manufacturer_id;
    public function __construct()
    {
        parent::__construct();
        $this->load->library('auth');
        $this->load->library('lmanufacturer');
        $this->load->library('session');
        $this->load->model('Manufacturers');
        $this->auth->check_admin_auth();
    }

    public function index()
    {
        $content = $this->lmanufacturer->manufacturer_add_form();
        $this->template->full_admin_html_view($content);
    }

    //Insert manufacturer
    public function insert_manufacturer()
    {
        $tran_id = date('Ymdi');
        $depid = date('Ymdis');

        $data = array(
            'manufacturer_name' => $this->input->post('manufacturer_name'),
            'address' => $this->input->post('address'),
            'mobile' => $this->input->post('mobile'),
            'details' => $this->input->post('details'),
            'status' => 1,
        );

        $manufacturer = $this->lmanufacturer->insert_manufacturer($data);
        if ($manufacturer == true) {
            $manufacturer_id = $this->db->insert_id();

            $coa = $this->Manufacturers->headcode();
            if ($coa->HeadCode != null) {
                $headcode = $coa->HeadCode + 1;
            } else {
                $headcode = "502020000001";
            }
            $c_acc = $this->input->post('manufacturer_name') . '-' . $manufacturer_id;
            $createby = $this->session->userdata('user_id');
            $createdate = date('Y-m-d H:i:s');

            $manufacturer_coa = [
                'HeadCode' => $headcode,
                'HeadName' => $c_acc,
                'PHeadName' => 'Account Payable',
                'HeadLevel' => '3',
                'IsActive' => '1',
                'IsTransaction' => '1',
                'IsGL' => '0',
                'HeadType' => 'L',
                'IsBudget' => '0',
                'IsDepreciation' => '0',
                'DepreciationRate' => '0',
                'CreateBy' => $createby,
                'CreateDate' => $createdate,
            ];

            $this->db->insert('acc_coa', $manufacturer_coa);
            $m_ledger = array(
                'transaction_id' => $tran_id,
                'manufacturer_id' => $manufacturer_id,
                'chalan_no' => $depid,
                'deposit_no' => null,
                'amount' => (!empty($this->input->post('previous_balance')) ? $this->input->post('previous_balance') : 0),
                'description' => 'Previous Balance',
                'payment_type' => '',
                'cheque_no' => '',
                'date' => date('Y-m-d'),
                'status' => 1,
                'd_c' => 'c',
            );
            //acc transaction for manufacturer previous ledger
            $cosdr = array(
                'VNo' => $tran_id,
                'Vtype' => 'PR Balance',
                'VDate' => date("Y-m-d"),
                'COAID' => $headcode,
                'Narration' => 'manufacturer debit For voucher no' . $tran_id . ' For ' . $c_acc,
                'Debit' => 0,
                'Credit' => (!empty($this->input->post('previous_balance')) ? $this->input->post('previous_balance') : 0),
                'IsPosted' => 1,
                'CreateBy' => $this->session->userdata('user_id'),
                'CreateDate' => date('Y-m-d H:i:s'),
                'IsAppove' => 1,
            );
            $inventory = array(
                'VNo' => $tran_id,
                'Vtype' => 'PR Balance',
                'VDate' => date("Y-m-d"),
                'COAID' => 10107,
                'Narration' => 'Inventory credit For Purchase  For voucher no' . $tran_id . ' For ' . $c_acc,
                'Debit' => (!empty($this->input->post('previous_balance')) ? $this->input->post('previous_balance') : 0),
                'Credit' => 0, //purchase price asbe
                'IsPosted' => 1,
                'CreateBy' => $this->session->userdata('user_id'),
                'CreateDate' => date('Y-m-d H:i:s'),
                'IsAppove' => 1,
            );
            if (!empty($this->input->post('previous_balance'))) {
                $this->db->insert('manufacturer_ledger', $m_ledger);
                $this->db->insert('acc_transaction', $cosdr);
                $this->db->insert('acc_transaction', $inventory);
            }

            $this->session->set_userdata(array('message' => display('successfully_added')));
            if (isset($_POST['add-manufacturer'])) {
                redirect(base_url('Cmanufacturer/manage_manufacturer'));
                exit;
            } elseif (isset($_POST['add-manufacturer-another'])) {
                redirect(base_url('Cmanufacturer'));
                exit;
            }
        } else {
            $this->session->set_userdata(array('error_message' => display('already_exists')));
            if (isset($_POST['add-manufacturer'])) {
                redirect(base_url('Cmanufacturer/manage_manufacturer'));
                exit;
            } elseif (isset($_POST['add-manufacturer-another'])) {
                redirect(base_url('Cmanufacturer'));
                exit;
            }
        }
    }

    //Manage manufacturer
    public function manage_manufacturer()
    {
        #
        #pagination starts
        #
        $config["base_url"] = base_url('Cmanufacturer/manage_manufacturer/');
        $config["total_rows"] = $this->Manufacturers->manufacturer_list_count();
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
        $content = $this->lmanufacturer->manufacturer_list($links, $config["per_page"], $page);
        $this->template->full_admin_html_view($content);
    }

    //manufacturer Update Form
    public function manufacturer_update_form($manufacturer_id)
    {
        $content = $this->lmanufacturer->manufacturer_edit_data($manufacturer_id);

        $this->template->full_admin_html_view($content);
    }

    // manufacturer Update
    public function manufacturer_update()
    {
        $manufacturer_id = $this->input->post('manufacturer_id');
        $old_headnam = $supplier_id . '-' . $this->input->post('oldname');
        $c_acc = $this->input->post('manufacturer_name') . '-' . $manufacturer_id;

        $data = array(
            'manufacturer_name' => $this->input->post('manufacturer_name'),
            'address' => $this->input->post('address'),
            'mobile' => $this->input->post('mobile'),
            'details' => $this->input->post('details'),
        );

        $manu_coa = [
            'HeadName' => $c_acc,
        ];
        $result = $this->Manufacturers->update_manufacturer($data, $manufacturer_id);
        if ($result == true) {
            $this->db->where('HeadName', $old_headnam);
            $this->db->update('acc_coa', $manu_coa);
            $this->session->set_userdata(array('message' => display('successfully_updated')));
            redirect(base_url('Cmanufacturer/manage_manufacturer'));
            exit;
        } else {
            $this->session->set_userdata(array('error_message' => display('please_try_again')));
            redirect(base_url('Cmanufacturer/manage_manufacturer'));
        }
    }

    //manufacturer Search Item
    public function manufacturer_search_item()
    {
        $manufacturer_id = $this->input->post('manufacturer_id');
        $content = $this->lmanufacturer->manufacturer_search_item($manufacturer_id);
        $this->template->full_admin_html_view($content);
    }

    // manufacturer Delete from System
    public function manufacturer_delete()
    {
        $manufacturer_id = $_POST['manufacturer_id'];
        $this->Manufacturers->delete_manufacturer($manufacturer_id);
        $this->Manufacturers->delete_manufacturer_ledger($manufacturer_id);
        $this->session->set_userdata(array('message' => display('successfully_delete')));
        return true;
    }

    // manufacturer details findings !!!!!!!!!!!!!! Inactive Now !!!!!!!!!!!!
    public function manufacturer_details($manufacturer_id)
    {
        $content = $this->lmanufacturer->manufacturer_detail_data($manufacturer_id);
        $this->manufacturer_id = $manufacturer_id;
        $this->template->full_admin_html_view($content);
    }

    //manufacturer Ledger Book
    public function manufacturer_ledger()
    {
        $start = $this->input->post('from_date');
        $end = $this->input->post('to_date');
        $manufacturer_id = $this->input->post('manufacturer_id');
        $content = $this->lmanufacturer->manufacturer_ledger($manufacturer_id, $start, $end);

        $this->template->full_admin_html_view($content);
    }

    public function manufacturer_ledger_report()
    {
        $content = $this->lmanufacturer->manufacturer_ledger_report();
        $this->template->full_admin_html_view($content);
    }

    // manufacturer wise sales report details
    public function manufacturer_sales_details()
    {
        $start = $this->input->post('from_date');
        $end = $this->input->post('to_date');
        $manufacturer_id = $this->uri->segment(3);

        $content = $this->lmanufacturer->manufacturer_sales_details($manufacturer_id, $start, $end);
        $this->template->full_admin_html_view($content);
    }

    // manufacturer wise sales report summary
    public function manufacturer_sales_summary()
    {
        #
        #pagination starts
        #
        $manufacturer_id = $this->uri->segment(4);
        $config["base_url"] = base_url('Cmanufacturer/manufacturer_sales_summary/' . $manufacturer_id . "/");
        $config["total_rows"] = $this->Manufacturers->manufacturer_sales_summary_count($manufacturer_id);
        $config["per_page"] = 10;
        $config["uri_segment"] = 4;
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
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $links = $this->pagination->create_links();
        #
        #pagination ends
        #
        $content = $this->lmanufacturer->manufacturer_sales_summary($manufacturer_id, $links, $config["per_page"], $page);

        $this->manufacturer_id = $manufacturer_id;
        $this->template->full_admin_html_view($content);
    }

    // Actual Ledger based on sales & deposited amount
    public function sales_payment_actual()
    {
        #
        #pagination starts
        $manufacturer_id = $this->uri->segment(3);

        $config["base_url"] = base_url('Cmanufacturer/sales_payment_actual/' . $manufacturer_id . "/");
        $config["total_rows"] = $this->Manufacturers->sales_payment_actual_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 6;
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
        $page = ($this->uri->segment(6)) ? $this->uri->segment(6) : 0;
        $links = $this->pagination->create_links();
        #
        #pagination ends
        #
        $content = $this->lmanufacturer->sales_payment_actual($manufacturer_id, $links, $config["per_page"], $page);

        $this->manufacturer_id = $manufacturer_id;
        $this->template->full_admin_html_view($content);
    }

    // search report
    public function search_manufacturer_report()
    {
        $start = $this->input->post('from_date');
        $end = $this->input->post('to_date');

        $content = $this->lpayment->result_datewise_data($start, $end);
        $this->template->full_admin_html_view($content);
    }

    //manufacturer sales details all from menu
    public function manufacturer_sales_details_all()
    {
        $config["base_url"] = base_url('Cmanufacturer/manufacturer_sales_details_all/');
        $config["total_rows"] = $this->Manufacturers->manufacturer_sales_details_count_all();
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
        $content = $this->lmanufacturer->manufacturer_sales_details_allm($links, $config["per_page"], $page);

        $this->template->full_admin_html_view($content);
    }

    // manufacturer ledger for manufacturer information
    public function manufacturer_ledger_info($manufacturer_id)
    {
        $content = $this->lmanufacturer->manufacturer_ledger_info($manufacturer_id);
        $this->manufacturer_id = $manufacturer_id;
        $this->template->full_admin_html_view($content);
    }
    // new manufacturar
    public function new_manufacturer()
    {
        $this->form_validation->set_rules('manufacturer_name', display('manufacturer_name'), 'max_length[100]');
        $this->form_validation->set_rules('mobile', display('mobile'), 'max_length[255]');
        $this->form_validation->set_rules('address', display('address'), 'max_length[255]');
        $this->form_validation->set_rules('details', display('details'), 'max_length[255]');
        #-------------------------------#
        $userData = array(
            'manufacturer_id' => $this->auth->generator(20),
            'manufacturer_name' => $this->input->post('manufacturer_name'),
            'mobile' => $this->input->post('mobile'),
            'address' => $this->input->post('address'),
            'details' => $this->input->post('details'),
            'status' => 1,
        );
        $this->session->set_userdata('manufacturer_id', $userData['manufacturer_id']);
        #-------------------------------#

        if ($this->form_validation->run()) {

            //Check user information
            $insertdata = $this->db->insert('manufacturer_information', $userData);
            if ($insertdata) {

                $this->db->select('*');
                $this->db->from('manufacturer_information');
                $this->db->where('status', 1);
                $query = $this->db->get();
                foreach ($query->result() as $row) {
                    $json_product[] = array('label' => $row->manufacturer_name, 'value' => $row->manufacturer_id);
                }
                $cache_file = './my-assets/js/admin_js/json/manufacturer.json';
                $productList = json_encode($json_product);
                file_put_contents($cache_file, $productList);

                $sData['message'] = 'Successfully saved ';
                //$sData['firstname'] = $arr['firstname'];
                //Json encode for user data
                echo json_encode($sData);
            } else {
                $data['exception'] = 'Something wrong!';
                echo json_encode($data);
            }
        } else {
            $data['exception'] = validation_errors();
            //Json encode for user data
            echo json_encode($data);
        }
    }

    //CSV Manufacturer Add From here
    public function uploadCsv_Manufacturer()
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
                        $insert_csv['manufacturer_name'] = (!empty($csv_line[0]) ? $csv_line[0] : null);
                        $insert_csv['address'] = (!empty($csv_line[1]) ? $csv_line[1] : null);
                        $insert_csv['mobile'] = (!empty($csv_line[2]) ? $csv_line[2] : null);
                        $insert_csv['details'] = (!empty($csv_line[3]) ? $csv_line[3] : null);
                        $insert_csv['previousbalance'] = (!empty($csv_line[4]) ? $csv_line[4] : null);
                    }
                    $depid = date('Ymdis');
                    $manufacturer_id = $this->auth->generator(20);
                    $transaction_id = $this->auth->generator(10);
                    $manufacturerdata = array(
                        'manufacturer_id' => $manufacturer_id,
                        'manufacturer_name' => $insert_csv['manufacturer_name'],
                        'address' => $insert_csv['address'],
                        'mobile' => $insert_csv['mobile'],
                        'details' => $insert_csv['details'],
                        'status' => 1,
                    );

                    $m_ledger = array(
                        'transaction_id' => $transaction_id,
                        'manufacturer_id' => $manufacturer_id,
                        'chalan_no' => $depid,
                        'deposit_no' => null,
                        'amount' => (!empty($insert_csv['previousbalance']) ? $insert_csv['previousbalance'] : 0),
                        'description' => 'Previous Balance',
                        'payment_type' => '',
                        'cheque_no' => '',
                        'date' => date('Y-m-d'),
                        'status' => 1,
                    );

                    if ($count > 0) {
                        // print_r($manufacturerdata);exit();
                        $this->db->insert('manufacturer_information', $manufacturerdata);
                        $this->db->insert('manufacturer_ledger', $m_ledger);
                    }
                    $count++;
                }

            }
            $this->db->select('*');
            $this->db->from('manufacturer_information');
            $this->db->where('status', 1);
            $query = $this->db->get();
            foreach ($query->result() as $row) {
                $json_product[] = array('label' => $row->manufacturer_name, 'value' => $row->manufacturer_id);
            }
            $cache_file = './my-assets/js/admin_js/json/manufacturer.json';
            $productList = json_encode($json_product);
            file_put_contents($cache_file, $productList);
            fclose($fp) or die("can't close file");
            $this->session->set_userdata(array('message' => display('successfully_added')));
            redirect(base_url('Cmanufacturer/manage_manufacturer'));
        } else {
            $this->session->set_userdata(array('error_message' => 'Please Import Only Csv File'));
            redirect(base_url('Cmanufacturer/manage_manufacturer'));
        }

    }

}