<?php
/**
 * Template Name: Current Issue
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Anvil_Framework
 */

$editor = get_anvil_articles_by_cat( 'from-the-editor', 1 );
$features = get_anvil_articles_by_cat( 'features', 99 );
$more_in_issue = get_anvil_articles_more_in_issue( 99 );
$web_only = get_anvil_articles_by_cat( 'web-exclusives', 99 );
$news = '';

$lp_title = anvil_get_option( 'lp_title' );

$blog_page_id = get_option( 'page_for_posts' );

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="articles-panels">

				<?php if ( $editor ) : ?>
					<section class="articles-panel articles-featured">
						<div class="shell-full">
							<h2 class="panel-title">From the Editor</h2>

							<?php
								foreach ( $editor as $item ) {
									include ( locate_template( 'template-parts/article-featured.php' ) );
								}
							?>
						</div><!-- .shell-full -->
					</section><!-- .articles-featured -->
				<?php endif; ?>


				<?php if ( $features ) : ?>
					<section class="articles-panel articles-side-ad">
						<div class="shell-full">
							<h2 class="panel-title">Features</h2>

							<div class="articles-container">
								<div class="articles-wrapper">
									<?php
										foreach ( $features as $item ) {
											include ( locate_template( 'template-parts/article-default.php' ) );
										}
									?>
								</div>

								<?php get_sidebar('features'); ?>
							</div><!-- .articles-container -->
						</div><!-- .shell-full -->
					</section><!-- .articles-side-ad -->
				<?php endif; ?>


				<?php if ( $more_in_issue ) : ?>
					<section class="articles-panel articles-inline-ad">
						<div class="shell-full">
							<h2 class="panel-title">More In This Issue</h2>

							<div class="articles-container">
								<div class="articles-wrapper section-grid-4">
									<?php
										foreach ( $more_in_issue as $item ) {
											include ( locate_template( 'template-parts/article-default.php' ) );
										}
									?>

									<?php get_sidebar('in-this-issue'); ?>
								</div><!-- .articles-wrapper -->
							</div><!-- .articles-container -->
						</div><!-- .shell-full -->
					</section><!-- .articles-education -->
				<?php endif; ?>


				<?php if ( $web_only ) : ?>
					<section class="articles-panel articles-no-ad">
						<div class="shell-full">
							<h2 class="panel-title">Web Exclusives</h2>

							<div class="articles-container">
								<div class="articles-wrapper section-grid-4">
									<?php
										foreach ( $web_only as $item ) {
											include ( locate_template( 'template-parts/article-default.php' ) );
										}
									?>
								</div>
							</div><!-- .articles-container -->
						</div><!-- .shell-full -->
					</section><!-- .articles-education -->
				<?php endif; ?>


				

			</div><!-- .articles-panels -->


			<?php if ( !empty($lp_title) ) : ?>
				<div class="panel-launchpads bg-primary">
					<div class="shell-full">
						<h2 class="panel-title"><?php echo esc_attr($lp_title); ?></h2>
						<?php get_template_part( 'template-parts/panel', 'launchpads' ); ?>
					</div><!-- .shell-full -->
				</div><!-- .panel-launchpads -->
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
