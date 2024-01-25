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

<!-- Stock List Start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('medicine_search') ?></h1>
            <small><?php echo display('medicine_search') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('search') ?></a></li>
                <li class="active"><?php echo display('medicine_search') ?></li>
            </ol>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                    <?php
if ($this->permission1->method('manage_customer', 'read')->access()) {?>
                    <a href="<?php echo base_url('Csearch/customer') ?>" class="btn btn-success m-b-5 m-r-2"><i
                            class="ti-align-justify"> </i> <?php echo 'Patient Search' ?></a>
                    <?php
}
?>

                    <?php
if ($this->permission1->method('manage_invoice', 'read')->access()) {?>
                    <a href="<?php echo base_url('Csearch/invoice') ?>" class="btn btn-info m-b-5 m-r-2"><i
                            class="ti-align-justify"> </i> <?php echo display('invoice_search') ?></a>
                    <?php
}
?>

                    <?php
if ($this->permission1->method('manage_purchase', 'read')->access()) {?>
                    <a href="<?php echo base_url('Csearch/purchase') ?>" class="btn btn-primary m-b-5 m-r-2"><i
                            class="ti-align-justify"> </i> <?php echo display('purchase_search') ?></a>
                    <?php
}
?>
                </div>
            </div>
        </div>


        <!-- Manage Product report -->
        <?php
if ($this->permission1->method('manage_medicine', 'read')->access()) {?>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <?php echo form_open('Csearch/medicine_search', array('class' => 'form-inline', 'id' => 'validate')); ?>
                        <?php date_default_timezone_set("Asia/Dhaka");
    $today = date('Y-m-d');?>
                        <label class="select"><?php echo display('search') ?>:</label>
                        <input type="text" name="what_you_search" class="form-control"
                            placeholder='<?php echo display('what_you_search') ?>' id="what_you_search" required="">
                        <button type="submit" class="btn btn-primary"><?php echo display('search') ?></button>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('medicine_search') ?>gg</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div id="printableArea" style="margin-left:2px;">
                            <div class="table-responsive" style="margin-top: 10px;">
                                <table class="table table-bordered table-striped table-hover medicine_search">
                                    <thead>
                                        <tr>
                                            <th class="text-center"><?php echo display('sl') ?></th>
                                            <th class="text-center"><?php echo display('product_name') ?></th>
                                            <th class="text-center"><?php echo display('generic_name') ?></th>
                                            <th class="text-center"><?php echo display('manufacturer_name') ?></th>
                                            <th class="text-center"><?php echo display('product_location') ?></th>
                                            <th class="text-center"><?php echo display('stock') ?></th>
                                            <?php
if ($this->permission1->method('manage_medicine', 'read')->access()) {?>
                                            <th class="text-center"><?php echo display('details') ?></th>
                                            <?php
}
    ?>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
if ($search_result != null) {
        ?>
                                        {search_result}
                                        <tr>
                                            <td>{sl}</td>
                                            <td>{product_name}</td>
                                            <td>{generic_name}</td>
                                            <td>{manufacturer_name}</td>
                                            <td>{product_location}</td>
                                            <td>{total_stock}</td>
                                            <?php
if ($this->permission1->method('manage_medicine', 'read')->access()) {?>
                                            <td align="center">
                                                <a href="<?php echo base_url('Cproduct/product_details/{product_id}'); ?>"
                                                    target="_blank"><button
                                                        class="btn btn-success"><?php echo display('details') ?></button></a>
                                            </td>
                                            <?php
}
        ?>

                                        </tr>
                                        {/search_result}
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
        <?php
} else {
    ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('You do not have permission to access. Please contact with administrator.'); ?>
                            </h4>
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
<!-- Stock List End -->



<!-- <script type="text/javascript">

    //OnKeyUp search
    $('body').on('keyup','#what_you_search',function() {

        var keyword = $('#what_you_search').val();

        $.ajax({
            url: '<?php echo base_url('Csearch/medicine_search') ?>',
            data: {keyword:keyword},
            type: 'post',
            // beforeSend:function(){
            //     $(".mid-content").html('<img class="img img-responsive" src="'+baseUrl+'/assets/web_site/images/loading.gif">');
            // },
            success: function(data){
            	alert(data);
            	if (data == 1) {
            		$('.medicine_search').html('Product Not Found !');
            	}else{
            		$(".medicine_search tbody").html(data);
            		//$('.medicine_search tbody').append(data);
            	}
            },error:function(exc){
                alert('failed');
            }
        });
    });
</script> -->