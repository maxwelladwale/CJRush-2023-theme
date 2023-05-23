<?php

/**
 * The template for displaying the home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 *  Template Name: home
 * @package jitutheme
 */

get_header();

?>
    <!-- Start Banner Area -->
    <section class="banner-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="rs-bg">
                        <div class="banner-content">
                            <h1>Premier Entrance Systems For Instant Curb Appeal</h1>
                            <p>CJ Rush manufactures, installs, and services tailor-made, architectural doors that grace the world’s most iconic buildings.</p>

                            <form class="get-started-free-form">
                                <input type="email" class="form-control" name="email" placeholder="Enter your email address">
                                <button class="submit-button default-btn" type="submit">
                                    Get started free
                                </button>
                            </form>

                            <div class="home_bannerbtn">
                                <a href="about-us.html" class="default-btn">
                                    REQUEST A QUOTE
                                </a>
                                <a href="about-us.html" class="default-btn">
                                    VIEW PRODUCTS
                                </a>
                            </div>
                        </div>

                        <div class="banner-img">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/banner/banner-img/banner-main-img.png" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="shape shape-1">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/banner/banner-shape/shape-1.png" alt="Image">
        </div>
        <div class="shape shape-2">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/banner/banner-shape/shape-2.png" alt="Image">
        </div>
        <div class="shape shape-3">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/banner/banner-shape/shape-3.png" alt="Image">
        </div>
        <div class="shape shape-4">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/banner/banner-shape/shape-4.png" alt="Image">
        </div>
        <div class="shape shape-5">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/banner/banner-shape/shape-5.png" alt="Image">
        </div>	 -->
    </section>
    <!-- End Banner Area -->

    <!-- Start Partner Area -->
    <div class="partner-area pb-100">
        <div class="container">
            <div class="partner-bg ptb-100">
                <h3>Trusted by teams at over 1000+ high growth companies</h3>

                <div class="partner-slider owl-carousel owl-theme">
                    <div class="single-partner-style-two">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/partner/partner-1.png" alt="Image">
                    </div>

                    <div class="single-partner-style-two">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/partner/partner-2.png" alt="Image">
                    </div>

                    <div class="single-partner-style-two">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/partner/partner-3.png" alt="Image">
                    </div>

                    <div class="single-partner-style-two">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/partner/partner-4.png" alt="Image">
                    </div>

                    <div class="single-partner-style-two">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/partner/partner-5.png" alt="Image">
                    </div>
                </div>

                <div class="shape shape-1">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/partner/shape-1.png" alt="Image">
                </div>

                <div class="shape shape-2">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/partner/shape-2.png" alt="Image">
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Area -->

    <!-- Start Advanced Analytics Area -->
    <section class="advanced-analytics-area pt-70 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="advanced-analytics-content">
                        <span>Why CJ RUSH</span>
                        <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                        <p>Donec rutrum congue leo eget malesuada. Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta.</p>

                        <ul>
                            <li>
                                <i class="ri-check-line"></i>
                                Expert Craftsmanship
                            </li>
                            <li>
                                <i class="ri-check-line"></i>
                                Reliable, Durable & Secure
                            </li>
                            <li>
                                <i class="ri-check-line"></i>
                                Energy Efficient Green Doors
                            </li>
                            <li>
                                <i class="ri-check-line"></i>
                                Optimal Designs for Traffic Flow
                            </li>
                            <li>
                                <i class="ri-check-line"></i>
                                Faster Installation Than Market
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="advanced-analytics-img">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/advanced-analytics-img.png" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Advanced Analytics Area -->

    <!-- Start Counter Area -->
    <section class="counter-area pt-70">
        <div class="container">
            <h2 style="text-align: center;margin-bottom: 40px;">Open the door to a world of possibilities</h2>
            <div class="counter-bg counter-bg-2 pt-100 pb-70">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-counter">
                            <div class="count-title">
                                <h2>
                                    <span class="odometer" data-count="58">00</span>
                                    <span class="target"></span>
                                </h2>
                                <h4>Years of Service</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-counter">
                            <div class="count-title">
                                <h2>
                                    <span class="odometer" data-count="10">00</span>
                                    <span class="target">K</span>
                                </h2>
                                <h4>Clients Served</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-counter">
                            <div class="count-title">
                                <h2>
                                    <span class="odometer" data-count="14">00</span>
                                    <span class="target">K</span>
                                </h2>
                                <h4>Custom Entry Systems Built</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-counter">
                            <div class="count-title">
                                <h2>
                                    <span class="odometer" data-count="25">32</span>
                                    <span class="target"></span>
                                </h2>
                                <h4>Years of Avg. Product Lifetime</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counter Area -->

    <!-- Start Customer Reviews Area -->
    <section class="customer-reviews-area pt-100 pb-100">
        <div class="container">
            <div class="section-title">
                <span>Customer reviews</span>
                <h2>Customer reviews are a form of customer feedback</h2>
            </div>

            <div class="customer-reviews-slider-two owl-carousel owl-theme">
                <div class="single-customer-reviews single-customer-reviews-style-two">
                    <!-- <ul>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                    </ul> -->

                    <p>“ Over the past 20 years we have had the pleasure of working with CJ Rush on numerous projects. The team has the depth of knowledge and experience to manage a project from pre-construction planning thru to Owner occupancy. We specify CJ Rush products exclusively and will continue to do so for the next 20 years.”</p>

                    <div class="reviews-avatar">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/reviews/reviews-1.jpg" alt="Image">
                        <h3>Barry Barcus</h3>
                        <span>Barry R. Barcus Architect, Inc.</span>
                    </div>
                </div>

                <div class="single-customer-reviews single-customer-reviews-style-two">
                    <!-- <ul>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                    </ul> -->

                    <p>“ CJ Rush is the Premiere Entrance Systems provider for customers who want their commercial buildings to stand out. Their commitment to quality and manufacturing distinctive product is unparalleled. I am thrilled that STANLEY Access Technologies is serving our commercial building clients alongside with CJ Rush to create an optimal customer experience. ”</p>

                    <div class="reviews-avatar">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/reviews/reviews-2.jpg" alt="Image">
                        <h3>Arthur A. Baker III, Vice President Sales & Business Development</h3>
                        <span>STANLEY Access Technologies</span>
                    </div>
                </div>

                <div class="single-customer-reviews single-customer-reviews-style-two">
                    <!-- <ul>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                    </ul> -->

                    <p>“ We have been purchasing CJ Rush doors for over 20 years. The quality is #1 due to their attention to detail and ability to custom order special designs. Their stainless-steel cladding is second-to-none and their patented RushClad design provides for long lasting performance.”</p>

                    <div class="reviews-avatar">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/reviews/reviews-3.jpg" alt="Image">
                        <h3>Parrish Phillips, General Manager</h3>
                        <span>Complete Entry Systems and Services, Inc (CESS)</span>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Customer Reviews Area -->






<?php
get_footer();