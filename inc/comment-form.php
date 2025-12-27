<?php
/**
 * Customize comment form.
 *
 * @package flavor
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Remove website/URL field from comment form.
 *
 * This is a common practice for personal blogs to reduce spam
 * and simplify the comment experience. It does not break any
 * WordPress standards.
 *
 * @param array $fields Default comment form fields.
 * @return array Modified fields without URL field.
 */
function flavor_remove_comment_website_field( $fields ) {
	if ( isset( $fields['url'] ) ) {
		unset( $fields['url'] );
	}
	return $fields;
}
add_filter( 'comment_form_default_fields', 'flavor_remove_comment_website_field' );

/**
 * Customize comment form submit button text.
 *
 * @param array $defaults Default comment form arguments.
 * @return array Modified defaults.
 */
function flavor_comment_form_defaults( $defaults ) {
	$defaults['label_submit'] = __( 'Post Comment', 'flavor' );
	$defaults['title_reply']  = __( 'Leave a Comment', 'flavor' );
	/* translators: %s: Author name. */
	$defaults['title_reply_to'] = __( 'Reply to %s', 'flavor' );
	return $defaults;
}
add_filter( 'comment_form_defaults', 'flavor_comment_form_defaults' );

