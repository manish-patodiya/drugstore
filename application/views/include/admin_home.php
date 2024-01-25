<style>
.content {
    padding: 0 30px 10px
}

.content-header {
    margin-bottom: 20px
}

hr {
    margin-top: 0 !important;
}
</style>
<!-- Admin Home Start -->
<div class="content-wrapper">
    <!-- Content Header(Page header)-->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('dashboard') ?></h1>
            <small><?php echo display('home') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li class="active"><?php echo display('dashboard') ?></li>
            </ol>
        </div>
    </section>
    <!-- Main content -->
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
        <!-- First Counter -->
        <div class="row">

            <?php
if ($this->permission1->method('manage_customer', 'read')->access()) {?>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-2">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="statistic-box">
                            <a href="<?php echo base_url('Ccustomer/manage_customer') ?>" style="color:#000">
                                <h2><span class="count-number"><?php echo $total_customer ?></span> <span
                                        class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i></span>
                                </h2>

                                <div class="small"><?php echo "Total Patient" ?></div>
                                <div class="sparkline3 text-center"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>

            <?php
if ($this->permission1->method('manage_manufacturer', 'read')->access()) {?>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-2">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="statistic-box">
                            <a href="<?php echo base_url('Cmanufacturer/manage_manufacturer') ?>" style="color:#000">
                                <h2><span class="count-number"><?php echo $total_manufacturers ?></span> <span
                                        class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i> </span>
                                </h2>

                                <div class="small"><?php echo display('total_manufacturer') ?></div>
                                <div class="sparkline2 text-center"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php }

if ($this->permission1->method('manage_medicine', 'read')->access()) {?>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-2">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="statistic-box">
                            <a href="<?php echo base_url('Cproduct/manage_product') ?>" style="color:#000">
                                <h2><span class="count-number"><?php echo $total_product ?></span> <span
                                        class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i></span>
                                </h2>

                                <div class="small"><?php echo display('total_product') ?></div>
                                <div class="sparkline4 text-center"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php }

if ($this->permission1->method('manage_medicine', 'read')->access()) {?>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-2">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="statistic-box">
                            <a href="<?php echo base_url('Creport/out_of_stock') ?>" style="color:#000">
                                <h2><span class="count-number"><?php echo $stockout; ?></span><span class="slight"> <i
                                            class="fa fa-play fa-rotate-270 text-warning"> </i> </span></h2>

                                <div class="small"><?php echo display('out_of_stock') ?></div>
                                <div class="sparkline2 text-center"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php }

if ($this->permission1->method('manage_medicine', 'read')->access()) {?>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-2">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="statistic-box">
                            <a href="<?php echo base_url('Creport/out_of_date') ?>" style="color:#000">
                                <h2><span class="count-number"><?php echo $expired ?></span><span class="slight"> <i
                                            class="fa fa-play fa-rotate-270 text-warning"> </i> </span></h2>

                                <div class="small"><?php echo display('expired') ?></div>
                                <div class="sparkline3 text-center"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php }

if ($this->permission1->method('manage_invoice', 'read')->access()) {?>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-2">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="statistic-box">
                            <a href="<?php echo base_url('Cinvoice/manage_invoice') ?>" style="color:#000">
                                <h2><span class="count-number"><?php echo $total_sales ?></span><span class="slight"> <i
                                            class="fa fa-play fa-rotate-270 text-warning"> </i> </span></h2>

                                <div class="small"><?php echo display('total_invoice') ?></div>
                                <div class="sparkline4 text-center"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
        <hr>
        <!-- Second Counter -->

        <div class="row">
            <div class="col-md-12 row">
                <?php if ($this->permission1->method('pos_invoice', 'create')->access()) {?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="panel panel-bd">
                        <div class="panel-body">
                            <div class="statistic-box d-flex">
                                <h2><span class="slight">
                                        <img src="<?php echo base_url('my-assets/image/pos_invoice.png'); ?>"
                                            height="40" width="40">
                                    </span></h2>
                                <div class="small d-flex align-items-center m-0 col-md-8" style="font-size: 17px;"><a
                                        href="<?php echo base_url('Cinvoice/pos_invoice') ?>"><?php echo display('create_pos_invoice') ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>

                <?php if ($this->permission1->method('new_invoice', 'create')->access()) {?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="panel panel-bd">
                        <div class="panel-body">
                            <div class="statistic-box d-flex">
                                <h2><span class="slight"><img
                                            src="<?php echo base_url('my-assets/image/invoice.png'); ?>" height="40"
                                            width="40"> </span></h2>
                                <div class="small d-flex align-items-center m-0 col-md-8" style="font-size: 17px;"><a
                                        href="<?php echo base_url('Cinvoice') ?>"><?php echo display('create_new_invoice') ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>

                <?php if ($this->permission1->method('add_medicine', 'create')->access()) {?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="panel panel-bd">
                        <div class="panel-body">
                            <div class="statistic-box d-flex">
                                <h2><span class="slight"><img
                                            src="<?php echo base_url('my-assets/image/product.png'); ?>" height="40"
                                            width="40"> </span></h2>
                                <div class="small d-flex align-items-center m-0 col-md-8" style="font-size: 17px;"><a
                                        href="<?php echo base_url('Cproduct') ?>"><?php echo display('add_product') ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>

                <?php if ($this->permission1->method('add_customer', 'create')->access()) {?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="panel panel-bd">
                        <div class="panel-body">
                            <div class="statistic-box d-flex">
                                <h2><span class="slight"><img
                                            src="<?php echo base_url('my-assets/image/customer.png'); ?>" height="40"
                                            width="40"> </span></h2>
                                <div class="small d-flex align-items-center m-0 col-md-8" style="font-size: 17px;"><a
                                        href="<?php echo base_url('Ccustomer') ?>"><?php echo "Add Patient"; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
                <?php
if ($this->permission1->method('sales_report', 'read')->access()) {?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="panel panel-bd">
                        <div class="panel-body">
                            <div class="statistic-box d-flex">
                                <h2><span class="slight"><img src="<?php echo base_url('my-assets/image/sale.png'); ?>"
                                            height="40">
                                    </span>
                                </h2>
                                <div class="small d-flex align-items-center m-0 col-md-8" style="font-size: 17px;"><a
                                        href="<?php echo base_url('Admin_dashboard/todays_sales_report') ?>"><?php echo display('sales_report') ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>

                <?php if ($this->permission1->method('purchase_report', 'read')->access()) {?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="panel panel-bd">
                        <div class="panel-body">
                            <div class="statistic-box d-flex">
                                <h2><span class="slight"><img
                                            src="<?php echo base_url('my-assets/image/purchase.png'); ?>" height="40">
                                    </span></h2>
                                <div class="small d-flex align-items-center m-0 col-md-8" style="font-size: 17px;"><a
                                        href="<?php echo base_url('Admin_dashboard/todays_purchase_report') ?>"><?php echo display('purchase_report') ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>

                <?php if ($this->permission1->method('stock_report', 'read')->access()) {?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="panel panel-bd">
                        <div class="panel-body">
                            <div class="statistic-box d-flex">
                                <h2>
                                    <span class="slight">
                                        <img src="<?php echo base_url('my-assets/image/stock.png'); ?>" height="40">
                                    </span>
                                </h2>
                                <div class="small d-flex align-items-center m-0 col-md-8" style="font-size: 17px;">
                                    <a href="<?php echo base_url('Creport') ?>">
                                        <?php echo display('stock_report') ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>

                <?php if ($this->permission1->method('todays_report', 'read')->access()) {?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="panel panel-bd">
                        <div class="panel-body">
                            <div class="statistic-box d-flex">
                                <h2>
                                    <span class="slight">
                                        <img src="<?php echo base_url('my-assets/image/account.png'); ?>" height="40">
                                    </span>
                                </h2>
                                <div class="small d-flex align-items-center m-0 col-md-8" style="font-size: 17px;">
                                    <a href="<?php echo base_url('Admin_dashboard/all_report') ?>">
                                        <?php echo display('todays_report') ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>

        <hr>
        <div class="row">
            <!-- This month progress -->
            <?php if ($this->permission1->method('monthly_progress_report', 'read')->access()) {?>
            <div class="col-sm-12 col-md-8">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4> <?php echo display('monthly_progress_report') ?></h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <canvas id="lineChart" height="142"></canvas>
                    </div>
                </div>
            </div>
            <?php }?>
            <!-- Total Report -->
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                <?php if ($this->permission1->method('todays_report', 'read')->access()) {?>
                <div class="panel panel-bd lobidisable">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('todays_report') ?></h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="message_inner">
                            <div class="message_widgets">
                                <table class="table table-bordered table-striped table-hover">
                                    <tr>
                                        <th><?php echo display('todays_report') ?></th>
                                        <th><?php echo display('amount') ?></th>
                                    </tr>
                                    <tr>
                                        <th><?php echo display('total_sales') ?></th>
                                        <td><?php echo (($position == 0) ? "$currency $sales_amount" : "$sales_amount $currency") ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><?php echo display('total_purchase') ?></th>
                                        <td><?php echo (($position == 0) ? "$currency $purchase_amount" : "$purchase_amount $currency") ?>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>

    </section> <!-- /.content -->

    <?php
if ($this->permission1->method('manage_medicine', 'update')->access()) {
    ?>
    <div id="stockmodal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="background-color: #000000;color: #e4e5e7;">
                <div class="modal-header" style="background-color: #000000;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><?php echo display('out_of_stock_and_date_expired_medicine') ?></h4>
                </div>
                <div class="modal-body">
                    <?php
$date = date('Y-m-d');
    $this->db->select("b.*,b.expeire_date as expdate,a.product_name,a.strength,((select ifnull(sum(quantity),0) from product_purchase_details where product_id= `a`.`product_id`)-(select ifnull(sum(quantity),0) from invoice_details where product_id= `a`.`product_id`)) as 'stock'");
    $this->db->from('product_information a');
    $this->db->join('product_purchase_details b', 'b.product_id=a.product_id', 'left');
    $this->db->where('b.expeire_date <=', $date);
    $this->db->having('stock > 0');
    $this->db->group_by('b.batch_id');
    $this->db->group_by('a.product_id');
    $this->db->limit(20);
    $query = $this->db->get()->result_array();
    if ($query) {
        ?>
                    <table id="" class="table table-bordered">
                        <caption>
                            <h4>
                                <center style="color:red">Date Expired Medicine</center>
                            </h4>
                        </caption>
                        <thead>
                            <tr>
                                <th class="text-center"><?php echo display('product_name') ?></th>
                                <th class="text-center"><?php echo display('batch_id') ?></th>
                                <th class="text-center"><?php echo display('expeire_date') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
foreach ($query as $out) {
            ?>
                            <tr>
                                <td class="text-center">
                                    <a
                                        href="<?php echo base_url() . 'Cproduct/product_details/' . $out['product_id']; ?>">
                                        <?php echo $out['product_name'] ?>
                                    </a>
                                </td>
                                <td class="text-center"> <?php echo $out['batch_id'] ?> </td>
                                <td class="text-center">
                                    <?php echo formatDate($out['expdate']) ?>
                                    <input type="hidden" id="expdate" value="<?php echo $out['expdate'] ?>">
                                </td>
                            </tr>
                            <?php
}
        ?>
                        </tbody>
                    </table>
                    <?php
}
    $this->db->select("a.stock,c.manufacturer_name,b.product_name,b.generic_name,b.strength,b.product_model,b.unit")
        ->from('stock_management a')
        ->join('product_information b', 'a.product_id=b.product_id')
        ->join('manufacturer_information c', 'c.manufacturer_id=b.manufacturer_id', 'left')
        ->order_by('b.product_name', 'asc')
        ->limit(20);

    $out_of_stock = $this->db->get()->result_array();

    // $this->db->select("a.*,b.manufacturer_name,a.product_name,a.generic_name,a.strength,((select ifnull(sum(quantity),0) from product_purchase_details where product_id= `a`.`product_id`)-(select ifnull(sum(quantity),0) from invoice_details where product_id= `a`.`product_id`)) as 'stock'");
    // $this->db->from('product_information a');
    // $this->db->join('manufacturer_information b', 'b.manufacturer_id=a.manufacturer_id', 'left');
    // $this->db->having('stock < 10');
    // $this->db->group_by('a.product_id');
    // $this->db->order_by('a.product_name', 'asc');
    // $this->db->limit(20);
    // $out_of_stock = $this->db->get()->result_array();

    if ($out_of_stock) {
        ?>
                    <table id="" class="table table-bordered">
                        <caption>
                            <h4>
                                <center style="color:red">Out of Stock Medicine</center>
                            </h4>
                        </caption>
                        <thead>
                            <tr>
                                <th class="text-center"><?php echo display('product_name') ?></th>
                                <th class="text-center"><?php echo display('product_type') ?></th>
                                <th class="text-center"><?php echo display('unit') ?></th>
                                <th class="text-center"><?php echo display('stock') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$spcount = 0;
        $count = 0;
        foreach ($out_of_stock as $stockout) {
            $count += $spcount;?>
                            <tr>
                                <td class="text-center">
                                    <a href="<?php echo base_url() . 'Cproduct/product_details/{product_id}'; ?>">
                                        <?php echo $stockout['product_name'] ?>
                                    </a>
                                    <input type="hidden" id="stockqty" class="stockqtymdl"
                                        value="<?php echo $stockout['stock'] ?>">
                                </td>
                                <td class="text-center"><?php echo $stockout['product_model'] ?> </td>
                                <td class="text-center"><?php echo $stockout['unit'] ?></td>
                                <td class="text-center"><span style="color:red"><?php echo $stockout['stock'] ?></span>
                                </td>
                            </tr>
                            <?php $spcount++;
        }
        ?>
                            <input type="hidden" value="<?=$count;?>" id="stpcount">
                        </tbody>
                    </table>
                    <?php }

    $cdate = date('Y-m-d');
    $date = date('Y-m-d', strtotime(MEDICINE_EXPIRING_ALERT_TIME));
    $this->db->select("b.*,b.expeire_date as expdate,a.product_name,a.strength,((select ifnull(sum(quantity),0) from product_purchase_details where product_id= `a`.`product_id`)-(select ifnull(sum(quantity),0) from invoice_details where product_id= `a`.`product_id`)) as 'stock'");
    $this->db->from('product_information a');
    $this->db->join('product_purchase_details b', 'b.product_id=a.product_id', 'left');
    $this->db->where('b.expeire_date >', $cdate);
    $this->db->where('b.expeire_date <=', $date);
    $this->db->having('stock > 0');
    $this->db->group_by('b.batch_id');
    $this->db->group_by('a.product_id');
    $this->db->limit(20);
    $query = $this->db->get()->result_array();

    if ($query) {
        ?>
                    <table id="" class="table table-bordered">
                        <caption>
                            <h4>
                                <center style="color:orange">Expiring Soon</center>
                            </h4>
                        </caption>
                        <thead>
                            <tr>
                                <th class="text-center"><?php echo display('product_name') ?></th>
                                <th class="text-center"><?php echo display('batch_id') ?></th>
                                <th class="text-center"><?php echo display('expeire_date') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($query as $out) {?>
                            <tr>
                                <td class="text-center">
                                    <a
                                        href="<?php echo base_url() . 'Cproduct/product_details/' . $out['product_id']; ?>">
                                        <?php echo $out['product_name'] ?>
                                    </a>
                                </td>
                                <td class="text-center"> <?php echo $out['batch_id'] ?> </td>
                                <td class="text-center">
                                    <?php echo formatDate($out['expdate']) ?>
                                    <input type="hidden" id="expdate" value="<?php echo $out['expdate'] ?>">
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                    <?php }?>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="is_modal_shown" id="is_modal_shown"
                        value="<?php echo $this->session->userdata('is_modal_shown'); ?>">
                    <button type="button" class="btn btn-default" data-dismiss="modal"
                        style="background-color:green;color:white"><?php echo display('close') ?></button>
                </div>
            </div>
        </div>
    </div>

    <?php }?>

</div> <!-- /.content-wrapper -->
<!-- Admin Home end -->

<!-- ChartJs JavaScript -->
<script src="<?php echo base_url() ?>assets/plugins/chartJs/Chart.min.js" type="text/javascript"></script>

<script type="text/javascript">
//line chart
var ctx = document.getElementById("lineChart");
if (ctx) {
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September",
                "October", "November", "December"
            ],
            datasets: [{
                    label: "Sales",
                    borderColor: "#2C3136",
                    borderWidth: "1",
                    backgroundColor: "rgba(0,0,0,.07)",
                    pointHighlightStroke: "rgba(26,179,148,1)",
                    data: [<?php foreach ($inv_jan as $value) {echo $value['invoice_id'];}?>,
                        <?php foreach ($inv_feb as $value) {echo $value['invoice_id'];}?>,
                        <?php foreach ($inv_mar as $value) {echo $value['invoice_id'];}?>,
                        <?php foreach ($inv_apr as $value) {echo $value['invoice_id'];}?>,
                        <?php foreach ($inv_may as $value) {echo $value['invoice_id'];}?>,
                        <?php foreach ($inv_jun as $value) {echo $value['invoice_id'];}?>,
                        <?php foreach ($inv_jul as $value) {echo $value['invoice_id'];}?>,
                        <?php foreach ($inv_aug as $value) {echo $value['invoice_id'];}?>,
                        <?php foreach ($inv_sep as $value) {echo $value['invoice_id'];}?>,
                        <?php foreach ($inv_oct as $value) {echo $value['invoice_id'];}?>,
                        <?php foreach ($inv_nov as $value) {echo $value['invoice_id'];}?>,
                        <?php foreach ($inv_dec as $value) {echo $value['invoice_id'];}?>
                    ]
                },
                {
                    label: "Purchase",
                    borderColor: "#73BC4D",
                    borderWidth: "1",
                    backgroundColor: "#73BC4D",
                    pointHighlightStroke: "rgba(26,179,148,1)",
                    data: [<?php foreach ($pur_jan as $value) {echo $value['purchase_id'];}?>,
                        <?php foreach ($pur_feb as $value) {echo $value['purchase_id'];}?>,
                        <?php foreach ($pur_mar as $value) {echo $value['purchase_id'];}?>,
                        <?php foreach ($pur_apr as $value) {echo $value['purchase_id'];}?>,
                        <?php foreach ($pur_may as $value) {echo $value['purchase_id'];}?>,
                        <?php foreach ($pur_jun as $value) {echo $value['purchase_id'];}?>,
                        <?php foreach ($pur_jul as $value) {echo $value['purchase_id'];}?>,
                        <?php foreach ($pur_aug as $value) {echo $value['purchase_id'];}?>,
                        <?php foreach ($pur_sep as $value) {echo $value['purchase_id'];}?>,
                        <?php foreach ($pur_oct as $value) {echo $value['purchase_id'];}?>,
                        <?php foreach ($pur_nov as $value) {echo $value['purchase_id'];}?>,
                        <?php foreach ($pur_dec as $value) {echo $value['purchase_id'];}?>
                    ]
                }
            ]
        },
        options: {
            responsive: true,
            tooltips: {
                mode: 'index',
                intersect: false
            },
            hover: {
                mode: 'nearest',
                intersect: true
            }

        }
    });
}
var dismodl = $('#is_modal_shown').val();
var stockqt = $('#stpcount').val();
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1; //January is 0!
var yyyy = today.getFullYear();

if (dd < 10) {
    dd = '0' + dd
}

if (mm < 10) {
    mm = '0' + mm
}

today = yyyy + '-' + mm + '-' + dd;

var expdate = $('#expdate').val();
var is_modal_shown = 1;
if (dismodl == '' && stockqt > 0 || dismodl == '' && new Date(expdate) < new Date(today)) {
    $(window).load(function() {
        $('#stockmodal').modal('show');
    });
    $.ajax({
        type: "POST",
        url: '<?php echo base_url('User/modaldisplay') ?>',
        data: {
            is_modal_shown: is_modal_shown
        },
        cache: false,
        success: function(data) {}
    });
}
$('#btn1').click(function() {
    // reset modal if it isn't visible
    if (!($('.modal.in').length)) {
        $('.modal-dialog').css({
            top: 0,
            left: 0
        });
    }
    $('#myModal').modal({
        backdrop: false,
        show: true
    });

    $('.modal-dialog').draggable({
        handle: ".modal-header"
    });
});
</script>