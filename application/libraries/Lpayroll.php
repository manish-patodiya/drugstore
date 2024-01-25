<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Lpayroll {

    //Retrieve  Customer List	
    public function salary_generate_list($links, $per_page, $page, $pagenum) {
        $CI = & get_instance();
        $CI->load->model('Payroll_model');
        $attendance_list   = $CI->Payroll_model->salary_generate_list($per_page, $page);
        $i = 0;
        $total = 0;
        if (!empty($attendance_list)) {
            foreach ($attendance_list as $k => $v) {
                $i++;
                $attendance_list[$k]['sl'] = $i + $CI->uri->segment(3);
            }
        }
        $data = array(
            'title'              => display('manage_attendance'),
            'attendance_list'    => $attendance_list,
            'subtotal'           => number_format($total, 2, '.', ','),
            'links'              => $links,
            'pagenum'            => $pagenum,
        );
        $customerList = $CI->parser->parse('attendance/manage_attendance', $data, true);
        return $customerList;
    }

    

}

?>