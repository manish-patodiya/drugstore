<?php
$CI = &get_instance();
$CI->load->model('Web_settings');
$Web_settings = $CI->Web_settings->retrieve_setting_editdata();
?>

<style>
.panel-body {
    font-size: 14px !important;
    height: 100% !important;
}
</style>

<!-- Printable area start -->
<script type="text/javascript">
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
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
            <h1><?php echo display('return_details') ?></h1>
            <small><?php echo display('return_details') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('return') ?></a></li>
                <li class="active"><?php echo display('return_details') ?></li>
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
if ($this->permission1->method('manufacturer_return_list', 'read')->access()) {?>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
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
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-8" style="display: inline-block;width: 60%">
                                    <address style="margin-bottom :5px;">
                                        {company_info}
                                        <?php $com = strtoupper($company_info[0]['company_name']);
    $com = implode("&nbsp&nbsp", explode(" ", $com));?>
                                        <h3 class="m-0">
                                            <b> <?php echo $com ?>
                                            </b>
                                        </h3>
                                        <h5 class="m-0 m-t-5" style="width:60%">{address} </h5>
                                        <h5 class="m-0 m-t-5">Phone No.: {mobile} </h5>
                                        <h5 class="m-0 m-t-5">D.L. No.: {dl_number} </h5>
                                        {/company_info}
                                        <!-- <h5 class="m-0 m-t-5"><abbr>{tax_regno}</abbr></h5> -->
                                    </address>
                                </div>
                                <div class="col-sm-4 text-left" style="display: inline-block;">
                                    <h4 class="m-0"><?php echo strtoupper(display('return')) ?></h4>
                                    <div><?php echo display('invoice_no') ?>: {invoice_no}</div>
                                    <div><?php echo display('purchase_id') ?>: {purchase_id}</div>
                                    <div class=""><?php echo display('billing_date') ?>: {final_date}</div>
                                    <div><?php echo display('manufacturer') ?>: {manufacturer_name}</div>
                                    <div><?php echo display('mobile') ?>: {mobile}</div>
                                </div>
                            </div>

                            <div class="table-responsive m-b-20">
                                <table class="table table-striped table-bordered" id='tbl-dtl'>
                                    <thead>
                                        <tr>
                                            <td class="text-center"><?php echo display('sl') ?></td>
                                            <td class="text-center"><?php echo display('product_name') ?></td>
                                            <td class="text-center"><?php echo display('quantity') ?></td>

                                            <?php if ($discount_type == 1) {?>
                                            <td class="text-center"><?php echo display('discount_percentage') ?> %</td>
                                            <?php } elseif ($discount_type == 2) {?>
                                            <td class="text-center"><?php echo display('discount') ?> </td>
                                            <?php } elseif ($discount_type == 3) {?>
                                            <td class="text-center"><?php echo display('fixed_dis') ?> </td>
                                            <?php }?>

                                            <td class="text-center"><?php echo display('purchase_price') ?></td>
                                            <td class="text-center"><?php echo display('ammount') ?></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {return_detail}
                                        <tr>
                                            <td class="text-center">{sl}</td>
                                            <td class="text-center">{product_name} - ({product_model})
                                            </td>
                                            <td align="center">{ret_qty}</td>

                                            <?php if ($discount_type == 1) {?>
                                            <td align="center">{deduction}</td>
                                            <?php } else {?>
                                            <td align="center">
                                                <?php echo (($position == 0) ? "$currency {deduction}" : "{deduction} $currency") ?>
                                            </td>
                                            <?php }?>

                                            <td align="center">
                                                <?php echo (($position == 0) ? "$currency {product_rate}" : "{product_rate} $currency") ?>
                                            </td>
                                            <td align="center">
                                                <?php echo (($position == 0) ? "$currency {total_ret_amount}" : "{total_ret_amount} $currency") ?>
                                            </td>
                                        </tr>
                                        {/return_detail}
                                    </tbody>
                                    <tfoot>
                                        <td align="center" colspan="1" style="border: 0px">
                                            <b><?php echo display('total') ?>:</b>
                                        </td>
                                        <td style="border: 0px"></td>
                                        <td align="center" style="border: 0px"><b>{subTotal_quantity}</b></td>
                                        <td style="border: 0px"></td>
                                        <td style="border: 0px"></td>

                                        <td align="center" style="border: 0px">
                                            <b><?php echo (($position == 0) ? "$currency {subTotal_ammount}" : "{subTotal_ammount} $currency") ?></b>
                                        </td>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">

                                <div class="col-xs-8" style="display: inline-block;width: 66%">
                                    <p><strong>Note : </strong>{note}</p>

                                    <!-- <div
                                        style="float:left;width:40%;text-align:center;border-top:1px solid #e4e5e7;margin-top: 110px;font-weight: bold;">
                                        <?php echo display('received_by') ?>
                                    </div> -->
                                </div>
                                <div class="col-xs-4" style="display: inline-block;">

                                    <table class="table">
                                        <?php
if ($return_detail[0]['total_deduct'] != 0) {
        ?>
                                        <tr>
                                            <td style="border-top: 0; border-bottom: 0;">
                                                <?php echo display('deduction') ?> : </td>
                                            <td style="border-top: 0; border-bottom: 0;">
                                                <?php echo (($position == 0) ? "$currency {total_deduct}" : "{total_deduct} $currency") ?>
                                            </td>
                                        </tr>
                                        <?php }

    ?>
                                        <tr>
                                            <td class="grand_total"><?php echo display('grand_total') ?> :</td>
                                            <td class="grand_total">
                                                <?php echo (($position == 0) ? "$currency {total_amount}" : "{total_amount} $currency") ?>
                                            </td>
                                        </tr>

                                    </table>
                                    <!-- <div
                                        style="float:left;width:90%;text-align:center;border-top:1px solid #e4e5e7;margin-top: 100px;font-weight: bold;">
                                        <?php echo display('authorised_by') ?>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel-footer text-left">
                        <a class="btn btn-danger"
                            href="<?php echo base_url('Cretrun_m'); ?>"><?php echo display('cancel') ?></a>
                        <button class="btn btn-info" onclick="printDiv('printableArea')"><span
                                class="fa fa-print"></span></button>

                    </div>
                </div>
            </div>
        </div>
        <?php
} else {
    ?>
        <div class="row">
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
        </div>
        <?php
}
?>
    </section> <!-- /.content -->
</div> <!-- /.content-wrapper -->