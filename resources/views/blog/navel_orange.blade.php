@extends('main')

@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url(images/oranges/n4.jpeg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1> Washington Navel Orange Farming,</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Navel Oranges</li>
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
                                    <li><a href="{{url('images/oranges/n4.jpeg')}}" class="lightbox-image"><img src="{{asset('images/oranges/n4.jpeg')}}" alt=""></a></li>

                                    <li><a href="{{url('images/oranges/n6.jpeg')}}" class="lightbox-image"><img src="{{asset('images/oranges/n6.jpeg')}}" alt=""></a></li>

                                    <li><a href="{{url('images/oranges/n7.jpeg')}}" class="lightbox-image"><img src="{{asset('images/oranges/n7.jpeg')}}" alt=""></a></li>

                                    <li><a href="{{url('images/oranges/n8.jpeg')}}" class="lightbox-image"><img src="{{asset('images/oranges/n8.jpeg')}}" alt=""></a></li>

                                    <li><a href="{{url('images/oranges/n9.jpeg')}}" class="lightbox-image"><img src="{{asset('images/oranges/n9.jpeg')}}" alt=""></a></li>
                                </ul>
                                
                                <ul class="thumbs-carousel owl-carousel owl-theme">
                                    <li><img src="{{asset('images/oranges/n4.jpeg')}}" alt=""></li>
                                    <li><img src="{{asset('images/oranges/n6.jpeg')}}" alt=""></li>
                                    <li><img src="{{asset('images/oranges/n7.jpeg')}}" alt=""></li>
                                    <li><img src="{{asset('images/oranges/n8.jpeg')}}" alt=""></li>
                                    <li><img src="{{asset('images/oranges/n9.jpeg')}}" alt=""></li>
                                </ul>
                            </div>
                        </div>

                        <div class="content-box">
                            <h2> Description</h2>
                            <p>
                                Easily identifiable because of thier peculiar human-navel-like formation found opposite
                                the stem-end, we can tell Navel Oranges from other cultivars .Being the most popularly
                                grown orange in the world,the fruit is sweet and has just enough juice for outstanding
                                fresh eating. They also seedless thus good for juice bleanding and mixology.
                                
                            </p>
                          
                            <h3>Cultivation and planting</h3>

                            <ul class="accordion-box style-three">

                                <!--Block-->
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">Propagation. <div class="icon fa fa-arrow-alt-circle-right"></div></div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <div class="text">
                                                    The Navel Orange developed as a form of mutation causing it to develop sterility which
                                                    does not allow the typical breeding method ,germination ,growing from seed. Ultimately
                                                    this raises the question of how then they’re grown.Propagation is the answer.Navel
                                                    Orange trees are propagated by cutting and grafting techniques so it is safe to say that all
                                                    Navel Orange trees grown worldwide are clones of the single tree from Bahia, Brazil.
                                            </div>
                                            
                                        </div>
                                    </div>
                                </li>
                                <h3>Various forms of propagation include:</h3>
                                    <p>
                                        Cleft grafting is one of the simplest methods and involves placing the point of union
                                        below the soil.
                                    </p>
                                    <div class="two-column row">
                                        <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                            <div class="image-box">
                                                <figure class="image"><img src="{{asset('images/oranges/n5.jpeg')}}" alt=""></figure>
                                            </div>
                                        </div>
                                        <div class="list-column col-lg-6 col-md-12 col-sm-12">
                                            <ul class="list-style-one">
                                                <li>
                                                    The lower end of a scion about 5 Inches long is sharpened to a wedge shape by
                                                    two slanting cuts on opposite sides.
                                                </li>
                                                <li>
                                                    Grafting on the young stock is done by cutting or sawing off slightly below the
                                                    surface of the soil and a making cleft made in the stock.
                                                </li>
                                                <li>
                                                    The scion is pushed down into place and the stock wrapped with strips of waxed
                                                    cloth
                                                </li>
                                                <li>
                                                    Moist soil is then thrown up around the graft and with time it is best to remove the
                                                    cloth as soon as the grafts begin to grow
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <p>
                                        Inarching is frequently used in areas where trees are prone to foot rot, wood lice, or
                                        termites. It consists of uniting limbs of the same or different trees.

                                    </p>
                                    <div class="two-column row">
                                        <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                            <div class="image-box">
                                                <figure class="image"><img src="{{asset('images/oranges/n3.jpeg')}}" alt=""></figure>
                                            </div>
                                        </div>
                                        <div class="list-column col-lg-6 col-md-12 col-sm-12">
                                            <ul class="list-style-one">
                                                <li>
                                                    Start by cutting off the limb (preferably the small one) by a slanting stroke
                                                    in such a place that the cut surface faces the other limb when bent over against it
                                                    at the point where the union is to be made,
                                                </li>
                                                <li>
                                                    A vertical and a cross cut, like an inverted T, is made in the bark of the large limb
                                                    at the point where the two limbs touch.
                                                </li>
                                                <li>
                                                    Push the end of the small limb up into the slit and use strips of waxed cloth to
                                                    wound around the union to hold the limbs firmly in place.
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
                                                    Citrus is grown on an altitude of 2100 m and for optimal growth a temperature range
                                                    from 2 to 30is ideal. Long periods below 0 are injurious to the trees and at 13 growth
                                                    diminishes. Spacing should be of 4 by 4 meters.
                                            </div>
                                            <div class="text">
                                                    Temperature plays an important role in the production of high quality fruit. Typical
                                                    colouring of fruit takes place if night temperatures are about 14coupled with low
                                                    humidity during ripening time. Exposure to strong winds and temperatures above 38may
                                                    cause fruit drop, scarring and scorching of fruits. In the tropics the high lands provide the
                                                    best night weather for orange colour and flavour.
                                            </div>
                                            <div class="text">
                                                    Citrus trees grow on a wide range of soils varying from sandy soils to those high in
                                                    clay,depending on the scion/ rootstock combination,. Soils good for growth are well-
                                                    drained, medium-textured, deep and fertile. A pH range of 5.5 to 6.0 is ideal.
                                            </div>
                                            <div class="text">
                                                    Washington Navel Trees prefer full sun and fertile, well-drained soil conditions. It
                                                    requires a moderate amount of watering.
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
                                            
                                                    A drip irrigation system might be ideal to ensure regular watering (without delivering too
                                                    much water). I would also add an organic mulch around your citrus — at least 2 to 3
                                                    inches on top of the soil past the drip line of the tree, but not touching the trunk of the
                                                    tree. That will help retain moisture.
                                            
                                            </div>
                                            <div class="text">
                                                    Adding organic fertilizer to the soil will also help with water retainability.
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
                                                mulch. Pull the mulch 6 inches away from the tree&#39;s trunk; mulch helps slow
                                                evaporation of water and protects the tender roots from the hot sun. In addition, it is
                                                also acts as a weed controller. Ano can also use local available materials such as grass
                                                or plant leaves for mulching.
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
                                                    Citrus trees have been pruned in different ways; some better than others, with respect to
                                                    the traditional technique, which only removes dead, infected, weak wood, out of place
                                                    branches. Light is critically important for flowering and fruit set in citrus trees and
                                                    considered the most critical factor controlling productivity. The objective of proper
                                                    pruning is to encourage trees to produce a balance of vegetative and fruiting wood, with
                                                    efficiently ventilated interior citrus canopy and small enough to harvest from the ground
                                                    without the need for long rung ladder.
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
                                                    Manual harvesting offers the benefits of determined fruit selection and full product
                                                    quality, but has a relatively low picking rate. Picking technique needs development by
                                                    providing mechanical harvesting methods to improve fruit quality and reduce harvesting
                                                    cost. Mechanical harvesting offers a considerably greater harvesting rate over manual
                                                    picking. However for small scale famers manual handpicking is termed to be the best.
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
                                <a href="#"><i class="fa fa-file-word"></i> Cultivation of Navel oranges</a>
                            </div>

                            <div class="brochure-link">
                                <a href="#"><i class="fa fa-file-pdf"></i> Nutritious Benefits of navel oranges</a>
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