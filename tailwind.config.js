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
            sans: ["Inter", "sans-serif"],
            display: ["Inter", "sans-serif"],
            body: ["Inter", "sans-serif"],
        },
        colors: {
          amber: colors.amber
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
