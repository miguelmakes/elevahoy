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

    wp_enqueue_script( 'juan_js', get_stylesheet_directory_uri() . '/js/juan.js', array( 'jquery' ), '1.0', true );
}

add_action('wp_enqueue_scripts', 'theme_js', 'jquery', 'juan_js');

// add_filter( 'the_password_form', 'custom_password_form' );
// function custom_password_form() {
//     global $post;
//     $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
//     $o = '<form class="protected-post-form" action="' . get_option('siteurl') . '/wp-pass.php" method="post">
//     ' . __( "THIS IS YOUR NEW PASSWORD INTRO TEXT THAT SHOWS ABOVE THE PASSWORD FORM" ) . '
//     <label class="pass-label" for="' . $label . '">' . __( "PASSWORD:" ) . ' </label><input name="post_password" id="' . $label . '" type="password" style="background: #ffffff; border:1px solid #999; color:#333333; padding:10px;" size="20" /><input type="submit" name="Submit" class="button" value="' . esc_attr__( "Submit" ) . '" />
//     </form><p style="font-size:14px;margin:0px;">∗EXTRA TEXT CAN GO HERE...THIS WILL SHOW BELOW THE FORM</p>
//     ';
//     return $o;
// }


/**
 * Components
 */


?>
