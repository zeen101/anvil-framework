<?php
/**
 * The sidebar containing the widget area for the More In This Issue section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Anvil_Framework
 */

if ( ! is_active_sidebar( 'sidebar-in-this-issue' ) ) {
	return;
}
?>

<div class="grid-ad grid-item">
	<?php dynamic_sidebar( 'sidebar-in-this-issue' ); ?>
</div><!-- .grid-ad -->
