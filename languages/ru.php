<?php

# russian

$config = array(
	'lang' => 'ru',
	'dir'  => 'ltr',
	'date_format' => 'F j, Y'
);



$loc = array(
	'bbg_direct_button'         => 'View on BBG Direct',
	'continue_btn_featured'		=> 'Continue reading',
	'social_media_cta'          => 'Следите за нашими публикациями',
	'subscribe_text'            => 'Подписаться на рассылку',
	'unsubscribe_text'          => 'Отписаться от рассылки',
	'view_this_in_your_browser' => 'Читать в браузере',
	'voa_contact_email'         => 'golosameriki@voanews.com',
	'voa_logo_alt'				=> 'VOA'
);



$social = array(
	'facebook'   => array( 'text' => 'Facebook',   'url' => 'https://www.facebook.com/golosameriki/' ),
	'googleplus' => array( 'text' => 'Google+',    'url' => '' ),
	'instagram'  => array( 'text' => 'Instagram',  'url' => 'https://www.instagram.com/golos_ameriki/' ),
	'soundcloud' => array( 'text' => 'Soundcloud', 'url' => '' ),
	'telegram'   => array( 'text' => 'Telegram',   'url' => 'https://t.me/VOArussian' ),
	'twitter'    => array( 'text' => 'Twitter',    'url' => 'https://twitter.com/GolosAmeriki' ),
	'vk'         => array( 'text' => 'VK',         'url' => 'https://vk.com/golosameriki' ),
	'youtube'    => array( 'text' => 'YouTube',    'url' => 'https://www.youtube.com/user/golosamerikius' )
);



if ( $_GET['export'] ) {
	
	// show variables for export to CMS
	$data = $export_data;
	$design['img'] = $design_export['img'];
	
} else {
	
	// load sample content for demo or debugging CSS
	include_once( 'data/'.$config['lang'].'_test-data.php' );
	
}
