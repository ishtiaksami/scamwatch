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
        Bebas: ["Bebas Neue", "sans-serif"],
      },
      colors: {
        'blue1': '#1361f0',
        'blue-light': '#568df4',
      },
    },
  },
  plugins: [],
};
