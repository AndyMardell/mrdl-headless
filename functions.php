<?php

function modify_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'modify_excerpt_length', 999 );

function modify_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf( '<p class="more-link-container"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		sprintf( __( 'read more' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'modify_excerpt_more' );
