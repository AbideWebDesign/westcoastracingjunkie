<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package westcoastracingjunkie
 */

get_header();
?>
<?php get_template_part('template-parts/content', 'title-bar'); ?>

<div id="primary" class="content-area bg-light">
	<div class="container">
		<div class="row">
			<div class="col-lg-10">
				<div class="bg-white p-2 p-lg-5">
					<?php if ( get_field('include_sub_title_bar') ): ?>
									
						<div class="speed-wrap">
							<h2 class="mb-3 mb-lg-4 speed speed-alt"><?php the_field('sub_title'); ?></h2>
						</div>

					<?php endif; ?>
					<?php
					while ( have_posts() ) :
						the_post();
						
						the_content();
			
					endwhile; // End of the loop.
					?>
				</div>
			</div>
		</div>
	</div>
</div><!-- #primary -->

<?php
get_footer();
