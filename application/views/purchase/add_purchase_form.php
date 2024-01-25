<!-- Product Purchase js -->
<script src="<?php echo base_url() ?>my-assets/js/admin_js/json/product_purchase.js.php"></script>
<!-- manufacturer Js -->
<script src="<?php echo base_url(); ?>my-assets/js/admin_js/json/manufacturer.js.php"></script>

<script src="<?php echo base_url() ?>my-assets/js/admin_js/purchase.js" type="text/javascript"></script>
<style type="text/css">
.close {
    color: white;
}

.input-error {
    outline: 1px solid red;
}
</style>

<!-- Add New Purchase Start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('add_purchase') ?></h1>
            <small><?php echo display('add_new_purchase') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('purchase') ?></a></li>
                <li class="active"><?php echo display('add_purchase') ?></li>
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
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
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
if ($this->permission1->method('add_purchase', 'create')->access()) {?>
        <!-- Purchase report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="panel-title col-md-6">
                                <!-- <h4><?php echo display('add_purchase') ?></h4> -->
                            </div>
                            <div class="col-md-6 d-flex justify-content-right">
                                <div class="column">
                                    <?php if ($this->permission1->method('add_purchase', 'create')->access()) {?>
                                    <button type="button" class="btn btn-info m-b-5 m-r-2" data-toggle="modal"
                                        data-target="#purchase_csv_modal">Upload CSV Purchase</button>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        <?php echo form_open_multipart('Cpurchase/insert_purchase', array('class' => 'form-vertical', 'id' => 'insert_purchase', 'name' => 'insert_purchase')) ?>


                        <div class="row" id="manufacturer_info">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="manufacturer_sss"
                                        class="col-sm-3 col-form-label"><?php echo display('manufacturer') ?>
                                        <i class="text-danger">*</i>
                                    </label>
                                    <div class="col-sm-9">
                                        <select name="manufacturer_id" id="manufacturer_id" class="form-control "
                                            required="required" tabindex="1" onchange="product_pur_or_list()">


                                            <option value=""> <?php echo display('select_manufacturer') ?></option>
                                            <?php
$manufacturer_id = $this->session->userdata('manufacturer_id');
    if ($all_manufacturer) {
        foreach ($all_manufacturer as $manufac) {
            ?>
                                            <option value="<?php echo $manufac['manufacturer_id'] ?>"
                                                <?php if ($manufacturer_id == $manufac['manufacturer_id']) {echo "selected";}?>>
                                                <?php echo $manufac['manufacturer_name'] ?></option>
                                            <?php
}
    }
    ?>
                                        </select>
                                    </div>


                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="date"
                                        class="col-sm-4 col-form-label"><?php echo display('purchase_date') ?>
                                        <i class="text-danger">*</i>
                                    </label>
                                    <div class="col-sm-8">
                                        <?php $date = date('Y-m-d');?>
                                        <input type="text" tabindex="2" class="form-control purchase_datepicker"
                                            name="purchase_date" value="<?php echo $date; ?>" id="purdate" required />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="invoice_no"
                                        class="col-sm-3 col-form-label"><?php echo display('invoice_no') ?>
                                        <i class="text-danger">*</i>
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" tabindex="3" class="form-control" name="chalan_no"
                                            placeholder="<?php echo display('invoice_no') ?>" id="invoice_no"
                                            required />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="adress" class="col-sm-4 col-form-label"><?php echo display('details') ?>
                                    </label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" tabindex="4" id="adress" name="purchase_details"
                                            placeholder=" <?php echo display('details') ?>" rows="1"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6" id="paid_div">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><?php
echo display('payment');
    ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-3">
                                        <input style="text-align:right" type="number" class="form-control"
                                            name="paid_amt" value="0" id="paid_amt" placeholder="0.00">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6" id="payment_from_1">
                                <div class="form-group row">
                                    <label for="payment_type" class="col-sm-4 col-form-label"><?php
echo display('payment_type');
    ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <select name="paytype" class="form-control" required="" onchange="">
                                            <option value="1">Cash </option>
                                            <option value="3">UPI </option>
                                            <option value="4">Credit Card </option>
                                            <option value="5">Cheque</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6" id="bank_div" style="display: none;">
                                <div class="form-group row">
                                    <label for="bank" class="col-sm-4 col-form-label"><?php
echo display('bank');
    ?> <i class="text-danger">*</i></label>
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
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="date" class="col-sm-3 col-form-label">Invoice Date
                                        <i class="text-danger">*</i>
                                    </label>
                                    <div class="col-sm-9">
                                        <?php $date = date('Y-m-d');?>
                                        <input type="text" tabindex="2" class="form-control" name="invoice_date"
                                            id='invoice_date' value="<?php echo $date; ?>" required />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive" style="margin-top: 10px">
                            <table class="table table-bordered table-hover" id="purchaseTable">
                                <thead>
                                    <tr>
                                        <th class="text-center" width="20%"><?php echo display('item_information') ?><i
                                                class="text-danger">*</i></th>
                                        <th class="text-center" width="7%"><?php echo "Pack of" ?></th>
                                        <th class="text-center"><?php echo display('batch_id') ?> <i
                                                class="text-danger">*</i></th>
                                        <th class="text-center"><?php echo display('expeire_date') ?> <i
                                                class="text-danger">*</i></th>
                                        <th class="text-center" width="7%"><?php echo display('stock') ?></th>
                                        <th class="text-center"><?php echo "Quantity<br><i>(in packs)" ?> <i
                                                class="text-danger">*</i>
                                        </th>
                                        <th class="text-center" width="7%"><?php echo 'Free' ?></th>
                                        <th class="text-center" width="8%"><?php echo display('manufacturer_rate') ?><i
                                                class="text-danger">*</i></th>
                                        <th class="text-center" width="6%"><?php echo 'Dis.' ?> %</th>
                                        <th class="text-center" width="6%"><?php echo 'GST' ?> %</th>
                                        <th class="text-center"><?php echo display('total') ?></th>
                                        <th class="text-center"><?php echo display('action') ?></th>
                                    </tr>
                                </thead>
                                <tbody id="addPurchaseItem">
                                    <tr>
                                        <td class="span3 manufacturer">
                                            <input type="text" name="product_name" required
                                                class="form-control product_name productSelection"
                                                onkeypress="product_pur_or_list(1);"
                                                placeholder="<?php echo display('product_name') ?>" id="product_name_1"
                                                tabindex="5">

                                            <input type="hidden" class="autocomplete_hidden_value product_id_1"
                                                name="product_id[]" id="SchoolHiddenId" />

                                            <input type="hidden" class="sl" value="1">
                                        </td>
                                        <td><input type="number" name=strength[] id="strength_1"
                                                class="form-control text-right" placeholder="0.00" readonly /></td>
                                        <td>
                                            <input type="text" name="batch_id[]" id="batch_id_1"
                                                class="form-control text-right" tabindex="6"
                                                placeholder="<?php echo display('batch_id') ?>" required="" />
                                        </td>
                                        <td>
                                            <input type="text" name="expeire_date[]" id="expeire_date_1"
                                                class="form-control datepicker " tabindex="7"
                                                placeholder="<?php echo display('expeire_date') ?>"
                                                onchange="checkExpiredate(1)" required="" />
                                        </td>

                                        <td class="wt">
                                            <input type="text" id="available_quantity_1"
                                                class="form-control text-right stock_ctn_1" placeholder="0.00"
                                                readonly />
                                        </td>

                                        <td class="text-right">
                                            <input type="text" name="product_quantity[]" id="quantity_1"
                                                class="form-control text-right store_cal_1"
                                                onkeyup="calculate_store(1),checkqty(1);" onchange="calculate_store(1);"
                                                placeholder="0.00" value="" min="0" tabindex="8" required="required" />
                                        </td>

                                        <td>
                                            <input type="text" name="free[]" min='0' class='form-control text-right'
                                                onkeypress='return this.value!="-" && !isNaN(this.value)' />
                                        </td>

                                        <td class="test">
                                            <input type="text" name="product_rate[]"
                                                onkeyup="calculate_store(1),checkqty(1);" onchange="calculate_store(1);"
                                                id="product_rate_1" class="form-control product_rate_1 text-right"
                                                placeholder="0.00" value="" min="0" tabindex="9" required="required"
                                                readonly />
                                        </td>

                                        <td>
                                            <input type="text" name=discount[] id="discount_1"
                                                onkeyup='calculate_disc(1)' class="form-control text-right"
                                                placeholder="0.00" />
                                            <input type="hidden" id="discount_price_1" class="discount_price">
                                        </td>

                                        <td><input type="text" name=tax[] id="tax_1"
                                                class="form-control text-right taxes" placeholder="0.00" readonly />
                                            <input type="hidden" id="tax_price_1" class="tax_price">
                                        </td>

                                        <td class="text-right">
                                            <input class="form-control total_price text-right" type="text"
                                                name="total_price[]" id="total_price_1" value="0.00"
                                                readonly="readonly" />
                                        </td>
                                        <td>
                                            <button style="text-align: right;" class="btn btn-danger red" type="button"
                                                value="<?php echo display('delete') ?>" onclick="deleteRow(1,this)"
                                                tabindex="10"><?php echo display('delete') ?></button>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2">
                                            <input type="button" id="add_invoice_item" class="btn btn-info"
                                                name="add-invoice-item"
                                                onClick="addPurchaseOrderField1('addPurchaseItem');"
                                                value="<?php echo display('add_new_item') ?>" tabindex="11" />
                                            <input type="hidden" name="baseUrl" class="baseUrl"
                                                value="<?php echo base_url(); ?>" />
                                        </td>
                                        <td style="text-align:right;" colspan="8">
                                            <b><?php echo display('grand_total') ?>:</b>
                                        </td>
                                        <td class="text-right">
                                            <input type="text" id="grandTotal" class="text-right form-control"
                                                readonly="readonly" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:right;" colspan="10">
                                            <b><?php echo 'Other Charges' ?>:</b>
                                        </td>
                                        <td class="text-right">
                                            <input type="text" name='other_charges' id="other_charges"
                                                onkeyup='calculate_total()' class="text-right form-control" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:right;" colspan="10">
                                            <b><?php echo display('total_discount') ?>:</b>
                                        </td>
                                        <td class="text-right">
                                            <input type="text" id="total_discount" class="text-right form-control"
                                                name="total_discount" readonly="readonly" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:right;" colspan="10">
                                            <b><?php echo display('total_tax') ?>:</b>
                                        </td>
                                        <td class="text-right">
                                            <input type="text" id="total_tax" class="text-right form-control"
                                                name="total_tax" readonly="readonly" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:right;" colspan="10">
                                            <b><?php echo 'Round off' ?>:</b>
                                        </td>
                                        <td class="text-right">
                                            <input type="text" id="round_of" class="text-right form-control"
                                                readonly="readonly" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:right;" colspan="10">
                                            <b><?php echo display('net_total') ?>:</b>
                                        </td>
                                        <td class="text-right">
                                            <input type="text" id="net_total" class="text-right form-control"
                                                name="grand_total_price" readonly="readonly" />
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6">
                                <input type="submit" id="add_purchase" class="btn btn-primary btn-large"
                                    name="add-purchase" value="<?php echo display('submit') ?>" />

                            </div>
                        </div>
                        <?php echo form_close() ?>
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
        <div id="purchase_csv_modal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Upload Csv Purchase</h4>
                    </div>
                    <div class="modal-body">

                        <div class="panel panel-bd">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4><?php echo 'CSV Purchase'; ?><a
                                            href="<?php echo base_url('assets/data/csv/purchase_csv_sample.csv') ?>"
                                            class="btn btn-primary pull-right"><i class="fa fa-download"></i> Download
                                            Sample File</a></h4>
                                </div>
                            </div>

                            <div class="panel-body">
                                <div class="col-sm-12"></div>
                                <?php echo form_open_multipart('Cpurchase/uploadCsv_Purchase', array('class' => 'form-vertical', 'id' => 'validate', 'name' => 'insert_csv_purchase')) ?>
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
    </section>
</div>




<!-- Purchase Report End -->

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
<script type="text/javascript">
function product_pur_or_list(sl) {

    var manufacturer_id = $('#manufacturer_id').val();
    if (manufacturer_id == 0) {
        alert('<?php echo display('please_select_manufacturer'); ?> !');
        return false;
    }

    // Auto complete
    var options = {
        minLength: 0,
        source: function(request, response) {
            var product_name = $('#product_name_' + sl).val();
            $.ajax({
                url: "<?php echo base_url('Cpurchase/product_search_by_manufacturer') ?>",
                method: 'post',
                dataType: "json",
                data: {
                    term: request.term,
                    manufacturer_id: $('#manufacturer_id').val(),
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
            var sl = $(this).parent().parent().find(".sl").val();

            var product_id = ui.item.value;

            var manufacturer_id = $('#manufacturer_id').val();


            var base_url = $('.baseUrl').val();


            var available_quantity = 'available_quantity_' + sl;
            var product_rate = 'product_rate_' + sl;
            var strength = 'strength_' + sl;
            var tax = 'tax_' + sl;


            $.ajax({
                type: "POST",
                url: base_url + "Cinvoice/retrieve_product_data",
                data: {
                    product_id: product_id,
                    manufacturer_id: manufacturer_id
                },
                cache: false,
                success: function(data) {
                    console.log(data);
                    obj = JSON.parse(data);
                    $('#' + available_quantity).val(obj.total_product / obj.strength);
                    $('#' + product_rate).val(obj.manufacturer_pack_price);
                    $('#' + strength).val(obj.strength);
                    $('#' + tax).val(obj.tax * 100);
                    calculate_store(sl);
                }
            });
            $(this).unbind("change");
            return false;
        }
    }

    $('body').on('keypress.autocomplete', '.product_name', function() {
        $(this).autocomplete(options);
    });

}
</script>


<script type="text/javascript">
// Counts and limit for purchase order
var count = 2;
var limits = 500;






function addPurchaseOrderField1(divName) {
    if (count == limits) {
        alert("<?php echo display('you_have_reached_the_limit_of_adding') ?> " + count +
            "<?php echo display('inputs') ?> ");
    } else {
        var newdiv = document.createElement('tr');
        var tabin = "product_name_" + count;
        tabindex = count * 7,
            newdiv = document.createElement("tr");
        tab1 = tabindex + 1;

        tab2 = tabindex + 2;
        tab3 = tabindex + 3;
        tab4 = tabindex + 4;
        tab5 = tabindex + 5;
        tab6 = tabindex + 6;
        tab7 = tabindex + 7;
        tab8 = tab7 + 1;

        newdiv.innerHTML =
            '<td class="span3 manufacturer"><input type="text" name="product_name" required class="form-control product_name productSelection" onkeypress="product_pur_or_list(' +
            count + ');" placeholder="<?php echo display("product_name") ?>" id="product_name_' + count +
            '" tabindex="' + tab1 + '" > <input type="hidden" class="autocomplete_hidden_value product_id_' + count +
            '" name="product_id[]" id="SchoolHiddenId"/>  <input type="hidden" class="sl" value="' + count +
            '">  </td> <td><input type="number" name="strength[]" id="strength_' + count +
            '" class="form-control text-right" placeholder = "0.00" readonly /> </td><td> <input type="text" name="batch_id[]" id="batch_id_' +
            count +
            '" tabindex="' +
            tab2 +
            '" class="form-control text-right" required  tabindex="11" placeholder="<?php echo display('batch_id') ?>"/></td><td><input type="text" name="expeire_date[]" onchange="checkExpiredate(' +
            count + ')" id="expeire_date_' + count + '" required class="form-control datepicker" tabindex="' + tab3 +
            '"  placeholder="<?php echo display('expeire_date') ?>" autocomplete="off"/> </td>  <td class="wt"> <input type="text" id="available_quantity_' +
            count + '" class="form-control text-right stock_ctn_' + count +
            '" placeholder="0.00" readonly/> </td><td class="text-right"><input type="text" name="product_quantity[]" tabindex="' +
            tab4 + '" required  id="quantity_' + count + '" class="form-control text-right store_cal_' + count +
            '" onkeyup="calculate_store(' + count + '),checkqty(' + count + ');" onchange="calculate_store(' + count +
            ');" placeholder="0.00" value="" min="0"/>  </td><td><input type="text" name="free[]" min="0" class="form-control text-right" onkeypress="return this.value != ' +
            "'-'" +
            '&& this.value == +this.value" /></td><td class="test"><input type="text" name="product_rate[]" readonly required onkeyup="calculate_store(' +
            count + '),checkqty(' + count + ');" onchange="calculate_store(' + count + ');" id="product_rate_' +
            count +
            '" class="form-control product_rate_' + count +
            ' text-right" placeholder="0.00" value="" min="0" tabindex="' + tab5 +
            '"/></td><td><input type="text" name=discount[] onkeyup="calculate_disc(' + count + ')" id="discount_' +
            count +
            '"class="form-control text-right" placeholder="0.00"/> <input type="hidden" id="discount_price_' +
            count +
            '" class="discount_price"/></td><td><input type="text" name=tax[] id="tax_' +
            count +
            '" class="form-control text-right"placeholder="0.00" readonly /> <input type="hidden" id="tax_price_' +
            count +
            '" class="tax_price"/></td><td class="text-right"><input class="form-control total_price text-right total_price_' +
            count +
            '" type="text" name="total_price[]" id="total_price_' + count +
            '" value="0.00" readonly="readonly" /> </td><td> <input type="hidden" id="total_discount_1" class="" /><input type="hidden" id="all_discount_1" class="total_discount" /><button style="text-align: right;" class="btn btn-danger red" type="button" value="<?php echo display('delete') ?>" onclick="deleteRow(' +
            count + ',this)"tabindex="' +
            tab6 + '"><?php echo display('delete') ?></button></td>';
        document.getElementById(divName).appendChild(newdiv);
        document.getElementById(tabin).focus();
        document.getElementById("add_invoice_item").setAttribute("tabindex", tab7);
        document.getElementById("add_purchase").setAttribute("tabindex", tab8)

        count++;
        $(".datepicker").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: "yy-mm-dd",
            minDate: new Date()
        });
        $("select.form-control:not(.dont-select-me)").select2({
            placeholder: "Select option",
            allowClear: true
        });
    }
}

$(function() {
    $(".datepicker").datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: "yy-mm-dd",
        minDate: new Date()
    });

    $("#invoice_date").datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: "yy-mm-dd",
    });

    $(".purchase_datepicker").datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: "yy-mm-dd",
        maxDate: new Date()
    });
})

//Calculate store product
function calculate_store(sl) {

    var gr_tot = 0;
    var item_ctn_qty = $("#quantity_" + sl).val();
    var vendor_rate = $("#product_rate_" + sl).val();

    var total_price = item_ctn_qty * vendor_rate;
    $("#total_price_" + sl).val(total_price.toFixed(2));


    //Total Price
    $(".total_price").each(function() {
        isNaN(this.value) || 0 == this.value.length || (gr_tot += parseFloat(this.value))
    });

    $("#grandTotal").val(gr_tot.toFixed(2, 2));
    calculate_disc(sl);
}
</script>



<!-- JS -->



<script type="text/javascript">
function checkExpiredate(sl) {
    var purdates = $("#purdate").val();
    var expiredate = $("#expeire_date_" + sl).val();
    var purchasedate = new Date(purdates);
    var expirydate = new Date(expiredate);
    if (expirydate <= purchasedate) {
        alert('<?php echo display('expiry_date_should_be_greater_than_puchase_date') ?>');
        document.getElementById("expeire_date_" + sl).value = '';
        return false;
    }
    return true;
}

function checkqty(sl) {

    var y = $("#quantity_" + sl).val();
    var x = $("#product_rate_" + sl).val();
    if (isNaN(y)) {
        alert("<?php echo display('must_input_numbers') ?>");
        document.getElementById("quantity_" + sl).value = '';
        //$("#quantity_"+sl).val() = '';
        return false;
    }
    if (isNaN(x)) {
        alert("<?php echo display('must_input_numbers') ?>");
        document.getElementById("product_rate_" + sl).value = '';
        return false;
    }
}

function calculate_total() {
    let total_disc = 0;
    let total_tax = 0;
    $(".discount_price").map(function() {
        total_disc += Number($(this).val());
    })
    $('.tax_price').map(function() {
        total_tax += Number($(this).val()) || 0;
    })
    $('#total_tax').val(total_tax);
    $('#total_discount').val(total_disc);

    let gtotal = Number($("#grandTotal").val());
    let ntotal = (gtotal + total_tax - total_disc).toFixed(2, 2);
    let roundof = Math.round(ntotal);
    let other_c = Number($('#other_charges').val() || 0);
    $('#net_total').val(roundof + other_c);
    $('#round_of').val((roundof - ntotal).toFixed(2, 2));
}

function calculate_disc(sl) {
    var total_price = $("#total_price_" + sl).val() || 0;

    var dis_per = $("#discount_" + sl).val() || 0;
    var dis_price = ((total_price * dis_per) / 100).toFixed(2, 2);
    $('#discount_price_' + sl).val(dis_price);

    var tax_per = $("#tax_" + sl).val() || 0;
    var tax_price = ((total_price - dis_price) * tax_per / 100).toFixed(2, 2);
    $('#tax_price_' + sl).val(tax_price);

    calculate_total();
}
</script>