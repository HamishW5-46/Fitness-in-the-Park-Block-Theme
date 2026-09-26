<?php
/**
 * PTminder booking and client login integrations.
 *
 * @package FitnessInThePark
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Load PTminder presentation styles on the integration pages.
 */
function fitp_enqueue_ptminder_styles() {
	if ( ! is_page( array( 'bookings', 'client-login' ) ) ) {
		return;
	}

	$style_path = get_theme_file_path( '/assets/css/ptminder.css' );
	$version    = file_exists( $style_path ) ? filemtime( $style_path ) : wp_get_theme()->get( 'Version' );

	wp_enqueue_style(
		'fitness-in-the-park-ptminder',
		get_theme_file_uri( '/assets/css/ptminder.css' ),
		array( 'fitness-in-the-park-style' ),
		$version
	);
}
add_action( 'wp_enqueue_scripts', 'fitp_enqueue_ptminder_styles', 20 );

/**
 * Render the PTminder class scheduler.
 *
 * @return string
 */
function fitp_bookings_shortcode() {
	return sprintf(
		'<div class="fitp-bookings-embed"><iframe class="fitp-bookings-iframe" src="%1$s" title="%2$s" width="100%%" height="1245"></iframe></div>',
		esc_url( 'https://ptminder.com/frame/get-class-scheduler?webaddr=fitnessinthepark' ),
		esc_attr__( 'Fitness in the Park class bookings', 'fitness-in-the-park' )
	);
}
add_shortcode( 'fitp_bookings', 'fitp_bookings_shortcode' );

/**
 * Render the PTminder client login and load its form script in the footer.
 *
 * @return string
 */
function fitp_client_login_shortcode() {
	wp_enqueue_script(
		'fitness-in-the-park-ptminder-login',
		'https://ptminder.com/website/extform/?guid=mJudsaPlytrXyM8=&st[]=sign_up&st[]=forgot_password&st[]=keep_logged',
		array(),
		null,
		true
	);

	return '<div class="fitp-client-login-card"><div id="ptminder-client-login" class="fitp-client-login-form" aria-live="polite"></div></div>';
}
add_shortcode( 'fitp_client_login', 'fitp_client_login_shortcode' );
