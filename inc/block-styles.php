<?php
/**
 * Register block styles.
 *
 * @package flavor
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register block styles.
 *
 * @since 1.0.0
 * @return void
 */
function flavor_register_block_styles() {
	// Rounded image style.
	register_block_style(
		'core/image',
		array(
			'name'  => 'rounded',
			'label' => __( 'Rounded', 'flavor' ),
		)
	);

	// Circle mask image style.
	register_block_style(
		'core/image',
		array(
			'name'  => 'circle-mask',
			'label' => __( 'Circle', 'flavor' ),
		)
	);

	// Shadow button style.
	register_block_style(
		'core/button',
		array(
			'name'  => 'shadow',
			'label' => __( 'Shadow', 'flavor' ),
		)
	);
}
add_action( 'init', 'flavor_register_block_styles' );

