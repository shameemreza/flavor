<?php
/**
 * Support Creator Block - Server-side render
 *
 * @package flavor
 * @since 1.0.0
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content.
 * @var WP_Block $block      Block instance.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$heading            = ! empty( $attributes['heading'] ) ? $attributes['heading'] : __( 'Support My Work', 'flavor' );
$description        = ! empty( $attributes['description'] ) ? $attributes['description'] : __( 'If you found this helpful, consider supporting me!', 'flavor' );
$show_heading       = isset( $attributes['showHeading'] ) ? $attributes['showHeading'] : true;
$kofi_url           = ! empty( $attributes['kofiUrl'] ) ? $attributes['kofiUrl'] : '';
$patreon_url        = ! empty( $attributes['patreonUrl'] ) ? $attributes['patreonUrl'] : '';
$buymeacoffee_url   = ! empty( $attributes['buymeacoffeeUrl'] ) ? $attributes['buymeacoffeeUrl'] : '';
$paypal_url         = ! empty( $attributes['paypalUrl'] ) ? $attributes['paypalUrl'] : '';
$github_url         = ! empty( $attributes['githubUrl'] ) ? $attributes['githubUrl'] : '';
$custom_url         = ! empty( $attributes['customUrl'] ) ? $attributes['customUrl'] : '';
$custom_label       = ! empty( $attributes['customLabel'] ) ? $attributes['customLabel'] : __( 'Support', 'flavor' );
$layout             = ! empty( $attributes['layout'] ) ? $attributes['layout'] : 'horizontal';
$style              = ! empty( $attributes['style'] ) ? $attributes['style'] : 'default';
$use_service_colors = isset( $attributes['useServiceColors'] ) ? $attributes['useServiceColors'] : true;

$has_links = $kofi_url || $patreon_url || $buymeacoffee_url || $paypal_url || $github_url || $custom_url;

if ( ! $has_links ) {
	return; // Don't render if no links.
}

$class_names = array(
	'flavor-support',
	'flavor-support--' . esc_attr( $style ),
	'flavor-support--' . esc_attr( $layout ),
);

if ( $use_service_colors ) {
	$class_names[] = 'flavor-support--service-colors';
}

$wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => implode( ' ', $class_names ),
	)
);

// Icons.
$icons = array(
	'kofi'          => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M23.881 8.948c-.773-4.085-4.859-4.593-4.859-4.593H.723c-.604 0-.679.798-.679.798s-.082 7.324-.022 11.822c.164 2.424 2.586 2.672 2.586 2.672s8.267-.023 11.966-.049c2.438-.426 2.683-2.566 2.658-3.734 4.352.24 7.422-2.831 6.649-6.916zm-11.062 3.511c-1.246 1.453-4.011 3.976-4.011 3.976s-.121.119-.31.023c-.076-.057-.108-.09-.108-.09-.443-.441-3.368-3.049-4.034-3.954-.709-.965-1.041-2.7-.091-3.71.951-1.01 3.005-1.086 4.363.407 0 0 1.565-1.782 3.468-.963 1.904.82 1.832 3.011.723 4.311zm6.173.478c-.928.116-1.682.028-1.682.028V7.284h1.77s1.971.551 1.971 2.638c0 1.913-.985 2.667-2.059 3.015z"/></svg>',
	'patreon'       => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M15.386.524c-4.764 0-8.64 3.876-8.64 8.64 0 4.75 3.876 8.613 8.64 8.613 4.75 0 8.614-3.864 8.614-8.613C24 4.4 20.136.524 15.386.524zM.003 23.537h4.22V.524H.003z"/></svg>',
	'buymeacoffee'  => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.216 6.415l-.132-.666c-.119-.598-.388-1.163-1.001-1.379-.197-.069-.42-.098-.57-.241-.152-.143-.196-.366-.231-.572-.065-.378-.125-.756-.192-1.133-.057-.325-.102-.69-.25-.987-.195-.4-.597-.634-.996-.788a5.723 5.723 0 00-.626-.194c-1-.263-2.05-.36-3.077-.416a25.834 25.834 0 00-3.7.062c-.915.083-1.88.184-2.75.5-.318.116-.646.256-.888.501-.297.302-.393.77-.177 1.146.154.267.415.456.692.58.36.162.737.284 1.123.366 1.075.238 2.189.331 3.287.37 1.218.05 2.437.01 3.65-.118.299-.033.598-.073.896-.119.352-.054.578-.513.474-.834-.124-.383-.457-.531-.834-.473-.466.074-.96.108-1.382.146-1.177.08-2.358.082-3.536.006a22.228 22.228 0 01-1.157-.107c-.086-.01-.18-.025-.258-.036-.243-.036-.484-.08-.724-.13-.111-.027-.111-.185 0-.212h.005c.277-.06.557-.108.838-.147h.002c.131-.009.263-.032.394-.048a25.076 25.076 0 013.426-.12c.674.019 1.347.067 2.017.144l.228.031c.267.04.533.088.798.145.392.085.895.113 1.07.542.055.137.08.288.111.431l.319 1.484a.237.237 0 01-.199.284h-.003c-.037.006-.075.01-.112.015a36.704 36.704 0 01-4.743.295 37.059 37.059 0 01-4.699-.304c-.14-.017-.293-.042-.417-.06-.326-.048-.649-.108-.973-.161-.393-.065-.768-.032-1.123.161-.29.16-.527.404-.675.701-.154.316-.199.66-.267 1-.069.34-.176.707-.135 1.056.087.753.613 1.365 1.37 1.502a39.69 39.69 0 0011.343.376.483.483 0 01.535.53l-.071.697-1.018 9.907c-.041.41-.047.832-.125 1.237-.122.637-.553 1.028-1.182 1.171-.577.131-1.165.2-1.756.205-.656.004-1.31-.025-1.966-.022-.699.004-1.556-.06-2.095-.58-.475-.458-.54-1.174-.605-1.793l-.731-7.013-.322-3.094c-.037-.351-.286-.695-.678-.678-.336.015-.718.3-.678.679l.228 2.185.949 9.112c.147 1.344 1.174 2.068 2.446 2.272.742.12 1.503.144 2.257.156.966.016 1.942.053 2.892-.122 1.408-.258 2.465-1.198 2.616-2.657.34-3.332.683-6.663 1.024-9.995l.215-2.087a.484.484 0 01.39-.426c.402-.078.787-.212 1.074-.518.455-.488.546-1.124.385-1.766zm-1.478.772c-.145.137-.363.201-.578.233-2.416.359-4.866.54-7.308.46-1.748-.06-3.477-.254-5.207-.498-.17-.024-.353-.055-.47-.18-.22-.236-.111-.71-.054-.995.052-.26.152-.609.463-.646.484-.057 1.046.148 1.526.22.577.088 1.156.159 1.737.212 2.48.226 5.002.19 7.472-.14.45-.06.899-.13 1.345-.21.399-.072.84-.206 1.08.206.166.281.188.657.162.974a.544.544 0 01-.169.364z"/></svg>',
	'paypal'        => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M7.076 21.337H2.47a.641.641 0 01-.633-.74L4.944 3.72a.77.77 0 01.757-.64h6.622c2.193 0 3.87.519 4.99 1.542 1.16 1.062 1.593 2.596 1.286 4.557-.02.134-.041.268-.068.403-.491 2.954-2.086 4.937-4.482 5.573a9.05 9.05 0 01-2.371.302H9.623a.77.77 0 00-.757.64l-.879 5.557a.641.641 0 01-.633.545l-.278-.262zm11.846-13.79c-.02.15-.041.293-.068.441-.57 3.42-2.549 4.554-5.074 4.554h-1.286a.641.641 0 00-.633.545l-.985 6.234a.64.64 0 00.632.74h2.89a.64.64 0 00.633-.54l.026-.138.496-3.143.032-.173a.64.64 0 01.633-.54h.398c2.579 0 4.6-1.048 5.19-4.082.248-1.263.119-2.317-.535-3.058a2.66 2.66 0 00-.762-.592 7.362 7.362 0 00-1.587-.248z"/></svg>',
	'github'        => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>',
	'custom'        => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>',
);
?>
<div <?php echo $wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<?php if ( $show_heading ) : ?>
		<div class="flavor-support__header">
			<?php if ( $heading ) : ?>
				<h3 class="flavor-support__heading"><?php echo wp_kses_post( $heading ); ?></h3>
			<?php endif; ?>
			<?php if ( $description ) : ?>
				<p class="flavor-support__description"><?php echo wp_kses_post( $description ); ?></p>
			<?php endif; ?>
		</div>
	<?php endif; ?>

	<div class="flavor-support__buttons">
		<?php if ( $kofi_url ) : ?>
			<a href="<?php echo esc_url( $kofi_url ); ?>" class="flavor-support__button flavor-support__button--kofi" target="_blank" rel="noopener noreferrer">
				<span class="flavor-support__icon"><?php echo $icons['kofi']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
				<span><?php esc_html_e( 'Ko-fi', 'flavor' ); ?></span>
			</a>
		<?php endif; ?>

		<?php if ( $patreon_url ) : ?>
			<a href="<?php echo esc_url( $patreon_url ); ?>" class="flavor-support__button flavor-support__button--patreon" target="_blank" rel="noopener noreferrer">
				<span class="flavor-support__icon"><?php echo $icons['patreon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
				<span><?php esc_html_e( 'Patreon', 'flavor' ); ?></span>
			</a>
		<?php endif; ?>

		<?php if ( $buymeacoffee_url ) : ?>
			<a href="<?php echo esc_url( $buymeacoffee_url ); ?>" class="flavor-support__button flavor-support__button--buymeacoffee" target="_blank" rel="noopener noreferrer">
				<span class="flavor-support__icon"><?php echo $icons['buymeacoffee']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
				<span><?php esc_html_e( 'Buy Me a Coffee', 'flavor' ); ?></span>
			</a>
		<?php endif; ?>

		<?php if ( $paypal_url ) : ?>
			<a href="<?php echo esc_url( $paypal_url ); ?>" class="flavor-support__button flavor-support__button--paypal" target="_blank" rel="noopener noreferrer">
				<span class="flavor-support__icon"><?php echo $icons['paypal']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
				<span><?php esc_html_e( 'PayPal', 'flavor' ); ?></span>
			</a>
		<?php endif; ?>

		<?php if ( $github_url ) : ?>
			<a href="<?php echo esc_url( $github_url ); ?>" class="flavor-support__button flavor-support__button--github" target="_blank" rel="noopener noreferrer">
				<span class="flavor-support__icon"><?php echo $icons['github']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
				<span><?php esc_html_e( 'GitHub Sponsors', 'flavor' ); ?></span>
			</a>
		<?php endif; ?>

		<?php if ( $custom_url ) : ?>
			<a href="<?php echo esc_url( $custom_url ); ?>" class="flavor-support__button flavor-support__button--custom" target="_blank" rel="noopener noreferrer">
				<span class="flavor-support__icon"><?php echo $icons['custom']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
				<span><?php echo esc_html( $custom_label ); ?></span>
			</a>
		<?php endif; ?>
	</div>
</div>
