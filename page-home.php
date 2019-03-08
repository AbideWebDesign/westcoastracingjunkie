<?php
/**
 * Template Name: Home
 *
 * @package westcoastracingjunkies
 */

get_header();

$ad_home_1_full = get_field('ad_home_1_full_ad_image', 'options');
$ad_home_1_full_image_link = get_field('ad_home_1_full_ad_image_link', 'options');
$ad_home_2_full = get_field('ad_home_1_full_ad_image', 'options');
$ad_home_2_full_image_link = get_field('ad_home_1_full_ad_image_link', 'options');

?>

	<div id="primary" class="content-area">
		
		<?php get_template_part('template-parts/content', 'hero'); ?>
		
		<?php get_template_part('template-parts/content', 'featured'); ?>
		
		<?php get_full_ad($ad_home_1_full, $ad_home_1_full_image_link, 'dark-light'); ?>
		
		<div class="bg-white py-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<h2 class="mb-3 mb-lg-4 text-center">Upcoming Schedule</h2>
						
						<?php get_template_part('template-parts/content', 'schedule'); ?>
						
						<div class="text-center mt-3 mt-lg-3">
							<a href="<?php echo home_url('/schedule'); ?>" class="btn btn-primary btn-secondary btn-lg"><span>View Upcoming Schedule</span></a>
						</div>						
					</div>
					<div class="col-lg-3 mt-4 mt-lg-0">
						
						<?php get_template_part('template-parts/content', 'sidebar-ads'); ?>
							
					</div>
				</div>
			</div>
		</div>
		
		<?php get_full_ad($ad_home_2_full, $ad_home_2_full_image_link, 'dark-light'); ?>
		
		<div class="bg-light py-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="text-center">
							<h2 class="mb-3 mb-lg-4">Pick Your Plan</h2>
						</div>
						
						<?php get_template_part('template-parts/content', 'pricing'); ?>
						
					</div>
					<div class="col-lg-3 mt-4 mt-lg-0">
						
						<?php get_template_part('template-parts/content', 'sidebar-ads'); ?>
						
					</div>
				</div>
			</div>
		</div>		
	</div><!-- #primary -->

<?php
get_footer();
