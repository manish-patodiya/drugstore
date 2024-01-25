<!--Edit customer start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo 'Patient Edit' ?></h1>
            <small><?php echo 'Patient Edit' ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo 'Patient' ?></a></li>
                <li class="active"><?php echo 'Patient Edit' ?></li>
            </ol>
        </div>
    </section>

    <section class="content">
        <!-- alert message -->
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
if ($this->permission1->method('manage_customer', 'update')->access()) {?>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo 'Patient Edit' ?> </h4>
                        </div>
                    </div>
                    <?php echo form_open_multipart('Ccustomer/customer_update', array('class' => 'form-vertical', 'id' => 'customer_update')) ?>
                    <div class="panel-body">

                        <div class="form-group row">
                            <label for="customer_name" class="col-sm-3 col-form-label"><?php echo 'Patient Name' ?> <i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name="customer_name" id="customer_name" type="text"
                                    placeholder="<?php echo 'Patient Name' ?>" required="" value="{customer_name}"
                                    tabindex="1">
                                <input type="hidden" value="{customer_name}" name="oldname">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label"><?php echo 'Patient Email' ?></label>
                            <div class="col-sm-6">
                                <input class="form-control" name="email" value="{customer_email}" id="email"
                                    type="email" placeholder="<?php echo 'Patient Email' ?>" tabindex="2">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile" class="col-sm-3 col-form-label"><?php echo 'Patient Mobile' ?></label>
                            <div class="col-sm-6">
                                <input class="form-control" name="mobile" value="{customer_mobile}" id="mobile"
                                    type="text" placeholder="<?php echo 'Patient Mobile' ?>" min="0" tabindex="3">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address "
                                class="col-sm-3 col-form-label"><?php echo 'Patient Address' ?></label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="address" id="address " rows="3"
                                    placeholder="<?php echo 'Patient Address' ?>"
                                    tabindex="4">{customer_address} </textarea>
                            </div>
                        </div>
                        <input type="hidden" value="{customer_id}" name="customer_id">

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-Customer" class="btn btn-success btn-large"
                                    name="add-Customer" value="<?php echo display('save_changes') ?>" tabindex="5" />
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
    </section>
</div>
<!-- Edit customer end -->