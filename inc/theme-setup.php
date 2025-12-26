<?php
/**
 * Theme setup functions.
 *
 * @package flavor
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme setup.
 *
 * @since 1.0.0
 * @return void
 */
function flavor_setup() {
	// Make theme available for translation.
	load_theme_textdomain( 'flavor', get_template_directory() . '/languages' );

	// Add support for block styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for editor styles.
	add_theme_support( 'editor-styles' );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );
}
add_action( 'after_setup_theme', 'flavor_setup' );

