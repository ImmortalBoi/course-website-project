const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: "class",
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Jost', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                'darkblue':'#120F2D',
                'lightblue':'#2878EB'
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
