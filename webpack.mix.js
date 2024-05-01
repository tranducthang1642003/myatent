/// file biên dịch scss kết nối 

const mix = require('laravel-mix');
mix.sass('resources/scss/main.scss', 'public/css');
mix.sass('resources/scss/layout.scss', 'public/css');
mix.sass('resources/scss/list.scss', 'public/css');
