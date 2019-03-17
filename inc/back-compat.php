<?php
/**
 * SV Theme back compat functionality
 *
 * Prevents SV Theme from running on WordPress versions prior to 4.7,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.7.
 *
 * @package WordPress
 * @subpackage Sv_Theme
 * @since SV Theme 1.0.0
 */

/**
 * Prevent switching to SV Theme on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since SV Theme 1.0.0
 */
function svtheme_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'svtheme_upgrade_notice' );
}
add_action( 'after_switch_theme', 'svtheme_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * SV Theme on WordPress versions prior to 4.7.
 *
 * @since SV Theme 1.0.0
 *
 * @global string $wp_version WordPress version.
 */
function svtheme_upgrade_notice() {
	$message = sprintf( __( 'SV Theme requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'svtheme' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.7.
 *
 * @since SV Theme 1.0.0
 *
 * @global string $wp_version WordPress version.
 */
function svtheme_customize() {
	wp_die(
		sprintf(
			__( 'SV Theme requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'svtheme' ),
			$GLOBALS['wp_version']
		),
		'',
		array(
			'back_link' => true,
		)
	);
}
add_action( 'load-customize.php', 'svtheme_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.7.
 *
 * @since SV Theme 1.0.0
 *
 * @global string $wp_version WordPress version.
 */
function svtheme_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'SV Theme requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'svtheme' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'svtheme_preview' );
