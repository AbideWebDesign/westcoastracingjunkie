<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package westcoatsracingjunkie
 */

?>
	<div id="email-signup" class="content-area-footer bg-dark">
		<div class="container">
			<div class="row justify-content-lg-end">
				<div class="col-lg-6 py-4">
					<h2 class="text-success mb-2"><?php the_field('email_signup_title', 'options'); ?></h2>
					<p class="text-lg text-white"><?php the_field('email_signup_text', 'options'); ?></p>
					<?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
				</div>
			</div>
		</div>
	</div>
	<footer class="site-footer py-4 bg-light">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-auto text-center text-lg-left mb-4 mb-lg-0">
					<a class="brand" href="<?php echo home_url(); ?>"><img src="<?php echo home_url('/wp-content/uploads/logo.png'); ?>" class="logo" /></a>
					<div class="social d-flex justify-content-center mt-2">
						<div class="pr-2"><a href="https://www.facebook.com/westcoast.racingjunkie" target="_blank"><i class="fab fa-2x fa-facebook"></i></a></div>
						<div class="pr-2"><a href="https://twitter.com/WRacingjunkie" target="_blank"><i class="fab fa-2x fa-twitter"></i></a></div>
						<div><a href="https://www.instagram.com/westcoastracingjunkie/" target="_blank"><i class="fab fa-2x fa-instagram"></i></a></div>
					</div>
				</div>
				<div class="col-6 col-lg-auto">
					<div class="text-upper mb-2"><strong>Quick Links</strong></div>
					<?php 
					wp_nav_menu( array( 
						'theme_location' => 'menu-2', 
					     'container'       => 'div',
					     'container_id'    => 'footer-menu-1',
					     'container_class' => 'footer-menu',
					     'menu_id'         => false,
					     'menu_class'      => 'fa-ul mb-lg-0',
					     'link_before'	   => '<span class="fa-li"><i class="fas fa-caret-right"></i></span> ',
					     'depth'           => 1,
						)
					);
				?>
				</div>
				<div class="col-6 col-lg-auto pl-lg-4">
					<div class="text-upper mb-2"><strong>Account</strong></div>
					<?php 
					wp_nav_menu( array( 
						'theme_location' => 'menu-3', 
					     'container'       => 'div',
					     'container_id'    => 'footer-menu-2',
					     'container_class' => 'footer-menu',
					     'menu_id'         => false,
					     'menu_class'      => 'fa-ul mb-lg-0',
					     'link_before'	   => '<span class="fa-li"><i class="fas fa-caret-right"></i></span> ',
					     'depth'           => 1,
						)
					);
				?>
				</div>
				<div class="col-auto flex-grow-1 p-0 pl-lg-4 mt-3 mt-lg-0 align-self-center">
					<div class="footer-box text-center text-white text-lg-left">
						<div class="row align-items-center h-100">
							<div class="col-lg-auto mb-1 mb-lg-0">
								<div class="footer-box-title text-white mb-1">Contact Customer Care</div>
								<div class="text-sm"><?php the_field('contact_schedule', 'options'); ?></div>
							</div>
							<div class="col-lg-auto mb-1 mb-lg-0 text-sm">
								<div class="mb-1"><i class="fas fa-phone text-white"></i> <?php the_field('contact_phone', 'options'); ?></div>
								<div><i class="fas fa-envelope text-white"></i> <a href="mailto:<?php the_field('contact_email', 'options'); ?>"><?php the_field('contact_email', 'options'); ?></a></div>
							</div>
						</div>
					</div>						
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
