<?php

# english

$config = array(
	'lang' => 'tr',
	'dir'  => 'ltr',
	'date_format' => 'd F Y'
);



$loc = array(
	'bbg_direct_button'         => "BBG Direct'te izle",
	'continue_btn_featured'		=> "Devam et",
	'social_media_cta'          => "VOA'yla etkileşime geçin",
	'subscribe_text'            => "VOA Türkçe haber bültenine abone ol",
	'unsubscribe_text'          => "Abonelikten çıkmak mı istiyorsunuz?",
	'view_this_in_your_browser' => "E-postayı web tarayıcınızda görüntüleyin",
	'voa_contact_email'         => "tr@voanews.com",
	'voa_logo_alt'				=> "VOA"
);



$social = array(
	'facebook'   => array( 'text' => 'Facebook',   'url' => 'https://www.facebook.com/amerikaninsesi/' ),
	'googleplus' => array( 'text' => 'Google+',    'url' => '' ),
	'instagram'  => array( 'text' => 'Instagram',  'url' => 'https://www.instagram.com/voaturkish/' ),
	'soundcloud' => array( 'text' => 'Soundcloud', 'url' => '' ),
	'telegram'   => array( 'text' => 'Telegram',   'url' => '' ),
	'twitter'    => array( 'text' => 'Twitter',    'url' => 'https://twitter.com/VOATurkish' ),
	'youtube'    => array( 'text' => 'YouTube',    'url' => 'https://www.youtube.com/user/voaturkce' )
);



if ( $_GET['export'] ) {
	
	// show variables for export to CMS
	$data = $export_data;
	$design['img'] = $design_export['img'];
	
} else {
	
	// load sample content for demo or debugging CSS
	include_once( 'data/'.$config['lang'].'_test-data.php' );
	
}
