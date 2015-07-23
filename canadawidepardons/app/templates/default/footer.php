			<!-- <div class="space"></div> -->

			<!-- footer start (Add "light" class to #footer in order to enable light footer) -->
			<!-- ================ -->
			<footer id="footer" class="light">

				<!-- .footer start -->
				<!-- ================ -->
				<div class="footer">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="footer-content">
									<div class="logo-footer"><h2>Canada Wide Pardons</h2></div>

									<ul class="social-links circle">
										<li class="facebook"><a target="_blank" href="https://www.facebook.com/canadawidepardons"><i class="fa fa-facebook"></i></a></li>
										<!-- <li class="twitter"><a target="_blank" href="https://twitter.com/glimmigration"><i class="fa fa-twitter"></i></a></li>
										<li class="googleplus"><a target="_blank" href="https://plus.google.com/u/2/109914450839805951862/about"><i class="fa fa-google-plus"></i></a></li> -->
										<!-- <li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li> -->
										<!-- <li class="linkedin"><a target="_blank" href="https://www.linkedin.com/company/global-link-immigration-and-business-services?trk=company_logo"><i class="fa fa-linkedin"></i></a></li> -->
									</ul>

									<p class="m-b-xs"><a href="<?=DIR?>tnc">Terms & Conditions</a> | <a href="<?=DIR?>privacy_policy">Privacy Policy</a></p>

									<p class="">Copyright &copy; 2015 Canada Wide Pardons. All Rights Reserved.</p>
								</div>
							</div>

							<div class="col-md-offset-1 col-md-3">
								<div class="space-bottom hidden-lg hidden-xs"></div>

								<div class="footer-content">
									<h2>Links</h2>
									<nav>
										<ul class="nav nav-pills nav-stacked">
											<li><a href="<?=DIR?>">Home</a></li>
											<li><a href="<?=DIR?>pardons">Pardons</a></li>
											<li><a href="<?=DIR?>waivers">Waivers</a></li>
											<li><a href="<?=DIR?>faq">FAQ</a></li>
											<li><a href="<?=DIR?>about">About</a></li>
											<li><a href="<?=DIR?>contact">Contact</a></li>
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


		<?php helpers\assets::js(array(
			helpers\url::template_path() . 'plugins/jquery.min.js',
			helpers\url::template_path() . 'bootstrap/js/bootstrap.min.js',
			helpers\url::template_path() . 'plugins/datepicker/bootstrap-datepicker.js',
			helpers\url::template_path() . 'plugins/modernizr.js',
			helpers\url::template_path() . 'plugins/rs-plugin/js/jquery.themepunch.tools.min.js',
			helpers\url::template_path() . 'plugins/rs-plugin/js/jquery.themepunch.revolution.min.js',
			helpers\url::template_path() . 'plugins/isotope/isotope.pkgd.min.js',
			helpers\url::template_path() . 'plugins/owl-carousel/owl.carousel.js',
			helpers\url::template_path() . 'plugins/magnific-popup/jquery.magnific-popup.min.js',
			helpers\url::template_path() . 'plugins/jquery.appear.js',
			helpers\url::template_path() . 'plugins/jquery.countTo.js',
			helpers\url::template_path() . 'plugins/jquery.parallax-1.1.3.js',
			helpers\url::template_path() . 'plugins/jquery.validate.js',
			'https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false',
			helpers\url::template_path() . 'js/google.map.config.js',
			helpers\url::template_path() . 'js/template.js',
			helpers\url::template_path() . 'js/custom.js',
			));
		?>

		<script>
			$(function() {
				$('.datepicker').datepicker({
					format: 'mm-dd-yyyy',
				});
			});
		</script>

	</body>
</html>