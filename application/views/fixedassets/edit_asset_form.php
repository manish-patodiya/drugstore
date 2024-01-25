
<script src="<?php echo base_url() ?>my-assets/js/admin_js/json/product.js" type="text/javascript"></script>
<!-- Add Product Start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('fixed_assets') ?></h1>
            <small><?php echo display('edit_fixed_asset') ?></small>
            <ol class="breadcrumb">
                <li><a href="index.html"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('fixed_assets') ?></a></li>
                <li class="active"><?php echo display('edit_fixed_asset') ?></li>
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

    

        <!-- Add Product -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('edit_fixed_asset') ?></h4>
                        </div>
                    </div>
                    <?php echo form_open_multipart('Fixedassets/fixed_asset_update', array('class' => 'form-vertical', 'id' => 'fixed_asset_update', 'name' => 'fixed_asset_update')) ?>
                    <div class="panel-body">
                        <div class="row">
                             <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="item_code" class="col-sm-4 col-form-label"><?php echo display('item_code') ?>  <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input type="text" tabindex="" class="form-control" id="item_code" name="item_code" placeholder="<?php echo display('item_code') ?>"  value="{item_code}" />
                                        <input type="hidden" name="old_item_code" value="{item_code}">
                                        <input type="hidden" name="id" value="{id}">
                                        
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="item_name" class="col-sm-4 col-form-label"><?php echo display('item_name') ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input class="form-control" name="item_name" type="text" id="item_name" placeholder="<?php echo display('item_name') ?>" required tabindex="1" value="{item_name}" >
                                    </div>
                                </div>
                            </div>
                           
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="price" class="col-sm-4 col-form-label"><?php echo display('price') ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input type="text" tabindex="" class="form-control text-right" id="price" name="price" placeholder="0.00"  required value="{price}"/>
                                    </div>
                                </div>
                            </div>

                        </div>                        

                       
                        <div class="form-group row">
                            <div class="col-sm-6">

                                <button type="submit" id="add-product" class="btn btn-primary btn-large" name="add-product"  tabindex="10" /><?php echo display('save_change') ?></button>
                            </div>
                        </div>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Add Product End -->
