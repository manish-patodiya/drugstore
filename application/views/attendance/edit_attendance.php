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
        <div class="col-sm-12 col-md-12">
            <div class="panel ">
                <div class="panel-heading" >
                    <div class="panel-title">
                         <h4><?php echo (!empty($title)?$title:null) ?></h4>
                    </div>
                </div>
                <div class="panel-body">
                 <?= form_open('Cattendance/edit_atn_form/'. $data->att_id) ?>

<input name="att_id" type="hidden" value="<?php echo $data->att_id ?>">

   <div class="form-group row">
        <label for="emp_id" class="col-sm-3 col-form-label"><?php echo display('employee_name') ?> *</label>
        <div class="col-sm-9">
             <?php echo form_dropdown('employee_id',$dropdownatn,(!empty($data->employee_id)?$data->employee_id:null),'class="form-control" id="employee_id"') ?>
        </div>
    </div>

<div class="form-group row">
    <label for="date" class="col-sm-3 col-form-label"><?php echo display('date') ?> *</label>
    <div class="col-sm-9">
        <input name="date" class="form-control datepicker" type="text" id="date" value="<?php echo $data->date?>">
    </div>
</div> 

<div class="form-group row">
    <label for="sign_in" class="col-sm-3 col-form-label"><?php echo display('sign_in') ?> </label>
    <div class="col-sm-9">
        <input name="sign_in" class=" form-control datetimepicker" type="text"  value="<?php echo $sign_in=$data->sign_in?>"  id="sign_in">
    </div>
</div>

                        
<div class="form-group row">
    <label for="sign_out" class="col-sm-3 col-form-label"><?php echo display('sign_out') ?> </label>
    <div class="col-sm-9">
        <input type="text" name="sign_out" class="form-control datetimepicker"   id="" value="<?php echo $sign_in=$data->sign_out ;?>"> 
    </div>
</div>

<div class="form-group row">
    <label for="staytime" class="col-sm-3 col-form-label"><?php echo display('staytime') ?> </label>
    <div class="col-sm-9">
        <input type="text" name="staytime" class="form-control"   id="staytime" value="<?php
 

         $in=new DateTime($sign_in);
                  $Out=new DateTime($sign_out);
                  $interval=$in->diff($Out);
                  $myinit=$interval->format('%H:%I:%S');
        echo $myinit;
        ?>"> 
    </div>
</div>
                                  
<div class="form-group text-right">
    
    <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('update') ?></button>
</div>

<?php echo form_close() ?>


                </div>  
            </div>
        </div>
    </div>            </div>
                </div>
            </div>
 
        
    </section>
</div>


