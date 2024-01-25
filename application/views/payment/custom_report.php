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
        if($this->permission1->method('report','read')->access()) { ?>
		<div class="row">
			<div class="col-sm-12">
		        <div class="panel panel-default">
		            <div class="panel-body"> 
	                	<?php echo form_open('Cpayment/custom_search_datewise',array('class' => 'form-inline', ))?>
	                		<?php $today = date('Y-m-d'); ?>
							<label class="select"><?php echo display('search_by_date') ?>: <?php echo display('from') ?></label>
								<input type="text" name="from_date"  value="<?php echo $today; ?>" class="datepicker form-control"/>
							<label class="select"><?php echo display('to') ?></label>
								<input type="text" name="to_date" value="<?php echo $today; ?>" class="datepicker form-control"/>
			                <label class="select"><?php echo display('account')?>: </label>
			                  <select name="accounts" class="form-control"> 
				                <option> <?php echo display('all') ?> </option>
				                {category}
				                <option value="{parent_id}">{account_name}</option>
				                {/category}
				                
			                </select>
							<button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i>
 <?php echo display('search') ?></button>
						<?php echo form_close()?>		            
		            </div>
		        </div>
		    </div>
	    </div>
		
		<div class="row">
		    <div class="col-sm-12">
		        <div class="panel panel-bd lobidrag">
		            <div class="panel-heading">
		                <div class="panel-title">
		                    <h4></h4>
		                </div>
		            </div>
		            <div class="panel-body">
						<div id="printableArea" style="margin-left:2px;">
						
				
			                <div class="table-responsive" style="margin-top: 10px;">
			                	<p style="font-size: 17px; color: black; font-weight:bold">
			                </p>
			                    <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
			                        <thead>
										<tr>
											<th><?php echo display('sl') ?></th>
											<th class="text-center"><?php echo display('name')?></th>
											<th class="text-center"><?php echo display('account_type')?></th>

											<th class="text-center"><?php echo display('receipt_amount')?></th>

											<th class="text-center"><?php echo display('paid_amount')?></th>
											
										</tr>
									</thead>
									
									<tbody>
									
								<?php
										if ($ledger) {
									?>
									<?php $sl = 1; ?>
									<?php foreach ($ledger as $row){?>
										<tr>
											<td><?php echo $sl; ?></td>
											<td  align="left">
												
				                  <?php echo $row['person_name'];
				                  echo $row['customer_name'];
				                  
				                  echo $row['manufacturer_name'];
				                  if($row['person_name']==''AND $row['customer_name']==''AND $row['manufacturer_name']==''){
				                  	echo $row['relation_id'];
				                  }
				                  
				                  ?>
				                  	
				                <a href="<?php echo base_url().'Cinvoice/invoice_inserted_data/'.$row['invoice_no']; ?>"> 
															<?php echo $row['invoice_no'];?>
															</a> 	
				                  </td>
											<td align="left">
                                <?php  $tran_cat=$row['transection_category'];
                                if($tran_cat==1){
                                	echo "manufacturer";
                                }elseif($tran_cat==2) {
                                	echo "customer";
                                }elseif ($tran_cat==3) {
                                	echo "Office";
                                }else{
                                	echo "Loan";
                                } 
               

                                ?>
											</td>
											<td style="text-align: right;"><?php

                                     $debt=$row['debit'];

											 $sign=(($position==0)?"$currency":$debt);
											if($debt==0){
												echo '';
											}else{
												echo $sign.number_format($debt, 2, '.', ',');
											} ?></td>
											<td align="right"><?php $sign=(($position==0)?"$currency":$row['credit']);
											$credit=$row['credit'];

											if($credit==0){
												echo '';
											}else{
												echo $sign.number_format($credit, 2, '.', ','); } ?></td>
											</tr>
											<!--  -->
									
									
									
									 <?php $sl++; ?>
									<?php } ?>
									<?php
										}
									?>
									</tbody>
									<tfoot>
										<tr  align="right">
											<td colspan="3"  align="right"><b>Total:</b></td>
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
   
function report_popup(transection_category)
{
    $.ajax({
                type: "POST",
                url: "<?php echo site_url('Cpayment/today_details');?>",
                data: "transection_category="+transection_category,
                success: function (response) {
                $(".displaycontent").html(response);
                  
                }
            });
}
</script>

<div class="modal fade displaycontent" id="myModal">
