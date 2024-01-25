<style>
.content {
    padding: 0 30px 10px
}

.content-header {
    margin-bottom: 20px
}
</style>
<!-- Backup and restore start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('backup') ?></h1>
            <small><?php echo display('backup') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li class="active"><?php echo display('backup') ?></li>
            </ol>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                    <?php
if ($this->permission1->method('data_setting', 'read')->access() || $this->permission1->method('data_setting', 'update')->access()) {?>
                    <!--<a href="<?php echo base_url('data_synchronizer/form') ?>" class="btn btn-success m-b-5 m-r-2"><i class="ti-align-justify"> </i> <?php echo display('setting') ?></a>-->
                    <?php }?>

                    <?php
if ($this->permission1->method('synchronize', 'read')->access() || $this->permission1->method('synchronize', 'update')->access()) {?>
                    <!--<a href="<?php echo base_url('data_synchronizer/synchronize') ?>" class="btn btn-success m-b-5 m-r-2"><i class="ti-align-justify"> </i> <?php echo display('synchronize') ?></a>-->
                    <?php }?>


                </div>
            </div>
        </div>
        <?php
$CI = &get_instance();
if ($this->permission1->method('backup_and_restore', 'read')->access() || $this->permission1->method('backup_and_restore', 'update')->access() || $this->permission1->method('backup_and_restore', 'delete')->access() || $CI->session->user_id == 2) {?>

        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('Backup') ?></h4>
                        </div>
                    </div>
                    <div class="panel-body">

                        <div id="message" class="alert hide"></div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><?php echo display('database_backup') ?></label>
                            <div class="col-sm-9">
                                <?php echo (($backup) ? "<i class='fa fa-check text-success'></i> " . display('available') : "<i class='fa fa-times text-danger'></i> " . display('not_available')) ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><?php echo display('file_information') ?></label>
                            <div class="col-sm-9">
                                <?php if ($file) {?>
                                <ul class="list-unstyled">
                                    <li>
                                        <?php echo display('filename') ?>
                                        <strong><?php echo $file['name'] ?></strong>
                                    </li>
                                    <li>
                                        <?php echo display('size') ?>
                                        <strong><?php echo $file['size'] ?></strong>
                                    </li>
                                    <li>
                                        <?php echo display('backup_date') ?>
                                        <strong><?php echo $file['date'] ?></strong>
                                    </li>
                                </ul>
                                <?php } else {?>
                                <i class='fa fa-times text-danger'></i> <?php echo display('not_available') ?>
                                <?php }?>
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-sm-4">
                                <?php echo form_open('Backup_restore/process', "id='brFrm'") ?>
                                <?php if (!$backup) {?>
                                <input type="hidden" name="input" value="1">

                                <?php
if ($this->permission1->method('backup_and_restore', 'update')->access() || $CI->session->user_id == 2) {?>
                                <button type="submit" id="download" class="btn btn-primary w-md m-b-5 btn-block"><i
                                        class="fa fa-download"></i> <?php echo display('backup_now') ?> </button>
                                <?php }?>

                                <?php } else {?>
                                <!--<input type="hidden" name="input" value="2">-->
                                <!-- <button name="restore" type="submit" id="import" class="btn btn-info w-md m-b-5 btn-block"><i class="fa fa-database"></i> <?php echo display('restore_now') ?></button>
                                -->
                                <?php
if ($this->permission1->method('backup_and_restore', 'update')->access() || $CI->session->user_id == 2) {?>
                                <a href="<?php echo base_url('Backup_restore/download') ?>"
                                    class="btn btn-success w-md m-b-5 btn-block"
                                    onclick="return confirm('<?php echo display("are_you_sure") ?>')"><i
                                        class="fa fa-download"></i> <?php echo display('download') ?></a>

                                <?php }?>

                                <?php }?>

                                <?php echo form_close() ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php
} else {
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
}
?>
    </section>
</div>
<!-- Backup and restore end -->

<script type="text/javascript">
$(document).ready(function() {

    var form = $("#brFrm");
    var message = $("#message");

    //upload process
    form.on('submit', function(e) {
        e.preventDefault();

        var x = confirm('<?php echo display("are_you_sure") ?>');
        if (!x) return false;

        $.ajax({
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            dataType: 'json',
            data: $(this).serialize(),
            beforeSend: function() {
                message.html(
                    '<i class="ti-settings fa fa-spin"></i> <?php echo display("please_wait") ?>'
                ).removeClass('hide').addClass('alert-info');
            },
            success: function(data) {
                if (data.success) {
                    message.html('<i class="fa fa-check"></i> ' + data.success).removeClass(
                        'alert-info').removeClass('alert-danger').addClass(
                        'alert-success');
                } else {
                    message.html('<i class="fa fa-times"></i> ' + data.error).removeClass(
                        'alert-success').removeClass('alert-info').addClass(
                        'alert-danger');
                }
                setTimeout(function() {
                    location.reload();
                }, 3000);
            },
            error: function() {
                message.html(
                    '<i class="fa fa-times"></i> <?php echo display("ooops_something_went_wrong") ?>'
                ).removeClass('alert-success').removeClass('alert-info').addClass(
                    'alert-danger');
                setTimeout(function() {
                    location.reload();
                }, 3000);
            }
        });
    });

});
</script>