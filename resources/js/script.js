document.addEventListener("DOMContentLoaded", function () {
    let navbar = document.querySelector("#navbar");
    let navElements = document.querySelectorAll(".navElement");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 847) {
            navElements.forEach(navElements => {
                navElements.classList.add("col-b-text");
                navElements.classList.remove("col-bg-text");
            });
            navbar.classList.add("col-bg","shadow");
        } else {
            navElements.forEach(navElements => {
                navElements.classList.add("col-bg-text");
                navElements.classList.remove("col-b-text");
            });
            navbar.classList.remove("col-bg","shadow");
        }
    });
});