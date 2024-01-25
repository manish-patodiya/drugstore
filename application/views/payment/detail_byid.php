<!-- Person ledger start -->
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
<!-- Person Start -->
<div class="content-wrapper">
	<section class="content-header">
	    <div class="header-icon">
	        <i class="pe-7s-note2"></i>
	    </div>
	    <div class="header-title">
	       
	        <ol class="breadcrumb">
	            <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
	            <li><a href="#"><?php echo display('personal_loan') ?></a></li>
	            <li class="active"><?php echo display('person_ledger') ?></li>
	        </ol>
	    </div>
	</section>
	<section class="content">
		<!-- Manage Product report -->
		<div class="row">
		    <div class="col-sm-12">
		        <div class="panel panel-bd lobidrag">
		            <div class="panel-heading">
		                <div class="panel-title">
		                    <h4><?php echo display('person_ledger') ?></h4>
		                </div>
		            </div>
		            <div class="panel-body">
						<div id="printableArea" style="margin-left:2px;">
						<?php
							if ($trans) {
						?>
								{trans}
								<h3> {transaction_id} </h3>
								<h4> : {amount} </h4>
								<h4 >: {date} </h4>
								{/trans}
						<?php
							}
						?>	
								<h4> <?php echo display('print_date') ?>: <?php echo date("d/m/Y h:i:s"); ?> </h4>

			                <div class="table-responsive" style="margin-top: 10px;">
			                    <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
			                        <thead>
										<tr>
											<th class="text-center"><?php echo display('transection_id')?></th>
											<th class="text-center"><?php echo display('amount')?></th>

											<th class="text-center"><?php echo display('date')?></th>

											
										</tr>
									</thead>
									<tbody>
									<?php
										if ($trans) {
									?>
									{trans}
										<tr>
											<td>{transaction_id}</td>
											<td align="center">{amount}</td>
												<td align="center">{date}</td>
											
									{/trans}
									<?php
										}
									?>
									</tbody>
									
			                    </table>
			                </div>
			            </div>
		              </div>
		            </div>
		        </div>
		    </div>
		</div>
	</section>
</div>
<!-- Person ledger End -->


<script type="text/javascript">
    //Phone select by ajax start
    $('body').on('change','#name',function(event){
        event.preventDefault(); 
        var person_id=$('#name').val();
        var csrf_test_name=  $("[name=csrf_test_name]").val();
        $.ajax({
            url: '<?php echo base_url('Csettings/phone_search_by_name')?>',
            type: 'post',
            data: {person_id:person_id,csrf_test_name:csrf_test_name}, 
            success: function (msg){
                $(".phone").val(msg);
            },
            error: function (xhr, desc, err){
                 alert('<?php echo display('failed')?>');
            }
        });        
    });
    //Phone select by ajax end
</script>
