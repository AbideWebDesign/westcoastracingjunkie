<?php
/**
 * Template Name: Contact
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
					<div class="bg-white p-2 p-lg-5 mb-2">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-8">
									<h2 class="mb-2"><?php the_title(); ?></h2>
									<div class="mb-3"><?php the_content(); ?></div>
									<h4 class="mb-1">Phone Number:</h4>
									<p class="mb-3">Please call <?php the_field('contact_phone', 'options'); ?></p>
									<h4 class="mb-1">Email:</h4>
									<p class="mb-3"><a href="mailto:<?php the_field('contact_email', 'options'); ?>"><?php the_field('contact_email', 'options'); ?></a></p>
									<h4 class="mb-1">Customer Service Hours:</h4>
									<p class="mb-0"><?php the_field('contact_schedule', 'options'); ?></p>
								</div>
							</div>	
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="bg-white p-2 p-lg-5">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-8">
									<h3 class="mb-2">Submit Your Question</h3>
									<div class="bg-light p-2 p-lg-3">
										<?php echo do_shortcode('[gravityform id=2 title=false description=false ajax=true tabindex=49]'); ?>
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
