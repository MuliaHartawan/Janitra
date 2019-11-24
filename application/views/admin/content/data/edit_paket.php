<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Paket Wisata</h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header">
            <div class="float-right">
                <a href="<?php echo site_url('data_paket'); ?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i> Back</a>
            </div>
            <h3 class="card-title">Form Edit Paket Wisata</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 offset-md-4" id="tambah-paket">
                    <form action="<?=site_url('data_paket/process')?>" method="post">
                        <div class="form-group">
                            <label class="col-form-label">Kode Paket</label>
                            <input type="hidden" name="id" value="<?=$row->id_paket_wisata?>">
                            <input type="text" class="form-control" value="<?=$row->kode_paket?>" readonly>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Nama Paket *</label>
                            <input type="text" class="form-control" id="nama_paket" name="nama_paket" value="<?=$row->nama_paket?>" placeholder="Nama Paket Wisata" required>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Nama Customer *</label>
                            <select id="nama_customer" name="nama_customer" class="form-control" required>
                                <option value="">- Pilih -</option>
                                <?php foreach ($customer->result() as $key => $data) { ?>
                                    <option value="<?=$data->id_user?>" <?=$data->id_user == $row->id_user ? "selected" : null?>><?=$data->name?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Destinasi *</label>
                            <select id="destinasi" name="destinasi" class="form-control" required>
                                <option value="">- Pilih -</option>
                                <?php foreach ($destinasi->result() as $key => $data) { ?>
                                    <option value="<?=$data->id_destinasi?>" <?=$data->id_destinasi == $row->id_destinasi ? "selected" : null?>><?=$data->kota?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Objek Wisata *</label>
                            <select id="objek_wisata" name="objek_wisata[]" multiple class="form-control js-example-basic-multiple" required></select>
                            <p><small class="text-primary">tekan <code>ctrl</code> untuk memilih lebih dari satu</small></p>
                        </div>
                        <div class="form-group" id="loading" style="margin-top: 15px;">
                            <img src="<?=base_url('assets')?>/img/loading.gif" width="18"> <small>Loading...</small>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Fasilitas *</label>
                            <select id="fasilitas" multiple name="fasilitas[]" class="form-control js-example-basic-multiple" required>
                                <?php foreach ($fasilitas->result() as $key => $data) { ?>
                                    <option value="<?=$data->nama_fasilitas?>"><?=$data->nama_fasilitas?></option>
                                <?php } ?>
                            </select>
                            <p><small class="text-primary">tekan <code>ctrl</code> untuk memilih lebih dari satu</small></p>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Jadwal Berangkat *</label>
                            <input type="date" class="form-control" id="jadwal_berangkat" name="jadwal_berangkat" value="<?=date('d F Y', strtotime($row->jadwal_berangkat))?>" placeholder="Keterangan" required>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Jadwal Pulang *</label>
                            <input type="date" class="form-control" id="jadwal_pulang" name="jadwal_pulang" value="<?=date('d F Y', strtotime($row->jadwal_pulang))?>" placeholder="Keterangan" required>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Biaya</label>
                            <input type="text" class="form-control" id="biaya" name="biaya" value="<?=$row->biaya?>" placeholder="Keterangan">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?=$row->keterangan?>" placeholder="Keterangan">
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

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Janitra <?= date('Y') ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Select "Logout" below if you are ready to end your current session.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="admin/logout">Logout</a>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets'); ?>/vendor/bootstrap/js/bootstrap-multiselect.min.js"></script>
<script src="<?= base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets'); ?>/js/sb-admin-2.min.js"></script>
<script src="<?= base_url('assets'); ?>/js/select2.min.js"></script>

<script src="<?php echo base_url('assets') ?>assets/js/datatables.min.js"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url('assets'); ?>/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets');  ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src=" <?php echo base_url('assets'); ?>/js/demo/datatables-demo.js"></script>
<script>
    $(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
    // Kita sembunyikan dulu untuk loadingnya
        $("#loading").hide();
    
        $("#destinasi").change(function(){ // Ketika user mengganti atau memilih data provinsi
            $("#objek_wisata").hide(); // Sembunyikan dulu combobox kota nya
            $("#loading").show(); // Tampilkan loadingnya
    
            $.ajax({
                type: "POST", // Method pengiriman data bisa dengan GET atau POST
                url: "<?=site_url('data_paket/listKota')?>", // Isi dengan url/path file php yang dituju
                data: {id_destinasi : $("#destinasi").val()}, // data yang akan dikirim ke file yang dituju
                dataType: "json",
                beforeSend: function(e) {
                    if(e && e.overrideMimeType) {
                        e.overrideMimeType("application/json;charset=UTF-8");
                    }
                },
                success: function(response){ // Ketika proses pengiriman berhasil
                    $("#loading").hide(); // Sembunyikan loadingnya
                    // set isi dari combobox kota
                    // lalu munculkan kembali combobox kotanya
                    $("#objek_wisata").html(response.list_kota).show();
                },
                error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                }
            });
        });
    });

    $('.js-example-basic-multiple').select2();

</script>

</body>

</html>