			<!-- page-intro start-->
			<!-- ================ -->
			<div class="page-intro">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ol class="breadcrumb">
								<li><i class="fa fa-home pr-10"></i><a href="<?=DIR?>">Home</a></li>
								<li class="active">Travel Visa</li>
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
							<!-- <h1 class="page-title text-center">Simple Process</h1> -->
							<!-- <div class="alert alert-info alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
								For more info about forms please visit <a target="_blank" class="alert-link" href="http://getbootstrap.com/css/#forms">http://getbootstrap.com/css/#forms</a>.
							</div>
							<br> -->
							<!-- page-title end -->
							<div class="animated fadeIn">
								<img class="img-responsive center-block" src="<?=helpers\url::template_path()?>images/process.png" alt="process">
							</div>

							<div class="row animated fadeInDownSmall">
								<div class="col-xs-12">
									<?php
									if($data['visa_applied']) {
									?>
									<div class="alert alert-success" role="alert">
										<strong>Thank you!</strong> Your application has been successfully submitted. Our team will contact shortly.
									</div>
									<?php
									} else {
									?>
									<div class="alert alert-danger" role="alert">
										<strong>Shucks!</strong> Something is wrong! Please try again or contact us at info@globalinkvisacenter.com
									</div>
									<?php
									}
									?>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12 text-center">
									<a href="<?=DIR?>" class="btn btn-primary btn-xl">Home</a>
									<a href="<?=DIR?>visa" class="btn btn-warning btn-xl">Start Over</a>
								</div>
							</div>
						</div>
						<!-- main end -->
					</div>
				</div>
			</section>

