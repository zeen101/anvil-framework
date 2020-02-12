<?php
/**
 * Template part for displaying post content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Anvil_Framework
 */

$byline = sprintf(
	/* translators: %s: post author. */
	esc_html_x( '%s', 'post author', 'anvil-framework' ),
	'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
);

$link = get_permalink();
$share_link = substr( urlencode( $link ), 0, -3);

$title = get_the_title();
$share_title = urlencode( $title );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail( 'article-feature' );
			}
		?>

		<div class="entry-meta">
			<span class="issue-meta issue-name"><?php echo get_the_date(); ?></span>
			<span class="issue-meta byline"><?php echo $byline; ?></span>

			<span class="issue-meta social-share">
				<a class="share-link" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" rel="noopener" aria-label="Share on Facebook"><i class="fa fa-facebook" aria-hidden="true" title="Share on Facebook"></i></a>

				<a class="share-link" href="http://www.twitter.com/intent/tweet?text=<?php echo $share_title; ?>&url=<?php echo $share_link.'&via='.get_anvil_twitter_handle(); ?>" target="_blank" rel="noopener" aria-label="Share on Twitter"><i class="fa fa-twitter" aria-hidden="true" title="Share on Twitter"></i></a>
			</span>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'anvil-framework' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'anvil-framework' ),
				'after'  => '</div>',
			) );
		?>

		<div class="entry-author">
			<div class="author-avatar">
				<?php // echo get_wp_user_avatar( get_the_author_meta( 'ID' ), 'thumbnail' ); ?>
			</div>

			<div class="author-bio">
				<?php echo wpautop( get_the_author_meta( 'description' ) ); ?>
			</div>
		</div><!-- .entry-author -->
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
