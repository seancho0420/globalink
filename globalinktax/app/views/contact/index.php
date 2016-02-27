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
								<li><i class="fa fa-home pr-10"></i><a href="<?=DIR?>"><?=$GLOBALS['glt_nav']['1']['main']['home']?></a></li>
								<li class="active"><?=$GLOBALS['glt_nav']['7']['main']['contact']?></li>
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
						<div class="col-md-12">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title"><?=$data['glt_contact']['title']?></h1>
							<!-- page-title end -->
						</div>


						<?php
						if($data['tax_service_submit'] || $data['contact_submit']) {
						?>
						<div class="col-md-12">
							<div class="alert alert-success alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<?=$data['glt_contact']['message']?>
							</div>
						</div>
						<?php
						}
						?>

						<div class="col-md-8">
							<div class="row">
								<div class="col-md-12 animated fadeInUpSmall">
									<h4><?=$data['glt_contact']['body']['title']?></h4>

									<?php
									foreach ($data['glt_contact']['body']['content'] as $key => $value) {
									?>
										<p><?=$value?></p>
									<?php
									}
									?>

									<hr class="m-t-xl m-b-xl">

									<!-- tax service form -->
									<div class="tax-service-form">
										<h3>
											<?=$data['glt_contact']['quote_form']['title']?>
										</h3>

										<form id="tax-service-form" role="form" method="post">
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label for="name"><?=$data['glt_contact']['quote_form']['fullname']?> <span class="text-danger">*</span></label>
														<input type="text" class="form-control" name="name" placeholder="" required>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for=""><?=$data['glt_contact']['quote_form']['email']?> <span class="text-danger">*</span></label>
														<input type="email" class="form-control" name="email" placeholder="" required>
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label for=""><?=$data['glt_contact']['quote_form']['phone']?> <span class="text-danger">*</span></label>
														<input type="text" class="form-control" name="phone" placeholder="" required>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label for=""><?=$data['glt_contact']['quote_form']['1']?></label>
														<input type="text" class="form-control" name="num_of_t_slip" placeholder="">
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for=""><?=$data['glt_contact']['quote_form']['2']?></label><br>
														<label class="radio-inline">
															<input type="radio" name="self_employment_income" id="self_employment_income_yes" value="Yes"> <?=$data['glt_contact']['quote_form']['yes_no_option']['yes']?>
														</label>
														<label class="radio-inline">
															<input type="radio" name="self_employment_income" id="self_employment_income_no" value="No"> <?=$data['glt_contact']['quote_form']['yes_no_option']['no']?>
														</label>
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label for=""><?=$data['glt_contact']['quote_form']['2-1']?></label>
														<input type="text" class="form-control" name="amount_of_revenues" placeholder="$">
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for=""><?=$data['glt_contact']['quote_form']['3']?></label><br>
														<label class="radio-inline">
															<input type="radio" name="own_home" id="own_home_yes" value="Yes"> <?=$data['glt_contact']['quote_form']['yes_no_option']['yes']?>
														</label>
														<label class="radio-inline">
															<input type="radio" name="own_home" id="own_home_no" value="No"> <?=$data['glt_contact']['quote_form']['yes_no_option']['no']?>
														</label>
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label for=""><?=$data['glt_contact']['quote_form']['4']?></label><br>
														<label class="radio-inline">
															<input type="radio" name="were_you_student" id="were_you_student_yes" value="Yes"> <?=$data['glt_contact']['quote_form']['yes_no_option']['yes']?>
														</label>
														<label class="radio-inline">
															<input type="radio" name="were_you_student" id="were_you_student_no" value="No"> <?=$data['glt_contact']['quote_form']['yes_no_option']['no']?>
														</label>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for=""><?=$data['glt_contact']['quote_form']['5']?></label><br>
														<label class="radio-inline">
															<input type="radio" name="rrsp_contribution" id="rrsp_contribution_yes" value="Yes"> <?=$data['glt_contact']['quote_form']['yes_no_option']['yes']?>
														</label>
														<label class="radio-inline">
															<input type="radio" name="rrsp_contribution" id="rrsp_contribution_no" value="No"> <?=$data['glt_contact']['quote_form']['yes_no_option']['no']?>
														</label>
													</div>
												</div>
											
												<div class="col-md-6">
													<div class="form-group">
														<label for=""><?=$data['glt_contact']['quote_form']['6']?></label><br>
														<label class="radio-inline">
															<input type="radio" name="sell_stock" id="sell_stock_yes" value="Yes"> <?=$data['glt_contact']['quote_form']['yes_no_option']['yes']?>
														</label>
														<label class="radio-inline">
															<input type="radio" name="sell_stock" id="sell_stock_no" value="No"> <?=$data['glt_contact']['quote_form']['yes_no_option']['no']?>
														</label>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for=""><?=$data['glt_contact']['quote_form']['7']?></label><br>
														<label class="radio-inline">
															<input type="radio" name="rental_income_from_real_estate" id="rental_income_from_real_estate_yes" value="Yes"> <?=$data['glt_contact']['quote_form']['yes_no_option']['yes']?>
														</label>
														<label class="radio-inline">
															<input type="radio" name="rental_income_from_real_estate" id="rental_income_from_real_estate_no" value="No"> <?=$data['glt_contact']['quote_form']['yes_no_option']['no']?>
														</label>
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label for=""><?=$data['glt_contact']['quote_form']['7-1']?></label>
														<input type="text" class="form-control" name="property" placeholder="">
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for=""><?=$data['glt_contact']['quote_form']['8']?></label><br>
														<label class="radio-inline">
															<input type="radio" name="foreign_asset" id="foreign_asset_yes" value="Yes"> <?=$data['glt_contact']['quote_form']['yes_no_option']['yes']?>
														</label>
														<label class="radio-inline">
															<input type="radio" name="foreign_asset" id="foreign_asset_no" value="No"> <?=$data['glt_contact']['quote_form']['yes_no_option']['no']?>
														</label>
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label for=""><?=$data['glt_contact']['quote_form']['9']?></label>
														<input type="text" class="form-control" name="immigration_status" placeholder="">
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label for=""><?=$data['glt_contact']['quote_form']['10']?></label>
														<textarea class="form-control" rows="6" name="other_income_tax_credit" style="resize:none;"></textarea>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-12">
													<p>
														<?=$data['glt_contact']['quote_form']['thankyou']?>
													</p>
												</div>
											</div>

											<input type="submit" value="<?=$data['glt_contact']['quote_form']['submit']?>" name="tax_service_submit" class="btn btn-default">
										</form>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="row">
								<div class="col-md-12">
									<h4><?=$data['glt_contact']['contact_form']['title']?></h4>
									<div class="contact-form">
										<form id="contact-form" role="form" method="post">
											<div class="form-group">
												<label for="name"><?=$data['glt_contact']['contact_form']['name']?> <span class="text-danger">*</span></label>
												<input type="text" class="form-control" name="name" placeholder="" required>
											</div>
											<div class="form-group">
												<label for="email"><?=$data['glt_contact']['contact_form']['email']?> <span class="text-danger">*</span></label>
												<input type="email" class="form-control" name="email" placeholder="" required>
											</div>
											<div class="form-group">
												<label for="phone"><?=$data['glt_contact']['contact_form']['phone']?></label>
												<input type="text" class="form-control" name="phone" placeholder="">
											</div>
											
											<div class="form-group">
												<label class="control-label" for=""><?=$data['glt_contact']['contact_form']['best_time']?> <span class="text-danger">*</span></label>
												<select class="form-control" name="best_time_to_call" id="best_time_to_call" required>
													<option value=""><?=$data['glt_contact']['contact_form']['options']['1']?></option>
													<option value="Anytime - Urgent"><?=$data['glt_contact']['contact_form']['options']['2']?></option>
													<option value="Morning 9AM - Noon"><?=$data['glt_contact']['contact_form']['options']['3']?></option>
													<option value="Afternoon Noon - 5PM"><?=$data['glt_contact']['contact_form']['options']['4']?></option>
													<option value="Evening 5PM - 7PM"><?=$data['glt_contact']['contact_form']['options']['5']?></option>
													<option value="Saturday 11AM - 3PM"><?=$data['glt_contact']['contact_form']['options']['6']?></option>
												</select>
											</div>

											<div class="form-group">
												<label for="message"><?=$data['glt_contact']['contact_form']['message']?> <span class="text-danger">*</span></label>
												<textarea class="form-control" rows="6" id="message" name="message" style="resize:none;" required></textarea>
											</div>

											<input type="submit" value="<?=$data['glt_contact']['contact_form']['submit']?>" name="contact_submit" class="btn btn-default">
										</form>
									</div>
								</div>
							</div>

							<div class="row">
								<!-- google maps start -->
								<div class="col-md-12">
									<div id="map-canvas"></div>
								</div>
								<!-- google maps end -->

								<div class="col-md-12 m-l-sm m-t-sm">
									<ul class="list">
										<li style="padding: 2px 0"><i class="fa fa-home pr-10"></i><?=ADDR?></li>
										<li style="padding: 2px 0"><i class="fa fa-phone pr-10"></i><?=$data['glt_contact']['addr']['phone']?>: <?=PHONE?></li>
										<li style="padding: 2px 0"><i class="fa fa-fax pr-10"></i><?=$data['glt_contact']['addr']['fax']?>: <?=FAX?></li>
										<li style="padding: 2px 0"><i class="fa fa-envelope pr-10"></i><?=$data['glt_contact']['addr']['general_inquiries']?>: <a href="mailto:<?=EMAIL_ADDR?>"><?=EMAIL_ADDR?></a></li>
									</ul>
								</div>
							</div>
						</div>
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