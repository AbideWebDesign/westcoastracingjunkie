<?php get_template_part('template-parts/content', 'hero'); ?>
					
<?php get_template_part('template-parts/content', 'featured'); ?>

<?php if (get_field('ad_full_width_1_ad_image', 'options')): ?>

	<?php get_full_ad(get_field('ad_full_width_1_ad_image', 'options'), get_field('ad_full_width_1_ad_link', 'options'), 'dark-light'); ?>
	
<?php endif; ?>

<div class="bg-white py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="mb-3 mb-lg-4 text-center">Full Schedule</h2>
				
				<?php get_template_part('template-parts/content', 'schedule'); ?>
				
<!--
				<div class="text-center mt-3 mt-lg-3">
					<a href="<?php echo home_url('/schedule'); ?>" class="btn btn-primary btn-secondary btn-lg"><span>View Upcoming Schedule</span></a>
				</div>	
-->					
			</div>
		</div>
	</div>
</div>

<?php if (get_field('ad_full_width_2_ad_image', 'options')): ?>
	
	<?php get_full_ad(get_field('ad_full_width_2_ad_image', 'options'), get_field('ad_full_width_2_ad_link', 'options'), 'dark-light'); ?>
	
<?php endif; ?>


<!--
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
-->
