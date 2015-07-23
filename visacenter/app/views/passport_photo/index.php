
			<!-- banner start -->
			<!-- ================ -->
			<!-- <div class="banner">
				<div class="fixed-image section light-translucent-bg" style="background-image:url('images/page-services-banner.jpg');">
					<div class="container">
					<div class="space-top"></div>
					<h1>Services</h1>
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
								<li class="active">Passport Photo</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
			<!-- page-intro end -->


			<!-- section start -->
			<!-- ================ -->
			<div class="section gray-bg clearfix">
				<div class="container">
					<h1 class="text-center title">Passport Photos</h1>
					<div class="row grid-space-10 animated fadeInUpSmall">
						<?php
						foreach ($data['passport_photo_service'] as $key => $value) {
						?>
						<div class="col-sm-4">
							<div class="box-style-2">
								<div class="icon-container default-bg">
									<i class="fa <?=$value['icon']?>"></i>
								</div>
								<div class="body">
									<h2><?=$value['title']?></h2>
									<p><?=$value['content']?></p>
								</div>
							</div>
						</div>
						<?php
						}
						?>
					</div>

					<div class="row animated fadeInDownSmall m-t-lg">
						<div class="col-sm-12">
							<h2 class="text-center"><b><?=$data['passport_photo_price']?></b></h2>
						</div>
					</div>
				</div>
			</div>
			<!-- section end -->

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
							<h1 class="page-title text-center">Visa and Passport References</h1>
							<div class="separator"></div>
							<!-- page-title end -->
							<div class="animated fadeInUpSmall">
							<?php
								$i = 0;

								foreach ($data['passport_photo'] as $country => $value) {
									if($i % 6 == 0) {
										echo '<div class="row">';
										
									}
							?>
										<div class="col-md-2 col-sm-4 col-xs-6">
											<!-- <div class="box-style-4"> -->
												<div class="body">
													<h3 class="m-b-none text-darkblue"><?=$country?></h3>
													<?php
													if($country != 'Language Tests' && $country != 'EU Countries' && $country != 'School Application') {
													?>
													<form method="post" action="<?=DIR?>visa" id="<?=$country?>" style="margin:0">
														<input type="hidden" value="Canada" name="citizen_of">
														<input type="hidden" value="<?=$country?>" name="travel_to">
														<input type="submit" class="apply_from_photo" value="Apply For Visa">
													</form>
													<!-- <small><button onClick="applyVisa(<?=$country?>);">Apply For Visa</button></small> -->
							<?php
													}

													if($value['embassy'] != '') {
							?>
													<a href="<?=$value['embassy']?>" target="_blank" class="embassy_link text-success">Embassy Website</a>
							<?php
													}

										foreach ($value['photo'] as $type => $size) {
							?>			
													<p style="margin:3px 5px 0;font-size:12px;"><b><?=$type?></b>: <?=$size?></p>
							<?php
										}

							?>
												</div>
											<!-- </div> -->
										</div>
							<?php

									if($i % 6 == 5 || $i == sizeof($data['passport_photo'])) {
										echo '</div>';
									}

									$i++;
								}
							?>
							</div>
							<div class="space"></div>

						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->