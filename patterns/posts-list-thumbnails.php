<?php
/**
 * Title: Posts List with Thumbnails
 * Slug: flavor/posts-list-thumbnails
 * Categories: query, posts, flavor_page
 * Block Types: core/query
 * Description: Single column post list with thumbnails on the left - minimal style.
 *
 * @package flavor
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"620px"}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php esc_html_e( 'Latest Articles', 'flavor' ); ?></h2>
		<!-- /wp:heading -->
		
		<!-- wp:paragraph {"align":"center","textColor":"secondary"} -->
		<p class="has-text-align-center has-secondary-color has-text-color"><?php esc_html_e( 'Thoughts, tutorials, and insights on building a personal brand online.', 'flavor' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	
	<!-- wp:query {"queryId":1,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"wide"} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
			<!-- wp:group {"className":"flavor-post-list-item","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|30"},"border":{"bottom":{"color":"var:preset|color|subtle","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group flavor-post-list-item" style="border-bottom-color:var(--wp--preset--color--subtle);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
				<!-- wp:post-featured-image {"isLink":true,"width":"110px","height":"110px","className":"flavor-thumbnail","style":{"border":{"radius":"8px"}}} /-->
				
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
					<div class="wp-block-group">
						<!-- wp:post-date {"textColor":"muted","fontSize":"small"} /-->
						<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
						<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( '· 5 min read', 'flavor' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					
					<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontWeight":"700","lineHeight":"1.3"}},"fontSize":"large"} /-->
					
					<!-- wp:post-excerpt {"excerptLength":20,"textColor":"secondary","fontSize":"small"} /-->
					
					<!-- wp:read-more {"content":"Read more →","style":{"typography":{"fontWeight":"500"}},"fontSize":"small"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
		
		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
			<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'No posts yet. Start writing!', 'flavor' ); ?></p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->
	
	<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/blog"><?php esc_html_e( 'View All Articles →', 'flavor' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

