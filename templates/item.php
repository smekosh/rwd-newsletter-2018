
			<?php /* <!-- // 2-COLUMN SCAFFOLD [CENTERING] --> */ ?>
			<tr>
				<td align="center" height="100%" valign="top" width="100%">
					<!--[if mso]>
					<table align="center" border="0" cellspacing="0" cellpadding="0" width="<?php echo $design['body_width']; ?>">
					<tr>
					<td align="center" valign="top" width="<?php echo $design['body_width']; ?>">
					<![endif]-->
					<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: <?php echo $design['body_width']; ?>px; margin-bottom: 30px;">
						<tr>
							<td align="center" valign="top" bgcolor="<?php echo $design['content_bg']; ?>" class="item-container">
								<?php /* <!--// DEVELOPER NOTES:
									1. Setting font-size:0; is necessary to ensure
									   that there is no extra spacing introduced
									   between the centering divs that wrap each
									   of the columns. //--> */ ?>

								<!--[if mso]>
								<table align="center" border="0" cellspacing="0" cellpadding="0" width="<?php echo $design['body_width']; ?>">
								<tr>
								<td align="left" valign="top" width="<?php echo $design['body_width']/2; ?>">
								<![endif]-->
								<div style="display:inline-block; max-width: <?php echo $design['body_width']/2; ?>px; vertical-align:top; width:100%;">
									<?php /* <!--// DEVELOPER NOTES:
										1. To have each column center upon stacking,
										   wrap them in individual divs, set the same
										   max-width and width as the table within it,
										   and set display to inline-block; using
										   vertical-align is optional. //--> */ ?>

									<table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: <?php echo $design['body_width']/2; ?>px;">
										<tr>
											<td align="center" valign="top">

												<?php /* <!-- // REPLACE WITH BLOCK --> */ ?>
												<div class="standard-image rwd-img"><a href="<?php echo ( $_GET['showbbgdirect'] ? $data['article']['bbg_direct_url'] : $data['article']['url'] ); ?>"><img border="0" src="<?php echo $data['article']['image_nth_item']; ?>" /></a></div>
												<?php /* <!-- REPLACE WITH BLOCK // --> */ ?>

											</td>
										</tr>
									</table>
								</div>
								<!--[if mso]>
								</td>
								<td align="left" valign="top" width="<?php echo $design['body_width']/2; ?>">
								<![endif]-->
								<div style="display:inline-block; max-width: <?php echo $design['body_width']/2; ?>px; vertical-align:top; width:100%;">
									<table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: <?php echo $design['body_width']/2; ?>px;">
										<tr>
											<td align="center" valign="top">

												<?php /* <!-- // REPLACE WITH BLOCK --> */ ?>
												<?php /*
												<div class="standard-text">
													<?php if ( $_GET['showcontenttype'] ) { ?><p class="content-type"><?php echo $data['article']['content_type']; ?></p><?php } ?>
													<h2 class="title"><a href="<?php echo ( $_GET['showbbgdirect'] ? $data['article']['bbg_direct_url'] : $data['article']['url'] ); ?>"><?php echo $data['article']['title']; ?></a></h2>
													<?php show_bylines_pubdates(); ?>
													<p class="intro"><?php echo $data['article']['intro']; ?></p>
													<?php if ( $_GET['showbbgdirect'] ) { ?>
													<div><a href="<?php echo $data['article']['bbg_direct_url']; ?>" class="bbg-direct"><img src="<?php echo $design['img']['download']; ?>" width="14" height="14" border="0" alt="" /><?php echo $loc['bbg_direct_button']; ?></a></div>
													<?php } ?>
												</div>
												*/ ?>
												
												<style type="text/css">
													
													table.item-text {
														border: 0;
														margin: 0;
														width: 100%;
														-premailer-cellpadding: 15;
														-premailer-cellspacing: 0;
														-premailer-width: 100%;
													}
													
													table.item-text > tr > td {
														background-color: $offwhite;
														margin: 0;
														width: 100%;
														-premailer-width: 100%;
													}
													
													table.tb-content-type {
														-premailer-cellpadding: 8;
														-premailer-cellspacing: 0;
													}
													
													td.text-content-type {
														background-color: #e9e9e9;
														color: #666666;
														font-family: sans-serif;
														font-size: 12px;
														letter-spacing: .015em;
														line-height: 1;
														text-transform: uppercase;
													}
													
													td.text-content-type-spacer {
														-premailer-width: 50%;
													}
													
													.item-text h2 {
														color: #1330bf;
														font-size: 19px;
														margin: 0 !important; 
														padding: 0 0 6px 0;
													}

													.item-text h2 > a {
														color: #1330bf;
														font-size: 19px;
														margin: 0 !important; 
														padding: 0 !important;
														text-decoration: none;
													}
													
												</style>
												
												<table class="item-text" border="0">
													<tr>
														<td>
															<?php if ( $_GET['showcontenttype'] ) { ?><table class="tb-content-type" border="0"><tr><td class="text-content-type"><?php echo $data['article']['content_type']; ?></td></tr></table><table border="0" cellpadding="0" cellspacing="0"><tr><td height="12">&nbsp;</td></tr></table><?php } ?>
															<h2 class="title"><a href="<?php echo ( $_GET['showbbgdirect'] ? $data['article']['bbg_direct_url'] : $data['article']['url'] ); ?>"><?php echo $data['article']['title']; ?></a></h2>
															<?php show_bylines_pubdates(); ?>
															<p class="intro"><?php echo $data['article']['intro']; ?></p>
															<?php if ( $_GET['showbbgdirect'] ) { ?>
															<div><a href="<?php echo $data['article']['bbg_direct_url']; ?>" class="bbg-direct"><img src="<?php echo $design['img']['download']; ?>" width="14" height="14" border="0" alt="" /><?php echo $loc['bbg_direct_button']; ?></a></div>
															<?php } ?>
														</td>
													</tr>
												</table>
												
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
