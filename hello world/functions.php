<?php
function helloworld_scripts() {
	// Add  stylesheet.
	wp_enqueue_style( 'my-style',  get_template_directory_uri() . '/style.css', array(), null );


}
add_action( 'wp_enqueue_scripts', 'helloworld_scripts' );

?>