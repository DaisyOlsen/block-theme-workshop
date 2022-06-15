<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @since Twenty Twenty-Two 1.0
 *
 * @return void
 */
function twentytwentytwo_support() {

    // Add support for block styles.
    add_theme_support( 'wp-block-styles' );

    // Enqueue editor styles.
    add_editor_style( 'style.css' );

}

add_action( 'after_setup_theme', 'twentytwentytwo_support' );

/**
 * Enqueue styles.
 *
 * @since Twenty Twenty-Two 1.0
 *
 * @return void
 */
function twentytwentytwo_styles() {
    // Register theme stylesheet.
    $theme_version = wp_get_theme()->get( 'Version' );

    $version_string = is_string( $theme_version ) ? $theme_version : false;
    wp_register_style(
        'twentytwentytwo-style',
        get_template_directory_uri() . '/style.css',
        array(),
        $version_string
    );

    // Enqueue theme stylesheet.
    wp_enqueue_style( 'twentytwentytwo-style' );

}

add_action( 'wp_enqueue_scripts', 'twentytwentytwo_styles' );
