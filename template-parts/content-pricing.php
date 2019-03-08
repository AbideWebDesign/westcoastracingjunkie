<div class="row">
	<?php if( have_rows('pricing_tables', 'options') ): ?>
	
		<?php while( have_rows('pricing_tables', 'options') ): the_row(); ?>	
		
			<div class="col-lg-4 align-self-stretch mb-2 mb-lg-0">
				<div class="card card-shadow h-100">
					<div class="bg-dark text-white py-2 text-center text-upper text-sm">
						
						<?php the_sub_field('pricing_table_top'); ?>
					
					</div>
					<div class="d-flex flex-column h-100 p-3">
						
						<div class="mb-2 text-upper text-center "><strong><?php the_sub_field('pricing_table_type'); ?></strong></div>
						<div><h2 class="text-secondary text-center  mb-0">$<?php the_sub_field('pricing_table_cost'); ?></h2></div>
						<div><hr></div>
						<ul class="fa-ul">
							
							<?php while ( have_rows('pricing_table_features') ): the_row(); ?>
							
								<li><span class="fa-li" ><i class="fas fa-check-circle"></i></span><?php the_sub_field('feature'); ?></li>
								
							<?php endwhile; ?>
							
						</ul>
						<div class="mt-auto">
							<a href="<?php the_sub_field('pricing_table_button_link'); ?>" class="btn btn-secondary btn-block"><?php the_sub_field('pricing_table_button_label'); ?></a>
						</div>
					</div>
				</div>
			</div>
			
		<?php endwhile; ?>
	
	<?php endif; ?>
</div>