<script src="<?php echo base_url() ?>my-assets/js/admin_js/invoice.js" type="text/javascript"></script>
<!-- Add new invoice start -->
<style>
#bank_info_hide {
    display: none;
}

#payment_from_2 {
    display: none;
}

.hiddenRow {
    display: none;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
</style>

<!-- Customer type change by javascript start -->
<script type="text/javascript">
function bank_info_show(payment_type) {
    if (payment_type.value == "2") {
        document.getElementById("bank_info_hide").style.display = "block";
    } else {
        document.getElementById("bank_info_hide").style.display = "none";
    }
}

function active_customer(status) {
    if (status == "payment_from_2") {
        document.getElementById("payment_from_2").style.display = "none";
        document.getElementById("payment_from_1").style.display = "block";
        document.getElementById("myRadioButton_2").checked = false;
        document.getElementById("myRadioButton_1").checked = true;
    } else {
        document.getElementById("payment_from_1").style.display = "none";
        document.getElementById("payment_from_2").style.display = "block";
        document.getElementById("myRadioButton_2").checked = false;
        document.getElementById("myRadioButton_1").checked = true;
    }
}
</script>
<!-- Customer type change by javascript end -->

<!-- Add New Invoice Start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('new_invoice') ?></h1>
            <small><?php echo display('add_new_invoice') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('invoice') ?></a></li>
                <li class="active"><?php echo display('new_invoice') ?></li>
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
        <div class="row p-r-15 m-y-10">
            <div class="col-sm-12 d-flex justify-content-right">
                <div class="column">

                    <?php
if ($this->permission1->method('invoice', 'read')->access()): ?>
                    <a href="<?php echo base_url('Cinvoice/manage_invoice') ?>" class="btn btn-info m-b-5 m-r-2"><i
                            class="ti-align-justify"> </i> <?php echo display('manage_invoice') ?> </a>
                    <?php endif;?>

                    <?php
if ($this->permission1->method('invoice', 'create')->access()): ?>
                    <a href="<?php echo base_url('Cinvoice/pos_invoice') ?>" class="btn btn-primary m-b-5 m-r-2"><i
                            class="ti-align-justify"> </i> <?php echo display('pos_invoice') ?> </a>
                    <?php endif;?>
                    <?php if ($this->permission1->method('invoice', 'create')->access()): ?>
                    <button type="button" class="btn btn-info m-b-5 m-r-2" data-toggle="modal"
                        data-target="#invoice_csv_modal">Upload CSV Invoice</button>
                    <?php endif;?>

                </div>
            </div>
        </div>

        <?php
if ($this->permission1->method('new_invoice', 'create')->access()) {?>
        <!--Add Invoice -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <!-- <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('new_invoice') ?></h4>
                        </div>
                    </div> -->
                    <?php echo form_open_multipart('Cinvoice/manual_sales_insert', array('class' => 'form-vertical', 'id' => 'insert_sale', 'name' => '')) ?>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6" id="payment_from_1">
                                <div class="form-group row">
                                    <label for="customer_name" class="col-sm-3 col-form-label">
                                        <?php echo 'Patient Name' ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-6">
                                        <input type="text" name="customer_name" class=" form-control"
                                            placeholder='<?php echo 'Patient Name' . '/' . display('phone') ?>'
                                            id="customer_name" tabindex="1" onkeypress="customer_autocomplete()"
                                            value="<?php echo $customer_name; ?>" required />

                                        <input id="autocomplete_customer_id" class="customer_hidden_value abc"
                                            type="hidden" name="customer_id" value="{customer_id}">
                                    </div>
                                    <!-- <div class=" col-sm-3">
                                        <input id="myRadioButton_1" type="button"
                                            onClick="active_customer('payment_from_1')" id="myRadioButton_1"
                                            class="btn btn-success checkbox_account ac" name="customer_confirm"
                                            checked="checked" value="<?php echo display('new_customer') ?>"
                                            tabindex="2">
                                    </div> -->
                                </div>
                            </div>

                            <div class="col-sm-8" id="payment_from_2">
                                <!--     <div class="form-group row">
                                    <label for="customer_name_others"
                                        class="col-sm-3 col-form-label"><?php echo display('payee_name') ?> <i
                                            class="text-danger">*</i></label>
                                    <div class="col-sm-6">
                                        <input autofill="off" type="text" size="100" name="customer_name_others"
                                            placeholder='<?php echo display('payee_name') ?>' id="customer_name_others"
                                            class="form-control" />
                                    </div>

                                    <div class="col-sm-3">
                                        <input onClick="active_customer('payment_from_2')" type="button"
                                            id="myRadioButton_2" class="checkbox_account btn btn-success"
                                            name="customer_confirm_others"
                                            value="<?php echo display('old_customer') ?>">
                                    </div>
                                </div> -->

                                <div class="form-group row">
                                    <label for="customer_name_others_address"
                                        class="col-sm-3 col-form-label"><?php echo display('address') ?> </label>
                                    <div class="col-sm-6">
                                        <input type="text" size="100" name="customer_name_others_address"
                                            class=" form-control" placeholder='<?php echo display('address') ?>'
                                            id="customer_name_others_address" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6" id="payment_from">
                                <div class="form-group row">
                                    <label for="payment_type" class="col-sm-4 col-form-label">
                                        <?php echo display('payment_type'); ?>
                                        <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <select name="paytype" class="form-control" required=""
                                            onchange="bank_paymet(this.value)">
                                            <option value="1">Cash Payment</option>
                                            <option value="3">UPI Payment</option>
                                            <option value="4">Credit Card Payment</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="date" class="col-sm-3 col-form-label"><?php echo display('date') ?> <i
                                            class="text-danger">*</i></label>
                                    <div class="col-sm-6">
                                        <?php $date = date('Y-m-d');?>
                                        <input class="datepicker form-control" type="text" size="50" name="invoice_date"
                                            id="date" required value="<?php echo $date; ?>" tabindex="6" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6" id="">
                                <div class="form-group row">
                                    <label for="" class="col-sm-4 col-form-label">
                                        <?php echo "Referred By" ?></label>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="referred_by" id="referred_by">
                                            <?php foreach ($doctors_list as $key => $value) {?>
                                            <option value="<?php echo $value->id ?>">
                                                <?php echo $value->doctor_name ?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6" id="bank_div" style="display: none;">
                                <div class="form-group row">
                                    <label for="bank" class="col-sm-4 col-form-label">
                                        <?php echo display('bank'); ?>
                                        <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <select name="bank_id" class="form-control" id="bank_id">
                                            <option value="">Select Location</option>
                                            <?php foreach ($bank_list as $bank) {?>
                                            <option value="<?php echo $bank['bank_id'] ?>">
                                                <?php echo $bank['bank_name']; ?></option>
                                            <?php }?>
                                        </select>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="table-responsive" style="margin-top: 10px">
                            <table class="table table-bordered table-hover" id="normalinvoice">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            <?php echo display('item_information') ?> <i class="text-danger">*</i></th>
                                        <th class="text-center" style="width: 150px"><?php echo display('batch') ?><i
                                                class="text-danger">*</i></th>
                                        <th class="text-center" style="width: 70px">
                                            <?php echo display('available_qnty') ?></th>
                                        <th class="text-center" style="width: 150px"><?php echo display('expiry') ?>
                                        </th>
                                        <!--th class="text-center" width="100"><?php echo display('unit') ?></th-->
                                        <th class="text-center" style="width: 70px"><?php echo display('qty') ?> <i
                                                class="text-danger">*</i></th>
                                        <th class="text-center" style="width: 100px"><?php echo display('price') ?> <i
                                                class="text-danger">*</i></th>

                                        <?php /*if ($discount_type == 1) {?>
                                        <th class="text-center"><?php echo display('discount_percentage') ?> %</th>
                                        <?php } elseif ($discount_type == 2) {?>
                                        <th class="text-center"><?php echo display('discount') ?> </th>
                                        <?php } elseif ($discount_type == 3) {?>
                                        <th class="text-center"><?php echo display('fixed_dis') ?> </th>
                                        <?php } */?>

                                        <th class="text-center" style="width: 110px"><?php echo display('total') ?>
                                        </th>
                                        <th class="text-center" style="width: 50px"><?php echo display('action') ?></th>
                                    </tr>
                                </thead>
                                <tbody id="addinvoiceItem">
                                    <tr>
                                        <td>
                                            <input type="text" name="product_name" onkeyup="invoice_productList(1);"
                                                onkeypress="invoice_productList(1);"
                                                class="form-control productSelection"
                                                placeholder='<?php echo display('product_name') ?>' required=""
                                                id="product_name_1" tabindex="7">

                                            <input type="hidden" class="autocomplete_hidden_value product_id_1"
                                                name="product_id[]" id="SchoolHiddenId" />

                                            <input type="hidden" class="baseUrl" value="<?php echo base_url(); ?>" />
                                        </td>
                                        <td>
                                            <select class="form-control" id="batch_id_1" name="batch_id[]"
                                                onchange="product_stock(1)" tabindex="8" required="required">
                                                <option></option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" name="available_quantity[]"
                                                class="form-control text-right available_quantity_1" value="0"
                                                readonly="" id="available_quantity_1" />
                                        </td>
                                        <td id="expire_date_1">

                                        </td>
                                        <!--td>
                                            <input name="" id="" class="form-control text-right unit_1 valid"
                                                value="None" readonly="" aria-invalid="false" type="text">
                                        </td-->
                                        <td>
                                            <input type="text" name="product_quantity[]"
                                                onkeyup="quantity_calculate(1),checkqty(1);"
                                                onchange="quantity_calculate(1);"
                                                class="total_qntt_1 form-control text-right" id="total_qntt_1"
                                                placeholder="0" min="0" tabindex="9" required />
                                        </td>
                                        <td>
                                            <input type="text" name="product_rate[]" id="price_item_1"
                                                class="price_item1 price_item form-control text-right" required=""
                                                onkeyup="quantity_calculate(1),checkqty(1);"
                                                onchange="quantity_calculate(1);" placeholder="0.00" min="0" readonly />
                                        </td>
                                        <!-- Discount -->
                                        <!--td>
                                            <input type="text" name="discount[]"
                                                onkeyup="quantity_calculate(1),checkqty(1);"
                                                onchange="quantity_calculate(1);" id="discount_1"
                                                class="form-control text-right" min="0" tabindex="11"
                                                placeholder="0.00" />

                                            <input type="hidden" value="" name="discount_type" id="discount_type_1">
                                        </td-->


                                        <td>
                                            <input class="total_price form-control text-right" type="text"
                                                name="total_price[]" id="total_price_1" value="0.00"
                                                readonly="readonly" />
                                        </td>

                                        <td>
                                            <!-- Tax calculate start-->
                                            <?php $x = 0;foreach ($taxes as $taxfldt) {?>
                                            <input id="total_tax<?php echo $x; ?>_1"
                                                class="total_tax<?php echo $x; ?>_1" type="hidden">
                                            <input id="all_tax<?php echo $x; ?>_1" class="total_tax<?php echo $x; ?>"
                                                type="hidden" name="tax[]">

                                            <!-- Tax calculate end-->

                                            <!-- Discount calculate start-->

                                            <?php $x++;}?>
                                            <!-- Tax calculate end-->

                                            <!-- Discount calculate start-->
                                            <input type="hidden" id="total_discount_1" class="" />
                                            <input type="hidden" id="all_discount_1" class="total_discount dppr" />
                                            <!-- Discount calculate end -->

                                            <button style="text-align: right;" class="btn btn-danger" type="button"
                                                value="<?php echo display('delete') ?>" onclick="deleteRow(this)"
                                                tabindex=""><i class="fa fa-close"></i></button>
                                        </td>
                                    </tr>
                                </tbody>

                                <tfoot>

                                    <tr>
                                        <td colspan="4" rowspan="1">
                                            <button style="text-align: right;" class="btn btn-info" type="button"
                                                onClick="addInputField('addinvoiceItem');" tabindex="12"
                                                id="add_invoice_item">Add Items
                                            </button>
                                            <center style="display:none;">
                                                <label style="text-align:center;" for="details"
                                                    class="col-form-label"><?php echo display('invoice_details') ?></label>
                                            </center>
                                            <textarea name="inva_details" class="form-control" style="display:none;"
                                                placeholder="<?php echo display('invoice_details') ?>"></textarea>
                                        </td>
                                        <td>
                                            <input class="text-right hiddenRow form-control" type="number"
                                                id="inpt-perc" onkeyup="showDisc()" placeholder="%" min="0" max="100" />
                                        </td>
                                        <td style="text-align:right;" colspan="1">
                                            <b><?php echo display('invoice_discount') ?>:</b>
                                        </td>
                                        <td class="text-right">
                                            <input type="text" id="invdcount" class="form-control text-right"
                                                name="invdcount" onkeyup="calculateSum(),checknum();"
                                                onchange="calculateSum()" placeholder="0.00" />
                                            <input type="hidden" id="total_discount_ammount"
                                                class="form-control text-right" name="total_discount" value="0.00"
                                                readonly="readonly" />
                                            <input type="hidden" name="baseUrl" class="baseUrl"
                                                value="<?php echo base_url(); ?>" />
                                        </td>
                                        <td>
                                            <select id="dis-type" onchange="getPerc()">
                                                <option value="flat" selected>flat</option>
                                                <option value="%">%</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <!--tr>
                                        <td colspan="1" style="text-align:right;">
                                            <b><?php echo display('total_discount') ?>:</b>
                                        </td>
                                        <td class="text-right">
                                            <input type="text" id="total_discount_ammount"
                                                class="form-control text-right" name="total_discount" value="0.00"
                                                readonly="readonly" />
                                            <input type="hidden" name="baseUrl" class="baseUrl"
                                                value="<?php echo base_url(); ?>" />
                                        </td>
                                    </tr-->
                                    <?php $x = 0;foreach ($taxes as $taxfldt) {?>
                                    <tr class="hideableRow hiddenRow">

                                        <td style="text-align:right;" colspan="6">
                                            <b><?php echo $taxfldt['tax_name'] ?></b>
                                        </td>
                                        <td class="text-right">
                                            <input id="total_tax_amount<?php echo $x; ?>" tabindex="-1"
                                                class="form-control text-right valid totalTax"
                                                name="total_tax<?php echo $x; ?>" value="0.00" readonly="readonly"
                                                aria-invalid="false" type="text">
                                        </td>
                                    </tr>
                                    <?php $x++;}?>
                                    <tr>

                                        <td style="text-align:right;" colspan="6">
                                            <b><?php echo display('total_tax') ?>:</b>
                                        </td>
                                        <td class="text-right">
                                            <input id="total_tax_amount" tabindex="-1"
                                                class="form-control text-right valid" name="total_tax" value="0.00"
                                                readonly="readonly" aria-invalid="false" type="text">
                                        </td>
                                        <td><button type="button" class="toggle btn-warning">
                                                <i class="fa fa-angle-double-down"></i>
                                            </button></td>
                                    </tr>

                                    <tr>
                                        <td colspan="6" style="text-align:right;">
                                            <b><?php echo display('grand_total') ?>:</b>
                                        </td>
                                        <td class="text-right">
                                            <input type="text" id="grandTotal" class="form-control text-right"
                                                name="grand_total_price" value="0.00" readonly="readonly" />
                                            <input type="hidden" id="txfieldnum" value="<?php echo count($taxes); ?>">
                                            <input type="hidden" id="n_total" class="form-control text-right"
                                                name="n_total" value="0" readonly="readonly" placeholder="" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" style="text-align:right;">
                                            <b><?php echo 'Round off' ?>:</b>
                                        </td>
                                        <td class="text-right">
                                            <input type="text" class="form-control text-right" readonly
                                                id="round-of-price" placeholder="0.00">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:right;" colspan="6">
                                            <b><?php echo display('paid_ammount') ?>:</b>
                                        </td>
                                        <td class="text-right">
                                            <input type="text" id="paidAmount" class="form-control text-right"
                                                name="paid_amount" readonly placeholder="0.00" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <!-- tr>
                                        <td colspan="6" style="text-align:right;">
                                            <b><?php echo display('previous'); ?>:</b>
                                        </td>
                                        <td class="text-right">
                                            <input type="text" id="previous" class="form-control text-right"
                                                name="previous" value="0.00" readonly="readonly" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" style="text-align:right;">
                                            <b><?php echo display('net_total'); ?>:</b>
                                        </td>
                                        <td class="text-right">
                                        </td>
                                    </tr>

                                    <td style="text-align:right;" colspan="6">
                                        <b><?php echo display('paid_ammount') ?>:</b>
                                    </td>
                                    <td class="text-right">
                                        <input type="text" id="paidAmount" onkeyup="calculateSum(),checknum();"
                                            class="form-control text-right" name="paid_amount" placeholder="0.00"
                                            tabindex="13" />
                                    </td-->
                                    </tr>
                                    <tr>
                                        <td colspan="6"></td>
                                        <td colspan="2">
                                            <input style="display:none;" type=" button" id="full_paid_tab"
                                                class="btn btn-warning" value="<?php echo display('full_paid') ?>"
                                                tabindex="14" onClick="full_paid()" />

                                            <input type="submit" id="add_invoice" class="btn btn-success"
                                                name="add-invoice" value="<?php echo display('submit') ?>"
                                                tabindex="15" />
                                        </td>
                                    </tr>
                                    <tr class="hiddenRow">
                                        <td style="text-align:right;" colspan="6">
                                            <b><?php echo display('due') ?>:</b>
                                        </td>
                                        <td class="text-right">
                                            <input type="text" id="dueAmmount" class="form-control text-right"
                                                name="due_amount" value="0.00" readonly="readonly" />
                                        </td>
                                    </tr>
                                    <tr id="change_m" class="hiddenRow">
                                        <td style="text-align:right;" colspan="6" id="ch_l"><b>Change:</b></td>
                                        <td class="text-right">
                                            <input type="text" id="change" class="form-control text-right" name="change"
                                                value="" readonly="readonly" />
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <?php echo form_close() ?>
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
        <div id="invoice_csv_modal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Upload Csv Invoice</h4>
                    </div>
                    <div class="modal-body">
                        <div class="panel panel-bd">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4><?php echo 'CSV Invoice'; ?><a
                                            href="<?php echo base_url('assets/data/csv/invoice_csv_sample.csv') ?>"
                                            class="btn btn-primary pull-right"><i class="fa fa-download"></i> Download
                                            Sample File</a></h4>
                                </div>
                            </div>

                            <div class="panel-body">
                                <div class="col-sm-12"></div>
                                <?php echo form_open_multipart('Cinvoice/uploadCsv_Invoice', array('class' => 'form-vertical', 'id' => 'validate', 'name' => 'insert_csv_purchase')) ?>
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label for="upload_csv_file"
                                            class="col-sm-4 col-form-label"><?php echo display('upload_csv_file') ?> <i
                                                class="text-danger">*</i></label>
                                        <div class="col-sm-8">
                                            <input class="form-control" name="upload_csv_file" type="file"
                                                id="upload_csv_file"
                                                placeholder="<?php echo display('upload_csv_file') ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <div class="col-sm-12 text-right">
                                            <input type="submit" id="add-product" class="btn btn-primary btn-large"
                                                name="add-product" value="<?php echo display('submit') ?>" />
                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                                <?php echo form_close() ?>
                            </div>
                        </div>



                    </div>

                </div>

            </div>

        </div>
        <div class="modal fade" id="printconfirmodal" tabindex="-1" role="dialog" aria-labelledby="printconfirmodal"
            aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"
                            onclick="cancelprint()">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Invoice Created</h4>
                    </div>
                    <div class="modal-body">
                        <?php echo form_open('Cinvoice/invoice_inserted_data_manual', array('class' => 'form-vertical', 'id' => '', 'name' => '')) ?>
                        <div id="outputs" class="hide alert alert-danger"></div>
                        <h3>Do you want to print ?</h3>
                        <input type="hidden" name="invoice_id" id="inv_id">
                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="cancelprint()" class="btn btn-default btn-lg"
                            data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-primary  btn-lg" id="yes">Yes</button>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
<!-- Invoice Report End -->


<script type="text/javascript">
$(document).ready(function() {

    var frm = $("#insert_sale");
    var output = $("#output");
    frm.on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            dataType: 'json',
            data: frm.serialize(),
            success: function(data) {
                if (data.status == true) {
                    output.empty().html(data.message).addClass('alert-success').removeClass(
                        'alert-danger').removeClass('hide');

                    $("#inv_id").val(data.invoice_id);
                    $('#printconfirmodal').modal({
                        backdrop: 'static',
                        keyboard: false
                    });
                    if (data.status == true && event.keyCode == 13) {
                        //$('#yes').trigger('click');
                    }
                    //$('#printconfirmodal').html(data.payment);
                } else {
                    output.empty().html(data.exception).addClass('alert-danger')
                        .removeClass('alert-success').removeClass('hide');
                }
            },
            error: function(xhr) {
                alert('failed!');
            }
        });
    });
});
$("#printconfirmodal").on('keydown', function(e) {
    var key = e.which || e.keyCode;
    if (key == 13) {
        $('#yes').trigger('click');
    }
});


function cancelprint() {
    location.reload();
}
</script>
<script type="text/javascript">
$('.ac').click(function() {
    $('.customer_hidden_value').val('');
});
$('#myRadioButton_1').click(function() {
    $('#customer_name').val('');
    $('#customer_name').attr('required', false);
    $('#customer_name_others').attr('required', true);
});

$('#myRadioButton_2').click(function() {
    $('#customer_name_others').val('');
    $('#customer_name_others').attr('required', false);
    $('#customer_name').attr('required', true);
});
$('#myRadioButton_2').click(function() {
    $('#customer_name_others_address').val('');
});
</script>
<script type="text/javascript">
function bank_paymet(val) {
    if (val == 2) {
        var style = 'block';
        document.getElementById('bank_id').setAttribute("required", true);
    } else {
        var style = 'none';
        document.getElementById('bank_id').removeAttribute("required");
    }

    document.getElementById('bank_div').style.display = style;
}
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#normalinvoice .toggle').on('click', function() {
        $('#normalinvoice .hideableRow').toggleClass('hiddenRow');
    })
});


let selected_batch_id_array = [];
$(document).on('focus', 'select[name="batch_id[]"]', function() {
    console.log('test');
    selected_batch_id_array = [];
    $('select[name="batch_id[]"]').map(function() {
        selected_batch_id_array.push(this.value);
    })

})

function product_stock(sl) {
    var batch_id = $('#batch_id_' + sl).val();
    if ($.inArray(batch_id, selected_batch_id_array) != -1) {
        $('#batch_id_' + sl).val('').trigger('change');
        alert("Batch id already selected");
        return 0;
    }

    var dataString = 'batch_id=' + batch_id;
    var base_url = $('.baseUrl').val();
    var available_quantity = 'available_quantity_' + sl;
    var product_rate = 'product_rate_' + sl;
    var expire_date = 'expire_date_' + sl;
    $('#total_qntt_' + sl).val('').trigger('change');
    $.ajax({
        type: "POST",
        url: base_url + "Cinvoice/retrieve_product_batchid",
        data: dataString,
        cache: false,
        success: function(data) {

            obj = JSON.parse(data);
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1; //January is 0!
            var yyyy = today.getFullYear();

            if (dd < 10) {
                dd = '0' + dd;
            }
            if (mm < 10) {
                mm = '0' + mm;
            }
            var today = yyyy + '-' + mm + '-' + dd;

            aj = new Date(today);
            exp = new Date(obj.expire_date);

            // alert(today);

            if (aj >= exp && obj.expire_date) {

                alert('<?php echo display('date_expired_please_choose_another') ?>');
                $('#batch_id_' + sl)[0].selectedIndex = 0;


                $('#' + expire_date).html('<p style="color:red;align:center">' + obj.expire_date + '</p>');
                document.getElementById('expire_date_' + sl).innerHTML = '';


            } else {
                $('#' + expire_date).html('<p style="color:green;align:center">' + (obj.expire_date || '') +
                    '</p>');
            }
            $('#' + available_quantity).val(obj.total_product);

        }
    });

    $(this).unbind("change");
    return false;
}


function getPerc() {
    $('#inpt-perc').val(0);
    $('#inpt-perc').toggleClass('hiddenRow');
    $('#invdcount').val(0).trigger('change');
    if ($('#invdcount').attr('readonly')) {
        $('#invdcount').attr('readonly', false);
    } else {
        $('#invdcount').attr('readonly', true);
    }
}

function showDisc() {
    var price = 0;
    $(".total_price").each(function() {
        isNaN(this.value) || 0 == this.value.length || (price +=
            parseFloat(this.value))
    });
    let disc = (price * $('#inpt-perc').val()) / 100;
    $('#invdcount').val(disc).trigger('change');
}

function checkqty(sl) {

    var quant = $("#total_qntt_" + sl).val();
    var price = $("#price_item_" + sl).val();
    //var dis = $("#discount_" + sl).val();
    if (isNaN(quant)) {
        alert("<?php echo display('must_input_numbers') ?>");
        document.getElementById("total_qntt_" + sl).value = '';
        //$("#quantity_"+sl).val() = '';
        return false;
    }
    if (isNaN(price)) {
        alert("<?php echo display('must_input_numbers') ?>");
        document.getElementById("price_item_" + sl).value = '';
        return false;
    }
    if ($('#dis-type').val() == '%') {
        showDisc();
    }
    /*
    if (isNaN(dis)) {
        alert("<?php echo display('must_input_numbers') ?>");
        document.getElementById("discount_" + sl).value = '';
        return false;
    }
    */
}
//discount and paid check
function checknum() {
    var dis = $("#invdcount").val();
    var paid = $("#paidAmount").val();
    if (isNaN(dis)) {
        alert("<?php echo display('must_input_numbers') ?>");
        document.getElementById("invdcount").value = '';
        return false;
    }
    if (isNaN(paid)) {
        alert("<?php echo display('must_input_numbers') ?>");
        document.getElementById("paidAmount").value = '';
        return false;
    }
}
</script>
<script type="text/javascript">
function customer_due(id) {
    $.ajax({
        url: '<?php echo base_url('Cinvoice/previous') ?>',
        type: 'post',
        data: {
            customer_id: id
        },
        success: function(msg) {
            $("#previous").val(msg);
        },
        error: function(xhr, desc, err) {
            alert('failed');
        }
    });
}

$(function() {
    $('#customer_name').keydown(() => {
        if ($('#autocomplete_customer_id').val()) {
            $('#autocomplete_customer_id').val('').trigger('change');
        }
    })
})

function customer_autocomplete(sl) {
    // Auto complete
    var options = {
        minLength: 0,
        source: function(request, response) {
            var customer_name = $('#customer_name').val();

            $.ajax({
                url: "<?php echo base_url('Cinvoice/customer_autocomplete') ?>",
                method: 'post',
                dataType: "json",
                data: {
                    term: request.term,
                    customer_id: customer_name,
                },
                success: function(data) {
                    // alert(data);
                    response(data);

                }
            });
        },
        focus: function(event, ui) {
            $(this).val(ui.item.label);
            return false;
        },
        select: function(event, ui) {
            $(this).parent().parent().find("#autocomplete_customer_id").val(ui.item.value);
            var customer_id = ui.item.value;
            // customer_due(customer_id);

            $(this).unbind("change");
            return false;
        }
    }

    $('body').on('keypress.autocomplete', '#customer_name', function() {
        $(this).autocomplete(options);
    });

}
</script>

<script type="text/javascript">
function invoice_productList(sl) {

    var priceClass = 'price_item' + sl;

    var unit = 'unit_' + sl;
    var tax = 'total_tax_' + sl;
    var discount_type = 'discount_type_' + sl;
    var batch_id = 'batch_id_' + sl;
    $('.' + priceClass).val('');
    if ($('#' + batch_id).val())
        $('#' + batch_id).html('').trigger('change');
    // Auto complete
    var options = {
        minLength: 0,
        source: function(request, response) {
            var product_name = $('#product_name_' + sl).val();
            $.ajax({
                url: "<?php echo base_url('Cinvoice/autocompleteproductsearch') ?>",
                method: 'post',
                dataType: "json",
                data: {
                    term: request.term,
                    product_name: product_name,
                },
                success: function(data) {
                    response(data);
                }
            });
        },
        focus: function(event, ui) {
            $(this).val(ui.item.label);
            return false;
        },
        select: function(event, ui) {
            $(this).parent().parent().find(".autocomplete_hidden_value").val(ui.item.value);
            $(this).val(ui.item.label);
            // var sl = $(this).parent().parent().find(".sl").val();
            var id = ui.item.value;
            var dataString = 'product_id=' + id;
            var base_url = $('.baseUrl').val();

            $.ajax({
                type: "POST",
                url: base_url + "Cinvoice/retrieve_product_data_inv",
                data: dataString,
                cache: false,
                success: function(data) {
                    let selected_batch_id_array = [];
                    $('select[name="batch_id[]"]').map(function() {
                        selected_batch_id_array.push(this.value);
                    })
                    var obj = jQuery.parseJSON(data);
                    for (var i = 0; i < (obj.txnmber); i++) {
                        var txam = obj.taxdta[i];
                        var txclass = 'total_tax' + i + '_' + sl;
                        $('.' + txclass).val(txam);
                    }

                    $('.' + priceClass).val(obj.price);
                    $('.' + unit).val(obj.unit);
                    $('.' + tax).val(obj.tax);
                    $('#txfieldnum').val(obj.txnmber);
                    $('#' + discount_type).val(obj.discount_type);
                    $('#' + batch_id).html(obj.batch);

                    //This Function Stay on others.js page
                    quantity_calculate(sl);

                }
            });

            $(this).unbind("change");
            return false;
        }
    }

    $('body').on('keypress.autocomplete', '.productSelection', function() {
        $(this).autocomplete(options);
    });

}
</script>

<script type="text/javascript">
$(document).ready(function() {
    $('#full_paid_tab').keydown(function(event) {
        if (event.keyCode == 13) {
            $('#add_invoice').trigger('click');
        }
    });
});
</script>