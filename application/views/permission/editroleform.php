<style>
.content {
    padding: 0 30px 10px
}

.content-header {
    margin-bottom: 20px
}
</style>
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('user_assign_role') ?></h1>
            <small><?php echo display('user_assign_role') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li class="active"><?php echo display('user_assign_role') ?></li>
            </ol>
        </div>
    </section>
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
    <section class="content">
        <?php
if ($this->permission1->method('role_list', 'update')->access()) {?>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('role_name') ?> </h4>
                        </div>
                    </div>
                    <?php echo form_open("Permission/update/") ?>
                    <div class="panel-body">

                        <div class="form-group row">
                            <label for="type" class="col-sm-3 col-form-label"><?php echo display('role_name') ?> <i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" value="<?php echo $role['0']->type; ?>" tabindex="2"
                                    class="form-control" name="role_id" id="type"
                                    placeholder="<?php echo display('role_name') ?>" required />
                            </div>
                        </div>
                        <input type="hidden" name="rid" value="<?php echo $role['0']->id ?>">
                    </div>
                </div>
            </div>
        </div>


        <!--manage-->
        <div class="panel">
            <div class="panel-body">
                <?php
$m = 0;
    foreach ($module as $key => $value) {
        $account_sub = $this->db->select('*')->from('sub_module')->where('mid', $value->id)->get()->result();

        ?>
                <table class="table table-bordered hidetable">
                    <h2 class="hidetable"><?php echo $value->name; ?></h2>
                    <thead>
                        <tr>
                            <th><?php echo display('sl_no'); ?></th>
                            <th><?php echo display('module_name'); ?></th>
                            <th><?php echo display('create'); ?></th>
                            <th><?php echo display('read'); ?></th>
                            <th><?php echo display('update'); ?></th>
                            <th><?php echo display('delete'); ?></th>
                        </tr>
                    </thead>
                    <?php $sl = 0?>
                    <?php if (!empty($account_sub)) {?>
                    <?php
foreach ($account_sub as $key1 => $module_name) {
            $ck_data = $this->db->select('*')
                ->where('fk_module_id', $module_name->id)
                ->where('role_id', $role['0']->id)->get('role_permission')->row();
            ?>
                    <?php
$createID = 'id="create' . $m . '' . $sl . '"';
            $readID = 'id="read' . $m . '' . $sl . '"';
            $updateID = 'id="update' . $m . '' . $sl . '"';
            $deleteID = 'id="delete' . $m . '' . $sl . '"';
            ?>
                    <tbody>
                        <tr>
                            <td><?php echo ($sl + 1) ?></td>
                            <td>
                                <?php echo $module_name->name ?>
                                <input type="hidden" name="fk_module_id[<?php echo $m ?>][<?php echo $sl ?>][]"
                                    value="<?php echo $module_name->id ?>" id="id_<?php echo $module_name->id ?>">
                            </td>
                            <td>
                                <div class="checkbox checkbox-success text-center">
                                    <input type="checkbox" name="create[<?php echo $m ?>][<?php echo $sl ?>][]"
                                        value="1" <?php echo ((@$ck_data->create == 1) ? "checked" : null) ?>
                                        id="create[<?php echo $m ?>]<?php echo $sl ?>">
                                    <label for="create[<?php echo $m ?>]<?php echo $sl ?>"></label>
                                </div>
                            </td>
                            <td>
                                <div class="checkbox checkbox-success text-center">
                                    <input type="checkbox" name="read[<?php echo $m ?>][<?php echo $sl ?>][]" value="1"
                                        <?php echo ((@$ck_data->read == 1) ? "checked" : null) ?>
                                        id="read[<?php echo $m ?>]<?php echo $sl ?>">
                                    <label for="read[<?php echo $m ?>]<?php echo $sl ?>"></label>
                                </div>
                            </td>
                            <td>
                                <div class="checkbox checkbox-success text-center">
                                    <input type="checkbox" name="update[<?php echo $m ?>][<?php echo $sl ?>][]"
                                        value="1" <?php echo ((@$ck_data->update == 1) ? "checked" : null) ?>
                                        id="update[<?php echo $m ?>]<?php echo $sl ?>">
                                    <label for="update[<?php echo $m ?>]<?php echo $sl ?>"></label>
                                </div>
                            </td>
                            <td>
                                <div class="checkbox checkbox-success text-center">
                                    <input type="checkbox" name="delete[<?php echo $m ?>][<?php echo $sl ?>][]"
                                        value="1" <?php echo ((@$ck_data->delete == 1) ? "checked" : null) ?>
                                        id="delete[<?php echo $m ?>]<?php echo $sl ?>">
                                    <label for="delete[<?php echo $m ?>]<?php echo $sl ?>"></label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <?php $sl++?>
                    <?php }?>
                    <?php } //endif ?>
                </table>
                <?php $m++;}?>

                <div class="form-group text-right">
                    <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                    <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('save') ?></button>
                </div>
                <?php echo form_close() ?>
                <!--permossion form end-->
                <?php } else {
    ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-bd lobidrag">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4><?php echo display('You do not have permission to access. Please contact with administrator.'); ?>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
}?>
            </div>
        </div>
    </section>
</div>