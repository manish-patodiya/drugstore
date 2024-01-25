<!-- Customer js php -->
<script src="<?php echo base_url() ?>my-assets/js/admin_js/json/customer.js.php"></script>
<!-- Manage credit customer -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo 'Patient' ?></h1>
            <small><?php echo display('paid_customer') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo 'Patient' ?></a></li>
                <li class="active"><?php echo display('paid_customer') ?></li>
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

        <!-- Manage Product report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading p-b-5">
                        <div class="row">
                            <div class="panel-title col-md-6">
                                <h4><?php echo display('paid_customer') ?></h4>
                            </div>
                            <div class="col-md-6 d-flex justify-content-right">
                                <div class="column">
                                    <?php
if ($this->permission1->method('add_customer', 'create')->access()) {?>
                                    <a href="<?php echo base_url('Ccustomer') ?>" class="btn btn-info m-b-5 m-r-2"><i
                                            class="ti-plus"> </i> <?php echo display('add_customer') ?> </a>
                                    <?php }?>

                                    <?php
if ($this->permission1->method('manage_customer', 'read')->access() || $this->permission1->method('manage_customer', 'update')->access() || $this->permission1->method('manage_customer', 'delete')->access()) {?>
                                    <a href="<?php echo base_url('Ccustomer/manage_customer') ?>"
                                        class="btn btn-primary m-b-5 m-r-2"><i class="ti-align-justify"> </i>
                                        <?php echo display('manage_customer') ?> </a>
                                    <?php }?>

                                    <?php
if ($this->permission1->method('paid_customer', 'read')->access()) {?>
                                    <a href="<?php echo base_url('Ccustomer/credit_customer') ?>"
                                        class="btn btn-warning m-b-5 m-r-2"><i class="ti-align-justify"> </i>
                                        <?php echo display('credit_customer') ?> </a>
                                    <?php }?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" cellspacing="0" width="100%"
                                id="customerLIst">
                                <thead>
                                    <tr>
                                        <th><?php echo display('sl') ?></th>
                                        <th><?php echo 'Patient Name' ?></th>
                                        <th><?php echo display('address') ?></th>
                                        <th><?php echo display('mobile') ?></th>
                                        <th><?php echo display('balance') ?></th>
                                        <th><?php echo display('action') ?>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="3" style="text-align:right">Total:</th>
                                        <th id="totalbalance"></th>
                                        <th></th>
                                        <th></th>
                                    </tr>

                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Manage Product End -->
<script type="text/javascript">
$(document).ready(function() {

    $('#customerLIst').DataTable({
        responsive: true,

        "aaSorting": [
            [1, "asc"]
        ],
        "columnDefs": [{
                "bSortable": false,
                "aTargets": [0, 2, 3, 4, 5]
            },

        ],
        'processing': true,
        'serverSide': true,


        'lengthMenu': [
            [10, 25, 50, 100, 250, 500, "<?php echo $total_customer; ?>"],
            [10, 25, 50, 100, 250, 500, "All"]
        ],

        dom: "'<'col-sm-4'l><'col-sm-4 text-center'><'col-sm-4'>Bfrtip",
        buttons: [{
            extend: "copy",
            className: "btn-sm prints"
        }, {
            extend: "csv",
            title: "Paid CustomerList",
            exportOptions: {
                columns: [0, 1, 2, 3, 4] //Your Colume value those you want
            },
            className: "btn-sm prints"
        }, {
            extend: "excel",
            title: "Paid CustomerList",
            exportOptions: {
                columns: [0, 1, 2, 3, 4] //Your Colume value those you want
            },
            className: "btn-sm prints"
        }, {
            extend: "pdf",
            title: " Paid CustomerList",
            exportOptions: {
                columns: [0, 1, 2, 3, 4] //Your Colume value those you want
            },
            className: "btn-sm prints"
        }, {
            extend: "print",
            exportOptions: {
                columns: [0, 1, 2, 3, 4] //Your Colume value those you want
            },
            title: "<center> Paid CustomerList</center>",
            className: "btn-sm prints"
        }],

        'serverMethod': 'post',
        'ajax': {
            'url': '<?=base_url()?>Ccustomer/CheckPaidCustomerList'
        },
        'columns': [{
                data: 'sl'
            },
            {
                data: 'customer_name'
            },
            {
                data: 'address'
            },
            {
                data: 'mobile'
            },
            {
                data: 'balance',
                class: "balance"
            },
            {
                data: 'button'
            },
        ],

        "footerCallback": function(row, data, start, end, display) {
            var api = this.api();

            api.columns('.balance', {
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




});
</script>