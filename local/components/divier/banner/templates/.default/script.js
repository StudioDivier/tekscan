$(function () {
    if($('.main-banner-slider').length > 0){
        var swiper_banner = new Swiper('.main-banner-slider .swiper-container', {
            spaceBetween: 30,
            loop: true,
            navigation: {
                nextEl: '.main-banner-slider .swiper-button-next',
                prevEl: '.main-banner-slider .swiper-button-prev',
            }
        });
    }
});