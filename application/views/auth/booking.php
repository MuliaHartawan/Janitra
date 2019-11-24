<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Cari Paket</h4>
                        <p class="category">Masukkan kode paket ke kolom di bawah ini</p>
                    </div>
                    <div class="content">
                        <form action="<?=site_url('booking')?>" method="post">
                            <div class="row">
                                <div class="col-md-1">
                                    <div class="form-group">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Kode Paket</label>
                                        <input type="text" name="keyword" class="form-control" placeholder="Masukkan Kode Paket" aria-label="Search" value="<?=set_value('keyword'); ?>" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <br>
                                        <button type="submit" class="btn btn-round btn-fill btn-primary"><i class="fa fa-search"></i> Search</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row table-responsive table-full-width table-upgrade">
                                <?php 
                                    if(!empty($row)) :
                                ?>
                                <table class="table" style="<?php if(empty($this->input->post('keyword'))) : ?> <?php echo 'display:none' ?> <?php endif; ?>">
                                    <thead>
                                        <th class="text-center">Item</th>
                                        <th class="text-center"></th>
                                    </thead>
                                    <tbody>
                                        <?php foreach($row as $data){ ?>
                                        <tr>
                                            <td>Kode Paket</td>
                                            <td><?php echo $data->kode_paket; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Paket</td>
                                            <td><?php echo $data->nama_paket; ?></td>
                                            <input type="hidden" name="id_paket_wisata" value="<?=$data->id_paket_wisata?>">
                                        </tr>
                                        <tr>
                                            <td>Nama Customer</td>
                                            <td><?php echo $data->nama_customer; ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Destinasi</td>
                                            <td><?=$data->kota?></td>
                                        </tr>
                                        <tr>
                                            <td>Objek Wisata</td>
                                            <td><?php $obj = array();
                                            foreach($objek as $data_objek){ 
                                                $obj[] = $data_objek->destinasi_wisata;
                                            } echo implode(', ', $obj) ?></td>
                                        </tr>
                                        <tr>
											<td>Fasilitas</td>
                                            <td><?php $fas = array();
                                            foreach($fasilitas as $data_fasilitas){ 
                                                $fas[] = $data_fasilitas->nama_fasilitas;
                                            } echo implode(', ', $fas) ?></td>
                                        </tr>
                                        <tr>
											<td>Jadwal Berangkat</td>
                                            <td><?php echo date('d F Y', strtotime($data->jadwal_berangkat)); ?></td>
                                        </tr>
										<tr>
											<td>Jadwal Pulang</td>
                                            <td><?php echo date('d F Y', strtotime($data->jadwal_pulang)); ?></td>
                                        </tr>
										<tr>
                                            <td>Banyak Penumpang</td>
											<td><?php echo $data->banyak_penumpang; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Biaya</td>
											<td><?php echo "Rp ".number_format($data->biaya, 2, ",", "."); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Keterangan</td>
											<td><?php echo $data->keterangan; ?></td>
                                        </tr>
										<tr>
											<td></td>
											<td>
												<a href="#" data-toggle="modal" data-target="#logoutModal" class="btn btn-round btn-fill btn-info">Book</a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <?php else: ?>
                                    <div class="alert alert-danger" role="alert" style="<?php if(empty($this->input->post('keyword'))) : ?> <?php echo 'display:none' ?> <?php endif; ?>">Data Tidak Ditemukan</div>
                                <?php endif; ?>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                </nav>
                <p class="copyright pull-right">
                    Copyright &copy; <script>document.write(new Date().getFullYear())</script> <a href="<?= base_url('auth'); ?>">Janitra</a>
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

<!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">×</button>
                    <h4 class="modal-title" id="exampleModalLabel">Apakah Anda yakin memesan paket ini?</h4>
                </div>
                <div class="modal-body">Select "OK" di bawah ini jika Anda akan memesan paket ini.</div>
                <div class="modal-footer">
                    <form action="<?=site_url('booking/process')?>" method="post">
                        <input type="hidden" name="kode_booking" value="<?=$data->kode_paket?>">
                        <input type="hidden" name="id_user" value="<?=$data->id_user?>">
                        <input type="hidden" name="id_paket_wisata" value="<?=$data->id_paket_wisata?>">
                        <button class="btn btn-round btn-fill btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="book" class="btn btn-round btn-fill btn-primary">OK</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="<?= base_url('assets'); ?>/js/user/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="<?= base_url('assets'); ?>/js/user/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="<?= base_url('assets'); ?>/js/user/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?= base_url('assets'); ?>/js/user/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="<?= base_url('assets'); ?>/js/user/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="<?= base_url('assets'); ?>/js/user/demo.js"></script>

</html>