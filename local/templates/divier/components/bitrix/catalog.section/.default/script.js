$(function () {
    $('.system-item-block-button-click').on('click', function () {
        $(this).closest('.system-item').find('.system-item-dropdown').toggleClass('d-none');
        var galleryThumbs = new Swiper('.gallery-thumbs', {
            spaceBetween: 30,
            slidesPerView: 'auto',
            loop: true,
            loopedSlides: 3,
            initialSlide: 0,
            centeredSlides: true,
            slideToClickedSlide: true,
            // navigation: {
            //     nextEl: '.swiper-button-next',
            //     prevEl: '.swiper-button-prev'
            // },
        });

        var galleryTop = new Swiper('.gallery-top', {
            slidesPerView: 1,
            loopedSlides: 5,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
        });
        galleryTop.controller.control = galleryThumbs;
        galleryThumbs.controller.control = galleryTop;
    })
});