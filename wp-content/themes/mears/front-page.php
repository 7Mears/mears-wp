<?php
/**
 * This file adds the Home Page to the Mears Theme.
 *
 * @author Jordan Mears
 * @package Mears
 * @subpackage Customizations
 */
 
add_action( 'wp_enqueue_scripts', 'mears_enqueue_home_scripts' );
/**
 * Enqueue Scripts
 */
function mears_enqueue_home_scripts() {

	wp_enqueue_script( 'mears-home', get_bloginfo( 'stylesheet_directory' ) . '/js/home.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'localScroll', get_stylesheet_directory_uri() . '/js/jquery.localScroll.min.js', array( 'scrollTo' ), '1.2.8b', true );
	wp_enqueue_script( 'scrollTo', get_stylesheet_directory_uri() . '/js/jquery.scrollTo.min.js', array( 'jquery' ), '1.4.5-beta', true );
 	
}

add_action( 'genesis_meta', 'mears_home_genesis_meta' );
/**
 * Add widget support for homepage. If no widgets active, display the default loop.
 *
 */
function mears_home_genesis_meta() {

	if ( is_active_sidebar( 'hero-section' ) || is_active_sidebar( 'about-section' ) || is_active_sidebar( 'portfolio-section' ) ) {

		//* Force full width content layout
		add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

		//* Add mears-pro-home body class
		add_filter( 'body_class', 'mears_body_class' );
		
		//* Remove breadcrumbs
		remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );

		//* Remove the default Genesis loop
		remove_action( 'genesis_loop', 'genesis_do_loop' );
		
		//* Add home featured widget
		add_action( 'genesis_after_header', 'mears_home_featured_widget', 1 );
		
		//* Add home widgets
		add_action( 'genesis_before_footer', 'mears_home_widgets', 5 );
		
	}
}

function mears_body_class( $classes ) {

	$classes[] = 'mears-pro-home';
	return $classes;
	
}

function mears_home_featured_widget() {

	genesis_widget_area( 'hero-section', array(
		'before' => '<div id="hero" class="hero-section"><div class="wrap">',
		'after'  => '</div></div>',
	) );
	
}

function mears_home_widgets() {

	echo '<div id="home-widgets" class="home-widgets">';
	
	genesis_widget_area( 'portfolio-section', array(
		'before' => '<div id="portfolio" class="portfolio-section wrap">',
		'after'  => '</div>',
	) );
	
	genesis_widget_area( 'about-section', array(
		'before' => '<div id="about" class="about-section wrap">',
		'after'  => '</div>',
	) );

	echo '</div>';

}

genesis();