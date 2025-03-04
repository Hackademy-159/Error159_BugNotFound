document.addEventListener("DOMContentLoaded", function () {
    let navbar = document.querySelector("#navbar");
    let navElements = document.querySelectorAll(".navElement");
    let header = document.querySelector("#header");
    let cercaInput = document.querySelector("#cercaInput");

    window.addEventListener("scroll", function () {
        console.log(window.scrollY);
        if (window.scrollY > (header.clientHeight -10)) {
            navElements.forEach(navElements => {
                //aggiuinge alle scritte colore blu
                navElements.classList.add("col-b-text");
                //toglie alle scrittecolore bianco
                navElements.classList.remove("col-bg-text");
            });
            //aggiunge alla navbar ombreggiatura e colore sfondo bianco
            navbar.classList.add("col-bg","shadow");
            cercaInput.classList.add("search-border-all");
            cercaInput.classList.remove("search-border-home");
        } else {
            navElements.forEach(navElements => {
                //aggiunge colore bianco
                navElements.classList.add("col-bg-text");
                //rimuove colore blu
                navElements.classList.remove("col-b-text");
            });
            //rimuove ombra e colore sfondo bianco
            navbar.classList.remove("col-bg","shadow");
            cercaInput.classList.remove("search-border-all");
            cercaInput.classList.add("search-border-home");
        }
    });
});


document.querySelectorAll('.carousel').forEach(carousel => {
    carousel.addEventListener('mouseenter', () => {
        var carouselInstance = new bootstrap.Carousel(carousel, {
            interval: 2000, // Tempo di auto avanzamento (2000ms = 2 secondi)
        });
        carouselInstance.cycle(); // Avvia l'auto avanzamento
    });

    carousel.addEventListener('mouseleave', () => {
        var carouselInstance = new bootstrap.Carousel(carousel, {
            interval: false // Disabilita l'auto avanzamento
        });
        carouselInstance.pause(); // Ferma l'auto avanzamento
    });
});

