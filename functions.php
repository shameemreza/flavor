<?php
/**
 * Flavor Theme Functions
 *
 * @package flavor
 * @author  Shameem Reza
 * @license GNU General Public License v3
 * @link    https://shameem.blog/
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Auto-load PHP files from /inc/ directory.
 */
foreach ( glob( __DIR__ . '/inc/*.php' ) as $file ) {
	require_once $file;
}
