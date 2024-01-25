<!-- Manage attendance Start -->

<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('attendance') ?></h1>
            <small><?php echo display('manage_attendance') ?></small>
            <ol class="breadcrumb">
                <li><a href=""><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('attendance') ?></a></li>
                <li class="active"><?php echo display('manage_attendance') ?></li>
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

       

        <!-- Manage Category -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                          <h4><?php echo display('manage_attendance')?></h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
               
  <table width="100%" class="datatable table table-striped table-bordered table-hover example">
        <caption><?php echo display('attendance_list')?></caption>
        <thead>
            <tr>
               <th><?php echo display('Sl') ?></th>
                <th><?php echo display('name')?></th>
                <th><?php echo display('date')?></th>
                <th><?php echo display('checkin')?></th>
                <th><?php echo display('checkout')?></th>
                <th><?php echo display('stay')?></th>
                 <th><?php echo display('action')?></th>
            </tr>
        </thead>
    <tbody>
        <?php if ($attendance_list == FALSE): ?>

            <tr><td colspan="4">There are currently No Attendance</td></tr>
        <?php else: ?>
             <?php $sl = 1; ?> 
            <?php foreach ($attendance_list as $row): ?>
                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                <td><?php echo $sl; ?></td>
                    <td><?php echo $row['first_name'].' '.$row['last_name']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['sign_in']; ?></td>
                    <td><?php echo $row['sign_out']; ?></td>
                    <td><?php echo $row['staytime']; ?></td>
                    <td class="center">
      <?php if($this->permission1->method('manage_attendance','update')->access()){ ?>
                    <a href="<?php echo base_url("Cattendance/edit_atn_form/".$row['att_id']) ?>" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a> 
                <?php }?>
    <?php if($this->permission1->method('manage_attendance','delete')->access()){ ?>            
                    <a href="<?php echo base_url("Cattendance/delete_attendance/".$row['att_id']) ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-times" aria-hidden="true"></i></a> 
                      <?php }?>
                        
                        </td>
                </tr>
                  <?php $sl++; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
            </table>

 <div class="text-right"><?php echo $links ?></div>
                <!-- /.table-responsive -->
            </div>
        </div>
    </div>
</div>
                    </div>
                </div>
            </div>
 
        </div>
    </section>
</div>



