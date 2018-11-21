const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js');
mix.sass('resources/sass/app.scss', 'public/css');
mix.sass('resources/assets/scss/slideshow.scss', 'public/css');
mix.copyDirectory('resources/assets/images','public/img');
mix.copy('resources/js/lozad.min.js','public/js/lozad.min.js');
mix.copy('resources/assets/scss/animate.min.css','public/css/animate.min.css');
mix.copy('resources/assets/scss/fontawesome.min.css','public/css/fontawesome.min.css');
mix.copyDirectory('resources/assets/fonts','public/fonts');

