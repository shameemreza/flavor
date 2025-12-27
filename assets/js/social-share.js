/**
 * Social Share Links
 *
 * Dynamically updates social share links with actual share URLs.
 *
 * @package flavor
 * @since 1.0.0
 */

( function () {
	'use strict';

	/**
	 * Initialize social share links.
	 */
	function initSocialShare() {
		const shareLinks = document.querySelectorAll( '.flavor-share-links .wp-social-link a' );

		if ( ! shareLinks.length ) {
			return;
		}

		const pageUrl = encodeURIComponent( window.location.href );
		const pageTitle = encodeURIComponent( document.title );

		shareLinks.forEach( function ( link ) {
			const parent = link.closest( '.wp-social-link' );
			if ( ! parent ) {
				return;
			}

			// Determine the social network from the class.
			let shareUrl = '';

			if ( parent.classList.contains( 'wp-social-link-x' ) ) {
				shareUrl = 'https://twitter.com/intent/tweet?url=' + pageUrl + '&text=' + pageTitle;
			} else if ( parent.classList.contains( 'wp-social-link-facebook' ) ) {
				shareUrl = 'https://www.facebook.com/sharer/sharer.php?u=' + pageUrl;
			} else if ( parent.classList.contains( 'wp-social-link-linkedin' ) ) {
				shareUrl = 'https://www.linkedin.com/sharing/share-offsite/?url=' + pageUrl;
			} else if ( parent.classList.contains( 'wp-social-link-pinterest' ) ) {
				// Get the first image on the page for Pinterest.
				const featuredImage = document.querySelector( '.wp-block-post-featured-image img' );
				const imageUrl = featuredImage ? encodeURIComponent( featuredImage.src ) : '';
				shareUrl = 'https://pinterest.com/pin/create/button/?url=' + pageUrl + '&media=' + imageUrl + '&description=' + pageTitle;
			} else if ( parent.classList.contains( 'wp-social-link-mail' ) ) {
				shareUrl = 'mailto:?subject=' + pageTitle + '&body=' + decodeURIComponent( pageUrl );
			} else if ( parent.classList.contains( 'wp-social-link-whatsapp' ) ) {
				shareUrl = 'https://wa.me/?text=' + pageTitle + '%20' + pageUrl;
			} else if ( parent.classList.contains( 'wp-social-link-telegram' ) ) {
				shareUrl = 'https://t.me/share/url?url=' + pageUrl + '&text=' + pageTitle;
			} else if ( parent.classList.contains( 'wp-social-link-reddit' ) ) {
				shareUrl = 'https://www.reddit.com/submit?url=' + pageUrl + '&title=' + pageTitle;
			}

			if ( shareUrl ) {
				link.href = shareUrl;
				link.target = '_blank';
				link.rel = 'noopener noreferrer';
			}
		} );
	}

	// Initialize on DOMContentLoaded.
	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', initSocialShare );
	} else {
		initSocialShare();
	}
} )();

