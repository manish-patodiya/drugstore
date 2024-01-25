<style>
.d-none {
    display: none !important;
}
</style>
<!-- Stock report start -->
<script type="text/javascript">
function printDiv(divName) {
    var header = document.getElementById("print-header").innerHTML
    var printContents = document.getElementById(divName).innerHTML;
    printContents = header + printContents;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    document.body.style.marginTop = "0px";
    window.print();
    document.body.innerHTML = originalContents;
}
</script>


<!-- Sales Report Start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('sales_report') ?></h1>
            <small><?php echo display('total_sales_report') ?></small>
            <ol class="breadcrumb">
                <li><a href="index.html"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('report') ?></a></li>
                <li class="active"><?php echo display('sales_report') ?></li>
            </ol>
        </div>
    </section>

    <section class="content">


        <div class="row p-r-15 m-y-10">
            <div class="col-sm-12 d-flex justify-content-right">
                <div class="column">

                    <?php
if ($this->permission1->method('todays_report', 'read')->access()) {?>
                    <a href="<?php echo base_url('Admin_dashboard/all_report') ?>" class="btn btn-info m-b-5 m-r-2"><i
                            class="ti-align-justify"> </i> <?php echo display('todays_report') ?> </a>
                    <?php }?>

                    <?php
if ($this->permission1->method('purchase_report', 'read')->access()) {?>
                    <a href="<?php echo base_url('Admin_dashboard/todays_purchase_report') ?>"
                        class="btn btn-success m-b-5 m-r-2"><i class="ti-align-justify"> </i>
                        <?php echo display('purchase_report') ?> </a>
                    <?php }?>

                    <?php
if ($this->permission1->method('sales_report', 'read')->access()) {?>
                    <a href="<?php echo base_url('Admin_dashboard/todays_sales_report') ?>"
                        class="btn btn-primary m-b-5 m-r-2"><i class="ti-align-justify"> </i>
                        <?php echo display('sales_report') ?> </a>
                    <?php }?>




                </div>
            </div>
        </div>

        <?php
if ($this->permission1->method('sales_report', 'read')->access()) {?>
        <!-- Sales report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <?php echo form_open('Admin_dashboard/retrieve_dateWise_SalesReports', array('class' => 'form-inline')) ?>
                        <?php date_default_timezone_set("Asia/Dhaka");
    $today = date('Y-m-d');?>
                        <div class="form-group">
                            <label class="" for="from_date"><?php echo display('start_date') ?></label>
                            <input type="text" name="from_date" class="form-control datepicker" id="from_date"
                                placeholder="<?php echo display('start_date') ?>">
                        </div>

                        <div class="form-group">
                            <label class="" for="to_date"><?php echo display('end_date') ?></label>
                            <input type="text" name="to_date" class="form-control datepicker" id="to_date"
                                placeholder="<?php echo display('end_date') ?>" value="<?php echo $today ?>">
                        </div>

                        <button type="submit" class="btn btn-success"><?php echo display('search') ?></button>
                        <a class="btn btn-warning" href="#"
                            onclick="printDiv('purchase_div')"><?php echo display('print') ?></a>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('sales_report') ?> </h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="d-none" id="print-header">
                            {company_info}
                            <h3> {company_name} </h3>
                            <h4>{address} </h4>
                            {/company_info}
                            <h4> <?php echo display('print_date') ?>: <?php echo date("d/m/Y h:i:s"); ?> </h4>
                        </div>
                        <div id="purchase_div" style="margin-left:2px;">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th><?php echo display('sales_date') ?></th>
                                            <th><?php echo display('invoice_no') ?></th>
                                            <th><?php echo 'Patient Name' ?></th>
                                            <th><?php echo display('total_amount') ?></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3" style="text-align: right;">
                                                <b><?php echo display('total_seles') ?></b>
                                            </td>
                                            <td style="text-align: right;">
                                                <b><?php echo (($position == 0) ? "$currency {sales_amount}" : "{sales_amount} $currency") ?></b>
                                            </td>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
if ($sales_report) {
        ?>
                                        {sales_report}
                                        <tr>
                                            <td>{sales_date}</td>
                                            <td>
                                                <a
                                                    href="<?php echo base_url() . 'Cinvoice/invoice_inserted_data/{invoice_id}'; ?>">
                                                    {invoice}
                                                </a>
                                            </td>
                                            <td><a
                                                    href="<?php echo base_url() . 'Ccustomer/customerledger/{customer_id}'; ?>">{customer_name}</a>
                                            </td>
                                            <td style="text-align: right;">
                                                <?php echo (($position == 0) ? "$currency {total_amount}" : "{total_amount} $currency") ?>
                                            </td>
                                        </tr>
                                        {/sales_report}
                                        <?php
}
    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="text-right"><?php echo $links ?></div>
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
    </section>
</div>
<!-- Sales Report End -->