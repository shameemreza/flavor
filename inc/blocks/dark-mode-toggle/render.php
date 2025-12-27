<?php
/**
 * Dark Mode Toggle Block - Render Template
 *
 * @package flavor
 * @var array    $attributes Block attributes.
 * @var string   $content    Block content.
 * @var WP_Block $block      Block instance.
 */

$default_mode  = isset( $attributes['defaultMode'] ) ? $attributes['defaultMode'] : 'system';
$button_style  = isset( $attributes['buttonStyle'] ) ? $attributes['buttonStyle'] : 'default';
$icon_style    = isset( $attributes['iconStyle'] ) ? $attributes['iconStyle'] : 'outline';
$show_label    = isset( $attributes['showLabel'] ) ? $attributes['showLabel'] : false;
$light_label   = isset( $attributes['lightLabel'] ) ? $attributes['lightLabel'] : __( 'Light', 'flavor' );
$dark_label    = isset( $attributes['darkLabel'] ) ? $attributes['darkLabel'] : __( 'Dark', 'flavor' );

// Add inline script for immediate theme application (runs before view.js).
static $theme_script_added = false;
if ( ! $theme_script_added ) {
	$theme_script_added = true;
	?>
	<script>
	(function(){
		var stored = localStorage.getItem('flavor-color-mode');
		var defaultMode = '<?php echo esc_js( $default_mode ); ?>';
		var theme;
		if (stored) {
			theme = stored;
		} else if (defaultMode === 'dark') {
			theme = 'dark';
		} else if (defaultMode === 'light') {
			theme = 'light';
		} else {
			theme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
		}
		document.documentElement.setAttribute('data-theme', theme);
	})();
	</script>
	<?php
}

$class_names = array(
	'flavor-dark-mode-toggle',
	'is-style-' . $button_style,
	'is-icon-' . $icon_style,
);

$wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class'            => implode( ' ', $class_names ),
		'data-default-mode'=> esc_attr( $default_mode ),
		'data-show-label'  => $show_label ? 'true' : 'false',
		'data-light-label' => esc_attr( $light_label ),
		'data-dark-label'  => esc_attr( $dark_label ),
	)
);

// Icon SVGs based on style.
$icons = array(
	'outline' => array(
		'sun'  => '<svg class="flavor-icon-sun" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="4"></circle><path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"></path></svg>',
		'moon' => '<svg class="flavor-icon-moon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path></svg>',
	),
	'filled'  => array(
		'sun'  => '<svg class="flavor-icon-sun" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10zM12 1a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0V2a1 1 0 0 1 1-1zM12 19a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1zM4.22 4.22a1 1 0 0 1 1.42 0l1.41 1.41a1 1 0 1 1-1.41 1.42L4.22 5.64a1 1 0 0 1 0-1.42zM16.95 16.95a1 1 0 0 1 1.41 0l1.42 1.41a1 1 0 1 1-1.42 1.42l-1.41-1.42a1 1 0 0 1 0-1.41zM1 12a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2H2a1 1 0 0 1-1-1zM19 12a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2h-2a1 1 0 0 1-1-1zM5.64 16.95a1 1 0 0 1 0 1.41l-1.41 1.42a1 1 0 1 1-1.42-1.42l1.42-1.41a1 1 0 0 1 1.41 0zM18.36 4.22a1 1 0 0 1 0 1.42l-1.41 1.41a1 1 0 1 1-1.42-1.41l1.42-1.42a1 1 0 0 1 1.41 0z"></path></svg>',
		'moon' => '<svg class="flavor-icon-moon" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 3a9 9 0 1 0 9 9c0-.46-.04-.92-.1-1.36a5.389 5.389 0 0 1-4.4 2.26 5.403 5.403 0 0 1-3.14-9.8c-.44-.06-.9-.1-1.36-.1z"></path></svg>',
	),
	'duotone' => array(
		'sun'  => '<svg class="flavor-icon-sun" width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="12" r="4" fill="currentColor" opacity="0.3"></circle><circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="2" fill="none"></circle><path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path></svg>',
		'moon' => '<svg class="flavor-icon-moon" width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z" fill="currentColor" opacity="0.3"></path><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"></path></svg>',
	),
);

$sun_icon  = isset( $icons[ $icon_style ]['sun'] ) ? $icons[ $icon_style ]['sun'] : $icons['outline']['sun'];
$moon_icon = isset( $icons[ $icon_style ]['moon'] ) ? $icons[ $icon_style ]['moon'] : $icons['outline']['moon'];
?>
<div <?php echo $wrapper_attributes; ?>>
	<button type="button" class="flavor-toggle-btn" aria-label="<?php esc_attr_e( 'Toggle color mode', 'flavor' ); ?>">
		<?php echo $sun_icon; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		<?php echo $moon_icon; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		<?php if ( $show_label ) : ?>
			<span class="flavor-toggle-label"><?php echo esc_html( $light_label ); ?></span>
		<?php endif; ?>
	</button>
</div>

