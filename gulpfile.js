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

        .styles([
            bowers + 'photoswipe/dist/photoswipe.css',
            bowers + 'photoswipe/dist/default-skin/default-skin.css',
            ], 'public/css/photoswipe.css')

        .styles([
            'libs/samsung-grid.css'
            ], 'public/css/samsung-grid.css')

    	.scripts([
    		bowers + 'jquery/dist/jquery.js',
    		bowers + 'bootstrap/dist/js/bootstrap.js',
            bowers + 'wowjs/dist/wow.js',
            'libs/modernizr.custom.js',
    		'app.js'
    		], 'public/js/public.js')


        .scripts([
            bowers + 'sweetalert/dist/sweetalert.min.js'
            ], 'public/js/sweetalert.js')
        .scripts([
            bowers + 'photoswipe/dist/photoswipe.min.js',
            bowers + 'photoswipe/dist/photoswipe-ui-default.min.js',
            'libs/photoswipe.js'
            ], 'public/js/photoswipe.js')

        .scripts([
            'libs/masonry.pkgd.min.js',
            'libs/imagesloaded.pkgd.min.js',
            'libs/classie.js',
            'libs/colorfinder-1.1.js',
            'libs/gridScrollFx.js',
            'libs/samsung-grid.js'
            ], 'public/js/samsung-grid.js')

        .scripts([
            'map.js'
            ], 'public/js/map.js')  


    /*=== ADMIN SCRIPTS ===*/
    mix.sass('admin.scss', 'resources/assets/css/admin.css')

        .styles([
            bowers + 'bootstrap/dist/css/bootstrap.css',
            bowers + 'metisMenu/dist/metisMenu.css',
            bowers + 'font-awesome/css/font-awesome.css',
            bowers + 'sweetalert/dist/sweetalert.css',
            'admin-template.css',
            'admin.css',
            ], 'public/css/admin.css')

        .scripts([
            bowers + 'jquery/dist/jquery.js',
            bowers + 'bootstrap/dist/js/bootstrap.js',
            bowers + 'metisMenu/dist/metisMenu.js',
            bowers + 'sweetalert/dist/sweetalert.min.js',
            'admin.js'
            ], 'public/js/admin.js')  

        .styles([
            bowers + 'dropzone/dist/dropzone.css'
            ], 'public/css/dropzone.css')

        .scripts([
            bowers + 'dropzone/dist/dropzone.js',
            'admin/dropzone.js'
            ], 'public/js/dropzone.js')      

        .version([

            /*=== PUBLIC ===*/
            'css/public.css',
            'js/public.js',

            'css/sweetalert.css',
            'js/sweetalert.js',

            'js/map.js',

            'css/photoswipe.css',
            'js/photoswipe.js',

            'css/samsung-grid.css',
            'js/samsung-grid.js',

            /*=== ADMIN ===*/
            'css/admin.css',
            'js/admin.js',

            'css/dropzone.css',
            'js/dropzone.js'
            ]);
});
