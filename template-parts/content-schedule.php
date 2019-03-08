<?php 

	$meta_query = array(
		array(
			'key' => 'broadcast_date',
			'value' => date('Y-m-d H:i:s'),
			'type' => 'DATE',
			'compare' => '>='
		)
	);
	
	$args = array (
		'post_type' => 'videos',
		'posts_per_page' => 10,
		'post_status' => 'publish',
		'meta_query' => $meta_query,
		'meta_key' => 'broadcast_date',
		'orderby' => 'meta_value',
		'order' => 'ASC',
	);
	
	$query = new WP_Query($args);

?>


<div class="schedule-list container">

	<?php while($query->have_posts()): $query->the_post(); ?>
		
		<?php $date = get_field('broadcast_date', false, false); ?>
	
		<?php $date = new DateTime($date); ?>
		
			<div class="row mb-1 py-3">
				<div class="col-auto align-self-stretch">
					<div class="bg-dark p-2 text-white text-center">
						<div><?php echo $date->format('M'); ?></div>
						<div><?php echo $date->format('d'); ?></div>
					</div>
				</div>
				<div class="col-auto flex-grow-1 align-self-center">
					<h3 class="card-title mb-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<div class="card-foot">
						<ul class="list-inline m-0">
							<li class="list-inline-item"><?php echo $date->format('g:i A'); ?></li>
							<li class="list-inline-item"><i class="fas fa-caret-right text-secondary mr-2"></i> <?php the_field('location'); ?></li>
						</ul>
					</div>
				</div>
				<div class="col-auto align-self-center text-right d-none d-lg-block">
					<ul class="list-inline m-0">
						
						<?php if (get_field('purchase_event_url')): ?>
						
							<li class="list-inline-item"><a href="<?php the_field('purchase_event_url'); ?>" class="btn btn-success btn-sm">Purchase Event</a></li>
							
						<?php endif; ?>
						
						<li class="list-inline-item"><a href="<?php the_permalink(); ?>" class="btn btn-secondary btn-sm">Watch Page</a></li>
					</ul>
				</div>
			</div>
		
	<?php endwhile; ?>

</div>