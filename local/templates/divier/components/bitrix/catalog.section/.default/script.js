$(function () {
    $('.system-item-block-button-click').on('click', function () {
        $(this).closest('.system-item').find('.system-item-dropdown').toggleClass('d-none');
        var galleryThumbs = new Swiper('.gallery-thumbs', {
            spaceBetween: 30,
            slidesPerView: 'auto',
            // freeMode: true,
            // watchSlidesVisibility: true,
            // watchSlidesProgress: true,
            initialSlide: 3,
            loop: true,
            clickable: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            }
        });
        // var swiper = new Swiper('.system-slider-1.swiper-container', {
        //     slidesPerView: 'auto',
        //     spaceBetween: 30,
        //     loop: true,
        //     initialSlide: 3,
        //     navigation: {
        //         nextEl: '.swiper-button-next',
        //         prevEl: '.swiper-button-prev',
        //     }
        // });
    })
});