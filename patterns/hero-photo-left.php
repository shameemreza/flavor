<?php
/**
 * Title: Hero - Photo Left
 * Slug: flavor/hero-photo-left
 * Categories: flavor_hero, featured
 * Keywords: hero, header, intro, about, profile, photo
 * Block Types: core/group
 * Viewport width: 1200
 * Description: Hero section with photo on left and content on right.
 *
 * @package flavor
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"}}},"backgroundColor":"surface","layout":{"type":"constrained","contentSize":"960px"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"260px"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:260px">
			<!-- wp:image {"width":"260px","height":"260px","scale":"cover","sizeSlug":"medium","linkDestination":"none","align":"center","className":"is-style-rounded","style":{"border":{"radius":"16px"}}} -->
			<figure class="wp-block-image aligncenter size-medium is-style-rounded has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-avatar.svg" alt="<?php esc_attr_e( 'Profile photo', 'flavor' ); ?>" style="border-radius:16px;object-fit:cover;width:260px;height:260px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}}} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"2.25rem","fontWeight":"700","lineHeight":"1.3"},"spacing":{"margin":{"bottom":"0.5rem"}}}} -->
			<h1 class="wp-block-heading" style="margin-bottom:0.5rem;font-size:2.25rem;font-weight:700;line-height:1.3"><?php esc_html_e( "Hi, I'm John Doe", 'flavor' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"muted"} -->
			<p class="has-muted-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:1.125rem;font-weight:500"><?php esc_html_e( 'Writer, Creator & Digital Strategist', 'flavor' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","lineHeight":"1.7"},"spacing":{"margin":{"top":"1.25rem","bottom":"0"}}},"textColor":"muted"} -->
			<p class="has-muted-color has-text-color" style="margin-top:1.25rem;margin-bottom:0;font-size:1rem;line-height:1.7"><?php esc_html_e( 'I help entrepreneurs and creators build their personal brand online. Through thoughtful design and clear writing, I turn ideas into impact.', 'flavor' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"1.5rem"},"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-buttons" style="margin-top:1.5rem">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Read My Story', 'flavor' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Browse Articles →', 'flavor' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
