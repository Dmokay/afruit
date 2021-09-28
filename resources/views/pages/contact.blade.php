@extends('main')

@section('content')

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/8.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>Contact Us</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{('/')}}">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Section -->
    <section class="contact-section alternate">
        <div class="auto-container">
            <div class="row">
                <!-- Form Column -->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">Get in Touch</span>
                            <h2>Talk to Us Today</h2>
                        </div>
                        <!-- Contact Form -->
                        <div class="contact-form">
                            <form>
                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-12">
                                        <input type="text" name="username" placeholder="Name" required>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <input type="email" name="email" placeholder="Email" required>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <input type="text" name="phone" placeholder="Service" required>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <input type="text" name="phone" placeholder="Phone" required>
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-12">
                                        <textarea name="message" placeholder="How Can We Help?"></textarea>
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-12">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">Send Now</button>
                                    </div> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <figure class="image wow fadeIn"><img src="images/resource/image-5.png" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Section -->


@endsection