<?php

foreach ( $_GET as $k => $v ) {
	$_GET[$k] = trim(stripcslashes(strip_tags( $v )));
}

$img_dir = 'http://localhost:8080/rwd-newsletter-2018/img/';

$design = array(
	'body_width' => 640,
	'page_bg'    => 'f2f2f2',
	'content_bg' => 'fcfcfc',
	'voa_blue'   => '3a79b7',
	'img'        => array(
						'voa'        => $img_dir.'voa-2018-logo_ltgray-transparent_150x60.png',
						'download'   => $img_dir.'fa-download_14x14_2x.png',
						'facebook'   => $img_dir.'fa-facebook_44x44_2x.png',
						'googleplus' => $img_dir.'fa-googleplus_44x44_2x.png',
						'instagram'  => $img_dir.'fa-instagram_44x44_2x.png',
						'soundcloud' => $img_dir.'fa-soundcloud_44x44_2x.png',
						'telegram'   => $img_dir.'fa-telegram_44x44_2x.png',
						'twitter'    => $img_dir.'fa-twitter_44x44_2x.png',
						'vk'         => $img_dir.'fa-vk_44x44_2x.png',
						'youtube'    => $img_dir.'fa-youtube_44x44_2x.png'
	)
);

$design_export['img'] = array(
	'voa'        => 'https://gdb.voanews.com/CAA762CE-6004-4C67-B8C1-B0F43F5CA3E5.png',
	'download'   => 'https://gdb.voanews.com/301FCA05-A838-498F-BA3A-EE21B0C34802.png',
	'facebook'   => 'https://gdb.voanews.com/0BAA13B7-EE2D-4266-8134-FFB183B2FC89.png',
	'instagram'  => 'https://gdb.voanews.com/9CBCF3C8-724B-4C16-B977-EB7B9D694432.png',
	'googleplus' => 'https://gdb.voanews.com/06A975EE-5CBD-46EE-B132-2C75EFBB6DAB.png',
	'soundcloud' => 'https://gdb.voanews.com/0C4E022E-ACF0-4B6D-AE64-DC901529B195.png',
	'telegram'   => 'https://gdb.voanews.com/D536E611-C06B-4975-9EC7-CAB6A70286AB.png',
	'twitter'    => 'https://gdb.voanews.com/DBB4A9F8-7EF3-4A25-9DD8-319824FAD909.png',
	'vk'         => 'https://gdb.voanews.com/274838BE-34E9-4B16-9049-DC598034AA0A.png',
	'youtube'    => 'https://gdb.voanews.com/B0C4A936-D522-46A5-B2B9-74DF07F3D2D8.png'
);

// redirect to a default if needed
if ( empty( $_GET )) {
	
	$defaults = array(
		'lang'            => 'en',
		'g_topic_id'      => 999,
		'export'          => false,
		'itemcount'       => 5,
		'layout'          => 'standard', /* options: standard, compact, direct, fulltext */
		'showcontenttype' => true,
		'showzones'       => false,
		'showbylines'     => true,
		'showpubdates'    => true,
		'showdescription' => true,
		'showviewweblink' => true,
		'newsletterslug'  => 'NEWSLETTERSLUG'
	);
	
	header( 'Location: newsletter.php?'.http_build_query( $defaults, '', '&' ));
	exit;
}

// will be appended to most URLs in the newsletter
$tracking = "utm_medium=email&utm_campaign={$_GET['newsletterslug']}-t{$_GET['g_topic_id']}&utm_source=newsletter";

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
	),
	
	'zone' => array(
		'name'         => '$$Zone.Name$$'
	)
);

// load language configurations and translations
require_once( 'languages/'.$_GET['lang'].'.php' );

// allow a newsletter to override default values
if ( file_exists( 'customizations/'.$_GET['lang'].'-'.$_GET['g_topic_id'].'.php' )) {
	require_once( 'customizations/'.$_GET['lang'].'-'.$_GET['g_topic_id'].'.php' );
}



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



function export_divider( $template, $position ) {
	
	$divider = '*******************************************************************************';
	
	if ( $_GET['export'] ) {
		echo "\r\r\r\r\r";
		echo strtoupper("<!-- {$divider} {$template} template {$position} {$divider} -->");
		echo "\r\r\r\r\r";
	}
}



// display main template
require_once( 'templates/zero.php' );
