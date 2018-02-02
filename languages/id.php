<?php

# english

$config = array(
	'lang' => 'id',
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
	'facebook'   => array( 'text' => 'Facebook',   'url' => 'https://facebook.com/voaindonesia' ),
	'instagram'  => array( 'text' => 'Instagram',  'url' => 'https://www.instagram.com/voaindonesia/' ),
	'soundcloud' => array( 'text' => 'Soundcloud', 'url' => '' ),
	'twitter'    => array( 'text' => 'Twitter',    'url' => 'https://twitter.com/voaindonesia' ),
	'youtube'    => array( 'text' => 'YouTube',    'url' => 'https://www.youtube.com/user/voaindonesia' )
);



if ( $_GET['export'] ) {
	
	// show variables for export to CMS
	$data = $export_data;
	$design['img'] = $design_export['img'];
	
} else {
	
	// load sample content for demo or debugging CSS
	require_once( 'test-data/'.$config['lang'].'_test-data.php' );
	
}
