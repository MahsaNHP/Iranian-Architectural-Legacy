<?php
/**
 * Iranian Architectural Legacy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Iranian Architectural Legacy
 * @since Iranian Architectural Legacy 1.0
 */

function child_enqueue_scripts() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'child_enqueue_scripts' );

?>