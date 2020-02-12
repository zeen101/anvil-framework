<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Anvil_Framework
 */

$footer_ad = anvil_get_option( 'footer_ad' );

?>

	</div><!-- #content -->

	<?php if( !empty( $footer_ad ) ) : ?>
	<div class="bottom-ad ad-full-width bg-light">
		<div class="shell">	
			<?php echo do_shortcode( $footer_ad ); ?>
		</div><!-- .shell -->
	</div><!-- .bottom-ad -->
	<?php endif; ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-info">
			<div class="shell-full">
				<div class="site-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</div><!-- .site-logo -->

				<nav class="footer-navigation" role="navigation">
					<?php
						wp_nav_menu( array(
							'menu_id'        => 'footer-menu',
							'container'      => ''
						) );
					?>
				</nav><!-- .footer-navigation -->

				
			</div><!-- .shell-full -->
		</div><!-- .footer-info -->

		<div class="copyright">
			<div class="shell-full">
				<span class="copyright-info">All Content &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></span>
			</div><!-- .shell-full -->
		</div><!-- .copyright -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php if ( !is_user_logged_in() ) {
	// mailchimp popup code
	?>
	
	<?php 
} ?>

</body>
</html>
