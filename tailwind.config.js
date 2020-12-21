const colors = require('tailwindcss/colors');

module.exports = {
  purge: {
      mode: "layers",
      content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
      ]
  },
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    extend: {
        fontFamily: {
            sans: ["Montserrat", "sans-serif"],
            display: ["Montserrat", "sans-serif"],
            body: ["Montserrat", "sans-serif"],
        },
        colors: {
          amber: colors.amber,
          gray: colors.blueGray
        },
        spacing: {
          '18': '4.5rem',
          '15': '3.75rem',
          '128': '32rem',
          '144': '36rem',
        }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
