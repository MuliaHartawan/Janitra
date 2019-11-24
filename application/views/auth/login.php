<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <title>Login | Janitra Tour Organizer</title>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/login.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/bootstrap.css">


</head>

<body>
    <div class="login-box">
        <div class="card" style="background-color: rgba(245, 245, 245, 0.116);">

            <div class="card-header">
                <h1>Login</h1>
            </div>

            <!-- <?php if ($this->session->flashdata('success') !="") {?>
                <div class="alert alert-success" role="alert"><?php echo $this->session->flashdata('success');?></div>
            <?php } ?>

            <?php if ($this->session->flashdata('error') !="") {?>
                <div class="alert alert-danger" role="alert"><?php echo $this->session->flashdata('error')?></div>
            <?php } ?> -->

            <div class="card-body">
                <?= $this->session->flashdata('message') ?>
                <form class="user" method="post" action="<?= base_url('auth/login'); ?>">
                <div class="textbox">
                    <i class="fas fa-user" aria-hidden="true"></i>
                    <input type="text" id="email" name="email" value="<?= set_value('email'); ?>" placeholder="Enter Email Address..."><?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="textbox">
                    <i class="fas fa-lock" aria-hidden="true"></i>
                    <input type="password" id="password" name="password" placeholder="Password"><?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <input type="submit" class="btn" value="Sign in">
                <div>
                    <p>
                        Belum punya akun? Daftar! <a href="<?= base_url('auth/registrasi'); ?>">di sini</a>.
                    </p>
                    <p class="mt-5 mb-3 text-muted">Janitra.@copy;</p>
                </div>
                </form>
            </div>

        </div>
    </div>
</body>

</html>