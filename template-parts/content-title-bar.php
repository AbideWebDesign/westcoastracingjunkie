<div class="bg-dark text-white">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="mb-0 py-2">
					<?php 
						
						if (is_archive('video')) {
							
							echo 'Video Library';
							
						} else {
							
							the_title();
							
						}
						
					?>
				</h3>
			</div>
		</div>
	</div>
</div>
<?php if (get_field('title_banner')): ?>
	
	<?php $image = get_field('title_banner'); ?>
	<?php $image_url = wp_get_attachment_image_src($image['id'], 'Title Banner', false); ?>
	<div class="title-bar" style="background-image: linear-gradient(rgba(0,0,0,.2),rgba(0,0,0,.2)),url(<?php echo $image_url[0]; ?>)"></div>

<?php endif; ?>