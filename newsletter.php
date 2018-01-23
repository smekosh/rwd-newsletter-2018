<?php

foreach ( $_GET as $k => $v ) {
	$_GET[$k] = trim(stripcslashes(strip_tags( $v )));
}

// redirect to a default if needed
if ( empty( $_GET )) {
	
	$defaults = array(
		'debug'         => false,
		'lang'          => 'en',
		'bodywidth'     => '640',
		'showbylines'   => true,
		'showpubdates'  => true,
		'pagebg'        => 'f2f2f2'
	);
	
	header( 'Location: newsletter.php?'.http_build_query( $defaults, '', '&' ));
	exit;
}

// load language configurations and translations
require_once( 'languages/'.$_GET['lang'].'.php' );

// load main template
require_once( 'templates/zero.php' );
