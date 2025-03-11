import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
    ],
    theme: {
        extend: {
          colors: {
            'custom-blue': '#4F46E5',  // Custom deep blue
            'custom-light-blue': '#93C5FD', // Custom light blue for hover effects
          },
          fontFamily: {
            sans: ['Inter', 'Arial', 'sans-serif'],  // Custom fonts
          },
          spacing: {
            'custom-spacing': '3rem',  // Custom spacing to use where needed
          },
        },
      },
      plugins: [],
    };