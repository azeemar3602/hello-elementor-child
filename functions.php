<?php
/**
 * Hello Elementor Child — functions.php
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

/**
 * Enqueue parent + child styles, and landing-page JS.
 */
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_assets', 20 );
function hello_elementor_child_assets() {
	wp_enqueue_style(
		'parent-style',
		get_template_directory_uri() . '/style.css'
	);
	wp_enqueue_style(
		'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( 'parent-style' ),
		wp_get_theme()->get( 'Version' )
	);

	// Google Fonts — Inter (matches Axion's clean sans-serif look).
	wp_enqueue_style(
		'ax-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap',
		array(),
		null
	);

	// Landing page interactivity (tabs, FAQ, mobile nav, sticky header).
	if ( is_front_page() ) {
		wp_enqueue_script(
			'ax-landing',
			get_stylesheet_directory_uri() . '/assets/js/landing.js',
			array(),
			wp_get_theme()->get( 'Version' ),
			true
		);
	}
}

/**
 * Make sure the front-page.php template is used even when the homepage is
 * set to "static page" — fall back to latest-posts behavior is automatic.
 * Nothing extra needed here; WordPress picks up front-page.php automatically.
 */
