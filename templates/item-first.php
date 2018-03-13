
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
									<div class="featured-image rwd-img"><a href="<?php echo ( $_GET['showbbgdirect'] ? $data['article']['bbg_direct_url'] : $data['article']['url'] ); ?>"><img border="0" src="<?php echo $data['article']['image_first_item']; ?>" /></a></div>
									
									<table class="featured-text" border="0">
										<tr>
											<td>
												<?php if ( $_GET['showcontenttype'] ) { ?>
													<table border="0" class="tb-content-type"><tr><td class="text-content-type"><?php echo $data['article']['content_type']; ?></td></tr></table>
													<?php table_spacer(8); ?>
												<?php } ?>
												<table border="0" class="plain"><tr><td class="article-title"><a href="<?php echo ( $_GET['showbbgdirect'] ? $data['article']['bbg_direct_url'] : $data['article']['url'] ); ?>"><?php echo $data['article']['title']; ?></a></td></tr></table>
												<?php table_spacer(8); ?>
												<?php show_bylines_pubdates(); ?>
												<table border="0" class="plain">
													<tr>
														<td class="intro"><?php echo $data['article']['intro']; ?></td>
													</tr>
												</table>
												<?php table_spacer(16); ?>
												<?php if ( $_GET['showbbgdirect'] ) { ?>
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
												<?php } else { ?>
												
												<?php /*
												<!--[if mso]>
												<v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://litmus.com" style="height:36px;v-text-anchor:middle;width:150px;" arcsize="5%" strokecolor="#EB7035" fillcolor="#EB7035">
													<w:anchorlock/>
													<center style="color:#ffffff;font-family:Helvetica, Arial,sans-serif;font-size:16px;">I am a button &rarr;</center>
												</v:roundrect>
												<![endif]-->
												<a href="http://buttons.cm" style="background-color:#EB7035;border:1px solid #EB7035;border-radius:3px;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:16px;line-height:44px;text-align:center;text-decoration:none;width:150px;-webkit-text-size-adjust:none;mso-hide:all;">I am a button &rarr;</a>
												*/ ?>
												
												<table border="0" class="plain continue"><tr><td><a href="<?php echo $data['article']['url']; ?>"><?php echo $loc['continue_btn_featured']; ?></a></td></tr></table>
												<?php /* <div><a href="<?php echo $data['article']['url']; ?>" class="continue"><?php echo $loc['continue_btn_featured']; ?></a></div> */ ?>
												<?php } ?>
											</td>
										</tr>
									</table>
									
									
									
									<!--
									<div class="featured-text">
										<?php if ( $_GET['showcontenttype'] ) { ?><p class="content-type"><?php echo $data['article']['content_type']; ?></p><?php } ?>
										<h2 class="title"><a href="<?php echo ( $_GET['showbbgdirect'] ? $data['article']['bbg_direct_url'] : $data['article']['url'] ); ?>"><?php echo $data['article']['title']; ?></a></h2>
										<?php show_bylines_pubdates(); ?>
										<p class="intro"><?php echo $data['article']['intro']; ?></p>
										<?php if ( $_GET['showbbgdirect'] ) { ?>
											<div><a href="<?php echo $data['article']['bbg_direct_url']; ?>" class="bbg-direct"><img src="<?php echo $design['img']['download']; ?>" width="14" height="14" border="0" alt="" /><?php echo $loc['bbg_direct_button']; ?></a></div>
										<?php } else { ?>
											<div><a href="<?php echo $data['article']['url']; ?>" class="continue"><?php echo $loc['continue_btn_featured']; ?></a></div>
										<?php } ?>
									</div>
									-->
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
