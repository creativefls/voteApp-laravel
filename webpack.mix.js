let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.sass('resources/assets/sass/paper-dashboard.scss', 'public/css/app.css');
mix.scripts([
  'resources/assets/js/jquery-1.10.2.js',
  'resources/assets/js/bootstrap.min.js',
  'resources/assets/js/bootstrap-checkbox-radio.js',
  'resources/assets/js/bootstrap-notify.js',
  'resources/assets/js/chartist.min.js',
  'resources/assets/js/paper-dashboard.js',
  'resources/assets/js/demo.js',
],'public/js/app.js');
