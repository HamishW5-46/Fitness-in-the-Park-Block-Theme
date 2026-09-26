<?php
/**
 * Seed starter pages for the local Fitness in the Park site.
 *
 * Run with:
 * wp eval-file wp-content/themes/fitness-in-the-park/tools/seed-content.php
 *
 * @package FitnessInThePark
 */

$pages = array(
	'home' => array(
		'title'   => 'Home',
		'content' => '<!-- wp:paragraph --><p>Welcome to Fitness in the Park.</p><!-- /wp:paragraph -->',
	),
	'about' => array(
		'title'   => 'About',
		'content' => '<!-- wp:group {"className":"fitp-detail-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} --><div class="wp-block-group fitp-detail-card has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"className":"fitp-eyebrow"} --><p class="fitp-eyebrow">Holistic fitness in Goulburn</p><!-- /wp:paragraph --><!-- wp:heading --><h2 class="wp-block-heading">More than a number on a scale.</h2><!-- /wp:heading --><!-- wp:paragraph {"fontSize":"large"} --><p class="has-large-font-size">Fitness in the Park takes a whole-person approach to training: physical, emotional and mental wellbeing all matter.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Ange encourages and motivates women in a fun, inspiring way, with fresh air whenever possible and a laugh along the way.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>The focus is simple: helping you become the strongest and fittest woman you can be.</p><!-- /wp:paragraph --></div><!-- /wp:group -->',
	),
	'fit-tribe' => array(
		'title'   => 'Fit Tribe',
		'content' => '<!-- wp:paragraph {"className":"fitp-eyebrow"} --><p class="fitp-eyebrow">Six-week group challenge</p><!-- /wp:paragraph --><!-- wp:heading --><h2 class="wp-block-heading">Fresh 45-minute sessions with a supportive crew.</h2><!-- /wp:heading --><!-- wp:paragraph {"fontSize":"large"} --><p class="has-large-font-size">Fit Tribe blends strength, cardio, functional fitness and community for women who want efficient training that fits busy life.</p><!-- /wp:paragraph --><!-- wp:columns --><div class="wp-block-columns"><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3} --><h3 class="wp-block-heading">When</h3><!-- /wp:heading --><!-- wp:list --><ul class="wp-block-list"><!-- wp:list-item --><li>Monday to Friday mornings at 6:00am</li><!-- /wp:list-item --><!-- wp:list-item --><li>Monday evening at 5:15pm</li><!-- /wp:list-item --><!-- wp:list-item --><li>Wednesday evening at 4:30pm</li><!-- /wp:list-item --></ul><!-- /wp:list --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Where</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Girl Guide Grounds, Victoria Park. Enter via Faithful Street next to the dog park.</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:heading {"level":3} --><h3 class="wp-block-heading">What to expect</h3><!-- /wp:heading --><!-- wp:list --><ul class="wp-block-list"><!-- wp:list-item --><li>AMRAP, EMOM, chippers and circuit formats</li><!-- /wp:list-item --><!-- wp:list-item --><li>Team, partner and individual challenges</li><!-- /wp:list-item --><!-- wp:list-item --><li>Barbells, slam balls, kettlebells, sandbags, battle ropes and bodyweight movements</li><!-- /wp:list-item --><!-- wp:list-item --><li>Outdoor training whenever possible, with indoor heated hall options in cooler months</li><!-- /wp:list-item --></ul><!-- /wp:list --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/bookings/">Book Fit Tribe</a></div><!-- /wp:button --></div><!-- /wp:buttons -->',
	),
	'fit-functional' => array(
		'title'   => 'Fit & FUN-ctional',
		'content' => '<!-- wp:paragraph {"className":"fitp-eyebrow"} --><p class="fitp-eyebrow">It is never too late to feel great</p><!-- /wp:paragraph --><!-- wp:heading --><h2 class="wp-block-heading">Move with purpose, confidence and a smile.</h2><!-- /wp:heading --><!-- wp:paragraph {"fontSize":"large"} --><p class="has-large-font-size">Fit &amp; FUN-ctional is a 45-minute session for people who value staying active, capable and confident at any stage of life.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>With a focus on functional movement, these sessions help build strength, balance and mobility that supports everyday living.</p><!-- /wp:paragraph --><!-- wp:list --><ul class="wp-block-list"><!-- wp:list-item --><li>Low-impact, joint-friendly movements</li><!-- /wp:list-item --><!-- wp:list-item --><li>Balance, mobility and everyday strength</li><!-- /wp:list-item --><!-- wp:list-item --><li>Simple routines that support real-life activities</li><!-- /wp:list-item --><!-- wp:list-item --><li>Encouragement to go at your own pace</li><!-- /wp:list-item --><!-- wp:list-item --><li>A relaxed, supportive vibe with no pressure</li><!-- /wp:list-item --></ul><!-- /wp:list --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/bookings/">Book Fit &amp; FUN-ctional</a></div><!-- /wp:button --></div><!-- /wp:buttons -->',
	),
	'ndis-training' => array(
		'title'   => 'NDIS Training',
		'content' => '<!-- wp:paragraph {"className":"fitp-eyebrow"} --><p class="fitp-eyebrow">Inclusive personal training</p><!-- /wp:paragraph --><!-- wp:heading --><h2 class="wp-block-heading">Fitness support shaped around the person.</h2><!-- /wp:heading --><!-- wp:paragraph {"fontSize":"large"} --><p class="has-large-font-size">Fitness in the Park provides inclusive fitness services in Goulburn, including support for NDIS participants.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Training can be tailored around confidence, mobility, strength, health needs, communication preferences and support requirements.</p><!-- /wp:paragraph --><!-- wp:columns --><div class="wp-block-columns"><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Support can include</h3><!-- /wp:heading --><!-- wp:list --><ul class="wp-block-list"><!-- wp:list-item --><li>Goal-focused personal training</li><!-- /wp:list-item --><!-- wp:list-item --><li>Safe movement progressions</li><!-- /wp:list-item --><!-- wp:list-item --><li>Confidence and routine building</li><!-- /wp:list-item --><!-- wp:list-item --><li>Coordination with family, carers or support coordinators where appropriate</li><!-- /wp:list-item --></ul><!-- /wp:list --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Start with a conversation</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Send a message about goals, access needs and what support would make training feel safe and achievable.</p><!-- /wp:paragraph --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/">Ask about NDIS training</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:column --></div><!-- /wp:columns -->',
	),
	'bookings' => array(
		'title'   => 'Bookings',
		'content' => '<!-- wp:paragraph {"className":"fitp-eyebrow"} --><p class="fitp-eyebrow">Book a session</p><!-- /wp:paragraph --><!-- wp:heading --><h2 class="wp-block-heading">Choose a class or ask what suits you.</h2><!-- /wp:heading --><!-- wp:paragraph {"fontSize":"large"} --><p class="has-large-font-size">Use the client booking system for classes and appointments, or contact Ange if you are not sure where to begin.</p><!-- /wp:paragraph --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://fitnessinthepark.com.au/bookings/">Open current bookings</a></div><!-- /wp:button --><!-- wp:button {"backgroundColor":"surface","textColor":"contrast","style":{"border":{"width":"1px","color":"#2b2230"}}} --><div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-surface-background-color has-text-color has-background has-border-color wp-element-button" href="/contact/" style="border-color:#2b2230;border-width:1px">Contact first</a></div><!-- /wp:button --></div><!-- /wp:buttons -->',
	),
	'contact' => array(
		'title'   => 'Contact',
		'content' => '<!-- wp:paragraph {"className":"fitp-eyebrow"} --><p class="fitp-eyebrow">Send Ange a message</p><!-- /wp:paragraph --><!-- wp:heading --><h2 class="wp-block-heading">Ask about personal training, group classes or NDIS support.</h2><!-- /wp:heading --><!-- wp:paragraph {"fontSize":"large"} --><p class="has-large-font-size">Share a little about your goals and Ange can help you choose the next right step.</p><!-- /wp:paragraph --><!-- wp:group {"className":"fitp-detail-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} --><div class="wp-block-group fitp-detail-card has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Enquiry details</h3><!-- /wp:heading --><!-- wp:paragraph --><p>For the production site, connect this page to the preferred WordPress form plugin or booking CRM. On this local build, the primary action routes visitors toward bookings.</p><!-- /wp:paragraph --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/bookings/">Go to bookings</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:group -->',
	),
	'privacy-policy' => array(
		'title'   => 'Privacy Policy',
		'content' => '<!-- wp:paragraph --><p>Fitness in the Park respects your privacy and handles personal information with care. Replace this starter page with the current approved privacy policy before launch.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Fitness in the Park provides personal training, group fitness and inclusive fitness services in Goulburn, New South Wales.</p><!-- /wp:paragraph -->',
	),
);

foreach ( $pages as $slug => $page ) {
	$existing = get_page_by_path( $slug, OBJECT, 'page' );
	$postarr  = array(
		'post_title'   => $page['title'],
		'post_name'    => $slug,
		'post_type'    => 'page',
		'post_status'  => 'publish',
		'post_content' => $page['content'],
	);

	if ( $existing ) {
		$postarr['ID'] = $existing->ID;
		$page_id       = wp_update_post( $postarr, true );
	} else {
		$page_id = wp_insert_post( $postarr, true );
	}

	if ( is_wp_error( $page_id ) ) {
		WP_CLI::warning( sprintf( 'Could not save %s: %s', $page['title'], $page_id->get_error_message() ) );
		continue;
	}

	WP_CLI::log( sprintf( 'Saved page: %s', $page['title'] ) );
}

$home = get_page_by_path( 'home', OBJECT, 'page' );

if ( $home ) {
	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $home->ID );
	WP_CLI::success( 'Set Home as the static front page.' );
}
