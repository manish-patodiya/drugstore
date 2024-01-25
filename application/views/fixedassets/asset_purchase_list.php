<!-- Manage Product Start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('fixed_assets') ?></h1>
            <small><?php echo display('fixed_assets_purchase_manage') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('fixed_assets') ?></a></li>
                <li class="active"><?php echo display('fixed_assets_purchase_manage') ?></li>
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


        <!-- Manage Product report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('fixed_assets_purchase_manage') ?></h4>


                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th><?php echo display('sl') ?></th>
                                        <th><?php echo display('date') ?></th>
                                        <th><?php echo display('supplier_name') ?></th>
                                        <th><?php echo display('price') ?></th>
                                        <th style="width : 130px"><?php echo display('action') ?>   
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($purchase_list) {
                                        ?>
                                        {purchase_list}
                                        <tr>
                                        <td>{sl}</td>
                                        <td>{p_date}</td>
                                        <td>{supplier_name}</td>
                                        <td style="text-align: right;">
                                    <?php echo (($position == 0) ? "$currency {grand_total}" : "{grand_total} $currency") ?></td>
                                            
                                        <td>
                                             <a href="<?php echo base_url() . 'Fixedassets/purchase_pad_print/{id}'; ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="left" title="<?php echo 'Pad Print Purchase' ?>"><i class="fa fa-fax" aria-hidden="true"></i></a>
                                

                               
                                   
                                        <a href="<?php echo base_url() . 'Fixedassets/asset_purchase_update_form/{id}'; ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="<?php echo display('update') ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                  
                                        <a href="" class="deleteAssets btn btn-danger btn-sm" name="{id}" data-toggle="tooltip" data-placement="right" title="" data-original-title="<?php echo display('delete') ?> "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                      
                                      
                                
                                    </td>
                                    </tr>
                                    {/purchase_list}
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                            <div class="text-right"><?php
                                if ($links) {
                                    echo $links;
                                }
                                ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Manage Product End -->

<!-- Delete Product ajax code -->
<script type="text/javascript">
    $(".deleteAssets").click(function ()
    {
        var item_code = $(this).attr('name');
        var csrf_test_name = $("[name=csrf_test_name]").val();
        var x = confirm("Are You Sure,Want to Delete ?");
        if (x == true) {
            $.ajax
                    ({
                        type: "POST",
                        url: '<?php echo base_url('Fixedassets/delete_assets') ?>',
                        data: {item_code: item_code, csrf_test_name: csrf_test_name},
                        cache: false,
                        success: function (datas)
                        {
                            // alert(datas);
                            // location.reload();
                        }
                    });
        }
    });
</script>