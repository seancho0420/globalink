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
								<li><a href="<?=DIR?>corporate"><?=$GLOBALS['glt_nav']['3']['main']['corporate']?></a></li>
								<li class="active"><?=$GLOBALS['glt_nav']['3']['sub']['hst']?></li>
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
							<h1 class="page-title"><?=$data['glt_hst_return']['title']?></h1>
							<div class="separator-2"></div>
							<!-- page-title end -->

							<div class="animated fadeInUpSmall">
								<div class="row">
									<div class="col-xs-12">
										<?php foreach ($data['glt_hst_return']['body_1'] as $key => $value) { ?>
											<p><?=$value?></p>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->