import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            screens: {
                'small-desktop': '1050px'
            },
            colors: {
                'blue-primary': '#124D59',
                'blue-secondary': '#0B8493',
                'orange-primary': '#FF8040',
                'light-gray': '#525266',
                'full-black': '#0F1726'
            }
        },
    },
    plugins: [
        
    ],
};

