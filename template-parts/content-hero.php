<?php $bg_img = wp_get_attachment_image_src(get_field('hero_banner_image'), 'hero banner', false); ?>

<div id="section-hero-banner">
	<div class="h-100">
		<div class="h-100 text-center bg-img <?php echo ($count==0 ? 'active' : ''); ?>" style="background-image: url('<?php echo $bg_img[0]; ?>')">
			<div class="bg-overlay"></div>
			<div class="bg-img-content text-center d-inline-flex flex-column h-100 align-content-center justify-content-center">
				<h1 class="text-white mb-2 py-3 px-5"><?php the_field('hero_banner_title'); ?></h2>
				<h3 class="mb-1 mb-lg-0 text-white py-3 px-5 mx-lg-5"><?php the_field('header_banner_sub_title'); ?></h4>
				<a href="<?php the_field('hero_banner_button_link'); ?>" class="btn btn-primary btn-white btn-lg mt-4"><span><?php the_field('hero_banner_button_label'); ?> <i class="fas fa-chevron-right ml-1"></i></span></a>
			</div>
		</div>
	</div>
</div>