<script src="<?php echo base_url()?>my-assets/js/admin_js/json/product_invoice.js.php" ></script>
<script src="<?php echo base_url()?>my-assets/js/admin_js/invoice.js" type="text/javascript"></script>
<!-- Manage Product Start -->
<div class="content-wrapper">
	<section class="content-header">
	    <div class="header-icon">
	        <i class="pe-7s-note2"></i>
	    </div>
	    <div class="header-title">
	        <h1><?php echo display('medicine_info') ?></h1>
	        <small><?php echo display('manage_your_product') ?></small>
	        <ol class="breadcrumb">
	            <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
	            <li><a href="#"><?php echo display('product') ?></a></li>
	            <li class="active"><?php echo display('medicine_info') ?></li>
	        </ol>
	    </div>
	</section>
	

	<section class="content">

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
                
                  <a href="<?php echo base_url('Cproduct')?>" class="btn btn-info m-b-5 m-r-2"><i class="ti-plus"> </i><?php echo display('add_product')?></a>

                  <a href="<?php echo base_url('Cproduct/add_product_csv')?>" class="btn btn-success m-b-5 m-r-2"><i class="ti-plus"> </i><?php echo display('import_product_csv')?></a>

                </div>
            </div>
        </div>

        <?php
        if($this->permission1->method('manage_medicine','read')->access() ) { ?>

        <div class="row">
			<div class="col-sm-12">
		        <div class="panel panel-default">
		            <div class="panel-body"> 

						<form action="<?php echo base_url('Cproduct/product_by_search')?>" class="form-inline" method="post" accept-charset="utf-8">
							
		                    <label class="select"><?php echo display('product_name')?>:</label>
		                    
							 <input type="text" name="product_name" onkeyup="invoice_productList(1);" class="form-control productSelection" placeholder='<?php echo display('product_name') ?>' required="" id="product_name" tabindex="7"  >

                                            <input type="hidden" class="autocomplete_hidden_value product_id_1" name="product_id" id="SchoolHiddenId" />

							<button type="submit" class="btn btn-primary"><?php echo display('search')?></button>
		                	
			            </form>		            
			        </div>
		        </div>
		    </div>
	    </div>

		<!-- Manage Product report -->
		<div class="row">
		    <div class="col-sm-12">
		        <div class="panel panel-bd lobidrag">
		            <div class="panel-heading">
		                <div class="panel-title">
		                    <h4><?php echo display('medicine_info') ?></h4>
		                    
		                </div>
		            </div>
		            <div class="panel-body">
		                <div class="table-responsive">
		                    <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
		                        <thead>
									<tr>
										<th><?php echo display('sl') ?></th>
										<th><?php echo display('product_name') ?></th>
										<th><?php echo display('generic_name') ?></th>
										<th><?php echo display('model') ?></th>
										<th><?php echo display('manufacturer') ?></th>	
										<th><?php echo display('shelf') ?></th>
										<th><?php echo display('sell_price') ?></th>
									    <th><?php echo display('tax') ?></th>
										<th><?php echo display('unit') ?></th>
										<th><?php echo display('box_size') ?></th>
										<th><?php echo display('image') ?>s</th>
										<th style="width : 130px"><?php echo display('action') ?></th>
									</tr>
								</thead>
								<tbody>
							<?php
									if ($products_list) {
								?>
								<?php $sl = 1; ?>
									<?php foreach ($products_list as $row){?>
									


										<tr>
							<td><?php echo $sl; ?></td>

							<td>
							<a href="<?php echo base_url().'Cproduct/product_details/'.$row['product_id']; ?>">
							<?php echo $row['product_name']; ?>
							</a>			
							</td>
							<td><a href="<?php echo base_url().'Cproduct/medicine_search_details/'.$row['generic_name']; ?>"><?php echo $row['generic_name']; ?></a></td>
							<td><a href="<?php echo base_url().'Cproduct/medicine_search_type/'.$row['product_model']; ?>"><?php echo $row['product_model']; ?> </a></td>
							<td><a href="<?php echo base_url().'Cproduct/medicine_search_manufactures/'.$row['manufacturer_id']; ?>"><?php echo $row['manufacturer_name']; ?></a></td>
							<td><?php echo $row['product_location']; ?></td>

							<td style="text-align: right;">

							<?php echo (($position==0)?"$currency":$row['price']);echo $row['price']; ?>
							</td>
							<td><?php  
							    $tx=$row['tax'];
							    $txvl=$tx*100;
							    echo $txvl;

							    ?> %</td>
							<td><?php echo $row['unit']; ?></td>
							<td style="text-align: right;"><?php echo $row['box_size']; ?></td>
							<td class="text-center">
							<img src="<?php echo $row['image']; ?>" class="img img-responsive" height="50" width="50">
							</td>
							<td>
								<center>
								<?php echo form_open()?>

									<a href="<?php echo base_url().'Cqrcode/qrgenerator/'.$row['product_id']; ?>" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="left" title="<?php echo display('qr_code') ?>"><i class="fa fa-qrcode" aria-hidden="true"></i></a>

									<a href="<?php echo base_url().'Cbarcode/barcode_print/'.$row['product_id']; ?>" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="left" title="<?php echo display('barcode') ?>"><i class="fa fa-barcode" aria-hidden="true"></i></a>

									<a href="<?php echo base_url().'Cproduct/product_update_form/'.$row['product_id']; ?>" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="left" title="<?php echo display('update') ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>

									<a href="<?php echo base_url('Cproduct/product_delete/'.$row['product_id'])?>" onClick="return confirm('Are You Sure to Want to Delete?')" class=" btn btn-danger btn-xs" name="pidd" data-toggle="tooltip" data-placement="right" title="" data-original-title="<?php echo display('delete') ?> "><i class="fa fa-trash-o" aria-hidden="true"></i></a>

								<?php echo form_close()?>
								</center>
										</td>
									</tr>
								 <?php $sl++; ?>
									<?php } ?>
									<?php
										}
									?>
								</tbody>
		                    </table>
		                     <div class="text-right"><?php echo $links?></div>
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
        }
        ?>


	</section>
</div>
<!-- Manage Product End -->

