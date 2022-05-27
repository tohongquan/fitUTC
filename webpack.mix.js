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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

// mix.js([
//     'resources/js/jquery.min.js',
//     'resources/js/breakpoints.min.js',
//     'resources/js/browser.min.js',
//     'resources/js/main.js',
//     'resources/js/util.js',
// ], 'public/js/main.js')

// mix.js('resources/js/jquery.min.js', 'public/js/jquery.min.js')
// mix.js('resources/js/breakpoints.min.js', 'public/js/breakpoints.min.js')
// mix.js('resources/js/browser.min.js', 'public/js/browser.min.js')
// mix.js('resources/js/main.js', 'public/js/main.js')
// mix.js('resources/js/util.js', 'public/js/util.js')
//
// mix.styles([
//     'resources/css/fontawesome-all.min.css',
//     'resources/css/main.css',
// ], 'public/css/main.css')
//
// mix.styles('resources/css/fontawesome-all.min.css', 'public/css/fontawesome-all.min.css')
// mix.styles('resources/css/main.css', 'public/css/main.css')

// mix.sass('resources/sass/base/_page.scss', 'public/sass/base/')
//     .sass('resources/sass/base/_reset.scss', 'public/sass/base/')
//     .sass('resources/sass/base/_typography.scss', 'public/sass/base/');
// mix.sass('resources/sass/components/_actions.scss', 'public/sass/components/')
//     .sass('resources/sass/components/_box.scss', 'public/sass/components/')
//     .sass('resources/sass/components/_button.scss', 'public/sass/components/')
//     .sass('resources/sass/components/_contact.scss', 'public/sass/components/')
//     .sass('resources/sass/components/_features.scss', 'public/sass/components/')
//     .sass('resources/sass/components/_form.scss', 'public/sass/components/')
//     .sass('resources/sass/components/_icon.scss', 'public/sass/components/')
//     .sass('resources/sass/components/_icons.scss', 'public/sass/components/')
//     .sass('resources/sass/components/_image.scss', 'public/sass/components/')
//     .sass('resources/sass/components/_list.scss', 'public/sass/components/')
//     .sass('resources/sass/components/_mini-posts.scss', 'public/sass/components/')
//     .sass('resources/sass/components/_pagination.scss', 'public/sass/components/')
//     .sass('resources/sass/components/_posts.scss', 'public/sass/components/')
//     .sass('resources/sass/components/_row.scss', 'public/sass/components/')
//     .sass('resources/sass/components/_section.scss', 'public/sass/components/')
//     .sass('resources/sass/components/_table.scss', 'public/sass/components/');
// mix.sass('resources/sass/layout/_banner.scss', 'public/sass/layout/')
//     .sass('resources/sass/layout/_footer.scss', 'public/sass/layout/')
//     .sass('resources/sass/layout/_header.scss', 'public/sass/layout/')
//     .sass('resources/sass/layout/_main.scss', 'public/sass/layout/')
//     .sass('resources/sass/layout/_menu.scss', 'public/sass/layout/')
//     .sass('resources/sass/layout/_sidebar.scss', 'public/sass/layout/')
//     .sass('resources/sass/layout/_wrapper.scss', 'public/sass/layout/');
// mix.sass('resources/sass/libs/_breakpoints.scss', 'public/sass/libs/')
//     .sass('resources/sass/libs/_functions.scss', 'public/sass/libs/')
//     .sass('resources/sass/libs/_html-grid.scss', 'public/sass/libs/')
//     .sass('resources/sass/libs/_mixins.scss', 'public/sass/libs/')
//     .sass('resources/sass/libs/_vars.scss', 'public/sass/libs/')
//     .sass('resources/sass/libs/_vendor.scss', 'public/sass/libs/');
// mix.sass('resources/sass/main.scss', 'public/sass/');

