<?php 

// update_option('siteurl','http://localhost:8888/tedm.net/wood33/');
// update_option('home','http://localhost:8888/tedm.net/');

function remove_comments_rss( $for_comments ) {
    return;
}
add_filter('post_comments_feed_link','remove_comments_rss');
add_theme_support( 'post-thumbnails' );

add_filter('pre_get_posts', 'query_post_type'); // display taged projects in index file
function query_post_type($query) {
	if(is_category() || is_tag()) {
		$post_type = get_query_var('post_type');
		if($post_type)
		$post_type = $post_type;
		else
		$post_type = array('post','project','nav_menu_item');
		$query->set('post_type', $post_type);
		return $query;
	}
}

function new_excerpt_more( $more ) { // appends Read More onto the end of excerpts
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read article&nbsp;&raquo;</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

add_action('wp_enqueue_scripts', 'load_dashicons_front_end');
function load_dashicons_front_end() {
	wp_enqueue_style('dashicons');
}


/*********************
PAGE NAVI
*********************/

// Numeric Page Navi (built into the theme by default)
function bones_page_navi() {
	global $wp_query;
	$bignum = 999999999;
	if ( $wp_query->max_num_pages <= 1 )
	return;
	echo '<nav class="pagination">';
	echo paginate_links( array(
		'base'               => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
		'format'             => '',
		'current'            => max( 1, get_query_var('paged') ),
		'total'              => $wp_query->max_num_pages,
		'prev_text'          => '&larr;',
		'next_text'          => '&rarr;',
		'type'               => 'list',
		'end_size'           => 3,
		'mid_size'           => 3
	) );
	echo '</nav>';
} /* end page navi */