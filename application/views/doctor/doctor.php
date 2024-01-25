<style type="text/css">
.prints {
    background-color: #31B404;
    color: #fff;
}

.action {
    color: #fff;
}

.dropdown-menu>li>a {
    color: #fff;
}
</style>
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo 'Patient' ?></h1>
            <small><?php echo display('manage_doctor') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo 'Doctor' ?></a></li>
                <li class="active"><?php echo display('manage_doctor') ?></li>
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

        <!-- Manage Doctor report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading p-b-5">
                        <div class="row">
                            <div class="panel-title col-md-6">
                                <h4><?php echo display('manage_doctor') ?></h4>
                            </div>
                            <div class="col-md-6 d-flex justify-content-right">
                                <?php if ($this->permission1->method('add_doctor', 'create')->access()) {?>
                                <a href="<?php echo base_url('Cdoctor') ?>" class="btn btn-info m-b-5 m-r-2"><i
                                        class="ti-plus"> </i> <?php echo display('add_doctor') ?> </a>
                                <?php }?>
                            </div>
                        </div>

                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" cellspacing="0" width="100%"
                                id="doctorLIst">
                                <thead>
                                    <tr>
                                        <th><?php echo display('sl') ?></th>
                                        <th><?php echo 'Doctor Name' ?></th>
                                        <th><?php echo display('action') ?>
                                        </th>
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
    </section>
</div>
<!-- Manage Doctor End -->
<script type="text/javascript">
$(document).ready(function() {

    $('#doctorLIst').DataTable({
        responsive: true,

        "aaSorting": [
            [1, "asc"]
        ],
        "columnDefs": [{
            "bSortable": false,
            "aTargets": [0, 2]
        }, ],
        'processing': true,
        'serverSide': true,


        'lengthMenu': [
            [10, 25, 50, 100, 250, 500, "<?php echo $total_doctor; ?>"],
            [10, 25, 50, 100, 250, 500, "All"]
        ],

        dom: "'<'col-sm-4'l><'col-sm-4 text-center'><'col-sm-4'>Bfrtip",
        buttons: [{
            extend: "copy",
            className: "btn-sm prints"
        }, {
            extend: "csv",
            title: "DoctorList",
            exportOptions: {
                columns: [0, 1] //Your Colume value those you want
            },
            className: "btn-sm prints"
        }, {
            extend: "excel",
            title: "DoctorList",
            exportOptions: {
                columns: [0, 1] //Your Colume value those you want
            },
            className: "btn-sm prints"
        }, {
            extend: "pdf",
            title: " DoctorList",
            exportOptions: {
                columns: [0, 1] //Your Colume value those you want
            },
            className: "btn-sm prints"
        }, {
            extend: "print",
            exportOptions: {
                columns: [0, 1] //Your Colume value those you want
            },
            title: "<center> DoctorList</center>",
            className: "btn-sm prints"
        }],

        'serverMethod': 'post',
        'ajax': {
            'url': '<?=base_url()?>Cdoctor/CheckDoctorList'
        },
        'columns': [{
                data: 'sl'
            },
            {
                data: 'doctor_name'
            },
            {
                data: 'button'
            },
        ],
    });
});
</script>