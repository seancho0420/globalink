<?php
use helpers\url;
?>

<div class="banner">
	<div id="main_banner" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#main_banner" data-slide-to="0" class="active"></li>
			<li data-target="#main_banner" data-slide-to="1"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="<?=url::template_path() . 'images/cw_banner_freedom.jpg'?>" alt="banner_freedom">
			</div>
			<div class="item">
				<img src="<?=url::template_path() . 'images/cw_banner_us.jpg'?>" alt="banner_us">
			</div>
		</div>

		<!-- Controls -->
		<div class="carousel-left">
			<a class="left carousel-control" href="#main_banner" role="button" data-slide="prev">
				<i class="fa fa-chevron-circle-left"></i>
			</a>
		</div>

		<div class="carousel-right">
			<a class="right carousel-control" href="#main_banner" role="button" data-slide="next">
				<i class="fa fa-chevron-circle-right"></i>
			</a>
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
						<img src="<?=url::template_path()?>images/portfolio-4.jpg" alt="">
						<a href="#" class="overlay small">
							<i class="fa fa-link"></i>
							<span>Web Design</span>
						</a>
					</div>
					<a href="portfolio-item.html" class="btn btn-light-gray btn-lg btn-block">Project Title</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="image-box animated fadeInLeft" data-animation-effect="fadeInLeft" data-effect-delay="200">
					<div class="overlay-container">
						<img src="<?=url::template_path()?>images/portfolio-5.jpg" alt="">
						<a href="#" class="overlay small">
							<i class="fa fa-link"></i>
							<span>Lorem Ipsum</span>
						</a>
					</div>
					<a href="portfolio-item.html" class="btn btn-light-gray btn-lg btn-block">Project Title</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="image-box animated fadeInLeft" data-animation-effect="fadeInLeft" data-effect-delay="100">
					<div class="overlay-container">
						<img src="<?=url::template_path()?>images/portfolio-6.jpg" alt="">
						<a href="#" class="overlay small">
							<i class="fa fa-link"></i>
							<span>Lorem Ipsum</span>
						</a>
					</div>
					<a href="portfolio-item.html" class="btn btn-light-gray btn-lg btn-block">Project Title</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="image-box animated fadeInLeft" data-animation-effect="fadeInLeft" data-effect-delay="100">
					<div class="overlay-container">
						<img src="<?=url::template_path()?>images/portfolio-7.jpg" alt="">
						<a href="#" class="overlay small">
							<i class="fa fa-link"></i>
							<span>Lorem Ipsum</span>
						</a>
					</div>
					<a href="portfolio-item.html" class="btn btn-light-gray btn-lg btn-block">Project Title</a>
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
		<div class="row">
			<div class="col-xs-12">
				<h2>Sample Header</h2>
				<p>
					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
				</p>
			</div>
		</div>

		<div class="row mt-20">
			<div class="col-xs-12">
				<div class="media">
					<div class="media-left">
						<img class="media-object" src="<?=url::template_path()?>images/client-1.png" alt="...">
					</div>
					<div class="media-body">
						<h4 class="media-heading">Media heading</h4>
						<p>
							Quo expedita tempore modi minima at adipisci saepe excepturi alias consequuntur sunt asperiores enim ut assumenda hic vitae, odio deleniti illo, veniam quas!
						</p>
						<p class=""><a href="#">Read More...</a></p>
					</div>
				</div>

				<div class="media">
					<div class="media-left">
						<img class="media-object" src="<?=url::template_path()?>images/client-2.png" alt="...">
					</div>
					<div class="media-body">
						<h4 class="media-heading">Media heading</h4>
						<p>
							Quo expedita tempore modi minima at adipisci saepe excepturi alias consequuntur sunt asperiores enim ut assumenda hic vitae, odio deleniti illo, veniam quas!
						</p>
						<p class=""><a href="#">Read More...</a></p>
					</div>
				</div>

				<div class="media">
					<div class="media-left">
						<img class="media-object" src="<?=url::template_path()?>images/client-3.png" alt="...">
					</div>
					<div class="media-body">
						<h4 class="media-heading">Media heading</h4>
						<p>
							Quo expedita tempore modi minima at adipisci saepe excepturi alias consequuntur sunt asperiores enim ut assumenda hic vitae, odio deleniti illo, veniam quas!
						</p>
						<p class=""><a href="#">Read More...</a></p>
					</div>
				</div>

				<div class="media">
					<div class="media-left">
						<img class="media-object" src="<?=url::template_path()?>images/client-4.png" alt="...">
					</div>
					<div class="media-body">
						<h4 class="media-heading">Media heading</h4>
						<p>
							Quo expedita tempore modi minima at adipisci saepe excepturi alias consequuntur sunt asperiores enim ut assumenda hic vitae, odio deleniti illo, veniam quas!
						</p>
						<p class=""><a href="#">Read More...</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- section end -->