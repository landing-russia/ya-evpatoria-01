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
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        fontFamily: {
            sans: ["Inter", "sans-serif"],
            display: ["Inter", "sans-serif"],
            body: ["Inter", "sans-serif"],
        }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
