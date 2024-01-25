<!-- manufacturers sales report start -->
<h2><?php echo display('sales_report')?></h3>
<?php $today = date('Y-m-d'); ?>
	<div class="row-fluid">
		<div>
			<form class="well form-inline" method="post" action="#">
				<label class="select"><?php echo display('search_by_date_from')?></label>
					<input type="text" name="from_date"  value="<?php echo $today; ?>" data-date-format="yyyy-mm-dd" class="datepicker"/>
				<label class="select">To</label>
					<input type="text" name="to_date" data-date-format="yyyy-mm-dd" class="datepicker"/>
				<button type="submit" class="btn"><?php echo display('search')?></button>
			</form>
		</div>
	</div>
<?php
if(!empty($sales_info)){
?>
<table class="table table-striped table-condensed table-bordered">
	<thead>
		<tr>
			<th><?php echo display('product_name')?> </th>
			<th><?php echo display('quantity')?></th>
			<th><?php echo display('max_rate')?></th>
			<th><?php echo display('min_rate')?></th>
			<th> <?php echo display('average_rate')?></th>
			<th><?php echo display('amount')?></th
		</tr>
	</thead>
	<tbody>
	{sales_info}
		<tr>
			
			<td>
				<a href="<?php echo base_url().'Cinvoice/invoice_inserted_data/{invoice_id}'; ?>">
					{product_name}
				</a>
			</td>
			<td>{quantity}</td>
			<td>{max_rate}</td>
			<td>{min_rate}</td>
			<td>{average_rate}</td>
			<td>{total}</td>
			
		</tr>
	{/sales_info}
	</tbody>
	<tfoot>
		<tr>
			<td colspan="3">&nbsp;</td>
			<td><b>{sales_amount}</b></td>
		</tr>
	</tfoot>
</table>

<?php
}else{
?>
<div class="NoDataFound"><center><?php echo display('no_data_found')?></center></div>
<?php
}
?>
<!-- manufacturers sales report start -->

<!-- manufacturer Sales Report Start -->
<div class="content-wrapper">
	<section class="content-header">
	    <div class="header-icon">
	        <i class="pe-7s-note2"></i>
	    </div>
	    <div class="header-title">
	        <h1><?php echo display('Ssales_report')?></h1>
	        <small><?php echo display('manufacturer_sales_report')?></small>
	        <ol class="breadcrumb">
	            <li><a href="index.html"><i class="pe-7s-home"></i><?php echo display('home')?></a></li>
	            <li><a href="#"><?php echo display('manufacturer')?></a></li>
	            <li class="active"><?php echo display('sales_report')?></li>
	        </ol>
	    </div>
	</section>

	<!-- Search manufacturer -->
	<section class="content">
		<div class="row">
		    <div class="col-sm-12">
		        <div class="panel panel-bd lobidrag">
		            <div class="panel-heading">
		                <div class="panel-title">
		                    <h4><?php echo display('sales_report')?></h4>
		                </div>
		            </div>
		            <div class="panel-body">
	  					<?php echo form_open('#',array('class' => 'form-inline'))?>
	  					<?php $today = date('Y-m-d'); ?>
						<label class="select"><?php echo display('product_name')?><?php echo display('search_by_date_from')?></label>
						<input type="text" name="from_date"  value="<?php echo $today; ?>" data-date-format="yyyy-mm-dd" class="datepicker"/>
						<label class="select">To</label>
							<input type="text" name="to_date" data-date-format="yyyy-mm-dd" class="datepicker"/>
						<button type="submit" class="btn"><?php echo display('search')?></button>
						<?php echo form_close()?>
		            </div>
		        </div>
		    </div>
		</div>

		<!-- Sales Report -->
		<div class="row">
		    <div class="col-sm-12">
		        <div class="panel panel-bd lobidrag">
		            <div class="panel-heading">
		                <div class="panel-title">
		                    <h4><?php echo display('sales_report')?></h4>
		                </div>
		            </div>
		            <div class="panel-body">
		                <div class="table-responsive">
		                    <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
								<thead>
									<tr>
										<th><?php echo display('product_name')?> </th>
										<th><?php echo display('quantity')?> </th>
										<th><?php echo display('max_rate')?> </th>
										<th><?php echo display('min_rate')?>  </th>
										<th><?php echo display('average_rate')?></th>
										<th><?php echo display('amount')?></th
									</tr>
								</thead>
								<tbody>
								{sales_info}
									<tr>
										
										<td>
											<a href="<?php echo base_url().'Cinvoice/invoice_inserted_data/{invoice_id}'; ?>">
												{product_name}
											</a>
										</td>
										<td>{quantity}</td>
										<td>{max_rate}</td>
										<td>{min_rate}</td>
										<td>{average_rate}</td>
										<td>{total}</td>
										
									</tr>
								{/sales_info}
								</tbody>
								<tfoot>
									<tr>
										<td colspan="3">&nbsp;</td>
										<td><b>{sales_amount}</b></td>
									</tr>
								</tfoot>
		                    </table>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	</section>
</div>
<!-- manufacturer Sales Report End -->