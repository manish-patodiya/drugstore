<!-- <script src="<?php echo base_url() ?>my-assets/js/admin_js/json/product_invoice.js.php" ></script> -->
<!-- Invoice js -->
<script src="<?php echo base_url() ?>my-assets/js/admin_js/invoice.js" type="text/javascript"></script>
<style type="text/css">
.hiddenRow {
    display: none;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
</style>
<script>
var data = <?=json_encode($invoice_all_data);?>;
console.log(data);
</script>
<!-- Edit Invoice Start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('invoice_edit') ?></h1>
            <small><?php echo display('invoice_edit') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('invoice') ?></a></li>
                <li class="active"><?php echo display('invoice_edit') ?></li>
            </ol>
        </div>
    </section>

    <?php
if ($this->permission1->method('manage_invoice', 'update')->access()) {?>
    <section class="content">
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
        <!-- Invoice report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('invoice_edit') ?></h4>
                        </div>
                    </div>
                    <?php echo form_open('Cinvoice/invoice_update', array('class' => 'form-vertical', 'id' => 'invoice_update')) ?>
                    <div class="panel-body">

                        <div class="row">
                            <div class="col-sm-6" id="payment_from_1">
                                <div class="form-group row">
                                    <label for="product_name"
                                        class="col-sm-4 col-form-label"><?php echo 'Patient Name' ?> <i
                                            class="text-danger">*</i></label>
                                    <div class="col-sm-8">

                                        <input type="text" size="100" name="customer_name" class=" form-control"
                                            placeholder='<?php echo 'Patient Name' . '/' . display('phone') ?>'
                                            id="customer_name" value="{customer_name}" tabindex="1"
                                            onkeyup="customer_autocomplete()" required />

                                        <input id="autocomplete_customer_id" class="customer_hidden_value abc"
                                            type="hidden" name="customer_id" value="{customer_id}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6" id="payment_from_1">
                                <div class="form-group row">
                                    <label for="payment_type" class="col-sm-4 col-form-label"><?php
echo display('payment_type');
    ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <select name="paytype" class="form-control" required
                                            onchange="bank_paymet(this.value)">
                                            <option value="">Select Payment Option</option>
                                            <option value="1" <?php if ($paytype == 1) {echo 'selected';}?>>Cash Payment
                                            </option>
                                            <option value="3" <?php if ($paytype == 3) {echo 'selected';}?>>UPI Payment
                                            </option>
                                            <option value="4" <?php if ($paytype == 4) {echo 'selected';}?>>Credit Card
                                                Payment
                                            </option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="product_name"
                                        class="col-sm-4 col-form-label"><?php echo display('date') ?> <i
                                            class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input type="text" tabindex="2" class="form-control datepicker"
                                            name="invoice_date" value="{date}" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6" id="">
                                <div class="form-group row">
                                    <label for="" class="col-sm-4 col-form-label">
                                        <?php echo "Referred By"; ?></label>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="referred_by" id="referred_by">
                                            <option value="">Select doctors</option>
                                            <?php foreach ($doctors_list as $key => $value) {?>
                                            <option
                                                <?php echo $invoice_all_data[0]['referred_by'] == $value->id ? "selected" : "" ?>
                                                value="<?php echo $value->id ?>">
                                                <?php echo $value->doctor_name ?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6" id="bank_div"
                                style="display: <?php if ($paytype == 2) {echo 'block';} else {echo 'none';}?>;">
                                <div class="form-group row">
                                    <label for="bank" class="col-sm-4 col-form-label"><?php
echo display('bank');
    ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <select name="bank_id" class="form-control" id="bank_id">
                                            <option value="">Select Location</option>
                                            <?php foreach ($bank_list as $bank) {?>
                                            <option value="<?php echo $bank['bank_id'] ?>"
                                                <?php if ($bank['bank_id'] == $bank_id) {echo 'selected';}?>>
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
                                    <?php
if ($invoice_all_data) {
        foreach ($invoice_all_data as $invoice) {
            $edit_batch_id[] = $invoice['batch_id'];
            $batch_wise_qty[] = $invoice['quantity'];
            $batch_info = $this->db->select('batch_id')
                ->from('product_purchase_details')
                ->where('product_id', $invoice['product_id'])
                ->group_by('batch_id', $invoice['product_id'])
                ->get()
                ->result();
            ?>
                                    <?php

            // $expire = $this->db->select('expeire_date')
            //     ->from('product_purchase_details')
            //     ->where('batch_id', $invoice['batch_id'])
            //     ->group_by('batch_id')
            //     ->get()
            //     ->result();

            ?>
                                    <tr>
                                        <td class="">
                                            <input type="text" name="product_name"
                                                onkeyup="invoice_productList(<?php echo $invoice['sl'] ?>);"
                                                value="<?php echo $invoice['product_name'] ?>-(<?php echo $invoice['product_model'] ?>)"
                                                class="form-control productSelection" required
                                                placeholder='<?php echo display('product_name') ?>'
                                                id="product_name_<?php echo $invoice['sl'] ?>"
                                                tabindex="<?php echo $invoice['sl'] + 2 ?>)">

                                            <input type="hidden"
                                                class="product_id_<?php echo $invoice['sl'] ?> autocomplete_hidden_value"
                                                name="product_id[]" value="<?php echo $invoice['product_id'] ?>"
                                                id="SchoolHiddenId" />
                                        </td>
                                        <td>
                                            <select name="batch_id[]" id="batch_id_<?php echo $invoice['sl'] ?>"
                                                class="form-control" required="required"
                                                onchange="product_stock(<?php echo $invoice['sl'] ?>)"
                                                tabindex="<?php echo $invoice['sl'] + 3 ?>)">
                                                <?php foreach ($batch_info as $batch) {?>
                                                <option value="<?php echo $batch->batch_id; ?>"
                                                    <?php if ($batch->batch_id == $invoice['batch_id']) {echo "selected";}?>>
                                                    <?php echo $batch->batch_id; ?></option>
                                                <?php }?>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" name="available_quantity[]"
                                                class="form-control text-right available_quantity_<?php echo $invoice['sl'] ?>"
                                                value="<?php echo $invoice['total_product'] + $invoice['quantity'] ?>"
                                                readonly="" id="available_quantity_<?php echo $invoice['sl'] ?>" />
                                        </td>
                                        <td id="expire_date_<?php echo $invoice['sl'] ?>">
                                            <?php
echo $invoice['expire_date'];
//                                 foreach ($expire as $vale) {
            //     echo $vale->expeire_date;
            // }
             ?>
                                        </td>
                                        <!-- <td>
                                            <input name="" id=""
                                                class="form-control text-right unit_<?php echo $invoice['sl'] ?> valid"
                                                value="<?php echo $invoice['unit'] ?>" readonly="" aria-invalid="false"
                                                type="text">
                                        </td> -->
                                        <td>
                                            <input type="text" name="product_quantity[]"
                                                onkeyup="quantity_calculate(<?php echo $invoice['sl'] ?>),checkqty(<?php echo $invoice['sl'] ?>);"
                                                onchange="quantity_calculate(<?php echo $invoice['sl'] ?>);"
                                                value="<?php echo $invoice['quantity'] ?>"
                                                class="total_qntt_<?php echo $invoice['sl'] ?> form-control text-right"
                                                id="total_qntt_<?php echo $invoice['sl'] ?>" min="0" placeholder="0.00"
                                                tabindex="<?php echo $invoice['sl'] + 4 ?>)" required />
                                        </td>

                                        <td>
                                            <input type="text" name="product_rate[]"
                                                onkeyup="quantity_calculate(<?php echo $invoice['sl'] ?>),checkqty(<?php echo $invoice['sl'] ?>);"
                                                onchange="quantity_calculate(<?php echo $invoice['sl'] ?>);"
                                                value="<?php echo $invoice['rate'] ?>"
                                                id="price_item_<?php echo $invoice['sl'] ?>"
                                                class="price_item<?php echo $invoice['sl'] ?> form-control text-right"
                                                min="0" required="" placeholder="0.00" readonly />
                                        </td>
                                        <!-- Discount -->
                                        <!-- <td>
                                            <input type="text" name="discount[]"
                                                onkeyup="quantity_calculate(<?php echo $invoice['sl'] ?>),checkqty(<?php echo $invoice['sl'] ?>);"
                                                onchange="quantity_calculate(<?php echo $invoice['sl'] ?>);"
                                                id="discount_<?php echo $invoice['sl'] ?>"
                                                class="form-control text-right" placeholder="0.00"
                                                value="<?php echo $invoice['discount'] ?>" min="0"
                                                tabindex="<?php echo $invoice['sl'] + 5 ?>)" />

                                            <input type="hidden" value="<?php echo $discount_type ?>"
                                                name="discount_type" id="discount_type_<?php echo $invoice['sl'] ?>">
                                        </td> -->

                                        <td>
                                            <input class="total_price form-control text-right" type="text"
                                                name="total_price[]" id="total_price_<?php echo $invoice['sl'] ?>"
                                                value="<?php echo $invoice['total_price'] ?>" readonly="readonly" />

                                            <input type="hidden" name="invoice_details_id[]" id="invoice_details_id"
                                                value="<?php echo $invoice['invoice_details_id'] ?>" />
                                        </td>
                                        <td>

                                            <!-- Tax calculate start-->
                                            <?php $x = 0;
            foreach ($taxes as $taxfldt) {
                $atax = $invoice['total_price'] * $invoice['tax' . $x];

                ?>

                                            <input id="total_tax<?php echo $x; ?>_<?php echo $invoice['sl'] ?>"
                                                class="total_tax<?php echo $x; ?>_<?php echo $invoice['sl'] ?>"
                                                type="hidden" value="<?php echo $invoice['tax' . $x] ?>">
                                            <input id="all_tax<?php echo $x; ?>_<?php echo $invoice['sl'] ?>"
                                                class="total_tax<?php echo $x; ?>" type="hidden" name="tax[]"
                                                value="<?php echo $atax ?>">
                                            <?php $x++;}?>
                                            <!-- Tax calculate end-->

                                            <!-- Discount calculate start-->
                                            <input type="hidden" id="total_discount_<?php echo $invoice['sl'] ?>"
                                                class="" value="<?php echo $invoice['discount'] ?>" />

                                            <input type="hidden" id="all_discount_<?php echo $invoice['sl'] ?>"
                                                class="total_discount dppr"
                                                value="<?php echo $invoice['discount'] * $invoice['quantity'] ?>" />
                                            <!-- Discount calculate end -->

                                            <button style="text-align: right;" class="btn btn-danger" type="button"
                                                value="<?php echo display('delete') ?>" onclick="deleteRow(this)"
                                                tabindex="<?php echo $invoice['sl'] + 6 ?>)"><i
                                                    class="fa fa-close"></i></button>
                                        </td>
                                    </tr>
                                    <?php
}
    }
    ?>
                                </tbody>

                                <tfoot>

                                    <tr>
                                        <td colspan="4" rowspan="1">
                                            <button style="text-align: right;" class="btn btn-info" type="button"
                                                onClick="addInputField('addinvoiceItem');" tabindex="12"
                                                id="add_invoice_item"><span>Add New Item</span>
                                            </button>
                                            <center style="display:none;"><label style="text-align:center;"
                                                    for="details"
                                                    class="col-form-label"><?php echo display('invoice_details') ?></label>
                                            </center>
                                            <textarea name="inva_details" class="form-control" style="display:none;"
                                                placeholder="<?php echo display('invoice_details') ?>">{invoice_details}</textarea>
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
                                                onchange="calculateSum()" placeholder="0.00"
                                                value="{invoice_discount}" />
                                            <input type="hidden" name="invoice_id" id="invoice_id"
                                                value="{invoice_id}" />
                                            <input type="hidden" id="total_discount_ammount"
                                                class="form-control text-right" name="total_discount"
                                                readonly="readonly" value="{total_discount}" />
                                            <input type="hidden" name="baseUrl" class="baseUrl"
                                                value="<?php echo base_url(); ?>" />

                                        </td>
                                        <td>
                                            <select id="dis-type" onchange="getPerc()" style="margin-bottom:5px">
                                                <option value="flat" selected>flat</option>
                                                <option value="%">%</option>
                                            </select>
                                        </td>
                                    </tr>

                                    <!-- <tr>
                                        <td colspan="1" style="text-align:right;">
                                            <b><?php echo display('total_discount') ?>:</b>
                                        </td>
                                        <td class="text-right">
                                            <input type="text" id="total_discount_ammount"
                                                class="form-control text-right" name="total_discount"
                                                readonly="readonly" value="{total_discount}" />
                                            <input type="hidden" name="baseUrl" class="baseUrl"
                                                value="<?php echo base_url(); ?>" />
                                        </td>
                                    </tr> -->
                                    <?php $i = 0;
    foreach ($taxes as $taxfldt) {?>
                                    <tr class="hideableRow hiddenRow">

                                        <td style="text-align:right;" colspan="6">
                                            <b><?php echo $taxfldt['tax_name'] ?></b>
                                        </td>
                                        <td class="text-right">
                                            <input id="total_tax_amount<?php echo $i; ?>" tabindex="-1"
                                                class="form-control text-right valid totalTax"
                                                name="total_tax<?php echo $i; ?>" value="<?php $txval = 'tax' . $i;
        echo $taxvalu[0][$txval]?>" readonly="readonly" aria-invalid="false" type="text">

                                        </td>
                                    </tr>
                                    <?php $i++;}?>
                                    <tr>

                                        <td style="text-align:right;" colspan="6">
                                            <b><?php echo display('total_tax') ?>:</b>
                                        </td>
                                        <td class="text-right">
                                            <input id="total_tax_amount" tabindex="-1"
                                                class="form-control text-right valid" name="total_tax"
                                                value="{total_tax}" readonly="readonly" aria-invalid="false"
                                                type="text">
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
                                                name="grand_total_price" value="<?php $grandttl = $total_amount;
    echo $grandttl;?>" readonly="readonly" />
                                            <input type="hidden" id="txfieldnum" value="<?php echo count($taxes); ?>">
                                            <input type="hidden" id="n_total" class="form-control text-right"
                                                name="n_total" value="{total_amount}" readonly="readonly"
                                                placeholder="" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" style="text-align:right;">
                                            <b><?php echo 'Round off' ?>:</b>
                                        </td>
                                        <td class="text-right">
                                            <input type="text" class="form-control text-right" readonly
                                                id="round-of-price" placeholder="0.00" value='{round_of}'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:right;" colspan="6">
                                            <b><?php echo display('paid_ammount') ?>:</b>
                                        </td>
                                        <td class="text-right">
                                            <input type="text" id="paidAmount" class="form-control text-right"
                                                name="paid_amount" readonly placeholder="0.00" value="{paid_amount}" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <!-- <tr>
                                        <td colspan="6" style="text-align:right;">
                                            <b><?php echo display('previous'); ?>:</b>
                                        </td>
                                        <td class="text-right">
                                            <input type="text" id="previous" class="form-control text-right"
                                                name="previous" value="{prev_due}" readonly="readonly" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" style="text-align:right;">
                                            <b><?php echo display('net_total'); ?>:</b>
                                        </td>
                                        <td class="text-right">
                                            <input type="text" id="n_total" class="form-control text-right"
                                                name="n_total" value="{total_amount}" readonly="readonly"
                                                placeholder="" />
                                        </td>
                                    </tr>

                                    <td style="text-align:right;" colspan="6">
                                        <b><?php echo display('paid_ammount') ?>:</b>
                                    </td>
                                    <td class="text-right">
                                        <input type="text" id="paidAmount" onkeyup="calculateSum(),checknum();"
                                            class="form-control text-right" name="paid_amount" placeholder="0.00"
                                            tabindex="13" value="{paid_amount}" />
                                    </td>
                                    </tr> -->
                                    <tr>
                                        <td colspan="6"></td>
                                        <td colspan=2>
                                            <input style="display:none;" type="button" id="full_paid_tab"
                                                class="btn btn-warning" value="<?php echo display('full_paid') ?>"
                                                tabindex="14" onClick="full_paid()" />

                                            <input type="submit" id="add_invoice" class="btn btn-success"
                                                name="add-invoice" value="<?php echo display('save') ?>"
                                                tabindex="15" />
                                        </td>

                                    </tr>
                                    <tr class="hiddenRow">
                                        <td style="text-align:right;" colspan="5"><b><?php echo display('due') ?>:</b>
                                        </td>
                                        <td class="text-right">
                                            <input type="text" id="dueAmmount" class="form-control text-right"
                                                name="due_amount" value="{due_amount}" readonly="readonly" />
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
    </section>
    <?php
} else {
    ?>
    <div class="col-sm-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4><?php echo display('You do not have permission to access. Please contact with administrator') ?>
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
</div>
<!-- Edit Invoice End -->

<style type="text/css">
.btn:focus {
    background-color: #6A5ACD;
}
</style>
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
<!-- Invoice Report End -->

<script type="text/javascript">
$('.ac').click(function() {
    $('.customer_hidden_value').val('');
});
$('#myRadioButton_1').click(function() {
    $('#customer_name').val('');
});

$('#myRadioButton_2').click(function() {
    $('#customer_name_others').val('');
});
$('#myRadioButton_2').click(function() {
    $('#customer_name_others_address').val('');
});
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#normalinvoice .toggle').on('click', function() {
        $('#normalinvoice .hideableRow').toggleClass('hiddenRow');
    })
});


var edit_batch_ids = '<?=implode(',', $edit_batch_id);?>'.split(',');
var batch_wise_qty = '<?=implode(',', $batch_wise_qty);?>'.split(',');

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
            let e = $.inArray(batch_id, edit_batch_ids);
            if (e != -1) {
                obj.total_product = Number(obj.total_product) + Number(batch_wise_qty[e]);
            }
            $('#' + available_quantity).val(obj.total_product);

            if (e != -1) {
                $('#total_qntt_' + sl).val(Number(batch_wise_qty[e])).trigger('change')
            }

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
    var dis = $("#discount_" + sl).val();
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

    // if (isNaN(dis)) {
    //     alert("<?php echo display('must_input_numbers') ?>");
    //     document.getElementById("discount_" + sl).value = '';
    //     return false;
    // }
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


function customer_autocomplete(sl) {

    var customer_id = $('#customer_id').val();
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
$(function() {
    $(".total_qntt_1").trigger("change")
})

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
            //var sl = $(this).parent().parent().find(".sl").val();
            var id = ui.item.value;
            var dataString = 'product_id=' + id;
            var base_url = $('.baseUrl').val();

            $.ajax({
                type: "POST",
                url: base_url + "Cinvoice/retrieve_product_data_inv",
                data: {
                    'product_id': id,
                    'batches': edit_batch_ids,
                },
                cache: false,
                success: function(data) {
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




$(function() {
    x = 1;
    data.map(function(ele) {
        quantity_calculate(x);
        x++;
    })
})
</script>