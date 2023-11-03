<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- Title -->
	<title>CMUCCDC APIs Documentation</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
	<meta name="theme-color" content="#009688">
	<meta name="author" content="signOutz">
	<meta name="robots" content="index, follow"> 
	 
	

	<!-- Favicons Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="<?=base_url('template')?>images/favicon.png">
    
	
	<!-- Bootstrap CSS CDN -->
	<link rel="stylesheet" href="<?=base_url('template')?>/plugins/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url('template')?>/plugins/jstree/dist/themes/default/style.min.css">
	<link rel="stylesheet" href="<?=base_url('template')?>/plugins/perfect-scrollbar/css/perfect-scrollbar.css">
	<link rel="stylesheet" href="<?=base_url('template')?>/plugins/font-awesome/css/all.min.css">
	<link rel="stylesheet" href="<?=base_url('template')?>/css/style.css?v=1">
	
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	
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
					<li class="nav-item"><a class="nav-link" href="#introduction">Introduction</a></li>
					<li class="nav-item"><a class="nav-link" href="#sass-compile">Sass Compile</a></li>
					<li class="nav-item"><a class="nav-link" href="#theme_features">Theme Features</a></li>
					<li class="nav-item"><a class="nav-link" href="#html_file">HTML File</a></li>
					<li class="nav-item"><a class="nav-link" href="#credits_file">Credits</a></li>
					<li class="nav-item"><a class="nav-link" href="#pwa">PWA Settings</a></li>
					<li class="nav-item"><a class="nav-link" href="#our_product">Our Products</a></li>
					<li class="nav-item"><a class="nav-link" href="#html_structure">Basic HTML Structure</a></li>
					<li class="nav-item"><a class="nav-link" href="#custom_work">Custom Work Requirements </a></li>
					<li class="nav-item"><a class="nav-link" href="#version_history">Version History</a></li>
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
						<a href="javascript:void(0);" class="btn support-button">Account</a>
						<a target="_blank" href="https://www.cmuccdc.org" class="btn support-button">Website</a>
					</div>
				</div>
			</nav>
		</header>
		
		<!-- Banner -->
		<section class="slide-banner overlay-black" style="background-image: url(images/bg2.jpg);">
			<div class="container">
				<div class="inner-content">
					<h1 class="title">Documentation</h1>
					<div class="colored-line"></div>
					<div class="section-description">
						CMUCCDC: Fast And Easy-To-Work APIs
					</div>
					<div class="colored-line"></div>
				</div>
			</div>
		</section>
				
		<!-- Introduction -->
		<section class="app-brief introduction-wrapper text-center" id="introduction">
			<div class="container center-align ">
				<h2 class="title">W3Meat</h2>
				<h4 class="sub-title">W3Meat: Meat Shop Mobile App Template</h4>
				<p>This documentation is last updated on 21 July 2023</p>
				<div class="wishes-bx">
					<p>Thank you for purchasing this HTML template.</p>
					<p class="rating-text">If you like this template, Please support us by rating this template with <strong>5 stars</strong></p>
				</div>
			</div>
		</section>
		
		<hr>
		
		<!-- Sass Compile -->
		<section class="app-brief" id="sass-compile">
			<div class="container left-align">
				<div class="section-header">
					<h2 class="dark-text title">Sass Compile - </h2>
				</div>
				<div class="sass-compile">
					<div class="content-bx">
						<h5 class="title">1.- Install Node.js</h5>
						<p>To compile Sass via the command line first, we need to install <a href="https://nodejs.org/en/" target="_blank">node.js</a>. The easiest way is downloading it from the official website nodejs.org open the package and follow the wizard.</p>
					</div>
					
					<div class="content-bx">
						<h5 class="title">2.- Initialize NPM</h5>
						<p>NPM is the Node Package Manager for JavaScript. NPM makes it easy to install and uninstall third party packages. To initialize a Sass project with NPM, open your terminal and CD (change directory) to your project folder.</p>
<pre class="brush: javascript; h-100">
npm init
</pre>
<img src="images/cmd.png" alt="">
<p>Once in the correct folder, run the command <code>npm init</code>. You will be prompted to answer several questions about the project, after which NPM will generate a <code>package.json</code> file in your folder.</p>
					</div>

					<div class="content-bx">
						<h5 class="title">3.- Install Node-Sass</h5>
						<p>Node-sass is an NPM package that compiles Sass to CSS (which it does very quickly too). To install node-sass run the following command in your terminal:  <code>npm install node-sass</code></p>
<pre class="brush: javascript; h-100">
npm install node-sass
</pre>
					</div>
					
					<div class="content-bx">
						<h5 class="title">4.- Write Node-sass Command</h5>
						<p>Everything is ready to write a small script in order to compile Sass. Open the package.json file in a code editor. You will see something like this: In the scripts section add an <strong>scss command</strong></p>
						<img src="images/jsn.png" alt="">
<pre class="brush: javascript; h-100">
"scripts": {
  "sass": "node-sass --watch scss/main.scss css/style.css"
},
</pre>
					</div>
					
					<div class="content-bx">
						<h5 class="title">5.- Run the Script</h5>
						<p>To execute our one-line script, we need to run the following command in the terminal: <code>npm run sass</code></p>
<pre class="brush: javascript; h-100">
npm run sass
</pre>
					</div>
					
					<div class="content-bx">
						<h5 class="title">6.- Other Option</h5>
						<p><code>--source-map</code></p>
<pre class="brush: javascript; h-100">
"sass": "node-sass --watch scss/main.scss css/style.css --source-map css/style.css.map"
</pre>
					</div>

					
				</div>
			</div>
		</section>
				
		<!-- Folder Directories -->
		<section class="app-brief grey-bg" id="folder_directories">
			<div class="container left-align">
				<div class="section-header">
					<h2 class="title">Folder Directories - </h2>
				</div>
				<div class="">
					<ul class="list-files">
						<li>
							<div class="row">
								<div class="col-sm-4">
									<p class="text-highlight">images</p>
								</div>
								<div class="col-sm-8">
									<p>This folder contains all the images of <span class="text-highlight">W3Meat</span> template.</p>
								</div>
							</div>
						</li>
						<li>
							<div class="row">
								<div class="col-sm-4">
									<p class="text-highlight">fonts</p>
								</div>
								<div class="col-sm-8">
									<p>This folder font files for various template features.</p>
								</div>
							</div>
						</li>
						<li>
							<div class="row">
								<div class="col-sm-4">
									<p class="text-highlight">css</p>
								</div>
								<div class="col-sm-8">
									<p>This folder contains all the CSS files of <span class="text-highlight">W3Meat</span> template.</p>
								</div>
							</div>
						</li>
						<li>
							<div class="row">
								<div class="col-sm-4">
									<p class="text-highlight">js</p>
								</div>
								<div class="col-sm-8">
									<p>This folder has all javascript files for various template features.</p>
								</div>
							</div>
						</li>
						<li>
							<div class="row">
								<div class="col-sm-4">
									<p class="text-highlight">vendor</p>
								</div>
								<div class="col-sm-8">
									<p>This folder has all plugins used in the template.</p>
								</div>
							</div>
						</li>
						<li>
							<div class="row">
								<div class="col-sm-4">
									<p class="text-highlight">script</p>
								</div>
								<div class="col-sm-8">
									<p>This folder has all script contact form used in the template.</p>
								</div>
							</div>
						</li>
						<li>
							<div class="row">
								<div class="col-sm-4">
									<p class="text-highlight">scss</p>
								</div>
								<div class="col-sm-8">
									<p>Scss File</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</section>
			
		<hr>	
			
		<!-- Theme Features -->
		<section class="app-brief" id="theme_features">
			<div class="container left-align">
				<div class="section-header">
					<h2 class="dark-text title">Theme Features - </h2>
				</div>
				<div class="theme-features">
					<div class="content-bx">
						<h5 class="title">Dark Theme</h5>
<pre class="brush: javascript; h-100">
&lt;body class="theme-dark"&gt;
</pre>
					</div>
					
					<div class="content-bx">
						<h5 class="title">Color Theme</h5>
						<p>So many color option available</p>
<pre class="brush: javascript; h-100">
&lt;body data-theme-color="color-primary"&gt;
</pre>
				<ul class="color-list">
					<li><div class="overlay-text color-primary">Primary</div></li>
					<li><div class="overlay-text color-green">Green</div></li>
					<li><div class="overlay-text color-blue">Blue</div></li>
					<li><div class="overlay-text color-pink">Pink</div></li>
					<li><div class="overlay-text color-yellow">Yellow</div></li>
					<li><div class="overlay-text color-orange">Orange</div></li>
					<li><div class="overlay-text color-purple">Purple</div></li>
					<li><div class="overlay-text color-deeppurple">Deeppurple</div></li>
					<li><div class="overlay-text color-lightblue">Lightblue</div></li>
					<li><div class="overlay-text color-teal">Teal</div></li>
					<li><div class="overlay-text color-lime">Lime</div></li>
					<li><div class="overlay-text color-deeporange">Deeporange</div></li>
				</ul>	
					</div>
				</div>
			</div>
		</section>	
		
		<hr>
		
		<!-- Folder Directories -->
		<section class="app-brief" id="html_file">
			<div class="container left-align">
				<div class="section-header ">
					<h2 class="title">HTML File - </h2>
				</div>
				<div id="dz_tree" class="tree-demo">
					<ul>
						<li data-jstree='{ "opened" : true }'>xhtml
							<ul>
                                <li data-jstree='{ "opened" : true }'>assets
                                    <ul>
                                        <li data-jstree='{ "selected" : false }'>css</li>
                                        <li data-jstree='{ "selected" : false }'>images</li>
                                        <li data-jstree='{ "selected" : false }'>js</li>
                                        <li data-jstree='{ "selected" : false }'>scss</li>
                                    </ul>    
                                </li>
                                <li data-jstree='{ "type" : "file" }'>app.js</li>
                                <li data-jstree='{ "type" : "file" }'>index.js</li>
                                <li data-jstree='{ "type" : "file" }'>manifest.json</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</section>
		
		<hr>

		<!-- Credits -->
		<section class="app-brief grey-bg" id="credits_file">
			<div class="container left-align">
				<div class="section-header">
					<h2 class="title">Credits - </h2>
				</div>
				<div class="">
					<ul class="list-files">
						<li>
							<div class="row">
								<div class="col-sm-4">
									<p class="text-highlight">Bootstrap</p>
								</div>
								<div class="col-sm-8">
									<p><a class="btn-link" target="_blank" href="https://getbootstrap.com/">https://getbootstrap.com/</a></p>
								</div>
							</div>
						</li>
						<li>
							<div class="row">
								<div class="col-sm-4">
									<p class="text-highlight">Bootstrap Touchspin</p>
								</div>
								<div class="col-sm-8">
									<p><a class="btn-link" target="_blank" href="https://plugins.jquery.com/bootstrap-touchspin/">https://plugins.jquery.com/bootstrap-touchspin/</a></p>
								</div>
							</div>
						</li>
						<li>
							<div class="row">
								<div class="col-sm-4">
									<p class="text-highlight">Font awesome</p>
								</div>
								<div class="col-sm-8">
									<p><a class="btn-link" target="_blank" href="https://fontawesome.com/">https://fontawesome.com/</a></p>
								</div>
							</div>
						</li>
						<li>
							<div class="row">
								<div class="col-sm-4">
									<p class="text-highlight">Google Fonts</p>
								</div>
								<div class="col-sm-8">
									<p><a class="btn-link" target="_blank" href="https://fonts.google.com/">https://fonts.google.com/</a></p>
								</div>
							</div>
						</li>
						<li>
							<div class="row">
								<div class="col-sm-4">
									<p class="text-highlight">LightGallery</p>
								</div>
								<div class="col-sm-8">
									<p><a class="btn-link" target="_blank" href="https://www.lightgalleryjs.com/docs/getting-started/">https://www.lightgalleryjs.com/docs/getting-started/</a></p>
								</div>
							</div>
						</li>
						<li>
							<div class="row">
								<div class="col-sm-4">
									<p class="text-highlight">JsTree</p>
								</div>
								<div class="col-sm-8">
									<p><a class="btn-link" target="_blank" href="https://www.jstree.com/">https://www.jstree.com/</a></p>
								</div>
							</div>
						</li>
						<li>
							<div class="row">
								<div class="col-sm-4">
									<p class="text-highlight">WOW.Js</p>
								</div>
								<div class="col-sm-8">
									<p><a class="btn-link" target="_blank" href="https://wowjs.uk/">https://wowjs.uk/</a></p>
								</div>
							</div>
						</li>
						<li>
							<div class="row">
								<div class="col-sm-4">
									<p class="text-highlight">Swiper JS</p>
								</div>
								<div class="col-sm-8">
									<p><a class="btn-link" target="_blank" href="https://swiperjs.com/">https://swiperjs.com/</a></p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</section>
		
		<hr>
		
		<!-- PWA Setting -->
		<section class="app-brief" id="pwa">
            <div class="container left-align">
				<div class="section-header">
					<h2 class="dark-text title">PWA Settings - </h2>
				</div>
                
				<h3>Manifest file</h3>
                <p>You will find this file in main folder where you can change the configration. It describes the name of the app, the start URL, icons, and all of the other details necessary to transform the website into an app-like format.</p>
                <img src="images/screenshot/manifest.png" alt="Head Section"/>
				
				<h3>Secure contexts (HTTPS)</h3>
				<p>
                    The web application must be served over a secure network. Being a secure site is not only a best practice, but it also establishes your web application as a trusted site especially if users need to make secure transactions. Most of the features related to a PWA such as geolocation and even service workers are available only once the app has been loaded using HTTPS.
                </p>
				
                <div class="separator"></div>
				
                <h3>Service workers</h3>
                <p>A service worker is a script that allows intercepting and control of how a web browser handles its network requests and asset caching. Here you can attached the css and js files.</p>
				<img src="images/screenshot/service.png" alt="Footer Script"/>
			</div>
        </section>
		
		<hr>
		
		<!-- Our Products -->
		<section class="app-brief" id="our_product">
			<div class="container left-align">
				<div class="section-header">
					<h2 class="dark-text title">Our Products - </h2>
				</div>
				<div class="row other-theme">
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/kjQrvn">
								<img src="images/product/karier.png" alt=""/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/kjQrvn">
										Karier - Job Portal Mobile App Framework7 PWA Template
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/e4ge6r">
								<img src="images/product/biji.png" alt=""/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/e4ge6r">
										Biji - Coffee Shop Framework 7 Mobile App
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/do3Mdj">
								<img src="images/product/sayur.png" alt=""/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/do3Mdj">
										Sayur - Food Delivery Framework 7 Mobile App
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/GjoMLB">
								<img src="images/product/ajari.png" alt=""/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/GjoMLB">
										Ajari - E-learning Mobile App Template ( Framework 7 + PWA )
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/P00OWY">
								<img src="images/product/kede.png" alt=""/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/P00OWY">
										Kede - Grocery Mobile App Template ( Framework 7 + PWA )
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/gyGa9">
								<img src="images/product/gawee.png" alt=""/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/gyGa9">
										Gawee - ( Framework 7 + PWA ) Mobile HTML Template
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/0J3P5L">
								<img src="images/product/jobie.png" alt=""/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/0J3P5L">
										Jobie - ( Bootstrap 5 + PWA ) Job Portal Mobile App Template 
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/DVkYLa">
								<img src="images/product/gaya.png" alt=""/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/DVkYLa">
										Gaya - ( Framework 7 + PWA ) Fashion Store Mobile App Template
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/DVAxva">
								<img src="images/product/ombe.png" alt=""/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/DVAxva">
										Ombe - ( Framework 7 + PWA ) Coffee Shop Mobile App 
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/DVAxva">
								<img src="images/product/foodia.png" alt=""/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/DVAxva">
										Foodia - ( Bootstrap 5 + PWA ) Food Restaurant Mobile App Template
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/DV7JYG">
								<img src="images/product/soziety.png" alt=""/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/DV7JYG">
										Soziety - ( Bootstrap 5 + PWA ) Social Network Mobile App Template
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/Py021X">
								<img src="images/product/w3grocery.png" alt="">
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/Py021X">
										W3Grocery - ( Bootstrap 5 + PWA ) Pre-Build Grocery Mobile App Template
									</a>
								</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- HTML Structure -->
		<section class="app-brief" id="html_structure">
			<div class="container left-align">
				<div class="section-header">
					<h2 class="title">HTML Structure - </h2>
				</div>
				<div class="content-bx">
					<h3>Head Structure</h3>
					<div class="img-frame">
						<img src="images/screenshot/head-section.png" alt="1">
					</div>	
				</div>	
				<div class="content-bx">
					<h3>Sidenav</h3>
					<div class="img-frame">
						<img src="images/screenshot/sidebar-nav.png" alt="2">
					</div>	
				</div>
				<div class="content-bx mb-0">
					<h3>Footer Essentials</h3>
					<div class="img-frame">
						<img src="images/screenshot/footer-script.png" alt="4">
					</div>
				</div>
			</div>
		</section>
		
		<hr>
		
		<!-- Customization -->
		<section class="app-brief custom-info" id="custom_work" style="background-image: url(images/bg1.png); background-position: left center;">
			<div class="container left-align">
				<div class="col-md-12 text-center">
					<h2 class="m-t0">Do You Need Help To Customization</h2>
					<h3>After Purchase A Template...</h3>
					<h4>You Will Start Customizing According Your Requirement<br> <span>BUT</span> What If You Don't Know</h4>
					<h3 class="text-black">SOLUTION IS <span><u>HIRE DexignZone</u></span></h3>
					<div class="hire">
						<h4><span class="">Hire Same Team For </span> <span>Quality Customization</span></h4>
						<ul>
							<li>In Order To Ensure Your Website Is Live, We Will Customize <br>The Template According To Your Requirements And Upload It to the Server.</li>
						</ul>
						<div class="gmail-box">
							<a href="skype:rahulxarma?chat" class="gmail"><i class="fa-brands fa-skype"></i>rahulxarma</a>
							<a target="_blank" href="mailto:dexignzones@gmail.com" class="gmail"><i class="fa fa-envelope"></i> dexignzones@gmail.com</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Change Log -->
		<section class="app-brief change-log grey-bg" id="version_history">
			<div class="container left-align">
				<div class="section-header">
					<h3 class="dark-text title">Version History - <a href="javascript:void();" class="text-primary scroltop topbutton">#back to top</a></h3>
				</div>
				<h5>21 July 2023</h5>
				<ul>
					<li>New - Created & Upload W3Meat</li>
				</ul>
			</div>
		</section>
		
		<!-- Footer -->
		<footer class="footer text-center">
			<div class="container">
				<p class="copyright">
					© 2023 <a href="https://dexignzone.com/" target="_blank"><strong>DexignZone</strong></a>. All Rights Reserved
				</p>
			</div>
		</footer>
	
	</div>
	
</div>

<!-- JAVASCRIPT FILES ========================================= -->
<script src="<?=base_url('template')?>/js/jquery.min.js"></script>
<script src="<?=base_url('template')?>/plugins/bootstrap/bootstrap.min.js"></script>
<script src="<?=base_url('template')?>/plugins/jstree/dist/jstree.min.js"></script>
<script src="<?=base_url('template')?>/plugins/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
<script src="<?=base_url('template')?>/js/custom.js"></script>
</body>
</html>