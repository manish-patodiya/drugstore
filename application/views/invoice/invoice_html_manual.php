<?php
$CI = &get_instance();
$CI->load->model('Web_settings');
$Web_settings = $CI->Web_settings->retrieve_setting_editdata();
?>

<!-- Printable area start -->

<!-- Printable area end -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('invoice_details') ?></h1>
            <small><?php echo display('invoice_details') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('invoice') ?></a></li>
                <li class="active"><?php echo display('invoice_details') ?></li>
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
        <?php
if ($this->permission1->method('manage_invoice', 'read')->access()) {?>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div id="printableArea">

                        <style>
                        #table-dtl thead,
                        tfoot tr th,
                        td {
                            padding: 5px 8px !important;
                        }

                        #table-dtl tbody tr td {
                            padding: 0 8px !important;
                            border-top: 0 !important;
                            border-bottom: 0 !important;
                            table-layout: fixed !important;
                        }


                        #amt-table tbody tr th,
                        #amt-table tbody tr td {
                            padding: 0 !important;
                        }

                        .panel-body {
                            font-size: 10px;
                            height: 50vh;
                            border: 1px solid #e4e5e7;
                            margin: 0.3cm;
                        }

                        @media print {
                            @page {
                                margin: 0;
                            }
                        }
                        </style>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-8 text-left" style="display: inline-block; width: 60%;">
                                    <address style="margin-bottom :5px;">
                                        {company_info}
                                        <?php $com = strtoupper($company_info[0]['company_name']);
    $com = implode("&nbsp&nbsp", explode(" ", $com));?>
                                        <h3 class="m-0">
                                            <b> <?php echo $com ?>
                                            </b>
                                        </h3>
                                        <h5 class="m-0 m-t-5" style="width:60%">{address} </h5>
                                        <h5 class="m-0 m-t-5">Phone No.: {mobile} </h5>
                                        <h5 class="m-0 m-t-5">D.L. No.: {dl_number} </h5>
                                        {/company_info}
                                        <!-- <h5 class="m-0 m-t-5"><abbr>{tax_regno}</abbr></h5> -->
                                    </address>
                                </div>

                                <div class="col-sm-4 text-left" style="display: inline-block;">
                                    <h4 class="m-0"><?php echo strtoupper(display('invoice')) ?></h4>
                                    <div><?php echo display('invoice_no') ?>: {invoice_no}</div>
                                    <div class=""><?php echo display('billing_date') ?>: {final_date}</div>
                                    <div><?php echo "Patient Name" ?>: {customer_name}</div>
                                    <div><?php echo "Doctor Name" ?> : {referred_by}</div>
                                </div>
                            </div>
                            <hr class="m-0">

                            <div class="table-responsive">
                                <table class="table table-bordered" id="table-dtl" style="margin-bottom:0px">
                                    <thead>
                                        <tr>
                                            <td><?php echo display('particulars') ?></td>
                                            <td style="width:8%" class="text-center"><?php echo 'Type' ?></td>
                                            <td style="width:8%" class="text-center"><?php echo 'Batch.' ?></td>
                                            <td style="width:5%" class="text-center"><?php echo 'Exp.' ?></td>
                                            <td style="width:3%" class="text-center"><?php echo 'Pack' ?>
                                            <td style="width:5%" class="text-center"><?php echo 'Qty.' ?></td>
                                            </td>
                                            <!-- <?php if ($discount_type == 1) {?>
                                            <td style="width:6%" class="text-center"><?php echo 'Dis' ?></td>
                                            <?php } elseif ($discount_type == 2) {?>
                                            <td style="width:6%" class="text-center">
                                                <?php echo display('discount') ?>
                                            </td>
                                            <?php } elseif ($discount_type == 3) {?>
                                            <td style="width:6%" class="text-center">
                                                <?php echo display('fixed_dis') ?>
                                            </td>
                                            <?php }?> -->

                                            <td style="width:6%" class="text-center"><?php echo 'GST' ?> </td>
                                            <td style="width:9%" class="text-center"><?php echo 'GST Amt.' ?> </td>
                                            <td style="width:7%" class="text-center"><?php echo "Rate" ?></td>
                                            <td style="width:8%" class="text-center"><?php echo "M.R.P." ?></td>
                                            <td style="width:8%" class="text-center">
                                                <?php echo display('ammount') ?></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php //foreach ($invoice_all_data as $value) {?>
                                        {invoice_all_data}
                                        <tr>
                                            <td>{product_name}</td>
                                            <td align="center">{product_model}</td>
                                            <td align="center">{batch_id}</td>
                                            <td align="center">{expire_date}</td>
                                            <td align="center">{strength}</td>
                                            <td align="center">{quantity}</td>
                                            <!--
                                            <?php if ($discount_type == 1) {?>
                                            <td align="center">{discount} %</td>
                                            <?php } else {?>
                                            <td align="center">
                                                <?php echo (($position == 0) ? "{discount}" : "{discount} ") ?>
                                            </td>
                                            <?php }?> -->

                                            <td align="center">{tax} %</td>
                                            <td align="center">{tax_price}</td>
                                            <td align="right">
                                                <?php echo (($position == 0) ? "{rate}" : "{rate} ") ?>
                                            </td>
                                            <td align="right">
                                                <?php echo (($position == 0) ? "{rate}" : "{rate} ") ?>
                                            </td>
                                            <td align="right" style=" padding: 0px 8px !important;">
                                                <?php echo (($position == 0) ? "{total_price}" : "{total_price} ") ?>
                                            </td>
                                        </tr>
                                        {/invoice_all_data}

                                        <?php //}?>

                                    </tbody>
                                    <tfoot>
                                        <td colspan="8"></td>
                                        <td colspan="2">
                                            <b><?php echo display('sub_total') ?>:</b>
                                        </td>

                                        <td class="text-right" align="center">
                                            <b><?php echo (($position == 0) ? "{subTotal_ammount}" : "{subTotal_ammount}") ?></b>
                                        </td>
                                    </tfoot>
                                </table>
                                <b><span style="margin-bottom:10px;display:block" id="num-in-words"></span></b>
                            </div>
                            <div class="row">
                                <div class="col-sm-8 col-xs-8" style="display: inline-block;width: 66%">
                                    <ul style="padding: 0 20px;">
                                        <li>Goods once sold will not be taken back or exchanged after 10 days of
                                            purchase</li>
                                        <li>All dispuites subject to JAIPUR jurdistication only.</li>
                                    </ul>
                                    <div>
                                        <div
                                            style="float:right;width:40%;text-align:center;border-top:1px solid #e4e5e7;margin-top: 10px;">
                                            <?php echo "For " . $company_info[0]['company_name'] ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-4" style="display: inline-block;">
                                    <table class="table" id="amt-table">
                                        <?php if ($invoice_all_data[0]['total_discount'] != 0) {?>
                                        <tr>
                                            <th style="border-top: 0; border-bottom: 0;">
                                                <?php echo display('total_discount') ?> : </th>
                                            <td class="text-right" style="border-top: 0; border-bottom: 0;">
                                                <?php echo (($position == 0) ? " {total_discount}" : "{total_discount} ") ?>
                                            </td>
                                        </tr>
                                        <?php }if ($invoice_all_data[0]['total_tax'] != 0) {?>
                                        <tr>
                                            <th class="text-left" style="border-top: 0; border-bottom: 0;">
                                                <?php echo 'CGST + SGST' ?> : </th>
                                            <td class="text-right" style="border-top: 0; border-bottom: 0;">
                                                <?php echo (($position == 0) ? " {total_tax}" : "{total_tax} ") ?>
                                            </td>
                                        </tr>
                                        <?php }?>

                                        <!-- <tr>
                                            <th class="text-left grand_total"><?php echo display('previous'); ?> :</th>
                                            <td class="text-right grand_total">
                                                <?php echo (($position == 0) ? " {previous}" : "{previous} ") ?>
                                            </td>
                                        </tr> -->
                                        <tr>
                                            <th class="text-left grand_total"><?php echo display('grand_total') ?> :
                                            </th>
                                            <td class="text-right grand_total">
                                                <?php echo (($position == 0) ? " {total_amount}" : "{total_amount} ") ?>
                                            </td>
                                        </tr>

                                        <?php if ((float) $round_of != 0) {?>
                                        <tr>
                                            <th class="text-left grand_total"><?php echo "Round off" ?> :
                                            </th>
                                            <td class="text-right grand_total">
                                                <?php echo (($position == 0) ? " {round_of}" : "{round_of} ") ?>
                                            </td>
                                        </tr>
                                        <?php }?>

                                        <tr>
                                            <th class="text-left grand_total" style="border-top: 0; border-bottom: 0;">
                                                <?php echo display('paid_ammount') ?> : </th>
                                            <td class="text-right grand_total" style="border-top: 0; border-bottom: 0;">
                                                <?php echo (($position == 0) ? " {paid_amount}" : "{paid_amount} ") ?>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <input type="hidden" name="" id="url" value="<?php echo base_url('Cinvoice'); ?>">
                                <!-- <div class="row">
                                    <div class="col-sm-4">
                                        <div
                                            style="float:left;width:40%;text-align:center;border-top:1px solid #e4e5e7;margin-top: 100px;font-weight: bold;">
                                            <?php echo display('received_by') ?>
                                        </div>
                                    </div>
                                     <div class="col-sm-4"></div>
                                    <div class="col-sm-4">
                                        <div
                                            style="float:right;width:40%;text-align:center;border-top:1px solid #e4e5e7;margin-top: 100px;font-weight: bold;">
                                            <?php echo display('authorised_by') ?>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </div>

                    <div class="panel-footer text-left">
                        <a class="btn btn-danger"
                            href="<?php echo base_url('Cinvoice'); ?>"><?php echo display('cancel') ?></a>
                        <button class="btn btn-info" onclick="printDiv('printableArea')"><span
                                class="fa fa-print"></span> Print</button>

                    </div>
                </div>
            </div>
        </div>
        <?php
} else {
    ?>
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
        <?php
}
?>
    </section> <!-- /.content -->
</div> <!-- /.content-wrapper -->

<script type="text/javascript">
$(window).load(function() {
    var url = document.getElementById("url").value;
    var printContents = document.getElementById('printableArea').innerHTML;
    var originalContents = document.getElementById('printableArea').innerHTML;
    document.getElementById('printableArea').innerHTML = printContents;
    // document.body.style.marginTop="-45px";

    window.print();
    document.body.innerHTML = originalContents;
    setTimeout(function() {
        document.location.href = url;
    }, 3000);
});

var a = ['', 'one ', 'two ', 'three ', 'four ', 'five ', 'six ', 'seven ', 'eight ', 'nine ', 'ten ', 'eleven ',
    'twelve ', 'thirteen ', 'fourteen ', 'fifteen ', 'sixteen ', 'seventeen ', 'eighteen ', 'nineteen '
];
var b = ['', '', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety'];

function inWords(num) {
    if ((num = num.toString()).length > 9) return 'overflow';
    n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
    if (!n) return;
    var str = '';
    str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'crore ' : '';
    str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'lakh ' : '';
    str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'thousand ' : '';
    str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'hundred ' : '';
    str += (n[5] != 0) ? ((str != '') ? '' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + 'only ' :
        '';
    return str;
}

function capitalize(input) {
    var words = input.split(' ');
    var CapitalizedWords = [];
    words.forEach(element => {
        CapitalizedWords.push(element[0].toUpperCase() + element.slice(1, element.length));
    });
    return CapitalizedWords.join(' ');
}

let v = parseFloat('<?php echo $paid_amount; ?>'.replace(/,/g, ''));
let string = inWords(v).toUpperCase();
$('#num-in-words').html(string);
</script>