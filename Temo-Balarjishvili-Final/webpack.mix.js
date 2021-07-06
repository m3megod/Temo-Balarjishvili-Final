let mix = require('laravel-mix');


mix.webpackConfig({
    resolve: {
        alias: {
            'bootstrap-confirmation': 'bootstrap-confirmation2/bootstrap-confirmation.js' 
        }
    }
});
mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
