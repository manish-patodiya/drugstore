<!-- Add new customer start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('payroll') ?></h1>
            <small><?php echo display('manage_benefits') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('payroll') ?></a></li>
                <li class="active"><?php echo display('manage_benefits') ?></li>
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


        <!-- New payroll -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('manage_benefits') ?> </h4>
                        </div>
                    </div>
                    <div class="panel-body">
                      <table width="100%" class="datatable table table-striped table-bordered table-hover"  id="dataTableExample3">
                    <thead>
                        <tr>
                            <th><?php echo display('sl') ?></th>
                            <th><?php echo display('benefits') ?></th>
                            <th><?php echo display('benefit_type') ?></th>
                           <th><?php echo display('action') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($beneficial_list)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($beneficial_list as $que) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $que->sal_name; ?></td>
                                    <td><?php  $type=$que->salary_type;
                                    if($type==1){
                                        echo 'Add';
                                    }else{
                                        echo "Deduct";
                                    }
                                    ?></td>                            
                                    <td class="center">
         <?php if($this->permission1->method('manage_benefits','update')->access()){ ?>                          
                                        <a href="<?php echo base_url("Cpayroll/benefits_update_form/$que->salary_type_id") ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a> 
                                    <?php }?>
     <?php if($this->permission1->method('manage_benefits','delete')->access()){ ?>                             
                                        <a href="<?php echo base_url("Cpayroll/delete_benefits/$que->salary_type_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-trash"></i></a> 
                                       <?php }?>
                                    </td>
                                </tr>
                                <?php $sl++; ?>
                            <?php } ?> 
                        <?php } ?> 
                    </tbody>
                </table>  <!-- /.table-responsive -->
                </div>
                 </div>
            </div>

        </div>
    </section>
</div>
<!-- Add new beneficial end -->




