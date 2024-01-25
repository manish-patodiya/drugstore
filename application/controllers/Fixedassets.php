<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Fixedassets extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    //Index page load
    public function add_fixedassets() {
        $CI = & get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->library('lfixedasset');
        $content = $CI->lfixedasset->fixedasset_add_form();
        $this->template->full_admin_html_view($content);
    }

    //Insert Product and uload
    public function insert_asset() {
        $CI = & get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->library('lfixedasset');
        $CI->load->model('Fixedasset');
        $item_code = $this->input->post('item_code');
    $checkcode = $this->Fixedasset->item_code_check($item_code);
    if($checkcode == TRUE){
 $this->session->set_userdata(array('error_message' => display('item_code_already_exists')));
            redirect(base_url('Fixedassets/fixed_assets_list'));
    }

        $data = array(
            'item_code'      => $this->input->post('item_code'),
            'item_name'      => $this->input->post('item_name'),
            'price'          => $this->input->post('price'),
            'insert_date'    => date('Y-m-d')
        );
        

        $result = $CI->lfixedasset->insert_assets($data);
        if ($result == 1) {
          
            $stockassets   = array(
            'item_code'      => $this->input->post('item_code'),
            'qty'            => $this->input->post('previous_stock'),
            'store_code'     => $this->input->post('store_code'),
            );
            if(!empty($this->input->post('previous_stock'))){
          
                    $this->db->insert('stock_fixed_asset',$stockassets);
            
            }
            $this->session->set_userdata(array('message' => display('successfully_added')));
             redirect(base_url('Fixedassets/fixed_assets_list'));
        } else {
            $this->session->set_userdata(array('error_message' => display('please_try_again')));
            redirect(base_url('Fixedassets/fixed_assets_list'));
        }
    }

    //Fixed Asssets Update Form
    public function fixed_asset_update_form($item_code) {
        $CI = & get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->library('lfixedasset');
        $content = $CI->lfixedasset->fixed_asset_edit_data($item_code);
        $this->template->full_admin_html_view($content);
    }

    // Fixed Asssets Update
    public function fixed_asset_update() {
        $CI = & get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->model('Fixedasset');

        $item_code = $this->input->post('old_item_code');
        $id        = $this->input->post('id');
        $n_item_code = $this->input->post('item_code');
        $data = array(
            'item_code'      => $this->input->post('item_code'),
            'item_name'      => $this->input->post('item_name'),
            'price'          => $this->input->post('price'),
            'insert_date'    => date('Y-m-d')
        );
        $result = $CI->Fixedasset->update_assets($data, $item_code,$id,$n_item_code);
        if ($result == true) {
            $this->session->set_userdata(array('message' => display('successfully_updated')));
            redirect(base_url('Fixedassets/fixed_assets_list'));
        } else {
            $this->session->set_userdata(array('error_message' => display('please_try_again')));
            redirect(base_url('Fixedassets/fixed_assets_list'));
        }
    }

    //Manage Assets
    public function fixed_assets_list() {

        $CI = & get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lfixedasset');
        $CI->load->model('Fixedasset');
        #pagination starts
        #
        $config["base_url"] = base_url('Fixedassets/fixed_assets_list/');
        $config["total_rows"] = $this->Fixedasset->asset_list_count();
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
        $content = $this->lfixedasset->asset_list($links, $config["per_page"], $page);

        $this->template->full_admin_html_view($content);
    }

    // delete_assets
    public function delete_assets() {
        $CI = & get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Fixedasset');
        $item_code = $_POST['item_code'];
        $result = $CI->Fixedasset->delete_assets($item_code);
        return true;
    }

 /// Fixed Assets purchase from supplier
    public function fixed_assets_purchase(){
        $CI = & get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->library('lfixedasset');
        $content = $CI->lfixedasset->purchase_add_form();
        $this->template->full_admin_html_view($content);
    }
    // Fixed assets information search
     public function searchafixedasset() {
        $CI = & get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Fixedasset');
        $item_code = $this->input->post('item_code');
        $assets_info = $CI->Fixedasset->assets_search_item($item_code);

        $list[''] = '';
        foreach ($assets_info as $value) {
            $json_assets[] = array('label' => $value['item_code'], 'value' => $value['item_code']);
        }
        echo json_encode($json_assets);
    }
     public function retrieve_asset_data() {
        $CI = & get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Fixedasset');
        $asset_item_code = $this->input->post('asset_item_code');
        $product_info = $CI->Fixedasset->get_total_product($asset_item_code);

        echo json_encode($product_info);
    }
    //purchase assets data entry
    public function insert_asserts_purchase(){
        $CI = & get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->model('Fixedasset');
        $CI->Fixedasset->purchase_entry();
        $this->session->set_userdata(array('message' => display('successfully_added')));
 
            redirect(base_url('Fixedassets/fixed_assets_purchase_list'));
            
        
    }
    // asset purchase update
    public function asset_purchase_update_form($purchase_id){
               $CI = & get_instance();
                $CI->auth->check_admin_auth();
                $CI->load->library('lfixedasset');
                $content = $CI->lfixedasset->purchase_edit_data($purchase_id);
                $this->template->full_admin_html_view($content);
    }
    //purchase update fixed asset
   public function update_asserts_purchase() {
        $CI = & get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->model('Fixedasset');
        $result = $CI->Fixedasset->update_purchase();
        if ($result == true) {
            $this->session->set_userdata(array('message' => display('successfully_updated')));
            redirect(base_url('Fixedassets/fixed_assets_purchase_list'));
        } else {
            $this->session->set_userdata(array('error_message' => display('please_try_again')));
            redirect(base_url('Fixedassets/fixed_assets_purchase_list'));
        }
    }
    //This function is used to Generate Key
    public function generator($lenth) {
        $CI = & get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Products');

        $number = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
        for ($i = 0; $i < $lenth; $i++) {
            $rand_value = rand(0, 8);
            $rand_number = $number["$rand_value"];

            if (empty($con)) {
                $con = $rand_number;
            } else {
                $con = "$con" . "$rand_number";
            }
        }

        $result = $this->Products->product_id_check($con);

        if ($result === true) {
            $this->generator(8);
        } else {
            return $con;
        }
    }

    //Manage asset purchase
    public function fixed_assets_purchase_list() {

        $CI = & get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lfixedasset');
        $CI->load->model('Fixedasset');
        #pagination starts
        #
        $config["base_url"] = base_url('Fixedassets/fixed_assets_purchase_list/');
        $config["total_rows"] = $this->Fixedasset->asset_purchase_list_count();
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
        $content = $this->lfixedasset->asset_purchase_list($links, $config["per_page"], $page);

        $this->template->full_admin_html_view($content);
    }
    // purchase details
    public function purchase_pad_print($purchase_id) {
        $CI = & get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->library('lfixedasset');
        $content = $CI->lfixedasset->purchase_pad_print($purchase_id);
        $this->template->full_admin_html_view($content);
    }
   
 
    
// supplier auto complete
      public function supplierinfo_autocomplete(){
        $CI =& get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lpurchase');
        $CI->load->model('Fixedasset');
        $supplier_code    = $this->input->post('supplier_code');
        $supplier_info   = $CI->Fixedasset->supplier_search_bycode($supplier_code);

        $list[''] = '';
        foreach ($supplier_info as $value) {
            $json_supplier[] = array('label'=>$value['supplier_name'],'value'=>$value['supplier_id']);
        } 
        echo json_encode($json_supplier);
    }
// supplier due
     public function supplier_previous() {
         $CI = & get_instance();
        $CI->load->model('suppliers');
        $supplier_id = $this->input->post('supplier_id');
         $sql = 'SELECT (SELECT SUM(amount) FROM supplier_ledger WHERE d_c = "d" AND supplier_id = "' . $supplier_id . '") dr, 
        (SELECT sum(amount) FROM supplier_ledger WHERE d_c = "c" AND supplier_id = "' . $supplier_id . '") cr';
        $result = $this->db->query($sql)->result();
       $balance = $result[0]->dr - $result[0]->cr;   
       $b = (!empty($balance)?$balance:0);
       $supplier = $this->db->select('*')->from('supplier_information')->where('supplier_id',$supplier_id)->get()->row();  
       $name =  $supplier->supplier_name;
       $address = $supplier->address;
       $jsondata = array(
        'previous'  => $b,
        'sname'     => $name,
        'address'  => $address,
       );                          
        
           echo  json_encode($jsondata);
       
    }
}
