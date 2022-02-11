<?php

/**
 * Theme emulsion
 * fallback template file
 */
// if ( ! defined( 'ABSPATH' ) ) {
// 	exit;
// }

// do_action( 'emulsion_template_pre' );
// do_action( 'emulsion_template_pre_' . basename( __FILE__, '.php' ) );

get_header();

if ( have_posts() ) {
	// echo '<main class="site-main">';
	// echo '<main class="Blog">';
	// Load posts loop.
	while ( have_posts() ) {
		the_post();
		echo get_the_date( 'Y' );
		// get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
	}
}


get_footer();

?>
