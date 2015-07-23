			<!-- banner start -->
			<!-- ================ -->
			<!-- <div class="banner">
				<div class="fixed-image section dark-translucent-bg" style="background-image:url('images/page-about-banner-1.jpg');">
					<div class="container">
					<div class="space-top"></div>
					<h1>Welcome to iDea</h1>
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
								<li class="active">About Us</li>
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
							<h1 class="page-title">About Us</h1>
							<div class="separator-2"></div>
							<!-- page-title end -->

							<div class="row">
								<div class="col-md-12 animated fadeInUpSmall">
									<?php
									foreach ($data['about_us'] as $key => $value) {
									?>
									<p><?=$value['paragraph']?></p>
									<?php
									}
									?>
									<!-- <ul class="list-icons">
										<li class="object-non-visible" data-animation-effect="fadeInUpSmall"><i class="icon-check"></i> Etiam sed dolor ac diam volutpat</li>
										<li class="object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100"><i class="icon-check"></i> Sed eget pulvinar quam, vel feugiat enim aliquam </li>
										<li class="object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="300"><i class="icon-check"></i> Erat volutpat. Phasellus eu porta ipsum suspendisse aliquet imperdiet</li>
										<li class="object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="500"><i class="icon-check"></i> Phasellus eu porta ipsum. Suspendisse aliquet imperdiet commodo</li>
									</ul> -->
								</div>

								<!-- sidebar start -->
								<!-- <aside class="sidebar col-md-6">
									<div class="side vertical-divider-left">
										<div class="block clearfix">
											<h3 class="title margin-top-clear">Office Facilities</h3>
											<div class="embed-responsive embed-responsive-16by9">
												<iframe class="embed-responsive-item" src="//player.vimeo.com/video/29198414?byline=0&amp;portrait=0"></iframe> -->
												<!-- <p><a href="http://vimeo.com/29198414">Introducing Vimeo Music Store</a> from <a href="http://vimeo.com/staff">Vimeo Staff</a> on <a href="https://vimeo.com">Vimeo</a>.</p>   -->
											<!-- </div>
										</div>
									</div>
								</aside> -->
								<!-- sidebar end -->
							</div>

						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->

			<!-- section start -->
			<!-- ================ -->
			<div class="section gray-bg clearfix">
				<div class="container">
					<h2 class="title">Our Team</h2>
					<div class="separator-2"></div>
					<p class="lead">Professional, Efficient, Accurate</p>
					<div class="row grid-space-20">
						<?php
						foreach ($data['our_team'] as $key => $value) {
						?>
						<div class="col-md-4">
							<div class="box-style-1 white-bg team-member">
								<h3 class="m-t-xs m-b-none"><?=$value['name']?></h3>
								<?=$value['role']?>
								<div class="gray-bg p-xs m-t-sm">
									<!-- <img src="<?=helpers\url::template_path()?>images/<?=$value['img']?>" alt=""> -->
									<!-- <div class="overlay">
										<ul class="social-links clearfix">
											<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
											<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
											<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
										</ul>
									</div> -->

									<p><?=$value['desc']?></p>
								</div>								
							</div>
						</div>
						<?php
						}
						?>
					</div>
				</div>
			</div>
			<!-- section end -->