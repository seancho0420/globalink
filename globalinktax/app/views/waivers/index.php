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
								<li class="active">Waivers</li>
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
							<div class="row animated fadeInDownSmall">
								<div class="col-md-8">
									<!-- page-title start -->
									<!-- ================ -->
									<h1 class="page-title">Waivers</h1>
									<div class="separator-2"></div>
									<!-- page-title end -->

									<?php
									foreach ($data['waivers_in_waivers'] as $key => $value) {
									?>
									<p><?=$value?></p>
									<?php
									}
									?>
								</div>

								<div class="col-md-4">
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

										<input type="hidden" name="look_for" value="waiver">

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
					<h2 class="title">Timeline</h2>
					<div class="separator-2"></div>

					<div class="row">
						<div class="col-xs-12">
							<p>Canada Wide Pardons has a systematic system in place to complete and submit your case in the shortest period of time. 
							Below is an estimate on what to expect, however other factors such court and police response times, time in completing fingerprints, 
							client's outstanding balance, and others can cause delay. Canada Wide Pardons will make its best effort to process your case as quickly as possible, 
							however we cannot be responsible for delays from 3rd parties or from clients in providing us with complete information.</p>
						</div>
					</div>

					<div class="work-timeline">
						<table class="table">
							<tbody>
								<tr>
									<td>Our Work <p class="hidden-lg hidden-md"><small class="text-primary">(2-6 MONTHS)</small></p></td>
									<td>
										<div class="row">
											<div class="progress-bar progress-bar-warning">
											</div>
											<div class="progress-bar progress-bar-warning">
											</div>
											<div class="progress-bar progress-bar-danger">
											</div>
											<div class="progress-bar progress-bar-danger" style="padding-top:3px;">
												<span class="sr-only visible-lg-inline" style="right:-45px;left:auto">2 - 6</span>
												<span class="sr-only visible-md-inline" style="right:-32px;left:auto">2 - 6</span>
											</div>
											<div class="progress-bar progress-bar-danger" style="padding-top:3px;">
												<span class="sr-only visible-lg-inline visible-md-inline" style="left:4px">MONTHS</span>
											</div>
											<div class="progress-bar progress-bar-danger">
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td>Gorvernment Timeline <p class="hidden-lg hidden-md"><small class="text-primary">(3-7 MONTHS)</small></p></td>
									<td>
										<div class="row">
											<div class="progress-bar" style="background-color:transparent;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;border-color:transparent;">
											</div>
											<div class="progress-bar" style="background-color:transparent;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;border-color:transparent;">
											</div>
											<div class="progress-bar progress-bar-warning">
											</div>
											<div class="progress-bar progress-bar-warning">
											</div>
											<div class="progress-bar progress-bar-warning">
											</div>
											<div class="progress-bar progress-bar-danger">
											</div>
											<div class="progress-bar progress-bar-danger" style="padding-top:3px;">
												<span class="sr-only visible-lg-inline" style="right:-45px;left:auto">3 - 7</span>
												<span class="sr-only visible-md-inline" style="right:-32px;left:auto">3 - 7</span>
											</div>
											<div class="progress-bar progress-bar-danger" style="padding-top:3px;">
												<span class="sr-only visible-lg-inline visible-md-inline" style="left:4px">MONTHS</span>
											</div>
											<div class="progress-bar progress-bar-danger">
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td>Total Timeline <p class="hidden-lg hidden-md"><small class="text-primary">(5-13 MONTHS)</small></p></td>
									<td>
										<div class="row">
											<div class="progress-bar progress-bar-warning">
											</div>
											<div class="progress-bar progress-bar-warning">
											</div>
											<div class="progress-bar progress-bar-warning">
											</div>
											<div class="progress-bar progress-bar-warning">
											</div>
											<div class="progress-bar progress-bar-warning">
											</div>
											<div class="progress-bar progress-bar-danger">
											</div>
											<div class="progress-bar progress-bar-danger">
											</div>
											<div class="progress-bar progress-bar-danger">
											</div>
											<div class="progress-bar progress-bar-danger" style="padding-top:3px;">
												<span class="sr-only visible-lg-inline" style="right:-40px;left:auto">5 - 13</span>
												<span class="sr-only visible-md-inline" style="right:-27px;left:auto">5 - 13</span>
											</div>
											<div class="progress-bar progress-bar-danger" style="padding-top:3px;">
												<span class="sr-only visible-lg-inline visible-md-inline" style="left:4px">MONTHS</span>
											</div>
											<div class="progress-bar progress-bar-danger">
											</div>
											<div class="progress-bar progress-bar-danger">
											</div>
											<div class="progress-bar progress-bar-danger">
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- section end -->

			<!-- section start -->
			<!-- ================ -->
			<div class="section clearfix">
				<div class="container">
					<h2>Why Choose Us</h2>
					<div class="separator-2"></div>
					<p class="lead">Canada Wide Pardons is the Best Choice for your Pardon and US Waiver Needs</p>
					<div class="row">
						<div class="col-md-12">
							<div class="panel-group" id="accordion">
								<?php
								foreach ($data['why_choose_us'] as $key => $value) {
								?>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$key?>" class="<?=$key == '1' ? '' : 'collapsed'?>">
												<i class="fa <?=$value['icon']?>"></i><?=$value['title']?>
											</a>
										</h4>
									</div>
									<div id="collapse<?=$key?>" class="panel-collapse collapse <?=$key == '1' ? 'in' : ''?>">
										<div class="panel-body">
											<?=$value['content']?>
										</div>
									</div>
								</div>
								<?php
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- section end -->