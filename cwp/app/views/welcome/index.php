			<div class="banner">
				<div id="main_banner" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#main_banner" data-slide-to="0" class="active"></li>
						<li data-target="#main_banner" data-slide-to="1"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="<?=helpers\url::template_path() . 'images/cw_banner_freedom.jpg'?>" alt="banner_freedom">
						</div>
						<div class="item">
							<img src="<?=helpers\url::template_path() . 'images/cw_banner_us.jpg'?>" alt="banner_us">
						</div>
					</div>

					<!-- Controls -->
					<div class="carousel-left">
						<a class="left carousel-control" href="#main_banner" role="button" data-slide="prev">
							<i class="fa fa-chevron-circle-left"></i>
						</a>
					</div>

					<div class="carousel-right">
						<a class="right carousel-control" href="#main_banner" role="button" data-slide="next">
							<i class="fa fa-chevron-circle-right"></i>
						</a>
					</div>

					<div id="simple_form" class="animated fadeIn col-lg-3 col-md-3 hidden-xs hidden-sm">
						<?php
						if($data['last_id']) {
						?>
						<div class="alert alert-success alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<strong>Success!</strong> Thank you for submitting your information.
						</div>
						<?php
						}
						?>

						<form method="post">
							<!-- <h1>Visa Requirements</h1> -->
							<div class="form-group">
								<label class="control-label" for="fullname">Full Legal Name</label>
								<input class="form-control" type="text" id="fullname" name="fullname" required>
							</div>

							<div class="form-group">
								<label class="control-label" for="email">Email Address</label>
								<input class="form-control" type="email" id="email" name="email" required>
							</div>

							<div class="form-group">
								<label class="control-label" for="phone">Primary Phone</label>
								<input class="form-control" type="text" id="phone" name="phone" required>
							</div>

							<div class="form-group">
								<label class="control-label" for="">I'm looking for</label><br>

								<label class="radio-inline">
									<input type="radio" name="look_for" id="pardon" value="pardon" required>
									Pardon
								</label>

								<label class="radio-inline">
									<input type="radio" name="look_for" id="waiver" value="waiver" required>
									Waiver
								</label>

								<label class="radio-inline">
									<input type="radio" name="look_for" id="both" value="both" required>
									Both
								</label>
							</div>

							<div class="form-group">
								<label class="control-label" for="">Last conviction</label><br>

								<label class="radio-inline">
									<input type="radio" name="last_conviction" id="before_2010" value="Before 2010" required>
									Before 2010
								</label>

								<label class="radio-inline">
									<input type="radio" name="last_conviction" id="after_2010" value="After 2010" required>
									After 2010
								</label>
							</div>

							<div class="form-group">
								<button type="submit" name="submit" class="btn btn-warning">Apply Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>

			
			<div class="white-bg animated fadeIn visible-xs-block visible-sm-block m-t-md">
				<div class="container">
					<div class="row">
						<div class="col-md-offset-8 col-md-4">

							<?php
							if($data['last_id']) {
							?>
							<div class="alert alert-success alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<strong>Success!</strong> Thank you for submitting your information.
							</div>
							<?php
							}
							?>

							<form method="post">
								<div class="form-group">
									<label class="control-label" for="fullname">Full Legal Name</label>
									<input class="form-control" type="text" id="fullname" name="fullname" required>
								</div>

								<div class="form-group">
									<label class="control-label" for="email">Email Address</label>
									<input class="form-control" type="email" id="email" name="email" required>
								</div>

								<div class="form-group">
									<label class="control-label" for="phone">Primary Phone</label>
									<input class="form-control" type="text" id="phone" name="phone" required>
								</div>

								<div class="form-group">
									<label class="control-label" for="">I'm looking for</label><br>

									<label class="radio-inline">
										<input type="radio" name="look_for" id="pardon" value="pardon" required>
										Pardon
									</label>

									<label class="radio-inline">
										<input type="radio" name="look_for" id="waiver" value="waiver" required>
										Waiver
									</label>

									<label class="radio-inline">
										<input type="radio" name="look_for" id="both" value="both" required>
										Both
									</label>
								</div>

								<div class="form-group">
									<label class="control-label" for="">Last conviction</label><br>

									<label class="radio-inline">
										<input type="radio" name="last_conviction" id="before_2010" value="Before 2010" required>
										Before 2010
									</label>

									<label class="radio-inline">
										<input type="radio" name="last_conviction" id="after_2010" value="After 2010" required>
										After 2010
									</label>
								</div>

								<div class="form-group">
									<button type="submit" name="submit" class="btn btn-primary">Apply Now</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<!-- section start -->
			<!-- ================ -->
			<!-- <div class="section clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2>iDea - Responsive Website Theme</h2>
							<div class="separator-2"></div>
							<div class="row">
								<div class="col-md-6">
									<p>Quo soluta provident, quod reiciendis. Dolores nam totam aut illum ex ratione harum molestias maxime minima tempore, possimus, laudantium. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
									<p>Esse sequi veniam, assumenda voluptate necessitatibus ipsa dicta vero, minima natus cum cupiditate magnam et placeat quo adipisci.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae ducimus totam omnis earum atque repellat. Optio quo repellendus, voluptatibus at modi nulla, quasi quae tenetur provident quibusdam earum iure quidem.</p>
									<a href="page-about.html" class="btn btn-white">Learn More</a>
									<div class="space hidden-md hidden-lg"></div>										
								</div>
								<div class="col-md-6">
									<img src="<?=helpers\url::template_path() . 'images/section-image-1.png'?>" alt="">
								</div>
							</div>
							<br>
						</div>
					</div>
				</div>
			</div> -->
			<!-- section end -->

			<!-- section start -->
			<!-- ================ -->
			<div class="section clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="call-to-action">
								<!-- <img class="img-responsive" src="<?=helpers\url::template_path() . 'images/cw_banner_freedom.jpg'?>" alt="pardon_banner"> -->
								<h1>Pardons</h1>
								<?php
								foreach ($data['pardons_in_pardons'] as $key => $value) {
								?>
								<p><?=$value?></p>
								<?php
								}
								?>
							</div>
						</div>

						<div class="col-md-6">
							<div class="call-to-action">
								<!-- <img class="img-responsive" src="<?=helpers\url::template_path() . 'images/cw_banner_us.jpg'?>" alt="waiver_banner"> -->
								<h1>Waivers</h1>
								<?php
								foreach ($data['waivers_in_waivers'] as $key => $value) {
								?>
								<p><?=$value?></p>
								<?php
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- section end -->

			<!-- section start -->
			<!-- ================ -->
			<!-- <div class="section gray-bg">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="text-center title">Features</h1>
							<div class="separator"></div>
							<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<div class="row">
								<div class="col-sm-6">
									<div class="box-style-1 white-bg object-non-visible animated object-visible fadeInUpSmall" data-animation-effect="fadeInUpSmall" data-effect-delay="0">
										<i class="fa fa-leaf"></i>
										<h2>Pardons</h2>
										<p>Voluptatem ad provident non <a href="#">repudiandae</a> veritatis beatae cupiditate amet reiciendis.</p>
										<a href="pardons" class="btn-default btn">Read More</a>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="box-style-1 white-bg object-non-visible animated object-visible fadeInUpSmall" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
										<i class="fa fa-laptop"></i>
										<h2>U.S Waivers</h2>
										<p>Iure sequi unde hic. Sapiente quaerat labore sequi inventore veritatis cumque.</p>
										<a href="waivers" class="btn-default btn">Read More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			<!-- section end -->


			<!-- section start -->
			<!-- ================ -->
			<!-- <div class="section dark-translucent-bg parallax-bg-2"> -->
			<div class="section dark-translucent-bg">
				<div class="owl-carousel content-slider">
					<?php
					foreach ($data['testimonial'] as $key => $value) {
					?>
					<div class="testimonial">
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<!-- <h2 class="title">Full Width Testimonial Slider (Autoplay On)</h2> -->
									<!-- <div class="testimonial-image">
										<img src="<?=helpers\url::template_path()?>images/<?=$value['img']?>">
									</div> -->
									<div class="testimonial-body">
										<p><?=$value['body']?></p>

										<?php
										if($value['info1'] != '') {
										?>
										<div class="testimonial-info-1">- <?=$value['info1']?></div>
										<?php
										}

										if($value['info2'] != '') {
										?>
										<div class="testimonial-info-2"><?=$value['info2']?></div>
										<?php
										}
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
					}
					?>
				</div>
			</div>
			<!-- section end -->

			<!-- <div class="space"></div> -->
