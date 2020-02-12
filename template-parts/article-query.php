<div class="article grid-item">
	<div class="article-image">
		<a class="image-wrapper" href="<?php the_permalink(); ?>">
			<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail( $post->ID, 'article-thumb' );
				} else {
					echo '<img src="'.get_template_directory_uri().'/images/temp/Israel.jpg" alt="">';
				}
			?>
		</a>
	</div>

	<div class="article-details">
		<h3 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<div class="article-excerpt">
			<?php the_excerpt(); ?>
		</div>
	</div>
</div><!-- .article -->