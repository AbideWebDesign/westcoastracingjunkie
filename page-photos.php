<?php
/**
 * Template Name: Simple
 *
 * @package westcoastracingjunkies
 */

get_header();
?>

<?php get_template_part('template-parts/content', 'title-bar'); ?>

<?php while(have_posts()): the_post(); ?>
	
	<div id="primary-simple" class="content-area bg-light">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bg-white p-2 p-lg-5">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-8">
									<?php the_content(); ?>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<?php endwhile; ?>
<div id="inplayer-65865" class="inplayer-paywall"></div>
<script>
    var paywall = new InplayerPaywall('3dae9162-15bd-4ec3-aa54-5c35ae8eb4f7', [{
        id: 65865,
         options: {
            noPreview: true,
            noInject: true
        }
    }]);
</script>	
<?php
get_footer();
