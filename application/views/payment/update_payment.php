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

<!-- Add new employee start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="fa fa-money"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('update_transection') ?></h1>
            <small><?php echo display('update_transection') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('transection') ?></a></li>
                <li class="active"><?php echo display('update_transection') ?></li>
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
        <style type="text/css">
        .hide {
            display: none;
        }

        .show {
            display: block;
        }
        </style>
        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                    <?php
if ($this->permission1->method('payment', 'read')->access() || $this->permission1->method('receipt', 'read')->access() || $this->permission1->method('manage_transaction', 'read')->access()) {?>
                    <a href="<?php echo base_url('Cpayment/manage_payment') ?>" class="btn btn-success m-b-5 m-r-2"><i
                            class="ti-align-justify"> </i> <?php echo display('manage_transection') ?></a>
                    <?php }?>
                </div>
            </div>
        </div>


        <?php
if ($this->permission1->method('payment', 'updete')->access() || $this->permission1->method('receipt', 'update')->access() || $this->permission1->method('manage_transaction', 'update')->access()) {?>
        <!-- New employee -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('update_transection') ?></h4>
                        </div>
                        <!-- </div> -->
                        <?php echo form_open('Cpayment/payment_update', array('class' => 'form-vertical', 'id' => 'validate')) ?>
                        <div class="panel-body">

                            <?php $today = date('d-m-Y');?>
                            <div class="form-group row">
                                <label
                                    class="col-sm-3 col-form-label"><?php echo display('choose_transection') ?></label>
                                <div class="switch col-sm-9">

                                    <input type="radio" name="transection_type" id="weekSW-0" value="1" <?php if ($tran_type == '1') {
    echo 'checked="checked"';
}
    ?>" />
                                    <label for="weekSW-0" id="yes"><i class="fa fa-credit-card" aria-hidden="true"></i>
                                        <strong><?php echo display('payment') ?></strong></label>
                                    <input type="radio" name="transection_type" id="weekSW-1" value="2" <?php if ($tran_type == '2') {
        echo 'checked="checked"';
    }
    ?>" />
                                    <label for="weekSW-1" id="no"><i class="fa fa-credit-card" aria-hidden="true"></i>
                                        <strong><?php echo display('receipt') ?></strong></label>
                                </div>



                            </div>

                            <div class="form-group row">
                                <label for="first_name" class="col-sm-2 col-form-label"><?php echo display('date') ?> <i
                                        class="text-danger">*</i></label>
                                <div class="col-sm-4">
                                    <input class="form-control datepicker" name="date" id="date" type="text"
                                        placeholder="Date" required="" value="{date_of_transection}">
                                </div>

                                <label for="first_name"
                                    class="col-sm-2 col-form-label"><?php echo display('transection_categry') ?> <i
                                        class="text-danger">*</i></label>
                                <div class="col-sm-4">
                                    <select name="transection_category" id="selId" class="form-control"
                                        class="form-control">

                                        <?php
foreach ($category_list as $values) {
        ?>
                                        <option value="<?php echo $values['parent_id']; ?>">
                                            <?php echo $values['account_name']; ?></option>
                                        <?php }?>

                                        <?php
foreach ($category_selected as $values) {
        ?>
                                        <option value="<?php echo $values['parent_id']; ?>" selected>
                                            <?php echo $values['account_name']; ?></option>
                                        <?php }?>
                                    </select>


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="dfds" class="col-sm-2 col-form-label"><?php echo display('select_id') ?><i
                                        class="text-danger"></i></label>
                                <div class="col-sm-4">

                                    <div id="test2" class="hidid form" style="width: 290px; height: 35px">
                                        <input type="text" size="100" name="customer_id" value="{customer_id}"
                                            class="customerSelection form-control"
                                            placeholder='<?php echo 'Patient Name' ?>' id="customer_name" />
                                        <input id="SchoolHiddenId" class="customer_hidden_value" type="hidden"
                                            name="customer_id" value="{relation_id}">
                                    </div>

                                    <select name="manufacturer_id" id="test1" class="hidid form"
                                        style="width: 290px; height: 35px">

                                        <?php
foreach ($manufacturer as $values) {
        ?>
                                        <option value="<?php echo $values['manufacturer_id']; ?>">
                                            <?php echo $values['manufacturer_name']; ?></option>
                                        <?php }?>

                                        <?php
foreach ($manufacturer_seleced as $values) {
        ?>
                                        <option value="<?php echo $values['manufacturer_id']; ?>" selected>
                                            <?php echo $values['manufacturer_name']; ?></option>
                                        <?php }?>
                                    </select>

                                    <div id="test4" class="hidid" style="width: 290px; height: 35px">
                                        <input type="text" size="100" name="loan_id" class="loanSelection form-control"
                                            placeholder='          <?php echo display('lopan_list') ?>' id="loan_id"
                                            value="{sel_loan}" />
                                        <input id="loan_id" class="loan_hidden_value" type="hidden" name="loan_id"
                                            value="<?php if ($transection_category == 4) {
        echo $relation_id;
    }
    ;?>">
                                    </div>

                                    <select name="office" id="test3" class="hidid " style="width: 290px; height: 35px">
                                        <option value="">--<?php echo display('select_option') ?>--</option>
                                        <?php
foreach ($account_list as $values) {
        ?>
                                        <option value="<?php echo $values['account_name']; ?>">
                                            <?php echo $values['account_name']; ?></option>
                                        <?php }?>

                                        <?php
foreach ($office as $values) {
        ?>
                                        <option value="<?php echo $values['account_name']; ?>" selected>
                                            <?php echo $values['account_name']; ?></option>
                                        <?php }?>
                                    </select>

                                </div>

                                <label for="Transection_mood"
                                    class="col-sm-2 col-form-label"><?php echo display('manage_transection') ?><?php echo display('transection_mood') ?></label>
                                <div class="col-sm-4">
                                    <select onchange="bank_info_show(this)" name="payment_type" id="payment_type"
                                        class="form-control">
                                        <option value="1" <?php if ($trn_mood == '1') {
        echo 'selected="selected"';
    }
    ?>> <?php echo display('cash') ?> </option>
                                        <option value="2" <?php if ($trn_mood == '2') {
        echo 'selected="selected"';
    }
    ?>> <?php echo display('cheque') ?> </option>
                                        <option value="3" <?php if ($trn_mood == '3') {
        echo 'selected="selected"';
    }
    ?>> <?php echo display('pay_order') ?> </option>
                                    </select>
                                </div>
                            </div>


                            <div id="bank_info_hide">
                                <div class="form-group row">
                                    <label for="cheque_or_pay_order_no"
                                        class="col-sm-2 col-form-label"><?php echo display('cheque_or_pay_order_no') ?>
                                        <i class="text-danger">*</i></label>
                                    <div class="col-sm-4">
                                        <input type="test" id="cheque_or_pay_order_no" class="form-control"
                                            name="cheque_no"
                                            placeholder="<?php echo display('cheque_or_pay_order_no') ?>" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="date" class="col-sm-2 col-form-label"><?php echo display('date') ?> <i
                                            class="text-danger">*</i></label>
                                    <div class="col-sm-4">
                                        <input type="text" name="cheque_mature_date" value="<?php echo $today; ?>"
                                            id="date" class="datepicker form-control" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="bank_name"
                                        class="col-sm-2 col-form-label"><?php echo display('bank_name') ?> <i
                                            class="text-danger">*</i></label>
                                    <div class="col-sm-4">
                                        <select name="bank_name" id="bank_name" class="form-control"
                                            style="width: 100%">
                                            <?php if ($bank) {?>
                                            {bank}
                                            <option value="{bank_id}"> {bank_name}</option>
                                            {/bank}
                                            <?php }?>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group row" id="PaymentContainer1">

                                <label for="first_name"
                                    class="col-sm-2 col-form-label"><?php echo display('payment_amount') ?></label>
                                <div class="col-sm-4">
                                    <input class="none form-control " name="pay_amount" id="school" class="none"
                                        type="text" placeholder="<?php echo display('payment_amount') ?>"
                                        value="{pay_amount}">
                                </div>


                            </div>


                            <div class="form-group row" id="PaymentContainer2">

                                <label for="first_name"
                                    class="col-sm-2 col-form-label"><?php echo display('recipt_amount') ?></label>
                                <div class="col-sm-4">
                                    <input class="none form-control " name="amount" id="school" class="none" type="text"
                                        placeholder="<?php echo display('recipt_amount') ?>" value="{amount}">
                                </div>


                            </div>
                            <div class="form-group row">
                                <label for="description"
                                    class="col-sm-2 col-form-label"><?php echo display('description') ?></label>
                                <div class="col-sm-10">
                                    <textarea name="description" class="form-control"
                                        placeholder="<?php echo display('description') ?>">{description}</textarea>

                                </div>
                            </div>

                            <input type="hidden" name="transaction_id" value="{transaction_id}">

                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                                <div class="col-sm-6">
                                    <input type="submit" id="update-transaction" class="btn btn-success btn-large"
                                        name="add-Account" value="<?php echo display('save_changes') ?>" />
                                </div>
                            </div>
                        </div>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
    </section>
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


<!-- Add new customer end -->


<script>
$(function() {
    $("#selId").on("change", function() {
        var selectId = $(this).children("option").filter(":selected").text();
        $(".hidid").hide();
        if (selectId == "manufacturer") {
            $("#test1").show();
        } else if (selectId == "Customer") {
            $("#test2").show();
        } else if (selectId == "Office") {
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
// $("#weekSW-0").click();
</script>