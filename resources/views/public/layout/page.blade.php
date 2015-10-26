<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('pageTitle') | Queen's Chips</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="{{ elixir('css/public.css') }}" rel="stylesheet">

        @yield('header_styles')

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body class="@yield('bodyClass')">

        @include('public.partials._nav')

        @yield('content') 

        @include('public.partials._footer')

        <script src="{{ elixir('js/public.js') }}"></script>

        @yield('footer_scripts')

        @include('flash')

        <script src="https://maps.googleapis.com/maps/api/js"></script>

        <script src="{{ elixir('js/map.js') }}"></script>      

    </body>
</html>     