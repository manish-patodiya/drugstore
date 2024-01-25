<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Ldoctor
{

    //Retrieve  Doctor List
    public function doctor_list()
    {
        $CI = &get_instance();
        $CI->load->model('Customers');
        $CI->load->model('Doctors');
        $CI->load->model('Web_settings');
        $company_info = $CI->Customers->retrieve_company();
        $data['total_doctor'] = $CI->Doctors->count_doctor();
        $data['title'] = display('manage_doctor');
        $data['company_info'] = $company_info;
        $doctorList = $CI->parser->parse('doctor/doctor', $data, true);
        return $doctorList;
    }

    //Doctor Add
    public function doctor_add_form()
    {
        $CI = &get_instance();
        $CI->load->model('Doctors');
        $data = array(
            'title' => display('add_doctor'),
        );
        $doctorForm = $CI->parser->parse('doctor/add_doctor_form', $data, true);
        return $doctorForm;
    }

    //Doctor Edit Data
    public function doctor_edit_data($doc_id)
    {
        $CI = &get_instance();
        $CI->load->model('Doctors');
        $doctor_detail = $CI->Doctors->retrieve_doctor_editdata($doc_id);
        $data = array(
            'title' => display('customer_edit'),
            'doctor_id' => $doctor_detail[0]['id'],
            'doctor_name' => $doctor_detail[0]['doctor_name'],
        );
        $chapterList = $CI->parser->parse('doctor/edit_doctor_form', $data, true);
        return $chapterList;
    }
}