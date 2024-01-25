<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Lservice
{

    //Retrieve  service List
    public function service_list()
    {
        $CI = &get_instance();
        $CI->load->model('Service');
        $service_list = $CI->Service->service_list(); //It will get only  services
        $tablecolumn = $CI->db->list_fields('product_service');
        $num_column = count($tablecolumn) - 4;
        $taxfield = $CI->db->select('tax_name,default_value')
            ->from('tax_settings')
            ->get()
            ->result_array();
        $i = 0;
        $total = 0;
        if (!empty($service_list)) {
            foreach ($service_list as $k => $v) {
                $i++;
                $service_list[$k]['sl'] = $i + $CI->uri->segment(3);
            }
        }
        $data = array(
            'title' => display('manage_service'),
            'service_list' => $service_list,
            'rowumber' => $num_column,
            'taxfiled' => $taxfield,
        );
        $serviceList = $CI->parser->parse('service/service', $data, true);
        return $serviceList;
    }

    //Sub service Add
    public function service_add_form()
    {
        $CI = &get_instance();
        $CI->load->model('Service');
        $tax_list = $CI->db->select('*')
            ->from('tax_information')
            ->get()
            ->result();
        $taxfield = $CI->db->select('tax_name,default_value')
            ->from('tax_settings')
            ->get()
            ->result_array();
        $data = array(
            'title' => display('add_service'),
            'tax_list' => $tax_list,
            'taxfield' => $taxfield,
        );
        $serviceForm = $CI->parser->parse('service/add_service_form', $data, true);
        return $serviceForm;
    }

    //service Edit Data
    public function service_edit_data($service_id)
    {
        $CI = &get_instance();
        $CI->load->model('Service');
        $service_detail = $CI->Service->retrieve_service_editdata($service_id);
        $taxfield = $CI->db->select('tax_name,default_value')
            ->from('tax_settings')
            ->get()
            ->result_array();
        $i = 0;
        foreach ($taxfield as $taxs) {

            $tax = 'tax' . $i;
            $data[$tax] = $service_detail[0][$tax] * 100;
            $i++;
        }

        $data['title'] = display('service_edit');
        $data['service_id'] = $service_detail[0]['service_id'];
        $data['charge'] = $service_detail[0]['charge'];
        $data['service_name'] = $service_detail[0]['service_name'];
        $data['description'] = $service_detail[0]['description'];
        $data['servicedetails'] = $service_detail;
        $data['taxfield'] = $taxfield;
        //print_r($data);exit();

        $chapterList = $CI->parser->parse('service/edit_service_form', $data, true);
        return $chapterList;
    }

    public function service_invoice_add_form()
    {
        $CI = &get_instance();
        $CI->load->model('Service');
        $CI->load->model('Invoices');
        $CI->load->model('Web_settings');
        $employee_list = $CI->Service->employee_list();
        $customer_details = $CI->Invoices->pos_customer_setup();
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $taxfield = $CI->db->select('tax_name,default_value')
            ->from('tax_settings')
            ->get()
            ->result_array();
        $data = array(
            'title' => display('service_invoice'),
            'employee_list' => $employee_list,
            'customer_name' => !empty($customer_details) ? $customer_details[0]['customer_name'] : "",
            'customer_id' => !empty($customer_details) ? $customer_details[0]['customer_id'] : "",
            'discount_type' => $currency_details[0]['discount_type'],
            'taxes' => $taxfield,
        );
        $invoiceForm = $CI->parser->parse('service/add_invoice_form', $data, true);
        return $invoiceForm;
    }
    //
    public function service_invoice_edit_data($invoice_id)
    {

        $CI = &get_instance();
        $CI->load->model('Service');
        $CI->load->model('Web_settings');
        $employee_list = $CI->Service->employee_list();
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $service_inv_main = $CI->Service->service_invoice_updata($invoice_id);
        $customer_info = $CI->Service->customer_info($service_inv_main[0]['customer_id']);
        $taxinfo = $CI->Service->service_invoice_taxinfo($invoice_id);
        $taxfield = $CI->db->select('tax_name,default_value')
            ->from('tax_settings')
            ->get()
            ->result_array();
        $data = array(
            'title' => display('update_service_invoice'),
            'employee_list' => $employee_list,
            'invoice_id' => $service_inv_main[0]['voucher_no'],
            'date' => $service_inv_main[0]['date'],
            'customer_id' => $service_inv_main[0]['customer_id'],
            'customer_name' => $customer_info->customer_name,
            'details' => $service_inv_main[0]['details'],
            'total_amount' => $service_inv_main[0]['total_amount'],
            'total_discount' => $service_inv_main[0]['total_discount'],
            'invoice_discount' => $service_inv_main[0]['invoice_discount'],
            'total_tax' => $service_inv_main[0]['total_tax'],
            'paid_amount' => $service_inv_main[0]['paid_amount'],
            'due_amount' => $service_inv_main[0]['due_amount'],
            'shipping_cost' => $service_inv_main[0]['shipping_cost'],
            'invoice_detail' => $service_inv_main,
            'taxvalu' => $taxinfo,
            'discount_type' => $currency_details[0]['discount_type'],
            'taxes' => $taxfield,
            'stotal' => $service_inv_main[0]['total_amount'] - $service_inv_main[0]['previous'],
            'employees' => $service_inv_main[0]['employee_id'],
            'previous' => $service_inv_main[0]['previous'],

        );
        $invoiceForm = $CI->parser->parse('service/update_invoice_form', $data, true);
        return $invoiceForm;

    }

    public function service_invoice_view_data($invoice_id)
    {

        $CI = &get_instance();
        $CI->load->model('Service');
        $CI->load->model('Web_settings');
        $CI->load->model('Invoices');
        $CI->load->library('occational');
        $employee_list = $CI->Service->employee_list();
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $service_inv_main = $CI->Service->service_invoice_updata($invoice_id);
        $customer_info = $CI->Service->customer_info($service_inv_main[0]['customer_id']);
        $taxinfo = $CI->Service->service_invoice_taxinfo($invoice_id);
        $taxfield = $CI->db->select('tax_name,default_value')
            ->from('tax_settings')
            ->get()
            ->result_array();
        $company_info = $CI->Invoices->retrieve_company();

        $subTotal_quantity = 0;
        $subTotal_discount = 0;
        $subTotal_ammount = 0;

        if (!empty($service_inv_main)) {
            foreach ($service_inv_main as $k => $v) {
                $service_inv_main[$k]['final_date'] = $CI->occational->dateConvert($service_inv_main[$k]['date']);
                $subTotal_quantity = $subTotal_quantity + $service_inv_main[$k]['qty'];
                $subTotal_ammount = $subTotal_ammount + $service_inv_main[$k]['total'];
            }

            $i = 0;
            foreach ($service_inv_main as $k => $v) {
                $i++;
                $service_inv_main[$k]['sl'] = $i;
            }
        }
        $data = array(
            'title' => display('service_details'),
            'employee_list' => $employee_list,
            'invoice_id' => $service_inv_main[0]['voucher_no'],
            'final_date' => $service_inv_main[0]['final_date'],
            'customer_id' => $service_inv_main[0]['customer_id'],
            'customer_name' => $customer_info->customer_name,
            'customer_address' => $customer_info->customer_address,
            'customer_mobile' => $customer_info->customer_mobile,
            'customer_email' => $customer_info->customer_email,
            'details' => $service_inv_main[0]['details'],
            'total_amount' => $service_inv_main[0]['total_amount'],
            'total_discount' => $service_inv_main[0]['total_discount'],
            'invoice_discount' => $service_inv_main[0]['invoice_discount'],
            'subTotal_ammount' => number_format($subTotal_ammount, 2, '.', ','),
            'subTotal_quantity' => number_format($subTotal_quantity, 2, '.', ','),
            'total_tax' => $service_inv_main[0]['total_tax'],
            'paid_amount' => $service_inv_main[0]['paid_amount'],
            'due_amount' => $service_inv_main[0]['due_amount'],
            'shipping_cost' => $service_inv_main[0]['shipping_cost'],
            'invoice_detail' => $service_inv_main,
            'taxvalu' => $taxinfo,
            'discount_type' => $currency_details[0]['discount_type'],
            'currency' => $currency_details[0]['currency'],
            'position' => $currency_details[0]['currency_position'],
            'taxes' => $taxfield,
            'stotal' => $service_inv_main[0]['total_amount'] - $service_inv_main[0]['previous'],
            'employees' => $service_inv_main[0]['employee_id'],
            'previous' => $service_inv_main[0]['previous'],
            'company_info' => $company_info,

        );
        $invoiceForm = $CI->parser->parse('service/invoice_html', $data, true);
        return $invoiceForm;

    }

}
