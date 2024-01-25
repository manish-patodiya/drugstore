<!-- Manage service Start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('service') ?></h1>
            <small><?php echo display('manage_service_invoice') ?></small>
            <ol class="breadcrumb">
                <li><a href=""><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('service') ?></a></li>
                <li class="active"><?php echo display('manage_service_invoice') ?></li>
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


        <!-- Manage service -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">

                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center"><?php echo display('sl') ?></th>
                                        <th class="text-center"><?php echo 'Patient Name' ?></th>
                                        <th class="text-center"><?php echo display('date') ?></th>
                                        <th class="text-center"><?php echo display('description') ?></th>
                                        <th class="text-center"><?php echo display('action') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
if ($service) {
    $sl = 1;
    foreach ($service as $services) {

        ?>

                                    <tr>
                                        <td class="text-center"><?php echo $sl; ?></td>
                                        <td class="text-center"><?php echo $services['customer_name']; ?></td>
                                        <td class="text-center"><?php echo $services['date']; ?></td>
                                        <td class="text-center"><?php echo $services['details']; ?></td>

                                        <td>
                                            <center>
                                                <?php echo form_open() ?>
                                                <?php if ($this->permission1->method('manage_service', 'update')->access()) {?>
                                                <a href="<?php echo base_url() . 'Cservice/service_invoice_update_form/' . $services['voucher_no']; ?>"
                                                    class="btn btn-info btn-sm" data-toggle="tooltip"
                                                    data-placement="left" title="<?php echo display('update') ?>"><i
                                                        class="fa fa-pencil" aria-hidden="true"></i></a>
                                                <?php }?>
                                                <?php if ($this->permission1->method('manage_service', 'delete')->access()) {?>
                                                <a href="<?php echo base_url() . 'Cservice/service_invoic_delete/' . $services['voucher_no']; ?>"
                                                    class="btn btn-danger btn-sm"
                                                    name="<?php echo $services['voucher_no']; ?>"
                                                    onclick="return confirm('<?php echo display('are_you_sure') ?>')"
                                                    data-original-title="<?php echo display('delete') ?> "><i
                                                        class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                <?php }?>
                                                <a href="<?php echo base_url() . 'Cservice/service_invoice_data/' . $services['voucher_no']; ?>"
                                                    class="btn btn-success btn-sm"
                                                    name="<?php echo $services['voucher_no']; ?>"
                                                    data-original-title="<?php echo display('details') ?> "><i
                                                        class="fa fa-eye" aria-hidden="true"></i></a>
                                                <?php echo form_close() ?>
                                            </center>
                                        </td>
                                    </tr>

                                    <?php $sl++;}
}
?>
                                </tbody>
                            </table>
                            <?php echo $links ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
<!-- Manage service End -->