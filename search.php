<?php
get_header();
 
$search_query = get_search_query();
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : ( ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1 );
?>

<?php 
	$query = new WP_Query(array(
		'post_type'      	=> 'post',
		'post_status'		=> 'publish',
		's'					=> $s,
	));
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) { $query->the_post();
			get_template_part('template-part/post-content');
		}
		wp_pagenavi( array( 'query' => $query ) );
	}
?>

<?php get_footer(); ?>