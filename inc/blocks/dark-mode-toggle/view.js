/**
 * Dark Mode Toggle - Frontend Script
 *
 * @package flavor
 */

( function() {
	'use strict';

	const STORAGE_KEY = 'flavor-color-mode';

	/**
	 * Get default mode from the first toggle block on the page.
	 */
	function getDefaultMode() {
		const toggle = document.querySelector( '.flavor-dark-mode-toggle[data-default-mode]' );
		if ( toggle ) {
			return toggle.getAttribute( 'data-default-mode' ) || 'system';
		}
		return 'system';
	}

	/**
	 * Get the theme based on system preference.
	 */
	function getSystemTheme() {
		return window.matchMedia( '(prefers-color-scheme: dark)' ).matches ? 'dark' : 'light';
	}

	/**
	 * Get the preferred theme - checks localStorage first, then default mode.
	 */
	function getPreferredTheme() {
		// Check localStorage for user's saved choice.
		const stored = localStorage.getItem( STORAGE_KEY );
		if ( stored ) {
			return stored;
		}

		// No stored preference, use the block's default mode setting.
		const defaultMode = getDefaultMode();
		
		if ( defaultMode === 'light' ) {
			return 'light';
		}
		
		if ( defaultMode === 'dark' ) {
			return 'dark';
		}
		
		// System preference.
		return getSystemTheme();
	}

	/**
	 * Set the theme on the document and save to localStorage.
	 */
	function setTheme( theme ) {
		document.documentElement.setAttribute( 'data-theme', theme );
		localStorage.setItem( STORAGE_KEY, theme );
		updateToggleButtons( theme );
	}

	/**
	 * Update all toggle buttons to reflect current theme.
	 */
	function updateToggleButtons( theme ) {
		const toggles = document.querySelectorAll( '.flavor-dark-mode-toggle' );
		toggles.forEach( function( toggle ) {
			const btn = toggle.querySelector( '.flavor-toggle-btn' );
			const label = toggle.querySelector( '.flavor-toggle-label' );
			
			if ( btn ) {
				btn.setAttribute( 'aria-pressed', theme === 'dark' );
			}
			
			if ( label ) {
				const showLabel = toggle.getAttribute( 'data-show-label' ) === 'true';
				if ( showLabel ) {
					const lightLabel = toggle.getAttribute( 'data-light-label' ) || 'Light';
					const darkLabel = toggle.getAttribute( 'data-dark-label' ) || 'Dark';
					label.textContent = theme === 'dark' ? lightLabel : darkLabel;
				}
			}
		} );
	}

	/**
	 * Toggle between light and dark themes.
	 */
	function toggleTheme() {
		const current = document.documentElement.getAttribute( 'data-theme' ) || getPreferredTheme();
		const next = current === 'dark' ? 'light' : 'dark';
		setTheme( next );
	}

	/**
	 * Initialize the dark mode toggle.
	 */
	function init() {
		// Get preferred theme and apply.
		const theme = getPreferredTheme();
		document.documentElement.setAttribute( 'data-theme', theme );
		updateToggleButtons( theme );

		// Add click handlers to all toggle buttons.
		document.querySelectorAll( '.flavor-dark-mode-toggle .flavor-toggle-btn' ).forEach( function( btn ) {
			btn.addEventListener( 'click', toggleTheme );
		} );

		// Listen for system preference changes (only affects users who haven't made a choice).
		window.matchMedia( '(prefers-color-scheme: dark)' ).addEventListener( 'change', function( e ) {
			const stored = localStorage.getItem( STORAGE_KEY );
			const defaultMode = getDefaultMode();
			
			// Only respond to system changes if no stored preference and default is system.
			if ( ! stored && defaultMode === 'system' ) {
				const newTheme = e.matches ? 'dark' : 'light';
				document.documentElement.setAttribute( 'data-theme', newTheme );
				updateToggleButtons( newTheme );
			}
		} );
	}

	// Initialize when DOM is ready.
	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
} )();

