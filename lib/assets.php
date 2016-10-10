<?php 
/**
 * Enqueue scripts and styles.
 */
function timberjack_assets() {
	wp_enqueue_style( 'tj-style', get_template_directory_uri() . '/assets/styles/main.min.css' );
	wp_enqueue_script( 'tj-vendors-script', get_template_directory_uri() . '/assets/js/vendors.min.js', array('jquery', 'tj-custom-script'), '20160821', true );
	wp_enqueue_script( 'tj-custom-script', get_template_directory_uri() . '/assets/js/custom.min.js', array('jquery'), '20160821', true );
}
add_action( 'wp_enqueue_scripts', 'timberjack_assets' );