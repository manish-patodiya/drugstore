<!-- Product js php -->
<script src="<?php echo base_url() ?>my-assets/js/admin_js/json/product.js.php" ></script>

<!-- Stock report start -->
<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        document.body.style.marginTop = "0px";
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>

<!-- Stock List Supplier Wise Start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('fixed_assets') ?></h1>
            <small><?php echo display('store_wise_stock') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('fixed_assets') ?></a></li>
                <li class="active"><?php echo display('store_wise_stock') ?></li>
            </ol>
        </div>
    </section>

    <section class="content">

       

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('store_wise_stock') ?></h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div id="printableArea" style="margin-left:2px;">
                             

                         

                            <div class="table-responsive" style="margin-top: 10px;">
                                <?php foreach($store_list as $store){ 
                           $pur_assets = $this->db->select('*')->from('fixed_assets')->group_by('item_code')->get()->result();

                                    ?>
                            
                            
                                <table class="table table-bordered table-striped table-hover">
                                    <caption><h1 class="text-center" style="color:#E91E63"><?php echo $store['store_name']?></h1></caption>
                                    <thead style="background-color: #558B2F;color:#fff">
                                        <tr>
                        <th class="text-center"><?php echo display('sl') ?></th>
                        <th class="text-center"><?php echo display('item_code') ?></th>
                        <th class="text-center"><?php echo display('item_name') ?></th>
                        <th class="text-center"><?php echo display('stock') ?> </th>
                                            
                                             <?php echo form_close() ?>
                                             </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                  <?php 
                                  $sl=1;
                                  foreach($pur_assets as $asset){?>
                                    <tr>
                                        <td><?php echo $sl; ?></td>
                                        <td><?php echo $asset->item_code?></td>
                                        <td><?php echo $asset->item_name?></td>
                                        <td>
                                          <?php $item_code = $asset->item_code;
                                          $total_in = $this->db->select('sum(qty) as total_purchase')->from('stock_fixed_asset')->where('item_code',$item_code)->where('store_code',$store['store_code'])->get()->row();

                                          $total_transfer_in = $this->db->select('sum(qty) as total_transferin')->from('store_wise_fixed_assets')->where('item_code',$item_code)->where('to_store_code',$store['store_code'])->get()->row();
                                          $total_in = (!empty($total_in->total_purchase)?$total_in->total_purchase:0)+(!empty($total_transfer_in->total_transferin)?$total_transfer_in->total_transferin:0);

                                          $total_transfer_in = $this->db->select('sum(qty) as total_transferout')->from('store_wise_fixed_assets')->where('item_code',$item_code)->where('from_store_code',$store['store_code'])->get()->row();
                                          $total_out = (!empty($total_transfer_in->total_transferout)?$total_transfer_in->total_transferout:0);
                                          echo $stock = $total_in-$total_out;
                                          ?>  
                                        </td>
                                    </tr>
                                    <?php $sl++;}?>
                                    </tbody>
                                    
                                </table>
                                <?php } ?>
                            </div>
                            </div>
                        </div>
                        <div class="text-right"><?php echo $links ?></div>
                    </div>
                </div>
            </div>
   
    </section>
</div>

