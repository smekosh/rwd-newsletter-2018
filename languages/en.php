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
	'subscribe_text'            => 'Subscribe to this newsletter.',
	'unsubscribe_text'          => 'Need to unsubscribe?',
	'view_this_in_your_browser' => 'Click here to view this email in your web browser.',
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
			'image_first_item'  => '$$Article.ImageUrl['.$_GET['bodywidth'].']$$',
			'image_nth_item'    => '$$Article.ImageUrl['.($_GET['bodywidth']/2).']$$',
			'image_compact_item'=> '$$Article.ImageUrl['.($_GET['bodywidth']/4).']$$',
			'bbg_direct_url'    => '$$Article.DirectUrl$$'
		)
	);
	
} else {
	
	// show sample content for demo or debugging CSS
	$data = array(
		
		'system' => array(
			'base_url'          => 'https://www.voanews.com/',
			'send_date'         => date( $config['date_format'] ),
			'topic_id'          => '123',
			'topic_title'       => 'Newsletter Title',
			'topic_description' => 'A short description of this newsletter',
		),
		
		'article' => array(
			'title'             => 'Revised Travel Ban Triggers Mixed Reaction',
			'title_caps'        => 'REVISED TRAVEL BAN TRIGGERS MIXED REACTION',
			'intro'             => 'Iraq, now removed from U.S. travel restrictions, praised the new executive order, while Sudan, still included in the ban, reaffirmed its opposition to the measure.',
			'content'           => '[full article content goes here',
			'url'               => 'https://www.voanews.com/a/revised-travel-ban-triggers-mixed-reaction/3752057.html',
			'publication_date'  => 'March 7, 2017',
			'content_type'      => 'Article',
			'author'            => 'VOA News',
			'dateline'          => 'Washington, DC',
			'image_first_item'  => 'https://gdb.voanews.com/A07CC7B4-01B9-4AEF-8353-E56FC97D276D_w'.$_GET['bodywidth'].'.jpg',
			'image_nth_item'    => 'https://gdb.voanews.com/0FCE3F4D-12AC-43BA-BAB1-3CFAD97294D4_w'.($_GET['bodywidth']/2).'.jpg',
			'image_compact_item'=> 'https://gdb.voanews.com/0FCE3F4D-12AC-43BA-BAB1-3CFAD97294D4_w'.($_GET['bodywidth']/4).'.jpg',
			'bbg_direct_url'    => 'https://www.bbgdirect.com/en-US#ItemDetail/1/16/3752057'
		)
	);
	
}
