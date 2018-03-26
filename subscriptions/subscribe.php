<?php

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
	'subscribe'          => 'Subscribe'
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
	'subscribe'          => 'Subscribe'
);

if ( isset($_GET['export']) ) { $data = $export; } else { $data = $preview; }

?><!DOCTYPE html>
<html>
<head>
	<title>Subscribe</title>
	
	<style type="text/css">
		
		*, *:before, *:after {
			box-sizing: border-box;
		}
		
		body {
			background-color: #f2f2f2;
			color: #222;
			font-family: Helvetica, Tahoma, Arial, sans-serif;
			line-height: 1.35;
			margin: 0;
		}
		
		h1, h2 { margin: 0; }
		
		a       { color: #1330bf; text-decoration: underline; }
		a:hover { color: #d41010; text-decoration: underline; }
		
		img { display: block; }
		
		.wrapper {
			margin: 0 auto;
			max-width: 720px;
			width: 100%;
		}
		
		#header {
			border-bottom: 4px solid #1330bf;
			margin: 0 auto;
			padding: 1rem;
			width: 100%;
		}
		
		a.logo { display: block; }
		
		a.logo > img { margin: 0 auto; }
		
		#main {
			background-color: #fcfcfc;
			border-bottom: 2px solid #ddd;
			margin: 0;
			padding: 1rem 1rem 2rem 1rem;
			width: 100%;
		}
		
		#footer {
			padding: 1.5rem;
			text-align: center;
		}
		
		.newsletter-header {
			border-bottom: 2px solid #f2f2f2;
			padding-bottom: 1rem;
		}
		
		h1 {
			font-size: 2rem;
			font-weight: bold;
		}
		
		h2 {
			color: #999;
			font-size: 1rem;
			font-weight: normal;
		}
		
		.message {
			border-color: #ddd;
			border-style: solid;
			border-width: 0 0 0 4px;
			margin: 1rem 0;
			padding: 1rem;
			width: 100%;
		}
		
		.error {
			background-color: #fff7c4;
			border-color: #f5d50a;
			color: #4e4400;
		}
		
		.success {
			background-color: #bbf0c1;
			border-color: #4bd65b;
			color: #0e3c13;
		}
		
		.email-form {
			font-size: 1rem;
			line-height: 1;
			padding: .5rem 0 0 0;
			text-align: left;
			width: 100%;
		}
		
		.email-form #EmailTB {
			background-color: #f2f2f2;
			border: none;
			border-bottom: 2px solid #1330bf;
			color: #222;
			box-shadow: none;
			display: inline-block;
			font-size: 1rem;
			height: auto;
			line-height: 1;
			margin: 1rem .5rem 0 0;
			max-width: 220px;
			padding: .5rem;
			width: 100%;
		}
		
		.email-form .signup-label {
			display: none;
			visibility: hidden;
		}
		
		.email-form a.rfdSkinnedButton {
			display: inline-block;
			font-size: 1rem;
			line-height: 1;
			margin: 0;
			padding: 0;
			text-decoration: none;
		}
		
		.email-form a.rfdSkinnedButton input {
			background-color: #1330bf;
			border: none;
			border-bottom: 2px solid #1330bf;
			border-radius: none;
			box-shadow: none;
			color: #fff;
			display: block;
			font-size: 1rem;
			font-weight: 400;
			height: auto;
			letter-spacing: .015em;
			line-height: 1;
			margin: 1rem 0 0 0;
			padding: .5rem .75rem;
			text-transform: uppercase;
		}
		
		.email-form a.rfdSkinnedButton:hover input,
		.email-form a.rfdSkinnedButton:active input {
			background-color: #0e2389;
			border-color: #0e2389;
			cursor: pointer;
		}
		
		.email-form.unsubscribe #EmailTB {
			border-color: #d41010;
		}
		
		.email-form.unsubscribe a.rfdSkinnedButton input { 
			background-color: #d41010;
			border-color: #d41010;
		}
		
		.email-form.unsubscribe a.rfdSkinnedButton:hover input,
		.email-form.unsubscribe a.rfdSkinnedButton:active input {
			background-color: #9d0c0c;
			border-color: #9d0c0c;
		}
		
		.tos {
			color: #999;
			font-size: .8rem;
			margin: 0;
		}
		
		.tos > a { color: #999; }
		
		
		
		@media (min-width: 400px) {
			#main { padding: 1.5rem; }
		}
		
		
		
		@media (min-width: 600px) {
			#main { 
				border-radius: 0 0 4px 4px;
				padding: 2rem 2rem 3rem 2rem;
			}
			
			.email-form #EmailTB {
				max-width: 260px;
			}
		}
		
		
		
		@media (min-width: 800px) {
			.wrapper { margin: 3rem auto; }
		}
		
	</style>
</head>

<body>
	
	<div class="wrapper">
		
		<header id="header">
			<a class="logo" href="<?php echo $data['voa_home']; ?>"><img src="../img/voa-logo_142x60_2x_blue-transparent.png" width="71" height="30" alt="VOA" /></a>
		</header>
		
		<main id="main">
			<header class="newsletter-header">
				<h1><?php echo $data['header']; ?></h1>
				<h2><?php echo $data['header_description']; ?></h2>
			</header>
			
			<p><?php echo $data['to_subscribe']; ?></p>
			
			<p class="message error">Here's a sample error/warning message.</p>
			
			<p class="message success">Here's a sample success message.</p>
			
			<div class="email-form">
				<div>
					<label for="EmailTB" class="signup-label">Your email address:</label>
					<input  id="EmailTB" name="EmailTB" size="20" maxlength="75" class="riTextBox riEnabled" value="" type="email" placeholder="Your email address" />
					<a href="javascript:void(0)" class="rfdSkinnedButton"><input name="SubscribeButton" value="<?php echo $data['subscribe']; ?>" id="SubscribeButton" class="rfdDecorated" tabindex="-1" type="submit" /></a>
				</div>
			</div>
		</main>
		
		<footer id="footer">
			<p class="tos"><a href=""><?php echo $data['terms_of_use']; ?></a></p>
		</footer>
		
	</div>
	
</body>
</html>
