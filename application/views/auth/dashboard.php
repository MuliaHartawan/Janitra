        <div class="content">
            <div class="container-fluid">
                <div class="row">
                                        
                    <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                        <img src="<?= base_url('assets/img/user.png') ?>" class="card-img">
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
            </div>
        </div>