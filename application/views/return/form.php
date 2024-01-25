<script src="<?php echo base_url() ?>my-assets/js/admin_js/json/manufacturer.js.php"></script>
<!-- Purchase Report Start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('return_form'); ?></h1>
            <small><?php echo display('return_form'); ?></small>
        </div>
    </section>

    <section class="content">
        <?php
if ($this->permission1->method('return', 'create')->access()) {?>
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
}
?>

        <div class="row p-r-15 m-y-10">
            <div class="col-sm-12 d-flex justify-content-right">
                <div class="column">
                    <?php
if ($this->permission1->method('stock_return_list', 'read')->access()) {?>
                    <a href="<?php echo base_url('Cretrun_m/return_list') ?>" class="btn btn-primary m-b-5 m-r-2"><i
                            class="ti-align-justify"> </i> <?php echo display('c_r_slist') ?> </a>
                    <?php }?>

                    <?php
if ($this->permission1->method('manufacturer_return_list', 'read')->access()) {?>
                    <a href="<?php echo base_url('Cretrun_m/manufacturer_return_list') ?>"
                        class="btn btn-primary m-b-5 m-r-2"><i class="ti-align-justify"> </i>
                        <?php echo display('manufacturer_return') ?> </a>
                    <?php }?>

                    <?php
if ($this->permission1->method('wastage_return_list', 'read')->access()) {?>
                    <a href="<?php echo base_url('Cretrun_m/wastage_return_list') ?>"
                        class="btn btn-primary m-b-5 m-r-2"><i class="ti-align-justify"> </i>
                        <?php echo display('wastage_list') ?> </a>
                    <?php }?>

                </div>
            </div>
        </div>
        <!-- Add Product Form -->
        <?php
if ($this->permission1->method('return', 'create')->access()) {?>
        <div class="row">
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <?php echo form_open('Cretrun_m/invoice_return_form', array('class' => 'form-inline')) ?>
                        <div class="col-sm-12">
                            <center>
                                <h4><?php echo 'Patient Return'; ?></h4>
                            </center>
                        </div>
                        <div class="form-group">
                            <label for="invoice_no" class="col-sm-4"><?php echo display('invoice_no') ?>:</label>
                            <div class="col-sm-8">
                                <input type="text" name="invoice_no" class="form-control" id="to_date"
                                    placeholder="<?php echo display('invoice_no') ?>" required="required">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success"><?php echo display('search') ?></button>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <?php echo form_open('Cretrun_m/search_manufacture', array('class' => 'form-inline')) ?>
                        <div class="col-sm-12">
                            <center>
                                <h4><?php echo display('manufacturer_return'); ?></h4>
                            </center>
                        </div>
                        <label for="manufacturer_name"
                            class="col-sm-4"><?php echo display('manufacturer_name') ?>:</label>

                        <div class="form-group">
                            <input type="text" name="manufacturer_name" class="manufacturerSelection form-control"
                                placeholder='<?php echo display('manufacturer_name') ?>' id="manufacturer_name" />
                            <input id="SchoolHiddenId" class="manufacturer_hidden_value abc" type="hidden"
                                name="manufacturer_id">
                        </div>

                        <button type="submit" class="btn btn-success"><?php echo display('search') ?></button>
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
}?>
    </section>
</div>