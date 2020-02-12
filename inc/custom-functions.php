<?php
// Set custom thumbnail size(s)
add_image_size( 'article-nav', 300, 200, true );
add_image_size( 'article-thumb', 450, 300, true );
add_image_size( 'article-feature', 1200, 540, true );

// Set custom excerpt length
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


/**
 * Theme Options
 */
function get_anvil_twitter_handle() {
	return 'zeen101';
}


/**
 * Article sorting functions
 */
function get_anvil_articles_by_cat( $category, $number = 5 ) {
	$args = array(
		'posts_per_page'	=> $number,
		'post_type'			=> 'article',
		'tax_query' => array(
			'relation' => 'AND',
			array(
				'taxonomy' => 'issuem_issue',
				'field'    => 'slug',
				'terms'    =>  get_active_issuem_issue()
			),
			array(
				'taxonomy' => 'issuem_issue_categories',
				'field'    => 'slug',
				'terms'    =>  array( $category )
			)
		)
	);

	$articles = get_posts( $args );
	return $articles;
}

function get_anvil_articles_more_in_issue( $number = 5 ) {

	$issuem_settings = get_issuem_settings();

	$args = array(
		'posts_per_page' => $number,
		'post_type' => 'article',
		'tax_query' => array(
			'relation' => 'AND',
			array(
				'taxonomy' => 'issuem_issue',
				'field'    => 'slug',
				'terms'    =>  get_active_issuem_issue()
			),
			
		)
	);

	if ( !empty( $issuem_settings['use_wp_taxonomies'] ) ) {
		
		// using default wp categories
		// get ids of categories to exclude for this site
		// $args['category__not_in'] = array( 2, 6 ); 

	} else {

		$args['tax_query'][] = array(
			'taxonomy' => 'issuem_issue_categories',
			'field'    => 'slug',
			'operator' => 'NOT IN',
			'terms'    => array(
				'from-the-editor',
				'web-exclusives',
				'features'
			)
		);
	
		
	}

	$articles = get_posts( $args );
	return $articles;
}

function get_anvil_articles_no_cat( $number = 5 ) {
	$args = array(
		'posts_per_page' => $number,
		'post_type'      => 'article',
		'tax_query'      => array(
			'relation' => 'AND',
			array(
				'taxonomy' => 'issuem_issue',
				'field'    => 'slug',
				'terms'    =>  get_active_issuem_issue()
			),
			array(
				'taxonomy' => 'issuem_issue_categories',
				'operator' => 'NOT EXISTS'
			)
		)
	);

	$articles = get_posts( $args );
	return $articles;
}

/**
 * Get posts
 */
function get_anvil_posts_by_cat( $category, $number = 5 ) {
	$args = array(
		'posts_per_page'	=> $number,
		'post_type'			=> 'post',
		'category_name'	=> $category
	);

	$posts = get_posts( $args );
	return $posts;
}

function get_anvil_posts( $number = 5 ) {
	$args = array(
		'posts_per_page'	=> $number,
		'post_type'			=> 'post'
	);

	$posts = get_posts( $args );
	return $posts;
}


/**
 * Active Issue functions
 */
function get_active_issue_term_id() {
	$active_issue = get_active_issuem_issue();
	$term = get_term_by( 'slug', $active_issue, 'issuem_issue' );

	return $term->term_id;
}

function get_active_issue_hero_image( $hero_id ) {
	$issue_image = esc_attr( get_term_meta( get_active_issue_term_id(), '_anvil_issue_hero_image', true ) );

	if ( $issue_image ) {
		$hero_bg_url = $issue_image;
	} else {
		$hero_bg_id = get_post_thumbnail_id( $hero_id );
		$hero_bg_array = wp_get_attachment_image_src($hero_bg_id, 'large');
		$hero_bg_url = $hero_bg_array[0];
	}

	return $hero_bg_url;
}


/**
 * IssueM functions
 */
function get_active_issuem_issue_title() {
	$issue = get_term_by( 'slug', get_active_issuem_issue(), 'issuem_issue' );
	return $issue->name;
}

function get_active_issuem_issue_cover() {
	$issue = get_term_by( 'slug', get_active_issuem_issue(), 'issuem_issue' );
	$issue_meta = get_option( 'issuem_issue_' . $issue->term_id . '_meta' );
	return wp_get_attachment_image( $issue_meta['cover_image'], 'large' );
}

function get_article_teaser_text( $post_id = false ) {
	if ( !$post_id ) {
		global $post;
		$post_id = $post->ID;
	}
	return get_post_meta( $post_id, '_teaser_text', true );
}

function get_article_issuem_author( $post_id = false ) {
	if ( !$post_id ) {
		global $post;
		$post_id = $post->ID;
	}
	return get_post_meta( $post_id, '_issuem_author_name', true );
}


function get_active_issuem_issue_link()  {
	$link = home_url() . '?issue=' . get_active_issuem_issue();
	return $link;
}


/**
 * Get articles and posts on Author page
 */
function get_anvil_author_posts( $query ) {
	if ( $query->is_author ) {
		$query->set( 'post_type', array( 'article', 'post' ) );
	}

	remove_action( 'pre_get_posts', 'get_anvil_author_posts' );
}
add_action( 'pre_get_posts', 'get_anvil_author_posts' );