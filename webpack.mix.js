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

mix.babelConfig ({ 
        "plugins": [
            "transform-class-properties"
        ]
    })//.js('resources/js/scripts.js', 'public/js/scripts.js')
    .js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/home.scss', 'public/css')
    .sass('resources/sass/cart.scss', 'public/css')
    .sass('resources/sass/vskrytie.scss', 'public/css')
    .sass('resources/sass/catalog.scss', 'public/css')
    .sass('resources/sass/admin_items.scss', 'public/css')
    .sass('resources/sass/admin_posts.scss', 'public/css')
    .sass('resources/sass/login.scss', 'public/css')
    .sass('resources/sass/posts.scss', 'public/css')
    .sass('resources/sass/post.scss', 'public/css')
    .sass('resources/sass/doors.scss', 'public/css')
    .options({
        processCssUrls: false
     });
    