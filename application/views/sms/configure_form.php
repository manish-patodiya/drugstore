<style>
.content {
    padding: 0 30px 10px
}

.content-header {
    margin-bottom: 20px
}
</style>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap-toggle.css">
<script src="<?php echo base_url() ?>assets/js/bootstrap-toggle.min.js" type="text/javascript"></script>
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('sms') ?></h1>
            <small><?php echo display('sms_configure') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('sms') ?></a></li>
                <li class="active"><?php echo display('sms_configure') ?></li>
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

        <?php
if ($this->permission1->method('soft_setting', 'read')->access() || $this->permission1->method('soft_setting', 'update')->access()) {?>
        <!-- New customer -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('sms_configure') ?> </h4>
                        </div>
                    </div>
                    <?php echo form_open_multipart('Csms/add_update_configure', array('class' => 'form-vertical', 'id' => 'sms_configuration')) ?>
                    <div class="panel-body">

                        <div class="form-group row">
                            <label for="url" class="col-sm-3 col-form-label"><?php echo display('url') ?> <i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name="url" value="<?php echo $configdata[0]['url']; ?>"
                                    id="url" type="text" tabindex="1">
                                <input type="hidden" value="<?php echo $configdata[0]['id']; ?>" name="id">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="sender_id" class="col-sm-3 col-form-label"><?php echo display('sender_id') ?> <i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name="sender_id"
                                    value="<?php echo $configdata[0]['sender_id']; ?>" id="sender_id" type="text"
                                    tabindex="2">
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="api_key" class="col-sm-3 col-form-label"><?php echo display('api_key') ?> <i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name="api_key"
                                    value="<?php echo $configdata[0]['api_key']; ?>" id="api_key" type="text"
                                    tabindex="3">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="invoice" class="col-sm-3 col-form-label"><?php echo display('invoice'); ?> <i
                                    class="text-danger"></i></label>
                            <div class="switch col-sm-6">
                                <input type="radio" name="isinvoice" id="isinvoice1" value="1" <?php if ($configdata[0]['isinvoice'] == '1') {
    echo 'checked="checked"';
}
    ?> <?php if (empty($configdata[0]['isinvoice'] == '1')) {echo 'checked="checked"';} else {echo ' ';}?> />
                                <label for="isinvoice1" id="yes">
                                    <strong><?php echo 'Yes'; ?></strong></label>
                                <input type="radio" name="isinvoice" id="isinvoice0" value="0" <?php if ($configdata[0]['isinvoice'] == '0') {
        echo 'checked="checked"';
    }
    ?> />
                                <label for="isinvoice0" id="no">
                                    <strong><?php echo 'No'; ?></strong></label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="purchase" class="col-sm-3 col-form-label"><?php echo display('purchase'); ?> <i
                                    class="text-danger"></i></label>
                            <div class="switch col-sm-6">
                                <input type="radio" name="ispurchase" id="ispurchase1" value="1" <?php if ($configdata[0]['ispurchase'] == '1') {
        echo 'checked="checked"';
    }
    ?> <?php if (empty($configdata[0]['ispurchase'] == '1')) {echo 'checked="checked"';} else {echo ' ';}?> />
                                <label for="ispurchase1" id="yes">
                                    <strong><?php echo 'Yes'; ?></strong></label>
                                <input type="radio" name="ispurchase" id="ispurchase0" value="0" <?php if ($configdata[0]['ispurchase'] == '0') {
        echo 'checked="checked"';
    }
    ?> />
                                <label for="ispurchase0" id="no">
                                    <strong><?php echo 'No'; ?></strong></label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="service" class="col-sm-3 col-form-label"><?php echo display('service'); ?> <i
                                    class="text-danger"></i></label>
                            <div class="switch col-sm-6">
                                <input type="radio" name="isservice" id="isservice1" value="1" <?php if ($configdata[0]['isservice'] == '1') {
        echo 'checked="checked"';
    }
    ?> <?php if (empty($configdata[0]['isservice'] == '1')) {echo 'checked="checked"';} else {echo ' ';}?> />
                                <label for="isservice1" id="yes">
                                    <strong><?php echo 'Yes'; ?></strong></label>
                                <input type="radio" name="isservice" id="isservice0" value="0" <?php if ($configdata[0]['isservice'] == '0') {
        echo 'checked="checked"';
    }
    ?> />
                                <label for="isservice0" id="no">
                                    <strong><?php echo 'No'; ?></strong></label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="customer_receive"
                                class="col-sm-3 col-form-label"><?php echo 'Patient Receive'; ?> <i
                                    class="text-danger"></i></label>
                            <div class="switch col-sm-6">
                                <input type="radio" name="isreceive" id="isreceive1" value="1" <?php if ($configdata[0]['isreceive'] == '1') {
        echo 'checked="checked"';
    }
    ?> <?php if (empty($configdata[0]['isreceive'] == '1')) {echo 'checked="checked"';} else {echo ' ';}?> />
                                <label for="isreceive1" id="yes">
                                    <strong><?php echo 'Yes'; ?></strong></label>
                                <input type="radio" name="isreceive" id="isreceive0" value="0" <?php if ($configdata[0]['isreceive'] == '0') {
        echo 'checked="checked"';
    }
    ?> />
                                <label for="isreceive0" id="no">
                                    <strong><?php echo 'No'; ?></strong></label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="supplier_payment"
                                class="col-sm-3 col-form-label"><?php echo display('supplier_payment'); ?> <i
                                    class="text-danger"></i></label>
                            <div class="switch col-sm-6">
                                <input type="radio" name="ispayment" id="ispayment1" value="1" <?php if ($configdata[0]['ispayment'] == '1') {
        echo 'checked="checked"';
    }
    ?> <?php if (empty($configdata[0]['ispayment'] == '1')) {echo 'checked="checked"';} else {echo ' ';}?> />
                                <label for="ispayment1" id="yes">
                                    <strong><?php echo 'Yes'; ?></strong></label>
                                <input type="radio" name="ispayment" id="ispayment0" value="0" <?php if ($configdata[0]['ispayment'] == '0') {
        echo 'checked="checked"';
    }
    ?> />
                                <label for="ispayment0" id="no">
                                    <strong><?php echo 'No'; ?></strong></label>
                            </div>
                        </div>

                        <?php
if ($this->permission1->method('configure', 'update')->access()) {?>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="sms" class="btn btn-primary btn-large" name="save_changes"
                                    value="<?php echo display('save_changes') ?>" tabindex="13" />
                            </div>
                        </div>
                        <?php }?>

                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
        <?php } else {
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
}?>


    </section>
</div>
<!-- Add new customer end -->