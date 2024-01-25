<!-- Drawing from start -->
<div class="form-container">
    <form class="form-vertical" action="<?=base_url()?>Cclosing/add_drawing_entry" id="insert_deposit" method="post"  name="insert_deposit" enctype="multypart/formdata">
		<div class="lblFieldContnr">
			<div class="lblContnr"><?php echo display('title')?></div>
			<div class="fieldContnr">
				<input type="text" id="title" name="title" required />
			</div>
		</div>
		<div class="lblFieldContnr">
			<div class="lblContnr"><?php echo display('description')?></div>
			<div class="fieldContnr">
				<textarea name="description" required ></textarea>
			</div>
		</div>
		<div class="lblFieldContnr">
			<div class="lblContnr"><?php echo display('amount')?></div>
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
<!-- Drawing from end -->
