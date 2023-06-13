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
								<p>CJ Rush manufactures tailor-made doors that have graced the world's most iconic buildings, including the Rockefeller Center, Harvard Medical School, and the Capital One Arena.</p>
	
								<!-- <form class="get-started-free-form">
									<input type="email" class="form-control" name="email" placeholder="Enter your email address">
									<button class="submit-button default-btn" type="submit">
										REQUEST A QUOTE
									</button>
								</form> -->
								<?php  echo do_shortcode('[wpforms id="2357"]'); ?>
								
								<!-- <div class="home_bannerbtn">
									<a href="about-us.html" class="default-btn">
										REQUEST A QUOTE
									</a>
									<a href="about-us.html" class="default-btn">
										VIEW PRODUCTS
									</a>
								</div> -->
							</div>
	
							<div class="banner-img">
								<img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/banner/banner-img/myb1.png" alt="Image">
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- <div class="shape shape-1">
				<img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/banner/banner-shape/shape-1.png" alt="Image">
			</div>	
			<div class="shape shape-2">
				<img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/banner/banner-shape/shape-2.png" alt="Image">
			</div>	
			<div class="shape shape-3">
				<img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/banner/banner-shape/shape-3.png" alt="Image">
			</div>	
			<div class="shape shape-4">
				<img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/banner/banner-shape/shape-4.png" alt="Image">
			</div>	
			<div class="shape shape-5">
				<img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/banner/banner-shape/shape-5.png" alt="Image">
			</div>	 -->
		</section>
		<!-- End Banner Area -->

			<!-- Start Partner Area -->
			<!-- <div class="pt-70">
			<div class="container">
				<div class="partner-bg ptb-100">
					<h3>Trusted by teams at over 1000+ high growth companies</h3>

					<div class="partner-slider owl-carousel owl-theme">
						<div class="single-partner-style-two">
							<img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/partner/partner-1.png" alt="Image">
						</div>
	
						<div class="single-partner-style-two">
							<img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/partner/partner-2.png" alt="Image">
						</div>
	
						<div class="single-partner-style-two">
							<img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/partner/partner-3.png" alt="Image">
						</div>
	
						<div class="single-partner-style-two">
							<img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/partner/partner-4.png" alt="Image">
						</div>
	
						<div class="single-partner-style-two">
							<img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/partner/partner-5.png" alt="Image">
						</div>
					</div>

					<div class="shape shape-1">
						<img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/partner/shape-1.png" alt="Image">
					</div>

					<div class="shape shape-2">
						<img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/partner/shape-2.png" alt="Image">
					</div>
				</div>
			</div>
		</div> -->
		<!-- End Partner Area -->

		<!-- Start Advanced Analytics Area -->
		<section class="advanced-analytics-area">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="advanced-analytics-img">
							<h1>Why <br>CJ Rush?</h1>
							<img class="whyimg" src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/why1.jpg" alt="Image">
						</div>
					</div>

					<div class="col-lg-6">
						<div class="advanced-analytics-content whycjlist">
							<!-- <span>Why CJ RUSH</span> -->
							<!-- <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
							<p>Donec rutrum congue leo eget malesuada. Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta.</p>   -->
							
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
									Faster Installation Than Industry Standard
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End Advanced Analytics Area -->

		<!-- Start Counter Area -->
		<section class="counter-area ptb-70">
			<div class="container">
				<h2 style="text-align: center;margin-bottom: 40px;">Open the door to a world of possibilities</h2>
				<div class="counter-bg ptb-100">
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
									<h4>Custom Entry <br>Systems Built</h4>
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
									<h4>Years of Avg. <br>Product Lifetime</h4>
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
					<h2>Hear from our happy customers</h2>
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

						<p>“Over the past 20 years we have had the pleasure of working with CJ Rush on numerous projects. The team has the depth of knowledge and experience to manage a project from pre-construction planning through to Owner occupancy. We specify CJ Rush products exclusively and will continue to do so for the next 20 years.”</p>

						<div class="reviews-avatar">
							<!-- <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/reviews/reviews-1.jpg" alt="Image"> -->
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

						<p>“CJ Rush is the Premiere Entrance Systems provider for customers who want their commercial buildings to stand out. Their commitment to quality and manufacturing distinctive product is unparalleled. I am thrilled that STANLEY Access Technologies is serving our commercial building clients alongside with CJ Rush to create an optimal customer experience.”</p>

						<div class="reviews-avatar">
							<!-- <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/reviews/reviews-2.jpg" alt="Image"> -->
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

						<p>“We have been purchasing CJ Rush doors for over 20 years. The quality is #1 due to their attention to detail and ability to custom order special designs. Their stainless-steel cladding is second-to-none and their patented RushClad design provides for long lasting performance.”</p>

						<div class="reviews-avatar">
							<!-- <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/reviews/reviews-3.jpg" alt="Image"> -->
							<h3>Parrish Phillips, General Manager</h3>
							<span>Complete Entry Systems and Services, Inc (CESS)</span>
						</div>
					</div>
					
				</div>
			</div>
		</section>
		<!-- End Customer Reviews Area -->

		<!-- Start green-pledge-area Area -->
		<section class="green-pledge-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-3 col-lg-3 green_pledge_img d-flex flex-column justify-content-center align-items-center">
						<img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/cjpledge.png" alt="Image">
					</div>
					<div class="col-sm-12 col-md-9 col-lg-9 row green_pledge_text">
						<div class="col-xs-12 col-md-12 col-lg-8 d-flex flex-column justify-content-center">
							<h2 class="cgreen-h2">CJ RUSH GREEN PLEDGE</h2>
							<p class="cgreen-p">Lowering your energy bill and saving our planet</p>
						</div>
						<div class="col-xs-12 col-md-12 col-lg-4 d-flex flex-column align-items-center justify-content-center">
							<a href="<?php echo site_url('/contact-us');?>" class="default-btn green_btn">
								LEARN MORE
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End green-pledge-area Area -->

		<!-- Start Contact Area -->
		<!-- <section class="main-contact-area pt-100 pb-100">
			<div class="container">
				<form id="contactForm">
					<div class="row">
						<div class="col-lg-8">
							<h3>Send a message</h3>
							
							<div class="row">
								<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your name">
										<div class="help-block with-errors"></div>
									</div>
								</div>
		
								<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your email">
										<div class="help-block with-errors"></div>
									</div>
								</div>
		
								<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your phone">
										<div class="help-block with-errors"></div>
									</div>
								</div>
		
								<div class="col-lg-6 col-sm-6">
									<div class="form-group">
										<input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Subject">
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
									<div class="form-group checkboxs">
										<input type="checkbox" id="chb2">
										<p>
											Accept <a href="terms-of-service.html">Terms of service</a> And <a href="privacy-policy.html">Privacy policy.</a>
										</p>
									</div>
								</div>
		
								<div class="col-lg-12 col-md-12">
									<button type="submit" class="default-btn">
										<span>Send Message</span>
									</button>
									<div id="msgSubmit" class="h3 text-center hidden"></div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="single-contact-bg">
								<div class="single-contact-info">
									<h3>Get in touch</h3>
		
									<ul class="address">
										<li>
											<span>Phone</span>
											<a href="tel:+1-(517)-942-3495">905 944 8005</a>
										</li>
										<li>
											<span>Email</span>
											<a href="mailto:hello@inata.com">RUSHSALES@CJRUSH.COM</a>
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
						</div>
					</div>
				</form>
			</div>
		</section> -->
		<!-- End Contact Area -->

<?php
get_footer();