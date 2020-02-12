<?php
/**
 * The sidebar containing the widget area for the Features article section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Anvil_Framework
 */

if ( ! is_active_sidebar( 'sidebar-features' ) ) {
	return;
}
?>

<div class="ad-wrapper">
	<?php dynamic_sidebar( 'sidebar-features' ); ?>
</div><!-- .ad-wrapper -->
