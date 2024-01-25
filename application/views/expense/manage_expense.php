<script src="<?php echo base_url() ?>my-assets/js/admin_js/json/employee.js.php" ></script>
<!-- Manage employee Start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('expense') ?></h1>
            <small><?php echo display('manage_expense') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('expense') ?></a></li>
                <li class="active"><?php echo display('manage_expense') ?></li>
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
                            <h4><?php echo display('manage_expense') ?></h4>
                        </div>
                     
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <!--<th>id</th>-->
                                        <th><?php echo display('date') ?></th>
                                        <th><?php echo display('type') ?></th>
                                        <th><?php echo display('amount') ?></th>
                                      
                                        <th><?php echo display('action') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($expense_list) {
                                        foreach ($expense_list as $expense) {
                                            ?>
                                            <tr>
                                           
                                                <td><?php echo $expense['date']; ?></td>
                                                <td>
                                                   
                                                        <?php echo $expense['type'].' Expense'; ?>
                                                   
                                                </td>
                                                <td><?php echo $expense['amount']; ?></td>
                                              
                                                <td>
                                                    
        <?php if($this->permission1->method('manage_expense','delete')->access()){ ?>
                                                      <a href="<?php echo base_url("Cexpense/delete_expense/".$expense['voucher_no']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-trash"></i></a>
                                                    <?php }?>
                                                    
                                                </td>
                                            </tr>

         
                                            <?php
                                        }
                                    }
                                    ?>
                                </tbody>

                            </table>
                            <div class="text-center"><?php echo $links ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
