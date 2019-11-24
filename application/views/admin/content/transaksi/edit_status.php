<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Pesanan</h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header">
            <div class="float-right">
                <a href="<?php echo site_url('booking'); ?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i> Back</a>
            </div>
            <h3 class="card-title">Form Edit Status Pesanan</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <form action="<?=site_url('booking/process')?>" method="post">
                        <div class="form-group">
                            <label class="col-form-label">Status *</label>
                            <input type="hidden" name="id" value="<?=$row->id_booking?>">
                            <select id="status" name="status" class="form-control" required>
                                <option value="">- Pilih -</option>
                                <?php foreach ($status->result() as $key => $data) { ?>
                                    <option value="<?=$data->id_status?>" <?=$data->id_status == $row->id_status ? "selected" : null?>><?=$data->status?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="edit_status" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Save</button>
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