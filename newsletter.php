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
			if (isset($_GET['color'])) {
				if ($_GET['color'] == 'law'){
					$color = '#9100dc';
				}
				if ($_GET['color'] == 'med'){
					$color = '#f01928';
				}
				if ($_GET['color'] == 'sci'){
					$color = '#01af40';
				}
				if ($_GET['color'] == 'fi'){
					$color = '#f2d45c';
				}
				if ($_GET['color'] == 'fss'){
					$color = '#008c78';
				}
				if ($_GET['color'] == 'fsps'){
					$color = '#009aa6';
				}
				if ($_GET['color'] == 'phil'){
					$color = '#4bc8ff';
				}
				if ($_GET['color'] == 'ped'){
					$color = '#ffa02f';
				}
				if ($_GET['color'] == 'econ'){
					$color = '#b9006e';
				}

			}
			else {
				$color = '#0000DC';
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

		<table class="sk-block-table" width="100%" border="0" cellpadding="0" cellspacing="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: center; background: #FAFAFA; border-top: 6px solid <?php echo $color; ?>;">
			<tr class="sk-block">
				<td class="sk-block" align="center">

					<table class="sk-block-table" width="700" border="0" cellspacing="0" cellpadding="0" style="margin:0 auto; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:700px; text-align: left;">
						<tr class="sk-block">
							<td class="sk-block">
								<table class="sk-block-table" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:12px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr class="sk-block">
										<td class="sk-block sk-pl20 sk-pr20 sk-pb0" style="vertical-align: top; padding: 15px 0 50px;">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:12px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr>
													<td style="width: 100px;">
														<p style="margin: 0; line-height: 1;">
															<a href="#" style="text-decoration: none;">
																<img src="./img/logo-muni.png" alt="Masarykova univerzita" width="100" height="29" style="vertical-align: top; border: none;">
															</a>
														</p>
													</td>
													<td style="color: #0000DC; padding: 0 0 0 20px;;">
														<p style="margin: 0; font-size: 15px; line-height: 17px;">
															Masarykova<br> univerzita
														</p>
													</td>
												</tr>
											</table>
										</td>
										<td class="sk-block sk-pl20 sk-pr20 sk-pb20 sk-tal" style="vertical-align: top; text-align: right; color: #0000DC; padding: 15px 0 50px;">
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

								<table class="sk-block-table-all" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr>
										<td style="padding: 50px 0 60px;">
											<table dir="rtl" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left; background: #0000DC;">
												<tr>
													<td dir="ltr" style="vertical-align: top; width: 50%;">
														<a href="#" style="text-decoration: none;">
															<img class="sk-full" src="./img/illust-box-blue-type1.jpg" alt="" width="350" height="246" style="vertical-align: top; border: none;">
														</a>
													</td>
													<td dir="ltr" style="vertical-align: top;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
															<tr>
																<td class="sk-pl20 sk-pr20 sk-pt20" style="color: #fff; padding: 25px 30px 10px;">
																	<h2 style="font-size: 24px; line-height: 32px; color: #fff; margin: 0 0 20px;">
																		<a href="#" style="text-decoration: none; color: #fff;">
																			Masarykova univerzita kvůli novele zákona o VŠ upraví statut
																		</a>
																	</h2>
																	<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
																		<tr>
																			<td style="padding: 0 0 20px;">
																				<div><!--[if mso]>
																				<v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://" style="height:44px;v-text-anchor:middle;width:160px;" stroke="f" fillcolor="#ffffff">
																					<w:anchorlock/>
																					<center>
																				<![endif]-->
																					<a href="http://"
																				style="background-color:#ffffff;color:#0000DC;display:inline-block;font-family:Arial, Helvetica, sans-serif;font-size:16px;font-weight:bold;line-height:44px;text-align:center;text-decoration:none;width:160px;-webkit-text-size-adjust:none;">Číst dále</a>
																				<!--[if mso]>
																					</center>
																				</v:rect>
																				<![endif]--></div>
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

								<table class="sk-block-table-all" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr>
										<td style="padding: 0 0 60px;">
											<table dir="rtl" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left; background: #0000DC;">
												<tr>
													<td dir="ltr" style="vertical-align: top; width: 50%;">
														<a href="#" style="text-decoration: none;">
															<img class="sk-full" src="./img/illust-box-blue-type2.jpg" alt="" width="350" height="447" style="vertical-align: top; border: none;">
														</a>
													</td>
													<td dir="ltr" style="vertical-align: top;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
															<tr>
																<td class="sk-pl20 sk-pr20 sk-pt20" style="color: #fff; padding: 25px 30px 10px;">
																	<h2 class="sk-h2" style="font-size: 30px; line-height: 34px; color: #fff; margin: 0 0 25px;">
																		<a href="#" style="text-decoration: none; color: #fff;">
																			Masarykova univerzita kvůli novele zákona o VŠ upraví statut
																		</a>
																	</h2>
																	<p style="line-height: 24px; margin: 0 0 20px;">
																		Od 1. září 2016 začne platit novela vysokoškolského zákona. Novému znění zákona je nutné přizpůsobit i základní vnitřní normu  – Statut Masarykovy univerzity.  Nově vznikne například rada pro vnitřní hodnocení, upravovat se
																	</p>
																	<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
																		<tr>
																			<td style="padding: 0 0 20px;">
																				<div><!--[if mso]>
																				<v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://" style="height:44px;v-text-anchor:middle;width:160px;" stroke="f" fillcolor="#ffffff">
																					<w:anchorlock/>
																					<center>
																				<![endif]-->
																					<a href="http://"
																				style="background-color:#ffffff;color:#0000DC;display:inline-block;font-family:Arial, Helvetica, sans-serif;font-size:16px;font-weight:bold;line-height:44px;text-align:center;text-decoration:none;width:160px;-webkit-text-size-adjust:none;">Číst dále</a>
																				<!--[if mso]>
																					</center>
																				</v:rect>
																				<![endif]--></div>
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

								<table class="sk-block-table-all" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr>
										<td style="padding: 0 0 60px;">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left; background: #0000DC;">
												<tr>
													<td style="vertical-align: top;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
															<tr>
																<td class="sk-pl20 sk-pr20 sk-pt20" style="color: #fff; padding: 25px 30px 10px;">
																	<h2 class="sk-h2" style="font-size: 30px; line-height: 34px; color: #fff; margin: 0 0 25px;">
																		<a href="#" style="text-decoration: none; color: #fff;">
																			Masarykova univerzita kvůli novele zákona o VŠ upraví statut
																		</a>
																	</h2>
																	<p style="line-height: 24px; margin: 0 0 20px;">
																		Od 1. září 2016 začne platit novela vysokoškolského zákona. Novému znění zákona je nutné přizpůsobit i základní vnitřní normu  – Statut Masarykovy univerzity.  Nově vznikne například rada pro vnitřní hodnocení, upravovat se
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

								<table class="sk-block-table-all" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr>
										<td class="sk-pl20 sk-pr20" style="padding: 0 0 60px;">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr>
													<td style="vertical-align: top;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
															<tr>
																<td class="sk-pl20 sk-pr20 sk-pt20" style="color: #000; padding: 25px 30px 10px; border: 2px solid #eeeeee; background: #fff;">
																	<p style="font-size: 14px; line-height: 20px; margin: 0 0 5px; font-weight: bold;">
																		Vzdělávání
																	</p>
																	<h2 class="sk-h2" style="font-size: 30px; line-height: 34px; color: #0000DC; margin: 0 0 25px;">
																		<a href="#" style="text-decoration: none; color: #0000DC;">
																			Dlouhý nadpis hlavního článku na začátku newsletteru
																		</a>
																	</h2>
																	<p style="line-height: 24px; margin: 0 0 20px;">
																		Od 1. září 2016 začne platit novela vysokoškolského zákona. Novému znění zákona je nutné přizpůsobit i základní vnitřní normu  – Statut Masarykovy univerzity.  Nově vznikne například rada pro vnitřní hodnocení, upravovat se bude i poplatková agenda. Nové znění Statutu bude schvalovat Akademický senát MU dne XY. Aktuální znění připravovaného návrhu je <a href="#" style="color:#0000DC;">k dispozici na webu</a>.
																	</p>
																	<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
																		<tr>
																			<td style="padding: 0 0 20px;">
																				<p style="font-size: 0px; line-height: 2px; height: 2px; overflow: hidden; margin: 30px 0;">
																					<img src="./img/line.png" alt="" width="37" height="2" style="border: none; vertical-align: middle;">
																				</p>
																				<div><!--[if mso]>
																				<v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://" style="height:40px;v-text-anchor:middle;width:160px;" strokecolor="#0000DC" strokewidth="2" fillcolor="#ffffff">
																					<w:anchorlock/>
																					<center style="color:#0000DC;font-family:Arial, Helvetica, sans-serif;font-size:16px;font-weight:bold;">Celý článek</center>
																				</v:rect>
																				<![endif]--><a href="http://"
																				style="background-color:#ffffff;border:2px solid #0000DC;color:#0000DC;display:inline-block;font-family:Arial, Helvetica, sans-serif;font-size:16px;font-weight:bold;line-height:40px;text-align:center;text-decoration:none;width:160px;-webkit-text-size-adjust:none;mso-hide:all;">Celý článek</a></div>
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

								<table class="sk-block-table-all" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr>
										<td class="sk-pl20 sk-pr20" style="padding: 0 0 60px;">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr>
													<td style="vertical-align: top;">
														<p style="margin: 0; text-align: center;">
															<a href="#" style="text-decoration: none;">
																<img class="sk-full" src="./img/illust-box-white-type2.jpg" alt="" width="700" height="394" style="vertical-align: top; border: none;">
															</a>
														</p>
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
															<tr>
																<td class="sk-pl20 sk-pr20 sk-pt20" style="color: #000; padding: 25px 30px 10px; border: 2px solid #eeeeee; border-top: 0px; background: #fff;">
																	<p style="font-size: 14px; line-height: 20px; margin: 0 0 5px; font-weight: bold;">
																		Vzdělávání
																	</p>
																	<h2 class="sk-h2" style="font-size: 30px; line-height: 34px; color: #0000DC; margin: 0 0 25px;">
																		<a href="#" style="text-decoration: none; color: #0000DC;">
																			Dlouhý nadpis hlavního článku na začátku newsletteru
																		</a>
																	</h2>
																	<p style="line-height: 24px; margin: 0 0 20px;">
																		Od 1. září 2016 začne platit novela vysokoškolského zákona. Novému znění zákona je nutné přizpůsobit i základní vnitřní normu  – Statut Masarykovy univerzity.  Nově vznikne například rada pro vnitřní hodnocení, upravovat se bude i poplatková agenda. Nové znění Statutu bude schvalovat Akademický senát MU dne XY. Aktuální znění připravovaného návrhu je <a href="#" style="color:#0000DC;">k dispozici na webu</a>.
																	</p>
																	<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
																		<tr>
																			<td style="padding: 0 0 20px;">
																				<p style="font-size: 0px; line-height: 2px; height: 2px; overflow: hidden; margin: 30px 0;">
																					<img src="./img/line.png" alt="" width="37" height="2" style="border: none; vertical-align: middle;">
																				</p>
																				<div><!--[if mso]>
																				<v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://" style="height:40px;v-text-anchor:middle;width:160px;" strokecolor="#0000DC" strokewidth="2" fillcolor="#ffffff">
																					<w:anchorlock/>
																					<center style="color:#0000DC;font-family:Arial, Helvetica, sans-serif;font-size:16px;font-weight:bold;">Celý článek</center>
																				</v:rect>
																				<![endif]--><a href="http://"
																				style="background-color:#ffffff;border:2px solid #0000DC;color:#0000DC;display:inline-block;font-family:Arial, Helvetica, sans-serif;font-size:16px;font-weight:bold;line-height:40px;text-align:center;text-decoration:none;width:160px;-webkit-text-size-adjust:none;mso-hide:all;">Celý článek</a></div>
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

								<table class="sk-block-table-all" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr>
										<td class="sk-pl20 sk-pr20" style="padding: 0 0 60px;">
											<table dir="rtl" class="sk-bdt0" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr>
													<td dir="ltr" style="vertical-align: top; border: 0px; width: 50%;">
														<a href="#" style="text-decoration: none;">
															<img class="sk-full" src="./img/illust-box-white-type3.jpg" alt="" width="350" height="480" style="vertical-align: top; border: none;">
														</a>
													</td>
													<td dir="ltr" class="sk-bdr1 sk-bdt3" style="vertical-align: top; border: 0px; border: 2px solid #eeeeee; border-right: 0px; background: #fff;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
															<tr>
																<td class="sk-pl20 sk-pr20 sk-pt20" style="color: #000; padding: 25px 30px 10px;">
																	<p style="font-size: 14px; line-height: 20px; margin: 0 0 5px; font-weight: bold;">
																		Vzdělávání
																	</p>
																	<h2 class="sk-h2" style="font-size: 30px; line-height: 34px; color: #0000DC; margin: 0 0 25px;">
																		<a href="#" style="text-decoration: none; color: #0000DC;">
																			Dlouhý nadpis hlavního článku na začátku newsletteru
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
								</table> <!-- / box white - type 3 -->

								<table class="sk-block-table-all" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr>
										<td class="sk-pl20 sk-pr20" style="padding: 0 0 60px;">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr>
													<td style="vertical-align: top;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
															<tr>
																<td class="sk-pl20 sk-pr20 sk-pt20" style="color: #000; padding: 25px 30px 10px; border: 2px solid #eeeeee; background: #fff;">
																	<p style="font-size: 14px; line-height: 20px; margin: 0 0 5px; font-weight: bold;">
																		Vzdělávání
																	</p>
																	<h2 style="font-size: 24px; line-height: 32px; color: #0000DC; margin: 0 0 20px;">
																		<a href="#" style="text-decoration: none; color: #0000DC;">
																			V Univerzitním kině Scala bude obchod s reklamními předměty
																		</a>
																	</h2>
																	<p style="line-height: 24px; margin: 0 0 20px;">
																		Od 1. září 2016 začne platit novela vysokoškolského zákona. Novému znění zákona je nutné přizpůsobit i základní vnitřní normu  – Statut Masarykovy univerzity.  Nově vznikne například rada pro vnitřní hodnocení, upravovat se bude i poplatková agenda. Nové znění Statutu bude schvalovat Akademický senát MU dne XY. Aktuální znění připravovaného návrhu je <a href="#" style="color:#0000DC;">k dispozici na webu</a>.
																	</p>
																	<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
																		<tr>
																			<td style="padding: 0 0 20px;">
																				<p style="font-size: 0px; line-height: 2px; height: 2px; overflow: hidden; margin: 30px 0;">
																					<img src="./img/line.png" alt="" width="37" height="2" style="border: none; vertical-align: middle;">
																				</p>
																				<div><!--[if mso]>
																				<v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://" style="height:40px;v-text-anchor:middle;width:160px;" strokecolor="#0000DC" strokewidth="2" fillcolor="#ffffff">
																					<w:anchorlock/>
																					<center style="color:#0000DC;font-family:Arial, Helvetica, sans-serif;font-size:16px;font-weight:bold;">Celý článek</center>
																				</v:rect>
																				<![endif]--><a href="http://"
																				style="background-color:#ffffff;border:2px solid #0000DC;color:#0000DC;display:inline-block;font-family:Arial, Helvetica, sans-serif;font-size:16px;font-weight:bold;line-height:40px;text-align:center;text-decoration:none;width:160px;-webkit-text-size-adjust:none;mso-hide:all;">Celý článek</a></div>
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

								<table class="sk-block-table-all" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr>
										<td class="sk-pl20 sk-pr20" style="padding: 0 0 60px;">
											<table class="sk-bdt0" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr>
													<td style="vertical-align: top; border: 0px; width: 50%;">
														<a href="#" style="text-decoration: none;">
															<img class="sk-full" src="./img/illust-box-white-type5.jpg" alt="" width="350" height="352" style="vertical-align: top; border: none;">
														</a>
													</td>
													<td class="sk-bdl1 sk-bdt3" style="vertical-align: top; border: 0px; border: 2px solid #eeeeee; border-left: 0px; background: #fff;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
															<tr>
																<td class="sk-pl20 sk-pr20 sk-pt20" style="color: #000; padding: 25px 30px 10px;">
																	<p style="font-size: 14px; line-height: 20px; margin: 0 0 5px; font-weight: bold;">
																		Vzdělávání
																	</p>
																	<h2 style="font-size: 24px; line-height: 32px; color: #0000DC; margin: 0 0 20px;">
																		<a href="#" style="text-decoration: none; color: #0000DC;">
																			V Univerzitním kině Scala bude obchod s reklamními předměty
																		</a>
																	</h2>
																	<p style="line-height: 24px; margin: 0 0 20px;">
																		Vedení univerzity schválilo záměr vytvořit v Univerzitním kině Scala obchod s propagačními.
																	</p>
																	<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
																		<tr>
																			<td style="padding: 0 0 20px;">
																				<div><!--[if mso]>
																				<v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://" style="height:40px;v-text-anchor:middle;width:160px;" strokecolor="#0000DC" strokewidth="2" fillcolor="#ffffff">
																					<w:anchorlock/>
																					<center style="color:#0000DC;font-family:Arial, Helvetica, sans-serif;font-size:16px;font-weight:bold;">Celý článek</center>
																				</v:rect>
																				<![endif]--><a href="http://"
																				style="background-color:#ffffff;border:2px solid #0000DC;color:#0000DC;display:inline-block;font-family:Arial, Helvetica, sans-serif;font-size:16px;font-weight:bold;line-height:40px;text-align:center;text-decoration:none;width:160px;-webkit-text-size-adjust:none;mso-hide:all;">Celý článek</a></div>
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
										<td class="sk-pl20 sk-pr20">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr>
													<td style="vertical-align: top; width: 320px; padding: 0 0 40px;">
														<p style="margin: 0 0 20px; text-align: center;">
															<a href="#" style="text-decoration: none;">
																<img class="sk-full" src="./img/illust-box-white-type6.jpg" alt="" width="320" height="181" style="vertical-align: top; border: none;">
															</a>
														</p>
														<p style="font-size: 14px; line-height: 20px; margin: 0 0 5px; font-weight: bold;">
															19. 11. 2018
														</p>
														<h2 style="font-size: 24px; line-height: 32px; color: #0000DC; margin: 0 0 20px;">
															<a href="#" style="text-decoration: none; color: #0000DC;">
																S povinnou registrací smluv pomůže nový systém v úřadovně IS MU
															</a>
														</h2>
														<p style="line-height: 22px; margin: 0 0 20px;">
															Od 1. září 2016 začne platit novela vysokoškolského zákona. Novému znění zákona je nutné přizpůsobit i základní vnitřní normu  – Statut Masarykovy univerzity.  Nově vznikne například rada pro vnitřní hodnocení, upravovat se bude i poplatková agenda. Nové znění Statutu bude schvalovat Akademický senát MU dne XY. Aktuální znění připravovaného návrhu je k dispozici na webu.
														</p>
													</td>
													<td class="sk-hide" style="width: 60px; padding: 0 0 40px;">&nbsp;</td>
													<td style="vertical-align: top; width: 320px; padding: 0 0 40px;">
														<p style="margin: 0 0 20px; text-align: center;">
															<a href="#" style="text-decoration: none;">
																<img class="sk-full" src="./img/illust-box-white-type6.jpg" alt="" width="320" height="181" style="vertical-align: top; border: none;">
															</a>
														</p>
														<p style="font-size: 14px; line-height: 20px; margin: 0 0 5px; font-weight: bold;">
															19. 11. 2018
														</p>
														<h2 style="font-size: 24px; line-height: 32px; color: #0000DC; margin: 0 0 20px;">
															<a href="#" style="text-decoration: none; color: #0000DC;">
																V Univerzitním kině Scala bude obchod s reklamními předměty
															</a>
														</h2>
														<p style="line-height: 22px; margin: 0 0 20px;">
															Vedení univerzity schválilo záměr vytvořit v Univerzitním kině Scala obchod s propagačními předměty Masarykovy univerzity. Otvírat se bude na začátku akademického roku.
														</p>
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
															<tr>
																<td style="padding: 0 0 20px;">
																	<p style="font-size: 0px; line-height: 2px; height: 2px; overflow: hidden; margin: 30px 0;">
																		<img src="./img/line.png" alt="" width="37" height="2" style="border: none; vertical-align: middle;">
																	</p>
																	<div><!--[if mso]>
																	<v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://" style="height:40px;v-text-anchor:middle;width:160px;" strokecolor="#0000DC" strokewidth="2" fillcolor="#FAFAFA">
																		<w:anchorlock/>
																		<center style="color:#0000DC;font-family:Arial, Helvetica, sans-serif;font-size:16px;font-weight:bold;">Celý článek</center>
																	</v:rect>
																	<![endif]--><a href="http://"
																	style="background-color:#FAFAFA;border:2px solid #0000DC;color:#0000DC;display:inline-block;font-family:Arial, Helvetica, sans-serif;font-size:16px;font-weight:bold;line-height:40px;text-align:center;text-decoration:none;width:160px;-webkit-text-size-adjust:none;mso-hide:all;">Celý článek</a></div>
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
										<td class="sk-pl20 sk-pr20">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr>
													<td style="vertical-align: top; width: 320px; padding: 0 0 40px;">
														<p style="font-size: 14px; line-height: 20px; margin: 0 0 5px; font-weight: bold;">
															19. 11. 2018
														</p>
														<h2 style="font-size: 24px; line-height: 32px; color: #0000DC; margin: 0 0 20px;">
															<a href="#" style="text-decoration: none; color: #0000DC;">
																S povinnou registrací smluv pomůže nový systém v úřadovně IS MU
															</a>
														</h2>
														<p style="line-height: 22px; margin: 0 0 20px;">
															Od 1. září 2016 začne platit novela vysokoškolského zákona. Novému znění zákona je nutné přizpůsobit i základní vnitřní normu  – Statut Masarykovy univerzity.  Nově vznikne například rada pro vnitřní hodnocení, upravovat se bude i poplatková agenda. Nové znění Statutu bude schvalovat Akademický senát MU dne XY. Aktuální znění připravovaného návrhu je k dispozici na webu.
														</p>
													</td>
													<td class="sk-hide" style="width: 60px; padding: 0 0 40px;">&nbsp;</td>
													<td style="vertical-align: top; width: 320px; padding: 0 0 40px;">
														<p style="font-size: 14px; line-height: 20px; margin: 0 0 5px; font-weight: bold;">
															19. 11. 2018
														</p>
														<h2 style="font-size: 24px; line-height: 32px; color: #0000DC; margin: 0 0 20px;">
															<a href="#" style="text-decoration: none; color: #0000DC;">
																V Univerzitním kině Scala bude obchod s reklamními předměty
															</a>
														</h2>
														<p style="line-height: 22px; margin: 0 0 20px;">
															Vedení univerzity schválilo záměr vytvořit v Univerzitním kině Scala obchod s propagačními předměty Masarykovy univerzity. Otvírat se bude na začátku akademického roku.
														</p>
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
															<tr>
																<td style="padding: 0 0 20px;">
																	<p style="font-size: 0px; line-height: 2px; height: 2px; overflow: hidden; margin: 30px 0;">
																		<img src="./img/line.png" alt="" width="37" height="2" style="border: none; vertical-align: middle;">
																	</p>
																	<div><!--[if mso]>
																	<v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://" style="height:40px;v-text-anchor:middle;width:160px;" strokecolor="#0000DC" strokewidth="2" fillcolor="#FAFAFA">
																		<w:anchorlock/>
																		<center style="color:#0000DC;font-family:Arial, Helvetica, sans-serif;font-size:16px;font-weight:bold;">Celý článek</center>
																	</v:rect>
																	<![endif]--><a href="http://"
																	style="background-color:#FAFAFA;border:2px solid #0000DC;color:#0000DC;display:inline-block;font-family:Arial, Helvetica, sans-serif;font-size:16px;font-weight:bold;line-height:40px;text-align:center;text-decoration:none;width:160px;-webkit-text-size-adjust:none;mso-hide:all;">Celý článek</a></div>
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
													<td style="border-bottom: 2px solid #0000DC;">
														<h2 style="font-size: 24px; line-height: 32px; color: #0000DC; margin: 0 0 10px;">
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
										<td class="sk-pl20 sk-pr20" style="padding: 0 0 60px;">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr>
													<td style="color: #0000DC; vertical-align: top; padding: 15px 15px 15px 0; border-bottom: 1px solid #eeeeee;">
														<p style="line-height: 24px; margin: 0;">
															MU
														</p>
													</td>
													<td style="color: #0000DC; vertical-align: top; padding: 15px 0; border-bottom: 1px solid #eeeeee;">
														<p style="line-height: 24px; margin: 0;">
															<a href="#" style="color: #0000DC; text-decoration: none;">
																<span style="text-decoration: underline;">Masarykova univerzita otevřela vlastní vinohrad</span>&nbsp;
																<img src="./img/ico-ext.png" alt="Externí odkaz" width="16" height="14" style="vertical-align: middle; border: none;">
															</a>
														</p>
													</td>
												</tr>
												<tr>
													<td style="color: #0000DC; vertical-align: top; padding: 15px 15px 15px 0; border-bottom: 1px solid #eeeeee;">
														<p style="line-height: 24px; margin: 0;">
															FSpS
														</p>
													</td>
													<td style="color: #0000DC; vertical-align: top; padding: 15px 0; border-bottom: 1px solid #eeeeee;">
														<p style="line-height: 24px; margin: 0;">
															<a href="#" style="color: #0000DC; text-decoration: none;">
																<span style="text-decoration: underline;">Munii nově povede Jan Kleiner. Chce se víc věnovat zahraničním studentům</span>&nbsp;
																<img src="./img/ico-ext.png" alt="Externí odkaz" width="16" height="14" style="vertical-align: middle; border: none;">
															</a>
														</p>
													</td>
												</tr>
												<tr>
													<td style="color: #0000DC; vertical-align: top; padding: 15px 15px 15px 0; border-bottom: 1px solid #eeeeee;">
														<p style="line-height: 24px; margin: 0;">
															PrF
														</p>
													</td>
													<td style="color: #0000DC; vertical-align: top; padding: 15px 0; border-bottom: 1px solid #eeeeee;">
														<p style="line-height: 24px; margin: 0;">
															<a href="#" style="color: #0000DC; text-decoration: none;">
																<span style="text-decoration: underline;">Na Kraví hoře rozkvetly léčivé rostliny</span>&nbsp;
																<img src="./img/ico-ext.png" alt="Externí odkaz" width="16" height="14" style="vertical-align: middle; border: none;">
															</a>
														</p>
													</td>
												</tr>
												<tr>
													<td style="color: #0000DC; vertical-align: top; padding: 15px 15px 15px 0; border-bottom: 1px solid #eeeeee;">
														<p style="line-height: 24px; margin: 0;">
															ESF
														</p>
													</td>
													<td style="color: #0000DC; vertical-align: top; padding: 15px 0; border-bottom: 1px solid #eeeeee;">
														<p style="line-height: 24px; margin: 0;">
															<a href="#" style="color: #0000DC; text-decoration: none;">
																<span style="text-decoration: underline;">První absolventský sraz anglické medicíny přilákal lékaře z celého světa</span>&nbsp;
																<img src="./img/ico-ext.png" alt="Externí odkaz" width="16" height="14" style="vertical-align: middle; border: none;">
															</a>
														</p>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table> <!-- / box light -->

								<table class="sk-block-table-all" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr>
										<td class="sk-pl20 sk-pr20">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr><!-- pokud je tento řádek první musí mít vnitřní <td> padding-top 0px a border-top: 0px; -->
													<td style="padding: 0 0 40px;">
														<p style="font-size: 14px; line-height: 20px; margin: 0 0 5px; font-weight: bold;">
															Aktuálně
														</p>
														<h3 style="font-size: 18px; line-height: 24px; color: #0000DC; margin: 0 0 15px;">
															<a href="#" style="text-decoration: none; color: #0000DC;">
																Krátká zpráva na jeden řádek
															</a>
														</h3>
														<p style="font-size: 0px; line-height: 2px; height: 2px; overflow: hidden; margin: 15px 0;">
															<img src="./img/line.png" alt="" width="37" height="2" style="border: none; vertical-align: middle;">
														</p>
														<p style="line-height: 22px; margin: 0 0 20px;">
															Na činnost univerzity bude nově dohlížet někdejší soudkyně Ústavního soudu Dagmar Lastovecká, generální ředitel společnosti Siemens Eduard Palíšek, někdejší generální ředitel České spořitelny Pavel Kysilka a předseda Českého svazu biatlonu Jiří Hamza.
														</p>
													</td>
												</tr>
											</table>
											<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr><!-- pokud je tento řádek první musí mít vnitřní <td> padding-top 0px -->
													<td style="border-top: 1px solid #eeeeee; padding: 60px 0 40px; vertical-align: top; width: 320px;">
														<p style="font-size: 14px; line-height: 20px; margin: 0 0 5px; font-weight: bold;">
															Aktuálně
														</p>
														<h3 style="font-size: 18px; line-height: 24px; color: #0000DC; margin: 0 0 15px;">
															<a href="#" style="text-decoration: none; color: #0000DC;">
																Krátká zpráva na jeden řádek
															</a>
														</h3>
														<p style="font-size: 0px; line-height: 2px; height: 2px; overflow: hidden; margin: 15px 0;">
															<img src="./img/line.png" alt="" width="37" height="2" style="border: none; vertical-align: middle;">
														</p>
														<p style="line-height: 22px; margin: 0 0 20px;">
															Na činnost univerzity bude nově dohlížet někdejší soudkyně Ústavního soudu Dagmar Lastovecká, generální ředitel společnosti Siemens Eduard Palíšek.
														</p>
													</td>
													<td class="sk-hide" style="border-top: 1px solid #eeeeee; padding: 60px 0 40px; width: 60px;">&nbsp;</td>
													<td style="border-top: 1px solid #eeeeee; padding: 60px 0 40px; vertical-align: top; width: 320px;">
														<p style="font-size: 14px; line-height: 20px; margin: 0 0 5px; font-weight: bold;">
															Aktuálně
														</p>
														<h3 style="font-size: 18px; line-height: 24px; color: #0000DC; margin: 0 0 15px;">
															<a href="#" style="text-decoration: none; color: #0000DC;">
																Krátká zpráva na jeden řádek
															</a>
														</h3>
														<p style="font-size: 0px; line-height: 2px; height: 2px; overflow: hidden; margin: 15px 0;">
															<img src="./img/line.png" alt="" width="37" height="2" style="border: none; vertical-align: middle;">
														</p>
														<p style="line-height: 22px; margin: 0 0 20px;">
															Na činnost univerzity bude nově dohlížet někdejší soudkyně Ústavního soudu Dagmar Lastovecká, generální ředitel společnosti Siemens Eduard Palíšek, někdejší generální ředitel České spořitelny Pavel Kysilka a předseda Českého svazu biatlonu Jiří Hamza.
														</p>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table> <!-- / box news -->

								<table class="sk-block-table-all" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr>
										<td class="sk-pl20 sk-pr20" style="padding: 0 0 30px;">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr>
													<td class="sk-bd0" style="border-bottom: 2px solid #0000DC; vertical-align: bottom;">
														<h2 style="font-size: 24px; line-height: 32px; color: #0000DC; margin: 0 0 10px;">
															Fotogalerie z akce MUNI
														</h2>
													</td>
													<td class="sk-tal" style="border-bottom: 2px solid #0000DC; vertical-align: bottom; color: #0000DC; text-align: right;">
														<p style="line-height: 24px; margin: 0 0 10px;">
															(19. 9. 2016)
														</p>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table> <!-- / box annot - title -->

								<table class="sk-block-table" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr class="sk-block">
										<td class="sk-block sk-pl20 sk-pr20" style="padding: 0 0 40px;">
											<table class="sk-block-table sk-gallery" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: center;">
												<tr>
													<td style="width: 220px; padding: 0 0 20px;">
														<a href="#" style="text-decoration: none;">
															<img src="./img/illust-gallery.png" alt="" width="220" height="127" style="vertical-align: middle; border: none;">
														</a>
													</td>
													<td class="sk-hide" style="width:20px">&nbsp;</td>
													<td style="width: 220px; padding: 0 0 20px;">
														<a href="#" style="text-decoration: none;">
															<img src="./img/illust-gallery.png" alt="" width="220" height="127" style="vertical-align: middle; border: none;">
														</a>
													</td>
													<td class="sk-hide" style="width:20px">&nbsp;</td>
													<td style="width: 220px; padding: 0 0 20px;">
														<a href="#" style="text-decoration: none;">
															<img src="./img/illust-gallery.png" alt="" width="220" height="127" style="vertical-align: middle; border: none;">
														</a>
													</td>
												</tr>
												<tr>
													<td style="width: 220px; padding: 0 0 20px;">
														<a href="#" style="text-decoration: none;">
															<img src="./img/illust-gallery.png" alt="" width="220" height="127" style="vertical-align: middle; border: none;">
														</a>
													</td>
													<td class="sk-hide" style="width:20px">&nbsp;</td>
													<td style="width: 220px; padding: 0 0 20px;">
														<a href="#" style="text-decoration: none;">
															<img src="./img/illust-gallery.png" alt="" width="220" height="127" style="vertical-align: middle; border: none;">
														</a>
													</td>
													<td class="sk-hide" style="width:20px">&nbsp;</td>
													<td style="width: 220px; padding: 0 0 20px;">
														<a href="#" style="text-decoration: none;">
															<img src="./img/illust-gallery.png" alt="" width="220" height="127" style="vertical-align: middle; border: none;">
														</a>
													</td>
												</tr>
											</table>
											<p style="line-height: 24px; margin: 0 0 20px; text-align: right;">
												<a href="#" style="color: #0000DC; text-decoration: none;">
													<span style="text-decoration: underline;">Kompletní fotogalerie z akce</span>&nbsp;
													<img src="./img/ico-ext.png" alt="Externí odkaz" width="16" height="14" style="vertical-align: middle; border: none;">
												</a>
											</p>
										</td>
									</tr>
								</table> <!-- / box gallery -->

								<table class="sk-block-table-all" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr>
										<td class="sk-pl20 sk-pr20" style="padding: 0 0 30px;">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr>
													<td style="border-bottom: 2px solid #0000DC;">
														<h2 style="font-size: 24px; line-height: 32px; color: #0000DC; margin: 0 0 10px;">
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
										<td class="sk-block sk-pl20 sk-pr20" style="padding: 0 0 20px;">
											<table class="sk-block-table" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr>
													<td style="padding: 0 0 20px; color: #000; vertical-align: top;">
														<p style="font-size: 14px; line-height: 20px; margin: 0 0 5px; font-weight: bold;">
															19.11.2018
														</p>
														<h3 style="font-size: 18px; line-height: 24px; color: #0000DC; margin: 0 0 15px;">
															<a href="#" style="text-decoration: none; color: #0000DC;">
																Krátká zpráva na jeden řádek
															</a>
														</h3>
														<p style="font-size: 0px; line-height: 2px; height: 2px; overflow: hidden; margin: 15px 0;">
															<img src="./img/line.png" alt="" width="37" height="2" style="border: none; vertical-align: middle;">
														</p>
														<p style="margin: 0 0 20px; line-height: 22px;">
															Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat felis dui. Nullam nec varius ipsum. Aenean sit amet magna libero. Integer in lacus id magna.
														</p>
													</td>
												</tr>
												<tr>
													<td style="padding: 0 0 20px; color: #000; vertical-align: top;">
														<p style="font-size: 14px; line-height: 20px; margin: 0 0 5px; font-weight: bold;">
															19.11.2018
														</p>
														<h3 style="font-size: 18px; line-height: 24px; color: #0000DC; margin: 0 0 15px;">
															<a href="#" style="text-decoration: none; color: #0000DC;">
																Krátká zpráva na jeden řádek
															</a>
														</h3>
														<p style="font-size: 0px; line-height: 2px; height: 2px; overflow: hidden; margin: 15px 0;">
															<img src="./img/line.png" alt="" width="37" height="2" style="border: none; vertical-align: middle;">
														</p>
														<p style="margin: 0 0 20px; line-height: 22px;">
															Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat felis dui. Nullam nec varius ipsum. Aenean sit amet magna libero. Integer in lacus id magna.
														</p>
													</td>
												</tr>
												<tr>
													<td style="padding: 0 0 20px; color: #000; vertical-align: top;">
														<p style="font-size: 14px; line-height: 20px; margin: 0 0 5px; font-weight: bold;">
															19.11.2018
														</p>
														<h3 style="font-size: 18px; line-height: 24px; color: #0000DC; margin: 0 0 15px;">
															<a href="#" style="text-decoration: none; color: #0000DC;">
																Krátká zpráva na jeden řádek
															</a>
														</h3>
														<p style="font-size: 0px; line-height: 2px; height: 2px; overflow: hidden; margin: 15px 0;">
															<img src="./img/line.png" alt="" width="37" height="2" style="border: none; vertical-align: middle;">
														</p>
														<p style="margin: 0 0 20px; line-height: 22px;">
															Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat felis dui. Nullam nec varius ipsum. Aenean sit amet magna libero. Integer in lacus id magna.
														</p>
													</td>
												</tr>
												<tr>
													<td style="padding: 0 0 20px; color: #000; vertical-align: top;">
														<p style="font-size: 14px; line-height: 20px; margin: 0 0 5px; font-weight: bold;">
															19.11.2018
														</p>
														<h3 style="font-size: 18px; line-height: 24px; color: #0000DC; margin: 0 0 15px;">
															<a href="#" style="text-decoration: none; color: #0000DC;">
																Krátká zpráva na jeden řádek
															</a>
														</h3>
														<p style="font-size: 0px; line-height: 2px; height: 2px; overflow: hidden; margin: 15px 0;">
															<img src="./img/line.png" alt="" width="37" height="2" style="border: none; vertical-align: middle;">
														</p>
														<p style="margin: 0 0 20px; line-height: 22px;">
															Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat felis dui. Nullam nec varius ipsum. Aenean sit amet magna libero. Integer in lacus id magna.
														</p>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table> <!-- / box calendar -->

								<table class="sk-block-table-all" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
									<tr>
										<td class="sk-pl20 sk-pr20" style="padding: 0 0 30px;">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr>
													<td style="border-bottom: 2px solid #0000DC;">
														<h2 style="font-size: 24px; line-height: 32px; color: #0000DC; margin: 0 0 10px;">
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
										<td class="sk-pl20 sk-pr20">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr>
													<td style="vertical-align: top; width: 320px; padding: 0 0 40px;">
														<p style="font-size: 14px; line-height: 20px; margin: 0 0 5px; font-weight: bold;">
															Fakulta sportovních studií
														</p>
														<h2 style="font-size: 24px; line-height: 32px; color: #0000DC; margin: 0 0 20px;">
															<a href="#" style="text-decoration: none; color: #0000DC;">
																Dlouhý název pracovní pozice na MU
															</a>
														</h2>
														<p style="font-size: 0px; line-height: 2px; height: 2px; overflow: hidden; margin: 15px 0;">
															<img src="./img/line.png" alt="" width="37" height="2" style="border: none; vertical-align: middle;">
														</p>
														<p style="line-height: 22px; margin: 0 0 20px;">
															Krátký popis pozice. Na činnost univerzity bude nově dohlížet někdejší soudkyně Ústavního soudu Dagmar Lastovecká, generální ředitel společnosti Siemens Eduard Palíšek.
														</p>
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
															<tr>
																<td style="padding: 0 0 20px;">
																	<div><!--[if mso]>
																	<v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://" style="height:40px;v-text-anchor:middle;width:190px;" strokecolor="#0000DC" strokewidth="2" fillcolor="#FAFAFA">
																		<w:anchorlock/>
																		<center style="color:#0000DC;font-family:Arial, Helvetica, sans-serif;font-size:16px;font-weight:bold;">Více informací</center>
																	</v:rect>
																	<![endif]--><a href="http://"
																	style="background-color:#FAFAFA;border:2px solid #0000DC;color:#0000DC;display:inline-block;font-family:Arial, Helvetica, sans-serif;font-size:16px;font-weight:bold;line-height:40px;text-align:center;text-decoration:none;width:190px;-webkit-text-size-adjust:none;mso-hide:all;">Více informací</a></div>
																</td>
															</tr>
														</table>
													</td>
													<td class="sk-hide" style="width: 60px; padding: 0 0 40px;">&nbsp;</td>
													<td style="vertical-align: top; width: 320px; padding: 0 0 40px;">
														<p style="font-size: 14px; line-height: 20px; margin: 0 0 5px; font-weight: bold;">
															Fakulta informatiky
														</p>
														<h2 style="font-size: 24px; line-height: 32px; color: #0000DC; margin: 0 0 20px;">
															<a href="#" style="text-decoration: none; color: #0000DC;">
																Asistent děkana
															</a>
														</h2>
														<p style="font-size: 0px; line-height: 2px; height: 2px; overflow: hidden; margin: 15px 0;">
															<img src="./img/line.png" alt="" width="37" height="2" style="border: none; vertical-align: middle;">
														</p>
														<p style="line-height: 22px; margin: 0 0 20px;">
															Krátký popis pozice. Na činnost univerzity bude nově dohlížet někdejší soudkyně Ústavního soudu Dagmar Lastovecká, generální ředitel společnosti Siemens Eduard Palíšek.
														</p>
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
															<tr>
																<td style="padding: 0 0 20px;">
																	<div><!--[if mso]>
																	<v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://" style="height:40px;v-text-anchor:middle;width:190px;" strokecolor="#0000DC" strokewidth="2" fillcolor="#FAFAFA">
																		<w:anchorlock/>
																		<center style="color:#0000DC;font-family:Arial, Helvetica, sans-serif;font-size:16px;font-weight:bold;">Více informací</center>
																	</v:rect>
																	<![endif]--><a href="http://"
																	style="background-color:#FAFAFA;border:2px solid #0000DC;color:#0000DC;display:inline-block;font-family:Arial, Helvetica, sans-serif;font-size:16px;font-weight:bold;line-height:40px;text-align:center;text-decoration:none;width:190px;-webkit-text-size-adjust:none;mso-hide:all;">Více informací</a></div>
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
										<td class="sk-pl20 sk-pr20">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:14px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
												<tr>
													<td style="vertical-align: top; width: 320px; padding: 0 0 40px;">
														<p style="font-size: 14px; line-height: 20px; margin: 0 0 5px; font-weight: bold;">
															Fakulta informatiky
														</p>
														<h2 style="font-size: 24px; line-height: 32px; color: #0000DC; margin: 0 0 20px;">
															<a href="#" style="text-decoration: none; color: #0000DC;">
																Asistent děkana
															</a>
														</h2>
														<p style="font-size: 0px; line-height: 2px; height: 2px; overflow: hidden; margin: 15px 0;">
															<img src="./img/line.png" alt="" width="37" height="2" style="border: none; vertical-align: middle;">
														</p>
														<p style="line-height: 22px; margin: 0 0 20px;">
															Krátký popis pozice. Na činnost univerzity bude nově dohlížet někdejší soudkyně Ústavního soudu Dagmar Lastovecká, generální ředitel společnosti Siemens Eduard Palíšek.
														</p>
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
															<tr>
																<td style="padding: 0 0 20px;">
																	<div><!--[if mso]>
																	<v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://" style="height:40px;v-text-anchor:middle;width:190px;" strokecolor="#0000DC" strokewidth="2" fillcolor="#FAFAFA">
																		<w:anchorlock/>
																		<center style="color:#0000DC;font-family:Arial, Helvetica, sans-serif;font-size:16px;font-weight:bold;">Více informací</center>
																	</v:rect>
																	<![endif]--><a href="http://"
																	style="background-color:#FAFAFA;border:2px solid #0000DC;color:#0000DC;display:inline-block;font-family:Arial, Helvetica, sans-serif;font-size:16px;font-weight:bold;line-height:40px;text-align:center;text-decoration:none;width:190px;-webkit-text-size-adjust:none;mso-hide:all;">Více informací</a></div>
																</td>
															</tr>
														</table>
													</td>
													<td class="sk-hide" style="width: 60px; padding: 0 0 40px;">&nbsp;</td>
													<td style="vertical-align: top; width: 320px; padding: 0 0 40px;">
														<p style="font-size: 14px; line-height: 20px; margin: 0 0 5px; font-weight: bold;">
															Fakulta sportovních studií
														</p>
														<h2 style="font-size: 24px; line-height: 32px; color: #0000DC; margin: 0 0 20px;">
															<a href="#" style="text-decoration: none; color: #0000DC;">
																Dlouhý název pracovní pozice na MU
															</a>
														</h2>
														<p style="font-size: 0px; line-height: 2px; height: 2px; overflow: hidden; margin: 15px 0;">
															<img src="./img/line.png" alt="" width="37" height="2" style="border: none; vertical-align: middle;">
														</p>
														<p style="line-height: 22px; margin: 0 0 20px;">
															Krátký popis pozice. Na činnost univerzity bude nově dohlížet někdejší soudkyně Ústavního soudu Dagmar Lastovecká, generální ředitel společnosti Siemens Eduard Palíšek.
														</p>
														<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0; font-size:16px; font-family: Arial, Helvetica, sans-serif; width:100%; text-align: left;">
															<tr>
																<td style="padding: 0 0 20px;">
																	<div><!--[if mso]>
																	<v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://" style="height:40px;v-text-anchor:middle;width:190px;" strokecolor="#0000DC" strokewidth="2" fillcolor="#FAFAFA">
																		<w:anchorlock/>
																		<center style="color:#0000DC;font-family:Arial, Helvetica, sans-serif;font-size:16px;font-weight:bold;">Více informací</center>
																	</v:rect>
																	<![endif]--><a href="http://"
																	style="background-color:#FAFAFA;border:2px solid #0000DC;color:#0000DC;display:inline-block;font-family:Arial, Helvetica, sans-serif;font-size:16px;font-weight:bold;line-height:40px;text-align:center;text-decoration:none;width:190px;-webkit-text-size-adjust:none;mso-hide:all;">Více informací</a></div>
																</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table> <!-- / box blue - type 7 -->

							</td>
						</tr>
					</table> <!-- / row main -->

					<img src="./img/spacer.png" width="700" height="1" class="nl-hide" style="border: none; vertical-align: top; min-width: 700px; display: block;">
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
																<img src="./img/logo-muni.png" alt="MUNI" width="150" height="43" style="vertical-align: middle; border: none;">
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

					<img src="./img/spacer.png" width="700" height="1" class="nl-hide" style="border: none; vertical-align: top; min-width: 700px; display: block;">
				</td>
			</tr>
		</table><!-- / footer -->

	</body>
</html>
