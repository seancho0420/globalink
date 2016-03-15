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
					?>
					<h3><?=the_title()?></h3>
					<?php
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
