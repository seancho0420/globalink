			<!-- banner start -->
			<!-- ================ -->
			<!-- <div class="banner">
				<div class="fixed-image dark-translucent-bg section" style="background-image:url('images/page-contact-banner.jpg');">
					<div class="container">
						<div class="space"></div>
						<h1>Get in Touch</h1>
						<div class="separator-2"></div>
						<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae sit excepturi, <br class="hidden-xs hidden-sm"> hic officiis illo dolore sunt assumenda saepe id commodi sint praesentium <br class="hidden-xs hidden-sm"> natus laborum quas cumque facilis, suscipit aliquam dolorum.</p>
					</div>
				</div>
			</div> -->
			<!-- banner end -->

			<!-- page-intro start-->
			<!-- ================ -->
			<div class="page-intro">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ol class="breadcrumb">
								<li><i class="fa fa-home pr-10"></i><a href="<?=DIR?>">Home</a></li>
								<li class="active">Contact</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
			<!-- page-intro end -->

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-12">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title">Contact Us</h1>
							<!-- page-title end -->
							<div class="row">
								<div class="col-md-6">
									<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do tempor.</p> -->
									<?php
									if($data) {
									?>
									<div class="alert alert-success" id="contactSuccess">
										<strong>Success!</strong> Your message has been sent to us.
									</div>
									<?php
									}
									?>
									<div class="alert alert-error hidden" id="contactError">
										<strong>Error!</strong> There was an error sending your message.
									</div>
									<div class="contact-form">
										<form id="contact-form" role="form" method="post">
											<div class="form-group has-feedback">
												<label for="name">Name <span class="text-danger">*</span></label>
												<input type="text" class="form-control" id="name" name="name" placeholder="" required>
												<i class="fa fa-user form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback">
												<label for="email">Email <span class="text-danger">*</span></label>
												<input type="email" class="form-control" id="email" name="email" placeholder="" required>
												<i class="fa fa-envelope form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback">
												<label for="phone">Phone</label>
												<input type="text" class="form-control" id="phone" name="phone" placeholder="">
												<i class="fa fa-phone form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback">
												<label for="subject">Subject <span class="text-danger">*</span></label>
												<input type="text" class="form-control" id="subject" name="subject" placeholder="" required>
												<i class="fa fa-navicon form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback">
												<label for="message">Message <span class="text-danger">*</span></label>
												<textarea class="form-control" rows="6" id="message" name="message" placeholder="" required></textarea>
												<i class="fa fa-pencil form-control-feedback"></i>
											</div>
											<input type="submit" value="Submit" name="submit" class="btn btn-default">
										</form>
									</div>
								</div>
								<div class="col-md-6">
									<!-- google maps start -->
									<div class="row m-t-lg">
										<div class="col-md-12">
											<div id="map-canvas"></div>
										</div>
										<!-- google maps end -->

										<div class="col-md-12 m-l-sm">
											<ul class="list">
												<li><strong></strong></li>
												<li><i class="fa fa-home pr-10"></i>4852 Yonge St. Unit B, Toronto, ON M2N 5N2</li>
												<li><i class="fa fa-phone pr-10"></i><abbr title="Phone">P:</abbr> (416) 225-8686</li>
												<li><i class="fa fa-envelope pr-10"></i><a href="mailto:<?=EMAIL_ADDR?>"><?=EMAIL_ADDR?></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- main end -->
						
					</div>
				</div>
			</section>
			<!-- main-container end -->

			<!-- section start -->
			<!-- ================ -->
			<!-- <div class="section parallax dark-translucent-bg parallax-bg-2">
				<div class="container">
					<div class="row">
						<div class="col-sm-5">
							<h2 class="title">Global Link Visa Center</h2>
							<ul class="list">
								<li><strong></strong></li>
								<li><i class="fa fa-home pr-10"></i>4852 Yonge St. Unit B<br><span class="pl-20">Toronto, ON M2N 5N2</span></li>
								<li><i class="fa fa-phone pr-10"></i><abbr title="Phone">P:</abbr> (416) 225-8686</li>
								<li><i class="fa fa-mobile pr-10 pl-5"></i><abbr title="Phone">M:</abbr> (123) 456-7890</li>
								<li><i class="fa fa-envelope pr-10"></i><a href="mailto:info@idea.com">info@globalinkvisacenter.com</a></li>
							</ul>
							<ul class="social-links colored circle large">
								<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
								<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
								<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div> -->
			<!-- section end -->