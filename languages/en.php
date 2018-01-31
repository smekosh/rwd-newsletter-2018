<?php

# english

$config = array(
	'lang' => 'en',
	'dir'  => 'ltr',
	'date_format' => 'F j, Y'
);



$loc = array(
	'bbg_direct_button'         => 'View on BBG Direct',
	'continue_btn_featured'		=> 'Continue reading',
	'social_media_cta'          => 'Engage with VOA',
	'subscribe_text'            => 'Subscribe to this newsletter.',
	'unsubscribe_text'          => 'Need to unsubscribe?',
	'view_this_in_your_browser' => 'View this email in your web browser.',
	'voa_contact_email'         => 'voanews@voanews.com',
	'voa_logo_alt'				=> 'VOA'
);



$social = array(
	'facebook'  => array( 'text' => 'Facebook',   'url' => 'https://www.facebook.com/voiceofamerica' ),
	'instagram' => array( 'text' => 'Instagram',  'url' => 'https://www.instagram.com/voanews/' ),
	'soundcloud'=> array( 'text' => 'Soundcloud', 'url' => '' ),
	'twitter'   => array( 'text' => 'Twitter',    'url' => 'https://twitter.com/voanews' ),
	'youtube'   => array( 'text' => 'YouTube',    'url' => 'https://www.youtube.com/user/VOAvideo' )
);



if ( $_GET['export'] ) {
	
	// show variables for export to CMS
	$data = array(
		
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
	
} else {
	
	// load sample content for demo or debugging CSS
	require_once( 'test-data/'.$config['lang'].'-test-data.php' );
	
}
