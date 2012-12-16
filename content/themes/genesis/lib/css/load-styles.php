<?php
/**
 * Controls the adding of stylesheets.
 *
 * @category Genesis
 * @package  Scripts-Styles
 * @author   StudioPress
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL-2.0+
 * @link     http://www.studiopress.com/themes/genesis
 */

add_action( 'genesis_meta', 'genesis_load_stylesheet' );
/**
 * Echo reference to the style sheet.
 *
 * If a child theme is active, it loads the child theme's stylesheet,
 * otherwise, it loads the Genesis stylesheet.
 *
 * @since 0.2.2
 */
function genesis_load_stylesheet() {

	add_action( 'wp_enqueue_scripts', 'genesis_enqueue_main_stylesheet' );

}

/**
 * Enqueue main stylesheet.
 *
 * Properly enqueue the main stylesheet.
 *
 * @since 1.9.0
 */
function genesis_enqueue_main_stylesheet() {

	if ( ! is_child_theme() ) {
		wp_enqueue_style( PARENT_THEME_NAME, get_stylesheet_uri(), false, PARENT_THEME_VERSION );
		return;
	}

	if ( defined( 'CHILD_THEME_NAME' ) && CHILD_THEME_NAME ) {
		wp_enqueue_style( CHILD_THEME_NAME, get_stylesheet_uri(), false, PARENT_THEME_VERSION );
		return;
	}

	wp_enqueue_style( 'child-theme', get_stylesheet_uri(), false, PARENT_THEME_VERSION );

}

#add_action( 'wp_enqueue_scripts', 'genesis_enqueue_responsive_stylesheet' );
/**
 * If child theme supports responsive, look for and enqueue responsive.css.
 *
 * File (responsive.css) can be located either in the root theme directory, or in a /css subdirectory.
 *
 * @since 1.9.0
 */
function genesis_enqueue_responsive_stylesheet() {

	$stylesheet = genesis_get_theme_support_arg( 'genesis-responsive', 'css' );

	if ( ! $stylesheet )
		return;

	$handle = defined( 'CHILD_THEME_NAME' ) && CHILD_THEME_NAME ? CHILD_THEME_NAME . '-responsive' : 'child-theme-responsive';

	if ( file_exists( $stylesheet ) ) {
		wp_enqueue_style( $handle, $stylesheet, false, PARENT_THEME_VERSION );
		return;
	}

}

add_action( 'admin_print_styles', 'genesis_load_admin_styles' );
/**
 * Enqueue Genesis admin styles.
 *
 * @category Genesis
 * @package Scripts-Styles
 *
 * @since 0.2.3
 */
function genesis_load_admin_styles() {

	wp_enqueue_style( 'genesis_admin_css', GENESIS_CSS_URL . '/admin.css', array(), PARENT_THEME_VERSION );

}