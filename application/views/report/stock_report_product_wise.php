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

<!-- Stock List manufacturer Wise Start -->
<div class="content-wrapper">
	<section class="content-header">
	    <div class="header-icon">
	        <i class="pe-7s-note2"></i>
	    </div>
	    <div class="header-title">
	        <h1><?php echo display('stock_report_product_wise') ?></h1>
	        <small><?php echo display('stock_report_product_wise') ?></small>
	        <ol class="breadcrumb">
	            <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
	            <li><a href="#"><?php echo display('stock') ?></a></li>
	            <li class="active"><?php echo display('stock_report_product_wise') ?></li>
	        </ol>
	    </div>
	</section>

	<section class="content">
		
		<div class="row">
            <div class="col-sm-12">
                <div class="column">
                 <?php
                    if($this->permission1->method('stock_report_manufacturer_wise','read')->access()){ ?>
                        <a href="<?php echo base_url('Creport/stock_report_product_wise')?>" class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i> <?php echo display('stock_report_product_wise')?> </a>
                 <?php } ?>

                    <?php
                    if($this->permission1->method('stock_report','read')->access()){ ?>
                        <a href="<?php echo base_url('Creport')?>" class="btn btn-primary m-b-5 m-r-2"><i class="ti-align-justify"> </i>  <?php echo display('stock_report')?> </a>
                    <?php } ?>
                </div>
            </div>
        </div>

        <?php
        if($this->permission1->method('stock_report_product_wise','read')->access()){ ?>
		<div class="row">
			<div class="col-sm-12">
		        <div class="panel panel-default">
		            <div class="panel-body"> 

						<?php echo form_open('Creport/stock_report_product_wise',array('class' => 'form-vertical','id' => 'stock_report_product_wise' ));?>

							<?php  $today = date('Y-m-d'); ?>

						<div class="form-group row">
                            <label for="manufacturer_id" class="col-sm-3 col-form-label"><?php echo display('select_manufacturer')?>: <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" id="manufacturer_id" name="manufacturer_id" required="">
                            	<option value=""><?php echo display('select_one')?></option>
                            	{manufacturer_list}
                                <option value="{manufacturer_id}">{manufacturer_name} </option>
                                {/manufacturer_list}
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="product_id" class="col-sm-3 col-form-label"><?php echo display('select_product')?>: <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" id="product_id" name="product_id" required="">
	                            
	                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="from_date" class="col-sm-3 col-form-label"><?php echo display('from') ?>: <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" id="from_date" name="from_date" value="<?php echo $today; ?>" class="form-control datepicker" required/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="to_date" class="col-sm-3 col-form-label"><?php echo display('to') ?>: <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                               <input type="text" id="to_date" name="to_date" value="<?php echo $today; ?>" class="form-control datepicker" required/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-6 text-center">
                                <button type="submit" class="btn btn-primary"><?php echo display('search') ?></button>
	                			<a  class="btn btn-warning" href="#" onclick="printDiv('printableArea')"><?php echo display('print') ?></a>
                            </div>
                        </div>
						
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
		                    <h4><?php echo display('stock_report_product_wise') ?></h4>
		                </div>
		            </div>
		            <div class="panel-body">
						<div id="printableArea" style="margin-left:2px;">
							<div class="text-center">
								<?php if ($manufacturer_info) { ?>
								{manufacturer_info}
								<h3> {manufacturer_name} </h3>
								<h4><?php echo display('address') ?> : {address} </h4>
								<h4 ><?php echo display('phone') ?> : {mobile} </h4>
								{/manufacturer_info}
								<h4><?php echo display('product_model')?>:{product_model}</h4>
								<?php } ?>	
								<h4> <?php echo display('stock_date') ?> : {date} </h4>
								<h4> <?php echo display('print_date') ?>: <?php echo date("d/m/Y h:i:s"); ?> </h4>
							</div>

			                <div class="table-responsive" style="margin-top: 10px;">
			                    <table class="table table-bordered table-striped table-hover">
			                        <thead>
										<tr>
											<th class="text-center"><?php echo display('date') ?></th>
											<th class="text-center"><?php echo display('medicine_name') ?></th>
											
											<th class="text-center"><?php echo display('in_quantity') ?></th>
											<th class="text-center"><?php echo display('out_quantity') ?></th>
											<th class="text-center"><?php echo display('stock') ?></th>
										</tr>
									</thead>
									<tbody>
									<?php
										if ($stok_report) {
									?>
									{stok_report}
										<tr>
											<td>{date}</td>
											<td align="center">
												<a href="<?php echo base_url().'Cproduct/product_details/{product_id}'; ?>">{product_name}</a>	
											</td>
										
											<td style="text-align: right;">{totalPurchaseQnty}</td>
											<td style="text-align: right;">{totalSalesQnty}</td>
											
											
											<td style="text-align: right;">{SubTotalStock}</td>
										</tr>
									{/stok_report}
									<?php
										}
									?>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="2" align="right"><b><?php echo display('grand_total')?>:</b></td>

											<td style="text-align: right;"><b>{SubTotalinQnty}</b></td>

											<td style="text-align: right;"><b>{SubTotaloutQnty}</b></td>

											<td  style="text-align: right;"><b>{sub_total_stock}</td>
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
        }else{
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
<!-- Stock List manufacturer Wise End -->

<!-- Stock Product By manufacturer -->
<script type="text/javascript">
    $('#manufacturer_id').change(function(e) {
        var manufacturer_id = $(this).val();
        $.ajax({
            type: "post",
            async: false,
            url: '<?php echo base_url('Creport/get_product_by_manufacturer')?>',
            data: {manufacturer_id: manufacturer_id},
            success: function(data) {
                if (data) {
                    $("#product_id").html(data);
                }else{
                }
            },
            error: function() {
                alert('<?php echo display('request_failed_please_check_your_code_and_try_again');?>!');
            }
        });
    });
</script>