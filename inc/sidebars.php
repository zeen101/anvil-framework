<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function anvil_framework_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'anvil-framework' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'anvil-framework' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Issue Sidebar', 'anvil-framework' ),
		'id'            => 'sidebar-issue',
		'description'   => esc_html__( 'Add widgets here.', 'anvil-framework' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Home: Features', 'anvil-framework' ),
		'id'            => 'sidebar-features',
		'description'   => esc_html__( 'Add widgets here.', 'anvil-framework' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Home: More In This Issue', 'anvil-framework' ),
		'id'            => 'sidebar-in-this-issue',
		'description'   => esc_html__( 'Add widgets here.', 'anvil-framework' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'anvil_framework_widgets_init' );
