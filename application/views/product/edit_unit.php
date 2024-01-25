<!-- Add new customer start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('unit') ?></h1>
            <small><?php echo $title; ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('unit') ?></a></li>
                <li class="active"><?php echo $title; ?></li>
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

        
        <!-- New customer -->

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('edit_unit') ?> </h4>
                        </div>
                    </div>
                 
                    <div class="panel-body">
                         <div class="row">
                    <div class="col-md-9 col-sm-12">

                        <?php echo form_open('Cproduct/unit_form/'.$unit->id,'class="form-inner"') ?>

                            <?php echo form_hidden('id', $unit->id) ?>

                            <div class="form-group row">
                                <label for="unit_name" class="col-xs-3 col-form-label"><?php echo display('unit_name')?> <i class="text-danger">*</i></label>
                                <div class="col-xs-9">
                                    <input name="unit_name"  type="text" class="form-control" id="unit_name" placeholder="<?php echo display('unit_name')?>" value="<?php echo $unit->unit_name?>">
                                </div>
                            </div>

                          


                            <!--Radios-->
                            <div class="form-group row">
                                <label class="col-sm-3"><?php echo display('status') ?></label>
                                <div class="col-xs-9"> 
                                    <div class="form-check">
                                        <label class="radio-inline"><input type="radio" name="status" value="1" <?php if($unit->status == 1){echo 'checked';}?>><?php echo display('active') ?></label>
                                        <label class="radio-inline"><input type="radio" name="status" value="0" <?php if($unit->status == 0){echo 'checked';}?>><?php echo display('inactive') ?></label>
                                    </div>
                                </div>
                            </div>
                            
                          <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                                <div class="col-sm-6">
                                    <input type="submit" id="" class="btn btn-success btn-large"
                                           name="" value="<?php echo display('save') ?>"/>
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
