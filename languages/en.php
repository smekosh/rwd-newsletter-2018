<?php

# english

$config = array(
	'lang' => 'en',
	'dir'  => 'ltr'
);



$url = array(
	'voa_home' => 'https://www.voanews.com/'
);



$loc = array(
	'continue_btn_featured'		=> 'Continue reading',
	'view_this_in_your_browser' => 'Click here to view this email in your web browser.',
	'voa_logo_alt'				=> 'VOA'
);



if ( $_GET['export'] ) {
	
	// show variables for export to CMS
	$data = array(
		'article' => array(
			'title'            => '$$Article.Title$$',
			'title_caps'       => '$$Article.TitleCAPS$$',
			'intro'            => '$$Article.Intro$$',
			'content'          => '$$Article.Content$$',
			'url'              => '$$Article.Url$$',
			'publication_date' => '$$Article.PublicationDate$$',
			'content_type'     => '$$Article.ContenType$$',
			'author'           => '$$Article.Author$$',
			'dateline'         => '$$Article.Dateline$$',
			'image_first_item' => '$$Article.ImageUrl['.$_GET['bodywidth'].']$$',
			'image_nth_item'   => '$$Article.ImageUrl['.($_GET['bodywidth']/2).']$$'
		)
	);
	
} else {
	
	// show sample content for demo or debugging CSS
	$data = array(
		'article' => array(
			'title'            => 'Revised Travel Ban Triggers Mixed Reaction',
			'title_caps'       => 'REVISED TRAVEL BAN TRIGGERS MIXED REACTION',
			'intro'            => 'Iraq, now removed from U.S. travel restrictions, praised the new executive order, while Sudan, still included in the ban, reaffirmed its opposition to the measure.',
			'content'          => '[full article content goes here',
			'url'              => 'https://www.voanews.com/a/revised-travel-ban-triggers-mixed-reaction/3752057.html',
			'publication_date' => 'March 7, 2017',
			'content_type'     => 'Article',
			'author'           => 'VOA News',
			'dateline'         => 'Washington, DC',
			'image_first_item' => 'https://gdb.voanews.com/A07CC7B4-01B9-4AEF-8353-E56FC97D276D_w'.$_GET['bodywidth'].'.jpg',
			'image_nth_item'   => 'https://gdb.voanews.com/0FCE3F4D-12AC-43BA-BAB1-3CFAD97294D4_w'.($_GET['bodywidth']/2).'.jpg'
		)
	);
	
}
