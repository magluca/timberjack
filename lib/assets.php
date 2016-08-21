<?php 
/**
 * Enqueue scripts and styles.
 */
function timberjack_assets() {
	wp_enqueue_style( 'tj-style', get_template_directory_uri() . '/assets/styles/main.min.css' );
	wp_enqueue_script( 'tj-custom-script', get_template_directory_uri() . '/assets/js/custom.min.js', array(), '20160821', true );
}
add_action( 'wp_enqueue_scripts', 'timberjack_assets' );