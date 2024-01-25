<style type="text/css">
    .employeelist{
        width: 400px;
    }
</style>
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
                          <h4><?php echo display('attendance_report')?></h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
  <div class="form-group text-right">

<?php 
$add0 =array(
    'type'        => 'button',
    'class'       => "btn btn-primary btn-md",
    'data-target' => "#add0",
    'data-toggle' => "modal",
    'value'       => display('datewise_report'),
    'style'       =>'align="center";'
);
$add =array(
    'type'        => 'button',
    'class'       => "btn btn-primary btn-md",
    'data-target' => "#add",
    'data-toggle' => "modal",
    'value'       => display('employee_wise_report'),
    'style'       =>'align="center";'
);
$add3 =array(
    'type'        => 'button',
    'class'       => "btn btn-primary btn-md",
    'data-target' => "#add2",
    'data-toggle' => "modal",
    'value'       => display('date_in_time_report'),
    'style'       =>'align="center";'
);
 echo form_input($add0); 
//  echo form_input($add2); 
echo form_input($add); 
echo form_input($add3); 


?>
</div>
<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
               
  <table width="100%" class="datatable table table-striped table-bordered table-hover example">
                <caption><?php echo display('report_view') ?></caption>
                <thead>
                    <tr>
                      <th><?php echo display('Sl') ?></th>
                        <th><?php echo display('name') ?></th>
                        <th><?php echo display('date') ?></th>
                        <th><?php echo display('check_in') ?></th>
                        <th><?php echo display('check_out') ?></th>
                        <th><?php echo display('stay') ?></th>
                         
                    </tr>
                </thead>
                <tbody>
                    <?php if ($attendance_list == FALSE): ?>

                        <tr><td colspan="7" class="text-center">There are currently No Information</td></tr>
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
                               
                            </tr>
                              <?php $sl++; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>


                <!-- /.table-responsive -->
            </div>
        </div>
    </div>
</div>

<div id="add" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <strong><?php echo display('employee_wise_report')?></strong>
            </div>
            <div class="modal-body">
           
<div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo display('attendance_report') ?></h4>
                    </div>
                </div>
                <div class="panel-body">

                    <?= form_open('Cattendance/employeewise_att_report','name="myForm"') ?>
                        
                         <div class="form-group row">
                            <label for="employee_id" class="col-sm-3 col-form-label"><?php echo display('employee_name') ?> *</label>
                            <div class="col-sm-9">
                                  <?php echo form_dropdown('employee_id',$dropdownatn,(!empty($employee_id)?$employee_id:null),'class="form-control employeelist" id="employee_id"') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-sm-3 col-form-label"><?php echo display('start_date') ?> *</label>
                            <div class="col-sm-9">
                                <input name="s_date" class="datepicker form-control" type="text" placeholder="<?php
        
                                 echo display('start_date') ?>"  id="a_date">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="end_date" class="col-sm-3 col-form-label"><?php echo display('end_date') ?> *</label>
                            <div class="col-sm-9">
                                <input name="e_date" class="datepicker form-control" type="text" placeholder="<?php  
                                 echo display('end_date') ?>" id="b_date" >
                            </div>
                        </div>
                       

                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('request') ?></button>
                        </div>
                    <?php echo form_close() ?>

                </div>  
  
            </div>
        </div>
    </div>
             
    
   
    </div>
     
            </div>
            <div class="modal-footer">

            </div>

        </div>

    </div>



<div id="add0" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <strong><?php echo display('date_wise_report') ?></strong>
            </div>
            <div class="modal-body">
           <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo display('date_wise_report') ?></h4>
                    </div>
                </div>
                <div class="panel-body">

                    <?= form_open('Cattendance/datewiseattendancereport') ?>
                        
                        <div class="form-group row">
                            <label for="date" class="col-sm-3 col-form-label"><?php echo display('start_date') ?> *</label>
                            <div class="col-sm-9">
                                <input name="start_date" class="datepicker form-control" type="text" placeholder="<?php
        
                                 echo display('start_date') ?>"  id="start_date">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="end_date" class="col-sm-3 col-form-label"><?php echo display('end_date') ?> *</label>
                            <div class="col-sm-9">
                                <input name="end_date" class="datepicker form-control" type="text" placeholder="<?php  
                                 echo display('end_date') ?>" id="end_date" >
                            </div>
                        </div>
                       

                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('request') ?></button>
                        </div>
                    <?php echo form_close() ?>

                </div>  
            </div>
        </div>
    </div>

    </div>

</div>
</div>
</div>
<div id="add2" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <strong><?php echo display('time_wise_report') ?></strong>
            </div>
            <div class="modal-body">
        <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo display('attendance_report') ?></h4>
                    </div>
                </div>
                <div class="panel-body">

                    <?= form_open('Cattendance/AtnTimeReport_view','name="myForm"') ?>
                        
                         <div class="form-group row">
                            <label for="date" class="col-sm-3 col-form-label"><?php echo display('report_date') ?> *</label>
                            <div class="col-sm-9">
                                <input name="date" class="datepicker form-control " type="text" placeholder="<?php
        
                                 echo display('report_date') ?>"  id="c_date">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="s_time" class="col-sm-3 col-form-label"><?php echo display('s_time') ?> *</label>
                            <div class="col-sm-9">
                                <input name="s_time" class="timepicker form-control" type="time" placeholder="<?php
        
                                 echo display('s_time') ?>"  id="s_time">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="e_time" class="col-sm-3 col-form-label"><?php echo display('e_time') ?> *</label>
                            <div class="col-sm-9">
                                <input name="e_time" class="timepicker form-control" type="time" placeholder="<?php  
                                 echo display('e_time') ?>" id="e_time" >
                            </div>
                        </div>
                       

                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('request') ?></button>
                        </div>
                    <?php echo form_close() ?>

                </div>  
            </div>
        </div>
    </div>

    </div>

</div>
</div>
</div>
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


