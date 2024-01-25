<script src="<?php echo base_url()?>my-assets/js/admin_js/json/manufacturer.js.php" ></script>
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
	        <h1><?php echo display('stock_report_manufacturer_wise') ?></h1>
	        <small><?php echo display('all_stock_report_manufacturer_wise') ?></small>
	        <ol class="breadcrumb">
	            <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
	            <li><a href="#"><?php echo display('stock') ?></a></li>
	            <li class="active"><?php echo display('stock_report_manufacturer_wise') ?></li>
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
        if($this->permission1->method('stock_report_manufacturer_wise','read')->access()){ ?>
		<!-- Stock report manufacturer wise -->
	<div class="row">
			<div class="col-sm-12">
		        <div class="panel panel-default">
		            <div class="panel-body"> 
						<?php echo form_open('Creport/stock_report_manufacturer_id_wise',array('class' => 'form-inline','id' => 'stock_report_manufacturer_wise' ));?>

							<?php  $today = date('Y-m-d'); ?>
							<label class="select"><?php echo display('select_manufacturer')?>:</label>
							 <input type="text"   name="manufacturer_name" class="manufacturerSelection form-control" placeholder='<?php echo display('manufacturer_name') ?>' id="manufacturer_name" />

                                        <input id="SchoolHiddenId" class="manufacturer_hidden_value abc" type="hidden" name="manufacturer_id">
							
		                   <!--  <label class="select"><?php echo display('date') ?></label>
							<input type="text" name="stock_date" value="<?php echo $today; ?>" class="form-control productSelection datepicker" required/> -->
							<button type="submit" class="btn btn-primary"><?php echo display('search') ?></button>
		                	<a  class="btn btn-warning" href="#" onclick="printDiv('printableArea')"><?php echo display('print') ?></a>
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
		                    <h4><?php echo display('stock_report_manufacturer_wise') ?></h4>
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
								<?php } ?>
								<h4> <?php echo display('stock_date') ?> : {date} </h4>
								<h4> <?php echo display('print_date') ?>: <?php echo date("d/m/Y h:i:s"); ?> </h4>
							</div>

			                <div class="table-responsive" style="margin-top: 10px;">
			                    <table class="table table-bordered table-striped table-hover">
			                        <thead>
										<tr>
											<th class="text-center"><?php echo display('sl') ?></th>
											<th class="text-center"><?php echo display('product_name') ?></th>
											<th class="text-center"><?php echo display('product_model') ?></th>
											
											<th class="text-center"><?php echo display('in_qnty') ?></th>
											<th class="text-center"><?php echo display('out_qnty') ?></th>
											<th class="text-center"><?php echo display('stock') ?></th>
										</tr>
									</thead>
									<tbody>
									<?php
										if ($stok_report) {
									?>
									{stok_report}
										<tr>
											<td>{sl}</td>
											<td align="center">
												<a href="<?php echo base_url().'Cproduct/product_details/{product_id}'; ?>">{product_name}</a>	
											</td>
											<td align="center">{product_model}</td>
											
											
											<td align="center">{totalPurchaseQnty}</td>
											<td align="center">{totalSalesQnty}</td>
											<td align="center">{stok_quantity_cartoon}</td>
										</tr>
									{/stok_report}
									<?php
										}
									?>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="3" align="right"><b><?php echo display('grand_total')?>:</b></td>
											<td align="center"><b>{sub_total_in}</b></td>
											<td align="center"><b>{sub_total_out}</b></td>
											<td align="center"><b>{sub_total_stock}</td>
											
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