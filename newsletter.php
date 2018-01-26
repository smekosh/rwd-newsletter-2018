<?php

foreach ( $_GET as $k => $v ) {
	$_GET[$k] = trim(stripcslashes(strip_tags( $v )));
}

// redirect to a default if needed
if ( empty( $_GET )) {
	
	$defaults = array(
		'debug'           => false,
		'lang'            => 'en',
		'export'          => false,
		'itemcount'       => 5,
		'bodywidth'       => '640',
		'compactlayout'   => false,
		'showbylines'     => true,
		'showpubdates'    => true,
		'showdescription' => true,
		'showviewweblink' => true,
		'showbbgdirect'   => true,
		'pagebg'          => 'f2f2f2',
		'contentbg'       => 'fcfcfc'
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
