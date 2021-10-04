@extends('main')

@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url(images/oranges/pixie8.jpeg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>Pixie Orange Farming</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Pixie Orange</li>
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
                                    <li><a href="{{url('images/seedlings/1.jpg')}}" class="lightbox-image"><img src="{{asset('images/seedlings/1.jpg')}}" alt=""></a></li>

                                    <li><a href="{{url('images/seedlings/1.jpg')}}" class="lightbox-image"><img src="{{asset('images/seedlings/1.jpg')}}" alt=""></a></li>

                                    <li><a href="{{url('images/seedlings/1.jpg')}}" class="lightbox-image"><img src="{{asset('images/seedlings/1.jpg')}}" alt=""></a></li>

                                    <li><a href="{{url('images/seedlings/1.jpg')}}" class="lightbox-image"><img src="{{asset('images/seedlings/1.jpg')}}" alt=""></a></li>

                                    <li><a href="{{url('images/seedlings/1.jpg')}}" class="lightbox-image"><img src="{{asset('images/seedlings/1.jpg')}}" alt=""></a></li>
                                </ul>
                                
                                <ul class="thumbs-carousel owl-carousel owl-theme">
                                    <li><img src="{{asset('images/seedlings/1.jpg')}}" alt=""></li>
                                    <li><img src="{{asset('images/seedlings/1.jpg')}}" alt=""></li>
                                    <li><img src="{{asset('images/seedlings/1.jpg')}}" alt=""></li>
                                    <li><img src="{{asset('images/seedlings/1.jpg')}}" alt=""></li>
                                    <li><img src="{{asset('images/seedlings/1.jpg')}}" alt=""></li>
                                </ul>
                            </div>
                        </div>

                        <div class="content-box">
                            <h2> Description</h2>
                            <p>From the color it gets its name, covered by a rind and shaped as a ball. It’s tangy juicy seedless insides are loved by one and all. Peel and eat it but save it’s skin. These are just a few properties that place this citrus into lime light.The fruits were initially ruled as a home garden variety and were not viewed as a commercial cultivar.</p>
                            <p>However, with time a small group of citrus growers in Kenya’s arid and semi arid counties i.e Makueni, Machakos and Kitui began promoting the variety eventually turning the fruits into a farmer’s market specialty cultivar. Each season, the fruits are highly sought after among citrus enthusiasts for their easily segmented nature and numerous uses in culinary applications, mixology, and cosmetics.</p>
                            <h3>Cultivation and planting</h3>

                            <ul class="accordion-box style-three">

                                <!--Block-->
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">Propagation. <div class="icon fa fa-arrow-alt-circle-right"></div></div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <div class="text">Pixie/Mandarin orange seedlings are usually produced by grafting or budding to an appropriate rootstock as seeds will not produce fruit true to type.</div>
                                            <div class="text">Grafting is the process by which a scion (young shoot or twig) from a plant is joined to the rootstock of another i.e sour orange or rough lemon to produce a new tree.</div>
                                            <div class="text">Budding is a special type of grafting where the scion that is joined to the rootstock consists of a single bud. Budding is commonly used in citrus propagation as it is the easier of the two processes and works very well. It is carried out when seedling stems have reached roughly the diameter of a pencil and at a time when the bark of the rootstock tree can be easily peeled from the plant. The simplest way to join the budwood to the rootstock is by T-budding.</div>
                                            <div class="text">Planting seedlings is the simplest form of propagation. One purchases seedlings which have already been grafted and only require planting in the garden or orchard. The best time to plant citrus trees is after all danger of frost has passed in your area.</div>
                                        </div>
                                    </div>
                                </li>

                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">Sowing<div class="icon fa fa-arrow-alt-circle-right"></div></div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Holes should have a diameter of 2ft by 2ft and 2 feet deep.Standard sized trees should be spaced 3.7–7.6 m (12–25 ft) apart in an area that receives full sunlight, but is protected from strong winds which can damage the trees. Pixie trees will grow best when planted in a well-draining sandy loam soils with pH between 6.0 and 7.5. Soil must be deep enough to permit adequate root development.</div>
                                            <div class="text">Just like oranges, pixie oranges are subtropical plants and trees that will grow best at temperatures between 12.8 and 37.8 during the growing season and 1.7 to 10 during its dormant time. It thrives in areas with low or moderate rainfall. This means that it can perform well in arid and semi-arid areas. In dry areas, the plants should be watered regularly.</div>
                                            <div class="text">Pixie requires enough sunlight especially during flowering, fruit set, and fruit ripening.</div>
                                        </div>
                                    </div>
                                </li>
                                
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">Care (Water and fertilizer)<div class="icon fa fa-arrow-alt-circle-right"></div></div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Newly planted trees require proper irrigation to ensure they become established. During the first year, water should be applied at the base of the trunk so that the root ball is kept moist to allow the roots to establish in the soil.</div>
                                            <div class="text">Newly planted trees should be provided with water every 3–7 days. The soil should be moist, but not wet. Trees planted in sandy soils will require water more frequently.</div>
                                            <div class="text">Young trees will also require a manure top dressing every 3 month in the first year.</div>
                                            <div class="text">The amount of fertilizer to be applied will generally depend on the fertility of the soil in question. At least 10kg (half bucket) of well-rotted farmyard manure or compost should be applied per tree per year.</div>
                                            <div class="text">On acid soils 1-2kg of agricultural lime can be applied per tree spread evenly over the soil covering the root system.</div>
                                            <div class="text">Nitrogen can be supplied by inter cropping pixie orange trees with legume crops and incorporating the plant material into the soil once an year.</div>
                                        </div>
                                    </div>
                                </li>

                                <h3>Pruning</h3>
                                    <p>
                                        Very light pruning is required. Not only does it improve fruit quality and yield but also
                                        facilitates aeration and sunlight penetration to the inner part of the tree as well as to
                                        facilitate various cultivation operations.
                                    </p>
                            <div class="two-column row">
                                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="image-box">
                                        <figure class="image"><img src="{{asset('images/seedlings/1.jpg')}}" alt=""></figure>
                                    </div>
                                </div>
                                <div class="list-column col-lg-6 col-md-12 col-sm-12">
                                    <ul class="list-style-one">
                                        <li>
                                            The trees are trained to a single system and any shoot emerging from 
                                            the portion below the bud union should be nipped off regularly.
                                        </li>
                                        <li>All diseased, injured and drooping branches and dead wood are to be removed periodically.</li>
                                        <li>Pruning should be completed in the first three years so that plants attain a mechanically strong canopy.</li>
                                       
                                    </ul>
                                </div>
                            </div>
            
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">Harvesting<div class="icon fa fa-arrow-alt-circle-right"></div></div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">
                                                The trees begin to flower in the second year and can produce few fruits in each 
                                                tree and maturity is attained at around 2 to 3 years. Heavy harvest is often 
                                                experienced at the fourth year. The yield of pixie orange depends on many factors 
                                                like soil type, climatic conditions and orchard management practices .Each tree 
                                                produces an average of 60 kg of fruit per season with a kilo going from Sh 130 in 
                                                the market. The fruits should be harvested when they are fully ripe and attain 
                                                proper size, attractive color and acceptable sugar: acid ratio. Mature fruits can 
                                                be picked in 2 to 3 cycles.
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
                                <a href="#"><i class="fa fa-file-word"></i> Cultivation of Pixie Oranges</a>
                            </div>

                            <div class="brochure-link">
                                <a href="#"><i class="fa fa-file-pdf"></i> Nutritious Benefits of Pixie Oranges</a>
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