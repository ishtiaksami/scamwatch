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