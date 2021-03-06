var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')
        .browserify('app.js');
});

// elixir(function(mix) {
//     mix.sass('app.scss')
//
//         .styles([
//             'libs/toolkit.css',
//             'libs/application.css'
//          ], './public/css/libs.css')
//
//         .scripts([
//             'libs/jquery.min.js',
//             'libs/chart.js',
//             'libs/toolkit.js',
//             'libs/application.js'
//         ], './public/js/libs.js')
//
// });


