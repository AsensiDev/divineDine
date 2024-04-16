// swiper.js 
var swiper = new Swiper(".home-slider", { //swiper.js buscará los elementos con esa clase y los convertirá en un carrusel
    loop: true, //bucle infinito 
    effect: "coverflow", //codigo extraído de swiper q hace el efecto al moverse sea distinto
    spaceBetween: 30,
    grabCursor: true, //cambia el curso a una mano
    coverflowEffect: {
        rotate: 50, //rotación de las tarjeta
        stretch: 0, //extensión de las tarjetas
        depth: 100, //profundidad de las tarjetas
        modifier: 1, //velocidad de transición de las tarjetas
        slideShadows: false, //si se debe mostrar sombras de las tarjetas
    },
});



