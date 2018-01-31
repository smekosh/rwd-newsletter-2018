
			<?php /* <!-- // 1-COLUMN SCAFFOLD --> */ ?>
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

								<?php /* <!-- // REPLACE WITH BLOCK --> */ ?>
								
								<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td valign="top" width="30%" style="max-width: 160px;">
											<div class="standard-text" style="padding-right: 0;">
												<div class="standard-image rwd-img"><a href=""><img border="0" src="<?php echo $data['article']['image_compact_item']; ?>" /></a></div>
											</div>
										</td>
										<td valign="top" width="70%">
											<div class="standard-text">
												<?php if ( $_GET['showcontenttype'] ) { ?><p class="content-type"><?php echo $data['article']['content_type']; ?></p><?php } ?>
												<h2 class="title"><a href="<?php echo $data['article']['url']; ?>"><?php echo $data['article']['title']; ?></a></h2>
												<?php show_bylines_pubdates(); ?>
												<p class="intro"><?php echo $data['article']['intro']; ?></p>
												<?php if ( $_GET['showbbgdirect'] ) { ?>
												<div><a href="<?php echo $data['article']['bbg_direct_url']; ?>" class="bbg-direct"><img src="img/fa-download_14x14_2x.png" width="14" height="14" border="0" alt="" /><?php echo $loc['bbg_direct_button']; ?></a></div>
												<?php } ?>
											</div>
										</td>
									</tr>
								</table>
								
								<?php /* <!-- REPLACE WITH BLOCK // -->	 */ ?>
								
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
