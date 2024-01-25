<?php $date = date('Y-m-d');?>
<!-- Invoice pdf start -->
<table class="table">
    <thead>
        {company_info}
        <tr>
            <th colspan="9">
                <center>
                    <h2> {company_name}</h2>
                </center>
            </th>
        </tr>
        <tr>
            <th colspan="9">
                <center>{address}</center>
            </th>
        </tr>
        <tr>
            <th colspan="9">
                <center><?php echo display('phone') ?> : {mobile}</center>
            </th>
        </tr>
        {/company_info}
        <tr>
            <th colspan="3">&nbsp;</th>
            <th colspan="3"><span
                    style="font-weight:bold;font-size:15px;text-align:right !important;"><?php echo display('meno') ?></span>
            </th>
            <th colspan="3"><?php date_default_timezone_set('Asia/Dhaka');
$s = date("M-d-Y g:i:s A", time());
print_r($s);?></th>
        </tr>
        <tr>
            <th><?php echo 'Patient Name' ?>Date </th>
            <th>:</th>
            <th><?php echo $date; ?></th>
            <th colspan="3" style="text-align:right"><?php echo display('invoice_no') ?> &nbsp; : &nbsp; {invoice_no}
            </th>
            <th colspan="3" style="text-align:right"><?php echo display('memo_no') ?> &nbsp; : &nbsp; {invoice_id}</th>
        </tr>
        <tr>
            <th><?php echo 'Patient Name' ?></th>
            <th>:</th>
            <th colspan="7" style="text-align:left">{customer_name}</th>
        </tr>
        <tr>
            <th><?php echo display('address') ?> </th>
            <th>:</th>
            <th colspan="7" style="text-align:left">{customer_address}</th>
        </tr>

    </thead>
</table>
<table border="1" width="100%" style="margin-top:25px;border-collapse:collapse;">
    <thead>
        <tr>
            <th><?php echo display('sl') ?></th>
            <th><?php echo display('item_information') ?></th>
            <th><?php echo display('total_quantity') ?></th>
            <th><?php echo display('rates') ?></th>
            <th><?php echo display('amount') ?></th>
        </tr>
    </thead>
    <tbody>
        {invoice_all_data}
        <tr>
            <td>{sl}</td>
            <td>{product_name}&nbsp; &nbsp; {product_model}</td>
            <td>{quantity}</td>
            <td>{rate}</td>
            <td>{total_price}</td>
        </tr>
        {/invoice_all_data}
    </tbody>
    <tfoot>
        <tr>
            <td>&nbsp;</td>
            <td style="text-align:right"><b><?php echo display('grand_total') ?>:</b></td>
            <td><b>{subTotal_quantity}</b></td>
            <td>&nbsp;</td>
            <td class="text-right"><b>{total_amount}</b></td>
        </tr>
    </tfoot>
</table>

<table border="0" width="97%" style="margin-top:75px;border-collapse:collapse;">
    <thead>
        <tr>
            <th>
                <div style="float:left;width:90%;text-align:center;border-top:1px solid #000;">
                    <?php echo display('prepared_by') ?>
                </div>
            </th>
            <th>
                <div style="float:left;width:90%;text-align:center;border-top:1px solid #000;">
                    <?php echo display('received_by') ?>
                </div>
            </th>
            <th>
                <div style="float:left;width:90%;text-align:center;border-top:1px solid #000;">
                    <?php echo display('checked_by') ?>
                </div>
            </th>
            <th>
                <div style="float:left;width:90%;text-align:center;border-top:1px solid #000;">
                    <?php echo display('authorised_by') ?>
                </div>
            </th>
        </tr>
    </thead>
</table>
<!-- Invoice pdf end -->