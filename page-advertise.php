<?php
/**
 * Template Name: Advertise
 *
 * @package westcoastracingjunkies
 */

get_header();
?>

<?php get_template_part('template-parts/content', 'title-bar'); ?>

<?php while(have_posts()): the_post(); ?>
	
	<div id="primary" class="content-area">
		<div class="container-fluid p-0">
			<div class="row no-gutters">
				<div class="col-md-10 col-lg-10 col-xl-9 p-3 py-xl-5 pl-xl-5 bs bsr">
					<div class="pl-xl-5">	
						<div class="row">
							<div class="col-md-8 col-xl-9">											
								<h2 class="mb-2"><?php the_title(); ?></h2>
								<div class="mb-3"><?php the_content(); ?></div>
								<h3 class="mb-2">Inquire about Advertising</h3>
								<div class="bg-light p-2 p-lg-3">
									<?php echo do_shortcode('[gravityform id=3 title=false description=false ajax=true tabindex=49]'); ?>
								</div>
							</div>
							<div class="col-md-4 col-xl-3 d-none d-md-block">
								<?php echo wp_get_attachment_image(get_field('advertise_image'), 'full', false, array('class'=>'img-fluid')); ?>
							</div>
						</div>
					</div>
				</div>

				<?php get_template_part('template-parts/sidebar', 'default'); ?>
			
			</div>
		</div>
	</div>
	
<?php endwhile; ?>
	
<?php
get_footer();
