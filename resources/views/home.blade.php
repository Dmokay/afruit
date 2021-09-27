@extends('main')

@section('content')
    
    <!-- Bnner Section -->
    <section class="banner-section">
        <div class="banner-carousel owl-carousel owl-theme">
            <div class="slide-item" style="background-image: url(images/main-slider/image-1.jpg);">
                <div class="auto-container">
                <div class="content-box">
                        <h4>Its true that </h4>
                        <h2>A-Fruit A Day keeps the Doctor Away</h2>
                        <div class="text">We Tell you why you should Embrace often Consumption of Fruits </div>
                        <div class="link-box">
                            <a href="services.html">Our Blogs <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="slide-item" style="background-image: url(images/main-slider/image-2.jpg);">
                <div class="auto-container">
                <div class="content-box">
                        <h4>Enabling Masses </h4>
                        <h2>Lead a Healthy Life</h2>
                        <div class="text">By enlightening them on matters Fruits and Vegetables</div>
                        <div class="link-box">
                            <a href="{{('oranges')}}">Our Blogs <i class="fa fa-angle-double-right"></i></a>
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
                                <figure class="image"><img src="images/orange2.jpeg" alt=""></figure>
                                <div class="overlay-box">
                                    <div class="inner">
                                        <div class="text">Brief Description of the fruit in the picture to entice the reader to click on the read more button.</div>
                                        <div class="link-box">
                                            <a href="service-detail.html">Read More <i class="fa fa-leaf"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="caption-box">
                                <span class="icon flaticon-plant"></span>
                                <h4><a href="service-detail.html">Orange Fruits</a></h4>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/strawberry.jpeg" alt=""></figure>
                                <div class="overlay-box">
                                    <div class="inner">
                                        <div class="text">Brief Description of the fruit in the picture to entice the reader to click on the read more button.</div>
                                        <div class="link-box">
                                            <a href="service-detail.html">Read More <i class="fa fa-leaf"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="caption-box">
                                <span class="icon flaticon-plant"></span>
                                <h4><a href="service-detail.html">Strawberry Fruits</a></h4>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/peach2.jpeg" alt=""></figure>
                                <div class="overlay-box">
                                    <div class="inner">
                                        <div class="text">Brief Description of the fruit in the picture to entice the reader to click on the read more button.</div>
                                        <div class="link-box">
                                            <a href="service-detail.html">Read More <i class="fa fa-leaf"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="caption-box">
                                <span class="icon flaticon-plant"></span>
                                <h4><a href="service-detail.html">Peach Fruits</a></h4>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/melon3.jpeg" alt=""></figure>
                                <div class="overlay-box">
                                    <div class="inner">
                                        <div class="text">Brief Description of the fruit in the picture to entice the reader to click on the read more button.</div>
                                        <div class="link-box">
                                            <a href="service-detail.html">Read More <i class="fa fa-leaf"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="caption-box">
                                <span class="icon flaticon-plant"></span>
                                <h4><a href="service-detail.html">Watermelon </a></h4>
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
                <h2>About A-Fruit</h2>
            </div>

            <!--Work Tabs-->
            <div class="work-tabs tabs-box">
                <!--Tab Btns-->
                <ul class="tab-btns tab-buttons clearfix">
                    <li data-tab="#tab-1" class="tab-btn"> Enlightening</li>
                    <li data-tab="#tab-2" class="tab-btn active-btn">Promoting</li>
                    <li data-tab="#tab-3" class="tab-btn">Upholding</li>
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
                                    <div class="text">An explanation on how A-Fruit enlightens the masses on matters to do with health.</div>
                                    <ul class="list-style-one">
                                        <li>How we do it</li>
                                        <li>Why we do it</li>
                                        <li>The motivation</li>
                                        <li>Long term goal</li>
                                    </ul>
                                    <div class="btn-box"><a href="#" class="theme-btn btn-style-one">Read More</a></div>
                                </div>
                            </div>

                            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <figure class="image"><a href="images/berries.jpg" class="lightbox-image" data-fancybox="images"><img src="images/berries.jpg" alt=""></a></figure>
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
                                    <h3>Promoting the Craft</h3>
                                    <div class="text">An explanation on how A-Fruit promotes the craft of writing to address matters to do with health.</div>
                                    <ul class="list-style-one">
                                        <li>How we do it</li>
                                        <li>Why we do it</li>
                                        <li>The motivation</li>
                                        <li>Long term goal</li>
                                    </ul>
                                    <div class="btn-box"><a href="#" class="theme-btn btn-style-one">Read More</a></div>
                                </div>
                            </div>

                            <!-- Image Column -->
                            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <figure class="image"><a href="images/blackberry.jpg" class="lightbox-image" data-fancybox="images"><img src="images/blackberry.jpg" alt=""></a></figure>
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
                                    <h3>Upholding</h3>
                                    <div class="text">An explanation on how A-Fruit upholds the various life principles.</div>
                                    <ul class="list-style-one">
                                        <li>How we do it</li>
                                        <li>Why we do it</li>
                                        <li>The motivation</li>
                                        <li>Long term goal</li>
                                    </ul>
                                    <div class="btn-box"><a href="#" class="theme-btn btn-style-one">Read More</a></div>
                                </div>
                            </div>

                            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <figure class="image"><a href="images/orange3.jpg" class="lightbox-image" data-fancybox="images"><img src="images/orange3.jpg" alt=""></a></figure>
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
    <section class="call-back-and-testimonial">
        <div class="auto-container">
            <div class="row">
                <!-- Form Column -->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image-box"><figure class="image"><img src="images/resource/image-2.jpg" alt=""></figure></div>
                        <div class="appointment-form wow fadeInUp">
                            <div class="title-box">
                                <h3>Request Call Back</h3>
                            </div>
                            <form method="post" action="index.html">

                                <div class="form-group">
                                    <input type="text" name="username" placeholder="Your Name" required="">
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" name="phone" placeholder="Your Number" required="">
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Your Email" required="">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="subject" placeholder="Your Subject">
                                </div>

                                <div class="form-group text-center">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form">Submit</button>
                                </div>
                            </form>
                            <div class="message-box"><a href="#"><span>*</span> You accept the terms of the privacy policy</a></div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Column -->
                <div class="testimonial-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">Have Your Say</span>
                            <h2>We Let you Express Yourself</h2>
                        </div>

                        <div class="testimonial-carousel owl-carousel owl-theme">
                            <!-- Testimonial Block -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="info-box">
                                        <div class="thumb"><img src="images/resource/thumb.jpg" alt=""></div>
                                        <h5 class="name">Kevin Kirwa</h5>
                                        <span class="designation">Blogger</span>
                                        <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star dark"></span><span class="fa fa-star dark"></span></div>
                                    </div>
                                    <div class="content-box">
                                        <span class="icon fa fa-quote-right"></span>
                                        <div class="text">The customers, bloggers and anybody who visits your site will be able to leave a comment meant to improve your services.</div>                                        
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Block -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="info-box">
                                        <div class="thumb"><img src="images/resource/thumb.jpg" alt=""></div>
                                        <h5 class="name">Victor Onyango</h5>
                                        <span class="designation">Blogger</span>
                                        <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star dark"></span><span class="fa fa-star dark"></span></div>
                                    </div>
                                    <div class="content-box">
                                        <span class="icon fa fa-quote-right"></span>
                                        <div class="text">The customers, bloggers and anybody who visits your site will be able to leave a comment meant to improve your services.</div>                                        
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Block -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="info-box">
                                        <div class="thumb"><img src="images/resource/thumb.jpg" alt=""></div>
                                        <h5 class="name">Ann Ngina</h5>
                                        <span class="designation">Blogger</span>
                                        <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star dark"></span><span class="fa fa-star dark"></span></div>
                                    </div>
                                    <div class="content-box">
                                        <span class="icon fa fa-quote-right"></span>
                                        <div class="text">The customers, bloggers and anybody who visits your site will be able to leave a comment meant to improve your services.</div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call Back and Testimonial -->
    
    <!-- Call To Action -->
    <section class="call-to-action" style="background-image: url(images/background/1.jpg);">
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <span class="title">For Online Appointment Please Call Us Today</span>
                        <h3>Get Direct Contact to <span class="theme_color">A-Fruit</span></h3>
                        <div class="text">We will advise you whenever you need, whenever you want. <br>Nairobi CBD, Kenya</div>
                    </div>
                </div>

                <div class="btn-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="message-box">+ 254 700111222 <span>or</span></div>
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
                                        <figure class="image"><a href="{{url('oranges')}}"><img src="images/ovacado.jpg" alt=""></a></figure>
                                    </div>

                                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                        <div class="inner">
                                            <h3><a href="blog-detail.html">Why We Should eat a fruit after every meal?</a></h3>
                                            <ul class="info">
                                                <li><a href="#"><i class="fa fa-comments"></i>Comment 23</a></li>
                                                <li><a href="#"><i class="fa fa-user"></i>Aroka Moni</a></li>
                                                <li><a href="#"><i class="fa fa-calendar"></i>Nov, 18, 2018</a></li>
                                            </ul>
                                            <div class="text">It is essential to embrace including a fruit in your meal. In an effort to keep a balanced diet, fruits play a major role</div>
                                            <div class="link-box"><a href="{{url('oranges')}}">Read More <i class="fa fa-angle-double-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- News Block -->
                            <div class="news-block">
                                <div class="row">
                                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                        <figure class="image"><a href="{{url('oranges')}}"><img src="images/gmo.jpg" alt=""></a></figure>
                                    </div>

                                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                        <div class="inner">
                                            <h3><a href="blog-detail.html">The myth surrounding production of GMO fruits.</a></h3>
                                            <ul class="info">
                                                <li><a href="#"><i class="fa fa-comments"></i>Comment 23</a></li>
                                                <li><a href="#"><i class="fa fa-user"></i>Aroka Moni</a></li>
                                                <li><a href="#"><i class="fa fa-calendar"></i>Nov, 18, 2018</a></li>
                                            </ul>
                                            <div class="text">Genetic modification of crops is a current norm around the globe. It has caused alot of debate on how safe the crops genetically modified are.</div>
                                            <div class="link-box"><a href="{{url('oranges')}}">Read More <i class="fa fa-angle-double-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- News Boock -->
                            <div class="news-block">
                                <div class="row">
                                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                        <figure class="image"><a href="{{url('oranges')}}"><img src="images/banana.jpg" alt=""></a></figure>
                                    </div>

                                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                        <div class="inner">
                                            <h3><a href="blog-detail.html">An apple or a Banana?</a></h3>
                                            <ul class="info">
                                                <li><a href="#"><i class="fa fa-comments"></i>Comment 23</a></li>
                                                <li><a href="#"><i class="fa fa-user"></i>Aroka Moni</a></li>
                                                <li><a href="#"><i class="fa fa-calendar"></i>Nov, 18, 2018</a></li>
                                            </ul>
                                            <div class="text">Nutritionally speaking, fruits have different nutritional value.If you were told to choose between an apple and a banana which one will you go with?</div>
                                            <div class="link-box"><a href="{{url('oranges')}}">Read More <i class="fa fa-angle-double-right"></i></a></div>
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