<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Caccounts extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('lsettings');
        $this->load->library('auth');
        $this->load->library('session');
        $this->load->library('laccounts');
        $this->load->dbforge();
        $this->load->model('Settings');
        $this->load->model('Accounts');
        $this->load->model('Web_settings');
        $this->auth->check_admin_auth();
        $this->template->current_menu = 'Caccounts';

//        if ($this->session->userdata('user_type') == '2') {
        //            $this->session->set_userdata(array('error_message'=>display('you_are_not_access_this_part')));
        //            redirect('Admin_dashboard');
        //        }
    }

    public function index()
    {
        $data = array('title' => display('accounts_inflow_form'));
        $data["accounts"] = $this->Accounts->accounts_name_finder(2);
        $data["customer_id"] = $this->Accounts->customer_info();
        $data["bank"] = $this->Settings->get_bank_list();
        $content = $this->parser->parse('accounts/inflow', $data, true);
        $this->template->full_admin_html_view($content);
    }

    public function select_to_due($id)
    {
        $this->db->select('sum(a.due_amount) as due_amount,b.*');
        $this->db->from('invoice_details a');
        $this->db->join('customer_ledger b', 'b.invoice_no = a.invoice_id');
        $this->db->where('b.customer_id', $id);
// $this->db->group_by('b.customer_id');
        $query = $this->db->get()->row();
        echo json_encode($query);
    }
    #===============Outflow accounts========#
    public function outflow()
    {
        $data = array('title' => display('accounts_outflow_form'));
        $data["accounts"] = $this->Accounts->accounts_name_finder(1);
        $data["bank"] = $this->Settings->get_bank_list();
        $content = $this->parser->parse('accounts/outflow', $data, true);
        $this->template->full_admin_html_view($content);

    }
    // ============== Tax settings ================
    public function tax_settings()
    {
        $taxsinfo = $this->db->count_all('tax_settings');
        if ($taxsinfo > 0) {
            redirect("Caccounts/tax_settings_updateform");
        }
        $data = array('title' => display('tax_settings'));
        $content = $this->parser->parse('accounts/tax_settings', $data, true);
        $this->template->full_admin_html_view($content);
    }
// tax setting update form
    public function tax_settings_updateform()
    {
        $data['title'] = display('tax_settings');
        $data['setinfo'] = $this->Settings->tax_setting_info();
        $content = $this->parser->parse('accounts/tax_settings_update', $data, true);
        $this->template->full_admin_html_view($content);
    }

    // Entry Tax Settings
    public function create_tax_settins()
    {
        $taxfield = $this->input->post('taxfield');
        $dfvalue = $this->input->post('default_value');
        $nt = $this->input->post('nt');
        $reg_no = $this->input->post('reg_no');
        $ishow = $this->input->post('is_show');
        for ($i = 0; $i < sizeof($taxfield); $i++) {
            if ($taxfield[$i] && $dfvalue[$i] && $reg_no[$i]) {
                $tax = $taxfield[$i];
                $default = $dfvalue[$i];
                $rg_no = $reg_no[$i];
                $is_show = (!empty($ishow[$i]) ? $ishow[$i] : 0);

                $data = array(
                    'default_value' => $default,
                    'tax_name' => $tax,
                    'nt' => $nt,
                    'reg_no' => $rg_no,
                );

                $this->db->insert('tax_settings', $data);
            }
        }

        // print_r($data);exit();
        for ($i = 0; $i < sizeof($taxfield); $i++) {
            //$fld = preg_replace('/[^a-zA-Z0-9_]/', '', $taxfield[$i]);
            $fld = 'tax' . $i; //strtolower($fld);

            if (!empty($fld)) {
                if (!$this->db->field_exists($fld, 'product_service')) {
                    $this->dbforge->add_column('product_service', [
                        $fld => [
                            'type' => 'TEXT',
                        ],
                    ]);

                }
                if (!$this->db->field_exists($fld, 'tax_collection')) {
                    $this->dbforge->add_column('tax_collection', [
                        $fld => [
                            'type' => 'TEXT',
                        ],
                    ]);
                }
                if (!$this->db->field_exists($fld, 'product_information')) {
                    $this->dbforge->add_column('product_information', [
                        $fld => [
                            'type' => 'TEXT',
                        ],
                    ]);
                }

            }
        }

        $this->session->set_flashdata('message', display('save_successfully'));
        redirect("Caccounts/tax_settings");
    }

    public function update_tax_settins()
    {

        // $tablecolumn = $this->db->list_fields('tax_collection');
        // $num_column = count($tablecolumn) - 4;
        // for ($t = 0; $t < $num_column; $t++) {
        //     $txd = 'tax' . $t;
        //     if ($this->db->field_exists($txd, 'product_service')) {
        //         $this->dbforge->drop_column('product_service', $txd);
        //     }
        //     if ($this->db->field_exists($txd, 'tax_collection')) {
        //         $this->dbforge->drop_column('tax_collection', $txd);
        //     }
        //     if ($this->db->field_exists($txd, 'product_information')) {
        //         $this->dbforge->drop_column('product_information', $txd);
        //     }
        //     echo 'successfully_deleted';
        // }

        $taxfield = $this->input->post('taxfield');
        $dfvalue = $this->input->post('default_value');
        $nt = $this->input->post('nt');
        $reg_no = $this->input->post('reg_no');
        $id = $this->input->post('id');
        $ishow = $this->input->post('is_show');
        $id = $this->input->post('tax_id');
        // $this->db->empty_table('tax_settings');

        for ($x = 0; $x < sizeof($taxfield); $x++) {
            if ($taxfield[$x] && $dfvalue[$x] && $reg_no[$x]) {
                $tax = $taxfield[$x];
                $default = $dfvalue[$x];
                $rg_no = $reg_no[$x];
                $is_show = (!empty($ishow[$x]) ? $ishow[$x] : 0);
                $data = array(
                    'default_value' => $default,
                    'tax_name' => $tax,
                    'nt' => $nt,
                    'reg_no' => $rg_no,
                );
                if (isset($id[$x]) && $id[$x]) {
                    $this->db->where('id', $id[$x])->update('tax_settings', $data);
                } else {
                    $this->db->insert('tax_settings', $data);
                    $fld = 'tax' . $x;
                    if (!empty($fld)) {
                        if (!$this->db->field_exists($fld, 'product_service')) {
                            $this->dbforge->add_column('product_service', [
                                $fld => [
                                    'type' => 'TEXT',
                                ],
                            ]);
                        }
                        if (!$this->db->field_exists($fld, 'tax_collection')) {
                            $this->dbforge->add_column('tax_collection', [
                                $fld => [
                                    'type' => 'TEXT',
                                ],
                            ]);
                        }
                        if (!$this->db->field_exists($fld, 'product_information')) {
                            $this->dbforge->add_column('product_information', [
                                $fld => [
                                    'type' => 'TEXT',
                                ],
                            ]);
                        }
                    }
                }
            } else {
                if (isset($id[$x]) && $id[$x]) {
                    $this->db->from('tax_settings')->where('id', $id[$x])->delete();
                    $txd = 'tax' . $x;
                    if ($this->db->field_exists($txd, 'product_service')) {
                        $this->dbforge->drop_column('product_service', $txd);
                    }
                    if ($this->db->field_exists($txd, 'tax_collection')) {
                        $this->dbforge->drop_column('tax_collection', $txd);
                    }
                    if ($this->db->field_exists($txd, 'product_information')) {
                        $this->dbforge->drop_column('product_information', $txd);
                    }
                }
            }
        }
        $this->session->set_flashdata('message', display('successfully_updated'));
        redirect("Caccounts/tax_settings");
    }
    #===============Add TAX================#
    public function add_tax()
    {
        $data = array('title' => display('add_tax'));
        $content = $this->parser->parse('accounts/add_tax', $data, true);
        $this->template->full_admin_html_view($content);

    }
    #==============TAX Entry==============#
    public function tax_entry()
    {
        $data = array('title' => display('accounts_tax_form'));
        $tax['tax_id'] = $this->auth->generator(10);
        $tax['tax'] = $this->input->post('enter_tax');
        $tax['status'] = 1;
        $result = $this->Accounts->tax_entry($tax);
        if ($result == true) {
            $this->session->set_userdata(array('message' => display('successfully_inserted')));
            redirect('Caccounts/manage_tax');
        } else {
            $this->session->set_userdata(array('error_message' => display('already_exists')));
            redirect('Caccounts/manage_tax');
        }
    }
    #==============Manage TAX==============#
    public function manage_tax()
    {
        $tax_list = $this->db->select('*')
            ->from('tax_information')
            ->get()
            ->result();

        $data = array(
            'title' => display('manage_tax'),
            'tax_list' => $tax_list,
        );

        $content = $this->parser->parse('accounts/manage_tax', $data, true);
        $this->template->full_admin_html_view($content);

    }

    #==============TAX Edit==============#
    public function tax_edit($tax_id)
    {
        $tax_info = $this->db->select('*')
            ->from('tax_information')
            ->where('tax_id', $tax_id)
            ->get()
            ->result_array();

        $data = array(
            'title' => display('accounts_tax_edit'),
            'tax_id' => $tax_info[0]['tax_id'],
            'tax' => $tax_info[0]['tax'],
        );

        $content = $this->parser->parse('accounts/tax_edit', $data, true);
        $this->template->full_admin_html_view($content);

    }
    #==============TAX Update==============#
    public function update_tax($id)
    {
        $data = array('title' => display('accounts_tax_edit'));
        $tax['tax'] = $this->input->post('enter_tax');
        $result = $this->Accounts->update_tax_data($tax, $id);
        if ($result == true) {
            $this->session->set_userdata(array('message' => display('successfully_updated')));
        }
        $tax_list = $this->db->select('*')
            ->from('tax_information')
            ->get()
            ->result();

        $data = array(
            'title' => display('tax_edit'),
            'tax_list' => $tax_list,
        );
        $content = $this->parser->parse('accounts/manage_tax', $data, true);
        $this->template->full_admin_html_view($content);

    }

    #==============TAX Update==============#
    public function tax_delete($id)
    {
        $tax['tax'] = $this->input->post('enter_tax');

        $result = $this->db->delete('tax_information', array('tax_id' => $id));

        if ($result == true) {
            $this->session->set_userdata(array('message' => display('successfully_delete')));
        }
        redirect('Caccounts/manage_tax');
    }

    // ================= Income tax form start ===========

    public function add_incometax()
    {
        $data = array('title' => display('add_incometax'));
        $content = $this->parser->parse('accounts/income_tax_form', $data, true);
        $this->template->full_admin_html_view($content);

    }

    // ================= manage Income tax  ===============
    public function manage_income_tax()
    {
        $data['title'] = "manage_income_tax";
        $data['taxs'] = $this->Accounts->viewTaxsetup();
        $content = $this->parser->parse('accounts/manage_income_tax', $data, true);
        $this->template->full_admin_html_view($content);
    }
    // =====================  Income tax update form =============
    public function update_taxsetup_form($id = null)
    {
        $data['title'] = "income_tax_updateform";
        $data['data'] = $this->Accounts->taxsetup_updateForm($id);
        $content = $this->parser->parse('accounts/income_tax_updateform', $data, true);
        $this->template->full_admin_html_view($content);
    }
    // ============== Update Income tax =================
    public function update_income_tax()
    {
        $postData = [
            'tax_setup_id' => $this->input->post('tax_setup_id', true),
            'start_amount' => $this->input->post('start_amount', true),
            'end_amount' => $this->input->post("end_amount", true),
            'rate' => $this->input->post("rate", true),
        ];
        if ($this->Accounts->update_taxsetup($postData)) {
            $this->session->set_flashdata('message', display('successfully_updated'));
        } else {
            $this->session->set_flashdata('error_message', display('please_try_again'));
        }
        redirect("Caccounts/manage_income_tax/");
    }

    public function delete_income_tax($id = null)
    {
        if ($this->Accounts->taxsetup_delete($id)) {
            #set success message
            $this->session->set_flashdata('message', display('delete_successfully'));
        } else {
            #set exception message
            $this->session->set_flashdata('error_message', display('please_try_again'));
        }
        redirect("Caccounts/manage_income_tax");
    }
    // ==================== Income tax form end ============

    // ================ Income tax entry   ======
    public function create_tax_setup()
    {
        $sm = $this->input->post('start_amount');
        $em = $this->input->post('end_amount');
        $rt = $this->input->post('rate');
        for ($i = 0; $i < sizeof($sm); $i++) {
            $postData = [
                'start_amount' => $sm[$i],
                'end_amount' => $em[$i],
                'rate' => $rt[$i],
            ];
            $this->Accounts->taxsetup_create($postData);
        }
        $this->session->set_flashdata('message', display('save_successfully'));
        redirect("Caccounts/manage_income_tax");
    }

    #==============Closing reports==========#
    public function closing()
    {
        $data = array('title' => "Accounts | Daily Closing");
        $data = $this->Accounts->accounts_closing_data();
        $content = $this->parser->parse('accounts/closing_form', $data, true);
        $this->template->full_admin_html_view($content);
    }
    #===============Accounts summary==========#
    public function summary()
    {

        $currency_details = $this->Web_settings->retrieve_setting_editdata();
        $data = array(
            'title' => display('accounts_summary_data'),
            'currency' => $currency_details[0]['currency'],
            'position' => $currency_details[0]['currency_position'],
        );

        $data['table_inflow'] = $this->Accounts->table_name(2);
        $data['table_outflow'] = $this->Accounts->table_name(1);

        $data['inflow'] = $this->Accounts->accounts_summary(2);
        $data['total_inflow'] = number_format($this->Accounts->sub_total, 2, '.', ',');

        $data['outflow'] = $this->Accounts->accounts_summary(1);
        $data['total_outflow'] = number_format($this->Accounts->sub_total, 2, '.', ',');

        $content = $this->parser->parse('accounts/summary', $data, true);
        $this->template->full_admin_html_view($content);
    }
    #================Summary single===========#
    public function summary_single($start, $end, $account)
    {
        $data = array('title' => display('accounts_details_data'));

        //Getting all tables name.
        $data['table_inflow'] = $this->Accounts->table_name(2);
        $data['table_outflow'] = $this->Accounts->table_name(1);

        $data['accounts'] = $this->Accounts->accounts_summary_details($start, $end, $account);
        //$data['total_inflow']=$this->accounts->sub_total;

        $content = $this->parser->parse('accounts/summary_single', $data, true);
        $this->template->full_admin_html_view($content);
    }
    #==============Summary report date  wise========#
    public function summary_datewise()
    {
        $start = $this->input->post('from_date');
        $end = $this->input->post('to_date');
        $account = $this->input->post('accounts');

        if ($account != "All") {$url = "Caccounts/summary_single/$start/$end/$account";
            redirect(base_url($url));
            exit;
        }

        $currency_details = $this->Web_settings->retrieve_setting_editdata();

        $data = array(
            'title' => display('datewise_summary_data'),
            'currency' => $currency_details[0]['currency'],
            'position' => $currency_details[0]['currency_position'],
        );

        //Getting all tables name.
        $data['table_inflow'] = $this->Accounts->table_name(2);
        $data['table_outflow'] = $this->Accounts->table_name(1);

        $data['inflow'] = $this->Accounts->accounts_summary_datewise($start, $end, "2");
        $data['total_inflow'] = $this->Accounts->sub_total;

        $data['outflow'] = $this->Accounts->accounts_summary_datewise($start, $end, "1");
        $data['total_outflow'] = $this->Accounts->sub_total;

        $content = $this->parser->parse('accounts/summary', $data, true);
        $this->template->full_admin_html_view($content);
    }

    #============ Cheque Manager ==============#
    public function cheque_manager()
    {

        $currency_details = $this->Web_settings->retrieve_setting_editdata();

        $data = array(
            'title' => display('accounts_cheque_manager'),
            'currency' => $currency_details[0]['currency'],
            'position' => $currency_details[0]['currency_position'],
        );
        $data["cheque_manager"] = $this->Accounts->cheque_manager(30, 0);
        //print_r($data);
        $content = $this->parser->parse('accounts/cheque_manager', $data, true);
        $this->template->full_admin_html_view($content);
    }
    #============ Cheque Manager edit ==============#
    public function cheque_manager_edit($transection_id, $action)
    {
        $this->Accounts->data_update(array('status' => $action), "customer_ledger", array('transaction_id' => $transection_id));
        $this->Accounts->data_update(array('cheque_status' => $action), "cheque_manger", array('transection_id' => $transection_id));
        $this->session->set_userdata(array('message' => display('cheque_ammount_asjusted')));
        redirect(base_url('Caccounts/cheque_manager'));exit;
    }
    #===============Outflow entry==============#
    public function outflow_entry()
    {
        $todays_date = $this->input->post('transection_date');
        $customer_id = $this->input->post('manufacturer_id');

        //Data Receive.
        if ($this->input->post('manufacturer_id')) {
            $customer_id = $this->input->post('manufacturer_id');
        } else {
            $customer_id = $this->input->post('customer_name_others');

        }
        $payment_type = $this->input->post('payment_type');
        $cheque_no = $this->input->post('cheque_no');
        $cheque_mature_date = $this->input->post('cheque_mature_date');
        $bank_name = $this->input->post('bank_name');

        $account_table = $this->input->post('account_table');
        $amount = $this->input->post('amount');
        $description = $this->input->post('description');

        if ($payment_type == 1) {$status = 1;} else { $status = 0;}
        $deposit_no = $this->generator(10);
        $transaction_id = $this->generator(15);

        //Data ready for transferring to customer_ledger
        $data = array(
            'transaction_id' => $transaction_id,
            'manufacturer_id' => $customer_id,
            'chalan_no' => null,
            'deposit_no' => $deposit_no,
            'amount' => $amount,
            'description' => $description,
            'payment_type' => $payment_type,
            'cheque_no' => $cheque_no,
            'date' => $todays_date,
            'status' => $status,
        );

        //Data ready for transferring to accounts ledger
        $data1 = array(
            'transection_id' => $transaction_id,
            'tracing_id' => $customer_id,
            'payment_type' => $payment_type,
            'date' => $todays_date,
            'amount' => $amount,
            'description' => $description,
            'status' => $status,
        );

        //################### Cheque  || Pay Order ########## Start ########

        //This part is for being payment type cheque or Pay order.
        if ($payment_type == 2 || $payment_type == 3) {
            $cheque_id = $this->auth->generator(12);
            //Data ready for transfering to cheque table.
            $data_cheque = array(
                'cheque_id' => $cheque_id,
                'transection_id' => $transaction_id,
                'customer_id' => $customer_id,
                'bank_id' => $bank_name,
                'cheque_no' => $cheque_no,
                'date' => $cheque_mature_date,
                'transection_type' => "outflow",
                'cheque_status' => 0, //not matured, 1 will be cleared from bank
                'amount' => $amount,
                'status' => 1,
            );
            $this->Accounts->pay_table($data_cheque, "cheque_manger");
        }

        //################### Cheque  || Pay Order ########## Finish ########

        $this->Accounts->manufacturer_ledger($data);
        $this->Accounts->pay_table($data1, $account_table);
        $this->session->set_userdata(array('message' => display('successfully_payment_paid')));
        redirect(base_url('Caccounts/summary'));exit;
    }

    //This function will receive inflow data afte submitting.
    public function inflow_entry()
    {
        $todays_date = $todays_date = $this->input->post('transection_date'); // date("m-d-Y");

        //Data Receive.
        if ($this->input->post('customer_id')) {
            $customer_id = $this->input->post('customer_id');
        } else {
            $customer_id = $this->input->post('customer_name_others');

        }
        $payment_type = $this->input->post('payment_type');
        $cheque_no = $this->input->post('cheque_no');
        $cheque_mature_date = $this->input->post('cheque_mature_date');
        $bank_name = $this->input->post('bank_name');

        $account_table = $this->input->post('account_table');
        $amount = $this->input->post('amount');
        $description = $this->input->post('description');

        if ($payment_type == "1") {
            $status = 1;
        } else {
            $status = 0;
        }
        $receipt_no = $this->auth->generator(10);
        $transaction_id = $this->auth->generator(15);

        //Data ready for transferring to customer_ledger
        $data = array(
            'transaction_id' => $transaction_id,
            'customer_id' => $customer_id,
            'invoice_no' => null,
            'receipt_no' => $receipt_no,
            'amount' => $amount,
            'description' => $description,
            'payment_type' => $payment_type,
            'cheque_no' => $cheque_no,
            'date' => $todays_date,
            'status' => $status,
        );

        //Data ready for transferring to own table
        $data1 = array(
            'transection_id' => $transaction_id,
            'tracing_id' => $customer_id,
            'payment_type' => $payment_type,
            'date' => $todays_date,
            'amount' => $amount,
            'description' => $description,
            'status' => $status,
        );

        //################### Cheque  || Pay Order ########## Start ########

        //This part is for being payment type cheque or Pay order.
        if ($payment_type == "2" || $payment_type == "3") {
            $cheque_id = $this->auth->generator(12);
            //Data ready for transfering to cheque table.
            $data_cheque = array(
                'cheque_id' => $cheque_id,
                'transection_id' => $transaction_id,
                'customer_id' => $customer_id,
                'bank_id' => $bank_name,
                'cheque_no' => $cheque_no,
                'date' => $cheque_mature_date,
                'transection_type' => "inflow",
                'cheque_status' => 0, //not matured, 1 will be cleared from bank
                'amount' => $amount,
                'status' => 1,
            );
            $this->Accounts->pay_table($data_cheque, "cheque_manger");
        }

        //################### Cheque  || Pay Order ########## Finish ########

        $this->Accounts->customer_ledger($data);
        $this->Accounts->pay_table($data1, $account_table);

        $this->session->set_userdata(array('message' => display('successfully_payment_received')));
        redirect(base_url('Caccounts/summary'));exit;
    }

    //This function will be used to edit the inflow & outflow data.
    public function inout_edit($transection_id, $table, $action)
    {
        $data = array('title' => display('accounts_edit_data'));

        if ($action == "del") {
            //Call the delete method to destroy data from both table.
            $data = $this->Accounts->in_out_del($transection_id, $table);
            $this->session->set_userdata(array('message' => $data));
            redirect(base_url('Caccounts/summary/'));exit;

        } else {

            if (substr($table, 0, 2) == "in") {
                $data["edit"] = $this->Accounts->inflow_edit($transection_id, $table, "2");

                $content = $this->parser->parse('accounts/inflow_edit.php', $data, true);
                $this->template->full_admin_html_view($content);
            } else {
                $data["edit"] = $this->Accounts->outflow_edit($transection_id, $table, "1");
                $content = $this->parser->parse('accounts/outflow_edit', $data, true);
                $this->template->full_admin_html_view($content);
            }
        }
    }
    // Inflow edit form
    public function inflow_edit_form()
    {
        //Call the delete method to destroy data from both table.
        $data = $this->Accounts->in_out_del($transection_id, $table);
        $this->session->set_userdata(array('message' => display('successfully_updated')));
        redirect(base_url('Caccounts/summary/'));exit;
    }
    // Inflow edit receiver
    public function inflow_edit_receiver($transection_id)
    {
        $todays_date = date("Y-m-d");
        //Data Receive.
        if ($this->input->post('customer_id')) {
            $customer_id = $this->input->post('customer_id');
        } else {
            $customer_id = $this->input->post('customer_name_others');

        }
        $payment_type = $this->input->post('payment_type');
        $cheque_no = $this->input->post('cheque_no');
        $cheque_mature_date = $this->input->post('cheque_mature_date');
        $bank_name = $this->input->post('bank_name');

        $account_table = $this->input->post('account_table');
        $previous_table = $this->input->post('pre_table');

        $amount = $this->input->post('amount');
        $description = $this->input->post('description');

        $pre_data = $this->Accounts->transection_info($transection_id, $previous_table, array("transection_id" => $transection_id));

        //Data ready for transferring to customer_ledger
        $data = array(
            'customer_id' => $customer_id,
            'amount' => $amount,
            'description' => $description,
            'payment_type' => $payment_type,
            'cheque_no' => $cheque_no,
        );

        //Data ready for transferring to
        $data1 = array(
            'transection_id' => $transection_id,
            'tracing_id' => $customer_id,
            'payment_type' => $payment_type,
            'date' => $todays_date,
            'amount' => $amount,
            'description' => $description,
            'status' => 1,
        );

        // Following group data for other days corrections.

        //Data ready for transferring to customer_ledger
        $data2 = array(
            'customer_id' => $customer_id,
            'description' => $description,
            'payment_type' => $payment_type,
            'cheque_no' => $cheque_no,
        );

        //Data ready for transferring to
        $data3 = array(
            'transection_id' => $transection_id,
            'tracing_id' => $customer_id,
            'payment_type' => $payment_type,
            'date' => $pre_data[0]['date'],
            'amount' => $pre_data[0]['amount'],
            'description' => $description,
            'status' => 1,
        );

        //################### Cheque  || Pay Order ########## Start ########

        //This part is for being payment type cheque or Pay order.
        if ($payment_type == 2 || $payment_type == 3) {
            $cheque_id = $this->auth->generator(12);
            //Data ready for transfering to cheque table.
            $data_cheque = array(
                'cheque_id' => $cheque_id,
                'transection_id' => $transection_id,
                'customer_id' => $customer_id,
                'bank_id' => $bank_name,
                'cheque_no' => $cheque_no,
                'date' => $cheque_mature_date,
                'transection_type' => "inflow",
                'cheque_status' => 0, //not matured, 1 will be cleared from bank
                'amount' => $amount,
                'status' => 1,
            );

            //Deleting Old data.
            $this->Accounts->delete_all_table_data("cheque_manger", array('transection_id' => $transection_id));
            //Inserting new data.
            $this->Accounts->pay_table($data_cheque, "cheque_manger");

        } else {
            //Deleting Old data.
            $this->Accounts->delete_all_table_data("cheque_manger", array('transection_id' => $transection_id));
        }

        //################### Cheque  || Pay Order ########## Finish ########

        if ($todays_date == $pre_data[0]["date"]) {
            //Updating data on manufacturer Ledger table.
            $this->Accounts->data_update($data, "customer_ledger", array('transaction_id' => $transection_id));

            //Deleting Old data.
            $this->Accounts->delete_all_table_data($previous_table, array('transection_id' => $transection_id));

            //Inserting new data.
            $this->Accounts->pay_table($data1, $account_table);

            $this->session->set_userdata(array('message' => display('successfully_updated')));
            redirect(base_url('Caccounts/summary'));exit;
        } else {
            //Updating data on manufacturer Ledger table.
            $this->Accounts->data_update($data2, "customer_ledger", array('transaction_id' => $transection_id));

            //Deleting Old data.
            $this->Accounts->delete_all_table_data($previous_table, array('transection_id' => $transection_id));

            //Inserting new data.
            $this->Accounts->pay_table($data3, $account_table);

            $this->session->set_userdata(array('message' => display('successfully_updated_2_closing_ammount_not_changeale')));
            redirect(base_url('Caccounts/summary'));exit;
        }
    }

    // Outflow edit receiver
    public function outflow_edit_receiver($transection_id)
    {
        $todays_date = date("Y-m-d");
        //Data Receive.
        if ($this->input->post('manufacturer_id')) {
            $customer_id = $this->input->post('manufacturer_id');
        } else {
            $customer_id = $this->input->post('customer_name_others');

        }
        $payment_type = $this->input->post('payment_type');
        $cheque_no = $this->input->post('cheque_no');
        $cheque_mature_date = $this->input->post('cheque_mature_date');
        $bank_name = $this->input->post('bank_name');

        $account_table = $this->input->post('account_table');
        $previous_table = $this->input->post('pre_table');

        $amount = $this->input->post('amount');
        $description = $this->input->post('description');

        $pre_data = $this->Accounts->transection_info($transection_id, $previous_table, array("transection_id" => $transection_id));

        //Data ready for transferring to customer_ledger
        $data = array(
            'manufacturer_id' => $customer_id,
            'amount' => $amount,
            'description' => $description,
            'payment_type' => $payment_type,
            'cheque_no' => $cheque_no,
        );

        //Data ready for transferring to
        $data1 = array(
            'transection_id' => $transection_id,
            'tracing_id' => $customer_id,
            'payment_type' => $payment_type,
            'date' => $todays_date,
            'amount' => $amount,
            'description' => $description,
            'status' => 1,
        );
        // Following group data for other days corrections.

        //Data ready for transferring to customer_ledger
        $data2 = array(
            'manufacturer_id' => $customer_id,
            'description' => $description,
            'payment_type' => $payment_type,
            'cheque_no' => $cheque_no,
        );

        //Data ready for transferring to
        $data3 = array(
            'transection_id' => $transection_id,
            'tracing_id' => $customer_id,
            'payment_type' => $payment_type,
            'date' => $pre_data[0]['date'],
            'amount' => $pre_data[0]['amount'],
            'description' => $description,
            'status' => 1,
        );
        //################### Cheque  || Pay Order ########## Start ########

        //This part is for being payment type cheque or Pay order.
        if ($payment_type == 2 || $payment_type == 3) {
            $cheque_id = $this->auth->generator(12);
            //Data ready for transfering to cheque table.
            $data_cheque = array(
                'cheque_id' => $cheque_id,
                'transection_id' => $transection_id,
                'customer_id' => $customer_id,
                'bank_id' => $bank_name,
                'cheque_no' => $cheque_no,
                'date' => $cheque_mature_date,
                'transection_type' => "outflow",
                'cheque_status' => 0, //not matured, 1 will be cleared from bank
                'amount' => $amount,
                'status' => 1,
            );
            //Deleting Old data.
            $this->Accounts->delete_all_table_data("cheque_manger", array('transection_id' => $transection_id));
            //Inserting new data.
            $this->Accounts->pay_table($data_cheque, "cheque_manger");
        } else {
            //Deleting Old data.
            $this->Accounts->delete_all_table_data("cheque_manger", array('transection_id' => $transection_id));
        }

        //################### Cheque  || Pay Order ########## Finish ########
        if ($todays_date == $pre_data[0]["date"]) {
            //Updating data on manufacturer Ledger table.
            $this->Accounts->data_update($data, "manufacturer_ledger", array('transaction_id' => $transection_id));

            //Deleting Old data.
            $this->Accounts->delete_all_table_data($previous_table, array('transection_id' => $transection_id));

            //Inserting new data.
            $this->Accounts->pay_table($data1, $account_table);

            $this->session->set_userdata(array('message' => display('successfully_updated')));
            redirect('Caccounts/summary');exit;
        } else {
            //Updating data on manufacturer Ledger table.
            $this->Accounts->data_update($data2, "manufacturer_ledger", array('transaction_id' => $transection_id));

            //Deleting Old data.
            $this->Accounts->delete_all_table_data($previous_table, array('transection_id' => $transection_id));

            //Inserting new data.
            $this->Accounts->pay_table($data3, $account_table);

            $this->session->set_userdata(array('message' => display('successfully_updated_2_closing_ammount_not_changeale')));
            redirect('Caccounts/summary');exit;
        }
    }

    // Add daily closing
    public function add_daily_closing()
    {
        date_default_timezone_set('Asia/Dhaka');
        $todays_date = date("Y-m-d h:i:s");

        $data = array(
            'closing_id' => $this->generator(15),
            'last_day_closing' => str_replace(',', '', $this->input->post('last_day_closing')),
            'cash_in' => str_replace(',', '', $this->input->post('cash_in')),
            'cash_out' => str_replace(',', '', $this->input->post('cash_out')),
            'date' => $todays_date,
            'amount' => str_replace(',', '', $this->input->post('cash_in_hand')),
            'adjustment' => str_replace(',', '', $this->input->post('adjusment')),
            'status' => 1,
        );
        $invoice_id = $this->Accounts->daily_closing_entry($data);
        $this->session->set_userdata(array('message' => display('successfully_added')));
        redirect(base_url('Caccounts/closing_report'));exit;
    }
    // Add drawing entry
    public function add_drawing_entry()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Closings');
        $todays_date = date("Y-m-d");

        $data = array(
            'drawing_id' => $this->generator(15),
            'date' => $todays_date,
            'drawing_title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'amount' => $this->input->post('amount'),
            'status' => 1,
        );

        $invoice_id = $CI->Closings->drawing_entry($data);
        $this->session->set_userdata(array('message' => display('successfully_draw_added')));
        redirect(base_url('cclosing'));exit;
    }
    // Add expance entry
    public function add_expence_entry()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Closings');
        date_default_timezone_set('Asia/Dhaka');
        $todays_date = date("Y-m-d");

        $data = array(
            'expence_id' => $this->generator(15),
            'date' => $todays_date,
            'expence_title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'amount' => $this->input->post('amount'),
            'status' => 1,
        );

        $invoice_id = $CI->Closings->expence_entry($data);
        $this->session->set_userdata(array('message' => display('successfully_added')));
        redirect(base_url('cclosing'));exit;
    }
    // Add bank entry
    public function add_banking_entry()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Closings');
        date_default_timezone_set('Asia/Dhaka');
        $todays_date = date("Y-m-d");

        $data = array(
            'banking_id' => $this->generator(15),
            'date' => $todays_date,
            'bank_id' => $this->input->post('bank_id'),
            'deposit_type' => $this->input->post('deposit_name'),
            'transaction_type' => $this->input->post('transaction_type'),
            'description' => $this->input->post('description'),
            'amount' => $this->input->post('amount'),
            'status' => 1,
        );

        $invoice_id = $CI->Closings->banking_data_entry($data);
        $this->session->set_userdata(array('message' => display('successfully_added')));
        redirect(base_url('cclosing'));exit;
    }

    //Closing report
    public function closing_report()
    {

        $content = $this->laccounts->daily_closing_list();
        $this->template->full_admin_html_view($content);
    }
    // Date wise closing reports
    public function date_wise_closing_reports()
    {
        $from_date = $this->input->post('from_date');
        $to_date = $this->input->post('to_date');

        $content = $this->laccounts->get_date_wise_closing_reports($from_date, $to_date);

        $this->template->full_admin_html_view($content);
    }
    // Random Id generator
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

    // tax report
    public function tax_report()
    {
        $this->load->model('Accounts');
        $taxfield = $this->db->select('tax_name,default_value')
            ->from('tax_settings')
            ->get()
            ->result_array();
        $tablecolumn = $this->db->list_fields('tax_collection');
        $num_column = count($tablecolumn) - 4;
        $start = (!empty($this->input->get('from_date')) ? $this->input->get('from_date') : date('Y-m-d'));
        $end = (!empty($this->input->get('to_date')) ? $this->input->get('to_date') : date('Y-m-d'));
        $data['from_date'] = $start;
        $data['to_date'] = $end;
        $data['title'] = display('tax_report');
        $data['taxes'] = $taxfield;
        $data['taxnumber'] = $num_column;
        $data['taxdata'] = $this->Accounts->taxdata($start, $end);
        $content = $this->parser->parse('accounts/tax_report', $data, true);
        $this->template->full_admin_html_view($content);
    }
    //customer wise tax report
    public function invoice_wise_tax_report()
    {
        $this->load->model('Accounts');
        $taxfield = $this->db->select('tax_name,default_value')
            ->from('tax_settings')
            ->get()
            ->result_array();
        $tablecolumn = $this->db->list_fields('tax_collection');
        $num_column = count($tablecolumn) - 4;
        $start = (!empty($this->input->get('from_date')) ? $this->input->get('from_date') : date('Y-m-d'));
        $end = (!empty($this->input->get('to_date')) ? $this->input->get('to_date') : date('Y-m-d'));
        $invoice_id = (!empty($this->input->get('invoice_id')) ? $this->input->get('invoice_id') : '');
        $data['invoice_id'] = $invoice_id;
        $data['from_date'] = $start;
        $data['to_date'] = $end;
        $data['customers'] = $this->Accounts->tax_customer();
        $data['title'] = display('tax_report');
        $data['taxes'] = $taxfield;
        $data['taxnumber'] = $num_column;
        $data['taxdata'] = $this->Accounts->customer_taxdata($start, $end, $invoice_id);
        $content = $this->parser->parse('accounts/invoice_wise_tax_report', $data, true);
        $this->template->full_admin_html_view($content);
    }
}