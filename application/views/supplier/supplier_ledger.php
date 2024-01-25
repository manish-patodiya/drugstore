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

<!-- supplier Ledger Start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('supplier_ledger') ?></h1>
            <small><?php echo display('manage_supplier_ledger') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('supplier') ?></a></li>
                <li class="active"><?php echo display('supplier_ledger') ?></li>
            </ol>
        </div>
    </section>

    <!-- supplier information -->
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

        <div class="row p-r-15 m-y-10">
            <div class="col-sm-12 d-flex justify-content-right">
                <div class="column">

                    <?php
if ($this->permission1->method('manage_supplier', 'create')->access()) {?>
                    <a href="<?php echo base_url('Csupplier') ?>" class="btn btn-info m-b-5 m-r-2"><i class="ti-plus">
                        </i> <?php echo display('add_supplier') ?> </a>
                    <?php }?>

                    <?php
if ($this->permission1->method('manage_supplier', 'read')->access()) {?>
                    <a href="<?php echo base_url('Csupplier/manage_supplier') ?>" class="btn btn-primary m-b-5 m-r-2"><i
                            class="ti-align-justify"> </i> <?php echo display('manage_supplier') ?> </a>
                    <?php }?>



                </div>
            </div>
        </div>

        <?php
if ($this->permission1->method('supplier_ledger', 'read')->access()) {?>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <?php echo form_open('Csupplier/supplier_ledger', array('class' => '', 'id' => 'validate')) ?>
                        <?php $today = date('Y-m-d');?>

                        <div class="form-group row">
                            <label for="supplier_name"
                                class="col-sm-3 col-form-label"><?php echo display('select_supplier') ?> <i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select name="supplier_id" class="form-control" required="">
                                    <option value=""><?php echo display('select_supplier') ?> </option>

                                    <?php if ($supplier) {

    foreach ($supplier as $suppliers) {
        ?>

                                    <option value="<?php echo $suppliers['supplier_id']; ?>"
                                        <?php if ($suppliers['supplier_id'] == $supplier_id) {echo 'selected';}?>>
                                        <?php echo $suppliers['supplier_name']; ?>
                                    </option>
                                    <?php }}?>
                                </select>
                            </div>
                        </div>

                        <div class="" id="datebetween">
                            <div class="form-group row">
                                <label for="from_date " class="col-sm-3 col-form-label">
                                    <?php echo display('from') ?></label>
                                <div class="col-sm-6">
                                    <input type="text" name="from_date"
                                        value="<?php echo (!empty($start_date) ? $start_date : $today); ?>"
                                        class="datepicker form-control" id="from_date" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="to_date" class="col-sm-3 col-form-label">
                                    <?php echo display('to') ?></label>
                                <div class="col-sm-6">
                                    <input type="text" name="to_date"
                                        value="<?php echo (!empty($end_date) ? $end_date : $today) ?>"
                                        class="datepicker form-control" id="to_date" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="details" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-6 text-center">
                                <button type="submit" class="btn btn-success "><i class="fa fa-search-plus"
                                        aria-hidden="true"></i> <?php echo display('search') ?></button>
                                <a class="btn btn-warning" href="#"
                                    onclick="printDiv('printableArea')"><?php echo display('print') ?></a>
                            </div>
                        </div>
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
                            <h4><?php echo display('supplier_ledger') ?></h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div id="printableArea" style="margin-left:2px;">

                            <?php if ($supplier_name) {?>
                            <div class="text-center">
                                <h3> {supplier_name} </h3>
                                <h4><?php echo display('address') ?> : {address} </h4>
                                <h4> <?php echo display('print_date') ?>: <?php if (!empty($start_date)) {
    echo $start_date . ' To ' . $end_date;
}?> </h4>
                            </div>
                            <?php }?>

                            <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center"><?php echo display('date') ?></th>
                                            <th class="text-center"><?php echo display('description') ?></th>
                                            <th class="text-center"><?php echo display('invoice_no') ?></th>
                                            <th class="text-center"><?php echo display('deposite_id') ?></th>
                                            <th class="text-center"><?php echo display('debit') ?></th>
                                            <th class="text-center"><?php echo display('credit') ?></th>
                                            <th class="text-center"><?php echo display('balance') ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$total_debit = 0.00;
    $total_credit = 0.00;
    $total_balance = 0.00;
    if ($ledger) {
        foreach ($ledger as $ledger) {
            ?>
                                        <tr>
                                            <td><?php echo $ledger['date'] ?></td>
                                            <td><?php echo $ledger['description'] ?></td>
                                            <td>
                                                <a
                                                    href="<?php echo base_url('Cpurchase/purchase_details_data/' . $ledger['transaction_id']) ?>"><?php echo $ledger['chalan_no'] ?></a>
                                            </td>
                                            <td><?php echo $ledger['deposit_no'] ?></td>
                                            <td align="right">
                                                <?php
if ($ledger['debit']) {
                echo (($position == 0) ? $currency . " " . $ledger['debit'] : $ledger['debit'] . " " . $currency);
                $total_debit += $ledger['debit'];
            }
            ?>
                                            </td>
                                            <td align="right">
                                                <?php
if ($ledger['credit']) {
                echo (($position == 0) ? $currency . " " . $ledger['credit'] : $ledger['credit'] . " " . $currency);
                $total_credit += $ledger['credit'];
            }
            ?>
                                            </td>
                                            <td align="right">
                                                <?php
$credit = $ledger['credit'];
            $debit = $ledger['debit'];
            if (!empty($credit)) {
                $credit = $ledger['credit'];
            } else {
                $credit = 0;
            }

            if (!empty($debit)) {
                $debit = $ledger['debit'];
            } else {
                $debit = 0;
            }
            $balances = $debit - $credit;

            if ($balances) {
                echo (($position == 0) ? $currency . " " . $balances : $balances . " " . $currency);
            }
            $total_balance += $balances;
            ?>
                                            </td>
                                        </tr>
                                        <?php
}
    }
    ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="4" align="right"><b><?php echo display('grand_total') ?>:</b>
                                            </td>
                                            <td align="right">
                                                <b><?php echo (($position == 0) ? "$currency " . number_format($total_debit, 2) . "" : "" . number_format($total_debit, 2) . " $currency") ?></b>
                                            </td>
                                            <td align="right">
                                                <b><?php echo (($position == 0) ? "$currency " . number_format($total_credit, 2) . "" : "" . number_format($total_credit, 2) . " $currency") ?></b>
                                            </td>
                                            <td align="right">
                                                <b><?php echo (($position == 0) ? "$currency " . number_format($total_balance, 2) . "" : "" . number_format($total_balance, 2) . " $currency") ?></b>
                                            </td>
                                        </tr>
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

<!-- supplier Ledger End  -->
<script type="text/javascript">
$('#purpose').on('change', function() {
    var x = 0;
    if (this.value > x) {
        $("#datebetween").show();
    } else {
        $("#datebetween").hide();
    }
});
</script>