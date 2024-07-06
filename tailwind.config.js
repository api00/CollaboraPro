import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {

        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'light-white': '#FAFAFA',
                'cream-white': '#FFFDD0',
            },
            linearGradientColors: {
                'white-gradient': ['rgba(255, 255, 255, 0)', '#FAFAFA', '#FFFDD0'],
            },
        },

    },

    plugins: [forms],

};
