let span = document.querySelector(".goTop");

window.onscroll = function () {
    this.scrollY >= 1000
        ? span.classList.add("show")
        : span.classList.remove("show");

    span.onclick = function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    };
};

var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: "true",
    fade: "true",
    grabCursor: "true",
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
});




