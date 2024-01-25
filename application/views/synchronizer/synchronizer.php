<!-- Synchronizer start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('data_synchronizer') ?></h1>
            <small><?php echo display('data_synchronizer') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('data_synchronizer') ?></a></li>
                <li class="active"><?php echo display('data_synchronizer') ?></li>
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
            <div class="col-sm-12">
                <div class="column">
                    <?php
if ($this->permission1->method('data_setting', 'read')->access() || $this->permission1->method('data_setting', 'update')->access()) {?>
                    <a href="<?php echo base_url('data_synchronizer/form') ?>" class="btn btn-success m-b-5 m-r-2"><i
                            class="ti-align-justify"> </i> <?php echo display('setting') ?></a>
                    <?php }?>

                    <?php
if ($this->permission1->method('backup_and_restore', 'read')->access() || $this->permission1->method('backup_and_restore', 'update')->access()) {?>
                    <a href="<?php echo base_url('Backup_restore') ?>" class="btn btn-success m-b-5 m-r-2"><i
                            class="ti-align-justify"> </i> <?php echo display('backup_and_restore') ?></a>
                    <?php }?>
                </div>
            </div>
        </div>

        <?php
if ($this->permission1->method('synchronize', 'create')->access() || $this->permission1->method('synchronize', 'read')->access() || $this->permission1->method('synchronize', 'update')->access()) {?>
        <!-- New supplier -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('data_synchronizer') ?> </h4>
                        </div>
                    </div>

                    <div class="panel-body">


                        <div id="message" class="alert hide"></div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><?php echo display('internet_connection') ?></label>
                            <div class="col-sm-9">
                                <?php echo (($internet) ? "<i class='fa fa-check text-success'></i> " . display('ok') : "<i class='fa fa-times text-danger'></i> " . display('not_available')) ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><?php echo display('outgoing_file') ?></label>
                            <div class="col-sm-9">
                                <?php echo (($outgoing) ? "<i class='fa fa-check text-success'></i> " . display('available') : "<i class='fa fa-times text-danger'></i> " . display('not_available')) ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><?php echo display('incoming_file') ?></label>
                            <div class="col-sm-9">
                                <?php echo (($incoming) ? "<i class='fa fa-check text-success'></i> " . display('available') : "<i class='fa fa-times text-danger'></i> " . display('not_available')) ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <?php
$localhost = false;
    if (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1', 'localhost'))) {
        $localhost = true;
    }
    ?>
                                <?php if ($outgoing && $localhost) {?>

                                <?php
if ($this->permission1->method('synchronize', 'update')->access()) {?>
                                <button type="submit" id="upload" class="btn btn-success w-md m-b-5 btn-block"><i
                                        class="fa fa-upload"></i>
                                    <?php echo display('data_upload_to_server') ?></button>
                                <?php }?>

                                <?php } elseif (!$incoming && $localhost) {
        ?>
                                <?php
if ($this->permission1->method('synchronize', 'update')->access()) {?>
                                <button type="submit" id="download" class="btn btn-primary w-md m-b-5 btn-block"><i
                                        class="fa fa-download"></i> <?php echo display('download_data_from_server') ?>
                                </button>
                                <?php }?>

                                <?php
} elseif ($incoming) {
        ?>
                                <?php
if ($this->permission1->method('synchronize', 'create')->access()) {?>
                                <button type="submit" id="import" class="btn btn-info w-md m-b-5 btn-block"><i
                                        class="fa fa-database"></i>
                                    <?php echo display('data_import_to_database') ?></button>
                                <?php }?>

                                <?php
}
    ?>
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
<!-- Synchronizer end -->




<script type="text/javascript">
$(document).ready(function() {
    var upload = $("#upload");
    var download = $("#download");
    var dbImport = $("#import");
    var downloadUrl = '<?php echo base_url("data_synchronizer/ftp_download") ?>';
    var dbImportUrl = '<?php echo base_url("data_synchronizer/import") ?>';
    var uploadUrl = '<?php echo base_url("data_synchronizer/ftp_upload") ?>';
    var token = "sdf";
    var message = $("#message");

    //download process
    download.on('click', function() {
        ajaxLoad(downloadUrl, token);
    });
    //import process
    dbImport.on('click', function() {
        ajaxLoad(dbImportUrl, token);
    });
    //upload process
    upload.on('click', function() {
        ajaxLoad(uploadUrl, token);
    });

    function ajaxLoad(URL, token) {
        $.ajax({
            url: URL,
            method: 'get',
            dataType: 'json',
            data: token,
            beforeSend: function() {
                message.html(
                    '<i class="ti-settings fa fa-spin"></i> <?php echo display("please_wait") ?>'
                ).removeClass('hide').addClass('alert-info');
            },
            success: function(data) {
                if (data.success) {
                    message.html('<i class="fa fa-check"></i> ' + data.success).removeClass(
                        'alert-info').removeClass('alert-danger').addClass('alert-success');
                } else {
                    message.html('<i class="fa fa-times"></i> ' + data.error).removeClass(
                        'alert-success').removeClass('alert-info').addClass('alert-danger');
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
    }
});
</script>