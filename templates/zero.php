<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>RWD Newsletter</title>
	<style type="text/css">
		<?php include_once( 'css/premail.css' ); ?>
	</style>
</head>

<body>
	<center>
		<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">

			<?php 
			include( 'header.php' );
			
			switch ( $_GET['layout'] ) {
				
				case 'standard':
					include( 'item-first.php' );
					for ( $i = 1; $i < $_GET['itemcount']; $i++ ) {
						include( 'item.php' );
					}
					break;
					
				case 'compact':
					for ( $i = 0; $i < $_GET['itemcount']; $i++ ) {
						include( 'item-compact.php' );
					}
					break;
					
				case 'fulltext':
					for ( $i = 0; $i < $_GET['itemcount']; $i++ ) {
						include( 'item-first.php' );
					}
					break;
			}
			
			include( 'footer.php' );
			?>

		</table>
	</center>
</body>
</html>
