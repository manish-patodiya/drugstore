<div class="content-wrapper">
 <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('role_permission') ?></h1>
            <small><?php echo display('role_list') ?></small>

        </div>

<div class="content">
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

    <?php
    if($this->permission1->method('role_list','read')->access() || $this->permission1->method('role_list','update')->access() || $this->permission1->method('role_list','delete')->access()){ ?>
    <div class="row">
    <div class="col-sm-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4><?php echo display('role_list') ?></h4>
                    <p  style="text-align: right;"><a href="<?php echo base_url().'Permission/add_role'; ?>" class="btn btn-success"><?php echo display('add_role') ?></a></p>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="dataTableExample4" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th><?php echo display('sl') ?></th>
                            <th><?php echo display('role_name') ?></th>
                            <?php
                            if($this->permission1->method('role_list','update')->access() || $this->permission1->method('role_list','delete')->access()){ ?>
                             <th style="width : 130px"><?php echo display('action') ?></th>
                            <?php } ?>
                        </tr>
                        </thead>
        
                         <?php
                           if($user_count >0){
                                  foreach($user_list as $key=>$row){
                                    ?>
                                    <tr>
                                    <td><?php echo ++$key; ?></td>
                                    <td><?php echo $row['type']; ?></td>

                                    <?php
                                    if($this->permission1->method('role_list','update')->access() || $this->permission1->method('role_list','delete')->access()){ ?>
                                    <td>
                                        <center>
                                          <?php
                                           if($this->permission1->method('role_list','update')->access()){ ?>
                                            <a href="<?php echo base_url().'Permission/edit_role/'.$row['id']; ?>" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="left" title="<?php echo display('update') ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                          <?php } ?>

                                            <?php
                                            if($this->permission1->method('role_list','delete')->access()){ ?>
                                               <a href="<?php echo base_url().'Permission/role_delete/'.$row['id']; ?>" onClick="return confirm('Are You Sure to Want to Delete?')" class=" btn btn-danger btn-xs" name="pidd" data-toggle="tooltip" data-placement="right" title="" data-original-title="<?php echo display('delete') ?> "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                            <?php } ?>
                                        </center>
                                    </td>
                                    <?php } ?>

                                </tr>
                                    <?php
                                  }
                           }
                           else{
                            ?>
                              <tr>
                                <td></td>
                                <td><?php echo display('data_not_found')?></td>
                                <td></td>
                            </tr>
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
</div>
</section>
</div>