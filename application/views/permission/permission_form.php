<div class="content-wrapper">

    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('permission') ?></h1>
            <small><?php echo display('permission') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li class="active"><?php echo display('permission') ?></li>
            </ol>
        </div>
    </section>


<section class="content">
  <?php
   if($this->permission1->method('permission','create')->access()){ ?>
    <div class="row">
      <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4><?php echo (!empty($title)?$title:null) ?></h4>
                </div>
            </div>
            <div class="panel-body">
                <?php echo form_open("Permission/create/") ?>
                    <div class="form-group row">
                        <label for="blood" class="col-sm-3 col-form-label">
                            <?php echo display('role_name') ?> *
                        </label>
                         <div class="col-sm-9">
                               <select class="form-control" name="role_id" id="user_type" required="">
                                    <option value=""><?php echo display('select_one') ?></option>
                                    <?php
                                    foreach($user_list as $data){
                                    ?>
                                    <option value="<?php echo $data['id'] ?>"><?php echo $data['type'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                        </div>
                    </div>

                <div  id="showtable"></div>

                    <?php
                    $m=0;
                    foreach ($account as $key=>$value) {
                        $account_sub = $this->db->select('*')->from('sub_module')->where('mid',$value['id'])->get()->result();
                    ?>
                    <table class="table table-bordered hidetable">
                        <h2 class="hidetable"><?php echo $value['name'];?></h2>
                        <thead>
                            <tr>
                                <th><?php echo display('sl_no');?></th>
                                <th><?php echo display('module_name');?></th>
                                <th><?php echo display('create');?></th>
                                <th><?php echo display('read');?></th>
                                <th><?php echo display('update');?></th>
                                <th><?php echo display('delete');?></th>
                            </tr>
                        </thead>
                        <?php $sl = 0 ?>
                        <?php if (!empty($account_sub)) { ?>
                        <?php foreach ($account_sub as $key1 => $module_name) { ?>

                        <?php
                            $createID = 'id="create'.$m.''.$sl.'"';
                            $readID   = 'id="read'.$m.''.$sl.'"';
                            $updateID = 'id="update'.$m.''.$sl.'"';
                            $deleteID = 'id="delete'.$m.''.$sl.'"';
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo ($sl+1) ?></td>
                                <td>
                                    <?php echo $module_name->name?>
                                    <input type="hidden" name="fk_module_id[<?php echo $m?>][<?php echo $sl?>][]" value="<?php echo $module_name->id ?>" id="id_<?php echo $module_name->id ?>">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <?php echo form_checkbox('create['.$m.']['.$sl.'][]', '1', null, $createID); ?>
                                        <label for="create<?php echo $m ?><?php echo $sl ?>"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <?php echo form_checkbox('read['.$m.']['.$sl.'][]', '1', null, $readID); ?>
                                        <label for="read<?php echo $m ?><?php echo $sl ?>"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <?php echo form_checkbox('update['.$m.']['.$sl.'][]', '1', null, $updateID); ?>
                                        <label for="update<?php echo $m ?><?php echo $sl ?>"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <?php echo form_checkbox('delete['.$m.']['.$sl.'][]', '1', null, $deleteID); ?>
                                        <label for="delete<?php echo $m ?><?php echo $sl ?>"></label>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <?php $sl++ ?>
                        <?php } ?>
                        <?php } //endif ?>
                    </table>
                    <?php $m++; } ?>

                    <div class="form-group text-right">
                        <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                        <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('save') ?></button>
                    </div>
                <?php echo form_close() ?>

            </div>
        </div>
      </div>
 </div>
 <?php }
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
 }?>
</section>
</div>



<script type="text/javascript">
    //function Permission(id){
    //    $.ajax({
    //        url : "<?php //echo site_url('permission/select_permission/')?>//" + id,
    //        type: "GET",
    //        dataType: "json",
    //        success: function(data)
    //        {
    //            alert(data);
    //            var output = '';
    //            for (var property in data) {
    //                output += property+':'+ data[property].name + ': '+'create' + data[property].create+';read'+ data[property].read+';delete '+ data[property].delete+';update'+data[property].update + ";";
    //                //var  ids='id_'+property;
    //                var ids=  $('#id_'+property).val();
    //
    //                if(ids == property && data[property].create==1){
    //                    document.getElementById("create"+property).checked = true;
    //                }else{
    //                    document.getElementById("create"+property).checked = false;
    //                }
    //
    //
    //                if(ids == property && data[property].read==1){
    //                    document.getElementById("read"+property).checked = true;
    //                }else{
    //                    document.getElementById("read"+property).checked = false;
    //                }
    //
    //
    //                if(ids == property && data[property].delete==1){
    //                    document.getElementById("delete"+property).checked = true;
    //                }else{
    //                    document.getElementById("delete"+property).checked = false;
    //                }
    //
    //
    //                if(ids == property && data[property].update==1){
    //                    document.getElementById("update"+property).checked = true;
    //                }else{
    //                    document.getElementById("update"+property).checked = false;
    //                }
    //            }
    //            console.log(data);
    //        },
    //        error: function (jqXHR, textStatus, errorThrown)
    //        {
    //            alert('Error get data from ajax');
    //        }
    //    });
    //}
</script>
















