<!-- Product js php -->
<script src="<?php echo base_url()?>my-assets/js/admin_js/json/product.js.php" ></script>

<!-- Stock report start -->
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

<!-- Stock List Supplier Wise Start -->
<div class="content-wrapper">
	<section class="content-header">
	    <div class="header-icon">
	        <i class="pe-7s-note2"></i>
	    </div>
	    <div class="header-title">
	        <h1><?php echo display('bank_ledger') ?></h1>
	        <small><?php echo display('bank_ledger') ?></small>
	        <ol class="breadcrumb">
	            <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
	            <li><a href="#"><?php echo display('bank') ?></a></li>
	            <li class="active"><?php echo display('bank_ledger') ?></li>
	        </ol>
	    </div>
	</section>

	<section class="content">

		<div class="row">
            <div class="col-sm-12">
                <div class="column">
                	<a href="<?php echo base_url('Csettings/index')?>" class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i> <?php echo display('add_new_bank')?> </a>
                
                  	<a href="<?php echo base_url('Csettings/bank_transaction')?>" class="btn btn-primary m-b-5 m-r-2"><i class="ti-align-justify"> </i> <?php echo display('bank_transaction')?> </a>

                  	<a href="<?php echo base_url('Csettings/bank_list')?>" class="btn btn-success m-b-5 m-r-2"><i class="ti-align-justify"> </i>  <?php echo display('manage_bank')?> </a>

                </div>
            </div>
        </div>

		<div class="row">
		    <div class="col-sm-12">
		        <div class="panel panel-bd lobidrag">
		            <div class="panel-heading">
		                <div class="panel-title">
		                    <h4><?php echo display('bank_ledger') ?></h4>
		                </div>
		            </div>
		            <div class="panel-body">
		            
			            <div class="text-right">
			            	<button  class="btn btn-warning text-right" href="#" onclick="printDiv('printableArea')"><?php echo display('print') ?></button>
			            </div>
		            	
						<div id="printableArea" style="margin-left:2px;">
							<div class="text-center">
								<?php if ($bank_info) { ?>
									{bank_info}
									<h3> {bank_name} </h3>
									<h5><?php echo display('ac_no') ?> : {ac_number} </h5>
									<h5 ><?php echo display('branch') ?> : {branch} </h5>
									{/bank_info}
								<?php } ?>
									<span> <?php echo display('print_date') ?>: <?php echo date("d/m/Y h:i:s"); ?> </span>
							</div>
				

			                <div class="table-responsive" style="margin-top: 10px;">
			                    <table id="" class="table table-bordered table-striped table-hover">
			                        <thead>
										<tr>
											<th class="text-center"><?php echo display('date') ?></th>
											<th class="text-center"><?php echo display('description') ?></th>
											<th class="text-center"><?php echo display('withdraw_deposite_id') ?></th>
											<th class="text-center"><?php echo display('debit_plus') ?></th>
											<th class="text-center"><?php echo display('credit_minus') ?></th>
											<th class="text-center"><?php echo display('balance') ?></th>
										</tr>
									</thead>
									<tbody>
									<?php
										if ($ledger) {
									?>
									{ledger}
										<tr>
											<td>{date}</td>
											<td>{description}</td>
											<td align="center">{deposite_id}</td>
											<td align="right"><?php echo (($position==0)?"$currency {dr}":"{dr} $currency") ?></td>
											<td align="right"><?php echo (($position==0)?"$currency {cr}":"{cr} $currency") ?></td>

											<td align="right"><?php echo (($position==0)?"$currency {ammount}":"{ammount} $currency") ?></td>
										</tr>
									{/ledger}
									<?php
										}
									?>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="3" align="right"><b><?php echo display('grand_total')?>:</b></td>

											<td align="right"><b><?php echo (($position==0)?"$currency {total_debit}":"{total_debit} $currency") ?></b></td>

											<td align="right"><b><?php echo (($position==0)?"$currency {total_credit}":"{total_credit} $currency") ?></b></td>

											<td align="right"><b><?php echo (($position==0)?"$currency {balance}":"{balance} $currency") ?></b></td>
											
										</tr>
									</tfoot>
			                    </table>
			                </div>
			            </div>
		                <div class="text-center">
		                	<?php if (isset($link)) { echo $link ;} ?>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	</section>
</div>
<!-- Stock List Supplier Wise End -->

<!-- Stock Product By Supplier -->
<script type="text/javascript">
    $('#supplier_id').change(function(e) {
        var supplier_id = $(this).val();
        $.ajax({
            type: "post",
            async: false,
            url: '<?php echo base_url('Creport/get_product_by_supplier')?>',
            data: {supplier_id: supplier_id},
            success: function(data) {
                if (data) {
                    $("#product_id").html(data);
                }else{
                    $("#product_id").html("<?php echo display('product_not_found');?> !");
                }
            },
            error: function() {
                alert('<?php echo display('request_failed_please_check_your_code_and_try_again');?>!');
            }
        });
    });
</script>