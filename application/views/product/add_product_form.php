<script src="<?php echo base_url() ?>my-assets/js/admin_js/json/product.js" type="text/javascript"></script>
<style>
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
</style>
<!-- Add Product Start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('new_product') ?></h1>
            <small><?php echo display('add_new_product') ?></small>
            <ol class="breadcrumb">
                <li><a href="index.html"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('product') ?></a></li>
                <li class="active"><?php echo display('new_product') ?></li>
            </ol>
        </div>
    </section>

    <section class="content">
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
if ($this->permission1->method('add_medicine', 'create')->access()) {?>
        <!-- Add Product -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading p-b-5">
                        <div class="row">
                            <div class="panel-title col-md-6">
                                <!-- <h4><?php echo display('new_product') ?></h4> -->
                            </div>
                            <div class="col-md-6 d-flex justify-content-right">
                                <?php
if ($this->permission1->method('import_medicine_csv', 'create')->access()) {?>
                                <a href="<?php echo base_url('Cproduct/add_product_csv') ?>"
                                    class="btn btn-info m-b-5 m-r-2"><i class="ti-plus"> </i>
                                    <?php echo display('add_product_csv') ?></a>
                                <?php }?>

                                <?php
if ($this->permission1->method('manage_medicine', 'read')->access()) {?>
                                <a href="<?php echo base_url('Cproduct/manage_product') ?>"
                                    class="btn btn-primary m-b-5 m-r-2"><i class="ti-align-justify"> </i>
                                    <?php echo display('manage_product') ?></a>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <?php echo form_open_multipart('Cproduct/insert_product', array('class' => 'form-vertical', 'id' => 'insert_product', 'name' => 'insert_product')) ?>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="product_name"
                                        class="col-sm-4 col-form-label"><?php echo display('product_name') ?> <i
                                            class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input class="form-control" tabindex="1" name="product_name" type="text"
                                            id="product_name" placeholder="<?php echo display('product_name') ?>"
                                            required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="strength" class="col-sm-4 col-form-label"><?php echo 'Pack of' ?> <i
                                            class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input class="form-control" onkeyup="get_sales_price(),get_manu_price()"
                                            tabindex="1" name="strength" type="number" id="strength"
                                            placeholder="<?php echo display('strength') ?>" min="0" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="generic_name"
                                        class="col-sm-4 col-form-label"><?php echo display('generic_name') ?> <i
                                            class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input class="form-control" name="generic_name" type="text" id="generic_name"
                                            placeholder="<?php echo display('generic_name') ?>" tabindex="2"
                                            required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="low_stock" class="col-sm-4 col-form-label">Low Stock Quantity<i
                                            class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input class="form-control" name="low_stock" type="text" id="low_stock"
                                            placeholder="Low Stock Quantity" tabindex="3" required="required" value='1'>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6" id="unit_info" style="display:none !important">
                                <div class="form-group row">
                                    <label for="unit" class="col-sm-4 col-form-label"><?php echo display('unit') ?> <i
                                            class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="unit" name="unit" tabindex="4">
                                            <option value="">Select Unit</option>
                                            <?php if ($unit_list) {?>
                                            {unit_list}
                                            <option value="{unit_name}">{unit_name}</option>
                                            {/unit_list}
                                            <?php }?>

                                        </select>
                                        <p style="color: green;cursor:pointer" data-target="#unit_modal"
                                            data-toggle="modal"><i class="fa fa-plus"></i><?php echo 'Add New Unit' ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <input class="form-control" name="box_size" type="hidden" value="1">
                        <!-- <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="box_size"
                                        class="col-sm-4 col-form-label"><?php echo display('box_size') ?>
                                        <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">

                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="product_location"
                                        class="col-sm-4 col-form-label"><?php echo display('product_location') ?></label>
                                    <div class="col-sm-8">
                                        <input class="form-control" tabindex="5" name="product_location" type="text"
                                            id="product_location"
                                            placeholder="<?php echo display('product_location') ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="description"
                                        class="col-sm-4 col-form-label"><?php echo display('details') ?></label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" name="description" id="description" rows="3"
                                            tabindex="6" placeholder="<?php echo display('details') ?>"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6" id="type_info">
                                <div class="form-group row">
                                    <label for="product_model"
                                        class="col-sm-4 col-form-label"><?php echo display('type') ?>
                                        <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="type_id" name="type_name" required="required"
                                            tabindex="7">
                                            <option value=""><?php echo display('select_one') ?></option>
                                            <?php
if ($type_list) {
    ?>
                                            {type_list}
                                            <option value="{type_name}">{type_name}</option>
                                            {/type_list}
                                            <?php
}
    ?>
                                        </select>
                                        <p style="color: green;cursor:pointer" data-target="#type_modal"
                                            data-toggle="modal"><i
                                                class="fa fa-plus"></i><?php echo display('add_new_type') ?></p>
                                    </div>
                                </div>
                            </div>
                            <input type="file" style="display:none !important" tabindex="8" name="image"
                                class="form-control" id="image">
                            <!-- <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="image" class="col-sm-4 col-form-label"><?php echo display('image') ?>
                                    </label>
                                    <div class="col-sm-8">
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="row">
                            <div class="col-sm-6" id="category_info" style="display:none !important">
                                <div class="form-group row">
                                    <label for="category_id"
                                        class="col-sm-4 col-form-label"><?php echo display('category') ?></label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="category_id" name="category_id" tabindex="9">
                                            <option value=""><?php echo display('select_one') ?></option>
                                            <?php if ($category_list) {?>
                                            {category_list}
                                            <option value="{category_id}">{category_name}</option>
                                            {/category_list}
                                            <?php }?>
                                        </select>
                                        <p style="color: green;cursor:pointer" data-target="#category_modal"
                                            data-toggle="modal"><i
                                                class="fa fa-plus"></i><?php echo display('add_new_category') ?></p>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="tax" class="col-sm-4 col-form-label"><?php echo display('tax') ?>
                                    </label>
                                    <div class="col-sm-8">
                                        <select name="tax" class="form-control dont-select-me" onchange="getTax(this)"
                                            tabindex="11">
                                            <option value="0" selected><?php echo display('select_one') ?></option>
                                            <?php $i = 0;foreach ($taxfield as $taxss) {?>
                                            <option value="tax<?php echo $i; ?>"><?php echo $taxss['tax_name']; ?>
                                            </option>
                                            <?php $i++;}?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label"><?php echo 'M.R.P.' ?> <i
                                            class="text-danger">*</i> </label>
                                    <div class="col-sm-8">
                                        <input name="price" type="hidden" required="required" id="price">
                                        <input class="form-control text-right" name="mrp" type="number"
                                            onkeyup="Checkprice(),get_sales_price()" required="required" id="mrp"
                                            placeholder="0.00" min="0" step="any">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <?php $i = 0;foreach ($taxfield as $taxss) {?>
                            <div class="col-sm-6 taxes" id="tax<?php echo $i; ?>" style="display:none">
                                <div class="form-group row">
                                    <label for="tax" class="col-sm-4 col-form-label"><?php echo $taxss['tax_name']; ?>
                                        <i class="text-danger"></i></label>
                                    <div class="col-sm-7">
                                        <input type="text" name="tax<?php echo $i; ?>" class="form-control"
                                            value="<?php echo number_format($taxss['default_value'], 2, '.', ','); ?>">
                                    </div>
                                    <div class="col-sm-1"> <i class="text-success">%</i></div>
                                </div>
                            </div>
                            <?php $i++;}?>
                        </div>


                        <div class="row" id="manufacturer_info">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="manufacturer"
                                        class="col-sm-4 col-form-label"><?php echo display('manufacturer') ?> <i
                                            class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <select name="manufacturer_id" class="form-control" required="required"
                                            tabindex="12" id="">
                                            <option value=""><?php echo display('select_manufacturer') ?> </option>
                                            <?php
$manufacturer_id = $this->session->userdata('manufacturer_id');
    if ($manufacturer) {
        foreach ($manufacturer as $manufac) {
            ?>
                                            <option value="<?php echo $manufac['manufacturer_id'] ?>"
                                                <?php if ($manufacturer_id == $manufac['manufacturer_id']) {echo "selected";}?>>
                                                <?php echo $manufac['manufacturer_name'] ?></option>
                                            <?php
}
    }
    ?>
                                        </select>
                                        <p style="color: green;cursor:pointer" data-target="#manufac_modal"
                                            data-toggle="modal"><i
                                                class="fa fa-plus"></i><?php echo display('add_new_manufacturer') ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="manufacturer_price"
                                        class="col-sm-4 col-form-label"><?php echo display('manufacturer_price') ?> <i
                                            class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input type="hidden" name="manufacturer_price" id="mprice" />
                                        <input type="text" tabindex="13" onkeyup="get_manu_price(),checkmprice()"
                                            class="form-control text-right" name="manufacturer_pack_price"
                                            placeholder="0.00" required="required" min="0" id="mpprice" step="any" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6">

                                <input type="submit" id="add-product" class="btn btn-primary btn-large"
                                    name="add-product" value="<?php echo display('save') ?>" tabindex="14" />
                                <input type="submit" value="<?php echo display('save_and_add_another') ?>"
                                    name="add-product-another" class="btn btn-large btn-success"
                                    id="add-product-another" tabindex="15">
                            </div>
                        </div>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </section>

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


</div>
<!-- Add Product End -->
<div id="manufac_modal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header" style="background-color: green;color: white">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <center><strong></i><?php echo display('add_new_manufacturer') ?></strong></center>
            </div>
            <div class="modal-body">
                <div id="manufacturerErr" class="alert hide"></div>
                <div id="manufacturer_mess" class="alert hide"></div>
                <div class="row">
                    <div class="col-sm-12">
                        <?php echo form_open_multipart('Cmanufacturer/new_manufacturer', array('id' => 'manufacturerform')) ?>
                        <div class="form-group row">
                            <label for="manufacturer_name"
                                class="col-sm-5 col-form-label"><?php echo display('manufacturer_name') ?> <i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-7">
                                <input class="form-control" name="manufacturer_name" id="manufacturer_name" type="text"
                                    placeholder="<?php echo display('manufacturer_name') ?>" required="required"
                                    tabindex="1">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile"
                                class="col-sm-5 col-form-label"><?php echo display('manufacturer_mobile') ?> <i
                                    class="text-danger"></i></label>
                            <div class="col-sm-7">
                                <input class="form-control" name="mobile" id="mobile" type="text"
                                    placeholder="<?php echo display('manufacturer_mobile') ?>" min="0" tabindex="2">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address "
                                class="col-sm-5 col-form-label"><?php echo display('manufacturer_address') ?></label>
                            <div class="col-sm-7">
                                <textarea class="form-control" name="address" id="address " rows="3"
                                    placeholder="<?php echo display('manufacturer_address') ?>" tabindex="3"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="details"
                                class="col-sm-5 col-form-label"><?php echo display('manufacturer_details') ?></label>
                            <div class="col-sm-7">
                                <textarea class="form-control" name="details" id="details" rows="3"
                                    placeholder="<?php echo display('manufacturer_details') ?>" tabindex="4"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-7">
                                <input type="submit" id="add-manufacturer" class="btn btn-primary btn-large"
                                    name="add-manufacturer" value="<?php echo display('save') ?>" tabindex="6" />

                            </div>
                        </div>
                        <?php echo form_close() ?>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>

<div id="unit_modal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header" style="background-color: green;color: white">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <center><strong></i><?php echo 'Add New Unit' ?></strong></center>
            </div>
            <div class="modal-body">
                <div id="unitErr" class="alert hide"></div>
                <div id="unit_mess" class="alert hide"></div>
                <div class="row">
                    <div class="col-md-9 col-sm-12">
                        <?php echo form_open('Cproduct/unit_form/', array('id' => 'unit-form', 'class' => "form-inner")) ?>

                        <div class="form-group row">
                            <label for="unit_name" class="col-xs-3 col-form-label"><?php echo display('unit_name') ?> <i
                                    class="text-danger">*</i></label>
                            <div class="col-xs-9">
                                <input name="unit_name" type="text" class="form-control" id="unit_name"
                                    placeholder="<?php echo display('unit_name') ?>" required>
                            </div>
                        </div>

                        <!--Radios-->
                        <div class="form-group row">
                            <label class="col-sm-3"><?php echo display('status') ?></label>
                            <div class="col-xs-9">
                                <div class="form-check">
                                    <label class="radio-inline"><input type="radio" name="status" value="1"
                                            checked><?php echo display('active') ?></label>
                                    <label class="radio-inline"><input type="radio" name="status"
                                            value="0"><?php echo display('inactive') ?></label>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="is_modal_form" value="yes" />
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="" class="btn btn-success btn-large" name=""
                                    value="<?php echo display('save') ?>" />
                            </div>
                        </div>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="type_modal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header" style="background-color: green;color: white">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <center><strong></i><?php echo display('add_new_type') ?></strong></center>
            </div>
            <div class="modal-body">
                <div id="typeErr" class="alert hide"></div>
                <div id="type_mess" class="alert hide"></div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-bd lobidrag">
                            <?php echo form_open('Cproduct/insert_type', array('class' => 'form-vertical', 'id' => 'med-type-form')) ?>
                            <div class="panel-body">
                                <div class="form-group row">
                                    <label for="type_name"
                                        class="col-sm-3 col-form-label"><?php echo display('type_name') ?> <i
                                            class="text-danger">*</i></label>
                                    <div class="col-sm-6">
                                        <input class="form-control" name="type_name" id="type_name" type="text"
                                            placeholder="<?php echo display('type_name') ?>" required="">
                                    </div>
                                </div>
                                <input type="hidden" name="is_modal_form" value='yes' />
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                                    <div class="col-sm-6">
                                        <input type="submit" id="add-customer" class="btn btn-success btn-large"
                                            name="add-customer" value="<?php echo display('save') ?>" />
                                    </div>
                                </div>
                            </div>
                            <?php echo form_close() ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<div id="category_modal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header" style="background-color: green;color: white">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <center><strong></i><?php echo display('add_new_category') ?></strong></center>
            </div>
            <div class="modal-body">
                <div id="categoryErr" class="alert hide"></div>
                <div id="category_mess" class="alert hide"></div>
                <div class="row" style="padding: 20px;">
                    <?php echo form_open('Ccategory/insert_category', array('class' => 'form-vertical', 'id' => 'insert_category')) ?>

                    <div class="form-group row">
                        <label for="category_name"
                            class="col-sm-3 col-form-label"><?php echo display('category_name') ?> <i
                                class="text-danger">*</i></label>
                        <div class="col-sm-6">
                            <input class="form-control" name="category_name" id="category_name" type="text"
                                placeholder="<?php echo display('category_name') ?>" required="">
                        </div>
                        <input type="hidden" value="yes" name="is_modal_form">
                        <div class="col-sm-3">
                            <input type="submit" id="add-category" class="btn btn-success btn-large" name="add-category"
                                value="<?php echo display('save') ?>" />
                        </div>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>

        </div>
    </div>

</div>



<script type="text/javascript">
$("#manufacturerform").submit(function(e) {
    e.preventDefault();
    var manufacturer_mess = $("#manufacturer_mess");
    var manufacturerErr = $("#manufacturerErr");
    $.ajax({
        url: $(this).attr('action'),
        method: $(this).attr('method'),
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function() {},
        success: function(data) {
            if (data.exception) {
                manufacturerErr.addClass('alert-danger').removeClass('alert-success hide').html(data
                    .exception);

                //$('#manufac_modal').modal('hide');
            } else {
                manufacturer_mess.addClass('alert-success').removeClass('alert-danger hide').html(
                    data
                    .message);
                manufacturer_mess.hide().fadeIn('slow');
                manufacturer_mess.fadeIn(700);
                setTimeout(() => {
                    manufacturer_mess.fadeOut(700);
                    $('#manufac_modal').modal('hide');
                    $("#manufacturer_info").load(location.href + " #manufacturer_info>*",
                        "");
                }, 1000);
            }
        },
        error: function(xhr) {
            alert('<?php echo display('failed') ?>!');
        }

    });

});

$('#manufac_modal').on('hidden.bs.modal', function() {
    $(this).find('form').trigger('reset');
    $("#manufacturer_mess").addClass('hide');
    $("#manufacturerErr").addClass('hide');
})
</script>

<script type="text/javascript">
$("#unit-form").submit(function(e) {
    e.preventDefault();
    var unit_mess = $("#unit_mess");
    var unitErr = $("#unitErr");
    $.ajax({
        url: $(this).attr('action'),
        method: $(this).attr('method'),
        dataType: 'json',
        data: $(this).serialize(),
        success: function(data) {
            if (data.status == 0) {
                unitErr.addClass('alert-danger').removeClass('alert-success hide').html(data
                    .msg);
            } else {
                unit_mess.addClass('alert-success').removeClass('alert-danger hide').html(
                    data.msg);
                unit_mess.hide().fadeIn('slow');
                unit_mess.fadeIn(700);
                setTimeout(() => {
                    unit_mess.fadeOut(700);
                    $('#unit_modal').modal('hide');
                    $("#unit_info").load(location.href + " #unit_info>*", "");
                }, 1000);
            }
        },
        error: function(xhr) {
            alert('<?php echo display('failed') ?>!');
        }

    });

});

$('#unit_modal').on('hidden.bs.modal', function() {
    $(this).find('form').trigger('reset');
    $("#unit_mess").addClass('hide');
    $("#unitErr").addClass('hide');
})
</script>

<script type="text/javascript">
$("#med-type-form").submit(function(e) {
    e.preventDefault();
    var type_mess = $("#type_mess");
    var typeErr = $("#typeErr");
    $.ajax({
        url: $(this).attr('action'),
        method: $(this).attr('method'),
        dataType: 'json',
        data: $(this).serialize(),
        success: function(data) {
            if (data.status == 0) {
                typeErr.addClass('alert-danger').removeClass('alert-success hide').html(data
                    .msg);
            } else {
                type_mess.addClass('alert-success').removeClass('alert-danger hide').html(
                    data.msg);
                type_mess.hide().fadeIn('slow');
                type_mess.fadeIn(700);
                setTimeout(() => {
                    type_mess.fadeOut(700);
                    $('#type_modal').modal('hide');
                    $("#type_info").load(location.href + " #type_info>*", "");
                }, 1000);
            }
        },
        error: function(xhr) {
            alert('<?php echo display('failed') ?>!');
        }

    });

});

$('#type_modal').on('hidden.bs.modal', function() {
    $(this).find('form').trigger('reset');
    $("#type_mess").addClass('hide');
    $("#typeErr").addClass('hide');
})
</script>

<script type="text/javascript">
$("#insert_category").submit(function(e) {
    e.preventDefault();
    var category_mess = $("#category_mess");
    var categoryErr = $("#categoryErr");
    $.ajax({
        url: $(this).attr('action'),
        method: $(this).attr('method'),
        dataType: 'json',
        data: $(this).serialize(),
        success: function(data) {
            if (data.status == 0) {
                categoryErr.addClass('alert-danger').removeClass('alert-success hide').html(data
                    .msg);
            } else {
                category_mess.addClass('alert-success').removeClass('alert-danger hide').html(
                    data.msg);
                category_mess.hide().fadeIn('slow');
                category_mess.fadeIn(700);
                setTimeout(() => {
                    category_mess.fadeOut(700);
                    $('#category_modal').modal('hide');
                    $("#category_info").load(location.href + " #category_info>*", "");
                }, 1000);
            }
        },
        error: function(xhr) {
            alert('<?php echo display('failed') ?>!');
        }

    });

});

$('#category_modal').on('hidden.bs.modal', function() {
    $(this).find('form').trigger('reset');
    $("#category_mess").addClass('hide');
    $("#categoryErr").addClass('hide');
})
</script>

<script>
function ProfitPrice() {
    var x = document.getElementById("price").value;
    var y = document.getElementById("mprice").value;
    var z = x - y;
    var profitalert = '<?php echo display('your_profit_is') ?>: ';
    // document.getElementById("prft").innerHTML = profitalert + Number(z).toFixed(2);


    if (z < 0) {
        setTimeout(function() {
            document.getElementById("mprice").value = '';
            document.getElementById("mpprice").value = '';
            document.getElementById("price").HTML = '';
            alert('<?php echo display('please_check_your_price'); ?>');
            // document.getElementById("prft").innerHTML = '';
        }, 100);

        return false;
    }
    return true;
}

function Checkprice() {
    var x = document.forms["insert_product"]["price"].value;

    if (isNaN(x)) {
        alert("<?php echo display('must_input_numbers') ?>");
        document.getElementById("price").value = '';
        return false;
    }
}

function get_sales_price() {
    var val = $('#mrp').val();
    var sval = $('#strength').val();
    if (sval) {
        $('#price').val(val / sval);
    } else {
        $('#price').val(val);
    }
    ProfitPrice();
}

function get_manu_price() {
    var val = $('#mpprice').val();
    var sval = $('#strength').val();
    if (sval) {
        $('#mprice').val(val / sval);
    } else {
        $('#mprice').val(val);
    }
    ProfitPrice();
}

function getTax(ele) {
    var val = $(ele).val();
    $(".taxes").hide();
    $("#" + val).show();
}

function checkmprice() {
    var y = document.forms["insert_product"]["manufacturer_price"].value;
    if (isNaN(y)) {
        alert("<?php echo display('must_input_numbers'); ?>");
        document.getElementById("mprice").value = '';
        // document.getElementById("prft").innerHTML = '';
        return false;
    }
}
</script>
<script type="text/javascript">
window.onload = function() {
    var text_input = document.getElementById('product_id');
    // text_input.focus();
    // text_input.select();
}
</script>