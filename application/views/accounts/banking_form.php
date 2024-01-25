<!-- Bamking form start -->
<div class="form-container">
    <form class="form-vertical" action="<?php echo base_url('cclosing/add_banking_entry')?>" id="insert_deposit" method="post"  name="insert_deposit" enctype="multypart/formdata">
		<div class="lblFieldContnr">
			<div class="lblContnr"><?php echo display('bank') ?></div>
			<div class="fieldContnr">
				<select name="bank_id" id="bank_id" required >
					<option selected="selected">--<?php echo display('bank') ?>--</option>
					{bank_list}
						<option value="{bank_id}">{bank_name}</option>
					{/bank_list}
				</select>
			</div>
		</div>
		<div class="lblFieldContnr">
			<div class="lblContnr"><?php echo display('deposit') ?></div>
			<div class="fieldContnr">
				<select name="deposit_name" id="deposit_name" required >
					<option selected="selected">--<?php echo display('select_type') ?>--</option>
					<option value="cheque"><?php echo display('cheque') ?></option>
					<option value="cash"><?php echo display('cash') ?></option>
					<option value="pay_order"><?php echo display('pay_order') ?></option>
				</select>
			</div>
		</div>
		<div class="lblFieldContnr">
			<div class="lblContnr"> <?php echo display('transaction_type') ?></div>
			<div class="fieldContnr">
				<select name="transaction_type" id="transaction_type" required >
					<option selected="selected">--<?php echo display('select_type') ?>--</option>
					<option value="deposit"><?php echo display('deposit') ?></option>
					<option value="draw"><?php echo display('draw') ?></option>
				</select>
			</div>
		</div>
		<div class="lblFieldContnr">
			<div class="lblContnr"><?php echo display('description') ?></div>
			<div class="fieldContnr">
				<textarea name="description"></textarea>
			</div>
		</div>
		<div class="lblFieldContnr">
			<div class="lblContnr"><?php echo display('amount') ?></div>
			<div class="fieldContnr">
				<input type="text" id="amount" name="amount" required />
			</div>
		</div>
		<div class="lblFieldContnr">
			<div class="lblContnr"></div>
			<div class="fieldContnr">
				<input type="submit" id="add-deposit" class="btn btn-primary" name="add-deposit" value="<?php echo display('save')?>" required />
			</div>
		</div>
    </form>
</div>
<!-- Bamking form end -->