// webpack.mix.js

const mix = require('laravel-mix');
const postCssImports = require('postcss-import');
const tailwindcss = require('tailwindcss');

mix
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        postCssImports(),
        tailwindcss(),
    ])
    .js('resources/js/app.js', 'public/js')
    .vue(); // If using Vue, keep this line; otherwise, you can remove it
