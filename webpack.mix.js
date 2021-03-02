let mix = require('laravel-mix');

mix.sass('scss/app.scss', 'css/app.css').options({ processCssUrls: false });