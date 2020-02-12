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

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
				?>

				</main><!-- #main -->
			</div><!-- #primary -->

			<?php get_sidebar(); ?>
		</div><!-- .shell-full -->
	</div><!-- .content-wrap -->

<?php
get_footer();
