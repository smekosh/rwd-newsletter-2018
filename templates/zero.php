<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php /* http-equiv is rejected by the CMS: <meta content="IE=edge" http-equiv="X-UA-Compatible" /> */ ?>
	<title>RWD Newsletter</title>
	<style type="text/css">
		<?php include_once( 'css/premail.css' ); ?>
	</style>
</head>

<body>
	<center>
		<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" bgcolor="<?php echo $design['page_bg']; ?>">

			<?php 
			include( 'header.php' );
			
			switch ( $_GET['layout'] ) {
				
				case 'standard':
					if ( $_GET['showzones'] ) {
						include( 'zone.php' );
					}
					include( 'item-first.php' );
					for ( $i = 1; $i < $_GET['itemcount']; $i++ ) {
						if ( $_GET['showzones'] ) {
							include( 'zone.php' );
						}
						include( 'item.php' );
					}
					break;
					
				case 'compact':
					for ( $i = 0; $i < $_GET['itemcount']; $i++ ) {
						if ( $_GET['showzones'] ) {
							include( 'zone.php' );
						}
						include( 'item-compact.php' );
					}
					break;
					
				case 'direct':
					for ( $i = 0; $i < $_GET['itemcount']; $i++ ) {
						include( 'item.php' );
					}
					break;
					
				case 'fulltext':
					for ( $i = 0; $i < $_GET['itemcount']; $i++ ) {
						include( 'item-fulltext.php' );
					}
					break;
			}
			
			include( 'footer.php' );
			?>

		</table>
	</center>
</body>
</html>
