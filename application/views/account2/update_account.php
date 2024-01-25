<!--Edit account start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('account_edit') ?></h1>
            <small><?php echo display('account_edit') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('account') ?></a></li>
                <li class="active"><?php echo display('account_edit') ?></li>
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
if ($this->permission1->method('manage_account', 'update')->access()) {?>
        <!-- Edit account -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('account_edit') ?></h4>
                        </div>
                    </div>
                    <?php echo form_open('Account_Controller/account_update', array('class' => 'form-vertical', 'id' => 'add_account')) ?>
                    <div class="panel-body">

                        <div class="form-group row">
                            <label for="first_name"
                                class="col-sm-3 col-form-label"><?php echo display('account_name') ?> <i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name="account_name" id="account_name" type="text"
                                    placeholder="Account Name" required="" value="{account_name}">
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="parent_id" class="col-sm-3 col-form-label"><?php echo display('root_account') ?>
                                <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select name="parent_id" class="form-control" id="parent_account">
                                    <option value="1" <?php if ($parent_id == 1) {echo "selected";}?>>
                                        <?php echo "Patient" ?> </option>
                                    <option value="2" <?php if ($parent_id == 2) {echo "selected";}?>>
                                        <?php echo display('manufacturer') ?></option>
                                    <option value="3" <?php if ($parent_id == 3) {echo "selected";}?>>
                                        <?php echo display('office') ?></option>
                                    <option value="4" <?php if ($parent_id == 4) {echo "selected";}?>>
                                        <?php echo display('loan') ?></option>
                                </select>
                            </div>
                        </div>


                        <input type="hidden" value="{account_id}" name="account_id">

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-Account" class="btn btn-success btn-large"
                                    name="add-Account" value="<?php echo display('save_changes') ?>" />
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
<!-- Edit account end -->