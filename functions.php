<?php

if ( ! function_exists( 'stylotheme_support' ) ) :
	function stylotheme_support()  {

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}
	add_action( 'after_setup_theme', 'stylotheme_support' );
endif;


/**
 * Enqueue scripts and styles.
 */
function stylotheme_scripts() {
	// Enqueue theme stylesheet.
	// wp_enqueue_style( 'stylotheme-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'stylotheme-style', get_stylesheet_directory_uri() . '/style.css', array('twentytwentytwo-style'), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'stylotheme_scripts' );





// twentytwentytwo-style-inline-css REMOVE
add_action( 'wp_enqueue_scripts', function() {
	$styles = wp_styles();
	$styles->add_data( 'twentytwentytwo-style', 'after', array() );
}, 20 );


function custom_wp_dequeue_css()
{
    // global-styles-inline-css を読み込まないようにする（※ v5.9 から追加される）
    wp_dequeue_style('global-styles');
}
add_action( 'wp_enqueue_scripts', 'custom_wp_dequeue_css', 100);


// add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
// function theme_enqueue_styles() {
//   // wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
//   wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('twentytwentytwo-style')
// );
// }


