// Initialisation de Swiper.js pour le carrousel de témoignages
const testimonialSwiper = new Swiper(".swiper", {
    loop:true,
    autoplay:{
        delay:5000
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    }
})