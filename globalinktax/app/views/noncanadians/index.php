<!-- page-intro start-->
<!-- ================ -->
<div class="page-intro">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ol class="breadcrumb">
					<li><i class="fa fa-home pr-10"></i><a href="<?=DIR?>">Home</a></li>
					<li class="active">Canadian Tax Returns for Non-Canadians</li>
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
				<h1 class="page-title">Canadian Tax Returns for Non-Canadians</h1>
				<div class="separator-2"></div>
				<!-- page-title end -->

				<div class="animated fadeInUpSmall">
					<div class="row">
						<div class="col-xs-12">
							<p>
								If you are on a working holiday visa, temporary visa, studying or working in Canada, or you have already left the Canada, you must file a Canadian tax return each year.
							</p>
							<p>
								We do all the work for you easy and stress-free! Our service is guaranteed to get you the maximum legal tax refund!
							</p>
						</div>
					</div>

					<div class="row m-t-sm">
						<div class="col-xs-12">
							<p class="m-b-xs">
								You can file for the years you have been in Canada. The Canadian tax year ends December 31
							</p>

							<ul>
								<li>
									<strong>Average Canadian Tax Refund: $250-$1000</strong>
								</li>
								<li>
									<strong>FREE Tax Refund Estimation</strong>&nbsp;&nbsp;&nbsp;Fill in the form below
								</li>
								<li>
									<strong>No Refund - No Fee!</strong>&nbsp;&nbsp;&nbsp;Pay nothing upfront.
								</li>
							</ul>

							<p class="m-t-lg m-b-xs">
								You can claim tax back from Canada for a number of reasons including:
							</p>

							<ul>
								<li>You paid rent or homestay expenses</li>
								<li>You had Federal taxes, CPP, EI deducted from your job</li>
								<li>You paid college/university/language school tuition fees and textbooks</li>
								<li>You paid medical expenses</li>
								<li>You paid for public transit passes</li>
							</ul>

							<p class="m-t-lg m-b-xs">
								At Global Link Tax, we will:
							</p>

							<ul>
								<li>Review your situation to estimate your refund</li>
								<li>Our certified accountant will file your taxes accurately and professionally to ensure you get the maximum legal tax refund</li>
								<li>Help you get your T4, rental receipts, public transit passes, or any other missing documents</li>
								<li>If you have left Canada, we will send your refund to you anywhere in the world</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="animated fadeInDownSmall">
				<!-- page-title end -->
					<div class="row m-t-lg">
						<div class="col-md-12">
							<p>
								Claim Your Canadian Tax back now! We can help you anywhere in Canada or if you have returned to your home country.<br>
								Contact us now or fill out the form below for a free assessment of your tax case.
							</p>
						</div>

						<div class="col-md-12">
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
						</div>
					</div>


					<div class="noncanadians-form">
						<form id="noncanadians-form" role="form" method="post">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="firstname">First name <span class="text-danger">*</span></label>
										<input type="text" class="form-control" id="firstname" name="firstname" placeholder="" required>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label for="lastname">Last name <span class="text-danger">*</span></label>
										<input type="text" class="form-control" id="lastname" name="lastname" placeholder="" required>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="email">Email <span class="text-danger">*</span></label>
										<input type="email" class="form-control" id="email" name="email" placeholder="abc@email.com" required>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label for="phone">Phone</label>
										<input type="text" class="form-control" id="phone" name="phone" placeholder="123-456-7890">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="sin">Social Insurance Number (SIN) or Individual Tax Number (ITN)</label>
										<input type="text" class="form-control" id="sin" name="sin" placeholder="">
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label for="birthdate">Birthdate</label>
										<input type="text" class="form-control datepicker" id="birthdate" name="birthdate" placeholder="MM/DD/YYYY" maxlength="10">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="arrived_at">When did you arrive in Canada <span class="text-danger">*</span></label>
										<input type="text" class="form-control" id="arrived_at" name="arrived_at" placeholder="e.g. 2010" required>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label for="worked">Were you working in Canada <span class="text-danger">*</span></label>
										<input type="text" class="form-control" id="worked" name="worked" placeholder="Yes / No" required>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="earned">How much money did you earn in Canada <span class="text-danger">*</span></label>
										<input type="text" class="form-control" id="earned" name="earned" placeholder="$" required>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label for="rent">How much rent did you paid during the year <span class="text-danger">*</span></label>
										<input type="text" class="form-control" id="rent" name="rent" placeholder="$" required>
									</div>
								</div>
							</div>

							<div class="row m-t-sm">
								<div class="col-md-12 text-center">
									<input type="submit" value="Claim Now" name="submit" class="btn btn-default btn-block">
								</div>
							</div>
						</form>

						<div class="row m-t-xl">
							<div class="col-md-12">
								<p class="m-b-xs">
									Citizens of the below countries on working holiday visa are eligible for a tax refund in Canada:
								</p>

								<p>
									Australia, Austria, Belgium, Chile, Costa Rica, Croatia, Czech Republic, Denmark, Estonia, France, Germany, Greece, Hong Kong SAR, Ireland, Italy, Japan, South Korea, Latvia, Lithuania, Mexico, The Netherlands, New Zealand, Norway, Poland, Slovakia, Slovenia, Spain, Sweden, Switzerland, Taiwan, Ukraine and the United Kingdom
								</p>
							</div>
						</div>
					</div>
				</div>
			<!-- main end -->
			</div>
		</div>
	</div>
</section>
<!-- main-container end -->