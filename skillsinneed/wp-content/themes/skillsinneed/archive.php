<?php
get_header(); ?>

<section class="main-container">
	<div class="main">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<?php if ( have_posts() ) : ?>

						<header class="page-header">
							<?php
								the_archive_title( '<h3>', '</h3>' );
							?>
						</header><!-- .page-header -->
						
						<table class="table">
							<thead>
								<tr>
									<th>Job Title</th>
									<th>Reference #</th>
									<th>Location</th>
									<th>Post Date</th>
								</tr>
							</thead>
							<tbody>
						<?php
						// Start the Loop.
						while ( have_posts() ) : the_post();
						?>
								<tr>
									<td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
									<td><?=get_field('job_reference_number');?></td>
									<td><?=get_field('job_location');?></td>
									<td><?php the_date();?></td>
								</tr>

						<?php
						// End the loop.
						endwhile;

						// Previous/next page navigation.
						?>
							</tbody>
						</table>
						<?php 
						$args = array(
							'base'               => '%_%',
							'format'             => '?paged=%#%',
							'show_all'           => false,
							'end_size'           => 1,
							'mid_size'           => 2,
							'prev_next'          => true,
							'prev_text'          => __('« Previous'),
							'next_text'          => __('Next »'),
							'type'               => 'plain',
							'add_args'           => false,
							'add_fragment'       => '',
							'before_page_number' => '',
							'after_page_number'  => ''
						);

						echo paginate_links(); 
						?>
					<?php
					// If no content, include the "No posts found" template.
					else :
						get_template_part( 'content', 'none' );

					endif;
					?>	
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
