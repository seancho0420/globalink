<?php

get_header(); ?>

<section class="main-container">
	<div class="main">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php
					// Start the loop.
					while ( have_posts() ) : the_post();
						the_content();
					// End the loop.
					endwhile;
					?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
