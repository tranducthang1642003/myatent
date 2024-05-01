// webpack.mix.js trong module
const mix = require('laravel-mix');

mix.js('resources/assets/js/cv.js', 'public/js')
   .sass('resources/assets/sass/cv.scss', 'public/css');
