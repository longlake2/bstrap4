<?php
/**
 *
 * Template Name: Homepage
 *
 * The template for displaying the Homepage
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BStrap4
 */




get_header(); ?>

<?php get_template_part( 'template-parts/home/hero', 'banner' ); ?>

	<div class="container">
		<div class="row">

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
