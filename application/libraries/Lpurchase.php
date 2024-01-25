<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Lpurchase
{

    //Purchase add form
    public function purchase_add_form()
    {
        $CI = &get_instance();
        $CI->load->model('Purchases');
        $CI->load->model('Web_settings');
        $all_manufacturer = $CI->Purchases->select_all_manufacturer();
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $bank_list = $CI->Web_settings->bank_list();
        $data = array(
            'title' => display('add_purchase'),
            'all_manufacturer' => $all_manufacturer,
            'invoice_no' => $CI->auth->generator(10),
            'discount_type' => $currency_details[0]['discount_type'],
            'bank_list' => $bank_list,
        );
        $purchaseForm = $CI->parser->parse('purchase/add_purchase_form', $data, true);
        return $purchaseForm;
    }
    // Retrieve Purchase List
    public function purchase_list()
    {
        $CI = &get_instance();
        $CI->load->model('Purchases');
        $CI->load->model('Web_settings');
        $CI->load->library('occational');
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $company_info = $CI->Purchases->retrieve_company();
        $data = array(
            'title' => display('manage_purchase'),
            'company_info' => $company_info,
            'total_purhcase' => $CI->Purchases->count_purchase(),
        );

        $purchaseList = $CI->parser->parse('purchase/purchase', $data, true);
        return $purchaseList;
    }

// purchase info by invoice no
    public function purchase_list_invoice_no($invoice_no)
    {
        $CI = &get_instance();
        $CI->load->model('Purchases');
        $CI->load->model('Web_settings');
        $CI->load->library('occational');
        $purchases_list = $CI->Purchases->purchase_list_invoice_id($invoice_no);
        if (!empty($purchases_list)) {
            $j = 0;
            foreach ($purchases_list as $k => $v) {
                $purchases_list[$k]['final_date'] = $CI->occational->dateConvert($purchases_list[$j]['purchase_date']);
                $j++;
            }

            $i = 0;
            foreach ($purchases_list as $k => $v) {$i++;
                $purchases_list[$k]['sl'] = $i + $CI->uri->segment(3);
                if ($purchases_list[$k]['payment_type'] == 1) {
                    $purchases_list[$k]['payment_type'] = 'Cash Payment';
                }

                if ($purchases_list[$k]['payment_type'] == 2) {
                    $purchases_list[$k]['payment_type'] = 'Bank Payment';
                }
                if ($purchases_list[$k]['payment_type'] == 3) {
                    $purchases_list[$k]['payment_type'] = 'UPI Payment';
                }
                if ($purchases_list[$k]['payment_type'] == 4) {
                    $purchases_list[$k]['payment_type'] = 'Credit Card Payment';
                }
                if ($purchases_list[$k]['payment_type'] == 5) {
                    $purchases_list[$k]['payment_type'] = 'Due';
                }
            }
        }
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $data = array(
            'title' => display('manage_purchase'),
            'purchases_list' => $purchases_list,
            'links' => '',
            'currency' => $currency_details[0]['currency'],
            'position' => $currency_details[0]['currency_position'],
        );

        $purchaseList = $CI->parser->parse('purchase/purchase', $data, true);
        return $purchaseList;
    }
    //Purchase Item By Search
    public function purchase_by_search($manufacturer_id)
    {
        $CI = &get_instance();
        $CI->load->model('Purchases');
        $CI->load->library('occational');
        $purchases_list = $CI->Purchases->purchase_by_search($manufacturer_id);
        $j = 0;
        if (!empty($purchases_list)) {
            foreach ($purchases_list as $k => $v) {
                $purchases_list[$k]['final_date'] = $CI->occational->dateConvert($purchases_list[$j]['purchase_date']);
                $j++;
            }
            $i = 0;
            foreach ($purchases_list as $k => $v) {$i++;
                $purchases_list[$k]['sl'] = $i;
            }
        }
        $data = array(
            'title' => display('manage_purchase'),
            'purchases_list' => $purchases_list,
        );
        $purchaseList = $CI->parser->parse('purchase/purchase', $data, true);
        return $purchaseList;
    }

    //Insert Purchase
    public function insert_purchase($data)
    {
        $CI = &get_instance();
        $CI->load->model('Purchases');
        $CI->Purchases->purchase_entry($data);
        return true;
    }

    //purchase Edit Data
    public function purchase_edit_data($purchase_id)
    {
        $CI = &get_instance();
        $CI->load->model('Purchases');
        $CI->load->model('manufacturers');
        $CI->load->model('Web_settings');

        $purchase_detail = $CI->Purchases->retrieve_purchase_editdata($purchase_id);
        $manufacturer_id = $purchase_detail[0]['manufacturer_id'];
        $manufacturer_list = $CI->manufacturers->manufacturer_list("110", "0");
        $bank_list = $CI->Web_settings->bank_list();
        $manufacturer_selected = $CI->manufacturers->manufacturer_search_item($manufacturer_id);
        $sub_total = 0;
        $total_tax = 0;
        if (!empty($purchase_detail)) {
            $i = 0;
            foreach ($purchase_detail as $k => $v) {$i++;
                $purchase_detail[$k]['sl'] = $i;
                $purchase_detail[$k]['pack_quantity'] -= $purchase_detail[$k]['free'] ?: 0;
                $sub_total += $purchase_detail[$k]['total_amount'];
                $total_tax += $purchase_detail[$k]['tax_price'] = (($purchase_detail[$k]['total_amount'] - $purchase_detail[$k]['discount_price']) * $purchase_detail[$k]['tax']) / 100;
            }
        }
        $cgst = number_format($total_tax / 2, 2, '.', ',');
        $round_of = number_format($purchase_detail[0]['grand_total_amount'] - $sub_total - $total_tax + $purchase_detail[0]['total_discount'], 2, '.', ',');
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $data = array(
            'title' => display('purchase_edit'),
            'purchase_id' => $purchase_detail[0]['purchase_id'],
            'chalan_no' => $purchase_detail[0]['chalan_no'],
            'manufacturer_name' => $purchase_detail[0]['manufacturer_name'],
            'manufacturer_id' => $purchase_detail[0]['manufacturer_id'],
            'grand_total' => $purchase_detail[0]['grand_total_amount'],
            'purchase_details' => $purchase_detail[0]['purchase_details'],
            'paid_amt' => $purchase_detail[0]['paid_amt'],
            'purchase_date' => $purchase_detail[0]['purchase_date'],
            'invoice_date' => $purchase_detail[0]['invoice_date'] ?: $purchase_detail[0]['purchase_date'],
            'total_discount' => $purchase_detail[0]['total_discount'],
            'total_tax' => number_format($total_tax, 2, '.', ','),
            'bank_id' => $purchase_detail[0]['bank_id'],
            'purchase_info' => $purchase_detail,
            'manufacturer_list' => $manufacturer_list,
            'manufacturer_selected' => $manufacturer_selected,
            'discount_type' => $currency_details[0]['discount_type'],
            'bank_list' => $bank_list,
            'sub_total' => $sub_total,
            'round_of' => $round_of,
            'cgst' => $cgst,
            'paytype' => $purchase_detail[0]['payment_type'],
            'other_charges' => $purchase_detail[0]['other_charges'],
        );

        $chapterList = $CI->parser->parse('purchase/edit_purchase_form', $data, true);
        return $chapterList;
    }

    public function purchase_inovice_data($purchase_id)
    {
        $CI = &get_instance();
        $CI->load->model('Purchases');
        $CI->load->model('manufacturers');
        $CI->load->model('Web_settings');

        $purchase_detail = $CI->Purchases->retrieve_purchase_editdata($purchase_id);
        $manufacturer_id = $purchase_detail[0]['manufacturer_id'];
        $manufacturer_list = $CI->manufacturers->manufacturer_list("110", "0");
        $bank_list = $CI->Web_settings->bank_list();
        $manufacturer_selected = $CI->manufacturers->manufacturer_search_item($manufacturer_id);
        $company_info = $CI->Purchases->retrieve_company();
        $sub_total = 0;
        $total_tax = 0;
        if (!empty($purchase_detail)) {
            $i = 0;
            foreach ($purchase_detail as $k => $v) {$i++;
                $purchase_detail[$k]['purchase_date'] = date('d/m/Y', strtotime($purchase_detail[$k]['purchase_date']));
                $purchase_detail[$k]['pack_quantity'] -= ($purchase_detail[$k]['free'] ?: 0);
                $purchase_detail[$k]['free_qty'] = $purchase_detail[$k]['free'] ? " + " . $purchase_detail[$k]['free'] : "";
                $purchase_detail[$k]['discount'] = (int) $purchase_detail[$k]['discount'];
                $purchase_detail[$k]['sl'] = $i;
                $sub_total += $purchase_detail[$k]['total_amount'];
                $tax_price = number_format((($purchase_detail[$k]['total_amount'] - $purchase_detail[$k]['discount_price']) * $purchase_detail[$k]['tax']) / 100, 2, '.', ',');
                $total_tax += $purchase_detail[$k]['tax_price'] = (($purchase_detail[$k]['total_amount'] - $purchase_detail[$k]['discount_price']) * $purchase_detail[$k]['tax']) / 100;
                $purchase_detail[$k]['tax_price'] = $tax_price;
                $purchase_detail[$k]['expeire_date'] = date("m/y", strtotime($purchase_detail[$k]['expeire_date']));
            }
        }
        $total = $sub_total + $total_tax - $purchase_detail[0]['total_discount'];
        $round_of = number_format(round($total) - $total, 2, '.', ',');
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $cgst = number_format($total_tax / 2, 2, '.', ',');
        $data = array(
            'title' => display('purchase_edit'),
            'purchase_id' => $purchase_detail[0]['purchase_id'],
            'chalan_no' => $purchase_detail[0]['chalan_no'],
            'manufacturer_name' => $purchase_detail[0]['manufacturer_name'],
            'manufacturer_id' => $purchase_detail[0]['manufacturer_id'],
            'net_total' => round($total) + $purchase_detail[0]['other_charges'],
            'purchase_details' => $purchase_detail[0]['purchase_details'],
            'paid_amt' => $purchase_detail[0]['paid_amt'],
            'purchase_date' => $purchase_detail[0]['purchase_date'],
            'invoice_date' => $purchase_detail[0]['invoice_date'],
            'total_discount' => $purchase_detail[0]['total_discount'],
            'total_tax' => number_format($total_tax, 2, '.', ','),
            'bank_id' => $purchase_detail[0]['bank_id'],
            'purchase_info' => $purchase_detail,
            'manufacturer_list' => $manufacturer_list,
            'manufacturer_selected' => $manufacturer_selected,
            'discount_type' => $currency_details[0]['discount_type'],
            'bank_list' => $bank_list,
            'sub_total' => number_format($sub_total, 2, '.', ','),
            'company_info' => $company_info,
            'round_of' => $round_of,
            'grand_total' => number_format($total, 2, '.', ','),
            'cgst' => $cgst,
            'paytype' => $purchase_detail[0]['payment_type'],
            'other_charges' => $purchase_detail[0]['other_charges'],
        );

        $chapterList = $CI->parser->parse('purchase/purchase_html', $data, true);
        return $chapterList;
    }

    //Search purchase
    public function purchase_search_list($cat_id, $company_id)
    {
        $CI = &get_instance();
        $CI->load->model('Purchases');
        $category_list = $CI->Purchases->retrieve_category_list();
        $purchases_list = $CI->Purchases->purchase_search_list($cat_id, $company_id);
        $data = array(
            'title' => display('manage_purchase'),
            'purchases_list' => $purchases_list,
            'category_list' => $category_list,
        );
        $purchaseList = $CI->parser->parse('purchase/purchase', $data, true);
        return $purchaseList;
    }

    //Purchase details data
    public function purchase_details_data($purchase_id)
    {

        $CI = &get_instance();
        $CI->load->model('Purchases');
        $CI->load->model('Web_settings');
        $CI->load->library('occational');

        $purchase_detail = $CI->Purchases->purchase_details_data($purchase_id);

        if (!empty($purchase_detail)) {
            $i = 0;
            foreach ($purchase_detail as $k => $v) {$i++;
                $purchase_detail[$k]['sl'] = $i;
            }

            foreach ($purchase_detail as $k => $v) {
                $purchase_detail[$k]['convert_date'] = $CI->occational->dateConvert($purchase_detail[$k]['purchase_date']);
            }

        }

        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $company_info = $CI->Purchases->retrieve_company();
        $data = array(
            'title' => display('purchase_ledger'),
            'purchase_id' => $purchase_detail[0]['purchase_id'],
            'purchase_details' => $purchase_detail[0]['purchase_details'],
            'manufacturer_name' => $purchase_detail[0]['manufacturer_name'],
            'final_date' => $purchase_detail[0]['convert_date'],
            'sub_total_amount' => number_format($purchase_detail[0]['grand_total_amount'], 2, '.', ','),
            'chalan_no' => $purchase_detail[0]['chalan_no'],
            'purchase_all_data' => $purchase_detail,
            'company_info' => $company_info,
            'currency' => $currency_details[0]['currency'],
            'position' => $currency_details[0]['currency_position'],
        );

        $chapterList = $CI->parser->parse('purchase/purchase_detail', $data, true);
        return $chapterList;
    }
    // purchase list date to date
    public function purchase_list_date_to_date($start, $end)
    {
        $CI = &get_instance();
        $CI->load->model('Purchases');
        $CI->load->model('Web_settings');
        $CI->load->library('occational');
        $purchases_list = $CI->Purchases->purchase_list_date_to_date($start, $end);
        if (!empty($purchases_list)) {
            $j = 0;
            foreach ($purchases_list as $k => $v) {
                $purchases_list[$k]['final_date'] = $CI->occational->dateConvert($purchases_list[$j]['purchase_date']);
                $j++;
            }

            $i = 0;
            foreach ($purchases_list as $k => $v) {$i++;
                $purchases_list[$k]['sl'] = $i + $CI->uri->segment(3);
                if ($purchases_list[$k]['payment_type'] == 1) {
                    $purchases_list[$k]['payment_type'] = 'Cash Payment';
                }

                if ($purchases_list[$k]['payment_type'] == 2) {
                    $purchases_list[$k]['payment_type'] = 'Bank Payment';
                }
                if ($purchases_list[$k]['payment_type'] == 3) {
                    $purchases_list[$k]['payment_type'] = 'UPI Payment';
                }
                if ($purchases_list[$k]['payment_type'] == 4) {
                    $purchases_list[$k]['payment_type'] = 'Credit Card Payment';
                }
                if ($purchases_list[$k]['payment_type'] == 5) {
                    $purchases_list[$k]['payment_type'] = 'Due';
                }
            }
        }
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $data = array(
            'title' => display('manage_purchase'),
            'purchases_list' => $purchases_list,
            'links' => '',
            'currency' => $currency_details[0]['currency'],
            'position' => $currency_details[0]['currency_position'],
        );

        $purchaseList = $CI->parser->parse('purchase/purchase', $data, true);
        return $purchaseList;
    }
}