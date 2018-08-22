<?php

function modify_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'modify_excerpt_length', 999 );

function modify_excerpt_more( $link ) {
	return ' &hellip; ';
}
add_filter( 'excerpt_more', 'modify_excerpt_more' );
