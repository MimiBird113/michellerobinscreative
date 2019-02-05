<?php
/**
* Twentynineteen Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
*/

// Enqueue scripts and styles
function twentynineteen_child_scripts(){
	wp_enqueue_style( 'twentynineteen-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'twentynineteen-style' ));
	wp_enqueue_style( 'twentynineteen-child-google-fonts', '//fonts.googleapis.com/css?family=Cinzel|Mr+De+Haviland|Raleway|Stalemate' );
}
add_action( 'wp_enqueue_scripts', 'twentynineteen_child_scripts' );
