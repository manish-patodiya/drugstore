<!-- Product details page start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('product_report') ?></h1>
            <small><?php echo display('product_sales_and_purchase_report') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('report') ?></a></li>
                <li class="active"><?php echo display('product_report') ?></li>
            </ol>
        </div>
    </section>

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

        <div class="row m-y-10">
            <div class="col-sm-12 d-flex justify-content-right">
                <div class="column">

                    <a href="<?php echo base_url('Cproduct') ?>" class="btn btn-info m-b-5 m-r-2"><i class="ti-plus">
                        </i> <?php echo display('add_product') ?> </a>

                    <a href="<?php echo base_url('Cproduct/add_product_csv') ?>" class="btn btn-success m-b-5 m-r-2"><i
                            class="ti-plus"> </i> <?php echo display('add_product_csv') ?> </a>

                    <a href="<?php echo base_url('Cproduct/manage_product') ?>" class="btn btn-primary m-b-5 m-r-2"><i
                            class="ti-align-justify"> </i> <?php echo display('manage_product') ?> </a>

                </div>
            </div>
        </div>


        <?php
if ($this->permission1->method('manage_medicine', 'read')->access()) {?>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('product_details') ?> </h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <h2> <span style="font-weight:normal;"><?php echo display('product_name') ?>: </span><span
                                style="color:#005580;">{product_name}</span></h2>
                        <h4> <span style="font-weight:normal;"><?php echo display('model') ?>:</span> <span
                                style="color:#005580;">{product_model}</span></h4>
                        <h4> <span style="font-weight:normal;"><?php echo display('price') ?>:</span> <span
                                style="color:#005580;">
                                <?php echo (($position == 0) ? "$currency {price}" : "{price} $currency") ?></span></h4>
                        <table class="table">
                            <tr>
                                <th><?php echo display('total_purchase') ?> = <span
                                        style="color:#ff0000;">{total_purchase}</span></th>
                                <th><?php echo display('total_sales') ?> = <span style="color:#ff0000;">
                                        {total_sales}</span></th>
                                <th><?php echo display('stock') ?> = <span style="color:#ff0000;"> {stock}</span></th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Purchase report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('purchase_report') ?> </h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th><?php echo display('date') ?></th>
                                        <th><?php echo display('invoice_no') ?></th>
                                        <th><?php echo display('invoice_id') ?></th>
                                        <th><?php echo display('manufacturer_name') ?></th>
                                        <th><?php echo display('quantity') ?></th>
                                        <th><?php echo display('purchase_price') ?></th>
                                        <th style="text-align:right;"><?php echo display('total_ammount') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
if ($purchaseData) {
    ?>
                                    {purchaseData}
                                    <tr>
                                        <td>{final_date}</td>
                                        <td>
                                            <a
                                                href="<?php echo base_url() . 'Cpurchase/purchase_details_data/{purchase_id}'; ?>">
                                                {chalan_no}
                                            </a>
                                        </td>
                                        <td>
                                            <a
                                                href="<?php echo base_url() . 'Cpurchase/purchase_details_data/{purchase_id}'; ?>">
                                                {purchase_id}
                                            </a>
                                        </td>
                                        <td>
                                            <a
                                                href="<?php echo base_url() . 'Cmanufacturer/manufacturer_details/{manufacturer_id}'; ?>">{manufacturer_name}</a>
                                        </td>
                                        <td style="text-align:right;">{quantity}</td>
                                        <td style="text-align:right;">
                                            <?php echo (($position == 0) ? "$currency {rate}" : "{rate} $currency") ?>
                                        </td>
                                        <td style="text-align:right;">
                                            <?php echo (($position == 0) ? "$currency {total_amount}" : "{total_amount} $currency") ?>
                                        </td>
                                    </tr>
                                    {/purchaseData}
                                    <?php
}
    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3" style="text-align:right;"><b><?php echo display('total') ?></b>
                                        </td>
                                        <td></td>
                                        <td style="text-align:right;"> {total_purchase}</td>
                                        <td style="text-align:right;"><b><?php echo display('grand_total') ?></b></td>
                                        <td style="text-align:right;"><b>
                                                <?php echo (($position == 0) ? "$currency {purchaseTotalAmount}" : "{purchaseTotalAmount} $currency") ?></b>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Total sales report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('sales_report') ?> </h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample3" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th><?php echo display('date') ?></th>
                                        <th><?php echo display('invoice_id') ?></th>
                                        <th><?php echo display('invoice_no') ?></th>
                                        <th><?php echo 'Patient Name' ?></th>
                                        <th><?php echo display('quantity') ?></th>
                                        <th><?php echo display('rate') ?></th>
                                        <th style="text-align:right;"><?php echo display('total_ammount') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
if ($salesData) {
        ?>
                                    {salesData}
                                    <tr>
                                        <td>{final_date}</td>
                                        <td>
                                            <a
                                                href="<?php echo base_url() . 'Cinvoice/invoice_inserted_data/{invoice_id}'; ?>">
                                                {invoice_id}
                                            </a>
                                        </td>
                                        <td>
                                            <a
                                                href="<?php echo base_url() . 'Cinvoice/invoice_inserted_data/{invoice_id}'; ?>">
                                                {invoice}
                                            </a>
                                        </td>
                                        <td>
                                            <a
                                                href="<?php echo base_url() . 'Ccustomer/customer_ledger/{customer_id}'; ?>">{customer_name}</a>
                                        </td>
                                        <td style="text-align:right;">{quantity}</td>
                                        <td style="text-align:right;">
                                            <?php echo (($position == 0) ? "$currency {rate}" : "{rate} $currency") ?>
                                        </td>
                                        <td style="text-align:right;">
                                            <?php echo (($position == 0) ? "$currency {total_price}" : "{total_price} $currency") ?>
                                        </td>
                                    </tr>
                                    {/salesData}
                                    <?php
}
    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3" style="text-align:right;"><b><?php echo display('total') ?></b>
                                        </td>
                                        <td></td>
                                        <td style="text-align:right;">{total_sales}</td>
                                        <td><b><?php echo display('grand_total') ?></b></td>
                                        <td style="text-align:right;"><b>
                                                <?php echo (($position == 0) ? "$currency {salesTotalAmount}" : "{salesTotalAmount} $currency") ?></b>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
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
<!-- Product details page end -->