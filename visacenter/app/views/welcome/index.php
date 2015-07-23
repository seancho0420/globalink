			<!-- banner start -->
			<!-- ================ -->
			<div class="banner section white-bg">
				<div class="container">
					<div class="row animated fadeIn">
						<div class="col-md-offset-1 col-md-4">
							<br>
							<form method="post" action="<?=DIR?>visa">
								<!-- <h1>Visa Requirements</h1> -->
								<div class="form-group">
									<label class="control-label" for="citizen_of">Citizen of</label>
									<select class="form-control" name="citizen_of">
									<?php
									foreach ($data['citizen_countries'] as $value) {
									?>
										<option value="<?=$value?>"><?=$value?></option>
									<?php
									}
									?>
									</select>
								</div>

								<div class="form-group">
									<label class="control-label" for="travel_to">Travel Visa for</label>
									<select class="form-control" name="travel_to" required>
										<option value="">Choose</option>
									<?php
									foreach ($data['travel_countries'] as $key => $value) {
									?>
										<option value="<?=$value->name?>"><?=$value->name?></option>
									<?php
									}
									?>
									</select>
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-primary">Apply Now</button>
								</div>
							</form>
						</div>

						<div class="col-md-offset-1 col-md-5">
							<br>
							<h1>Passport Photo</h1>

							<?php
							foreach ($data['passport_photo_service'] as $key => $value) {
							?>
							<div class="box-style-3">
								<div class="icon-container default-bg">
									<i class="fa <?=$value['icon']?>"></i>
								</div>
								<div class="body">
									<h2><?=$value['title']?></h2>
									<p><?=$value['content']?></p>
									<!-- <a href="page-services.html" class="link"><span>Read More</span></a> -->
								</div>
							</div>
							<?php
							}
							?>
							<div class="box-style-3">
								<div class="body">
									<a href="<?=DIR?>passport_photo" class="link"><span>See More</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- banner end -->
			<!-- page-top start -->
			<!-- ================ -->
			<div class="page-top parallax visacenter-bg-1">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div style="height:180px;"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- page-top end -->

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
						<div class="col-md-12">
							<div class="call-to-action">
								<h1><?=$data['one_stop_visa_center']['title']?></h1>
								<p><?=$data['one_stop_visa_center']['content']?></p>
							</div>
							<!-- <h1 class="text-center">Global Link Visa Center is the Best Choice for your Visa Needs</h1> -->
							<div class="separator"></div>
							<!-- <p class="lead text-center">
							</p> -->
							
							<!-- Tabs start -->
							<!-- ================ -->
							<div class="vertical hc-tabs">
								<!-- Tabs Top -->
								<!-- <div class="hc-tabs-top">
									<img data-tab="#tab1" src="images/section-image-1.png" alt="iDea" data-tab-animation-effect="fadeInRightSmall">
									<img data-tab="#tab2" src="images/section-image-2.png" alt="iDea" data-tab-animation-effect="fadeInRightSmall">
									<img data-tab="#tab3" src="images/section-image-3.png" alt="iDea" data-tab-animation-effect="fadeInRightSmall">
									<img data-tab="#tab4" src="images/section-image-4.png" alt="iDea" data-tab-animation-effect="fadeInRightSmall">
									<div class="space"></div>
								</div> -->
								
								<!-- Tabs Arrow -->
								<div class="arrow hidden-sm hidden-xs"><i class="fa fa-caret-up"></i></div>
								
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<?php
									foreach ($data['tab_info'] as $key => $value) {
									?>
									<li class="<?=$key == 1 ? 'active' : ''?>"><a href="#tab<?=$key?>" role="tab" data-toggle="tab"><i class="fa <?=$value['icon']?> pr-10"></i> <?=$value['tab']?></a></li>
									<?php
									}
									?>
								</ul>

								<!-- Tab panes -->
								<div class="tab-content">
									<?php
									foreach ($data['tab_info'] as $key => $value) {
									?>
									<div class="tab-pane fade in <?=$key == 1 ? 'active' : ''?>" id="tab<?=$key?>">
										<h2 class="text-center title"><b><?=$value['title']?></b></h2>
										<div class="row">
											<div class="col-md-12">
												<h3 class="text-center"><i class="icon-check pr-10"></i> <?=$value['content']?></h3>
											</div>
										</div>

										<div class="space"></div>
									</div>
									<?php
									}
									?>
								</div>
							</div>
							<!-- tabs end -->
				
						</div>
					</div>
				</div>
			</div>
			<!-- section end -->

			<!-- section start -->
			<!-- ================ -->
			<!-- <div class="section dark-translucent-bg parallax-bg-2"> -->
			<div class="section default-bg">
				<div class="owl-carousel content-slider">
					<?php
					foreach ($data['testimonial'] as $key => $value) {
					?>
					<div class="testimonial">
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<!-- <h2 class="title">Full Width Testimonial Slider (Autoplay On)</h2> -->
									<div class="testimonial-image">
										<img src="<?=helpers\url::template_path()?>images/<?=$value['img']?>">
									</div>
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
