<?php
/**
 * Title: Header
 * Slug: flavor/header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Site header with logo, navigation, and social links.
 *
 * @package flavor
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"var:preset|color|subtle","width":"1px"}}},"backgroundColor":"surface","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="border-bottom-color:var(--wp--preset--color--subtle);border-bottom-width:1px;padding-top:0;padding-bottom:0">
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
		<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignwide">
			
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:site-logo {"width":36,"shouldSyncIcon":true,"style":{"border":{"radius":"4px"}}} /-->
				<!-- wp:site-title {"level":0,"style":{"typography":{"fontWeight":"600","textDecoration":"none"}},"fontSize":"large"} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group">
				
				<!-- wp:navigation {"overlayBackgroundColor":"surface","overlayTextColor":"contrast","style":{"spacing":{"blockGap":"var:preset|spacing|30"},"typography":{"fontWeight":"500"}},"fontSize":"small","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
					<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'flavor' ); ?>","url":"/blog/","kind":"custom","isTopLevelLink":true} /-->
					<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'flavor' ); ?>","url":"/about/","kind":"custom","isTopLevelLink":true} /-->
					<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contact', 'flavor' ); ?>","url":"/contact/","kind":"custom","isTopLevelLink":true} /-->
				<!-- /wp:navigation -->

				<!-- wp:social-links {"size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"8px"}}},"className":"is-style-outline"} -->
				<ul class="wp-block-social-links has-small-icon-size is-style-outline">
					<!-- wp:social-link {"url":"#","service":"x"} /-->
					<!-- wp:social-link {"url":"#","service":"github"} /-->
					<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
				</ul>
				<!-- /wp:social-links -->

				<!-- wp:flavor/dark-mode-toggle {"buttonStyle":"simple"} /-->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
