<?php
/**
 * Theme Functions.
 * Wordpress automatically includes this file
 * 
 * @package Custom theme
 */

 function custom_theme_scripts() {
    wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/style.css' );

    // More simple version: wp_enqueue_style( 'style-name', get_stylesheet_uri() );
 }

 add_action( 'wp_enqueue_scripts', 'custom_theme_scripts' );