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
		<!-- wp:column {"width":"65%"} -->
		<div class="wp-block-column" style="flex-basis:65%">
			<!-- wp:heading {"level":2,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e( 'Latest Articles', 'flavor' ); ?></h2>
			<!-- /wp:heading -->
			
			<!-- wp:query {"queryId":20,"query":{"perPage":8,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
			<div class="wp-block-query">
				<!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
					<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|15"},"border":{"bottom":{"color":"var:preset|color|subtle","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
					<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--subtle);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
						<!-- wp:post-featured-image {"isLink":true,"width":"120px","height":"80px","style":{"border":{"radius":"8px"}}} /-->
						
						<!-- wp:group {"style":{"spacing":{"blockGap":"8px"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="wp-block-group">
							<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
							<div class="wp-block-group">
								<!-- wp:post-terms {"term":"category","style":{"typography":{"fontWeight":"500","textTransform":"uppercase","letterSpacing":"0.05em"}},"fontSize":"small"} /-->
							</div>
							<!-- /wp:group -->
							<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontWeight":"500","lineHeight":"1.4"}},"fontSize":"medium"} /-->
							<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
							<div class="wp-block-group">
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
				
				<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
					<!-- wp:query-pagination-previous /-->
					<!-- wp:query-pagination-numbers /-->
					<!-- wp:query-pagination-next /-->
				<!-- /wp:query-pagination -->
			</div>
			<!-- /wp:query -->
		</div>
		<!-- /wp:column -->
		
		<!-- wp:column {"width":"35%"} -->
		<div class="wp-block-column" style="flex-basis:35%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"12px"}},"backgroundColor":"surface","layout":{"type":"default"}} -->
				<div class="wp-block-group has-surface-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"medium"} -->
					<h3 class="wp-block-heading has-medium-font-size" style="font-weight:600"><?php esc_html_e( 'About', 'flavor' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
					<p class="has-secondary-color has-text-color has-small-font-size"><?php esc_html_e( 'I write about personal branding, productivity, and building things on the web. Join 10,000+ readers.', 'flavor' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"fontSize":"small"} -->
						<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Subscribe', 'flavor' ); ?></a></div>
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
					<!-- wp:categories {"showPostCounts":true} /-->
				</div>
				<!-- /wp:group -->
				
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"medium"} -->
					<h3 class="wp-block-heading has-medium-font-size" style="font-weight:600"><?php esc_html_e( 'Tags', 'flavor' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:tag-cloud {"numberOfTags":15,"smallestFontSize":"0.875rem","largestFontSize":"0.875rem"} /-->
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

