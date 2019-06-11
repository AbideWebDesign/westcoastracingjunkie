<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package westcoastracingjunkie
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" href="<?php echo home_url('/wp-content/uploads/favicon.png'); ?>"  type="image/png">
	<script type="text/javascript" src="https://assets.inplayer.com/paywall/latest/paywall.min.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141734405-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	
	  gtag('config', 'UA-141734405-1');
	</script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="search">
		<div id="search-bar">
			<div class="search-bar-inner">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<form role="search" id="sites-search" action="<?php echo site_url('/videos/'); ?>" method="get">
								 <label class="sr-only" for="search-text">Search</label>
								 <input type="text" class="search-field" id="search-text" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="_search">
								 <input type="hidden" name="post_type" value="videos" />
								 <button type="submit" id="ss-icon"><i class="fas fa-search"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<header id="masthead" class="site-header">
		<div id="nav-main" class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-light">	
				<a class="brand" href="<?php echo home_url(); ?>"><img src="<?php echo home_url('/wp-content/uploads/logo.png'); ?>" class="logo" /></a>
				<?php 
					wp_nav_menu( array( 
						'theme_location' => 'menu-1', 
					     'container'       => 'div',
					     'container_id'    => 'menu-primary',
					     'container_class' => 'collapse navbar-collapse d-none d-lg-block',
					     'menu_id'         => false,
					     'menu_class'      => 'navbar-nav m-auto mr-4',
					     'depth'           => 2,
					     'fallback_cb'     => 'bs4Navwalker::fallback',
					     'walker'          => new bs4Navwalker()
						)
					);
				?>
				<div id="menu-account" class="d-none d-xl-block">
					<ul id="menu-account-menu-member" class="navbar-nav"><li id="menu-item-166" class="btn-nav menu-item menu-item-type-post_type menu-item-object-page menu-item-166 nav-item"><a href="#" class="nav-link inplayer-paywall-account">Account</a></li>
						<li id="menu-item-167" class="btn-nav menu-item menu-item-type-custom menu-item-object-custom menu-item-167 nav-item"><a href="#" class="nav-link inplayer-paywall-login">Login</a></li>
						<li id="menu-item-167" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-167 nav-item"><a href="#" class="nav-link inplayer-paywall-logout">Logout</a></li>
						<li id="menu-item-215" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-215 nav-item"><a href="http://westcoastracingjunkies.local/advertise/" class="nav-link">Advertise</a></li>
					</ul>
				</div>
				<div class="py-half px-1 d-none d-xl-inline-block">
					<a href="#" id="search-toggle"><i class="fas fa-search"></i></a>
				</div>
				<?php shiftnav_toggle( 'shiftnav-main' , 'Menu' , array( 'icon' => 'bars' , 'class' => 'shiftnav-toggle-button d-xl-none') ); ?>
			</nav>
		</div>	
	</header><!-- #masthead -->