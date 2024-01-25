<style>
.content {
    padding: 0 30px 10px
}

.content-header {
    margin-bottom: 20px
}
</style>
<!-- Syncronizer setting -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('synchronizer_setting') ?></h1>
            <small><?php echo display('synchronizer_setting') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('data_synchronizer') ?></a></li>
                <li class="active"><?php echo display('synchronizer_setting') ?></li>
            </ol>
        </div>
    </section>

    <section class="content">

        <!-- Alert Message -->
        <?php
$message = $this->session->userdata('success');
if (isset($message)) {
    ?>
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <?php echo $message ?>
        </div>
        <?php
$this->session->unset_userdata('error');
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
if ($this->permission1->method('synchronize', 'read')->access() || $this->permission1->method('synchronize', 'update')->access()) {?>
                    <a href="<?php echo base_url('data_synchronizer/synchronize') ?>"
                        class="btn btn-success m-b-5 m-r-2"><i class="ti-align-justify"> </i>
                        <?php echo display('synchronize') ?></a>
                    <?php }?>

                    <?php
if ($this->permission1->method('backup_and_restore', 'read')->access() || $this->permission1->method('backup_and_restore', 'update')->access()) {?>
                    <a href="<?php echo base_url('Backup_restore') ?>" class="btn btn-success m-b-5 m-r-2"><i
                            class="ti-align-justify"> </i> <?php echo display('backup_and_restore') ?></a>
                    <?php }?>
                </div>
            </div>
        </div>

        <?php
if ($this->permission1->method('data_setting', 'read')->access() || $this->permission1->method('data_setting', 'update')->access()) {?>
        <!-- Setting -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('synchronizer_setting') ?> </h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <?php echo form_open("data_synchronizer/form") ?>

                        <div class="form-group row">
                            <label for="hostname" class="col-sm-3 col-form-label"><?php echo display('hostname') ?>
                                *</label>
                            <div class="col-sm-9">
                                <input name="hostname" class="form-control" type="text"
                                    placeholder="www.example.com / 192.168.1.1" id="hostname"
                                    value="<?php echo (!empty($hostname) ? $hostname : null) ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-sm-3 col-form-label"><?php echo display('username') ?>
                                *</label>
                            <div class="col-sm-9">
                                <input name="username" class="form-control" type="text"
                                    placeholder="<?php echo display('username') ?>" id="username"
                                    value="<?php echo (!empty($username) ? $username : null) ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-sm-3 col-form-label"><?php echo display('password') ?>
                                *</label>
                            <div class="col-sm-9">
                                <input name="password" class="form-control" type="password"
                                    placeholder="<?php echo display('password') ?>" id="password"
                                    value="<?php echo (!empty($password) ? $password : null) ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="port" class="col-sm-3 col-form-label"><?php echo display('ftp_port') ?>
                                *</label>
                            <div class="col-sm-9">
                                <input name="port" class="form-control" type="text" placeholder="Default Port 21"
                                    id="port" value="<?php echo (!empty($port) ? $port : 21) ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="debug" class="col-sm-3 col-form-label"><?php echo display('ftp_debug') ?>
                                *</label>
                            <div class="col-sm-9">
                                <?php echo form_dropdown('debug', array('false' => 'FALSE', 'true' => 'TRUE'), (!empty($debug) ? $debug : null), 'class="form-control" id="debug"') ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="project_root"
                                class="col-sm-3 col-form-label"><?php echo display('project_root') ?> *</label>
                            <div class="col-sm-9">
                                <input name="project_root" class="form-control" type="text"
                                    placeholder="./public_html/your_project_name/" id="project_root"
                                    value="<?php echo (!empty($project_root) ? $project_root : null) ?>">
                            </div>
                        </div>
                        <?php
if ($this->permission1->method('data_setting', 'update')->access()) {?>
                        <div class="form-group text-right">
                            <button type="reset"
                                class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                            <button type="submit"
                                class="btn btn-success w-md m-b-5"><?php echo display('save') ?></button>
                        </div>
                        <?php }?>
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
<!-- Syncronizer setting -->