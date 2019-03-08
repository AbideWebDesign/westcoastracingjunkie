<?php
/**
 * Template Name: Plans
 *
 * @package westcoastracingjunkies
 */

get_header();
?>
<?php get_template_part('template-parts/content', 'title-bar'); ?>

<div id="primary" class="content-area bg-light">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bg-white p-2 p-lg-5">
					<div class="speed-wrap">
						<h2 class="mb-3 mb-lg-4 speed speed-alt">Select a Plan</h2>
					</div>
					
					<?php get_template_part('template-parts/content', 'pricing'); ?>
					
				</div>
			</div>
		</div>
	</div>
</div>
	
<?php
get_footer();
