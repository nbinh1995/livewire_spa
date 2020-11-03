const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.sass("resources/sass/style.scss", "public/css/");
mix.copy('node_modules/admin-lte/plugins', 'public/admin-lte/plugins');
mix.copy('node_modules/admin-lte/dist', 'public/admin-lte/dist');
mix.copy('node_modules/admin-lte/build', 'public/admin-lte/build');
mix.copy('node_modules/admin-lte/bower_components', 'public/admin-lte/bower_components');