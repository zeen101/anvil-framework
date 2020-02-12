<?php
	$hero = get_anvil_articles_by_cat( 'on-the-cover', 1 );

	if ( $hero ) {
		$hero_bg_url = get_active_issue_hero_image( $hero[0]->ID );
	} else {
		$hero_bg_url = '';
	}
	
	$issue_cover = get_active_issuem_issue_cover();

	$hero_headline = esc_attr( get_term_meta( get_active_issue_term_id(), '_anvil_issue_hero_headline', true ) );
	$hero_subtitle = wp_kses_post( get_term_meta( get_active_issue_term_id(), '_anvil_issue_hero_subtitle', true ) );
?>

<div class="panel-hero" style="background-image: url(<?php echo ( $hero_bg_url ? $hero_bg_url : get_template_directory_uri().'/images/default/hero-bg.jpg' ) ?>);">
	<div class="hero-message shell-full">
		<div class="message-container issue-info">
			<div class="hero-wrapper">
				<?php if ( $issue_cover ) : ?>
					<div class="otc-box issue-cover">
						<?php echo $issue_cover; ?>
					</div>
				<?php endif; ?>

				<div class="issue-details">
					<span class="issue-heading"><?php echo get_active_issuem_issue_title(); ?></span>
				</div><!-- .message-details -->
			</div><!-- .hero-wrapper -->
		</div><!-- .issue-info -->

		<?php if ( $hero_headline || $hero_subtitle ) {
			?>
			<div class="message-container cover-story">
				<div class="hero-wrapper">
					<div class="story-details">
						<h2 class="story-title"><?php echo $hero_headline; ?></h2>

						<div class="story-excerpt">
							<p><?php echo $hero_subtitle; ?></p>
						</div>
					</div><!-- .story-details -->
				</div><!-- .hero-wrapper -->
			</div><!-- .cover-story -->
			<?php 
		} ?>
		
	</div><!-- .hero-message -->
</div><!-- .panel-hero -->
