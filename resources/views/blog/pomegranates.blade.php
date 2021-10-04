@extends('main')

@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url(images/pomegranates/1.jpeg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>Pomegranates Farming</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Pomegranates</li>
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
                                    <li><a href="{{url('images/seedlings/22.jpg')}}" class="lightbox-image"><img src="{{asset('images/seedlings/22.jpg')}}" alt=""></a></li>

                                    <li><a href="{{url('images/seedlings/22.jpg')}}" class="lightbox-image"><img src="{{asset('images/seedlings/22.jpg')}}" alt=""></a></li>

                                    <li><a href="{{url('images/seedlings/22.jpg')}}" class="lightbox-image"><img src="{{asset('images/seedlings/22.jpg')}}" alt=""></a></li>

                                    <li><a href="{{url('images/seedlings/22.jpg')}}" class="lightbox-image"><img src="{{asset('images/seedlings/22.jpg')}}" alt=""></a></li>

                                    <li><a href="{{url('images/seedlings/22.jpg')}}" class="lightbox-image"><img src="{{asset('images/seedlings/22.jpg')}}" alt=""></a></li>
                                </ul>
                                
                                <ul class="thumbs-carousel owl-carousel owl-theme">
                                    <li><img src="{{asset('images/seedlings/22.jpg')}}" alt=""></li>
                                    <li><img src="{{asset('images/seedlings/22.jpg')}}" alt=""></li>
                                    <li><img src="{{asset('images/seedlings/22.jpg')}}" alt=""></li>
                                    <li><img src="{{asset('images/seedlings/22.jpg')}}" alt=""></li>
                                    <li><img src="{{asset('images/seedlings/22.jpg')}}" alt=""></li>
                                </ul>
                            </div>
                        </div>

                        <div class="content-box">
                            <h2> Description</h2>
                            <p>
                                Also known as seeded apple. It is a drought enduring plant and is known to be doing well
                                along the tropics with small amouts of water it will flower thoughout the year. It grow to
                                height of 12 feets. One of the drivers of the interest in pomegranate is the recent demand
                                for juices with healthy bioactive compounds, mineral nutrients and high antioxidant
                                content.The pomegranate tree needs only basic care and occassional attention to flourish,
                                ideally, it is a good addition to one’s home garden. Pomegranates are self pollinating,
                                how planting more than one type of pomegranate plants encourage cross breeding thus
                                improving the quality of the fruit.
                            </p>
                            
                            <h3>Cultivation and planting</h3>

                            <ul class="accordion-box style-three">

                                <!--Block-->
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">Propagation. <div class="icon fa fa-arrow-alt-circle-right"></div></div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <div class="text">
                                                Stem cuttings reliably reproduce a pomegranate plant without the hassle of growing
                                                from seeds, and develop the desirable qualities of the donor plant. Seedlings from stem
                                                cuttings will also take abit short period to start producing which is two to three years as
                                                opposed to once grown from seeds which will take approximatelly six years to start
                                                fruit. Propagation from seeds will also not give the true fruit.
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">Sowing<div class="icon fa fa-arrow-alt-circle-right"></div></div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">
                                                    Pomegranate plants are salty-hardy fruit tree which tolerate a wide range of soil type and
                                                    can comparatively thrive well in poor soils. They also have versatile adaptability to a
                                                    wide range of climatic conditions though they do well in hot climates. However
                                                    pomegranate farming if done under irrigation then high yields will be guranteed.
                                            </div>
                                            <div class="text">
                                                    Pomegranate tree grow with as little spacing as 1.5m by 1.5m in-row and 3.6m between
                                                    rows but spacing of 3 meters radius would be the best for maximum brunching which
                                                    eventually will result to high yields.
                                            </div>
                                            <div class="text">
                                                    Pomegranates are subtropical fruits, but can acclimate to Mediterranean and humid
                                                    tropical climates.
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <h3>Care (Water and fertilizer)</h3>
                            <div class="two-column row">
                                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="image-box">
                                        <figure class="image"><img src="{{asset('images/seedlings/22.jpg')}}" alt=""></figure>
                                    </div>
                                </div>
                                <div class="list-column col-lg-6 col-md-12 col-sm-12">
                                    <ul class="list-style-one">
                                        <li>
                                            Incerdibly, there is not always a need to fertilize pomegranate trees. However, if the plant
                                            is doing poorly, well aged manure or compost can be applied to the trees.
                                        </li>
                                        <li>
                                            Water supplements is neccessary especially during the first few years as they establish.
                                            Establish irrigation systems during the dry season will increase the production.
                                        </li>
                                        <li>
                                            It is important to tip-prune young trees to encourage the maximum number of new
                                            branch tips.
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>

                                
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">Harvesting<div class="icon fa fa-arrow-alt-circle-right"></div></div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">
                                                Pomegranate is mature when it makes a tinny, metallic sound when tapped with a
                                                finger and they ripen on the tree. They should be picked in instalments since they aint
                                                ready at the same time.
                                            </div>
                                            <div class="text">
                                                During harvest fruit should be clipped (not pulled off the tree) to prevent open wounds
                                                that are susceptible to infection. Fruit should be clipped close to eliminate stems that
                                                could damage other fruit in the bin.
                                            </div>
                                            <div class="text">
                                                While planting pomegrates plants, its always advisable to get your seedlings from
                                                certified fruit nurseries.
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
                                <a href="#"><i class="fa fa-file-word"></i> Pomegranates Cultivation</a>
                            </div>

                            <div class="brochure-link">
                                <a href="#"><i class="fa fa-file-pdf"></i> Nutritious Benefits of Pomegranates</a>
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