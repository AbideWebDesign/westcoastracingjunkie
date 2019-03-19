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
			<div class="col-md-10 col-lg-10 col-xl-9 p-3 p-xl-5 bs bsr">	
				<div class="speed-wrap">
					<h2 class="mb-3 mb-lg-4 speed speed-alt">Select a Plan</h2>
				</div>
				
				<?php get_template_part('template-parts/content', 'pricing'); ?>
				
				<div class="mt-5">
					<div class="speed-wrap">
						<h2 class="mb-3 mb-lg-4 speed speed-alt">Membership FAQs</h2>
					</div>
					<?php the_field('plan_content'); ?>
				</div>
				
			</div>
			<div class="col-md-2 col-lg-2 col-xl-3 bg-light">
				
				<?php get_template_part('template-parts/content', 'sidebar-ads'); ?>
			
			</div>
		</div>
	</div>
</div>
	
<?php
get_footer();
