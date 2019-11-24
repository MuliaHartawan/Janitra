	<!DOCTYPE html>
	<html lang="zxx" class="no-js">

	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="assets/img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="Colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Janitra Tour Organizer</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
			CSS
			============================================= -->
		<link rel="stylesheet" type="text/css" href="<?php echo asset_url(); ?>css/linearicons.css">
		<link rel="stylesheet" type="text/css" href="<?php echo asset_url(); ?>css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="<?php echo asset_url(); ?>css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo asset_url(); ?>css/magnific-popup.css">
		<link href="<?= base_url('assets'); ?>/css/select2.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" type="text/css" href="<?php echo asset_url(); ?>css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo asset_url(); ?>css/main.css">
	</head>

    <style>
img {
  border: 1px solid #ddd; /* Gray border */
  border-radius: 4px;  /* Rounded border */
  padding: 5px; /* Some padding */
  width: 150px; /* Set a small width */
}

/* Add a hover effect (blue shadow) */
img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
</style>

	<body>

		<!-- Start Header Area -->
		<header class="default-header">
			<div class="container">
				<div class="header-wrap">
					<div class="header-top d-flex justify-content-between align-items-center">
						<div class="logo">
							<a href="<?=base_url('auth')?>"><img src="<?php echo asset_url(); ?>img/logo1.png" alt=""></a>
						</div>
						<div class="main-menubar d-flex align-items-center">
							<nav class="hide">
								<a href="#home">Home</a>
								<a href="#booking">Booking</a>
								<a href="#syarat">Syarat dan Ketentuan</a>
								<a href="#package">Paket Wisata</a>
								<a href="#contact">Kontak</a>
								<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Login</a>
								<div class="dropdown-menu">
									<?= $this->session->flashdata('message') ?>
									<form class="px-4 py-3" method="post" action="<?= base_url('auth/login'); ?>">
										<div class="form-group">
											<label for="exampleDropdownFormEmail1">Email address</label>
											<input type="email" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>" placeholder="Email">
											<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group">
											<label for="exampleDropdownFormPassword1">Password</label>
											<input type="password" class="form-control" id="password" name="password" placeholder="Password">
											<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<button type="submit" class="btn btn-warning btn-block">Sign in</button>
										<div class="dropdown-divider"></div>
										<a href="<?= base_url('auth/registrasi'); ?>">Sign up</a>
										<br>
										<a class="" href="#">Forgot password?</a>
									</form>

								</div>
						</div>
						</nav>
						<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
					</div>
				</div>
			</div>
			</div>
		</header>
		<!-- End Header Area -->

<div class="container">
		<div class="col-md-8 col-md-offset-2">
            <p>Kami dari <strong>JANITRA TOUR ORGANIZER</strong> salah satu penyelenggara kegiatan wisata yang telah berkecimpung dalam dunia pariwisata sejak tahun 2010, menawarkan paket wisata ke berbagai macam tujuan di Pulau Jawa dan Bali yang menarik untuk di kunjungi wisatawan lokal maupun manca negara.</p>

            <p>&nbsp;</p>

            <p>Paket wisata yang kami tawarkan berupa wisata alam yang dapat mengurangi atau bahkan menghilangkan kepenatan rutinitas sehari hari, wisata edukasi yang dapat mendidik anak anak kita, maupun wisata religi yang dapat semakin menambah rasa keimanan kita pada Pencipta.</p>

            <p>&nbsp;</p>

            <p>Jasa pelayanan wisata kami selalu berusaha memberikan kenyamanan dengan memberikan jadwal pelaksananaan yang tertata rapi, pelayanan terbaik serta harga yang sangat terjangkau, dengan harapan anda dapat menikmati liburan secara maksimal dan nyaman.</p>

            <p>&nbsp;</p>

            <p>Bagi anda yang tertarik dengan proposal wisata dari <strong>JANITRA TOUR ORGANIZER</strong>, silahkan menghubungi kami guna mendapat info yang lebih lanjut. Besar harapan kami dapat membantu anda merencanakan liburan dengan nyaman dan mengesankan, terima kasih.</p>

            <p>&nbsp;</p>

            <p>Salam Wisata</p>

            <p>&nbsp;</p>

            <p>&nbsp;</p>

            <p>&nbsp;</p>

            <p>&nbsp;</p>

            <p><strong>JANITRA TOUR ORGANIZER</strong></p>

            <p>&nbsp;</p>

            <p>Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = Jl. Gajah Mada 34 Sukodadi Lamongan</p>

            <p>e-mail &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = <a href="mailto:janitratour@gmail.com">janitratour@gmail.com</a></p>

            <p>instagram&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = @janitratour</p>

            <p>Telp / sms / whatsapp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = 1. ARIF&nbsp; (Lamongan) = 085746060446</p>

            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 2. EKO (Surabaya)&nbsp;&nbsp;&nbsp; = 082333876945</p>

            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 3. DITO (Malang)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = 081216203994</p>
            <div class="container">
                <div class="row">
                    <div class="col-xs-4" class="thumbnail" target="_blank"> 
                        <img src="./assets/img/npwp.jpg">
                    </div>
                    <div class="col-xs-4" class="thumbnail" target="_blank">
                        <img src="./assets/img/skt.jpg">
                    </div>
                    <div class="col-xs-4" class="thumbnail" target="_blank">
                        <img src="./assets/img/nib.jpg">
                    </div>
                </div>
            </div>
        </div>  
</div>