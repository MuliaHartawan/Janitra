<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header pull-right">
                        <a href="<?php echo site_url('my_booking'); ?>" class="btn btn-fill btn-round btn-warning btn-flat"><i class="fa fa-undo"></i> Back</a>
                    </div>
                    <div class="header">
                        <h4 class="title">Detail Paket Wisata</h4>
                    </div>
                    <div class="content">
                        <form action="<?=site_url('my_booking/search')?>" method="post">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2">
                                    <div class="form-group">
                                        <label>Kode Paket</label>
                                        <input type="hidden" name="id" value="<?=$row->id_paket_wisata?>">
                                        <input type="text" class="form-control" value="<?=$row->kode_paket?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Nama Paket</label>
                                        <input type="text" class="form-control" value="<?=$row->nama_paket?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2">
                                    <div class="form-group">
                                        <label>Nama Customer</label>
                                        <input type="text" class="form-control" value="<?=$row->nama_customer?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Destinasi</label>
                                        <input type="text" class="form-control" value="<?=$row->kota?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2">
                                    <div class="form-group">
                                        <label>Objek Wisata</label>
                                        <input type="text" class="form-control" value="<?php $obj = array();
                                                        foreach($objek as $data_objek){ 
                                                            $obj[] = $data_objek->destinasi_wisata;
                                                        } echo implode(', ', $obj) ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Fasilitas</label>
                                        <input type="text" class="form-control" value="<?php $fas = array();
                                                        foreach($fasilitas as $data_fasilitas){ 
                                                            $fas[] = $data_fasilitas->nama_fasilitas;
                                                        } echo implode(', ', $fas) ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2">
                                    <div class="form-group">
                                        <label>Jadwal Berangkat</label>
                                        <input type="text" class="form-control" value="<?=date('d F Y', strtotime($row->jadwal_berangkat))?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Jadwal Pulang</label>
                                        <input type="text" class="form-control" value="<?=date('d F Y', strtotime($row->jadwal_pulang))?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2">
                                    <div class="form-group">
                                        <label>Banyak Penumpang</label>
                                        <input type="text" class="form-control" value="<?=$row->banyak_penumpang?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Biaya</label>
                                        <input type="text" class="form-control" value="<?="Rp ".number_format($row->biaya, 2, ",", ".")?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2">
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <input type="text" class="form-control" value="<?=$row->keterangan?>" readonly>
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