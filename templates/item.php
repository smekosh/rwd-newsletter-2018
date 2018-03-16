
<?php export_divider('item', 'start'); ?>

			<?php /* <!-- // 2-COLUMN SCAFFOLD [CENTERING] --> */ ?>
			<tr>
				<td align="center" height="100%" valign="top" width="100%">
					<!--[if mso]>
					<table align="center" border="0" cellspacing="0" cellpadding="0" width="<?php echo $design['body_width']; ?>">
					<tr>
					<td align="center" valign="top" width="<?php echo $design['body_width']; ?>">
					<![endif]-->
					<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: <?php echo $design['body_width']; ?>px;">
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
											<td align="center" valign="top" class="r-img">

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
												
												<table class="item-text" border="0">
													<tr>
														<td>
															<?php if ( $_GET['showcontenttype'] ) { ?>
																<table border="0" class="tb-content-type"><tr><td class="text-content-type"><?php echo $data['article']['content_type']; ?></td></tr></table>
																<?php table_spacer(8); ?>
															<?php } ?>
															<table border="0" class="plain"><tr><td class="article-title"><a href="<?php echo ( $_GET['showbbgdirect'] ? $data['article']['bbg_direct_url'] : $data['article']['url'] ); ?>"><?php echo $data['article']['title']; ?></a></td></tr></table>
															<?php table_spacer(8); ?>
															<?php show_bylines_pubdates(); ?>
															<table border="0" class="plain"><tr><td class="intro"><?php echo $data['article']['intro']; ?></td></tr></table>
															<?php if ( $_GET['showbbgdirect'] ) { ?>
															<?php table_spacer(16); ?>
															<table border="0" class="bbg-direct-container">
																<tr>
																	<td>
																		<table border="0" class="plain">
																			<tr>
																				<td class="bbg-direct-img"><a href="<?php echo $data['article']['bbg_direct_url']; ?>"><img src="<?php echo $design['img']['download']; ?>" width="14" height="14" border="0" alt="" /></a></td>
																				<td width="8" style="font-size: 0;">&nbsp;</td>
																				<td class="bbg-direct-text"><a href="<?php echo $data['article']['bbg_direct_url']; ?>"><?php echo $loc['bbg_direct_button']; ?></a></td>
																			</tr>
																		</table>
																	</td>
															</table>
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
					<?php table_spacer(30); ?>
					<!--[if mso]>
					</td>
					</tr>
					</table>
					<![endif]-->
				</td>
			</tr>
			<?php /* <!-- 2-COLUMN SCAFFOLD [CENTERING] // --> */ ?>

<?php export_divider('item', 'end'); ?>
