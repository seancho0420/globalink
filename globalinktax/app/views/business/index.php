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
								<li><i class="fa fa-home pr-10"></i><a href="<?=DIR?>"><?=$GLOBALS['glt_nav']['1']['main']['home']?></a></li>
								<li class="active"><?=$GLOBALS['glt_nav']['4']['main']['business']?></li>
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
						<div class="main col-xs-12">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title"><?=$data['glt_business_startup']['title']?></h1>
							<div class="separator-2"></div>
							<!-- page-title end -->

							<div class="row">
								<div class="col-xs-12 animated fadeInUpSmall">
									<?php foreach ($data['glt_business_startup']['body_1']['content_1'] as $key => $value) { ?>
										<p><?=$value?></p>
									<?php } ?>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12 animated fadeInDownSmall">
									<div class="table-responsive">
										<table class="table table-striped table-bordered">
											<thead>
												<?php foreach ($data['glt_business_startup']['body_1']['table']['tr_1']['td'] as $key => $value) { ?>
													<th class="text-center" style="width:50%">
														<?=$value['content']?>
													</th>
												<?php } ?>
											</thead>
											<tbody>
												<?php 
													foreach ($data['glt_business_startup']['body_1']['table'] as $key => $value) { 
														if($key != 'tr_1') {
															if($key == 'tr_2' || $key == 'tr_4') {
												?>
														<tr class="text-center">
															<?php foreach ($value['td'] as $td_key => $td_value) { ?>
																<td><strong><?=$td_value['content']?></strong></td>
															<?php } ?>
														</tr>
															<?php } else { ?>
														<tr>
															<?php foreach ($value['td'] as $td_key => $td_value) { ?>
															<td>
																<p><?=$td_value['content']?></p>
																<ul>
																	<?php foreach ($td_value['list'] as $list_key => $list_value) { ?>
																		<li><?=$list_value?></li>
																	<?php } ?>
																</ul>
															</td>
															<?php } ?>
														</tr>

												<?php 
															}
														}
													} 
												?>
											</tbody>
										</table>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12 animated fadeInDownSmall">
									<p>
										<?=$data['glt_business_startup']['body_2']['content']?>
									</p>
								</div>
							</div>
						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->