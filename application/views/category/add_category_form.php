<!-- Add new customer start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('product') ?></h1>
            <small><?php echo display('category') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('product') ?></a></li>
                <li class="active"><?php echo display('category') ?></li>
            </ol>
        </div>
    </section>

    <section class="content">
        <style type="text/css">
        .nav-tabs>li.active>a {
            background-color: #3B8104 !important;
            color: #fff !important;
            border-radius: 4;
        }

        .nav-tabs>li>a {
            background-color: #1C93C7 !important;
            color: #fff !important;
            border-radius: 4;
        }
        </style>

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
                    <!-- <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('category') ?> </h4>
                        </div>
                    </div>
                    -->
                    <div class="panel-body">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#categoryList"><i class="ti-align-justify">
                                    </i> <?php echo display('manage_category') ?></a></li>
                            <li><a data-toggle="tab" href="#add_category"><i class="fa fa-plus"> </i>
                                    <?php echo display('add_category') ?></a></li>
                        </ul>

                        <div class="tab-content">

                            <div id="categoryList" class="tab-pane fade in active">
                                <div class="row" style="padding: 20px;">
                                    <div class="table-responsive">
                                        <table id="dataTableExample3"
                                            class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center"><?php echo display('category_id') ?></th>
                                                    <th class="text-center"><?php echo display('category_name') ?></th>
                                                    <th class="text-center"><?php echo display('action') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
if ($category_list) {
    ?>
                                                {category_list}
                                                <tr>
                                                    <td class="text-center">{category_id}</td>
                                                    <td class="text-center">{category_name}</td>
                                                    <td>
                                                        <center>
                                                            <?php echo form_open() ?>
                                                            <?php if ($this->permission1->method('add_category', 'update')->access()) {?>
                                                            <a href="<?php echo base_url() . 'Ccategory/category_update_form/{category_id}'; ?>"
                                                                class="btn btn-info btn-sm" data-toggle="tooltip"
                                                                data-placement="left"
                                                                title="<?php echo display('update') ?>"><i
                                                                    class="fa fa-pencil" aria-hidden="true"></i></a>
                                                            <?php }?>
                                                            <?php if ($this->permission1->method('add_category', 'delete')->access()) {?>
                                                            <a href="<?php echo base_url() . 'Ccategory/category_delete/{category_id}'; ?>"
                                                                class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Are You Sure To Want To Delete ?')"
                                                                data-toggle="tooltip" data-placement="right" title=""
                                                                data-original-title="<?php echo display('delete') ?> "><i
                                                                    class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                            <?php }?>
                                                            <?php echo form_close() ?>
                                                        </center>
                                                    </td>
                                                </tr>
                                                {/category_list}
                                                <?php
}
?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="add_category" class="tab-pane fade">
                                <div class="row" style="padding: 20px;">
                                    <?php echo form_open('Ccategory/insert_category', array('class' => 'form-vertical', 'id' => 'insert_category')) ?>

                                    <div class="form-group row">
                                        <label for="category_name"
                                            class="col-sm-3 col-form-label"><?php echo display('category_name') ?> <i
                                                class="text-danger">*</i></label>
                                        <div class="col-sm-6">
                                            <input class="form-control" name="category_name" id="category_name"
                                                type="text" placeholder="<?php echo display('category_name') ?>"
                                                required="">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="submit" id="add-category" class="btn btn-success btn-large"
                                                name="add-category" value="<?php echo display('save') ?>" />
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
    </section>
</div>
<!-- Add new customer end -->