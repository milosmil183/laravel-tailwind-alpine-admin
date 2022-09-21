const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
  ],

  theme: {
    extend: {
      fontFamily: {
        sans: ['Nunito', ...defaultTheme.fontFamily.sans],
      },
      backgroundImage: {
        'auth-blue': "url('/img/bg-blue.png')",
        'radial-white': "url('/img/bg-radial-white.png')",
      },
      colors: {
        primary: '#4880FF',
      },
    },
  },

  plugins: [require('@tailwindcss/forms')],
};
