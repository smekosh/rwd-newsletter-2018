<?php

foreach ( $_GET as $k => $v ) {
	$_GET[$k] = trim(stripcslashes(strip_tags( $v )));
}

$design = array(
	'body_width' => 640,
	'page_bg'    => 'f2f2f2',
	'content_bg' => 'fcfcfc',
	'img'        => array(
						'voa'        => 'img/voa-logo_142x60_2x_white-on-blue.png',
						'download'   => 'img/fa-download_14x14_2x.png',
						'facebook'   => 'img/fa-facebook_44x44_2x.png',
						'instagram'  => 'img/fa-instagram_44x44_2x.png',
						'soundcloud' => 'img/fa-soundcloud_44x44_2x.png',
						'twitter'    => 'img/fa-twitter_44x44_2x.png',
						'youtube'    => 'img/fa-youtube_44x44_2x.png'
	)
);

$design_export['img'] = array(
	'voa'        => 'https://gdb.voanews.com/8CB55872-2155-44C0-9CD2-9ED59B06D589.png',
	'download'   => 'https://gdb.voanews.com/3088AAFB-C7EA-480E-9924-BAF691D1E82D.png',
	'facebook'   => 'https://gdb.voanews.com/0BAA13B7-EE2D-4266-8134-FFB183B2FC89.png',
	'instagram'  => 'https://gdb.voanews.com/9CBCF3C8-724B-4C16-B977-EB7B9D694432.png',
	'soundcloud' => 'https://gdb.voanews.com/0C4E022E-ACF0-4B6D-AE64-DC901529B195.png',
	'twitter'    => 'https://gdb.voanews.com/DBB4A9F8-7EF3-4A25-9DD8-319824FAD909.png',
	'youtube'    => 'https://gdb.voanews.com/B0C4A936-D522-46A5-B2B9-74DF07F3D2D8.png'
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

$export_data = array(
		
	'system' => array(
		'base_url'          => '$$BASEURL$$',
		'send_date'         => '$$TODAY$$',
		'topic_id'          => '$$Topic.Id$$',
		'topic_title'       => '$$Topic.LocalizedTitle$$',
		'topic_description' => '$$Topic.LocalizedDesc$$',
	),
	
	'article' => array(
		'title'             => '$$Article.Title$$',
		'title_caps'        => '$$Article.TitleCAPS$$',
		'intro'             => '$$Article.Intro$$',
		'content'           => '$$Article.Content$$',
		'url'               => '$$Article.Url$$',
		'publication_date'  => '$$Article.PublicationDate$$',
		'content_type'      => '$$Article.ContenType$$',
		'author'            => '$$Article.Author$$',
		'dateline'          => '$$Article.Dateline$$',
		'image_first_item'  => '$$Article.ImageUrl['.$design['body_width'].']$$',
		'image_nth_item'    => '$$Article.ImageUrl['.($design['body_width']/2).']$$',
		'image_compact_item'=> '$$Article.ImageUrl['.($design['body_width']/4).']$$',
		'bbg_direct_url'    => '$$Article.DirectUrl$$'
	)
);

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



// if ( $_GET['export'] ) {
	
// 	ob_start();
// 	require_once( 'templates/zero.php' );
// 	$newsletter = ob_get_contents();
// 	ob_end_clean();
	
// 	require_once( 'inc/Premailer.php' );
// 	$pre   = Premailer::html( $newsletter );
// 	$html  = $pre['html'];
// 	$plain = $pre['plain'];
	
// 	echo $plain;
	
// 	//Similarly for URLs:
// 	//$pre = Premailer::url($url);
	
// } else {
	
	// display main template
	require_once( 'templates/zero.php' );
	
// }
