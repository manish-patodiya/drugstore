<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('new_invoice') ?></h1>
            <small><?php echo display('add_new_invoice') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('invoice') ?></a></li>
                <li class="active"><?php echo display('new_invoice') ?></li>
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
            <div class="col-sm-12 col-md-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>

                            </h4>
                        </div>
                    </div>
                    <div class="panel-body">

                        <div class="row" id="">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="date" class="col-sm-4 col-form-label"><?php echo display('date') ?>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="text" id="sales_date" placeholder="<?php echo display('date') ?>"
                                            class="datepicker form-control serach_date">
                                    </div>
                                </div>
                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-success w-md m-b-5"
                                        id="btnSerach"><?php echo display('find') ?></button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-body">
                        <div class="">
                            <table class="datatable2 table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th><?php echo display('voucher_no') ?></th>
                                        <th><?php echo display('remark') ?></th>
                                        <th><?php echo display('amount') ?></th>
                                        <th><?php echo display('date') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
$date = date('Y-m-d');
?>
                                    <tr id="show_vouchar">
                                        <td>
                                            <a href="<?php echo base_url("accounts/vouchar_cash/" . $date) ?>">
                                                <?php echo "CV-BAC-" . $date; ?>
                                            </a>
                                        </td>
                                        <td>Aggregated Cash Credit Voucher of <?php echo $date; ?></td>
                                        <td><?php if ($get_cash->Amount == '') {
    echo '0.00';
} else {
    echo $get_cash->Amount;
}?></td>
                                        <td align="center"><?php echo $date; ?></td>
                                    </tr>
                                    <?php
foreach ($get_vouchar as $v_data) {

    ?>
                                    <tr>
                                        <td><a
                                                href="<?php echo base_url("accounts/vouchar_view/$v_data->VDate") ?>"><?php echo $v_data->VNo; ?></a>
                                        </td>
                                        <td><?php echo $v_data->Narration; ?></td>
                                        <td><?php echo number_format($v_data->Amount); ?></td>
                                        <td><?php echo $v_data->VDate; ?></td>
                                    </tr>
                                    <?php
}
?>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $('#btnSerach').on('click', function() {
        var vouchar = $("#sales_date").val();
        $.ajax({
            url: '<?php echo site_url('accounts/accounts/voucher_report_serach'); ?>',
            type: 'POST',
            data: {
                vouchar: vouchar
            },
            success: function(data) {
                $("#show_vouchar").html(data);
            }
        });

    });
});
</script>

<script type="text/javascript">
$(function() {
    $(".datepicker").datepicker({
        dateFormat: "yy-mm-dd",
        changeYear: true,
        changeMonth: true,
    });

});
</script>