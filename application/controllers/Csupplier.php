<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Csupplier extends CI_Controller {
    
    public $supplier_id;
    function __construct() {
        parent::__construct(); 
        $this->load->library('auth');
        $this->load->library('lsupplier');
        $this->load->library('session');
        $this->load->model('suppliers');
        $this->auth->check_admin_auth();
    }

    public function index()
    {
        $content = $this->lsupplier->supplier_add_form();
        $this->template->full_admin_html_view($content);
    }

    //Insert supplier
    public function insert_supplier()
    {
        $tran_id=date('Ymdi');
        $depid = date('Ymdis');
        $supplier_id = $this->auth->generator(20);

          $coa = $this->suppliers->headcode();
        if($coa->HeadCode!=NULL){
            $headcode=$coa->HeadCode+1;
        }
        else{
            $headcode="50205000001";
        }
        $c_acc=$this->input->post('supplier_name').'-'.$supplier_id;
        $createby=$this->session->userdata('user_id');
        $createdate=date('Y-m-d H:i:s');

        $data=array(
            'supplier_id'       => $supplier_id,
            'supplier_name'     => $this->input->post('supplier_name'),
            'address'           => $this->input->post('address'),
            'mobile'            => $this->input->post('mobile'),
            'details'           => $this->input->post('details'),
            'status'            => 1
            );
         $supplier_coa = [
              'HeadCode'       => $headcode,
            'HeadName'         => $c_acc,
            'PHeadName'        => 'Supplier Ledger',
            'HeadLevel'        => '3',
            'IsActive'         => '1',
            'IsTransaction'    => '1',
            'IsGL'             => '0',
            'HeadType'         => 'L',
            'IsBudget'         => '0',
            'IsDepreciation'   => '0',
            'DepreciationRate' => '0',
            'CreateBy'         => $createby,
            'CreateDate'       => $createdate,
        ];

        $supplier = $this->lsupplier->insert_supplier($data);
        if ($supplier == TRUE) {
              $this->db->insert('acc_coa',$supplier_coa);
                $m_ledger = array(
                'transaction_id'=>  $tran_id,
                'supplier_id'=> $supplier_id,
                'chalan_no'     =>  $depid,
                'deposit_no'    =>  NULL,
                'amount'        =>  (!empty($this->input->post('previous_balance'))?$this->input->post('previous_balance'):0),
                'description'   =>  'Previous Balance',
                'payment_type'  =>  '',
                'cheque_no'     =>  '',
                'date'          =>  date('Y-m-d'),
                'status'        =>  1,
                'd_c'           => 'c',
            );
             //acc transaction for supplier previous ledger
                $cosdr = array(
      'VNo'            =>  $tran_id,
      'Vtype'          =>  'PR Balance',
      'VDate'          =>  date("Y-m-d"),
      'COAID'          =>  $headcode,
      'Narration'      =>  'supplier debit For voucher no'.$tran_id.' For '.$c_acc,
      'Debit'          =>  0,
      'Credit'         =>  (!empty($this->input->post('previous_balance'))?$this->input->post('previous_balance'):0),
      'IsPosted'       => 1,
      'CreateBy'       => $this->session->userdata('user_id'),
      'CreateDate'     => date('Y-m-d H:i:s'),
      'IsAppove'       => 1
    );
       $inventory = array(
      'VNo'            =>  $tran_id,
      'Vtype'          =>  'PR Balance',
      'VDate'          =>  date("Y-m-d"),
      'COAID'          =>  10107,
      'Narration'      =>  'Inventory credit For Purchase  For voucher no'.$tran_id.' For '.$c_acc,
      'Debit'          =>  (!empty($this->input->post('previous_balance'))?$this->input->post('previous_balance'):0),
      'Credit'         => 0,//purchase price asbe
      'IsPosted'       => 1,
      'CreateBy'       => $this->session->userdata('user_id'),
      'CreateDate'     => date('Y-m-d H:i:s'),
      'IsAppove'       => 1
    ); 
           if(!empty($this->input->post('previous_balance'))){
            $this->db->insert('supplier_ledger',$m_ledger);
            $this->db->insert('acc_transaction', $cosdr); 
           $this->db->insert('acc_transaction', $inventory); 
           }
            
            $this->session->set_userdata(array('message'=>display('successfully_added')));
            if(isset($_POST['add-supplier'])){
                redirect(base_url('Csupplier/manage_supplier'));
                exit;
            }elseif(isset($_POST['add-supplier-another'])){
                redirect(base_url('Csupplier'));
                exit;
            }
        }else{
            $this->session->set_userdata(array('error_message'=>display('already_exists')));
            if(isset($_POST['add-supplier'])){
                redirect(base_url('Csupplier/manage_supplier'));
                exit;
            }elseif(isset($_POST['add-supplier-another'])){
                redirect(base_url('Csupplier'));
                exit;
            }
        }
    }


    //Manage supplier
    public function manage_supplier()
    {
        #
        #pagination starts
        #
        $config["base_url"] = base_url('Csupplier/manage_supplier/');
        $config["total_rows"] = $this->suppliers->supplier_list_count();
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
        $content =$this->lsupplier->supplier_list($links,$config["per_page"],$page);
        $this->template->full_admin_html_view($content);
    }
    
    //supplier Update Form
    public function supplier_update_form($supplier_id)
    {   
        $content = $this->lsupplier->supplier_edit_data($supplier_id);
    
        $this->template->full_admin_html_view($content);
    }

    // supplier Update
    public function supplier_update()
    {
        $supplier_id  = $this->input->post('supplier_id');
         $old_headnam = $supplier_id.'-'.$this->input->post('oldname');
        $c_acc = $this->input->post('supplier_name').'-'.$supplier_id;

        $data=array(
            'supplier_name' => $this->input->post('supplier_name'),
            'address'       => $this->input->post('address'),
            'mobile'        => $this->input->post('mobile'),
            'details'       => $this->input->post('details')
            );

         $manu_coa = [
             'HeadName'         => $c_acc
        ];
        $result = $this->suppliers->update_supplier($data,$supplier_id);
           if ($result == TRUE) {
        $this->db->where('HeadName', $old_headnam);
        $this->db->update('acc_coa', $manu_coa);
        $this->session->set_userdata(array('message' => display('successfully_updated')));
        redirect(base_url('Csupplier/manage_supplier'));
        exit;
    }else{
        $this->session->set_userdata(array('error_message' => display('please_try_again'))); 
         redirect(base_url('Csupplier/manage_supplier'));
    }
    }

    //supplier Search Item
    public function supplier_search_item()
    {   
        $supplier_id = $this->input->post('supplier_id');           
        $content = $this->lsupplier->supplier_search_item($supplier_id);
        $this->template->full_admin_html_view($content);
    }

    // supplier Delete from System
    public function supplier_delete()
    {   
        $supplier_id =  $_POST['supplier_id'];
        $this->suppliers->delete_supplier($supplier_id);
        $this->suppliers->delete_supplier_ledger($supplier_id);
        $this->session->set_userdata(array('message'=>display('successfully_delete')));
        return true;    
    }

    // supplier details findings !!!!!!!!!!!!!! Inactive Now !!!!!!!!!!!!
    public function supplier_details($supplier_id)
    {   
        $content = $this->lsupplier->supplier_detail_data($supplier_id);
        $this->supplier_id=$supplier_id;
        $this->template->full_admin_html_view($content);
    }

    //supplier Ledger Book
    public function supplier_ledger()
    {
        $start=  $this->input->post('from_date');
        $end=  $this->input->post('to_date');
        $supplier_id=$this->input->post('supplier_id');
        $content = $this->lsupplier->supplier_ledger($supplier_id,$start,$end);
        
        $this->template->full_admin_html_view($content);
    }

    public function supplier_ledger_report()
    {
        $content = $this->lsupplier->supplier_ledger_report();
        $this->template->full_admin_html_view($content);
    }

    // supplier wise sales report details
    public function supplier_sales_details()
    {   
        $start=  $this->input->post('from_date');
        $end=  $this->input->post('to_date');
        $supplier_id=$this->uri->segment(3);
      
        $content =$this->lsupplier->supplier_sales_details($supplier_id,$start,$end);
        $this->template->full_admin_html_view($content);
    }
    
    // supplier wise sales report summary
    public function supplier_sales_summary()
    {   
        #
        #pagination starts
        #
        $supplier_id=$this->uri->segment(4);
        $config["base_url"] = base_url('Csupplier/supplier_sales_summary/'.$supplier_id."/");
        $config["total_rows"] = $this->suppliers->supplier_sales_summary_count($supplier_id);
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
        $content =$this->lsupplier->supplier_sales_summary($supplier_id,$links,$config["per_page"],$page);

        $this->supplier_id=$supplier_id;
        $this->template->full_admin_html_view($content);
    }

    // Actual Ledger based on sales & deposited amount
    public function sales_payment_actual()
    {   
        #
        #pagination starts
        $supplier_id=$this->uri->segment(3);
       
        $config["base_url"] = base_url('Csupplier/sales_payment_actual/'.$supplier_id."/");
        $config["total_rows"] = $this->suppliers->sales_payment_actual_count();
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
        $content =$this->lsupplier->sales_payment_actual($supplier_id,$links,$config["per_page"],$page);

        $this->supplier_id=$supplier_id;
        $this->template->full_admin_html_view($content);
    }

    // search report 
     public function search_supplier_report()
    {
        $start=  $this->input->post('from_date');
        $end=  $this->input->post('to_date');

        $content = $this->lpayment->result_datewise_data($start,$end);
        $this->template->full_admin_html_view($content);
    }


    // supplier ledger for supplier information 
    public function supplier_ledger_info($supplier_id)
    {
        $content = $this->lsupplier->supplier_ledger_info($supplier_id);
        $this->supplier_id=$supplier_id;
        $this->template->full_admin_html_view($content);
    }
    // new manufacturar
     public function new_supplier()
    {  
       $this->form_validation->set_rules('supplier_name', display('supplier_name')  ,'max_length[100]');
        $this->form_validation->set_rules('mobile', display('mobile')  ,'max_length[255]');
        $this->form_validation->set_rules('address', display('address')  ,'max_length[255]');
        $this->form_validation->set_rules('details', display('details')  ,'max_length[255]');
        #-------------------------------#
         $userData = array(
            'supplier_id'   => $this->auth->generator(20),
            'supplier_name' => $this->input->post('supplier_name'), 
            'mobile'   => $this->input->post('mobile'),
            'address'   => $this->input->post('address'),
            'details'   => $this->input->post('details'),
             'status'   => 1,
        );
        $this->session->set_userdata('supplier_id',$userData['supplier_id']);
        #-------------------------------#

        if ($this->form_validation->run()) {

            //Check user information
            $insertdata = $this->db->insert('supplier_information',$userData);
            if($insertdata) {

                $this->db->select('*');
            $this->db->from('supplier_information');
            $this->db->where('status',1);
            $query = $this->db->get();
            foreach ($query->result() as $row) {
                $json_product[] = array('label'=>$row->supplier_name,'value'=>$row->supplier_id);
            }
            $cache_file = './my-assets/js/admin_js/json/supplier.json';
            $productList = json_encode($json_product);
            file_put_contents($cache_file,$productList);
          
                $sData['message'] = 'Successfully saved ';
               //$sData['firstname'] = $arr['firstname'];
                //Json encode for user data
                echo json_encode($sData);
            }else{
                $data['exception'] = 'Something wrong!';
                echo json_encode($data);
            }
        }else {  
            $data['exception'] = validation_errors();
            //Json encode for user data
            echo json_encode($data);
        }
    }

    //CSV supplier Add From here
    function uploadCsv_supplier()
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
                   $insert_csv['supplier_name'] = (!empty($csv_line[0])?$csv_line[0]:null);
                   $insert_csv['address'] = (!empty($csv_line[1])?$csv_line[1]:null);
                   $insert_csv['mobile'] = (!empty($csv_line[2])?$csv_line[2]:null);
                   $insert_csv['details'] = (!empty($csv_line[3])?$csv_line[3]:null);
                   $insert_csv['previousbalance'] = (!empty($csv_line[4])?$csv_line[4]:null);
                }
                $depid = date('Ymdis');
                $supplier_id=$this->auth->generator(20);
                $transaction_id=$this->auth->generator(10);
                $supplierdata = array(
                    'supplier_id'  => $supplier_id,
                    'supplier_name'=> $insert_csv['supplier_name'],
                    'address'          => $insert_csv['address'],
                    'mobile'           => $insert_csv['mobile'],
                    'details'          => $insert_csv['details'],
                    'status'           => 1
                );

               $m_ledger = array(
                'transaction_id'=>  $transaction_id,
                'supplier_id' =>  $supplier_id,
                'chalan_no'     =>  $depid,
                'deposit_no'    =>  NULL,
                'amount'        =>  (!empty($insert_csv['previousbalance'])?$insert_csv['previousbalance']:0),
                'description'   =>  'Previous Balance',
                'payment_type'  =>  '',
                'cheque_no'     =>  '',
                'date'          =>  date('Y-m-d'),
                'status'        =>  1
            );
               

                if ($count > 0) {
                    // print_r($supplierdata);exit();
                    $this->db->insert('supplier_information',$supplierdata);
                    $this->db->insert('supplier_ledger', $m_ledger);
                    }  
                $count++; 
            }
            
        }
                        $this->db->select('*');
                        $this->db->from('supplier_information');
                        $this->db->where('status',1);
                    $query = $this->db->get();
                    foreach ($query->result() as $row) {
                        $json_product[] = array('label'=>$row->supplier_name,'value'=>$row->supplier_id);
                    }
                    $cache_file = './my-assets/js/admin_js/json/supplier.json';
                    $productList = json_encode($json_product);
                    file_put_contents($cache_file,$productList);
        fclose($fp) or die("can't close file");
        $this->session->set_userdata(array('message'=>display('successfully_added')));
        redirect(base_url('Csupplier/manage_supplier'));
        }else{
        $this->session->set_userdata(array('error_message'=>'Please Import Only Csv File'));
        redirect(base_url('Csupplier/manage_supplier'));
    }
    
    }

}