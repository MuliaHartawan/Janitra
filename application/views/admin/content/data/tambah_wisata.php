<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Objek Wisata</h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header">
            <div class="float-right">
                <a href="<?php echo site_url('detail_destination'); ?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i> Back</a>
            </div>
            <h3 class="card-title">Form Tambah Objek Wisata</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <form action="<?=site_url('detail_destination/process')?>" method="post">
                        <div class="form-group">
                            <label class="col-form-label">Destinasi *</label>
                            <select name="destinasi" class="form-control" required>
                                <option value="">- Pilih -</option>
                                <?php foreach ($destinasi->result() as $key => $data) { ?>
                                    <option value="<?=$data->id_destinasi?>"><?=$data->kota?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Objek Wisata *</label>
                            <input type="text" class="form-control" id="destinasi_wisata" name="destinasi_wisata" value="<?= set_value('destinasi_wisata'); ?>" placeholder="Nama Objek Wisata" required>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Alamat Wisata *</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="" placeholder="Alamat Objek Wisata" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="add" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Save</button>
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