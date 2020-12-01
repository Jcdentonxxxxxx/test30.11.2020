$(function () {

    $('[data-slider="slick"]').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        arrows: false,
        dots: true
    });

    $('.slickPrev').on('click', function (event) {
        event.preventDefault();
        let currentSlider = $(this).parents('.intro').find('[data-slider="slick"]');
        currentSlider.slick('slickPrev');
    });

    $('.slickNext').on('click', function (event) {
        event.preventDefault();
        let currentSlider = $(this).parents('.intro').find('[data-slider="slick"]');
        currentSlider.slick('slickNext');
    })


    //Menu nav

    $('.nav__toggle').on('click', function () {
        $('.nav').toggleClass('active');
        $('.menu__dropdown').toggleClass('active');
        $('body').toggleClass('no-scroll');
    });
})