@extends('main')

@section('content')
    
    <!-- Bnner Section -->
    <section class="banner-section">
        <div class="banner-carousel owl-carousel owl-theme">
            <div class="slide-item" style="background-image: url(images/seedlings/1.jpg);">
                <div class="auto-container">
                <div class="content-box">
                        <h4>Quality Seedlings </h4>
                        <h2>Fruit Seedlings for your Fruit Farming</h2>
                        <div class="text">We will guide you every step of the way </div>
                        <div class="link-box">
                            <a href="{{url('navel')}}">Oranges <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="slide-item" style="background-image: url(images/avocado/v4.jpg);">
                <div class="auto-container">
                <div class="content-box">
                        <h4>Educating Masses </h4>
                        <h2>Making fruit farming easy and enjoyable</h2>
                        <div class="text">Get Enlightened on various fruit Cultivation Strategies</div>
                        <div class="link-box">
                            <a href="{{url('hass')}}">Avocados <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- End Bnner Section -->

    <!-- Services Section -->
    <section class="services-section">
        <div class="auto-container">
            <div class="outer-box">
                <div class="services-carousel owl-carousel owl-theme">
                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/grapes/g2.jpg" alt=""></figure>
                                <div class="overlay-box">
                                    <div class="inner">
                                        <div class="text">
                                            Grapes are berries that grow on a vine. Because of their versatility, 
                                            variety and portability, grapes are popular all over the world. 
                                        </div>
                                        <div class="link-box">
                                            <a href="{{url('grapes')}}">Read More <i class="fa fa-leaf"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="caption-box">
                                <span class="icon flaticon-plant"></span>
                                <h4><a href="{{url('grapes')}}">Grape Seedlings</a></h4>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/seedlings/1.jpg" alt=""></figure>
                                <div class="overlay-box">
                                    <div class="inner">
                                        <div class="text">
                                            Easily identifiable because of thier peculiar human-navel-like formation found opposite
                                            the stem-end, we can tell Navel Oranges from other cultivars
                                        </div>
                                        <div class="link-box">
                                            <a href="{{url('navel')}}">Read More <i class="fa fa-leaf"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="caption-box">
                                <span class="icon flaticon-plant"></span>
                                <h4><a href="{{url('navel')}}">Navel Orange Fruits</a></h4>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/avocado/v4.jpg" alt=""></figure>
                                <div class="overlay-box">
                                    <div class="inner">
                                        <div class="text">
                                            Hass Avocado is a type A cultivar of avocado with distinctive dark green-colored leaves, dimpled skin and weighs an average of 200 to 300 grams.

                                        </div>
                                        <div class="link-box">
                                            <a href="{{url('hass')}}">Read More <i class="fa fa-leaf"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="caption-box">
                                <span class="icon flaticon-plant"></span>
                                <h4><a href="{{url('hass')}}">Hass Avocado Seedlings</a></h4>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/mangoes/10.jpeg" alt=""></figure>
                                <div class="overlay-box">
                                    <div class="inner">
                                        <div class="text">
                                        Mangoes are increansingly becoming mans go to fruit because of its robust nutritional
                                        values, ready to eat nature and most recently it has become a source of both income and
                                        employment

                                        </div>
                                        <div class="link-box">
                                            <a href="{{url('mangoes')}}">Read More <i class="fa fa-leaf"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="caption-box">
                                <span class="icon flaticon-plant"></span>
                                <h4><a href="{{url('mangoes')}}">Mango Seedlings</a></h4>
                            </div>
                        </div>
                    </div>


                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/pomegranates/8.jpeg" alt=""></figure>
                                <div class="overlay-box">
                                    <div class="inner">
                                        <div class="text">
                                            Also known as seeded apple. It is a drought enduring plant and is known to be doing well
                                            along the tropics with small amouts of water it will flower thoughout the year
                                        </div>
                                        <div class="link-box">
                                            <a href="{{url('pomegranates')}}">Read More <i class="fa fa-leaf"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="caption-box">
                                <span class="icon flaticon-plant"></span>
                                <h4><a href="{{url('pomegranates')}}">Pomegranate Seedlings </a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Services Section -->

    <!-- Work Section -->
    <section class="work-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">Who We Are</span>
                <h2>About A-Fruitplant</h2>
            </div>

            <!--Work Tabs-->
            <div class="work-tabs tabs-box">
                <!--Tab Btns-->
                <ul class="tab-btns tab-buttons clearfix">
                    <li data-tab="#tab-1" class="tab-btn"> Enlightening</li>
                    <li data-tab="#tab-2" class="tab-btn active-btn">Provide</li>
                    <li data-tab="#tab-3" class="tab-btn">Support</li>
                </ul>
                
                <!--Tabs Container-->
                <div class="tabs-content">
                    <!--Tab -->
                    <div class="tab" id="tab-1">
                        <div class="row">
                            <!-- Content Column -->
                            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <h3>Educating Masses</h3>
                                    <div class="text">We educate you on the crop or fruit which you wish to cultivate. We enable you decide on:</div>
                                    <ul class="list-style-one">
                                        <li>Farming Strategy</li>
                                        <li>Best crop Variety</li>
                                        <li>Best soil type</li>
                                        <li>Farming conditions</li>
                                    </ul>
                                    <div class="btn-box"><a href="{{url('about')}}" class="theme-btn btn-style-one">Read More</a></div>
                                </div>
                            </div>

                            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <figure class="image"><a href="images/grapes/g1.jpg" class="lightbox-image" data-fancybox="images"><img src="images/grapes/g1.jpg" alt=""></a></figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Tab / Active Tab-->
                    <div class="tab active-tab" id="tab-2">
                        <div class="row">
                            <!-- Content Column -->
                            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                    <h3>Making available</h3>
                                    <div class="text">We will provide you with all you need to conduct your farming, for instance seedlings.</div>
                                    <ul class="list-style-one">
                                        <li>Grafted Seedlings</li>
                                        <li>Seedling varieties</li>
                                        
                                    </ul>
                                    <div class="btn-box"><a href="{{url('about')}}" class="theme-btn btn-style-one">Read More</a></div>
                                </div>
                            </div>

                            <!-- Image Column -->
                            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <figure class="image"><a href="images/grapes/g5.jpg" class="lightbox-image" data-fancybox="images"><img src="images/grapes/g5.jpg" alt=""></a></figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Tab -->
                    <div class="tab" id="tab-3">
                        <div class="row">
                            <!-- Content Column -->
                            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                    <h3>Holding your hand</h3>
                                    <div class="text">You will not be alone during this journey. We will support you every step of the way until you attain success.</div>
                                    <ul class="list-style-one">
                                        <li>Skill development</li>
                                        <li>The knowledge</li>
                                        
                                    </ul>
                                    <div class="btn-box"><a href="{{url('about')}}" class="theme-btn btn-style-one">Read More</a></div>
                                </div>
                            </div>

                            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <figure class="image"><a href="images/grapes/g2.jpg" class="lightbox-image" data-fancybox="images"><img src="images/grapes/g2.jpg" alt=""></a></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Work Section -->

    <!-- Call Back and Testimonial -->
    
    <!-- End Call Back and Testimonial -->
    
    <!-- Call To Action -->
    <section class="call-to-action" style="background-image: url(images/seedlings/1.jpg);">
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <span class="title">For Online Appointment Please Call Us Today</span>
                        <h3>Get Direct Contact to <span class="theme_color">A-Fruitplant</span></h3>
                        <div class="text">We are open to your call whenever you want. <br>Muthaiga along Kiambu road,NRB</div>
                    </div>
                </div>

                <div class="btn-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="message-box">+ 254 716611442 <span>or</span></div>
                        <div class="btn-box"><a href="{{url('contact')}}" class="theme-btn btn-style-two">Contact Us</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Call To Action -->

    <!-- News Section -->
    <section class="news-section">
        <div class="outer-container">
            <div class="row">
                <!-- Title Column -->
                <div class="title-column col-lg-3 col-md-12 col-sm-12">
                    <div class="sec-title">
                        <span class="title">Our Blogs and Articals</span>
                        <h2>Our Latest Blogs</h2>
                        <div class="text">We provides the best read on matters concerning growth and consumption of fruits and vegetables</div>
                    </div>
                </div>

                <!-- Carousel Column -->
                <div class="carousel-column col-lg-9 col-md-12 col-sm-12">
                    <div class="carousel-outer">
                        <div class="news-carousel owl-carousel owl-theme">
                            <!-- News Boock -->
                            <div class="news-block">
                                <div class="row">
                                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                        <figure class="image"><a href="{{url('hass')}}"><img src="images/avocado/v22.jpg" alt=""></a></figure>
                                    </div>

                                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                        <div class="inner">
                                            <h3><a href="{{url('hass')}}">Why We Should eat a fruit after every meal?</a></h3>
                                            <ul class="info">
                                                <li><a href="#"><i class="fa fa-comments"></i>Comment 23</a></li>
                                                <li><a href="#"><i class="fa fa-user"></i>Aroka Moni</a></li>
                                                <li><a href="#"><i class="fa fa-calendar"></i>Nov, 18, 2018</a></li>
                                            </ul>
                                            <div class="text">It is essential to embrace including a fruit in your meal. In an effort to keep a balanced diet, fruits play a major role</div>
                                            <div class="link-box"><a href="{{url('hass')}}">Read More <i class="fa fa-angle-double-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- News Block -->
                            <div class="news-block">
                                <div class="row">
                                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                        <figure class="image"><a href="{{url('navel')}}"><img src="images/seedlings/4.jpg" alt=""></a></figure>
                                    </div>

                                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                        <div class="inner">
                                            <h3><a href="{{url('navel')}}">The myth surrounding production of GMO Oranges.</a></h3>
                                            <ul class="info">
                                                <li><a href="#"><i class="fa fa-comments"></i>Comment 23</a></li>
                                                <li><a href="#"><i class="fa fa-user"></i>Aroka Moni</a></li>
                                                <li><a href="#"><i class="fa fa-calendar"></i>Nov, 18, 2018</a></li>
                                            </ul>
                                            <div class="text">Genetic modification of crops is a current norm around the globe. It has caused alot of debate on how safe the crops genetically modified are.</div>
                                            <div class="link-box"><a href="{{url('navel')}}">Read More <i class="fa fa-angle-double-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- News Boock -->
                            <div class="news-block">
                                <div class="row">
                                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                        <figure class="image"><a href="{{url('grapes')}}"><img src="images/grapes/g55.jpg" alt=""></a></figure>
                                    </div>

                                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                        <div class="inner">
                                            <h3><a href="{{url('grapes')}}">The nutrient benefits of Green Grapes?</a></h3>
                                            <ul class="info">
                                                <li><a href="#"><i class="fa fa-comments"></i>Comment 23</a></li>
                                                <li><a href="#"><i class="fa fa-user"></i>Aroka Moni</a></li>
                                                <li><a href="#"><i class="fa fa-calendar"></i>Nov, 18, 2018</a></li>
                                            </ul>
                                            <div class="text">Nutritionally speaking, fruits have different nutritional value.If you were told to choose between red and green grapes which one will you go with?</div>
                                            <div class="link-box"><a href="{{url('grapes')}}">Read More <i class="fa fa-angle-double-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End News Section -->

    <!--Clients Section-->
    <section class="clients-section">
        <div class="auto-container">
            <!--Sponsors Carousel-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure></li>
            </ul>
        </div>
    </section>
    <!--End Clients Section-->

@endsection