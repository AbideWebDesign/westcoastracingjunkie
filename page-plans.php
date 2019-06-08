<?php
/**
 * Template Name: Plans
 *
 * @package westcoastracingjunkies
 */

get_header();
?>
<?php get_template_part('template-parts/content', 'title-bar'); ?>

<div id="primary" class="content-area">
	<div class="container-fluid p-0">
		<div class="row no-gutters">
			<div class="col-md-10 col-lg-10 col-xl-9 p-3 p-xl-3 bs bsr">					
				<div>
					<div class="speed-wrap">
						<h2 class="mb-3 mb-lg-4 speed speed-alt">Membership FAQs</h2>
					</div>
					<?php the_field('plan_content'); ?>
				</div>
				
			</div>

			<?php get_template_part('template-parts/sidebar', 'default'); ?>

		</div>
	</div>
</div>
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
