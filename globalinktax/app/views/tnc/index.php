			<!-- page-intro start-->
			<!-- ================ -->
			<div class="page-intro">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ol class="breadcrumb">
								<li><i class="fa fa-home pr-10"></i><a href="<?=DIR?>">Home</a></li>
								<li class="active">Terms and Conditions</li>
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
							<h2 class="page-title">Terms and Conditions</h2>
							<div class="separator-2"></div>

							<?php
							foreach ($data['terms_and_conditions'] as $key => $value) {
							?>
							<p style="font-size:15px;"><?=$value?></p>
							<?
							}
							?>
						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->