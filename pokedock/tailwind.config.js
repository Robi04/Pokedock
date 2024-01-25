/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php'
    ],
    plugins: [],

    theme: {
        extend: {
          fontFamily: {
            pokeFont: 'pokeFont',
            sigmarOne: 'sigmarOne',
          },
          colors: {
            pokeBlue: 'rgb(23 89 139 / 62%)',
            pokeBlueB: 'rgb(241 247 255)',
          }
        },
      },
    variants: {
        extend: {},
    },
}
