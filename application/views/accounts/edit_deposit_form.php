<!-- Edit deposite start -->
<h2><?php echo display('edit_deposit')?></h2>
<div class="form-container">
    <form class="form-vertical" action="<?=base_url()?>Cdeposit/deposit_update" id="deposit_update" method="post"  name="deposit_update" enctype="multypart/formdata">
        <legend><?php echo display('deposit_detail')?></legend>
		<?php $date = date('Y-m-d'); ?>
        <div class="row-fluid">
            <div class="span3">
                <div class="control-group">
                    <label class="control-label" for="invoice_date"><?php echo display('date')?>:</label>
                    <div class="controls">
                        <input type="text" class="span10" value="{date}" id="deposit_date" name="deposit_date" required />
                    </div>
                </div>
            </div>
            <div class="span8">
            	<div class="control-group">
                    <label class="control-label"><?php echo display('description')?>:</label>
                    <div class="controls">
                        <textarea class="span6 input-description" tabindex="1" id="description" name="description" placeholder="<?php echo display('description')?>" required>{description}</textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
			<table class="table table-condensed table-striped">
				<thead>
					<tr>
						<th colspan="2" class="span2 text-right"><?php echo display('amount')?></th>
						<th colspan="6">&nbsp;</th>
					</tr>
				</thead>
				<tbody id="form-actions">
					<tr class="">
						<td colspan="3" class="span2">
							<input type="number" class="span2 text-right" name="amount" value="{amount}" placeholder="<?php echo display('amount')?>" required />
						</td>
						<td colspan="3">
						&nbsp;<input type="hidden" class="span10" value="{deposit_id}" id="deposit_id" name="deposit_id" required />
						</td>
					</tr>
				</tbody>
			</table>
        </div>
        <div class="form-actions">
            <input type="submit" id="add-deposit" class="btn btn-primary btn-large" name="add-deposit" value="<?php echo display('save_changes')?>" />
        </div>
    </form>
</div>
<!-- Edit deposite end -->