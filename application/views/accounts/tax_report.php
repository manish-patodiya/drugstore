<!-- Edit TAX start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('tax') ?></h1>
            <small><?php echo display('tax_report') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('tax') ?></a></li>
                <li class="active"><?php echo display('tax_report') ?></li>
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
        document.body.style.marginTop = "0px";
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
   <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body"> 
                        <?php echo form_open('Caccounts/tax_report', array('class' => 'form-inline', 'method' => 'get')) ?>
                        <?php
                        $today = date('Y-m-d');
                        ?>
                        <div class="form-group">
                            <label class="" for="from_date"><?php echo display('start_date') ?></label>
                            <input type="text" name="from_date" class="form-control datepicker" id="from_date" placeholder="<?php echo display('start_date') ?>" value="<?php echo (!empty($from_date)?$from_date:$today) ?>">
                        </div> 

                        <div class="form-group">
                            <label class="" for="to_date"><?php echo display('end_date') ?></label>
                            <input type="text" name="to_date" class="form-control datepicker" id="to_date" placeholder="<?php echo display('end_date') ?>" value="<?php echo (!empty($to_date)?$to_date:$today) ?>">
                        </div>  

                        <button type="submit" class="btn btn-success"><?php echo display('search') ?></button>
                        <a  class="btn btn-warning" href="#" onclick="printDiv('purchase_div')"><?php echo display('print') ?></a>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>


        <!-- TAX -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('tax_report') ?></h4>
                        </div>
                    </div>
                   
                    <div class="panel-body">

                        <div class="table-responsive" id="purchase_div"> 
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center"><?php echo display('sl')?></th>
                                    <th class="text-center"><?php echo display('invoice_no').'/'.display('service_id')?></th>
                                    <th class="text-center"><?php echo display('date')?></th>
                                    <?php foreach($taxes as $taxfield){?>
                                        <th class="text-center"><?php echo $taxfield['tax_name']?></th>
                                    <?php }?>
                                </tr>
                            </thead>
                             <tbody>
                                <?php if(!empty($taxdata)){?>
                                <?php $sl=1;
                                foreach($taxdata as $taxvalue){?>
                                <tr>
                                    <td class="text-center"><?php echo $sl;?></td>
                                    <td class="text-center"><?php echo (!empty($taxvalue['invoice'])?$taxvalue['invoice']:$taxvalue['relation_id']);?></td>
                                    <td class="text-center"><?php echo $taxvalue['date'];?></td>
                                     <?php 
                                     $x=0;
                                     foreach($taxes as $taxfield){
                                        $txval = 'tax'.$x;
                                        ?>
                                    <td class="tax<?php echo $x;?> text-right"><?php echo $taxvalue[$txval];?></td>
                                     <?php $x++;}?>
                                </tr>
                            <?php $sl++;
                        }?>
                    <?php }else{?>
                        <tr>
                         <td colspan="<?php echo ($taxnumber+3);?>" class="text-center">No Result Found</td>   
                        </tr>
                    <?php }?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3" class="text-right"><b><?php echo display('total')?></b></td>
                                       <?php 
                                     $x=0;
                                     foreach($taxes as $taxfield){
                                        $txval = 'tax'.$x;
                                        ?>
                                    <td id="tax<?php echo $x;?>" class="text-right"></td>
                                     <?php $x++;}?>
                                </tr>
                            </tfoot>
                        </table>
                     </div>
                       <input type="hidden" name="taxnumber" id="taxnumber" value="<?php echo $taxnumber;?>">
                    </div>
              
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Edit TAX end -->
<script type="text/javascript">
    $(document ).ready(function() {
        var taxn =  $("#taxnumber").val();
       for(var i=0;i<taxn;i++){
      
// var j = 0;
//     $(".tax"+i).each(function () {
//         isNaN(this.text) || 0 == this.text.length || (j += parseFloat(this.text))
//     });
var sum =0;
$('.tax'+i).each(function()
{
    sum += parseFloat($(this).text());
});



            $("#tax"+i).html(sum.toFixed(2, 2));
             
    }
             });
</script>



