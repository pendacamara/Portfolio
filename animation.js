document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll("section");
  
    // pour l'apparition des sections avec un zoom 
    const fadeInAndZoom = () => {
      sections.forEach((section) => {
        const sectionTop = section.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;
  
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
  