<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Anvil_Framework
 */

$header_ad = anvil_get_option( 'header_ad' );

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700|Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'anvil-framework' ); ?></a>

	<div class="top-bar">
		<div class="ceiling">
			<div class="shell-full">
				<div class="ceiling-side left-side">
					<div class="ceiling-section not-mobile">
						<a class="icon-social" href="https://www.facebook.com/TrueWestMag" target="_blank" rel="noopener noreferrer" aria-label="Visit our Facebook page"><i class="fa fa-facebook" aria-hidden="true" title="Facebook"></i></a>
						<a class="icon-social" href="https://twitter.com/TrueWestMag" target="_blank" rel="noopener noreferrer" aria-label="Visit our Twitter page"><i class="fa fa-twitter" aria-hidden="true" title="Twitter"></i></a>
						<a class="icon-social" href="https://www.instagram.com/twmag/" target="_blank" rel="noopener noreferrer" aria-label="Visit our Instagram page"><i class="fa fa-instagram" aria-hidden="true" title="Instagram"></i></a>
						<a class="icon-social" href="https://www.pinterest.com/truewestmag/" target="_blank" rel="noopener noreferrer" aria-label="Visit our Pinterest page"><i class="fa fa-pinterest" aria-hidden="true" title="Pinterest"></i></a>
					</div>
					
					<div class="ceiling-section">
						<a href="#">
							<span class="ceiling-icon"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span>
							<span class="ceiling-text">Get The App</span>
						</a>
					</div>
					<div class="ceiling-section">
						<a href="<?php echo esc_url( home_url().'/my-account/' ); ?>">
							<span class="ceiling-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
							<span class="ceiling-text">My Account</span>
						</a>
					</div>

				</div>
				<div class="ceiling-side right-side">
					<div class="ceiling-section">
						<a href="<?php echo home_url('subscribe'); ?>">
							<span class="ceiling-text">Subscribe</span>
						</a>
					</div>
					
				</div>
			</div><!-- .shell-full -->
		</div><!-- .ceiling -->

		<?php if( !empty( $header_ad ) ) : ?>
		<div class="top-ad ad-full-width">
			<div class="shell">
				<?php echo do_shortcode( $header_ad ); ?>
			</div><!-- .shell -->
		</div><!-- .top-ad -->
		<?php endif; ?>
	</div>

	<?php
		get_template_part( 'template-parts/panel', 'site-header' );

		if ( is_page_template( 'current-issue.php' ) ) :
			get_template_part( 'template-parts/panel', 'hero' );
		endif;
	?>

	<div id="content" class="site-content">
