<!-- Manage Product Start -->
<div class="content-wrapper">
	<section class="content-header">
	    <div class="header-icon">
	        <i class="pe-7s-note2"></i>
	    </div>
	    <div class="header-title">
	        <h1><?php echo display('manage_account') ?></h1>
	        <small><?php echo display('manage_account') ?></small>
	        <ol class="breadcrumb">
	            <li><a href="<?php echo base_url('')?>"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
	            <li><a href="<?php echo base_url('Account_Controller')?>"><?php echo display('account') ?></a></li>
	            <li class="active"><?php echo display('manage_account') ?></li>
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
                    if($this->permission1->method('create_accounts','create')->access()) { ?>
                     <a href="<?php echo base_url('Account_Controller')?>" class="btn btn-info m-b-5 m-r-2"><i class="ti-plus"> </i><?php echo display('create_accounts') ?></a>
                   <?php } ?>
                </div>
            </div>
        </div>

        <?php
        if($this->permission1->method('manage_account','read')->access()) { ?>
		<!-- Manage Account -->
		<div class="row">
		    <div class="col-sm-12">
		        <div class="panel panel-bd lobidrag">
		            <div class="panel-heading">
		                <div class="panel-title">
		                    <h4><?php echo display('manage_account') ?></h4>
		                </div>
		            </div>
		            <div class="panel-body">
		                <div class="table-responsive">
		                    <table id="dataTableExample3" class="table table-bordered table-striped table-hover">
		                        <thead>
									<tr>
										<th><?php echo display('sl') ?></th>
										<th><?php echo display('account_name') ?></th>
										<th><?php echo display('date') ?></th>

                                        <?php
                                        if($this->permission1->method('manage_account','update')->access() || $this->permission1->method('manage_account','delete')->access()) { ?>
										  <th style="width : 130px"><?php echo display('action') ?></th>
										<?php } ?>

									</tr>
								</thead>
								<tbody>
								<?php
								  if ($account_list){
									$sl = 1; 
									foreach($account_list as $row){?>
									<tr>
										<td><?php echo $sl; ?></td>
										<td>
											<a href="<?php echo base_url().'Account_Controller/date_summary/'.$row['account_id']; ?>"><?php echo $row['account_name'];?>
											</a> 							
										</td>
										<td><?php echo $row['created_at'] ?></td>
                                        <?php
                                        if($this->permission1->method('manage_account','update')->access() || $this->permission1->method('manage_account','delete')->access()) { ?>
                                            <td>
											<center>
                                            <?php
                                              if($this->permission1->method('manage_account','update')->access()){ ?>
                                                <a href="<?php echo base_url().'Account_Controller/account_update_form/'.$row["account_id"]; ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="<?php echo display('update') ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                              <?php } ?>

                                            <?php
                                              if($this->permission1->method('manage_account','delete')->access()) { ?>
                                                <a href="" class="deleteAccount btn btn-danger btn-sm" name="<?php echo $row['account_id'];?>" data-toggle="tooltip" data-placement="right" title="" data-original-title="<?php echo display('delete') ?> "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                            <?php } ?>

											</center>
										</td>
										<?php } ?>
									</tr>
									<?php $sl++;
										} 
									}
								?>
								</tbody>
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
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('You do not have permission to access. Please contact with administrator.');?></h4>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
	</section>
</div>
<!-- Manage Product End -->

<!-- Delete Product ajax code -->
<script type="text/javascript">
	$(".deleteAccount").click(function(){	
		var account_id=$(this).attr('name');
		var csrf_test_name=  $("[name=csrf_test_name]").val();
		var x = confirm("<?php echo display('are_you_sure_to_delete') ?>");
		if (x==true){
		$.ajax
	   ({
			type: "POST",
			url:'<?php echo base_url('Account_Controller/account_delete')?>',
			data: {account_id:account_id,csrf_test_name:csrf_test_name},
			cache: false,
			success: function(datas)
			{
				location.reload();
			} 
		});
		}
	});
</script>
