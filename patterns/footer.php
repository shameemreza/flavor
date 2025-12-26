<?php
/**
 * Title: Footer
 * Slug: flavor/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Site footer with copyright, navigation, and social links.
 *
 * @package flavor
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"}},"border":{"top":{"color":"var:preset|color|subtle","width":"1px"}}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="border-top-color:var(--wp--preset--color--subtle);border-top-width:1px;padding-top:0;padding-bottom:0">
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignwide">
			
			<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"textColor":"secondary","style":{"typography":{"fontWeight":"300"}},"fontSize":"small"} -->
				<p class="has-secondary-color has-text-color has-small-font-size" style="font-weight:300">&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:site-title {"level":0,"isLink":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"small"} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group">
				
				<!-- wp:navigation {"textColor":"secondary","overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|30"},"typography":{"fontWeight":"300"}},"fontSize":"small","layout":{"type":"flex","justifyContent":"center"}} -->
					<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Privacy', 'flavor' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
					<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Terms', 'flavor' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
					<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Contact', 'flavor' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
				<!-- /wp:navigation -->

				<!-- wp:social-links {"size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"8px"}}},"className":"is-style-outline"} -->
				<ul class="wp-block-social-links has-small-icon-size is-style-outline">
					<!-- wp:social-link {"url":"#","service":"x"} /-->
					<!-- wp:social-link {"url":"#","service":"github"} /-->
					<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
				</ul>
				<!-- /wp:social-links -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
