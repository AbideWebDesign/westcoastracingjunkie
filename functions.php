<?php
/**
 * westcoastracingjunkie functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package westcoastracingjunkie
 */

require WP_CONTENT_DIR . '/plugins/plugin-update-checker-master/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/AbideWebDesign/westcoastracingjunkie',
	__FILE__,
	'westcoastracingjunkie'
);

if ( ! function_exists( 'westcoastracingjunkie_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function westcoastracingjunkie_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on westcoastracingjunkie, use a find and replace
		 * to change 'westcoastracingjunkie' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'westcoastracingjunkie', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'westcoastracingjunkie' ),
			'menu-account' => esc_html__( 'Account Menu - Guest', 'westcoastracingjunkie' ),
			'menu-account-member' => esc_html__( 'Account Menu - Member', 'westcoastracingjunkie' ),
			'menu-2' => esc_html__( 'Footer 1', 'westcoastracingjunkie' ),
			'menu-3' => esc_html__( 'Footer 2', 'westcoastracingjunkie' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		
		
		function remove_wp_nodes() {
		    global $wp_admin_bar;   
		    $wp_admin_bar->remove_node( 'wp-logo' );
		    $wp_admin_bar->remove_node( 'new-post' );
		    $wp_admin_bar->remove_menu( 'customize' );
		}
		add_action( 'admin_bar_menu', 'remove_wp_nodes', 999 );

		function remove_menus() {
			remove_menu_page( 'edit.php' );
		}
		add_action( 'admin_menu', 'remove_menus' );
		
		add_action( 'get_footer' , 'my_shiftnav_api' );
		
		function my_shiftnav_api(){
		    shiftnav( 'shiftnav-main' );
		}
	}
endif;
add_action( 'after_setup_theme', 'westcoastracingjunkie_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function westcoastracingjunkie_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'westcoastracingjunkie_content_width', 640 );
}
add_action( 'after_setup_theme', 'westcoastracingjunkie_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function westcoastracingjunkie_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'westcoastracingjunkie' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'westcoastracingjunkie' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'westcoastracingjunkie_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function westcoastracingjunkie_scripts() {
	$theme = wp_get_theme();

	wp_deregister_script( 'jquery' );
	
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-2.2.4.min.js', false, null );
	
	wp_enqueue_script( 'jquery' );
	
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '', true );
	
	wp_enqueue_script( 'core', get_template_directory_uri() . '/js/core-min.js', $theme->version, '', true );
	
	wp_enqueue_script( 'westcoastracingjunkie-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '', true );
	
	wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css' );
	
	wp_enqueue_style( 'westcoastracingjunkie-style', get_stylesheet_uri(), false, $theme->version );

	wp_enqueue_style( 'westcoastracingjunkie-fonts', 'https://fonts.googleapis.com/css?family=Nunito:400,700,800|Oswald:400,700' );
	
}
add_action( 'wp_enqueue_scripts', 'westcoastracingjunkie_scripts' );

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Image sizes
 */
add_image_size('col-3', 295);
add_image_size('col-4', 434);
add_image_size('col-5', 542);
add_image_size('col-6', 650);
add_image_size('col-7', 759);
add_image_size('Video Thumbnail', 434, 220, true);
add_image_size('Ad Full', 870, 70, true);
add_image_size('Ad Sidebar', 260, 80, true);
add_image_size('Ad Sidebar Sponsor', 260, 170, true);
add_image_size('Hero Banner', 1800, 600, true);
add_image_size('Title Banner', 1600, 300, true);

/**
 * Add Bootstrap 4 Nav walker
 */
require_once("bs4Navwalker.php");

/**
 * Plugin: ACF Options page
 */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Global Fields',
		'menu_title'	=> 'Global Fields',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_page(array(
		'page_title' 	=> 'Ad Manager',
		'menu_title'	=> 'Ad Manager',
		'menu_slug' 	=> 'ad_manager',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );

function add_specific_menu_location_atts( $atts, $item, $args ) {
    // check if the item is in the primary menu
    if( $item->title == 'Account' ) {
      // add the desired attributes:
      $atts['class'] = 'inplayer-paywall-login';
    }
    return $atts;
}