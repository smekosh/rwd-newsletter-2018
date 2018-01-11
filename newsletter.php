<?php

$_GET['lang'] = trim(stripcslashes(strip_tags( $_GET['lang'] )));
$lang = ( $_GET['lang'] == '' ? 'en' : $_GET['lang'] );
require_once( 'languages/'.$lang.'.php' );

?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>RWD Newsletter</title>
	<style type="text/css">
		<?php include_once( 'inc/premail.css' ); ?>
	</style>
</head>

<body>
	<center>
		<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">

			<?php include( 'inc/header.php' ); ?>
			<?php include( 'inc/featured.php' ); ?>
			<?php include( 'inc/standard.php' ); ?>
			<?php include( 'inc/standard.php' ); ?>
			<?php include( 'inc/standard.php' ); ?>

		</table>
	</center>
</body>
</html>
