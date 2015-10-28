<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>@yield('pageTitle') | Queen's Chips Arabia</title>

        <link rel="stylesheet" href="{{ elixir('css/admin.css') }}" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        @yield('header_styles')

    </head>

    <body>

        <div id="wrapper">

            @include('admin.partials._nav')

            <div id="page-wrapper">

                @yield('content')
            
            </div>
        </div>

        <script src="{{ elixir('js/admin.js') }}"></script>

        @yield('footer_scripts')

        @include('flash')

    </body>

</html>
