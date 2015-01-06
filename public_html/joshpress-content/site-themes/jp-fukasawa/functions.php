<?php
// Register and enqueue styles
function jp_load_style() {
	if ( ! is_admin() ) {
		wp_deregister_style( 'fukasawa_style' );
		wp_enqueue_style( 'fukasawa_googleFonts', '//fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic' );
		wp_enqueue_style( 'fukasawa_genericons', get_stylesheet_directory_uri() . '/genericons/genericons.css' );
		wp_enqueue_style( 'fukasawa_style', get_template_directory_uri(). '/style.css' );
	}
}

add_action('wp_print_styles', 'jp_load_style', 25 );
