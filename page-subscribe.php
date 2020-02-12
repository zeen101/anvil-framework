<?php
/**
 * Template Name: Subscribe
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Anvil_Framework
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/panel', 'subscription-options' );
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
