<?php
/**
 * Block patterns
 *
 * @package ishop
 * @since 2.5.0
 */

/**
 * Registers block patterns and block pattern categories.
 *
 * @since 2.5.0
 *
 * @return void
 */
function ishop_register_block_patterns() {

	/**
	 * Register an example block pattern category.
	 *
	 * @since 2.5.0
	 */
	$patterns = array();

	$block_pattern_categories = array(
		'theme' => array( 'label' => __( 'Theme patterns', 'ishop' ) )
	);

	$block_pattern_categories = apply_filters( 'ishop_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

}
add_action( 'init', 'ishop_register_block_patterns', 9 );

/**
 * This is an example of how to unregister a core block pattern and a block pattern category.
 * Must be called after the patterns and pattern categories that you want to unregister have been added.
 *
 * @see https://developer.wordpress.org/reference/functions/unregister_block_pattern/
 * @see https://developer.wordpress.org/reference/functions/unregister_block_pattern_category/
 *
 * @since 2.5.0
 *
 * @return void
 */
function ishop_unregister_patterns() {
	unregister_block_pattern( 'core/query-small-posts' );
	unregister_block_pattern( 'core/query-large-title-posts' );
	unregister_block_pattern( 'core/query-offset-posts' );
	unregister_block_pattern_category( 'featured' );
}
add_action( 'init', 'ishop_unregister_patterns', 10 );
