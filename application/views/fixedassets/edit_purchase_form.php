<!-- Product Purchase js -->
<script src="<?php echo base_url() ?>my-assets/js/admin_js/json/product_purchase.js.php"></script>
<!-- supplier Js -->
<!-- <script src="<?php echo base_url(); ?>my-assets/js/admin_js/numberconverter.js" ></script> -->
<script src="<?php echo base_url() ?>my-assets/js/admin_js/purchase.js" type="text/javascript"></script>
<style type="text/css">
.close {
    color: white;
}
</style>

<!-- Add New Purchase Start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('fixed_assets') ?></h1>
            <small><?php echo display('add_new_purchase') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('fixed_assets') ?></a></li>
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

        <!-- Purchase report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('add_purchase') ?></h4>
                        </div>
                    </div>

                    <div class="panel-body">
                        <?php echo form_open_multipart('Fixedassets/update_asserts_purchase', array('class' => 'form-vertical', 'id' => 'update_asserts_purchase', 'name' => 'update_asserts_purchase')) ?>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="date"
                                        class="col-sm-4 col-form-label"><?php echo display('purchase_date') ?>
                                        <i class="text-danger">*</i>
                                    </label>
                                    <div class="col-sm-8">
                                        <?php $date = date('Y-m-d');?>
                                        <input type="text" tabindex="2" class="form-control datepicker"
                                            name="purchase_date" value="{date}" id="date" required />
                                        <input type="hidden" name="id" value="{id}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6" id="payment_from_1">
                                <div class="form-group row">
                                    <label for="payment_type" class="col-sm-4 col-form-label"><?php
echo display('payment_type');
?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <select name="paytype" class="form-control" required=""
                                            onchange="bank_paymet(this.value)">
                                            <option value="">Select Payment Option</option>
                                            <option value="1" <?php if ($type == 1) {echo 'selected';}?>>Cash Payment
                                            </option>
                                            <option value="3" <?php if ($type == 3) {echo 'selected';}?>>UPI Payment
                                            </option>
                                            <option value="4" <?php if ($type == 4) {echo 'selected';}?>>Credit Card
                                                Payment
                                            </option>
                                            <option value="5" <?php if ($type == 5) {echo 'selected';}?>>Due Payment
                                            </option>

                                        </select>



                                    </div>

                                </div>
                            </div>

                            <div class="col-sm-6" id="payment_from_1">
                                <div class="form-group row">
                                    <label for="supplier_code" class="col-sm-4 col-form-label"><?php
echo display('supplier_name');
?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input type="text" size="100" name="supplier_code" class=" form-control"
                                            placeholder='<?php echo display('supplier_name') ?>' id="supplier_code"
                                            tabindex="1" onkeyup="supplier_info()" required value="{supplier_name}" />

                                        <input id="autocomplete_supplier_id" class="supplier_id_hidden_value abc"
                                            type="hidden" name="supplier_id" value="{supplier_id}">
                                    </div>

                                </div>
                            </div>

                            <div class="col-sm-6" id="">
                                <div class="form-group row">
                                    <label for="address" class="col-sm-4 col-form-label"><?php
echo display('address');
?> <i class="text-danger"></i></label>
                                    <div class="col-sm-8">
                                        <input type="text" size="100" name="address" class=" form-control"
                                            placeholder='<?php echo display('address') ?>' id="address" tabindex="1"
                                            value="{address}" readonly />


                                    </div>

                                </div>
                            </div>

                            <div class="col-sm-6" id="payment_from_1">
                                <div class="form-group row">
                                    <label for="previous" class="col-sm-4 col-form-label"><?php
echo display('previous');
?> <i class="text-danger"></i></label>
                                    <div class="col-sm-8">
                                        <input type="text" size="100" name="previous" class=" form-control"
                                            placeholder='<?php echo display('previous') ?>' id="previous" tabindex="1"
                                            readonly />


                                    </div>

                                </div>
                            </div>

                            <div class="col-sm-6" id="bank_div"
                                style="display:<?php if ($type == 3) {echo '';} else {echo 'none';}?>;">
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
                            <table class="table table-bordered table-hover" id="purchaseTable">
                                <thead>
                                    <tr>
                                        <th class="text-center" width="20%"><?php echo display('item_code') ?><i
                                                class="text-danger">*</i></th>
                                        <th class="text-center" width="20%"><?php echo display('item_information') ?><i
                                                class="text-danger">*</i></th>

                                        <th class="text-center"><?php echo display('quantity') ?> <i
                                                class="text-danger">*</i></th>
                                        <th class="text-center"><?php echo display('rate') ?><i
                                                class="text-danger">*</i></th>
                                        <th class="text-center"><?php echo display('total') ?></th>
                                        <th class="text-center"><?php echo display('action') ?></th>
                                    </tr>
                                </thead>
                                <tbody id="addPurchaseItem">
                                    {purchase_details}
                                    <tr>
                                        <td class="span3 supplier">
                                            <input type="text" name="item_codess" required
                                                class="form-control item_code productSelection"
                                                onkeypress="product_pur_or_list({sl});"
                                                placeholder="<?php echo display('item_code') ?>" id="item_code_{sl}"
                                                tabindex="5" value="{item_code}">

                                            <input type="hidden" class="autocomplete_hidden_value item_code_{sl}"
                                                name="item_code[]" id="SchoolHiddenId" value="{item_code}" />

                                            <input type="hidden" class="sl" value="{sl}">
                                        </td>
                                        <td class="span3 ">
                                            <input type="text" name="item_name" class="form-control item_name "
                                                placeholder="<?php echo display('item_name') ?>" id="item_name_{sl}"
                                                tabindex="5" readonly value="{item_name}">

                                        </td>



                                        <td class="text-right">
                                            <input type="text" name="item_qty[]" id="cartoon_{sl}"
                                                class="form-control text-right store_cal_{sl}"
                                                onkeyup="calculate_store({sl});" onchange="calculate_store({sl});"
                                                placeholder="0.00" value="{qty}" min="0" tabindex="6" />
                                        </td>
                                        <td class="test">
                                            <input type="text" name="item_price[]" onkeyup="calculate_store({sl});"
                                                onchange="calculate_store({sl});" id="item_price_{sl}"
                                                class="form-control item_price_{sl} text-right" placeholder="0.00"
                                                value="{price}" min="0" tabindex="7" />
                                        </td>


                                        <td class="text-right">
                                            <input class="form-control total_price text-right" type="text"
                                                name="total_price[]" id="total_price_{sl}" value="{total}"
                                                readonly="readonly" />
                                        </td>
                                        <td>



                                            <button style="text-align: right;" class="btn btn-danger red" type="button"
                                                value="<?php echo display('delete') ?>" onclick="deleteRow(this)"
                                                tabindex="8"><?php echo display('delete') ?></button>
                                        </td>
                                    </tr>
                                    {/purchase_details}
                                </tbody>
                                <tfoot>


                                    <tr>
                                        <td colspan="3">

                                        </td>
                                        <td style="text-align:right;" colspan="1">
                                            <b><?php echo display('grand_total') ?>:</b>
                                        </td>
                                        <td class="text-right">
                                            <input type="text" id="grandTotal" class="text-right form-control"
                                                name="grand_total_price" value="{gtotal}" readonly="readonly" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5"> <input type="button" id="add_invoice_item" class="btn btn-info"
                                                name="add-invoice-item"
                                                onClick="addPurchaseOrderField1('addPurchaseItem');"
                                                value="<?php echo display('add_new_item') ?>" tabindex="9" />
                                            <input type="hidden" name="baseUrl" class="baseUrl"
                                                value="<?php echo base_url(); ?>" />
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
    if (val == 3) {
        var style = 'block';
        // document.getElementById('bank_id').setAttribute("required", true);
    } else {
        var style = 'none';
        // document.getElementById('bank_id').setAttribute("required", false);
    }

    document.getElementById('bank_div').style.display = style;
}
</script>
<script type="text/javascript">
function supplier_due(id) {
    $.ajax({
        url: '<?php echo base_url('Fixedassets/supplier_previous') ?>',
        type: 'post',
        data: {
            supplier_id: id
        },
        success: function(msg) {
            obj = JSON.parse(msg);
            $("#previous").val(obj.previous);
            $("#address").val(obj.address);
        },
        error: function(xhr, desc, err) {
            alert('failed');
        }
    });
}
</script>
<script type="text/javascript">
function supplier_info(sl) {

    var supplier_id = $('#autocomplete_supplier_id').val();
    // Auto complete
    var options = {
        minLength: 0,
        source: function(request, response) {
            var supplier_code = $('#supplier_code').val();

            $.ajax({
                url: "<?php echo base_url('Fixedassets/supplierinfo_autocomplete') ?>",
                method: 'post',
                dataType: "json",
                data: {
                    term: request.term,
                    supplier_code: supplier_code,
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
            $(this).parent().parent().find("#autocomplete_supplier_id").val(ui.item.value);
            var supp_id = ui.item.value;
            supplier_due(supp_id);

            $(this).unbind("change");
            return false;
        }
    }

    $('body').on('keydown.autocomplete', '#supplier_code', function() {
        $(this).autocomplete(options);
    });

}
</script>
<script type="text/javascript">
function product_pur_or_list(sl) {

    var supplier_id = $('#autocomplete_supplier_id').val();
    var store_code = $('#store_code').val();
    if (supplier_id == 0) {
        alert('Please select supplier !');
        return false;
    }
    if (store_code == 0) {
        alert('Please select Location !');
        return false;
    }
    // Auto complete
    var options = {
        minLength: 0,
        source: function(request, response) {
            var item_code = $('#item_code_' + sl).val();
            $.ajax({
                url: "<?php echo base_url('Fixedassets/searchafixedasset') ?>",
                method: 'post',
                dataType: "json",
                data: {
                    term: request.term,
                    item_code: item_code
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

            var asset_item_code = ui.item.value;
            var store_code = $('#store_code').val();
            var base_url = $('.baseUrl').val();
            var available_quantity = 'available_quantity_' + sl;
            var item_price = 'item_price_' + sl;
            var item_name = 'item_name_' + sl;
            $.ajax({
                type: "POST",
                url: base_url + "Fixedassets/retrieve_asset_data",
                data: {
                    asset_item_code: asset_item_code
                },
                cache: false,
                success: function(data) {
                    console.log(data);
                    obj = JSON.parse(data);
                    $('#' + item_price).val(obj.purchase_price);
                    $('#' + item_name).val(obj.item_name);

                }
            });

            $(this).unbind("change");
            return false;
        }
    }

    $('body').on('keydown.autocomplete', '.item_code', function() {
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
        alert("You have reached the limit of adding " + count + " inputs");
    } else {
        var newdiv = document.createElement('tr');
        var tabin = "item_code_" + count;
        tabindex = count * 4,
            newdiv = document.createElement("tr");
        tab1 = tabindex + 1;
        tab2 = tabindex + 2;
        tab3 = tabindex + 3;
        tab4 = tabindex + 4;
        tab5 = tabindex + 5;
        tab6 = tab5 + 1;
        tab7 = tab6 + 1;



        newdiv.innerHTML =
            '<td class="span3 supplier"><input type="text" name="item_codesss" required class="form-control item_code productSelection" onkeypress="product_pur_or_list(' +
            count + ');" placeholder="<?php echo display("item_code") ?>" id="item_code_' + count + '" tabindex="' +
            tab1 + '" > <input type="hidden" class="autocomplete_hidden_value item_code_' + count +
            '" name="item_code[]" id="SchoolHiddenId"/>  <input type="hidden" class="sl" value="' + count +
            '">  </td> <td class="span3 "><input type="text" name="item_name" class="form-control item_name " placeholder="<?php echo display('item_name') ?>" id="item_name_' +
            count +
            '" tabindex="5" readonly> </td>  <td class="text-right"><input type="text" name="item_qty[]" tabindex="' +
            tab2 + '" required  id="cartoon_' + count + '" class="form-control text-right store_cal_' + count +
            '" onkeyup="calculate_store(' + count + ');" onchange="calculate_store(' + count +
            ');" placeholder="0.00" value="" min="0"/>  </td><td class="test"><input type="text" name="item_price[]" onkeyup="calculate_store(' +
            count + ');" onchange="calculate_store(' + count + ');" id="item_price_' + count +
            '" class="form-control item_price_' + count +
            ' text-right" placeholder="0.00" value="" min="0" tabindex="' + tab3 +
            '"/></td><td class="text-right"><input class="form-control total_price text-right total_price_' + count +
            '" type="text" name="total_price[]" id="total_price_' + count +
            '" value="0.00" readonly="readonly" /> </td><td> <input type="hidden" id="total_discount_1" class="" /><input type="hidden" id="all_discount_1" class="total_discount" /><button style="text-align: right;" class="btn btn-danger red" type="button" value="<?php echo display('delete') ?>" onclick="deleteRow(this)" tabindex="8"><?php echo display('delete') ?></button></td>';
        document.getElementById(divName).appendChild(newdiv);
        document.getElementById(tabin).focus();
        document.getElementById("add_invoice_item").setAttribute("tabindex", tab5);
        document.getElementById("add_purchase").setAttribute("tabindex", tab6);
        document.getElementById("add_purchase_another").setAttribute("tabindex", tab7);

        count++;

        $("select.form-control:not(.dont-select-me)").select2({
            placeholder: "Select option",
            allowClear: true
        });
    }
}

//Calculate store product
function calculate_store(sl) {

    var totle = 0;
    var gr_tot = 0;
    var item_ctn_qty = $("#cartoon_" + sl).val();
    var vendor_rate = $("#item_price_" + sl).val();
    var total_price = item_ctn_qty * vendor_rate;
    $("#total_price_" + sl).val(total_price.toFixed(2));


    //Total Price
    $(".total_price").each(function() {
        isNaN(this.value) || 0 == this.value.length || (totle += parseFloat(this.value))
    });

    $("#total").val(totle.toFixed(2, 2));
    var gr_tot = totle;
    $("#grandTotal").val(gr_tot.toFixed(2));
    var inwords = convertNumberToWords(gr_tot);
    document.getElementById("inword").innerHTML = inwords;
}
</script>




<!-- JS -->