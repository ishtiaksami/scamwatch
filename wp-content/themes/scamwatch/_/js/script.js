// conflict bugg solution
var $ = jQuery.noConflict();


$(function () {
  // video banner slider
  new Swiper(".bannerSlider", {
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    scrollbar: {
      el: ".swiper-scrollbar",
      hide: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
      renderFraction: function (currentClass, totalClass) {
        return (
          '<span class="' +
          currentClass +
          '"></span>' +
          "<span>/</span>" +
          '<span class="' +
          totalClass +
          '"></span>'
        );
      },
    },
  });
});

// mega menu
const scamLink = document.getElementById("scam-link");
const megaMenu = document.getElementById("mega-menu");

// Toggle Mega Menu on Click (for mobile or touch users)
scamLink.addEventListener("click", (event) => {
  event.preventDefault();
  megaMenu.classList.toggle("opacity-100");
  megaMenu.classList.toggle("pointer-events-auto");
  megaMenu.classList.toggle("translate-y-2");
});

// Close the mega menu when clicking outside
document.addEventListener("click", (event) => {
  if (!scamLink.contains(event.target) && !megaMenu.contains(event.target)) {
    megaMenu.classList.remove(
      "opacity-100",
      "pointer-events-auto",
      "translate-y-2"
    );
  }
});

// Close the mega menu with the Escape key
document.addEventListener("keydown", (event) => {
  if (event.key === "Escape") {
    megaMenu.classList.remove(
      "opacity-100",
      "pointer-events-auto",
      "translate-y-2"
    );
  }
});

// Hover effect for desktop users
scamLink.parentElement.addEventListener("mouseenter", () => {
  megaMenu.classList.add("opacity-100", "pointer-events-auto", "translate-y-2");
});

scamLink.parentElement.addEventListener("mouseleave", () => {
  megaMenu.classList.remove(
    "opacity-100",
    "pointer-events-auto",
    "translate-y-2"
  );
});

