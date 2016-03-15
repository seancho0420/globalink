<?php
/*
Template Name: Landing Page
Author: Sean
*/

get_header();
?>

<?php $args = array(
    'posts_per_page' => 4,
    'offset' => 0,
    'category' => 0,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'include' => '',
    'exclude' => '',
    'meta_key' => '',
    'meta_value' => '',
    'post_type' => 'post',
    'post_status' => array('publish'),
    'suppress_filters' => true );

    $recent_posts = wp_get_recent_posts( $args, ARRAY_A );
?>

<!-- banner start -->
<!-- ================ -->
<div class="banner">
	
</div>
<!-- banner end -->

<!-- page-top start-->
<!-- ================ -->
<div class="page-top">
	<div class="container">
		<div class="row">
			<div class="col-sm-4" id="banner-first">
				<img src="<?php echo get_template_directory_uri(); ?>/images/caregiver_bkg_v2.jpg" class="img-responsive">
			</div>
			<div class="col-sm-4" id="banner-second">
				<img src="<?php echo get_template_directory_uri(); ?>/images/chef_bkg_v2.jpg" class="img-responsive">
			</div>
			<div class="col-sm-4" id="banner-third">
				<img src="<?php echo get_template_directory_uri(); ?>/images/skill-trader_bkg_v2.jpg" class="img-responsive">
			</div>
			<div class="col-sm-12">
				<p class="text-center" id="user-type">Employers | Employees</p>
			</div>
		</div>
	</div>
</div>
<!-- page-top end -->

<!-- main-container start -->
<!-- ================ -->
<section class="main-container">

	<!-- main start -->
	<!-- ================ -->
	<div class="main">
		<div class="container">
			<div class="row">
				<div class="col-md-8" style="border-right: 2px solid #bbb;">
					<?php while(have_posts()) : the_post(); ?>
						<?php the_content();?>
					<?php endwhile; ?>
				</div>

				<div class="col-md-4">
					<h3>Latest Job Postings</h3>
					<ul class="list-unstyled">
					<?php
						$recent_posts = wp_get_recent_posts();
						foreach( $recent_posts as $recent ){
							$post_date = date_format(date_create($recent['post_date']), 'M d');
							echo '<li>' . $post_date . ' - ' . '<a href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"] . ' / ' . get_field('job_location', $recent["ID"]) . '</a> </li> ';
						}
					?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- main end -->

</section>
<!-- main-container end -->

<section class="page-bottom">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<img src="<?php echo get_template_directory_uri(); ?>/images/bkg.png" class="img-responsive" alt="SkillsInNeed">
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
?>