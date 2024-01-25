<!-- Add Prerson start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('currency') ?></h1>
            <small><?php echo $title ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('web_settings') ?></a></li>
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

         <div class="row">
            <div class="col-sm-12">
                <div class="column">
        <?php if($this->permission1->method('add_currency','read')->access()){?>
                  <a href="<?php echo base_url('Currency')?>" class="btn btn-info m-b-5 m-r-2"><i class="fa fa-list"> </i> <?php echo display('currency_list')?> </a>      <?php }?>           
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo $title; ?> </h4>
                        </div>
                    </div>
                   <?php echo form_open_multipart('Currency/submit_currency',array('class' => 'form-vertical','id' => 'currency_entry' ))?>
                    <div class="panel-body">

                    	<div class="form-group row">
                            <input type="hidden" name="id" value="<?php echo (!empty($cuerrencyinfo->id)?$cuerrencyinfo->id:'')?>">
                            <label for="name" class="col-sm-3 col-form-label"><?php echo display('currency_name') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="currency_name" id="currency_name" required="" placeholder="<?php echo display('currency_name') ?>" value="<?php echo (!empty($cuerrencyinfo->currency_name)?$cuerrencyinfo->currency_name:'')?>"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-sm-3 col-form-label"><?php echo display('currency_icon') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="currency_icon" id="cur_icon" required="" placeholder="<?php echo display('currency_icon') ?>" value="<?php echo (!empty($cuerrencyinfo->icon)?$cuerrencyinfo->icon:'')?>"/>
                            </div>
                        </div>

                       

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="reset" class="btn btn-danger" value="<?php echo display('reset') ?>" />
                                <input type="submit" id="add-deposit" class="btn btn-success" name="add-deposit" value="<?php echo display('save') ?>"/>
                            </div>
                        </div>
                    </div>
                    <?php echo form_close()?>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Add Prerson end -->



