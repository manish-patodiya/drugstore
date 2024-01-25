<!-- Manage Invoice Start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('wastage_return_list') ?></h1>
            <small><?php echo display('wastage_return_list') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('invoice') ?></a></li>
                <li class="active"><?php echo display('wastage_return_list') ?></li>
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

        <?php
if ($this->permission1->method('wastage_return_list', 'read')->access()) {?>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-7">
                                <?php echo form_open('Cretrun_m/datebwteen_wastage_return_list', array('class' => 'form-inline')) ?>
                                <?php
$today = date('Y-m-d');?>
                                <div class="form-group">
                                    <label class="" for="from_date"><?php echo display('start_date') ?></label>
                                    <input type="text" name="from_date" class="form-control datepicker" id="from_date"
                                        value="<?php echo $today ?>" placeholder="<?php echo display('start_date') ?>">
                                </div>

                                <div class="form-group">
                                    <label class="" for="to_date"><?php echo display('end_date') ?></label>
                                    <input type="text" name="to_date" class="form-control datepicker" id="to_date"
                                        placeholder="<?php echo display('end_date') ?>" value="<?php echo $today ?>">
                                </div>
                                <button type="submit" class="btn btn-success"><?php echo display('search') ?></button>
                                <?php echo form_close() ?>
                            </div>

                            <?php
if ($this->permission1->method('return', 'create')->access()) {?>
                            <div class="col-md-5 d-flex justify-content-right">
                                <div class="column">
                                    <?php
if ($this->permission1->method('return', 'create')->access()) {?>
                                    <a href="<?php echo base_url('Cretrun_m') ?>" class="btn btn-info m-b-5 m-r-2"><i
                                            class="ti-plus"> </i>
                                        <?php echo display('add_return') ?> </a>
                                    <?php }?>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
}
?>

        <?php
if ($this->permission1->method('wastage_return_list', 'read')->access() || $this->permission1->method('wastage_return_list', 'update')->access() || $this->permission1->method('wastage_return_list', 'delete')->access()) {?>
        <!-- Manage Invoice report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('return_list') ?></h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th><?php echo display('sl') ?></th>
                                        <th><?php echo display('purchase_id') ?></th>
                                        <th><?php echo display('manufacturer_name') ?></th>
                                        <th><?php echo display('date') ?></th>
                                        <th><?php echo display('payment_type') ?></th>
                                        <th><?php echo display('total_amount') ?></th>
                                        <?php
if ($this->permission1->method('wastage_return_list', 'update')->access() || $this->permission1->method('wastage_return_list', 'delete')->access()) {?>
                                        <th><?php echo display('action') ?></th>
                                        <?php }?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
if ($return_list) {
    ?>
                                    {return_list}
                                    <tr>
                                        <td>{sl}</td>

                                        <?php
if ($this->permission1->method('manufacturer_return_list', 'read')->access()) {?>
                                        <td><a
                                                href="<?php echo base_url() . 'Cretrun_m/manufacturer_inserted_data/{return_id}'; ?>">{purchase_id}</a>
                                        </td>
                                        <?php
} else {
        ?>
                                        <td>{purchase_id}</td>
                                        <?php
}
    ?>

                                        <td>
                                            {manufacturer_name}
                                        </td>

                                        <td>{final_date}</td>
                                        <td>Cash Payment</td>

                                        <td style="text-align: right;">
                                            <?php echo (($position == 0) ? "$currency {net_total_amount}" : "{net_total_amount} $currency") ?>
                                        </td>
                                        <?php
if ($this->permission1->method('wastage_return_list', 'update')->access() || $this->permission1->method('wastage_return_list', 'delete')->access()) {?>
                                        <!-- Manage Invoice report -->
                                        <td>
                                            <center>

                                                <?php
if ($this->permission1->method('wastage_return_list', 'read')->access()) {?>
                                                <a href="<?php echo base_url() . 'Cretrun_m/manufacturer_inserted_data/{return_id}'; ?>"
                                                    class="btn btn-success btn-sm" data-toggle="tooltip"
                                                    data-placement="left" title="<?php echo 'View' ?>"><i
                                                        class="fa fa-eye" aria-hidden="true"></i></a>
                                                <?php }?>

                                                <?php
if ($this->permission1->method('wastage_return_list', 'delete')->access()) {?>
                                                <a href="<?php echo base_url() . 'Cretrun_m/delete_retutn_purchase/{return_id}'; ?>"
                                                    class="btn btn-danger btn-sm" data-toggle="tooltip"
                                                    data-placement="left" title="<?php echo display('invoice') ?>"><i
                                                        class="fa fa-trash" aria-hidden="true"></i></a>
                                                <?php }?>

                                            </center>
                                        </td>
                                        <?php }?>
                                    </tr>
                                    {/return_list}
                                    <?php
}
    ?>
                                </tbody>
                            </table>
                            <div class="text-right"><?php echo $links ?></div>
                        </div>
                    </div>
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
<!-- Manage Invoice End -->