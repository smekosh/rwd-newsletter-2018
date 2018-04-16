
<?php export_divider('first item', 'start'); ?>

				<?php /* <!-- // 1-COLUMN SCAFFOLD --> */ ?>
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
									
									<?php /* <!-- // REPLACE WITH BLOCK --> */ ?>
									<div class="featured-image rwd-img"><a href="<?php echo ( $_GET['layout'] == 'direct' ? $data['article']['bbg_direct_url'] : $data['article']['url'] ).'&'.$tracking; ?>"><img border="0" src="<?php echo $data['article']['image_first_item']; ?>" /></a></div>
									
									<table class="featured-text" border="0">
										<tr>
											<td>
												<?php if ( $_GET['showcontenttype'] ) { ?>
													<table border="0" class="tb-content-type"><tr><td class="text-content-type"><?php echo $data['article']['content_type']; ?></td></tr></table>
													<?php table_spacer(8); ?>
												<?php } ?>
												<table border="0" class="plain"><tr><td class="article-title"><a href="<?php echo ( $_GET['layout'] == 'direct' ? $data['article']['bbg_direct_url'] : $data['article']['url'] ).'&'.$tracking; ?>"><?php echo $data['article']['title']; ?></a></td></tr></table>
												<?php table_spacer(8); ?>
												<?php show_bylines_pubdates(); ?>
												<table border="0" class="plain"><tr><td class="intro"><?php echo $data['article']['intro']; ?></td></tr></table>
												<?php table_spacer(16); ?>
												<?php if ( $_GET['layout'] == 'direct' ) { ?>
												<table border="0" class="bbg-direct-container">
													<tr>
														<td>
															<table border="0" class="plain">
																<tr>
																	<td class="bbg-direct-img"><a href="<?php echo $data['article']['bbg_direct_url'].'&'.$tracking; ?>"><img src="<?php echo $design['img']['download']; ?>" width="14" height="14" border="0" alt="" /></a></td>
																	<td width="8" style="font-size: 0;">&nbsp;</td>
																	<td class="bbg-direct-text"><a href="<?php echo $data['article']['bbg_direct_url'].'&'.$tracking; ?>"><?php echo $loc['bbg_direct_button']; ?></a></td>
																</tr>
															</table>
														</td>
												</table>
												<?php } else { ?>
												
												<!--[if mso]>
												<v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="<?php echo $data['article']['url'].'&'.$tracking; ?>" style="height:35px;v-text-anchor:middle;width:150px;" arcsize="5%" strokecolor="#<?php echo $design['voa_blue']; ?>" fillcolor="#<?php echo $design['content_bg']; ?>">
													<w:anchorlock/>
													<center style="color:#<?php echo $design['voa_blue']; ?>;font-family:Helvetica,Tahoma,Verdana,Arial,sans-serif;font-size:15px;"><?php echo $loc['continue_btn_featured']; ?></center>
												</v:roundrect>
												<![endif]-->
												<div><a href="<?php echo $data['article']['url'].'&'.$tracking; ?>" class="continue-btn"><?php echo $loc['continue_btn_featured']; ?></a></div>
												
												<?php } ?>
											</td>
										</tr>
									</table>
									<?php /* <!-- REPLACE WITH BLOCK // --> */ ?>

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
				<?php /* <!-- 1-COLUMN SCAFFOLD // --> */ ?>

<?php export_divider('first item', 'end'); ?>
