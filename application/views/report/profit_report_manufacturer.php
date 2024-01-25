 <link href="<?php echo base_url() ?>assets/css/select2.min.css" rel="stylesheet" type="text/css" />
 <script src="<?php echo base_url() ?>my-assets/js/admin_js/json/manufacturer.js.php"></script>
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
             <h1><?php echo display('profit_report_manufacturer_wise') ?></h1>
             <small><?php echo display('total_profit_report') ?></small>
             <ol class="breadcrumb">
                 <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                 <li><a href="#"><?php echo display('report') ?></a></li>
                 <li class="active"><?php echo display('profit_report_manufacturer_wise') ?></li>
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
                         <?php echo form_open('Admin_dashboard/profit_manufacturer', array('class' => 'form-inline', 'method' => 'post')) ?>
                         <?php date_default_timezone_set("Asia/Dhaka");
$today = date('Y-m-d');?>
                         <div class="form-group row">
                             <label for="manufacturer"
                                 class="col-sm-3 col-form-label"><?php echo display('manufacturer_name') ?> <i
                                     class="text-danger">*</i></label>
                             <div class="col-sm-6">
                                 <input type="text" name="manufacturer_name" class="manufacturerSelection form-control"
                                     placeholder='<?php echo display('manufacturer_name') ?>' id="manufacturer_name"
                                     tabindex="1" required="required" />

                                 <input id="SchoolHiddenId" class="manufacturer_hidden_value abc" type="hidden"
                                     name="manufacturer_id">
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
                             <h4><?php echo display('profit_report_manufacturer_wise') ?></h4>
                         </div>
                     </div>

                     <div class="panel-body" id="profit_div" style="margin-left:2px;">
                         <!-- <span class="text-left"><img src="<?php echo $logo; ?>" class=""></span> -->

                         <span class="text-center">

                             {manufacturer_info}
                             <h3><?php echo display('report_for') ?> {manufacturer_name} </h3>
                             <h4>{address} </h4>
                             {/manufacturer_info}
                             <h4>From {from} To {to}</h4>
                         </span>

                         <div>


                             <table class="table table-striped table-hover">
                                 <tr>
                                     <td class="text-center"><?php echo display('total_sale_qty'); ?></td>
                                     <td class="text-right"><?php if ($total_sale_qty > 0) {
    echo $total_sale_qty;
} else {
    echo 0;
}?> <?php if ($quantity > 0) {echo 'Out Of' . ' ' . $quantity;} else {
    echo '';
}?></td>
                                 </tr>
                                 <tr>
                                     <td class="text-center"><?php echo display('total_purchase_pric'); ?></td>
                                     <td class="text-right">
                                         <?php
echo (($position == 0) ? "$currency " . number_format($tpurchase, 2, '.', ',') : number_format($tpurchase, 2, '.', ',') . " $currency"); ?>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td class="text-center"><?php echo display('total_sale'); ?></td>
                                     <td class="text-right">
                                         <?php
echo (($position == 0) ? "$currency " . number_format($total_sale, 2, '.', ',') : number_format($total_sale, 2, '.', ',') . " $currency"); ?>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td class="text-center"><?php $profit = $total_sale - $tpurchase;
if ($profit > 0) {
    echo display('net_profit');
} else {
    echo display('loss');
}?></td>
                                     <td class="text-right">
                                         <?php
$profit = $total_sale - $tpurchase;
echo (($position == 0) ? "$currency " . number_format($profit, 2, '.', ',') : number_format($profit, 2, '.', ',') . " $currency");?>
                                     </td>
                                 </tr>
                             </table>
                             <h4> <?php echo display('print_date') ?>: <?php echo date("d/m/Y h:i:s"); ?> </h4>
                         </div>

                     </div>
                     <div><span style="float: right;"><a class="btn btn-warning" href="#"
                                 onclick="printDiv('profit_div')"><?php echo display('print') ?></a></span></div>
                 </div>
             </div>
         </div>
     </section>
 </div>
 <!-- Profit Report End -->