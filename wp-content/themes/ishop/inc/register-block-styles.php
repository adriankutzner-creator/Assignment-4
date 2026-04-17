<?php
/**
 * Block styles.
 *
 * @package ishop
 * @since 2.5.0
 */

/**
 * Register block styles
 *
 * @since 2.5.0
 *
 * @return void
 */
function ishop_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'ishop-flat-button',
			'label' => __( 'Flat button', 'ishop' ),
		)
	);
	register_block_style(
		'core/button',
		array(
			'name'         => 'ishop-button-styleround',
			'label'        => __( 'Round Button', 'ishop' ),
		)
	);
	register_block_style(
		'core/button',
		array(
			'name'         => 'ishop-button-styleone',
			'label'        => __( 'Style 1', 'ishop' ),
			'inline_style' => '.is-style-ishop-button-styleone {
					border: none;
					text-align: center;
					outline: none;
					overflow: hidden;
					position: relative;
					box-shadow: 0 5px 15px rgba(0,0,0,0.20);
				}',
		)
	);
	register_block_style(
		'core/button',
		array(
			'name'         => 'ishop-button-styletwo',
			'label'        => __( 'Style 2', 'ishop' ),
		)
	);
	register_block_style(
		'core/button',
		array(
			'name'         => 'ishop-button-stylethree',
			'label'        => __( 'Style 3', 'ishop' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'ishop-list-underline',
			'label' => __( 'Underlined list items', 'ishop' ),
		)
	);
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'ishop-list-plane',
			'label' => __( 'Plane list items', 'ishop' ),
			'is_default'   => false,
		)
	);
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'ishop-list-left-border',
			'label' => __( 'Left Border list items', 'ishop' ),
			'is_default'   => false,
		)
	);
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'ishop-list-check',
			'label' => __( 'Check icon list items', 'ishop' ),
			'is_default'   => false,
		)
	);
	register_block_style( 
		'core/heading', 
		array(
			'name'         => 'ishop-title-underline', // Unique slug for your custom style
			'label'        => __( 'Underlined Title', 'ishop' ), // Display name of the style in the block editor
			'inline_style' => '.is-style-ishop-title-underline {					
					border-bottom: 2px solid #ccc;
				}',
		)
	);

		register_block_style(
			'core/post-title',
			array(
				'name'         => 'ishop-title-styleone',
				'label'        => __( 'Style 1', 'ishop' ),
				'inline_style' => '.is-style-ishop-title-styleone {
						background: #4CAF50;
						box-shadow: 2px 3px 1px 2px #333;
					}',
			)
		);



	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'ishop-box-shadow',
			'label' => __( 'Box shadow', 'ishop' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'ishop-box-shadow',
			'label' => __( 'Box shadow', 'ishop' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'ishop-box-shadow',
			'label' => __( 'Box shadow', 'ishop' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/details',
		array(
			'name'  => 'ishop-plus',
			'label' => __( 'Plus & minus', 'ishop' ),
		)
	);
}
add_action( 'init', 'ishop_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 2.5.0
 *
 * @return void
 */
function ishop_unregister_block_style() {
	wp_enqueue_script(
		'ishop-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		GRABBER_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'ishop_unregister_block_style' );
