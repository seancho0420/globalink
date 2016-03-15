<?php
/*
Template Name: Simple
Author: Sean
*/

get_header();
?>

<!-- main-container start -->
<!-- ================ -->
<section id="template-simple" class="main-container">

	<!-- main start -->
	<!-- ================ -->
	<div class="main">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php while(have_posts()) : the_post(); ?>
						<?php the_content();?>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- main end -->

</section>
<!-- main-container end -->

<?php
get_footer();
?>