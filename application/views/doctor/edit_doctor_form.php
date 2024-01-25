<!--Edit doctor start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo 'Doctor Edit' ?></h1>
            <small><?php echo 'Doctor Edit' ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo 'Doctor' ?></a></li>
                <li class="active"><?php echo 'Doctor Edit' ?></li>
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
if ($this->permission1->method('manage_doctor', 'update')->access()) {?>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo 'Patient Edit' ?> </h4>
                        </div>
                    </div>
                    <?php echo form_open_multipart('Cdoctor/doctor_update', array('class' => 'form-vertical', 'id' => 'doctor_update')) ?>
                    <div class="panel-body">

                        <div class="form-group row">
                            <label for="doctor_name" class="col-sm-3 col-form-label"><?php echo 'Doctor Name' ?> <i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name="doctor_name" id="doctor_name" type="text"
                                    placeholder="<?php echo 'Dcotor Name' ?>" required="" value="{doctor_name}"
                                    tabindex="1">
                                <input type="hidden" value="{doctor_name}" name="oldname">
                            </div>
                        </div>
                        <input type="hidden" value="{doctor_id}" name="doctor_id">

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-Doctor" class="btn btn-success btn-large" name="add-Doctor"
                                    value="<?php echo display('save_changes') ?>" tabindex="5" />
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
<!-- Edit Doctor end -->