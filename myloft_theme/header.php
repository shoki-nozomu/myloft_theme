<!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<title>銀座徒歩8分におしゃれなマイオフィスを | myloft銀座</title>
		<meta name="description" content="法人登記無料、TVモニター付会議室無料、テレワーク用設備も揃った使い勝手のいいシェアオフィス。木のぬくもりを感じられる落ち着いたスペースで在宅ワークや商談、会議等幅広いニーズにお応えできます。併設託児所の利用可。起業・経営相談も。">

		<?php wp_head(); ?>

		<!-- style.css -->
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />

		<!-- FontAwesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">

		<!-- ファビコン -->
		<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon_myloft.ico" type="image/x-icon">


		<!-- googlewebfont -->
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- JQuery holicay css -->
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/jquery.holiday.css">

		<!-- jquery ui テーマcss -->
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/humanity/jquery-ui.css">

		<!-- transition 予期せぬ動き防止 -->
		<script>
			$(window).on('load', function() {
				$('body').removeClass('preload');
			});
		</script>

	</head>

	<body class="preload">
		<main>
			<div data-scroll>
				<header class="header">
					<div class="header__inner">
						<!-- ロゴ画像 -->
						<div class="header__logo">
							<img src="<?php bloginfo('template_url'); ?>/img/header_logo.svg" alt="">
							<a href="<?php bloginfo('url'); ?>" class="a__btn"></a>
						</div>
						<!-- 内覧予約 -->
						<div class="header__yoyaku">
							<div class="yoyaku__text a__btn__parent">
								内覧予約<br>▼
								<a href="#" onclick="footer_navi_click('#RESERVATION')" class="a__btn"></a>
							</div>
						</div>
					</div>
				</header>

				<!-- ハンバーガーメニューボタン -->
				<div class="btn-trigger" id="hamburger_btn" onclick="navis()">
					<span></span>
					<span></span>
					<span></span>
				</div>

				<div id="hamburger_navi" class="header__navis">
					<?php
					$navis = [
						"FEATURE",
						"SERVICE",
						"PRICE",
						"FLOW",
						"ACCESS",
						"NEWS",
						"COMPANY",
						"RESERVATION",
					];

					foreach ($navis as $navi) :
					?>
					<div class="header__navi">
						<a href="#" onclick="header_navi_click('#<?php echo $navi; ?>')">
							<?php echo $navi; ?>
						</a>
					</div>
					<?php endforeach; ?>
<!-- 					<div class="header__navi">
						<a href="https://www.kizz-hana-hana.jp/company/" target="_blank">
							COMPANY<i class="fas fa-external-link-alt"></i>
						</a>
					</div> -->
					<div class="header__navi">
						<a href="<?php bloginfo('url'); ?>/contact">
							CONTACT
						</a>
					</div>
				</div>
				<div id="hamburger_modal" class="header__modal" onclick="navis()"></div>

				<div class="main">