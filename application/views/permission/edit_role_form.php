<!--Edit customer start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('category_edit') ?></h1>
            <small><?php echo display('category_edit') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('category') ?></a></li>
                <li class="active"><?php echo display('category_edit') ?></li>
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
            <?php
            if($this->permission1->method('add_role','update')->access()){ ?>

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4><?php echo display('category_edit') ?> </h4>
                            </div>
                        </div>
                        <?php echo form_open_multipart('Permission/role_update',array('class' => 'form-vertical', 'id' => 'validate'))?>
                        <div class="panel-body">

                            <div class="form-group row">
                                <label for="category_name" class="col-sm-3 col-form-label"><?php echo display('role_name') ?> <i class="text-danger">*</i></label>
                                <div class="col-sm-6">
                                    <input class="form-control" name ="type" id="category_name" type="text" placeholder="<?php echo display('category_name') ?>"  required="" value="<?php echo $type?>">
                                </div>
                            </div>
                            <input type="hidden" value="<?php echo $id;?>" name="id">

                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                                <div class="col-sm-6">
                                    <input type="submit" id="add-Customer" class="btn btn-success btn-large" name="add-Customer" value="<?php echo display('save_changes') ?>" />
                                </div>
                            </div>
                        </div>
                        <?php echo form_close()?>
                    </div>
                </div>
            </div>
            <?php
            }
            else{
                ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-bd lobidrag">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4><?php echo display('You do not have permission to access. Please contact with administrator.');?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }?>
        </section>

</div>
<!-- Edit customer end -->



