<?php

/**
 * The template for displaying the home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 *  Template Name: Contact Us
 * @package jitutheme
 */

get_header();

?>

<!-- Start Page Title Area -->
<div class="page-title-area" style="background-color: #EFFFFD;>
			<div class=" container">
    <div class="page-title-content">
        <h2>Contact Us</h2>

        <ul>
            <li>
                <a href="<?php echo site_url(); ?>">
                    Home
                </a>
            </li>

            <li class="active">Contact Us</li>
        </ul>
    </div>
</div>
<div class="page-title-shape">
    <!-- <img src="assets/images/page-title-shape.png" alt="Image"> -->
</div>
</div>
<!-- End Page Title Area -->

<!-- Start Contact Area -->
<section class="main-contact-area pt-100 pb-100">
    <div class="container">
        <form id="contactForm">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Send a message</h3>

                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Full Name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Company Name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Email">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Your message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn">
                                <span>Submit</span>
                            </button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-lg-4">
                    <div class="single-contact-bg">
                        <div class="single-contact-info">
                            <h3>Get in touch</h3>

                            <ul class="address">
                                <li>
                                    <span>Phone</span>
                                    <a href="tel:+1-(517)-942-3495">+1 (517) 942-3495</a>
                                </li>
                                <li>
                                    <span>Email</span>
                                    <a href="mailto:hello@inata.com">hello@inata.com</a>
                                </li>
                                <li class="location">
                                    <span>Address</span>
                                    2988 West Virginia Avenue Mineville, NY 12857
                                </li>
                            </ul>
                        </div>

                        <div class="single-contact-info follow-us">
                            <h3>Follow us</h3>

                            <ul class="social-link">
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="ri-instagram-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="ri-linkedin-box-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com/" target="_blank">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            </div>
        </form>
    </div>
</section>
<!-- End Contact Area -->

<?php

get_footer();
?>