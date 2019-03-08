<?php
/**
 * The template for displaying all single videos
 *
 *
 * @package westcoatsracingjunkie
 */

get_header();

$ad_home_1_full = get_field('ad_home_1_full_ad_image', 'options');
$ad_home_1_full_image_link = get_field('ad_home_1_full_ad_image_link', 'options');
$ad_home_2_full = get_field('ad_home_1_full_ad_image', 'options');
$ad_home_2_full_image_link = get_field('ad_home_1_full_ad_image_link', 'options');
?>

<?php while ( have_posts() ) : the_post(); ?>

	<div id="primary" class="content-area">
		
		<?php get_template_part('template-parts/content', 'video-player'); ?>
		
		<?php get_full_ad($ad_home_1_full, $ad_home_1_full_image_link, 'dark-light'); ?>

		<?php get_template_part('template-parts/content', 'recent-videos'); ?>		
		
	</div><!-- #primary -->

<?php endwhile; // End of the loop. ?>

<?php get_full_ad($ad_home_2_full, $ad_home_2_full_image_link, 'dark-light'); ?>

<?php get_footer(); ?>
