<?php
/**
 * Theme setup for Fitness in the Park.
 *
 * @package FitnessInThePark
 */

if ( ! function_exists( 'fitp_setup' ) ) {
	/**
	 * Register theme supports and editor styles.
	 */
	function fitp_setup() {
		add_theme_support( 'wp-block-styles' );
		add_editor_style(
			array(
				'style.css',
			)
		);
	}
}
add_action( 'after_setup_theme', 'fitp_setup' );

/**
 * Enqueue the theme stylesheet on the front end with dynamic versioning.
 */
function fitp_enqueue_styles() {
	// Path to the main style.css file on the server.
	$style_path = get_stylesheet_directory() . '/style.css';
	
	// Check if the file exists before running filemtime to avoid PHP errors.
	$version = file_exists( $style_path ) ? filemtime( $style_path ) : '1.0.0';

	wp_enqueue_style(
		'fitness-in-the-park-style',
		get_stylesheet_uri(),
		array(),
		$version
	);
}
add_action( 'wp_enqueue_scripts', 'fitp_enqueue_styles' );
