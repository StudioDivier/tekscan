$(function () {
    if($('.three-col-item.blue').length > 0){
        var swiper_blue = new Swiper('.three-col-item.blue .swiper-container', {
            slidesPerView: 1,
            loop: true,
            spaceBetween: 30,
            centeredSlides: true,
            navigation: {
                nextEl: '.three-col-item.blue .swiper-button-next',
                prevEl: '.three-col-item.blue .swiper-button-prev',
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
        })
    }
});