<!-- Add new customer start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('add_type') ?></h1>
            <small><?php echo display('add_new_type') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('type') ?></a></li>
                <li class="active"><?php echo display('add_type') ?></li>
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

        <?php
if ($this->permission1->method('medicine_type', 'create')->access()) {?>
        <!-- New customer -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <!-- <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('add_type') ?></h4>
                        </div>
                    </div> -->
                    <?php echo form_open('Cproduct/insert_type', array('class' => 'form-vertical', 'id' => 'validate')) ?>
                    <div class="panel-body">

                        <div class="form-group row">
                            <label for="type_name" class="col-sm-3 col-form-label"><?php echo display('type_name') ?> <i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name="type_name" id="type_name" type="text"
                                    placeholder="<?php echo display('type_name') ?>" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-customer" class="btn btn-success btn-large"
                                    name="add-customer" value="<?php echo display('save') ?>" />
                            </div>
                        </div>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
        <?php
} else {
    ?>
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
        <?php
}
?>



        <?php
if ($this->permission1->method('medicine_type', 'read')->access() || $this->permission1->method('medicine_type', 'update')->access() || $this->permission1->method('medicine_type', 'delete')->access()) {?>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('manage_type') ?></h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center"><?php echo display('type_name') ?></th>
                                        <?php
if ($this->permission1->method('medicine_type', 'update')->access() || $this->permission1->method('medicine_type', 'delete')->access()) {
    ?>
                                        <th class="text-center"><?php echo display('action') ?></th>
                                        <?php
}
    ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
if ($type_list) {
        ?>
                                    {type_list}
                                    <tr>
                                        <td class="text-center">{type_name}</td>
                                        <?php
if ($this->permission1->method('medicine_type', 'update')->access() || $this->permission1->method('medicine_type', 'delete')->access()) {
            ?>
                                        <td>
                                            <center>
                                                <?php
if ($this->permission1->method('medicine_type', 'update')->access()) {
                ?>
                                                <a href="<?php echo base_url() . 'Cproduct/type_update_form/{type_id}'; ?>"
                                                    class="btn btn-info btn-sm" data-toggle="tooltip"
                                                    data-placement="left" title="<?php echo display('update') ?>"><i
                                                        class="fa fa-pencil" aria-hidden="true"></i></a>
                                                <?php }?>

                                                <?php
if ($this->permission1->method('medicine_type', 'delete')->access()) {
                ?>
                                                <a href="" class="Deletetype btn btn-danger btn-sm" name="{type_id}"
                                                    data-toggle="tooltip" data-placement="right" title=""
                                                    data-original-title="<?php echo display('delete') ?> "><i
                                                        class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                <?php }?>
                                            </center>
                                        </td>
                                        <?php }?>
                                    </tr>
                                    {/type_list}
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
} else {
    ?>
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
        <?php
}
?>

    </section>
</div>
<script type="text/javascript">
//Delete type
$(".Deletetype").click(function() {
    var type_id = $(this).attr('name');
    var csrf_test_name = $("[name=csrf_test_name]").val();
    var x = confirm("<?php echo display('are_you_sure_to_delete') ?>");
    if (x == true) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url('Cproduct/type_delete') ?>',
            data: {
                type_id: type_id,
                csrf_test_name: csrf_test_name
            },
            cache: false,
            success: function(datas) {
                location.reload();
            }
        });
    }
});
</script>
<!-- Add new customer end -->