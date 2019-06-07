<?php
/**
 * Template Name: Live
 *
 * @package westcoastracingjunkies
 */

get_header();
?>
	
<?php while ( have_posts() ) : the_post(); ?>

	<div id="primary" class="content-area">
		<div class="container-fluid p-0">
			<div class="row no-gutters">
				<div class="col-md-10 col-lg-10 col-xl-9 bs bsr">
		
					<?php get_template_part('template-parts/content', 'video-player'); ?>
					
<!-- 					<?php get_full_ad($ad_home_1_full, $ad_home_1_full_image_link, 'dark-light'); ?> -->
			
					<?php get_template_part('template-parts/content', 'recent-videos'); ?>	
					
				</div>
				<div class="col-md-2 col-lg-2 col-xl-3 bg-light">
					
					<?php get_template_part('template-parts/content', 'sidebar-ads'); ?>
				
				</div>				
			</div>
		</div>	
	</div><!-- #primary -->

<?php endwhile; // End of the loop. ?>

<?php if ( get_field('ad_full_width_1_ad_image', 'options') ): ?>

	<?php get_full_ad(get_field('ad_full_width_1_ad_image', 'options'), get_field('ad_full_width_1_ad_link', 'options'), 'dark-light'); ?>
	
<?php endif; ?>

<?php get_footer(); ?>
