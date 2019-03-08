<?php if( have_rows('sidebar_ads', 'options') ): ?>
	<div class="bg-light d-flex por p-lg-3 justify-content-center flex-column text-center">
		<h4 class="mb-3">Sponsors</h4>
		<div class="sidebar-ad-wrap">
			<div class="row">
				
				<?php while( have_rows('sidebar_ads', 'options') ): the_row();
				
					// vars
					$image = get_sub_field('ad_image');
					$link = get_sub_field('ad_image_link');
				
				 ?>
					<div class="col-6 col-md-4 col-xl-12 mb-1">
						<a href="<?php echo $link; ?>" target="_blank"><?php echo wp_get_attachment_image($image['id'], 'Ad Sidebar', false, array('class'=>'img-fluid')); ?></a>
					</div>
				
				<?php endwhile; ?>
				
			</div>
		</div>
	</div>
<?php endif; ?>