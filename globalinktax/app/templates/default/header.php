<?php
use helpers\url;
use helpers\assets;

$current_page = url::lastsegment(url::segments());

?>


<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title><?=SITETITLE?></title>
		<meta name="description" content="Global Link Tax is a boutique accounting and tax firm with its office located in the heart of Toronto, Canada. 
			Global Link Tax started in 2008 with humble beginnings as a home based business. 
			As its client base gradually grew through word of mouth, Global Link moved into an office at the prime business area of Yonge and Sheppard in 2012. 
			Global Link has helped thousands of successful individuals and business owners with their tax and business matters over the past 8 years.
			Global Link Tax serves working individuals, self-employed individuals, students, and small to medium size businesses with their accounting and tax needs. 
			We believe in a positive, honest, and personalized approach.">
		<meta name="author" content="Sean">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?=helpers\url::template_path()?>images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

		<!-- CSS -->
		<?php
			assets::css(array(
				url::template_path() . 'bootstrap/css/bootstrap.css',
				url::template_path() . 'fonts/font-awesome/css/font-awesome.css',
				url::template_path() . 'fonts/fontello/css/fontello.css',
				url::template_path() . 'plugins/magnific-popup/magnific-popup.css',
				url::template_path() . 'css/animations.css',
				url::template_path() . 'plugins/rs-plugin/css/settings.css',
				url::template_path() . 'plugins/rs-plugin/css/extralayers.css',
				url::template_path() . 'plugins/owl-carousel/owl.carousel.css',
				url::template_path() . 'css/style.css',
				url::template_path() . 'css/skins/red.css',
				url::template_path() . 'css/datepicker.css',
				url::template_path() . 'css/flag-icon.css',				
				url::template_path() . 'css/custom.css',
			))
		?>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<!-- body classes: 
			"boxed": boxed layout mode e.g. <body class="boxed">
			"pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> 
	-->
	<body class="front no-trans">
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop light-red-bg"><i class="icon-up-open-big"></i></div>

		<!-- page wrapper start -->
		<!-- ================ -->
		<div class="page-wrapper">

			<!-- header-top start (Add "dark" class to .header-top in order to enable dark header-top e.g <div class="header-top dark">) -->
			<!-- ================ -->
			<div class="header-top">
				<div class="container">
					<div class="row">
						<!-- <div class="col-xs-2 col-sm-6"> -->

							<!-- header-top-first start -->
							<!-- ================ -->
							<!-- <div class="header-top-first clearfix">
								<ul class="social-links clearfix hidden-xs">
									<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
									<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
									<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
									<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
									<li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
									<li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
									<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
									<li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
								</ul>
								<div class="social-links hidden-lg hidden-md hidden-sm">
									<div class="btn-group dropdown">
										<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i></button>
										<ul class="dropdown-menu dropdown-animation">
											<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
											<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
											<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
											<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
											<li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
											<li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
											<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
											<li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
										</ul>
									</div>
								</div>
							</div> -->
							<!-- header-top-first end -->
						<!-- </div> -->
						<div class="col-xs-12">
							<div class="header-top-first clearfix">
								<div class="row">
									<div class="col-sm-3">
										<div class="logo">
											<a href="<?=DIR?>"><img id="logo" src="<?=helpers\url::template_path() . 'images/glt_logo.png'?>" class="img-responsive" alt="<?=SITETITLE?>"></a>
										</div>
									</div>

									<div class="space-10 visible-xs-block"></div>

									<div class="col-sm-3">
										<address>
											4852 Yonge St. Unit B <br>
											Toronto, ON <br>
											M2N 5N2 <br>
											Phone: <?=PHONE?> <br>
											E-mail: <a href="mailto:<?=EMAIL_ADDR?>"><?=EMAIL_ADDR?></a>
										</address>
									</div>

									<div class="space-10 visible-xs-block"></div>

									<div class="col-sm-3">
										<address>
											<?=$GLOBALS['glt_address'];?>
										</address>
									</div>

									<div class="space-10 visible-xs-block"></div>

									<div class="col-sm-3">
										<!-- <form class="form">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-search"></i></span>
												<input type="text" class="form-control" id="search" name="search" placeholder="search">
											</div>
										</form> -->

										<div class="language-btn-group">
											<a href="http://globalinktax.com"><span class="flag-icon flag-icon-ca"></span></a>
											<a href="http://globalinktax.com/cn"><span class="flag-icon flag-icon-cn"></span></a>
											<a href="http://globalinktax.com/kr"><span class="flag-icon flag-icon-kr"></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xs-6">

							<!-- header-top-second start -->
							<!-- ================ -->
							<div id="header-top-second" class="clearfix">

								<!-- header top dropdowns start -->
								<!-- ================ -->
								<div class="header-top-dropdown">
									<!-- Search function will be running in future -->								
									<!-- <div class="btn-group dropdown">
										<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i> Search</button>
										<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
											<li>
												<form role="search" class="search-box">
													<div class="form-group has-feedback">
														<input type="text" class="form-control" placeholder="Search">
														<i class="fa fa-search form-control-feedback"></i>
													</div>
												</form>
											</li>
										</ul>
									</div> -->

									
									<!-- <div class="btn-group dropdown">
										<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Login</button>
										<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
											<li>
												<form class="login-form">
													<div class="form-group has-feedback">
														<label class="control-label">Username</label>
														<input type="text" class="form-control" placeholder="">
														<i class="fa fa-user form-control-feedback"></i>
													</div>
													<div class="form-group has-feedback">
														<label class="control-label">Password</label>
														<input type="password" class="form-control" placeholder="">
														<i class="fa fa-lock form-control-feedback"></i>
													</div>
													<button type="submit" class="btn btn-group btn-dark btn-sm">Log In</button>
													<span>or</span>
													<button type="submit" class="btn btn-group btn-default btn-sm">Sing Up</button>
													<ul>
														<li><a href="#">Forgot your password?</a></li>
													</ul>
													<div class="divider"></div>
													<span class="text-center">Login with</span>
													<ul class="social-links clearfix">
														<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
														<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
														<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
													</ul>
												</form>
											</li>
										</ul>
									</div>
									<div class="btn-group dropdown">
										<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i> Cart (8)</button>
										<ul class="dropdown-menu dropdown-menu-right dropdown-animation cart">
											<li>
												<table class="table table-hover">
													<thead>
														<tr>
															<th class="quantity">QTY</th>
															<th class="product">Product</th>
															<th class="amount">Subtotal</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td class="quantity">2 x</td>
															<td class="product"><a href="shop-product.html">Android 4.4 Smartphone</a><span class="small">4.7" Dual Core 1GB</span></td>
															<td class="amount">$199.00</td>
														</tr>
														<tr>
															<td class="quantity">3 x</td>
															<td class="product"><a href="shop-product.html">Android 4.2 Tablet</a><span class="small">7.3" Quad Core 2GB</span></td>
															<td class="amount">$299.00</td>
														</tr>
														<tr>
															<td class="quantity">3 x</td>
															<td class="product"><a href="shop-product.html">Desktop PC</a><span class="small">Quad Core 3.2MHz, 8GB RAM, 1TB Hard Disk</span></td>
															<td class="amount">$1499.00</td>
														</tr>
														<tr>
															<td class="total-quantity" colspan="2">Total 8 Items</td>
															<td class="total-amount">$1997.00</td>
														</tr>
													</tbody>
												</table>
												<div class="panel-body text-right">	
												<a href="shop-cart.html" class="btn btn-group btn-default btn-sm">View Cart</a>
												<a href="shop-checkout.html" class="btn btn-group btn-default btn-sm">Checkout</a>
												</div>
											</li>
										</ul>
									</div> -->

									<!-- <div class="btn-group dropdown">
										<ul class="social-links clear-fix">
											<li class=""><a href="<?=DIR?>"><span class="flag-icon flag-icon-ca flag-icon-squared"></span></a></li>
											<li class=""><a href="http://cn.canadawidepardons.com"><span class="flag-icon flag-icon-cn flag-icon-squared"></span></a></li>
											<li class=""><a href="http://kr.canadawidepardons.com"><span class="flag-icon flag-icon-kr flag-icon-squared"></span></a></li>
										</ul>
									</div> -->

								</div>
								<!--  header top dropdowns end -->

							</div>
							<!-- header-top-second end -->

						</div>
					</div>
				</div>
			</div>
			<!-- header-top end -->

			<!-- header start classes:
				fixed: fixed navigation mode (sticky menu) e.g. <header class="header fixed clearfix">
				 dark: dark header version e.g. <header class="header dark clearfix">
			================ -->
			<header class="header fixed clearfix dark-blue-bg">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">

							<!-- header-right start -->
							<!-- ================ -->
							<div class="header-right clearfix">

								<!-- main-navigation start -->
								<!-- ================ -->
								<div class="main-navigation animated">

									<!-- navbar start -->
									<!-- ================ -->
									<nav class="navbar navbar-default dark-blue-bg" role="navigation">
										<div class="container-fluid">

											<!-- Toggle get grouped for better mobile display -->
											<div class="navbar-header">
												<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>
											</div>

											<!-- Collect the nav links, forms, and other content for toggling -->
											<div class="collapse navbar-collapse" id="navbar-collapse-1">
												<!-- mega-menu start -->
												<ul class="nav navbar-nav">
													<?php
													foreach ($GLOBALS['glt_nav'] as $key => $value) {
														$active = '';
														$nav_main_url = '';
														$nav_main_value = '';

														// if(strpos($value['main'], ' ') !== false) {
														// 	$nav_main_url = strtolower(substr($value['main'], 0, strpos($value['main'], ' ')));
														// } else {
														// 	$nav_main_url = strtolower($value['main']) == 'home' ? '' : strtolower($value['main']);
														// }

														// loop one time only
														foreach ($value['main'] as $main_key => $main_value) {
															$nav_main_url = $main_key;
															$nav_main_value = $main_value;
														}

														if($key == '1') {
															$nav_main_url = '';
														}

														if(sizeof($value['sub']) > 0) {
															if(array_key_exists($current_page, $value['sub']) !== FALSE) {
																$active = 'active';
															}
														} else {
															if($current_page == $nav_main_url) {
																$active = 'active';
															}
														}

													?>

													<li class="<?=$active?> <?=sizeof($value['sub']) > 0 ? 'dropdown' : ''?>">
														<a href="<?=DIR . $nav_main_url?>" <?=sizeof($value['sub']) > 0 ? 'class="dropdown-toggle" data-toggle="dropdown"' : ''?>><?=$nav_main_value?></a>
														<?php 
															if(sizeof($value['sub']) > 0) { 
														?>
															<ul class="dropdown-menu">
																<?php foreach ($value['sub'] as $sub_key => $sub_value) { ?>
																	<li class="<?=$current_page == $sub_key ? 'active' : ''?>">
																	<?php
																		if($sub_key == $nav_main_url) {
																			$sub_url = $sub_key;
																		} else {
																			$sub_url = $nav_main_url . '/' . $sub_key;
																		}
																	?>
																		<a href="<?=DIR . $sub_url?>">
																			<?=$sub_value?>
																		</a>
																	</li>
																<?php } ?>
															</ul>
														<?php } ?>
													</li>

													<?php
													}
													?>

													<!-- <li class="<?=$current_page == '' ? 'active' : '' ?>">
														<a href="<?=DIR?>">Home</a>
													</li>

													<li class="dropdown <?=$current_page == 'personal' || $current_page == 'express' || $current_page == 'personal_issues' || $current_page == 'us' ? 'active' : '' ?>" style="">
														<a href="<?=DIR?>personal" class="dropdown-toggle" data-toggle="dropdown">Personal</a>
														<ul class="dropdown-menu">
															<li class="<?=$current_page == 'personal' ? 'active' : ''?>"><a href="<?=DIR?>personal">Personal Tax</a></li>
															<li class="<?=$current_page == 'express' ? 'active' : ''?>"><a href="<?=DIR?>personal/express">Express Personal Tax</a></li>
															<li class="<?=$current_page == 'personal_issues' ? 'active' : ''?>"><a href="<?=DIR?>personal/personal_issues">Personal Tax Issues</a></li>
															<li class="<?=$current_page == 'us' ? 'active' : ''?>"><a href="<?=DIR?>personal/us">US Personal Tax Return</a></li>
														</ul>
													</li>

													<li class="dropdown <?=$current_page == 'corporate' || $current_page == 'hst' || $current_page == 'payroll' || $current_page == 'financial_statement' || $current_page == 'business_issues' ? 'active' : '' ?>" style="">
														<a href="<?=DIR?>corporate" class="dropdown-toggle" data-toggle="dropdown">Corporate</a>
														<ul class="dropdown-menu">
															<li class="<?=$current_page == 'corporate' ? 'active' : ''?>"><a href="<?=DIR?>corporate">T2-Annual Corporate Tax</a></li>
															<li class="<?=$current_page == 'hst' ? 'active' : ''?>"><a href="<?=DIR?>corporate/hst">HST Return</a></li>
															<li class="<?=$current_page == 'payroll' ? 'active' : ''?>"><a href="<?=DIR?>corporate/payroll">Annual Payroll</a></li>
															<li class="<?=$current_page == 'financial_statement' ? 'active' : ''?>"><a href="<?=DIR?>corporate/financial_statement">Financial Statement Preparation</a></li>
															<li class="<?=$current_page == 'business_issues' ? 'active' : ''?>"><a href="<?=DIR?>corporate/business_issues">Business Tax Issues</a></li>
														</ul>
													</li>

													<li class="<?=$current_page == 'business' ? 'active' : '' ?>">
														<a href="<?=DIR?>business">Business Startup</a>
													</li>

													<li class="dropdown <?=$current_page == 'accounting' || $current_page == 'consultations' ? 'active' : '' ?>" style="">
														<a href="<?=DIR?>accounting" class="dropdown-toggle" data-toggle="dropdown">Accounting Services</a>
														<ul class="dropdown-menu">
															<li class="<?=$current_page == 'accounting' ? 'active' : ''?>"><a href="<?=DIR?>accounting">Business Plans</a></li>
															<li class="<?=$current_page == 'consultations' ? 'active' : ''?>"><a href="<?=DIR?>accounting/consultations">Business Consultations</a></li>
														</ul>
													</li>

													<li class="<?=$current_page == 'about' ? 'active' : '' ?>">
														<a href="<?=DIR?>about">About</a>
													</li>

													<li class="<?=$current_page == 'contact' ? 'active' : '' ?>">
														<a href="<?=DIR?>contact">Contact</a>
													</li> -->
												</ul>
												<!-- mega-menu end -->
											</div>

										</div>
									</nav>
									<!-- navbar end -->

								</div>
								<!-- main-navigation end -->

							</div>
							<!-- header-right end -->

						</div>
					</div>
				</div>
			</header>
			<!-- header end -->