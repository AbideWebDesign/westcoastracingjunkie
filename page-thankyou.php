<?php
/**
 * Template Name: Thank You
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
								<div class="col-lg-8 text-center py-lg-5">
									<h2 class="mb-3">Welcome to Westcoast Racing Junkie!</h2>
									<?php the_content(); ?>
									<div class="mt-4 d-flex justify-content-center">
										<div class="mr-2"><a href="<?php echo home_url('/videos'); ?>" class="btn btn-success">Browse Videos</a></div>
										<div><a href="<?php echo home_url('/account'); ?>" class="btn btn-alt">View Account</a></div>
									</div>
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
