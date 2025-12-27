<?php
/**
 * Title: Gallery Grid
 * Slug: flavor/gallery-grid
 * Categories: flavor_gallery, media
 * Keywords: gallery, images, grid, photos
 * Description: A beautiful grid gallery with lightbox support.
 *
 * @package flavor
 * @since 1.0.0
 */

?>
<!-- wp:group {"metadata":{"name":"Gallery Grid"},"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--40)">
		<!-- wp:heading {"fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Photo Gallery', 'flavor' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->
	
	<!-- wp:gallery {"linkTo":"media","columns":3,"imageCrop":true,"align":"wide","className":"is-style-default"} -->
	<figure class="wp-block-gallery alignwide has-nested-images columns-3 is-cropped is-style-default">
		<!-- wp:image {"sizeSlug":"large","linkDestination":"media","lightbox":{"enabled":true},"aspectRatio":"4/3","scale":"cover"} -->
		<figure class="wp-block-image size-large"><img alt="<?php esc_attr_e( 'Gallery image', 'flavor' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
		<!-- /wp:image -->
		
		<!-- wp:image {"sizeSlug":"large","linkDestination":"media","lightbox":{"enabled":true},"aspectRatio":"4/3","scale":"cover"} -->
		<figure class="wp-block-image size-large"><img alt="<?php esc_attr_e( 'Gallery image', 'flavor' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
		<!-- /wp:image -->
		
		<!-- wp:image {"sizeSlug":"large","linkDestination":"media","lightbox":{"enabled":true},"aspectRatio":"4/3","scale":"cover"} -->
		<figure class="wp-block-image size-large"><img alt="<?php esc_attr_e( 'Gallery image', 'flavor' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
		<!-- /wp:image -->
		
		<!-- wp:image {"sizeSlug":"large","linkDestination":"media","lightbox":{"enabled":true},"aspectRatio":"4/3","scale":"cover"} -->
		<figure class="wp-block-image size-large"><img alt="<?php esc_attr_e( 'Gallery image', 'flavor' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
		<!-- /wp:image -->
		
		<!-- wp:image {"sizeSlug":"large","linkDestination":"media","lightbox":{"enabled":true},"aspectRatio":"4/3","scale":"cover"} -->
		<figure class="wp-block-image size-large"><img alt="<?php esc_attr_e( 'Gallery image', 'flavor' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
		<!-- /wp:image -->
		
		<!-- wp:image {"sizeSlug":"large","linkDestination":"media","lightbox":{"enabled":true},"aspectRatio":"4/3","scale":"cover"} -->
		<figure class="wp-block-image size-large"><img alt="<?php esc_attr_e( 'Gallery image', 'flavor' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
		<!-- /wp:image -->
	</figure>
	<!-- /wp:gallery -->
	
</div>
<!-- /wp:group -->

