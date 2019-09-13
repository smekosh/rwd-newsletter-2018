
<?php export_divider('header', 'start'); ?>

			<?php if ( $_GET['showdescription'] || $_GET['showviewweblink'] ) { ?>
			
			<?php /* <!-- // 1-COLUMN SCAFFOLD --> */ ?>
			<tr>
				<td align="center" height="100%" valign="top" width="100%">
					<!--[if mso]>
					<table align="center" border="0" cellspacing="0" cellpadding="0" width="<?php echo $design['body_width']; ?>">
					<tr>
					<td align="center" valign="top" width="<?php echo $design['body_width']; ?>">
					<![endif]-->
					<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: <?php echo $design['body_width']; ?>px; margin-bottom: 0; margin-top: 0;">
						
						<tr>
							<td align="center" valign="top" bgcolor="<?php echo $design['page_bg']; ?>" class="header">

								<?php /* <!-- // REPLACE WITH BLOCK --> */ ?>
								<table align="center" border="0" cellpadding="8" cellspacing="0" width="100%">
									<tr>
										<td width="45%" align="left">
											<?php if ( $_GET['showdescription'] ) { ?>
											<p class="link2web"><?php echo $data['system']['topic_description']; ?></p>
											<?php } ?>
										</td>
										<td width="10%">&nbsp;</td>
										<td width="45%" align="right">
											<?php if ( $_GET['showviewweblink'] ) { ?>
											<p class="link2web"><a href="[-ViewInBrowser-]"><?php echo $loc['view_this_in_your_browser']; ?></a></p>
											<?php } ?>
										</td>
									</tr>
								</table>
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
			
			<?php } // end if showdescription or showviewweblink ?>
			
			
			
			<?php /* <!-- // 1-COLUMN SCAFFOLD --> */ ?>
			<tr>
				<td align="center" height="100%" valign="top" width="100%">
					<!--[if mso]>
					<table align="center" border="0" cellspacing="0" cellpadding="0" width="<?php echo $design['body_width']; ?>">
					<tr>
					<td align="center" valign="top" width="<?php echo $design['body_width']; ?>">
					<![endif]-->
					<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
						
						<tr>
							<td align="center" valign="top" bgcolor="<?php echo $design['voa_blue']; ?>" class="header">

								<?php /* <!-- // REPLACE WITH BLOCK --> */ ?>
								<table align="center" border="0" class="plain logo">
									<tr>
										<td height="30" align="center"><a href="<?php echo $data['system']['base_url'].'?'.$tracking; ?>"><img src="<?php echo $design['img']['voa']; ?>" width="71" height="30" border="0" alt="<?php echo $loc['voa_logo_alt']; ?>" /></a></td>
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
			
			<?php /* <!-- // 1-COLUMN SCAFFOLD --> */ ?>
			<tr>
				<td align="center" height="100%" valign="top" width="100%">
					<!--[if mso]>
					<table align="center" border="0" cellspacing="0" cellpadding="0" width="<?php echo $design['body_width']; ?>">
					<tr>
					<td align="center" valign="top" width="<?php echo $design['body_width']; ?>">
					<![endif]-->
					<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
						
						<tr>
							<td align="center" valign="top" bgcolor="<?php echo $design['page_bg']; ?>">

								<?php /* <!-- // REPLACE WITH BLOCK --> */ ?>
								
								<table border="0" class="plain <?php echo $_GET['layout']; ?>-title">
									<tr>
										<td width="16">&nbsp;</td>
										<td class="newsletter-title"><?php echo $data['system']['topic_title']; ?></td>
										<td width="16">&nbsp;</td>
									</tr>
								</table>
								
								<?php table_spacer(8); ?>
								
								<table border="0" class="plain">
									<tr>
										<td width="16">&nbsp;</td>
										<td class="newsletter-date">&mdash; <a href="[-ViewInBrowser-]"><?php echo $data['system']['send_date']; ?></a> &mdash;</td>
										<td width="16">&nbsp;</td>
									</tr>
								</table>
								
								<?php table_spacer(8); ?>
								
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

<?php export_divider('header', 'end'); ?>
