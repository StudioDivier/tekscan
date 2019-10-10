$(function () {
    $('.system-item-block-button-click').on('click', function () {
        $(this).closest('.system-item').find('.system-item-dropdown').toggleClass('d-none');
        var thumbs = $(this).closest('.system-item').find('.gallery-thumbs');
        var gallery = $(this).closest('.system-item').find('.gallery-top');
            let galleryThumbs = new Swiper(thumbs, {
                spaceBetween: 30,
                slidesPerView: 'auto',
                loop: true,
                loopedSlides: 3,
                initialSlide: 0,
                centeredSlides: true,
                loopFillGroupWithBlank: true,
                slideToClickedSlide: true,
                // navigation: {
                //     nextEl: '.swiper-button-next',
                //     prevEl: '.swiper-button-prev'
                // },
            });
            let galleryTop = new Swiper(gallery, {
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

    });
});