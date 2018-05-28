<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package eversight
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function eversight_wp_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'eversight_wp_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function eversight_wp_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'eversight_wp_pingback_header' );

// Allow SVG Upload
//////////////////////////////////////////////////////////////////////
function cc_mime_types($mimes) {
  $mimes["svg"] = "image/svg+xml";
  return $mimes;
}
add_filter("upload_mimes", "cc_mime_types");

function eversight_excerpt_more($more) {
  return '';
}
add_filter( 'excerpt_more', 'eversight_excerpt_more', 999 );

function eversight_custom_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'eversight_custom_excerpt_length', 999 );

function eversight_theme_setup() {
  add_theme_support( 'custom-logo' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'html5', array( 'search-form' ) );
  /*** Register Menus */
  if (function_exists('register_nav_menus'))
  {
      register_nav_menus(
      array(
          'main-menu'         => __( 'Main Menu', EVERSIGHT_NAMESPACE ),
          'header-cta-menu'        => __( 'Header Call to Action Menu', EVERSIGHT_NAMESPACE ),
          'footer-menu'       => __( 'Footer Menu', EVERSIGHT_NAMESPACE ),
          'mobile-menu'       => __( 'Mobile Menu', EVERSIGHT_NAMESPACE )
        )
      );
  }
}
add_action('after_setup_theme', 'eversight_theme_setup');

//Page Slug Body Class
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );