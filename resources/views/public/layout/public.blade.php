<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('pageTitle') | Queen's Chips</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
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

  
        <section class="home__bg">

            <header>
                
                <h1 class="logo wow fadeInUp">
                    <a href="#">
                        {!! getPhoto('logo.png') !!}
                    </a>
                </h1>

            </header>

            <div class="home__slogan">

                <div class="row">

                    <div class="col-md-10 col-md-offset-1 wow fadeInUp">

                        {!! getPhoto('slogan.png') !!}
   
                    </div>

                </div>

            </div>

      
            <div class="container">

                <div class="row">

                    <div class="col-md-6 col-md-offset-3">
                        
                        <h2 class="h1 home__title wow fadeInUp">Welcome to Queen's Chips</h2>
                    
                        <h3 class="home__subtitle wow fadeInUp">Discover the original taste of french fries Dutch</h3>
                    
                    </div>

                </div>
            
            </div>

        </section>

        <section class="home__concept">

            <div class="container">

                <div class="row">

                    <div class="col-md-12">

                        <div class="row">

                            <div class="col-md-7 wow fadeInLeft">

                                <h2>Concept</h2>

                                <p class="lead">
                                    Amsterdam is a city of tulips, windmills, museums, bicycles.
                                    A city that everyone who visits the witch, with its atmosphere so fascinating.
                                    Amsterdam is a city to live and to explore by foot, discovering in its streets
                                    a must in the international street food: french fries Dutch.
                                    QUEEN'S CHIPS was created to bring the world the Dutch style by adding to it a focus
                                    authenticity of raw materials to provide an experience related to a concept of street food genuine.
                                    By implementing advanced production processes QUEEN'S CHIPS is able
                                    to achieve high quality standards and to position itself among industry leaders.
                                    QUEEN'S CHIPS is promoting a real trend of international gastronomy and, in balance between tradition and quality,
                                </p>


                                <a href="#" class="btn btn-default">Read More</a>

                            </div>

                            <div class="col-md-5 wow fadeInRight">

                                {!! getPhoto('bike-and-flowers.png') !!}

                            </div>

                        </div>


                    </div>

                </div>
            
            </div>

        </section>  

        <section class="home__prices">

        
        </section>



        <section class="home__sauces">

            <div class="container">

                <div class="sauce wow fadeInLeft">
                    {!! getPhoto('sauces.jpg', "Queen's Chips Sauces") !!}
                </div>

                <div class="row">

                    <div class="col-md-12">

                        <h2 class="text-center">Sauces</h2>

                    </div>

                    <div class="col-md-12">

                        <div class="row">

                            <div class="col-md-10 col-md-offset-2">

                                <div class="row wow fadeInRight">

                                    <div class="col-md-4">

                                        <dl>
                                            <dt>ANDALUSA</dt>
                                            <dd>Refined sauce, slightly spicy</dd>

                                            <dt>COCKTAIL</dt>
                                            <dd>Sauce made with whiskey</dd>
                                            
                                            <dt>CURRY</dt>
                                            <dd>Sauce oriental flavor</dd>
                                            
                                            <dt>HOT SHOT</dt>
                                            <dd>Flavored sauce and spicy</dd>
                                            
                                            <dt>CURRY KETCHUP</dt>
                                            <dd>slightly sweet ketchup and speziatoe</dd>
                                            
                                            <dt>MOROCCAN</dt>
                                            <dd>Eastern spicy taste. Without animal fats</dd>
                                            
                                            <dt>ALGERIA</dt>
                                            <dd>Intense taste. Without animal fats, ideal for vegetarians</dd>
                                        </dl>

                                    </div>

                                    <div class="col-md-4">

                                        <dl>
                                            <dt>ANDALUSA</dt>
                                            <dd>Refined sauce, slightly spicy</dd>

                                            <dt>COCKTAIL</dt>
                                            <dd>Sauce made with whiskey</dd>
                                            
                                            <dt>CURRY</dt>
                                            <dd>Sauce oriental flavor</dd>
                                            
                                            <dt>HOT SHOT</dt>
                                            <dd>Flavored sauce and spicy</dd>
                                            
                                            <dt>CURRY KETCHUP</dt>
                                            <dd>slightly sweet ketchup and speziatoe</dd>
                                            
                                            <dt>MOROCCAN</dt>
                                            <dd>Eastern spicy taste. Without animal fats</dd>
                                            
                                            <dt>ALGERIA</dt>
                                            <dd>Intense taste. Without animal fats, ideal for vegetarians</dd>
                                        </dl>

                                    </div>

                                    <div class="col-md-4">

                                        <dl>
                                            <dt>ANDALUSA</dt>
                                            <dd>Refined sauce, slightly spicy</dd>

                                            <dt>COCKTAIL</dt>
                                            <dd>Sauce made with whiskey</dd>
                                            
                                            <dt>CURRY</dt>
                                            <dd>Sauce oriental flavor</dd>
                                            
                                            <dt>HOT SHOT</dt>
                                            <dd>Flavored sauce and spicy</dd>
                                            
                                            <dt>CURRY KETCHUP</dt>
                                            <dd>slightly sweet ketchup and speziatoe</dd>
                                            
                                            <dt>MOROCCAN</dt>
                                            <dd>Eastern spicy taste. Without animal fats</dd>
                                            
                                            <dt>ALGERIA</dt>
                                            <dd>Intense taste. Without animal fats, ideal for vegetarians</dd>
                                        </dl>

                                    </div>  
                                </div>
                            </div>                                                      

                        </div>

                    </div>

                </div>

            </div>


        </section>


        <section class="home__openings">

        
        </section>        

 

        @yield('content')


        <script src="{{ elixir('js/public.js') }}"></script>

        @yield('footer_scripts')

        @include('flash')

    </body>
</html>     