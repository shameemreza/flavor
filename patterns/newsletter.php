<?php
/**
 * Title: Newsletter Signup
 * Slug: flavor/newsletter
 * Categories: flavor_page, featured
 * Keywords: newsletter, signup, subscribe, email, form
 * Block Types: core/group
 * Description: A newsletter signup section with form.
 *
 * @package flavor
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","className":"flavor-newsletter-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group alignfull flavor-newsletter-section" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontWeight":"600"}},"textColor":"base","fontSize":"xx-large"} -->
		<h3 class="wp-block-heading has-text-align-center has-base-color has-text-color has-xx-large-font-size" style="font-weight:600"><?php esc_html_e( 'Stay in the Loop', 'flavor' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|40"}}},"textColor":"subtle"} -->
		<p class="has-text-align-center has-subtle-color has-text-color" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Get weekly insights on personal branding, productivity, and building an audience. Join readers who receive actionable tips every week.', 'flavor' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:html -->
		<form class="flavor-newsletter-form flavor-newsletter-centered" action="#" method="post">
			<input type="email" name="email" placeholder="<?php esc_attr_e( 'Enter your email', 'flavor' ); ?>" class="flavor-input" required>
			<button type="submit" class="flavor-submit"><?php esc_html_e( 'Subscribe', 'flavor' ); ?></button>
		</form>
		<!-- /wp:html -->
		
		<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"typography":{"fontSize":"0.875rem"}},"textColor":"muted"} -->
		<p class="has-text-align-center has-muted-color has-text-color" style="margin-top:var(--wp--preset--spacing--20);font-size:0.875rem"><?php esc_html_e( 'No spam. Unsubscribe anytime.', 'flavor' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
