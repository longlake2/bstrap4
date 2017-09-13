<?php
/**
 * BStrap4 Theme Customizer
 *
 * @package BStrap4
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function bstrap4_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'bstrap4_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'bstrap4_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'bstrap4_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function bstrap4_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function bstrap4_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function bstrap4_customize_preview_js() {
	wp_enqueue_script( 'bstrap4-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'bstrap4_customize_preview_js' );



if ( class_exists( 'Kirki' ) ) {
/**
 * Add the theme configuration
 */
Kirki::add_config( 'bstrap4_theme', array(
	'option_type' => 'theme_mod',
	'capability'  => 'edit_theme_options',
) );
Kirki::add_panel( 'homepage', array(
    'priority'    => 10,
    'title'       => __( 'Homepage', 'bstrap4' ),
    'description' => __( 'Homepage Panel', 'bstrap4' ),
) );
/* Homepage Hero Section */
Kirki::add_section( 'homepage_hero', array(
    'title'          => __( 'Homepage Hero' ),
    'description'    => __( 'Homepage Settings' ),
    'panel'          => 'homepage', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );
/* Homepage Hero Text */
Kirki::add_field( 'bstrap4_theme', array(
	'type'     => 'text',
	'settings' => 'hero_text',
	'label'    => __( 'Hero Text', 'bstrap4' ),
	'section'  => 'homepage_hero',
	'default'  => esc_attr__( 'This is a default value', 'bstrap4' ),
	'priority' => 10,
) );
/* Homepage Hero Image */
Kirki::add_field( 'bstrap4_theme', array(
	'type'        => 'image',
	'settings'    => 'hero_image',
	'label'       => __( 'Hero Image', 'bstrap4' ),
	'description' => __( 'This is the hero image upload', 'bstrap4' ),
	'section'     => 'homepage_hero',
	'default'     => '',
	'priority'    => 10,
) );
}