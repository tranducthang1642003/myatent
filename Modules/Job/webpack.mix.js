// webpack.mix.js trong module
const mix = require('laravel-mix');

mix.js('resources/assets/js/job.js', 'public/js')
   .sass('resources/assets/sass/job.scss', 'public/css');
