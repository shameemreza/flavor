<?php
/**
 * Title: Video Grid
 * Slug: flavor/video-grid
 * Categories: flavor_video, media
 * Keywords: video, youtube, vimeo, embed, grid
 * Description: A grid of video embeds for showcasing multiple videos.
 *
 * @package flavor
 * @since 1.0.0
 */

?>
<!-- wp:group {"metadata":{"name":"Video Grid"},"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--40)">
		<!-- wp:heading {"fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Latest Videos', 'flavor' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->
	
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-columns alignwide">
		
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:embed {"url":"https://www.youtube.com/watch?v=dQw4w9WgXcQ","type":"video","providerNameSlug":"youtube","responsive":true,"className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
			<figure class="wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio">
				<div class="wp-block-embed__wrapper">
					https://www.youtube.com/watch?v=dQw4w9WgXcQ
				</div>
			</figure>
			<!-- /wp:embed -->
			
			<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php esc_html_e( 'Video Title Here', 'flavor' ); ?></h3>
			<!-- /wp:heading -->
			
			<!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
			<p class="has-secondary-color has-text-color has-small-font-size"><?php esc_html_e( 'A brief description of what this video covers.', 'flavor' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:embed {"url":"https://www.youtube.com/watch?v=dQw4w9WgXcQ","type":"video","providerNameSlug":"youtube","responsive":true,"className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
			<figure class="wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio">
				<div class="wp-block-embed__wrapper">
					https://www.youtube.com/watch?v=dQw4w9WgXcQ
				</div>
			</figure>
			<!-- /wp:embed -->
			
			<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php esc_html_e( 'Video Title Here', 'flavor' ); ?></h3>
			<!-- /wp:heading -->
			
			<!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
			<p class="has-secondary-color has-text-color has-small-font-size"><?php esc_html_e( 'A brief description of what this video covers.', 'flavor' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:embed {"url":"https://www.youtube.com/watch?v=dQw4w9WgXcQ","type":"video","providerNameSlug":"youtube","responsive":true,"className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
			<figure class="wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio">
				<div class="wp-block-embed__wrapper">
					https://www.youtube.com/watch?v=dQw4w9WgXcQ
				</div>
			</figure>
			<!-- /wp:embed -->
			
			<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php esc_html_e( 'Video Title Here', 'flavor' ); ?></h3>
			<!-- /wp:heading -->
			
			<!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
			<p class="has-secondary-color has-text-color has-small-font-size"><?php esc_html_e( 'A brief description of what this video covers.', 'flavor' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		
	</div>
	<!-- /wp:columns -->
	
</div>
<!-- /wp:group -->

