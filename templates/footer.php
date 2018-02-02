
			<?php /* <!-- // 1-COLUMN SCAFFOLD --> */ ?>
			<tr>
				<td align="center" height="100%" valign="middle" width="100%">
					<!--[if mso]>
					<table align="center" border="0" cellspacing="0" cellpadding="0" width="<?php echo $design['body_width']; ?>">
					<tr>
					<td align="center" valign="middle" width="<?php echo $design['body_width']; ?>">
					<![endif]-->
					<table align="center" border="0" cellpadding="15" cellspacing="0" width="100%" style="margin-bottom: 30px;">
						
						<tr>
							<td align="center" valign="middle" bgcolor="e9e9e9" class="social">

								<?php /* <!-- // REPLACE WITH BLOCK --> */ ?>
								<p class="social-cta"><?php echo $loc['social_media_cta']; ?></p>
								<div class="social-icons"><?php
									foreach ( $social as $sk => $sv ) {
										if ( trim( $sv['url'] )) {
											echo '<a href="'.trim( $sv['url'] ).'"><img src="'.$design['img'][$sk].'" height="44" width="44" border="0" alt="'.$sv['text'].'" /></a>';
										}
									}
								?></div>
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
			
			
			<?php /* <!-- // 1-COLUMN SCAFFOLD --> */ ?>
			<tr>
				<td align="center" height="100%" valign="top" width="100%">
					<!--[if mso]>
					<table align="center" border="0" cellspacing="0" cellpadding="0" width="<?php echo $design['body_width']; ?>">
					<tr>
					<td align="center" valign="top" width="<?php echo $design['body_width']; ?>">
					<![endif]-->
					<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-bottom: 30px;">
						
						<tr>
							<td align="center" valign="top" bgcolor="<?php echo $design['page_bg']; ?>" class="footer">

								<?php /* <!-- // REPLACE WITH BLOCK --> */ ?>
								
								<p class="subscribe"><a href="http://voa.goolara.net/subscribe.aspx?t=<?php echo $_GET['g_topic_id']; ?>"><?php echo $loc['subscribe_text']; ?></p>
								<p class="unsubscribe"><a href="[-TopicUnsubscribeUrl-]"><?php echo $loc['unsubscribe_text']; ?></a></p>
								
								<p class="contact-address"><strong>Voice of America</strong><br />330 Independence Avenue, SW<br />Washington, DC 20237</p>
								<p class="contact-email"><a href="mailto:<?php echo $loc['voa_contact_email']; ?>"><?php echo $loc['voa_contact_email']; ?></a></p>
								
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
