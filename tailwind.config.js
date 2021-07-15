const colors = require('tailwindcss/colors')
module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      borderWidth: {
        6: '6px'
      },
      colors: {
        'cyan':colors.cyan,
        'emerald':colors.emerald,
      },      
      spacing: {
        '13': '3.25rem',
        '15': '3.75rem',
        '25': '6.25rem',
        '30': '7.5rem',
        '128': '32rem',
        '144': '40rem',
      },
      
      transitionDuration: {
        '0': '0ms',
        '2000': '2000ms',
      },
      
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
