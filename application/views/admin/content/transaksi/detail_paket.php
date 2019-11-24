<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Pesanan</h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header">
            <div class="float-right">
                <a href="<?php echo site_url('data_paket'); ?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i> Back</a>
            </div>
            <h3 class="card-title">Detail Paket Wisata</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 offset-md-2" id="tambah-paket">
                    <form action="<?=site_url('data_paket/process')?>" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label class="col-form-label">Kode Paket</label>
                            <input type="hidden" name="id" value="<?=$row->id_paket_wisata?>">
                            <input type="text" class="form-control" value="<?=$row->kode_paket?>" readonly>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="col-form-label">Nama Paket</label>
                            <input type="text" class="form-control" value="<?=$row->nama_paket?>" readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label class="col-form-label">Nama Customer</label>
                            <input type="text" class="form-control" value="<?=$row->nama_customer?>" readonly>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="col-form-label">Destinasi</label>
                            <input type="text" class="form-control" value="<?=$row->kota?>" readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label class="col-form-label">Objek Wisata</label>
                            <input type="text" class="form-control" value="<?php $obj = array();
                                            foreach($objek as $data_objek){ 
                                                $obj[] = $data_objek->destinasi_wisata;
                                            } echo implode(', ', $obj) ?>" readonly>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="col-form-label">Fasilitas</label>
                            <input type="text" class="form-control" value="<?php $fas = array();
                                            foreach($fasilitas as $data_fasilitas){ 
                                                $fas[] = $data_fasilitas->nama_fasilitas;
                                            } echo implode(', ', $fas) ?>" readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label class="col-form-label">Jadwal Berangkat</label>
                            <input type="text" class="form-control" value="<?=date('d F Y', strtotime($row->jadwal_berangkat))?>" readonly>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="col-form-label">Jadwal Pulang</label>
                            <input type="text" class="form-control" value="<?=date('d F Y', strtotime($row->jadwal_pulang))?>" readonly>
                        </div>
                    </div>
                    </form>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label class="col-form-label">Banyak Penumpang</label>
                            <input type="text" class="form-control" value="<?=$row->banyak_penumpang?>" readonly>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="col-form-label">Biaya</label>
                            <input type="text" class="form-control" value="<?="Rp ".number_format($row->biaya, 2, ",", ".")?>" readonly>
                        </div>
                    </div>
                    </form>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label class="col-form-label">Keterangan</label>
                            <input type="text" class="form-control" value="<?=$row->keterangan?>" readonly>
                        </div>
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