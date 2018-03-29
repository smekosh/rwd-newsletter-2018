<?php

/* subscription data */

$export = array(
	'voa_home'           => 'https://www.voanews.com/',
	'header'             => 'Header',
	'header_description' => 'Header description',
	'subscribe_message'  => 'Subscribe message',
	'error_1'            => 'Error 1',
	'invalid_email'      => 'Invalid Email',
	'already_subscribed' => 'Already subscribed',
	'banned_email'       => 'Banned email',
	'error_2'            => 'Error 2',
	'to_subscribe'       => 'To subscribe',
	'terms_of_use'       => 'TERMS OF USE',
	'yes'                => 'Yes',
	'no'                 => 'No',
	'subscribe'          => 'Subscribe',
	'terms_of_use_url'   => ''
);

$preview = array(
	'voa_home'           => 'https://www.voanews.com/',
	'header'             => 'Newsletter Title',
	'header_description' => 'Here\'s a short description of this newsletter.',
	'subscribe_message'  => 'Subscribe message',
	'error_1'            => 'Error 1',
	'invalid_email'      => 'Invalid Email',
	'already_subscribed' => 'Already subscribed',
	'banned_email'       => 'Banned email',
	'error_2'            => 'Error 2',
	'to_subscribe'       => 'Enter your email address below to subscribe to this newsletter.',
	'terms_of_use'       => 'Terms of Use',
	'yes'                => 'Yes',
	'no'                 => 'No',
	'subscribe'          => 'Subscribe',
	'terms_of_use_url'   => ''
);

if ( isset($_GET['export']) ) { $data = $export; } else { $data = $preview; }
