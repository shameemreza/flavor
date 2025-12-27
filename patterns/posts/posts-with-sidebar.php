<?php
/**
 * Title: Posts with Sidebar
 * Slug: flavor/posts-with-sidebar
 * Categories: query, posts, flavor_page
 * Block Types: core/query
 * Description: Two-column layout with posts list on left and sidebar widgets on right.
 *
 * @package flavor
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"66%"} -->
		<div class="wp-block-column" style="flex-basis:66%">
			<!-- wp:heading {"level":2,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Latest Articles', 'flavor' ); ?></h2>
			<!-- /wp:heading -->
			
			<!-- wp:query {"queryId":20,"query":{"perPage":8,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
			<div class="wp-block-query">
				<!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
					<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|30"},"border":{"bottom":{"color":"var:preset|color|subtle","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
					<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--subtle);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
						<!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"100px"}},"layout":{"type":"constrained"}} -->
						<div class="wp-block-group">
							<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","width":"100px","height":"100px","scale":"cover","style":{"border":{"radius":"8px"}}} /-->
						</div>
						<!-- /wp:group -->
						
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
						<div class="wp-block-group">
							<!-- wp:post-terms {"term":"category","style":{"typography":{"fontWeight":"500","textTransform":"uppercase","letterSpacing":"0.05em"}},"fontSize":"small"} /-->
							<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontWeight":"600","lineHeight":"1.4"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"medium"} /-->
							<!-- wp:group {"style":{"spacing":{"blockGap":"6px","margin":{"top":"var:preset|spacing|10"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
							<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--10)">
								<!-- wp:post-date {"textColor":"muted","fontSize":"small"} /-->
								<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
								<p class="has-muted-color has-text-color has-small-font-size">·</p>
								<!-- /wp:paragraph -->
								<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
								<p class="has-muted-color has-text-color has-small-font-size"><?php esc_html_e( '5 min read', 'flavor' ); ?></p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				<!-- /wp:post-template -->
				
				<!-- wp:query-pagination {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
					<!-- wp:query-pagination-previous /-->
					<!-- wp:query-pagination-numbers /-->
					<!-- wp:query-pagination-next /-->
				<!-- /wp:query-pagination -->
				
				<!-- wp:query-no-results -->
					<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
					<p class="has-text-align-center has-muted-color has-text-color"><?php esc_html_e( 'No posts yet. Start writing!', 'flavor' ); ?></p>
					<!-- /wp:paragraph -->
				<!-- /wp:query-no-results -->
			</div>
			<!-- /wp:query -->
		</div>
		<!-- /wp:column -->
		
		<!-- wp:column {"width":"34%"} -->
		<div class="wp-block-column" style="flex-basis:34%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"},"position":{"type":"sticky","top":"100px"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"12px"}},"backgroundColor":"surface","layout":{"type":"default"}} -->
				<div class="wp-block-group has-surface-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"medium"} -->
					<h3 class="wp-block-heading has-medium-font-size" style="font-weight:600"><?php esc_html_e( 'About', 'flavor' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
					<p class="has-secondary-color has-text-color has-small-font-size"><?php esc_html_e( 'I write about personal branding, productivity, and building things on the web. Join 10,000+ readers.', 'flavor' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"width":100,"fontSize":"small"} -->
						<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size has-small-font-size"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Subscribe to Newsletter', 'flavor' ); ?></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->
				
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"medium"} -->
					<h3 class="wp-block-heading has-medium-font-size" style="font-weight:600"><?php esc_html_e( 'Categories', 'flavor' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:categories {"showPostCounts":true,"style":{"typography":{"fontSize":"0.9375rem"}}} /-->
				</div>
				<!-- /wp:group -->
				
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"medium"} -->
					<h3 class="wp-block-heading has-medium-font-size" style="font-weight:600"><?php esc_html_e( 'Popular Tags', 'flavor' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:tag-cloud {"numberOfTags":12,"smallestFontSize":"0.8125rem","largestFontSize":"0.8125rem"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
