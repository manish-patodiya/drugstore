<!-- Add new tax start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('tax') ?></h1>
            <small><?php echo display('add_incometax') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('tax') ?></a></li>
                <li class="active"><?php echo display('add_incometax') ?></li>
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

       

   <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo display('setup_tax') ?></h4>
                    </div>
                </div>
                    <div class="panel-body">

                    <?= form_open('Caccounts/create_tax_setup') ?>
                    <table id="POITable" border="0">
        <tr style="text-align: center;">
            <td><?php echo display('sl') ?></td>
            <td><?php echo display('start_amount') ?></td>
            <td><?php echo display('end_amount') ?></td>
            <td><?php echo display('tax_rate') ?></td>
            <td style="padding:5px"><?php echo display('delete') ?>?</td>
            <td><?php echo display('add_more') ?>?</td>
        </tr>
        <tr>
            <td>1</td>
            <td style="padding:5px"><input  type="text" class="form-control" id="start_amount" name="start_amount[]" /></td>
            <td style="padding:5px"><input  type="text" class="form-control" id="end_amount" name="end_amount[]" /></td>
            <td style="padding:5px"><input  type="text" class="form-control" id="rate" name="rate[]" /></td>
            <td style="padding:5px"><button type="button" id="delPOIbutton" class="btn btn-danger" value="Delete" onclick="deleteRow(this)"><i class="fa fa-trash"></i></button></td>
            <td style="padding:5px"><button type="button" id="addmorePOIbutton" class="btn btn-success" value="Add More POIs" onclick="insRow()"><i class="fa fa-plus-circle"></button></td>
        </tr>
        </table>
                        <div class="form-group text-center">
                            <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('setup') ?></button>
                        </div>
                    <?php echo form_close() ?>

                 </div>  
             </div>
        </div>
    </div>
    
    </section>
</div>
<!-- Add new tax end -->

<script type="text/javascript">
    
    function deleteRow(row)
{
    var i=row.parentNode.parentNode.rowIndex;
    document.getElementById('POITable').deleteRow(i);
}


function insRow()
{
    console.log( 'hi');
    var x=document.getElementById('POITable');
    var new_row = x.rows[1].cloneNode(true);
    var len = x.rows.length;
    new_row.cells[0].innerHTML = len;
    
    var inp1 = new_row.cells[1].getElementsByTagName('input')[0];
    inp1.id += len;
    inp1.value = '';
    var inp2 = new_row.cells[2].getElementsByTagName('input')[0];
    inp2.id += len;
    inp2.value = '';
    x.appendChild( new_row );
}
</script>


