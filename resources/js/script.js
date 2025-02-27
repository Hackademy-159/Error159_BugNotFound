let navbar = document.querySelector("#navbar")

document.addEventListener("DOMContentLoaded", function() {
    var navbar = document.getElementById("navbar");

    window.addEventListener("scroll", function() {
        if (window.scrollY > 847) { 
            navbar.classList.add("col-bg","col-b-text");
            navbar.classList.remove("col-bg-text");
        } else {
            navbar.classList.add("col-bg-text");
            navbar.classList.remove("col-bg","col-b-text");
        }
    });
});