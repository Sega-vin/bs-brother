$(function () {
	/*
		https://www.jqueryscript.net/animation/Smooth-Mouse-Wheel-Scrolling-Plugin-With-jQuery-easeScroll.html
		===========================*/
	$("html").easeScroll({
		frameRate: 60,
		animationTime: 1000,
		stepSize: 90,
		pulseAlgorithm: 1,
		pulseScale: 8,
		pulseNormalize: 1,
		accelerationDelta: 20,
		accelerationMax: 1,
		keyboardSupport: true,
		arrowScroll: 50,
		touchpadSupport: true,
		fixedBackground: true
	});

	let changeFormBg = function () {
		$('#js-search-form input').on('focus', function () {
			$(this).parent('.search-form').addClass('active');
		});

		$('#js-search-form input').blur(function () {
			$('#js-search-form').removeClass('active');
		});
	};
	changeFormBg();

	let toggleLanguageMenu = function () {
		$('#js-language__title').on('click', function (e) {
			e.preventDefault();
			if(!$(this).hasClass('active')){
				$(this).addClass('active')
				$('#js-language .list').show();
			}else{
				$('#js-language__title').removeClass('active');
				$('#js-language .list').hide();
			}
		});
	};
	toggleLanguageMenu();

	let sandwitch = function () {
		$('.sandwitch').on('click', function () {
			$('#js-main-menu').slideToggle();
			$(this).toggleClass('sandwitch--active');
		});
	};
	sandwitch();

	let showBlocksText = function () {
		$('.blocks .blocks__item').each(function () {
			let thisText = $(this).find('.blocks__text');
			let thisBlocksContent = $(this).find('.blocks__content');
			let thisTextHeight = thisText.innerHeight() + 16;

			thisBlocksContent.css({
				"bottom": "-" + thisTextHeight + 'px'
			});

		});

		$('.blocks .blocks__item').hover(function () {
			let thisText = $(this).find('.blocks__text');
			let thisBlocksContent = $(this).find('.blocks__content');
			$(this).find('.blocks__image_show').hide();
			$(this).find('.blocks__image_hover').show();
			thisBlocksContent.css({
				"bottom": 0
			});

		}, function () {
			let thisText = $(this).find('.blocks__text');
			let thisBlocksContent = $(this).find('.blocks__content');
			let thisTextHeight = thisText.innerHeight() + 16;
			$(this).find('.blocks__image_show').show();
			$(this).find('.blocks__image_hover').hide();

			thisBlocksContent.css({
				"bottom": "-" + thisTextHeight + 'px'
			});
		});
	};

	if($(window).width() > 992){
		showBlocksText();
	}

	let slider = function () {
		$('#js-slider').slick({
			arrows: false,
			dots: true,
			adaptiveHeight: true
		});

		$('.slider-wrap .slider-left svg').on('click', function (e) {
			$('#js-slider').slick('slickPrev');
		});

		$('.slider-wrap .slider-right').on('click', function (e) {
			$('#js-slider').slick('slickNext');
		});
	};
	slider();
});
