<!-- Manage attendance Start -->

<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('attendance') ?></h1>
            <small><?php echo display('datewise_report') ?></small>
            <ol class="breadcrumb">
                <li><a href=""><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('attendance') ?></a></li>
                <li class="active"><?php echo display('datewise_report') ?></li>
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

       <script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        // document.body.style.marginTop="-45px";
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>

        <!-- Manage Category -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                             <button  class="btn btn-warning" onclick="printDiv('printableArea')"><span class="fa fa-print"></span></button>
                        </div>
                    </div>
                    <div class="panel-body" id="printableArea">
                        <div class="row">

<table  class="table table-striped" width="100%">


 <div class="form-group text-center" style="color:#3D9970; font-size: 50px; font-weight: bold; font-family: Stencil Std, fantasy; font-variant: small-caps">
       
       <?php echo display('attendance_report') ?>
      
        
    </div>
    <div class="row">
    <div class="col-sm-4 text-center">
        <?php echo "<img src='" .$ab[0]['image']."' width=120px; height=120px;>";?>
    </div>
    <div  class="col-sm-8">

    <div class="form-group text-left" style="color:black; font-size: 20px; font-weight: bold; font-family:cursive">
       
        <?php echo display('name') ?>:<?php

    

        echo $ab[0]['first_name']." ".$ab[0]['last_name'] ;?>
        
    </div>
    <div class="form-group text-left" style="color:black; font-size: 20px; font-weight: bold; font-family:'Comic Sans MS', 'cursive'">
       
      ID NO: <?php
    
echo $ab[0]['id'] ;
         
         
        ?>
    </div>

<div class="form-group text-left" style="color:black; font-size: 20px; font-weight: bold; font-family:'Comic Sans MS', 'cursive'">
       
      <?php echo display('designation') ?>: <?php  echo $ab[0]['emdesignation'] ; ?>
    </div>
    </div>
    </div>
    </table>
    <table class="table table-striped" width="100%">
    <tr>
        <th> <?php echo display('sl') ?></th>
        <th> <?php echo display('date') ?></th>
        <th> <?php echo display('checkin') ?></th>
        <th> <?php echo display('checkout') ?></th>
        <th> <?php echo display('work_hour') ?></th>
    </tr>
    <?php
    $x=1;
    foreach($query as $qr){?>
    <tr>
        <td><?php echo $x++;?></td>
        <td><?php echo $qr->date?></td>
          <td><?php echo $qr->sign_in?></td>
          <td><?php echo $qr->sign_out?></td>
          <td><?php echo $qr->staytime ?></td>
    </tr>
    <?php }?>
    
</table>

            
</div>
                    </div>
                </div>
            </div>
 
        </div>
    </section>
</div>



