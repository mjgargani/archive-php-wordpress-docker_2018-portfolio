<?php

	function fila_scripts() {
		
		wp_enqueue_style( 'mjgargani-style', get_stylesheet_uri() );
		wp_enqueue_script("jquery");
	
	}
	add_action( 'wp_enqueue_scripts', 'fila_scripts' );
	
	function wpb_custom_new_menu() {
	  register_nav_menu('menu-superior',__( 'Menu Superior' ));
	}
	add_action( 'init', 'wpb_custom_new_menu' );
	
?>