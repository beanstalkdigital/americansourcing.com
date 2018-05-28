<?php
/**
 * eversight-wp Theme Customizer
 *
 * @package eversight
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function eversight_wp_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'eversight_wp_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'eversight_wp_customize_partial_blogdescription',
		) );
	}

	$wp_customize->add_section( 'eversight_footer_section' , array(
    'title'       => __( 'Footer', EVERSIGHT_NAMESPACE ),
    'priority'    => 30,
    'description' => '',
	) );

	$wp_customize->add_setting( 'eversight_footer_logo' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'eversight_footer_logo', array(
    'label'    => __( 'Footer Logo', EVERSIGHT_NAMESPACE ),
    'section'  => 'eversight_footer_section',
    'settings' => 'eversight_footer_logo',
	) ) );

}
add_action( 'customize_register', 'eversight_wp_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function eversight_wp_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function eversight_wp_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function eversight_wp_customize_preview_js() {
	wp_enqueue_script( 'eversight-wp-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'eversight_wp_customize_preview_js' );

add_action( 'after_setup_theme', 'custom_image_sizes' );
function custom_image_sizes() {
    add_image_size( 'square', 300, 300, true );
}
