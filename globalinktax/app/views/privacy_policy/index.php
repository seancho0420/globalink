			<!-- page-intro start-->
			<!-- ================ -->
			<div class="page-intro">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ol class="breadcrumb">
								<li><i class="fa fa-home pr-10"></i><a href="<?=DIR?>">Home</a></li>
								<li class="active">Privacy Policy</li>
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
						<div class="main col-xs-12 animated fadeInDownSmall">
							<h2 class="page-title">Privacy Policy</h2>
							<div class="separator-2"></div>

							<h4>Policies and Information</h4>
							<?php
							foreach ($data['policies_and_information'] as $key => $value) {
							?>
							<p style="font-size:15px;"><?=$value?></p>
							<?
							}
							?>

							<h4>Government Fees</h4>
							<?php
							foreach ($data['government_fees'] as $key => $value) {
							?>
							<p style="font-size:15px;"><?=$value?></p>
							<?
							}
							?>

							<h4>General Provisions</h4>
							<?php
							foreach ($data['general_provisions'] as $key => $value) {
							?>
							<p style="font-size:15px;"><?=$value?></p>
							<?
							}
							?>

							<h4>Limitations of Liability</h4>
							<?php
							foreach ($data['limitations_of_liability'] as $key => $value) {
							?>
							<p style="font-size:15px;"><?=$value?></p>
							<?
							}
							?>

							<h4>Indemnification</h4>
							<?php
							foreach ($data['indemnification'] as $key => $value) {
							?>
							<p style="font-size:15px;"><?=$value?></p>
							<?
							}
							?>

							<h4>Trademarks / Copyright</h4>
							<?php
							foreach ($data['trademarks_copyright'] as $key => $value) {
							?>
							<p style="font-size:15px;"><?=$value?></p>
							<?
							}
							?>

							<h4>Privacy Policy</h4>
							<?php
							foreach ($data['privacy_policy'] as $key => $value) {
							?>
							<p style="font-size:15px;"><?=$value?></p>
							<?
							}
							?>

							<hr>

							<p>Any general inquiries or issues regarding our Terms and Conditions or Privacy Policies, should they ever arise, must be directed to CWP via the following:</p>

							<address>
								<strong>Client Care Manager</strong><br>
								Unit B-4852 Yonge St.<br>
								Toronto, ON<br>
								M2N 5N2
							</address>

							<p>CWP is committed to outstanding customer care and will make every reasonable effort to resolve any issues you may have with our service on the spot, or as soon as possible. CWP reserves the right to modify this Privacy Policy at any time and any changes made will be promptly updated on this website.</p>

						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->


			