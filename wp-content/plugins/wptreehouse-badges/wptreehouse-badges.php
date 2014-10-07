<?php 
/*
 * Plugin Name: Mears Treehouse Badges Plugin
 * Plugin URI: http://wptreehouse.com/wptreehouse-badges-plugin/
 * Description: Provides both widgets and shortcodes to help you display your Treehouse profile badges on your website
 * Version: 1.0
 * Author: Jordan Mears
 * Author URI: http://www.jordanmears.com
 * License: GPL2
 *
*/

/*
 * Add a link to our plugin in the admin menu
 * under 'Settings > Treehouse Badges'
 *
*/

function wptreehouse_badges_menu() {
	
	/*
	 * Use the add_options_page function
	 * add_options_page( $page_title, $menu_title, $capability, $menu-slug, $function )
	 *
	*/
	
	add_options_page (
		'Mears Treehouse Badges Plugin',
		'Treehouse Badges',
		'manage_options',
		'wptreehouse-badges',
		'wptreehouse_badges_options_page'
	);
	
}

add_action( 'admin_menu', 'wptreehouse_badges_menu' );


	function wptreehouse_badges_options_page() {

	if( !current_user_can( 'manage_options' ) ) {
	
		wp_die( 'You do not have sufficient permissions to access this page.' );
	
	}
	
	echo '<p>Welcome to our plugin page!</p>';
	
}




?>