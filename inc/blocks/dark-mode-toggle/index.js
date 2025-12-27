/**
 * Dark Mode Toggle Block - Editor Script
 *
 * @package flavor
 */

( function( blocks, element, blockEditor, components, i18n ) {
	'use strict';

	const { registerBlockType } = blocks;
	const { useBlockProps, InspectorControls } = blockEditor;
	const { PanelBody, ToggleControl, TextControl, SelectControl } = components;
	const { createElement: el, Fragment } = element;
	const { __ } = i18n;

	// Icon components for different styles.
	const icons = {
		outline: {
			sun: function() {
				return el(
					'svg',
					{
						className: 'flavor-icon-sun',
						width: 18,
						height: 18,
						viewBox: '0 0 24 24',
						fill: 'none',
						stroke: 'currentColor',
						strokeWidth: 2,
						strokeLinecap: 'round',
						strokeLinejoin: 'round',
					},
					el( 'circle', { cx: 12, cy: 12, r: 4 } ),
					el( 'path', { d: 'M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41' } )
				);
			},
			moon: function() {
				return el(
					'svg',
					{
						className: 'flavor-icon-moon',
						width: 18,
						height: 18,
						viewBox: '0 0 24 24',
						fill: 'none',
						stroke: 'currentColor',
						strokeWidth: 2,
						strokeLinecap: 'round',
						strokeLinejoin: 'round',
					},
					el( 'path', { d: 'M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z' } )
				);
			},
		},
		filled: {
			sun: function() {
				return el(
					'svg',
					{
						className: 'flavor-icon-sun',
						width: 18,
						height: 18,
						viewBox: '0 0 24 24',
						fill: 'currentColor',
					},
					el( 'path', { d: 'M12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10zM12 1a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0V2a1 1 0 0 1 1-1zM12 19a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1zM4.22 4.22a1 1 0 0 1 1.42 0l1.41 1.41a1 1 0 1 1-1.41 1.42L4.22 5.64a1 1 0 0 1 0-1.42zM16.95 16.95a1 1 0 0 1 1.41 0l1.42 1.41a1 1 0 1 1-1.42 1.42l-1.41-1.42a1 1 0 0 1 0-1.41zM1 12a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2H2a1 1 0 0 1-1-1zM19 12a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2h-2a1 1 0 0 1-1-1zM5.64 16.95a1 1 0 0 1 0 1.41l-1.41 1.42a1 1 0 1 1-1.42-1.42l1.42-1.41a1 1 0 0 1 1.41 0zM18.36 4.22a1 1 0 0 1 0 1.42l-1.41 1.41a1 1 0 1 1-1.42-1.41l1.42-1.42a1 1 0 0 1 1.41 0z' } )
				);
			},
			moon: function() {
				return el(
					'svg',
					{
						className: 'flavor-icon-moon',
						width: 18,
						height: 18,
						viewBox: '0 0 24 24',
						fill: 'currentColor',
					},
					el( 'path', { d: 'M12 3a9 9 0 1 0 9 9c0-.46-.04-.92-.1-1.36a5.389 5.389 0 0 1-4.4 2.26 5.403 5.403 0 0 1-3.14-9.8c-.44-.06-.9-.1-1.36-.1z' } )
				);
			},
		},
		duotone: {
			sun: function() {
				return el(
					'svg',
					{
						className: 'flavor-icon-sun',
						width: 18,
						height: 18,
						viewBox: '0 0 24 24',
						fill: 'none',
					},
					el( 'circle', { cx: 12, cy: 12, r: 4, fill: 'currentColor', opacity: 0.3 } ),
					el( 'circle', { cx: 12, cy: 12, r: 4, stroke: 'currentColor', strokeWidth: 2, fill: 'none' } ),
					el( 'path', { d: 'M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41', stroke: 'currentColor', strokeWidth: 2, strokeLinecap: 'round' } )
				);
			},
			moon: function() {
				return el(
					'svg',
					{
						className: 'flavor-icon-moon',
						width: 18,
						height: 18,
						viewBox: '0 0 24 24',
						fill: 'none',
					},
					el( 'path', { d: 'M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z', fill: 'currentColor', opacity: 0.3 } ),
					el( 'path', { d: 'M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z', stroke: 'currentColor', strokeWidth: 2, strokeLinecap: 'round', strokeLinejoin: 'round', fill: 'none' } )
				);
			},
		},
	};

	registerBlockType( 'flavor/dark-mode-toggle', {
		edit: function( props ) {
			const { attributes, setAttributes } = props;
			const { defaultMode, buttonStyle, iconStyle, showLabel, lightLabel, darkLabel } = attributes;
			
			const classNames = [
				'flavor-dark-mode-toggle',
				'is-style-' + buttonStyle,
				'is-icon-' + iconStyle,
			].join( ' ' );
			
			const blockProps = useBlockProps( {
				className: classNames,
			} );

			const SunIcon = icons[ iconStyle ]?.sun || icons.outline.sun;
			const MoonIcon = icons[ iconStyle ]?.moon || icons.outline.moon;

			return el(
				Fragment,
				null,
				el(
					InspectorControls,
					null,
					// Mode Settings.
					el(
						PanelBody,
						{ title: __( 'Mode Settings', 'flavor' ), initialOpen: true },
						el( SelectControl, {
							label: __( 'Default Mode', 'flavor' ),
							help: __( 'The initial color mode for first-time visitors. User choices are saved automatically.', 'flavor' ),
							value: defaultMode,
							options: [
								{ label: __( 'System Preference', 'flavor' ), value: 'system' },
								{ label: __( 'Light Mode', 'flavor' ), value: 'light' },
								{ label: __( 'Dark Mode', 'flavor' ), value: 'dark' },
							],
							onChange: function( value ) {
								setAttributes( { defaultMode: value } );
							},
						} )
					),
					// Style Settings.
					el(
						PanelBody,
						{ title: __( 'Appearance', 'flavor' ), initialOpen: true },
						el( SelectControl, {
							label: __( 'Button Style', 'flavor' ),
							help: __( 'Simple is recommended for most sites.', 'flavor' ),
							value: buttonStyle,
							options: [
								{ label: __( 'Simple (Icon Only)', 'flavor' ), value: 'simple' },
								{ label: __( 'Default (Bordered)', 'flavor' ), value: 'default' },
								{ label: __( 'Minimal (Hover BG)', 'flavor' ), value: 'minimal' },
								{ label: __( 'Pill (Rounded BG)', 'flavor' ), value: 'pill' },
							],
							onChange: function( value ) {
								setAttributes( { buttonStyle: value } );
							},
						} ),
						el( SelectControl, {
							label: __( 'Icon Style', 'flavor' ),
							value: iconStyle,
							options: [
								{ label: __( 'Outline', 'flavor' ), value: 'outline' },
								{ label: __( 'Filled', 'flavor' ), value: 'filled' },
								{ label: __( 'Duotone', 'flavor' ), value: 'duotone' },
							],
							onChange: function( value ) {
								setAttributes( { iconStyle: value } );
							},
						} )
					),
					// Label Settings.
					el(
						PanelBody,
						{ title: __( 'Label', 'flavor' ), initialOpen: false },
						el( ToggleControl, {
							label: __( 'Show Label', 'flavor' ),
							checked: showLabel,
							onChange: function( value ) {
								setAttributes( { showLabel: value } );
							},
						} ),
						showLabel && el( TextControl, {
							label: __( 'Light Mode Label', 'flavor' ),
							value: lightLabel,
							onChange: function( value ) {
								setAttributes( { lightLabel: value } );
							},
						} ),
						showLabel && el( TextControl, {
							label: __( 'Dark Mode Label', 'flavor' ),
							value: darkLabel,
							onChange: function( value ) {
								setAttributes( { darkLabel: value } );
							},
						} )
					)
				),
				el(
					'div',
					blockProps,
					el(
						'button',
						{
							type: 'button',
							className: 'flavor-toggle-btn',
							'aria-label': __( 'Toggle color mode', 'flavor' ),
						},
						el( SunIcon ),
						el( MoonIcon ),
						showLabel && el( 'span', { className: 'flavor-toggle-label' }, lightLabel )
					)
				)
			);
		},

		save: function() {
			// Dynamic block - rendered via render.php.
			return null;
		},
	} );
} )(
	window.wp.blocks,
	window.wp.element,
	window.wp.blockEditor,
	window.wp.components,
	window.wp.i18n
);

