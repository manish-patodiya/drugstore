<script src="<?php echo base_url() ?>my-assets/js/admin_js/json/employee.js.php" ></script>
<!-- Manage employee Start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('expense') ?></h1>
            <small><?php echo display('manage_expense_item') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('expense') ?></a></li>
                <li class="active"><?php echo display('manage_expense_item') ?></li>
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

     

        <!-- Manage employee -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('manage_expense_item') ?></h4>
                        </div>
                     
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample3" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <!--<th>id</th>-->
                                    <th><?php echo display('sl') ?></th>
                                    <th><?php echo display('expense_item_name') ?></th>
                                    <th><?php echo display('action') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($expense_item_list) {
                                        $sl=1;
                                        foreach ($expense_item_list as $expense) {
                                            ?>
                                            <tr>
                                            <td><?php echo $sl;?></td>
                                            <td><?php echo $expense['expense_item_name']; ?></td>
                                                <td>
                                                    
                                        <a href="<?php echo base_url("Cexpense/delete_expense_item/".$expense['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-trash"></i></a>
                                                   
                                                    
                                                </td>
                                            </tr>

         
                                            <?php $sl++;
                                        }
                                    }else{
                                    ?>
                                    <tr><td colspan="3" class="text-center"> No Record Found </td></tr>
                                <?php } ?>
                                </tbody>

                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
