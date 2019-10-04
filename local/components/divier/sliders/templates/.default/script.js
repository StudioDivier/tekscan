$(function () {
    if($('.three-col-item.blue').length > 0){
        var swiper_blue = new Swiper('.three-col-item.blue .swiper-container', {
            slidesPerView: 1,
            spaceBetween: 20,
            slidesPerGroup: 1,
            loop: true,
            loopFillGroupWithBlank: true,
            navigation: {
                nextEl: '.three-col-item.blue .swiper-button-next',
                prevEl: '.three-col-item.blue .swiper-button-prev',
            },
            breakpoints: {
                425: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 40
                }
            }
        })
    }
});