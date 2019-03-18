<?php if( have_rows('sidebar_ads', 'options') ): ?>
	<div class="container">
		<div class="row py-3">
			<div class="col-12 col-xl-6 mb-3">
				<h4 class="mb-3 text-center">Advertisers</h4>
				<div class="sidebar-ad-wrap">
						
					<?php while( have_rows('sidebar_ads', 'options') ): the_row();
					
						// vars
						$image = get_sub_field('ad_image');
						$link = get_sub_field('ad_image_link');
					
					 ?>
						<div class="mb-1">
							<a href="<?php echo $link; ?>" target="_blank"><?php echo wp_get_attachment_image($image['id'], 'Ad Sidebar', false, array('class'=>'img-fluid img-ad')); ?></a>
						</div>
					
					<?php endwhile; ?>
						
				</div>
			</div>
			<div class="col-12 col-xl-6">
				<h4 class="mb-3 text-center">Sponsors</h4>
				<div class="sidebar-ad-wrap">
										
					<?php while( have_rows('sidebar_ads', 'options') ): the_row();
					
						// vars
						$image = get_sub_field('ad_image');
						$link = get_sub_field('ad_image_link');
					
					 ?>
						<div class="mb-1">
							<a href="<?php echo $link; ?>" target="_blank"><?php echo wp_get_attachment_image($image['id'], 'Ad Sidebar', false, array('class'=>'img-fluid img-ad')); ?></a>
						</div>
					
					<?php endwhile; ?>
						
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>