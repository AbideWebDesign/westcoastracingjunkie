<?php
/**
 * Template Name: Schedule
 *
 * @package westcoastracingjunkies
 */

get_header();

?>
<?php get_template_part('template-parts/content', 'title-bar'); ?>

<div id="primary" class="content-area">
	<div class="container-fluid p-0">
		<div class="row no-gutters">
			<div class="col-md-10 col-lg-10 col-xl-9 p-3 p-xl-5 bs bsr">		
				<div class="speed-wrap">
					<h2 class="mb-3 mb-lg-4 speed speed-alt">Schedule</h2>
				</div>
				
				<?php get_template_part('template-parts/content', 'schedule'); ?>
				
			</div>
			<div class="col-md-2 col-lg-2 col-xl-3 bg-light">
				
				<?php get_template_part('template-parts/content', 'sidebar-ads'); ?>
				
			</div>					
		</div>
	</div>
</div>
	
<?php if (get_field('ad_full_width_1_ad_image', 'options')): ?>

	<?php get_full_ad(get_field('ad_full_width_1_ad_image', 'options'), get_field('ad_full_width_1_ad_link', 'options'), 'dark-light'); ?>
	
<?php endif; ?>
<div id="inplayer-65865"></div>
<script>
	
    var paywall = new InplayerPaywall('3dae9162-15bd-4ec3-aa54-5c35ae8eb4f7', [{
        id: 65865,
         options: {
            noPreview: true,
            noInject: true,
        }
    }], {
	    brandingId: 456
    });
    
</script>
<?php
get_footer();
