 

  <link href="<?php echo base_url()?>assets/plugins/datatables/dataTables.min.css" rel="stylesheet" type="text/css"/>
  
 <div class="modal-dialog modal-md" role="document">
 
      
    <div class="modal-content">
      <div class="modal-header">
        <center><strong><?php echo display('report') ?></strong></center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

             <span aria-hidden="true">&times;</span>

        </button>
        
      </div>
      <div class="modal-body">
        <p><?php

 
 echo display('daily_reports').display('account_name').':';foreach ($marks as $row)
          {
       
          }
$ab=$row['transection_category'];
if($ab==2){
  echo "Customer";
}elseif ($ab==1) {
  echo "manufacturer";
}elseif ($ab==4) {
 echo "Loan";
}else{
  echo "Office";
}
echo "<br>";
        echo "Date:";  echo $date=date('d-m-Y'); ?></p>
     <table id="dataTableExample3" class="table table-bordered table-striped table-hover">
             <thead>
                    <tr>
                      <th class="text-center"><?php echo display('account')?></th>
                     
                     <th class="text-center"><?php echo display('description')?></th>
                      <th class="text-center"><?php echo display('receipt_amount')?></th>

                      <th class="text-center"><?php echo display('paid_amount')?></th>
                      
                    </tr>
              </thead>
                 
                  <tbody>
                  
               <?php
                    if ($marks) {
                        
        $currency = $this->db->select('*')->from('web_setting')->get()->row();
		
                  ?>
                  <?php foreach ($marks as $row){?>
                    <tr>
                      <td  align="center">
                                        
                  <?php echo $row['person_name'];
                  echo $row['customer_name']; 
                  echo $row['manufacturer_name'];
                  if($row['person_name']==''AND $row['customer_name']==''AND $row['manufacturer_name']==''){
                    echo $row['relation_id'];
                  }
                  
                  ?></td>
                      
                      <td><?php
                                     $debt=$row['description'];
                      echo $debt ?></td>
                      <td style="text-align: right;"><?php
                                     $debt=$row['amount'];
                                     $dolar=$currency->currency;
                     if($debt==0){
                      echo "";

                     }else{
                       echo $dolar.$debt;
                     } ?></td>
                      <td align="right">
                      <?php   $debt=$row['pay_amount']; 
            if($debt==0){
                      echo "";

                     }else{
                       echo $dolar.$debt;
                     } 
                      ?></td>
                      
                  
                  <?php } ?>
                  <?php
                    }
                  ?>
                </tr>
                  </tbody>
                  
                  <tfoot>
                    <tr></tr>
                  </tfoot>
                          </table>
      </div>
    </div>
  </div>
</div>
<script src="<?php echo base_url()?>assets/plugins/datatables/dataTables.min.js" type="text/javascript"></script>

