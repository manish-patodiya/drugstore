<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Lproduct
{
    /*
     ** Retrieve  Quize List From DB
     */
    public function product_list()
    {
        $CI = &get_instance();
        $CI->load->model('Products');
        $CI->load->model('Web_settings');
        $data['total_product'] = $CI->Products->count_product();

        $productList = $CI->parser->parse('product/product', $data, true);
        return $productList;
    }

    //Sub Category Add
    public function product_add_form()
    {
        $CI = &get_instance();
        $CI->load->model('Products');
        $CI->load->model('manufacturers');
        $CI->load->model('Categories');
        $CI->load->model('Units');
        $manufacturer = $CI->manufacturers->manufacturer_list("110", "0");
        $category_list = $CI->Categories->category_list_product();
        $unit_list = $CI->Units->unit_list();
        $type_list = $CI->Products->type_list_product();
        $tax_list = $CI->db->select('*')
            ->from('tax_information')
            ->get()
            ->result();
        $taxfield = $CI->db->select('tax_name,default_value')
            ->from('tax_settings')
            ->get()
            ->result_array();
        $data = array(
            'title' => display('add_product'),
            'manufacturer' => $manufacturer,
            'category_list' => $category_list,
            'tax_list' => $tax_list,
            'taxfield' => $taxfield,
            'type_list' => $type_list,
            'unit_list' => $unit_list,
        );
        $productForm = $CI->parser->parse('product/add_product_form', $data, true);
        return $productForm;
    }
    public function insert_product($data)
    {
        $CI = &get_instance();
        $CI->load->model('Products');
        $result = $CI->Products->product_entry($data);
        if ($result == 1) {
            return true;
        } else {
            return false;
        }
    }
    //Product Edit Data
    public function product_edit_data($product_id)
    {
        $CI = &get_instance();
        $CI->load->model('Products');
        $CI->load->model('manufacturers');
        $CI->load->model('Categories');
        $CI->load->model('Units');
        $unit_list = $CI->Units->unit_list();

        $product_detail = $CI->Products->retrieve_product_editdata($product_id);
        $manufacturer_product_detail = $CI->Products->manufacturer_product_editdata($product_id);
        @$manufacturer_id = $product_detail[0]['manufacturer_id'];
        $type_list = $CI->Products->type_list_product();
        @$type_name = $product_detail[0]['product_model'];
        $selecetedtype = $CI->Products->selected_medicine_type($type_name);
        @$category_id = $product_detail[0]['category_id'];
        $manufacturer_list = $CI->manufacturers->manufacturer_list();
        $manufacturer_selected = $CI->Products->manufacturer_selected($product_id);
        @$manuid = $manufacturer_selected[0]['manufacturer_id'];
        $manuseltcted = $CI->Products->selected_mnuf($manuid);
        $category_list = $CI->Categories->category_list_product();
        $category_selected = $CI->Categories->category_search_item($category_id);
        $unit_selected = $CI->Units->selected_unit($product_detail[0]['unit']);

        $tax_list = $CI->db->select('*')
            ->from('tax_information')
            ->get()
            ->result();

        $taxfield = $CI->db->select('tax_name,default_value')
            ->from('tax_settings')
            ->get()
            ->result_array();
        $i = 0;
        foreach ($taxfield as $taxs) {
            $tax = 'tax' . $i;
            $data[$tax] = (isset($product_detail[0][$tax]) ?: 0) * 100;
            $i++;
        }

        $data['title'] = display('edit_your_product');
        $data['product_id'] = $product_detail[0]['product_id'];
        $data['product_name'] = $product_detail[0]['product_name'];
        $data['price'] = $product_detail[0]['price'];
        $data['mrp'] = $product_detail[0]['mrp'];
        $data['product_model'] = $product_detail[0]['product_model'];
        $data['product_details'] = $product_detail[0]['product_details'];
        $data['generic_name'] = $product_detail[0]['generic_name'];
        $data['strength'] = $product_detail[0]['strength'];
        $data['product_location'] = $product_detail[0]['product_location'];
        $data['box_size'] = $product_detail[0]['box_size'];
        $data['image'] = $product_detail[0]['image'];
        $data['unit'] = $product_detail[0]['unit'];
        $data['pr_details'] = $product_detail;
        $data['manufacturer_list'] = $manufacturer_list;
        $data['manufacturer_selected'] = $manuseltcted;
        $data['category_list'] = $category_list;
        $data['category_selected'] = $category_selected;
        $data['tax_list'] = $tax_list;
        $data['tax_selecete'] = $product_detail[0]['tax'] * 100;
        $data['type_list'] = $type_list;
        $data['manuprice'] = $manufacturer_selected[0]['manufacturer_price'];
        $data['manupprice'] = $manufacturer_selected[0]['manufacturer_pack_price'];
        $data['low_stock'] = $manufacturer_selected[0]['low_stock'] / $manufacturer_selected[0]['strength'];
        $data['seleceted_type'] = $selecetedtype;
        $data['manufacturer_product_data'] = $manufacturer_product_detail;
        $data['taxfield'] = $taxfield;
        $data['unit_list'] = $unit_list;
        $data['seleceted_unit'] = $unit_selected;
//             echo '<pre>';
        //             print_r($data);exit();

        $chapterList = $CI->parser->parse('product/edit_product_form', $data, true);

        return $chapterList;
    }
    //Search Product
    public function product_search_list($product_id)
    {
        $CI = &get_instance();
        $CI->load->model('Products');
        $CI->load->model('Web_settings');
        $products_list = $CI->Products->product_search_item($product_id);
        $all_product_list = $CI->Products->all_product_list();

        $i = 0;
        if ($products_list) {
            foreach ($products_list as $k => $v) {$i++;
                $products_list[$k]['sl'] = $i;
                $manufacinfo = $CI->db->select('a.manufacturer_id,b.manufacturer_name')->from('manufacturer_product a')->join('manufacturer_information b', 'a.manufacturer_id=b.manufacturer_id')->where('a.product_id', $products_list[$k]['product_id'])->get()->row();
                $products_list[$k]['manufacturer_id'] = $manufacinfo->manufacturer_id;
                $products_list[$k]['manufacturer_name'] = $manufacinfo->manufacturer_name;
            }

            $currency_details = $CI->Web_settings->retrieve_setting_editdata();
            $data = array(
                'title' => display('manage_product'),
                'products_list' => $products_list,
                'all_product_list' => $all_product_list,
                'links' => "",
                'currency' => $currency_details[0]['currency'],
                'position' => $currency_details[0]['currency_position'],
            );
            $productList = $CI->parser->parse('product/product', $data, true);
            return $productList;
        } else {
            redirect('Cproduct/manage_product');
        }
    }
    //Product Details
    public function product_details($product_id)
    {
        $CI = &get_instance();
        $CI->load->model('Products');
        $CI->load->library('occational');
        $CI->load->model('Web_settings');
        $details_info = $CI->Products->product_details_info($product_id);
        $purchaseData = $CI->Products->product_purchase_info($product_id);

        $totalPurchase = 0;
        $totalPrcsAmnt = 0;

        if (!empty($purchaseData)) {
            foreach ($purchaseData as $k => $v) {
                $purchaseData[$k]['final_date'] = $CI->occational->dateConvert($purchaseData[$k]['purchase_date']);
                $totalPrcsAmnt = ($totalPrcsAmnt + $purchaseData[$k]['total_amount']);
                $totalPurchase = ($totalPurchase + $purchaseData[$k]['quantity']);
            }
        }

        $salesData = $CI->Products->invoice_data($product_id);

        $totalSales = 0;
        $totaSalesAmt = 0;
        if (!empty($salesData)) {
            foreach ($salesData as $k => $v) {
                $salesData[$k]['final_date'] = $CI->occational->dateConvert($salesData[$k]['date']);
                $totalSales = ($totalSales + $salesData[$k]['quantity']);
                $totaSalesAmt = ($totaSalesAmt + $salesData[$k]['total_price']);
            }
        }

        $stock = ($totalPurchase - $totalSales);
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $data = array(
            'title' => display('product_report'),
            'product_name' => $details_info[0]['product_name'],
            'product_model' => $details_info[0]['product_model'],
            'price' => $details_info[0]['price'],
            'purchaseTotalAmount' => number_format($totalPrcsAmnt, 2, '.', ','),
            'salesTotalAmount' => number_format($totaSalesAmt, 2, '.', ','),
            'total_purchase' => $totalPurchase,
            'total_sales' => $totalSales,
            'purchaseData' => $purchaseData,
            'salesData' => $salesData,
            'stock' => $stock,
            'product_statement' => 'Cproduct/product_sales_manufacturer_rate/' . $product_id,
            'currency' => $currency_details[0]['currency'],
            'position' => $currency_details[0]['currency_position'],
        );

        $productList = $CI->parser->parse('product/product_details', $data, true);
        return $productList;
    }

    //Product Details
    public function product_sales_manufacturer_rate($product_id, $startdate, $enddate)
    {
        $CI = &get_instance();
        $CI->load->model('Products');
        $CI->load->model('Web_settings');
        $CI->load->library('occational');

        //Product Summary
        $details_info = $CI->Products->product_details_info($product_id);
        $opening_balance = $CI->Products->previous_stock_data($product_id, $startdate);
        //Stock details.
        $salesData = $CI->Products->invoice_data_manufacturer_rate($product_id, $startdate, $enddate);

        $stock = $opening_balance[0]['quantity'];
        $totalIn = 0;
        $totalOut = 0;
        $totalstock = 0;
        $gtotal_sell = 0;
        $gtotal_purchase = 0;

        if (!empty($salesData)) {
            foreach ($salesData as $k => $v) {
                $salesData[$k]['fdate'] = $CI->occational->dateConvert($salesData[$k]['date']);

                if ($salesData[$k]['account'] == "a") {
                    $salesData[$k]['in'] = round($salesData[$k]['quantity'], 0);
                    $salesData[$k]['total_purchase'] = $salesData[$k]['total_price'];
                    $salesData[$k]['total_sell'] = 0;
                    $salesData[$k]['out'] = 0;
                    $stock = $stock + $salesData[$k]['out'] + $salesData[$k]['in'];
                    $totalIn += $salesData[$k]['in'];

                    $gtotal_purchase += $salesData[$k]['total_purchase'];
                } else {
                    $salesData[$k]['out'] = round($salesData[$k]['quantity'], 0);
                    $salesData[$k]['in'] = 0;
                    $stock = $stock + $salesData[$k]['out'] + $salesData[$k]['in'];
                    $totalOut += $salesData[$k]['out'];

                    $salesData[$k]['total_purchase'] = 0;
                    $salesData[$k]['total_sell'] = $salesData[$k]['total_price'];
                    $gtotal_sell += $salesData[$k]['total_sell'];
                }
                $salesData[$k]['stock'] = $stock;

                $totalstock = $salesData[$k]['stock'];
            }
        }
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $company_info = $CI->Products->retrieve_company();

        $data = array(
            'title' => display('product_statement'),
            'product_id' => $details_info[0]['product_id'],
            'product_name' => $details_info[0]['product_name'],
            'product_model' => $details_info[0]['product_model'],
            'startdate' => $startdate,
            'enddate' => $enddate,
            'price' => $details_info[0]['price'],
            'totalIn' => $totalIn,
            'totalOut' => $totalOut,
            'totalstock' => $totalstock,
            'gtotal_sell' => number_format($gtotal_sell, 2, '.', ','),
            'gtotal_purchase' => number_format($gtotal_purchase, 2, '.', ','),
            'opening_balance' => round($opening_balance[0]['quantity'], 0),
            'salesData' => $salesData,
            'company_info' => $company_info,
            'currency' => $currency_details[0]['currency'],
            'position' => $currency_details[0]['currency_position'],
        );
        $productList = $CI->parser->parse('product/product_sales_manufacturer_rate', $data, true);
        return $productList;
    }

    //Medicine type part
    public function type_list()
    {
        $CI = &get_instance();
        $CI->load->model('Products');
        $type_list = $CI->Products->type_list(); //It will get only Credit Customers
        $i = 0;
        $total = 0;
        if (!empty($type_list)) {
            foreach ($type_list as $k => $v) {$i++;
                $type_list[$k]['sl'] = $i;
            }
        }
        $data = array(
            'title' => display('type_list'),
            'type_list' => $type_list,

        );
        $customerList = $CI->parser->parse('product/add_type_form', $data, true);
        return $customerList;
    }
    //Sub type Add
    public function type_add_form()
    {
        $CI = &get_instance();
        $CI->load->model('Products');
        $type_list = $CI->Products->type_list(); //It will get only Credit Customers
        $i = 0;
        $total = 0;
        if (!empty($type_list)) {
            foreach ($type_list as $k => $v) {$i++;
                $type_list[$k]['sl'] = $i;
            }
        }
        $data = array(
            'title' => display('add_type'),
            'type_list' => $type_list,
        );
        $customerForm = $CI->parser->parse('product/add_type_form', $data, true);
        return $customerForm;
    }

    //customer Edit Data
    public function type_edit_data($type_id)
    {
        $CI = &get_instance();
        $CI->load->model('Products');
        $type_detail = $CI->Products->retrieve_type_editdata($type_id);
        $data = array(
            'type_id' => $type_detail[0]['type_id'],
            'type_name' => $type_detail[0]['type_name'],
            'status' => $type_detail[0]['status'],
        );
        $chapterList = $CI->parser->parse('product/edit_type_form', $data, true);
        return $chapterList;
    }
}