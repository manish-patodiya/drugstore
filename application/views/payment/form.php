<!-- Customer js php -->
<script src="<?php echo base_url() ?>my-assets/js/admin_js/json/customer.js.php"></script>
<!-- loan js php -->
<script src="<?php echo base_url() ?>my-assets/js/admin_js/json/loan.js.php"></script>
<!-- Product invoice js -->
<script src="<?php echo base_url() ?>my-assets/js/admin_js/json/product_invoice.js.php"></script>
<!-- Invoice js -->
<script src="<?php echo base_url() ?>my-assets/js/admin_js/invoice.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap-toggle.css">
<script src="<?php echo base_url() ?>assets/js/bootstrap-toggle.min.js" type="text/javascript"></script>


<!-- Customer type change by javascript start -->
<script type="text/javascript">
//Bank Information Show
function bank_info_show(payment_type) {
    if (payment_type.value == "1") {
        document.getElementById("bank_info_hide").style.display = "none";
    } else {
        document.getElementById("bank_info_hide").style.display = "block";
    }
}

//Active/Inactive customer
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

<style type="text/css">
.hide {
    display: none;
}

.show {
    display: block;
}
</style>

<!-- Add new employee start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="fa fa-money"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('add_payment') ?></h1>
            <small><?php echo display('add_new_payment') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('transaction') ?></a></li>
                <li class="active"><?php echo display('add_payment') ?></li>
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

        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                    <?php
if ($this->permission1->method('payment', 'read')->access()) {?>
                    <a href="<?php echo base_url('Cpayment/manage_payment') ?>" class="btn btn-success m-b-5 m-r-2"><i
                            class="ti-align-justify"> </i><?php echo display('manage_transaction') ?></a>
                    <?php }?>

                </div>
            </div>
        </div>

        <?php
if ($this->permission1->method('payment', 'create')->access()) {?>
        <!-- New employee -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('add_payment') ?></h4>
                        </div>
                    </div>
                    <?php echo form_open('Cpayment/transection_entry', array('class' => 'form-vertical', 'id' => 'validate')) ?>
                    <div class="panel-body">
                        <?php $today = date('Y-m-d');?>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><?php echo display('choose_transaction') ?></label>
                            <div class="switch col-sm-9">
                                <input type="radio" name="transectio_type" id="weekSW-0" value="1" />
                                <label for="weekSW-0" id="yes"><i class="fa fa-credit-card" aria-hidden="true"></i>
                                    <strong><?php echo display('payment') ?></strong></label>
                                <input type="radio" name="transectio_type" id="weekSW-1" value="2" checked=checked />
                                <label for="weekSW-1" id="no"><i class="fa fa-credit-card" aria-hidden="true"></i>
                                    <strong><?php echo display('receipt') ?></strong></label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="first_name" class="col-sm-2 col-form-label"><?php echo display('date') ?> <i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-4">
                                <input class="form-control datepicker" name="date" id="first_name" type="text"
                                    placeholder="Date" required="" value="<?php echo date('Y-m-d') ?>">
                            </div>

                            <label for="description"
                                class="col-sm-2 col-form-label"><?php echo display('description') ?></label>
                            <div class="col-sm-4">
                                <textarea name="description" class="form-control"
                                    placeholder="Please Enter some description"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="categoryname"
                                class="col-sm-2 col-form-label"><?php echo display('transaction_categry') ?> <i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-4">
                                <select id="selId" class="form-control" name="transection_category"
                                    onchange="myFunction()">

                                    <option><?php echo display('select_option') ?></option>
                                    <option value="1"><?php echo display('manufacturer') ?></option>
                                    <option value="2"><?php echo 'Patient' ?></option>
                                    <option value="3"><?php echo display('office') ?></option>
                                    <option value="4"><?php echo display('loan') ?></option>
                                </select>
                            </div>

                            <label for="first_name" class="col-sm-2 col-form-label"><span id="demo"></span></label>
                            <div class="col-sm-4">

                                <div id="test1" class="hidid" width="100">
                                    <select name="manufacturer_id" class="form-control" style="width:316px">
                                        <option value=""><?php echo display('select_manufacturer') ?></option>
                                        <?php if ($manufacturer) {?>
                                        {manufacturer}
                                        <option value="{manufacturer_id}">{manufacturer_name}</option>
                                        {/manufacturer}
                                        <?php }?>
                                    </select>
                                </div>

                                <div id="test2" class="hidid">
                                    <input type="text" size="100" name="customer_id"
                                        class="customerSelection form-control"
                                        placeholder='<?php echo 'Patient Name' ?>' id="customer_name" />
                                    <input id="SchoolHiddenId" class="customer_hidden_value" type="hidden"
                                        name="customer_id">
                                </div>

                                <div id="test4" class="hidid">

                                    <select name="loan_id" class="form-control" style="width:316px">
                                        <option value=""><?php echo "Select Loan" ?></option>
                                        <?php
if (loan_list) {
    ?>
                                        {loan_list}
                                        <option value="{person_id}">{person_name}
                                        </option>
                                        {/loan_list}
                                        <?php
}
    ?>
                                    </select>
                                </div>
                                <span id="test3" class="hidid ">
                                    <select name="office" class="form-control" style="width:316px">
                                        <option value=""><?php echo display('select_account') ?></option>
                                        <?php
if ($account_list) {
        ?>
                                        {account_list}
                                        <option value="{account_name}">{account_name}
                                        </option>
                                        {/account_list}
                                        <?php
}
    ?>
                                    </select>
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Transection_mood"
                                class="col-sm-2 col-form-label"><?php echo display('transaction_mood') ?></label>
                            <div class="col-sm-4">
                                <select onchange="bank_info_show(this)" name="payment_type" id="payment_type"
                                    class="form-control">
                                    <option value="1"> <?php echo display('cash') ?> </option>
                                    <option value="2"> <?php echo display('cheque') ?> </option>
                                    <option value="3"> <?php echo display('pay_order') ?> </option>
                                </select>
                            </div>

                            <!-- Payment amount div -->
                            <div class="" id="PaymentContainer1">
                                <label for="first_name"
                                    class="col-sm-2 col-form-label"><?php echo display('payment_amount') ?></label>
                                <div class="col-sm-4">
                                    <input class="none form-control " name="pay_amount" id="payment" class="none"
                                        type="text" placeholder="<?php echo display('payment_amount') ?>">
                                </div>
                            </div>

                            <!-- Receipt amount div -->
                            <div class="" id="PaymentContainer2">
                                <label for="first_name"
                                    class="col-sm-2 col-form-label"><?php echo display('receipt_amount') ?></label>
                                <div class="col-sm-4">
                                    <input class="none form-control " name="amount" id="receipt" class="none"
                                        type="text" placeholder="<?php echo display('receipt_amount') ?>">
                                </div>
                            </div>
                        </div>

                        <div id="bank_info_hide">
                            <div class="form-group row">
                                <label for="cheque_or_pay_order_no"
                                    class="col-sm-2 col-form-label"><?php echo display('cheque_or_pay_order_no') ?> <i
                                        class="text-danger">*</i></label>
                                <div class="col-sm-4">
                                    <input type="test" id="cheque_or_pay_order_no" class="form-control" name="cheque_no"
                                        placeholder="<?php echo display('cheque_or_pay_order_no') ?>" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="date" class="col-sm-2 col-form-label"><?php echo display('date') ?> <i
                                        class="text-danger">*</i></label>
                                <div class="col-sm-4">
                                    <input type="text" name="cheque_mature_date" value="<?php echo $today; ?>" id="date"
                                        class="datepicker form-control" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="bank_name"
                                    class="col-sm-2 col-form-label"><?php echo display('bank_name') ?> <i
                                        class="text-danger">*</i></label>
                                <div class="col-sm-4">
                                    <select name="bank_name" id="bank_name" class="form-control" style="width: 100%">
                                        <?php if ($bank) {?>
                                        {bank}
                                        <option value="{bank_id}"> {bank_name}</option>
                                        {/bank}
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-10 col-form-label"></label>
                            <div class="col-sm-2" style="margin-top:5px ">
                                <input type="submit" id="add-customer" class="btn btn-success btn-large text-right"
                                    name="add-employee" value="<?php echo display('submit') ?>" />
                            </div>
                        </div>

                    </div>
                    <?php echo form_close() ?>
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
<!-- Add new customer end -->


<script>
$(function() {
    $("#selId").on("change", function() {
        var selectId = $(this).children("option").filter(":selected").text();
        $(".hidid").hide();
        if (selectId == "Manufacturer") {
            $("#test1").show();
        } else if (selectId == "Customer") {
            $("#test2").show();
        } else if (selectId == "Office") {
            $("#test3").show();
        } else if (selectId == "salary") {
            $("#test3").show();
        } else if (selectId == "Loan") {
            $("#test4").show();
        }
    }).change();
});
</script>
<script type="text/javascript">
$(document).change(function() {
    if ($('#weekSW-0').prop('checked')) {
        $('#PaymentContainer1').show();


    } else {
        $('#PaymentContainer1').hide();
    }

    if ($('#weekSW-1').prop('checked')) {
        $('#PaymentContainer2').show();


    } else {
        $('#PaymentContainer2').hide();
    }
});
$("#weekSW-0").click();
</script>
<script type="text/javascript">
$('#weekSW-0').click(function() {
    $('#receipt').val($('#receipt').attr('value'));
});

$('#weekSW-1').click(function() {
    $('#payment').val($('#payment').attr('value'));
});
</script>
<script>
function myFunction() {
    var x = document.getElementById("selId").value;
    if (x == 1) {
        x = 'Manufacturer'
    }
    if (x == 2) {
        x = 'Customer'
    }
    if (x == 3) {
        x = 'Office'
    }
    if (x == 4) {
        x = 'Loan'
    }
    document.getElementById("demo").innerHTML = "Select: " + x + " Name";
}
</script>