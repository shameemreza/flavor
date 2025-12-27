<?php
/**
 * Title: Single Post Content
 * Slug: flavor/single-post
 * Categories: posts
 * Block Types: core/post-content
 * Inserter: no
 * Description: Single post layout with featured image, meta, and comments.
 *
 * @package flavor
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:post-featured-image {"aspectRatio":"16/9","style":{"border":{"radius":"8px"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} /-->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"wrap"},"fontSize":"small"} -->
	<div class="wp-block-group has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--30)">
		<!-- wp:post-terms {"term":"category","style":{"typography":{"fontWeight":"600","textTransform":"uppercase"}},"textColor":"primary"} /-->
		<!-- wp:paragraph {"textColor":"muted"} -->
		<p class="has-muted-color has-text-color">·</p>
		<!-- /wp:paragraph -->
		<!-- wp:post-date {"textColor":"muted"} /-->
		<!-- wp:paragraph {"textColor":"muted"} -->
		<p class="has-muted-color has-text-color">·</p>
		<!-- /wp:paragraph -->
		<!-- wp:post-author {"showAvatar":false,"showBio":false,"textColor":"muted"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:post-title {"level":1,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"typography":{"fontWeight":"700","lineHeight":"1.2"}},"fontSize":"xxx-large"} /-->

	<!-- wp:post-content {"style":{"typography":{"lineHeight":"1.8"}},"fontSize":"medium"} /-->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|50"}},"border":{"top":{"color":"var:preset|color|subtle","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--subtle);border-top-width:1px;margin-top:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
		<!-- wp:post-terms {"term":"post_tag","prefix":"Tags: ","style":{"typography":{"fontWeight":"500"}},"fontSize":"small"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:post-navigation-link {"type":"previous","label":"← Previous Post","style":{"typography":{"fontWeight":"500"}},"fontSize":"small"} /-->
		<!-- wp:post-navigation-link {"label":"Next Post →","style":{"typography":{"fontWeight":"500"}},"fontSize":"small"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:comments {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-comments" style="margin-top:var(--wp--preset--spacing--60)">
		<!-- wp:comments-title {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"typography":{"fontWeight":"700"}},"fontSize":"x-large"} /-->

		<!-- wp:comment-template -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
			<div class="wp-block-columns">
				<!-- wp:column {"width":"48px"} -->
				<div class="wp-block-column" style="flex-basis:48px">
					<!-- wp:avatar {"size":48,"style":{"border":{"radius":"50%"}}} /-->
				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:comment-author-name {"style":{"typography":{"fontWeight":"600"}},"fontSize":"medium"} /-->
					
					<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex"},"fontSize":"small"} -->
					<div class="wp-block-group has-small-font-size" style="margin-top:0;margin-bottom:0">
						<!-- wp:comment-date {"textColor":"muted"} /-->
						<!-- wp:comment-edit-link {"textColor":"primary"} /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:comment-content {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} /-->
					<!-- wp:comment-reply-link {"style":{"typography":{"fontWeight":"500"}},"fontSize":"small","textColor":"primary"} /-->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
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

