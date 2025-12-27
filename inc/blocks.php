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
	$blocks_dir = get_template_directory() . '/inc/blocks';

	// Get all block directories.
	$block_folders = array(
		'dark-mode-toggle',
		'newsletter',
		'support-creator',
	);

	foreach ( $block_folders as $block ) {
		$block_path = $blocks_dir . '/' . $block;
		if ( file_exists( $block_path . '/block.json' ) ) {
			register_block_type_from_metadata( $block_path );
		}
	}
}
add_action( 'init', 'flavor_register_blocks' );
