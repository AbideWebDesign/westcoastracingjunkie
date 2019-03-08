<?php
/**
 * Template Name: Register
 *
 * @package westcoastracingjunkies
 */

get_header();
$shortcode = get_field('plan_shortcode');
?>
<div class="bg-dark text-white">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="mb-0 py-2"><?php the_title(); ?></h3>
			</div>
		</div>
	</div>
</div>

<?php while(have_posts()): the_post(); ?>
	
	<div id="primary" class="content-area bg-light">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bg-white p-2 p-lg-5">
						<div class="container">
							<div class="row">
								<div class="col-lg-8 order-2 order-lg-1">
									<?php echo do_shortcode($shortcode); ?>
								</div>
								<div class="col-lg-4 order-1 order-lg-2 mb-2 mb-lg-0">
									<div class="speed-wrap">
										<h3 class="mb-2 speed speed-alt">Plan Details</h3>
									</div>
									<div class="bg-light p-1">
										<?php the_field('plan_description'); ?>
										<p><strong>Plan Type: </strong> <?php the_field('plan_type'); ?></p>
										<p class="mb-0"><strong>Plan Cost: </strong> <?php the_field('plan_cost'); ?></p>
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
