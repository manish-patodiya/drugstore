<!-- Closing container start -->
<table class="table table-striped table-bordered">
	<tr>
		<td><center><?php echo display('drawing');?></center></td>
		<td><center><?php echo display('expenses');?></center></td>
	</tr>
	<tr>
		<td>{drawing_view}</td>
		<td>{transaction_view}</td>
	</tr>
	<tr>
		<td><center><?php echo display('banking');?></center></td>
		<td><center><?php echo display('daily_closing');?></center></td>
	</tr>
	<tr>
		<td>{bank_view}</td>
		<td>{closing_html}</td>
	</tr>
</table>
<!-- Closing container end -->
