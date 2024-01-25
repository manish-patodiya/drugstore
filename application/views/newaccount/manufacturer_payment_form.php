<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('accounts') ?></h1>
            <small><?php echo display('manufacturer_payment') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('accounts') ?></a></li>
                <li class="active"><?php echo display('manufacturer_payment') ?></li>
            </ol>
        </div>
    </section>

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
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>
                                <?php echo display('manufacturer_payment') ?>
                            </h4>
                        </div>
                    </div>
                    <div class="panel-body">

                        <?=form_open_multipart('accounts/create_manufacturer_payment')?>
                        <div class="form-group row">
                            <label for="vo_no"
                                class="col-sm-2 col-form-label"><?php echo display('voucher_no') ?></label>
                            <div class="col-sm-4">
                                <input type="text" name="txtVNo" id="txtVNo" value="<?php if (!empty($voucher_no[0]['voucher'])) {
    $vn = substr($voucher_no[0]['voucher'], 3) + 1;
    echo $voucher_n = 'PM-' . $vn;
} else {
    echo $voucher_n = 'PM-1';
}?>" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-sm-2 col-form-label"><?php echo display('date') ?></label>
                            <div class="col-sm-4">
                                <input type="text" name="dtpDate" id="dtpDate" class="form-control datepicker"
                                    value="<?php echo date('Y-m-d'); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="payment_type" class="col-sm-2 col-form-label"><?php
echo display('payment_type');
?> <i class="text-danger">*</i></label>
                            <div class="col-sm-4">
                                <select name="paytype" class="form-control" required=""
                                    onchange="bank_paymet(this.value)">
                                    <option value="">Select Payment Option</option>
                                    <option value="1">Cash Payment</option>
                                    <option value="2">Bank Payment</option>

                                </select>



                            </div>

                        </div>


                        <div class="form-group row" id="bank_div" style="display: none;">
                            <label for="bank" class="col-sm-2 col-form-label"><?php
echo display('bank');
?> <i class="text-danger">*</i></label>
                            <div class="col-sm-4">
                                <select name="bank_id" class="form-control" id="bank_id">
                                    <option value="">Select Location</option>
                                    <?php foreach ($bank_list as $bank) {?>
                                    <option value="<?php echo $bank['bank_id'] ?>"><?php echo $bank['bank_name']; ?>
                                    </option>
                                    <?php }?>
                                </select>

                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="txtRemarks"
                                class="col-sm-2 col-form-label"><?php echo display('remark') ?></label>
                            <div class="col-sm-4">
                                <textarea name="txtRemarks" id="txtRemarks" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="table-responsive" style="margin-top: 10px">
                            <table class="table table-bordered table-hover" id="debtAccVoucher">
                                <thead>
                                    <tr>
                                        <th class="text-center"><?php echo display('manufacturer_name') ?></th>
                                        <th class="text-center"><?php echo display('code') ?></th>
                                        <th class="text-center"><?php echo display('amount') ?></th>

                                    </tr>
                                </thead>
                                <tbody id="debitvoucher">

                                    <tr>
                                        <td class="" style="width: 200px;">
                                            <select name="manufacturer_id" id="manufacturer_id_1" class="form-control"
                                                onchange="load_code(this.value,1)" required>
                                                <<option value="">Select manufacturer</option>}
                                                    option
                                                    <?php foreach ($manufacturer_list as $suplier) {?>
                                                    <option value="<?php echo $suplier->manufacturer_id; ?>">
                                                        <?php echo $suplier->manufacturer_name; ?></option>
                                                    <?php }?>
                                            </select>

                                        </td>
                                        <td><input type="text" name="txtCode" value="" class="form-control "
                                                id="txtCode_1" readonly=""></td>
                                        <td><input type="number" name="txtAmount" value=""
                                                class="form-control total_price text-right" id="txtAmount_1"
                                                onkeyup="calculation(1)" required>
                                        </td>

                                    </tr>

                                </tbody>
                                <tfoot>
                                    <tr>

                                        <td colspan="2" class="text-right"><label for="reason"
                                                class="  col-form-label"><?php echo display('total') ?></label>
                                        </td>
                                        <td class="text-right">
                                            <input type="text" id="grandTotal" class="form-control text-right "
                                                name="grand_total" value="" readonly="readonly" />
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="form-group row">

                            <div class="col-sm-12 text-right">

                                <input type="submit" id="add_receive" class="btn btn-success btn-large" name="save"
                                    value="<?php echo display('save') ?>" tabindex="9" />

                            </div>
                        </div>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
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
function load_code(id, sl) {

    $.ajax({
        url: "<?php echo site_url('accounts/manufacturer_headcode/') ?>" + id,
        type: "GET",
        dataType: "json",
        success: function(data) {

            $('#txtCode_' + sl).val(data);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert('Error get data from ajax');
        }
    });
}

function addaccount(divName) {
    var row = $("#debtAccVoucher tbody tr").length;
    var count = row + 1;
    var limits = 500;
    var tabin = 0;
    if (count == limits) alert("You have reached the limit of adding " + count + " inputs");
    else {
        var newdiv = document.createElement('tr');
        var tabin = "cmbCode_" + count;
        var tabindex = count * 2;
        newdiv = document.createElement("tr");

        newdiv.innerHTML = "<td> <select name='manufacturer_id[]' id='manufacturer_id_" + count +
            "' class='form-control' onchange='load_code(this.value," + count +
            ")' required><option value=''>Select manufacturer</option><?php foreach ($manufacturer_list as $suplier) {?><option value='<?php echo $suplier->manufacturer_id; ?>'><?php echo $suplier->manufacturer_name; ?></option><?php }?></select></td><td><input type='text' name='txtCode[]' class='form-control'  id='txtCode_" +
            count +
            "' ></td><td><input type='number' name='txtAmount[]' class='form-control total_price text-right' id='txtAmount_" +
            count + "' onkeyup='calculation(" + count +
            ")' required></td><td><button style='text-align: right;' class='btn btn-danger red' type='button' value='<?php echo display("delete") ?>' onclick='deleteRow(this)'><i class='fa fa-trash-o'></i></button></td>";
        document.getElementById(divName).appendChild(newdiv);
        document.getElementById(tabin).focus();
        count++;

        $("select.form-control:not(.dont-select-me)").select2({
            placeholder: "Select option",
            allowClear: true
        });
    }
}

function calculation(sl) {

    var gr_tot = 0;
    $(".total_price").each(function() {
        isNaN(this.value) || 0 == this.value.length || (gr_tot += parseFloat(this.value))
    });

    $("#grandTotal").val(gr_tot.toFixed(2, 2));
}

function deleteRow(e) {
    var t = $("#debtAccVoucher > tbody > tr").length;
    if (1 == t) alert("There only one row you can't delete.");
    else {
        var a = e.parentNode.parentNode;
        a.parentNode.removeChild(a)
    }
    calculation()
}
</script>
<script type="text/javascript">
$(function() {
    $(".datepicker").datepicker({
        dateFormat: "yy-mm-dd",
        changeYear: true,
        changeMonth: true,
    });

});
</script>