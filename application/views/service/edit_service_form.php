<!--Edit customer start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('service_edit') ?></h1>
            <small><?php echo display('service_edit') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('service') ?></a></li>
                <li class="active"><?php echo display('service_edit') ?></li>
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
                            <h4><?php echo display('service_edit') ?> </h4>
                        </div>
                    </div>
                  <?php echo form_open_multipart('Cservice/service_update',array('class' => 'form-vertical', 'id' => 'service_update'))?>
                    <div class="panel-body">

                    	<div class="form-group row">
                            <label for="service_name" class="col-sm-3 col-form-label"><?php echo display('service_name') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="service_name" id="service_name" type="text" placeholder="<?php echo display('service_name') ?>"  required="" value="{service_name}">
                            </div>
                        </div>
                       
                    <div class="form-group row">
                            <label for="charge" class="col-sm-3 col-form-label"><?php echo display('charge') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="charge" id="charge" type="text" placeholder="<?php echo display('charge') ?>"  required="" value="{charge}">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label"><?php echo display('description') ?> <i class="text-danger"></i></label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name ="description" id="description"  placeholder="<?php echo display('description') ?>" >{description}</textarea>
                            </div>
                        </div>


                     <?php 
$i=0;
foreach ($taxfield as $txs) {
    $tax = 'tax'.$i;
    ?>

                         <div class="form-group row">
                            <label for="tax" class="col-sm-3 col-form-label"><?php echo $txs['tax_name']; ?> <i class="text-danger"></i></label>
                            <div class="col-sm-6">
                              <input type="text" name="tax<?php echo $i;?>" class="form-control" value="<?php echo  number_format($servicedetails[0][$tax]*100, 2, '.', ',');?>">
                            </div>
                            <div class="col-sm-1"> <i class="text-success">%</i></div>
                        </div>
                       <?php $i++;}

?>

                        
                        

                        <input type="hidden" value="{service_id}" name="service_id">

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-service" class="btn btn-success btn-large" name="add-service" value="<?php echo display('save_changes') ?>" />
                            </div>
                        </div>
                    </div>
                    <?php echo form_close()?>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Edit customer end -->



