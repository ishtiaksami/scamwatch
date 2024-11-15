module.exports = {
  content: ["./**/*.{html,js,php}", "../../../markup/*.{html,js,php}"],

  theme: {
    extend: {
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
      },
    },
  },
  plugins: [],
};
