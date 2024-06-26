/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    container: {
      center: true,
    },

    extend: {
      backgroundImage: {
        loginImage: 'url("../assets/bglogin.jpg")',
      },

      fontFamily: {
        cabin: ["Cabin", "sans-serif"],
        spartanThin: ["spartanThin"],
        spartanSemiBold: ["spartanSemiBold"],
        spartanRegular: ["spartanRegular"],
        spartanMedium: ["spartanMedium"],
        spartanLight: ["spartanLight"],
        spartanExtraLight: ["spartanExtraLight"],
        spartanExtraBold: ["spartanExtraBold"],
        spartanBold: ["spartanBold"],
        spartanBlack: ["spartanBlack"],
        Poppins: ["Poppins", "sans-serif"],
      },

      colors: {
        "main-color": "#f6f1e9",
        "secondary-color": "#CC9B6D",
      },
      screens: {
        xl: "1200px",
        "2xl": "1320px",
        "3xl": "1600px",
      },
    },
  },
  plugins: [],
};
