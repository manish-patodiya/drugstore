<?php
$CI = &get_instance();
$CI->load->model('Web_settings');
$Web_settings = $CI->Web_settings->retrieve_setting_editdata();
?>

<!-- Printable area start -->
<script type="text/javascript">
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    console.log(printContents);
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    // document.body.style.marginTop="-45px";
    window.print();
    document.body.innerHTML = originalContents;
}
</script>
<!-- Printable area end -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('purchase_detail') ?></h1>
            <small><?php echo display('purchase_detail') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('invoice') ?></a></li>
                <li class="active"><?php echo display('purchase_detail') ?></li>
            </ol>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Alert Message -->
        <?php
$message = $this->session->userdata('message');
if (isset($message)) {
    ?>
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <?php echo $message ?>
        </div>
        <?php
$this->session->unset_userdata('message');
}
$error_message = $this->session->userdata('error_message');
if (isset($error_message)) {
    ?>
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <?php echo $error_message ?>
        </div>
        <?php
$this->session->unset_userdata('error_message');
}
?>
        <?php
if ($this->permission1->method('manage_invoice', 'read')->access()) {?>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <style>
                    .panel-body {
                        font-size: 14px !important;
                        height: 100% !important;
                    }
                    </style>
                    <div id="printableArea">
                        <style>
                        #table-dtl thead,
                        tfoot tr th,
                        td {
                            padding: 5px 8px !important;
                        }

                        #table-dtl tbody tr td {
                            padding: 0 8px !important;
                            border-top: 0 !important;
                            border-bottom: 0 !important;
                            table-layout: fixed !important;
                        }


                        #amt-table tbody tr th,
                        #amt-table tbody tr td {
                            padding: 0 !important;
                        }

                        .panel-body {
                            font-size: 10px;
                            height: 50vh;
                            border: 1px solid #e4e5e7;
                            margin: 0.3cm;
                        }

                        @media print {
                            @page {
                                margin: 0;
                            }
                        }
                        </style>
                        <div id="printableArea">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-8 text-left" style="display: inline-block; width: 60%;">
                                        <address style="margin-bottom :5px;">
                                            {company_info}
                                            <?php $com = strtoupper($company_info[0]['company_name']);
    $com = implode("&nbsp&nbsp", explode(" ", $com));?>
                                            <h3 class="m-0">
                                                <b> <?php echo $com; ?>
                                                </b>
                                            </h3>
                                            <h5 class="m-0 m-t-5" style="width:60%">{address} </h5>
                                            <h5 class="m-0 m-t-5">Phone No.: {mobile} </h5>
                                            <h5 class="m-0 m-t-5">D.L. No.: {dl_number} </h5>
                                            {/company_info}
                                            <!-- <h5 class="m-0 m-t-5"><abbr>{tax_regno}</abbr></h5> -->
                                        </address>
                                    </div>


                                    <div class="col-sm-4 text-left" style="display: inline-block;margin-left: 5px;">
                                        <h4 class="m-t-0"><?php echo display('purchase') ?></h4>
                                        <div><?php echo display('voucher_no') ?>: {chalan_no}</div>
                                        <div><?php echo display('purchase_id') ?>: {purchase_id}</div>
                                        <div><?php echo display('billing_date') ?>: {purchase_date}</div>
                                        <div><?php echo display('manufacturer_name') ?>: {manufacturer_name}</div>
                                    </div>
                                </div>

                                <div class="table-responsive m-b-20">
                                    <table class="table table-striped table-bordered" id="tbl-dtl">
                                        <thead>
                                            <tr>
                                                <td class="text-center" style="width:1%"><?php echo display('sl') ?>
                                                </td>
                                                <td class="text-left">
                                                    <?php echo display('product_name') ?></td>
                                                <td class="text-center" style="width:4%"><?php echo 'Pack' ?></td>
                                                <td class="text-center" style="width:10%">
                                                    <?php echo display('batch_id') ?>
                                                </td>
                                                <td class="text-center" style="width:4%">
                                                    <?php echo 'Exp.' ?></td>
                                                <td class="text-center" style="width:8%"><?php echo "Qty." ?>
                                                </td>
                                                <td class="text-center" style="width:8%">
                                                    <?php echo display('price') ?></td>
                                                <td class="text-center" style="width:8%">
                                                    <?php echo "MRP" ?></td>
                                                <td class="text-center" style="width:5%"><?php echo 'Dis.' ?></td>
                                                <td class="text-center" style="width:5%"><?php echo 'GST' ?></td>
                                                <td class="text-center" style="width:9%"><?php echo 'GST Amt.' ?></td>
                                                <td class="text-center" style="width:8%">
                                                    <?php echo display('ammount') ?>
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {purchase_info}
                                            <tr>
                                                <td align="center">{sl}</td>
                                                <td align="left"> {product_name} </td>
                                                <td class="text-center"> {strength} </td>
                                                <td class="text-center"> {batch_id} </td>
                                                <td class="text-center"> {expeire_date} </td>
                                                <td align="center">{pack_quantity} {free_qty}</td>
                                                <td align="center">{manufacturer_pack_price}</td>
                                                <td align="center">{mrp}</td>
                                                <td align="center">{discount}%</td>
                                                <td align="center">{tax}%</td>
                                                <td align="right">{tax_price}</td>
                                                <td align="right">{total_amount}</td>
                                            </tr>
                                            {/purchase_info}
                                        </tbody>
                                        <tfoot>
                                            <td align="right" colspan="10" style="border: 0px;">
                                                <b><?php echo display('sub_total') ?>:</b>
                                            </td>

                                            <td align="right" colspan="1" style="border: 0px">
                                                <b>{total_tax}</b>
                                            </td>
                                            <td class="text-right" align="center" style="border: 0px">
                                                <b>{sub_total}</b>
                                            </td>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-xs-8" style="display: inline-block;width: 66%">
                                        <p></p>
                                        <p><strong>{purchase_details}</strong></p>
                                    </div>
                                    <div class="col-xs-4" style="display: inline-block;">
                                        <table class="table" id="amt-table">
                                            <?php if ($total_discount != '0.00') {?>
                                            <tr>
                                                <th style="border-top: 0; border-bottom: 0;">
                                                    <?php echo display('total_discount') ?> : </th>
                                                <td class="text-right" style="border-top: 0; border-bottom: 0;">
                                                    {total_discount}
                                                </td>
                                            </tr>
                                            <?php }?>

                                            <?php if ($cgst) {?>
                                            <tr>
                                                <th style="border-top: 0; border-bottom: 0;">
                                                    <?php echo 'SGST' ?> : </th>
                                                <td class="text-right" style="border-top: 0; border-bottom: 0;">
                                                    {cgst}
                                                </td>
                                            </tr>
                                            <?php }?>

                                            <?php if ($cgst) {?>
                                            <tr>
                                                <th style="border-top: 0; border-bottom: 0;">
                                                    <?php echo "CGST" ?> : </th>
                                                <td class="text-right" style="border-top: 0; border-bottom: 0;">
                                                    {cgst}
                                                </td>
                                            </tr>
                                            <?php }?>

                                            <?php if ($grand_total) {?>
                                            <tr>
                                                <th style="border-top: 0; border-bottom: 0;">
                                                    <?php echo display('grand_total') ?> : </th>
                                                <td class="text-right" style="border-top: 0; border-bottom: 0;">
                                                    {grand_total}
                                                </td>
                                            </tr>
                                            <?php }?>

                                            <?php if ($round_of != "0.00") {?>
                                            <tr>
                                                <th style="border-top: 0; border-bottom: 0;">
                                                    <?php echo 'Round off' ?> : </th>
                                                <td class="text-right" style="border-top: 0; border-bottom: 0;">
                                                    {round_of}
                                                </td>
                                            </tr>
                                            <?php }?>

                                            <?php if ($other_charges != "0.00") {?>
                                            <tr>
                                                <th style="border-top: 0; border-bottom: 0;">
                                                    <?php echo 'Other charges' ?> : </th>
                                                <td class="text-right" style="border-top: 0; border-bottom: 0;">
                                                    {other_charges}
                                                </td>
                                            </tr>
                                            <?php }?>

                                            <?php if ($net_total) {?>
                                            <tr>
                                                <th style="border-top: 0; border-bottom: 0;">
                                                    <?php echo display('net_total') ?> : </th>
                                                <td class="text-right" style="border-top: 0; border-bottom: 0;">
                                                    {net_total}
                                                </td>
                                            </tr>
                                            <?php }?>

                                        </table>

                                    </div>
                                    <!-- <div class="row">
                                        <div class="col-sm-6">
                                            <div
                                                style="float:left;width:40%;text-align:center;border-top:1px solid #e4e5e7;margin-top: 20px;font-weight: bold;">
                                                <?php echo display('received_by') ?>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div
                                                style="float:right;width:40%;text-align:center;border-top:1px solid #e4e5e7;margin-top: 20px;font-weight: bold;">
                                                <?php echo display('authorised_by') ?>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel-footer text-left">
                        <a class="btn btn-danger"
                            href="<?php echo base_url('Cinvoice'); ?>"><?php echo display('cancel') ?></a>
                        <button class="btn btn-info" onclick="printDiv('printableArea')"><span class="fa fa-print">
                            </span> Print</button>
                    </div>
                </div>
            </div>
        </div>
        <?php
} else {
    ?>
        <div class="col-sm-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo display('You do not have permission to access. Please contact with administrator.'); ?>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <?php
}
?>
    </section> <!-- /.content -->
</div> <!-- /.content-wrapper -->