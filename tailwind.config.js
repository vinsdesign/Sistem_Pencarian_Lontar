/** @type {import('tailwindcss').Config} */
export default {
  content: ["./**/*.{html,js,php}", "./node_modules/flowbite/**/*.js"],
  theme: {
    backgroundImage: {
      bgLogin: "url('./public/assets/bg_login.jpg')",
    },
    screens: {
      xxsm: "320px",
      // => @media (min-width: 320px) { ... }
      xsm: "370px",
      // => @media (min-width: 370px) { ... }
      base: "480px",
      // => @media (min-width: 370px) { ... }
      sm: "640px",
      // => @media (min-width: 640px) { ... }
      md: "768px",
      // => @media (min-width: 768px) { ... }
      lg: "1024px",
      // => @media (min-width: 1024px) { ... }
      xl: "1280px",
      // => @media (min-width: 1280px) { ... }
      "2xl": "1536px",
      // => @media (min-width: 1280px) { ... }
    },
    colors: {
      transparent: "transparent",
      current: "currentColor",
      darkBlue: "#2D3250",
      mediumBlue: "#424769",
      lightBlue: "#676F9D",
      orangePastel: "#F9B17A",
      darkSecondary: "#9A9A9A",
      lightSecondary: "#E7E7E7",
      white: "#ffffff",
      danger: "#E02424",
      warning: "#FACA15",
      success: "#057A55",
      black: "#000000",
    },
    extend: {
      fontFamily: {
        montsBold: "Montserrat-Bold, sans-serif",
        montsSemiBold: "Montserrat-SemiBold, sans-serif",
        montsMedium: "Montserrat-Medium, sans-serif",
        montsItalic: "Montserrat-Italic, sans-serif",
        montserrat: "Montserrat-Regular, sans-serif", // Adds a new `font-display` class
      },
    },
  },
  plugins: [require("flowbite/plugin")],
};
