<?php
/**
 * Newsletter Block - Server-side render
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

$heading          = ! empty( $attributes['heading'] ) ? $attributes['heading'] : __( 'Join the Newsletter', 'flavor' );
$description      = ! empty( $attributes['description'] ) ? $attributes['description'] : __( 'Get weekly insights on personal branding, productivity, and building an audience.', 'flavor' );
$button_text      = ! empty( $attributes['buttonText'] ) ? $attributes['buttonText'] : __( 'Subscribe', 'flavor' );
$placeholder      = ! empty( $attributes['placeholder'] ) ? $attributes['placeholder'] : __( 'Enter your email', 'flavor' );
$show_name_field  = ! empty( $attributes['showNameField'] );
$name_placeholder = ! empty( $attributes['namePlaceholder'] ) ? $attributes['namePlaceholder'] : __( 'Your First Name', 'flavor' );
$privacy_text     = isset( $attributes['privacyText'] ) ? $attributes['privacyText'] : __( 'No spam. Unsubscribe anytime.', 'flavor' );
$form_action      = ! empty( $attributes['formAction'] ) ? $attributes['formAction'] : '#';
$form_layout      = ! empty( $attributes['formLayout'] ) ? $attributes['formLayout'] : 'inline';
$background_style = ! empty( $attributes['backgroundStyle'] ) ? $attributes['backgroundStyle'] : 'dark';

$class_names = array(
	'flavor-newsletter',
	'flavor-newsletter--' . esc_attr( $background_style ),
	'flavor-newsletter--' . esc_attr( $form_layout ),
);

$wrapper_attributes = get_block_wrapper_attributes(
	array(
		'class' => implode( ' ', $class_names ),
	)
);
?>
<div <?php echo $wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<div class="flavor-newsletter__inner">
		<?php if ( $heading ) : ?>
			<h3 class="flavor-newsletter__heading"><?php echo wp_kses_post( $heading ); ?></h3>
		<?php endif; ?>

		<?php if ( $description ) : ?>
			<p class="flavor-newsletter__description"><?php echo wp_kses_post( $description ); ?></p>
		<?php endif; ?>

		<form class="flavor-newsletter__form" action="<?php echo esc_url( $form_action ); ?>" method="post">
			<?php if ( $show_name_field ) : ?>
				<input 
					type="text" 
					name="first_name" 
					class="flavor-newsletter__input flavor-newsletter__input--name" 
					placeholder="<?php echo esc_attr( $name_placeholder ); ?>"
				>
			<?php endif; ?>
			<input 
				type="email" 
				name="email" 
				class="flavor-newsletter__input" 
				placeholder="<?php echo esc_attr( $placeholder ); ?>" 
				required
			>
			<button type="submit" class="flavor-newsletter__button">
				<?php echo esc_html( $button_text ); ?>
			</button>
		</form>

		<?php if ( $privacy_text ) : ?>
			<p class="flavor-newsletter__privacy"><?php echo esc_html( $privacy_text ); ?></p>
		<?php endif; ?>
	</div>
</div>
