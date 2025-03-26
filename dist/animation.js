"use strict";

document.addEventListener("DOMContentLoaded", function () {
  var sections = document.querySelectorAll("section");

  // pour l'apparition des sections avec un zoom 
  var fadeInAndZoom = function fadeInAndZoom() {
    sections.forEach(function (section) {
      var sectionTop = section.getBoundingClientRect().top;
      var windowHeight = window.innerHeight;
      if (sectionTop < windowHeight - 100) {
        section.style.opacity = "1";
        section.style.transform = "scale(1.02)"; // zoom léger
        section.style.transition = "opacity 0.8s ease-out, transform 0.8s ease-out";
      } else {
        section.style.opacity = "0";
        section.style.transform = "scale(0.98)";
      }
    });
  };

  //pour défilement
  window.addEventListener("scroll", fadeInAndZoom);
  fadeInAndZoom();
});
document.addEventListener("DOMContentLoaded", function () {
  var menuToggle = document.getElementById("menu-toggle");
  var navbar = document.querySelector(".navbar ul");

  // ajoute ou enlève la classe active quand je clique clic sur le menu barre
  menuToggle.addEventListener("click", function () {
    navbar.classList.toggle("active");
  });
});