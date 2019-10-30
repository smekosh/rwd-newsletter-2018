<?php

# english

$config = array(
	'lang' => 'id',
	'dir'  => 'ltr',
	'date_format' => 'j F Y'
);



$loc = array(
	'bbg_direct_button'         => 'Lihat di VOA Direct',
	'continue_btn_featured'		=> 'Selengkapnya',
	'social_media_cta'          => 'Ikuti VOA Indonesia',
	'subscribe_text'            => 'Berlangganan buletin ini.',
	'unsubscribe_text'          => 'Ingin berhenti berlangganan?',
	'view_this_in_your_browser' => 'Lihat email ini di browser.',
	'voa_contact_email'         => 'voaindonesia@voanews.com',
	'voa_logo_alt'				=> 'VOA'
);



$social = array(
	'facebook'   => array( 'text' => 'Facebook',   'url' => 'https://facebook.com/voaindonesia' ),
	'googleplus' => array( 'text' => 'Google+',    'url' => '' ),
	'instagram'  => array( 'text' => 'Instagram',  'url' => 'https://www.instagram.com/voaindonesia/' ),
	'soundcloud' => array( 'text' => 'Soundcloud', 'url' => '' ),
	'telegram'   => array( 'text' => 'Telegram',   'url' => '' ),
	'twitter'    => array( 'text' => 'Twitter',    'url' => 'https://twitter.com/voaindonesia' ),
	'youtube'    => array( 'text' => 'YouTube',    'url' => 'https://www.youtube.com/user/voaindonesia' )
);



if ( $_GET['export'] ) {
	
	// show variables for export to CMS
	$data = $export_data;
	$design['img'] = $design_export['img'];
	
} else {
	
	// load sample content for demo or debugging CSS
	include_once( 'data/'.$config['lang'].'_test-data.php' );
	
}
