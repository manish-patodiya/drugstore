<style type="text/css">
.prints {
    background-color: #31B404;
    color: #fff;
}
</style>
<!-- Manage Invoice Start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('manage_invoice') ?></h1>
            <small><?php echo display('manage_your_invoice') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('invoice') ?></a></li>
                <li class="active"><?php echo display('manage_invoice') ?></li>
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



        <!-- date between search -->
        <div class="row">

            <div class="panel panel-default m-0">
                <div class="panel-body">
                    <div class="col-sm-7">
                        <?php echo form_open('', array('class' => 'form-inline', 'method' => 'get')) ?>
                        <?php $today = date('Y-m-d');?>
                        <div class="form-group">
                            <label class="" for="from_date"><?php echo display('start_date') ?></label>
                            <input type="text" name="from_date" class="form-control datepicker" id="from_date"
                                value="<?=isset($_GET['from_date']) ? $_GET['from_date'] : ''?>"
                                placeholder="<?php echo display('start_date') ?>">
                        </div>

                        <div class="form-group">
                            <label class="" for="to_date"><?php echo display('end_date') ?></label>
                            <input type="text" name="to_date" class="form-control datepicker" id="to_date"
                                placeholder="<?php echo display('end_date') ?>"
                                value="<?=isset($_GET['to_date']) ? $_GET['to_date'] : ''?>">
                        </div>

                        <button type="button" id="btn-filter"
                            class="btn btn-success"><?php echo display('find') ?></button>

                        <?php echo form_close() ?>
                    </div>
                    <div class="col-sm-5">
                        <div class="column">
                            <?php if ($this->permission1->method('new_invoice', 'create')->access()) {?>
                            <a href="<?php echo base_url('Cinvoice') ?>" class="btn btn-info m-b-5 m-r-2 pull-right"><i
                                    class="ti-plus"> </i> <?php echo display('new_invoice') ?> </a>
                            <?php }?>
                            <?php if ($this->permission1->method('pos_invoice', 'create')->access()) {?>
                            <a href="<?php echo base_url('Cinvoice/pos_invoice') ?>"
                                class="btn btn-primary m-b-5 m-r-2 pull-right"><i class="ti-align-justify"> </i>
                                <?php echo display('pos_invoice') ?> </a>
                            <?php }?>

                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- Manage Invoice report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <!-- <div class="panel-heading">
                    </div> -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="InvList">
                                <thead>
                                    <tr>
                                        <th><?php echo display('sl') ?></th>
                                        <th><?php echo display('invoice_no') ?></th>
                                        <th><?php echo 'Patient Name' ?></th>
                                        <th><?php echo 'Doctor Name' ?></th>
                                        <th><?php echo display('date') ?></th>
                                        <th><?php echo display('total_amount') ?></th>
                                        <th><?php echo display('action') ?></th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                                <tfoot>
                                    <th colspan="4" style="text-align:right">Total:</th>

                                    <th></th>
                                    <th></th>
                                </tfoot>
                            </table>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Manage Invoice End -->

<!-- Manage Product End -->
<script type="text/javascript">
$(document).ready(function() {
    var mydatatable = $('#InvList').DataTable({
        responsive: true,
        stateSave: true,
        "aaSorting": [
            [1, "desc"]
        ],
        "columnDefs": [{
                "bSortable": false,
                "aTargets": [0, 4, 5, 6]
            },

        ],
        'iDisplayLength': 50,
        'processing': true,
        'serverSide': true,


        'lengthMenu': [
            [10, 25, 50, 100, 250, 500, "<?php echo $total_invoice; ?>"],
            [10, 25, 50, 100, 250, 500, "All"]
        ],

        dom: "'<'col-sm-4'l><'col-sm-4 text-center'><'col-sm-4'>Bfrtip",
        buttons: [{
            extend: "copy",
            exportOptions: {
                columns: [0, 1, 2, 3, 4] //Your Colume value those you want
            },
            className: "btn-sm prints"
        }, {
            extend: "csv",
            title: "InvoiceList",
            exportOptions: {
                columns: [0, 1, 2, 3, 4] //Your Colume value those you want print
            },
            className: "btn-sm prints"
        }, {
            extend: "excel",
            exportOptions: {
                columns: [0, 1, 2, 3, 4] //Your Colume value those you want print
            },
            title: "InvoiceList",
            className: "btn-sm prints"
        }, {
            extend: "pdf",
            exportOptions: {
                columns: [0, 1, 2, 3, 4] //Your Colume value those you want print
            },
            title: "Invoice List",
            className: "btn-sm prints"
        }, {
            extend: "print",
            exportOptions: {
                columns: [0, 1, 2, 3, 4] //Your Colume value those you want print
            },
            title: "Invoice List",
            className: "btn-sm prints"
        }],


        'serverMethod': 'post',
        'ajax': {
            'url': '<?=base_url()?>Cinvoice/CheckInvoiceList',
            "data": function(data) {
                data.fromdate = $('#from_date').val();
                data.todate = $('#to_date').val();

                //data.status = $('#status').val();
            }
        },
        'columns': [{
                data: 'sl'
            },
            {
                data: 'invoice'
            },
            {
                data: 'customer_name'
            },
            {
                data: 'doctor_name'
            },
            {
                data: 'final_date'
            },
            {
                data: 'total_amount',
                class: "total_sale"
            },
            {
                data: 'button'
            },
        ],

        "footerCallback": function(row, data, start, end, display) {
            var api = this.api();
            api.columns('.total_sale', {
                page: 'current'
            }).every(function() {
                var sum = this
                    .data()
                    .reduce(function(a, b) {
                        var x = parseFloat(a) || 0;
                        var y = parseFloat(b) || 0;
                        return x + y;
                    }, 0);
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