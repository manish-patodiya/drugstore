<!-- Manage Language Start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>

        <div class="header-title">
            <h1><?php echo display('language') ?></h1>
            <small><?php echo display('manage_language') ?></small>
            <ol class="breadcrumb">
                <li><a href="index.html"><i class="pe-7s-home"></i><?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('language') ?></a></li>
                <li class="active"><?php echo display('manage_language') ?></li>
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
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading p-b-5">
                        <div class="panel-title col-md-6">
                            <!-- <h4><?php echo display('manage_language'); ?></h4> -->
                        </div>
                        <div class="row">
                            <div class="col-md-6 d-flex justify-content-right">
                                <?php
if ($this->permission1->method('add_phrase', 'create')->access()) {?>
                                <a href="<?=base_url('Language/phrase')?>"
                                    class="btn btn-info"><?php echo display('add_phrase'); ?></a>
                                <?php
} elseif ($this->permission1->method('add_phrase', 'read')->access()) {
    ?>
                                <a href="<?=base_url('Language/phrase')?>"
                                    class="btn btn-info"><?php echo display('manage_phrase'); ?></a>
                                <?php
}
?>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>

                                    <?php
if ($this->permission1->method('language', 'create')->access()) {?>
                                    <tr>
                                        <td colspan="3">
                                            <?=form_open('language/addlanguage', ' class="form-inline" ')?>
                                            <div class="form-group">
                                                <label class="sr-only" for="addLanguage">
                                                    <?php echo display('language_name') ?></label>
                                                <input name="language" type="text" class="form-control" id="addLanguage"
                                                    placeholder="<?php echo display('language_name') ?>">
                                            </div>
                                            <button type="submit"
                                                class="btn btn-primary"><?php echo display('save'); ?></button>
                                            <?=form_close();?>
                                        </td>
                                    </tr>
                                    <?php }?>



                                    <?php
if ($this->permission1->method('language', 'read')->access()) {?>
                                    <tr>
                                        <th><i class="fa fa-th-list"></i></th>
                                        <th>Language</th>
                                        <?php
if ($this->permission1->method('add_phrase', 'update')->access()) {?>
                                        <th><i class="fa fa-cogs"></i></th>
                                        <?php }?>

                                    </tr>
                                </thead>


                                <tbody>
                                    <?php if (!empty($languages)) {?>
                                    <?php $sl = 1?>
                                    <?php foreach ($languages as $key => $language) {?>
                                    <tr>
                                        <td><?=$sl++?></td>
                                        <td><?=$language?></td>
                                        <?php
if ($this->permission1->method('add_phrase', 'update')->access()) {?>
                                        <td><a href="<?=base_url("Language/editPhrase/$key")?>"
                                                class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a></td>
                                        <?php }?>
                                    </tr>
                                    <?php }?>
                                    <?php }?>
                                </tbody>
                                <?php }?>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Manage Language End -->