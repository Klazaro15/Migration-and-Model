// webpack.mix.js

const mix = require('laravel-mix');

mix
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .js('resources/js/app.js', 'public/js')
    .vue(); // If using Vue, keep this line; otherwise, you can remove it
