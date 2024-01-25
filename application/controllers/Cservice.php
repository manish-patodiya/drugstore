<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cservice extends CI_Controller {

    public $menu;

    function __construct() {
        parent::__construct();
        $this->load->library('auth');
        $this->load->library('lservice');
        $this->load->library('session');
        $this->load->model('Service');
        $this->auth->check_admin_auth();
    }

    //Default loading for service system.
    public function index() {
        $content = $this->lservice->service_add_form();
        $this->template->full_admin_html_view($content);
    }

    //Manage service form
    public function manage_service() {
        $content = $this->lservice->service_list();
        $this->template->full_admin_html_view($content);
        
    }

    //Insert service and upload
    public function insert_service() {
               $tablecolumn = $this->db->list_fields('product_service');
               $num_column = count($tablecolumn)-4;
   $taxfield = [];
   for($i=0;$i<$num_column;$i++){
    $taxfield[$i] = 'tax'.$i;
   }
   foreach ($taxfield as $key => $value) {
    $data[$value] = $this->input->post($value)/100;
   }
   $data['service_name'] = $this->input->post('service_name');
   $data['charge'] = $this->input->post('charge');
   $data['description'] = $this->input->post('description');

        $result = $this->Service->service_entry($data);

        if ($result == TRUE) {
            $this->session->set_userdata(array('message' => display('successfully_added')));
          
                redirect(base_url('Cservice/manage_service'));
           
        } else {
            $this->session->set_userdata(array('error_message' => display('already_inserted')));
            redirect(base_url('Cservice'));
        }
    }

    //service Update Form
    public function service_update_form($service_id) {
        $content = $this->lservice->service_edit_data($service_id);
        $this->template->full_admin_html_view($content);
    }

    // service Update
    public function service_update() {
        $this->load->model('Service');
        $service_id = $this->input->post('service_id');

    $tablecolumn = $this->db->list_fields('product_service');
               $num_column = count($tablecolumn)-4;
   $taxfield = [];
   for($i=0;$i<$num_column;$i++){
    $taxfield[$i] = 'tax'.$i;
   }
   foreach ($taxfield as $key => $value) {
    $data[$value] = $this->input->post($value)/100;
   }

            $data['service_name'] = $this->input->post('service_name');
            $data['charge']       = $this->input->post('charge');
            $data['description']  = $this->input->post('description');
           
    

        $this->Service->update_service($data, $service_id);
        $this->session->set_userdata(array('message' => display('successfully_updated')));
        redirect(base_url('Cservice/manage_service'));
    }

    // service delete
    public function service_delete() {
        $this->load->model('Service');
        $service_id = $_POST['service_id'];
        $this->Service->delete_service($service_id);
        $this->session->set_userdata(array('message' => display('successfully_delete')));
        return true;
    }
    //csv upload
        function uploadCsv_service()
    {
        $filename = $_FILES['upload_csv_file']['name'];  
        $ext = end(explode('.', $filename));
        $ext = substr(strrchr($filename, '.'), 1);
        if($ext == 'csv'){
        $count=0;
        $fp = fopen($_FILES['upload_csv_file']['tmp_name'],'r') or die("can't open file");

        if (($handle = fopen($_FILES['upload_csv_file']['tmp_name'], 'r')) !== FALSE)
        {
  
         while($csv_line = fgetcsv($fp,1024)){
                //keep this if condition if you want to remove the first row
                for($i = 0, $j = count($csv_line); $i < $j; $i++)
                {                  
                $insert_csv = array();
                $insert_csv['service_name'] = (!empty($csv_line[0])?$csv_line[0]:null);
                $insert_csv['charge'] = (!empty($csv_line[1])?$csv_line[1]:null);
                $insert_csv['description'] = (!empty($csv_line[2])?$csv_line[2]:null);
                $insert_csv['tax1'] = (!empty($csv_line[3])?$csv_line[3]:null);
                $insert_csv['tax2'] = (!empty($csv_line[4])?$csv_line[4]:null);
                $insert_csv['tax3'] = (!empty($csv_line[5])?$csv_line[5]:null);
                }
             
                $servicedata = array(
                    'service_name'    => $insert_csv['service_name'],
                    'charge'          => $insert_csv['charge'],
                    'description'     => $insert_csv['description'],
                    'tax1'            => $this->input->post('tax1')/100,
                    'tax2'            => $this->input->post('tax2')/100,
                    'tax3'            => $this->input->post('tax3')/100,
                );


                if ($count > 0) {
                    $this->db->insert('product_service',$servicedata);
                    }  
                $count++; 
            }
            
        }              
        $this->session->set_userdata(array('message'=>display('successfully_added')));
        redirect(base_url('Cservice/manage_service'));
        }else{
        $this->session->set_userdata(array('error_message'=>'Please Import Only Csv File'));
        redirect(base_url('Cservice/manage_service'));
    }
    
    }
    // service pdf download
        public function service_downloadpdf(){
        $CI = & get_instance();
        $CI->load->model('Service');
        $CI->load->model('Web_settings');
        $CI->load->model('Invoices');
        $CI->load->library('pdfgenerator'); 
        $service_list = $CI->Service->service_list();
        if (!empty($service_list)) {
            $i = 0;
            if (!empty($service_list)) {
                foreach ($service_list as $k => $v) {
                    $i++;
                    $service_list[$k]['sl'] = $i + $CI->uri->segment(3);
                }
            }
        }
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $company_info = $CI->Invoices->retrieve_company();
        $data = array(
            'title'         => display('manage_service'),
            'service_list'  => $service_list,
            'currency'      => $currency_details[0]['currency'],
            'logo'          => $currency_details[0]['logo'],
            'position'      => $currency_details[0]['currency_position'],
            'company_info'  => $company_info
        );
            $this->load->helper('download');
            $content = $this->parser->parse('service/service_list_pdf', $data, true);
            $time = date('Ymdhi');
            $dompdf = new DOMPDF();
            $dompdf->load_html($content);
            $dompdf->render();
            $output = $dompdf->output();
            file_put_contents('assets/data/pdf/'.'service'.$time.'.pdf', $output);
            $file_path = 'assets/data/pdf/'.'service'.$time.'.pdf';
           $file_name = 'service'.$time.'.pdf';
            force_download(FCPATH.'assets/data/pdf/'.$file_name, null);
    }

      public function service_invoice_form() {
        $CI = & get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->library('lservice');
        $content = $CI->lservice->service_invoice_add_form();
        $this->template->full_admin_html_view($content);
    }

  // Service retrieve
     public function retrieve_service_data_inv() {
        $CI = & get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Service');
        $service_id = $this->input->post('service_id');
        $service_info = $CI->Service->get_total_service_invoic($service_id);

        echo json_encode($service_info);
    }
// Service Invoice Entry
public function insert_service_invoice(){
        $CI = & get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->model('Service');
        $invoice_id = $CI->Service->invoice_entry();
        $this->session->set_userdata(array('message' => display('successfully_added')));
        redirect(base_url('Cservice/service_invoice_data/'.$invoice_id));
       // redirect(base_url('Cservice/service_invoice_form'));


}

    public function service_invoice_data($invoice_id) {
        $CI = & get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->library('lservice');
        $content = $CI->lservice->service_invoice_view_data($invoice_id);
        $this->template->full_admin_html_view($content);
    }

  public function service_invoice_update_form($invoic_id) {
        $content = $this->lservice->service_invoice_edit_data($invoic_id);
        $this->template->full_admin_html_view($content);
    }

        public function manage_service_invoice(){
        $data['title']  = display('manage_service_invoice');
        $config["base_url"] = base_url('Cservice/manage_service_invoice');
        $config["total_rows"]  = $this->db->count_all('service_invoice');
        $config["per_page"]    = 20;
        $config["uri_segment"] = 3;
        $config["last_link"] = "Last"; 
        $config["first_link"] = "First"; 
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';  
        $config['full_tag_open'] = "<ul class='pagination col-xs pull-right'>";
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
        $data["links"] = $this->pagination->create_links();
        $data['service'] = $this->Service->service_invoice_list($config["per_page"], $page);
          $content     = $this->parser->parse('service/service_invoice', $data, true);
          $this->template->full_admin_html_view($content);  
    }

    public function service_invoic_delete($service_id) {
        $this->load->model('Service');
        $this->Service->delete_service_invoice($service_id);
        $this->session->set_userdata(array('message' => display('successfully_delete')));
         redirect(base_url('Cservice/manage_service_invoice'));
    }
    public function update_service_invoice(){
      $CI = & get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->model('Service');
        $invoice_id = $CI->Service->invoice_update();
    $this->session->set_userdata(array('message' => display('successfully_updated')));
    redirect(base_url('Cservice/service_invoice_data/'.$invoice_id));
        //redirect(base_url('Cservice/manage_service_invoice'));   
    }
}
