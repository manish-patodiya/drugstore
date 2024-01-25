<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cexpense extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('auth');
        $this->load->library('session');
        $this->load->model('Expense_model');
        $this->auth->check_admin_auth();
    }

     public function add_expense(){
    $data['title']  = display('add_expense');
    $data['expense_item'] = $this->Expense_model->expense_item_list();
    $data['bank_list']    = $this->Expense_model->bank_list();
    $content = $this->parser->parse('expense/expense_form', $data, true);
    $this->template->full_admin_html_view($content);
    }

     public function create_expense(){
   // $this->permission->method('accounts','create')->redirect();
    $this->form_validation->set_rules('amount', display('amount')  ,'max_length[100]');
         if ($this->form_validation->run()) { 
        if ($this->Expense_model->expense_insert()) { 
          $this->session->set_flashdata('message', display('save_successfully'));
          redirect('Cexpense/manage_expense/');
        }else{
          $this->session->set_flashdata('error_message',  display('please_try_again'));
        }
        redirect("Cexpense/add_expense");
    }else{
      $this->session->set_flashdata('error_message',  display('please_try_again'));
      redirect("Cexpense/add_expense");
     }

}

      public function manage_expense(){
        $data['title']  = display('manage_expense');
        $config["base_url"] = base_url('Cexpense/manage_expense');
        $config["total_rows"]  = $this->db->count_all('expense');
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
        $data['expense_list']= $this->Expense_model->expense_list($config["per_page"], $page);
          $content     = $this->parser->parse('expense/manage_expense', $data, true);
          $this->template->full_admin_html_view($content);  
    }

            public function delete_expense($id = null) 
    { 

        if ($this->Expense_model->expense_delete($id)) {
            #set success message
            $this->session->set_flashdata('message',display('delete_successfully'));
        } else {
            #set exception message
            $this->session->set_flashdata('exception',display('please_try_again'));
        }
        redirect("Cexpense/manage_expense");
    }
    // add expense expense item
     public function add_expense_item(){
    $data['title']  = display('add_expense_item');
    $content = $this->parser->parse('expense/expense_item_form', $data, true);
    $this->template->full_admin_html_view($content);
    }

    //expense item add
         public function create_expense_item(){
     $this->form_validation->set_rules('expense_item_name', display('expense_item_name')  ,'max_length[100]');
         if ($this->form_validation->run()) { 
        if ($this->Expense_model->expense_item_insert()) { 
          $this->session->set_flashdata('message', display('save_successfully'));
          redirect('Cexpense/manage_expense_item/');
        }else{
          $this->session->set_flashdata('error_message',  display('please_try_again'));
        }
        redirect("Cexpense/manage_expense_item");
    }else{
      $this->session->set_flashdata('error_message',  display('please_try_again'));
      redirect("Cexpense/manage_expense_item");
     }

}
/// Manage Expense Item
      public function manage_expense_item(){
      
        $data['expense_item_list']= $this->Expense_model->expense_item_list();
        $content     = $this->parser->parse('expense/manage_expense_item', $data, true);
          $this->template->full_admin_html_view($content);  
    }
// expense item delete
     public function delete_expense_item($id = null) 
    { 
        if ($this->Expense_model->expense_item_delete($id)) {
            #set success message
            $this->session->set_flashdata('message',display('delete_successfully'));
        } else {
            #set exception message
            $this->session->set_flashdata('exception',display('please_try_again'));
        }
        redirect("Cexpense/manage_expense_item");
    }
    // expense statement form
     public function expense_statement_form(){
      $expense_item  = $this->Expense_model->expense_item_list();
        $data = array(
            'item_list' => $expense_item,
        );
        $data['title']  = display('expense_statement_form');
    $content = $this->parser->parse('expense/expense_statement_form', $data, true);
    $this->template->full_admin_html_view($content);
}

// Expense statement
 public function expense_statement(){
    $this->load->model('Expense_model');
    $expense_id  = $this->input->get('expense_id');
    $from_date   = $this->input->get('from_date');
    $to_date     = $this->input->get('to_date');

   $customer_statement = $this->Expense_model->get_expense_statement($expense_id,$from_date,$to_date);
   //print_r($customer_statement);exit();
     $expense_item  = $this->Expense_model->expense_item_list();
        $data = array(
            'item_list'          => $expense_item,
            'expense_statement'  => $customer_statement,
            'from_date'          => $from_date,
            'to_date'            => $to_date,
            'expense_id'         => $expense_id,
        );
        $data['title']  = display('expense_statement');
    $content = $this->parser->parse('expense/expense_statement', $data, true);
    $this->template->full_admin_html_view($content);
}
}
