<?php
/**
 * Title: Featured Video
 * Slug: flavor/video-featured
 * Categories: flavor_video, media
 * Keywords: video, youtube, vimeo, embed, featured
 * Description: A featured video section with title and description.
 *
 * @package flavor
 * @since 1.0.0
 */

?>
<!-- wp:group {"metadata":{"name":"Featured Video"},"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"720px","justifyContent":"center"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--40)">
		<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php esc_html_e( 'Watch the Latest Video', 'flavor' ); ?></h2>
		<!-- /wp:heading -->
		
		<!-- wp:paragraph {"align":"center","textColor":"secondary"} -->
		<p class="has-text-align-center has-secondary-color has-text-color"><?php esc_html_e( 'Check out my latest YouTube video where I share tips and insights.', 'flavor' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	
	<!-- wp:embed {"url":"https://www.youtube.com/watch?v=dQw4w9WgXcQ","type":"video","providerNameSlug":"youtube","responsive":true,"align":"wide","className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
	<figure class="wp-block-embed alignwide is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio">
		<div class="wp-block-embed__wrapper">
			https://www.youtube.com/watch?v=dQw4w9WgXcQ
		</div>
		<figcaption class="wp-element-caption"><?php esc_html_e( 'Replace this URL with your video link', 'flavor' ); ?></figcaption>
	</figure>
	<!-- /wp:embed -->
	
</div>
<!-- /wp:group -->

