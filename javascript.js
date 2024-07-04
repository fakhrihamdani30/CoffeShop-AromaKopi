document.addEventListener("DOMContentLoaded", function () {
  const hamburgerMenu = document.getElementById("hamburger-menu");
  const navbarNav = document.querySelector(".navbar-nav");
  const navLinks = document.querySelectorAll(".navbar-nav a");

  hamburgerMenu.addEventListener("click", function (e) {
    e.preventDefault();
    navbarNav.classList.toggle("active");
  });

  navLinks.forEach((link) => {
    link.addEventListener("click", function () {
      navbarNav.classList.remove("active");
    });
  });
});
