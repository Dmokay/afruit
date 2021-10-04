@extends('main')

@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url(images/mangoes/11.jpeg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1> Mango Farming,</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Mangoes</li>
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
                                    <li><a href="{{url('images/mangoes/10.jpeg')}}" class="lightbox-image"><img src="{{asset('images/mangoes/10.jpeg')}}" alt=""></a></li>

                                    <li><a href="{{url('images/mangoes/10.jpeg')}}" class="lightbox-image"><img src="{{asset('images/mangoes/10.jpeg')}}" alt=""></a></li>

                                    <li><a href="{{url('images/mangoes/10.jpeg')}}" class="lightbox-image"><img src="{{asset('images/mangoes/10.jpeg')}}" alt=""></a></li>

                                    <li><a href="{{url('images/mangoes/10.jpeg')}}" class="lightbox-image"><img src="{{asset('images/mangoes/10.jpeg')}}" alt=""></a></li>

                                    <li><a href="{{url('images/mangoes/10.jpeg')}}" class="lightbox-image"><img src="{{asset('images/mangoes/10.jpeg')}}" alt=""></a></li>
                                </ul>
                                
                                <ul class="thumbs-carousel owl-carousel owl-theme">
                                    <li><img src="{{asset('images/mangoes/10.jpeg')}}" alt=""></li>
                                    <li><img src="{{asset('images/mangoes/10.jpeg')}}" alt=""></li>
                                    <li><img src="{{asset('images/mangoes/10.jpeg')}}" alt=""></li>
                                    <li><img src="{{asset('images/mangoes/10.jpeg')}}" alt=""></li>
                                    <li><img src="{{asset('images/mangoes/10.jpeg')}}" alt=""></li>
                                </ul>
                            </div>
                        </div>

                        <div class="content-box">
                            <h2> Description</h2>
                            <p>
                                Mangoes are increansingly becoming mans go to fruit because of its robust nutritional
                                values, ready to eat nature and most recently it has become a source of both income and
                                employment.
                                
                            </p>
                            <p>
                                Undeniably, the mango industry in Kenya has expanded considerably over the years but
                                despite this increasing popularity, only a few potential growers are familiar with the
                                characteristics of the many different cultivars of mango that are grown and available in
                                the country.
                            </p>
                            <p>
                                Primarily mangoes are housed into two category types.Indian type typically have single
                                embryo seed, highly coloured fruit while Indochinese type multiple embryos, and it’s
                                fruit lacking vibrant colouration.
                            </p>
                          
                            <h3>Cultivation and planting</h3>

                            <ul class="accordion-box style-three">

                                <!--Block-->
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">Propagation. <div class="icon fa fa-arrow-alt-circle-right"></div></div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <div class="text">
                                                    Monoembryonic types do not propagate true to type from seeds so the best
                                                    method for propagation is by growing seeds from local mangos in seed nursery for about
                                                    8 months after which a scion of the desired variety is obtained from a mature fruiting
                                                    mango. It is then nursed for 40 days after which the grafting tape is removed.Grafted
                                                    mangoes will start producing from two years but will obtain full production as from four
                                                    years of maturity.<br> Polyembryonic types of mango can be readily grown from seed producing a true-
                                                    to-type plant that begin bearing 3 to 6 years after planting.
                                            </div>
                                            
                                        </div>
                                    </div>
                                </li>
                                <h3>Top wedge /Cleft grafting.</h3>
                                    <p>
                                        This grafting method is used for material in which the stock
                                        and the scion are of similar diameters about 4-6 mm diameter
                                    </p>
                                    <div class="two-column row">
                                        <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                            <div class="image-box">
                                                <figure class="image"><img src="{{asset('images/mangoes/10.jpeg')}}" alt=""></figure>
                                            </div>
                                        </div>
                                        <div class="list-column col-lg-6 col-md-12 col-sm-12">
                                            <ul class="list-style-one">
                                                <li>
                                                    A wedge-like slanting cut is made at the base of the scion with a sharp grafting
                                                    knife.
                                                </li>
                                                <li>
                                                    A vertical incision is made at the top of the rootstock
                                                </li>
                                                <li>
                                                    The two pieces are fitted together and wrapped firmly with a grafting tape
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <h3>Top-working of mature mango trees</h3>
                                    
                                    <div class="two-column row">
                                        <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                            <div class="image-box">
                                                <figure class="image"><img src="{{asset('images/mangoes/10.jpeg')}}" alt=""></figure><br>
                                                <figure class="image"><img src="{{asset('images/mangoes/10.jpeg')}}" alt=""></figure>
                                            </div>
                                        </div>
                                        <div class="list-column col-lg-6 col-md-12 col-sm-12">
                                            <ul class="list-style-one">
                                                <li>
                                                When top-working a mango tree, leave at least two fully leafed branches intact.
                                                </li>
                                                <li>
                                                    Saw off branch or trunk at right angle to the grain.
                                                </li>
                                                <li>
                                                    Split the bark using a heavy knife and a hammer to split the stock about 4 cm
                                                    deep into the branch through the centre.
                                                </li>
                                                <li>
                                                    Use a screwdriver or a chisel to prop open the split trunk
                                                </li>
                                                <li>
                                                    Use pencil-size one-year-old scions that are knot-free with at least three buds
                                                </li>
                                                <li>
                                                    Make a long (1 to 1 – ½ inches long) smooth cut towards the base from the lowest
                                                    bud Perform this operation on the other side creating a wedge with a blunt tip
                                                </li>
                                                <li>
                                                    Insert the scions (usually two scions) and align
                                                </li>
                                                <li>
                                                    Remove the screwdriver and wax all the cut surfaces
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>

                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">Sowing<div class="icon fa fa-arrow-alt-circle-right"></div></div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">
                                                    Prerequisites for good development are deep soils (at least 3 m), appropriate rainfall
                                                    (500-1000 mm), good drainage, suitable altitude (0-1200 m) and preferably a pH value of
                                                    between 5.5 and 7.5. 
                                            </div>
                                            <div class="text">
                                                    Transplanting is carried out during the long rains
                                            </div>
                                            <div class="text">
                                                    Dig the holes of 2 by 2 feets while maintaining a standard row gap spacing of 6 by 6m.
                                                    The topsoil and the subsoil should be kept separately. Backfill the hole with the topsoil
                                                    mixed with a quantitative amount of well decomposed farm yard manure.
                                            </div>
                                        
                                        </div>
                                    </div>
                                </li>
                                
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">Care (Water and fertilizer)<div class="icon fa fa-arrow-alt-circle-right"></div></div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">
                                            
                                                Transplanted trees should be top dressed with well decomposed organic manure at the
                                                beginning of each rainy season. Mulching around the tree is recommended to to protect
                                                the tender roots and also to avoid water evaporation, it also helps control
                                                weeds.Watering at least twice a week provides adequate moisture.
                                            
                                            </div>
                                            
                                        </div>
                                    </div>
                                </li>

                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">Mulching<div class="icon fa fa-arrow-alt-circle-right"></div></div>
                                    <div class="acc-content">
                                        <div class="content">
                                        <div class="text">
                                                    Mulching helps to maintain soil moisture, improve soil fertility and suppress weeds. The
                                                    mulch should be placed 10-15 cm from the base of the tree. Commonly used mulches
                                                    include coffee or rice husks, sisal waste, grass and banana leaves.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">Pruning<div class="icon fa fa-arrow-alt-circle-right"></div></div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">
                                                    Formative pruning is done on the plants to make the tree grow upright. It should be done
                                                    within the first 5 years after establishment.
                                                    Cut the main shoot at 1m high. Leafy branches will grow from the buds just below the
                                                    initial cut.
                                            </div>
                                            <div class="text">
                                                    Subsequent pruning is done to remove dead wood and to open the canopy at the centre.
                                                    Desuckering should be done continuously in year one until the tree is 1 m high.
                                            </div>
                                            <div class="text">
                                                    An acre can accommodate upto 100 mango trees.
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
                                <a href="#"><i class="fa fa-file-word"></i> Mangoes Cultivation</a>
                            </div>

                            <div class="brochure-link">
                                <a href="#"><i class="fa fa-file-pdf"></i> Nutritious Benefits of Mangoes</a>
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