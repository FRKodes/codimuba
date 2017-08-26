<?php
function register_my_menus() {
  register_nav_menus(
    array(
      'header' => __( 'Header Menu' ),
      'footer' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


// register_nav_menus( array( 
// 	'header' => 'Header menu',
// 	'footer' => 'Footer menu'
// ) );

function get_my_styles_and_scripts() {
    wp_enqueue_style( 'style.css', get_stylesheet_uri() );
    wp_enqueue_script( 'all.js', get_template_directory_uri() . '/all.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'get_my_styles_and_scripts' );