<!-- Pdf view manufacturer  -->
<table class="table table-striped table-condensed table-bordered">
	<thead>
		<tr>
			<th colspan="2"><?php echo display('date:')?> :&nbsp;{final_date}</th>
			<th colspan="2"><?php echo display('name:')?> : &nbsp;<span style="font-weight:normal">{manufacturer_name}</span></th>
			<th><?php echo display('invoice_no:')?> :&nbsp; {chalan_no}</th>
		</tr>
		<tr>
			<th colspan="5">&nbsp;</th>
		</tr>
		<tr>
			<th>#</th>
			<th><?php echo display('product_name:')?></th>
			<th><?php echo display('total_quantity:')?></th>
			<th><?php echo display('rates:')?></th>
			<th><?php echo display('total_amount')?></th>
		</tr>
	</thead>
	<tbody>
	{purchase_all_data}
		<tr>
			<td>{sl}</td>
			<td>{product_name}</td>
			<td>{quantity}</td>
			<td>{rate}</td>
			<td>{total_amount}</td>
		</tr>
	{/purchase_all_data}
	</tbody>
	<tfoot>
		<tr>
			<td style="text-align:right" colspan="4"><b><?php echo display('grand_total:')?></b></td>
			<td class="text-right">{sub_total_amount}</td>
		</tr>
	</tfoot>
</table>
<!-- Pdf view manufacturer  -->
