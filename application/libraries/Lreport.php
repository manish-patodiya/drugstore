<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Lreport
{

    // Retrieve All Stock Report
    public function stock_report($limit, $page, $links)
    {
        $CI = &get_instance();
        $CI->load->model('Reports');
        $CI->load->model('Web_settings');
        $CI->load->library('occational');
        $stok_report = $CI->Reports->stock_report($limit, $page);

        if (!empty($stok_report)) {
            $i = $page;
            foreach ($stok_report as $k => $v) {
                $i++;
                $stok_report[$k]['sl'] = $i;
            }
            foreach ($stok_report as $k => $v) {
                $i++;
                $stok_report[$k]['stok_quantity'] = $stok_report[$k]['totalBuyQnty'] - $stok_report[$k]['totalSalesQnty'];
                $stok_report[$k]['totalSalesCtn'] = $stok_report[$k]['totalSalesQnty'] / $stok_report[$k]['cartoon_quantity'];
                $stok_report[$k]['totalPrhcsCtn'] = $stok_report[$k]['totalBuyQnty'] / $stok_report[$k]['cartoon_quantity'];

                $stok_report[$k]['stok_quantity_cartoon'] = $stok_report[$k]['stok_quantity'] / $stok_report[$k]['cartoon_quantity'];
            }
        }
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $data = array(
            'title' => display('stock_list'),
            'stok_report' => $stok_report,
            'links' => $links,
            'currency' => $currency_details[0]['currency'],
            'position' => $currency_details[0]['currency_position'],

        );
        $reportList = $CI->parser->parse('report/stock_report', $data, true);
        return $reportList;
    }

    //Out of stock
    public function out_of_stock()
    {
        $CI = &get_instance();
        $CI->load->model('Reports');
        $CI->load->model('Web_settings');
        $CI->load->library('occational');

        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $data = array(
            'title' => display('out_of_stock'),
            'totalnumber' => $CI->Reports->out_of_stock_count(),
        );

        $reportList = $CI->parser->parse('report/out_of_stock', $data, true);
        return $reportList;
    }

    // low stock
    public function low_stock()
    {
        $CI = &get_instance();
        $CI->load->model('Reports');
        $CI->load->model('Web_settings');
        $CI->load->library('occational');

        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $data = array(
            'title' => 'Low Stock',
            'totalnumber' => $CI->Reports->low_stock_count(),
        );

        $reportList = $CI->parser->parse('report/low_stock', $data, true);
        return $reportList;
    }

    //Expiring soon
    public function expiring_soon()
    {
        $CI = &get_instance();
        $CI->load->model('Reports');
        $CI->load->model('Web_settings');
        $CI->load->library('occational');

        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $data = array(
            'title' => display('expiring_soon'),
            'totalnumber' => $CI->Reports->expiring_soon_count(),
        );

        $reportList = $CI->parser->parse('report/expiring_soon', $data, true);
        return $reportList;
    }

    // Date expire Medicine list
    public function out_of_date()
    {
        $CI = &get_instance();
        $CI->load->model('Reports');
        $CI->load->model('Web_settings');
        $CI->load->library('occational');
        //$currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $data = array(
            'title' => display('out_of_date'),
            'totalnumber' => $CI->Reports->out_of_date_count(),
        );

        $reportList = $CI->parser->parse('report/out_of_date', $data, true);
        return $reportList;
    }
    // Retrieve Single Item Stock Stock Report
    public function stock_report_single_item()
    {
        $CI = &get_instance();
        $CI->load->model('Reports');
        $data['title'] = 'stock';
        $data['totalnumber'] = $CI->Reports->totalnumberof_product();
        $reportList = $CI->parser->parse('report/stock_report', $data, true);
        return $reportList;
    }

    // Retrieve daily Report
    public function retrieve_all_reports($per_page = null, $page = null)
    {
        $CI = &get_instance();
        $CI->load->model('Reports');
        $CI->load->model('Web_settings');
        $CI->load->library('occational');

        $sales_report = $CI->Reports->todays_sales_report($per_page, $page);
        $sales_amount = 0;
        if (!empty($sales_report)) {
            $i = 0;
            foreach ($sales_report as $k => $v) {
                $i++;
                $sales_report[$k]['sl'] = $i;
                $sales_report[$k]['sales_date'] = $CI->occational->dateConvert($sales_report[$k]['date']);
                $sales_amount = $sales_amount + $sales_report[$k]['total_amount'];
            }
        }

        $purchase_report = $CI->Reports->todays_purchase_report($per_page, $page);
        $purchase_amount = 0;
        if (!empty($purchase_report)) {
            $i = 0;
            foreach ($purchase_report as $k => $v) {
                $i++;
                $purchase_report[$k]['sl'] = $i;
                $purchase_report[$k]['prchse_date'] = $CI->occational->dateConvert($purchase_report[$k]['purchase_date']);
                $purchase_amount = $purchase_amount + $purchase_report[$k]['grand_total_amount'];
            }
        }
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $company_info = $CI->Reports->retrieve_company();
        $data = array(
            'title' => display('todays_report'),
            'sales_report' => $sales_report,
            'sales_amount' => number_format($sales_amount, 2, '.', ','),
            'purchase_amount' => number_format($purchase_amount, 2, '.', ','),
            'purchase_report' => $purchase_report,
            'date' => $today = date('d-m-Y'),
            'company_info' => $company_info,
            'currency' => $currency_details[0]['currency'],
            'position' => $currency_details[0]['currency_position'],
        );

        // report/all_report
        $reportList = $CI->parser->parse('report/all_report', $data, true);
        return $reportList;
    }

    // Retrieve todays_sales_report
    public function todays_sales_report($links = null, $per_page = null, $page = null)
    {
        $CI = &get_instance();
        $CI->load->model('Reports');
        $CI->load->model('Web_settings');
        $CI->load->library('occational');
        $sales_report = $CI->Reports->todays_sales_report($per_page, $page);
        $sales_amount = 0;
        if (!empty($sales_report)) {
            $i = 0;
            foreach ($sales_report as $k => $v) {
                $i++;
                $sales_report[$k]['sl'] = $i;
                $sales_report[$k]['sales_date'] = $CI->occational->dateConvert($sales_report[$k]['date']);
                $sales_amount = $sales_amount + $sales_report[$k]['total_amount'];
            }
        }
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $company_info = $CI->Reports->retrieve_company();
        $data = array(
            'title' => display('todays_sales_report'),
            'sales_amount' => number_format($sales_amount, 2, '.', ','),
            'sales_report' => $sales_report,
            'company_info' => $company_info,
            'currency' => $currency_details[0]['currency'],
            'position' => $currency_details[0]['currency_position'],
            'links' => $links,
        );
        $reportList = $CI->parser->parse('report/sales_report', $data, true);
        return $reportList;
    }

    public function retrieve_dateWise_SalesReports($start_date, $end_date)
    {
        $CI = &get_instance();
        $CI->load->model('Reports');
        $CI->load->model('Web_settings');
        $CI->load->library('occational');
        $sales_report = $CI->Reports->retrieve_dateWise_SalesReports($start_date, $end_date);
        $sales_amount = 0;
        if (!empty($sales_report)) {
            $i = 0;
            foreach ($sales_report as $k => $v) {
                $i++;
                $sales_report[$k]['sl'] = $i;
                $sales_report[$k]['sales_date'] = $CI->occational->dateConvert($sales_report[$k]['date']);
                $sales_amount = $sales_amount + $sales_report[$k]['total_amount'];
            }
        }
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $company_info = $CI->Reports->retrieve_company();
        $data = array(
            'title' => display('sales_report'),
            'sales_amount' => $sales_amount,
            'sales_report' => $sales_report,
            'company_info' => $company_info,
            'currency' => $currency_details[0]['currency'],
            'position' => $currency_details[0]['currency_position'],
            'links' => '',
        );
        $reportList = $CI->parser->parse('report/sales_report', $data, true);
        return $reportList;
    }
    // Retrieve todays_purchase_report
    public function todays_purchase_report($links = null, $per_page = null, $page = null)
    {
        $CI = &get_instance();
        $CI->load->model('Reports');
        $CI->load->model('Web_settings');
        $CI->load->library('occational');
        $purchase_report = $CI->Reports->todays_purchase_report($per_page, $page);
        $purchase_amount = 0;

        if (!empty($purchase_report)) {
            $i = 0;
            foreach ($purchase_report as $k => $v) {
                $i++;
                $purchase_report[$k]['sl'] = $i;
                $purchase_report[$k]['prchse_date'] = $CI->occational->dateConvert($purchase_report[$k]['purchase_date']);
                $purchase_amount = $purchase_amount + $purchase_report[$k]['grand_total_amount'];
            }
        }

        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $company_info = $CI->Reports->retrieve_company();
        $data = array(
            'title' => display('todays_purchase_report'),
            'purchase_amount' => number_format($purchase_amount, 2, '.', ','),
            'purchase_report' => $purchase_report,
            'company_info' => $company_info,
            'currency' => $currency_details[0]['currency'],
            'position' => $currency_details[0]['currency_position'],
            'links' => $links,
        );
        $reportList = $CI->parser->parse('report/purchase_report', $data, true);
        return $reportList;
    }

    //Retrive date wise purchase report
    public function retrieve_dateWise_PurchaseReports($start_date, $end_date)
    {
        $CI = &get_instance();
        $CI->load->model('Reports');
        $CI->load->model('Web_settings');
        $CI->load->library('occational');
        $purchase_report = $CI->Reports->retrieve_dateWise_PurchaseReports($start_date, $end_date);
        $purchase_amount = 0;
        if (!empty($purchase_report)) {
            $i = 0;
            foreach ($purchase_report as $k => $v) {
                $i++;
                $purchase_report[$k]['sl'] = $i;
                $purchase_report[$k]['prchse_date'] = $CI->occational->dateConvert($purchase_report[$k]['purchase_date']);
                $purchase_amount = $purchase_amount + $purchase_report[$k]['grand_total_amount'];
            }
        }
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $company_info = $CI->Reports->retrieve_company();
        $data = array(
            'title' => display('purchase_report'),
            'purchase_amount' => $purchase_amount,
            'purchase_report' => $purchase_report,
            'company_info' => $company_info,
            'currency' => $currency_details[0]['currency'],
            'position' => $currency_details[0]['currency_position'],
            'links' => '',

        );
        $reportList = $CI->parser->parse('report/purchase_report', $data, true);
        return $reportList;
    }
    //Product report sales wise
    public function get_products_report_sales_view($links, $per_page, $page)
    {
        $CI = &get_instance();
        $CI->load->model('Reports');
        $CI->load->model('Web_settings');
        $CI->load->library('occational');
        $product_report = $CI->Reports->retrieve_product_sales_report($per_page, $page);

        if (!empty($product_report)) {
            $i = 0;
            foreach ($product_report as $k => $v) {
                $i++;
                $product_report[$k]['sl'] = $i;
            }
        }
        $sub_total = 0;
        if (!empty($product_report)) {
            foreach ($product_report as $k => $v) {
                $product_report[$k]['sales_date'] = $CI->occational->dateConvert($product_report[$k]['date']);
                $sub_total += $product_report[$k]['total_amount'];
            }
        }
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $company_info = $CI->Reports->retrieve_company();
        $data = array(
            'title' => display('sales_report_product_wise'),
            'sub_total' => number_format($sub_total, 2, '.', ','),
            'product_report' => $product_report,
            'links' => $links,
            'start' => date('Y-m-d'),
            'end' => date('Y-m-d'),
            'company_info' => $company_info,
            'currency' => $currency_details[0]['currency'],
            'position' => $currency_details[0]['currency_position'],
        );
        $reportList = $CI->parser->parse('report/product_report', $data, true);
        return $reportList;
    }
    //Get Product Report Search
    public function get_products_search_report($from_date, $to_date)
    {
        $CI = &get_instance();
        $CI->load->model('Reports');
        $company_info = $CI->Reports->retrieve_company();
        $data = array(
            'title' => display('sales_report_product_wise'),
            'start' => $from_date,
            'end' => $to_date,
            'company_info' => $company_info,
        );
        $reportList = $CI->parser->parse('report/product_report', $data, true);
        return $reportList;
    }
    //Total profit report
    public function total_profit_report($links, $per_page, $page)
    {
        $CI = &get_instance();
        $CI->load->model('Reports');
        $CI->load->model('Web_settings');
        $CI->load->library('occational');
        $total_profit_report = $CI->Reports->total_profit_report($per_page, $page);

        $profit_ammount = 0;
        $SubTotalSupAmnt = 0;
        $SubTotalSaleAmnt = 0;
        if (!empty($total_profit_report)) {
            $i = 0;
            foreach ($total_profit_report as $k => $v) {
                $total_profit_report[$k]['sl'] = $i;
                $total_profit_report[$k]['prchse_date'] = $CI->occational->dateConvert($total_profit_report[$k]['date']);

                $profit_ammount = $profit_ammount + $total_profit_report[$k]['total_profit'];

                $SubTotalSupAmnt = $SubTotalSupAmnt + $total_profit_report[$k]['total_manufacturer_rate'];

                $SubTotalSaleAmnt = $SubTotalSaleAmnt + $total_profit_report[$k]['total_sale'];
            }
        }

        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $company_info = $CI->Reports->retrieve_company();
        $data = array(
            'title' => display('profit_report'),
            'profit_ammount' => number_format($profit_ammount, 2, '.', ','),
            'total_profit_report' => $total_profit_report,
            'SubTotalSupAmnt' => number_format($SubTotalSupAmnt, 2, '.', ','),
            'SubTotalSaleAmnt' => number_format($SubTotalSaleAmnt, 2, '.', ','),
            'links' => $links,
            'company_info' => $company_info,
            'currency' => $currency_details[0]['currency'],
            'position' => $currency_details[0]['currency_position'],
        );
        $reportList = $CI->parser->parse('report/profit_report', $data, true);
        return $reportList;
    }

    //Retrive date wise total profit report
    public function retrieve_dateWise_profit_report($start_date, $end_date, $links, $per_page, $page)
    {
        $CI = &get_instance();
        $CI->load->model('Reports');
        $CI->load->model('Web_settings');
        $CI->load->library('occational');
        $total_profit_report = $CI->Reports->retrieve_dateWise_profit_report($start_date, $end_date, $per_page, $page);

        $profit_ammount = 0;
        $SubTotalSupAmnt = 0;
        $SubTotalSaleAmnt = 0;
        if (!empty($total_profit_report)) {
            $i = 0;
            foreach ($total_profit_report as $k => $v) {
                $total_profit_report[$k]['sl'] = $i;
                $total_profit_report[$k]['prchse_date'] = $CI->occational->dateConvert($total_profit_report[$k]['date']);

                $profit_ammount = $profit_ammount + $total_profit_report[$k]['total_profit'];

                $SubTotalSupAmnt = $SubTotalSupAmnt + $total_profit_report[$k]['total_manufacturer_rate'];

                $SubTotalSaleAmnt = $SubTotalSaleAmnt + $total_profit_report[$k]['total_sale'];
            }
        }

        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $company_info = $CI->Reports->retrieve_company();
        $data = array(
            'title' => display('profit_report'),
            'profit_ammount' => number_format($profit_ammount, 2, '.', ','),
            'total_profit_report' => $total_profit_report,
            'SubTotalSupAmnt' => number_format($SubTotalSupAmnt, 2, '.', ','),
            'SubTotalSaleAmnt' => number_format($SubTotalSaleAmnt, 2, '.', ','),
            'links' => $links,
            'company_info' => $company_info,
            'currency' => $currency_details[0]['currency'],
            'position' => $currency_details[0]['currency_position'],
        );
        $reportList = $CI->parser->parse('report/profit_report', $data, true);
        return $reportList;
    }

    public function stock_report_batch_wise()
    {
        $CI = &get_instance();
        $CI->load->model('Reports');
        $CI->load->model('manufacturers');
        $CI->load->library('occational');
        $company_info = $CI->Reports->retrieve_company();
        // $data['total_records'] = $CI->Reports->total_records_batch_wise();
        $data['title'] = 'Batch Wise Stock';
        $reportList = $CI->parser->parse('report/stock_report_batch_wise', $data, true);
        return $reportList;
    }

    //profit report manufacturer wise
    public function profit_report_manufacturer($manufacturer_id, $from_date, $to_date)
    {
        $CI = &get_instance();
        $CI->load->model('Reports');
        $CI->load->model('manufacturers');
        $CI->load->library('occational');
        $profit_purchase = $CI->Reports->profit_report_manufacturer($manufacturer_id, $from_date, $to_date);
        $profit_sale = $CI->Reports->profit_report_manufacturer_sale($manufacturer_id, $from_date, $to_date);
        $manufacturer_list = $CI->manufacturers->manufacturer_list_report();
        $manufacturer_info = $CI->manufacturers->retrieve_manufacturer_editdata($manufacturer_id);
        $company_info = $CI->Reports->retrieve_company();
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $company_info = $CI->Reports->retrieve_company();
        foreach ($profit_purchase as $k => $v) {
        }
        foreach ($profit_sale as $k => $v) {
        }
        $data = array(
            'title' => display('profit_report_manufacturer_wise'),
            'currency' => $currency_details[0]['currency'],
            'position' => $currency_details[0]['currency_position'],
            'quantity' => $profit_purchase[0]['quantity'],
            'tpurchase' => $profit_sale[0]['quantity'] * $profit_purchase[0]['avg_r'],
            'manufacturer' => $manufacturer_list,
            'from' => $from_date,
            'to' => $to_date,
            'logo' => $currency_details[0]['logo'],
            'manufacturer_info' => $manufacturer_info,
            'total_sale_qty' => $profit_sale[0]['quantity'],
            'total_sale' => $profit_sale[0]['quantity'] * $profit_sale[0]['avg_r'],

        );

        $reportList = $CI->parser->parse('report/profit_report_manufacturer', $data, true);
        return $reportList;
    }
    public function profit_report_manufacturer_form()
    {
        $CI = &get_instance();
        $CI->load->model('Reports');
        $CI->load->model('manufacturers');
        $CI->load->library('occational');
        $company_info = $CI->Reports->retrieve_company();
        $manufacturer_list = $CI->manufacturers->manufacturer_list_report();
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $company_info = $CI->Reports->retrieve_company();
        $data = array(
            'title' => display('profit_report_manufacturer_wise'),
            'manufacturer' => $manufacturer_list,
        );

        $reportList = $CI->parser->parse('report/profit_lose_report', $data, true);
        return $reportList;
    }
    // product wise profit reporf form information
    public function profit_productwise_form()
    {
        $CI = &get_instance();
        $CI->load->model('Reports');
        $CI->load->model('manufacturers');
        $CI->load->library('occational');
        $company_info = $CI->Reports->retrieve_company();
        $manufacturer_list = $CI->manufacturers->manufacturer_list_report();
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $company_info = $CI->Reports->retrieve_company();
        $data = array(
            'title' => display('profit_report_manufacturer_wise'),
            'manufacturer' => $manufacturer_list,
        );

        $reportList = $CI->parser->parse('report/profit_product_report', $data, true);
        return $reportList;
    }

    // product wise profit report
    public function profit_productwise($product_id, $from_date, $to_date)
    {
        $CI = &get_instance();
        $CI->load->model('Reports');
        $CI->load->model('Products');
        $CI->load->library('occational');
        $profit_purchase = $CI->Reports->profit_report_productwise($product_id, $from_date, $to_date);
        $profit_sale = $CI->Reports->profit_report_product_salesss($product_id, $from_date, $to_date);
        $product_detail = $CI->Products->retrieve_product_editdata($product_id);
        $company_info = $CI->Reports->retrieve_company();
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $company_info = $CI->Reports->retrieve_company();

        foreach ($profit_sale as $k => $v) {
        }
        foreach ($profit_purchase as $k => $v) {
        }
        $data = array(
            'title' => display('profit_report_product_wise'),
            'currency' => $currency_details[0]['currency'],
            'position' => $currency_details[0]['currency_position'],
            'quantity' => $profit_purchase[0]['quantity'],
            'tpurchase' => $profit_sale[0]['quantity'] * $profit_purchase[0]['avg_r'],
            'from' => $from_date,
            'to' => $to_date,
            'logo' => $currency_details[0]['logo'],
            'product_detail' => $product_detail,
            'product_info' => $product_detail,
            'total_sale_qty' => $profit_sale[0]['quantity'],
            'total_sale' => $profit_sale[0]['quantity'] * $profit_sale[0]['avg_r'],

        );

        $reportList = $CI->parser->parse('report/productwise_profit_view', $data, true);
        return $reportList;
    }

    // doctor wise profit reporf form information
    public function profit_doctorwise_form()
    {
        $CI = &get_instance();
        $CI->load->model('Reports');
        $CI->load->model('manufacturers');
        $CI->load->model('Doctors');
        $CI->load->library('occational');
        $company_info = $CI->Reports->retrieve_company();
        $manufacturer_list = $CI->manufacturers->manufacturer_list_report();
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $company_info = $CI->Reports->retrieve_company();
        $data = array(
            'title' => display('profit_report_manufacturer_wise'),
            'manufacturer' => $manufacturer_list,
            'doctors_list' => $CI->Doctors->all_doctor_list(),
        );

        $reportList = $CI->parser->parse('report/doctorwise_report', $data, true);
        return $reportList;
    }

    // doctor wise profit report
    public function profit_doctorwise($doc_id, $from_date, $to_date)
    {
        $CI = &get_instance();
        $CI->load->model('Reports');
        $CI->load->model('Doctors');
        $CI->load->library('occational');
        $product_sales_info = $CI->Reports->profit_report_doctor_sale($doc_id, $from_date, $to_date);
        $total_price = 0;
        $total_qty = 0;
        foreach ($product_sales_info as $k => $v) {
            $product_sales_info[$k]['total_qty'] = formatQty($product_sales_info[$k]['total_qty']);
            $product_sales_info[$k]['total_price'] = formatAmount($product_sales_info[$k]['total_price']);
            $total_price += $v['total_price'];
            $total_qty += $v['total_qty'];
        }
        $doctor_info = $CI->Doctors->retrieve_doctor_editdata($doc_id);
        $company_info = $CI->Reports->retrieve_company();
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $company_info = $CI->Reports->retrieve_company();
        $data = array(
            'title' => display('profit_report_manufacturer_wise'),
            'currency' => $currency_details[0]['currency'],
            'position' => $currency_details[0]['currency_position'],
            'from' => $from_date,
            'to' => $to_date,
            'logo' => $currency_details[0]['logo'],
            'doctor_info' => $doctor_info,
            'doctors_list' => $CI->Doctors->all_doctor_list(),
            'total_sale' => formatAmount($total_price),
            'total_qty' => formatQty($total_qty),
            'product_info' => $product_sales_info,
        );
        $reportList = $CI->parser->parse('report/profit_report_doctor', $data, true);
        return $reportList;
    }
}