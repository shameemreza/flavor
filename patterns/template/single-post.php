<?php
/**
 * Title: Single Post Content
 * Slug: flavor/single-post
 * Categories: posts
 * Block Types: core/post-content
 * Inserter: no
 * Description: Beautiful single post layout inspired by Menca with date overlays, social share, and related posts.
 *
 * @package flavor
 * @since 1.0.0
 */

// Get the primary category for "See all [Category]" link.
$flavor_categories    = get_the_category();
$flavor_category_name = ! empty( $flavor_categories ) ? esc_html( $flavor_categories[0]->name ) : esc_html__( 'Posts', 'flavor' );
$flavor_category_link = ! empty( $flavor_categories ) ? esc_url( get_category_link( $flavor_categories[0]->term_id ) ) : esc_url( get_post_type_archive_link( 'post' ) );
/* translators: %s: category name */
$flavor_see_all_text  = sprintf( esc_html__( 'See All %s', 'flavor' ), $flavor_category_name );
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0">

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
		
		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"width":"55%","className":"flavor-single-hero"} -->
			<div class="wp-block-column flavor-single-hero" style="flex-basis:55%">
				<!-- wp:post-featured-image {"aspectRatio":"4/3","style":{"border":{"radius":"12px"}}} /-->
			</div>
			<!-- /wp:column -->
			
			<!-- wp:column {"width":"45%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"}} -->
			<div class="wp-block-column" style="flex-basis:45%">
				<!-- wp:post-terms {"term":"category","className":"flavor-category-pills","style":{"typography":{"fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|accent"}}}}},"fontSize":"small"} /-->
				
				<!-- wp:post-title {"level":1,"style":{"typography":{"fontWeight":"700","lineHeight":"1.2"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|30"}}},"fontSize":"xxx-large"} /-->
				
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:avatar {"size":48,"style":{"border":{"radius":"50%"}}} /-->
					<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:post-author-name {"style":{"typography":{"fontWeight":"600"}},"fontSize":"medium"} /-->
						<!-- wp:post-date {"textColor":"muted","fontSize":"small"} /-->
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

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
	<div class="wp-block-group alignfull" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--60)">
		
		<!-- wp:post-content {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"flavor-post-content","fontSize":"medium"} /-->
		
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|50"}},"border":{"top":{"color":"var:preset|color|subtle","width":"1px"},"bottom":{"color":"var:preset|color|subtle","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--subtle);border-top-width:1px;border-bottom-color:var(--wp--preset--color--subtle);border-bottom-width:1px;margin-top:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
			<!-- wp:post-terms {"term":"post_tag","style":{"typography":{"fontWeight":"500"}},"fontSize":"small"} /-->
			
			<!-- wp:social-links {"iconColor":"secondary","iconColorValue":"#64748b","size":"has-normal-icon-size","className":"is-style-logos-only flavor-share-links","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
			<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only flavor-share-links">
				<!-- wp:social-link {"url":"#","service":"x"} /-->
				<!-- wp:social-link {"url":"#","service":"facebook"} /-->
				<!-- wp:social-link {"url":"#","service":"pinterest"} /-->
				<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)">
			<!-- wp:post-navigation-link {"type":"previous","label":"← Previous","style":{"typography":{"fontWeight":"500"}},"fontSize":"small"} /-->
			<!-- wp:post-navigation-link {"label":"Next →","style":{"typography":{"fontWeight":"500"}},"fontSize":"small"} /-->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
		
		<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"},"padding":{"bottom":"var:preset|spacing|30"}},"border":{"bottom":{"color":"var:preset|color|subtle","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignwide" style="border-bottom-color:var(--wp--preset--color--subtle);border-bottom-width:1px;margin-bottom:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30)">
			<!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"700"}},"fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-x-large-font-size" style="font-weight:700"><?php esc_html_e( 'You may also like', 'flavor' ); ?></h2>
			<!-- /wp:heading -->
			
			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"textColor":"muted","fontSize":"small"} -->
			<p class="has-muted-color has-text-color has-small-font-size" style="font-weight:500"><a href="<?php echo $flavor_category_link; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>"><?php echo esc_html( $flavor_see_all_text ); ?> →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		
		<!-- wp:query {"queryId":99,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"wide"} -->
		<div class="wp-block-query alignwide">
			<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
				<!-- wp:group {"className":"flavor-related-card","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group flavor-related-card">
					<!-- wp:group {"className":"flavor-related-thumbnail","style":{"position":{"type":"relative"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group flavor-related-thumbnail">
						<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","style":{"border":{"radius":"8px"}}} /-->
						<!-- wp:post-date {"className":"flavor-date-badge","style":{"typography":{"fontWeight":"500"}},"fontSize":"small"} /-->
					</div>
					<!-- /wp:group -->
					<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontWeight":"600","lineHeight":"1.35"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"fontSize":"medium"} /-->
					<!-- wp:post-excerpt {"excerptLength":15,"moreText":"","showMoreOnNewLine":false,"textColor":"secondary","fontSize":"small"} /-->
				</div>
				<!-- /wp:group -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
		
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
	<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
		
		<!-- wp:comments {"className":"flavor-comments"} -->
		<div class="wp-block-comments flavor-comments">
			<!-- wp:comments-title {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"typography":{"fontWeight":"700"}},"fontSize":"x-large"} /-->

			<!-- wp:comment-template -->
				<!-- wp:group {"className":"flavor-comment","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"bottom":{"color":"var:preset|color|subtle","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group flavor-comment" style="border-bottom-color:var(--wp--preset--color--subtle);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
					<!-- wp:avatar {"size":48,"style":{"border":{"radius":"50%"}}} /-->
					
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|15"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
						<div class="wp-block-group">
							<!-- wp:comment-author-name {"style":{"typography":{"fontWeight":"600"}},"fontSize":"medium"} /-->
							<!-- wp:comment-date {"textColor":"muted","fontSize":"small"} /-->
						</div>
						<!-- /wp:group -->

						<!-- wp:comment-content {"style":{"spacing":{"margin":{"top":"var:preset|spacing|15","bottom":"var:preset|spacing|15"}}}} /-->
						
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
						<div class="wp-block-group">
							<!-- wp:comment-reply-link {"style":{"typography":{"fontWeight":"500"}},"fontSize":"small"} /-->
							<!-- wp:comment-edit-link {"style":{"typography":{"fontWeight":"500"}},"fontSize":"small"} /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			<!-- /wp:comment-template -->

			<!-- wp:comments-pagination {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
				<!-- wp:comments-pagination-previous /-->
				<!-- wp:comments-pagination-numbers /-->
				<!-- wp:comments-pagination-next /-->
			<!-- /wp:comments-pagination -->

			<!-- wp:post-comments-form {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} /-->
		</div>
		<!-- /wp:comments -->
		
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
