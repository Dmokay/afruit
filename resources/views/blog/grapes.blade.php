@extends('main')

@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url(images/grapes/grapes0.jpeg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1> Grape Farming,</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Grapes</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Service Detail Section -->
    <div class="project-detail-section">
        <div class="auto-container">
            <div class="row">
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="project-detail">
                        <div class="upper-box">
                            <div class="carousel-outer">
                                <ul class="image-carousel owl-carousel owl-theme">
                                    <li><a href="{{url('images/grapes/g2.jpg')}}" class="lightbox-image"><img src="{{asset('images/grapes/g2.jpg')}}" alt=""></a></li>

                                    <li><a href="{{url('images/grapes/g2.jpg')}}" class="lightbox-image"><img src="{{asset('images/grapes/g2.jpg')}}" alt=""></a></li>

                                    <li><a href="{{url('images/grapes/g2.jpg')}}" class="lightbox-image"><img src="{{asset('images/grapes/g2.jpg')}}" alt=""></a></li>

                                    <li><a href="{{url('images/grapes/g2.jpg')}}" class="lightbox-image"><img src="{{asset('images/grapes/g2.jpg')}}" alt=""></a></li>

                                    <li><a href="{{url('images/grapes/g2.jpg')}}" class="lightbox-image"><img src="{{asset('images/grapes/g2.jpg')}}" alt=""></a></li>
                                </ul>
                                
                                <ul class="thumbs-carousel owl-carousel owl-theme">
                                    <li><img src="{{asset('images/grapes/g2.jpg')}}" alt=""></li>
                                    <li><img src="{{asset('images/grapes/g2.jpg')}}" alt=""></li>
                                    <li><img src="{{asset('images/grapes/g2.jpg')}}" alt=""></li>
                                    <li><img src="{{asset('images/grapes/g2.jpg')}}" alt=""></li>
                                    <li><img src="{{asset('images/grapes/g2.jpg')}}" alt=""></li>
                                </ul>
                            </div>
                        </div>

                        <div class="content-box">
                            <h2> Description</h2>
                            <p>
                            Grapes are berries that grow on a vine. Because of their versatility, 
                            variety and portability, grapes are popular all over the world. 
                            More than 72 million tons of grapes are grown annually around 
                            the globe — more than bananas, oranges or apples.
                                
                            </p>
                            <p>
                                They are versatile fruits used in a wide range of popular foods — 
                                from raisins to jelly to wine. They are also packed with nutrients 
                                and antioxidants, and have high amounts of the phytonutrient resveratrol,
                                which is good for the heart, according to some studies. 
                            </p>
                        
                          
                            <h3>Nutrient profile</h3>

                            <ul class="accordion-box style-three">

                                <!--Block-->
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">Phytonutrients. <div class="icon fa fa-arrow-alt-circle-right"></div></div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <div class="text">
                                                Grapes contain phytonutrients, including phenols, polyphenols, resveratrol and carotenoids.
                                            </div>
                                            
                                        </div>
                                    </div>
                                </li>
                                <h3>Different Colors of Grapes</h3>
                                    <p>
                                        There are several colors of grapes, including red, black, purple or blue (Concord), green (which is used to make white wine), pink and yellow.Although all types of grapes are healthy, red grapes and Concord grapes are higher in flavonoids and phytonutrients, including resveratrol.
                                    </p>
                                    <div class="two-column row">
                                        <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                            <div class="image-box">
                                                <figure class="image"><img src="{{asset('images/grapes/g2.jpg')}}" alt=""></figure>
                                            </div>
                                        </div>
                                        <div class="list-column col-lg-6 col-md-12 col-sm-12">
                                            <ul class="list-style-one">
                                                <li>
                                                    Raisins, which are dried grapes, do not contain as many nutrients as fresh grapes, but they do contain four times the amount of sugar.
                                                </li>
                                                <li>
                                                    Grapes are also a good source of fiber and relatively low in calories.

                                                </li>
                                            

                                            </ul>
                                        </div>
                                    </div>
                                   
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">Antioxidants<div class="icon fa fa-arrow-alt-circle-right"></div></div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">
                                                    The richest concentrations of nutrients and antioxidants, including resveratrol, are in the grape skin and seeds. The grape flesh contains no more than 5 percent of the antioxidants found in the skin and seeds.
                                            </div>
                                           
                                        </div>
                                    </div>
                                </li>
                                
                            </ul>
                            
                        </div>

                        <!-- <div class="post-controls">
                            <ul class="clearfix">
                                <li class="prev pull-left"><a href="#"><span class="fa fa-angle-left"></span>Prev</a></li>
                                <li class="load-more"><a href="#"><span class="fa fa-th"></span></a></li>
                                <li class="next pull-right"><a href="#">Next<span class="fa fa-angle-right"></span></a></li>
                            </ul>
                        </div> -->
                    </div><!-- Service Detail -->
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">
                        <!--search box-->
                        <!-- <div class="sidebar-widget search-box">
                            <form method="post" action="blog.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search....." required="">
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div> -->

                        <!--Brochure-->
                        <div class="sidebar-widget links-box">
                            <div class="sec-title">
                                <span class="title">Choose a File now</span>
                                <h2>Download Article</h2>
                            </div>
                            <div class="brochure-link">
                                <a href="#"><i class="fa fa-file-word"></i> Grapes Cultivation</a>
                            </div>

                            <div class="brochure-link">
                                <a href="#"><i class="fa fa-file-pdf"></i> Nutritious Benefits of Grapes</a>
                            </div>
                        </div>

                        <!-- Gallery Widget -->
                        <!-- <div class="sidebar-widget gallery-widget">
                            <div class="sec-title">
                                <span class="title">Follow us</span>
                                <h2>Instagram</h2>
                            </div>
                            <div class="gallery-outer clearfix">
                                <figure class="image">
                                    <a href="images/gallery/1.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/insta-1.jpg" alt=""></a>
                                </figure>

                                <figure class="image">
                                    <a href="images/gallery/2.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/insta-2.jpg" alt=""></a>
                                </figure>

                                <figure class="image">
                                    <a href="images/gallery/3.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/insta-3.jpg" alt=""></a>
                                </figure>

                                <figure class="image">
                                    <a href="images/gallery/4.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/insta-4.jpg" alt=""></a>
                                </figure>

                                <figure class="image">
                                    <a href="images/gallery/5.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/insta-5.jpg" alt=""></a>
                                </figure>

                                <figure class="image">
                                    <a href="images/gallery/6.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/insta-6.jpg" alt=""></a>
                                </figure>
                            </div>
                        </div> -->


                        <!-- Brochure -->
                        <div class="sidebar-widget brochure">
                            <div class="brochure-box" style="background-image: url(images/resource/offer-bg.jpg);">
                                <div class="sec-title light text-center">
                                    <span class="title">Quick Contact</span>
                                    <h2>Get in touch</h2>
                                </div>
                                <p>Visit us in Nairobi, Muthaiga along Kiambu road</p>
                                <a href="{{url('contact')}}" class="theme-btn">Contact</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Service Detail Section -->


    <!--Clients Section-->
    <section class="clients-section">
        <div class="auto-container">
            <!--Sponsors Carousel-->
            <!-- <ul class="sponsors-carousel owl-carousel owl-theme">
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
            </ul> -->
        </div>
    </section>
    <!--End Clients Section-->

@endsection