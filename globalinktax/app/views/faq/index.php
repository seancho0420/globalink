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
								<li class="active">FAQ</li>
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
							<h1 class="page-title">FAQs</h1>
							<div class="separator-2"></div>
							<!-- page-title end -->

							<div class="row">
								<div class="col-md-12 animated fadeInUpSmall">
									<div class="panel-group" id="accordion">
										<?php
										foreach ($data['faqs'] as $key => $value) {
										?>
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$key?>" class="collapsed">
														<i class="fa <?=$value['icon']?>"></i><?=$value['question']?>
													</a>
												</h4>
											</div>
											<div id="collapse<?=$key?>" class="panel-collapse collapse">
												<div class="panel-body">
													<?=$value['answer']?>
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
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->