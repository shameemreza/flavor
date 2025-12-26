<?php
/**
 * Title: Hero - With Newsletter
 * Slug: flavor/hero-with-newsletter
 * Categories: flavor_hero, featured
 * Keywords: hero, header, intro, about, newsletter, subscribe
 * Block Types: core/group
 * Viewport width: 1200
 * Description: Hero section with integrated newsletter signup.
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
			<p class="has-muted-color has-text-color" style="margin-top:1.25rem;margin-bottom:0;font-size:1rem;line-height:1.7"><?php esc_html_e( 'Join 10,000+ readers getting weekly insights on productivity, creativity, and building a meaningful online presence.', 'flavor' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"margin":{"top":"1.5rem"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group" style="margin-top:1.5rem">
				<!-- wp:html -->
				<form class="flavor-newsletter-form" style="display:flex;gap:0.5rem;flex-wrap:wrap;">
					<input type="email" placeholder="<?php esc_attr_e( 'Enter your email', 'flavor' ); ?>" required style="padding:0.75rem 1rem;border:1px solid var(--wp--preset--color--subtle);border-radius:8px;font-size:1rem;min-width:220px;background:var(--wp--preset--color--base);color:var(--wp--preset--color--contrast);">
					<button type="submit" style="padding:0.75rem 1.25rem;background:var(--wp--preset--color--primary);color:var(--wp--preset--color--base);border:none;border-radius:8px;font-size:1rem;font-weight:500;cursor:pointer;"><?php esc_html_e( 'Subscribe', 'flavor' ); ?></button>
				</form>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem"},"spacing":{"margin":{"top":"0.75rem"}}},"textColor":"muted"} -->
			<p class="has-muted-color has-text-color" style="margin-top:0.75rem;font-size:0.8125rem"><?php esc_html_e( 'No spam. Unsubscribe anytime.', 'flavor' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
