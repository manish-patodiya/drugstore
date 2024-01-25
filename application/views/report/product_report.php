<style>
.d-none {
    display: none !important;
}
</style>
<!-- Stock report start -->
<script type="text/javascript">
function printDiv(divName) {
    var header = document.getElementById("print-header").innerHTML
    var printContents = document.getElementById(divName).innerHTML;
    printContents = header + printContents;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    document.body.style.marginTop = "0px";
    window.print();
    document.body.innerHTML = originalContents;
}
</script>

<!-- Product Report Start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('sales_report_product_wise') ?></h1>
            <small><?php echo display('sales_report_product_wise') ?></small>
            <ol class="breadcrumb">
                <li><a href="index.html"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('report') ?></a></li>
                <li class="active"><?php echo display('sales_report_product_wise') ?></li>
            </ol>
        </div>
    </section>

    <section class="content">
        <div class="row p-r-15 m-y-10">
            <div class="col-sm-12 d-flex justify-content-right">
                <div class="column">

                    <?php
if ($this->permission1->method('todays_report', 'read')->access()) {?>
                    <a href="<?php echo base_url('Admin_dashboard/all_report') ?>" class="btn btn-info m-b-5 m-r-2"><i
                            class="ti-align-justify"> </i> <?php echo display('todays_report') ?> </a>
                    <?php }?>

                    <?php
if ($this->permission1->method('sales_report', 'read')->access()) {?>
                    <a href="<?php echo base_url('Admin_dashboard/todays_purchase_report') ?>"
                        class="btn btn-success m-b-5 m-r-2"><i class="ti-align-justify"> </i>
                        <?php echo display('purchase_report') ?> </a>
                    <?php }?>


                </div>
            </div>
        </div>

        <?php
if ($this->permission1->method('sales_report_medicine_wise', 'read')->access()) {?>
        <!-- Product report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <?php date_default_timezone_set("Asia/Dhaka");
    $today = date('Y-m-d');?>
                        <div class='d-flex'>
                            <div class="col-md-4 d-flex align-items-center">
                                <label class="col-md-5" for="from_date"><?php echo display('start_date') ?></label>
                                <input type="text" name="from_date" class="form-control datepicker" id="from_date"
                                    placeholder="<?php echo display('start_date') ?>" value="<?php echo $start; ?>">
                            </div>

                            <div class="col-md-4 d-flex align-items-center">
                                <label class="col-md-5" for="to_date"><?php echo display('end_date') ?></label>
                                <input type="text" name="to_date" class="form-control datepicker" id="to_date"
                                    placeholder="<?php echo display('end_date') ?>" value="<?php echo $end; ?>">
                            </div>

                            <button class="btn btn-success" id='btn-filter'><?php echo display('search') ?></button>
                            <!-- <a class="btn btn-warning" href="#"
                            onclick="printDiv('purchase_div')"><?php echo display('print') ?></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('sales_report_product_wise') ?></h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="d-none" id="print-header">
                            {company_info}
                            <h3> {company_name} </h3>
                            <h4>{address} </h4>
                            {/company_info}
                            <h4> <?php echo display('print_date') ?>: <?php echo $start; ?> To <?php echo $end; ?>
                            </h4>
                        </div>
                        <div id="purchase_div" style="margin-left:2px;">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover" width="100%"
                                    id='tbl-product-report'>
                                    <thead>
                                        <tr>
                                            <th><?php echo display('sales_date') ?></th>
                                            <th><?php echo display('product_name') ?></th>
                                            <th><?php echo display('product_model') ?></th>
                                            <th><?php echo 'Patient Name' ?></th>
                                            <th><?php echo display('rate') ?></th>
                                            <th><?php echo display('total_ammount') ?></th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                    <tfoot>
                                        <th colspan="5" style="text-align:right">Total:</th>
                                        <th></th>
                                    </tfoot>
                                </table>
                            </div>
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
<!-- Product Report End -->

<script type="text/javascript">
$(document).ready(function() {
    var mydatatable = $('#tbl-product-report').DataTable({
        responsive: true,
        searching: false,
        "aaSorting": [
            [0, "desc"]
        ],
        "columnDefs": [{
            "bSortable": false,
            "aTargets": [0, 1, 2, 3, 4, 5]
        }],
        'iDisplayLength': 10,
        'processing': true,
        'serverSide': true,
        'lengthMenu': [
            [10, 25, 50, 100, 250, 500],
            [10, 25, 50, 100, 250, 500]
        ],

        dom: "'<'col-sm-4'l><'col-sm-4 text-center'><'col-sm-4'>Bfrtip",
        buttons: [{
            extend: "copy",
            exportOptions: {
                columns: [0, 1, 2, 3, 4] //Your Colume value those you want
            },
            className: "btn-sm prints btn-success"
        }, {
            extend: "csv",
            title: "Medicine List",
            exportOptions: {
                columns: [0, 1, 2, 3, 4] //Your Colume value those you want print
            },
            className: "btn-sm prints btn-success"
        }, {
            extend: "excel",
            exportOptions: {
                columns: [0, 1, 2, 3, 4] //Your Colume value those you want print
            },
            title: "Medicine List",
            className: "btn-sm prints btn-success"
        }, {
            extend: "pdf",
            exportOptions: {
                columns: [0, 1, 2, 3, 4] //Your Colume value those you want print
            },
            title: "Medicine List",
            className: "btn-sm prints btn-success"
        }, {
            extend: "print",
            exportOptions: {
                columns: [0, 1, 2, 3, 4] //Your Colume value those you want print
            },
            title: "Medicine List",
            className: "btn-sm prints btn-success"
        }],


        'serverMethod': 'post',
        'ajax': {
            'url': '<?=base_url()?>Creport/get_medicinewise_sales_report',
            "data": function(data) {
                data.fromdate = $('#from_date').val();
                data.todate = $('#to_date').val();
            }
        },

        'columns': [{
                data: 'date'
            },
            {
                data: 'product_name'
            },
            {
                data: 'product_model'
            },
            {
                data: 'customer_name'
            },
            {
                data: 'rate'
            },
            {
                data: 'total_price',
                class: "total_price"
            },
        ],

        "footerCallback": function(row, data, start, end, display) {
            var api = this.api();
            api.columns('.total_price', {
                page: 'current'
            }).every(function() {
                var sum = this
                    .data()
                    .reduce(function(a, b) {
                        var x = parseFloat(a) || 0;
                        var y = parseFloat(b) || 0;
                        return x + y;
                    }, 0);
                console.log(sum);
                $(this.footer()).html(sum.toFixed(2, 2));
            });
        }


    });


    $('#btn-filter').click(function() {
        window.location.href = location.protocol + '//' + location.host + location.pathname +
            `?from_date=${$('#from_date').val()}&to_date=${$('#to_date').val()}`;
    });

});
</script>