<?php

foreach ( $_GET as $k => $v ) {
	$_GET[$k] = trim(stripcslashes(strip_tags( $v )));
}

$design = array(
	'body_width' => 640,
	'page_bg'    => 'f2f2f2',
	'content_bg' => 'fcfcfc'
);

// redirect to a default if needed
if ( empty( $_GET )) {
	
	$defaults = array(
		'lang'            => 'en',
		'g_topic_id'      => 999,
		'export'          => false,
		'itemcount'       => 5,
		'layout'          => 'standard', /* options: standard, compact, fulltext */
		'showcontenttype' => true,
		'showbylines'     => true,
		'showpubdates'    => true,
		'showdescription' => true,
		'showviewweblink' => true,
		'showbbgdirect'   => true
	);
	
	header( 'Location: newsletter.php?'.http_build_query( $defaults, '', '&' ));
	exit;
}

// load language configurations and translations
require_once( 'languages/'.$_GET['lang'].'.php' );

function show_bylines_pubdates() {
	
	global $data;
	
	$showbylines  = $_GET['showbylines'];
	$showpubdates = $_GET['showpubdates'];
	
	if ( $showpubdates || $showbylines ) {
		echo '<p class="byline">';
		
		if ( $showpubdates ) {
			echo $data['article']['publication_date'];
		}
		
		if ( $showpubdates && $showbylines ) {
			echo ' | ';
		}
		
		if ( $showbylines ) {
			echo $data['article']['author'];
		}
		
		echo '</p>';
	}
}



// load main template
require_once( 'templates/zero.php' );
