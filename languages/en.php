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
	'facebook'   => array( 'text' => 'Facebook',   'url' => 'https://www.facebook.com/voiceofamerica' ),
	'googleplus' => array( 'text' => 'Google+',    'url' => '' ),
	'instagram'  => array( 'text' => 'Instagram',  'url' => 'https://www.instagram.com/voanews/' ),
	'soundcloud' => array( 'text' => 'Soundcloud', 'url' => '' ),
	'telegram'   => array( 'text' => 'Telegram',   'url' => '' ),
	'twitter'    => array( 'text' => 'Twitter',    'url' => 'https://twitter.com/voanews' ),
	'youtube'    => array( 'text' => 'YouTube',    'url' => 'https://www.youtube.com/user/VOAvideo' )
);



if ( $_GET['export'] ) {
	
	// show variables for export to CMS
	$data = $export_data;
	$design['img'] = $design_export['img'];
	
} else {
	
	// load sample content for demo or debugging CSS
	include_once( 'data/'.$config['lang'].'_test-data.php' );
	
}
