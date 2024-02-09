import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
const colors = require('tailwindcss/colors')


/** @type {import('tailwindcss').Config} */
export default {
    mode: 'jit',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                sky: colors.sky,
                cyan: colors.cyan,
              },
        },
    },

    plugins: [
        require('flowbite/plugin')
    ],

};
