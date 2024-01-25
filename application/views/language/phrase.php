<!-- Add Phrase Start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div> <div class="header-title">
            <h1><?php echo display('language') ?></h1>
            <small><?php echo display('add_phrase') ?></small>

        </div>
        <div class="header-title">
            
            <ol class="breadcrumb">
                <li><a href="index.html"><i class="pe-7s-home"></i><?php echo  display('home')?></a></li>
                <li><a href="#"><?php echo  display('language')?></a></li>
                <li class="active"><?php echo  display('add_phrase')?></li>
            </ol>
        </div>
    </section>

    <section class="content">
        <!-- Add Phrase -->


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
                <a href="<?= base_url('Language') ?>" class="btn btn-info"><?php echo display('language_home')?></a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('add_phrase')?></h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>

                                <?php
                                if($this->permission1->method('add_phrase','create')->access()){ ?>
                                    <tr>
                                        <td colspan="2">
                                            <?= form_open('language/addPhrase', ' class="form-inline" ') ?>
                                                <div class="form-group">
                                                    <label class="sr-only" for="addphrase"><?php display('phrase_name')?></label>
                                                    <input name="phrase[]" type="text" class="form-control" id="addphrase" placeholder="Phrase Name">
                                                </div>

                                                <button type="submit" class="btn btn-primary"><?php echo display('save')?></button>
                                            <?= form_close(); ?>
                                        </td>
                                    </tr>
                                <?php } ?>


                                <?php
                                if($this->permission1->method('add_phrase','read')->access()){ ?>
                                    <tr>
                                        <th><i class="fa fa-th-list"></i></th>
                                        <th><?php display('phrase')?></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php if (!empty($phrases)) {?>
                                        <?php $sl = 1 ?>
                                        <?php foreach ($phrases as $value) {?>
                                        <tr>
                                            <td><?= $sl++ ?></td>
                                            <td><?= $value->phrase ?></td>
                                        </tr>
                                        <?php } ?>
                                    <?php } ?>
                                </tbody>
                                <?php } ?>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Add Phrase End -->




