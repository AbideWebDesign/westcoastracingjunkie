<?php
/**
 * Template Name: Support
 *
 * @package westcoastracingjunkies
 */

get_header();
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
							<div class="row justify-content-center">
								<div class="col-lg-12">
									
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
