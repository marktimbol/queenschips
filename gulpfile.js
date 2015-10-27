var elixir = require('laravel-elixir');

var bowers = '../../../bower_components/';

elixir(function(mix) {

    /*=== PUBLIC SCRIPTS ===*/
    mix.sass('app.scss', 'resources/assets/css/app.css')

    	.styles([
            bowers + 'bootstrap/dist/css/custom/bootstrap.css',
            bowers + 'font-awesome/css/font-awesome.css',
            bowers + 'wowjs/css/libs/animate.css',
            'app.css'
    		], 'public/css/public.css')

        .styles([
            bowers + 'sweetalert/dist/sweetalert.css'
            ], 'public/css/sweetalert.css')

    	.scripts([
    		bowers + 'jquery/dist/jquery.js',
    		bowers + 'bootstrap/dist/js/bootstrap.js',
            bowers + 'wowjs/dist/wow.js',
    		'app.js'
    		], 'public/js/public.js')


        .scripts([
            bowers + 'sweetalert/dist/sweetalert.min.js'
            ], 'public/js/sweetalert.js')

        .scripts([
            'map.js'
            ], 'public/js/map.js')  


    /*=== ADMIN SCRIPTS ===*/
    mix.sass('admin.scss', 'resources/assets/css/admin.css')

        .styles([
            bowers + 'bootstrap/dist/css/bootstrap.css',
            bowers + 'metisMenu/dist/metisMenu.css',
            bowers + 'font-awesome/css/font-awesome.css',
            'admin-template.css',
            'admin.css',
            ], 'public/css/admin.css')

        .scripts([
            bowers + 'jquery/dist/jquery.js',
            bowers + 'bootstrap/dist/js/bootstrap.js',
            bowers + 'metisMenu/dist/metisMenu.js',
            'admin.js'
            ], 'public/js/admin.js')        

        .version([

            /*=== PUBLIC ===*/
            'css/public.css',
            'js/public.js',

            'css/sweetalert.css',
            'js/sweetalert.js',

            'js/map.js',

            /*=== ADMIN ===*/
            'css/admin.css',
            'js/admin.js'
            ]);
});
