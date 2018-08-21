<?php

function modify_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'modify_excerpt_length', 999 );

function modify_excerpt_more( $link ) {
	$link = sprintf( '<p class="more-link-container"><a href="/%1$s" class="more-link">%2$s</a></p>',
		get_post_field( 'post_name', get_post() ),
		'read more'
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'modify_excerpt_more' );
