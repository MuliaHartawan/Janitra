<div class="content">
    <div class="container-fluid">
        <?php $this->view('messages'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header pull-right">
                        <a href="<?php echo site_url('my_booking'); ?>" class="btn btn-fill btn-round btn-warning btn-flat"><i class="fa fa-undo"></i> Back</a>
                    </div>
                    <div class="header">
                        <h4 class="title">Konfirmasi Pembayaran</h4>
                    </div>
                    <div class="content">
                        <?= form_open_multipart('my_booking/process') ?>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Kode Booking</label>
                                        <input type="hidden" name="id" value="<?=$row->id_booking?>">
                                        <input type="text" id="kode_booking" name="kode_booking" class="form-control" value="<?=$row->kode_booking?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Atas Nama *</label>
                                        <input type="text" id="atas_nama" name="atas_nama" class="form-control" value="<?=set_value('atas_nama'); ?>" placeholder="Atas Nama" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Nominal *</label>
                                        <input type="text" id="nominal" name="nominal" class="form-control" value="<?=set_value('nominal'); ?>" placeholder="Nominal" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Upload Bukti Transfer (Max size : 2 MB) *</label>
                                        <input type="file" name="gambar_bukti" class="form-control" value="<?=set_value('gambar_bukti'); ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <button type="submit" name="add" class="btn btn-round btn-fill btn-success btn-flat"><i class="fa fa-paper-plane"></i> Save</button>
                                        <button type="Reset" class="btn btn-round btn-fill btn-default btn-flat">Reset</button>
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