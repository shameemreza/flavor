<?php
/**
 * Block asset dependencies.
 *
 * This file is required by register_block_type_from_metadata() to know
 * what WordPress scripts the block depends on.
 *
 * @package flavor
 */

return array(
	'dependencies' => array(
		'wp-blocks',
		'wp-element',
		'wp-block-editor',
		'wp-components',
		'wp-i18n',
	),
	'version'      => '1.0.0',
);

