@extends('main')

@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url(images/avocado/f6.jpeg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>Fuerte Avocado Farming</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Fuerte Avocado</li>
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
                                    <li><a href="{{url('images/avocado/f5.jpeg')}}" class="lightbox-image"><img src="{{asset('images/avocado/f5.jpeg')}}" alt=""></a></li>

                                    <li><a href="{{url('images/avocado/f3.jpeg')}}" class="lightbox-image"><img src="{{asset('images/avocado/f3.jpeg')}}" alt=""></a></li>

                                    <li><a href="{{url('images/avocado/f2.jpeg')}}" class="lightbox-image"><img src="{{asset('images/avocado/f2.jpeg')}}" alt=""></a></li>

                                    <li><a href="{{url('images/avocado/f1.jpeg')}}" class="lightbox-image"><img src="{{asset('images/avocado/f1.jpeg')}}" alt=""></a></li>

                                    <li><a href="{{url('images/avocado/f8.jpg')}}" class="lightbox-image"><img src="{{asset('images/avocado/f8.jpg')}}" alt=""></a></li>
                                </ul>
                                
                                <ul class="thumbs-carousel owl-carousel owl-theme">
                                    <li><img src="{{asset('images/avocado/f5.jpeg')}}" alt=""></li>
                                    <li><img src="{{asset('images/avocado/f3.jpeg')}}" alt=""></li>
                                    <li><img src="{{asset('images/avocado/f2.jpeg')}}" alt=""></li>
                                    <li><img src="{{asset('images/avocado/f1.jpeg')}}" alt=""></li>
                                    <li><img src="{{asset('images/avocado/f8.jpg')}}" alt=""></li>
                                </ul>
                            </div>
                        </div>

                        <div class="content-box">
                            <h2> Description</h2>
                            <p>
                                As far as naming goes, this avocado tree gets its name from the spanish vacobulary
                                ‘Fuetre’, which means ‘strong’.It was propagated in 1911 by a Californian nursery from
                                imported buds of a seedling tree growing in Mexico. By chance, it was relatively
                                unscathed when a particulary hard frost hit Southern California.
                                
                            </p>
                            <p>
                                The fruit is often recognized by it’s oval shape, weighs 140-395grams, consistent green
                                skin color that is present even when it ripens. Additionaly,the skin is relatively smooth,
                                thin and pliable (easy to peel). The seed is usually medium large making up 15% of the
                                total fruit volume while the flesh is pale yellow. Buttery and rich in flavor!
                            </p>
                            <p>
                                It’s former dominance in the avocado world is mainly because of it’s hardiness while
                                handling it. They are not subject to internal rots. Not withstanding, it bags in as the
                                second largest commercial variety behind Hass.
                            </p>
                            
                            <h3>Cultivation and planting</h3>

                            <ul class="accordion-box style-three">

                                <!--Block-->
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">Propagation. <div class="icon fa fa-arrow-alt-circle-right"></div></div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <div class="text">
                                                Propagation is majorly by grafting. The rootstocks are grafted using scions of desired variety and are transplanted into the
                                                field 4 to 6 months.
                                            </div>
                                            <div class="text">
                                                Avocado trees started from a nursery tree generally begin setting fruit two to three
                                                years after planting while trees grown from seeds take longer and require between five
                                                to ten years before setting fruit.Using the best seedlings improves the variety by
                                                increasing its resistance to diseases and its adaptability to different soils.
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
                                                    The Fuetre tree should be planted at the beginning of the seasonal rainfall and as soon
                                                    as the rain has deeply penetrated the ground. The trees tend to grow taller and wider in
                                                    soil which are deeper, rich and well-drained. Though they still grow in other soil.
                                            </div>
                                            <div class="text">
                                                    If you choose to allow your Fuetre to reach full size, the recommended spacing should
                                                    be set at 6-m radius while the hole size should be 60cm*60cm*50cm. Fuetre is a cold-
                                                    hardy variety of avocado and is tolerant to frost. Ironically it does best in temperatures
                                                    between 16 to 24 degrees centigrade.
                                            </div>
                                            <div class="text">
                                                    It needs sunlight and moderate humidity levels to reach optimum growth. Plant
                                                    windbreakers around the orchard to minimize tree damage which causes leaves to fall and
                                                    fruit to drop. Sow seeds in even straight lines to facilitate crop husbandry and harvesting
                                            </div>
                                            <div class="text">
                                                    Avocados are highly adapted to different rainfall conditions; however, rainfall of up to
                                                    1600 mm should be well-distributed throughout the year However, irrigation is deemed
                                                    necessary where rainfail is not adequate.
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
                                            
                                                    Water newly planted trees immediately, then two to three times weekly with just
                                                    enough water. Always allow the soil to dry to a depth of 2 to 4 inches before watering
                                                    again. As the tree grows, decrease the frequency to once per week. As the tree nears
                                                    one year old, increase the amount of watering following proper water judging
                                                    procedues. Reduce watering during the rainy season.
                                                    While planting use the ratio of 1:1 soil to manure. Top dress your plants with a thin
                                                    covering of manure before the onset of rains especially the long rains.
                                            
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
                                                    Mulch the tree with 4 to 6 inches of coarse mulch, such as redwood mulchot straw
                                                    mulch. Pull the mulch 6 inches away from the tree&#39;s trunk.; mulch helps slow
                                                    evaporation of water and protects the tender roots from the hot sun. In addition, it is
                                                    also acts as a weed control form.
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
                                                    The tree is fast spreading and relatively low. And because it doesn’t have a dominant
                                                    main trunk, the side branches are short and carry with it flushes of new shoots which
                                                    grow laterally adding to the canopy effect.
                                            </div>
                                            <div class="text">
                                                    While making smaller cuts at branch tips restricts lateral and vertical growth, formative
                                                    pruning is important to encourage lateral growth and multiple framework branching.
                                            </div>
                                            <div class="text">
                                                    In order to reinforce the shaping of the tree, remove all sucker growth originating from
                                                    below the graft union
                                            </div>
                                            <div class="text">
                                                    Cutting large branches infrequently stimulates vegetative growth in the entire tree
                                                    ultimately sacrificing fruit production. (should only be strictly done only when
                                                    temperatures plunge)
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">Harvesting<div class="icon fa fa-arrow-alt-circle-right"></div></div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">
                                                    Harvesting is majorly through hand picking and the fruits ripen off the tree. A ripe
                                                    avocado fruit yields to a light pressure when gently squeezed
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">Post-Harvesting<div class="icon fa fa-arrow-alt-circle-right"></div></div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">
                                                        The plastic or wooden containers must be padded to prevent damaging the skin of
                                                        fruits as this can result into infections
                                            </div>
                                            <div class="text">
                                                        Store the field boxes in the shade in order to minimize sunburn, loss of moisture
                                                        and dust accumulation
                                            </div>
                                            <div class="text">
                                                        Pre-cooling: Fruits must be cooled as quickly as possible. “Fuerte” and “Hass”
                                                        must be cooled to 5 oC – 7 oC within five hours of harvesting
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <h3>Pro tip: Test for Acidity</h3>

                            <div class="two-column row">
                                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="image-box">
                                        <figure class="image"><img src="{{asset('images/avocado/f5.jpeg')}}" alt=""></figure>
                                    </div>
                                </div>
                                <div class="list-column col-lg-6 col-md-12 col-sm-12">
                                    <ul class="list-style-one">
                                        <li>Scoop soil sample into a fresh container, add 1/2 cup of water, and mix.</li>
                                        <li>Then, add 1/2 cup of baking soda. If the soil bubbles or fizzes, the soil is acidic.</li>
                                        
                                    </ul>
                                </div>
                            </div>
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
                                <a href="#"><i class="fa fa-file-word"></i> Cultivation of Avocados</a>
                            </div>

                            <div class="brochure-link">
                                <a href="#"><i class="fa fa-file-pdf"></i> Nutritious Benefits of avocados</a>
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