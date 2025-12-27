<?php
/**
 * Add placeholder for posts without featured images.
 *
 * @package flavor
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Add placeholder image when post has no featured image.
 *
 * @param string $block_content The block content.
 * @param array  $block         The block data.
 * @return string Modified block content.
 */
function flavor_featured_image_placeholder( $block_content, $block ) {
	// Only process post-featured-image blocks.
	if ( 'core/post-featured-image' !== $block['blockName'] ) {
		return $block_content;
	}

	// Check if the block content is essentially empty (no img tag).
	if ( ! empty( $block_content ) && strpos( $block_content, '<img' ) !== false ) {
		return $block_content;
	}

	// Get block attributes.
	$attrs       = $block['attrs'] ?? array();
	$width       = $attrs['width'] ?? '100%';
	$height      = $attrs['height'] ?? 'auto';
	$aspect      = $attrs['aspectRatio'] ?? '';
	$is_link     = $attrs['isLink'] ?? false;
	$class_name  = $attrs['className'] ?? '';
	$border_radius = '';

	// Handle border radius.
	if ( isset( $attrs['style']['border']['radius'] ) ) {
		$radius = $attrs['style']['border']['radius'];
		if ( is_array( $radius ) ) {
			$border_radius = sprintf(
				'border-radius: %s %s %s %s;',
				$radius['topLeft'] ?? '0',
				$radius['topRight'] ?? '0',
				$radius['bottomRight'] ?? '0',
				$radius['bottomLeft'] ?? '0'
			);
		} else {
			$border_radius = 'border-radius: ' . esc_attr( $radius ) . ';';
		}
	}

	// Build inline styles.
	$styles = array();
	if ( $width && $width !== '100%' ) {
		$styles[] = 'width: ' . esc_attr( $width );
	}
	if ( $height && $height !== 'auto' ) {
		$styles[] = 'height: ' . esc_attr( $height );
	}
	if ( $aspect ) {
		$styles[] = 'aspect-ratio: ' . esc_attr( $aspect );
	}
	if ( $border_radius ) {
		$styles[] = $border_radius;
	}

	$style_attr = ! empty( $styles ) ? ' style="' . implode( '; ', $styles ) . '"' : '';

	// Create placeholder HTML.
	$placeholder = sprintf(
		'<figure class="wp-block-post-featured-image flavor-placeholder-image %s"%s>
			<div class="flavor-placeholder-icon">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
					<rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
					<circle cx="8.5" cy="8.5" r="1.5"/>
					<path d="M21 15l-5-5L5 21"/>
				</svg>
			</div>
		</figure>',
		esc_attr( $class_name ),
		$style_attr
	);

	// Wrap in link if needed.
	if ( $is_link ) {
		$permalink   = get_permalink();
		$placeholder = sprintf(
			'<figure class="wp-block-post-featured-image flavor-placeholder-image %s"%s>
				<a href="%s">
					<div class="flavor-placeholder-icon">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
							<rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
							<circle cx="8.5" cy="8.5" r="1.5"/>
							<path d="M21 15l-5-5L5 21"/>
						</svg>
					</div>
				</a>
			</figure>',
			esc_attr( $class_name ),
			$style_attr,
			esc_url( $permalink )
		);
	}

	return $placeholder;
}
add_filter( 'render_block', 'flavor_featured_image_placeholder', 10, 2 );

