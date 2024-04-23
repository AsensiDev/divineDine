document.addEventListener('DOMContentLoaded', function() {
    // swiper.js 
var swiper = new Swiper(".home-slider", { 
    loop: true, 
    effect: "coverflow", 
    spaceBetween: 30,
    grabCursor: true, 
    coverflowEffect: {
        rotate: 50, 
        stretch: 0, 
        depth: 100, 
        modifier: 1, 
        slideShadows: false, 
    },
});

var links = document.querySelectorAll('a[href^="#"]');

    
    links.forEach(function(link) {
      link.addEventListener("click", function(e) {
        e.preventDefault(); 

        var targetId = this.getAttribute("href"); 
        var targetElement = document.querySelector(targetId); 

        if (targetElement) {
          
          var offset = targetElement.offsetTop;

          window.scrollTo({
            top: offset,
            behavior: "smooth"
          });
        }
      });
    });
});





