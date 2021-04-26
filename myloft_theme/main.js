/*****************************************************************
 * ハンバーガーメニューの表示非表示
 *****************************************************************/
var btn = document.getElementById('hamburger_btn');

function navis() {
	$('#hamburger_btn').toggleClass('active');
	$('#hamburger_navi').toggleClass('active');
	$('#hamburger_modal').toggleClass('active');
}

/*****************************************************************
 * TOPページ、PRICEエリアのタブ表示切替
 * 
 * 直したいけどいったん直書きする 
 *****************************************************************/

function tab_func() {

	var price1 = document.getElementById('price__tab1');
	var price2 = document.getElementById('price__tab2');
	var price3 = document.getElementById('price__tab3');
	var price4 = document.getElementById('price__tab4');
	var price_text1 = document.getElementById('price__tabtext1');
	var price_text2 = document.getElementById('price__tabtext2');
	var price_text3 = document.getElementById('price__tabtext3');
	var price_text4 = document.getElementById('price__tabtext4');

	var price_img1 = document.getElementById('price__img1');
	var price_img2 = document.getElementById('price__img2');
	var price_img3 = document.getElementById('price__img3');
	var price_img4 = document.getElementById('price__img4');

	if (price1.checked) {
		price_text1.style.display = 'block';
		price_text2.style.display = 'none';
		price_text3.style.display = 'none';
		price_text4.style.display = 'none';

		price_img1.style.display = 'block';
		price_img2.style.display = 'none';
		price_img3.style.display = 'none';
		price_img4.style.display = 'none';

		document.getElementsByClassName('price__label__plus')[0].innerHTML = '-';
		document.getElementsByClassName('price__label__plus')[1].innerHTML = '+';
		document.getElementsByClassName('price__label__plus')[2].innerHTML = '+';
		document.getElementsByClassName('price__label__plus')[3].innerHTML = '+';

	} else if (price2.checked) {
		price_text1.style.display = 'none';
		price_text2.style.display = 'block';
		price_text3.style.display = 'none';
		price_text4.style.display = 'none';

		price_img1.style.display = 'none';
		price_img2.style.display = 'block';
		price_img3.style.display = 'none';
		price_img4.style.display = 'none';

		document.getElementsByClassName('price__label__plus')[0].innerHTML = '+';
		document.getElementsByClassName('price__label__plus')[1].innerHTML = '-';
		document.getElementsByClassName('price__label__plus')[2].innerHTML = '+';
		document.getElementsByClassName('price__label__plus')[3].innerHTML = '+';

	} else if (price3.checked) {
		price_text1.style.display = 'none';
		price_text2.style.display = 'none';
		price_text3.style.display = 'block';
		price_text4.style.display = 'none';

		price_img1.style.display = 'none';
		price_img2.style.display = 'none';
		price_img3.style.display = 'block';
		price_img4.style.display = 'none';

		document.getElementsByClassName('price__label__plus')[0].innerHTML = '+';
		document.getElementsByClassName('price__label__plus')[1].innerHTML = '+';
		document.getElementsByClassName('price__label__plus')[2].innerHTML = '-';
		document.getElementsByClassName('price__label__plus')[3].innerHTML = '+';
	} else if (price4.checked) {
		price_text1.style.display = 'none';
		price_text2.style.display = 'none';
		price_text3.style.display = 'none';
		price_text4.style.display = 'block';

		price_img1.style.display = 'none';
		price_img2.style.display = 'none';
		price_img3.style.display = 'none';
		price_img4.style.display = 'block';

		document.getElementsByClassName('price__label__plus')[0].innerHTML = '+';
		document.getElementsByClassName('price__label__plus')[1].innerHTML = '+';
		document.getElementsByClassName('price__label__plus')[2].innerHTML = '+';
		document.getElementsByClassName('price__label__plus')[3].innerHTML = '-';
	}

}

/*****************************************************************
 * TOPページ、スマホ、アコーディオンメニュー
 *****************************************************************/
$(function () {
	$('.js-price__accordion__item__link').each(function () {
		$(this).on('click', function () {
			$(this).toggleClass('on');
			$("+.top__price__tabtexts__sp", this).slideToggle();
			return false;
		});
	});
});

/*****************************************************************
 * トップページスクロールアニメーション
 *****************************************************************/
ScrollReveal().reveal('.box_left', {
	delay: 50,
	duration: 1600,
	origin: 'left',
	distance: '200px',
	reset: false,
	opacity: 0,
	mobile: false,
	easing: 'ease-out'
});

ScrollReveal().reveal('.box_right', {
	delay: 50,
	duration: 1600,
	origin: 'right',
	distance: '200px',
	reset: false,
	opacity: 0,
	mobile: false,
	easing: 'ease-out'
});
ScrollReveal().reveal('.box_bottom', {
	delay: 50,
	duration: 1600,
	origin: 'bottom',
	distance: '200px',
	reset: false,
	opacity: 0,
	mobile: false,
	easing: 'ease-out'
});
ScrollReveal().reveal('.box_bottom2', {
	delay: 200,
	duration: 1600,
	origin: 'bottom',
	distance: '200px',
	reset: false,
	opacity: 0,
	mobile: false,
	easing: 'ease-out'
});
ScrollReveal().reveal('.box_bottom3', {
	delay: 350,
	duration: 1600,
	origin: 'bottom',
	distance: '200px',
	reset: false,
	opacity: 0,
	mobile: false,
	easing: 'ease-out'
});
/*****************************************************************
 * 予約フォームカレンダー
 *****************************************************************/
(function () {
	$.datepicker.setDefaults($.datepicker.regional["ja"]);
	$('#datepicker1').datepicker().holiday();
	$('#datepicker1').datepicker("option", "dateFormat", 'yy/m/d');
})();
(function () {
	$.datepicker.setDefaults($.datepicker.regional["ja"]);
	$('#datepicker2').datepicker().holiday();
	$('#datepicker2').datepicker("option", "dateFormat", 'yy/m/d');
})();

/*****************************************************************
 * ページ内スクロール
 *****************************************************************/
function header_navi_click(navi) {
	var winW = $(window).width();
	var devW = 834;
	if (winW <= devW) {
		if(navi == "#PRICE"){
			navi = "#PRICE_SP";
		}else if(navi == "#FEATURE"){
			navi = "#FEATURE_SP";
		}else if(navi == "#SERVICE"){
			navi = "#SERVICE_SP";
		}
	}
	var url = window.location.protocol + '//' + window.location.host + '/myloft/';
	var url2 = window.location.protocol + '//' + window.location.host + '/myloft/#';
	if (location.href == url || location.href == url2) {
		navis();
		let speed = 500;
		var position = $(navi).offset().top;
		if (winW <= devW) {
			position = position - 90;
		}else{
			position = position - 150;
		}
		$("html, body").animate({ scrollTop: position }, speed, "swing");
		console.log({scrollTop:position});
		return false;
	} else {
		location.href = url + navi;
	}
}

function footer_navi_click(navi) {
	var winW = $(window).width();
	var devW = 834;
	if (winW <= devW) {
		if(navi == "#PRICE"){
			navi = "#PRICE_SP";
		}else if(navi == "#FEATURE"){
			navi = "#FEATURE_SP";
		}else if(navi == "#SERVICE"){
			navi = "#SERVICE_SP";
		}
	}
	var url = window.location.protocol + '//' + window.location.host + '/myloft/';
	var url2 = window.location.protocol + '//' + window.location.host + '/myloft/#';

	if (location.href == url || location.href == url2) {
		let speed = 500;
		// let href = $(navi).attr("href");
		// let target = $(href == "#" || href == "" ? 'html' : href);
		let position = $(navi).offset().top;
		if (winW <= devW) {
			position = position - 90;
		}else{
			position = position - 150;
		}

		$("html, body").animate({ scrollTop: position }, speed, "swing");
		return false;
	} else {
		location.href = url + navi;
		// location.href = url;
	}
}

function top_click(id) {
	let speed = 500;
	let position = $(id).offset().top;
	$("html, body").animate({ scrollTop: position }, speed, "swing");
	return false;
}

/*****************************************************************
 * スクロールしたらヘッダーの背景色を表示する
 *****************************************************************/
$(window).on('scroll', function () {

	if ($('.header').height() < $(this).scrollTop()) { 
		$('.header').addClass('change-color'); }
	else {
		$('.header').removeClass('change-color');
	}
});

/*****************************************************************
 * コンタクトフォーム7電話番号パターンでも動かない
 *****************************************************************/
jQuery(function($){
	$('.wpcf7-tel').attr('pattern', '/^[0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4}$/');
});