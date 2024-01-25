<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Admin_dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->template->current_menu = 'home';
        $this->load->model('Web_settings');
    }

    public function index()
    {
        $CI = &get_instance();
        $CI->load->library('lreport');
        $CI->load->library('occational');
        if (!$this->auth->is_logged()) {
            $this->output->set_header("Location: " . base_url() . 'Admin_dashboard/login', true, 302);
        }
        $this->auth->check_admin_auth();

        $CI->load->model('Customers');
        $CI->load->model('Products');
        $CI->load->model('Manufacturers');
        $CI->load->model('Invoices');
        $CI->load->model('Purchases');
        $CI->load->model('Reports');
        //$CI->load->model('Accounts');
        $CI->load->model('Web_settings');

        $total_customer = $CI->Customers->count_customer();
        $total_product = $CI->Products->count_product();
        $total_manufacturers = $CI->Manufacturers->count_manufacturer();
        $total_sales = $CI->Invoices->count_invoice();
        $total_purchase = $CI->Reports->todays_total_purchase();
        $out_of_stock = $CI->Reports->out_of_stock_count();
        $out_of_date = $CI->Reports->out_of_date_count();

        // $this->Accounts->accounts_summary(1);
        //    $total_expese=$this->Accounts->sub_total;

        $monthly_sales_report = 0; // $CI->Reports->monthly_sales_report();

        $sales_report = $CI->Reports->todays_total_sales_report();

        $currency_details = $CI->Web_settings->retrieve_setting_editdata();

        $data = array(
            'title' => display('dashboard'),
            'total_customer' => $total_customer,
            'total_product' => $total_product,
            'total_manufacturers' => $total_manufacturers,
            'total_sales' => $total_sales,
            'total_purchase' => $total_purchase,
            'stockout' => (!empty($out_of_stock) ? $out_of_stock : 0),
            'expired' => (!empty($out_of_date) ? $out_of_date : 0),
            'purchase_amount' => $total_purchase ? number_format($total_purchase[0]['total_purchase'], 2, '.', ',') : "0.00",
            'sales_amount' => $sales_report ? number_format($sales_report[0]['total_sale'], 2, '.', ',') : "0.00",
            //'total_expese'         => $total_expese,
            'currency' => $currency_details[0]['currency'],
            'position' => $currency_details[0]['currency_position'],
            'inv_jan' => $CI->Reports->inv_jan(),
            'inv_feb' => $CI->Reports->inv_feb(),
            'inv_mar' => $CI->Reports->inv_mar(),
            'inv_apr' => $CI->Reports->inv_apr(),
            'inv_may' => $CI->Reports->inv_may(),
            'inv_jun' => $CI->Reports->inv_jun(),
            'inv_jul' => $CI->Reports->inv_jul(),
            'inv_aug' => $CI->Reports->inv_aug(),
            'inv_sep' => $CI->Reports->inv_sep(),
            'inv_oct' => $CI->Reports->inv_oct(),
            'inv_nov' => $CI->Reports->inv_nov(),
            'inv_dec' => $CI->Reports->inv_dec(),
            'pur_jan' => $CI->Reports->pur_jan(),
            'pur_feb' => $CI->Reports->pur_feb(),
            'pur_mar' => $CI->Reports->pur_mar(),
            'pur_apr' => $CI->Reports->pur_apr(),
            'pur_may' => $CI->Reports->pur_may(),
            'pur_jun' => $CI->Reports->pur_jun(),
            'pur_jul' => $CI->Reports->pur_jul(),
            'pur_aug' => $CI->Reports->pur_aug(),
            'pur_sep' => $CI->Reports->pur_sep(),
            'pur_oct' => $CI->Reports->pur_oct(),
            'pur_nov' => $CI->Reports->pur_nov(),
            'pur_dec' => $CI->Reports->pur_dec(),
        );

        $content = $CI->parser->parse('include/admin_home', $data, true);
        $this->template->full_admin_html_view($content);

    }
    //Today All Report
    public function all_report()
    {
        $CI = &get_instance();
        $CI->load->library('lreport');
        $content = $CI->lreport->retrieve_all_reports();
        $this->template->full_admin_html_view($content);
    }
    #==============Todays_sales_report============#
    public function todays_sales_report()
    {
        $CI = &get_instance();
        $CI->load->library('lreport');
        $this->auth->check_admin_auth();
        $content = $CI->lreport->todays_sales_report();
        $this->template->full_admin_html_view($content);
    }
    #================todays_purchase_report========#
    public function todays_purchase_report()
    {
        $CI = &get_instance();
        $CI->load->library('lreport');
        $this->auth->check_admin_auth();
        $content = $CI->lreport->todays_purchase_report();
        $this->template->full_admin_html_view($content);
    }
    #=============Total profit report===================#
    public function total_profit_report()
    {
        if ($this->session->userdata('user_type') == '2') {
            $this->session->set_userdata(array('error_message' => display('you_are_not_access_this_part')));
            redirect('Admin_dashboard');
        }
        $CI = &get_instance();
        $CI->load->library('lreport');
        $CI->load->model('Reports');
        $this->auth->check_admin_auth();
        #
        #pagination starts
        #
        $config["base_url"] = base_url('Admin_dashboard/total_profit_report/');
        $config["total_rows"] = $this->Reports->total_profit_report_count();
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
        $content = $this->lreport->total_profit_report($links, $config["per_page"], $page);

        $this->template->full_admin_html_view($content);
    }
    #==============Date wise profit report=============#
    public function retrieve_dateWise_profit_report()
    {
        if ($this->session->userdata('user_type') == '2') {
            $this->session->set_userdata(array('error_message' => display('you_are_not_access_this_part')));
            redirect('Admin_dashboard');
        }
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lreport');
        $start_date = $this->input->post('from_date');
        $end_date = $this->input->post('to_date');
        $content = $CI->lreport->retrieve_dateWise_profit_report($start_date, $end_date);
        $this->template->full_admin_html_view($content);
    }
    #============Date wise sales report==============#
    public function retrieve_dateWise_SalesReports()
    {
        if ($this->session->userdata('user_type') == '2') {
            $this->session->set_userdata(array('error_message' => display('you_are_not_access_this_part')));
            redirect('Admin_dashboard');
        }
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lreport');
        $from_date = $this->input->post('from_date');
        $to_date = $this->input->post('to_date');
        $content = $CI->lreport->retrieve_dateWise_SalesReports($from_date, $to_date);
        $this->template->full_admin_html_view($content);
    }
    #==============Date wise purchase report=============#
    public function retrieve_dateWise_PurchaseReports()
    {
        if ($this->session->userdata('user_type') == '2') {
            $this->session->set_userdata(array('error_message' => display('you_are_not_access_this_part')));
            redirect('Admin_dashboard');
        }
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lreport');
        $start_date = $this->input->post('from_date');
        $end_date = $this->input->post('to_date');
        $content = $CI->lreport->retrieve_dateWise_PurchaseReports($start_date, $end_date);
        $this->template->full_admin_html_view($content);
    }
    #==============Product sales report date wise===========#
    public function product_sales_reports_date_wise($page = 0)
    {
        $this->auth->check_admin_auth();
        $this->load->library('lreport');
        $this->load->model('Reports');
        #
        #pagination starts
        #
        $config["base_url"] = base_url('Admin_dashboard/product_sales_reports_date_wise/');
        $config["total_rows"] = $this->Reports->retrieve_product_sales_report_count();
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
        // $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $links = $this->pagination->create_links();
        #
        #pagination ends
        #
        $content = $this->lreport->get_products_report_sales_view($links, $config["per_page"], $page);

        $this->template->full_admin_html_view($content);
    }
    #==============Product sales search reports============#
    public function product_sales_search_reports()
    {
        if ($this->session->userdata('user_type') == '2') {
            $this->session->set_userdata(array('error_message' => display('you_are_not_access_this_part')));
            redirect('Admin_dashboard');
        }
        $this->auth->check_admin_auth();
        $this->load->library('lreport');
        $from_date = $this->input->get('from_date');
        $to_date = $this->input->get('to_date');
        $content = $this->lreport->get_products_search_report($from_date, $to_date);
        $this->template->full_admin_html_view($content);
    }
    #============User login=========#
    public function login()
    {
        if ($this->auth->is_logged()) {
            $this->output->set_header("Location: " . base_url() . 'Admin_dashboard', true, 302);
        }
        $data['title'] = display('admin_login_area');
        $content = $this->parser->parse('user/admin_login_form', $data, true);
        $this->template->full_admin_html_view($content);
    }
    #==============Valid user check=======#
    public function do_login()
    {

        $error = '';
        $setting_detail = $this->Web_settings->retrieve_setting_editdata();

        if ($setting_detail[0]['captcha'] == 0 && $setting_detail[0]['secret_key'] != null && $setting_detail[0]['site_key'] != null) {

            $this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'required|callback_validate_captcha');
            $this->form_validation->set_message('validate_captcha', 'Please check the the captcha form');

            if ($this->form_validation->run() == false) {
                $this->session->set_userdata(array('error_message' => display('please_enter_valid_captcha')));
                $this->output->set_header("Location: " . base_url() . 'Admin_dashboard/login', true, 302);
            } else {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                if ($username == '' || $password == '' || $this->auth->login($username, $password) === false) {
                    $error = display('wrong_username_or_password');
                }
                if ($error != '') {
                    $this->session->set_userdata(array('error_message' => $error));
                    $this->output->set_header("Location: " . base_url() . 'Admin_dashboard/login', true, 302);
                } else {
                    $this->output->set_header("Location: " . base_url(), true, 302);
                }
            }
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            if ($username == '' || $password == '' || $this->auth->login($username, $password) === false) {
                $error = display('wrong_username_or_password');
            }
            if ($error != '') {
                $this->session->set_userdata(array('error_message' => $error));
                $this->output->set_header("Location: " . base_url() . 'Admin_dashboard/login', true, 302);
            } else {
                $this->output->set_header("Location: " . base_url(), true, 302);
            }
        }
    }

    //Valid captcha check
    public function validate_captcha()
    {
        $captcha = $this->input->post('g-recaptcha-response');
        // $response = file_get_contents("//www.google.com/recaptcha/api/siteverify?secret=6LdiKhsUAAAAABH4BQCIvBar7Oqe-2LwDKxMSX-t&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']);

        $url = "www.google.com/recaptcha/api/siteverify?secret=6LdiKhsUAAAAABH4BQCIvBar7Oqe-2LwDKxMSX-t&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR'];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $contents = curl_exec($ch);
        if (curl_errno($ch)) {
            echo curl_error($ch);
            echo "\n<br />";
            $contents = '';
        } else {
            curl_close($ch);
        }
        if ($contents . 'success' == false) {return false;} else {return true;}
    }

    #===============Logout=======#
    public function logout()
    {
        if ($this->auth->logout()) {
            $this->output->set_header("Location: " . base_url() . 'Admin_dashboard/login', true, 302);
        }

    }
    #=============Edit Profile======#
    public function edit_profile()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('luser');
        $content = $CI->luser->edit_profile_form();
        $this->template->full_admin_html_view($content);
    }
    #=============Update Profile========#
    public function update_profile()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Users');
        $this->Users->profile_update();
        $this->session->set_userdata(array('message' => display('successfully_updated')));
        redirect(base_url('Admin_dashboard/edit_profile'));
    }
    #=============Change Password=========#
    public function change_password_form()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $content = $CI->parser->parse('user/change_password', array('title' => display('change_password')), true);
        $this->template->full_admin_html_view($content);
    }
    #============Change Password===========#
    public function change_password()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Users');

        $error = '';
        $email = $this->input->post('email');
        $old_password = $this->input->post('old_password');
        $new_password = $this->input->post('password');
        $repassword = $this->input->post('repassword');
        if ($email == '' || $old_password == '' || $new_password == '') {
            $error = display('blank_field_does_not_accept');
        } else if ($email != $this->session->userdata('user_email')) {
            $error = display('you_put_wrong_email_address');
        } else if (strlen($new_password) < 6) {
            $error = display('new_password_at_least_six_character');
        } else if ($new_password != $repassword) {
            $error = display('password_and_repassword_does_not_match');
        } else if ($CI->Users->change_password($email, $old_password, $new_password) === false) {
            $error = display('you_are_not_authorised_person');
        }
        if ($error != '') {
            $this->session->set_userdata(array('error_message' => $error));
            $this->output->set_header("Location: " . base_url() . 'Admin_dashboard/change_password_form', true, 302);
        } else {
            $this->session->set_userdata(array('message' => display('successfully_changed_password')));
            $this->output->set_header("Location: " . base_url() . 'Admin_dashboard/change_password_form', true, 302);
        }
    }
    public function profit_manufacturer_form()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lreport');
        $content = $CI->lreport->profit_report_manufacturer_form();
        $this->template->full_admin_html_view($content);

    }
    // profit report manufacturer wise
    public function profit_manufacturer()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lreport');
        $manufacturer_id = $this->input->post('manufacturer_id');
        $from_date = $this->input->post('from_date');
        $to_date = $this->input->post('to_date');
        $content = $CI->lreport->profit_report_manufacturer($manufacturer_id, $from_date, $to_date);
        $this->template->full_admin_html_view($content);

    }
// product wise profit report form
    public function profit_productwise_form()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lreport');
        $content = $CI->lreport->profit_productwise_form();
        $this->template->full_admin_html_view($content);

    }
    // profit report manufacturer wise
    public function profit_productwise()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lreport');
        $product_id = $this->input->post('product_id');
        $from_date = $this->input->post('from_date');
        $to_date = $this->input->post('to_date');
        $content = $CI->lreport->profit_productwise($product_id, $from_date, $to_date);
        $this->template->full_admin_html_view($content);

    }

// doctor wise profit report form
    public function profit_doctorwise_form()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lreport');
        $content = $CI->lreport->profit_doctorwise_form();
        $this->template->full_admin_html_view($content);

    }
    // profit report doctor wise
    public function profit_doctorwise()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lreport');
        $doc_id = $this->input->post('doc_id');
        $from_date = $this->input->post('from_date');
        $to_date = $this->input->post('to_date');
        $content = $CI->lreport->profit_doctorwise($doc_id, $from_date, $to_date);
        $this->template->full_admin_html_view($content);

    }
}