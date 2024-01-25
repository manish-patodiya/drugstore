<style>
.content {
    padding: 0 30px 10px
}

.content-header {
    margin-bottom: 20px
}
</style>
<!-- Add new customer start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('update_setting') ?></h1>
            <small><?php echo display('update_your_web_setting') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('web_settings') ?></a></li>
                <li class="active"><?php echo display('update_setting') ?></li>
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
                    <!-- <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('update_setting') ?> </h4>
                        </div>
                    </div> -->
                    <?php echo form_open_multipart('Cweb_setting/update_setting', array('class' => 'form-vertical', 'id' => 'insert_customer')) ?>
                    <div class="panel-body">

                        <div class="form-group row">
                            <label for="logo" class="col-sm-3 col-form-label"><?php echo display('logo') ?> <i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name="logo" id="logo" type="file" tabindex="1">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="logo" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-6">
                                <img src="{logo}" class="img img-responsive" height="100" width="100">
                                <input name="old_logo" type="hidden" value="{logo}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="invoice_logo"
                                class="col-sm-3 col-form-label"><?php echo display('invoice_logo') ?> <i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name="invoice_logo" id="invoice_logo" type="file"
                                    tabindex="2">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="invoice_logo" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-6">
                                <img src="{invoice_logo}" class="img img-responsive" height="100" width="100">
                                <input name="old_invoice_logo" type="hidden" value="{invoice_logo}">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="favicon" class="col-sm-3 col-form-label"><?php echo display('favicon') ?> <i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name="favicon" id="favicon" type="file" tabindex="3">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="favicon" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-6">
                                <img src="{favicon}" class="img img-responsive" height="100" width="100">
                                <input name="old_favicon" type="hidden" value="{favicon}" tabindex="4">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="time_zone" class="col-sm-3 col-form-label"><?php echo display('timezone') ?> <i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <?php echo form_dropdown('timezone', $timezonelist, $timezone, array('class' => 'form-control')); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="currency" class="col-sm-3 col-form-label"><?php echo display('currency') ?> <i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="currency" id="currency" tabindex="5">
                                    <?php foreach ($currency_list as $clist) {?>
                                    <option value="<?php echo $clist->icon ?>" <?php if ($currency == $clist->icon) {
    echo "selected";
}?>><?php echo $clist->currency_name . ' ' . $clist->icon; ?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="currency_position"
                                class="col-sm-3 col-form-label"><?php echo display('currency_position') ?> <i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="currency_position" id="currency_position"
                                    tabindex="6">
                                    <option value=""><?php echo display('select_one') ?></option>
                                    <option value="0" <?php if ($currency_position == 0) {echo "selected";}?>>
                                        <?php echo display('left') ?></option>
                                    <option value="1" <?php if ($currency_position == 1) {echo "selected";}?>>
                                        <?php echo display('right') ?></option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="footer_text"
                                class="col-sm-3 col-form-label"><?php echo display('footer_text') ?> <i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name="footer_text" id="footer_text" type="text"
                                    placeholder="Foter Text" value="{footer_text}" tabindex="7">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="language" class="col-sm-3 col-form-label"><?php echo display('language') ?> <i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <?php
echo form_dropdown('language', $language, '', 'class="form-control" id="language" tabindex="8"');
    ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lrt" class="col-sm-3 col-form-label"><?php echo display('ltr_or_rtr') ?> <i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="rtr" id="lrt" tabindex="9">
                                    <option value=""><?php echo display('select_one') ?></option>
                                    <option value="0" <?php if ($rtr == 0) {echo "selected";}?>>
                                        <?php echo display('ltr') ?></option>
                                    <option value="1" <?php if ($rtr == 1) {echo "selected";}?>>
                                        <?php echo display('rtr') ?></option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="captcha" class="col-sm-3 col-form-label"><?php echo display('captcha') ?> <i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="captcha" id="captcha" tabindex="10">
                                    <option value=""><?php echo display('select_one') ?></option>
                                    <option value="0" <?php if ($captcha == 0) {echo "selected";}?>>
                                        <?php echo display('active') ?></option>
                                    <option value="1" <?php if ($captcha == 1) {echo "selected";}?>>
                                        <?php echo display('inactive') ?></option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="site_key" class="col-sm-3 col-form-label"><?php echo display('site_key') ?> <i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name="site_key" id="site_key" type="text"
                                    placeholder="<?php echo display('site_key') ?> " value="{site_key}" tabindex="11">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="secret_key" class="col-sm-3 col-form-label"><?php echo display('secret_key') ?>
                                <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name="secret_key" id="secret_key" type="text"
                                    placeholder="<?php echo display('secret_key') ?>" value="{secret_key}"
                                    tabindex="12">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="discount_type"
                                class="col-sm-3 col-form-label"><?php echo display('discount_type') ?> <i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="discount_type" id="discount_type" tabindex="10">
                                    <option value=""><?php echo display('select_one') ?></option>
                                    <option value="1" <?php if ($discount_type == 1) {echo "selected";}?>>
                                        <?php echo display('discount_percentage') ?> %</option>
                                    <option value="2" <?php if ($discount_type == 2) {echo "selected";}?>>
                                        <?php echo display('discount') ?></option>
                                    <option value="3" <?php if ($discount_type == 3) {echo "selected";}?>>
                                        <?php echo display('fixed_dis') ?></option>
                                </select>
                            </div>
                        </div>

                        <?php
if ($this->permission1->method('language', 'update')->access()) {?>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-customer" class="btn btn-success btn-large"
                                    name="add-customer" value="<?php echo display('save_changes') ?>" tabindex="13" />
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