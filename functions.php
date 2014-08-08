<?php

// Include this script to envoke a button toggle for the main navigation menu on small screens
wp_register_script( 'small-menu', trailingslashit( get_template_directory_uri() ) . 'js/small-menu.js', array( 'jquery' ), '20130130', true );
wp_enqueue_script( 'small-menu' );

// Load the child theme translation
add_action( 'after_setup_theme', 'error500_setup' );
function error500_setup() {
	load_child_theme_textdomain( 'error500', get_stylesheet_directory() . '/languages' );
}
