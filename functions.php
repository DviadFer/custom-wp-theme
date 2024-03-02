<?php
/**
 * Theme Functions.
 * Wordpress automatically includes this file
 * 
 * @package Custom theme
 */

 function custom_theme_scripts() {
    //First we register assets for wp to recognize them
    wp_register_style( 'main-styles', get_template_directory_uri() . '/style.css', [], filemtime( get_template_directory() . '/style.css'));
    wp_register_script( 'main-scripts', get_template_directory_uri() . '/assets/main.js', [], filemtime( get_template_directory() . '/assets/main.js'), true );

    //Then we enqueue when nedeed
    wp_enqueue_style( 'main-styles' );
    wp_enqueue_script( 'main-scripts' );

 }

 add_action( 'wp_enqueue_scripts', 'custom_theme_scripts' );