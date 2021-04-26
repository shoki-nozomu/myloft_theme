</div>
<footer>
	<div class="footer__inner">
		<div class="footer__logo">
			<img src="<?php bloginfo('template_url'); ?>/img/footer_logo.svg" alt="">
			<a href="<?php bloginfo('url'); ?>" class="a__btn"></a>
		</div>
		<div class="footer__instagram">
			<img src="<?php bloginfo('template_url'); ?>/img/footer_instagram.svg" alt="">
			<a href="https://www.instagram.com/myloftginza/?igshid=18s59qxtbapy5" class="a__btn"></a>
		</div>
		<div class="footer__navis">
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
			<div class="footer__navi">
				<a href="#" onclick="footer_navi_click('#<?php echo $navi; ?>')">
					<?php echo $navi; ?>
				</a>
			</div>
			<?php endforeach; ?>

<!-- 			<div class="footer__navi">
				<a href="https://www.kizz-hana-hana.jp/company/" target="_blank">
					COMPANY<i class="fas fa-external-link-alt"></i>
				</a>
			</div> -->
			<div class="footer__navi">
				<a href="<?php bloginfo('url'); ?>/contact">
					CONTACT
				</a>
			</div>
			<div class="footer__navi">
				<a href="<?php bloginfo('url'); ?>/privacypolicy">
					PRIVACY POLICY
				</a>
			</div>
			
		</div>
		<div class="footer__copyright">
			©myloft
		</div>
	</div>
</footer>

</div>
</main>


<!-- WordPress footer -->
<?php wp_footer(); ?>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- jQuery UI -->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<!-- datepicker カレンダー用 -->
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>

<!-- holiday js -->
<script src="<?php bloginfo('template_url'); ?>/jquery.holiday.js"></script>

<!-- swiper トップページファーストビューのスライダー用 -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script> -->

<!-- スクロールアニメーション -->
<script src="https://unpkg.com/scrollreveal"></script>

<!-- 独自js -->
<script src="<?php bloginfo('template_url'); ?>/main.js"></script>

<!-- imagesloaded スクロール -->
<!-- <script src="<?php //bloginfo('template_url'); 
?>/imagesloaded.pkgd.min.js"></script>
<script src="<?php //bloginfo('template_url'); 
?>/demo.js"></script> -->

</body>

</html>