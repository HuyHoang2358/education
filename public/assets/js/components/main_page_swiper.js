document.addEventListener("DOMContentLoaded", function() {

    var swiper = new Swiper(".mySwiper", {
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    var swiper = new Swiper(".mySwiper2", {
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next-unique",
            prevEl: ".swiper-button-prev-unique",
        },
        pagination: {
            el: ".swiper-pagination-2",
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
            1049: {
                slidesPerView: 4,
                spaceBetween: 50,
            },
        },
    });

    var swiper = new Swiper(".mySwiper3", {
        slidesPerView: 2,
        spaceBetween: 20,
        navigation: {
            nextEl: ".swiper-button-next-unique-2",
            prevEl: ".swiper-button-prev-unique-2",
        },
        pagination: {
            el: ".swiper-pagination-3",
            clickable: true,
        },
        breakpoints: {
            1200: {
                slidesPerView: 3,
                spaceBetween: 50,
            },
        },
    });

    
});