<?php
/**
 * Title: Popular Posts
 * Slug: flavor/posts-popular
 * Categories: query, posts, flavor_page
 * Block Types: core/query
 * Description: A "Popular this month" style section with highlighted posts.
 *
 * @package flavor
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10","margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)">
		<!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"600"}},"fontSize":"large"} -->
		<h2 class="wp-block-heading has-large-font-size" style="font-weight:600"><?php esc_html_e( 'Popular', 'flavor' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
		<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'this month', 'flavor' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	
	<!-- wp:query {"queryId":10,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"comment_count","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"grid","columnCount":2}} -->
			<!-- wp:group {"className":"flavor-popular-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|15"},"border":{"radius":"12px"}},"backgroundColor":"base","layout":{"type":"default"}} -->
			<div class="wp-block-group flavor-popular-card has-base-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"border":{"radius":"8px"}}} /-->
				
				<!-- wp:group {"style":{"spacing":{"blockGap":"8px","margin":{"top":"var:preset|spacing|15"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--15)">
					<!-- wp:post-date {"textColor":"muted","fontSize":"small"} /-->
					<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
					<p class="has-muted-color has-text-color has-small-font-size">·</p>
					<!-- /wp:paragraph -->
					<!-- wp:post-terms {"term":"category","fontSize":"small"} /-->
				</div>
				<!-- /wp:group -->
				
				<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontWeight":"600","lineHeight":"1.35"}},"fontSize":"medium"} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
		
		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"textColor":"muted"} -->
			<p class="has-muted-color has-text-color"><?php esc_html_e( 'No popular posts yet.', 'flavor' ); ?></p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->

