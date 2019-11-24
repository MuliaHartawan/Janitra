<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 active">Selamat Datang di Dashboard Admin</h1>
  </div>

  <div class="row">

      <div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="<?= base_url('assets/img/profile.png') ?>" class="card-img">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><?= $this->session->userdata('name'); ?></h5>
          <p class="card-text"><?= $this->session->userdata('email'); ?></p>
          <p class="card-text"><small class="text-muted">Member Sejak <?php echo date('d F Y'); ?></small></p>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- End of Main Content -->