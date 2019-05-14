<?php

	$args = array (
		'post_type' => 'videos',
		'posts_per_page' => '3', 
		'tax_query' => array(
	        array (
	            'taxonomy' => 'video_cat',
	            'field' => 'slug',
	            'terms' => 'featured',
	        )
		),	
	);
	
	$query = new WP_Query($args);
	
?>
<?php if ($query->have_posts()): ?>
	<div class="section section-featured bg-dark">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h2 class="mb-3 mb-lg-4 text-white">Featured Videos</h2>
				</div>
				
				<?php while($query->have_posts()): $query->the_post(); ?>
				
					<?php $image = get_field('video_thumbnail'); ?>
					
					<div class="col-lg-4 mb-2 mb-lg-0">
						<a class="d-block card-link" href="<?php the_permalink(); ?>">
							<div class="card border-none">
								
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
				
				<?php wp_reset_postdata(); ?>
				
				<div class="col-12 text-center mt-3">
					<a href="<?php echo home_url('/videos'); ?>" class="btn btn-primary btn-secondary"><span>View More</span></a>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>