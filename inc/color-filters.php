<?php
/**
 * SV Theme: Color Filter for overriding the colors schemes in a child theme
 *
 * @package WordPress
 * @subpackage SvTheme
 * @since 1.0
 */

/**
 * Define default color filters.
 */

define( 'SVTHEME_DEFAULT_HUE', 199 );        // H
define( 'SVTHEME_DEFAULT_SATURATION', 100 ); // S
define( 'SVTHEME_DEFAULT_LIGHTNESS', 33 );   // L

define( 'SVTHEME_DEFAULT_SATURATION_SELECTION', 50 );
define( 'SVTHEME_DEFAULT_LIGHTNESS_SELECTION', 90 );
define( 'SVTHEME_DEFAULT_LIGHTNESS_HOVER', 23 );

/**
 * The default hue (as in hsl) used for the primary color throughout this theme
 *
 * @return number the default hue
 */
function svtheme_get_default_hue() {
	return apply_filters( 'svtheme_default_hue', SVTHEME_DEFAULT_HUE );
}

/**
 * The default saturation (as in hsl) used for the primary color throughout this theme
 *
 * @return number the default saturation
 */
function svtheme_get_default_saturation() {
	return apply_filters( 'svtheme_default_saturation', SVTHEME_DEFAULT_SATURATION );
}

/**
 * The default lightness (as in hsl) used for the primary color throughout this theme
 *
 * @return number the default lightness
 */
function svtheme_get_default_lightness() {
	return apply_filters( 'svtheme_default_lightness', SVTHEME_DEFAULT_LIGHTNESS );
}

/**
 * The default saturation (as in hsl) used when selecting text throughout this theme
 *
 * @return number the default saturation selection
 */
function svtheme_get_default_saturation_selection() {
	return apply_filters( 'svtheme_default_saturation_selection', SVTHEME_DEFAULT_SATURATION_SELECTION );
}

/**
 * The default lightness (as in hsl) used when selecting text throughout this theme
 *
 * @return number the default lightness selection
 */
function svtheme_get_default_lightness_selection() {
	return apply_filters( 'svtheme_default_lightness_selection', SVTHEME_DEFAULT_LIGHTNESS_SELECTION );
}

/**
 * The default lightness hover (as in hsl) used when hovering over links throughout this theme
 *
 * @return number the default lightness hover
 */
function svtheme_get_default_lightness_hover() {
	return apply_filters( 'svtheme_default_lightness_hover', SVTHEME_DEFAULT_LIGHTNESS_HOVER );
}

function svtheme_has_custom_default_hue() {
	return svtheme_get_default_hue() !== SVTHEME_DEFAULT_HUE;
}
