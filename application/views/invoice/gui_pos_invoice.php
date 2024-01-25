 <link href="<?php echo base_url() ?>assets/css/gui_pos.css" rel="stylesheet" type="text/css" />
 <script src="<?php echo base_url() ?>my-assets/js/admin_js/invoice.js" type="text/javascript"></script>

 <!-- Add new invoice start -->


 <!-- Customer type change by javascript end -->

 <!-- Add New Invoice Start -->
 <div class="content-wrapper">


     <section class="content">
         <div class="alert alert-danger fade in" id="almsg" style="display: none"> No Available Qty ..
         </div>

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
                 <div class="panel panel-default">
                     <div class="panel-body">

                         <!-- Nav tabs -->
                         <ul class="nav nav-tabs" role="tablist">
                             <li class="active">
                                 <a href="#nsale" role="tab" data-toggle="tab">
                                     <?php echo display('new_invoice'); ?>
                                 </a>
                             </li>
                             <li><a href="#saleList" role="tab" data-toggle="tab">
                                     Today's Sale
                                 </a>
                             </li>

                         </ul>

                         <!-- Tab panes -->
                         <div class="tab-content">
                             <div class="tab-pane active" id="nsale">

                                 <div class="panel panel-default">
                                     <div class="panel-body">
                                         <input name="url" type="hidden" id="posurl"
                                             value="<?php echo base_url("Cinvoice/getitemlist") ?>" />
                                         <div class="col-sm-6">
                                             <form class="navbar-search" method="get"
                                                 action="<?php echo base_url("ordermanage/order/pos_invoice") ?>">
                                                 <label class="sr-only screen-reader-text" for="search">Search:</label>
                                                 <div class="input-group">
                                                     <input type="text" id="product_name"
                                                         class="form-control search-field" dir="ltr" value="" name="s"
                                                         placeholder="Search By Product" />

                                                     <div class="input-group-addon search-categories">
                                                         <?php

echo form_dropdown('category_id', $categorylist, (!empty($categorylist->categorey_id) ? $categorylist->categorey_id : null), 'id="category_id" class="form-control"') ?>
                                                     </div>
                                                     <div class="input-group-btn">
                                                         <button type="button" class="btn btn-secondary"
                                                             id="search_button"><i class="ti-search"></i></button>
                                                     </div>
                                                 </div>
                                             </form>
                                             <div class="product-grid scrollbar" id="style-3">

                                                 <div class="row row-m-3" id="product_search">
                                                     <?php $i = 0;
foreach ($itemlist as $item) {

    ?>
                                                     <div class="col-xs-6 col-sm-4 col-md-2 col-p-3">
                                                         <div class="panel panel-bd product-panel select_product">
                                                             <div class="panel-body">
                                                                 <img src="<?php echo !empty($item->image) ? $item->image : 'assets/img/icons/default.jpg'; ?>"
                                                                     class="img-responsive pointer"
                                                                     onclick="onselectimage('<?php echo $item->product_id ?>')"
                                                                     alt="<?php echo $item->product_name; ?>">
                                                             </div>
                                                             <div class="panel-footer"><?php
$text = $item->product_name;
    $pieces = substr($text, 0, 11);
    $ps = substr($pieces, 0, 10) . "...";
    $cn = strlen($text);
    if ($cn > 11) {
        echo $ps;
    } else {
        echo $text;
    }
    ;
    ?></div>
                                                         </div>
                                                     </div>
                                                     <?php }?>
                                                 </div>


                                             </div>
                                         </div>
                                         <div class="col-sm-6">

                                             <div class="form-group row" style="margin-top: 5px;">
                                                 <div class="col-sm-5">
                                                     <input type="text" name="product_name"
                                                         class="form-control col-sm-2"
                                                         placeholder='<?php echo display('barcode_qrcode_scan_here') ?>'
                                                         id="add_item" autocomplete='off' tabindex="1" value="">
                                                 </div>
                                                 <label class="col-sm-2">OR</label>
                                                 <div class="col-sm-5">
                                                     <input type="text" name="product_name_m"
                                                         class="form-control col-sm-2"
                                                         placeholder='Manual Input barcode' id="add_item_m"
                                                         autocomplete='off' tabindex="1" value="">
                                                     <input type="hidden" id="product_value" name="">
                                                 </div>
                                             </div>
                                             <div class="form-group">
                                                 <?php echo form_open_multipart('Cinvoice/manual_sales_insert', array('class' => 'form-vertical', 'id' => 'gui_sale_insert', 'name' => 'insert_pos_invoice')) ?>
                                                 <div class="form-group row">
                                                     <div class="col-sm-10">
                                                         <input type="text" size="100" name="customer_name"
                                                             class="customerSelection form-control"
                                                             placeholder='<?php echo 'Patient Name' . '/' . display('phone') ?>'
                                                             id="customer_name" value="{customer_name}" tabindex="3"
                                                             onkeyup="customer_autocomplete()" />
                                                         <input id="autocomplete_customer_id"
                                                             class="customer_hidden_value" type="hidden"
                                                             name="customer_id" value="{customer_id}">
                                                         <input id="paytype" class="" type="hidden" name="paytype"
                                                             value="1">
                                                         <input id="date" class="" type="hidden" name="invoice_date"
                                                             value="<?=date('Y-m-d');?>">
                                                         <?php
if (empty($customer_name)) {
    ?>
                                                         <small id="emailHelp"
                                                             class="text-danger"><?php echo display('please_add_walking_customer_for_default_customer') ?></small>
                                                         <?php
}
?>
                                                     </div>
                                                     <div class="col-sm-2">
                                                         <a href="#" class="client-add-btn btn btn-success"
                                                             aria-hidden="true" data-toggle="modal"
                                                             data-target="#cust_info"><i class="ti-plus m-r-2"></i></a>
                                                     </div>
                                                 </div>
                                                 <div class="table-responsive" style="margin-top: 10px">
                                                     <table
                                                         class="table table-bordered table-hover table-sm nowrap gui-products-table"
                                                         id="normalinvoice">
                                                         <thead>
                                                             <tr>
                                                                 <th class="text-center" style="width: 220px">
                                                                     <?php echo display('item_information') ?> <i
                                                                         class="text-danger">*</i></th>
                                                                 <th class="text-center" style="width: 150px">
                                                                     <?php echo display('batch') ?></th>
                                                                 <th class="text-center"><?php echo display('expiry') ?>
                                                                 </th>
                                                                 <th class="text-center"><?php echo display('qty') ?> <i
                                                                         class="text-danger">*</i></th>
                                                                 <th class="text-center"><?php echo display('price') ?>
                                                                     <i class="text-danger">*</i>
                                                                 </th>
                                                                 <?php if ($discount_type == 1) {?>
                                                                 <th class="text-center"><?php echo display('dis') ?> %
                                                                 </th>
                                                                 <?php } elseif ($discount_type == 2) {?>
                                                                 <th class="text-center"><?php echo display('dis') ?>
                                                                 </th>
                                                                 <?php } elseif ($discount_type == 3) {?>
                                                                 <th class="text-center">
                                                                     <?php echo display('fixed_dis') ?> </th>
                                                                 <?php }?>
                                                                 <th class="text-center"><?php echo display('total') ?>
                                                                 </th>
                                                                 <th class="text-center"><?php echo display('action') ?>
                                                                 </th>
                                                             </tr>
                                                         </thead>
                                                         <tbody id="addinvoiceItem">
                                                             <tr></tr>
                                                         </tbody>

                                                     </table>

                                                 </div>
                                                 <div class="footer">
                                                     <div class="form-group row" style="margin-bottom:5px;">
                                                         <div class="col-sm-12"> <label for="date"
                                                                 class="col-sm-5 col-form-label"><?php echo display('invoice_discount') ?>:</label>
                                                             <div class="col-sm-5"> <input type="text" id="invdcount"
                                                                     class="form-control text-right" name="invdcount"
                                                                     onkeyup="calculateSum(),checknum();"
                                                                     onchange="calculateSum()" placeholder="0.00" />
                                                             </div>
                                                         </div>
                                                         <div class="col-sm-12"> <label for="date"
                                                                 class="col-sm-5 col-form-label"><?php echo display('total_discount') ?>:</label>
                                                             <div class="col-sm-5"> <input type="text"
                                                                     id="total_discount_ammount"
                                                                     class="form-control text-right"
                                                                     name="total_discount" value="0.00"
                                                                     readonly="readonly" />
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="form-group row hiddenRow" style="margin-bottom:5px;"
                                                         id="taxdetails">
                                                         <?php $x = 0;
foreach ($taxes as $taxfldt) {?>

                                                         <div class="col-sm-12"> <label for="date"
                                                                 class="col-sm-5 col-form-label"><?php echo $taxfldt['tax_name'] ?>:</label>
                                                             <div class="col-sm-5"> <input
                                                                     id="total_tax_amount<?php echo $x; ?>"
                                                                     tabindex="-1"
                                                                     class="form-control text-right valid totalTax"
                                                                     name="total_tax<?php echo $x; ?>" value="0.00"
                                                                     readonly="readonly" aria-invalid="false"
                                                                     type="text">

                                                             </div>
                                                         </div>

                                                         <?php $x++;}?>

                                                     </div>
                                                     <div class="form-group row" style="margin-bottom:5px;">

                                                         <div class="col-sm-12"> <label for="date"
                                                                 class="col-sm-5 col-form-label"><?php echo display('total_tax') ?>:</label>
                                                             <div class="col-sm-5"> <input id="total_tax_amount"
                                                                     tabindex="-1" class="form-control text-right valid"
                                                                     name="total_tax" value="0.00" readonly="readonly"
                                                                     aria-invalid="false" type="text">
                                                             </div> <a class="col-sm-2 btn btn-primary taxbutton"
                                                                 href="#" data-toggle="collapse"
                                                                 data-target="#taxdetails" aria-expanded="false"
                                                                 aria-controls="taxdetails"><i
                                                                     class="fa fa-angle-double-up"></i></a>
                                                         </div>


                                                     </div>
                                                     <div class="form-group row" style="margin-bottom:5px;">
                                                         <div class="col-sm-12"> <label for="date"
                                                                 class="col-sm-5 col-form-label"><?php echo display('grand_total') ?>:</label>
                                                             <div class="col-sm-5"> <input type="text" id="grandTotal"
                                                                     class="form-control text-right"
                                                                     name="grand_total_price" value="0.00"
                                                                     readonly="readonly" />
                                                                 <input type="hidden" id="txfieldnum"
                                                                     value="<?php echo count($taxes); ?>">
                                                             </div>
                                                         </div>

                                                     </div>
                                                     <div class="form-group row" style="margin-bottom:5px;">
                                                         <div class="col-sm-12"> <label for="date"
                                                                 class="col-sm-5 col-form-label"><?php echo display('previous'); ?>:</label>
                                                             <div class="col-sm-5"> <input type="text" id="previous"
                                                                     class="form-control text-right" name="previous"
                                                                     value="0.00" readonly="readonly" /></div>
                                                         </div>

                                                     </div>

                                                     <div class="form-group row" style="margin-bottom:0px;">
                                                         <div class="col-sm-12"> <label for="date"
                                                                 class="col-sm-5 col-form-label"><?php echo display('change') ?>:</label>
                                                             <div class="col-sm-5"> <input type="text" id="change"
                                                                     class="form-control text-right" name="change"
                                                                     value="" readonly="readonly" /></div>
                                                         </div>

                                                     </div>


                                                 </div>
                                             </div>





                                         </div>
                                         <div class="fixedclasspos">
                                             <div class="paymentpart text-center"><span class="btn btn-warning "><i
                                                         class="fa fa-angle-double-down"></i></span></div>
                                             <div class="bottomarea">
                                                 <div class="row">
                                                     <div class="col-sm-6">
                                                         <div class="col-sm-12">
                                                             <input type="button" id="full_paid_tab"
                                                                 class="btn btn-warning btn-lg"
                                                                 value="<?php echo display('full_paid') ?>"
                                                                 tabindex="14" onClick="full_paid()" />
                                                             <input type="submit" id="add_invoice"
                                                                 class="btn btn-success btn-lg" name="add_invoice"
                                                                 value="Save Sale">
                                                             <a href="#" class="btn btn-info btn-lg" data-toggle="modal"
                                                                 data-target="#calculator"><i class="fa fa-calculator"
                                                                     aria-hidden="true"></i> </a>

                                                         </div>
                                                     </div>
                                                     <div class="col-sm-6 text-center">
                                                         <div class="col-sm-12">
                                                             <label for="net_total"
                                                                 class="col-sm-1 col-form-label"><?php echo display('net_total'); ?>:</label>
                                                             <div class="col-sm-3"> <input type="text" id="n_total"
                                                                     class="form-control text-right" name="n_total"
                                                                     value="0" readonly="readonly" placeholder=""
                                                                     style="height: 45px;" />
                                                                 <input type="hidden" name="baseUrl" class="baseUrl"
                                                                     value="<?php echo base_url(); ?>" id="baseurl" />
                                                             </div>
                                                             <label for="date"
                                                                 class="col-sm-1 col-form-label"><?php echo display('paid_ammount') ?>:</label>
                                                             <div class="col-sm-3"> <input type="text" id="paidAmount"
                                                                     onkeyup="invoice_paidamount();"
                                                                     class="form-control text-right" name="paid_amount"
                                                                     placeholder="0.00" tabindex="13"
                                                                     style="height: 45px;" autocomplete="off" /></div>


                                                             <label for="date"
                                                                 class="col-sm-1 col-form-label"><?php echo display('due') ?>:</label>
                                                             <div class="col-sm-3"> <input type="text" id="dueAmmount"
                                                                     class="form-control text-right" name="due_amount"
                                                                     value="0.00" readonly="readonly"
                                                                     style="height: 45px;" /></div>

                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                     </div>
                                     <?php echo form_close() ?>
                                 </div>
                             </div>
                             <div class="tab-pane fade" id="saleList">
                                 <div class="panel-body">
                                     <div class="table-responsive" id="invoic_list">
                                         <table id="dataTableExample2"
                                             class="table table-bordered table-striped table-hover">
                                             <thead>
                                                 <tr>
                                                     <th><?php echo display('sl') ?></th>
                                                     <th><?php echo display('invoice_no') ?></th>
                                                     <th><?php echo display('invoice_id') ?></th>
                                                     <th><?php echo 'Patient Name' ?></th>
                                                     <th><?php echo display('date') ?></th>
                                                     <th><?php echo display('total_amount') ?></th>
                                                     <th><?php echo display('action') ?>
                                                         <?php echo form_close() ?>
                                                     </th>
                                                 </tr>
                                             </thead>
                                             <tbody>
                                                 <?php
$total = '0.00';
$sl = 1;
if ($todays_invoice) {
    foreach ($todays_invoice as $invoices_list) {
        ?>

                                                 <tr>
                                                     <td><?php echo $sl; ?></td>
                                                     <td>
                                                         <a
                                                             href="<?php echo base_url() . 'Cinvoice/invoice_inserted_data/' . $invoices_list['invoice_id']; ?>">

                                                             <?php echo $invoices_list['invoice']; ?>
                                                         </a>
                                                     </td>
                                                     <td>
                                                         <a
                                                             href="<?php echo base_url() . 'Cinvoice/invoice_inserted_data/' . $invoices_list['invoice_id']; ?>">
                                                             <?php echo $invoices_list['invoice_id'] ?>
                                                         </a>
                                                     </td>
                                                     <td>
                                                         <a
                                                             href="<?php echo base_url() . 'Ccustomer/customerledger/' . $invoices_list['invoice_id']; ?>"><?php echo $invoices_list['customer_name'] ?></a>
                                                     </td>

                                                     <td><?php echo $invoices_list['date'] ?></td>
                                                     <td style="text-align: right;"><?php
if ($position == 0) {
            echo $currency . $invoices_list['total_amount'];
        } else {
            echo $invoices_list['total_amount'] . $currency;
        }
        $total += $invoices_list['total_amount'];?></td>
                                                     <td>
                                                         <center>
                                                             <?php echo form_open() ?>

                                                             <a href="<?php echo base_url() . 'Cinvoice/invoice_inserted_data/' . $invoices_list['invoice_id']; ?>"
                                                                 class="btn btn-success btn-sm" data-toggle="tooltip"
                                                                 data-placement="left"
                                                                 title="<?php echo display('invoice') ?>"><i
                                                                     class="fa fa-window-restore"
                                                                     aria-hidden="true"></i></a>

                                                             <a href="<?php echo base_url() . 'Cinvoice/pos_invoice_inserted_data/' . $invoices_list['invoice_id']; ?>"
                                                                 class="btn btn-warning btn-sm" data-toggle="tooltip"
                                                                 data-placement="left"
                                                                 title="<?php echo display('pos_invoice') ?>"><i
                                                                     class="fa fa-fax" aria-hidden="true"></i></a>
                                                             <?php if ($this->permission1->method('manage_invoice', 'update')->access()) {?>

                                                             <a href="<?php echo base_url() . 'Cinvoice/invoice_update_form/' . $invoices_list['invoice_id']; ?>"
                                                                 class="btn btn-info btn-sm" data-toggle="tooltip"
                                                                 data-placement="left"
                                                                 title="<?php echo display('update') ?>"><i
                                                                     class="fa fa-pencil" aria-hidden="true"></i></a>
                                                             <?php }?>
                                                             <?php if ($this->permission1->method('manage_invoice', 'delete')->access()) {?>
                                                             <a href="" class="deleteInvoice btn btn-danger btn-sm"
                                                                 name="<?php echo $invoices_list['invoice_id'] ?>"
                                                                 data-toggle="tooltip" data-placement="right" title=""
                                                                 data-original-title="<?php echo display('delete') ?> "><i
                                                                     class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                             <?php }?>
                                                             <?php echo form_close() ?>
                                                         </center>
                                                     </td>
                                                 </tr>

                                                 <?php
$sl++;}
}
?>
                                             </tbody>

                                         </table>

                                     </div>

                                 </div>

                             </div>


                         </div>





                     </div>

                 </div>
             </div>
         </div>

         <div class="modal fade modal-success" id="cust_info" role="dialog">
             <div class="modal-dialog" role="document">
                 <div class="modal-content">
                     <div class="modal-header">

                         <a href="#" class="close" data-dismiss="modal">&times;</a>
                         <h3 class="modal-title">Add Customer</h3>
                     </div>

                     <div class="modal-body">
                         <div id="customeMessage" class="alert hide"></div>
                         <?php echo form_open('Cinvoice/instant_customer', array('class' => 'form-vertical', 'id' => 'newcustomer')) ?>
                         <div class="panel-body">

                             <div class="form-group row">
                                 <label for="customer_name" class="col-sm-3 col-form-label"><?php echo 'Patient Name' ?>
                                     <i class="text-danger">*</i></label>
                                 <div class="col-sm-6">
                                     <input class="form-control" name="customer_name" id="" type="text"
                                         placeholder="<?php echo 'Patient Name' ?>" required="" tabindex="1">
                                 </div>
                             </div>

                             <div class="form-group row">
                                 <label for="email"
                                     class="col-sm-3 col-form-label"><?php echo 'Patient Email' ?></label>
                                 <div class="col-sm-6">
                                     <input class="form-control" name="email" id="email" type="email"
                                         placeholder="<?php echo 'Patient Email' ?>" tabindex="2">
                                 </div>
                             </div>

                             <div class="form-group row">
                                 <label for="mobile"
                                     class="col-sm-3 col-form-label"><?php echo 'Patient Mobile' ?></label>
                                 <div class="col-sm-6">
                                     <input class="form-control" name="mobile" id="mobile" type="text"
                                         placeholder="<?php echo 'Patient Mobile' ?>" min="0" tabindex="3">
                                 </div>
                             </div>

                             <div class="form-group row">
                                 <label for="address "
                                     class="col-sm-3 col-form-label"><?php echo 'Patient Address' ?></label>
                                 <div class="col-sm-6">
                                     <textarea class="form-control" name="address" id="address " rows="3"
                                         placeholder="<?php echo 'Patient Address' ?>" tabindex="4"></textarea>
                                 </div>
                             </div>

                             <div class="form-group row">
                                 <label for="previous_balance"
                                     class="col-sm-3 col-form-label"><?php echo display('previous_balance') ?></label>
                                 <div class="col-sm-6">
                                     <input class="form-control" name="previous_balance" id="previous_balance"
                                         type="text" placeholder="<?php echo display('previous_balance') ?>"
                                         tabindex="5">
                                 </div>
                             </div>


                         </div>

                     </div>

                     <div class="modal-footer">

                         <a href="#" class="btn btn-danger" data-dismiss="modal">Close</a>

                         <input type="submit" class="btn btn-success" value="Submit">
                     </div>
                     <?php echo form_close() ?>
                 </div><!-- /.modal-content -->
             </div><!-- /.modal-dialog -->
         </div><!-- /.modal -->
         <!-- calculator modal -->
         <div class="modal fade-scale" id="calculator" role="dialog">
             <div class="modal-dialog" id="calculatorcontent" style="width: 300px;">

                 <!-- Modal content-->
                 <div class="modal-content">
                     <div class="modal-body">
                         <div class="calcontainer">
                             <div class="screen">
                                 <h1 id="mainScreen">0</h1>
                             </div>
                             <table>
                                 <tr>
                                     <td><button value="7" id="7" onclick="InputSymbol(7)">7</button></td>
                                     <td><button value="8" id="8" onclick="InputSymbol(8)">8</button></td>
                                     <td><button value="9" id="9" onclick="InputSymbol(9)">9</button></td>
                                     <td><button onclick="DeleteLastSymbol()"><i class="fa fa-arrow-left"></i></button>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td><button value="4" id="4" onclick="InputSymbol(4)">4</button></td>
                                     <td><button value="5" id="5" onclick="InputSymbol(5)">5</button></td>
                                     <td><button value="6" id="6" onclick="InputSymbol(6)">6</button></td>
                                     <td><button value="/" id="104" onclick="InputSymbol(104)">/</button></td>
                                 </tr>
                                 <tr>
                                     <td><button value="1" id="1" onclick="InputSymbol(1)">1</button></td>
                                     <td><button value="2" id="2" onclick="InputSymbol(2)">2</button></td>
                                     <td><button value="3" id="3" onclick="InputSymbol(3)">3</button></td>
                                     <td><button value="*" id="103" onclick="InputSymbol(103)">*</button></td>
                                 </tr>
                                 <tr>
                                     <td><button value="0" id="0" onclick="InputSymbol(0)">0</button></td>
                                     <td><button value="." id="128" onclick="InputSymbol(128)">.</button></td>
                                     <td><button value="-" id="102" onclick="InputSymbol(102)">-</button></td>
                                     <td><button value="+" id="101" onclick="InputSymbol(101)">+</button></td>
                                 </tr>
                                 <tr>
                                     <td colspan="2"><button onclick="ClearScreen()">C</button></td>
                                     <td colspan="1"><button onclick="CalculateTotal()">=</button></td>
                                     <td colspan="1"><button data-dismiss="modal" class="btn-danger"><i
                                                 class="fa fa-power-off"></i></button></td>
                                 </tr>
                             </table>
                         </div>
                     </div>

                 </div>

             </div>
         </div>


         <div id="detailsmodal" class="modal fade" role="dialog">
             <div class="modal-dialog modal-md">
                 <div class="modal-content">
                     <div class="modal-header" style="background-color:green;color:white">
                         <a href="#" class="close" data-dismiss="modal">&times;</a>
                         <strong>
                             <center> <?php echo display('product_details') ?></center>
                         </strong>
                     </div>
                     <div class="modal-body">

                         <div class="row">
                             <div class="col-sm-12 col-md-12">
                                 <div class="panel panel-bd">

                                     <div class="panel-body">
                                         <span id="modalimg"></span><br>
                                         <h4><?php echo display('product_name') ?> :<span id="modal_productname"></span>
                                         </h4>
                                         <h4><?php echo display('product_model') ?> :<span
                                                 id="modal_productmodel"></span></h4>
                                         <h4><?php echo display('price') ?> :<span id="modal_productprice"></span></h4>
                                         <h4><?php echo display('unit') ?> :<span id="modal_productunit"></span></h4>
                                         <h4><?php echo display('stock') ?> :<span id="modal_productstock"></span></h4>



                                     </div>
                                 </div>
                             </div>
                         </div>

                     </div>

                 </div>
                 <div class="modal-footer">

                 </div>

             </div>

         </div>


         <div class="modal fade" id="printconfirmodal" tabindex="-1" role="dialog" aria-labelledby="printconfirmodal"
             aria-hidden="true">
             <div class="modal-dialog modal-sm">
                 <div class="modal-content">
                     <div class="modal-header">
                         <a href="" class="close" data-dismiss="modal" aria-hidden="true">&times;</a>
                         <h4 class="modal-title" id="myModalLabel">Print</h4>
                     </div>
                     <div class="modal-body">
                         <?php echo form_open('Cinvoice/pos_invoice_inserted_data_manual', array('class' => 'form-vertical', 'id' => '', 'name' => '')) ?>
                         <div id="outputs" class="hide alert alert-danger"></div>
                         <h3> Successfully Inserted </h3>
                         <h4>Do You Want to Print ??</h4>
                         <input type="hidden" name="invoice_id" id="inv_id">
                         <input type="hidden" name="url" value="<?php echo base_url('Cinvoice/gui_pos'); ?>">
                     </div>
                     <div class="modal-footer">
                         <input type="button" name="" onclick="cancelprint()" class="btn btn-default"
                             data-dismiss="modal" value="No">
                         <input type="submit" name="" class="btn btn-primary" id="yes" value="Yes">
                         <?php echo form_close() ?>
                     </div>
                 </div>
             </div>
         </div>
     </section>
 </div>
 <script type="text/javascript">
$(document).ready(function() {

    $('#full_paid_tab').keydown(function(event) {
        if (event.keyCode == 13) {
            $('#add_invoice').trigger('click');
        }
    });
});
 </script>
 <!-- =========================  ajax form submit and print preview =================== -->
 <script type="text/javascript">
$(document).ready(function() {

    var frm = $("#gui_sale_insert");
    var output = $("#output");
    frm.on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            dataType: 'json',
            data: frm.serialize(),
            success: function(data) {
                if (data.status == true) {
                    output.empty().html(data.message).addClass('alert-success').removeClass(
                        'alert-danger').removeClass('hide');
                    $("#inv_id").val(data.invoice_id);
                    $('#printconfirmodal').modal('show');
                    if (data.status == true && event.keyCode == 13) {
                        //$('#yes').trigger('click');
                    }
                    //$('#printconfirmodal').html(data.payment);
                } else {
                    output.empty().html(data.exception).addClass('alert-danger')
                        .removeClass('alert-success').removeClass('hide');
                }
            },
            error: function(xhr) {
                alert('failed!');
            }
        });
    });
});

$("#printconfirmodal").on('keydown', function(e) {
    var key = e.which || e.keyCode;
    if (key == 13) {
        $('#yes').trigger('click');
    }
});
 </script>
 <!-- POS Invoice Report End -->
 <script type="text/javascript">
function customer_due(id) {
    $.ajax({
        url: '<?php echo base_url('Cinvoice/previous') ?>',
        type: 'post',
        data: {
            customer_id: id
        },
        success: function(msg) {
            $("#previous").val(msg);
        },
        error: function(xhr, desc, err) {
            alert('failed');
        }
    });
}



function product_stock(sl) {

    var batch_id = $('#batch_id_' + sl).val();
    var dataString = 'batch_id=' + batch_id;
    var base_url = $('.baseUrl').val();
    var available_quantity = 'available_quantity_' + sl;
    var product_rate = 'product_rate_' + sl;
    var expire_date = 'expire_date_' + sl;
    $.ajax({
        type: "POST",
        url: base_url + "Cinvoice/retrieve_product_batchid",
        data: {
            'batch_id': batch_id,
        },
        cache: false,
        success: function(data) {
            obj = JSON.parse(data);


            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1; //January is 0!
            var yyyy = today.getFullYear();

            if (dd < 10) {
                dd = '0' + dd;
            }
            if (mm < 10) {
                mm = '0' + mm;
            }
            var today = yyyy + '-' + mm + '-' + dd;

            aj = new Date(today);
            exp = new Date(obj.expire_date);

            // alert(today);

            if (aj >= exp) {

                alert('<?php echo display('date_expired_please_choose_another') ?>');
                // $('#batch_id_'+sl)[0].selectedIndex = 0;


                $('#' + expire_date).html('<p style="color:red;align:center">' + obj.expire_date + '</p>');
                document.getElementById('expire_date_' + sl).innerHTML = '';


            } else {
                $('#' + expire_date).html('<p style="color:green;align:center">' + obj.expire_date +
                    '</p>');

            }
            $('#' + available_quantity).val(obj.total_product);
            quantity_calculate(sl);

        }
    });

    $(this).unbind("change");
    return false;



}

function checkqty(sl) {

    var quant = $("#total_qntt_" + sl).val();
    var price = $("#price_item_" + sl).val();
    var dis = $("#discount_" + sl).val();
    if (isNaN(quant)) {
        alert("<?php echo display('must_input_numbers') ?>");
        document.getElementById("total_qntt_" + sl).value = '';
        //$("#quantity_"+sl).val() = '';
        return false;
    }
    if (isNaN(price)) {
        alert("<?php echo display('must_input_numbers') ?>");
        document.getElementById("price_item_" + sl).value = '';
        return false;
    }
    if (isNaN(dis)) {
        alert("<?php echo display('must_input_numbers') ?>");
        document.getElementById("discount_" + sl).value = '';
        return false;
    }
}
 </script>
 <script type="text/javascript">
//Onload filed select
window.onload = function() {
    var text_input = document.getElementById('add_item');
    text_input.focus();
    text_input.select();

    $('body').addClass("sidebar-mini sidebar-collapse");
}
var barcodeScannerTimer;
var barcodeString = '';
$('#add_item_m').keydown(function(e) {
    if (e.keyCode == 13) {
        var product_id = $(this).val();
        var product_id = $(this).val();
        var exist = $("#SchoolHiddenId_" + product_id).val();
        var qty = $("#total_qntt_" + product_id).val();
        var add_qty = parseInt(qty) + 1;
        if (product_id == exist) {
            $("#total_qntt_" + product_id).val(add_qty);
            quantity_calculate(product_id);
            calculateSum();
            invoice_paidamount();
            document.getElementById('add_item_m').value = '';
            document.getElementById('add_item_m').focus();
        } else {
            $.ajax({
                type: "post",
                async: false,
                url: '<?php echo base_url('Cinvoice/gui_pos_invoice') ?>',
                data: {
                    product_id: product_id
                },
                success: function(data) {
                    if (data == false) {
                        alert('This Product Not Found !');
                        document.getElementById('add_item_m').value = '';
                        document.getElementById('add_item_m').focus();
                        quantity_calculate(product_id);
                        calculateSum();
                        invoice_paidamount();
                    } else {
                        $("#hidden_tr").css("display", "none");
                        document.getElementById('add_item_m').value = '';
                        document.getElementById('add_item_m').focus();
                        $('#normalinvoice tbody').append(data);
                        //quantity_calculate(product_id);
                        calculateSum();
                        invoice_paidamount();
                    }
                },
                error: function() {
                    alert('Request Failed, Please check your code and try again!');
                }
            });
        }
    }
});


// capture barcode scanner input
$('#add_item').on('keypress', function(e) {
    barcodeString = barcodeString + String.fromCharCode(e.charCode);

    clearTimeout(barcodeScannerTimer);
    barcodeScannerTimer = setTimeout(function() {
        processBarcode();
    }, 300);
});

function processBarcode() {

    if (barcodeString != '') {
        var product_id = barcodeString;
        var exist = $("#SchoolHiddenId_" + product_id).val();
        var qty = $("#total_qntt_" + product_id).val();
        var add_qty = parseInt(qty) + 1;
        if (product_id == exist) {
            $("#total_qntt_" + product_id).val(add_qty);
            quantity_calculate(product_id);
            calculateSum();
            invoice_paidamount();
            document.getElementById('add_item').value = '';
            document.getElementById('add_item').focus();
        } else {
            $.ajax({
                type: "post",
                async: false,
                url: '<?php echo base_url('Cinvoice/gui_pos_invoice') ?>',
                data: {
                    product_id: product_id
                },
                success: function(data) {
                    if (data == false) {
                        alert('This Product Not Found !');
                        document.getElementById('add_item').value = '';
                        document.getElementById('add_item').focus();
                        quantity_calculate();
                        calculateSum(barcodeString);
                        invoice_paidamount();
                    } else {
                        $("#hidden_tr").css("display", "none");
                        document.getElementById('add_item').value = '';
                        document.getElementById('add_item').focus();
                        $('#normalinvoice tbody').append(data);
                        calculateSum();
                        invoice_paidamount();
                    }
                },
                error: function() {
                    alert('Request Failed, Please check your code and try again!');
                }
            });
        }
    } else {
        alert('barcode is invalid: ' + barcodeString);
    }

    barcodeString = ''; // reset
}

function onselectimage(id) {
    var product_id = id;
    var exist = $("#SchoolHiddenId_" + product_id).val();
    var qty = $("#total_qntt_" + product_id).val();
    var add_qty = parseInt(qty) + 1;
    if (product_id == exist) {
        $("#total_qntt_" + product_id).val(add_qty);
        quantity_calculate(product_id);
        calculateSum();
        invoice_paidamount();
        document.getElementById('add_item').value = '';
        document.getElementById('add_item').focus();
    } else {
        $.ajax({
            type: "post",
            async: false,
            url: '<?php echo base_url('Cinvoice/gui_pos_invoice') ?>',
            data: {
                product_id: product_id
            },
            success: function(data) {
                if (data == false) {
                    alert('This Product Not Found !');
                    document.getElementById('add_item').value = '';
                    document.getElementById('add_item').focus();
                    quantity_calculate(product_id);
                    calculateSum();
                    invoice_paidamount();
                } else {
                    $("#hidden_tr").css("display", "none");
                    document.getElementById('add_item').value = '';
                    document.getElementById('add_item').focus();
                    $('#normalinvoice tbody').append(data);
                    //quantity_calculate(product_id);
                    calculateSum();
                    invoice_paidamount();
                }
            },
            error: function() {
                alert('Request Failed, Please check your code and try again!');
            }
        });
    }


}





$('body').on('keyup', '#product_name', function() {
    var product_name = $(this).val();
    var category_id = $('#category_id').val();
    var myurl = $('#posurl').val();
    $.ajax({
        type: "post",
        async: false,
        url: myurl,
        data: {
            product_name: product_name,
            category_id: category_id
        },
        success: function(data) {
            if (data == '420') {
                $("#product_search").html('<h1 class"srcalrt">Product not found !</h1>');
            } else {
                $("#product_search").html(data);
            }
        },
        error: function() {
            alert('Request Failed, Please check your code and try again!');
        }
    });
});

$('body').on('change', '#category_id', function() {
    var product_name = $('#product_name').val();
    var category_id = $('#category_id').val();
    var myurl = $('#posurl').val();
    $.ajax({
        type: "post",
        async: false,
        url: myurl,
        data: {
            product_name: product_name,
            category_id: category_id
        },
        success: function(data) {
            if (data == '420') {
                $("#product_search").html('<h1 class"srcalrt">Product not found !</h1>');
            } else {
                $("#product_search").html(data);
            }
        },
        error: function() {
            alert('Request Failed, Please check your code and try again!');
        }
    });
});

$('body').on('click', '#search_button', function() {
    var product_name = $('#product_name').val();
    var category_id = $('#category_id').val();
    var myurl = $('#posurl').val();
    $.ajax({
        type: "post",
        async: false,
        url: myurl,
        data: {
            product_name: product_name,
            category_id: category_id
        },
        success: function(data) {
            if (data == '420') {
                $("#product_search").html(
                    '<h1 class"srcalrt text-center">Product not found !</h1>');
            } else {
                $("#product_search").html(data);
            }
        },
        error: function() {
            alert('Request Failed, Please check your code and try again!');
        }
    });
});
 </script>
 <script type="text/javascript">
function cancelprint() {
    location.reload();
}

function customer_autocomplete(sl) {

    var customer_id = $('#customer_id').val();
    // Auto complete
    var options = {
        minLength: 0,
        source: function(request, response) {
            var customer_name = $('#customer_name').val();

            $.ajax({
                url: "<?php echo base_url('Cinvoice/customer_autocomplete') ?>",
                method: 'post',
                dataType: "json",
                data: {
                    term: request.term,
                    customer_id: customer_name,
                },
                success: function(data) {
                    // alert(data);
                    response(data);

                }
            });
        },
        focus: function(event, ui) {
            $(this).val(ui.item.label);
            return false;
        },
        select: function(event, ui) {
            $(this).parent().parent().find("#autocomplete_customer_id").val(ui.item.value);
            var customer_id = ui.item.value;
            customer_due(customer_id);

            $(this).unbind("change");
            return false;
        }
    }

    $('body').on('keydown.autocomplete', '#customer_name', function() {
        $(this).autocomplete(options);
    });

}



function detailsmodal(productname, stock, model, unit, price, image) {
    $("#detailsmodal").modal('show');
    var base_url = document.getElementById("baseurl").value;
    document.getElementById("modal_productname").innerHTML = productname;
    document.getElementById("modal_productstock").innerHTML = stock;
    document.getElementById("modal_productmodel").innerHTML = model;
    document.getElementById("modal_productunit").innerHTML = unit;
    document.getElementById("modal_productprice").innerHTML = price;
    // document.getElementById("modalimg").src = base_url+ image;
    document.getElementById("modalimg").innerHTML = '<img src="' + image +
        '" alt="image" style="width:100px; height:60px;" />';
}



$(".paymentpart").click(function() {

    $header = $(this);
    //getting the next element
    $content = $header.next();
    //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
    $content.slideToggle(500, function() {
        //execute this after slideToggle is done
        //change text of header based on visibility of content div
        $header.html(function() {
            //change text based on condition
            return $content.is(":visible") ?
                "<span  class='btn btn-warning'><i class='fa fa-angle-double-down'></i></span>" :
                "<span  class='btn btn-warning'><i class='fa fa-angle-double-up'></i></span>";
        });
    });

});

$(document).ready(function() {
    $("#newcustomer").submit(function(e) {
        e.preventDefault();
        var customeMessage = $("#customeMessage");
        var customer_id = $("#autocomplete_customer_id");
        var customer_name = $("#customer_name");
        $.ajax({
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            dataType: 'json',
            data: $(this).serialize(),
            beforeSend: function() {
                customeMessage.removeClass('hide');

            },
            success: function(data) {
                if (data.status == true) {
                    customeMessage.addClass('alert-success').removeClass('alert-danger')
                        .html(data.message);
                    customer_id.val(data.customer_id);
                    customer_name.val(data.customer_name);
                    $("#cust_info").modal('hide');
                } else {
                    customeMessage.addClass('alert-danger').removeClass('alert-success')
                        .html(data.exception);
                }
            },
            error: function(xhr) {
                alert('failed!');
            }

        });

    });
});
 </script>
 <script type="text/javascript">
$(document).on('click', '.taxbutton', function(e) {
    var $this = $(this);
    var icon = $this.find('i');
    if (icon.hasClass('fa fa-angle-double-up')) {
        $this.find('i').removeClass('fa fa-angle-double-up').addClass('fa fa-angle-double-down');
    } else {
        $this.find('i').removeClass('fa fa-angle-double-down').addClass('fa fa-angle-double-up');
    }
});
 </script>
 <!-- //calculator  script -->
 <script type="text/javascript">
var number = "",
    total = 0,
    regexp = /[0-9]/,
    mainScreen = document.getElementById("mainScreen");

function InputSymbol(num) {
    var cur = document.getElementById(num).value;
    var prev = number.slice(-1);
    // Do not allow 2 math operators in row
    if (!regexp.test(prev) && !regexp.test(cur)) {
        console.log("Two math operators not allowed after each other ;)");
        return;
    }
    number = number.concat(cur);
    mainScreen.innerHTML = number;
}

function CalculateTotal() {
    // Time for some EVAL magic
    total = (Math.round(eval(number) * 100) / 100);
    mainScreen.innerHTML = total;
}

function DeleteLastSymbol() {
    if (number) {
        number = number.slice(0, -1);
        mainScreen.innerHTML = number;
    }
    if (number.length === 0) {
        mainScreen.innerHTML = "0";
    }
}

function ClearScreen() {
    number = "";
    mainScreen.innerHTML = 0;
}
 </script>