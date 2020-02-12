<?php
/**
 * The template for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Anvil_Framework
 */

get_header();
?>

	<div class="content-wrap">
		<div class="shell-full">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">

				<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'post' );

					

					endwhile; // End of the loop.
				?>

				</main><!-- #main -->
			</div><!-- #primary -->

		</div><!-- .shell-full -->
	</div><!-- .content-wrap -->

<?php
get_footer();
