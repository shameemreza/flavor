<?php
/**
 * Title: Hero - With Newsletter Card
 * Slug: flavor/hero-with-newsletter
 * Categories: flavor_hero, featured
 * Keywords: hero, header, intro, about, newsletter, subscribe, card
 * Block Types: core/group
 * Viewport width: 1200
 * Description: Hero section with separate newsletter signup card below.
 *
 * @package flavor
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"0"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:0">
	
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"280px"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:280px">
			<!-- wp:image {"width":"240px","height":"240px","scale":"cover","sizeSlug":"medium","linkDestination":"none","align":"center","className":"is-style-rounded","style":{"border":{"radius":"100%"}}} -->
			<figure class="wp-block-image aligncenter size-medium is-resized is-style-rounded has-custom-border"><img alt="<?php esc_attr_e( 'Profile photo', 'flavor' ); ?>" style="border-radius:100%;object-fit:cover;width:240px;height:240px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"2.75rem","fontWeight":"700","lineHeight":"1.2"}}} -->
			<h1 class="wp-block-heading" style="font-size:2.75rem;font-weight:700;line-height:1.2"><?php esc_html_e( 'Hey Friends', 'flavor' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.25rem","lineHeight":"1.6"}}} -->
			<p style="font-size:1.25rem;line-height:1.6"><?php esc_html_e( "I'm John. I'm a creator, writer, and the author of the bestselling book, Deep Work Mastery.", 'flavor' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:flavor/newsletter {"heading":"Join the Newsletter","description":"Join me and 50,000+ readers for weekly insights on productivity, creativity, and building a meaningful life online.","buttonText":"Subscribe for Free","showNameField":true,"namePlaceholder":"Your First Name","placeholder":"Your Email","privacyText":"By subscribing, you agree to receive emails. You can opt-out at any time.","formLayout":"stacked","backgroundStyle":"card"} /-->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
