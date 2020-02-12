<?php
/**
 * Template part for displaying Author archive posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Anvil_Framework
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'article grid-item' ); ?>>
	<div class="article-image">
		<a class="image-wrapper" href="<?php the_permalink(); ?>">
			<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail( 'article-thumb' );
				} else {
					// echo '<img src="'.get_template_directory_uri().'/images/default/thumb-article.jpg" alt="">';
				}
			?>
		</a>
	</div>

	<div class="article-details">
		<h3 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

		<?php if ( has_excerpt() ) : ?>
			<div class="article-excerpt">
				<?php the_excerpt(); ?>
			</div><!-- .article-excerpt -->
		<?php endif; ?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
