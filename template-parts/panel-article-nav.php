<div class="article-nav">
	<div class="shell-full">
		<?php
		while ( have_posts() ) : the_post();
			$next_post = get_next_post();
			$prev_post = get_previous_post();

			if ( $next_post || $prev_post ) {
		?>
			<nav class="navigation post-navigation" role="navigation">
				<h2 class="screen-reader-text">Post navigation</h2>

				<div class="nav-links">
					<?php if( $prev_post ) : ?>
						<div class="nav-previous">
							<a href="<?php echo esc_url( get_permalink($prev_post) ); ?>" rel="prev">
								<div class="nav-text">Last Article</div>
								<div class="nav-details">
									<?php
									if( has_post_thumbnail($prev_post) ) {
										echo get_the_post_thumbnail( $prev_post, 'article-nav' );
									} else {
										echo '<img src="'.get_template_directory_uri().'/images/default/thumbnail.jpg" alt="">';
									}
									?>
								</div>
							</a>
							<h3 class="article-title"><?php echo $prev_post->post_title; ?></h3>
						</div>
					<?php endif; ?>

					<?php if( $next_post ) : ?>
						<div class="nav-next">
							<a href="<?php echo esc_url( get_permalink($next_post) ); ?>" rel="next">
								<span class="nav-text">Next Article</span>
								<div class="nav-details">
									<?php
									if( has_post_thumbnail($next_post) ) {
										echo get_the_post_thumbnail( $next_post, 'article-nav' );
									} else {
										echo '<img src="'.get_template_directory_uri().'/images/default/thumbnail.jpg" alt="">';
									}
									?>
								</div>
							</a>
							<h3 class="article-title"><?php echo $next_post->post_title; ?></h3>
						</div>
					<?php endif; ?>
				</div>
			</nav>
		<?php
			}
		endwhile; // End of the loop.
		?>
	</div><!-- .shell-full -->
</div><!-- .article-nav -->