<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Cproduct extends CI_Controller
{

    public $product_id;
    public function __construct()
    {
        parent::__construct();
        $this->load->library('auth');
        $this->load->model('Manufacturers');
        $this->auth->check_admin_auth();
    }

    //Index page load
    public function index()
    {
        $CI = &get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->library('lproduct');
        $content = $CI->lproduct->product_add_form();
        $this->template->full_admin_html_view($content);
    }

    //Insert Product and uload
    public function insert_product()
    {
        $CI = &get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->library('lproduct');
        $product_id = $this->generator(8);
        $sup_price = $this->input->post('manufacturer_price');
        $s_id = $this->input->post('manufacturer_id');
        $product_model = $this->input->post('type_name');

        //manufacturer check
        if ($this->input->post('manufacturer_id') == null) {
            $this->session->set_userdata(array('error_message' => display('please_select_manufacturer')));
            redirect(base_url('Cproduct'));
        }

        if ($_FILES['image']['name']) {
            //Chapter chapter add start
            $config['upload_path'] = './my-assets/image/product/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|JPEG|GIF|JPG|PNG';
            $config['max_size'] = "*";
            $config['max_width'] = "*";
            $config['max_height'] = "*";
            $config['encrypt_name'] = true;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_userdata(array('error_message' => $this->upload->display_errors()));
                redirect(base_url('Cproduct'));
            } else {
                $image = $this->upload->data();
                $image_url = base_url() . "my-assets/image/product/" . $image['file_name'];
            }
        }

        $price = $this->input->post('price');
        $mrp = $this->input->post('mrp');

        $tablecolumn = $this->db->list_fields('tax_collection');
        $num_column = count($tablecolumn) - 4;
        $taxfield = [];
        for ($i = 0; $i < $num_column; $i++) {
            $taxfield[$i] = 'tax' . $i;
        }
        $taxtype = $this->input->post('tax');

        $tax_percentage = 0;
        foreach ($taxfield as $key => $value) {
            if (trim($taxtype) == trim($value)) {
                $tax_percentage = $tax_percentage + $this->input->post($value);
                $data[$value] = ($this->input->post($value) ?: 0) / 100;
            }
        }
        $tax = $tax_percentage / 100;

        $data['product_id'] = $product_id;
        $data['product_name'] = $this->input->post('product_name');
        $data['generic_name'] = $this->input->post('generic_name');
        $data['box_size'] = $this->input->post('box_size');
        $data['unit'] = $this->input->post('unit');
        $data['product_location'] = $this->input->post('product_location');
        $data['category_id'] = $this->input->post('category_id');
        $data['unit'] = $this->input->post('unit');
        $data['strength'] = $this->input->post('strength');
        $data['low_stock'] = $this->input->post('low_stock') * $this->input->post('strength');
        $data['manufacturer_id'] = $s_id;
        $data['manufacturer_price'] = $sup_price;
        $data['tax'] = $tax;
        $data['price'] = $price;
        $data['mrp'] = $mrp;
        $data['manufacturer_pack_price'] = $this->input->post('manufacturer_pack_price');
        $data['product_model'] = $this->input->post('type_name');
        $data['product_details'] = $this->input->post('description');
        $data['image'] = (!empty($image_url) ? $image_url : base_url('my-assets/image/product.png'));
        $data['status'] = 1;
        $result = $CI->lproduct->insert_product($data);
        if ($result == 1) {
            $this->session->set_userdata(array('message' => display('successfully_added')));
            if (isset($_POST['add-product'])) {
                redirect(base_url('Cproduct/manage_product'));
                exit;
            } elseif (isset($_POST['add-product-another'])) {
                redirect(base_url('Cproduct'));
                exit;
            }
        } else {
            $this->session->set_userdata(array('error_message' => display('product_already_exist')));
            redirect(base_url('Cproduct'));
        }
    }
    //Product Update Form
    public function product_update_form($product_id)
    {
        $CI = &get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->library('lproduct');
        $content = $CI->lproduct->product_edit_data($product_id);
        $this->template->full_admin_html_view($content);
    }
    // Product Update
    public function product_update()
    {
        $CI = &get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->model('Products');

        $product_id = $this->input->post('product_id');
        $old_image = $this->input->post('old_image');
        $sup_price = $this->input->post('manufacturer_price');
        $s_id = $this->input->post('manufacturer_id');

        if ($_FILES['image']['name']) {
            //Chapter chapter add start
            $config['upload_path'] = './my-assets/image/product/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|JPEG|GIF|JPG|PNG';
            $config['max_size'] = "*";
            $config['max_width'] = "*";
            $config['max_height'] = "*";
            $config['encrypt_name'] = true;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_userdata(array('error_message' => $this->upload->display_errors()));
                redirect(base_url('Cproduct'));
            } else {
                $image = $this->upload->data();

                $image_url = base_url() . "my-assets/image/product/" . $image['file_name'];
            }
        }

        $price = $this->input->post('price');
        $mrp = $this->input->post('mrp');
        $tablecolumn = $this->db->list_fields('tax_collection');
        $num_column = count($tablecolumn) - 4;
        $taxfield = [];
        for ($i = 0; $i < $num_column; $i++) {
            $taxfield[$i] = 'tax' . $i;
        }
        $tax_percentage = 0;
        foreach ($taxfield as $key => $value) {
            $tax_percentage = $tax_percentage + $this->input->post($value);
            $data[$value] = ($this->input->post($value) ?: 0) / 100;
        }
        $tax = $tax_percentage / 100;

        $data['product_name'] = $this->input->post('product_name');
        $data['generic_name'] = $this->input->post('generic_name');
        $data['box_size'] = $this->input->post('box_size');
        $data['strength'] = $this->input->post('strength');
        $data['low_stock'] = $this->input->post('strength') * $this->input->post('low_stock');
        $data['unit'] = $this->input->post('unit');
        $data['product_location'] = $this->input->post('product_location');
        $data['category_id'] = $this->input->post('category_id');
        $data['price'] = $price;
        $data['mrp'] = $mrp;
        $data['manufacturer_id'] = $s_id;
        $data['manufacturer_price'] = $sup_price;
        $data['manufacturer_pack_price'] = $this->input->post('manufacturer_pack_price');
        $data['product_model'] = $this->input->post('type_name');
        $data['product_details'] = $this->input->post('description');
        $data['unit'] = $this->input->post('unit');
        $data['tax'] = $tax;
        $data['image'] = (!empty($image_url) ? $image_url : $this->input->post('old_image'));

        $result = $CI->Products->update_product($data, $product_id);
        if ($result == true) {
            $this->session->set_userdata(array('message' => display('successfully_updated')));
            redirect(base_url('Cproduct/manage_product'));
        } else {
            $this->session->set_userdata(array('error_message' => display('product_model_already_exist')));
            redirect(base_url('Cproduct/manage_product'));
        }
    }
    //Manage Product
    public function manage_product()
    {

        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lproduct');
        $CI->load->model('Products');
        $content = $this->lproduct->product_list();

        $this->template->full_admin_html_view($content);

    }

    public function CheckProductList()
    {
        // GET data
        $this->load->model('Products');
        $postData = $this->input->post();
        $data = $this->Products->getProductList($postData);
        echo json_encode($data);
    }
    //Add Product CSV
    public function add_product_csv()
    {
        $CI = &get_instance();
        $data = array(
            'title' => display('add_product_csv'),
        );
        $content = $CI->parser->parse('product/add_product_csv', $data, true);
        $this->template->full_admin_html_view($content);
    }
    //CSV Upload File
    public function uploadCsv()
    {$count = 0;
        $fp = fopen($_FILES['upload_csv_file']['tmp_name'], 'r') or die("can't open file");

        if (($handle = fopen($_FILES['upload_csv_file']['tmp_name'], 'r')) !== false) {

            while ($csv_line = fgetcsv($fp, 1024)) {
                //keep this if condition if you want to remove the first row
                for ($i = 0, $j = count($csv_line); $i < $j; $i++) {
                    $product_id = $this->generator(20);
                    $insert_csv = array();
                    $insert_csv['manufacturer_id'] = (!empty($csv_line[1]) ? $csv_line[1] : null);
                    $insert_csv['product_name'] = (!empty($csv_line[2]) ? $csv_line[2] : null);
                    $insert_csv['generic_name'] = (!empty($csv_line[3]) ? $csv_line[3] : null);
                    $insert_csv['strength'] = (!empty($csv_line[4]) ? $csv_line[4] : null);
                    $insert_csv['category_id'] = (!empty($csv_line[5]) ? $csv_line[5] : null);
                    $insert_csv['manufacturer_price'] = (!empty($csv_line[6]) ? $csv_line[6] : null);
                    $insert_csv['sale_price'] = (!empty($csv_line[7]) ? $csv_line[7] : null);
                }
                $check_manufacturer = $this->db->select('*')->from('manufacturer_information')->where('manufacturer_name', $insert_csv['manufacturer_id'])->get()->row();
                if (!empty($check_manufacturer)) {
                    $manufacturer_id = $check_manufacturer->manufacturer_id;
                } else {
                    $manufacinfo = array(
                        'manufacturer_name' => $insert_csv['manufacturer_id'],
                        'address' => '',
                        'mobile' => '',
                        'details' => '',
                        'status' => 1,
                    );
                    if ($count > 0) {
                        $this->db->insert('manufacturer_information', $manufacinfo);
                    }
                    $manufacturer_id = $this->db->insert_id();
                    $coa = $this->Manufacturers->headcode();
                    if ($coa->HeadCode != null) {
                        $headcode = $coa->HeadCode + 1;
                    } else {
                        $headcode = "502020000001";
                    }
                    $c_acc = $insert_csv['manufacturer_id'] . '-' . $manufacturer_id;
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
                }

                $check_category = $this->db->select('*')->from('product_category')->where('category_name', $insert_csv['category_id'])->get()->row();
                if (!empty($check_category)) {
                    $category_id = $check_category->category_id;
                } else {
                    $categorydata = array(
                        'category_name' => $insert_csv['category_id'],
                        'status' => 1,
                    );
                    if ($count > 0) {
                        $this->db->insert('product_category', $categorydata);
                    }

                    $category_id = $this->db->insert_id();

                    //Customer  basic information adding.

                }

                $data = array(
                    'product_id' => $product_id,
                    'category_id' => $category_id,
                    'product_name' => $insert_csv['product_name'],
                    'generic_name' => $insert_csv['generic_name'],
                    'strength' => $insert_csv['strength'],
                    'manufacturer_id' => $manufacturer_id,
                    'manufacturer_price' => $insert_csv['manufacturer_price'],
                    'box_size' => '',
                    'product_location' => '',
                    'price' => (!empty($insert_csv['sale_price']) ? $insert_csv['sale_price'] : 0),
                    'unit' => '',
                    'tax' => '',
                    'product_model' => '',
                    'product_details' => 'Csv Product',
                    'image' => base_url('my-assets/image/product.png'),
                    'status' => 1,
                );

                if ($count > 0) {

                    $result = $this->db->select('*')
                        ->from('product_information')
                        ->where('product_name', $data['product_name'])
                        ->where('strength', $data['strength'])
                        ->where('category_id', $category_id)
                        ->get()
                        ->row();
                    if (empty($result)) {
                        $this->db->insert('product_information', $data);
                        $product_id = $product_id;
                    } else {
                        $product_id = $result->product_id;
                        $udata = array(
                            'product_id' => $result->product_id,
                            'category_id' => $category_id,
                            'product_name' => $result->product_name,
                            'generic_name' => $insert_csv['generic_name'],
                            'strength' => $insert_csv['strength'],
                            'manufacturer_id' => $manufacturer_id,
                            'manufacturer_price' => $insert_csv['manufacturer_price'],
                            'box_size' => '',
                            'product_location' => '',
                            'price' => 0,
                            'unit' => '',
                            'tax' => '',
                            'product_model' => '',
                            'product_details' => 'Csv Uploaded Product',
                            'image' => base_url('my-assets/image/product.png'),
                            'status' => 1,
                        );
                        // print_r($data);exit();
                        $this->db->where('product_id', $result->product_id);
                        $this->db->update('product_information', $udata);

                    }

                }
                $count++;
            }

        }
        $this->db->select('*');
        $this->db->from('product_information');
        $this->db->where('status', 1);
        $query = $this->db->get();
        foreach ($query->result() as $row) {
            $json_product[] = array('label' => $row->product_name . "-(" . $row->product_model . ")", 'value' => $row->product_id);
        }
        $cache_file = './my-assets/js/admin_js/json/product.json';
        $productList = json_encode($json_product);
        file_put_contents($cache_file, $productList);
        fclose($fp) or die("can't close file");
        $this->session->set_userdata(array('message' => display('successfully_added')));
        redirect(base_url('Cproduct/manage_product'));

    }

    //Add manufacturer by ajax
    public function add_manufacturer()
    {
        $this->load->model('manufacturers');

        $data = array(
            'manufacturer_id' => $this->auth->generator(20),
            'manufacturer_name' => $this->input->post('manufacturer_name'),
            'address' => $this->input->post('address'),
            'mobile' => $this->input->post('mobile'),
            'details' => $this->input->post('details'),
            'status' => 1,
        );

        $manufacturer = $this->manufacturers->manufacturer_entry($data);

        if ($manufacturer == true) {
            $this->session->set_userdata(array('message' => display('successfully_added')));
            echo true;
        } else {
            $this->session->set_userdata(array('error_message' => display('already_exists')));
            echo false;
        }
    }

    // Insert category by ajax
    public function insert_category()
    {
        $this->load->model('Categories');
        $category_id = $this->auth->generator(15);

        //Customer  basic information adding.
        $data = array(
            'category_id' => $category_id,
            'category_name' => $this->input->post('category_name'),
            'status' => 1,
        );

        $result = $this->Categories->category_entry($data);

        if ($result == true) {
            $this->session->set_userdata(array('message' => display('successfully_added')));
            echo true;
        } else {
            $this->session->set_userdata(array('error_message' => display('already_exists')));
            echo false;
        }
    }

    // product_delete
    public function product_delete($product_id = null)
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Products');
        //$product_id =  $_POST['product_id'];
        $result = $CI->Products->delete_product($product_id);
        if ($result == true) {
            redirect(base_url('Cproduct/manage_product'));
        } else {
            redirect(base_url('Cproduct/manage_product'));
        }

    }
    //Retrieve Single Item  By Search
    public function product_by_search()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lproduct');
        $product_id = $this->input->post('product_id');

        $content = $CI->lproduct->product_search_list($product_id);
        $this->template->full_admin_html_view($content);
    }
    //Retrieve Single Item  By Search
    public function product_details($product_id)
    {
        $this->product_id = $product_id;
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lproduct');
        $content = $CI->lproduct->product_details($product_id);
        $this->template->full_admin_html_view($content);
    }

    //Retrieve Single Item  By Search
    public function product_sales_manufacturer_rate($product_id = null, $startdate = null, $enddate = null)
    {
        if ($startdate == null) {$startdate = date('d-m-Y', strtotime('-30 days'));}
        if ($enddate == null) {$enddate = date('d-m-Y');}
        $product_id_input = $this->input->post('product_id');
        if (!empty($product_id_input)) {
            $product_id = $this->input->post('product_id');
            $startdate = $this->input->post('from_date');
            $enddate = $this->input->post('to_date');
        }

        $this->product_id = $product_id;

        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lproduct');
        $content = $CI->lproduct->product_sales_manufacturer_rate($product_id, $startdate, $enddate);
        $this->template->full_admin_html_view($content);
    }

    //This function is used to Generate Key
    public function generator($lenth)
    {
        $CI = &get_instance();
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
    //Export CSV
    public function exportCSV()
    {
        // file name
        $this->load->model('Products');
        $filename = 'product_' . date('Ymd') . '.csv';
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/csv; ");

        // get data
        $usersData = $this->Products->product_csv_file();

        // file creation
        $file = fopen('php://output', 'w');

        $header = array('product_id', 'manufacturer_id', 'category_id', 'product_name', 'generic_name', 'box_size', 'product_location', 'price', 'manufacturer_price', 'unit', 'tax', 'product_model', 'product_details', 'image', 'status');
        fputcsv($file, $header);
        foreach ($usersData as $line) {
            fputcsv($file, $line);
        }
        fclose($file);
        exit;
    }
    //medicine type start here
    public function typeindex()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Products');
        $CI->load->library('lproduct');

        //Calling Customer add form which will be loaded by help of "lcustomer,located in library folder"
        $content = $this->lproduct->type_add_form();
        //Here ,0 means array position 0 will be active class
        $this->template->full_admin_html_view($content);
    }
    //Product Add Form
    public function manage_type()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Products');
        $CI->load->library('lproduct');
        $content = $this->lproduct->type_list();
        $this->template->full_admin_html_view($content);
    }
    //Insert Product and upload
    public function insert_type()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Products');
        $CI->load->library('lproduct');
        $type_id = $this->auth->generator(15);

        //Customer  basic information adding.
        $data = array(
            'type_id' => $type_id,
            'type_name' => $this->input->post('type_name'),
            'status' => 1,
        );
        $is_modal_form = strtolower($this->input->post('is_modal_form'));

        $result = $this->Products->type_entry($data);
        if ($result == true) {
            //Previous balance adding -> Sending to customer model to adjust the data.
            $this->session->set_userdata(array('message' => display('successfully_added')));
            if ($is_modal_form == 'yes') {
                echo json_encode([
                    "status" => 1,
                    "msg" => display('successfully_added'),
                ]);
            } else if (isset($_POST['add-customer'])) {
                redirect(base_url('Cproduct/typeindex'));
                exit;
            } else if (isset($_POST['add-customer-another'])) {
                redirect(base_url('Cproduct/typeindex'));
                exit;
            }
        } else {
            $this->session->set_userdata(array('error_message' => display('already_inserted')));
            if ($is_modal_form == 'yes') {
                echo json_encode([
                    "status" => 0,
                    "msg" => display('already_inserted'),
                ]);
            } else {
                redirect(base_url('Cproduct/typeindex'));
            }
        }
    }
    //customer Update Form
    public function type_update_form($type_id)
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Products');
        $CI->load->library('lproduct');

        $content = $this->lproduct->type_edit_data($type_id);
        $this->menu = array('label' => 'Edit type', 'url' => 'Cproduct/typeindex');
        $this->template->full_admin_html_view($content);
    }
    // customer Update
    public function type_update()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lproduct');
        $this->load->model('Products');
        $type_id = $this->input->post('type_id');
        $data = array(
            'type_name' => $this->input->post('type_name'),
            'status' => $this->input->post('status'),
        );

        $this->Products->update_type($data, $type_id);
        $this->session->set_userdata(array('message' => display('successfully_updated')));
        redirect(base_url('Cproduct/typeindex'));
        exit;
    }
    // product_delete
    public function type_delete()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Products');
        $CI->load->library('lproduct');
        $this->load->model('Products');
        $type_id = $_POST['type_id'];
        $this->Products->delete_type($type_id);
        $this->session->set_userdata(array('message' => display('successfully_delete')));
        return true;

    }
    //product search options on links
    public function medicine_search_details($generic_name)
    {$CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Products');
        $CI->load->library('lproduct');
        $this->load->model('Products');
        $CI->load->model('Web_settings');
        $search_result = $this->Products->medicine_search_info($generic_name);
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        if (!empty($search_result)) {
            $i = 1;
            foreach ($search_result as $k => $v) {$i++;
                $search_result[$k]['sl'] = $i;
            }
        }

        $data = array(
            'title' => display('medicine_search'),
            'products_list' => $search_result,
            'currency' => $currency_details[0]['currency'],
            'position' => $currency_details[0]['currency_position'],
            'links' => '',
        );
        $content = $this->parser->parse('product/medicine_details', $data, true);
        $this->template->full_admin_html_view($content);
    }
    //product search about manufacture
    public function medicine_search_manufactures($manufacturer_id)
    {$CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Products');
        $CI->load->library('lproduct');
        $this->load->model('Products');
        $CI->load->model('Web_settings');
        $search_result = $this->Products->medicine_search_manufacture($manufacturer_id);
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        if (!empty($search_result)) {
            $i = 1;
            foreach ($search_result as $k => $v) {$i++;
                $search_result[$k]['sl'] = $i;
            }
        }

        $data = array(
            'title' => display('medicine_search'),
            'products_list' => $search_result,
            'currency' => $currency_details[0]['currency'],
            'position' => $currency_details[0]['currency_position'],
            'links' => '',
        );
        $content = $this->parser->parse('product/medicine_details', $data, true);
        $this->template->full_admin_html_view($content);
    }

    //Medicine search about type
    public function medicine_search_type($type)
    {$CI = &get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Products');
        $CI->load->library('lproduct');
        $this->load->model('Products');
        $CI->load->model('Web_settings');
        $search_result = $this->Products->medicine_search_type($type);
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        if (!empty($search_result)) {
            $i = 1;
            foreach ($search_result as $k => $v) {$i++;
                $search_result[$k]['sl'] = $i;
            }
        }

        $data = array(
            'title' => display('medicine_search'),
            'products_list' => $search_result,
            'currency' => $currency_details[0]['currency'],
            'position' => $currency_details[0]['currency_position'],
            'links' => '',
        );
        $content = $this->parser->parse('product/medicine_details', $data, true);
        $this->template->full_admin_html_view($content);
    }

    public function unit_form($id = null)
    {
        $this->auth->check_admin_auth();
        $this->load->model('Units');
        $this->load->library('form_validation');

        /*----------FORM VALIDATION RULES----------*/
        $this->form_validation->set_rules('unit_name', display('unit_name'), 'required|max_length[255]');
        $this->form_validation->set_rules('status', display('status'), 'required');

        $data['unit'] = (object) $postData = array(
            'id' => $this->input->post('id', true),
            'unit_name' => $this->input->post('unit_name', true),
            'status' => $this->input->post('status', true),
        );

        /*-----------CHECK ID -----------*/
        if (empty($id)) {
            /*-----------CREATE A NEW RECORD-----------*/
            $is_modal_form = strtolower($this->input->post('is_modal_form', true));
            if ($this->form_validation->run() === true) {
                if ($this->Units->create($postData)) {
                    #set success message
                    $this->session->set_flashdata('message', display('save_successfully'));
                    if ($is_modal_form == 'yes') {
                        echo json_encode([
                            "status" => 1,
                            "msg" => display('save_successfully'),
                        ]);
                    }
                } else {
                    #set exception message
                    $this->session->set_flashdata('error_message', display('please_try_again'));
                    if ($is_modal_form == 'yes') {
                        echo json_encode([
                            "status" => 0,
                            "msg" => display('please_try_again'),
                        ]);
                    }
                }
                if ($is_modal_form != 'yes') {
                    redirect('Cproduct/unit_form');
                }
            } else {
                $data['title'] = display('add_unit');
                $content = $this->parser->parse('product/unit_form', $data, true);
                $this->template->full_admin_html_view($content);
            }

        } else {
            /*-----------UPDATE A RECORD-----------*/
            if ($this->form_validation->run() === true) {
                if ($this->Units->update($postData)) {
                    #set success message
                    $this->session->set_flashdata('message', display('successfully_updated'));
                } else {
                    #set exception message
                    $this->session->set_flashdata('error_message', display('please_try_again'));
                }
                redirect('Cproduct/unit_form/' . $postData['id']);
            } else {
                $data['title'] = display('edit_units');
                $data['unit'] = $this->Units->read_by_id($id);
                $content = $this->parser->parse('product/edit_unit', $data, true);
                $this->template->full_admin_html_view($content);
            }
        }
        /*---------------------------------*/
    }

    public function unit_list()
    {
        $this->auth->check_admin_auth();
        $this->load->model('Units');
        $data['title'] = display('unit_list');
        $data['unit'] = $this->Units->read();
        $content = $this->parser->parse('product/unit_list', $data, true);
        $this->template->full_admin_html_view($content);

    }

    public function delete_unit($id = null)
    {
        $this->auth->check_admin_auth();
        $this->load->model('Units');
        if ($this->Units->delete($id)) {
            #set success message
            $this->session->set_flashdata('message', display('delete_successfully'));
        } else {
            #set exception message
            $this->session->set_flashdata('error_message', display('please_try_again'));
        }
        redirect('Cproduct/unit_list');
    }

}
