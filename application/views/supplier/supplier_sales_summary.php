<!-- supplier Sales Summary Start -->
<div class="content-wrapper">
	<section class="content-header">
	    <div class="header-icon">
	        <i class="pe-7s-note2"></i>
	    </div>
	    <div class="header-title">
	        <h1><?php echo display('supplier_sales_summary') ?></h1>
	        <small><?php echo display('supplier_sales_summary') ?></small>
	        <ol class="breadcrumb">
	            <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
	            <li><a href="#"><?php echo display('supplier') ?></a></li>
	            <li class="active"><?php echo display('supplier_sales_summary') ?></li>
	        </ol>
	    </div>
	</section>

	<!-- Search supplier -->
	<section class="content">
		
		<div class="row">
            <div class="col-sm-12">
                <div class="column">
                
                  <a href="<?php echo base_url('Csupplier')?>" class="btn btn-info m-b-5 m-r-2"><i class="ti-plus"> </i> <?php echo display('add_supplier')?> </a>

                  <a href="<?php echo base_url('Csupplier/manage_supplier')?>" class="btn btn-warning m-b-5 m-r-2"><i class="ti-align-justify"> </i> <?php echo display('manage_supplier')?> </a>

                  <a href="<?php echo base_url('Csupplier/supplier_ledger_report')?>" class="btn btn-primary m-b-5 m-r-2"><i class="ti-align-justify"> </i>  <?php echo display('supplier_ledger')?> </a>

                  <a href="<?php echo base_url('Csupplier/supplier_sales_details_all')?>" class="btn btn-success m-b-5 m-r-2"><i class="ti-align-justify"> </i>  <?php echo display('supplier_sales_details')?> </a>

                </div>
            </div>
        </div>
        
		<!-- Sales Report -->
		<div class="row">
		    <div class="col-sm-12">
		        <div class="panel panel-bd lobidrag">
		            <div class="panel-heading">
		                <div class="panel-title">
		                   <h4><?php echo display('supplier_sales_summary') ?></h4>
		                </div>
		            </div>
		            <div class="panel-body">
		                <div class="table-responsive">
		                <?php if ($supplier_detail) { ?>
							{supplier_detail}
							<h3> {supplier_name} </h3>
							<h5><?php echo display('address') ?> : {address} </h5>
							<h5 ><?php echo display('phone') ?> : {mobile} </h5>
							{/supplier_detail}
						<?php } ?>
						
		                    <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
								<thead>
									<tr>
										<th style="text-align:left !Important"> <?php echo display('date') ?> </th>
										<th><?php echo display('product_name') ?> </th>
										<th><?php echo display('quantity') ?> </th>
										<th style="text-align:right !Important"> <?php echo display('rate') ?> </th>
										<th style="text-align:right !Important"> <?php echo display('ammount') ?></th>
									</tr>
								</thead>
								<tbody>
								<?php
									if ($sales_info) {
								?>
								{sales_info}
									<tr>
										<td style="text-align:left !Important"> {date}</td>
										<td>
											<a href="<?php echo base_url().'Cproduct/product_details/{product_id}'; ?>">
												{product_name}-({product_model})
											</a>
										</td>
										<td style="text-align:right !Important"> {quantity}</td>
										<td style="text-align:right !Important"><?php echo (($position==0)?"$currency {supplier_rate}":"{supplier_rate} $currency") ?></td>
										<td style="text-align:right !Important"><?php echo (($position==0)?"$currency {total}":"{total} $currency") ?></td>
										 
									</tr>
								{/sales_info}
								<?php
									}
								?>
								</tbody>
								<tfoot>
									<tr>
										<td colspan="3"></td>
										<td><b><?php echo display('grand_total') ?>:</b></td>
										<td style="text-align:right !Important">
											<b>
											<?php echo (($position==0)?"$currency {sub_total}":"{sub_total} $currency") ?>
											</b>
										</td>
									</tr>
								</tfoot>
		                    </table>
		                </div>
		                <div class="text-right"><?php echo $links?></div>
		            </div>
		        </div>
		    </div>
		</div>
	</section>
</div>
<!-- supplier Sales Summary End -->