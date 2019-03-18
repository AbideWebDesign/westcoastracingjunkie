<?php get_template_part('template-parts/content', 'hero'); ?>
					
<?php get_template_part('template-parts/content', 'featured'); ?>

<?php get_full_ad($ad_home_1_full, $ad_home_1_full_image_link, 'dark-light'); ?>

<div class="bg-white py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="mb-3 mb-lg-4 text-center">Upcoming Schedule</h2>
				
				<?php get_template_part('template-parts/content', 'schedule'); ?>
				
				<div class="text-center mt-3 mt-lg-3">
					<a href="<?php echo home_url('/schedule'); ?>" class="btn btn-primary btn-secondary btn-lg"><span>View Upcoming Schedule</span></a>
				</div>						
			</div>
		</div>
	</div>
</div>

<?php get_full_ad($ad_home_2_full, $ad_home_2_full_image_link, 'dark-light'); ?>

<div class="bg-light pt-5 py-md-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="text-center">
					<h2 class="mb-3 mb-xl-4">Pick Your Plan</h2>
				</div>
				
				<?php get_template_part('template-parts/content', 'pricing'); ?>
				
			</div>
		</div>
	</div>
</div>
