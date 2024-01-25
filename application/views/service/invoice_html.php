<?php
$CI = &get_instance();
$CI->load->model('Web_settings');
$Web_settings = $CI->Web_settings->retrieve_setting_editdata();
?>

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
            <h1><?php echo display('service') ?></h1>
            <small><?php echo display('service_details') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('service') ?></a></li>
                <li class="active"><?php echo display('service_details') ?></li>
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
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div id="printableArea">
                        <div class="panel-body">
                            <div class="row" style="border-bottom:2px #333 solid;">
                                <div class="col-sm-8" style="display: inline-block;width: 60%">
                                    <img src="<?php if (isset($Web_settings[0]['invoice_logo'])) {echo $Web_settings[0]['invoice_logo'];}?>"
                                        class="" alt="" style="width:30%">
                                    <br>
                                    <!-- <span
                                    class="label label-success-outline m-r-15 p-10"><?php echo display('billing_from') ?></span> -->
                                    <address style="margin-top:10px">
                                        {company_info}
                                        <!-- <strong>{company_name}</strong><br> -->
                                        <abbr><b><?php echo display('address') ?>:</b></abbr> {address}<br>
                                        <abbr><b><?php echo display('mobile') ?>:</b></abbr> {mobile}
                                        <!-- <br>
                                        <abbr><b><?php echo display('email') ?>:</b></abbr>
                                        {email}<br>
                                        <abbr><b><?php echo display('website') ?>:</b></abbr>
                                        {website} -->
                                        {/company_info}<br>
                                        <abbr>{tax_regno}</abbr>
                                    </address>
                                </div>
                                <div class="col-sm-4 text-left" style="display: inline-block;margin-left: 5px;">
                                    <h2 class="m-t-0"><?php echo display('service') ?></h2>
                                    <div><?php echo display('voucher_no') ?>: {invoice_id}</div>
                                    <div class="m-b-15"><?php echo display('hanging_over') ?>: {final_date}</div>

                                    <span
                                        class="label label-success-outline m-r-15"><?php echo display('billing_to') ?></span>

                                    <address style="margin-top:10px;width: 200px">
                                        <strong style="font-size: 20px; ">{customer_name} </strong><br>
                                        <?php if ($customer_address) {?>
                                        {customer_address}
                                        <?php }?>
                                        <br>
                                        <abbr><b><?php echo display('mobile') ?>:</b></abbr>
                                        <?php if ($customer_mobile) {?>
                                        {customer_mobile}
                                        <?php }if ($customer_email) {
    ?>
                                        <br>
                                        <abbr><b><?php echo display('email') ?>:</b></abbr>
                                        {customer_email}
                                        <?php }?>
                                    </address>
                                </div>
                            </div>

                            <div class="table-responsive m-b-20">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center"><?php echo display('sl') ?></th>
                                            <th class="text-center"><?php echo display('service_name') ?></th>

                                            <th class="text-right"><?php echo display('quantity') ?></th>

                                            <?php if ($discount_type == 1) {?>
                                            <th class="text-right"><?php echo display('discount_percentage') ?> %</th>
                                            <?php } elseif ($discount_type == 2) {?>
                                            <th class="text-right"><?php echo display('discount') ?> </th>
                                            <?php } elseif ($discount_type == 3) {?>
                                            <th class="text-right"><?php echo display('fixed_dis') ?> </th>
                                            <?php }?>

                                            <th class="text-right"><?php echo display('charge') ?></th>
                                            <th class="text-right"><?php echo display('ammount') ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {invoice_detail}
                                        <tr>
                                            <td class="text-center">{sl}</td>
                                            <td class="text-center">
                                                <div><strong>{service_name}</strong></div>
                                            </td>
                                            <td align="right">{qty}</td>

                                            <?php if ($discount_type == 1) {?>
                                            <td align="right">{discount}</td>
                                            <?php } else {?>
                                            <td align="right">
                                                <?php echo (($position == 0) ? "$currency {discount}" : "{discount} $currency") ?>
                                            </td>
                                            <?php }?>

                                            <td align="right">
                                                <?php echo (($position == 0) ? "$currency {charge}" : "{charge} $currency") ?>
                                            </td>
                                            <td align="right">
                                                <?php echo (($position == 0) ? "$currency {total}" : "{total} $currency") ?>
                                            </td>
                                        </tr>
                                        {/invoice_detail}
                                        <tr>
                                            <td class="text-right" colspan="2" style="border: 0px">
                                                <b><?php echo display('grand_total') ?>:</b>
                                            </td>
                                            <!--<td style="border: 0px"></td>-->
                                            <td align="right" style="border: 0px"><b>{subTotal_quantity}</b></td>
                                            <td style="border: 0px"></td>
                                            <td style="border: 0px"></td>
                                            <td align="right" style="border: 0px">
                                                <b><?php echo (($position == 0) ? "$currency {subTotal_ammount}" : "{subTotal_ammount} $currency") ?></b>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--                                    <tfoot>

                                    </tfoot>-->
                                </table>
                            </div>
                            <div class="row">

                                <div class="col-xs-8" style="display: inline-block;width: 66%">

                                    <p></p>
                                    <p><strong>{details}</strong></p>

                                </div>
                                <div class="col-xs-4" style="display: inline-block;">

                                    <table class="table">
                                        <?php
if ($invoice_detail[0]['total_discount'] != 0) {
    ?>
                                        <tr>
                                            <th style="border-top: 0; border-bottom: 0;">
                                                <?php echo display('total_discount') ?> : </th>
                                            <td class="text-right" style="border-top: 0; border-bottom: 0;">
                                                <?php echo (($position == 0) ? "$currency {total_discount}" : "{total_discount} $currency") ?>
                                            </td>
                                        </tr>
                                        <?php
}
if ($invoice_detail[0]['total_tax'] != 0) {
    ?>
                                        <tr>
                                            <th class="text-left" style="border-top: 0; border-bottom: 0;">
                                                <?php echo display('tax') ?> : </th>
                                            <td class="text-right" style="border-top: 0; border-bottom: 0;">
                                                <?php echo (($position == 0) ? "$currency {total_tax}" : "{total_tax} $currency") ?>
                                            </td>
                                        </tr>
                                        <?php }?>
                                        <?php if ($invoice_detail[0]['shipping_cost'] != 0) {
    ?>
                                        <tr>
                                            <th class="text-left" style="border-top: 0; border-bottom: 0;">
                                                <?php echo 'Shipping Cost' ?> : </th>
                                            <td class="text-right" style="border-top: 0; border-bottom: 0;">
                                                <?php echo (($position == 0) ? "$currency {shipping_cost}" : "{shipping_cost} $currency") ?>
                                            </td>
                                        </tr>
                                        <?php }?>
                                        <tr>
                                            <th class="text-left grand_total"><?php echo display('previous'); ?> :</th>
                                            <td class="text-right grand_total">
                                                <?php echo (($position == 0) ? "$currency {previous}" : "{previous} $currency") ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="text-left grand_total"><?php echo display('grand_total') ?> :
                                            </th>
                                            <td class="text-right grand_total">
                                                <?php echo (($position == 0) ? "$currency {total_amount}" : "{total_amount} $currency") ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="text-left grand_total" style="border-top: 0; border-bottom: 0;">
                                                <?php echo display('paid_ammount') ?> : </th>
                                            <td class="text-right grand_total" style="border-top: 0; border-bottom: 0;">
                                                <?php echo (($position == 0) ? "$currency {paid_amount}" : "{paid_amount} $currency") ?>
                                            </td>
                                        </tr>
                                        <?php
if ($invoice_detail[0]['due_amount'] != 0) {
    ?>
                                        <tr>
                                            <th class="text-left grand_total"><?php echo display('due') ?> : </th>
                                            <td class="text-right grand_total">
                                                <?php echo (($position == 0) ? "$currency {due_amount}" : "{due_amount} $currency") ?>
                                            </td>
                                        </tr>
                                        <?php
}
?>
                                    </table>



                                </div>
                            </div>
                            <!-- <div class="row" style="margin-top: 50px">
                                <div class="col-sm-4">
                                    <div
                                        style="float:left;width:40%;text-align:center;border-top:1px solid #e4e5e7;font-weight: bold;">
                                        <?php echo display('received_by') ?>
                                    </div>
                                </div>
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4">
                                    <div
                                        style="float:right;width:40%;text-align:center;border-top:1px solid #e4e5e7;font-weight: bold;">
                                        <?php echo display('authorised_by') ?>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>

                    <div class="panel-footer text-left">
                        <a class="btn btn-danger"
                            href="<?php echo base_url('Cinvoice'); ?>"><?php echo display('cancel') ?></a>
                        <button class="btn btn-info" onclick="printDiv('printableArea')"><span
                                class="fa fa-print"></span></button>

                    </div>
                </div>
            </div>
        </div>
    </section> <!-- /.content -->
</div> <!-- /.content-wrapper -->