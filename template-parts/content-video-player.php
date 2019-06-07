<div class="bg-dark">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="embed-responsive embed-responsive-16by9">
					<?php the_field('video_embed_code'); ?>
				</div>
				<div class="my-3 text-white">
					<h3><?php the_title(); ?></h3>
					<?php the_field('description'); ?>
				</div>
			</div>
		</div>
	</div>
</div>