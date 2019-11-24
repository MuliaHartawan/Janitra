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
            <h3 class="card-title">Form Edit Pesanan</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <form action="<?=site_url('booking/process')?>" method="post">
                        <div class="form-group">
                            <label class="col-form-label">Nama Customer *</label>
                            <input type="hidden" name="id" value="<?=$row->id_booking?>">
                            <select id="nama_customer" name="nama_customer" class="form-control" required>
                                <option value="">- Pilih -</option>
                                <?php foreach ($customer->result() as $key => $data) { ?>
                                    <option value="<?=$data->id_user?>" <?=$data->id_user == $row->id_user ? "selected" : null?>><?=$data->name?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Nama Paket *</label>
                            <select id="nama_paket" name="nama_paket" class="form-control" required>
                                <option value="">- Pilih -</option>
                                <?php foreach ($paket_wisata->result() as $key => $data) { ?>
                                    <option value="<?=$data->id_paket_wisata?>" <?=$data->id_paket_wisata == $row->id_paket_wisata ? "selected" : null?>><?=$data->nama_paket?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Jadwal Berangkat *</label>
                            <input type="date" class="form-control" id="jadwal_berangkat" name="jadwal_berangkat" value="<?=$row->jadwal_berangkat?>" placeholder="Keterangan" required>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Jadwal Pulang *</label>
                            <input type="date" class="form-control" id="jadwal_pulang" name="jadwal_pulang" value="<?=$row->jadwal_pulang?>" placeholder="Keterangan" required>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Banyak Penumpang *</label>
                            <input type="text" class="form-control" id="banyak_penumpang" name="banyak_penumpang" value="<?=$row->banyak_penumpang?>" placeholder="Keterangan" required>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Biaya *</label>
                            <input type="text" class="form-control" id="biaya" name="biaya" value="<?=$row->biaya?>" placeholder="Keterangan" required>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Status *</label>
                            <select id="status" name="status" class="form-control" required>
                                <option value="">- Pilih -</option>
                                <?php foreach ($status->result() as $key => $data) { ?>
                                    <option value="<?=$data->id_status?>" <?=$data->id_status == $row->id_status ? "selected" : null?>><?=$data->status?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="edit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Save</button>
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