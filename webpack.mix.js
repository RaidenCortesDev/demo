/* 
const mix = require('laravel-mix');

mix.copy('resources/vendor/bootstrap/css/bootstrap.min.css', 'public/css/bootstrap.min.css')
    .copy('resources/vendor/bootstrap/js/bootstrap.bundle.min.js', 'public/js/bootstrap.bundle.min.js');

mix.sass('resources/css/app.scss', 'public/css')
    .js('resources/js/app.js', 'public/js')
    .sourceMaps();

if (mix.inProduction()) {
    mix.version();
} 
*/
const mix = require('laravel-mix');

// Resto de la configuración de Laravel Mix
mix.copy('resources/vendor/bootstrap/css/bootstrap.min.css', 'public/css/bootstrap.min.css')
    .copy('resources/vendor/bootstrap/js/bootstrap.bundle.min.js', 'public/js/bootstrap.bundle.min.js')
    .copy('resources/icons/bootstrap-icons.css', 'public/css')
    .sass('resources/css/app.scss', 'public/css')
    .js('resources/js/app.js', 'public/js')
    .sourceMaps();

if (mix.inProduction()) {
    mix.version();
}
