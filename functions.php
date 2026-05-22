<?php
/**
 * Hello Elementor Child — functions.php
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

/**
 * Theme setup — title-tag support so WordPress controls <title>.
 */
add_action( 'after_setup_theme', 'hello_elementor_child_setup' );
function hello_elementor_child_setup() {
	add_theme_support( 'title-tag' );
}

/**
 * Filter the document <title> using $GLOBALS['ax_seo']['title'] when set.
 * Priority 5 runs before most SEO plugins (priority 10), so plugins still win
 * when active (they re-filter at their own priority and override us).
 */
add_filter( 'document_title_parts', function ( $parts ) {
	$seo = isset( $GLOBALS['ax_seo'] ) ? $GLOBALS['ax_seo'] : array();
	if ( ! empty( $seo['title'] ) ) {
		return array( 'title' => $seo['title'] );
	}
	return $parts;
}, 5 );

/**
 * Enqueue parent + child styles, Google Font (Inter), and landing JS.
 * JS is loaded on every axion page (all templates share the same nav/tabs).
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
	wp_enqueue_style(
		'ax-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap',
		array(),
		null
	);
	wp_enqueue_script(
		'ax-landing',
		get_stylesheet_directory_uri() . '/assets/js/landing.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
