<?php
/**
 * The sidebar containing the Issue widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Anvil_Framework
 */

$editor = get_anvil_articles_by_cat( 'from-the-editor', 1 );
$features = get_anvil_articles_by_cat( 'features', 99 );
$more_in_issue = get_anvil_articles_more_in_issue( 99 );
$web_only = get_anvil_articles_by_cat( 'web-exclusives', 99 );

$buy_print_link = esc_attr( get_term_meta( get_active_issue_term_id(), '_anvil_issue_buy_print_link', true ) );
?>

<aside id="secondary" class="widget-area" role="complementary">
	<section class="widget issue_widget">
		<?php if ( !leaky_paywall_has_user_paid() ) : ?>
			<div class="widget-item">
				<a class="button" href="<?php echo home_url(); ?>/subscribe/">Subscribe Today</a>
			</div>
		<?php endif; ?>

		<div class="issue-cover widget-item">
			<a href="<?php echo get_active_issuem_issue_link(); ?>"><?php echo get_active_issuem_issue_cover(); ?></a>

		</div>

		<div class="issue-toc widget-item">
			<span class="issue-date"><?php echo get_active_issuem_issue_title(); ?></span>

			<div class="toc-lists">
				<h3 class="toc-title">In This Issue:</h3>

				<?php if ( $features ) : ?>
					<div class="toc-cat">
						<h4 class="cat-title">Features</h4>

						<ul class="cat-list">
							<?php
								foreach ( $features as $item ) {
									echo '<li class="list-item"><a href="' . get_the_permalink( $item->ID ) . '">' . get_the_title( $item->ID ) . '</a></li>';
								}
							?>
						</ul>
					</div>
				<?php endif; ?>

				<?php if ( $more_in_issue ) : ?>
					<div class="toc-cat">
						<h4 class="cat-title">More In This Issue</h4>

						<ul class="cat-list">
							<?php
								if ( $editor ) {
									foreach ( $editor as $item ) {
										echo '<li class="list-item"><a href="' . get_the_permalink( $item->ID ) . '">' . get_the_title( $item->ID ) . '</a></li>';
									}
								}
							?>
							<?php
								foreach ( $more_in_issue as $item ) {
									echo '<li class="list-item"><a href="' . get_the_permalink( $item->ID ) . '">' . get_the_title( $item->ID ) . '</a></li>';
								}
							?>
						</ul>
					</div>
				<?php endif; ?>

				<?php if ( $web_only ) : ?>
					<div class="toc-cat">
						<h4 class="cat-title">Web Exclusives</h4>

						<ul class="cat-list">
							<?php
								foreach ( $web_only as $item ) {
									echo '<li class="list-item"><a href="' . get_the_permalink( $item->ID ) . '">' . get_the_title( $item->ID ) . '</a></li>';
								}
							?>
						</ul>
					</div>
				<?php endif; ?>
			</div><!-- .toc-lists -->
		</div><!-- .issue-toc -->

		<?php
			if ( $buy_print_link ) {
				?>
				<div class="widget-item">
					<a class="button" href="<?php echo $buy_print_link; ?>">Buy Single Print Issue</a>
				</div>
				<?php 
			}
		?>
		
	</section>

	<?php dynamic_sidebar( 'sidebar-issue' ); ?>

</aside><!-- #secondary -->
