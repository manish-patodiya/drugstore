<!-- Customer Ledger Start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo 'Patient Ledger' ?></h1>
            <small><?php echo display('manage_customer_ledger') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo 'Patient' ?></a></li>
                <li class="active"><?php echo 'Patient Ledger' ?></li>
            </ol>
        </div>
    </section>

    <!-- Customer information -->
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
            <div class="col-sm-12">
                <div class="column">

                    <?php
if ($this->permission1->method('add_customer', 'create')->access()) {?>
                    <a href="<?php echo base_url('Ccustomer') ?>" class="btn btn-info m-b-5 m-r-2"><i class="ti-plus">
                        </i> <?php echo display('add_customer') ?> </a>
                    <?php }?>

                    <?php
if ($this->permission1->method('manage_customer', 'read')->access()) {?>
                    <a href="<?php echo base_url('Ccustomer/manage_customer') ?>" class="btn btn-primary m-b-5 m-r-2"><i
                            class="ti-align-justify"> </i> <?php echo display('manage_customer') ?> </a>
                    <?php }?>

                    <?php
if ($this->permission1->method('credit_customer', 'read')->access()) {?>
                    <a href="<?php echo base_url('Ccustomer/credit_customer') ?>" class="btn btn-success m-b-5 m-r-2"><i
                            class="ti-align-justify"> </i> <?php echo display('credit_customer') ?> </a>
                    <?php }?>

                    <?php
if ($this->permission1->method('paid_customer', 'read')->access()) {?>
                    <a href="<?php echo base_url('Ccustomer/paid_customer') ?>" class="btn btn-warning m-b-5 m-r-2"><i
                            class="ti-align-justify"> </i> <?php echo display('paid_customer') ?> </a>
                    <?php }?>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo 'Patient Information' ?></h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div style="float:left">
                            {company_info}
                            <h5><u> {company_name}</u></h5>
                            {/company_info}
                            <?php echo 'Patient Name' ?> : {customer_name} <br>
                            <?php echo 'Patient Address' ?> : {customer_address}<br>
                            <?php echo display('mobile') ?> : {customer_mobile}
                        </div>
                        <div style="float:right;margin-right:100px">
                            <table class="table table-striped table-condensed table-bordered">
                                <tr>
                                    <td> <?php echo display('debit_ammount') ?> </td>
                                    <td style="text-align:right !Important;margin-right:20px">
                                        <?php echo (($position == 0) ? "$currency {total_debit}" : "{total_debit} $currency") ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?php echo display('credit_ammount'); ?></td>
                                    <td style="text-align:right !Important;margin-right:20px">
                                        <?php echo (($position == 0) ? "$currency {total_credit}" : "{total_credit} $currency") ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?php echo display('balance_ammount'); ?> </td>
                                    <td style="text-align:right !Important;margin-right:20px">
                                        <?php echo (($position == 0) ? "$currency {total_balance}" : "{total_balance} $currency") ?>


                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Customer Ledger -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo 'Patient Ledger' ?></h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample3" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th><?php echo display('date') ?></th>
                                        <th><?php echo display('invoice_no') ?></th>
                                        <th><?php echo display('receipt_no') ?></th>
                                        <th><?php echo display('description') ?></th>
                                        <th style="text-align:right !Important;margin-right:20px">
                                            <?php echo display('debit') ?></th>
                                        <th style="text-align:right !Important;margin-right:20px">
                                            <?php echo display('credit') ?></th>
                                        <th style="text-align:right !Important;margin-right:20px">
                                            <?php echo display('balance') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
if ($ledger) {
    $balance = $total_debit = $total_credit = 0;
    ?>
                                    <?php foreach ($ledger as $ledger) {?>


                                    <tr>
                                        <td><?php echo $ledger['date'] ?></td>
                                        <td>
                                            <a
                                                href="<?php echo base_url() . 'Cinvoice/invoice_inserted_data/' . $ledger['invoice_no']; ?>">
                                                <?php echo $ledger['invoce_n'] ?>
                                            </a>
                                        </td>
                                        <td>
                                            <?php echo $ledger['receipt_no'] ?>
                                        </td>
                                        <td><?php echo $ledger['description'] ?></td>
                                        <td style="text-align:right;">
                                            <?php
if ($ledger['d_c'] == 'd') {
        echo (($position == 0) ? "$currency " . number_format($ledger['amount'], 2, '.', ',') : number_format($ledger['amount'], 2, '.', ',') . " $currency");
        $total_debit += $ledger['amount'];
        $balance += $ledger['amount'];
    } else {
        echo '0.00';
    }

        ?>

                                        </td>
                                        <td style="text-align:right;">
                                            <?php
if ($ledger['d_c'] == 'c') {
            echo (($position == 0) ? "$currency " . number_format($ledger['amount'], 2, '.', ',') : number_format($ledger['amount'], 2, '.', ',') . " $currency");
            $total_credit += $ledger['amount'];
            $balance -= $ledger['amount'];
        } else {
            echo '0.00';
        }
        ?>
                                        </td>
                                        <td style="text-align:right;">
                                            <?php
if ($balance != 0) {
            echo (($position == 0) ? "$currency " . number_format($balance, 2, '.', ',') : number_format($balance, 2, '.', ',') . " $currency");
        } else {
            echo '0.00';
        }?>
                                        </td>
                                    </tr>
                                    <?php }?>
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
<!-- Customer Ledger End  -->