<?php
/**
 * Block Variations
 *
 * @package ishop
 * @since 2.5.0
 */

/**
 * This is an example of how to register a block variation.
 * Type /full or use the block inserter to insert a full width group block.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-variations/
 *
 * @since 2.5.0
 *
 * @return void
 */
function ishop_register_block_variation() {
	wp_enqueue_script(
		'ishop-block-variations',
		get_template_directory_uri() . '/assets/js/block-variation.js',
		array( 'wp-blocks' ),
		GRABBER_VERSION,
		true
	);
}
add_action( 'enqueue_block_assets', 'ishop_register_block_variation' );
