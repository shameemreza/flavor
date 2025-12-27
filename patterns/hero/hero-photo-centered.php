<?php
/**
 * Title: Hero - Photo Centered
 * Slug: flavor/hero-photo-centered
 * Categories: flavor_hero, featured
 * Keywords: hero, header, intro, about, profile, photo, centered
 * Block Types: core/group
 * Viewport width: 1200
 * Description: Hero section with centered photo above content.
 *
 * @package flavor
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"}}},"backgroundColor":"surface","layout":{"type":"constrained","contentSize":"580px"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:image {"width":"140px","height":"140px","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","align":"center","className":"is-style-rounded","style":{"border":{"radius":"100%"}}} -->
	<figure class="wp-block-image aligncenter size-thumbnail is-resized is-style-rounded has-custom-border"><img alt="<?php esc_attr_e( 'Profile photo', 'flavor' ); ?>" style="border-radius:100%;object-fit:cover;width:140px;height:140px"/></figure>
	<!-- /wp:image -->

	<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"2.25rem","fontWeight":"700","lineHeight":"1.3"},"spacing":{"margin":{"top":"1.5rem","bottom":"0.5rem"}}}} -->
	<h1 class="wp-block-heading has-text-align-center" style="margin-top:1.5rem;margin-bottom:0.5rem;font-size:2.25rem;font-weight:700;line-height:1.3"><?php esc_html_e( "Hi, I'm John Doe", 'flavor' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.125rem","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"muted"} -->
	<p class="has-text-align-center has-muted-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:1.125rem;font-weight:500"><?php esc_html_e( 'Writer, Creator & Digital Strategist', 'flavor' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1rem","lineHeight":"1.7"},"spacing":{"margin":{"top":"1.25rem","bottom":"0"}}},"textColor":"muted"} -->
	<p class="has-text-align-center has-muted-color has-text-color" style="margin-top:1.25rem;margin-bottom:0;font-size:1rem;line-height:1.7"><?php esc_html_e( 'I help entrepreneurs and creators build their personal brand online. Through thoughtful design and clear writing, I turn ideas into impact.', 'flavor' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"1.5rem"},"blockGap":"0.75rem"}},"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
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
<!-- /wp:group -->
