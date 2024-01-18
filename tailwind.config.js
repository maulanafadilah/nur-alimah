/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        primary: "#0BA0C8",
      },
      fontFamily: {
        Montserrat: "Montserrat, sans-serif",
        Poppins: "Poppins, sans-serif",
    },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

