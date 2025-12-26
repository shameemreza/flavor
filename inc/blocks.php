<?php
/**
 * Register custom blocks.
 *
 * @package flavor
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register custom blocks using register_block_type_from_metadata.
 *
 * @since 1.0.0
 * @return void
 */
function flavor_register_blocks() {
	$block_path = get_template_directory() . '/blocks/dark-mode-toggle';
	if ( file_exists( $block_path . '/block.json' ) ) {
		register_block_type_from_metadata( $block_path );
	}
}
add_action( 'init', 'flavor_register_blocks' );

