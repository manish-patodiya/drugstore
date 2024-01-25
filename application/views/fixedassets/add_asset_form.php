
<script src="<?php echo base_url() ?>my-assets/js/admin_js/json/product.js" type="text/javascript"></script>
<!-- Add Product Start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('fixed_assets') ?></h1>
            <small><?php echo display('add_fixed_assets') ?></small>
            <ol class="breadcrumb">
                <li><a href="index.html"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('fixed_assets') ?></a></li>
                <li class="active"><?php echo display('add_fixed_assets') ?></li>
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
                            <h4><?php echo display('add_fixed_assets') ?></h4>
                        </div>
                    </div>
                    <?php echo form_open_multipart('Fixedassets/insert_asset', array('class' => 'form-vertical', 'id' => 'insert_assets', 'name' => 'insert_assets')) ?>
                    <div class="panel-body">
                        <div class="row">
                             <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="item_code" class="col-sm-4 col-form-label"><?php echo display('item_code') ?>  <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input type="text" tabindex="" class="form-control" id="item_code" name="item_code" placeholder="<?php echo display('item_code') ?>"   />
                                        
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="item_name" class="col-sm-4 col-form-label"><?php echo display('item_name') ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input class="form-control" name="item_name" type="text" id="item_name" placeholder="<?php echo display('item_name') ?>" required tabindex="1" >
                                    </div>
                                </div>
                            </div>
                           
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="price" class="col-sm-4 col-form-label"><?php echo display('price') ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input type="text" tabindex="" class="form-control text-right" id="price" name="price" placeholder="0.00"  required />
                                    </div>
                                </div>
                            </div>

                        </div>                        

                       
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="previous_stock" class="col-sm-4 col-form-label"><?php echo display('opening_assets') ?> </label>
                                    <div class="col-sm-8">
                                        <input type="text" name="previous_stock" class="form-control" id="previous_stock" tabindex="4" placeholder="<?php echo display('opening_assets') ?>">
                                    </div>
                                </div> 
                            </div>
                           
                        </div> 
                          
                        <div class="form-group row">
                            <div class="col-sm-6">

                                <button type="submit" id="add-assets" class="btn btn-primary btn-large" name="add-assets"  tabindex="10" /><?php echo display('save') ?></button>
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
<script type="text/javascript">
    $(document).ready(function() {
  $("#previous_stock").keyup(function() {
    var x = document.getElementById('showSearchDiv');
    if($(this).val() == "") {
      x.style.display = 'none';
    } else {
      x.style.display = 'block';
    }
  });
});
</script>