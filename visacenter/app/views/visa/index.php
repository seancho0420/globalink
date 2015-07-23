<?php
	$citizen = $data['visa_info'][0]->citizen;
	$travel = $data['visa_info'][0]->travel;
	$visa_required = $data['visa_info'][0]->visa_required;
?>

<style>
	#organization_info {
		display: none;
	}
</style>

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

							<div class="animated fadeIn">
								<img class="img-responsive center-block" src="<?=helpers\url::template_path()?>images/process.png" alt="process">
							</div>
							<!-- page-title end -->

							<div class="row animated fadeInUpSmall">
								<div class="col-md-12 text-center">
									<form role="form" class="form-inline" method="post">
										<div class="form-group m-l-sm m-r-sm">
											<label class="control-label" for="citizen_of">Citizen of</label>&nbsp;&nbsp;
											<select class="form-control" id="citizen_of" name="citizen_of">
											<?php
											foreach ($data['citizen_countries'] as $value) {
											?>
												<option value="<?=$value?>" <?=$value == $citizen ? 'selected' : ''?>><?=$value?></option>
											<?php
											}
											?>
											</select>
										</div>

										<div class="form-group m-l-sm m-r-sm">
											<label class="control-label" for="travel_to">Traveling to</label>&nbsp;&nbsp;
											<select class="form-control" id="travel_to" name="travel_to" required>
												<option value="">Choose</option>
											<?php
											foreach ($data['travel_countries'] as $value) {
											?>
												<option value="<?=$value->name?>" <?=$value->name == $travel ? 'selected' : ''?>><?=$value->name?></option>
											<?php
											}
											?>
											</select>
										</div>

										
										<button type="submit" class="btn btn-primary btn-sm">Check</button>
									</form>
								</div>
							</div>

							<?php
							if($visa_required == 'N') {
							?>
							<div class="row animated fadeInDownSmall">
								<div class="col-xs-12">
									<div class="alert alert-success" role="alert">
										<strong>No visa required!</strong> <?=$travel?> travel visa is not required for citizens of <?=$citizen?>.
									</div>
								</div>
							</div>
							<?php
							} else if($visa_required == 'Y') {
							?>
							<div class="row animated fadeInDownSmall">
								<div class="col-xs-12">
									<div class="alert alert-danger" role="alert">
										<strong>Visa required!</strong> To apply <?=$travel?> travel visa, please fill the form out below.
									</div>
								</div>
							</div>
							<?php 
							} 
							?>

							<?php
							if($visa_required == 'Y') {
							?>

							<hr>

							<div class="row">
								<div class="col-md-12">
							<!-- Forms start -->
							<!-- ============================================================================== -->
									<div class="animated fadeInDownSmall" id="application_form">
										<h2>Application Form</h2>
										<form role="form" method="post" enctype="multipart/form-data">

											<!-- Hided field -->
											<input type="hidden" id="traveling_to" name="traveling_to">

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="first_name">First name</label>
														<input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" required>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="last_name">Last name</label>
														<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name" required>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="middle_name">Middle name</label>
														<input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Middle name">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="maiden_name">Maiden of former name</label>
														<input type="text" class="form-control" id="maiden_name" name="maiden_name" placeholder="Maiden of former name">
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="email">Email</label>
														<input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Sex</label>
														<br>
														<label class="radio-inline">
															<input type="radio" id="male" name="sex" value="male" required>
															Male
														</label>
														<label class="radio-inline">
															<input type="radio" id="female" name="sex" value="female" required>
															Female
														</label>
													</div>
												</div>
											</div>

											<hr>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label" for="citizenship">Citizenship</label>
														<select class="form-control" id="citizenship" name="citizenship">
															<option value="">Choose</option>
														<?php
														foreach ($data['travel_countries'] as $key => $value) {
														?>
															<option value="<?=$value->name?>" <?=$citizen == $value->name ? 'selected' : ''?>><?=$value->name?></option>
														<?php
														}
														?>
														</select>
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label" for="residency">Residency</label>
														<select class="form-control" id="residency" name="residency">
														<?php
														foreach ($data['residency'] as $value) {
														?>
															<option value="<?=$value?>" <?=$citizen == $value ? 'selected' : ''?>><?=$value?></option>
														<?php
														}
														?>
														</select>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="date_of_birth">Date of birth</label>
														<input type="text" class="form-control datepicker" id="date_of_birth" name="date_of_birth" maxlength="10" placeholder="MM-DD-YYYY">
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label for="city_of_birth">City of birth</label>
														<input type="text" class="form-control" id="city_of_birth" name="city_of_birth" placeholder="City of birth">
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="state_of_birth">State/Province of birth</label>
														<input type="text" class="form-control" id="state_of_birth" name="state_of_birth" placeholder="State/Province of birth">
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label" for="country_of_birth">Country of birth</label>
														<select class="form-control" id="country_of_birth" name="country_of_birth">
															<option value="">Choose</option>
														<?php
														foreach ($data['travel_countries'] as $key => $value) {
														?>
															<option value="<?=$value->name?>" <?=$citizen == $value->name ? 'selected' : ''?>><?=$value->name?></option>
														<?php
														}
														?>
														</select>
													</div>
												</div>
											</div>

											<hr>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label" for="employment_status">Employment status</label>
														<select class="form-control" id="employment_status" name="employment_status">
															<option value="">Choose</option>
														<?php
														foreach ($data['employment_status'] as $value) {
														?>
															<option value="<?=$value?>"><?=$value?></option>
														<?php
														}
														?>
														</select>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="address1">Address 1</label>
														<input type="text" class="form-control" id="address1" name="address1" placeholder="Address 1">
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="address2">Address 2</label>
														<input type="text" class="form-control" id="address2" name="address2" placeholder="Address 2">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="city">City</label>
														<input type="text" class="form-control" id="city" name="city" placeholder="City">
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="state">State/Province</label>
														<input type="text" class="form-control" id="state" name="state" placeholder="State/Province">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="zip_code">Zip/Postal code</label>
														<input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="Zip/Postal code">
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="home_phone">Home Phone</label>
														<input type="text" class="form-control" id="home_phone" name="home_phone" placeholder="Home Phone">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="mobile">Mobile Phone</label>
														<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Phone">
													</div>
												</div>
											</div>

											<hr>

											<div id="organization_info">
												<h3>Company Information</h3>
												<div class="row">
													<div class="col-md-6" id="position_container">
														<div class="form-group">
															<label for="position">Position</label>
															<input type="text" class="form-control" id="position" name="position" placeholder="Position (Occupation)">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label for="org_name"></label>
															<input type="text" class="form-control" id="org_name" name="org_name" placeholder="Name of the current employer">
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label for="org_address1">Address 1</label>
															<input type="text" class="form-control" id="org_address1" name="org_address1" placeholder="Address 1">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label for="org_address2">Address 2</label>
															<input type="text" class="form-control" id="org_address2" name="org_address2" placeholder="Address 2">
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label for="org_city">City</label>
															<input type="text" class="form-control" id="org_city" name="org_city" placeholder="City">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label for="org_state">State/Province</label>
															<input type="text" class="form-control" id="org_state" name="org_state" placeholder="State/Province">
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label for="org_zip_code">Zip/Postal code</label>
															<input type="text" class="form-control" id="org_zip_code" name="org_zip_code" placeholder="Zip/Postal code">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label for="org_phone">Phone</label>
															<input type="text" class="form-control" id="org_phone" name="org_phone" placeholder="Phone">
														</div>
													</div>
												</div>

												<hr>
											</div>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="passport_number">Passport Number</label>
														<input type="text" class="form-control" id="passport_number" name="passport_number" placeholder="Passport Number">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="issue_authority">Issued at/Issuing authority</label>
														<input type="text" class="form-control" id="issue_authority" name="issue_authority" placeholder="Issued at/Issuing authority">
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="date_of_issue">Date of issue</label>
														<input type="text" class="form-control datepicker" id="date_of_issue" name="date_of_issue" maxlength="10" placeholder="MM-DD-YYYY">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="expiration_date">Expiration date</label>
														<input type="text" class="form-control datepicker" id="expiration_date" name="expiration_date" maxlength="10" placeholder="MM-DD-YYYY">
													</div>
												</div>
											</div>

											<hr>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="copy_of_passport">Passport</label>
														<input type="file" id="copy_of_passport" name="copy_of_passport">
														<p class="help-block">Original, signed xxxx passport with at least 6 months of remaining validity.</p>
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label for="passport_photo">Passport photo</label>
														<input type="file" id="passport_photo" name="passport_photo">
														<p class="help-block">Passport-type photograph</p>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="drivers_licence">Driver's license</label>
														<input type="file" id="drivers_licence" name="drivers_licence">
														<p class="help-block">Copy of driver's licence or utility bill, showing the applicants name and current address.</p>
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label for="itinerary">Itinerary</label>
														<input type="file" id="itinerary" name="itinerary">
														<p class="help-block">Copy of round trip tickets or itinerary.</p>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="hotel_reservations">Hotel reservations</label>
														<input type="file" id="hotel_reservations" name="hotel_reservations">
														<p class="help-block">Copy of confirmed hotel reservations.</p>
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label for="personal_invitation">Personal invitation</label>
														<input type="file" id="personal_invitation" name="personal_invitation">
														<p class="help-block">If visiting friends or family, you must provide a letter of invitation from the host in China. The letter must be signed and should be address to the "Consulate of China, Visa Section." The letter must contain the following information:</p>
													</div>
												</div>
											</div>

											<button type="submit" class="btn btn-default" name="apply_visa">Submit</button>
										</form>
									</div>
								</div>
							</div>

							<?php
							}
							?>
						</div>
						<!-- main end -->

						<!-- sidebar start -->
						<!-- <aside class="col-md-3">
							<div class="sidebar">
								<div class="block clearfix">
									<h3 class="title">Components</h3>
									<div class="separator"></div>
									<nav>
										<ul class="nav nav-pills nav-stacked">
											<li><a href="components-tabs-and-pills.html">Tabs &amp; Pills</a></li>
											<li><a href="components-accordions.html">Accordions</a></li>
											<li><a href="components-social-icons.html">Social icons</a></li>
											<li><a href="components-buttons.html">Buttons</a></li>
											<li class="active"><a href="components-forms.html">Forms</a></li>
											<li><a href="components-progress-bars.html">Progress Bars</a></li>
											<li><a href="components-alerts-and-callouts.html">Alerts &amp; Callouts</a></li>
											<li><a href="components-content-sliders.html">Content Sliders</a></li>
											<li><a href="components-lightbox.html">Lightbox</a></li>
											<li><a href="components-icon-boxes.html">Icon Boxes</a></li>
											<li><a href="components-image-boxes.html">Image Boxes</a></li>
											<li><a href="components-video-and-audio.html">Video and Audio</a></li>
											<li><a href="components-modals.html">Modals</a></li>
											<li><a href="components-animations.html">Animations</a></li>
											<li><a href="components-counters.html">Counters</a></li>
											<li><a href="components-tables.html">Tables</a></li>
										</ul>
									</nav>
								</div>
							</div>
						</aside> -->
						<!-- sidebar end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->

			<!-- section start -->
			<!-- <div class="section gray-bg">
				<div class="container">
					<h2>Form elements (Gray Background)</h2>
					<form role="form">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group has-success has-feedback">
									<label class="control-label" for="inputSuccess3">Input with success</label>
									<input type="text" class="form-control" id="inputSuccess3">
									<i class="fa fa-check form-control-feedback"></i>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group has-warning has-feedback">
									<label class="control-label" for="inputWarning3">Input with warning</label>
									<input type="text" class="form-control" id="inputWarning3">
									<i class="fa fa-warning form-control-feedback"></i>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group has-error has-feedback">
									<label class="control-label" for="inputError3">Input with error</label>
									<input type="text" class="form-control" id="inputError3">
									<i class="fa fa-times form-control-feedback"></i>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group has-feedback">
									<label class="control-label">Username</label>
									<input type="text" class="form-control">
									<i class="fa fa-user form-control-feedback"></i>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group has-feedback">
									<label class="control-label">Password</label>
									<input type="password" class="form-control">
									<i class="fa fa-lock form-control-feedback"></i>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group has-feedback">
									<label class="control-label">Email</label>
									<input type="email" class="form-control">
									<i class="fa fa-envelope-o form-control-feedback"></i>
								</div>
							</div>
						</div>
					</form>
					<form role="form">
						<div class="form-group">
							<label for="disabledTextInput2">Disabled input</label>
							<input type="text" id="disabledTextInput2" class="form-control" placeholder="Disabled input" disabled="">
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" value="">
								Option one is this and that—be sure to include why it's great
							</label>
						</div>
						<div class="checkbox disabled">
							<label>
								<input type="checkbox" value="" disabled="">
								Option two is disabled
							</label>
						</div>
						<br>
						<div class="radio">
							<label>
								<input type="radio" name="optionsRadios" id="optionsRadios4" value="option1" checked="">
								Option one is this and that—be sure to include why it's great
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="optionsRadios" id="optionsRadios5" value="option2">
								Option two can be something else and selecting it will deselect option one
							</label>
						</div>
						<div class="radio disabled">
							<label>
								<input type="radio" name="optionsRadios" id="optionsRadios6" value="option3" disabled="">
								Option three is disabled
							</label>
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
			</div> -->
			<!-- section end -->
			<!-- <div class="space"></div> -->
			<!-- section start -->
			<!-- <div class="section dark-bg text-muted">
				<div class="container">
					<h2>Form elements (Dark Background)</h2>
					<form role="form">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group has-success has-feedback">
									<label class="control-label" for="inputSuccess4">Input with success</label>
									<input type="text" class="form-control" id="inputSuccess4">
									<i class="fa fa-check form-control-feedback"></i>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group has-warning has-feedback">
									<label class="control-label" for="inputWarning4">Input with warning</label>
									<input type="text" class="form-control" id="inputWarning4">
									<i class="fa fa-warning form-control-feedback"></i>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group has-error has-feedback">
									<label class="control-label" for="inputError4">Input with error</label>
									<input type="text" class="form-control" id="inputError4">
									<i class="fa fa-times form-control-feedback"></i>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group has-feedback">
									<label class="control-label">Username</label>
									<input type="text" class="form-control">
									<i class="fa fa-user form-control-feedback"></i>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group has-feedback">
									<label class="control-label">Password</label>
									<input type="password" class="form-control">
									<i class="fa fa-lock form-control-feedback"></i>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group has-feedback">
									<label class="control-label">Email</label>
									<input type="email" class="form-control">
									<i class="fa fa-envelope-o form-control-feedback"></i>
								</div>
							</div>
						</div>
					</form>
					<form role="form">
						<div class="form-group">
							<label for="disabledTextInput3">Disabled input</label>
							<input type="text" id="disabledTextInput3" class="form-control" placeholder="Disabled input" disabled="">
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" value="">
								Option one is this and that—be sure to include why it's great
							</label>
						</div>
						<div class="checkbox disabled">
							<label>
								<input type="checkbox" value="" disabled="">
								Option two is disabled
							</label>
						</div>
						<br>
						<div class="radio">
							<label>
								<input type="radio" name="optionsRadios" id="optionsRadios7" value="option1" checked="">
								Option one is this and that—be sure to include why it's great
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="optionsRadios" id="optionsRadios8" value="option2">
								Option two can be something else and selecting it will deselect option one
							</label>
						</div>
						<div class="radio disabled">
							<label>
								<input type="radio" name="optionsRadios" id="optionsRadios9" value="option3" disabled="">
								Option three is disabled
							</label>
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
			</div> -->
			<!-- section end -->
			<!-- <div class="container">
				<div class="alert alert-info alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
					The <strong>Default Background</strong> is defined by the current color scheme.
				</div>
			</div> -->
			<!-- section start -->
			<!-- <div class="section default-bg text-muted">
				<div class="container">
					<h2>Form elements (Default Background)</h2>
					<form role="form">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group has-success has-feedback">
									<label class="control-label" for="inputSuccess5">Input with success</label>
									<input type="text" class="form-control" id="inputSuccess5">
									<i class="fa fa-check form-control-feedback"></i>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group has-warning has-feedback">
									<label class="control-label" for="inputWarning5">Input with warning</label>
									<input type="text" class="form-control" id="inputWarning5">
									<i class="fa fa-warning form-control-feedback"></i>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group has-error has-feedback">
									<label class="control-label" for="inputError5">Input with error</label>
									<input type="text" class="form-control" id="inputError5">
									<i class="fa fa-times form-control-feedback"></i>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group has-feedback">
									<label class="control-label">Username</label>
									<input type="text" class="form-control">
									<i class="fa fa-user form-control-feedback"></i>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group has-feedback">
									<label class="control-label">Password</label>
									<input type="password" class="form-control">
									<i class="fa fa-lock form-control-feedback"></i>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group has-feedback">
									<label class="control-label">Email</label>
									<input type="email" class="form-control">
									<i class="fa fa-envelope-o form-control-feedback"></i>
								</div>
							</div>
						</div>
					</form>
					<form role="form">
						<div class="form-group">
							<label for="disabledTextInput4">Disabled input</label>
							<input type="text" id="disabledTextInput4" class="form-control" placeholder="Disabled input" disabled="">
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" value="">
								Option one is this and that—be sure to include why it's great
							</label>
						</div>
						<div class="checkbox disabled">
							<label>
								<input type="checkbox" value="" disabled="">
								Option two is disabled
							</label>
						</div>
						<br>
						<div class="radio">
							<label>
								<input type="radio" name="optionsRadios" id="optionsRadios10" value="option1" checked="">
								Option one is this and that—be sure to include why it's great
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="optionsRadios" id="optionsRadios11" value="option2">
								Option two can be something else and selecting it will deselect option one
							</label>
						</div>
						<div class="radio disabled">
							<label>
								<input type="radio" name="optionsRadios" id="optionsRadios12" value="option3" disabled="">
								Option three is disabled
							</label>
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
			</div> -->
			<!-- section end -->
			<!-- <div class="space"></div> -->
			<!-- section start -->
			<!-- <footer class="section footer">
				<div class="container">
					<div class="footer-content">
						<h2>Form elements (Footer)</h2>
						<form role="form">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group has-success has-feedback">
										<label class="control-label" for="inputSuccess6">Input with success</label>
										<input type="text" class="form-control" id="inputSuccess6">
										<i class="fa fa-check form-control-feedback"></i>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group has-warning has-feedback">
										<label class="control-label" for="inputWarning6">Input with warning</label>
										<input type="text" class="form-control" id="inputWarning6">
										<i class="fa fa-warning form-control-feedback"></i>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group has-error has-feedback">
										<label class="control-label" for="inputError6">Input with error</label>
										<input type="text" class="form-control" id="inputError6">
										<i class="fa fa-times form-control-feedback"></i>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group has-feedback">
										<label class="control-label">Username</label>
										<input type="text" class="form-control">
										<i class="fa fa-user form-control-feedback"></i>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group has-feedback">
										<label class="control-label">Password</label>
										<input type="password" class="form-control">
										<i class="fa fa-lock form-control-feedback"></i>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group has-feedback">
										<label class="control-label">Email</label>
										<input type="email" class="form-control">
										<i class="fa fa-envelope-o form-control-feedback"></i>
									</div>
								</div>
							</div>
						</form>
						<form role="form">
							<div class="form-group">
								<label for="disabledTextInput5">Disabled input</label>
								<input type="text" id="disabledTextInput5" class="form-control" placeholder="Disabled input" disabled="">
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" value="">
									Option one is this and that—be sure to include why it's great
								</label>
							</div>
							<div class="checkbox disabled">
								<label>
									<input type="checkbox" value="" disabled="">
									Option two is disabled
								</label>
							</div>
							<br>
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios13" value="option1" checked="">
									Option one is this and that—be sure to include why it's great
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios14" value="option2">
									Option two can be something else and selecting it will deselect option one
								</label>
							</div>
							<div class="radio disabled">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios15" value="option3" disabled="">
									Option three is disabled
								</label>
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
						</form>
					</div>
				</div>
			</footer> -->
			<!-- section end -->

