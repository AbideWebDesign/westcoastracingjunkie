<?php
/**
 * Template Name: Home
 *
 * @package westcoastracingjunkies
 */

get_header();

?>

	<div id="primary" class="content-area">
		<div class="container-fluid p-0">
			<div class="row no-gutters">
				<div class="col-md-10 col-lg-10 col-xl-9 bs bsr">
					
					<?php get_template_part('template-parts/content', 'page-home'); ?>
					
				</div>
				<div class="col-md-2 col-lg-2 col-xl-3 bg-light">
					
					<?php get_template_part('template-parts/content', 'sidebar-ads'); ?>
				
				</div>
			</div>
		</div>		
	</div><!-- #primary -->
<?php
get_footer();
