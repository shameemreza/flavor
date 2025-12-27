<?php
/**
 * Title: Social Proof - As Featured In
 * Slug: flavor/social-proof
 * Categories: flavor_hero, featured
 * Keywords: social proof, logos, featured, press, media, trust
 * Block Types: core/group
 * Description: "As featured in" section with placeholder for media logos.
 *
 * @package flavor
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.875rem","letterSpacing":"0.05em","textTransform":"uppercase"}},"textColor":"muted"} -->
		<p class="has-text-align-center has-muted-color has-text-color" style="font-size:0.875rem;letter-spacing:0.05em;text-transform:uppercase"><?php esc_html_e( 'As featured in:', 'flavor' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","fontWeight":"700","letterSpacing":"0.02em"}},"textColor":"muted"} -->
			<p class="has-muted-color has-text-color" style="font-size:1.125rem;font-weight:700;letter-spacing:0.02em"><?php esc_html_e( 'Forbes', 'flavor' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","fontWeight":"700","fontFamily":"serif"}},"textColor":"muted"} -->
			<p class="has-muted-color has-text-color" style="font-size:1.125rem;font-weight:700"><?php esc_html_e( 'The New York Times', 'flavor' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","fontWeight":"700","letterSpacing":"0.02em"}},"textColor":"muted"} -->
			<p class="has-muted-color has-text-color" style="font-size:1.125rem;font-weight:700;letter-spacing:0.02em"><?php esc_html_e( 'TechCrunch', 'flavor' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","fontWeight":"700","letterSpacing":"0.02em"}},"textColor":"muted"} -->
			<p class="has-muted-color has-text-color" style="font-size:1.125rem;font-weight:700;letter-spacing:0.02em"><?php esc_html_e( 'Wired', 'flavor' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","fontWeight":"700","letterSpacing":"0.02em"}},"textColor":"muted"} -->
			<p class="has-muted-color has-text-color" style="font-size:1.125rem;font-weight:700;letter-spacing:0.02em"><?php esc_html_e( 'Fast Company', 'flavor' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

