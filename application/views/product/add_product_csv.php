<!-- Add Product Report Start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('import_product_csv') ?></h1>
            <small><?php echo display('import_product_csv') ?></small>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url('') ?>"><i class="pe-7s-home"></i> <?php echo display('home') ?></a>
                </li>
                <li><a href="<?php echo base_url('Cproduct') ?>"><?php echo display('product') ?></a></li>
                <li class="active"><?php echo display('import_product_csv') ?></li>
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
        <!-- Add Product report -->
        <div class="row p-r-15 m-y-10">
            <div class="col-sm-12 d-flex justify-content-right">
                <div class="column">
                    <!-- All modals added here for the demo. You would of course just have one, dynamically created -->
                    <!-- Modal fade in & scale effect -->
                    <div class="md-modal md-effect-1" id="modal-1">
                        <div class="md-content">
                            <h3><?php echo display('add_manufacturer') ?></h3>
                            <div class="n-modal-body">
                                <h4 class="text-success" id="message" style="display: none;text-align: center;"></h4>
                                <h4 class="text-danger" id="error_message" style="display: none;text-align: center;">
                                </h4>
                                <form action="<?php echo base_url('Cmanufacturer/insert_manufacturer') ?>" id="validate"
                                    method="post">
                                    <div class="panel-body">
                                        <div class="form-group row">
                                            <label for="manufacturer_name"
                                                class="col-sm-4 col-form-label"><?php echo display('manufacturer_name') ?>
                                                <i class="text-danger">*</i></label>
                                            <div class="col-sm-6">
                                                <input class="form-control" name="manufacturer_name"
                                                    id="manufacturer_name" type="text"
                                                    placeholder="<?php echo display('manufacturer_name') ?>"
                                                    required="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="mobile"
                                                class="col-sm-4 col-form-label"><?php echo display('manufacturer_mobile') ?>
                                                <i class="text-danger">*</i></label>
                                            <div class="col-sm-6">
                                                <input class="form-control" name="mobile" id="mobile" type="text"
                                                    placeholder="<?php echo display('manufacturer_mobile') ?>"
                                                    required="" min="0">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="address "
                                                class="col-sm-4 col-form-label"><?php echo display('manufacturer_address') ?></label>
                                            <div class="col-sm-6">
                                                <textarea class="form-control" name="address" id="address " rows="3"
                                                    placeholder="<?php echo display('manufacturer_address') ?>"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="details"
                                                class="col-sm-4 col-form-label"><?php echo display('manufacturer_details') ?></label>
                                            <div class="col-sm-6">
                                                <textarea class="form-control" name="details" id="details" rows="3"
                                                    placeholder="<?php echo display('manufacturer_details') ?>"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                                            <div class="col-sm-6">
                                                <input type="submit" id="add-manufacturer"
                                                    class="btn btn-primary btn-large" name="add-manufacturer"
                                                    value="<?php echo display('save') ?>" />

                                                <input type="button" class="btn btn-success md-close"
                                                    value="<?php echo display('close') ?>" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="md-modal md-effect-1" id="modal-2">
                        <div class="md-content">
                            <h3><?php echo display('add_category') ?></h3>
                            <div class="n-modal-body">
                                <h4 class="text-success" id="message1" style="display: none;text-align: center;"></h4>
                                <h4 class="text-danger" id="error_message1" style="display: none;text-align: center;">
                                </h4>
                                <form action="<?php echo base_url('Ccategory/insert_category') ?>" id="validate"
                                    method="post">
                                    <div class="panel-body">

                                        <div class="form-group row">
                                            <label for="category_name"
                                                class="col-sm-4 col-form-label"><?php echo display('category_name') ?>
                                                <i class="text-danger">*</i></label>
                                            <div class="col-sm-6">
                                                <input class="form-control" name="category_name" id="category_name"
                                                    type="text" placeholder="<?php echo display('category_name') ?>"
                                                    required="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                                            <div class="col-sm-6">
                                                <input type="submit" id="add-manufacturer"
                                                    class="btn btn-primary btn-large" name="add-manufacturer"
                                                    value="<?php echo display('save') ?>" />

                                                <input type="button" class="btn btn-success md-close"
                                                    value="<?php echo display('close') ?>" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col-sm-12 d-flex justify-content-right">
                <?php
if ($this->permission1->method('add_manufacturer', 'create')->access()) {?>
                <button class="btn btn-success md-trigger m-b-5 m-r-2" data-modal="modal-1"><i
                        class="ti-plus"></i><span><?php echo display('add_manufacturer') ?></span></button>
                <?php }?>
                <?php
if ($this->permission1->method('add_category', 'create')->access()) {?>
                <button class="btn btn-info md-trigger m-b-5 m-r-2" data-modal="modal-2"><i class="ti-plus"></i>
                    <?php echo display('add_category') ?></button>
                <?php }?>

                <?php
if ($this->permission1->method('add_medicine', 'create')->access()) {?>
                <a href="<?php echo base_url('Cproduct') ?>" class="btn btn-warning m-b-5 m-r-2"><i
                        class="ti-align-plus"></i> <?php echo display('add_product') ?></a>
                <?php }?>

                <?php
if ($this->permission1->method('manage_medicine', 'read')->access()) {?>
                <a href="<?php echo base_url('Cproduct/manage_product') ?>" class="btn btn-primary m-b-5 m-r-2"><i
                        class="ti-align-justify"></i> <?php echo display('manage_product') ?></a>
                <?php }?>
                <!-- the overlay element -->
                <div class="md-overlay"></div>
            </div>
        </div>

        <script type="text/javascript">
        $("#add_manufacturer").submit(function(event) {
            event.preventDefault();
            var formdata = new FormData($(this)[0]);

            $.ajax({
                url: $(this).attr("action"),
                type: $(this).attr("method"),
                data: formdata,
                processData: false,
                contentType: false,
                success: function(data, status) {
                    if (data == true) {
                        $('#message').css('display', 'block');
                        $('#message').html('manufacturer added successfully');
                        setTimeout(function() {
                            window.location.href = window.location.href;
                        }, 2000);
                    } else {
                        $('#error_message').css('display', 'block');
                        $('#error_message').html('manufacturer already exist !');
                    }
                },
                error: function(xhr, desc, err) {


                }
            });
        });
        </script>
        <!-- Add category -->
        <script type="text/javascript">
        $("#add_category").submit(function(event) {
            event.preventDefault();
            var formdata = new FormData($(this)[0]);

            $.ajax({
                url: $(this).attr("action"),
                type: $(this).attr("method"),
                data: formdata,
                processData: false,
                contentType: false,
                success: function(data, status) {
                    if (data == true) {
                        $('#message1').css('display', 'block');
                        // $('#message1').html('Category added successfully');
                        $('#message1').html(<?php echo display('category_added_successfully') ?>);
                        setTimeout(function() {
                            window.location.href = window.location.href;
                        }, 1000);
                    } else {
                        $('#error_message1').css('display', 'block');
                        // $('#error_message1').html('Category already exist !');
                        $('#error_message1').html(<?php echo display('category_already_exist') ?>);
                    }
                },
                error: function(xhr, desc, err) {


                }
            });
        });
        </script>



        <?php
if ($this->permission1->method('import_medicine_csv', 'create')->access()) {?>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <!-- Multiple panels with drag & drop -->
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('csv_file_informaion') ?></h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <a href="<?php echo base_url('assets/data/csv/product_csv_sample.csv') ?>"
                            class="btn btn-primary pull-right"><i class="fa fa-download"></i> Download Sample File</a>
                        <span class="text-warning">The first line in downloaded csv file should remain as it is. Please
                            do not change the order of columns.</span><br>The correct column order is <span
                            class="text-info">(Serial No,Manufacturer Name,Medicine Name, Generic Name,Strength,Category
                            Name,Manufacturer Price)</span> &amp; you must follow this.<br>Please make sure the csv file
                        is UTF-8 encoded and not saved with byte order mark (BOM).<p>The images should be uploaded in
                            <strong>uploads</strong> folder.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('import_product_csv') ?></h4>
                        </div>
                    </div>
                    <?php echo form_open_multipart('Cproduct/uploadCsv', array('class' => 'form-vertical', 'id' => 'validate', 'name' => 'insert_product')) ?>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="upload_csv_file"
                                        class="col-sm-4 col-form-label"><?php echo display('upload_csv_file') ?> <i
                                            class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input class="form-control" name="upload_csv_file" type="file"
                                            id="upload_csv_file" placeholder="<?php echo display('upload_csv_file') ?>"
                                            required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6">
                                <input type="submit" id="add-product" class="btn btn-primary btn-large"
                                    name="add-product" value="<?php echo display('submit') ?>" />
                                <input type="submit" value="<?php echo display('submit_and_add_another') ?>"
                                    name="add-product-another" class="btn btn-large btn-success"
                                    id="add-product-another">
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
}
?>
    </section>
</div>
<!-- Add Product Report End -->