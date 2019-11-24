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
		<title><?php echo $judul; ?></title>

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