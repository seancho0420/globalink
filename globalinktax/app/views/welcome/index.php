<?php
use helpers\url;
?>

<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<img src="<?=url::template_path() . 'images/main-banner.png'?>" style="width:100%" class="img-responsive" alt="main_banner">
		</div>
	</div>
</div>

<!-- section start -->
<!-- ================ -->
<div class="section clearfix">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="image-box animated fadeInLeft" data-animation-effect="fadeInLeft" data-effect-delay="300">
					<div class="overlay-container">
						<img src="<?=url::template_path()?>images/personal_tax_img.png" alt="">
						<a href="<?=DIR?>personal" class="overlay small">
							<i class="fa fa-link"></i>
							<span>File my Personal Tax</span>
						</a>
					</div>
					<a href="<?=DIR?>personal" class="btn btn-light-gray btn-lg btn-block">File my Personal Tax</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="image-box animated fadeInLeft" data-animation-effect="fadeInLeft" data-effect-delay="200">
					<div class="overlay-container">
						<img src="<?=url::template_path()?>images/business_tax_img.png" alt="">
						<a href="<?=DIR?>corporate" class="overlay small">
							<i class="fa fa-link"></i>
							<span>File my Business Tax</span>
						</a>
					</div>
					<a href="<?=DIR?>corporate" class="btn btn-light-gray btn-lg btn-block">File my Business Tax</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="image-box animated fadeInLeft" data-animation-effect="fadeInLeft" data-effect-delay="100">
					<div class="overlay-container">
						<img src="<?=url::template_path()?>images/tax_issue_help_img.png" alt="">
						<a href="<?=DIR?>personal/personal_issues" class="overlay small">
							<i class="fa fa-link"></i>
							<span>Tax Issues Help</span>
						</a>
					</div>
					<a href="<?=DIR?>personal/personal_issues" class="btn btn-light-gray btn-lg btn-block">Tax Issues Help</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="image-box animated fadeInLeft" data-animation-effect="fadeInLeft" data-effect-delay="100">
					<div class="overlay-container">
						<img src="<?=url::template_path()?>images/need_tax_advice_img.png" alt="">
						<a href="<?=DIR?>accounting/consultations" class="overlay small">
							<i class="fa fa-link"></i>
							<span>I Need Tax Advice</span>
						</a>
					</div>
					<a href="<?=DIR?>accounting/consultations" class="btn btn-light-gray btn-lg btn-block">I Need Tax Advice</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- section end -->


<!-- section start -->
<!-- ================ -->
<div class="section clearfix">
	<div class="container">
		<!-- <div class="row">
			<div class="col-xs-12">
				<h2>Sample Header</h2>
				<p>
					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
				</p>
			</div>
		</div> -->

		<div class="row mt-20">
			<div class="col-xs-12">
			<?php 
			foreach ($data['glt_home']['brief'] as $key => $value) {
			?>
				<div class="media">
					<div class="media-body">
						<h4 class="media-heading"><?=$value['title']?></h4>
						<p>
							<?=$value['desc']?>
						</p>
					</div>
				</div>
			<?php
			}
			?>
			</div>
		</div>
	</div>
</div>
<!-- section end -->