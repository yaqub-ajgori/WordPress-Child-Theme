<?php

/**
 * Enqueue styles
 */

function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_stylesheet_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles', 999);

 
