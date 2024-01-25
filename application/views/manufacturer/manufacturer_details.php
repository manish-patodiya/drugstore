<!-- manufacturer Details Start -->
<div class="content-wrapper">
	<section class="content-header">
	    <div class="header-icon">
	        <i class="pe-7s-note2"></i>
	    </div>
	    <div class="header-title">
	        <h1><?php echo display('manufacturer_details') ?></h1>
	        <small><?php echo display('manufacturer_details') ?></small>
	        <ol class="breadcrumb">
	            <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
	            <li><a href="#"><?php echo display('manufacturer') ?></a></li>
	            <li class="active"><?php echo display('manufacturer_details') ?></li>
	        </ol>
	    </div>
	</section>

	<!-- manufacturer information -->
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
                    <?php
                    if($this->permission1->method('add_manufacturer','create')->access()) { ?>
                        <a href="<?php echo base_url('Cmanufacturer')?>" class="btn btn-info m-b-5 m-r-2"><i class="ti-plus"> </i> <?php echo display('add_manufacturer')?> </a>
                    <?php } ?>

                    <?php
                    if($this->permission1->method('manage_manufacturer','read')->access() || $this->permission1->method('manage_manufacturer','update')->access() || $this->permission1->method('manage_manufacturer','delete')->access()) { ?>
                        <a href="<?php echo base_url('Cmanufacturer/manage_manufacturer')?>" class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i> <?php echo display('manage_manufacturer')?> </a>
                    <?php } ?>

                    <?php
                    if($this->permission1->method('manufacturer_ledger','read')->access() || $this->permission1->method('manufacturer_ledger','update')->access() || $this->permission1->method('manufacturer_ledger','delete')->access()) { ?>
                        <a href="<?php echo base_url('Cmanufacturer/manufacturer_ledger_report')?>" class="btn btn-primary m-b-5 m-r-2"><i class="ti-align-justify"> </i>  <?php echo display('manufacturer_ledger')?> </a>
                    <?php } ?>

                    <?php
                    if($this->permission1->method('manufacturer_sales_details','read')->access() || $this->permission1->method('manufacturer_sales_details','update')->access() || $this->permission1->method('manufacturer_sales_details','delete')->access()) { ?>
                        <a href="<?php echo base_url('Cmanufacturer/manufacturer_sales_details_all')?>" class="btn btn-success m-b-5 m-r-2"><i class="ti-align-justify"> </i>  <?php echo display('manufacturer_sales_details')?> </a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php
        if($this->permission1->method('manage_manufacturer','read')->access()) { ?>
		<div class="row">
		    <div class="col-sm-12">
		        <div class="panel panel-bd lobidrag">
		            <div class="panel-heading">
		                <div class="panel-title">
		                    <h4><?php echo display('manufacturer_details') ?></h4>
		                </div>
		            </div>
		            <div class="panel-body">
	  					<div style="float:left">
							<h3><?php echo display('manufacturer_name');?> : {manufacturer_name}</h3>
							<h4><?php echo display('mobile');?> : {manufacturer_mobile}</h4>
							<h5><?php echo display('address');?> : {manufacturer_address}</h5>
						</div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Manage manufacturer -->
		<div class="row">
		    <div class="col-sm-12">
		        <div class="panel panel-bd lobidrag">
		            <div class="panel-heading">
		                <div class="panel-title">
		                    <h4><?php echo display('manufacturer_details') ?></h4>
		                </div>
		            </div>
		            <div class="panel-body">
		                <div class="table-responsive">
		                    <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
								<thead>
									<tr>
										<th><?php echo display('date') ?></th>
										<th><?php echo display('invoice_no') ?></th>
										<th><?php echo display('details') ?></th>
										<th><?php echo display('ammount') ?></th>
									</tr>
								</thead>
								<tbody>
								<?php
									if ($purchase_info) {
								?>
								{purchase_info}
									<tr>
										<td>{final_date}</td>
										<td>
											<a href="<?php echo base_url().'Cpurchase/purchase_details_data/{purchase_id}'; ?>">
												{chalan_no}
											</a>
										</td>
										<td>{purchase_details}</td>
										<td><?php echo (($position==0)?"$currency {grand_total_amount}":"{grand_total_amount} $currency") ?></td>
									</tr>
								{/purchase_info}
								<?php
									}
								?>
								</tbody>
								<tfoot>
									<tr>
										<td colspan="3" class="text-right"><b><?php echo display('grand_total')?>:</b></td>
										<td><b><?php echo (($position==0)?"$currency {total_amount}":"{total_amount} $currency") ?></b></td>
									</tr>
								</tfoot>
		                    </table>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
            <?php
        }
        else{
            ?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4><?php echo display('You do not have permission to access. Please contact with administrator.');?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }?>
	</section>
</div>
<!-- manufacturer Details End  -->