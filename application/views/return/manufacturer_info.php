<!-- Manage Purchase Start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('return_manufacturers') ?></h1>
            <small><?php echo display('manage_your_purchase') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('purchase') ?></a></li>
                <li class="active"><?php echo display('return_manufacturers') ?></li>
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
        <div class="row">
            <div class="col-sm-8">
                <div class="panel panel-default">
                    <div class="panel-body">

                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-body">



                    </div>
                </div>
            </div>
        </div>


        <?php
if ($this->permission1->method('return', 'create')->access()) {
    ?>
        <!-- Manage Purchase report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('return_manufacturers') ?></h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th><?php echo display('sl') ?></th>
                                        <th><?php echo display('invoice_no') ?></th>
                                        <th><?php echo display('purchase_id') ?></th>
                                        <th><?php echo display('manufacturer_name') ?></th>
                                        <th><?php echo display('purchase_date') ?></th>
                                        <th><?php echo display('total_ammount') ?></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
if ($purchases_list) {
        ?>
                                    {purchases_list}
                                    <tr>
                                        <td>{sl}</td>
                                        <td>{chalan_no}</td>
                                        <?php
if ($this->permission1->method('manufacturer_return_list', 'read')->access()) {
            ?>
                                        <td><a
                                                href="<?php echo base_url() . 'Cretrun_m/manufacturer_return_form/{purchase_id}'; ?>">{purchase_id}</a>
                                        </td>
                                        <?php
} else {?>
                                        <td>{purchase_id}</td>
                                        <?php }?>

                                        <td>{manufacturer_name}</td>
                                        <td>{final_date}</td>
                                        <td style="text-align: right;">
                                            <?php echo (($position == 0) ? "$currency {grand_total_amount}" : "{grand_total_amount} $currency") ?>
                                        </td>

                                    </tr>
                                    {/purchases_list}
                                    <?php
}
    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-right"><?php echo $links ?></div>
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

<!-- Manage Purchase End -->