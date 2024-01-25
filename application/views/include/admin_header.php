<?php
$CI = &get_instance();
$CI->load->model('Web_settings');
$CI->load->model('Reports');
// $CI->Reports->insert_batch();
$CI->load->model('Users');
$CI->load->model('Invoices');

$Web_settings = $CI->Web_settings->retrieve_setting_editdata();
$users = $CI->Users->profile_edit_data();
$expiring_soon = $CI->Reports->expiring_soon_count();
$out_of_stock = $CI->Reports->out_of_stock_count();
$low_stock = $CI->Reports->low_stock_count();
$out_of_date = $CI->Reports->out_of_date_count();
$company_info = $CI->Invoices->retrieve_company();
?>
<!-- Admin header end -->
<style type="text/css">
.navbar .btn-success {
    margin: 13px 2px;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
</style>
<header class="main-header">
    <a href="<?php echo base_url() ?>" class="logo">
        <!-- Logo -->
        <h2 class="logo-mini">
            <!--<b>A</b>BD-->
            <?php echo strtoupper('sm'); ?>
        </h2>
        <h3 class="logo-lg">
            <?php echo strtoupper($company_info[0]['company_name']) ?>
        </h3>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top text-center">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <!-- Sidebar toggle button-->
            <span class="sr-only"><?php echo display('toggle_navigation') ?></span>

            <span class="pe-7s-keypad"></span>
        </a>

        <?php
$urcolp = '0';
if ($this->uri->segment(2) == "gui_pos") {
    $urcolp = "gui_pos";
}
if ($this->uri->segment(2) == "pos_invoice") {
    $urcolp = "pos_invoice";
}

if ($this->uri->segment(2) != $urcolp) {
    if ($this->permission1->method('new_invoice', 'create')->access()) {?>
        <a href="<?php echo base_url('Cinvoice') ?>" class="btn btn-success btn-outline" style=""><i
                class="fa fa-balance-scale"></i> <?php echo display('invoice') ?></a>
        <?php }?>

        <?php
if ($this->permission1->method('customer_receive', 'create')->access()) {?>
        <a href="<?php echo base_url('accounts/customer_receive') ?>" class="btn btn-success btn-outline" style=""><i
                class="fa fa-money"></i> <?php echo 'Patient Receive' ?></a>
        <?php }?>

        <?php
if ($this->permission1->method('manufacturer_payment', 'create')->access()) {?>
        <a href="<?php echo base_url('accounts/manufacturer_payment') ?>" class="btn btn-success btn-outline"
            style=""><i class="fa fa-paypal" aria-hidden="true"></i> <?php echo display('manufacturer_payment') ?></a>
        <?php }?>



        <?php
if ($this->permission1->method('add_purchase', 'create')->access()) {?>
        <a href="<?php echo base_url('Cpurchase') ?>" class="btn btn-success btn-outline" style=""><i
                class="ti-shopping-cart"></i> <?php echo display('purchase') ?></a>
        <?php }
}?>
        <style>
        .rounded-circle {
            border-radius: 50% !important;
        }

        .custom-badge {
            position: relative !important;
        }

        .custom-badge span {
            position: absolute !important;
            top: -10px !important;
            right: -10px !important;
            border: 2px solid #fff !important;
            font-ssidebar-toggleize: 11px;
            line-height: 8px;
            padding: 5px 6px;
            border-radius: 50em;
        }
        </style>
        <a href="<?php echo base_url('Creport/expiring_soon') ?>" class="btn btn-success btn-outline custom-badge">
            Expiring in <?php echo MEDICINE_EXPIRING_ALERT_TIME; ?> <span
                class="label label-danger"><?php echo $expiring_soon ?></span>
        </a>
        <a href="<?php echo base_url('Creport/out_of_date') ?>" class="btn btn-success btn-outline custom-badge">
            Out of date <span class="label label-danger"><?php echo $out_of_date ?></span>
        </a>
        <a href="<?php echo base_url('Creport/out_of_stock') ?>" class="btn btn-success btn-outline custom-badge">
            Out of stock <span class="label label-danger"><?php echo $out_of_stock ?></span>
        </a>
        <a href="<?php echo base_url('Creport/low_stock') ?>" class="btn btn-success btn-outline custom-badge">
            Low stock <span class="label label-danger"><?php echo $low_stock ?></span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- <li class="dropdown notifications-menu" title="Expiring in <?php echo MEDICINE_EXPIRING_ALERT_TIME; ?>"
                    data-placement="bottom" data-toggle="tooltip">
                    <a href="<?php echo base_url('Creport/expiring_soon') ?>">
                        <i class="fa fa-clock-o"></i>
                        <span class="label label-danger"><?php echo $expiring_soon ?></span>
                    </a>
                </li>
                <li class="dropdown notifications-menu" title="Out of date" data-placement="bottom"
                    data-toggle="tooltip">
                    <a href="<?php echo base_url('Creport/out_of_date') ?>">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-danger"><?php echo $out_of_date ?></span>
                    </a>
                </li>
                <li class="dropdown notifications-menu" title="Out of stock" data-placement="bottom"
                    data-toggle="tooltip">
                    <a href="<?php echo base_url('Creport/out_of_stock') ?>">
                        <i class="pe-7s-attention" title="<?php echo display('out_of_stock') ?>"></i>
                        <span class="label label-danger"><?php echo $out_of_stock ?></span>
                    </a>
                </li> -->
                <!-- settings -->
                <li class="dropdown dropdown-user" title="Settings" data-placement="bottom" data-toggle="tooltip">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="pe-7s-settings"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('Admin_dashboard/edit_profile') ?>"><i
                                    class="pe-7s-users"></i><?php echo display('user_profile') ?></a></li>
                        <li><a href="<?php echo base_url('Admin_dashboard/change_password_form') ?>"><i
                                    class="pe-7s-settings"></i><?php echo display('change_password') ?></a></li>
                        <li><a href="<?php echo base_url('Admin_dashboard/logout') ?>"><i
                                    class="pe-7s-key"></i><?php echo display('logout') ?></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

<aside class="main-sidebar">
    <!-- sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel text-center">
            <!-- <div class="image">
                <img src="<?php echo $users[0]['logo'] ?: base_url("my-assets/image/user.jpg") ?>"
                    onerror="this.src='<?php echo base_url("my-assets/image/user.jpg"); ?>'" class="img-circle"
                    alt="User Image">
            </div>
            <div class="info">
                <p><?php echo $this->session->userdata('user_name') ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> <?php echo display('online') ?></a>
            </div> -->
        </div>
        <!-- sidebar menu -->
        <ul class="sidebar-menu">

            <li class="<?php if ($this->uri->segment('1') == ("")) {
    echo "active";
} else {
    echo " ";
}?>">
                <a href="<?php echo base_url() ?>"><i class="ti-dashboard"></i>
                    <span><?php echo display('dashboard') ?></span>
                    <span class="pull-right-container">
                        <span class="label label-success pull-right"></span>
                    </span>
                </a>
            </li>


            <?php
if ($this->permission1->module('new_invoice')->access() || $this->permission1->module('manage_invoice')->access() || $this->permission1->module('pos_invoice')->access() || $this->permission1->module('gui_pos')->access()) {?>
            <li class="treeview <?php if ($this->uri->segment('1') == ("Cinvoice")) {
    echo "active";
} else {
    echo " ";
}?>">
                <a href="#">
                    <i class="fa fa-balance-scale"></i><span><?php echo display('invoice') ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <?php
if ($this->permission1->method('new_invoice', 'create')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("Cinvoice") && $this->uri->segment('2') == ("")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Cinvoice') ?>"><?php echo display('new_invoice') ?></a></li>
                    <?php }?>

                    <?php
if ($this->permission1->method('manage_invoice', 'read')->access() || $this->permission1->method('manage_invoice', 'update')->access() || $this->permission1->method('manage_invoice', 'delete')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("manage_invoice")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Cinvoice/manage_invoice') ?>"><?php echo display('manage_invoice') ?></a>
                    </li>
                    <?php }?>

                    <?php
if ($this->permission1->method('pos_invoice', 'create')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("pos_invoice")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Cinvoice/pos_invoice') ?>"><?php echo display('pos_invoice') ?></a>
                    </li>
                    <?php }?>
                    <?php
if ($this->permission1->method('gui_pos', 'create')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("gui_pos")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Cinvoice/gui_pos') ?>"><?php echo display('gui_pos') ?></a></li>
                    <?php }?>
                </ul>
            </li>
            <?php }?>

            <!-- Invoice menu end -->

            <!-- Doctor menu start -->
            <?php
if ($this->permission1->module('add_doctor')->access() || $this->permission1->module('manage_doctor')->access() || $this->permission1->module('credit_doctor')->access() || $this->permission1->module('paid_doctor')->access()) {?>
            <li class="treeview <?php if ($this->uri->segment('1') == ("Cdoctor")) {
    echo "active";
} else {
    echo " ";
}?>">
                <a href="#">
                    <i class="fa fa-heartbeat"></i><span><?php echo 'Doctor' ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <?php
if ($this->permission1->method('add_doctor', 'create')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("Cdoctor") && $this->uri->segment('2') == ("")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Cdoctor') ?>"><?php echo 'Add Doctor' ?></a></li>
                    <?php }?>

                    <?php
if ($this->permission1->method('manage_doctor', 'read')->access() || $this->permission1->method('manage_doctor', 'update')->access() || $this->permission1->method('manage_doctor', 'delete')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("manage_doctor")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Cdoctor/manage_doctor') ?>"><?php echo 'Manage Doctor' ?></a>
                    </li>
                    <?php }?>
                </ul>
            </li>
            <?php }?>
            <!-- Doctor menu end -->


            <!-- Customer menu start -->
            <?php
if ($this->permission1->module('add_customer')->access() || $this->permission1->module('manage_customer')->access() || $this->permission1->module('credit_customer')->access() || $this->permission1->module('paid_customer')->access()) {?>
            <li class="treeview <?php if ($this->uri->segment('1') == ("Ccustomer")) {
    echo "active";
} else {
    echo " ";
}?>">
                <a href="#">
                    <i class="fa fa-handshake-o"></i><span><?php echo 'Patient' ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <?php
if ($this->permission1->method('add_customer', 'create')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("Ccustomer") && $this->uri->segment('2') == ("")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Ccustomer') ?>"><?php echo 'Add Patient' ?></a></li>
                    <?php }?>

                    <?php
if ($this->permission1->method('manage_customer', 'read')->access() || $this->permission1->method('manage_customer', 'update')->access() || $this->permission1->method('manage_customer', 'delete')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("manage_customer")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Ccustomer/manage_customer') ?>"><?php echo 'Manage Patient' ?></a>
                    </li>
                    <?php }?>

                    <?php
if ($this->permission1->method('credit_customer', 'read')->access() || $this->permission1->method('credit_customer', 'update')->access() || $this->permission1->method('credit_customer', 'delete')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("credit_customer")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Ccustomer/credit_customer') ?>"><?php echo 'Credit Patient' ?></a>
                    </li>
                    <?php }?>

                    <?php
if ($this->permission1->method('paid_customer', 'read')->access() || $this->permission1->method('paid_customer', 'update')->access() || $this->permission1->method('paid_customer', 'delete')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("paid_customer")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Ccustomer/paid_customer') ?>"><?php echo 'Paid Patient' ?></a>
                    </li>
                    <?php }?>

                </ul>
            </li>
            <?php }?>
            <!-- Customer menu end -->

            <!-- Product menu start -->
            <?php
if ($this->permission1->module('medicine_type')->access() || $this->permission1->module('add_medicine')->access() || $this->permission1->module('import_medicine_csv')->access() || $this->permission1->module('manage_medicine')->access() || $this->uri->segment('1') == ("Ccategory") || $this->permission1->module('add_category')->access()) {?>
            <li class="treeview <?php if ($this->uri->segment('1') == "Cproduct" || $this->uri->segment('1') == ("Ccategory")) {
    echo "active";
} else {
    echo " ";
}?>">
                <a href="#">
                    <i class="ti-bag"></i><span><?php echo display('product') ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <!-- Category menu start -->


                    <?php
if ($this->permission1->method('add_category', 'create')->access() || $this->permission1->method('add_category', 'read')->access() || $this->permission1->method('add_category', 'update')->access() || $this->permission1->method('add_category', 'delete')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("Ccategory")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Ccategory') ?>"><?php echo display('category') ?></a></li>
                    <?php }?>

                    <!-- Category menu end -->
                    <?php
if ($this->permission1->method('medicine_type', 'create')->access() || $this->permission1->method('medicine_type', 'read')->access() || $this->permission1->method('medicine_type', 'update')->access() || $this->permission1->method('medicine_type', 'delete')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("typeindex")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Cproduct/typeindex') ?>"><?php echo display('product_type') ?></a>
                    </li>
                    <?php }?>

                    <?php
if ($this->permission1->module('add_unit')->access() || $this->permission1->module('unit_list')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("unit_form") || $this->uri->segment('2') == ("unit_list")) {
    echo "active";
} else {
    echo " ";
}?>">
                        <a href="#">
                            <i class="fa fa-universal-access"></i><span><?php echo display('unit') ?></span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="treeview <?php if ($this->uri->segment('1') == ("Cproduct") && $this->uri->segment('2') == ("unit_form")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Cproduct/unit_form') ?>"><?php echo display('add_unit') ?></a>
                            </li>

                            <li class="treeview <?php if ($this->uri->segment('1') == ("Cproduct") && $this->uri->segment('2') == ("unit_list")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Cproduct/unit_list') ?>"><?php echo display('unit_list') ?></a>
                            </li>
                        </ul>
                    </li>
                    <?php }?>

                    <?php
if ($this->permission1->method('add_medicine', 'create')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("Cproduct") && $this->uri->segment('2') == ("")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Cproduct') ?>"><?php echo display('add_product') ?></a></li>
                    <?php }?>

                    <?php /*
if ($this->permission1->method('import_medicine_csv', 'create')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("add_product_csv")) {
echo "active";
} else {
echo " ";
}?>"><a href="<?php echo base_url('Cproduct/add_product_csv') ?>"><?php echo display('import_product_csv') ?></a>
                    </li>
                    <?php } */?>


                    <?php
if ($this->permission1->method('manage_medicine', 'read')->access() || $this->permission1->method('manage_medicine', 'update')->access() || $this->permission1->method('manage_medicine', 'delete')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("manage_product")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Cproduct/manage_product') ?>"><?php echo display('manage_product') ?></a>
                    </li>
                    <?php }?>
                </ul>
            </li>
            <?php }?>
            <!-- Product menu end -->

            <!-- Purchase menu start -->
            <?php
if ($this->permission1->module('add_purchase')->access() || $this->permission1->module('manage_purchase')->access()) {?>
            <li class="treeview <?php if ($this->uri->segment('1') == ("Cpurchase")) {
    echo "active";
} else {
    echo " ";
}?>">
                <a href="#">
                    <i class="ti-shopping-cart"></i><span><?php echo display('purchase') ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <?php
if ($this->permission1->method('add_purchase', 'create')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("Cpurchase") && $this->uri->segment('2') == ("")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Cpurchase') ?>"><?php echo display('add_purchase') ?></a></li>
                    <?php
}?>

                    <?php
if ($this->permission1->method('manage_purchase', 'read')->access() || $this->permission1->method('manage_purchase', 'update')->access() || $this->permission1->method('manage_purchase', 'delete')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("manage_purchase")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Cpurchase/manage_purchase') ?>"><?php echo display('manage_purchase') ?></a>
                    </li>
                    <?php
}
    ?>
                </ul>
            </li>
            <?php }?>
            <!-- Purchase menu end -->
            <!-- stock menu start -->
            <?php
if ($this->permission1->module('stock_report')->access() || $this->permission1->module('stock_report_manufacturer_wise')->access() || $this->permission1->module('stock_report_product_wise')->access() || $this->permission1->module('stock_report_batch_wise')->access()) {?>
            <!-- Stock menu start -->
            <li class="treeview <?php if ($this->uri->segment('1') == ("Creport")) {
    echo "active";
} else {
    echo " ";
}?>">
                <a href="#">
                    <i class="ti-bar-chart"></i><span><?php echo display('stock') ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <?php
if ($this->permission1->method('stock_report', 'read')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("Creport") && $this->uri->segment('2') == ("")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Creport') ?>"><?php echo display('stock_report') ?></a></li>
                    <?php }?>



                    <?php
if ($this->permission1->method('stock_report_batch_wise', 'read')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("stock_report_batch_wise")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Creport/stock_report_batch_wise') ?>"><?php echo display('stock_report_batch_wise') ?></a>
                    </li>
                    <?php }?>
                </ul>
            </li>
            <?php
}
?>
            <!-- Stock menu end -->
            <!-- start return -->
            <?php
if ($this->permission1->module('return')->access() || $this->permission1->module('stock_return_list')->access() || $this->permission1->module('manufacturer_return_list')->access() || $this->permission1->module('wastage_return_list')->access()) {?>
            <li class="treeview <?php if ($this->uri->segment('1') == ("Cretrun_m")) {
    echo "active";
} else {
    echo " ";
}?>">
                <a href="#">
                    <i class="fa fa-retweet" aria-hidden="true"></i><span><?php echo display('return'); ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <?php
if ($this->permission1->method('return', 'create')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("Cretrun_m") && $this->uri->segment('2') == ("")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Cretrun_m') ?>"><?php echo display('return'); ?></a></li>
                    <?php }?>

                    <?php
if ($this->permission1->method('stock_return_list', 'read')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("return_list")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Cretrun_m/return_list') ?>"><?php echo display('stock_return_list') ?></a>
                    </li>
                    <?php }?>

                    <?php
if ($this->permission1->method('manufacturer_return_list', 'read')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("manufacturer_return_list")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Cretrun_m/manufacturer_return_list') ?>"><?php echo display('manufacturer_return_list') ?></a>
                    </li>
                    <?php }?>

                    <?php
if ($this->permission1->method('wastage_return_list', 'read')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("wastage_return_list")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Cretrun_m/wastage_return_list') ?>"><?php echo display('wastage_return_list') ?></a>
                    </li>
                    <?php }?>

                </ul>
            </li>
            <?php
}
?>
            <!-- Return menu end -->
            <!-- Report menu start -->
            <?php
if ($this->permission1->module('todays_report')->access() || $this->permission1->module('sales_report')->access() || $this->permission1->module('purchase_report')->access() || $this->permission1->module('sales_report_medicine_wise')->access() || $this->permission1->module('profit_loss')->access()) {?>
            <!-- Report menu start -->
            <li class="treeview <?php if ($this->uri->segment('2') == ("all_report") || $this->uri->segment('2') == ("todays_sales_report") || $this->uri->segment('2') == ("todays_purchase_report") || $this->uri->segment('2') == ("product_sales_reports_date_wise") || $this->uri->segment('2') == ("total_profit_report") || $this->uri->segment('2') == ("profit_manufacturer_form") || $this->uri->segment('2') == ("profit_productwise_form") || $this->uri->segment('2') == ("profit_productwise") || $this->uri->segment('2') == ("profit_manufacturer") || $this->uri->segment('2') == ("profit_doctorwise_form")) {
    echo "active";
} else {
    echo " ";
}?>">
                <a href="#">
                    <i class="ti-book"></i><span><?php echo display('report') ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <?php
if ($this->permission1->method('todays_report', 'read')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("all_report")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Admin_dashboard/all_report') ?>"><?php echo display('todays_report') ?></a>
                    </li>
                    <?php }?>

                    <?php
if ($this->permission1->method('sales_report', 'read')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("todays_sales_report")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Admin_dashboard/todays_sales_report') ?>"><?php echo display('sales_report') ?></a>
                    </li>
                    <?php }?>

                    <?php
if ($this->permission1->method('purchase_report', 'read')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("todays_purchase_report")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Admin_dashboard/todays_purchase_report') ?>"><?php echo display('purchase_report') ?></a>
                    </li>
                    <?php }?>

                    <?php
if ($this->permission1->method('sales_report_medicine_wise', 'read')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("product_sales_reports_date_wise")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Admin_dashboard/product_sales_search_reports?from_date=' . date('Y-m-d', strtotime(date('Y-m-d') . ' -1 day')) . '&to_date=' . date('Y-m-d')) ?>"><?php echo display('sales_report_product_wise') ?></a>
                    </li>
                    <?php }?>

                    <?php
if ($this->permission1->method('profit_loss', 'read')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("profit_manufacturer_form")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Admin_dashboard/profit_manufacturer_form') ?>"><?php echo display('manufacturer_wise') ?></a>
                    </li>
                    <?php }?>

                    <?php
if ($this->permission1->method('profit_loss', 'read')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("profit_productwise_form")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Admin_dashboard/profit_productwise_form') ?>"><?php echo display('product_wise') ?></a>
                    </li>
                    <?php }?>

                    <?php
if ($this->permission1->method('profit_loss', 'read')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("profit_doctorwise_form")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Admin_dashboard/profit_doctorwise_form') ?>"><?php echo "Doctor Wise" ?></a>
                    </li>
                    <?php }?>


                </ul>
            </li>
            <?php }?>
            <!-- Report menu end -->
            <!--New Account start-->
            <?php if ($this->permission1->method('show_tree', 'read')->access() || $this->permission1->method('manufacturer_payment', 'create')->access() || $this->permission1->method('customer_receive', 'create')->access() || $this->permission1->method('debit_voucher', 'create')->access() || $this->permission1->method('credit_voucher', 'create')->access() || $this->permission1->method('aprove_v', 'read')->access() || $this->permission1->method('contra_voucher', 'create')->access() || $this->permission1->method('journal_voucher', 'create')->access()) {?>
            <li class="treeview <?php
if ($this->uri->segment('1') == ("accounts")) {
    echo "active";
} else {
    echo " ";
}
    ?>">
                <a href="#">
                    <i class="fa fa-money"></i><span><?php echo display('accounts') ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <?php if ($this->permission1->method('show_tree', 'read')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("show_tree")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('accounts/show_tree') ?>"><?php echo display('c_o_a'); ?></a>
                    </li>
                    <?php }?>
                    <?php if ($this->permission1->method('manufacturer_payment', 'create')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("manufacturer_payment")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('accounts/manufacturer_payment') ?>"><?php echo display('manufacturer_payment'); ?></a>
                    </li>
                    <?php }?>

                    <?php if ($this->permission1->method('supplier_payment', 'create')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("supplier_payment")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('accounts/supplier_payment') ?>"><?php echo display('supplier_payment'); ?></a>
                    </li>
                    <?php }?>
                    <?php if ($this->permission1->method('customer_receive', 'create')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("customer_receive")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('accounts/customer_receive') ?>"><?php echo 'Patient Receive'; ?></a>
                    </li>
                    <?php }?>
                    <?php if ($this->permission1->method('cash_adjustment', 'create')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("cash_adjustment")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('accounts/cash_adjustment') ?>"><?php echo display('cash_adjustment'); ?></a>
                    </li>
                    <?php }?>
                    <?php if ($this->permission1->method('debit_voucher', 'create')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("debit_voucher")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('accounts/debit_voucher') ?>"><?php echo display('debit_voucher') ?></a>
                    </li>
                    <?php }?>
                    <?php if ($this->permission1->method('credit_voucher', 'create')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("credit_voucher")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('accounts/credit_voucher') ?>"><?php echo display('credit_voucher'); ?></a>
                    </li>
                    <?php }?>

                    <?php if ($this->permission1->method('contra_voucher', 'create')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("contra_voucher")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('accounts/contra_voucher') ?>"><?php echo display('contra_voucher'); ?></a>
                    </li>
                    <?php }?>
                    <?php if ($this->permission1->method('journal_voucher', 'create')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("journal_voucher")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('accounts/journal_voucher') ?>"><?php echo display('journal_voucher'); ?></a>
                    </li>
                    <?php }?>
                    <?php if ($this->permission1->method('aprove_v', 'read')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("aprove_v")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('accounts/aprove_v') ?>"><?php echo display('voucher_approval'); ?></a>
                    </li>
                    <?php }?>
                    <?php if ($this->permission1->method('ac_report', 'read')->access()) {?>
                    <li class="treeview <?php
if ($this->uri->segment('2') == ("voucher_report") || $this->uri->segment('2') == ("cash_book") || $this->uri->segment('2') == ("bank_book") || $this->uri->segment('2') == ("general_ledger") || $this->uri->segment('2') == ("trial_balance") || $this->uri->segment('2') == ("profit_loss_report") || $this->uri->segment('2') == ("cash_flow_report") || $this->uri->segment('2') == ("inventory_ledger") || $this->uri->segment('2') == ("coa_print") || $this->uri->segment('2') == "profit_loss_report_search") {
        echo "active";
    } else {
        echo " ";
    }
        ?>"><a href="" style="position: relative;"><?php echo display('report') ?>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <!--       <li class="treeview <?php if ($this->uri->segment('2') == ("voucher_report")) {
            echo "active";
        } else {
            echo " ";
        }?>"><a href="<?php echo base_url('accounts/voucher_report') ?>"><?php echo 'Voucher Report' ?></a></li> -->
                            <?php if ($this->permission1->method('cash_book', 'read')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("cash_book")) {
            echo "active";
        } else {
            echo " ";
        }?>"><a href="<?php echo base_url('accounts/cash_book') ?>"><?php echo display('cash_book'); ?></a>
                            </li>
                            <?php }?>
                            <?php if ($this->permission1->method('bank_book', 'read')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("bank_book")) {
            echo "active";
        } else {
            echo " ";
        }?>"><a href="<?php echo base_url('accounts/bank_book') ?>"><?php echo display('bank_book'); ?></a>
                            </li>
                            <?php }?>
                            <?php if ($this->permission1->method('general_ledger', 'read')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("general_ledger")) {
            echo "active";
        } else {
            echo " ";
        }?>"><a href="<?php echo base_url('accounts/general_ledger') ?>"><?php echo display('general_ledger'); ?></a>
                            </li>
                            <?php }?>
                            <?php if ($this->permission1->method('inventory_ledger', 'read')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("inventory_ledger")) {
            echo "active";
        } else {
            echo " ";
        }?>"><a href="<?php echo base_url('accounts/inventory_ledger') ?>"><?php echo display('Inventory_ledger'); ?></a>
                            </li>
                            <?php }?>
                            <?php if ($this->permission1->method('cash_flow_report', 'read')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("cash_flow_report")) {
            echo "active";
        } else {
            echo " ";
        }?>"><a href="<?php echo base_url('accounts/cash_flow_report') ?>"><?php echo display('cash_flow'); ?></a>
                            </li>
                            <?php }?>

                            <li class="treeview <?php if ($this->uri->segment('2') == "profit_loss_report" || $this->uri->segment('2') == "profit_loss_report_search") {
            echo "active";
        } else {
            echo " ";
        }?>"><a href="<?php echo base_url('accounts/profit_loss_report') ?>"><?php echo display('profit_loss'); ?></a>
                            </li>


                            <?php if ($this->permission1->method('trial_balance', 'read')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("trial_balance")) {
            echo "active";
        } else {
            echo " ";
        }?>"><a href="<?php echo base_url('accounts/trial_balance') ?>"><?php echo display('trial_balance'); ?></a>
                            </li>
                            <?php }?>


                            <?php if ($this->permission1->method('coa_print', 'read')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("coa_print")) {
            echo "active";
        } else {
            echo " ";
        }?>"><a href="<?php echo base_url('accounts/coa_print') ?>"><?php echo display('coa_print'); ?></a>
                            </li>
                            <?php }?>
                        </ul>

                    </li>
                    <?php }?>
                </ul>
            </li>
            <?php }?>
            <!-- New Account End -->
            <!-- bank menu start -->
            <?php
if ($this->permission1->module('add_new_bank')->access() || $this->permission1->module('bank_transaction')->access() || $this->permission1->module('manage_bank')->access()) {?>
            <!-- Bank menu start -->
            <li class="treeview <?php if ($this->uri->segment('2') == ("index") || $this->uri->segment('2') == ("bank_list") || $this->uri->segment('2') == ("bank_ledger") || $this->uri->segment('2') == ("bank_transaction")) {
    echo "active";
} else {
    echo " ";
}?>">
                <a href="#"><i class="ti-briefcase"></i><span><?php echo display('bank') ?></span><span
                        class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                <ul class="treeview-menu">

                    <?php
if ($this->permission1->method('add_new_bank', 'create')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("Csettings") && $this->uri->segment('2') == ("index")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Csettings/index') ?>"><?php echo display('add_new_bank') ?></a>
                    </li>
                    <?php }?>

                    <?php
if ($this->permission1->method('bank_transaction', 'create')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("bank_transaction")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Csettings/bank_transaction') ?>"><?php echo display('bank_transaction') ?></a>
                    </li>
                    <?php }?>

                    <?php
if ($this->permission1->method('manage_bank', 'read')->access() || $this->permission1->method('manage_bank', 'update')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("bank_list")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Csettings/bank_list') ?>"><?php echo display('manage_bank') ?></a>
                    </li>
                    <?php }?>

                </ul>
            </li>
            <?php }?>
            <!-- Bank menu end -->

            <!-- human resource management menu start -->
            <?php if ($this->permission1->method('add_designation', 'create')->access() || $this->permission1->method('manage_designation', 'read')->access() || $this->permission1->method('add_employee', 'create')->access() || $this->permission1->method('manage_employee', 'read')->access() || $this->permission1->method('add_attendance', 'create')->access() || $this->permission1->method('manage_attendance', 'read')->access() || $this->permission1->method('attendance_report', 'read')->access() || $this->permission1->method('add_benefits', 'create')->access() || $this->permission1->method('manage_benefits', 'read')->access() || $this->permission1->method('add_salary_setup', 'create')->access() || $this->permission1->method('manage_salary_setup', 'read')->access() || $this->permission1->method('salary_generate', 'create')->access() || $this->permission1->method('manage_salary_generate', 'read')->access() || $this->permission1->method('salary_payment', 'create')->access() || $this->permission1->method('add_fixed_assets', 'create')->access() || $this->permission1->method('fixed_assets_list', 'read')->access() || $this->permission1->method('fixed_assets_purchase', 'create')->access() || $this->permission1->method('fixed_assets_purchase_manage', 'read')->access() || $this->permission1->method('fixed_assets_location_transfer', 'create')->access() || $this->permission1->method('manage_assets_location_transfer', 'read')->access() || $this->permission1->method('asset_stock', 'read')->access() || $this->permission1->module('personal_add_person')->access() || $this->permission1->module('personal_add_loan')->access() || $this->permission1->module('personal_add_payment')->access() || $this->permission1->module('personal_manage_loan')->access() || $this->permission1->module('office_add_person')->access() || $this->permission1->module('office_manage_loan')->access()) {?>

            <!-- Supplier menu start -->
            <li class="treeview <?php
if ($this->uri->segment('1') == ("Chrm") || $this->uri->segment('1') == ("Cattendance") || $this->uri->segment('1') == ("Cpayroll") || $this->uri->segment('1') == ("Cexpense") || $this->uri->segment('1') == ("Fixedassets") || $this->uri->segment('2') == ("add_person") || $this->uri->segment('2') == ("add_loan") || $this->uri->segment('2') == ("add_payment") || $this->uri->segment('2') == ("person_loan_edit") || $this->uri->segment('2') == ("manage_person") || $this->uri->segment('2') == ("manage_loans") || $this->uri->segment('2') == ("person_loan_deails") || $this->uri->segment('2') == ("add1_person") || $this->uri->segment('2') == ("manage1_person") || $this->uri->segment('2') == ("person_edit") || $this->uri->segment('2') == ("person_ledger")) {
    echo "active";
} else {
    echo " ";
}
    ?>">
                <a href="#">
                    <i class="fa fa-users"></i><span><?php echo display('human_resource_management') ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="treeview <?php
if ($this->uri->segment('1') == ("Chrm")) {
        echo "active";
    } else {
        echo " ";
    }
    ?>">
                        <a href="#">
                            <i class="fa fa-users"></i><span><?php echo display('hrm') ?></span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php if ($this->permission1->method('add_designation', 'create')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("add_designation")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('Chrm/add_designation') ?>"><?php echo display('add_designation') ?></a>
                            </li>
                            <?php }?>
                            <?php if ($this->permission1->method('manage_designation', 'read')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("manage_designation")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('Chrm/manage_designation') ?>"><?php echo display('manage_designation') ?></a>
                            </li>
                            <?php }?>
                            <?php if ($this->permission1->method('add_employee', 'create')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("add_employee")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('Chrm/add_employee') ?>"><?php echo display('add_employee') ?></a>
                            </li>
                            <?php }?>
                            <?php if ($this->permission1->method('manage_employee', 'read')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("manage_employee")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('Chrm/manage_employee') ?>"><?php echo display('manage_employee') ?></a>
                            </li>
                            <?php }?>

                        </ul>
                    </li>

                    <!-- ================== Attendance menu start ================= -->
                    <?php if ($this->permission1->method('add_attendance', 'create')->access() || $this->permission1->method('manage_attendance', 'read')->access() || $this->permission1->method('attendance_report', 'read')->access()) {?>
                    <li class="treeview <?php
if ($this->uri->segment('1') == ("Cattendance")) {
        echo "active";
    } else {
        echo " ";
    }
        ?>">
                        <a href="#">
                            <i class="fa fa-clock-o"></i><span><?php echo display('attendance') ?></span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php if ($this->permission1->method('add_attendance', 'create')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("add_attendance")) {
            echo "active";
        } else {
            echo " ";
        }?>"><a href="<?php echo base_url('Cattendance/add_attendance') ?>"><?php echo display('add_attendance') ?></a>
                            </li>
                            <?php }?>
                            <?php if ($this->permission1->method('manage_attendance', 'read')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("manage_attendance")) {
            echo "active";
        } else {
            echo " ";
        }?>"><a href="<?php echo base_url('Cattendance/manage_attendance') ?>"><?php echo display('manage_attendance') ?></a>
                            </li>
                            <?php }?>
                            <?php if ($this->permission1->method('attendance_report', 'read')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("attendance_report")) {
            echo "active";
        } else {
            echo " ";
        }?>"><a href="<?php echo base_url('Cattendance/attendance_report') ?>"><?php echo display('attendance_report') ?></a>
                            </li>
                            <?php }?>
                        </ul>
                    </li>
                    <?php }?>


                    <!-- ====================== Attendance menu end ================== -->

                    <!-- ========================== Payroll menu start =================== -->
                    <?php if ($this->permission1->method('add_benefits', 'create')->access() || $this->permission1->method('manage_benefits', 'read')->access() || $this->permission1->method('add_salary_setup', 'create')->access() || $this->permission1->method('manage_salary_setup', 'read')->access() || $this->permission1->method('salary_generate', 'create')->access() || $this->permission1->method('manage_salary_generate', 'read')->access() || $this->permission1->method('salary_payment', 'create')->access()) {?>
                    <!-- Supplier menu start -->
                    <li class="treeview <?php
if ($this->uri->segment('1') == ("Cpayroll")) {
        echo "active";
    } else {
        echo " ";
    }
        ?>">
                        <a href="#">
                            <i class="fa fa-paypal"></i><span><?php echo display('payroll') ?></span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php if ($this->permission1->method('add_benefits', 'create')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("Salarybenificial")) {
            echo "active";
        } else {
            echo " ";
        }?>"><a href="<?php echo base_url('Cpayroll/Salarybenificial') ?>">
                                    <?php echo display('add_benefits') ?></a></li><?php }?>
                            <?php if ($this->permission1->method('manage_benefits', 'read')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("manage_benefits")) {
            echo "active";
        } else {
            echo " ";
        }?>"><a href="<?php echo base_url('Cpayroll/manage_benefits') ?>"><?php echo display('manage_benefits') ?></a>
                            </li>
                            <?php }?>
                            <?php if ($this->permission1->method('add_salary_setup', 'create')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("salary_setup_form")) {
            echo "active";
        } else {
            echo " ";
        }?>"><a href="<?php echo base_url('Cpayroll/salary_setup_form') ?>"><?php echo display('add_salary_setup') ?></a>
                            </li>
                            <?php }?>
                            <?php if ($this->permission1->method('manage_salary_setup', 'read')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("manage_salary_setup")) {
            echo "active";
        } else {
            echo " ";
        }?>"><a href="<?php echo base_url('Cpayroll/manage_salary_setup') ?>"><?php echo display('manage_salary_setup') ?></a>
                            </li>
                            <?php }?>
                            <?php if ($this->permission1->method('salary_generate', 'create')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("salary_generate_form")) {
            echo "active";
        } else {
            echo " ";
        }?>"><a href="<?php echo base_url('Cpayroll/salary_generate_form') ?>"><?php echo display('salary_generate') ?></a>
                            </li>
                            <?php }?>
                            <?php if ($this->permission1->method('manage_salary_generate', 'read')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("manage_salary_generate")) {
            echo "active";
        } else {
            echo " ";
        }?>"><a href="<?php echo base_url('Cpayroll/manage_salary_generate') ?>"><?php echo display('manage_salary_generate') ?></a>
                            </li>
                            <?php }?>
                            <?php if ($this->permission1->method('salary_payment', 'create')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("salary_payment")) {
            echo "active";
        } else {
            echo " ";
        }?>"><a href="<?php echo base_url('Cpayroll/salary_payment') ?>"><?php echo display('salary_payment') ?></a>
                            </li> <?php }?>

                        </ul>
                    </li>
                    <?php }?>
                    <!-- =============================== Payroll menu end =================== -->
                    <!-- =======================   Expense menu start ========================= -->
                    <?php if ($this->permission1->method('add_expense_item', 'create')->access() || $this->permission1->method('manage_expense_item', 'read')->access() || $this->permission1->method('add_expense', 'create')->access() || $this->permission1->method('manage_expense', 'read')->access()) {?>
                    <li class="treeview <?php
if ($this->uri->segment('1') == ("Cexpense")) {
        echo "active";
    } else {
        echo " ";
    }
        ?>">
                        <a href="#">
                            <i class="fa fa-credit-card"></i><span><?php echo display('expense') ?></span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php
if ($this->permission1->method('add_expense_item', 'create')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("add_expense_item")) {
            echo "active";
        } else {
            echo " ";
        }?>"><a href="<?php echo base_url('Cexpense/add_expense_item') ?>"><?php echo display('add_expense_item') ?></a>
                            </li>
                            <?php }?>
                            <?php if ($this->permission1->method('manage_expense_item', 'read')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("manage_expense_item")) {
            echo "active";
        } else {
            echo " ";
        }?>"><a href="<?php echo base_url('Cexpense/manage_expense_item') ?>"><?php echo display('manage_expense_item') ?></a>
                            </li>
                            <?php }?>
                            <?php if ($this->permission1->method('add_expense', 'create')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("add_expense")) {
            echo "active";
        } else {
            echo " ";
        }?>"><a href="<?php echo base_url('Cexpense/add_expense') ?>"><?php echo display('add_expense') ?></a>
                            </li>
                            <?php }?>
                            <?php if ($this->permission1->method('manage_expense', 'read')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("manage_expense")) {
            echo "active";
        } else {
            echo " ";
        }?>"><a href="<?php echo base_url('Cexpense/manage_expense') ?>"><?php echo display('manage_expense') ?></a>
                            </li>
                            <?php }?>
                            <?php if ($this->permission1->method('expense_statement', 'read')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("expense_statement_form")) {
            echo "active";
        } else {
            echo " ";
        }?>"><a href="<?php echo base_url('Cexpense/expense_statement_form') ?>"><?php echo display('expense_statement') ?></a>
                            </li>
                            <?php }?>
                        </ul>
                    </li>
                    <?php }?>
                    <!-- ========================== Expense menu end ========================== -->

                    <!-- ================= Fixed Assets start ====================== -->
                    <?php if ($this->permission1->method('add_fixed_assets', 'create')->access() || $this->permission1->method('fixed_assets_list', 'read')->access() || $this->permission1->method('fixed_assets_purchase', 'create')->access() || $this->permission1->method('fixed_assets_purchase_manage', 'read')->access() || $this->permission1->method('fixed_assets_location_transfer', 'create')->access() || $this->permission1->method('manage_assets_location_transfer', 'read')->access() || $this->permission1->method('asset_stock', 'read')->access()) {?>
                    <li class="treeview <?php
if ($this->uri->segment('1') == ("Fixedassets")) {
        echo "active";
    } else {
        echo " ";
    }
        ?>">
                        <a href="#">
                            <i class="ti-bag"></i> <span><?php echo display('fixed_assets') ?></span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php if ($this->permission1->method('add_fixed_assets', 'create')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("add_fixedassets")) {
            echo "active";
        } else {
            echo " ";
        }?>"><a href="<?php echo base_url('Fixedassets/add_fixedassets') ?>"><?php echo display('add_fixed_assets') ?></a>
                            </li>
                            <?php }?>
                            <?php if ($this->permission1->method('fixed_assets_list', 'read')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("fixed_assets_list")) {
            echo "active";
        } else {
            echo " ";
        }?>"><a href="<?php echo base_url('Fixedassets/fixed_assets_list') ?>"><?php echo display('fixed_assets_list') ?></a>
                            </li>
                            <?php }?>
                            <?php if ($this->permission1->method('fixed_assets_purchase', 'create')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("fixed_assets_purchase")) {
            echo "active";
        } else {
            echo " ";
        }?>"><a href="<?php echo base_url('Fixedassets/fixed_assets_purchase') ?>"><?php echo display('fixed_assets_purchase') ?></a>
                            </li>
                            <?php }?>
                            <?php if ($this->permission1->method('fixed_assets_purchase_manage', 'read')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("fixed_assets_purchase_list")) {
            echo "active";
        } else {
            echo " ";
        }?>"><a href="<?php echo base_url('Fixedassets/fixed_assets_purchase_list') ?>"><?php echo display('fixed_assets_purchase_manage') ?></a>
                            </li>
                            <?php }?>

                        </ul>
                    </li>
                    <?php }?>

                    <!-- ================= Fixed Assets end  ======================= -->
                    <!-- Personal loan end -->
                    <!--  loan start -->
                    <?php
if ($this->permission1->module('personal_add_person')->access() || $this->permission1->module('personal_add_loan')->access() || $this->permission1->module('personal_add_payment')->access() || $this->permission1->module('personal_manage_loan')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("add_person") || $this->uri->segment('2') == ("add_loan") || $this->uri->segment('2') == ("add_payment") || $this->uri->segment('2') == ("person_loan_edit") || $this->uri->segment('2') == ("manage_person") || $this->uri->segment('2') == ("manage_loans") || $this->uri->segment('2') == ("person_loan_deails")) {
        echo "active";
    } else {
        echo " ";
    }?>">
                        <a href="#">
                            <i class="fa fa-user-circle" aria-hidden="true"></i>
                            <span><?php echo display('personal_loan') ?></span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php
if ($this->permission1->method('personal_add_person', 'create')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("add_person")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('Csettings/add_person') ?>"><?php echo display('add_person') ?></a>
                            </li>
                            <?php }?>

                            <?php
if ($this->permission1->method('personal_add_loan', 'create')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("add_loan")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('Csettings/add_loan') ?>"><?php echo display('add_loan') ?></a>
                            </li>
                            <?php }?>

                            <?php
if ($this->permission1->method('personal_add_payment', 'create')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("add_payment") || $this->uri->segment('2') == ("add_payment")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('Csettings/add_payment') ?>"><?php echo display('add_payment') ?></a>
                            </li>
                            <?php }?>

                            <?php
if ($this->permission1->method('personal_manage_loan', 'read')->access() || $this->permission1->method('personal_manage_loan', 'update')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("manage_loans")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('Csettings/manage_loans') ?>"><?php echo display('manage_loan') ?></a>
                            </li>
                            <?php }?>
                        </ul>
                    </li>
                    <?php }?>
                    <!-- loan end -->
                    <?php
if ($this->permission1->module('office_add_person')->access() || $this->permission1->module('office_manage_loan')->access()) {?>
                    <!-- Personal loan start -->
                    <li class="treeview <?php if ($this->uri->segment('2') == ("add1_person") || $this->uri->segment('2') == ("manage1_person") || $this->uri->segment('2') == ("person_edit") || $this->uri->segment('2') == ("person_ledger")) {
        echo "active";
    } else {
        echo " ";
    }?>">
                        <a href="#">
                            <i class="fa fa-university" aria-hidden="true"></i>

                            <span><?php echo display('office_loan') ?></span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php
if ($this->permission1->method('office_add_person', 'create')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("add1_person")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('Cloan/add1_person') ?>"><?php echo display('add_person') ?></a>
                            </li>
                            <?php }?>
                            <?php
if ($this->permission1->method('office_manage_loan', 'read')->access() || $this->permission1->method('office_manage_loan', 'update')->access() || $this->permission1->method('office_manage_loan', 'delete')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("manage1_person")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('Cloan/manage1_person') ?>"><?php echo display('manage_person') ?></a>
                            </li>
                            <?php }?>

                        </ul>
                    </li>
                    <?php }?>
                </ul>
            </li>


            <?php }?>

            <!-- Human Resource management menu end -->

            <!-- service menu start -->
            <?php if ($this->permission1->method('create_service', 'create')->access() || $this->permission1->method('manage_service', 'read')->access() || $this->permission1->method('service_invoice', 'create')->access() || $this->permission1->method('manage_service_invoice', 'read')->access()) {?>
            <li class="treeview <?php
if ($this->uri->segment('1') == ("Cservice")) {
    echo "active";
} else {
    echo " ";
}
    ?>">
                <a href="#">
                    <i class="fa fa-asl-interpreting"></i><span><?php echo display('service') ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <?php if ($this->permission1->method('create_service', 'create')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("Cservice") && $this->uri->segment('2') == ("")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('Cservice') ?>"><?php echo display('add_service') ?></a></li>
                    <?php }?>
                    <?php if ($this->permission1->method('manage_service', 'read')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("manage_service")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('Cservice/manage_service') ?>"><?php echo display('manage_service') ?></a>
                    </li>
                    <?php }?>
                    <?php if ($this->permission1->method('service_invoice', 'create')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("service_invoice_form")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('Cservice/service_invoice_form') ?>"><?php echo display('service_invoice') ?></a>
                    </li>
                    <?php }?>
                    <?php if ($this->permission1->method('manage_service_invoice', 'read')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("manage_service_invoice")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('Cservice/manage_service_invoice') ?>"><?php echo display('manage_service_invoice') ?></a>
                    </li>
                    <?php }?>
                </ul>
            </li>
            <?php }?>

            <!-- Search menu start            -->
            <!-- Search menu start -->
            <?php
if ($this->permission1->module('medicine_search')->access() || $this->permission1->module('customer_search')->access() || $this->permission1->module('invoice_search')->access() || $this->permission1->module('purcahse_search')->access()) {?>

            <li class="treeview <?php if ($this->uri->segment('1') == ("Csearch")) {
    echo "active";
} else {
    echo " ";
}?>">
                <a href="#">
                    <i class="ti-search"></i><span><?php echo display('search') ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <?php
if ($this->permission1->method('medicine_search', 'read')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("medicine")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Csearch/medicine') ?>"><?php echo display('medicine') ?></a></li>
                    <?php
}
    ?>

                    <?php
if ($this->permission1->method('customer_search', 'read')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("customer")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('Csearch/customer') ?>"><?php echo 'Patient' ?> </a>
                    </li>
                    <?php
}
    ?>

                    <?php
if ($this->permission1->method('invoice_search', 'read')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("invoice")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('Csearch/invoice') ?>"><?php echo display('invoice') ?> </a></li>
                    <?php
}
    ?>

                    <?php
if ($this->permission1->method('purcahse_search', 'read')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("purchase")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('Csearch/purchase') ?>"><?php echo display('purchase') ?> </a>
                    </li>
                    <?php
}
    ?>

                </ul>
            </li>
            <?php
}
?>

            <!-- Software Settings menu start -->
            <?php
if ($this->permission1->module('manage_company')->access() || $this->permission1->module('add_user')->access() || $this->permission1->module('manage_users')->access() || $this->permission1->module('language')->access() || $this->permission1->module('setting')->access() || $this->permission1->module('user_assign_role')->access() || $this->permission1->module('permission')->access() || $this->permission1->module('add_role')->access() || $this->permission1->module('role_list')->access() || $this->permission1->method('configure_sms', 'create')->access() || $this->permission1->method('configure_sms', 'update')->access() || $this->permission1->module('data_setting')->access() || $this->permission1->module('synchronize')->access() || $this->permission1->module('backup_and_restore')->access()) {?>

            <li class="treeview <?php if ($this->uri->segment('1') == ("Company_setup") || $this->uri->segment('1') == ("User") || $this->uri->segment('1') == ("Cweb_setting") || $this->uri->segment('1') == ("Language") || $this->uri->segment('1') == ("Currency") || $this->uri->segment('1') == ("Permission") || $this->uri->segment('1') == ("Csms") || $this->uri->segment('1') == ("Backup_restore") || $this->uri->segment('1') == ("Csupplier") || $this->uri->segment('1') == ("Cmanufacturer") || $this->uri->segment('1') == ("Caccounts") || $this->uri->segment('1') == ("Account_Controller") || $this->uri->segment('1') == ("Cpayment")) {
    echo "active";
} else {
    echo " ";
}?>">
                <a href="#">
                    <i class="ti-settings"></i><span><?php echo display('settings') ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="treeview <?php if ($this->uri->segment('1') == ("Company_setup") || $this->uri->segment('1') == ("User") || $this->uri->segment('1') == ("Cweb_setting") || $this->uri->segment('1') == ("Language") || $this->uri->segment('1') == ("Currency")) {
    echo "active";
} else {
    echo " ";
}?>">
                        <a href="#">
                            <span><?php echo display('web_settings') ?></span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">

                            <?php
if ($this->permission1->method('manage_company', 'read')->access() || $this->permission1->method('manage_company', 'update')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("manage_company")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Company_setup/manage_company') ?>"><?php echo display('manage_company') ?></a>
                            </li>
                            <?php }?>

                            <?php
if ($this->permission1->method('add_user', 'create')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('1') == ("User") && $this->uri->segment('2') == ("")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('User') ?>"><?php echo display('add_user') ?></a></li>
                            <?php }?>

                            <?php
if ($this->permission1->method('manage_users', 'read')->access() || $this->permission1->method('manage_users', 'update')->access() || $this->permission1->method('manage_users', 'delete')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("manage_user")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('User/manage_user') ?>"><?php echo display('manage_users') ?>
                                </a>
                            </li>
                            <?php }?>

                            <?php
if ($this->permission1->method('language', 'create')->access() || $this->permission1->method('language', 'read')->access() || $this->permission1->method('add_phrase', 'read')->access() || $this->permission1->method('add_phrase', 'update')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('1') == ("Language") && $this->uri->segment('2') == ("")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Language') ?>"><?php echo display('language') ?> </a>
                            </li>
                            <?php }?>
                            <?php
if ($this->permission1->method('currency', 'create')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('1') == ("Currency") && $this->uri->segment('2') == ("")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Currency') ?>"><?php echo display('currency') ?> </a>
                            </li>
                            <?php }?>
                            <?php
if ($this->permission1->method('soft_setting', 'read')->access() || $this->permission1->method('soft_setting', 'update')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('1') == ("Cweb_setting") && $this->uri->segment('2') == ("")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Cweb_setting') ?>"><?php echo display('setting') ?> </a>
                            </li>
                            <?php }?>


                        </ul>
                    </li>

                    <!-- Tax menu start -->
                    <?php if ($this->permission1->method('add_incometax', 'create')->access() || $this->permission1->method('manage_income_tax', 'read')->access() || $this->permission1->method('tax_settings', 'create')->access() || $this->permission1->method('tax_report', 'read')->access() || $this->permission1->method('invoice_wise_tax_report', 'read')->access()) {?>
                    <li class="treeview <?php
if ($this->uri->segment('1') == ("Caccounts") || $this->uri->segment('1') == ("Account_Controller") || $this->uri->segment('1') == ("Cpayment")) {
    echo "active";
} else {
    echo " ";
}
    ?>">
                        <a href="#">
                            <!-- <i class="fa fa-money"></i> -->
                            <span><?php echo display('tax') ?></span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php if ($this->permission1->method('tax_settings', 'create')->access() || $this->permission1->method('tax_settings', 'update')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("tax_settings")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('Caccounts/tax_settings') ?>"><?php echo display('tax_settings') ?></a>
                            </li>
                            <?php }?>

                            <?php if ($this->permission1->method('add_incometax', 'create')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("add_incometax")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('Caccounts/add_incometax') ?>"><?php echo display('add_incometax') ?></a>
                            </li>
                            <?php }?>
                            <?php if ($this->permission1->method('manage_income_tax', 'read')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("manage_income_tax")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('Caccounts/manage_income_tax') ?>"><?php echo display('manage_income_tax') ?></a>
                            </li>
                            <?php }?>
                            <?php if ($this->permission1->method('tax_report', 'read')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("tax_report")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('Caccounts/tax_report') ?>"><?php echo display('tax_report') ?></a>
                            </li>
                            <?php }?>
                            <?php if ($this->permission1->method('invoice_wise_tax_report', 'read')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("invoice_wise_tax_report")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('Caccounts/invoice_wise_tax_report') ?>"><?php echo display('invoice_wise_tax_report') ?></a>
                            </li>
                            <?php }?>
                        </ul>



                    </li>
                    <?php }?>
                    <!-- Tax menu end -->

                    <!-- manufacturer menu start -->
                    <?php
if ($this->permission1->module('add_manufacturer')->access() || $this->permission1->module('manage_manufacturer')->access() || $this->permission1->module('manufacturer_ledger')->access() || $this->permission1->module('manufacturer_sales_details')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("Cmanufacturer")) {
    echo "active";
} else {
    echo " ";
}?>">
                        <a href="#">
                            <!-- <i class="ti-user"></i> -->
                            <span><?php echo display('manufacturer') ?></span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php
if ($this->permission1->method('add_manufacturer', 'create')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('1') == ("Cmanufacturer") && $this->uri->segment('2') == ("")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Cmanufacturer') ?>"><?php echo display('add_manufacturer') ?></a>
                            </li>
                            <?php }?>

                            <?php
if ($this->permission1->method('manage_manufacturer', 'read')->access() || $this->permission1->method('manage_manufacturer', 'update')->access() || $this->permission1->method('manage_manufacturer', 'delete')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("manage_manufacturer")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Cmanufacturer/manage_manufacturer') ?>"><?php echo display('manage_manufacturer') ?></a>
                            </li>
                            <?php }?>

                            <?php
if ($this->permission1->method('manufacturer_ledger', 'read')->access() || $this->permission1->method('manufacturer_ledger', 'update')->access() || $this->permission1->method('manufacturer_ledger', 'delete')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("manufacturer_ledger_report")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Cmanufacturer/manufacturer_ledger_report') ?>"><?php echo display('manufacturer_ledger') ?></a>
                            </li>
                            <?php }?>

                            <?php
if ($this->permission1->method('manufacturer_sales_details', 'read')->access() || $this->permission1->method('manufacturer_sales_details', 'update')->access() || $this->permission1->method('manufacturer_sales_details', 'delete')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("manufacturer_sales_details_all")) {
    echo "active";
} else {
    echo " ";
}?>"><a href="<?php echo base_url('Cmanufacturer/manufacturer_sales_details_all') ?>"><?php echo display('manufacturer_sales_details') ?></a>
                            </li>
                            <?php }?>

                        </ul>
                    </li>
                    <?php
}
    ?>
                    <!-- manufacturer menu end -->


                    <!-- supplier menu start -->
                    <?php
if ($this->permission1->module('add_supplier')->access() || $this->permission1->module('manage_supplier')->access() || $this->permission1->module('supplier_ledger')->access() || $this->permission1->module('supplier_sales_details')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("Csupplier")) {
        echo "active";
    } else {
        echo " ";
    }?>">
                        <a href="#">
                            <!-- <i class="ti-user"></i> -->
                            <span><?php echo display('supplier') ?></span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php
if ($this->permission1->method('add_supplier', 'create')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('1') == ("Csupplier") && $this->uri->segment('2') == ("")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('Csupplier') ?>"><?php echo display('add_supplier') ?></a></li>
                            <?php }?>

                            <?php
if ($this->permission1->method('manage_supplier', 'read')->access() || $this->permission1->method('manage_supplier', 'update')->access() || $this->permission1->method('manage_supplier', 'delete')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("manage_supplier")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('Csupplier/manage_supplier') ?>"><?php echo display('manage_supplier') ?></a>
                            </li>
                            <?php }?>

                            <?php
if ($this->permission1->method('supplier_ledger', 'read')->access() || $this->permission1->method('supplier_ledger', 'update')->access() || $this->permission1->method('supplier_ledger', 'delete')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("supplier_ledger_report")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('Csupplier/supplier_ledger_report') ?>"><?php echo display('supplier_ledger') ?></a>
                            </li>
                            <?php }?>



                        </ul>
                    </li>
                    <?php
}
    ?>
                    <!-- supplier menu end -->

                    <?php
if ($this->permission1->module('user_assign_role')->access() || $this->permission1->module('permission')->access() || $this->permission1->module('add_role')->access() || $this->permission1->module('role_list')->access()) {?>
                    <!-- Role-permission menu start -->
                    <li class="treeview <?php if ($this->uri->segment('1') == ("Permission")) {
        echo "active";
    } else {
        echo " ";
    }?>">
                        <a href="#">
                            <span><?php echo display('role_permission') ?></span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php
if ($this->permission1->method('add_role', 'create')->access() || $this->permission1->method('add_role', 'read')->access() || $this->permission1->method('add_role', 'update')->access() || $this->permission1->method('add_role', 'delete')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("add_role")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('Permission/add_role') ?>"><?php echo display('add_role') ?></a>
                            </li>
                            <?php }?>

                            <?php
if ($this->permission1->method('role_list', 'read')->access() || $this->permission1->method('role_list', 'update')->access() || $this->permission1->method('role_list', 'delete')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("role_list")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('Permission/role_list') ?>"><?php echo display('role_list') ?></a>
                            </li>
                            <?php }?>



                            <?php
if ($this->permission1->method('user_assign_role', 'create')->access() || $this->permission1->method('user_assign_role', 'read')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('2') == ("user_assign")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('Permission/user_assign') ?>"><?php echo display('user_assign_role') ?></a>
                            </li>
                            <?php }?>

                            <!--    <?php
if ($this->permission1->method('permission', 'create')->access()) {?>
                        <li class="treeview <?php if ($this->uri->segment('1') == ("Permission") && $this->uri->segment('2') == ("")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('Permission') ?>"><?php echo display('permission') ?></a></li>
                    <?php }?>
 -->


                        </ul>
                    </li>
                    <?php }?>


                    <!-- Sms setting start -->
                    <?php if ($this->permission1->method('configure_sms', 'create')->access() || $this->permission1->method('configure_sms', 'update')->access()) {?>

                    <li class="treeview <?php if ($this->uri->segment('1') == ("Csms")) {
        echo "active";
    } else {
        echo " ";
    }?>">
                        <a href="#">
                            <span><?php echo display('sms'); ?></span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">

                            <li class="treeview <?php if ($this->uri->segment('2') == ("configure")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('Csms/configure') ?>"><?php echo display('sms_configure'); ?></a>
                            </li>


                        </ul>
                    </li>
                    <?php }?>

                    <!-- Sms Setting end -->


                    <!-- Backup start -->
                    <?php if ($CI->session->user_id == 2) {?>

                    <li class="treeview <?php if ($this->uri->segment('1') == ("Backup_restore")) {
        echo "active";
    } else {
        echo " ";
    }?>">
                        <a href="#">
                            <span><?php echo display('backup'); ?></span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="treeview <?php if ($this->uri->segment('1') == ("Backup_restore") && $this->uri->segment('2') == ("")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('Backup_restore') ?>"><?php echo display('backup') ?></a>
                            </li>
                            <li class="treeview <?php if ($this->uri->segment('1') == ("Backup_restore") && $this->uri->segment('2') == ("import_form")) {
        echo "active";
    } else {
        echo " ";
    }?>"><a href="<?php echo base_url('Backup_restore/import_form') ?>"><?php echo display('import') ?></a>
                            </li>

                        </ul>
                    </li>
                    <?php }?>


                    <!-- Backup end -->


                    <!-- Synchronizer setting start -->
                    <?php
if ($this->permission1->module('data_setting')->access() || $this->permission1->module('synchronize')->access() || $this->permission1->module('backup_and_restore')->access()) {?>
                    <li class="treeview <?php if ($this->uri->segment('2') == ("form") || $this->uri->segment('2') == ("synchronize") || $this->uri->segment('1') == ("Backup_restore")) {
        echo "active";
    } else {
        echo " ";
    }?>">
                        <a href="#">
                            <span><?php echo display('data_synchronizer') ?></span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php
$localhost = false;
        if (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1', 'localhost'))) {
            ?>
                            <?php
if ($this->permission1->method('data_setting', 'read')->access() || $this->permission1->method('data_setting', 'update')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('1') == ("data_synchronizer") && $this->uri->segment('2') == ("form")) {
                echo "active";
            } else {
                echo " ";
            }?>"><a href="<?php echo base_url('data_synchronizer/form') ?>"><?php echo display('setting') ?></a>
                            </li>
                            <?php }?>
                            <?php }?>


                            <?php
if ($this->permission1->method('synchronize', 'read')->access() || $this->permission1->method('synchronize', 'update')->access()) {?>
                            <!--  <li><a href="<?php echo base_url('data_synchronizer/synchronize') ?>"><?php echo display('synchronize') ?></a></li>-->
                            <!--<?php }?>-->

                            <?php
if ($this->permission1->method('backup_and_restore', 'read')->access() || $this->permission1->method('backup_and_restore', 'update')->access() || $this->permission1->method('backup_and_restore', 'delete')->access()) {?>
                            <li class="treeview <?php if ($this->uri->segment('1') == ("Backup_restore") && $this->uri->segment('2') == ("")) {
            echo "active";
        } else {
            echo " ";
        }?>"><a href="<?php echo base_url('Backup_restore') ?>"><?php echo display('backup') ?></a>
                            </li>
                            <?php }?>
                            <li class="treeview <?php if ($this->uri->segment('1') == ("Backup_restore") && $this->uri->segment('2') == ("import")) {
            echo "active";
        } else {
            echo " ";
        }?>"><a href="<?php echo base_url('Backup_restore/import_form') ?>"><?php echo display('import') ?></a>
                            </li>

                        </ul>
                    </li>
                    <?php }?>
                    <!-- Synchronizer setting end -->
                    <!-- <li><a href="https://forum.sgmh.com/Pharmacare-software" target="blank"><i
                                class="fa fa-question-circle"></i> Support</a></li> -->
                </ul>
            </li>

            <?php }?>
            <!-- Software Settings menu end -->



        </ul>
    </div> <!-- /.sidebar -->
</aside>