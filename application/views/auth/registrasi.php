<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <title>Registrasi | Janitra Tour Organizer</title>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/login.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/bootstrap.css">


</head>

<body>

    <div class="login-box">
        <div class="card" style="background-color: rgba(245, 245, 245, 0.116);">

            <?php if (!$this->session->flashdata('succsess')) { ?>
                <div class=""><?php echo $this->session->flashdata('success'); ?></div>
            <?php } ?>
            <?php if (!$this->session->flashdata('error')) { ?>
                <div class=""><?php echo $this->session->flashdata('error'); ?></div>
            <?php } ?>

            <div class="card-header">
                <h1>Registrasi</h1>
            </div>

            <div class="card-body">
            <form class="user" method="post" action="<?= base_url('auth/registrasi'); ?>">
                <div class="textbox">
                    <i class="far fa-user" aria-hidden="true"></i>
                    <input type="text" placeholder="Nama Lengkap" id="name" name="name" value="<?= set_value('name'); ?>">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="textbox">
                    <i class="fas fa-envelope-square" aria-hidden="true"></i>
                    <input type="text" placeholder="Email" id="email" name="email" value="<?= set_value('email'); ?>">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="textbox">
                    <i class="fas fa-phone-square" aria-hidden="true"></i>
                    <input type="text" placeholder="No telepon" id="no_telp" name="no_telp" value="<?= set_value('no_telp'); ?>">
                    <?= form_error('no_telp', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="textbox">
                    <i class="fas fa-lock" aria-hidden="true"></i>
                    <input type="password" placeholder="Password" id="password1" name="password1">
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="textbox">
                    <i class="fas fa-lock" aria-hidden="true"></i>
                    <input type="password" placeholder="Re-password" id="password2" name="password2">
                </div>

                <input type="submit" class="btn" value="Sign Up">
                <div>
                    <p>
                        Sudah punya akun? Login! <a href="<?= base_url('auth/login'); ?>">di sini</a>.
                    </p>
                    <p class="mt-5 mb-3 text-muted">Janitra.@copy;</p>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- include jquery -->
    <script src="<?= base_url('assets'); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('assets'); ?>/js/vendor/jquery-2.2.4.min.js"></script>

    <!-- include bootstrap js -->
    <script src="<?= base_url('assets'); ?>/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets'); ?>/js/vendor/bootstrap.min.js"></script>
</body>

</html>