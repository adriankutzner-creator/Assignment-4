<?php
/**
 * The functions.php file for the iShop theme.
 *
 * @package iShop
 * @since 2.5.0
 */
define( 'GRABBER_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Add theme support for block styles and editor style.
 *
 * @since 2.5.0
 *
 * @return void
 */
function ishop_setup() {
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/style-shared.min.css' );

	/*
	 * Load additional block styles.
	 * See details on how to add more styles in the readme.txt.
	 */
	$styled_blocks = [ 'button', 'quote', 'navigation', 'search' ];
	foreach ( $styled_blocks as $block_name ) {
		$args = array(
			'handle' => "ishop-$block_name",
			'src'    => get_theme_file_uri( "assets/css/blocks/$block_name.min.css" ),
			'path'   => get_theme_file_path( "assets/css/blocks/$block_name.min.css" ),
		);
		// Replace the "core" prefix if you are styling blocks from plugins.
		wp_enqueue_block_style( "core/$block_name", $args );
	}

}
add_action( 'after_setup_theme', 'ishop_setup' );

/**
 * Enqueue the CSS files.
 *
 * @since 2.5.0
 *
 * @return void
 */
function ishop_styles() {
	wp_enqueue_style(
		'ishop-style',
		get_stylesheet_uri(),
		[],
		GRABBER_VERSION
	);
	wp_enqueue_style(
		'ishop-shared-styles',
		get_theme_file_uri( 'assets/css/style-shared.min.css' ),
		[],
		GRABBER_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'ishop_styles' );

function ishop_styles_admin($hook) {
	if ( 'appearance_page_ishop-info' != $hook ) {
        return;
    }
	wp_enqueue_style('ishop-admin-styles',get_theme_file_uri( 'inc/core/bootstrap/css/admin-style.css' ),[], GRABBER_VERSION );
	wp_enqueue_style('ishop-bootstrap-responsive',get_theme_file_uri( 'inc/core/bootstrap/css/bootstrap-responsive.css' ),[], GRABBER_VERSION );
}
add_action( 'admin_enqueue_scripts', 'ishop_styles_admin' );
// Filters.
require_once get_theme_file_path( 'inc/filters.php' );

// Block variation example.
require_once get_theme_file_path( 'inc/register-block-variations.php' );

// Block style examples.
require_once get_theme_file_path( 'inc/register-block-styles.php' );

// Block pattern and block category examples.
require_once get_theme_file_path( 'inc/register-block-patterns.php' );