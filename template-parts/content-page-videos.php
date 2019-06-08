<div class="py-3 bg-light">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-md-8 col-lg-12 col-xl-3">
				<div class="speed-wrap text-md-center mb-2 mb-sm-3 mb-lg-2 mb-xl-0">
					<h4 class="speed speed-alt">Filters</h4>
				</div>
			</div>
			<div class="col-12 col-xl-9">
				<div id="search-filters" class="row h-100 justify-content-center">
					<div class="col-md-auto col-lg-auto align-self-center pr-md-0"><strong>Event: </strong></div>
					<div class="col-md-auto col-lg-3 col-xl-3"><?php echo do_shortcode('[facetwp facet="categories" counts="false"]'); ?></div>
					<div class="col-md-auto col-lg-auto align-self-center pr-md-0"><strong>Search: </strong></div>
					<div class="col-md-auto col-lg-3 col-xl-4"><?php echo do_shortcode('[facetwp facet="search"]'); ?></div>
					<div class="col-auto align-self-center mt-2 mt-md-0"><button class="btn btn-primary btn-sm" onclick="FWP.refresh()"><span>Apply</span></button></div>
				</div>
				
			</div>
		</div>
	</div>
</div>
<div id="video-list" class="bg-white p-xl-3">
	<div class="container-fluid">
		<div class="row">
			
			<?php if (have_posts()): ?>
			
				<?php while(have_posts()): the_post(); ?>
								
					<div class="col-sm-6 col-lg-4 mb-3">
						<a class="d-block card-link" href="<?php the_permalink(); ?>">
							<div class="card border-none">
								
								<?php $image = get_field('video_thumbnail'); ?>
								
								<?php echo wp_get_attachment_image($image['id'], 'Video Thumbnail', false, array('class' => 'card-img-top img-fluid')); ?>
								
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