
<?php export_divider('zone', 'start'); ?>

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
								<td align="center" valign="top" class="zone-container">
									
									<?php /* <!-- // REPLACE WITH BLOCK --> */ ?>
									<table class="plain zone" border="0">
										<tr>
											<td align="left">
												<?php table_spacer(16); ?>
												<table border="0" class="plain">
													<tr>
														<td class="zone-left">&nbsp;</td>
														<td class="zone-space">&nbsp;</td>
														<td class="zone-title"><?php table_spacer(6); ?><?php echo $data['zone']['name']; ?><?php table_spacer(6); ?></td>
													</tr>
												</table>
												<?php table_spacer(24); ?>
												
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

<?php export_divider('zone', 'end'); ?>
