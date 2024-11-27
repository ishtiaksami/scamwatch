<?php

/**
	 * Registers navigation menus for use with wp_nav_menu function
	 * @link http://codex.wordpress.org/Function_Reference/register_nav_menus
	 */
	function wd_register_menus() {
		register_nav_menus(
			array(
				'mega_menu' => __( 'Mega Menu' ),
				'footer_menu' => __( 'Footer Menu' ),
				'header_top_menu' => __( 'Header Top Menu' ),
				// etc.

			)
		);
	}
	add_action( 'init', 'wd_register_menus' );

?>
