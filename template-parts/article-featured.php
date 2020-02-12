<?php
$author_name = get_article_issuem_author( $item->ID ) ? get_article_issuem_author( $item->ID ) : get_the_author_meta( 'display_name', $item->post_author );
?>
<div class="articles-container">
	<div class="article-section article-image">
		<a class="image-wrapper" href="<?php echo get_the_permalink( $item->ID ); ?>">
			<?php
				if ( has_post_thumbnail( $item->ID ) ) {
					echo get_the_post_thumbnail( $item->ID, 'large' );
				} else {
					echo '<img src="'.get_template_directory_uri().'/images/default/thumbnail.jpg" alt="">';
				}
			?>
		</a>
	</div><!-- .article-image -->

	<div class="article-section article-details">
		<div class="details-wrapper">
			<h3 class="article-title"><a class="inline-link" href="<?php echo get_the_permalink( $item->ID ); ?>"><?php echo get_the_title( $item->ID ); ?></a></h3>
			<?php if ( has_excerpt( $item->ID ) ) : ?>
				<div class="article-excerpt">
					<?php echo wpautop( get_the_excerpt( $item->ID ) ); ?>
				</div><!-- .article-excerpt -->
			<?php endif; ?>

			<div class="article-author">
				<?php echo $author_name; ?>
			</div><!-- .article-author -->
		</div>
	</div><!-- .article-details -->
</div><!-- .articles-container -->
