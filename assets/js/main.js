
$(document).ready(function () {
	$(window).load(function () {


	});

	////////////////////////////////////////////////////
	//================= TERM & COndition
	////////////////////////////////////////////////////
	var tl2 = new TimelineLite();
	var tlstagger2 = new TimelineLite();

	$('.click-login').click(function () {
		if ($('.sec-login').hasClass('show')) {

		} else {
			$('html, body').animate({
				scrollTop: $('.sec-login').offset().top - 10
			}, 1000);
			$('.sec-login').addClass('show');
			$('.sec-login .block-overlay').fadeIn(1000);
			$('.sec-login').addClass('show');
			$sec_body = $('.sec-login .container');
			tl2.to($sec_body, 0, { autoAlpha: 0 }, 0);
			setTimeout(function () {
				tlstagger2.staggerFromTo($sec_body, 1, { y: -50, autoAlpha: 0 }, { y: 0, autoAlpha: 1 }, .2);
			}, 500);
			console.log('open');
		}
	});
	$('.sec-login .btn-close').click(function () {
		if ($('.sec-login').hasClass('show')) {
			setTimeout(function () {
				$('.sec-login').removeClass('show');
			}, 1000);
			$('.sec-login .block-overlay').fadeOut(1000);
			$sec_body = $('.sec-login .container');
			tlstagger2.staggerFromTo($sec_body, 1, { y: 0, autoAlpha: 1 }, { y: -50, autoAlpha: 0 }, .2);

			console.log('close');
		} else {

		}
	});


	$('.click-register').click(function () {
		if ($('.sec-register').hasClass('show')) {

		} else {
			$('html, body').animate({
				scrollTop: $('.sec-login').offset().top - 10
			}, 1000);
			$('.sec-register').addClass('show');
			$('.sec-register .block-overlay').fadeIn(1000);
			$('sec-register').addClass('show');
			$sec_body = $('.sec-register .container');
			tl2.to($sec_body, 0, { autoAlpha: 0 }, 0);
			setTimeout(function () {
				tlstagger2.staggerFromTo($sec_body, 1, { y: -50, autoAlpha: 0 }, { y: 0, autoAlpha: 1 }, .2);
			}, 500);
			console.log('open');
		}
	});
	$('.sec-register .btn-close').click(function () {
		if ($('.sec-register').hasClass('show')) {
			setTimeout(function () {
				$('.sec-register').removeClass('show');
			}, 1000);
			$('.sec-register .block-overlay').fadeOut(1000);
			$sec_body = $('.sec-register .container');
			tlstagger2.staggerFromTo($sec_body, 1, { y: 0, autoAlpha: 1 }, { y: -50, autoAlpha: 0 }, .2);

			console.log('close');
		} else {

		}
	});


	$('.click-to-login').click(function () {
		if ($('.sec-register').hasClass('show')) {
			setTimeout(function () {
				$('.sec-register').removeClass('show');
			}, 1000);
			$('.sec-register .block-overlay').fadeOut(1000);
			$sec_body = $('.sec-register .container');
			tlstagger2.staggerFromTo($sec_body, 1, { y: 0, autoAlpha: 1 }, { y: -50, autoAlpha: 0 }, .2);

			console.log('close');
		} else {

		}
		if ($('.sec-login').hasClass('show')) {

		} else {
			$('html, body').animate({
				scrollTop: $('.sec-login').offset().top - 10
			}, 1000);
			$('.sec-login').addClass('show');
			$('.sec-login .block-overlay').fadeIn(1000);
			$('.sec-login').addClass('show');
			$sec_body = $('.sec-login .container');
			tl2.to($sec_body, 0, { autoAlpha: 0 }, 0);
			setTimeout(function () {
				tlstagger2.staggerFromTo($sec_body, 1, { y: -50, autoAlpha: 0 }, { y: 0, autoAlpha: 1 }, .2);
			}, 500);
			console.log('open');
		}
	});

	$('.click-to-register').click(function () {
		if ($('.sec-login').hasClass('show')) {
			setTimeout(function () {
				$('.sec-login').removeClass('show');
			}, 1000);
			$('.sec-login .block-overlay').fadeOut(1000);
			$sec_body = $('.sec-login .container');
			tlstagger2.staggerFromTo($sec_body, 1, { y: 0, autoAlpha: 1 }, { y: -50, autoAlpha: 0 }, .2);

			console.log('close');
		} else {

		}

		if ($('.sec-register').hasClass('show')) {

		} else {
			$('html, body').animate({
				scrollTop: $('.sec-login').offset().top - 10
			}, 1000);
			$('.sec-register').addClass('show');
			$('.sec-register .block-overlay').fadeIn(1000);
			$('sec-register').addClass('show');
			$sec_body = $('.sec-register .container');
			tl2.to($sec_body, 0, { autoAlpha: 0 }, 0);
			setTimeout(function () {
				tlstagger2.staggerFromTo($sec_body, 1, { y: -50, autoAlpha: 0 }, { y: 0, autoAlpha: 1 }, .2);
			}, 500);
			console.log('open');
		}


	});
	////////////////////////////////////////////////////
	//================= SWIPER
	////////////////////////////////////////////////////

	var sec_banner = new Swiper('.sec-banner .swiper-container', {
		speed: 600,
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		
	});
	var sec_banner2 = new Swiper('.testim .test-tim', {
		speed: 600,
		slidesPerView: 3,
		// spaceBetween: 20,
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		breakpoints: {
			992: {
				slidesPerView: 1,
				// spaceBetween: 40
			},
			
		}
	});
	var sec_banner3 = new Swiper('.testim .test-tim2', {
		speed: 600,
		slidesPerView: 3,
		// spaceBetween: 20,
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		breakpoints: {
			992: {
				slidesPerView: 1,
				// spaceBetween: 40
			},
		
		}
	});
});


