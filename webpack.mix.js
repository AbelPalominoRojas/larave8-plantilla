const mix = require('laravel-mix');
require('laravel-mix-clean');

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

mix
    .js('resources/js/app.js', 'public/js')
        .sass('resources/scss/app.scss',
        'public/css')
    .options({
        // postCss: [
        //     require('postcss-css-variables')()
        // ],
        processCssUrls: false,
        // quietDeps: true
    })
    .copyDirectory([
        'node_modules/@fortawesome/fontawesome-free/webfonts',
        'resources/fonts'
    ], 'public/fonts')
    .copyDirectory([
        'resources/images'
    ], 'public/images')
    .version()
    .clean({
        cleanOnceBeforeBuildPatterns: [
            './js',
            './css',
            './fonts',
            './img',
            './images',
        ],
    });
