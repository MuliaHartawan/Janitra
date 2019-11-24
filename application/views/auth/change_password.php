<div class="content">
    <div class="container-fluid">
        <?php $this->view('messages'); ?>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="card">
                    <div class="header pull-right">
                        <a href="<?php echo site_url('profile'); ?>" class="btn btn-fill btn-round btn-warning btn-flat"><i class="fa fa-undo"></i> Back</a>
                    </div>
                    <div class="header">
                        <h4 class="title">Ganti Password</h4>
                        <p class="category"></p>
                    </div>
                    <div class="content">
                        <form action="<?=site_url('profile/change_password')?>" method="post">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="form-group">
                                        <label>Password Saat Ini</label>
                                        <input type="password" class="form-control" id="current_password" name="current_password">
                                        <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Password Baru</label>
                                        <input type="password" class="form-control" id="new_password" name="new_password">
                                        <?= form_error('new_password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="form-group">
                                        <label>Konfirmasi Password</label>
                                        <input type="password" class="form-control" id="passconf" name="passconf">
                                        <?= form_error('passconf', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info btn-fill">Ganti Passowrd</button>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>