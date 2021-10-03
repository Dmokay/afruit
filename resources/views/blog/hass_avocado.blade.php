@extends('main')

@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url(images/avocado/hass5.jpeg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>Hass Avocado Farming</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Hass Avocado</li>
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
                                    <li><a href="{{url('images/avocado/hass5.jpeg')}}" class="lightbox-image"><img src="{{asset('images/avocado/hass5.jpeg')}}" alt=""></a></li>

                                    <li><a href="{{url('images/avocado/hass1.jpeg')}}" class="lightbox-image"><img src="{{asset('images/avocado/hass1.jpeg')}}" alt=""></a></li>

                                    <li><a href="{{url('images/avocado/hass4.jpeg')}}" class="lightbox-image"><img src="{{asset('images/avocado/hass4.jpeg')}}" alt=""></a></li>

                                    <li><a href="{{url('images/avocado/hass6.jpeg')}}" class="lightbox-image"><img src="{{asset('images/avocado/hass6.jpeg')}}" alt=""></a></li>

                                    <li><a href="{{url('images/avocado/hass7.jpeg')}}" class="lightbox-image"><img src="{{asset('images/avocado/hass7.jpeg')}}" alt=""></a></li>
                                </ul>
                                
                                <ul class="thumbs-carousel owl-carousel owl-theme">
                                    <li><img src="{{asset('images/avocado/hass5.jpeg')}}" alt=""></li>
                                    <li><img src="{{asset('images/avocado/hass1.jpeg')}}" alt=""></li>
                                    <li><img src="{{asset('images/avocado/hass4.jpeg')}}" alt=""></li>
                                    <li><img src="{{asset('images/avocado/hass6.jpeg')}}" alt=""></li>
                                    <li><img src="{{asset('images/avocado/hass7.jpeg')}}" alt=""></li>
                                </ul>
                            </div>
                        </div>

                        <div class="content-box">
                            <h2> Description</h2>
                            <p>Hass Avocado is a type A cultivar of avocado with distinctive dark green-colored leaves, dimpled skin and weighs an average of 200 to 300 grams. It’s birth was entirely a stroke of luck by a Californian amateur horticultirist (Rudolph Haas) who purcahsed and planted three kinds of avocado seedlings and one gained a liking.</p>
                            <p>The Haas Avocado is a highly commercial success owing to its unique buttery flavor and creamy texture, size, shelf life, high growing yields and in some areas year-round harvesting.</p>
                            <h3>Cultivation and planting</h3>

                            <ul class="accordion-box style-three">

                                <!--Block-->
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">Propagation. <div class="icon fa fa-arrow-alt-circle-right"></div></div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <div class="text">First one grows seeds from a ordinary[kienyeji]seeds for 3 to 4 months.Grafting as the most preffered mode of propagation is then done by getting scions from a mature hass avacado tree. Grafted plants as opposed to those planted from seeds tend to mature faster and bears more fruit.Grafted hass avocado trees started from a nursery tree generally begin setting fruit from two years after planting, however they show signs of early fruiting such as flowering but its advisable to a famer on to allow them fruit besause the branchs are yet not strong and mature enough to bear substatial amounts of fruits.Using the best seedlings improves the variety by increasing its resistance to diseases and its adaptability to different soils.</div>
                                        </div>
                                    </div>
                                </li>

                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">Sowing<div class="icon fa fa-arrow-alt-circle-right"></div></div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Choose a location where tree roots and canopies have ample space to spread. The recommended spacing for Hass avocados is set at 5.5 to 6 meters apart.Generally, avocado trees thrive in temperatures between 60 and 85 degrees Fahrenheit.<br> Plentiful sunlight, moderate humidity levels and mineral rich soil is just as essential. Ensure your soil types boasts acidic or alkaline pH of 6.0 to 6.5 and has proper drainage. Sow seeds in even straight lines to facilitate crop husbandry and harvesting. Avocados are highly adapted to different rainfall conditions; however, the rain should be an average of 1,000–1,600mm per annum and well-distributed throughout the year. However, irrigation is deemed necessary where rainfail is not adequate.</div>
                                        </div>
                                    </div>
                                </li>
                                
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">Care (Water and fertilizer)<div class="icon fa fa-arrow-alt-circle-right"></div></div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Its always advisable to use organic manure as opposed to non organic once. Manure should be mixed with soil in the ratio 1 is 1. Newly planted seedlings should be watered 2 to 3 times a week with substatial amount of water ranging from 5 to 10 liters. Always allow the soil to dry to a depth of 2 to 4 inches before watering again as this will allow roots fomation and growth. As the tree grows, decrease the frequency to once per week. As the tree nears one year old, increase the amount of watering following proper water judging procedues. Reduce watering during the rainy season. Add manure to the seedling before the onset of rains.</div>
                                        </div>
                                    </div>
                                </li>

                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">Mulching<div class="icon fa fa-arrow-alt-circle-right"></div></div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Mulch the tree with 4 to 6 inches of coarse mulch, dry grass or plant leaves . Pull the mulch 6 inches away from the tree&#39;s trunk.; mulch helps slow evaporation of water and protects the tender roots from the hot sun. In addition, it is also acts as a weed control form and as well adding nutrients to the soil.</div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">Pruning<div class="icon fa fa-arrow-alt-circle-right"></div></div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Young plants can be kept bushy and compact by snipping off some of the already formed fruits effectively reducing competition for nutrients, therefore ensuring high-quality fruits. <br> Pruning is also done to shape the tree, maintain the height or remove broken or damaged limbs. Remove any growth that appears below the graft, including leaves and root sprouts. Avoid heavy pruning.</div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">Harvesting<div class="icon fa fa-arrow-alt-circle-right"></div></div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Haas trees are harvested by hand by carefully cutting the stem of the avocado consequently separating the fruit from the tree. A pole pruner is used to pick the one’s on higher branches. <br> In Kenya, Hass Avocados flower at around October and are mature for picking between June to September. Avocados ‘mature on the tree and ripen off the tree after being picked. A dry test can be carried out as follows; pick a few fruits and set aside in warm areas to ripen. Typically, it should soften within seven to 21 days. If it is does not undergo any softening changes, it is not yet mature.</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <h3>Pro tip: Test for Acidity</h3>

                            <div class="two-column row">
                                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="image-box">
                                        <figure class="image"><img src="{{asset('images/avocado/hass2.jpeg')}}" alt=""></figure>
                                    </div>
                                </div>
                                <div class="list-column col-lg-6 col-md-12 col-sm-12">
                                    <ul class="list-style-one">
                                        <li>Scoop soil sample into a fresh container, add 1/2 cup of water, and mix.</li>
                                        <li>Then, add 1/2 cup of baking soda. If the soil bubbles or fizzes, the soil is acidic.</li>
                                        <li>Seed spacing may range from 5.5m by 6m.</li>
                                        <li>The planting holes should be around 60 cm to 70 cm.</li>
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
                                <a href="#"><i class="fa fa-file-pdf"></i> Nutritious Benefits of Avocados</a>
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