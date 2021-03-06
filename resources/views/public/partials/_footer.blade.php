<section class="home__contact">

    <div id="map"></div>

    <div class="container">

        <div class="row">

            <form method="POST" action="{{ route('contact') }}">

                {!! csrf_field() !!}     

                <div class="col-md-12">
                     <h3>Send us an Inquiry</h3>
                </div>   

                <div class="col-md-6 wow fadeInLeft">

                    @include('errors.form')

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject:</label>
                        <input type="text" name="subject" id="subject" class="form-control" />
                    </div>                                                                             
                </div>

                <div class="col-md-6 wow fadeInLeft">
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea name="message" id="message" class="form-control" rows="9"></textarea>
                    </div>     

                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Send Inquiry</button>
                    </div>  
                </div>
            </form>

        </div>

    </div>

</section>

<footer>

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <ul class="social-icons">
                    <li>
                        <a href="https://www.facebook.com/queenschips" target="_blank">
                            {!! getPhoto('facebook.png', 'Facebook') !!}
                        </a>
                    </li>

                    <li>
                        <a href="https://instagram.com/queenschips/" target="_blank">
                            {!! getPhoto('instagram.png', 'Instagram') !!}
                        </a>
                    </li>

                    <li>
                        <a href="https://www.youtube.com/channel/UCCMXmJA0XUC3jrU-BqtCuBA" target="_blank">
                            {!! getPhoto('youtube.png', 'Youtube') !!}
                        </a>
                    </li>                                                        
                </ul>

                <div class="clearfix"></div>

                <p class="copyright text-center">
                    QUEEN'S CHIPS DUBAI | Copyright &copy; {{ date('Y') }}
                </p>

            </div>

        </div>

    </div>

</footer>