<link href="<?php echo base_url() ?>assets/css/select2.min.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url() ?>my-assets/js/admin_js/json/doctor.js.php"></script>
<!-- Stock report start -->
<script type="text/javascript">
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    document.body.style.marginTop = "0px";
    window.print();
    document.body.innerHTML = originalContents;
}
</script>


<!-- Profit Report Start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo 'Doctor Wise Report' ?></h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('report') ?></a></li>
                <li class="active"><?php echo 'Doctor Wise Report' ?></li>
            </ol>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                    <a href="<?php echo base_url('Admin_dashboard/all_report') ?>" class="btn btn-info m-b-5 m-r-2"><i
                            class="ti-align-justify"> </i> <?php echo display('todays_report') ?> </a>

                    <a href="<?php echo base_url('Admin_dashboard/todays_purchase_report') ?>"
                        class="btn btn-success m-b-5 m-r-2"><i class="ti-align-justify"> </i>
                        <?php echo display('purchase_report') ?> </a>


                    <a href="<?php echo base_url('Admin_dashboard/todays_sales_report') ?>"
                        class="btn btn-warning m-b-5 m-r-2"><i class="ti-align-justify"> </i>
                        <?php echo display('sales_report') ?> </a>
                </div>
            </div>
        </div>

        <!-- Profit report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <?php echo form_open('Admin_dashboard/profit_doctorwise', array('class' => 'form-inline', 'method' => 'post')) ?>
                        <?php date_default_timezone_set("Asia/Dhaka");
$today = date('Y-m-d');?>
                        <div class="form-group row col-sm-4">
                            <label for="" class="col-sm-5 col-form-label"><?php echo 'Doctor Name' ?> <i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select name="doc_id" class="form-control" required>
                                    <option value="">Select a Doctor</option>
                                    <?php foreach ($doctors_list as $key => $value) {?>
                                    <option value="<?php echo $value->id ?>"
                                        <?=$doctor_info[0]['id'] == $value->id ? 'selected' : false?>>
                                        <?php echo $value->doctor_name ?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="from_date"><?php echo display('start_date') ?>:</label>
                            <input type="text" name="from_date" class="form-control datepicker" id="from_date"
                                placeholder="<?php echo display('start_date') ?>" value="<?php echo $today ?>">
                        </div>

                        <div class="form-group">
                            <label for="to_date"><?php echo display('end_date') ?>:</label>
                            <input type="text" name="to_date" class="form-control datepicker" id="to_date"
                                placeholder="<?php echo display('end_date') ?>" value="<?php echo $today ?>">
                        </div>

                        <button type="submit" class="btn btn-success"><?php echo display('view_report') ?></button>

                        <?php echo form_close() ?>


                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo 'Doctor Wise Report' ?></h4>
                        </div>
                    </div>

                    <div class="panel-body" id="profit_div" style="margin-left:2px;">
                        <!-- <span class="text-left"><img src="<?php echo $logo; ?>" class=""></span> -->

                        <span class="text-center">
                            {doctor_info}
                            <h3><?php echo display('report_for') ?> {doctor_name} </h3>
                            {/doctor_info}
                            <h4>From {from} To {to}</h4>
                        </span>

                        <div>
                            <table class="table table-striped table-hover" id='medicine-list'>
                                <thead>
                                    <tr>
                                        <th class="">Medicine Name</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-right">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {product_info}
                                    <tr>
                                        <td class="">{product_name}</td>
                                        <td class="text-center">{total_qty}</td>
                                        <td class="text-right">{total_price}</td>
                                    </tr>
                                    {/product_info}
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="total_sale"><?php echo display('total_sale'); ?></th>
                                        <th class="text-center">{total_qty}</th>
                                        <th class="text-right">
                                            <?="$currency {total_sale}";?>
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>
                            <h4> <?php echo display('print_date') ?>: <?php echo date("d/m/Y h:i:s"); ?> </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Profit Report End -->

<script type="text/javascript">
$(document).ready(function() {
    var mydatatable = $('#medicine-list').DataTable({
        responsive: true,
        "aaSorting": [
            [0, "asc"]
        ],
        "columnDefs": [{
            "bSortable": false,
            "aTargets": [1, 2]
        }, ],
        'iDisplayLength': <?=count($product_info)?>,
        "lengthChange": false,
        dom: "'<'col-sm-4'l><'col-sm-4 text-center'><'col-sm-4'>Bfrtip",
        buttons: [{
            extend: "copy",
            exportOptions: {
                columns: [0, 1, 2] //Your Colume value those you want
            },
            className: "btn-sm prints btn-success"
        }, {
            extend: "csv",
            title: "<?=$doctor_info[0]['doctor_name']?>",
            exportOptions: {
                columns: [0, 1, 2] //Your Colume value those you want print
            },
            className: "btn-sm prints btn-success"
        }, {
            extend: "excel",
            exportOptions: {
                columns: [0, 1, 2] //Your Colume value those you want print
            },
            title: "<?=$doctor_info[0]['doctor_name']?>",
            className: "btn-sm prints btn-success"
        }, {
            extend: "pdf",
            exportOptions: {
                columns: [0, 1, 2] //Your Colume value those you want print
            },
            title: "<?=$doctor_info[0]['doctor_name']?>",
            className: "btn-sm prints btn-success"
        }, {
            extend: "print",
            exportOptions: {
                columns: [0, 1, 2] //Your Colume value those you want print
            },
            title: "<?=$doctor_info[0]['doctor_name']?>",
            className: "btn-sm prints btn-success"
        }],
    });
});
</script>