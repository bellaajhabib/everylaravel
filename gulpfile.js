

var elixir = require('laravel-elixir');

var uglify = require('gulp-uglify');

var paths = {
    'jquery': './vendor/bower_components/jquery/',
    'bootstrap': './vendor/bower_components/bootstrap-sass/assets/'
}

elixir(function(mix) {
    mix
        .sass('main.scss', 'public/css/main.css')
        .copy(paths.bootstrap + '/fonts', 'public/fonts')

        .copy(
            'vendor/bower_components/jquery/dist/jquery.min.js',
            'public/js/vendor/jquery.js'
        )
    .copy(
        'vendor/bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js',
        'public/js/vendor/bootstrap.js'
    ).copy(
        'vendor/bower_components/font-awesome/css/font-awesome.min.css',
        'public/css/vendor/font-awesome.css'
        )
        .copy(
            'vendor/bower_components/angular/angular.min.js',
            'public/js/vendor/angular.js'
        );

});

elixir(function(mix) {
    mix.sass('app.scss')
        .scripts([
            'jquery.js',
            'angular.js',
            'bootstrap.js'
        ], 'public/js','public/js/vendor')

});
