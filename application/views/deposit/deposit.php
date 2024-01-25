<div class="well">
	<div style="font-size:25px;font-weight:bold;">Deposit list</div>
</div>
<?php
if(!empty($deposits_list)){
?>
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>#</th>
			<th><?php echo display('date')?></th>
			<th><?php echo display('description')?></th>
			<th><?php echo display('amount')?></th>
			<th><?php echo display('actions')?></th>
		</tr>
	</thead>
	<tbody>
	{deposits_list}
		<tr>
			<td>{sl}</td>
			<td>{final_date}</td>
			<td>{description}</td>
			<td>{amount}</td>
			<td>
				<center>
					<a href="<?php echo base_url().'cdeposit/deposit_update_form/{deposit_id}'; ?>"><i title="<?php display('edit')?>" class="icon-edit"></i></a>
				</center>
			</td>
		</tr>
	{/deposits_list}
	</tbody>
</table>
<div id="pagin"><center>{links}</center></div>
<?php
}else{
?>
<div class="NoDataFound"><center><?php echo display('no_data_found')?></center></div>
<?php
}
?>
