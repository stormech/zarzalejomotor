const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            white: colors.white,
            trueGray: colors.indigo,
            orange: colors.orange,
            greenLim: colors.lime,
            gray: colors.gray,
            red: colors.red,
            yellow: colors.yellow,
            indigo: colors.indigo,
            blue:colors.blue,
            green:colors.green,
            pink:colors.pink,
            amber:colors.amber,
            black:colors.black,
            emerald:colors.emerald,
            

          },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
