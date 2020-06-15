
<?php
add_action( 'after_setup_theme', 'theme_menu' );
function theme_menu() {
  register_nav_menus( array(
	'primary' => 'Primary Menu',
	'footer_menu' => 'Footer Menu',
) );
}
