
			<?php /* <!-- // 2-COLUMN SCAFFOLD [CENTERING] --> */ ?>
			<tr>
				<td align="center" height="100%" valign="top" width="100%">
					<!--[if mso]>
					<table align="center" border="0" cellspacing="0" cellpadding="0" width="<?php echo $_GET['bodywidth']; ?>">
					<tr>
					<td align="center" valign="top" width="<?php echo $_GET['bodywidth']; ?>">
					<![endif]-->
					<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: <?php echo $_GET['bodywidth']; ?>px; margin-bottom: 30px;">
						<tr>
							<td align="center" valign="top" bgcolor="<?php echo $_GET['contentbg']; ?>" class="item-container">
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
											<td align="center" valign="top">

												<?php /* <!-- // REPLACE WITH BLOCK --> */ ?>
												<div class="standard-image rwd-img"><a href=""><img border="0" src="<?php echo $data['article']['image_nth_item']; ?>" /></a></div>
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
											<td align="center" valign="top">

												<?php /* <!-- // REPLACE WITH BLOCK --> */ ?>
												<div class="standard-text">
													<?php if ( $_GET['showcontenttype'] ) { ?><p class="content-type"><?php echo $data['article']['content_type']; ?></p><?php } ?>
													<h2 class="title"><a href="<?php echo $data['article']['url']; ?>"><?php echo $data['article']['title']; ?></a></h2>
													<?php show_bylines_pubdates(); ?>
													<p class="intro"><?php echo $data['article']['intro']; ?></p>
													<?php if ( $_GET['showbbgdirect'] ) { ?>
													<div><a href="<?php echo $data['article']['bbg_direct_url']; ?>" class="bbg-direct"><img src="img/fa-download_14x14_2x.png" width="14" height="14" border="0" alt="" /><?php echo $loc['bbg_direct_button']; ?></a></div>
													<?php } ?>
												</div>
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
