<!DOCTYPE html>
	<html lang="cs">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="author" content="HTML by SuperKodéři (info@superkoderi.cz)" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" /> <!-- So that mobile webkit will display zoomed in -->
		<meta name="format-detection" content="telephone=no" /> <!-- disable auto telephone linking in iOS -->
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<title>
			Masarykova univerzita
		</title>

		<?php
			$color = '#0000DC';
		?>

		<!--[if !mso]><!-- -->
		<style>
			@-ms-viewport{width:device-width}
			@media screen and (max-device-width: 709px), screen and (max-width: 709px) {
				col,
				.sk-hide,
				.sk-block-table-all .sk-hide{display:none !important;}

				img{
					max-width: 100%;
					height: auto !important;
				}
				.sk-full{
					width: 100%;
				}

				.sk-block-table,
				.sk-block-table > tbody,
				.sk-block-table-all,
				.sk-block-table-all tbody,
				.sk-block-table-all table{
					width:100% !important;
					display:block !important;
				}
				.sk-block,
				.sk-block-table-all tr,
				.sk-block-table-all td{
					display:block !important;
					width:auto !important;
				}
				.sk-block{
					overflow: hidden;
				}
				.sk-header-mobile{
					display: block !important;
					max-height: none !important;
					max-width: none !important;
					opacity: 1 !important;
				}

				.sk-p0{padding: 0px !important;}
				.sk-pl0{padding-left: 0px !important;}
				.sk-pr0{padding-right: 0px !important;}
				.sk-pt0{padding-top: 0px !important;}
				.sk-pb0{padding-bottom: 0px !important;}

				.sk-p10{padding: 10px !important;}
				.sk-pl10{padding-left: 10px !important;}
				.sk-pr10{padding-right: 10px !important;}
				.sk-pt10{padding-top: 10px !important;}
				.sk-pb10{padding-bottom: 10px !important;}

				.sk-p20{padding: 20px !important;}
				.sk-pl20{padding-left: 20px !important;}
				.sk-pr20{padding-right: 20px !important;}
				.sk-pt20{padding-top: 20px !important;}
				.sk-pb20{padding-bottom: 20px !important;}

				.sk-p30{padding: 30px !important;}
				.sk-pl30{padding-left: 30px !important;}
				.sk-pr30{padding-right: 30px !important;}
				.sk-pt30{padding-top: 30px !important;}
				.sk-pb30{padding-bottom: 30px !important;}

				.sk-p40{padding: 40px !important;}
				.sk-pl40{padding-left: 40px !important;}
				.sk-pr40{padding-right: 40px !important;}
				.sk-pt40{padding-top: 40px !important;}
				.sk-pb40{padding-bottom: 40px !important;}

				.sk-tac{text-align: center !important;}
				.sk-tal{text-align: left !important;}
				.sk-tar{text-align: right !important;}

				.sk-bd0{border-width: 0px !important;}
				.sk-bdl0{border-left-width: 0px !important;}
				.sk-bdr0{border-right-width: 0px !important;}
				.sk-bdt0{border-top-width: 0px !important;}
				.sk-bdb0{border-bottom-width: 0px !important;}

				.sk-bd1{border: 1px solid #ddd !important;}
				.sk-bdl1{border-left: 1px solid #ddd !important;}
				.sk-bdr1{border-right: 1px solid #ddd !important;}
				.sk-bdt1{border-top: 1px solid #ddd !important;}
				.sk-bdb1{border-bottom: 1px solid #ddd !important;}

				.sk-bdt3{border-top: 3px solid <?php echo $color; ?> !important;}

				.sk-m0{margin: 0px !important;}
				.sk-ml0{margin-left: 0px !important;}
				.sk-mr0{margin-right: 0px !important;}
				.sk-mt0{margin-top: 0px !important;}
				.sk-mb0{margin-bottom: 0px !important;}

				.sk-m10{margin: 10px !important;}
				.sk-ml10{margin-left: 10px !important;}
				.sk-mr10{margin-right: 10px !important;}
				.sk-mt10{margin-top: 10px !important;}
				.sk-mb10{margin-bottom: 10px !important;}

				.sk-m20{margin: 20px !important;}
				.sk-ml20{margin-left: 20px !important;}
				.sk-mr20{margin-right: 20px !important;}
				.sk-mt20{margin-top: 20px !important;}
				.sk-mb20{margin-bottom: 20px !important;}

				.sk-m30{margin: 30px !important;}
				.sk-ml30{margin-left: 30px !important;}
				.sk-mr30{margin-right: 30px !important;}
				.sk-mt30{margin-top: 30px !important;}
				.sk-mb30{margin-bottom: 30px !important;}

				.sk-h2{
					font-size: 24px !important;
					line-height: 32px !important;
				}

				.sk-logo{
					width: 46px;
				}
				.sk-logo a{
					width: 46px;
					height: 115px;
					display: block;
					background: url('./img/logo-muni-mobile<?php if ($_GET['color']) { echo '-'; echo $_GET['color']; } ?>.png') 0 0 no-repeat;
					background-size: 46px 115px;
				}
				.sk-h1{
					width: 172px;
					height: 52px;
					background: url('./img/h1-mobile<?php if ($_GET['color']) { echo '-'; echo $_GET['color']; } ?>.png') 0 0 no-repeat;
					background-size: 172px 52px;
				}

				.sk-gallery{
					overflow: hidden;
					width: auto !important;
					margin: 0 0 15px -5px !important;
				}
				.sk-gallery tr{
					display: block;
				}
				.sk-gallery td{
					float: left;
					display: block;
					width: 50% !important;
					box-sizing: border-box;
					padding: 0 0 5px 5px !important;
				}
				.sk-gallery .sk-hide{
					display: none;
				}
				.sk-calendar .sk-calendar__row{
					overflow: hidden;
					display: block;
					margin: 0 0 10px;
				}
				.sk-calendar .sk-calendar__td{
					display: block;
					padding: 0 !important;
				}
				.sk-calendar .sk-calendar__date{
					float: left;
					margin: 0 20px 0 0;
				}
                body { margin:0 !important; }
				div[style*="margin: 16px 0"] { margin:0 !important; font-size:100% !important; }
			}
		</style>
		<!--<![endif]-->
	</head>
	<body style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; background:#ffffff; color:#000000; line-height:1.4285; width:100%; text-align:center; -webkit-font-smoothing:antialiased; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;">

		<div style="display:none;font-size:1px;color:#333333;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;">
			Krátky popis newsletteru, který se zobrazí za předmětem
		</div> <!-- / pre-header -->

		<table class="sk-block-table" width="100%" border="0" cellpadding="0" cellspacing="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: center; background: #FAFAFA; border-top: 6px solid <?php echo $color; ?>;">
			<tr class="sk-block">
				<td class="sk-block" align="center">

					<table class="sk-block-table" width="700" border="0" cellspacing="0" cellpadding="0" style="margin:0 auto; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:700px; text-align: left;">
						<tr class="sk-block">
							<td class="sk-block">
								<table class="sk-block-table" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:12px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<!-- v 1 -->
									<tr class="sk-block">
										<td class="sk-block sk-pl20 sk-pr20 sk-pb0" style="vertical-align: top; padding: 15px 0 50px;">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:12px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr>
													<td style="width: 120px;">
														<p style="margin: 0; line-height: 1;">
															<a href="#" style="text-decoration: none;">
																<img src="./img/logo-muni-simple.png" alt="Masarykova univerzita" width="100" height="29" style="vertical-align: top; border: none;">
															</a>
														</p>
													</td>
													<td style="color: #0000DC; padding: 0;">
														<p style="margin: 0; font-size: 15px; line-height: 17px;">
															Masarykova<br> univerzita
														</p>
													</td>
												</tr>
											</table>
										</td>
										<td class="sk-block sk-pl20 sk-pr20 sk-pb20 sk-tal" style="vertical-align: top; text-align: right; color: #0000DC; padding: 15px 0 50px 20px;">
											<p style="margin: 0; line-height: 18px;">
												<span class="sk-hide">
													<a href="#" style="color: #0000DC;">Webová verze</a> &nbsp;|&nbsp;
													<a href="#" style="color: #0000DC;">online.muni.cz</a> &nbsp;|&nbsp;
												</span>
												Newsletter 02/2019 &nbsp;|&nbsp;
												<span class="sk-hide">Odesláno</span> 17. 2. 2019<span class="sk-hide">, 8:36</span>
											</p>
										</td>
									</tr>
									<!-- v 2 -->
									<tr class="sk-block">
										<td class="sk-block sk-pl20 sk-pr20 sk-pb0" style="vertical-align: top; padding: 15px 0 50px;">
											<p style="margin: 0; line-height: 1;">
												<a href="#" style="text-decoration: none;">
													<img src="./img/logo-muni.png" alt="Masarykova univerzita" width="205" height="29" style="vertical-align: top; border: none;">
												</a>
											</p>
										</td>
										<td class="sk-block sk-pl20 sk-pr20 sk-pb20 sk-tal" style="vertical-align: top; text-align: right; color: #0000DC; padding: 15px 0 50px 20px;">
											<p style="margin: 0; line-height: 18px;">
												<span class="sk-hide">
													<a href="#" style="color: #0000DC;">Webová verze</a> &nbsp;|&nbsp;
													<a href="#" style="color: #0000DC;">online.muni.cz</a> &nbsp;|&nbsp;
												</span>
												Newsletter 02/2019 &nbsp;|&nbsp;
												<span class="sk-hide">Odesláno</span> 17. 2. 2019<span class="sk-hide">, 8:36</span>
											</p>
										</td>
									</tr>
									<!-- v 3 -->
									<tr class="sk-block">
										<td class="sk-block sk-pl20 sk-pr20 sk-pb0" style="vertical-align: top; padding: 15px 0 50px;">
											<p style="margin: 0; line-height: 1;">
												<a href="#" style="text-decoration: none;">
													<img src="./img/logo-muni-sci.png" alt="MUNI – SCI" width="310" height="72" style="vertical-align: top; border: none;">
												</a>
											</p>
										</td>
										<td class="sk-block sk-pl20 sk-pr20 sk-pb20 sk-tal" style="vertical-align: top; text-align: right; color: #0000DC; padding: 15px 0 50px 20px;">
											<p style="margin: 0; line-height: 18px;">
												<span class="sk-hide">
													<a href="#" style="color: #0000DC;">Webová verze</a> &nbsp;|&nbsp;
													<a href="#" style="color: #0000DC;">online.muni.cz</a> &nbsp;|&nbsp;
												</span>
												Newsletter 02/2019 &nbsp;|&nbsp;
												<span class="sk-hide">Odesláno</span> 17. 2. 2019<span class="sk-hide">, 8:36</span>
											</p>
										</td>
									</tr>
									<tr class="sk-block">
										<td class="sk-block sk-pl20 sk-pr20 sk-pb30" colspan="2" style="border-bottom: 2px solid #eeeeee; padding: 0 0 40px;">
											<h1 style="font-size: 30px; line-height: 34px; font-weight: bold; color: #000; margin: 0;">
												Newsletter pro zaměstnance
											</h1>
										</td>
									</tr>
								</table> <!-- / header -->

								<table class="sk-block-table-all" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr>
										<td class="sk-pb40 sk-pt40" style="padding: 60px 0;">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr>
													<td style="vertical-align: top;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
															<tr>
																<td class="sk-pl20 sk-pr20 sk-pt20" style="color: #000; padding: 25px 30px 10px; border: 2px solid #eeeeee; background: #fff;">
																	<h2 class="sk-h2" style="font-size: 30px; line-height: 34px; margin: 0 0 25px;">
																		<a href="#" style="text-decoration: none; color: <?php echo $color; ?>;">
																			Barevné varianty
																		</a>
																	</h2>
																	<p style="line-height: 24px; margin: 0;">
																		&bull; <a href="./newsletter.php" style="color: <?php echo $color; ?>;">Defaultní barva (MUNI)</a>
																	</p>
																	<p style="line-height: 24px; margin: 0;">
																		&bull; <a href="./newsletter.php?color=law" style="color: <?php echo $color; ?>;">LAW</a>
																	</p>
																	<p style="line-height: 24px; margin: 0;">
																		&bull; <a href="./newsletter.php?color=med" style="color: <?php echo $color; ?>;">MED</a>
																	</p>
																	<p style="line-height: 24px; margin: 0;">
																		&bull; <a href="./newsletter.php?color=sci" style="color: <?php echo $color; ?>;">SCI</a>
																	</p>
																	<p style="line-height: 24px; margin: 0;">
																		&bull; <a href="./newsletter.php?color=fi" style="color: <?php echo $color; ?>;">FI</a>
																	</p>
																	<p style="line-height: 24px; margin: 0;">
																		&bull; <a href="./newsletter.php?color=fss" style="color: <?php echo $color; ?>;">FSS</a>
																	</p>
																	<p style="line-height: 24px; margin: 0;">
																		&bull; <a href="./newsletter.php?color=fsps" style="color: <?php echo $color; ?>;">FSPS</a>
																	</p>
																	<p style="line-height: 24px; margin: 0;">
																		&bull; <a href="./newsletter.php?color=phil" style="color: <?php echo $color; ?>;">PHIL</a>
																	</p>
																	<p style="line-height: 24px; margin: 0;">
																		&bull; <a href="./newsletter.php?color=ped" style="color: <?php echo $color; ?>;">PED</a>
																	</p>
																	<p style="line-height: 24px; margin: 0 0 20px;">
																		&bull; <a href="./newsletter.php?color=econ" style="color: <?php echo $color; ?>;">ECON</a>
																	</p>
																</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table> <!-- / box white - type 1 -->
							</td>
						</tr>
					</table> <!-- / row main -->

					<img src="./img/spacer.png" width="700" height="1" class="sk-hide" style="border: none; vertical-align: top; min-width: 700px; display: block;">
				</td>
			</tr>
		</table><!-- / wrap -->

		<table class="sk-block-table" width="100%" border="0" cellpadding="0" cellspacing="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: center; background: #fff;">
			<tr class="sk-block">
				<td class="sk-block" align="center">

					<table class="sk-block-table" width="700" border="0" cellspacing="0" cellpadding="0" style="margin:0 auto; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:700px; text-align: left;">
						<tr class="sk-block">
							<td class="sk-block">

								<table class="sk-block-table" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: center;">
									<tr class="sk-block">
										<td class="sk-block" style="padding: 0 0 60px;">
											<table class="sk-block-table-all" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left; border-bottom: 1px solid #eee;">
												<tr>
													<td class="sk-pl20 sk-pr20 sk-pb0 sk-tac" style="padding: 40px 0 20px; color: #000;">
														<p class="sk-h2" style="font-size: 30px; line-height: 34px; margin: 0 0 20px; font-weight: bold;">
															Od roku 1919 vytváříme<br> podmínky pro chytřejší svět
														</p>
													</td>
													<td class="sk-pl20 sk-pr20 sk-pt0 sk-tac" style="padding: 40px 0 20px; text-align: right;">
														<p style="line-height: 22px; margin: 0 0 20px;">
															<a href="#">
																<img src="./img/logo-muni-simple.png" alt="MUNI" width="150" height="43" style="vertical-align: middle; border: none;">
															</a>
														</p>
													</td>
												</tr>
											</table> <!-- / claim -->

											<table class="sk-block-table-all" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: center; border-bottom: 1px solid #eeeeee;">
												<tr>
													<td class="sk-pl20 sk-pr20" align="center" style="padding: 40px 0 20px;">
														<table width="500" border="0" cellspacing="0" cellpadding="0" style="margin:0 auto; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width: 500px; text-align: left;">
															<tr>
																<td class="sk-pb10" style="vertical-align: top; width: 160px;">
																	<p style="text-transform: uppercase; font-size: 18px; line-height: 24px; margin: 0 0 10px; color: #000; font-weight: bold;">
																		Aktuálně
																	</p>
																	<p style="line-height: 24px; margin: 0 0 20px;">
																		<a href="#" style="color: #0000DC;">Kalendář akcí</a><br>
																		<a href="#" style="color: #0000DC;">Články</a><br>
																		<a href="#" style="color: #0000DC;">Pro média</a><br>
																		<a href="#" style="color: #0000DC;">Harmonogram</a>
																	</p>
																</td>
																<td class="sk-hide" style="width: 20px;">&nbsp;</td>
																<td class="sk-pb10" style="vertical-align: top; width: 160px;">
																	<p style="text-transform: uppercase; font-size: 18px; line-height: 24px; margin: 0 0 10px; color: #000; font-weight: bold;">
																		Uchazeč
																	</p>
																	<p style="line-height: 24px; margin: 0 0 20px;">
																		<a href="#" style="color: #0000DC;">Kalendář akcí</a><br>
																		<a href="#" style="color: #0000DC;">Články</a><br>
																		<a href="#" style="color: #0000DC;">Pro média</a><br>
																		<a href="#" style="color: #0000DC;">Harmonogram</a>
																	</p>
																</td>
																<td class="sk-hide" style="width: 20px;">&nbsp;</td>
																<td style="vertical-align: top; width: 160px;">
																	<p style="text-transform: uppercase; font-size: 18px; line-height: 24px; margin: 0 0 10px; color: #000; font-weight: bold;">
																		Výzkum
																	</p>
																	<p style="line-height: 24px; margin: 0 0 20px;">
																		<a href="#" style="color: #0000DC;">Kalendář akcí</a><br>
																		<a href="#" style="color: #0000DC;">Články</a><br>
																		<a href="#" style="color: #0000DC;">Pro média</a><br>
																		<a href="#" style="color: #0000DC;">Harmonogram</a>
																	</p>
																</td>
															</tr>
														</table>
													</td>
												</tr>
											</table> <!-- / box category -->
											
											<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: center; border-bottom: 1px solid #eeeeee;">
												<tr>
													<td align="center" style="padding: 40px 0;">
														<table border="0" cellspacing="0" cellpadding="0" style="margin:0 auto; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; text-align: center;">
															<tr>
																<td class="sk-pl10 sk-pr10" style="padding: 0 15px;">
																	<a href="mailto:newsletter@muni.cz" style="color: #0000DC; text-decoration: none;">
																		<img src="./img/ico-email.png" alt="E-mail" width="15" height="13" style="vertical-align: middle; border: none;">&nbsp;
																		<span style="text-decoration: underline;">newsletter@muni.cz</span>
																	</a>
																</td>
																<td class="sk-pl10 sk-pr10" style="padding: 0 15px;">
																	<a href="mailto:newsletter@muni.cz" style="color: #0000DC; text-decoration: none;">
																		<img src="./img/ico-book.png" alt="Web" width="14" height="14" style="vertical-align: middle; border: none;">&nbsp;
																		<span style="text-decoration: underline;">online.muni.cz</span>
																	</a>
																</td>
															</tr>
														</table>
													</td>
												</tr>
											</table> <!-- / box links -->
											
											<table class="sk-block-table-all" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr>
													<td class="sk-pl20 sk-pr20 sk-pb0 sk-tac" style="padding: 40px 0 20px; color: #000;">
														<p style="line-height: 22px; margin: 0 0 20px;">
															© 2016 Masarykova univerzita.<br>
															 Všechna práva vyhrazena.
														</p>
													</td>
													<td class="sk-pl20 sk-pr20 sk-pt0 sk-tac" style="padding: 40px 0 20px; text-align: right;">
														<p style="line-height: 22px; margin: 0 0 20px;">
															<a href="#" style="text-decoration: none;">
																<img src="./img/ico-facebook.png" alt="Facebook" width="22" height="22" style="border: none; vertical-align: top;">
															</a>
															&nbsp;&nbsp;&nbsp;
															<a href="#" style="text-decoration: none;">
																<img src="./img/ico-twitter.png" alt="Twitter" width="22" height="22" style="border: none; vertical-align: top;">
															</a>
															&nbsp;&nbsp;&nbsp;
															<a href="#" style="text-decoration: none;">
																<img src="./img/ico-instagram.png" alt="Instagram" width="22" height="22" style="border: none; vertical-align: top;">
															</a>
														</p>
													</td>
												</tr>
											</table> <!-- / copyrights -->
										</td>
									</tr>
								</table>

							</td>
						</tr>
					</table> <!-- / row main -->

					<img src="./img/spacer.png" width="700" height="1" class="sk-hide" style="border: none; vertical-align: top; min-width: 700px; display: block;">
				</td>
			</tr>
		</table><!-- / footer -->

	</body>
</html>
