<!-- Add new doctor start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('add_doctor') ?></h1>
            <small><?php echo "Add New Doctor" ?></small>

            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo "Patient" ?></a></li>
                <li class="active"><?php echo display('add_doctor') ?></li>
            </ol>
        </div>
    </section>

    <section class="content">
        <!-- Alert Message -->
        <?php
$message = $this->session->userdata('message');
if (isset($message)) {?>
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <?php echo $message ?>
        </div>
        <?php $this->session->unset_userdata('message');}
$error_message = $this->session->userdata('error_message');
if (isset($error_message)) {?>
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <?php echo $error_message ?>
        </div>
        <?php $this->session->unset_userdata('error_message');}?>
        <?php
if ($this->permission1->method('add_doctor', 'create')->access()) {?>
        <!-- New doctor -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading p-b-5">
                        <div class="row">
                            <div class="panel-title col-md-6"></div>
                            <div class="d-flex justify-content-right col-md-6">
                                <?php
if ($this->permission1->method('manage_doctor', 'read')->access()) {?>
                                <a href="<?php echo base_url('Cdoctor/manage_doctor') ?>"
                                    class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i>
                                    <?php echo display('manage_doctor') ?> </a>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <?php echo form_open('Cdoctor/insert_doctor', array('class' => 'form-vertical', 'id' => 'insert_doctor')) ?>
                    <div class="panel-body">
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label"><?php echo 'Doctor Name' ?> <i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name="doctor_name" id="doctor_name" type="text"
                                    placeholder="<?php echo 'Doctor Name' ?>" required="" tabindex="1">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-doctor" class="btn btn-primary btn-large" name="add-doctor"
                                    value="<?php echo display('save') ?>" tabindex="2" />
                                <input type="submit" value="<?php echo display('save_and_add_another') ?>"
                                    name="add-doctor-another" class="btn btn-large btn-success" id="add-doctor-another"
                                    tabindex="6">
                            </div>
                        </div>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
        <?php } else {?>
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
        <?php }?>
    </section>
</div>
<!-- Add new doctor end -->