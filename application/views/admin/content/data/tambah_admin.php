<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Admin</h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header">
            <div class="float-right">
                <a href="<?php echo site_url('data_admin'); ?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i> Back</a>
            </div>
            <h3 class="card-title">Form Tambah Admin</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <form action="<?= base_url('data_admin/tambah_admin'); ?>" method="post">
                        <div class="form-group">
                            <label class="col-form-label">Nama *</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= set_value('name'); ?>" placeholder="Full Name">
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Email *</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>" placeholder="Email Address">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">No Telepon</label>
                            <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= set_value('no_telp'); ?>" placeholder="Phone Number">
                            <?= form_error('no_telp', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Password *</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Password Confirmation *</label>
                            <input type="password" class="form-control" id="passconf" name="passconf" placeholder="Password Confirmation">
                            <?= form_error('passconf', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Save</button>
                            <button type="Reset" class="btn btn-secondary btn-flat">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->