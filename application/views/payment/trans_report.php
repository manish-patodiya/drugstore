<!-- Person ledger start -->
<script type="text/javascript">
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
	document.body.style.marginTop="0px";
    window.print();
    document.body.innerHTML = originalContents;
}
</script>

<!-- Person Start -->
<div class="content-wrapper">
	<section class="content-header">
	    <div class="header-icon">
	        <i class="pe-7s-note2"></i>
	    </div>
	    <div class="header-title">
	        <h1><?php echo display('transaction_details')?></h1>
	        <small><?php echo display('transaction_details')?></small>
	        <ol class="breadcrumb">
	            <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
	            <li><a href="#"><?php echo display('transaction_details')?></a></li>
	            <li class="active"><?php echo display('transaction_details')?></li>
	        </ol>
	    </div>
	</section>

	<section class="content">
		<!-- Manage Product report -->
        <?php
        if($this->permission1->method('report','read')->access()){ ?>
		<div class="row">
		    <div class="col-sm-12">
		        <div class="panel panel-bd lobidrag">
		            <div class="panel-heading">
		                <div class="panel-title">
		                    <h4><?php echo display('transaction_details')?></h4>
		                </div>
		            </div>
		            <div class="panel-body">
						<div id="printableArea" style="margin-left:2px;">
			                <div class="table-responsive" style="margin-top: 10px;">
			                    <table id="dataTableExample3" class="table table-bordered table-striped table-hover">
			                        <thead>
										<tr>
											<th class="text-center"><?php echo display('account')?></th>
											<th class="text-center"><?php echo display('transaction')?></th>
											<th class="text-center"><?php echo display('receipt_amount')?></th>
											<th class="text-center"><?php echo display('paid_amount')?></th>
										</tr>
									</thead>
									<?php
										if ($ledger) {
									?>
									<?php foreach ($ledger as $row){?>
									<tbody>
										<tr>
											<td  align="center">
												 <a href="" data-toggle="modal" data-target="#myModal"
                                                  onclick="javascript:report_popup(<?php echo $row['transection_category']; ?>)" ><?php if($row['transection_category']==1){
                                                  echo 'manufacturer';}elseif($row['transection_category']==2){echo 'Customer';}elseif($row['transection_category']==3){
                                                  echo 'Office';}else{
                                                  echo 'Loan';}  ?></a>
                                            </td>
											<td align="right">
                                          <?php echo $row['tran_no'] ?>
											</td>
											<td style="text-align: right;"><?php
                                              $debt=$row['debit'];

											 echo (($position==0)?"$currency":$debt);
											 echo number_format($debt, 2, '.', ','); ?></td>
											<td align="right"><?php echo (($position==0)?"$currency":$row['credit']);
											echo number_format($row['credit'], 2, '.', ','); ?></td>
									</tbody>
									<?php } ?>
									<?php
										}
									?>
									<tfoot>
										<tr  align="right">
											<td colspan="2"  align="right"><b>Total:</b></td>
											<td><b><?php echo (($position==0)?"$currency {subtotalDebit}":"{subtotalDebit} $currency") ?></b></td>
											<td><b><?php echo (($position==0)?"$currency {subtotalCredit}":"{subtotalCredit} $currency") ?></b></td>
										</tr>
									</tfoot>
			                    </table>
			                </div>
			            </div>
		                <div class="text-right"><?php echo $links?></div>
		            </div>
		        </div>
		    </div>
		</div>
        <?php
        }
        else{
            ?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4><?php echo display('You do not have permission to access. Please contact with administrator.');?></h4>
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
<!-- Person ledger End -->

<!-- Modal start -->
<!-- Link trigger modal -->


<!-- Default bootstrap modal example -->
  
 
<!-- Modal end -->

<!-- modal popup script -->
<script type="text/javascript">
   
function report_popup(transection_category)//'code=' + code + '&userid=' + userid
{
    $.ajax({
                type: "POST",
                url: "<?php echo site_url('Cpayment/getreport_details');?>",
                data: "transection_category="+transection_category,
                success: function (response) {
                $(".displaycontent").html(response);
                  
                }
            });
}
</script>

<div class="modal fade displaycontent" id="myModal">
