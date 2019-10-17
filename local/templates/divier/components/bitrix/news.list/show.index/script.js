$(function () {
    if($('.three-col-item.silver').length > 0){
        var swiper_silver = new Swiper('.three-col-item.silver .swiper-container', {
            slidesPerView: 1,
            loop: true,
            spaceBetween: 30,
            centeredSlides: true,
            navigation: {
                nextEl: '.three-col-item.silver .swiper-button-next',
                prevEl: '.three-col-item.silver .swiper-button-prev'
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 21
                },
                1025: {
                    slidesPerView: 3
                }
            }
        });
    }
});