<?php
/**
 * Register custom block category.
 *
 * @package flavor
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register custom block category.
 *
 * @since 1.0.0
 * @param array $categories Existing block categories.
 * @return array Modified block categories.
 */
function flavor_register_block_category( $categories ) {
	return array_merge(
		array(
			array(
				'slug'  => 'flavor',
				'title' => __( 'Flavor', 'flavor' ),
			),
		),
		$categories
	);
}
add_filter( 'block_categories_all', 'flavor_register_block_category', 10, 1 );

