@extends('public.layout.home')

@section('pageTitle', 'Home')

@section('bodyClass', 'home')

@section('content')

    <section class="home__bg">

        <header>
            
            <h1 class="logo wow fadeInUp">
                <a href="{{ route('home') }}">
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

                            <p>
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


                            <a href="{{ route('concept') }}" class="btn btn-default">Read More</a>

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

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div class="bg white transparent">
                    
                        <div class="row">

                            <div class="col-md-5">
                            
                                {!! getPhoto('menu-fries.jpg', 'Menu Price') !!}

                            </div>

                            <div class="col-md-7">
                            
                                <h2>Prices</h2>

                                <div class="row cone">

                                    <div class="col-md-4">

                                        <h3 class="cone__title">Small Cone</h3>

                                    </div>

                                    <div class="col-md-4">

                                        <h3 class="cone__title">Cone Middle</h3>

                                    </div>

                                    <div class="col-md-4">

                                        <h3 class="cone__title">Cone Jumbo</h3>

                                    </div>                                        

                                </div>

                            </div>                                

                        </div>

                    </div>

                </div>

            </div>

        </div>

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

                            <div class="row">

                                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">

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

                                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">

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

                                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.4s">

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

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div class="bg white transparent">

                        <div class="row">

                            <div class="col-md-5">
                                {!! getPhoto('next-opening.jpg', 'Openings') !!}
                            </div>

                            <div class="col-md-7">

                                <h3>Upcoming Openings</h3>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>  

    </section> 

@endsection