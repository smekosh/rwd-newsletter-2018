<?php

foreach ( $_GET as $k => $v ) {
	$_GET[$k] = trim(stripcslashes(strip_tags( $v )));
}

$img_dir = 'http://localhost/rwd-newsletter-2018/img/';

$design = array(
	'body_width' => 640,
	'page_bg'    => 'f2f2f2',
	'content_bg' => 'fcfcfc',
	'img'        => array(
						'voa'        => $img_dir.'voa-logo_142x60_2x_white-on-blue.png',
						'download'   => $img_dir.'fa-download_14x14_2x.png',
						'facebook'   => $img_dir.'fa-facebook_44x44_2x.png',
						'googleplus' => $img_dir.'fa-googleplus_44x44_2x.png',
						'instagram'  => $img_dir.'fa-instagram_44x44_2x.png',
						'soundcloud' => $img_dir.'fa-soundcloud_44x44_2x.png',
						'telegram'   => $img_dir.'fa-telegram_44x44_2x.png',
						'twitter'    => $img_dir.'fa-twitter_44x44_2x.png',
						'youtube'    => $img_dir.'fa-youtube_44x44_2x.png'
	)
);

$design_export['img'] = array(
	'voa'        => 'https://gdb.voanews.com/8CB55872-2155-44C0-9CD2-9ED59B06D589.png',
	'download'   => 'https://gdb.voanews.com/3088AAFB-C7EA-480E-9924-BAF691D1E82D.png',
	'facebook'   => 'https://gdb.voanews.com/0BAA13B7-EE2D-4266-8134-FFB183B2FC89.png',
	'instagram'  => 'https://gdb.voanews.com/9CBCF3C8-724B-4C16-B977-EB7B9D694432.png',
	'googleplus' => 'https://gdb.voanews.com/06A975EE-5CBD-46EE-B132-2C75EFBB6DAB.png',
	'soundcloud' => 'https://gdb.voanews.com/0C4E022E-ACF0-4B6D-AE64-DC901529B195.png',
	'telegram'   => 'https://gdb.voanews.com/D536E611-C06B-4975-9EC7-CAB6A70286AB.png',
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
		echo '<table border="0" class="plain byline"><tr><td>';
		
		if ( $showpubdates ) {
			echo $data['article']['publication_date'];
		}
		
		if ( $showpubdates && $showbylines ) {
			echo ' | ';
		}
		
		if ( $showbylines ) {
			echo $data['article']['author'];
		}
		
		echo '</td></tr></table>';
		
		table_spacer(6);
	}
}



function table_spacer( $height = 0 ) {
	echo '<table border="0" class="plain"><tr><td style="font-size: 0;" height="'.$height.'">&nbsp;</td></tr></table>';
}



// display main template
require_once( 'templates/zero.php' );
