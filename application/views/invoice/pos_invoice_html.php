


<?php
$CI =& get_instance();
$CI->load->model('Web_settings');
$Web_settings = $CI->Web_settings->retrieve_setting_editdata();
?>


<!-- Printable area end -->
<style type="text/css">

    BODY, TD
    {
        background-color: #ffffff;
        color: #000000;
        font-family: "Times New Roman", Times, serif;
        font-size: 10pt;
    }
    th, td {
        padding-left: 10px;
        padding-right: 10px;
    }

</style>
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
        if($this->permission1->method('pos_invoice', 'read')->access()){ ?>
        <body>
        <div id="printableArea">
            <table border="0">
                <tr>
                    <td>
                        <table border="0" width="100%" >
                            <tr>
                                {company_info}
                                <td align="center" style="border-bottom:2px #333 solid;"><span>
                                        <img src="<?php if (isset($Web_settings[0]['invoice_logo'])) {echo $Web_settings[0]['invoice_logo']; }?>" class="" alt=""></span><br>
                                    {address}<br>
                                    {mobile}
                                </td>
                                {/company_info}
                            </tr>
                            <tr>
                                <td align="center"><b>{customer_name}</b><br>
                                    {customer_address}
                                    <br>
                                    {customer_mobile}
                                </td>
                            </tr>
                            <tr>
                                <td align="center"><nobr><date>Date:{final_date}<time></nobr></td>
                            </tr>
                        </table>

                        <table width="100%">
                            <tr>
                                <td><?php echo display('qty') ?></th>
                                <td><?php echo display('medicine') ?></td>
                                <td align="right"><?php echo display('price') ?></td>
                                <td align="right"><?php echo display('discounts') ?></td>
                                <td align="right"><?php echo display('total') ?></td>
                            </tr>
                            {invoice_all_data}
                            <tr>

                                <td align="left"><nobr>{quantity}</nobr></td>
                                <td align="left"><nobr>{product_name}<nobr></td>
                                <td align="right"><nobr><?php echo (($position==0)?"$currency{rate}":"{rate} $currency") ?></nobr></td>
                                <td align="right"><nobr><?php echo (($position==0)?"$currency{discount}":"{discount} $currency") ?></nobr></td>
                                <td align="right"><nobr><?php echo (($position==0)?"$currency {total_price}":"{total_price} $currency") ?></nobr></td>

                            </tr>
                            {/invoice_all_data}
                            <tr>
                                <td colspan="5" style="border-top:#333 1px solid;"><nobr></nobr></td>
                            </tr>
                            <tr>
                                <td align="left"><nobr></nobr></td>
                                <td align="left" colspan="3"><nobr><?php echo display('sub_total') ?></nobr></td>
                                <td align="right"><nobr><?php echo (($position==0)?"$currency {subTotal_ammount}":"{subTotal_ammount} $currency") ?></nobr></td>
                            </tr>
                            <tr>
                                <td colspan="5" style="border-top:#333 1px solid;"><nobr></nobr></td>
                            </tr>
                            <tr>
                                <td align="left"><nobr></nobr></td>
                                <td align="left" colspan="3"><nobr><?php echo display('tax') ?></nobr></td>
                                <td align="right"><nobr><?php echo (($position==0)?"$currency {total_tax}":"{total_tax} $currency") ?></nobr></td>
                            </tr>
                            <tr>
                                <td align="left"><nobr></nobr></td>
                                <td align="left" colspan="3"><nobr><?php echo display('total_discount') ?></nobr></td>
                                <td align="right"><nobr><?php echo (($position==0)?"$currency {total_discount}":"{total_discount} $currency") ?></nobr></td>
                            </tr>
                            
                            <tr>
                                <td colspan="5" style="border-top:#333 1px solid;"><nobr></nobr></td>
                            </tr>
                            <tr>
                                <td align="left"><nobr></nobr></td>
                                <td align="left" colspan="3"><nobr><strong><?php echo display('grand_total') ?></strong></nobr></td>
                                <td align="right"><nobr><strong><?php echo (($position==0)?"$currency {total_amount}":"{total_amount} $currency") ?></strong></nobr></td>
                            </tr>
                            <tr>
                                <td colspan="5" style="border-top:#333 1px solid;"><nobr></nobr></td>
                            </tr>
                            <tr>
                                <td align="left"><nobr></nobr></td>
                                <td align="left" colspan="3"><nobr><?php echo display('paid') ?></nobr></td>
                                <td align="right"><nobr><?php echo (($position==0)?"$currency {paid_amount}":"{paid_amount} $currency") ?></nobr></td>
                            </tr>

                            <tr>
                                <td align="left"><nobr></nobr></td>


                                <td align="left" colspan="3">
                                    <nobr>
                                        <?php
                                        $change=$paid_amount-$total_amount;
                                        if($change > 0){
                                            echo 'Change';
                                        }else{
                                            echo 'Due';
                                        }
                                        ?>
                                    </nobr>
                                </td>
                                <td align="right">
                                    <nobr>
                                     <?php
                                        $change=$paid_amount-$total_amount;
                                        if($change > 0){
                                            echo $change;
                                        }else{
                                            echo (($position==0)?"$currency {due_amount}":"{due_amount} $currency");
                                        }?>
                                    </nobr>
                                </td>

                            </tr>
                            <tr>
                                <td colspan="5" style="border-top:#333 1px solid;"><nobr></nobr></td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td>Receipt  No:{invoice_no}</td>
                                <td>User: <?php echo $this->session->userdata('user_name');?></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>{company_info}
                        Powered  By: {company_name}, {email}
                        {/company_info}
                    </td>
                </tr>
            </table>
        </div>
        <div class="panel-footer text-left">
            <a  class="btn btn-danger" href="<?php echo base_url('Cinvoice');?>"><?php echo display('cancel') ?></a>
            <button  class="btn btn-info" onclick="printDiv('printableArea')"><span class="fa fa-print"></span></button>

        </div>
        </body>
        <?php
        }
        else{
            ?>
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('You do not have permission to access. Please contact with administrator.');?></h4>
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
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        // document.body.style.marginTop="-45px";
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>