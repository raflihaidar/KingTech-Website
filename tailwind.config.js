/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      main: ["Poppins", "sans-serif"],
    },
    extend: {
      colors: {
        "custom-2": "#C99808",
      },
      backgroundImage: {
        "hero-pattern": "url('/public/images/hero-pattern.png')",
      },
    },
  },
  plugins: [],
};
