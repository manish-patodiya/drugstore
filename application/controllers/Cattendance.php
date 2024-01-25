<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cattendance extends CI_Controller {

    public $menu;

    function __construct() {
        parent::__construct();
        $this->load->library('auth');
        $this->load->library('session');
        $this->load->library('lattendance');
        $this->load->model('Hrm_model');
        $this->load->model('Attendance_model');
         $this->load->model('Web_settings');
        $this->auth->check_admin_auth();
    }

    //Designation form
    public function add_attendance() {
    $this->load->model('Attendance_model');
    $data['title']            = display('add_attendance');
    $data['att_list']         = $this->Attendance_model->attendance_list();
    $data['dropdownatn']      = $this->Attendance_model->employee_list();
    $content = $this->parser->parse('attendance/atnview', $data, true);
    $this->template->full_admin_html_view($content);
    }
    // create designation
    public function create_atten(){
    $this->load->model('Attendance_model');
    $this->load->model('Web_settings');
    $this->form_validation->set_rules('employee_id',display('employee_id'),'required|max_length[100]');
    $this->form_validation->set_rules('details',display('details'),'max_length[250]');
    $Web_settings = $this->Web_settings->retrieve_setting_editdata();
    date_default_timezone_set($Web_settings[0]['timezone']);
        #-------------------------------#
        $date=date('Y-m-d');
        $signin=date("h:i:s a");
        #-------------------------------#
        if ($this->form_validation->run() === true) {

            $postData = [
                'employee_id'    => $this->input->post('employee_id',true),
                'date'           => $date,
                'sign_in'        => $signin,    
            ];     

            if ($this->Attendance_model->atten_create($postData)) { 
                $this->session->set_flashdata('message', display('save_successfully'));
            } else {
                $this->session->set_flashdata('error_message',  display('please_try_again'));
            }
       
        redirect("Cattendance/add_attendance");
        }
         redirect("Cattendance/add_attendance");
    
}

  public function checkout(){
   $this->load->model('Web_settings');
    $Web_settings = $this->Web_settings->retrieve_setting_editdata();
    date_default_timezone_set($Web_settings[0]['timezone']);
   $sign_out =  date("h:i:s a", time());
   $sign_in  =  $this->input->post('sign_in',true);
   $in=new DateTime($sign_in);
   $Out=new DateTime($sign_out);
   $interval=$in->diff($Out);
   $stay =  $interval->format('%H:%I:%S');
   $postData = [
    'att_id'               => $this->input->post('att_id',true),
    'sign_out'             => $sign_out,
    'staytime'             => $stay,
]; 
$update = $this->db->where('att_id',$this->input->post('att_id',true))
            ->update("attendance", $postData);
            if ($update) { 
                $this->session->set_flashdata('message', display('successfully_checkout'));
                  redirect("Cattendance/add_attendance");
            }

}

        public function manage_attendance() {
        $this->load->model('Attendance_model');
        $config["base_url"] = base_url('Cattendance/manage_attendance/');
        $config["total_rows"] = $this->Attendance_model->attendance_list_count();
        $config["per_page"] = 30;
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
        $pagenum = $page;
        #
        #pagination ends
        #  
        $content = $this->lattendance->attendance_list($links, $config["per_page"], $page, $pagenum);

        $this->template->full_admin_html_view($content);
        ;
    }

    // attendance delete
    public function delete_attendance($id) {
    $this->load->model('Attendance_model');
    $this->Attendance_model->delete_attendance($id);
    $this->session->set_userdata(array('message' => display('successfully_delete')));
     redirect("Cattendance/manage_attendance");
    }

       public function edit_atn_form($id = null){
        $this->load->model('Attendance_model');
         $this->load->model('Web_settings');
    $Web_settings = $this->Web_settings->retrieve_setting_editdata();
    date_default_timezone_set($Web_settings[0]['timezone']);
        $this->form_validation->set_rules('att_id',null,'required|max_length[11]');
        $this->form_validation->set_rules('employee_id',display('employee_id'),'required');
        $this->form_validation->set_rules('date',display('date')  ,'required');
        $this->form_validation->set_rules('sign_in',display('sign_in')  ,'required');
        $this->form_validation->set_rules('sign_out',display('sign_out'));
        $this->form_validation->set_rules('staytime',display('staytime'));
        #-------------------------------#
        if ($this->form_validation->run() === true) {
   $sign_out = date("h:i:s a", strtotime($this->input->post('sign_out',true))); 
   $sign_in  = date("h:i:s a", strtotime($this->input->post('sign_in',true)));
   $in= new DateTime($sign_in);
   $Out=new DateTime($sign_out);
   $interval=$in->diff($Out);
   $stay =  $interval->format('%H:%I:%S');

            $postData = [
                'att_id'               => $this->input->post('att_id',true),
                'employee_id'          => $this->input->post('employee_id',true),
                'date'                 => $this->input->post('date',true),
                'sign_in'              => $sign_in,
                'sign_out'             => $sign_out,
                'staytime'             => $stay,
                
            ]; 
            
            if ($this->Attendance_model->update_attn($postData)) { 
                $this->session->set_flashdata('message', display('successfully_updated'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
           redirect("Cattendance/manage_attendance");

        } else {
         $data['data']        = $this->Attendance_model->attn_updateForm($id);
         $data['dropdownatn'] = $this->Attendance_model->employee_list();
         $data['query']       = $this->Attendance_model->get_atn_dropdown($id);
         $content             = $this->parser->parse('attendance/edit_attendance', $data, true);
     $this->template->full_admin_html_view($content);
     }

 }

 //csv attendance bulk upload
  function attendance_bulkupload()
    {
        $count=0;
        $fp = fopen($_FILES['upload_csv_file']['tmp_name'],'r') or die("can't open file");

        if (($handle = fopen($_FILES['upload_csv_file']['tmp_name'], 'r')) !== FALSE)
        {
  
         while($csv_line = fgetcsv($fp,1024)){
                //keep this if condition if you want to remove the first row
                for($i = 0, $j = count($csv_line); $i < $j; $i++)
                {                  
                   $insert_csv = array();
                   $insert_csv['employee_id'] = (!empty($csv_line[0])?$csv_line[0]:null);
                   $insert_csv['date']        = (!empty($csv_line[1])?$csv_line[1]:null);
                   $insert_csv['sign_in']     = (!empty($csv_line[2])?$csv_line[2]:null);
                   $insert_csv['sign_out']    = (!empty($csv_line[3])?$csv_line[3]:null);
                   $insert_csv['staytime']    = (!empty($csv_line[4])?$csv_line[4]:null);
                }
                $date = date("Y-m-d", strtotime($insert_csv['date']));
               $sign_out = date("h:i:s a", strtotime($insert_csv['sign_out'])); 
               $sign_in  = date("h:i:s a", strtotime($insert_csv['sign_in']));
               $in= new DateTime($sign_in);
               $Out=new DateTime($sign_out);
               $interval=$in->diff($Out);
               $stay =  $interval->format('%H:%I:%S');
                $attendancedata = array(
                    'employee_id'     => $insert_csv['employee_id'],
                    'date'            => $date,
                    'sign_in'         => $sign_in,
                    'sign_out'        => $sign_out,
                    'staytime'        => $stay,  
                );


                if ($count > 0) {
                    $this->db->insert('attendance',$attendancedata);
                    }  
                $count++; 
            }
            
        }              
        $this->session->set_userdata(array('message'=>display('successfully_added')));
        redirect(base_url('Cattendance/manage_attendance'));
    
    }
   // attendance report
    public function attendance_report() {
    $this->load->model('Attendance_model');
     $data['title']            = display('attendance_report');
     $data['attendance_list']  = $this->Attendance_model->attendance_list();
     $data['dropdownatn']      = $this->Attendance_model->employee_list();
     $content                  = $this->parser->parse('attendance/attendance_list', $data, true);
     $this->template->full_admin_html_view($content);
    }
     // attendance report view
    public function datewiseattendancereport() {
    $this->load->model('Attendance_model');
    $data['title']      = display('attendance_report');
    $format_start_date  = $this->input->post('start_date');
    $format_end_date    = $this->input->post('end_date');
    $data['from_date']  = $format_start_date;
    $data['to_date']    = $format_end_date;
    $data['query']      = $this->Attendance_model->datewiseReport($format_start_date,$format_end_date);
    $content            = $this->parser->parse('attendance/user_views_report', $data, true);
     $this->template->full_admin_html_view($content);
    }
    //Employee wise attendance report
    public function employeewise_att_report(){
    $this->load->model('Attendance_model');
    $data['title']      = display('attendance_report');
     $id                = $this->input->post('employee_id');
    $start_date         = $this->input->post('s_date');
    $end_date           = $this->input->post('e_date');
    $data['employee_id']= $id;
    $data['start_date'] = $start_date;
    $data['end_date']   = $end_date;
    $data['ab']         = $this->Attendance_model->emp_information($id);
    $data['query']      = $this->Attendance_model->search($id,$start_date,$end_date);
    $content            = $this->parser->parse('attendance/att_reportview', $data, true);
     $this->template->full_admin_html_view($content);

    }
    // In Time wise attendance report

    public function AtnTimeReport_view(){
    $this->load->model('Attendance_model');
    $data['title']        = display('attendance_report');
    $date                 = $this->input->post('date');
    $start_time           = $this->input->post('s_time');
    $end_time             = $this->input->post('e_time');
    $data['date']         = $date;
    $data['start']        = $start_time;
    $data['end']          = $end_time;
    $data['query']        = $this->Attendance_model->search_intime($date,$start_time,$end_time);
    $content              = $this->parser->parse('attendance/Date_time_report', $data, true);
     $this->template->full_admin_html_view($content);  
    }
}
