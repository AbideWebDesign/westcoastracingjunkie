<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package westcoastracingjunkie
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function westcoastracingjunkie_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'westcoastracingjunkie_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function westcoastracingjunkie_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'westcoastracingjunkie_pingback_header' );

function get_full_ad($image, $url, $bg_color) {
	
	$image_html = wp_get_attachment_image($image['id'], 'Ad Full', false, array('class'=>'img-fluid'));
	
	echo 
	'<div class="bg-' . $bg_color . ' py-3">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
					<a href="' . $url . '">' . $image_html . '</a>
				</div>
			</div>
		</div>
	</div>';
}

function videos_archive_overrides( $query ) {
    if ( is_archive( 'videos' ) && $query->is_main_query() && !is_admin()) {
	    
	    $meta_query = array(
			array(
				'key' => 'broadcast_date',
				'value' => date('Y-m-d H:i:s'),
				'type' => 'DATE',
				'compare' => '<='
			)
		);	
        
        $query->set( 'posts_per_page', 9 );
        $query->set( 'meta_query', $meta_query );
        $query->set( 'meta_key', 'broadcast_date' );
        $query->set( 'orderby', 'meta_value' );
        $query->set( 'order', 'ASC' );
    
    }
}
add_filter( 'pre_get_posts', 'videos_archive_overrides' );

function fwp_disable_auto_refresh() {
?>
	<script>
		(function($) {
			$(function() {
				if ('undefined' !== typeof FWP) {
				    FWP.auto_refresh = false;
				}
			});
		})(jQuery);
	</script>
	
<?php
}
add_action( 'wp_head', 'fwp_disable_auto_refresh', 100 );

/*
 * Custom pagination function
 */
function show_pagination_links() {
    global $wp_query;

    $page_tot   = $wp_query->max_num_pages;
    $page_cur   = get_query_var( 'paged' );
    $big        = 999999999;

    if ( $page_tot == 1 ) return;

    echo paginate_links( array(
            'base'      => str_replace( $big, '%#%',get_pagenum_link( 999999999, false ) ), // need an unlikely integer cause the url can contains a number
            'format'    => '?paged=%#%',
            'current'   => max( 1, $page_cur ),
            'total'     => $page_tot,
            'prev_next' => true,
			'prev_text'    => __('&lsaquo; Previous', 'westcoastracingjunkie'),
			'next_text'    => __('Next &rsaquo;', 'westcoastracingjunkie'),
            'end_size'  => 1,
            'mid_size'  => 2,
            'type'      => 'list'
        )
    );
}

/*
 * Bypass logout warning
 */
function change_menu($items){
	
	foreach($items as $item){
	
		if( $item->title == "Logout"){
	
		     $item->url = $item->url . "&_wpnonce=" . wp_create_nonce( 'log-out' ) . '&redirect_to=' . home_url();
	
		}
	
	}
	
	return $items;

}
add_filter('wp_nav_menu_objects', 'change_menu');