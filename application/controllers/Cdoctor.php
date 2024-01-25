<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Cdoctor extends CI_Controller
{
    public $menu;
    public function __construct()
    {
        parent::__construct();
        $this->load->library('auth');
        $this->load->library('ldoctor');
        $this->load->library('session');
        $this->load->model('Doctors');
        $this->auth->check_admin_auth();
    }

    //Default loading for Doctor System.
    public function index()
    {
        //Calling Doctor add form which will be loaded by help of "ldoctor,located in library folder"
        $content = $this->ldoctor->doctor_add_form();
        //Here ,0 means array position 0 will be active class
        $this->template->full_admin_html_view($content);
    }

    //Insert Product and upload
    public function insert_doctor()
    {
        //Doctor  basic information adding.
        $data = array(
            'doctor_name' => $this->input->post('doctor_name'),
        );
        $this->db->insert('doctor_information', $data);
        $doc_id = $this->db->insert_id();

        $this->session->set_userdata(array('message' => display('successfully_added')));
        if (isset($_POST['add-doctor'])) {
            redirect(base_url('Cdoctor/manage_doctor'));
            exit;
        } elseif (isset($_POST['add-doctor-another'])) {
            redirect(base_url('Cdoctor'));
            exit;
        }
    }

    public function manage_doctor()
    {
        $CI = &get_instance();
        $this->auth->check_admin_auth();
        $content = $this->ldoctor->doctor_list();
        $this->template->full_admin_html_view($content);
    }

    public function CheckDoctorList()
    {
        // GET data
        $postData = $this->input->post();
        $data = $this->Doctors->getDoctorList($postData);
        echo json_encode($data);
    }

    // doctor_delete
    public function doctor_delete($doc_id)
    {
        $doctorinfo = $this->db->select('doctor_name')->from('doctor_information')->where('id', $doc_id)->get()->row();
        $doctor_head = $doctorinfo->doctor_name . '-' . $id;
        $this->Doctors->delete_doctor($doc_id);
        $this->session->set_userdata(array('message' => display('successfully_delete')));
        redirect(base_url('Cdoctor/manage_doctor'));
    }

    //doctor Update Form
    public function doctor_update_form($doc_id)
    {
        $content = $this->ldoctor->doctor_edit_data($doc_id);
        $this->template->full_admin_html_view($content);
    }

    // Doctor Update
    public function doctor_update()
    {
        $doctor_id = $this->input->post('doctor_id');
        $old_headnam = $this->input->post('oldname') . '-' . $doctor_id;
        $c_acc = $this->input->post('doctor_name') . '-' . $doctor_id;
        $data = array(
            'doctor_name' => $this->input->post('doctor_name'),
        );
        $result = $this->Doctors->update_doctor($data, $doctor_id);
        if ($result == true) {
            $this->session->set_userdata(array('message' => display('successfully_updated')));
            redirect(base_url('Cdoctor/manage_doctor'));
            exit;
        } else {
            $this->session->set_userdata(array('error_message' => display('please_try_again')));
            redirect(base_url('Cdoctor'));
        }
    }
}