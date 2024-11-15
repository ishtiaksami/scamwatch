new Swiper(".mySwiper", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  scrollbar: {
    el: ".swiper-scrollbar",
    hide: true, 
  },
  autoplay: {
    delay: 4000, // Delay in milliseconds between slides
    disableOnInteraction: false, // Autoplay will be disabled after user interactions
  },
  speed: 1000, // Transition speed in milliseconds
  loop: true, // Enable continuous loop mode
});

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
