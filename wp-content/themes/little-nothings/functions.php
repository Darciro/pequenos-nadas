<?php
/**
 * Little Nothings functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Little_Nothings
 */

if (!defined('LITTLE_NOTHINGS_VERSION')) {
    // Replace the version number of the theme on each release.
    define('LITTLE_NOTHINGS_VERSION', '2.0.0');
}

if ( ! defined( 'LITTLE_NOTHINGS_SLUG' ) ) {
    define( 'LITTLE_NOTHINGS_SLUG', 'little-nothings' );
}

require_once get_template_directory() . '/inc/class-theme-setup.php';
require_once get_template_directory() . '/inc/class-enqueue-scripts.php';
require_once get_template_directory() . '/inc/custom-header.php';
require_once get_template_directory() . '/inc/template-tags.php';
require_once get_template_directory() . '/inc/template-functions.php';
require_once get_template_directory() . '/inc/customizer.php';
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
require_once get_template_directory() . '/inc/class-social-widget.php';
require_once get_template_directory() . '/inc/utils.php';