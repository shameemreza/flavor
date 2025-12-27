/**
 * Newsletter Block
 *
 * @package flavor
 */

( function ( blocks, element, blockEditor, components, i18n ) {
	const { registerBlockType } = blocks;
	const { createElement: el, Fragment } = element;
	const { useBlockProps, InspectorControls, RichText } = blockEditor;
	const { PanelBody, TextControl, SelectControl, ToggleControl } = components;
	const { __ } = i18n;

	registerBlockType( 'flavor/newsletter', {
		edit: function ( props ) {
			const { attributes, setAttributes } = props;
			const {
				heading,
				description,
				buttonText,
				placeholder,
				showNameField,
				namePlaceholder,
				privacyText,
				formAction,
				formLayout,
				backgroundStyle,
			} = attributes;

			const blockProps = useBlockProps( {
				className: `flavor-newsletter flavor-newsletter--${ backgroundStyle } flavor-newsletter--${ formLayout }`,
			} );

			return el(
				Fragment,
				null,
				el(
					InspectorControls,
					null,
					// Form Fields Panel
					el(
						PanelBody,
						{ title: __( 'Form Fields', 'flavor' ), initialOpen: true },
						el( ToggleControl, {
							__nextHasNoMarginBottom: true,
							label: __( 'Show Name Field', 'flavor' ),
							help: showNameField 
								? __( 'Name field is visible', 'flavor' ) 
								: __( 'Only email field is shown', 'flavor' ),
							checked: showNameField,
							onChange: ( value ) => setAttributes( { showNameField: value } ),
						} ),
						showNameField && el( TextControl, {
							__nextHasNoMarginBottom: true,
							label: __( 'Name Placeholder', 'flavor' ),
							value: namePlaceholder,
							onChange: ( value ) => setAttributes( { namePlaceholder: value } ),
						} ),
						el( TextControl, {
							__nextHasNoMarginBottom: true,
							label: __( 'Email Placeholder', 'flavor' ),
							value: placeholder,
							onChange: ( value ) => setAttributes( { placeholder: value } ),
						} ),
						el( TextControl, {
							__nextHasNoMarginBottom: true,
							label: __( 'Button Text', 'flavor' ),
							value: buttonText,
							onChange: ( value ) => setAttributes( { buttonText: value } ),
						} ),
						el( TextControl, {
							__nextHasNoMarginBottom: true,
							label: __( 'Privacy Text', 'flavor' ),
							value: privacyText,
							onChange: ( value ) => setAttributes( { privacyText: value } ),
							help: __( 'Leave empty to hide', 'flavor' ),
						} )
					),
					// Layout Panel
					el(
						PanelBody,
						{ title: __( 'Layout', 'flavor' ), initialOpen: false },
						el( SelectControl, {
							__nextHasNoMarginBottom: true,
							label: __( 'Style Preset', 'flavor' ),
							value: backgroundStyle,
							options: [
								{ label: __( 'Dark', 'flavor' ), value: 'dark' },
								{ label: __( 'Light', 'flavor' ), value: 'light' },
								{ label: __( 'Card', 'flavor' ), value: 'card' },
							],
							onChange: ( value ) => setAttributes( { backgroundStyle: value } ),
							help: __( 'Quick style presets. Use Styles tab for custom colors.', 'flavor' ),
						} ),
						el( SelectControl, {
							__nextHasNoMarginBottom: true,
							label: __( 'Form Layout', 'flavor' ),
							value: formLayout,
							options: [
								{ label: __( 'Inline (Horizontal)', 'flavor' ), value: 'inline' },
								{ label: __( 'Stacked (Vertical)', 'flavor' ), value: 'stacked' },
							],
							onChange: ( value ) => setAttributes( { formLayout: value } ),
						} )
					),
					// Newsletter Service Panel
					el(
						PanelBody,
						{ title: __( 'Newsletter Service', 'flavor' ), initialOpen: false },
						el( TextControl, {
							__nextHasNoMarginBottom: true,
							label: __( 'Form Action URL', 'flavor' ),
							value: formAction,
							onChange: ( value ) => setAttributes( { formAction: value } ),
							help: __( 'Paste your newsletter service form URL. Works with Mailchimp, ConvertKit, Buttondown, etc.', 'flavor' ),
						} )
					)
				),
				el(
					'div',
					blockProps,
					el(
						'div',
						{ className: 'flavor-newsletter__inner' },
						el( RichText, {
							tagName: 'h3',
							className: 'flavor-newsletter__heading',
							value: heading,
							onChange: ( value ) => setAttributes( { heading: value } ),
							placeholder: __( 'Newsletter heading...', 'flavor' ),
						} ),
						el( RichText, {
							tagName: 'p',
							className: 'flavor-newsletter__description',
							value: description,
							onChange: ( value ) => setAttributes( { description: value } ),
							placeholder: __( 'Description...', 'flavor' ),
						} ),
						el(
							'div',
							{ className: 'flavor-newsletter__form' },
							showNameField && el( 'input', {
								type: 'text',
								className: 'flavor-newsletter__input flavor-newsletter__input--name',
								placeholder: namePlaceholder,
								disabled: true,
							} ),
							el( 'input', {
								type: 'email',
								className: 'flavor-newsletter__input',
								placeholder: placeholder,
								disabled: true,
							} ),
							el(
								'button',
								{
									type: 'button',
									className: 'flavor-newsletter__button',
									disabled: true,
								},
								buttonText
							)
						),
						privacyText &&
							el(
								'p',
								{ className: 'flavor-newsletter__privacy' },
								privacyText
							)
					)
				)
			);
		},
	} );
} )(
	window.wp.blocks,
	window.wp.element,
	window.wp.blockEditor,
	window.wp.components,
	window.wp.i18n
);
