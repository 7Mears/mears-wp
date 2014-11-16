<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Mears Theme' );
define( 'CHILD_THEME_URL', 'http://www.jordanmears.com/' );
define( 'CHILD_THEME_VERSION', '1.0' );

//* Enqueue Google Fonts
add_action( 'wp_enqueue_scripts', 'mears_google_fonts' );
function mears_google_fonts() {

	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Montserrat', array(), 1.0 );
}

//* Add custom Viewport meta tag for mobile browsers
add_action( 'genesis_meta', 'sp_viewport_meta_tag' );
function sp_viewport_meta_tag() {
	echo '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
}

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

//* Add new image sizes
add_image_size( 'portfolio-section', 800, '800', TRUE );

//* Register widget areas
genesis_register_sidebar( array(
	'id'          => 'hero-section',
	'name'        => __( 'Hero Section', 'mears' ),
	'description' => __( 'This is the first section of the home page.', 'mears' ),
) );
genesis_register_sidebar( array(
	'id'          => 'portfolio-section',
	'name'        => __( 'Portfolio Section', 'mears' ),
	'description' => __( 'This is the fourth section of the home page.', 'mears' ),
) );

//* Customize the post info function
add_filter( 'genesis_post_info', 'sp_post_info_filter' );
function sp_post_info_filter($post_info) {
if ( !is_page() ) {
	$post_info = ' ';
	return $post_info;
}}

//* Remove support for 3-column footer widgets
remove_theme_support( 'genesis-footer-widgets', 1 );
//* Remove the entry meta in the entry footer (requires HTML5 theme support)
remove_action( 'genesis_entry_footer', 'genesis_post_meta' );
/** Remove default sidebar */
remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );
//* Unregister secondary sidebar
unregister_sidebar( 'sidebar-alt' );
//* Unregister layout settings
genesis_unregister_layout( 'content-sidebar' );
genesis_unregister_layout( 'sidebar-content' );
genesis_unregister_layout( 'content-sidebar-sidebar' );
genesis_unregister_layout( 'sidebar-content-sidebar' );
genesis_unregister_layout( 'sidebar-sidebar-content' );


//* Removes some in-line styling
add_action( 'widgets_init', 'my_remove_recent_comments_style' );
function my_remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'  ) );
}


//* Customize the credits
add_filter( 'genesis_footer_creds_text', 'sp_footer_creds_text' );
function sp_footer_creds_text() {
	echo '<div class="creds"><p>';
	echo 'Copyright &copy; ';
	echo date('Y');
	echo ' &middot; <a href="http://www.jordanmears.com">Jordan Mears</a> ';
	echo '</p></div>';
}
