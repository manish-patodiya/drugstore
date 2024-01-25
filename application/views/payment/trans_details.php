<!-- Manage Product Start -->
<div class="content-wrapper">
	<section class="content-header"
	    <div class="header-title">
	        <h1><?php echo display('transection_report') ?></h1>
	        <small><?php echo display('manage_your_payment') ?></small>
	        <ol class="breadcrumb">
	            <li><a href="<?php echo base_url('')?>"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
	            <li><a href="<?php echo base_url('Cpayment')?>"><?php echo display('transection') ?></a></li>
	            <li class="active"><?php echo display('manage_transection') ?></li>
	        </ol>
	    </div>
	</section>

	<section class="content">
		<!-- Alert Message -->
	    <?php
	        $message = $this->session->userdata('message');
	        if (isset($message)) {
	    ?>
	    <div class="alert alert-info alert-dismissable">
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	        <?php echo $message ?>                    
	    </div>
	    <?php 
	        $this->session->unset_userdata('message');
	        }
	        $error_message = $this->session->userdata('error_message');
	        if (isset($error_message)) {
	    ?>
	    <div class="alert alert-danger alert-dismissable">
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	        <?php echo $error_message ?>                    
	    </div>
	    <?php 
	        $this->session->unset_userdata('error_message');
	        }
	    ?>

	    <div class="row">
            <div class="col-sm-12">
                <div class="column">
                
                  <a href="<?php echo base_url('Cpayment')?>" class="btn btn-info m-b-5 m-r-2"><i class="ti-plus"> </i><?php echo display('add_transection') ?></a>

                </div>
            </div>
        </div>


		<!-- Manage Product report -->
		<div class="row">
		    <div class="col-sm-12">
		        <div class="panel panel-bd lobidrag">
		            <div class="panel-heading">
		                <div class="panel-title">
		                    <h4><?php echo display('transection_report') ?></h4>
		                </div>
		            </div>
		            <div class="panel-body">
		                <div class="table-responsive">
		                    <table id="dataTableExample2" class="datatable table table-striped table-hover">
		                        <thead>
									<tr>
										<th><?php echo display('sl') ?></th>
										<th><?php echo display('date') ?></th>
										<th><?php echo display('transaction_id') ?></th>
										<th><?php echo display('person_id') ?></th>
										<th><?php echo display('total_transection') ?></th>
										<th><?php echo display('amount') ?></th>	
										
									</tr>
								</thead>
								<tbody>
								<?php
									if ($trans_report) {
								?>
								{trans_report}
									<tr>
										<td>{sl}</td>
										<td>
											
											{date_of_transection}
													
										</td>
										<td>{transaction_id}</td>
										
										<td><a href="
											<?php echo base_url('Cpayment/tran_det_id/{relation_id}');?>">{relation_id}</a></td>
										<td>{Total_trans}</td>
										
										<td>{amount}</td>

										
									
									</tr>
								{/trans_report}
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
	</section>
</div>
<!-- Manage Product End -->

<!-- Delete Product ajax code -->
