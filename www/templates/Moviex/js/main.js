$(document).ready(function() {
    "use strict";
    $("#filter_year").ionRangeSlider({
        hide_min_max: true,
        prettify_enabled: false,
        min: 1990,
        max: 2024,
        from: 1990,
        to: 2024,
        type: 'double',
        step: 1,
        grid: false
    });
    $("#filter_kp").ionRangeSlider({
        hide_min_max: true,
        prettify_enabled: false,
        min: 0,
        max: 10,
        from: 0,
        to: 10,
        type: 'double',
        step: 0.1,
        grid: false
    });
    $('.dlevideoplayer').css({
        'width': '100%',
        'max-width': 'auto !important'
    });
    $('.header__menu-btn').on('click', function() {
        $(this).toggleClass('active');
        $('.header__menu').toggleClass('active');
        $('.header__drop').toggleClass('active');

        if ($('.header__megamenu').hasClass('active')) {
            $('.header__megamenu').removeClass('active');
            $('.menu--1, .menu--2, .menu--3').removeClass('active');
        }
        if ($('.header__search-form').hasClass('active')) {
            $('.header__search-form').toggleClass('active');
        }
    });

    $('.menu--1').on('click', function() {
        if ($('.header__megamenu--2, .header__megamenu--3').hasClass('active')) {
            $('.header__megamenu--2, .header__megamenu--3').removeClass('active');
            $('.menu--2, .menu--3').removeClass('active');
        }
        $(this).toggleClass('active');
        $('.header__megamenu--1').toggleClass('active');
    });
    $('.menu--2').on('click', function() {
        if ($('.header__megamenu--1, .header__megamenu--3').hasClass('active')) {
            $('.header__megamenu--1, .header__megamenu--3').removeClass('active');
            $('.menu--1, .menu--3').removeClass('active');
        }
        $(this).toggleClass('active');
        $('.header__megamenu--2').toggleClass('active');
    });
    $('.menu--3').on('click', function() {
        if ($('.header__megamenu--1, .header__megamenu--2').hasClass('active')) {
            $('.header__megamenu--1, .header__megamenu--2').removeClass('active');
            $('.menu--1, .menu--2').removeClass('active');
        }
        $(this).toggleClass('active');
        $('.header__megamenu--3').toggleClass('active');
    });
    $('.header__profile-btn').on('click', function() {
        $(this).toggleClass('active');
        $('.header__log').toggleClass('active');
        $('.header__profile-menu').toggleClass('active');
        if ($('.header__notify-btn').hasClass('active')) {
            $('.header__notify-btn').toggleClass('active');
            $('.header__notify').toggleClass('active');
        }
    });
    $('.header__notify-btn').on('click', function() {
        $(this).toggleClass('active');
        $('.header__notify').toggleClass('active');
        if ($('.header__profile-btn').hasClass('active')) {
            $('.header__profile-btn').toggleClass('active');
            $('.header__log').toggleClass('active');
            $('.header__profile-menu').toggleClass('active');
        }
    });
    $('.header__search-btn, .header__search-close').on('click', function() {
        $('.header__search-form').toggleClass('active');
        if ($('.header__menu-btn').hasClass('active')) {
            $('.header__menu-btn').toggleClass('active');
            $('.header__drop').toggleClass('active');
        }
    });
	
	$(".tabs-block").each(function() {
        $(this).find(".tabs-block__select span:first").addClass("is-active"), $(this).find(".tabs-block__content:first").removeClass("d-none")
    });
	
	$(".tabs-block__select").on("click", "span:not(.is-active)", function() {
        $(this).addClass("is-active").siblings().removeClass("is-active").parents(".tabs-block").find(".tabs-block__content").hide().eq($(this).index()).fadeIn(0)
    });
	
    $(window).on('resize', function() {
        if ($(window).width() > 1199) {
            var searchRight = $('.header__profile').width();
            $('.header__search-form').css("right", searchRight - 46 + "px");
        } else {
            $('.header__search-form').css("right", 15 + "px")
        }
    });
    $(window).trigger('resize');
    $('.header__login, .login__close').on('click', function() {
        $('.header__login').toggleClass('active');
        $('.login').toggleClass('active');
    });
    $('.content__mobile-tabs-menu li').each(function() {
        $(this).attr('data-value', $(this).text().toLowerCase());
    });
    $('.content__mobile-tabs-menu li').on('click', function() {
        var text = $(this).text();
        var item = $(this);
        var id = item.closest('.content__mobile-tabs').attr('id');
        $('#' + id).find('.content__mobile-tabs-btn input').val(text);
    });
    $('.footer__btn').on('click', function() {
        $('body,html').animate({
            scrollTop: 0,
        }, 700);
    });
    $('.home__bg').owlCarousel({
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        mouseDrag: false,
        items: 1,
        dots: false,
        loop: true,
        autoplay: false,
        smartSpeed: 500,
        margin: 0,
    });
    $('.home__bg .item').each(function() {
        if ($(this).attr("data-bg")) {
            $(this).css({
                'background': 'url(' + $(this).data('bg') + ')',
                'background-position': 'center center',
                'background-repeat': 'no-repeat',
                'background-size': 'cover',
                'height': '480px',
            });
        }
    });
    $('.home__slider').owlCarousel({
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        mouseDrag: false,
        items: 1,
        dots: false,
        loop: true,
        autoplay: false,
        smartSpeed: 500,
        margin: 50,
    });
    $('.home__carousel').owlCarousel({
        mouseDrag: false,
        dots: false,
        loop: true,
        autoplay: false,
        smartSpeed: 500,
        margin: 20,
        startPosition: 1,
        responsive: {
            0: {
                items: 1,
                stagePadding: 90,
				mouseDrag: true,
            },
            576: {
                items: 2,
                stagePadding: 90,
				mouseDrag: true,
            },
            768: {
                items: 3,
                stagePadding: 0,
                margin: 30,
				mouseDrag: true,
            },
            992: {
                items: 4,
                stagePadding: 0,
                margin: 30,
				mouseDrag: true,
            },
            1200: {
                items: 3,
                margin: 50,
            },
        }
    });
    $('.home__btn--next').on('click', function() {
        $('.home__carousel, .home__slider, .home__bg').trigger('next.owl.carousel');
    });
    $('.home__btn--prev').on('click', function() {
        $('.home__carousel, .home__slider, .home__bg').trigger('prev.owl.carousel');
    });
    $(window).on('resize', function() {
        var itemHeight = $('.home__bg').height();
        $('.home__bg .item').css("height", itemHeight + "px");
    });
    $(window).trigger('resize');
    $('.login__group input, .edit__group input, .edit__group textarea').on('change', function() {
        if ($(this).val() != '' || $(this).attr('placeholder')) {
            $(this).addClass('active');
        } else {
            $(this).removeClass('active');
        }
    }).change();

    var c, currentScrollTop = 0,
        navbar = $('.header');
    $(window).on('scroll', function() {
        var a = $(window).scrollTop();
        var b = navbar.height();
        currentScrollTop = a;
        if (c < currentScrollTop && a > b + b) {
            navbar.addClass('is-hidden');
        } else if (c > currentScrollTop && !(a <= b)) {
            navbar.removeClass('is-hidden');
        }
        c = currentScrollTop;
    });
    var inputs = document.querySelectorAll('.inputfile');
    Array.prototype.forEach.call(inputs, function(input) {
        var label = input.nextElementSibling,
            labelVal = label.innerHTML;
        input.addEventListener('change', function(e) {
            var fileName = '';
            if (this.files && this.files.length > 1) fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
            else
                fileName = e.target.value.split('\\').pop();
            if (fileName) label.querySelector('span').innerHTML = fileName;
            else
                label.innerHTML = labelVal;
        });
    });
    $('.profile__btn--edit, .edit__close').on('click', function() {
        $('.edit').toggleClass('active');
    });
    $('#genre-options, #country-options, #quality-options').multiSelect();
    $('.content__filter-btn').on('click', function() {
        $(this).toggleClass('active');
        $('.filter').toggleClass('active');
    });
    $('.filter__btn').on('click', function() {
        $(this).parent('.filter__wrap').toggleClass('active');
    });
    $('.filter__reset').on('click', function() {
        $('#genre-options, #country-options, #quality-options').multiSelect('deselect_all');
        firstSlider.noUiSlider.set([2005, 2015]);
        secondSlider.noUiSlider.set([2.5, 8.6]);
        return false;
    });
});
arrayItems = $('.owl-carousel.owl-drag .owl-stage .owl-item');

function ShowCommentsUploader() {

	if ($("#hidden-image-uploader").css("display") == "none") { 

		$("#hidden-image-uploader").show('blind',{}, 250, function(){
			$('#comments-image-uploader').plupload('refresh');
		});

	} else {

		$("#hidden-image-uploader").hide('blind',{}, 250 );

	}

	return false;
};