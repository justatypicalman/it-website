const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector('.nav-menu');
const btn = document.querySelector(".navbar-toggler");
const nav = document.querySelector(".navbar");
btn.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
    nav.classList.toggle("active");
    
})