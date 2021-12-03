/* 01: Preloader
==============================================*/
$(document).ready(function(){
    $('html').addClass('lock no-sk');

    $(window).on('load', function(){
        $('#preloader').fadeOut(1000);
        $('html').removeClass('lock no-sk');
    });
});

/* 02: Banner
==============================================*/
$(document).ready(function(){
    $('#slider').slick({
        dots: false,
        arrows: true,
        nav: false,
        slidesToShow: 1,
        fade: true,
        autoplay: true,
        autoplaySpeed: 9000,
        adaptiveHeight: true,
        infinite: true,
        speed: 300,
        swipe: true,
        lazyLoad: true,

        prevArrow: $(".nav_c_btn_1"),
        nextArrow: $(".nav_c_btn_2"),
    });
});