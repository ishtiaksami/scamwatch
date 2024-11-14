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
      },

      fontFamily: {
        Bebas: ["Bebas Neue", "sans-serif"],
      },
    },
  },
  plugins: [],
};
