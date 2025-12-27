<?php
/**
 * Register pattern categories.
 *
 * @package flavor
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register pattern categories.
 *
 * @since 1.0.0
 * @return void
 */
function flavor_register_pattern_categories() {
	register_block_pattern_category(
		'flavor_page',
		array(
			'label'       => __( 'Pages', 'flavor' ),
			'description' => __( 'Full page layouts for Flavor theme.', 'flavor' ),
		)
	);

	register_block_pattern_category(
		'flavor_hero',
		array(
			'label'       => __( 'Hero Sections', 'flavor' ),
			'description' => __( 'Hero section patterns.', 'flavor' ),
		)
	);

	register_block_pattern_category(
		'flavor_gallery',
		array(
			'label'       => __( 'Galleries', 'flavor' ),
			'description' => __( 'Image gallery patterns for photo posts.', 'flavor' ),
		)
	);

	register_block_pattern_category(
		'flavor_video',
		array(
			'label'       => __( 'Videos', 'flavor' ),
			'description' => __( 'Video embed patterns for YouTube, Vimeo, etc.', 'flavor' ),
		)
	);
}
add_action( 'init', 'flavor_register_pattern_categories' );

