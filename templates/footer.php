
			<?php /* <!-- // 1-COLUMN SCAFFOLD --> */ ?>
			<tr>
				<td align="center" height="100%" valign="middle" width="100%">
					<!--[if mso]>
					<table align="center" border="0" cellspacing="0" cellpadding="0" width="<?php echo $_GET['bodywidth']; ?>">
					<tr>
					<td align="center" valign="middle" width="<?php echo $_GET['bodywidth']; ?>">
					<![endif]-->
					<table align="center" border="0" cellpadding="15" cellspacing="0" width="100%" style="margin-bottom: 30px;">
						
						<tr>
							<td align="center" valign="middle" bgcolor="e9e9e9" class="social">

								<?php /* <!-- // REPLACE WITH BLOCK --> */ ?>
								<p class="social-cta">Engage with VOA</p>
								<div class="social-icons"><?php
									foreach ( $social as $sk => $sv ) {
										if ( trim( $sv['url'] )) {
											echo '<a href="'.trim( $sv['url'] ).'"><img src="img/fa-'.$sk.'_44x44.png" height="44" width="44" border="0" alt="'.$sv['text'].'" /></a>';
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
					<table align="center" border="0" cellspacing="0" cellpadding="0" width="<?php echo $_GET['bodywidth']; ?>">
					<tr>
					<td align="center" valign="top" width="<?php echo $_GET['bodywidth']; ?>">
					<![endif]-->
					<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-bottom: 30px;">
						
						<tr>
							<td align="center" valign="top" bgcolor="<?php echo $_GET['pagebg']; ?>" class="footer">

								<?php /* <!-- // REPLACE WITH BLOCK --> */ ?>
								
								<p class="subscribe"><a href=""><?php echo $loc['subscribe_text']; ?></p>
								<p class="unsubscribe"><a href=""><?php echo $loc['unsubscribe_text']; ?></a></p>
								
								<p class="contact-address"><strong>Voice of America</strong><br />330 Independence Avenue, SW<br />Washington, DC 20237</p>
								<p class="contact-email"><a href="mailto:">voanews@voanews.com</a></p>
								
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
