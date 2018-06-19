<?php
define("EVERSIGHT_NAMESPACE", "eversight");
add_filter('acf/settings/remove_wp_meta_box', '__return_false');

/**
 * Enqueue Scripts
 */
require get_template_directory() . '/inc/scripts.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Post Types
 */
require get_template_directory() . '/inc/custom-post-types.php';

/**
 * Shortcodes
 */
require get_template_directory() . '/inc/shortcodes.php';
require get_template_directory() . '/inc/blog-index.php';
require get_template_directory() . '/inc/home-grid.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

?>
