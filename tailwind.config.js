/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  darkMode: 'class',
  content: [
    './index.php',
    './src/views/**/*.php'
  ],
  theme: {
    extend: {
      colors:{
        'turquoise': {
          '50': '#effcfb',
          '100': '#d6f7f5',
          '200': '#b1f0f0',
          '300': '#7be4e5',
          '400': '#41cfd2',
          '500': '#23b3b7',
          '600': '#20909a',
          '700': '#20747e',
          '800': '#225f68',
          '900': '#214f58',
          '950': '#10343c',
        },
      },
        fontFamily: {
            'sans': ['Figtree', ...defaultTheme.fontFamily.sans],
        },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('flowbite/plugin')
  ],
}

