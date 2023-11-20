<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Title -->
	<title>CMUCCDC APIs Documentation</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport"
		content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
	<meta name="theme-color" content="#009688">
	<meta name="author" content="signOutz">
	<meta name="robots" content="index, follow">



	<!-- Favicons Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('template') ?>images/favicon.png">


	<!-- Bootstrap CSS CDN -->
	<link rel="stylesheet" href="<?= base_url('template') ?>/plugins/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('template') ?>/plugins/jstree/dist/themes/default/style.min.css">
	<link rel="stylesheet" href="<?= base_url('template') ?>/plugins/perfect-scrollbar/css/perfect-scrollbar.css">
	<link rel="stylesheet" href="<?= base_url('template') ?>/plugins/font-awesome/css/all.min.css">
	<link rel="stylesheet" href="<?= base_url('template') ?>/css/style.css?v=1">

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
		rel="stylesheet">
	<script src='https://www.google.com/recaptcha/api.js?hl=th'></script>
    <script src="<?= base_url('template') ?>/js/jquery.min.js"></script>

</head>

<body data-bs-spy="scroll" data-bs-target=".nav-bar" data-bs-offset="50">
	<div class="wrapper" id="tableofcontent">

		<!-- Sidebar Holder -->
		<nav id="nevbarleft">
			<div class="side-nav">
				<div class="sidebar-header">
					<img src="https://www.cmuccdc.org/template/image/logo_ccdc.png" alt="logo">
				</div>
				<div class="nav-bar deznav-scroll">
					<ul class="list-unstyled components navbar-nav nav" id="download-button">
						<li class="nav-item"><a class="nav-link" href="#introduction">CCDC</a></li>
						<li class="nav-item"><a class="nav-link" href="#aqiinfo">AQI Index</a></li>
						<li class="nav-item"><a class="nav-link" href="#apikey">How to</a></li>
						<li class="nav-item"><a class="nav-link" href="#model">DustBoy Model</a></li>
						<li class="nav-item"><a class="nav-link" href="#station">Stations</a></a></li>
						<li class="nav-item"><a class="nav-link" href="#value">DustBoy Values</a></a></li>
						<li class="nav-item"><a class="nav-link" href="#forecast">Forecast</a></li>
						<li class="nav-item"><a class="nav-link" href="#hotspot">Hotspot</a></li>
						<li class="nav-item"><a class="nav-link" href="#snapshot">Snapshot</a></li>
					</ul>
				</div>
				<div class="sidebar-bottom">
					<h6 class="name">Dustboy Open APIs</h6>
					<span class="ver-info">Version 1.0</span>
				</div>
			</div>
			<button type="button" id="mobileCloseBtn" class="navbar-btn">
				<img src="/template/images/close.png" alt="">
			</button>
		</nav>

		<!-- Page Content Holder -->
		<div id="content">

			<!-- Top Nav -->
			<header class="header">
				<nav class="navbar navbar-default top-nav-bar">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" id="sidebarCollapse" class="navbar-btn">
								<span></span>
								<span></span>
								<span></span>
							</button>
						</div>
						<div class="extra-nav">
							<a href="#account" class="btn support-button">Account</a>
							<a target="_blank" href="https://www.cmuccdc.org" class="btn support-button">Website</a>
						</div>
					</div>
				</nav>
			</header>

			<!-- Banner -->
			<section class="slide-banner overlay-black"
				style="background-image: url(https://images.unsplash.com/photo-1469365556835-3da3db4c253b?auto=format&fit=crop&q=60&w=900&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8YWlyJTIwY2xvdWR8ZW58MHx8MHx8fDA%3D);">
				<div class="container">
					<div class="inner-content">
						<h1 class="title">www.cmuccdc.org</h1>
						<div class="colored-line"></div>
						<div class="section-description">
							APIs Sensors Data
						</div>
						<div class="colored-line"></div>
					</div>
				</div>
			</section>

			

			<hr>

            <?php $this->load->view($view);?>
			
			<!-- Footer -->
			<footer class="footer text-center">
				<div class="container">
					<p class="copyright">
						© 2023 <a href="https://www.cmuccdc.org" target="_blank"><strong>cmuccdc</strong></a>. All
						Rights Reserved
					</p>
				</div>
			</footer>
		</div>
	</div>

	<!-- JAVASCRIPT FILES ========================================= -->
	
	<script src="<?= base_url('template') ?>/plugins/bootstrap/bootstrap.min.js"></script>
	<script src="<?= base_url('template') ?>/plugins/jstree/dist/jstree.min.js"></script>
	<script src="<?= base_url('template') ?>/plugins/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
	<script src="<?= base_url('template') ?>/js/custom.js?v=<?=date('His')?>"></script>
</body>

</html>