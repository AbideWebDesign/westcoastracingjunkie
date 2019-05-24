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
	
<?php
get_footer();
