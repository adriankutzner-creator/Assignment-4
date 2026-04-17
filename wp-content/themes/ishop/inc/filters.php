<?php
/**
 * Filters
 *
 * @package ishop
 * @since 2.5.0
 */

/**
 * Show '(No title)' if a post has no title.
 *
 * @since 2.5.0
 */
add_filter(
	'the_title',
	function( $title ) {
		if ( ! is_admin() && empty( $title ) ) {
			$title = _x( '(No title)', 'Used if posts or pages has no title', 'ishop' );
		}

		return $title;
	}
);

/**
 * Replace the default [...] excerpt more with an elipsis.
 *
 * @since 2.5.0
*/
add_filter(
	'excerpt_more',
	function( $more ) {
		return '&hellip;';
	}
);
