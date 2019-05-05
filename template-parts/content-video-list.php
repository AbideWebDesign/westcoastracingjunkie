<?php
	$meta_query = array(
		array(
			'key' => 'broadcast_date',
			'value' => date('Y-m-d H:i:s'),
			'type' => 'DATETIME',
			'compare' => '<='
		)
	);	
	$args = array (
		'post_type' => 'videos',
		'posts_per_page' => '50', 
		'post_status' => 'publish',
		'meta_query' => $meta_query,
		'meta_type'	=> 'DATE'
		'meta_key' => 'broadcast_date',
		'orderby' => 'meta_value',
		'order' => 'ASC',
	);
	
	$query = new WP_Query($args);
	
?>
<div class="py-3 bg-light">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="speed-wrap">
					<h4 class="mb-0 speed speed-alt">Filters</h4>
				</div>
			</div>
			<div class="col-lg-8">
				
			</div>
		</div>
	</div>
</div>
<div class="section bg-white">
	<div class="container">
		<div class="row">
			<?php while($query->have_posts()): $query->the_post(); ?>
			
				<?php $image = get_field('video_thumbnail'); ?>
				
				<div class="col-lg-4 mb-2">
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
		</div>
	</div>
</div>