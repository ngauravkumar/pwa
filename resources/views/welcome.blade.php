@extends('layouts.app')
@section('content')

<!-- Banner Section Starts -->
<section class="banner parallaxie" id="home">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="header-content wow fadeInUp">
                    <h2><span>Present your</span> <br>Awesome product</h2>
                    <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum necessitatibus praesentium voluptatum deleniti atque corrupti, quos dolores eos.</p>
                    <div class="buy-button">
                        <a href="#" class="btn-buynow">Purchase Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="slider-image wow fadeInRight">
                    <img src="{{ asset('images/header.png') }}" alt=""> 
                </div>
            </div>
        </div>
    </div>	
</section>
<!-- Banner Section Ends -->

<!-- Step Section starts -->
<div class="step-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="step-container">
                    <div class="row">
                        <!-- Step start -->
                        <div class="col-md-4 col-sm-4">
                            <div class="step-single wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon-box">
                                    <i class="flaticon-login"></i>
                                </div>
                                <h3>Create a Account</h3>
                                <p>The alien mothership is in orbit here. If we can hit that bullseye.</p>
                            </div>
                        </div>
                        <!-- Step end -->

                        <!-- Step start -->
                        <div class="col-md-4 col-sm-4">
                            <div class="step-single wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <i class="flaticon-login-1"></i>
                                </div>
                                <h3>Login in Website</h3>
                                <p>The alien mothership is in orbit here. If we can hit that bullseye.</p>
                            </div>
                        </div>
                        <!-- Step end -->

                        <!-- Step start -->
                        <div class="col-md-4 col-sm-4">
                            <div class="step-single wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon-box">
                                    <i class="flaticon-shopping-cart"></i>
                                </div>
                                <h3>Purchase Now</h3>
                                <p>The alien mothership is in orbit here. If we can hit that bullseye.</p>
                            </div>
                        </div>
                        <!-- Step end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Step Section ends -->

<!-- Features section starts -->
<section class="features" id="features">
    <div class="container">
        <!-- Section Title start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInUp">
                    <p>Explore the Awesome</p>
                    <h2>Product Features</h2>
                </div>
            </div>
        </div>
        <!-- Section Title end -->

        <div class="row">
            <div class="col-md-4">
                <!-- Feature single start -->
                <div class="feature-single feature-right wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="icon-box">
                        <i class="flaticon-cpu"></i>
                    </div>

                    <h3>Dual Processor</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                </div>
                <!-- Feature single end -->

                <!-- Feature single start -->
                <div class="feature-single feature-right wow fadeInLeft" data-wow-delay="0.6s">
                    <div class="icon-box">
                        <i class="flaticon-gold-medal"></i>
                    </div>

                    <h3>Gold aluminum</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                </div>
                <!-- Feature single end -->

                <!-- Feature single start -->
                <div class="feature-single feature-right wow fadeInLeft" data-wow-delay="0.8s">
                    <div class="icon-box">
                        <i class="flaticon-loupe"></i>
                    </div>

                    <h3>Ion-X glass</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                </div>
                <!-- Feature single end -->

                <!-- Feature single start -->
                <div class="feature-single feature-right wow fadeInLeft" data-wow-delay="1s">
                    <div class="icon-box">
                        <i class="flaticon-sensor"></i>
                    </div>

                    <h3>Heart rate sensor</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                </div>
                <!-- Feature single end -->
            </div>

            <div class="col-md-4">
                <div class="feature-image wow fadeInUp">
                    <img src="{{ asset('images/feature.png') }}" alt=""> 
                </div>
            </div>

            <div class="col-md-4">
                <!-- Feature single start -->
                <div class="feature-single feature-left wow fadeInRight" data-wow-delay="0.2s">
                    <div class="icon-box">
                        <i class="flaticon-torch-top-view"></i>
                    </div>

                    <h3>Force Touch</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                </div>
                <!-- Feature single end -->

                <!-- Feature single start -->
                <div class="feature-single feature-left wow fadeInRight" data-wow-delay="0.4s">
                    <div class="icon-box">
                        <i class="flaticon-eye"></i>
                    </div>

                    <h3>Retina display</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                </div>
                <!-- Feature single end -->

                <!-- Feature single start -->
                <div class="feature-single feature-left wow fadeInRight" data-wow-delay="0.6s">
                    <div class="icon-box">
                        <i class="flaticon-speaker"></i>
                    </div>

                    <h3>Fire Speaker</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                </div>
                <!-- Feature single end -->

                <!-- Feature single start -->
                <div class="feature-single feature-left wow fadeInRight" data-wow-delay="1s">
                    <div class="icon-box">
                        <i class="flaticon-wifi"></i>
                    </div>

                    <h3>Bluetooth & Wi-Fi</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                </div>
                <!-- Feature single end -->
            </div>
        </div>
    </div>
</section>
<!-- Features section ends -->

<!-- About Product section starts -->
<section class="about-product" id="about">
    <div class="container">
        <!-- Section Title start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInUp">
                    <p>Beauty meets functionality</p>
                    <h2>About Product</h2>
                </div>
            </div>
        </div>
        <!-- Section Title end -->

        <div class="row">
            <div class="col-md-12">
                <div class="about-product-single">
                    <div class="row">
                        <div class="col-md-7 col-sm-7">
                            <div class="about-entry">
                                <h4>Fresh News From The Labs</h4>
                                <h3>Different preset Signup & Order forms ready to use.</h3>
                                <p>Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has.</p>
                                <a href="#" class="btn-buynow">Purchase Now</a>
                            </div>
                        </div>

                        <div class="col-md-5 col-sm-5">
                            <div class="about-image wow fadeInRight" data-wow-delay="0.2s">
                                <img src="{{ asset('images/about-1.png') }}" alt=""> 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="about-product-single">
                    <div class="row">
                        <div class="col-md-7 col-sm-7 pull-right">
                            <div class="about-entry">
                                <h4>Fresh News From The Labs</h4>
                                <h3>Different preset Signup & Order forms ready to use.</h3>
                                <p>Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has.</p>
                                <a href="#" class="btn-buynow">Purchase Now</a>
                            </div>
                        </div>

                        <div class="col-md-5 col-sm-5">
                            <div class="about-image wow fadeInLeft" data-wow-delay="0.4s">
                                <img src="{{ asset('images/about-2.png') }}" alt=""> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Product section ends -->

<!-- About Facts starts -->
<section class="about-facts parallaxie">
    <div class="container">
        <!-- Section Title start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInUp">
                    <p>User Experience</p>
                    <h2>The Facts about</h2>
                </div>
            </div>
        </div>
        <!-- Section Title end -->

        <div class="row">
            <!-- Fact single start -->
            <div class="col-md-3 col-sm-6">
                <div class="facts-single">
                    <h3 class="counter">2485</h3>
                    <p>People Buy</p>
                </div>
            </div>
            <!-- Fact single end -->

            <!-- Fact single start -->
            <div class="col-md-3 col-sm-6">
                <div class="facts-single">
                    <h3 class="counter">458</h3>
                    <p>Users</p>
                </div>
            </div>
            <!-- Fact single end -->

            <!-- Fact single start -->
            <div class="col-md-3 col-sm-6">
                <div class="facts-single">
                    <h3 class="counter">885</h3>
                    <p>Comments</p>
                </div>
            </div>
            <!-- Fact single end -->

            <!-- Fact single start -->
            <div class="col-md-3 col-sm-6">
                <div class="facts-single">
                    <h3 class="counter">561</h3>
                    <p>Premium Users</p>
                </div>
            </div>
            <!-- Fact single end -->
        </div>
    </div>
</section>
<!-- About Facts ends -->

<!-- Product Section starts -->
<section class="products" id="products">
    <div class="container">
        <!-- Section Title start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInUp">
                    <p>Our Most Popular</p>
                    <h2>Awesome Products</h2>
                </div>
            </div>
        </div>
        <!-- Section Title end -->

        <div class="row">
            <!-- Product single start -->
            <div class="col-md-3 col-sm-6">
                <div class="product-single">
                    <div class="product-box">
                        <div class="front">
                            <img src="{{ asset('images/product-1.png') }}" alt=""> 
                            <h3>$240 <del>$349</del></h3>
                        </div>
                        <div class="back">
                            <div class="product-info">
                                <h3>Blue Apple Watch</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                <a href="#" class="btn-ordernow">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product single end -->

            <!-- Product single start -->
            <div class="col-md-3 col-sm-6">
                <div class="product-single">
                    <div class="product-box">
                        <div class="front">
                            <img src="{{ asset('images/product-2.png') }}" alt="">
                            <h3>$140</h3>
                        </div>
                        <div class="back">
                            <div class="product-info">
                                <h3>Blue Apple Watch</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                <a href="#" class="btn-ordernow">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product single end -->

            <!-- Product single start -->
            <div class="col-md-3 col-sm-6">
                <div class="product-single">
                    <div class="product-box">
                        <div class="front">
                            <img src="{{ asset('images/product-3.png') }}" alt="">
                            <h3>$240</h3>
                        </div>
                        <div class="back">
                            <div class="product-info">
                                <h3>Blue Apple Watch</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                <a href="#" class="btn-ordernow">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product single end -->

            <!-- Product single start -->
            <div class="col-md-3 col-sm-6">
                <div class="product-single">
                    <div class="product-box">
                        <div class="front">
                            <img src="{{ asset('images/product-4.png') }}" alt="">
                            <h3>$260</h3>
                        </div>
                        <div class="back">
                            <div class="product-info">
                                <h3>Blue Apple Watch</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                <a href="#" class="btn-ordernow">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product single end -->
        </div>
    </div>
</section>
<!-- Product Section ends -->

<!-- Testimonials starts -->
<section class="testimonials parallaxie" id="testimonial">
    <div class="container">
        <!-- Section Title start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInUp">
                    <p>Feedback</p>
                    <h2>What our clients say</h2>
                </div>
            </div>
        </div>
        <!-- Section Title end -->

        <div class="row">
            <div class="col-md-12">
                <div class="swiper-container testimonials-slider">
                    <div class="swiper-wrapper">
                        <!-- Client Review slide start -->
                        <div class="swiper-slide">
                            <div class="testimonial-slide">
                                <div class="author-info">
                                    <img src="{{ asset('images/author-1.png') }}" alt=""> 
                                </div>

                                <div class="testimonial-entry">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                                    <h4>Harshad Patel <span>/ Web Designer</span></h4>
                                </div>
                            </div>
                        </div>
                        <!-- Client Review slide end -->

                        <!-- Client Review slide start -->
                        <div class="swiper-slide">
                            <div class="testimonial-slide">
                                <div class="author-info">
                                    <img src="{{ asset('images/author-2.png') }}" alt="">
                                </div>

                                <div class="testimonial-entry">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                                    <h4>Jasmin Joshph <span>/ Front end</span></h4>
                                </div>
                            </div>
                        </div>
                        <!-- Client Review slide end -->

                        <!-- Client Review slide start -->
                        <div class="swiper-slide">
                            <div class="testimonial-slide">
                                <div class="author-info">
                                    <img src="{{ asset('images/author-3.png') }}" alt="">
                                </div>

                                <div class="testimonial-entry">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                                    <h4>Sweta Silva <span>/ Back end</span></h4>
                                </div>
                            </div>
                        </div>
                        <!-- Client Review slide end -->

                        <!-- Client Review slide start -->
                        <div class="swiper-slide">
                            <div class="testimonial-slide">
                                <div class="author-info">
                                    <img src="{{ asset('images/author-1.png') }}" alt="">
                                </div>

                                <div class="testimonial-entry">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                                    <h4>Harshad Patel <span>/ Web Designer</span></h4>
                                </div>
                            </div>
                        </div>
                        <!-- Client Review slide end -->

                        <!-- Client Review slide start -->
                        <div class="swiper-slide">
                            <div class="testimonial-slide">
                                <div class="author-info">
                                    <img src="{{ asset('images/author-2.png') }}" alt="">
                                </div>

                                <div class="testimonial-entry">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                                    <h4>Jasmin Joshph <span>/ Front end</span></h4>
                                </div>
                            </div>
                        </div>
                        <!-- Client Review slide end -->

                        <!-- Client Review slide start -->
                        <div class="swiper-slide">
                            <div class="testimonial-slide">
                                <div class="author-info">
                                    <img src="{{ asset('images/author-3.png') }}" alt="">
                                </div>

                                <div class="testimonial-entry">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                                    <h4>Sweta Silva <span>/ Back end</span></h4>
                                </div>
                            </div>
                        </div>							
                        <!-- Client Review slide end -->

                    </div>

                    <div class="testimonial-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials ends -->

<!-- Pricing Section Starts -->
<section class="pricing" id="pricing">
    <div class="container">
        <!-- Section Title start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInUp">
                    <p>Our Affordable Best</p>
                    <h2>Pricing Plan</h2>
                </div>
            </div>
        </div>
        <!-- Section Title end -->

        <div class="row">
            <!-- Pricing box start -->
            <div class="col-md-4">
                <div class="pricing-single wow fadeInUp" data-wow-delay="0.2s">
                    <div class="pricing-header">
                        <div class="icon-box">
                            <i class="flaticon-tea-time"></i>
                        </div>
                        <h3>Beginner Package</h3>
                        <p>$9</p>
                        <a href="#" class="btn-buynow">Order Now</a>
                    </div>

                    <div class="pricing-body">
                        <ul>
                            <li><span>Maximum</span> converting layout</li>
                            <li><span>Pre made</span> signup forms</li>
                            <li><span>Best support</span> options</li>
                            <li><span>No coding</span> experience needed</li>
                            <li><span>More pre-made</span> elements</li>
                            <li><span>Additional</span> demo layouts</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Pricing box end -->

            <!-- Pricing box start -->
            <div class="col-md-4">
                <div class="pricing-single recommended wow fadeInUp" data-wow-delay="0.4s">
                    <div class="pricing-header">
                        <div class="icon-box">
                            <i class="flaticon-gold-medal"></i>
                        </div>
                        <h3>Premium Package</h3>
                        <p>$19</p>
                        <a href="#" class="btn-buynow">Order Now</a>
                    </div>

                    <div class="pricing-body">
                        <ul>
                            <li><span>Maximum</span> converting layout</li>
                            <li><span>Pre made</span> signup forms</li>
                            <li><span>Best support</span> options</li>
                            <li><span>No coding</span> experience needed</li>
                            <li><span>More pre-made</span> elements</li>
                            <li><span>Additional</span> demo layouts</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Pricing box end -->

            <!-- Pricing box start -->
            <div class="col-md-4">
                <div class="pricing-single wow fadeInUp" data-wow-delay="0.6s">
                    <div class="pricing-header">
                        <div class="icon-box">
                            <i class="flaticon-package"></i>
                        </div>
                        <h3>Unlimited Package</h3>
                        <p>$49</p>
                        <a href="#" class="btn-buynow">Order Now</a>
                    </div>

                    <div class="pricing-body">
                        <ul>
                            <li><span>Maximum</span> converting layout</li>
                            <li><span>Pre made</span> signup forms</li>
                            <li><span>Best support</span> options</li>
                            <li><span>No coding</span> experience needed</li>
                            <li><span>More pre-made</span> elements</li>
                            <li><span>Additional</span> demo layouts</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Pricing box end -->
        </div>
    </div>
</section>
<!-- Pricing Section ends -->

<!-- Buy Now infobar section starts -->
<div class="buynow-infobar parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-8">
                <div class="section-title wow fadeInUp">
                    <p>Get it Today</p>
                    <h2>Get your Product today!</h2>
                </div>

                <div class="buynow-entry">
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>

                    <a href="#" class="btn-buynow">Orderer Now</a>
                </div>
            </div>

            <div class="col-md-6 col-sm-4">
                <div class="buynow-video">
                    <a href="../../../watch.html?v=JrbJ8dXzmnE" class="popup-video"><i class="flaticon-play-button"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Buy Now infobar section ends -->

<!-- Newsletter & Feature info section starts -->
<section class="newsletter-feature">
    <div class="container">
        <!-- Section Title start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInUp">
                    <p>Newsletter</p>
                    <h2>Join with Us</h2>
                </div>
            </div>
        </div>
        <!-- Section Title end -->

        <!-- Newsletter Form start -->
        <div class="row">
            <div class="col-md-12">
                <div class="newsletter-form">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>

                    <form action="#" class="form-inline">
                        <div class="form-group">
                            <input class="form-control" name="your-email" id="your-email" type="email" placeholder="Enter Your Email address" required="">
                            <button class="btn-subscribe" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Newsletter Form end -->

        <!-- Small General Features start -->
        <div class="row">
            <div class="col-md-2 col-sm-4">
                <div class="small-feature-single wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <i class="flaticon-package-1"></i>
                    </div>
                    <p>Unlimited Installs and Updates</p>
                </div>
            </div>

            <div class="col-md-2 col-sm-4">
                <div class="small-feature-single wow fadeInUp" data-wow-delay="0.2s">
                    <div class="icon-box">
                        <i class="flaticon-cpu"></i>
                    </div>
                    <p>With its dual-core processor</p>
                </div>
            </div>

            <div class="col-md-2 col-sm-4">
                <div class="small-feature-single wow fadeInUp" data-wow-delay="0.3s">
                    <div class="icon-box">
                        <i class="flaticon-users"></i>
                    </div>
                    <p>Unlimited Team Members and Projects</p>
                </div>
            </div>

            <div class="col-md-2 col-sm-4">
                <div class="small-feature-single wow fadeInUp" data-wow-delay="0.4s">
                    <div class="icon-box">
                        <i class="flaticon-bluetooth"></i>
                    </div>
                    <p>Bluetooth & Wi-Fi Messenger</p>
                </div>
            </div>

            <div class="col-md-2 col-sm-4">
                <div class="small-feature-single wow fadeInUp" data-wow-delay="0.5s">
                    <div class="icon-box">
                        <i class="flaticon-support"></i>
                    </div>
                    <p>Premium Support and Help Desk</p>
                </div>
            </div>

            <div class="col-md-2 col-sm-4">
                <div class="small-feature-single wow fadeInUp" data-wow-delay="0.6s">
                    <div class="icon-box">
                        <i class="flaticon-video-camera"></i>
                    </div>
                    <p>Hight Quality Camera support</p>
                </div>
            </div>
        </div>
        <!-- Small General Features end -->
    </div>
</section>
<!-- Newsletter & Feature info section ends -->

<!-- Our Clients Section starts -->
<div class="our-clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="swiper-container ourclient-slider">
                    <div class="swiper-wrapper">
                        <!-- Client Logo start -->
                        <div class="swiper-slide">
                            <div class="client-logo">
                                <img src="{{ asset('images/client1.png') }}" alt=""> 
                            </div>
                        </div>
                        <!-- Client Logo end -->

                        <!-- Client Logo start -->
                        <div class="swiper-slide">
                            <div class="client-logo">
                                <img src="{{ asset('images/client2.png') }}" alt="">
                            </div>
                        </div>
                        <!-- Client Logo end -->

                        <!-- Client Logo start -->
                        <div class="swiper-slide">
                            <div class="client-logo">
                                <img src="{{ asset('images/client3.png') }}" alt="">
                            </div>
                        </div>
                        <!-- Client Logo end -->

                        <!-- Client Logo start -->
                        <div class="swiper-slide">
                            <div class="client-logo">
                                <img src="{{ asset('images/client4.png') }}" alt="">
                            </div>
                        </div>
                        <!-- Client Logo end -->

                        <!-- Client Logo start -->
                        <div class="swiper-slide">
                            <div class="client-logo">
                                <img src="{{ asset('images/client5.png') }}" alt="">
                            </div>
                        </div>
                        <!-- Client Logo end -->

                        <!-- Client Logo start -->
                        <div class="swiper-slide">
                            <div class="client-logo">
                                <img src="{{ asset('images/client1.png') }}" alt="">
                            </div>
                        </div>
                        <!-- Client Logo end -->

                        <!-- Client Logo start -->
                        <div class="swiper-slide">
                            <div class="client-logo">
                                <img src="{{ asset('images/client2.png') }}" alt="">
                            </div>
                        </div>
                        <!-- Client Logo end -->

                        <!-- Client Logo start -->
                        <div class="swiper-slide">
                            <div class="client-logo">
                                <img src="{{ asset('images/client3.png') }}" alt="">
                            </div>
                        </div>
                        <!-- Client Logo end -->

                        <!-- Client Logo start -->
                        <div class="swiper-slide">
                            <div class="client-logo">
                                <img src="{{ asset('images/client4.png') }}" alt="">
                            </div>
                        </div>
                        <!-- Client Logo end -->

                        <!-- Client Logo start -->
                        <div class="swiper-slide">
                            <div class="client-logo">
                                <img src="{{ asset('images/client5.png') }}" alt="">
                            </div>
                        </div>
                        <!-- Client Logo end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Clients Section ends -->

<!-- Contact us & Footer section starts -->
<section class="contactus" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="section-title wow fadeInUp">
                    <p>Contact Us</p>
                    <h2>Keep in touch</h2>
                </div>

                <!-- Contact Form start -->
                <div class="contact-form">
                    <form id="contactForm" action="#" method="post" data-toggle="validator">
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-6">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name" required="">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Your Email Address" required="">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-12 col-sm-12">
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" required="">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-12 col-sm-12">
                                <textarea rows="8" name="message" id="message" class="form-control" placeholder="How can i help you?" required=""></textarea>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <button type="submit" class="btn-contact" title="Submit Your Message!">Submit</button>
                                <div id="msgSubmit" class="h3 text-left hidden"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Contact Form end -->
            </div>

            <div class="col-md-4">
                <div class="footer-info">
                    <img src="{{ asset('images/logo.png') }}" alt=""> 

                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>

                    <div class="contactinfo-single">
                        <i class="fa fa-phone"></i>
                        <h3>Phone Number</h3>
                        <p>+9 022 345 67891</p>
                    </div>

                    <div class="contactinfo-single">
                        <i class="fa fa-envelope "></i>
                        <h3>Email Support</h3>
                        <p>info@domain.com</p>
                    </div>

                    <div class="contactinfo-single">
                        <i class="fa fa-map-marker"></i>
                        <h3>Location</h3>
                        <p>Abu Dhabi, UAE</p>
                    </div>

                    <div class="footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact us & Footer section ends -->
@endsection