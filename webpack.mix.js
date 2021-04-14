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

mix.styles([
    'resources/web-stack/css/fonts/linecons/css/linecons.css',
    'resources/web-stack/css/fonts/fontawesome/css/font-awesome.min.css',
    'resources/web-stack/css/bootstrap.css',
    'resources/web-stack/css/xenon-core.css',
    'resources/web-stack/css/xenon-components.css',
    'resources/web-stack/css/xenon-skins.css',
    'resources/web-stack/css/nav.css'
], 'public/css/app.css');

mix.copyDirectory('resources/web-stack/css/fonts/fontawesome/fonts', 'public/fonts');
mix.copyDirectory('resources/web-stack/css/fonts/linecons/font', 'public/font');
mix.copyDirectory('resources/web-stack/images', 'public/img');

mix.scripts([
    'resources/web-stack/js/jquery-1.11.1.min.js',
    'resources/web-stack/js/bootstrap.min.js',
    'resources/web-stack/js/TweenMax.min.js',
    'resources/web-stack/js/resizeable.js',
    'resources/web-stack/js/joinable.js',
    'resources/web-stack/js/xenon-api.js',
    'resources/web-stack/js/xenon-toggles.js',
    'resources/web-stack/js/xenon-custom.js',
], 'public/js/app.js');

mix.version();
