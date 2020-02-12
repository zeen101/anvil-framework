<div class="article grid-item">
	<div class="article-details">
		<h3 class="article-title"><a href="<?php echo get_the_permalink( $item->ID ); ?>"><?php echo get_the_title( $item->ID ); ?></a></h3>

		<?php if ( has_excerpt( $item->ID ) ) : ?>
			<div class="article-excerpt">
				<?php echo wpautop( get_the_excerpt( $item->ID ) ); ?>
			</div><!-- .article-excerpt -->
		<?php endif; ?>
	</div>
</div><!-- .article -->
