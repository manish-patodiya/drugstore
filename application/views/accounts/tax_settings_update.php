<!-- Add new tax start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('tax') ?></h1>
            <small><?php echo display('tax_settings') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('tax') ?></a></li>
                <li class="active"><?php echo display('tax_settings') ?></li>
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


        <!-- new tax -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('tax_settings') ?> </h4>
                            <div id="outputPreview1" class="alert hide modal-title" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                        </div>
                    </div>
                    <?php echo form_open_multipart('Caccounts/update_tax_settins', array('class' => 'form-vertical', 'id' => 'tax_settings_update')) ?>
                    <div class="panel-body">
                        <div class="form-group row">
                            <label for="number_of_tax"
                                class="col-sm-2 col-form-label"><?php echo display('number_of_tax') ?> <i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control" name="nt" id="number_of_tax" required=""
                                    placeholder="<?php echo display('number_of_tax') ?>" readonly
                                    value="<?php echo count($setinfo) ?>" />
                                <input type="hidden" name="id" value="<?php echo $setinfo[0]['id']; ?>">
                            </div>
                            <div>
                                <a class="btn btn-info" onclick="add_row()">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>

                        <span id="taxfield" class="form-group row">
                            <?php
$i = 1;
foreach ($setinfo as $taxss) {?>
                            <div class="form-group row"><label for="fieldname" class="col-sm-1 col-form-label">Tax Name
                                    <?php echo $i; ?></label>
                                <input type="hidden" value="<?php echo $taxss['id'] ?>" name="tax_id[]">
                                <div class="col-sm-2"><input required type="text" class="form-control" name="taxfield[]"
                                        value="<?php echo $taxss['tax_name']; ?>"></div>
                                <label for="default_value"
                                    class="col-sm-1 col-form-label"><?php echo display('default_value') ?> %</label>
                                <div class="col-sm-2"><input required type="text" class="form-control"
                                        name="default_value[]" value="<?php echo $taxss['default_value']; ?>"
                                        id="default_value" placeholder="<?php echo display('default_value') ?>" /></div>
                                <label for="reg"
                                    class="col-sm-1 col-form-label"><?php echo display('reg_no'); ?></label>
                                <div class="col-sm-2"><input required type="text" class="form-control" name="reg_no[]"
                                        value="<?php echo $taxss['reg_no']; ?>" id="reg_no"
                                        placeholder="<?php echo display('reg_no') ?>" /></div>
                                <div class="col-sm-1"><input type="checkbox" name="is_show" class="form-control"
                                        value="1" <?php if ($taxss['is_show'] == 1) {echo 'checked';}?>></div><label
                                    for="isshow" class="col-sm-1 col-form-label"><?php echo 'Is Show'; ?></label>
                            </div>
                            <?php $i++;}?>
                        </span>



                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-settings" class="btn btn-success" name="add-settings"
                                    value="<?php echo display('save') ?>" />
                            </div>
                        </div>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Add new tax end -->
<script type="text/javascript">
function add_column(sl) {
    var text = "";
    var i;
    for (i = 0; i < sl; i++) {
        var f = i + 1;
        text += '<div class="form-group row"><label for="fieldname" class="col-sm-1 col-form-label">Tax Name' + f +
            '</label><div class="col-sm-2"><input required type="text" class="form-control" autocomplete="off" name="taxfield[]"></div><label for="default_value" class="col-sm-1 col-form-label"><?php echo display('default_value') ?> <i class="text-danger"></i></label><div class="col-sm-2"><input required type="text" class="form-control" name="default_value[]" id="default_value"  placeholder="<?php echo display('default_value') ?>" /></div><label for="reg_no" class="col-sm-1 col-form-label"><?php echo display('reg_no') ?> <i class="text-danger"></i></label><div class="col-sm-2"><input required type="text" class="form-control" name="reg_no[]" id="reg_no"  placeholder="<?php echo display('reg_no') ?>" /></div><div class="col-sm-1"><input type="checkbox" name="is_show" class="form-control" value="1"></div><label for="isshow" class="col-sm-1 col-form-label"><?php echo 'Is Show'; ?></label></div>';
    }
    document.getElementById("taxfield").innerHTML = text;

}

function add_row() {
    let f = <?php echo $i; ?>;
    let text = '<div class="form-group row"><label for="fieldname" class="col-sm-1 col-form-label">Tax Name' + f +
        '</label><div class="col-sm-2"><input type="text" required class="form-control" autocomplete="off" name="taxfield[]"></div><label for="default_value" class="col-sm-1 col-form-label"><?php echo display('default_value') ?> <i class="text-danger"></i></label><div class="col-sm-2"><input required type="text" class="form-control" name="default_value[]" id="default_value"  placeholder="<?php echo display('default_value') ?>" /></div><label for="reg_no" class="col-sm-1 col-form-label"><?php echo display('reg_no') ?> <i class="text-danger"></i></label><div class="col-sm-2"><input required type="text" class="form-control" name="reg_no[]" id="reg_no"  placeholder="<?php echo display('reg_no') ?>" /></div><div class="col-sm-1"><input type="checkbox" name="is_show" class="form-control" value="1"></div><label for="isshow" class="col-sm-1 col-form-label"><?php echo 'Is Show'; ?></label></div>';
    $("#taxfield").append(text);
    $("#number_of_tax").val(f);
}
</script>
<!-- <script type="text/javascript">
$(document).ready(function(){

    var checkoutbanform   = $("#tax_settings_update");
    var outputPreview1 = $('#outputPreview1');

    checkoutbanform.on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            method: checkoutbanform.attr('method'),
            url   : checkoutbanform.attr('action'),
            data  : checkoutbanform.serialize(),
            dataType: 'json',
            success: function(data)
            {
                if (data.status == true)
                {
                    outputPreview1.removeClass("hide").removeClass("alert-danger").addClass('alert-success').html(data.success);

                    setInterval(function(){
                        window.location.href = '<?=base_url()?>'+'Caccounts/tax_settings';

                    }, 1000);
                } else {
                    outputPreview1.removeClass("hide").removeClass("alert-success").addClass('alert-danger').html(data.exception);
                }

            },
            error: function()
            {
                alert('failed...');
            }
        });
    });

});
</script> -->