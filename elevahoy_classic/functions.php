<?php

/**
 * Core Functions
 */



/**
 * Build Functions
 */

function theme_js() {
    wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js', array( 'jquery' ), '1.0', true );

    wp_enqueue_script( 'theme_js', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0', true );
}

add_action('wp_enqueue_scripts', 'theme_js', 'jquery');


/**
 * Components
 */


?>
