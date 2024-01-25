<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Creport extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $CI = &get_instance();
        $CI->load->model('Web_settings');
    }

    public function index()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lreport');

        $content = $CI->lreport->stock_report_single_item();

        $this->template->full_admin_html_view($content);
    }

    public function CheckList()
    {
        // GET data
        $this->load->model('Reports');
        $postData = $this->input->post();
        $data = $this->Reports->getCheckList($postData);
        echo json_encode($data);
    }

    public function exportCSV()
    {
        // file name
        $this->load->model('Reports');
        $usersData = $this->Reports->stock_csv_file();
        $filename = 'stock_' . date('Ymd') . '.csv';
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/csv; ");

        // get data
        $usersData = $this->Reports->stock_csv_file();

        // file creation
        $file = fopen('php://output', 'w');

        $header = array('Product Id', 'Product Name', 'Product Model', 'Sell Price', 'Purchase Price', 'Total In Qty', 'Total Out Qty', 'Stock', 'Stock Purhcase Amount', 'Stock Sale Amount');
        fputcsv($file, $header);
        foreach ($usersData as $line) {
            fputcsv($file, $line);
        }
        fclose($file);
        exit;
    }

    public function out_of_stock()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lreport');

        $content = $CI->lreport->out_of_stock();

        $this->template->full_admin_html_view($content);
    }

    public function low_stock()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lreport');

        $content = $CI->lreport->low_stock();

        $this->template->full_admin_html_view($content);
    }

    public function CheckStockOutList()
    {
        // GET data
        $this->load->model('Reports');
        $postData = $this->input->post();
        $data = $this->Reports->getStockOutList($postData);
        echo json_encode($data);
    }

    public function CheckLowStockList()
    {
        // GET data
        $this->load->model('Reports');
        $postData = $this->input->post();
        $data = $this->Reports->getLowStockList($postData);
        echo json_encode($data);
    }

    //Date Expire Medicine list
    public function out_of_date()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lreport');

        $content = $CI->lreport->out_of_date();

        $this->template->full_admin_html_view($content);
    }

    // medicine wise sales report
    public function get_medicinewise_sales_report()
    {
        $this->load->model('Reports');
        $postData = $this->input->post();
        $data = $this->Reports->retrieve_product_search_sales_report($postData);
        echo json_encode($data);
    }

    public function CheckExpireList()
    {
        // GET data
        $this->load->model('Reports');
        $postData = $this->input->post();
        $data = $this->Reports->getExpireList($postData);
        echo json_encode($data);
    }

    public function expiring_soon()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lreport');

        $content = $CI->lreport->expiring_soon();

        $this->template->full_admin_html_view($content);
    }

    public function checkExpiringSoon()
    {
        // GET data
        $this->load->model('Reports');
        $postData = $this->input->post();
        $data = $this->Reports->getExpiringSoonList($postData);
        echo json_encode($data);
    }

    //Get product by manufacturer
    public function get_product_by_manufacturer()
    {
        $manufacturer_id = $this->input->post('manufacturer_id');

        $product_info_by_manufacturer = $this->db->select('a.*,b.*')
            ->from('product_information a')
            ->join('manufacturer_product b', 'a.product_id=b.product_id')
            ->where('b.manufacturer_id', $manufacturer_id)
            ->get()
            ->result();

        if ($product_info_by_manufacturer) {
            echo "<select class=\"form-control\" id=\"manufacturer_id\" name=\"manufacturer_id\">
	                <option value=\"\">" . display('select_one') . "</option>";
            foreach ($product_info_by_manufacturer as $product) {
                echo "<option value='" . $product->product_id . "'>" . $product->product_name . '-(' . $product->product_model . ')' . " </option>";
            }
            echo " </select>";
        }
    }

    //Report paggination
    public function pagination($per_page, $page)
    {
        $CI = &get_instance();
        $CI->load->model('Reports');
        $product_id = $this->input->post('product_id');

        $config = array();
        $config["base_url"] = base_url() . $page;
        $config["total_rows"] = $this->Reports->product_counter($product_id);
        $config["per_page"] = $per_page;
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

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $limit = $config["per_page"];
        return $links = $this->pagination->create_links();
    }

    public function stock_report_batch_wise()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lreport');
        $CI->load->model('Reports');
        $content = $this->lreport->stock_report_batch_wise();
        $this->template->full_admin_html_view($content);
    }

    public function Checkbatchstock()
    {
        // GET data
        $this->load->model('Reports');
        $postData = $this->input->post();
        $data = $this->Reports->getCheckBatchStock($postData);
        echo json_encode($data);
    }
}