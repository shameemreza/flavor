<?php
/**
 * Enqueue theme assets.
 *
 * @package flavor
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue scripts and styles.
 *
 * @since 1.0.0
 * @return void
 */
function flavor_scripts() {
	// Main stylesheet.
	wp_enqueue_style(
		'flavor-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);

	// Theme custom styles (includes dark mode).
	wp_enqueue_style(
		'flavor-theme',
		get_parent_theme_file_uri( 'assets/css/theme.css' ),
		array( 'flavor-style' ),
		wp_get_theme()->get( 'Version' )
	);

	// Social share script on single posts.
	if ( is_singular( 'post' ) ) {
		wp_enqueue_script(
			'flavor-social-share',
			get_parent_theme_file_uri( 'assets/js/social-share.js' ),
			array(),
			wp_get_theme()->get( 'Version' ),
			true
		);
	}
}
add_action( 'wp_enqueue_scripts', 'flavor_scripts' );

/**
 * Enqueue editor styles.
 *
 * @since 1.0.0
 * @return void
 */
function flavor_editor_styles() {
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/css/theme.css' );
}
add_action( 'after_setup_theme', 'flavor_editor_styles' );
