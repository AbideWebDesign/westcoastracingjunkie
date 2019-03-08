<?php
/**
 * The template for displaying video list
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package westcoatsracingjunkie
 */

get_header();

?>

<?php get_template_part('template-parts/content', 'title-bar'); ?>

<div class="py-3 bg-light">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="speed-wrap">
					<h4 class="mb-0 speed speed-alt">Filters</h4>
				</div>
			</div>
			<div class="col-lg-8">
				<div id="search-filters" class="row h-100">
					<div class="col-auto align-self-center p-lg-0 mt-2 mt-lg-0"><strong>Event: </strong></div>
					<div class="col-lg-4"><?php echo do_shortcode('[facetwp facet="categories" counts="false"]'); ?></div>
					<div class="col-auto align-self-center p-lg-0"><strong>Search: </strong></div>
					<div class="col-lg-4"><?php echo do_shortcode('[facetwp facet="search"]'); ?></div>
					<div class="col-auto align-self-center mt-2 mt-lg-0"><button class="btn btn-primary btn-sm" onclick="FWP.refresh()"><span>Apply</span></button></div>
				</div>
				
			</div>
		</div>
	</div>
</div>
<div id="video-list" class="bg-white py-3">
	<div class="container">
		<div class="row">
			
			<?php if (have_posts()): ?>
			
				<?php while(have_posts()): the_post(); ?>
								
					<div class="col-lg-4 mb-3">
						<a class="d-block card-link" href="<?php the_permalink(); ?>">
							<div class="card border-none">
								
								<?php $image = get_field('video_thumbnail'); ?>
								
								<?php echo wp_get_attachment_image($image['id'], 'Video Thumbnail', false, array('class' => 'card-img-top')); ?>
								
								<div class="card-body">
									<div class="row">
										<div class="col-auto col-lg-2 align-self-center text-center">
											<i class="fas fa-video"></i>
										</div>
										<div class="col-auto col-lg-10">
											<h5 class="card-head"><?php the_field('location'); ?></h5>
											<h3 class="card-title"><?php the_title(); ?></h3>
											<p class="card-foot"><?php the_field('broadcast_date'); ?></p>
										</div>
									</div>
		  						</div>
							</div>
						</a>
					</div>
				
				<?php endwhile; ?>
				
			<?php else: ?>
				
				<div class="col-12">
					<div id="no-results" class="d-flex justify-content-center align-items-center">
						<h4>No results</h4>
					</div>
				</div>
			
			<?php endif; ?>
			
		</div>
		<div class="row">
			<div class="col-12">
				<?php echo facetwp_display( 'pager' ); ?>	
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
