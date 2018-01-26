
				<?php /* <!-- // 1-COLUMN SCAFFOLD --> */ ?>
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
									
									<?php /* <!-- // REPLACE WITH BLOCK --> */ ?>
									<div class="featured-image rwd-img"><a href="<?php echo $data['article']['url']; ?>"><img border="0" src="<?php echo $data['article']['image_first_item']; ?>" /></a></div>
									
									<div class="featured-text">
										<h2 class="title"><a href="<?php echo $data['article']['url']; ?>"><?php echo $data['article']['title']; ?></a></h2>
										<?php show_bylines_pubdates(); ?>
										<p class="intro"><?php echo $data['article']['intro']; ?></p>
										<div><a href="<?php echo $data['article']['url']; ?>" class="continue"><?php echo $loc['continue_btn_featured']; ?></a></div>
									</div>
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
