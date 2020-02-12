<?php
/**
 * The template for displaying author pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Anvil_Framework
 */
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main articles-panel">

			<header class="entry-header">
				<h1 class="page-title"><?php echo get_the_author(); ?></h1>
			</header><!-- .entry-header -->

			<?php
				if ( have_posts() ) :
					echo '<div class="articles-wrapper section-grid-4">';

					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', 'author' );
					endwhile;

					echo '</div><!-- .articles-wrapper -->';

					the_posts_pagination();
				else :
					get_template_part( 'template-parts/content', 'none' );
				endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
