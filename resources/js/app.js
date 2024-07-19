import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.getElementById("navbar");
    const topbar = document.getElementById("topbar");
    const threshold = 10; // Adjust this value as needed

    function handleScroll() {
        if (window.innerWidth >= 769) {
            if (window.scrollY > threshold) {
                navbar.classList.add("sticky-navbar");
                topbar.classList.add("hidden");
            } else {
                navbar.classList.remove("sticky-navbar");
                if (window.innerWidth > 1024) {
                    topbar.classList.remove("hidden");
                }
            }
        } else {
            navbar.classList.remove("sticky-navbar");
            topbar.classList.remove("hidden");
        }
    }

    // Initial check on page load
    handleScroll();

    // Listen to scroll events
    window.addEventListener("scroll", function () {
        handleScroll();
    });
});
