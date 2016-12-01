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
			if ($_GET['color']) {
				if ($_GET['color'] == 'law'){
					$color = '#7f379b';
					$colorBackground = '#f2ebf5';
				}
				if ($_GET['color'] == 'med'){
					$color = '#f01928';
					$colorBackground = '#fde9ea';
				}
				if ($_GET['color'] == 'sci'){
					$color = '#01af40';
					$colorBackground = '#e7f7ec';
				}
				if ($_GET['color'] == 'fi'){
					$color = '#f2d45c';
					$colorBackground = '#fdf9e8';
				}
				if ($_GET['color'] == 'fss'){
					$color = '#007b69';
					$colorBackground = '#e6f1f0';
				}
				if ($_GET['color'] == 'fsps'){
					$color = '#009aa6';
					$colorBackground = '#e7f5f6';
				}
				if ($_GET['color'] == 'phil'){
					$color = '#00a3e2';
					$colorBackground = '#e7f6fc';
				}
				if ($_GET['color'] == 'ped'){
					$color = '#ffa030';
					$colorBackground = '#fff5eb';
				}
				if ($_GET['color'] == 'econ'){
					$color = '#782328';
					$colorBackground = '#f1e9e9';
				}

			}
			else {
				$color = '#002776';
				$colorBackground = '#f2f4f8';
			}
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
	<body style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; background:#ffffff; color:#444444; line-height:1.4285; width:100%; text-align:center; -webkit-font-smoothing:antialiased; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;">

		<div style="display:none;font-size:1px;color:#333333;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;">
			Krátky popis newsletteru, který se zobrazí za předmětem
		</div> <!-- / pre-header -->

		<table class="sk-block-table" width="100%" border="0" cellpadding="0" cellspacing="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: center; background: #fff;">
			<tr class="sk-block">
				<td class="sk-block" align="center">

					<table class="sk-block-table" width="700" border="0" cellspacing="0" cellpadding="0" style="margin:0 auto; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:700px; text-align: left;">
						<tr class="sk-block">
							<td class="sk-block">
								<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr>
										<td class="sk-pl20 sk-pb40 sk-logo" style="vertical-align: top; padding: 0 0 60px;">
											<p style="margin: 0; line-height: 1;">
												<a href="#" style="text-decoration: none;">
													<img class="sk-hide" src="./img/logo-muni<?php if ($_GET['color']) { echo '-'; echo $_GET['color']; } ?>.png" alt="Masarykova univerzita" width="167" height="114" style="vertical-align: top; border: none;" />
												</a>
											</p>
										</td>
										<td class="sk-pr20 sk-pb40 sk-pl30 sk-tal" style="vertical-align: top; padding: 0 0 60px; color: #99a9c8; font-size: 11px; text-align: right; font-family: Tahoma, Verdana, sans-serif;">
											<p class="sk-mb30" style="margin: 10px 0 40px; line-height: 19px;">
												<span class="sk-hide">
													<a href="#" style="color: #99a9c8;">Webová verze</a> &nbsp;&nbsp;|&nbsp;&nbsp;
													<a href="#" style="color: #99a9c8;">online.muni.cz</a> &nbsp;&nbsp;|&nbsp;&nbsp;
												</span>
												Newsletter 02/2017 &nbsp;&nbsp;|&nbsp;&nbsp;
												<span class="sk-hide">Odesláno</span> 17. 2. 2017<span class="sk-hide">, 8:36</span>
											</p>
											<h1 class="sk-h1" style="margin: 0; line-height: 1;">
												<img class="sk-hide" src="./img/h1.png" alt="Newsletter pro zaměstnance" width="380" height="35" style="vertical-align: top; border: none;" />
											</h1>
										</td>
									</tr>
								</table> <!-- / header -->

								<table class="sk-block-table-all" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr>
										<td class="sk-pb40" style="padding: 0 0 60px;">
											<table dir="rtl" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left; background: #002776;">
												<tr>
													<td dir="ltr" style="vertical-align: top; width: 50%;">
														<a href="#" style="text-decoration: none;">
															<img class="sk-full" src="./img/illust-box-blue-type1.jpg" alt="" width="350" height="246" style="vertical-align: top; border: none;" />
														</a>
													</td>
													<td dir="ltr" style="vertical-align: top;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
															<tr>
																<td class="sk-pl20 sk-pr20 sk-pt20" style="color: #fff; padding: 25px 30px 10px;">
																	<h2 style="font-size: 24px; line-height: 32px; font-family: Tahoma, Verdana, sans-serif; color: #fff; margin: 0 0 20px;">
																		<a href="#" style="text-decoration: none; color: #fff;">
																			Masarykova univerzita kvůli novele zákona o VŠ upraví statut
																		</a>
																	</h2>
																	<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
																		<tr>
																			<td style="padding: 0 0 20px;">
																				<?php if ($_GET['color'] == 'fi'): ?>
																					<div><!--[if mso]>
																					  <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="#" style="height:32px;v-text-anchor:middle;width:140px;" strokecolor="<?php echo $color; ?>" strokeweight="2px" fillcolor="<?php echo $color; ?>">
																					    <w:anchorlock/>
																					    <center style="color:#000000;font-family:sans-serif;font-size:12px;text-transform: uppercase;">Číst dále</center>
																					  </v:rect>
																					<![endif]--><a href="#" style="background:<?php echo $color; ?>;border:2px solid <?php echo $color; ?>;color:#000000;display:inline-block;font-family:sans-serif;font-size:12px;text-transform: uppercase;line-height:32px;text-align:center;text-decoration:none;width:140px;-webkit-text-size-adjust:none;mso-hide:all;">Číst dále</a></div>
																				<?php elseif ($_GET['color']): ?>
																					<div><!--[if mso]>
																					  <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="#" style="height:32px;v-text-anchor:middle;width:140px;" strokecolor="<?php echo $color; ?>" strokeweight="2px" fillcolor="<?php echo $color; ?>">
																					    <w:anchorlock/>
																					    <center style="color:#ffffff;font-family:sans-serif;font-size:12px;text-transform: uppercase;">Číst dále</center>
																					  </v:rect>
																					<![endif]--><a href="#" style="background:<?php echo $color; ?>;border:2px solid <?php echo $color; ?>;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:12px;text-transform: uppercase;line-height:32px;text-align:center;text-decoration:none;width:140px;-webkit-text-size-adjust:none;mso-hide:all;">Číst dále</a></div>
																				<?php else: ?>
																					<div><!--[if mso]>
																					  <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="#" style="height:32px;v-text-anchor:middle;width:140px;" strokecolor="#ffffff" strokeweight="2px" fillcolor="#002776">
																					    <w:anchorlock/>
																					    <center style="color:#ffffff;font-family:sans-serif;font-size:12px;text-transform: uppercase;">Číst dále</center>
																					  </v:rect>
																					<![endif]--><a href="#" style="border:2px solid #ffffff;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:12px;text-transform: uppercase;line-height:32px;text-align:center;text-decoration:none;width:140px;-webkit-text-size-adjust:none;mso-hide:all;">Číst dále</a></div>
																				<?php endif; ?>
																			</td>
																		</tr>
																	</table>
																</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table> <!-- / box blue - type 1 -->

								<table class="sk-block-table-all" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr>
										<td class="sk-pb40" style="padding: 0 0 60px;">
											<table dir="rtl" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left; background: #002776;">
												<tr>
													<td dir="ltr" style="vertical-align: top; width: 50%;">
														<a href="#" style="text-decoration: none;">
															<img class="sk-full" src="./img/illust-box-blue-type2.jpg" alt="" width="350" height="447" style="vertical-align: top; border: none;" />
														</a>
													</td>
													<td dir="ltr" style="vertical-align: top;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
															<tr>
																<td class="sk-pl20 sk-pr20 sk-pt20" style="color: #fff; padding: 25px 30px 10px;">
																	<h2 class="sk-h2" style="font-size: 32px; line-height: 40px; font-family: Tahoma, Verdana, sans-serif; color: #fff; margin: 0 0 25px;">
																		<a href="#" style="text-decoration: none; color: #fff;">
																			Masarykova univerzita kvůli novele zákona o VŠ upraví statut
																		</a>
																	</h2>
																	<p style="line-height: 24px; margin: 0 0 20px;">
																		Od 1. září 2016 začne platit novela vysokoškolského zákona. Novému znění zákona je nutné přizpůsobit i základní vnitřní normu  – Statut Masarykovy univerzity.  Nově vznikne například rada pro vnitřní hodnocení, upravovat se bude i poplatková agenda.
																	</p>
																	<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
																		<tr>
																			<td style="padding: 0 0 20px;">
																				<?php if ($_GET['color'] == 'fi'): ?>
																					<div><!--[if mso]>
																					  <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="#" style="height:32px;v-text-anchor:middle;width:140px;" strokecolor="<?php echo $color; ?>" strokeweight="2px" fillcolor="<?php echo $color; ?>">
																					    <w:anchorlock/>
																					    <center style="color:#000000;font-family:sans-serif;font-size:12px;text-transform: uppercase;">Číst dále</center>
																					  </v:rect>
																					<![endif]--><a href="#" style="background:<?php echo $color; ?>;border:2px solid <?php echo $color; ?>;color:#000000;display:inline-block;font-family:sans-serif;font-size:12px;text-transform: uppercase;line-height:32px;text-align:center;text-decoration:none;width:140px;-webkit-text-size-adjust:none;mso-hide:all;">Číst dále</a></div>
																				<?php elseif ($_GET['color']): ?>
																					<div><!--[if mso]>
																					  <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="#" style="height:32px;v-text-anchor:middle;width:140px;" strokecolor="<?php echo $color; ?>" strokeweight="2px" fillcolor="<?php echo $color; ?>">
																					    <w:anchorlock/>
																					    <center style="color:#ffffff;font-family:sans-serif;font-size:12px;text-transform: uppercase;">Číst dále</center>
																					  </v:rect>
																					<![endif]--><a href="#" style="background:<?php echo $color; ?>;border:2px solid <?php echo $color; ?>;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:12px;text-transform: uppercase;line-height:32px;text-align:center;text-decoration:none;width:140px;-webkit-text-size-adjust:none;mso-hide:all;">Číst dále</a></div>
																				<?php else: ?>
																					<div><!--[if mso]>
																					  <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="#" style="height:32px;v-text-anchor:middle;width:140px;" strokecolor="#ffffff" strokeweight="2px" fillcolor="#002776">
																					    <w:anchorlock/>
																					    <center style="color:#ffffff;font-family:sans-serif;font-size:12px;text-transform: uppercase;">Číst dále</center>
																					  </v:rect>
																					<![endif]--><a href="#" style="border:2px solid #ffffff;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:12px;text-transform: uppercase;line-height:32px;text-align:center;text-decoration:none;width:140px;-webkit-text-size-adjust:none;mso-hide:all;">Číst dále</a></div>
																				<?php endif; ?>
																			</td>
																		</tr>
																	</table>
																</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table> <!-- / box blue - type 2 -->

								<table class="sk-block-table-all" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr>
										<td class="sk-pb40" style="padding: 0 0 60px;">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left; background: #002776;">
												<tr>
													<td style="vertical-align: top;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
															<tr>
																<td class="sk-pl20 sk-pr20 sk-pt20" style="color: #fff; padding: 25px 30px 10px;">
																	<h2 class="sk-h2" style="font-size: 32px; line-height: 40px; font-family: Tahoma, Verdana, sans-serif; color: #fff; margin: 0 0 25px;">
																		<a href="#" style="text-decoration: none; color: #fff;">
																			Masarykova univerzita kvůli novele zákona o VŠ upraví statut
																		</a>
																	</h2>
																	<p style="line-height: 24px; margin: 0 0 20px;">
																		Od 1. září 2016 začne platit novela vysokoškolského zákona. Novému znění zákona je nutné přizpůsobit i základní vnitřní normu  – Statut Masarykovy univerzity.  Nově vznikne například rada pro vnitřní hodnocení, upravovat se bude i poplatková agenda.
																	</p>
																</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table> <!-- / box blue - type 3 -->

								<table class="sk-block-table-all" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr>
										<td class="sk-pb40 sk-pl20 sk-pr20" style="padding: 0 0 60px;">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr>
													<td style="vertical-align: top;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
															<tr>
																<td class="sk-pl20 sk-pr20 sk-pt20" style="color: #444; padding: 25px 30px 10px; border: 1px solid #ddd; border-top: 3px solid <?php echo $color; ?>;">
																	<p style="text-transform: uppercase; font-size: 12px; line-height: 18px; color: #e33424; margin: 0 0 3px;">
																		Aktuálně
																	</p>
																	<p style="text-transform: uppercase; font-size: 12px; line-height: 18px; color: #61b6e5; margin: 0 0 3px;">
																		Vzdělávání
																	</p>
																	<p style="text-transform: uppercase; font-size: 12px; line-height: 18px; color: #3db44e; margin: 0 0 3px;">
																		Užitečné
																	</p>
																	<p style="text-transform: uppercase; font-size: 12px; line-height: 18px; color: #662e8f; margin: 0 0 3px;">
																		Výzkum
																	</p>
																	<p style="text-transform: uppercase; font-size: 12px; line-height: 18px; color: #f8b87b; margin: 0 0 3px;">
																		Lidé
																	</p>
																	<h2 class="sk-h2" style="font-size: 32px; line-height: 40px; font-family: Tahoma, Verdana, sans-serif; color: #002776; margin: 0 0 25px;">
																		<a href="#" style="text-decoration: none; color: #002776;">
																			Dlouhý nadpis hlavního článku na začátku newsletteru
																		</a>
																	</h2>
																	<p style="line-height: 24px; margin: 0 0 20px;">
																		Od 1. září 2016 začne platit novela vysokoškolského zákona. Novému znění zákona je nutné přizpůsobit i základní vnitřní normu  – Statut Masarykovy univerzity.  Nově vznikne například rada pro vnitřní hodnocení, upravovat se bude i poplatková agenda. Nové znění Statutu bude schvalovat Akademický senát MU dne XY. Aktuální znění připravovaného návrhu je <a href="#" style="color:#002776;">k dispozici na webu</a>.
																	</p>
																	<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
																		<tr>
																			<td style="padding: 0 0 20px;">
																				<div><!--[if mso]>
																				  <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="#" style="height:32px;v-text-anchor:middle;width:140px;" strokecolor="<?php echo $color; ?>" strokeweight="2px" fillcolor="#ffffff">
																				    <w:anchorlock/>
																				    <center style="color:<?php if ($_GET['color']) echo '#000'; else echo $color; ?>;font-family:sans-serif;font-size:12px;text-transform: uppercase;">Celý článek</center>
																				  </v:rect>
																				<![endif]--><a href="#" style="border:2px solid <?php echo $color; ?>;color:<?php if ($_GET['color']) echo '#000'; else echo $color; ?>;display:inline-block;font-family:sans-serif;font-size:12px;text-transform: uppercase;line-height:32px;text-align:center;text-decoration:none;width:140px;-webkit-text-size-adjust:none;mso-hide:all;">Celý článek</a></div>
																			</td>
																		</tr>
																	</table>
																</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table> <!-- / box white - type 1 -->

								<table class="sk-block-table-all" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr>
										<td class="sk-pb40 sk-pl20 sk-pr20" style="padding: 0 0 60px;">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr>
													<td style="vertical-align: top;">
														<p style="margin: 0; text-align: center;">
															<a href="#" style="text-decoration: none;">
																<img class="sk-full" src="./img/illust-box-white-type2.jpg" alt="" width="700" height="394" style="vertical-align: top; border: none;" />
															</a>
														</p>
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
															<tr>
																<td class="sk-pl20 sk-pr20 sk-pt20" style="color: #444; padding: 25px 30px 10px; border: 1px solid #ddd; border-top: 3px solid <?php echo $color; ?>;">
																	<p style="text-transform: uppercase; font-size: 12px; line-height: 18px; color: #99a9c8; margin: 0 0 3px;">
																		Vzdělávání
																	</p>
																	<h2 class="sk-h2" style="font-size: 32px; line-height: 40px; font-family: Tahoma, Verdana, sans-serif; color: #002776; margin: 0 0 25px;">
																		<a href="#" style="text-decoration: none; color: #002776;">
																			Dlouhý nadpis hlavního článku na začátku newsletteru
																		</a>
																	</h2>
																	<p style="line-height: 24px; margin: 0 0 20px;">
																		Od 1. září 2016 začne platit novela vysokoškolského zákona. Novému znění zákona je nutné přizpůsobit i základní vnitřní normu  – Statut Masarykovy univerzity.  Nově vznikne například rada pro vnitřní hodnocení, upravovat se bude i poplatková agenda. Nové znění Statutu bude schvalovat Akademický senát MU dne XY. Aktuální znění připravovaného návrhu je <a href="#" style="color:#002776;">k dispozici na webu</a>.
																	</p>
																	<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
																		<tr>
																			<td style="padding: 0 0 20px;">
																				<div><!--[if mso]>
																				  <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="#" style="height:32px;v-text-anchor:middle;width:140px;" strokecolor="<?php echo $color; ?>" strokeweight="2px" fillcolor="#ffffff">
																				    <w:anchorlock/>
																				    <center style="color:<?php if ($_GET['color']) echo '#000'; else echo $color; ?>;font-family:sans-serif;font-size:12px;text-transform: uppercase;">Celý článek</center>
																				  </v:rect>
																				<![endif]--><a href="#" style="border:2px solid <?php echo $color; ?>;color:<?php if ($_GET['color']) echo '#000'; else echo $color; ?>;display:inline-block;font-family:sans-serif;font-size:12px;text-transform: uppercase;line-height:32px;text-align:center;text-decoration:none;width:140px;-webkit-text-size-adjust:none;mso-hide:all;">Celý článek</a></div>
																			</td>
																		</tr>
																	</table>
																</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table> <!-- / box white - type 2 -->

								<table class="sk-block-table-all" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr>
										<td class="sk-pb40 sk-pl20 sk-pr20" style="padding: 0 0 60px;">
											<table dir="rtl" class="sk-bdt0" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left; border-top: 3px solid <?php echo $color; ?>; border-bottom: 1px solid #ddd;">
												<tr>
													<td dir="ltr" style="vertical-align: top; border: 0px; width: 50%;">
														<a href="#" style="text-decoration: none;">
															<img class="sk-full" src="./img/illust-box-white-type3.jpg" alt="" width="350" height="480" style="vertical-align: top; border: none;" />
														</a>
													</td>
													<td dir="ltr" class="sk-bdr1 sk-bdt3" style="vertical-align: top; border: 0px; border-left: 1px solid #ddd;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
															<tr>
																<td class="sk-pl20 sk-pr20 sk-pt20" style="color: #444; padding: 25px 30px 10px;">
																	<p style="text-transform: uppercase; font-size: 12px; line-height: 18px; color: #99a9c8; margin: 0 0 3px;">
																		Vzdělávání
																	</p>
																	<h2 class="sk-h2" style="font-size: 32px; line-height: 40px; font-family: Tahoma, Verdana, sans-serif; color: #002776; margin: 0 0 25px;">
																		<a href="#" style="text-decoration: none; color: #002776;">
																			Dlouhý nadpis hlavního článku na začátku newsletteru
																		</a>
																	</h2>
																	<p style="line-height: 24px; margin: 0 0 20px;">
																		Od 1. září 2016 začne platit novela vysokoškolského zákona. Novému znění zákona je nutné přizpůsobit i základní vnitřní normu  – Statut Masarykovy univerzity.  Nově vznikne například rada pro vnitřní hodnocení, upravovat se bude i poplatková agenda. Nové znění Statutu bude schvalovat Akademický senát MU dne XY. Aktuální znění připravovaného návrhu je <a href="#" style="color:#002776;">k dispozici na webu</a>.
																	</p>
																</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table> <!-- / box white - type 3 -->

								<table class="sk-block-table-all" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr>
										<td class="sk-pb40 sk-pl20 sk-pr20" style="padding: 0 0 60px;">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr>
													<td style="vertical-align: top;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
															<tr>
																<td class="sk-pl20 sk-pr20 sk-pt20" style="color: #444; padding: 25px 30px 10px; border: 1px solid #ddd; border-top: 3px solid <?php echo $color; ?>;">
																	<p style="text-transform: uppercase; font-size: 12px; line-height: 18px; color: #99a9c8; margin: 0 0 3px;">
																		Vzdělávání
																	</p>
																	<h2 style="font-size: 24px; line-height: 32px; font-family: Tahoma, Verdana, sans-serif; color: #002776; margin: 0 0 20px;">
																		<a href="#" style="text-decoration: none; color: #002776;">
																			V Univerzitním kině Scala bude obchod s reklamními předměty
																		</a>
																	</h2>
																	<p style="line-height: 24px; margin: 0 0 20px;">
																		Od 1. září 2016 začne platit novela vysokoškolského zákona. Novému znění zákona je nutné přizpůsobit i základní vnitřní normu  – Statut Masarykovy univerzity.  Nově vznikne například rada pro vnitřní hodnocení, upravovat se bude i poplatková agenda. Nové znění Statutu bude schvalovat Akademický senát MU dne XY. Aktuální znění připravovaného návrhu je <a href="#" style="color:#002776;">k dispozici na webu</a>.
																	</p>
																	<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
																		<tr>
																			<td style="padding: 0 0 20px;">
																				<div><!--[if mso]>
																				  <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="#" style="height:32px;v-text-anchor:middle;width:140px;" strokecolor="<?php echo $color; ?>" strokeweight="2px" fillcolor="#ffffff">
																				    <w:anchorlock/>
																				    <center style="color:<?php if ($_GET['color']) echo '#000'; else echo $color; ?>;font-family:sans-serif;font-size:12px;text-transform: uppercase;">Celý článek</center>
																				  </v:rect>
																				<![endif]--><a href="#" style="border:2px solid <?php echo $color; ?>;color:<?php if ($_GET['color']) echo '#000'; else echo $color; ?>;display:inline-block;font-family:sans-serif;font-size:12px;text-transform: uppercase;line-height:32px;text-align:center;text-decoration:none;width:140px;-webkit-text-size-adjust:none;mso-hide:all;">Celý článek</a></div>
																			</td>
																		</tr>
																	</table>
																</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table> <!-- / box white - type 4 -->

								<table class="sk-block-table-all" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr>
										<td class="sk-pb40 sk-pl20 sk-pr20" style="padding: 0 0 60px;">
											<table class="sk-bdt0" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left; border-top: 3px solid <?php echo $color; ?>; border-bottom: 1px solid #ddd;">
												<tr>
													<td style="vertical-align: top; border: 0px; width: 50%;">
														<a href="#" style="text-decoration: none;">
															<img class="sk-full" src="./img/illust-box-white-type5.jpg" alt="" width="350" height="352" style="vertical-align: top; border: none;" />
														</a>
													</td>
													<td class="sk-bdl1 sk-bdt3" style="vertical-align: top; border: 0px; border-right: 1px solid #ddd;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
															<tr>
																<td class="sk-pl20 sk-pr20 sk-pt20" style="color: #444; padding: 25px 30px 10px;">
																	<p style="text-transform: uppercase; font-size: 12px; line-height: 18px; color: #99a9c8; margin: 0 0 3px;">
																		Vzdělávání
																	</p>
																	<h2 style="font-size: 24px; line-height: 35px; font-family: Tahoma, Verdana, sans-serif; color: #002776; margin: 0 0 20px;">
																		<a href="#" style="text-decoration: none; color: #002776;">
																			V Univerzitním kině Scala bude obchod s reklamními předměty
																		</a>
																	</h2>
																	<p style="line-height: 24px; margin: 0 0 20px;">
																		Vedení univerzity schválilo záměr vytvořit v Univerzitním kině Scala obchod s propagačními předměty Masarykovy univerzity.
																	</p>
																	<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
																		<tr>
																			<td style="padding: 0 0 20px;">
																				<div><!--[if mso]>
																				  <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="#" style="height:32px;v-text-anchor:middle;width:140px;" strokecolor="<?php echo $color; ?>" strokeweight="2px" fillcolor="#ffffff">
																				    <w:anchorlock/>
																				    <center style="color:<?php if ($_GET['color']) echo '#000'; else echo $color; ?>;font-family:sans-serif;font-size:12px;text-transform: uppercase;">Celý článek</center>
																				  </v:rect>
																				<![endif]--><a href="#" style="border:2px solid <?php echo $color; ?>;color:<?php if ($_GET['color']) echo '#000'; else echo $color; ?>;display:inline-block;font-family:sans-serif;font-size:12px;text-transform: uppercase;line-height:32px;text-align:center;text-decoration:none;width:140px;-webkit-text-size-adjust:none;mso-hide:all;">Celý článek</a></div>
																			</td>
																		</tr>
																	</table>
																</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table> <!-- / box white - type 5 -->

								<table class="sk-block-table-all" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr>
										<td class="sk-pb40 sk-pl20 sk-pr20" style="padding: 0 0 60px;">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr>
													<td style="vertical-align: top; width: 335px;">
														<p style="margin: 0; text-align: center;">
															<a href="#" style="text-decoration: none;">
																<img class="sk-full" src="./img/illust-box-white-type6.jpg" alt="" width="335" height="190" style="vertical-align: top; border: none;" />
															</a>
														</p>
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
															<tr>
																<td class="sk-pl20 sk-pr20 sk-pt20" style="color: #444; padding: 25px 30px 10px; border: 1px solid #ddd; border-top: 3px solid <?php echo $color; ?>;">
																	<p style="text-transform: uppercase; font-size: 12px; line-height: 18px; color: #99a9c8; margin: 0 0 3px;">
																		Vzdělávání
																	</p>
																	<h2 style="font-size: 24px; line-height: 35px; font-family: Tahoma, Verdana, sans-serif; color: #002776; margin: 0 0 20px;">
																		<a href="#" style="text-decoration: none; color: #002776;">
																			S povinnou registrací smluv pomůže nový systém v úřadovně IS MU
																		</a>
																	</h2>
																	<p style="line-height: 24px; margin: 0 0 20px;">
																		Od 1. září 2016 začne platit novela vysokoškolského zákona. Novému znění zákona je nutné přizpůsobit i základní vnitřní normu  – Statut Masarykovy univerzity.  Nově vznikne například rada pro vnitřní hodnocení, upravovat se bude i poplatková agenda. Nové znění Statutu bude schvalovat Akademický senát MU dne XY. Aktuální znění připravovaného návrhu je k dispozici na webu.
																	</p>
																</td>
															</tr>
														</table>
													</td>
													<td class="sk-pb40" style="width: 30px;">&nbsp;</td>
													<td style="vertical-align: top; width: 335px;">
														<p style="margin: 0; text-align: center;">
															<a href="#" style="text-decoration: none;">
																<img class="sk-full" src="./img/illust-box-white-type6.jpg" alt="" width="335" height="190" style="vertical-align: top; border: none;" />
															</a>
														</p>
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
															<tr>
																<td class="sk-pl20 sk-pr20 sk-pt20" style="color: #444; padding: 25px 30px 10px; border: 1px solid #ddd; border-top: 3px solid <?php echo $color; ?>;">
																	<p style="text-transform: uppercase; font-size: 12px; line-height: 18px; color: #99a9c8; margin: 0 0 3px;">
																		Vzdělávání
																	</p>
																	<h2 style="font-size: 24px; line-height: 35px; font-family: Tahoma, Verdana, sans-serif; color: #002776; margin: 0 0 20px;">
																		<a href="#" style="text-decoration: none; color: #002776;">
																			V Univerzitním kině Scala bude obchod s reklamními předměty
																		</a>
																	</h2>
																	<p style="line-height: 24px; margin: 0 0 20px;">
																		Vedení univerzity schválilo záměr vytvořit v Univerzitním kině Scala obchod s propagačními předměty Masarykovy univerzity. Otvírat se bude na začátku akademického roku.
																	</p>
																	<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
																		<tr>
																			<td style="padding: 0 0 20px;">
																				<div><!--[if mso]>
																				  <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="#" style="height:32px;v-text-anchor:middle;width:140px;" strokecolor="<?php echo $color; ?>" strokeweight="2px" fillcolor="#ffffff">
																				    <w:anchorlock/>
																				    <center style="color:<?php if ($_GET['color']) echo '#000'; else echo $color; ?>;font-family:sans-serif;font-size:12px;text-transform: uppercase;">Celý článek</center>
																				  </v:rect>
																				<![endif]--><a href="#" style="border:2px solid <?php echo $color; ?>;color:<?php if ($_GET['color']) echo '#000'; else echo $color; ?>;display:inline-block;font-family:sans-serif;font-size:12px;text-transform: uppercase;line-height:32px;text-align:center;text-decoration:none;width:140px;-webkit-text-size-adjust:none;mso-hide:all;">Celý článek</a></div>
																			</td>
																		</tr>
																	</table>
																</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table> <!-- / box white - type 6 -->

								<table class="sk-block-table-all" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr>
										<td class="sk-pb40 sk-pl20 sk-pr20" style="padding: 0 0 60px;">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr>
													<td style="vertical-align: top; width: 335px;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
															<tr>
																<td class="sk-pl20 sk-pr20 sk-pt20" style="color: #444; padding: 25px 30px 10px; border: 1px solid #ddd; border-top: 3px solid <?php echo $color; ?>;">
																	<p style="text-transform: uppercase; font-size: 12px; line-height: 18px; color: #99a9c8; margin: 0 0 3px;">
																		Vzdělávání
																	</p>
																	<h2 style="font-size: 24px; line-height: 35px; font-family: Tahoma, Verdana, sans-serif; color: #002776; margin: 0 0 20px;">
																		<a href="#" style="text-decoration: none; color: #002776;">
																			Správní rada MU má čtyři nové členy
																		</a>
																	</h2>
																	<p style="line-height: 24px; margin: 0 0 20px;">
																		Na činnost univerzity bude nově dohlížet někdejší soudkyně Ústavního soudu Dagmar Lastovecká, generální ředitel společnosti Siemens Eduard Palíšek, někdejší generální ředitel České spořitelny Pavel Kysilka a předseda Českého svazu biatlonu Jiří Hamza. Aktuální <a href="#" style="color:#002776;">složení Správní rady MU najdete zde</a>
																	</p>
																	<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
																		<tr>
																			<td style="padding: 0 0 20px;">
																				<div><!--[if mso]>
																				  <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="#" style="height:32px;v-text-anchor:middle;width:140px;" strokecolor="<?php echo $color; ?>" strokeweight="2px" fillcolor="#ffffff">
																				    <w:anchorlock/>
																				    <center style="color:<?php if ($_GET['color']) echo '#000'; else echo $color; ?>;font-family:sans-serif;font-size:12px;text-transform: uppercase;">Celý článek</center>
																				  </v:rect>
																				<![endif]--><a href="#" style="border:2px solid <?php echo $color; ?>;color:<?php if ($_GET['color']) echo '#000'; else echo $color; ?>;display:inline-block;font-family:sans-serif;font-size:12px;text-transform: uppercase;line-height:32px;text-align:center;text-decoration:none;width:140px;-webkit-text-size-adjust:none;mso-hide:all;">Celý článek</a></div>
																			</td>
																		</tr>
																	</table>
																</td>
															</tr>
														</table>
													</td>
													<td class="sk-pb40" style="width: 30px;">&nbsp;</td>
													<td style="vertical-align: top; width: 335px;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
															<tr>
																<td class="sk-pl20 sk-pr20 sk-pt20" style="color: #444; padding: 25px 30px 10px; border: 1px solid #ddd; border-top: 3px solid <?php echo $color; ?>;">
																	<p style="text-transform: uppercase; font-size: 12px; line-height: 18px; color: #99a9c8; margin: 0 0 3px;">
																		Vzdělávání
																	</p>
																	<h2 style="font-size: 24px; line-height: 35px; font-family: Tahoma, Verdana, sans-serif; color: #002776; margin: 0 0 20px;">
																		<a href="#" style="text-decoration: none; color: #002776;">
																			Dětská jUninverzita otevře registraci do dalšího ročníku už 22. srpna
																		</a>
																	</h2>
																	<p style="line-height: 24px; margin: 0 0 20px;">
																		Druhý ročník dětské Masarykovy jUniverzity (MjuniMjUNI) pro děti ve věku 9-14 let, má 166 úspěšných absolventů. Do přípravy programu devíti sobotních akcí se zapojilo na 200 pedagogů z osmi fakult a tří pracovišť. Registrace do ročníku 2016/2017 bude zahájena 22. 8. v 20:00, a to na webu mjuni.cz.  Loni se všechna místa zaplnila během několika minut.
																	</p>
																</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table> <!-- / box white - type 7 -->

								<table class="sk-block-table-all" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr>
										<td class="sk-pl20 sk-pr20" style="padding: 0 0 30px;">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr>
													<td style="border-bottom: 3px solid #ccd4e4;">
														<h2 style="font-size: 24px; line-height: 35px; font-family: Tahoma, Verdana, sans-serif; color: #002776; margin: 0 0 10px;">
															Krátce ze života univerzity
														</h2>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table> <!-- / box annot - title -->

								<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr>
										<td class="sk-pb40 sk-pl20 sk-pr20" style="padding: 0 0 60px;">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr>
													<td style="border-bottom: 3px solid #ccd4e4; padding: 0 0 30px;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
															<tr>
																<td style="color: #002776; vertical-align: top; padding: 15px 15px 15px 0;">
																	<p style="line-height: 24px; margin: 0;">
																		MU
																	</p>
																</td>
																<td style="color: #002776; vertical-align: top; padding: 15px 0;">
																	<p style="line-height: 24px; margin: 0;">
																		<a href="#" style="color: #002776; text-decoration: none;">
																			<span style="text-decoration: underline;">Masarykova univerzita otevřela vlastní vinohrad</span>&nbsp;
																			<img src="./img/ico-ext.png" alt="Externí odkaz" width="15" height="14" style="vertical-align: middle; border: none;" />
																		</a>
																	</p>
																</td>
															</tr>
															<tr>
																<td style="color: #002776; vertical-align: top; padding: 15px 15px 15px 0; border-top: 1px solid #ddd;">
																	<p style="line-height: 24px; margin: 0;">
																		FSpS
																	</p>
																</td>
																<td style="color: #002776; vertical-align: top; padding: 15px 0; border-top: 1px solid #ddd;">
																	<p style="line-height: 24px; margin: 0;">
																		<a href="#" style="color: #002776; text-decoration: none;">
																			<span style="text-decoration: underline;">Munii nově povede Jan Kleiner. Chce se víc věnovat zahraničním studentům</span>&nbsp;
																			<img src="./img/ico-ext.png" alt="Externí odkaz" width="15" height="14" style="vertical-align: middle; border: none;" />
																		</a>
																	</p>
																</td>
															</tr>
															<tr>
																<td style="color: #002776; vertical-align: top; padding: 15px 15px 15px 0; border-top: 1px solid #ddd;">
																	<p style="line-height: 24px; margin: 0;">
																		PrF
																	</p>
																</td>
																<td style="color: #002776; vertical-align: top; padding: 15px 0; border-top: 1px solid #ddd;">
																	<p style="line-height: 24px; margin: 0;">
																		<a href="#" style="color: #002776; text-decoration: none;">
																			<span style="text-decoration: underline;">Na Kraví hoře rozkvetly léčivé rostliny</span>&nbsp;
																			<img src="./img/ico-ext.png" alt="Externí odkaz" width="15" height="14" style="vertical-align: middle; border: none;" />
																		</a>
																	</p>
																</td>
															</tr>
															<tr>
																<td style="color: #002776; vertical-align: top; padding: 15px 15px 15px 0; border-top: 1px solid #ddd;">
																	<p style="line-height: 24px; margin: 0;">
																		ESF
																	</p>
																</td>
																<td style="color: #002776; vertical-align: top; padding: 15px 0; border-top: 1px solid #ddd;">
																	<p style="line-height: 24px; margin: 0;">
																		<a href="#" style="color: #002776; text-decoration: none;">
																			<span style="text-decoration: underline;">První absolventský sraz anglické medicíny přilákal lékaře z celého světa</span>&nbsp;
																			<img src="./img/ico-ext.png" alt="Externí odkaz" width="15" height="14" style="vertical-align: middle; border: none;" />
																		</a>
																	</p>
																</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table> <!-- / box light -->

								<table class="sk-block-table-all" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr>
										<td class="sk-pb40 sk-pl20 sk-pr20" style="padding: 0 0 60px;">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr><!-- pokud je tento řádek první musí mít vnitřní <td> padding-top 0px -->
													<td style="border-bottom: 1px solid #ddd; padding: 0 0 10px;">
														<p style="text-transform: uppercase; font-size: 12px; line-height: 18px; color: #99a9c8; margin: 0 0 3px;">
															Aktuálně
														</p>
														<h3 style="font-size: 18px; line-height: 24px; font-family: Tahoma, Verdana, sans-serif; color: #002776; margin: 0 0 15px;">
															<a href="#" style="text-decoration: none; color: #002776;">
																Krátká zpráva na jeden řádek
															</a>
														</h3>
														<p style="line-height: 24px; margin: 0 0 20px;">
															Na činnost univerzity bude nově dohlížet někdejší soudkyně Ústavního soudu Dagmar Lastovecká, generální ředitel společnosti Siemens Eduard Palíšek, někdejší generální ředitel České spořitelny Pavel Kysilka a předseda Českého svazu biatlonu Jiří Hamza.
														</p>
													</td>
												</tr>
											</table>
											<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr><!-- pokud je tento řádek první musí mít vnitřní <td> padding-top 0px -->
													<td style="border-bottom: 1px solid #ddd; padding: 25px 0 5px; vertical-align: top; width: 320px;">
														<p style="text-transform: uppercase; font-size: 12px; line-height: 18px; color: #99a9c8; margin: 0 0 3px;">
															Aktuálně
														</p>
														<h3 style="font-size: 18px; line-height: 24px; font-family: Tahoma, Verdana, sans-serif; color: #002776; margin: 0 0 15px;">
															<a href="#" style="text-decoration: none; color: #002776;">
																Krátká zpráva na jeden řádek
															</a>
														</h3>
														<p style="line-height: 24px; margin: 0 0 20px;">
															Na činnost univerzity bude nově dohlížet někdejší soudkyně Ústavního soudu Dagmar Lastovecká, generální ředitel společnosti Siemens Eduard Palíšek.
														</p>
													</td>
													<td class="sk-hide" style="border-bottom: 1px solid #ddd; padding: 25px 0 5px; width: 60px;">&nbsp;</td>
													<td style="border-bottom: 1px solid #ddd; padding: 25px 0 5px; vertical-align: top; width: 320px;">
														<p style="text-transform: uppercase; font-size: 12px; line-height: 18px; color: #99a9c8; margin: 0 0 3px;">
															Aktuálně
														</p>
														<h3 style="font-size: 18px; line-height: 24px; font-family: Tahoma, Verdana, sans-serif; color: #002776; margin: 0 0 15px;">
															<a href="#" style="text-decoration: none; color: #002776;">
																Krátká zpráva na jeden řádek
															</a>
														</h3>
														<p style="line-height: 24px; margin: 0 0 20px;">
															Na činnost univerzity bude nově dohlížet někdejší soudkyně Ústavního soudu Dagmar Lastovecká, generální ředitel společnosti Siemens Eduard Palíšek, někdejší generální ředitel České spořitelny Pavel Kysilka a předseda Českého svazu biatlonu Jiří Hamza.
														</p>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table> <!-- / box news -->

								<table class="sk-block-table" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr class="sk-block">
										<td class="sk-block" class="sk-pb40" style="padding: 0 0 60px;">
											<table class="sk-block-table" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left; border-top: 3px solid <?php echo $color; ?>; background: <?php echo $colorBackground; ?>;">
												<tr class="sk-block">
													<td class="sk-block sk-pl20 sk-pr20" style="border: 0px; padding: 20px 30px 0;">
														<h3 style="font-size: 24px; line-height: 32px; font-family: Tahoma, Verdana, sans-serif; color: #002776; margin: 0 0 20px;">
															Fotogalerie z akce MUNI
															<span style="font-size: 12px;">
																(19. 9. 2016)
															</span>
														</h3>
														<table class="sk-block-table sk-gallery" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: center;">
															<tr>
																<td style="width: 200px; padding: 0 0 20px;">
																	<a href="#" style="text-decoration: none;">
																		<img src="./img/illust-gallery.png" alt="" width="200" height="115" style="vertical-align: middle; border: none;" />
																	</a>
																</td>
																<td class="sk-hide" style="width:20px">&nbsp;</td>
																<td style="width: 200px; padding: 0 0 20px;">
																	<a href="#" style="text-decoration: none;">
																		<img src="./img/illust-gallery.png" alt="" width="200" height="115" style="vertical-align: middle; border: none;" />
																	</a>
																</td>
																<td class="sk-hide" style="width:20px">&nbsp;</td>
																<td style="width: 200px; padding: 0 0 20px;">
																	<a href="#" style="text-decoration: none;">
																		<img src="./img/illust-gallery.png" alt="" width="200" height="115" style="vertical-align: middle; border: none;" />
																	</a>
																</td>
															</tr>
															<tr>
																<td style="width: 200px; padding: 0 0 20px;">
																	<a href="#" style="text-decoration: none;">
																		<img src="./img/illust-gallery.png" alt="" width="200" height="115" style="vertical-align: middle; border: none;" />
																	</a>
																</td>
																<td class="sk-hide" style="width:20px">&nbsp;</td>
																<td style="width: 200px; padding: 0 0 20px;">
																	<a href="#" style="text-decoration: none;">
																		<img src="./img/illust-gallery.png" alt="" width="200" height="115" style="vertical-align: middle; border: none;" />
																	</a>
																</td>
																<td class="sk-hide" style="width:20px">&nbsp;</td>
																<td style="width: 200px; padding: 0 0 20px;">
																	<a href="#" style="text-decoration: none;">
																		<img src="./img/illust-gallery.png" alt="" width="200" height="115" style="vertical-align: middle; border: none;" />
																	</a>
																</td>
															</tr>
														</table>
														<p style="line-height: 24px; margin: 0 0 20px; text-align: right;">
															<a href="#" style="color: #002776; text-decoration: none;">
																<span style="text-decoration: underline;">Kompletní fotogalerie z akce</span>&nbsp;
																<img src="./img/ico-ext.png" alt="Externí odkaz" width="15" height="14" style="vertical-align: middle; border: none;" />
															</a>
														</p>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table> <!-- / box gallery -->

								<table class="sk-block-table-all" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr>
										<td class="sk-pl20 sk-pr20" style="padding: 0 0 30px;">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr>
													<td style="border-bottom: 3px solid #ccd4e4;">
														<h2 style="font-size: 24px; line-height: 35px; font-family: Tahoma, Verdana, sans-serif; color: #002776; margin: 0 0 10px;">
															Blížící se zajímavé akce
														</h2>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table> <!-- / box annot - title -->

								<table class="sk-block-table" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr class="sk-block">
										<td class="sk-block sk-pl20 sk-pr20" style="padding: 0 0 10px;">
											<table class="sk-block-table sk-calendar" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr class="sk-calendar__row">
													<td class="sk-calendar__td sk-calendar__date" style="width: 70px; padding: 0 0 30px; vertical-align: top;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:12px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: center; font-weight: bold;">
															<tr>
																<td style="background: #002776; color: #fff; padding: 0 5px;">
																	<p style="margin: 0; line-height: 25px;">
																		Čtvrtek
																	</p>
																</td>
															</tr>
														</table>
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: center; font-weight: bold;">
															<tr>
																<td style="border: 1px solid #ddd; color: #000; border-top: none; padding: 7px 5px;">
																	<p style="margin: 0; line-height: 20px;">
																		24. 10.<br />
																		– 28. 12.
																	</p>
																</td>
															</tr>
														</table>
													</td>
													<td class="sk-calendar__td" style="padding: 0 0 30px 40px; color: #444; vertical-align: top;">
														<h3 style="font-size: 18px; line-height: 24px; font-family: Tahoma, Verdana, sans-serif; color: #002776; margin: 0 0 10px;">
															<a href="#" style="text-decoration: none; color: #002776;">
																Nadpis jine akce
															</a>
														</h3>
														<p style="margin: 0 0 20px; line-height: 24px;">
															Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat felis dui. Nullam nec varius ipsum. Aenean sit amet magna libero. Integer in lacus id magna.<br />
															<a href="#" style="color: #002776;">
																Podrobnosti o akci &gt;
															</a>
														</p>
													</td>
												</tr>
												<tr class="sk-calendar__row">
													<td class="sk-calendar__td sk-calendar__date" style="width: 70px; padding: 0 0 30px; vertical-align: top;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:12px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: center; font-weight: bold;">
															<tr>
																<td style="background: #7f379b; color: #fff; padding: 0 5px;">
																	<p style="margin: 0; line-height: 25px;">
																		Čtvrtek
																	</p>
																</td>
															</tr>
														</table>
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: center; font-weight: bold;">
															<tr>
																<td style="border: 1px solid #ddd; color: #000; border-top: none; padding: 7px 5px;">
																	<p style="margin: 0; line-height: 20px;">
																		24. 10.<br />
																		– 28. 12.
																	</p>
																</td>
															</tr>
														</table>
													</td>
													<td class="sk-calendar__td" style="padding: 0 0 30px 40px; color: #444; vertical-align: top;">
														<h3 style="font-size: 18px; line-height: 24px; font-family: Tahoma, Verdana, sans-serif; color: #002776; margin: 0 0 10px;">
															<a href="#" style="text-decoration: none; color: #002776;">
																Nadpis akce Masarykovy univerzity
															</a>
														</h3>
														<p style="margin: 0 0 20px; line-height: 24px;">
															Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat felis dui. Nullam nec varius ipsum. Aenean sit amet magna libero. Integer in lacus id magna.<br />
															<a href="#" style="color: #002776;">
																Podrobnosti o akci &gt;
															</a>
														</p>
													</td>
												</tr>
												<tr class="sk-calendar__row">
													<td class="sk-calendar__td sk-calendar__date" style="width: 70px; padding: 0 0 30px; vertical-align: top;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:12px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: center; font-weight: bold;">
															<tr>
																<td style="background: #f01928; color: #fff; padding: 0 5px;">
																	<p style="margin: 0; line-height: 25px;">
																		Čtvrtek
																	</p>
																</td>
															</tr>
														</table>
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: center; font-weight: bold;">
															<tr>
																<td style="border: 1px solid #ddd; color: #000; border-top: none; padding: 7px 5px;">
																	<p style="margin: 0; line-height: 20px;">
																		24. 10.<br />
																		– 28. 12.
																	</p>
																</td>
															</tr>
														</table>
													</td>
													<td class="sk-calendar__td" style="padding: 0 0 30px 40px; color: #444; vertical-align: top;">
														<h3 style="font-size: 18px; line-height: 24px; font-family: Tahoma, Verdana, sans-serif; color: #002776; margin: 0 0 10px;">
															<a href="#" style="text-decoration: none; color: #002776;">
																Nadpis akce Masarykovy univerzity
															</a>
														</h3>
														<p style="margin: 0 0 20px; line-height: 24px;">
															Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat felis dui. Nullam nec varius ipsum. Aenean sit amet magna libero. Integer in lacus id magna.<br />
															<a href="#" style="color: #002776;">
																Podrobnosti o akci &gt;
															</a>
														</p>
													</td>
												</tr>
												<tr class="sk-calendar__row">
													<td class="sk-calendar__td sk-calendar__date" style="width: 70px; padding: 0 0 30px; vertical-align: top;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:12px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: center; font-weight: bold;">
															<tr>
																<td style="background: #01af40; color: #fff; padding: 0 5px;">
																	<p style="margin: 0; line-height: 25px;">
																		Čtvrtek
																	</p>
																</td>
															</tr>
														</table>
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: center; font-weight: bold;">
															<tr>
																<td style="border: 1px solid #ddd; color: #000; border-top: none; padding: 7px 5px;">
																	<p style="margin: 0; line-height: 20px;">
																		24. 10.<br />
																		– 28. 12.
																	</p>
																</td>
															</tr>
														</table>
													</td>
													<td class="sk-calendar__td" style="padding: 0 0 30px 40px; color: #444; vertical-align: top;">
														<h3 style="font-size: 18px; line-height: 24px; font-family: Tahoma, Verdana, sans-serif; color: #002776; margin: 0 0 10px;">
															<a href="#" style="text-decoration: none; color: #002776;">
																Nadpis akce Masarykovy univerzity
															</a>
														</h3>
														<p style="margin: 0 0 20px; line-height: 24px;">
															Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat felis dui. Nullam nec varius ipsum. Aenean sit amet magna libero. Integer in lacus id magna.<br />
															<a href="#" style="color: #002776;">
																Podrobnosti o akci &gt;
															</a>
														</p>
													</td>
												</tr>
												<tr class="sk-calendar__row">
													<td class="sk-calendar__td sk-calendar__date" style="width: 70px; padding: 0 0 30px; vertical-align: top;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:12px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: center; font-weight: bold;">
															<tr>
																<td style="background: #f2d45c; color: #000; padding: 0 5px;">
																	<p style="margin: 0; line-height: 25px;">
																		Čtvrtek
																	</p>
																</td>
															</tr>
														</table>
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: center; font-weight: bold;">
															<tr>
																<td style="border: 1px solid #ddd; color: #000; border-top: none; padding: 7px 5px;">
																	<p style="margin: 0; line-height: 20px;">
																		24. 10.<br />
																		– 28. 12.
																	</p>
																</td>
															</tr>
														</table>
													</td>
													<td class="sk-calendar__td" style="padding: 0 0 30px 40px; color: #444; vertical-align: top;">
														<h3 style="font-size: 18px; line-height: 24px; font-family: Tahoma, Verdana, sans-serif; color: #002776; margin: 0 0 10px;">
															<a href="#" style="text-decoration: none; color: #002776;">
																Nadpis akce Masarykovy univerzity
															</a>
														</h3>
														<p style="margin: 0 0 20px; line-height: 24px;">
															Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat felis dui. Nullam nec varius ipsum. Aenean sit amet magna libero. Integer in lacus id magna.<br />
															<a href="#" style="color: #002776;">
																Podrobnosti o akci &gt;
															</a>
														</p>
													</td>
												</tr>
												<tr class="sk-calendar__row">
													<td class="sk-calendar__td sk-calendar__date" style="width: 70px; padding: 0 0 30px; vertical-align: top;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:12px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: center; font-weight: bold;">
															<tr>
																<td style="background: #007b69; color: #fff; padding: 0 5px;">
																	<p style="margin: 0; line-height: 25px;">
																		Čtvrtek
																	</p>
																</td>
															</tr>
														</table>
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: center; font-weight: bold;">
															<tr>
																<td style="border: 1px solid #ddd; color: #000; border-top: none; padding: 7px 5px;">
																	<p style="margin: 0; line-height: 20px;">
																		24. 10.<br />
																		– 28. 12.
																	</p>
																</td>
															</tr>
														</table>
													</td>
													<td class="sk-calendar__td" style="padding: 0 0 30px 40px; color: #444; vertical-align: top;">
														<h3 style="font-size: 18px; line-height: 24px; font-family: Tahoma, Verdana, sans-serif; color: #002776; margin: 0 0 10px;">
															<a href="#" style="text-decoration: none; color: #002776;">
																Nadpis akce Masarykovy univerzity
															</a>
														</h3>
														<p style="margin: 0 0 20px; line-height: 24px;">
															Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat felis dui. Nullam nec varius ipsum. Aenean sit amet magna libero. Integer in lacus id magna.<br />
															<a href="#" style="color: #002776;">
																Podrobnosti o akci &gt;
															</a>
														</p>
													</td>
												</tr>
												<tr class="sk-calendar__row">
													<td class="sk-calendar__td sk-calendar__date" style="width: 70px; padding: 0 0 30px; vertical-align: top;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:12px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: center; font-weight: bold;">
															<tr>
																<td style="background: #009aa6; color: #fff; padding: 0 5px;">
																	<p style="margin: 0; line-height: 25px;">
																		Čtvrtek
																	</p>
																</td>
															</tr>
														</table>
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: center; font-weight: bold;">
															<tr>
																<td style="border: 1px solid #ddd; color: #000; border-top: none; padding: 7px 5px;">
																	<p style="margin: 0; line-height: 20px;">
																		24. 10.<br />
																		– 28. 12.
																	</p>
																</td>
															</tr>
														</table>
													</td>
													<td class="sk-calendar__td" style="padding: 0 0 30px 40px; color: #444; vertical-align: top;">
														<h3 style="font-size: 18px; line-height: 24px; font-family: Tahoma, Verdana, sans-serif; color: #002776; margin: 0 0 10px;">
															<a href="#" style="text-decoration: none; color: #002776;">
																Nadpis akce Masarykovy univerzity
															</a>
														</h3>
														<p style="margin: 0 0 20px; line-height: 24px;">
															Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat felis dui. Nullam nec varius ipsum. Aenean sit amet magna libero. Integer in lacus id magna.<br />
															<a href="#" style="color: #002776;">
																Podrobnosti o akci &gt;
															</a>
														</p>
													</td>
												</tr>
												<tr class="sk-calendar__row">
													<td class="sk-calendar__td sk-calendar__date" style="width: 70px; padding: 0 0 30px; vertical-align: top;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:12px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: center; font-weight: bold;">
															<tr>
																<td style="background: #00a3e2; color: #fff; padding: 0 5px;">
																	<p style="margin: 0; line-height: 25px;">
																		Čtvrtek
																	</p>
																</td>
															</tr>
														</table>
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: center; font-weight: bold;">
															<tr>
																<td style="border: 1px solid #ddd; color: #000; border-top: none; padding: 7px 5px;">
																	<p style="margin: 0; line-height: 20px;">
																		24. 10.<br />
																		– 28. 12.
																	</p>
																</td>
															</tr>
														</table>
													</td>
													<td class="sk-calendar__td" style="padding: 0 0 30px 40px; color: #444; vertical-align: top;">
														<h3 style="font-size: 18px; line-height: 24px; font-family: Tahoma, Verdana, sans-serif; color: #002776; margin: 0 0 10px;">
															<a href="#" style="text-decoration: none; color: #002776;">
																Nadpis akce Masarykovy univerzity
															</a>
														</h3>
														<p style="margin: 0 0 20px; line-height: 24px;">
															Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat felis dui. Nullam nec varius ipsum. Aenean sit amet magna libero. Integer in lacus id magna.<br />
															<a href="#" style="color: #002776;">
																Podrobnosti o akci &gt;
															</a>
														</p>
													</td>
												</tr>
												<tr class="sk-calendar__row">
													<td class="sk-calendar__td sk-calendar__date" style="width: 70px; padding: 0 0 30px; vertical-align: top;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:12px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: center; font-weight: bold;">
															<tr>
																<td style="background: #ffa030; color: #fff; padding: 0 5px;">
																	<p style="margin: 0; line-height: 25px;">
																		Čtvrtek
																	</p>
																</td>
															</tr>
														</table>
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: center; font-weight: bold;">
															<tr>
																<td style="border: 1px solid #ddd; color: #000; border-top: none; padding: 7px 5px;">
																	<p style="margin: 0; line-height: 20px;">
																		24. 10.<br />
																		– 28. 12.
																	</p>
																</td>
															</tr>
														</table>
													</td>
													<td class="sk-calendar__td" style="padding: 0 0 30px 40px; color: #444; vertical-align: top;">
														<h3 style="font-size: 18px; line-height: 24px; font-family: Tahoma, Verdana, sans-serif; color: #002776; margin: 0 0 10px;">
															<a href="#" style="text-decoration: none; color: #002776;">
																Nadpis akce Masarykovy univerzity
															</a>
														</h3>
														<p style="margin: 0 0 20px; line-height: 24px;">
															Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat felis dui. Nullam nec varius ipsum. Aenean sit amet magna libero. Integer in lacus id magna.<br />
															<a href="#" style="color: #002776;">
																Podrobnosti o akci &gt;
															</a>
														</p>
													</td>
												</tr>
												<tr class="sk-calendar__row">
													<td class="sk-calendar__td sk-calendar__date" style="width: 70px; padding: 0 0 30px; vertical-align: top;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:12px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: center; font-weight: bold;">
															<tr>
																<td style="background: #782328; color: #fff; padding: 0 5px;">
																	<p style="margin: 0; line-height: 25px;">
																		Čtvrtek
																	</p>
																</td>
															</tr>
														</table>
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: center; font-weight: bold;">
															<tr>
																<td style="border: 1px solid #ddd; color: #000; border-top: none; padding: 7px 5px;">
																	<p style="margin: 0; line-height: 20px;">
																		24. 10.<br />
																		– 28. 12.
																	</p>
																</td>
															</tr>
														</table>
													</td>
													<td class="sk-calendar__td" style="padding: 0 0 30px 40px; color: #444; vertical-align: top;">
														<h3 style="font-size: 18px; line-height: 24px; font-family: Tahoma, Verdana, sans-serif; color: #002776; margin: 0 0 10px;">
															<a href="#" style="text-decoration: none; color: #002776;">
																Nadpis akce Masarykovy univerzity
															</a>
														</h3>
														<p style="margin: 0 0 20px; line-height: 24px;">
															Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat felis dui. Nullam nec varius ipsum. Aenean sit amet magna libero. Integer in lacus id magna.<br />
															<a href="#" style="color: #002776;">
																Podrobnosti o akci &gt;
															</a>
														</p>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table> <!-- / box calendar -->

								<table class="sk-block-table-all" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr>
										<td class="sk-pl20 sk-pr20" style="padding: 0 0 30px;">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr>
													<td style="border-bottom: 3px solid #ccd4e4;">
														<h2 style="font-size: 24px; line-height: 35px; font-family: Tahoma, Verdana, sans-serif; color: #002776; margin: 0 0 10px;">
															Volné pracovní pozice na MU
														</h2>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table> <!-- / box annot - title -->

								<table class="sk-block-table-all" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr>
										<td class="sk-pl20 sk-pr20" style="padding: 0 0 30px;">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr>
													<td style="vertical-align: top; width: 335px;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
															<tr>
																<td class="sk-pl20 sk-pr20 sk-pt20" style="color: #444; padding: 25px 30px 10px; border: 1px solid #ddd; border-top: 3px solid <?php echo $color; ?>; background: url('./img/career.png') 100% 100% no-repeat;">
																	<p style="text-transform: uppercase; font-size: 12px; line-height: 18px; color: #99a9c8; margin: 0 0 3px;">
																		Fakulta sportovních studií
																	</p>
																	<h2 style="font-size: 24px; line-height: 35px; font-family: Tahoma, Verdana, sans-serif; color: #002776; margin: 0 0 20px;">
																		<a href="#" style="text-decoration: none; color: #002776;">
																			Dlouhý název pracovní pozice na MU
																		</a>
																	</h2>
																	<p style="line-height: 24px; margin: 0 0 20px;">
																		Krátký popis pozice. Na činnost univerzity bude nově dohlížet někdejší soudkyně Ústavního soudu Dagmar Lastovecká, generální ředitel společnosti Siemens Eduard Palíšek.
																	</p>
																	<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
																		<tr>
																			<td style="padding: 0 0 20px;">
																				<div><!--[if mso]>
																				  <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="#" style="height:32px;v-text-anchor:middle;width:140px;" strokecolor="<?php echo $color; ?>" strokeweight="2px" fillcolor="#ffffff">
																				    <w:anchorlock/>
																				    <center style="color:<?php if ($_GET['color']) echo '#000'; else echo $color; ?>;font-family:sans-serif;font-size:12px;text-transform: uppercase;">Více informací</center>
																				  </v:rect>
																				<![endif]--><a href="#" style="border:2px solid <?php echo $color; ?>;color:<?php if ($_GET['color']) echo '#000'; else echo $color; ?>;display:inline-block;font-family:sans-serif;font-size:12px;text-transform: uppercase;line-height:32px;text-align:center;text-decoration:none;width:140px;-webkit-text-size-adjust:none;mso-hide:all;">Více informací</a></div>
																			</td>
																		</tr>
																	</table>
																</td>
															</tr>
														</table>
													</td>
													<td class="sk-pb30" style="width: 30px;">&nbsp;</td>
													<td style="vertical-align: top; width: 335px;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
															<tr>
																<td class="sk-pl20 sk-pr20 sk-pt20" style="color: #444; padding: 25px 30px 10px; border: 1px solid #ddd; border-top: 3px solid <?php echo $color; ?>; background: url('./img/career.png') 100% 100% no-repeat;">
																	<p style="text-transform: uppercase; font-size: 12px; line-height: 18px; color: #99a9c8; margin: 0 0 3px;">
																		Fakulta informatiky
																	</p>
																	<h2 style="font-size: 24px; line-height: 35px; font-family: Tahoma, Verdana, sans-serif; color: #002776; margin: 0 0 20px;">
																		<a href="#" style="text-decoration: none; color: #002776;">
																			Asistent děkana
																		</a>
																	</h2>
																	<p style="line-height: 24px; margin: 0 0 20px;">
																		Krátký popis pozice. Na činnost univerzity bude nově dohlížet někdejší soudkyně Ústavního soudu Dagmar Lastovecká, generální ředitel společnosti Siemens Eduard Palíšek.
																	</p>
																	<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
																		<tr>
																			<td style="padding: 0 0 20px;">
																				<div><!--[if mso]>
																				  <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="#" style="height:32px;v-text-anchor:middle;width:140px;" strokecolor="<?php echo $color; ?>" strokeweight="2px" fillcolor="#ffffff">
																				    <w:anchorlock/>
																				    <center style="color:<?php if ($_GET['color']) echo '#000'; else echo $color; ?>;font-family:sans-serif;font-size:12px;text-transform: uppercase;">Více informací</center>
																				  </v:rect>
																				<![endif]--><a href="#" style="border:2px solid <?php echo $color; ?>;color:<?php if ($_GET['color']) echo '#000'; else echo $color; ?>;display:inline-block;font-family:sans-serif;font-size:12px;text-transform: uppercase;line-height:32px;text-align:center;text-decoration:none;width:140px;-webkit-text-size-adjust:none;mso-hide:all;">Více informací</a></div>
																			</td>
																		</tr>
																	</table>
																</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table> <!-- / box blue - type 7 -->

								<table class="sk-block-table-all" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr>
										<td class="sk-pb40 sk-pl20 sk-pr20" style="padding: 0 0 60px;">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr>
													<td style="vertical-align: top; width: 335px;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
															<tr>
																<td class="sk-pl20 sk-pr20 sk-pt20" style="color: #444; padding: 25px 30px 10px; border: 1px solid #ddd; border-top: 3px solid <?php echo $color; ?>; background: url('./img/career.png') 100% 100% no-repeat;">
																	<p style="text-transform: uppercase; font-size: 12px; line-height: 18px; color: #99a9c8; margin: 0 0 3px;">
																		Fakulta informatiky
																	</p>
																	<h2 style="font-size: 24px; line-height: 35px; font-family: Tahoma, Verdana, sans-serif; color: #002776; margin: 0 0 20px;">
																		<a href="#" style="text-decoration: none; color: #002776;">
																			Asistent děkana
																		</a>
																	</h2>
																	<p style="line-height: 24px; margin: 0 0 20px;">
																		Krátký popis pozice. Na činnost univerzity bude nově dohlížet někdejší soudkyně Ústavního soudu Dagmar Lastovecká, generální ředitel společnosti Siemens Eduard Palíšek.
																	</p>
																	<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
																		<tr>
																			<td style="padding: 0 0 20px;">
																				<div><!--[if mso]>
																				  <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="#" style="height:32px;v-text-anchor:middle;width:140px;" strokecolor="<?php echo $color; ?>" strokeweight="2px" fillcolor="#ffffff">
																				    <w:anchorlock/>
																				    <center style="color:<?php if ($_GET['color']) echo '#000'; else echo $color; ?>;font-family:sans-serif;font-size:12px;text-transform: uppercase;">Více informací</center>
																				  </v:rect>
																				<![endif]--><a href="#" style="border:2px solid <?php echo $color; ?>;color:<?php if ($_GET['color']) echo '#000'; else echo $color; ?>;display:inline-block;font-family:sans-serif;font-size:12px;text-transform: uppercase;line-height:32px;text-align:center;text-decoration:none;width:140px;-webkit-text-size-adjust:none;mso-hide:all;">Více informací</a></div>
																			</td>
																		</tr>
																	</table>
																</td>
															</tr>
														</table>
													</td>
													<td class="sk-pb30" style="width: 30px;">&nbsp;</td>
													<td style="vertical-align: top; width: 335px;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
															<tr>
																<td class="sk-pl20 sk-pr20 sk-pt20" style="color: #444; padding: 25px 30px 10px; border: 1px solid #ddd; border-top: 3px solid <?php echo $color; ?>; background: url('./img/career.png') 100% 100% no-repeat;">
																	<p style="text-transform: uppercase; font-size: 12px; line-height: 18px; color: #99a9c8; margin: 0 0 3px;">
																		Fakulta sportovních studií
																	</p>
																	<h2 style="font-size: 24px; line-height: 35px; font-family: Tahoma, Verdana, sans-serif; color: #002776; margin: 0 0 20px;">
																		<a href="#" style="text-decoration: none; color: #002776;">
																			Dlouhý název pracovní pozice na MU
																		</a>
																	</h2>
																	<p style="line-height: 24px; margin: 0 0 20px;">
																		Krátký popis pozice. Na činnost univerzity bude nově dohlížet někdejší soudkyně Ústavního soudu Dagmar Lastovecká, generální ředitel společnosti Siemens Eduard Palíšek.
																	</p>
																	<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
																		<tr>
																			<td style="padding: 0 0 20px;">
																				<div><!--[if mso]>
																				  <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="#" style="height:32px;v-text-anchor:middle;width:140px;" strokecolor="<?php echo $color; ?>" strokeweight="2px" fillcolor="#ffffff">
																				    <w:anchorlock/>
																				    <center style="color:<?php if ($_GET['color']) echo '#000'; else echo $color; ?>;font-family:sans-serif;font-size:12px;text-transform: uppercase;">Více informací</center>
																				  </v:rect>
																				<![endif]--><a href="#" style="border:2px solid <?php echo $color; ?>;color:<?php if ($_GET['color']) echo '#000'; else echo $color; ?>;display:inline-block;font-family:sans-serif;font-size:12px;text-transform: uppercase;line-height:32px;text-align:center;text-decoration:none;width:140px;-webkit-text-size-adjust:none;mso-hide:all;">Více informací</a></div>
																			</td>
																		</tr>
																	</table>
																</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table> <!-- / box blue - type 7 -->

								<table class="sk-block-table" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: center; border-top: 1px solid #ddd;">
									<tr class="sk-block">
										<td class="sk-block" align="center" style="padding: 0 0 60px;">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: center; border-bottom: 1px solid #ddd;">
												<tr>
													<td align="center" style="padding: 25px 0;">
														<table border="0" cellspacing="0" cellpadding="0" style="margin:0 auto; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; text-align: center;">
															<tr>
																<td class="sk-pl10 sk-pr10" style="padding: 0 15px;">
																	<a href="mailto:newsletter@muni.cz" style="color: #002776; text-decoration: none;">
																		<img src="./img/ico-email.png" alt="E-mail" width="15" height="13" style="vertical-align: middle; border: none;" />&nbsp;
																		<span style="text-decoration: underline;">newsletter@muni.cz</span>
																	</a>
																</td>
																<td class="sk-pl10 sk-pr10" style="padding: 0 15px;">
																	<a href="mailto:newsletter@muni.cz" style="color: #002776; text-decoration: none;">
																		<img src="./img/ico-book.png" alt="Web" width="14" height="14" style="vertical-align: middle; border: none;" />&nbsp;
																		<span style="text-decoration: underline;">online.muni.cz</span>
																	</a>
																</td>
															</tr>
														</table>
													</td>
												</tr>
											</table> <!-- / box links -->

											<table class="sk-block-table-all" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: center; border-bottom: 1px solid #ddd;">
												<tr>
													<td class="sk-pl20 sk-pr20" align="center" style="padding: 25px 0 5px;">
														<table width="500" border="0" cellspacing="0" cellpadding="0" style="margin:0 auto; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width: 500px; text-align: left;">
															<tr>
																<td class="sk-pb10" style="vertical-align: top; width: 150px;">
																	<p style="text-transform: uppercase; font-size: 14px; line-height: 24px; margin: 0 0 10px; font-family: Tahoma, Verdana, sans-serif; color: #000; font-weight: bold;">
																		Kategorie
																	</p>
																	<p style="line-height: 24px; margin: 0 0 20px;">
																		<a href="#" style="color: #002776;">Kalendář akcí</a><br />
																		<a href="#" style="color: #002776;">Články</a><br />
																		<a href="#" style="color: #002776;">Pro média</a><br />
																		<a href="#" style="color: #002776;">Harmonogram</a>
																	</p>
																</td>
																<td class="sk-hide" style="width: 25px;">&nbsp;</td>
																<td class="sk-pb10" style="vertical-align: top; width: 150px;">
																	<p style="text-transform: uppercase; font-size: 14px; line-height: 24px; margin: 0 0 10px; font-family: Tahoma, Verdana, sans-serif; color: #000; font-weight: bold;">
																		Další kategorie
																	</p>
																	<p style="line-height: 24px; margin: 0 0 20px;">
																		<a href="#" style="color: #002776;">Kalendář akcí</a><br />
																		<a href="#" style="color: #002776;">Články</a><br />
																		<a href="#" style="color: #002776;">Pro média</a><br />
																		<a href="#" style="color: #002776;">Harmonogram</a>
																	</p>
																</td>
																<td class="sk-hide" style="width: 25px;">&nbsp;</td>
																<td style="vertical-align: top; width: 150px;">
																	<p style="text-transform: uppercase; font-size: 14px; line-height: 24px; margin: 0 0 10px; font-family: Tahoma, Verdana, sans-serif; color: #000; font-weight: bold;">
																		Třetí kategorie
																	</p>
																	<p style="line-height: 24px; margin: 0 0 20px;">
																		<a href="#" style="color: #002776;">Kalendář akcí</a><br />
																		<a href="#" style="color: #002776;">Články</a><br />
																		<a href="#" style="color: #002776;">Pro média</a><br />
																		<a href="#" style="color: #002776;">Harmonogram</a>
																	</p>
																</td>
															</tr>
														</table>
													</td>
												</tr>
											</table> <!-- / box category -->

											<table width="279" border="0" cellspacing="0" cellpadding="0" style="margin:0 auto; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width: 279px; text-align: center;">
												<tr>
													<td style="padding: 30px 0;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: center;">
															<tr>
																<td style="width: 33.333%; background: #395794;">
																	<div><!--[if mso]>
																	  <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="#" style="height:50px;v-text-anchor:middle;width:93px;" strokecolor="#395794" strokeweight="0px" fillcolor="#395794">
																	    <w:anchorlock/>
																	    <center style="color:#fff;font-family:sans-serif;font-size:12px;text-transform: uppercase;"><img src="./img/facebook.png" alt="Facebook" width="17" height="50" style="vertical-align: top; border: none;" /></center>
																	  </v:rect>
																	<![endif]--><a href="#" style="color:#fff;display:inline-block;font-family:sans-serif;font-size:12px;text-transform: uppercase;line-height:50px;text-align:center;text-decoration:none;width:93px;-webkit-text-size-adjust:none;mso-hide:all;"><img src="./img/facebook.png" alt="Facebook" width="17" height="50" style="vertical-align: top; border: none;" /></a></div>
																</td>
																<td style="width: 33.333%; background: #27a8df;">
																	<div><!--[if mso]>
																	  <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="#" style="height:50px;v-text-anchor:middle;width:93px;" strokecolor="#27a8df" strokeweight="0px" fillcolor="#27a8df">
																	    <w:anchorlock/>
																	    <center style="color:#fff;font-family:sans-serif;font-size:12px;text-transform: uppercase;"><img src="./img/twitter.png" alt="Twitter" width="28" height="50" style="vertical-align: top; border: none;" /></center>
																	  </v:rect>
																	<![endif]--><a href="#" style="color:#fff;display:inline-block;font-family:sans-serif;font-size:12px;text-transform: uppercase;line-height:50px;text-align:center;text-decoration:none;width:93px;-webkit-text-size-adjust:none;mso-hide:all;"><img src="./img/twitter.png" alt="Twitter" width="28" height="50" style="vertical-align: top; border: none;" /></a></div>
																</td>
																<td style="width: 33.333%; background: #0177b4;">
																	<div><!--[if mso]>
																	  <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="#" style="height:50px;v-text-anchor:middle;width:93px;" strokecolor="#0177b4" strokeweight="0px" fillcolor="#0177b4">
																	    <w:anchorlock/>
																	    <center style="color:#fff;font-family:sans-serif;font-size:12px;text-transform: uppercase;"><img src="./img/linkedin.png" alt="LinkedIn" width="26" height="50" style="vertical-align: top; border: none;" /></center>
																	  </v:rect>
																	<![endif]--><a href="#" style="color:#fff;display:inline-block;font-family:sans-serif;font-size:12px;text-transform: uppercase;line-height:50px;text-align:center;text-decoration:none;width:93px;-webkit-text-size-adjust:none;mso-hide:all;"><img src="./img/linkedin.png" alt="LinkedIn" width="26" height="50" style="vertical-align: top; border: none;" /></a></div>
																</td>
															</tr>
														</table>
													</td>
												</tr>
											</table> <!-- / box social -->

											<p style="line-height: 1; margin: 0 0 15px;">
												<img src="./img/logo-footer.png" alt="" width="70" height="70" style="vertical-align: middle; border: none;" />
											</p>
											<p style="color: #99a9c8; font-size: 12px; line-height: 16px; margin: 0;">
												&copy; 2016<br />
												Masarykova univerzita Brno
											</p>
										</td>
									</tr>
								</table>

							</td>
						</tr>
					</table> <!-- / row main -->

					<img src="./img/spacer.png" width="700" height="1" class="nl-hide" style="border: none; vertical-align: top; min-width: 700px; display: block;" />
				</td>
			</tr>
		</table><!-- / wrap -->

	</body>
</html>
