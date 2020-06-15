<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'avada-stylesheet' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function avada_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'Avada', $lang );
}
add_action( 'after_setup_theme', 'avada_lang_setup' );


function top_nevigation_widgets() {
 
    register_sidebar( array(
        'name' => __( 'Top nevigation'),
        'id' => 'top_nevigation',
        'description' => __( 'This widgets will display in top nevigation if header style 3 selected' ),
        'before_widget' => '<div class="fusion-social-links-header"><div class="top_widgets">',
        'after_widget' => '</div></div>',
        'before_title' => '<div class="top_widgets_h">',
        'after_title' => '</div>',
    ) );
 
}
 
add_action( 'widgets_init', 'top_nevigation_widgets' );
