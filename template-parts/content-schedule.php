<?php 
	$date_now = new DateTime();
	$tz = new DateTimeZone('America/Los_Angeles');
	$date_now->setTimeZone($tz);
// 	echo $date_now->format('Y-m-d H:i:s') . '<br>';


	$meta_query = array(
		array(
			'key' => 'broadcast_date',
			'value' => $date_now->format('Y-m-d H:i:s'),
			'type' => 'DATETIME',
			'compare' => '>'
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


<div class="schedule-list container container-gutters">

	<?php while($query->have_posts()): $query->the_post(); ?>
		
		<?php $date = get_field('broadcast_date', false, false); ?>

		<?php $date = new DateTime($date); ?>
		
			<div class="row mb-1 py-3 flex-md-nowrap">
				<div class="col-3 col-md-auto align-self-stretch">
					<div class="bg-dark p-2 text-white text-center">
						<div><?php echo $date->format('M'); ?></div>
						<div><?php echo $date->format('d'); ?></div>
					</div>
				</div>
				<div class="col-9 col-md-auto flex-md-shrink-1 flex-xl-grow-1 align-self-center">
					<h3 class="card-title mb-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<div class="card-foot">
						<ul class="list-inline m-0">
							<li class="list-inline-item"><?php echo $date->format('g:i A'); ?></li>
							<li class="list-inline-item"><i class="fas fa-caret-right text-secondary mr-2"></i> <?php the_field('location'); ?></li>
						</ul>
					</div>
				</div>
				<div class="col-12 col-md-auto align-self-center ml-auto mt-3 mt-md-0">
					<ul class="list-inline m-0">
						
						<?php if ($event_reg = get_field('purchase_event_url')): ?>
						
							<li class="list-inline-item"><a href="<?php echo get_permalink($event_reg->ID); ?>" class="btn btn-success btn-sm">Purchase</a></li>
							
						<?php endif; ?>
						
						<li class="list-inline-item"><a href="<?php the_permalink(); ?>" class="btn btn-secondary btn-sm">Watch Page</a></li>
					</ul>
				</div>
			</div>
		
	<?php endwhile; ?>

</div>