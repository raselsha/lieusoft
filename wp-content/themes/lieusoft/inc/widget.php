<?php

function theme_widgets() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar'),
        'id' => 'main_sidebar',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.'),
        'before_widget' => '<div class="widget">',
	'after_widget'  => '</div><hr>',
	'before_title'  => '<h2 class="widget_title">',
	'after_title'   => '</h2>',
    ) );
}

add_action( 'widgets_init', 'theme_widgets' );

?>