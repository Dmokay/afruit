@extends('main')

@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url(images/orange4.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>Orange Fruit Seedlings</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Orange Fruits</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container bg-colored">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-detail">
                        <!-- News Block -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image wow fadeIn"><img src="images/orange6.jpg" alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <div class="info-box">
                                        <div class="date">23 <span>Aug</span></div>
                                        <h3>Why We Should Embrace Orange Fruits Farming.</h3>
                                        <ul class="info">
                                            <li><a href="#"><i class="fa fa-comments"></i>Comment 23</a></li>
                                            <li><a href="#"><i class="fa fa-user"></i>Mayama</a></li>
                                        </ul>
                                    </div>
                                    <p>Oranges grows over a wide range of soils but light, well drained (sandy) soils are most ideal. For good production oranges require well distributed rainfall or supplementary irrigation throughout the year. A good source of water is therefore essential in orange farming. Water requirements vary according to weather conditions, but the ideal range is between 450mm – 2,700mm per year.</p>
                                    <p>Citrus farming in Kenya requires temperature ranges from 13oC-38oC. Optimum temperature is 25oC-35oC. Extremely high temperatures may be harmful especially during flowering or if cool temperatures are followed by a hot period.</p>
                                    <p>Damage occurs in the form of flower and leaf drop. Wind can also cause serious damage to orange trees and fruits. Hot dry wind will often scorch trees by drying young leaves. Winds of high speeds will scar fruits and cause fruit drop. Where winds are a problem, wind break shelters should be planted.</p>
                                    <blockquote>
                                        <p>Orange seeds are quite easy to germinate, but a tree grown from an orange seed can take anywhere from seven to 15 years to bear fruit.</p>
                                        <cite>Mayama Peter</cite>
                                    </blockquote>
                                    <div class="two-column row">
                                        <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                            <figure class="image wow fadeIn"><a href="images/resource/image-7.jpg" class="lightbox-image"><img src="images/orange9.jpg" alt=""></a></figure>
                                        </div>
                                        <div class="text-column col-lg-6 col-md-12 col-sm-12">
                                            <p>Orange trees are a beautiful tree to have growing in your home or backyard. Not only do they produce wonderful smelling leaves, but mature trees also bear fruit.  If you're looking for a tree that will produce fruit faster, you're better off getting a grafted tree from a nursery.</p>
                                        </div>
                                    </div>

                                    <!-- Other Options -->
                                    <div class="post-share-options clearfix">
                                        <div class="pull-left">
                                            <div class="text">Did You Like This Post? Share it :</div>
                                        </div>
                                        <div class="pull-right">
                                            <ul class="social-icon">
                                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                                <li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                                                <li><a href="#"><span class="fab fa-pinterest"></span></a></li>
                                                <li><a href="#"><span class="fab fa-dribbble"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Post Controls-->
                        <div class="post-controls">
                            <div class="inner clearfix">
                                <div class="prev-post">
                                    <div class="thumb"><img src="images/resource/prev-post.jpg" alt=""></div>
                                    <h5><a href="blog-detail.html">The Nutritious passion fruits</a></h5>
                                    <div class="title"><a href="blog-detail.html">Previous</a></div>
                                </div>

                                <div class="next-post">
                                    <div class="thumb"><img src="images/resource/next-post.jpg" alt=""></div>
                                    <h5><a href="blog-detail.html">Avocado is crucial in a meal</a></h5>
                                    <div class="title"><a href="blog-detail.html">Next</a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Comments Area -->
                        <div class="comments-area">
                            <div class="group-title"><h4>Recent Comment: 03</h4></div>
                            <div class="comments-box">

                                <div class="comment-box">
                                    <div class="comment">
                                        <div class="author-thumb">
                                            <img src="images/resource/avatar-3.jpg" alt="">
                                            <a href="#" class="reply-btn">Reply</a>
                                        </div> 
                                        <div class="comment-info">
                                            <div class="name">Mokaya</div>
                                            <div class="date">says Oct 15, 2018 at 11:00</div>
                                        </div>

                                        <div class="text">Effective and easily applicable farming skills on a daily. Great read. </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!--Comment Form-->
                        <div class="comment-form">
                            <div class="group-title">
                                <h4>Leave a Comment</h4>
                            </div>
                            <form method="get" action="{{url('soon')}}"> 
                                <div class="row clearfix">

                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Full Name" required="">
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>

                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="subject" placeholder="Subject" required="">
                                    </div>

                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="phone" placeholder="Phone Number" required="">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Write Your Comments"></textarea>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">Post Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                     </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar default-sidebar">
                        
                        <!--search box-->
                        <div class="sidebar-widget search-box">
                            <form method="get" action="{{url('soon')}}">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search....." required="">
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>

                        <!-- Categories -->
                        <div class="sidebar-widget categories">
                            <div class="sidebar-title"><h3>Categories</h3></div>
                            <ul class="cat-list">
                                <li><a href="#">Citrus <span>(6)</span></a></li>
                                <li><a href="#">Melons <span>(9)</span></a></li>
                                <li class="active"><a href="#">Berries <span>(3)</span></a></li>
                                <li><a href="#">Nuts <span>(5)</span></a></li>
                            </ul>
                        </div>

                        <!-- Latest News -->
                        <div class="sidebar-widget latest-news">
                            <div class="sidebar-title"><h3>Popular Posts</h3></div>
                            <div class="widget-content">
                                <article class="post">
                                    <div class="post-thumb"><a href="blog-detail.html"><img src="images/resource/post-thumb-3.jpg" alt=""></a></div>
                                    <h5><a href="blog-detail.html">Tomato Seedlings Essential</a></h5>
                                    <div class="post-info">June 21, 2017</div>
                                </article>

                                <article class="post">
                                    <div class="post-thumb"><a href="blog-detail.html"><img src="images/resource/post-thumb-4.jpg" alt=""></a></div>
                                    <h5><a href="blog-detail.html">Get your Apple seedlings</a></h5>
                                    <div class="post-info">June 21, 2017</div>
                                </article>

                                
                            </div>
                        </div>

                        <!-- Gallery Widget -->
                        <!-- <div class="sidebar-widget gallery-widget">
                            <div class="sidebar-title"><h3>Instagram</h3></div>
                            <div class="link-box"><a href="#">Follow us</a></div>
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

                        <!-- Tags -->
                        <!-- <div class="sidebar-widget tags">
                            <div class="sidebar-title"><h3>Tag Cloud</h3></div>
                            <ul class="tag-list clearfix">
                                <li><a href="#">Lawn</a></li>
                                <li><a href="#">Garden</a></li>
                                <li><a href="#">Landscape</a></li>
                                <li><a href="#">Rubbish</a></li>
                                <li><a href="#">Nature</a></li>
                                <li><a href="#">Tree Planting</a></li>
                                <li><a href="#">Watering</a></li>
                                <li><a href="#">Eco</a></li>
                            </ul>
                        </div>               -->
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Container -->

    <!--Clients Section-->
    <section class="clients-section style-two">
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