$(document).ready(function () {
    var mySwiper = new Swiper ('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        speed: 1000,
        loop: true,
        effect: 'cube',
        grabCursor: true,
        zoom: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        cubeEffect: {
            shadow: true,
            slideShadows: true,
            shadowOffset: 20,
            shadowScale: 0.94,
        },
        keyboard: {
           enabled: true,
        },
        // pagination
        // pagination: {
        //     el: '.swiper-pagination',
        // },

        // Navigation arrows
        // navigation: {
        //     nextEl: '.swiper-button-next',
        //     prevEl: '.swiper-button-prev',
        // },

        // scrollbar
        // scrollbar: {
        //     el: '.swiper-scrollbar',
        // },
    })
});
