module.exports = {
  content: ["./**/*.{html,js,php}", "../../../markup/*.{html,js,php}"],

  theme: {
    extend: {
      boxShadow: {
        custom1:
          "0 0 0.3rem rgba(0, 0, 0, 0.06), 0 0 0.2rem rgba(0, 0, 0, 0.12)",
        custom2: "0 .2rem .4rem rgba(0,0,0,.16),0 .2rem .4rem rgba(0,0,0,.23)",
        custom3: '0 0 0.1rem rgba(0,0,0,0.06), 0 0 0.2rem rgba(0,0,0,0.12)',
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
        montserrat: ["Montserrat", "sans-serif"],
        raleway: ["Raleway", "sans-serif"],
      },

      fontSize: {
        64: "4rem",
      },
      lineHeight: {
        '22': '1.375rem',
        '32': '2rem',
      },
      letterSpacing: {
        '1.5': '0.09375rem',
      },
      colors: {
        lightBlue: "#3a79ff",
        blue1: "#266df1",
        gray1: "#e9e9e4",
        gray2: "#fbf3f1",
        gray3: "#fafafa",
        "blue-light": "#568df4",
        "bright-Orange": "#FF742D",
        "soft-vanilla": "#FFF5D2",
      },
    },
  },
  plugins: [],
};
