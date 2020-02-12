<?php
/**
 * The template for displaying all single Article posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Anvil_Framework
 */

$features = get_anvil_articles_by_cat( 'features', 6 );

get_header();
?>

<div class="content-wrap">
	<div class="shell-full">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">

			<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'article' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
			?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar('issue'); ?>
	</div><!-- .shell-full -->
</div><!-- .content-wrap -->


<?php get_template_part( 'template-parts/panel', 'article-nav' ); ?>

<?php if( $features ) : ?>
<div class="articles-side-ad">
	<div class="shell-full">
		<h2 class="panel-title">Features</h2>

		<div class="articles-container">
			<div class="articles-wrapper">
				<?php
					foreach( $features as $item ) {
						include( locate_template( 'template-parts/article-default.php' ) );
					}
				?>
			</div>


				<?php get_sidebar('features'); ?>

		</div><!-- .articles-container -->
	</div><!-- .shell-full -->
</div><!-- .articles-side-ad -->
<?php endif; ?>


<?php if ( !leaky_paywall_has_user_paid() ) : ?>
	<div class="subscription-options">
		<div class="shell-full">
			<?php // echo do_shortcode('[leaky_paywall_subscription]'); ?>
		</div><!-- .shell-full -->
	</div><!-- .subscription-options -->
<?php endif; ?>

<?php
get_footer();
