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
									<?php
									if($data) {
									?>
									<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<strong>Submitted! </strong> We will contact you within 1 business day.
									</div>
									<?php
									}
									?>
									<div class="contact-form">
										<form id="contact-form" role="form" method="post">
											<div class="form-group">
												<label for="name">Name <span class="text-danger">*</span></label>
												<input type="text" class="form-control" id="name" name="name" placeholder="" required>
											</div>
											<div class="form-group">
												<label for="email">Email <span class="text-danger">*</span></label>
												<input type="email" class="form-control" id="email" name="email" placeholder="" required>
											</div>
											<div class="form-group">
												<label for="phone">Phone</label>
												<input type="text" class="form-control" id="phone" name="phone" placeholder="">
											</div>
											
											<div class="form-group">
												<label class="control-label" for="">Best Time to Call <span class="text-danger">*</span></label>
												<select class="form-control" name="best_time_to_call" id="best_time_to_call" required>
													<option value="">Choose</option>
													<option value="Anytime - Urgent">Anytime - Urgent</option>
													<option value="Morning 9AM - Noon">Morning 9AM - Noon</option>
													<option value="Afternoon Noon - 5PM">Afternoon Noon - 5PM</option>
													<option value="Evening 5PM - 9PM">Evening 5PM - 9PM</option>
													<option value="Saturday or Sunday">Saturday or Sunday</option>
												</select>
											</div>

											<div class="form-group">
												<label class="control-label" for="">Year of Last Conviction <span class="text-danger">*</span></label><br>
												<select class="form-control" name="last_conviction" id="last_conviction" required>
													<option value="">Choose</option>
													<?php
													for($i = 2014; $i >= 1990; $i--) {
													?>
													<option value="<?=$i?>"><?=$i?></option>
													<?php
													}
													?>
												</select>
											</div>

											<div class="form-group">
												<label class="control-label" for="">Fines/Probation Status <span class="text-danger">*</span></label>
												<select class="form-control" name="fines_status" id="fines_status" required>
													<option value="">Choose</option>
													<option value="All Completed">All Completed</option>
													<option value="Still on Probation">Still on Probation</option>
													<option value="Unpaid Fine">Unpaid Fine</option>
													<option value="Unsure">Unsure</option>
												</select>
											</div>

											<div class="form-group">
												<label for="message">Summarize your Criminal Record <span class="text-danger">*</span></label>
												<textarea class="form-control" rows="6" id="criminal_record" name="criminal_record" placeholder="" required></textarea>
											</div>

											<div class="form-group">
												<h4>Your Submission is 100% Confidential</h4>
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

										<div class="col-md-12 m-l-sm m-t-sm">
											<ul class="list">
												<li style="padding: 2px 0"><i class="fa fa-home pr-10"></i><?=ADDR?></li>
												<li style="padding: 2px 0"><i class="fa fa-phone pr-10"></i>Phone: <?=PHONE?></li>
												<li style="padding: 2px 0"><i class="fa fa-fax pr-10"></i>Fax: <?=FAX?></li>
												<li style="padding: 2px 0"><i class="fa fa-envelope pr-10"></i>General Inquiries: <a href="mailto:<?=EMAIL_ADDR?>"><?=EMAIL_ADDR?></a></li>
												<li style="padding: 2px 0"><i class="fa fa-envelope pr-10"></i>Existing Clients: <a href="mailto:clientcare@canadawidepardons.com">clientcare@canadawidepardons.com</a></li>
												<li style="padding: 2px 0"><i class="fa fa-envelope pr-10"></i>Accounting: <a href="mailto:accounting@canadawidepardons.com">accounting@canadawidepardons.com</a></li>
												<li style="padding: 2px 0"><i class="fa fa-envelope pr-10"></i>Fingerprints: <a href="mailto:fingerprints@canadawidepardons.com">fingerprints@canadawidepardons.com</a></li>
											</ul>
										</div>

										<div class="col-md-12 m-l-sm m-t-sm">
											<ul class="list">
												<li style="padding: 2px 0"><i class="fa fa-globe pr-10"></i>RCMP: <a href="http://www.rcmp-grc.gc.ca" target="_blank">www.rcmp-grc.gc.ca</a></li>
												<li style="padding: 2px 0"><i class="fa fa-globe pr-10"></i>Parole Board of Canada (PBC): <a href="http://pbc-clcc.gc.ca/index-eng.shtml" target="_blank">pbc-clcc.gc.ca/index-eng.shtml</a></li>
												<li style="padding: 2px 0"><i class="fa fa-globe pr-10"></i>Citizenship & Immigration Canada: <a href="http://www.cic.gc.ca" target="_blank">www.cic.gc.ca</a></li>
												<li style="padding: 2px 0"><i class="fa fa-globe pr-10"></i>Department of Homeland Security (DHS): <a href="http://www.rcmp-grc.gc.ca" target="_blank">www.dhs.gov/index.shtm</a></li>
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