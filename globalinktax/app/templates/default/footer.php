<?php
use helpers\url;
use helpers\assets;
?>

			<!-- <div class="space"></div> -->

			<!-- footer start (Add "light" class to #footer in order to enable light footer) -->
			<!-- ================ -->
			<footer id="footer" class="dark">

				<!-- .footer start -->
				<!-- ================ -->
				<div class="footer dark-blue-bg">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="footer-content">
									<div class="logo-footer"><h2><?=SITETITLE?></h2></div>

									<!-- <ul class="social-links circle"> -->
										<!-- <li class="facebook"><a target="_blank" href="https://www.facebook.com/canadawidepardons"><i class="fa fa-facebook"></i></a></li> -->
										<!-- <li class="twitter"><a target="_blank" href="https://twitter.com/glimmigration"><i class="fa fa-twitter"></i></a></li>
										<li class="googleplus"><a target="_blank" href="https://plus.google.com/u/2/109914450839805951862/about"><i class="fa fa-google-plus"></i></a></li> -->
										<!-- <li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li> -->
										<!-- <li class="linkedin"><a target="_blank" href="https://www.linkedin.com/company/global-link-immigration-and-business-services?trk=company_logo"><i class="fa fa-linkedin"></i></a></li> -->
									<!-- </ul> -->

									<!-- <p class="m-b-xs"><a href="<?=DIR?>tnc">Terms & Conditions</a> | <a href="<?=DIR?>privacy_policy">Privacy Policy</a></p> -->

									<p class="">Copyright &copy; 2015 <?=SITETITLE?>. All Rights Reserved.</p>
								</div>
							</div>

							<div class="col-md-offset-1 col-md-3">
								<div class="space-bottom hidden-lg hidden-xs"></div>

								<div class="footer-content">
									<h2>Links</h2>
									<nav>
										<ul class="nav nav-pills nav-stacked">
										<?php 
										$sitemap_link = $sitemap_value = '';

										foreach ($GLOBALS['glt_nav'] as $key => $value) { 
											foreach ($value['main'] as $main_key => $main_value) {
												$sitemap_link = $main_key;
												$sitemap_value = $main_value;

												if($key == '1') {
													$sitemap_link = '';
												}
											}
										?>

											<li><a href="<?=DIR . $sitemap_link?>"><?=$sitemap_value?></a></li>
										<?php } ?>

											<!-- <li><a href="<?=DIR?>">Home</a></li>
											<li><a href="<?=DIR?>personal">Personal Tax</a></li>
											<li><a href="<?=DIR?>corporate">Corporate Tax</a></li>
											<li><a href="<?=DIR?>business">Business Startup</a></li>
											<li><a href="<?=DIR?>accounting">Accounting Services</a></li>
											<li><a href="<?=DIR?>about">About Us</a></li>
											<li><a href="<?=DIR?>contact">Contact Us</a></li> -->
										</ul>
									</nav>
								</div>
							</div>
							<div class="space-bottom hidden-lg hidden-xs"></div>
						</div>
					</div>
				</div>
				<!-- .footer end -->

				<!-- .subfooter start -->
				<!-- ================ -->
				<!-- <div class="subfooter">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<p>Copyright © 2015 Global Link Visa Center. All Rights Reserved</p>
							</div>
							<div class="col-md-6">
								<nav class="navbar navbar-default" role="navigation"> -->
									<!-- Toggle get grouped for better mobile display -->
									<!-- <div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-2">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>   
									<div class="collapse navbar-collapse" id="navbar-collapse-2">
										<ul class="nav navbar-nav">
											<li><a href="index.php">Home</a></li>
											<li><a href="visa.php">Travel Visa</a></li>
											<li><a href="passport_photo.php">Passport Photo</a></li>
											<li><a href="about.php">About</a></li>
											<li><a href="contact.php">Contact</a></li>
										</ul>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div> -->
				<!-- .subfooter end -->

			</footer>
			<!-- footer end -->

		</div>
		<!-- page-wrapper end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->


		<?php 
			assets::js(array(
				url::template_path() . 'plugins/jquery.min.js',
				url::template_path() . 'bootstrap/js/bootstrap.min.js',
				url::template_path() . 'plugins/datepicker/bootstrap-datepicker.js',
				url::template_path() . 'plugins/modernizr.js',
				url::template_path() . 'plugins/rs-plugin/js/jquery.themepunch.tools.min.js',
				url::template_path() . 'plugins/rs-plugin/js/jquery.themepunch.revolution.min.js',
				url::template_path() . 'plugins/isotope/isotope.pkgd.min.js',
				url::template_path() . 'plugins/owl-carousel/owl.carousel.js',
				url::template_path() . 'plugins/magnific-popup/jquery.magnific-popup.min.js',
				url::template_path() . 'plugins/jquery.appear.js',
				url::template_path() . 'plugins/jquery.countTo.js',
				url::template_path() . 'plugins/jquery.parallax-1.1.3.js',
				url::template_path() . 'plugins/jquery.validate.js',
				'https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false',
				url::template_path() . 'js/google.map.config.js',
				url::template_path() . 'js/template.js',
				url::template_path() . 'js/custom.js',
			));
		?>
	</body>
</html>