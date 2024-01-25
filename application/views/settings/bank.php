<!-- Bank List Start -->
<div class="content-wrapper">
	<section class="content-header">
	    <div class="header-icon">
	        <i class="pe-7s-note2"></i>
	    </div>
	    <div class="header-title">
	        <h1><?php echo display('bank_list') ?></h1>
	        <small><?php echo display('bank_list') ?></small>
	        <ol class="breadcrumb">
	            <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
	            <li><a href="#"><?php echo display('settings') ?></a></li>
	            <li class="active"><?php echo display('bank_list') ?></li>
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

                    <?php
                    if($this->permission1->method('add_new_bank','create')->access()){ ?>
                        <a href="<?php echo base_url('Csettings/index')?>" class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i> <?php echo display('add_new_bank')?> </a>
                    <?php } ?>

                    <?php
                    if($this->permission1->method('bank_transaction','create')->access()){ ?>
                        <a href="<?php echo base_url('Csettings/bank_transaction')?>" class="btn btn-success m-b-5 m-r-2"><i class="ti-align-justify"> </i>  <?php echo display('bank_transaction')?> </a>
                    <?php } ?>



                </div>
            </div>
        </div>

        <?php
        if($this->permission1->method('manage_bank','read')->access()){ ?>
		<!-- Bank List -->
		<div class="row">
		    <div class="col-sm-12">
		        <div class="panel panel-bd lobidrag">
		            <div class="panel-heading">
		                <div class="panel-title">
		                    <h4><?php echo display('bank_list') ?> </h4>
		                </div>
		            </div>
		            <div class="panel-body">
		                <div class="table-responsive">
		                    <table id="dataTableExample3" class="table table-bordered table-striped table-hover">
			           			<thead>
									<tr>
										<th><?php echo display('sl') ?></th>
										<th><?php echo display('bank_name') ?></th>
										<th><?php echo display('ac_name') ?></th>
										<th><?php echo display('ac_no') ?></th>
										<th><?php echo display('branch') ?></th>
										<th><?php echo display('balance') ?></th>
										<th><?php echo display('signature_pic') ?></th>
                                        <?php
                                        if($this->permission1->method('manage_bank','update')->access()){ ?>
										  <th><?php echo display('action') ?></th>
                                        <?php } ?>
									</tr>
								</thead>
								<tbody>
								<?php
								 if ($bank_list) {
								?>
								{bank_list}
									<tr>
										<td>{sl}</td>
										<td><a href="<?php echo base_url("Csettings/bank_ledger/{bank_id}");?>" >{bank_name}</a></td>
										<td>{ac_name}</td>
										<td>{ac_number}</td>
										<td>{branch}</td>
										<td><?php echo (($position==0)?"$currency {balance}":"{balance} $currency") ?></td>
										<td>
										<img src="{signature_pic}" class="img img-responsive center-block" height="80" width="100"></td>

                                        <?php
                                        if($this->permission1->method('manage_bank','update')->access()){ ?>
                                        <td>
											<a href="<?php echo base_url().'Csettings/edit_bank/{bank_id}'; ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="<?php echo display('update') ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
										</td>
                                        <?php } ?>

									</tr>
								{/bank_list}
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
        <?php }else{
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
        } ?>
	</section>
</div>
<!-- Bank List End -->

