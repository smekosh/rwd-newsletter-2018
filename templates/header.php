
			<?php if ( $_GET['showdescription'] || $_GET['showviewweblink'] ) { ?>
			
			<?php /* <!-- // 2-COLUMN SCAFFOLD [CENTERING] --> */ ?>
			<tr>
				<td align="center" height="100%" valign="top" width="100%">
					<!--[if mso]>
					<table align="center" border="0" cellspacing="0" cellpadding="0" width="<?php echo $_GET['bodywidth']; ?>">
					<tr>
					<td align="center" valign="top" width="<?php echo $_GET['bodywidth']; ?>">
					<![endif]-->
					<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: <?php echo $_GET['bodywidth']; ?>px; margin-bottom: 8px; margin-top: 16px;">
						<tr>
							<td align="center" valign="top" bgcolor="<?php echo $_GET['pagebg']; ?>" class="header">
								<?php /* <!--// DEVELOPER NOTES:
									1. Setting font-size:0; is necessary to ensure
									   that there is no extra spacing introduced
									   between the centering divs that wrap each
									   of the columns. //--> */ ?>

								<!--[if mso]>
								<table align="center" border="0" cellspacing="0" cellpadding="0" width="<?php echo $_GET['bodywidth']; ?>">
								<tr>
								<td align="left" valign="top" width="<?php echo $_GET['bodywidth']/2; ?>">
								<![endif]-->
								<div style="display:inline-block; max-width: <?php echo $_GET['bodywidth']/2; ?>px; vertical-align:top; width:100%;">
									<?php /* <!--// DEVELOPER NOTES:
										1. To have each column center upon stacking,
										   wrap them in individual divs, set the same
										   max-width and width as the table within it,
										   and set display to inline-block; using
										   vertical-align is optional. //--> */ ?>

									<table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: <?php echo $_GET['bodywidth']/2; ?>px;">
										<tr>
											<td align="left" valign="top">

												<?php /* <!-- // REPLACE WITH BLOCK --> */ ?>
												
												<?php if ( $_GET['showdescription'] ) { ?>
												<p class="link2web"><?php echo $data['system']['topic_description']; ?></p>
												<?php } ?>
												
												<?php /* <!-- REPLACE WITH BLOCK // --> */ ?>

											</td>
										</tr>
									</table>
								</div>
								<!--[if mso]>
								</td>
								<td align="left" valign="top" width="<?php echo $_GET['bodywidth']/2; ?>">
								<![endif]-->
								<div style="display:inline-block; max-width: <?php echo $_GET['bodywidth']/2; ?>px; vertical-align:top; width:100%;">
									<table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: <?php echo $_GET['bodywidth']/2; ?>px;">
										<tr>
											<td align="right" valign="top">

												<?php /* <!-- // REPLACE WITH BLOCK --> */ ?>
												
												<?php if ( $_GET['showviewweblink'] ) { ?>
												<p class="link2web"><a href="[-ViewInBrowser-]"><?php echo $loc['view_this_in_your_browser']; ?></a></p>
												<?php } ?>
												
												<?php /* <!-- REPLACE WITH BLOCK // -->	 */ ?>

											</td>
										</tr>
									</table>
								</div>
								<!--[if mso]>
								</td>
								</tr>
								</table>
								<![endif]-->
							</td>
						</tr>
					</table>
					<!--[if mso]>
					</td>
					</tr>
					</table>
					<![endif]-->
				</td>
			</tr>
			<?php /* <!-- 2-COLUMN SCAFFOLD [CENTERING] // --> */ ?>
			
			<?php } // end if showdescription or showviewweblink ?>
				
				
				
			<?php /* <!-- // 1-COLUMN SCAFFOLD --> */ ?>
			<tr>
				<td align="center" height="100%" valign="top" width="100%">
					<!--[if mso]>
					<table align="center" border="0" cellspacing="0" cellpadding="0" width="<?php echo $_GET['bodywidth']; ?>">
					<tr>
					<td align="center" valign="top" width="<?php echo $_GET['bodywidth']; ?>">
					<![endif]-->
					<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-bottom: 30px;">
						
						<tr>
							<td align="center" valign="top" bgcolor="1330bf" class="header">

								<?php /* <!-- // REPLACE WITH BLOCK --> */ ?>
								<div class="logo"><a href="<?php echo $data['system']['base_url']; ?>"><img src="img/voa-logo_142x60_2x_white-on-blue.png" width="71" height="30" border="0" alt="<?php echo $loc['voa_logo_alt']; ?>" /></a></div>
								<?php /* <!-- REPLACE WITH BLOCK // --> */ ?>
								
							</td>
						</tr>
						
					</table>
					<!--[if mso]>
					</td>
					</tr>
					</table>
					<![endif]-->
				</td>
			</tr>
			<?php /* <!-- 1-COLUMN SCAFFOLD // --> */ ?>
			
			<?php /* <!-- // 1-COLUMN SCAFFOLD --> */ ?>
			<tr>
				<td align="center" height="100%" valign="top" width="100%">
					<!--[if mso]>
					<table align="center" border="0" cellspacing="0" cellpadding="0" width="<?php echo $_GET['bodywidth']; ?>">
					<tr>
					<td align="center" valign="top" width="<?php echo $_GET['bodywidth']; ?>">
					<![endif]-->
					<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-bottom: 30px;">
						
						<tr>
							<td align="center" valign="top" bgcolor="<?php echo $_GET['pagebg']; ?>" class="newsletter-title">

								<?php /* <!-- // REPLACE WITH BLOCK --> */ ?>
								<h1 class="newsletter-title"><?php echo $data['system']['topic_title']; ?></h1>
								<h2 class="newsletter-date">&mdash; <a href="[-ViewInBrowser-]"><?php echo $data['system']['send_date']; ?></a> &mdash;</h2>
								<?php /* <!-- REPLACE WITH BLOCK // --> */ ?>
								
							</td>
						</tr>
						
					</table>
					<!--[if mso]>
					</td>
					</tr>
					</table>
					<![endif]-->
				</td>
			</tr>
			<?php /* <!-- 1-COLUMN SCAFFOLD // --> */ ?>
