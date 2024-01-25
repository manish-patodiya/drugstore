<!-- Add new customer start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('hrm') ?></h1>
            <small><?php echo $title ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('hrm') ?></a></li>
                <li class="active"><?php echo $title ?></li>
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

        <!-- New Employee Type -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo $title ?> </h4>
                        </div>
                    </div>
                  
                    <div class="panel-body">

                         <?= form_open('Chrm/create_designation') ?>
                    <div class="form-group row">
                        <div for="designation_name" class="col-sm-3 col-form-div"><?php echo display('designation') ?> *</div>
                        <div class="col-sm-9">
                           <input name="designation" class="form-control" type="text" placeholder="<?php echo display('designation') ?>" id="designation" value="<?php echo (!empty($designation_data[0]['designation'])?$designation_data[0]['designation']:'')?>"> 
                           <input type="hidden" name="id" value="<?php echo (!empty($designation_data[0]['id'])?$designation_data[0]['id']:'')?>">
                           
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <div for="details" class="col-sm-3 col-form-div"><?php echo display('details') ?></div>
                        <div class="col-sm-9">
                             <textarea name="details" class="form-control" placeholder="<?php echo display('details') ?>" id="details"><?php echo (!empty($designation_data[0]['details'])?$designation_data[0]['details']:'')?></textarea> 
                        </div>
                    </div> 

                    <div class="form-group text-right">
                        <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                        <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('save') ?></button>
                    </div>
                <?php echo form_close() ?>
                    </div>
                
                </div>
            </div>
        </div>
    </section>
</div>
