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
    mix.sass('app.scss');
    mix.copy("bower_components/jquery/dist/jquery.min.js", "resources/assets/js/jquery.min.js");
    mix.copy("bower_components/vue/dist/vue.js", "resources/assets/js/vue.js");
    mix.copy("bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js", "resources/assets/js/bootstrap.min.js");
    mix.copy("bower_components/bootstrap-sass/assets/javascripts/bootstrap-sprockets.js", "resources/assets/js/bootstrap-sprockets.js");
    mix.copy("bower_components/bootstrap-sass/assets/fonts/bootstrap", "public/fonts");
    mix.copy("bower_components/ckeditor", "public/ckeditor");
    mix.copy("ckeditor.config.js", "public/ckeditor/config.js");

    mix.scripts(["jquery.min.js", "vue.js", "bootstrap.min.js", "bootstrap-sprockets.js"])
        .styles(["styles.css"])
        .version(["public/css/all.css", "public/js/all.js"]);

});
