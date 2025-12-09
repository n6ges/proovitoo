<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'chld_thm_cfg_parent' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

// Enqueue scripts
function custom_theme_scripts() {
    // CSS
    wp_enqueue_style(
        'custom-style', 
        get_stylesheet_directory_uri() . '/assets/css/style.css',
        array(),
        filemtime( get_stylesheet_directory() . '/assets/css/style.css' )
    );

    // JS
    wp_enqueue_script(
        'custom-home-js',
        get_stylesheet_directory_uri() . '/assets/js/home.js',
        array('jquery'),
        filemtime( get_stylesheet_directory() . '/assets/js/home.js' ),
        true
    );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_scripts' );

// Enqueue fonts
function custom_enqueue_google_fonts() {
    wp_enqueue_style(
        'google-fonts-plus-jakarta-sans',
        'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap',
        false
    );
}
add_action( 'wp_enqueue_scripts', 'custom_enqueue_google_fonts' );