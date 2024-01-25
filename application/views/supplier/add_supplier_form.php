<!-- Add new supplier start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('supplier') ?></h1>
            <small><?php echo display('add_supplier') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('supplier') ?></a></li>
                <li class="active"><?php echo display('add_supplier') ?></li>
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

        <!-- New supplier -->
        <?php
if ($this->permission1->method('add_supplier', 'create')->access()) {?>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading p-b-5 ">
                        <div class="row">
                            <div class="panel-title col-md-6">
                                <!-- <h4><?php echo display('add_supplier') ?> </h4> -->
                            </div>
                            <div class="col-md-6 d-flex justify-content-right">
                                <div class="column">
                                    <?php
if ($this->permission1->method('manage_supplier', 'read')->access()) {?>
                                    <a href="<?php echo base_url('Csupplier/manage_supplier') ?>"
                                        class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i>
                                        <?php echo display('manage_supplier') ?> </a>
                                    <?php }?>

                                    <?php
if ($this->permission1->method('supplier_ledger', 'read')->access()) {?>
                                    <a href="<?php echo base_url('Csupplier/supplier_ledger_report') ?>"
                                        class="btn btn-primary m-b-5 m-r-2"><i class="ti-align-justify"> </i>
                                        <?php echo display('supplier_ledger') ?> </a>
                                    <?php }?>

                                    <button type="button" class="btn btn-info m-b-5 m-r-2" data-toggle="modal"
                                        data-target="#supplier_modal">Upload CSV</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php echo form_open_multipart('Csupplier/insert_supplier', array('id' => 'insert_supplier')) ?>
                    <div class="panel-body">

                        <div class="form-group row">
                            <label for="supplier_name"
                                class="col-sm-3 col-form-label"><?php echo display('supplier_name') ?> <i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name="supplier_name" id="supplier_name" type="text"
                                    placeholder="<?php echo display('supplier_name') ?>" required="" tabindex="1">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile" class="col-sm-3 col-form-label"><?php echo display('supplier_mobile') ?>
                                <i class="text-danger"></i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name="mobile" id="mobile" type="number"
                                    placeholder="<?php echo display('supplier_mobile') ?>" min="0" tabindex="2">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address "
                                class="col-sm-3 col-form-label"><?php echo display('supplier_address') ?></label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="address" id="address " rows="3"
                                    placeholder="<?php echo display('supplier_address') ?>" tabindex="3"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="details"
                                class="col-sm-3 col-form-label"><?php echo display('supplier_details') ?></label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="details" id="details" rows="3"
                                    placeholder="<?php echo display('supplier_details') ?>" tabindex="4"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="details"
                                class="col-sm-3 col-form-label"><?php echo display('previous_balance') ?></label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" name="previous_balance"
                                    placeholder="<?php echo display('previous_balance') ?>" tabindex="5">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-supplier" class="btn btn-primary btn-large"
                                    name="add-supplier" value="<?php echo display('save') ?>" tabindex="6" />
                                <input type="submit" value="<?php echo display('save_and_add_another') ?>"
                                    name="add-supplier-another" class="btn btn-large btn-success"
                                    id="add-supplier-another" tabindex="5">
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
        <div id="supplier_modal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Upload Csv supplier</h4>
                    </div>
                    <div class="modal-body">

                        <div class="panel panel-bd">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4><?php echo 'CSV supplier'; ?></h4>
                                </div>
                            </div>

                            <div class="panel-body">
                                <div class="col-sm-12"><a
                                        href="<?php echo base_url('assets/data/csv/supplier_csv_sample.csv') ?>"
                                        class="btn btn-primary pull-right"><i class="fa fa-download"></i> Download
                                        Sample File</a></div>
                                <?php echo form_open_multipart('Csupplier/uploadCsv_supplier', array('class' => 'form-vertical', 'id' => 'validate', 'name' => 'insert_supplier')) ?>
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