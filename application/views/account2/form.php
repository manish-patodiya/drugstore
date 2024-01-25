<!-- Add new Account start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('create_accounts') ?></h1>
            <small><?php echo display('create_accounts') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('accounts') ?></a></li>
                <li class="active"><?php echo display('create_accounts') ?></li>
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
if ($this->permission1->method('create_accounts', 'manage_account')->access()) {?>
                    <a href="<?php echo base_url('Account_Controller/manage_account') ?>"
                        class="btn btn-success m-b-5 m-r-2"><i class="ti-align-justify"> </i>
                        <?php echo display('manage_account') ?></a>
                    <?php }?>
                </div>
            </div>
        </div>

        <?php
if ($this->permission1->method('create_accounts', 'create')->access()) {?>
        <!-- New Account -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('create_accounts') ?> </h4>
                        </div>
                    </div>
                    <?php echo form_open('Account_Controller/insert_account', array('class' => 'form-vertical', 'id' => 'validate')) ?>
                    <div class="panel-body">

                        <div class="form-group row">
                            <label for="account_name"
                                class="col-sm-3 col-form-label"><?php echo display('account_name') ?> <i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" name="account_name"
                                    placeholder="<?php echo display('account_name') ?>" id="account_name" required=""
                                    class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="parent_account"
                                class="col-sm-3 col-form-label"><?php echo display('root_account') ?><i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select name="parent_id" class="form-control" id="parent_account">
                                    <option value="1"><?php echo "Patient" ?> </option>
                                    <option value="2"><?php echo display('manufacturer') ?></option>
                                    <option value="3"><?php echo display('office') ?></option>
                                    <option value="4"><?php echo display('loan') ?></option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-deposit" class="btn btn-success" name="add-deposit"
                                    value="<?php echo display('create_accounts') ?>" />
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
<!-- Add new Account end -->