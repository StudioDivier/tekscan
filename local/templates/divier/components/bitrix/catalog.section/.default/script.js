$(function () {
    $('.system-item-block-button-click').on('click', function () {
        $(this).closest('.system-item').find('.system-item-dropdown').toggleClass('d-none');
        if (!$(this).closest('.system-item').find('.system-item-dropdown').hasClass("d-none")) {
            var thumbs = $(this).closest('.system-item').find('.gallery-thumbs');
            var gallery = $(this).closest('.system-item').find('.gallery-top');
            galleryThumbs = new Swiper(thumbs, {
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
            galleryTop = new Swiper(gallery, {
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
        } else {
            galleryThumbs.destroy();
            galleryTop.destroy();
        }
    });

    $('.button-hide-form a').on('click', function () {
        $(this).closest('.system-item-dropdown').find('.feedback').toggleClass('d-none');
    });
});