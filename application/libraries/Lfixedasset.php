<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Lfixedasset {
    /*
     * * Retrieve  Quize List From DB 
     */

    public function asset_list($links, $per_page, $page) {
        $CI = & get_instance();
        $CI->load->model('Fixedasset');
        $CI->load->model('Web_settings');
        $asset_list = $CI->Fixedasset->asset_list($per_page, $page);
        $i = 0;
        if (!empty($asset_list)) {
            foreach ($asset_list as $k => $v) {
                $i++;
                $asset_list[$k]['sl'] = $i + $CI->uri->segment(3);
            }
        }

        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $data = array(
            'title'            => display('fixed_assets_list'),
            'asset_list'       => $asset_list,
            'links'            => $links,
            'currency'         => $currency_details[0]['currency'],
            'position'         => $currency_details[0]['currency_position'],
        );

        $asset_list = $CI->parser->parse('fixedassets/asset_list', $data, true);
        return $asset_list;
    }

    //Sub Category Add
    public function fixedasset_add_form() {
        $CI = & get_instance();
        $CI->load->model('Fixedasset');
        $data = array(
            'title'     => display('add_fixed_assets'),
           
        );
        $assetform = $CI->parser->parse('fixedassets/add_asset_form', $data, true);
        return $assetform;
    }

    public function insert_assets($data) {
        $CI = & get_instance();
        $CI->load->model('Fixedasset');
        $result = $CI->Fixedasset->asset_entry($data);
        if ($result == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    //Asset Purchase add form
    public function purchase_add_form() {
        $CI = & get_instance();
        $CI->load->model('Web_settings');
        $CI->load->model('Fixedasset');
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $store_list       = 0;
        $bank_list        = $CI->Fixedasset->bank_list();
        $data = array(
            'title'           => display('add_purchase'),
            'store_list'      => $store_list,
            'bank_list'       => $bank_list,
        );
        $purchaseForm = $CI->parser->parse('fixedassets/purchase_form', $data, true);
        return $purchaseForm;
    }
    //Fixed Assets Edit Data
    public function fixed_asset_edit_data($item_code) {
        $CI = & get_instance();
        $CI->load->model('Fixedasset');
        $asset_data = $CI->Fixedasset->retrieve_asset_editdata($item_code);
        $data = array(
            'title'          => display('edit_fixed_asset'),
            'id'             => $asset_data[0]['id'],
            'item_code'      => $asset_data[0]['item_code'],
            'item_name'      => $asset_data[0]['item_name'],
            'price'          => $asset_data[0]['price'],
        );
        $chapterList = $CI->parser->parse('fixedassets/edit_asset_form', $data, true);

        return $chapterList;
    }
// Fixed Asset purchase edit data
      public function purchase_edit_data($purchase_id) {
        $CI = & get_instance();
        $CI->load->model('Fixedasset');
        $purchase_data = $CI->Fixedasset->retrieve_purchase_editdata($purchase_id);
        $purchase_detail = $CI->Fixedasset->retrieve_asset_purchase_detailsdata($purchase_id);
        $bank_list        = $CI->Fixedasset->bank_list();

        if (!empty($purchase_detail)) {
            $i = 0;
            foreach ($purchase_detail as $k => $v) {
                $i++;
                $purchase_detail[$k]['sl'] = $i;
            }
        }
        $data = array(
            'title'            => display('edit_purchase_form'),
            'id'               => $purchase_data[0]['purchase_id'],
            'supplier_id'      => $purchase_data[0]['supplier_id'],
            //'supplier_code'=> $purchase_data[0]['supplier_code'],
            'supplier_name'    => $purchase_data[0]['supplier_name'],
            'address'          => $purchase_data[0]['address'],
            'mobile'           => $purchase_data[0]['mobile'],
            'date'             => $purchase_data[0]['p_date'],
            'gtotal'           => $purchase_data[0]['grand_total'],
            'type'             => $purchase_data[0]['payment_type'],
            'bank_id'          => $purchase_data[0]['bank_id'],
            'purchase_details' => $purchase_detail,
             'bank_list'       => $bank_list,
        );
        $chapterList = $CI->parser->parse('fixedassets/edit_purchase_form', $data, true);

        return $chapterList;
    }
    //Search Product
    public function product_search_list($product_id) {
        $CI = & get_instance();
        $CI->load->model('Products');
        $CI->load->model('Web_settings');
        $products_list = $CI->Products->product_search_item($product_id);
        $all_product_list = $CI->Products->all_product_list();

        $i = 0;
        if ($products_list) {
            foreach ($products_list as $k => $v) {
                $i++;
                $products_list[$k]['sl'] = $i;
            }

            $currency_details = $CI->Web_settings->retrieve_setting_editdata();
            $data = array(
            'title'            => display('manage_product'),
            'products_list'    => $products_list,
            'all_product_list' => $all_product_list,
            'links'            => "",
            'currency'         => $currency_details[0]['currency'],
            'position'         => $currency_details[0]['currency_position'],
            );
            $productList = $CI->parser->parse('product/product', $data, true);
            return $productList;
        } else {
            redirect('Cproduct/manage_product');
        }
    }

    //Product Details
    public function product_details($product_id) {
        $CI = & get_instance();
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
                $totaSalesAmt = ($totaSalesAmt + $salesData[$k]['total_amount']);
            }
        }

        $stock = ($totalPurchase - $totalSales);
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $data = array(
            'title'              => display('product_report'),
            'product_name'       => $details_info[0]['product_name'],
            'product_model'      => $details_info[0]['product_code'],
            'price'              => $details_info[0]['sale_price'],
            'purchaseTotalAmount'=> number_format($totalPrcsAmnt, 2, '.', ','),
            'salesTotalAmount'   => number_format($totaSalesAmt, 2, '.', ','),
            'total_purchase'     => $totalPurchase,
            'total_sales'        => $totalSales,
            'purchaseData'       => $purchaseData,
            'salesData'          => $salesData,
            'stock'              => $stock,
            'product_statement'  => 'Cproduct/product_sales_supplier_rate/' . $product_id,
            'currency'           => $currency_details[0]['currency'],
            'position'           => $currency_details[0]['currency_position'],
        );

        $productList = $CI->parser->parse('product/product_details', $data, true);
        return $productList;
    }
    // asset purchase list
   public function asset_purchase_list($links, $per_page, $page) {
        $CI = & get_instance();
        $CI->load->model('Fixedasset');
        $CI->load->model('Web_settings');
        $purchase_list = $CI->Fixedasset->asset_purchase_list($per_page, $page);
        $i = 0;
        if (!empty($purchase_list)) {
            foreach ($purchase_list as $k => $v) {
                $i++;
                $purchase_list[$k]['sl'] = $i + $CI->uri->segment(3);
            }
        }

        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $data = array(
            'title'            => display('fixed_assets_purchase_list'),
            'purchase_list'    => $purchase_list,
            'links'            => $links,
            'currency'         => $currency_details[0]['currency'],
            'position'         => $currency_details[0]['currency_position'],
        );

        $asset_list = $CI->parser->parse('fixedassets/asset_purchase_list', $data, true);
        return $asset_list;
    }
         public function purchase_pad_print($purchase_id) {

        $CI = & get_instance();
        $CI->load->model('Fixedasset');
        $CI->load->model('Purchases');
        $CI->load->model('Web_settings');
        $CI->load->library('occational');
        $CI->load->library('numbertowords');
        $purchase_detail = $CI->Fixedasset->purchase_details_data($purchase_id);
        $supplier_info =$CI->Fixedasset->supplier_data($purchase_detail[0]['supplier_id']); 
        if (!empty($purchase_detail)) {
            $i = 0;
            $total_amount = 0;
            foreach ($purchase_detail as $k => $v) {
                $i++;
                $purchase_detail[$k]['sl'] = $i;
            }

            foreach ($purchase_detail as $k => $v) {
                $purchase_detail[$k]['convert_date'] = $CI->occational->dateConvert($purchase_detail[$k]['p_date']);
                $total_amount += $purchase_detail[$k]['qty']*$purchase_detail[$k]['price'];
            }
        }
        $amount_inword = $CI->numbertowords->convert_number($purchase_detail[0]['grand_total']);
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $company_info = $CI->Purchases->retrieve_company();
        $data = array(
            'title'             => display('purchase_pad_print'),
            'purchase_id'       => $purchase_detail[0]['purchase_id'],
            'final_date'        => $purchase_detail[0]['convert_date'],
            'sub_total_amount'  => number_format($purchase_detail[0]['grand_total'], 2, '.', ','),
            'ptotal_amount'     =>  number_format($total_amount, 2, '.', ','),
            'supplier_name'  => $supplier_info[0]['supplier_name'],
            'supplier_mobile'=> $supplier_info[0]['mobile'],
            'purchase_all_data' => $purchase_detail,
            'company_info'      => $company_info,
            'currency'          => $currency_details[0]['currency'],
            'position'          => $currency_details[0]['currency_position'],
            'am_inword'         => $amount_inword,
        );

        $chapterList = $CI->parser->parse('fixedassets/purchase_pad_print', $data, true);
        return $chapterList;
    }

  
    
   
}

?>