<?php

# ukrainian

$config = array(
	'lang' => 'uk',
	'dir'  => 'ltr',
	'date_format' => 'F j, Y'
);



$loc = array(
	'bbg_direct_button'         => 'Переглянути на BBG Direct',
	'continue_btn_featured'		=> 'Продовжити читати',
	'social_media_cta'          => 'Долучитися до "Голосу Америки"',
	'subscribe_text'            => 'Підписатися на цю розсилку.',
	'unsubscribe_text'          => 'Бажаєте відписатися?',
	'view_this_in_your_browser' => 'Переглянути цей лист у веб-браузері',
	'voa_contact_email'         => 'holos@voanews.com',
	'voa_logo_alt'				=> 'VOA'
);



$social = array(
	'facebook'   => array( 'text' => 'Facebook',   'url' => 'https://www.facebook.com/chastime/' ),
	'googleplus' => array( 'text' => 'Google+',    'url' => '' ),
	'instagram'  => array( 'text' => 'Instagram',  'url' => 'https://www.instagram.com/holos_ameryky/' ),
	'soundcloud' => array( 'text' => 'Soundcloud', 'url' => '' ),
	'telegram'   => array( 'text' => 'Telegram',   'url' => '' ),
	'twitter'    => array( 'text' => 'Twitter',    'url' => 'https://twitter.com/chastime' ),
	'youtube'    => array( 'text' => 'YouTube',    'url' => 'https://www.youtube.com/user/HolosAmeryky' )
);



if ( $_GET['export'] ) {
	
	// show variables for export to CMS
	$data = $export_data;
	$design['img'] = $design_export['img'];
	
} else {
	
	// load sample content for demo or debugging CSS
	include_once( 'data/'.$config['lang'].'_test-data.php' );
	
}
