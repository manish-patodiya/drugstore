<script src="<?php echo base_url() ?>my-assets/js/admin_js/json/product_invoice.js.php"></script>

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

<!-- Stock List manufacturer Wise Start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('stock_report_batch_wise') ?></h1>
            <small><?php echo display('stock_report_batch_wise') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('stock') ?></a></li>
                <li class="active"><?php echo display('stock_report_batch_wise') ?></li>
            </ol>
        </div>
    </section>

    <section class="content">


        <?php
if ($this->permission1->method('stock_report_batch_wise', 'read')->access()) {?>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading p-b-5">
                        <div class="d-flex align-items-center">
                            <label class=''>Expiry From:</label>
                            <div class="col-md-2">
                                <input type="text" class='form-control datepicker' id='exp-from' placeholder>
                            </div>
                            <label>Expiry To: </label>
                            <div class='col-md-2'>
                                <input type="text" class='form-control datepicker' id='exp-to' placeholder>
                            </div>
                            <a class='btn btn-success' id='btn-filter'><i class='fa fa-search'></i></a>
                            <div class="col-md-5 d-flex justify-content-right" style='margin-left:7%;'>
                                <div class="column">
                                    <?php
if ($this->permission1->method('stock_report', 'read')->access()) {?>
                                    <a href="<?php echo base_url('Creport') ?>"
                                        class="btn btn-primary m-b-5 m-r-2 pull-right"><i class="ti-align-justify"> </i>
                                        <?php echo display('stock_report') ?> </a>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div id="printableArea" style="margin-left:2px;">
                            <div class="table-responsive" style="margin-top: 10px;">
                                <table class="table table-striped table-bordered" cellspacing="0" width="100%"
                                    id="checkList">
                                    <thead>
                                        <tr>
                                            <th class="text-center"><?php echo display('sl') ?></th>
                                            <th class="text-center"><?php echo display('product_name') ?></th>
                                            <th class="text-center"><?php echo display('type') ?></th>
                                            <th class="text-center"><?php echo display('batch_id') ?></th>
                                            <th class="text-center"><?php echo display('expire_date') ?></th>
                                            <th class="text-center"><?php echo display('in_qnty') ?></th>
                                            <th class="text-center"><?php echo display('out_qnty') ?></th>
                                            <th class="text-center"><?php echo display('stock') ?></th>
                                            <th class="text-center"><?php echo display('action') ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>

                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php }?>
    </section>
</div>
<script type="text/javascript">
$(document).ready(function() {
    var mytable = $('#checkList').DataTable({
        responsive: true,
        "aaSorting": [
            [1, "asc"]
        ],
        "columnDefs": [{
                "bSortable": false,
                "aTargets": [0, 2, 3, 4, 5, 6, 7, 8]
            },

        ],
        'processing': true,
        'serverSide': true,


        'lengthMenu': [
            [10, 25, 50, 100, 250, 500, 10000],
            [10, 25, 50, 100, 250, 500, "All"]
        ],

        dom: "'<'col-sm-4'l><'col-sm-4 text-center'><'col-sm-4'>Bfrtip",
        buttons: [{
            extend: "copy",
            className: "btn-sm prints"
        }, {
            extend: "csv",
            title: "Batch Wise StockList",
            className: "btn-sm prints"
        }, {
            extend: "excel",
            title: "Batch Wise StockList",
            className: "btn-sm prints"
        }, {
            extend: "pdf",
            title: "Batch Wise StockList",
            className: "btn-sm prints"
        }, {
            extend: "print",
            className: "btn-sm prints"
        }],

        'serverMethod': 'post',
        'ajax': {
            'url': '<?=base_url()?>Creport/Checkbatchstock',
            "data": function(data) {
                data.fromdate = $('#exp-from').val();
                data.todate = $('#exp-to').val();
            },
        },
        'columns': [{
                data: 'sl'
            },
            {
                data: 'product_name'
            },
            {
                data: 'strength'
            },
            {
                data: 'batch_id'
            },
            {
                data: 'expeire_date'
            },
            {
                data: 'inqty'
            },
            {
                data: 'outqty'
            },
            {
                data: 'stock'
            },
            {
                data: 'action'
            },

        ],
    });
    $("#exp-from").datepicker({
        changeYear: true,
        changeMonth: true,
        dateFormat: "yy-mm-dd",
        minDate: new Date()
    });
    $("#exp-to").datepicker({
        changeYear: true,
        changeMonth: true,
        dateFormat: "yy-mm-dd",
        minDate: new Date()
    });

    $('#btn-filter').click(function() {
        mytable.ajax.reload();
    });
});
</script>