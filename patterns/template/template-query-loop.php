<?php
/**
 * Title: Query Loop
 * Slug: flavor/template-query-loop
 * Categories: query
 * Block Types: core/query
 * Description: A list of posts with featured image, title, and date.
 * Inserter: no
 *
 * @package flavor
 * @since 1.0.0
 */

?>
<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query">
	<!-- wp:post-template {"layout":{"type":"default"}} -->
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"border":{"radius":"4px"}}} /-->
			<!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap"},"fontSize":"small"} -->
			<div class="wp-block-group has-small-font-size">
				<!-- wp:post-date /-->
				<!-- wp:paragraph -->
				<p>·</p>
				<!-- /wp:paragraph -->
				<!-- wp:post-terms {"term":"category"} /-->
			</div>
			<!-- /wp:group -->
			<!-- wp:post-excerpt {"moreText":"<?php esc_html_e( 'Continue reading', 'flavor' ); ?>","excerptLength":30} /-->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->
	
	<!-- wp:query-no-results -->
		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'No posts found.', 'flavor' ); ?></p>
		<!-- /wp:paragraph -->
	<!-- /wp:query-no-results -->
	
	<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
