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
						<h1 class="title">คู่มือการใช้งาน APIs</h1>
						<div class="colored-line"></div>
						<div class="section-description">
							www.cmuccdc.org
						</div>
						<div class="colored-line"></div>
					</div>
				</div>
			</section>

			<!-- Introduction -->
			<section class="app-brief introduction-wrapper " id="introduction">
				<div class="container left-align ">

					<h2 class="title">ศูนย์ข้อมูลการเปลี่ยนแปลงสภาพภูมิอากาศ</h2>
					<h4 class="sub-title">(Climate Change Data Center: CCDC) </h4>
					<p>This documentation is last updated on 1 Jan 2024</p>
					<p>ศูนย์ข้อมูลการเปลี่ยนแปลงสภาพภูมิอากาศ (Climate Change Data Center: CCDC)
						มหาวิทยาลัยเชียงใหม่ (www.cmuccdc.org) ได้ดำเนินโครงการ
						"เครือข่ายเฝ้าระวังและเตือนภัยวิกฤตหมอกควันภาคประชาชน (People AQI)"
						ร่วมกับเครือข่ายติดตั้งเครื่องตรวจวัดคุณภาพอากาศ DustBoy
						ภายใต้การสนับสนุนของสำนักงานการวิจัยแห่งชาติ (วช.) ในการติดตั้งเครื่องวัดฝุ่น "DustBoy" มากกว่า
						400 จุด ทั่วประเทศ ทำให้สามารถแสดงข้อมูลคุณภาพอากาศได้ครอบคลุมทุกจังหวัดในประเทศไทย</p>

					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates, nisi aliquam unde totam aut
						quam obcaecati doloremque placeat vel eos assumenda quibusdam quisquam perferendis perspiciatis
						voluptatum provident aperiam minima quas.</p>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta nobis quasi libero voluptates sit
						sed in iure laborum perferendis magni similique quisquam nisi earum fuga, laboriosam corporis at
						eligendi beatae!</p>
				</div>
			</section>

			<hr>

			<section class="app-brief" id="account">
				<div class="container left-align">
					<div class="section-header">
						<h2 class="dark-text title">บัญชีผู้ใช้</h2>
					</div>

					<div class="row">
						<div class="col-md-5">

							<div class="content-bx">
								<h5 class="title">Step 1 - ลงทะเบียนเพื่อขอใช้งาน APIs</h5>
								<p>กรุณากรอกข้อมูลตามแบบฟอร์มที่กำหนดให้ถูกต้อง
									ผู้ดูแลระบบสามารถลบบัญชีของท่านภายหลังได้ หากเห็นว่าข้อมูลที่ท่านสมัครมาไม่ถูกต้อง
								</p>
							</div>
							<div class="content-bx">
								<h5 class="title">Step 2 - ยืนยันอีเมล์</h5>
								<p>ระบบจะส่งอีเมล์ให้ท่านยืนยันการสมัคร</p>

							</div>
							<div class="content-bx">
								<h5 class="title">Step 3 - เข้าสู่ระบบเพื่อใช้งาน</h5>
								<p>ท่านสามารถเข้าสู่ระบบโดย อีเมล์ และ รหัสผ่าน ที่ท่านกำหนดตอนลงทะเบียน</p>
							</div>
						</div>
						<div class="col-md-5 offset-md-2">

							<div class="accordion accordion-flush" id="accordionFlushExample">
								<div class="accordion-item">
									<h2 class="accordion-header" id="flush-headingOne">
										<button class="accordion-button" type="button"
											data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
											aria-expanded="true" aria-controls="flush-collapseOne">
											ลงทะเบียน
										</button>
									</h2>
									<div id="flush-collapseOne" class="accordion-collapse collapse show"
										aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
										<div class="accordion-body">
											<form action="" method="post">
												<div class="row">
													<div class="col-md-6">
														<div class="mb-3">
															<label for="access_name" class="form-label">ชื่อ -
																นามสกุล</label>
															<input type="text" class="form-control" name="access_name">
														</div>
													</div>
													<div class="col-md-6">
														<div class="mb-3">
															<label for="access_org"
																class="form-label">หน่วยงาน/สังกัด</label>
															<input type="text" class="form-control" name="access_org">
														</div>
													</div>
												</div>

												<div class="mb-3">
													<label for="access_purpose"
														class="form-label">วัตถุประสงค์การใช้งาน</label>
													<textarea class="form-control" name="access_purpose"
														rows="3"></textarea>
												</div>
												<div class="mb-3">
													<label for="access_email" class="form-label">อีเมล์ติดต่อ</label>
													<input type="email" class="form-control" name="access_email">
												</div>

												<div class="row">
													<div class="col-md-6">
														<div class="mb-3">
															<label for="access_password"
																class="form-label">รหัสผ่าน</label>
															<input type="password" class="form-control"
																name="access_password">
														</div>
													</div>
													<div class="col-md-6">
														<div class="mb-3">
															<label for="access_password_c"
																class="form-label">ยืนยันรหัสผ่าน</label>
															<input type="password" class="form-control"
																name="access_password_c">
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-md-12">
													<div class="g-recaptcha" data-sitekey="6LfegkgUAAAAAL-jtSQ3Bz8XR6M_usJU_-vZ6ozo"></div>
													</div>
												</div>

												<div class="mb-3">
													<div class="d-grid gap-2">
														<button class="btn btn-primary">ลงทะเบียน</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header" id="flush-headingTwo">
										<button class="accordion-button collapsed" type="button"
											data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
											aria-expanded="false" aria-controls="flush-collapseTwo">
											เข้าสู่ระบบ
										</button>
									</h2>
									<div id="flush-collapseTwo" class="accordion-collapse collapse"
										aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
										<div class="accordion-body">///</div>
									</div>
								</div>

							</div>

							
						</div>
					</div>

				</div>
			</section>


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
	<script src="<?= base_url('template') ?>/js/jquery.min.js"></script>
	<script src="<?= base_url('template') ?>/plugins/bootstrap/bootstrap.min.js"></script>
	<script src="<?= base_url('template') ?>/plugins/jstree/dist/jstree.min.js"></script>
	<script src="<?= base_url('template') ?>/plugins/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
	<script src="<?= base_url('template') ?>/js/custom.js"></script>
</body>

</html>