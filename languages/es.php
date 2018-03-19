<?php

# english

$config = array(
	'lang' => 'es',
	'dir'  => 'ltr',
	'date_format' => 'F j, Y'
);



$loc = array(
	'bbg_direct_button'         => 'Encuéntrelo en BBG Direct',
	'continue_btn_featured'		=> 'Siga leyendo',
	'social_media_cta'          => 'Conéctese con VOA',
	'subscribe_text'            => 'Suscribirse a este boletín',
	'unsubscribe_text'          => 'Dejar de recibir este boletín',
	'view_this_in_your_browser' => 'Ver este correo en su buscador',
	'voa_contact_email'         => 'editor@voanews.com',
	'voa_logo_alt'				=> 'VOA'
);



$social = array(
	'facebook'   => array( 'text' => 'Facebook',   'url' => 'https://www.facebook.com/LaVozdeAmerica' ),
	'googleplus' => array( 'text' => 'Google+',    'url' => '' ),
	'instagram'  => array( 'text' => 'Instagram',  'url' => 'https://www.instagram.com/voanoticias/' ),
	'soundcloud' => array( 'text' => 'Soundcloud', 'url' => '' ),
	'telegram'   => array( 'text' => 'Telegram',   'url' => '' ),
	'twitter'    => array( 'text' => 'Twitter',    'url' => 'https://twitter.com/VOANoticias' ),
	'youtube'    => array( 'text' => 'YouTube',    'url' => 'https://www.youtube.com/user/vozdeamerica' )
);



if ( $_GET['export'] ) {
	
	// show variables for export to CMS
	$data = $export_data;
	$design['img'] = $design_export['img'];
	
} else {
	
	// load sample content for demo or debugging CSS
	include_once( 'data/'.$config['lang'].'_test-data.php' );
	
}
