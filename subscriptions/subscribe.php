<?php

require_once( 'subscriptions-data.php' );

?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="IE=edge" http-equiv="X-UA-Compatible" />
	<title>Subscribe</title>
	<link rel="stylesheet" type="text/css" media="all" href="subscriptions.css" />
</head>

<body>
	
	<div class="wrapper">
		
		<header id="header">
			<a class="logo" href="<?php echo $data['voa_home']; ?>"><img src="../img/voa-2018logo_150x60_2x_blue-transparent.png" width="75" height="30" alt="VOA" /></a>
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
