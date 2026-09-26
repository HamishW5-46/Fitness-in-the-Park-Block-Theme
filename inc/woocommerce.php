<?php
/**
 * WooCommerce integration.
 *
 * @package FitnessInThePark
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register WooCommerce and product gallery support.
 */
function fitp_woocommerce_setup() {
	add_theme_support(
		'woocommerce',
		array(
			'thumbnail_image_width' => 600,
			'single_image_width'    => 900,
			'product_grid'          => array(
				'default_rows'    => 3,
				'min_rows'        => 1,
				'max_rows'        => 8,
				'default_columns' => 3,
				'min_columns'     => 1,
				'max_columns'     => 4,
			),
		)
	);
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_editor_style( 'assets/css/woocommerce.css' );
}
add_action( 'after_setup_theme', 'fitp_woocommerce_setup', 20 );

/**
 * Load store styles only while WooCommerce is active.
 */
function fitp_enqueue_woocommerce_styles() {
	if ( ! class_exists( 'WooCommerce' ) ) {
		return;
	}

	$style_path = get_theme_file_path( '/assets/css/woocommerce.css' );
	$version    = file_exists( $style_path ) ? filemtime( $style_path ) : wp_get_theme()->get( 'Version' );

	wp_enqueue_style(
		'fitness-in-the-park-woocommerce',
		get_theme_file_uri( '/assets/css/woocommerce.css' ),
		array( 'fitness-in-the-park-style' ),
		$version
	);
}
add_action( 'wp_enqueue_scripts', 'fitp_enqueue_woocommerce_styles', 20 );
