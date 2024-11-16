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

// conflict bugg solution

// card slider

$(document).ready(function () {
  var swiper = new Swiper(".cardSlider", {
    slidesPerView: 1,
    spaceBetween: 10,
    speed: 700,
    loop: true,
    // Uncomment the autoplay section if needed
    // autoplay: {
    //   delay: 2000,
    // },
    navigation: {
      nextEl: ".promo-next",
      prevEl: ".promo-prev",
    },
    breakpoints: {
      767: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 4,
      },
    },
  });
});

// accordion block

$(document).ready(function () {
  $(".accordion-header").click(function () {
    const content = $(this).next(".accordion-content");
    const icon = $(this).find(".accordion-icon");

    // Toggle current accordion
    content.slideToggle(200);
    icon.toggleClass("rotate-180");

    // Close other accordions if open
    $(".accordion-content").not(content).slideUp(200);
    $(".accordion-icon").not(icon).removeClass("rotate-180");
  });
});

// form validation

$(document).ready(function () {
  $("#contactForm").on("submit", function (e) {
    e.preventDefault();

    // Simple validation
    const name = $("#name").val().trim();
    const email = $("#email").val().trim();
    const subject = $("#subject").val().trim();
    const message = $("#message").val().trim();

    if (!name || !email || !subject || !message) {
      alert("Please fill out all fields.");
      return;
    }

    if (!validateEmail(email)) {
      alert("Please enter a valid email address.");
      return;
    }

    // If form is valid
    alert("Thank you for your message!");
    $(this).trigger("reset");
  });

  // Email validation function
  function validateEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
  }
});
