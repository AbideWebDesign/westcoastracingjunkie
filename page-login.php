<?php
/**
 * Template Name: Login
 *
 * @package westcoastracingjunkies
 */

get_header();
?>
<?php get_template_part('template-parts/content', 'title-bar'); ?>

<?php while(have_posts()): the_post(); ?>
	
	<div id="primary" class="content-area bg-light">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bg-white p-2 p-lg-5">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-6 order-2 order-lg-1">
									
									<?php if (!is_user_logged_in()): ?>
									
										<div class="speed-wrap">
											<h3 class="mb-2 speed speed-alt">Login to Account</h3>
										</div>
										
										<?php the_content(); ?>
										
									<?php else: ?>
									
										<div class="speed-wrap">
											<h3 class="mb-2 speed speed-alt">Purchase Access</h3>
										</div>
										<div class="bg-light p-2">
											<?php the_field('obtain_access_description'); ?>
											<ul class="list-inline m-0">
												<li class="list-inline-item"><a href="<?php echo home_url('/schedule'); ?>" class="btn btn-success">Purchase Event</a></li>
												<li class="list-inline-item"><a href="<?php echo home_url('/plans'); ?>" class="btn btn-secondary">Membership Plans</a></li>
											</ul>
										</div>
										
									<?php endif; ?>
								
								</div>
								
								<?php if (!is_user_logged_in()): ?>
								
									<div class="col-lg-6 order-1 order-lg-2 mb-2 mb-lg-0">
										<div class="speed-wrap">
											<h3 class="mb-2 speed speed-alt">Setup Account</h3>
										</div>
										<div class="bg-light p-2">
											<?php the_field('setup_description'); ?>
											<a href="<?php echo home_url('/plans'); ?>" class="btn btn-success">Membership Plans</a>
										</div>
									</div>
									
								<?php endif; ?>
								
							</div>
							<div class="row">
								<div class="col-12">
									<div class="bg-light p-2 mt-4 text-center text-sm pmb-0">
										<?php the_field('help_description'); ?>
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
