<?php

add_filter( 'show_admin_bar' , '__return_false' );
add_action( 'after_setup_theme', 'thistheme_theme_setup' );

function thistheme_theme_setup() {
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
}

add_action( 'wp_enqueue_scripts', 'thistheme_name_scripts' ); 

function thistheme_name_scripts() {
	wp_enqueue_script( 'mainjs',  get_template_directory_uri().'/js/main.js' , array(), '2.0', true );
	wp_enqueue_style( 'style', get_template_directory_uri().'/style.css', false, null );
}

require get_template_directory() . '/inc/post-type.php';

?>