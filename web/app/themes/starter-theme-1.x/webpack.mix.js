let mix = require('laravel-mix');
const WebpackSassAutoloader = require('webpack-sass-autoloader');
new WebpackSassAutoloader('/resources/assets/styles/')

mix.js('resources/assets/scripts/script.js', 'scripts')
    .sass('resources/assets/styles/style.scss', 'styles')
    .setPublicPath('dist');
