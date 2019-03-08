<?php
/**
 * Template Name: Schedule
 *
 * @package westcoastracingjunkies
 */

get_header();

$ad_home_1_full = get_field('ad_home_1_full_ad_image', 'options');
$ad_home_1_full_image_link = get_field('ad_home_1_full_ad_image_link', 'options');
$ad_home_2_full = get_field('ad_home_1_full_ad_image', 'options');
$ad_home_2_full_image_link = get_field('ad_home_1_full_ad_image_link', 'options');

?>
<?php get_template_part('template-parts/content', 'title-bar'); ?>

<div id="primary" class="content-area bg-light">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bg-white py-5">
					<div class="speed-wrap">
						<h2 class="mb-3 mb-lg-4 speed speed-alt">Schedule</h2>
					</div>
					
					<?php get_template_part('template-parts/content', 'schedule'); ?>
					
				</div>
			</div>
		</div>
	</div>
</div>
	
<?php get_full_ad($ad_home_2_full, $ad_home_2_full_image_link, 'dark-light'); ?>

<?php
get_footer();
