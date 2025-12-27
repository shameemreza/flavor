<?php
/**
 * Title: Gallery Mosaic
 * Slug: flavor/gallery-mosaic
 * Categories: flavor_gallery, media
 * Keywords: gallery, images, mosaic, photos, masonry
 * Description: A mosaic-style gallery with varied image sizes.
 *
 * @package flavor
 * @since 1.0.0
 */

?>
<!-- wp:group {"metadata":{"name":"Gallery Mosaic"},"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-columns alignwide">
		
		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
		<div class="wp-block-column">
			<!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"large","linkDestination":"media","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img alt="<?php esc_attr_e( 'Gallery image', 'flavor' ); ?>" style="border-radius:8px"/></figure>
			<!-- /wp:image -->
			
			<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","linkDestination":"media","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img alt="<?php esc_attr_e( 'Gallery image', 'flavor' ); ?>" style="border-radius:8px;aspect-ratio:3/4;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		
		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
		<div class="wp-block-column">
			<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","linkDestination":"media","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img alt="<?php esc_attr_e( 'Gallery image', 'flavor' ); ?>" style="border-radius:8px;aspect-ratio:3/4;object-fit:cover"/></figure>
			<!-- /wp:image -->
			
			<!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"large","linkDestination":"media","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img alt="<?php esc_attr_e( 'Gallery image', 'flavor' ); ?>" style="border-radius:8px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		
		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
		<div class="wp-block-column">
			<!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"large","linkDestination":"media","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img alt="<?php esc_attr_e( 'Gallery image', 'flavor' ); ?>" style="border-radius:8px"/></figure>
			<!-- /wp:image -->
			
			<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","linkDestination":"media","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img alt="<?php esc_attr_e( 'Gallery image', 'flavor' ); ?>" style="border-radius:8px;aspect-ratio:3/4;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		
	</div>
	<!-- /wp:columns -->
	
</div>
<!-- /wp:group -->

