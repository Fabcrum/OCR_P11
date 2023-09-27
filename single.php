<?php
/**
 * The template for displaying all single posts
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * @package WordPress
 * @subpackage OCR_P11
 * @since OCR_P11 1.0
 * from @-subpackage Twenty_Twenty_One
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-single' );


	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}

	the_post_navigation(
		array(
			'next_text' => '<p class="meta-nav">next</p><p>%title</p>',
			'prev_text' => '<p class="meta-nav">previous</p><p>%title</p>',
		)
	);
endwhile; // End of the loop.

get_footer();
