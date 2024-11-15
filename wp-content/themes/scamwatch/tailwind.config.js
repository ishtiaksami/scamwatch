module.exports = {
  content: ["./**/*.{html,js,php}", "../../../markup/*.{html,js,php}"],

  theme: {
    extend: {
      boxShadow: {
        custom1: '0 0 0.3rem rgba(0, 0, 0, 0.06), 0 0 0.2rem rgba(0, 0, 0, 0.12)',
        custom2: '0 .2rem .4rem rgba(0,0,0,.16),0 .2rem .4rem rgba(0,0,0,.23)',
      },
      maxWidth: {
        siteWidth: "1512px",
      },

      Spacing: {
        30: "30px",
      },

      padding: {
        30: "30px",
        50: "50px",
      },

      fontFamily: {
        roboto: ["Roboto", "sans-serif"],
      },

      fontSize: {
        64: "4rem",
      },
      colors: {
        'blue1': "#0A2391",
        'blue-light': "#568df4",
        'bright-Orange': "#FF742D",
        'soft-vanilla': "#FFF5D2",
      },
    },
  },
  plugins: [],
};
