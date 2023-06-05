<!-- Start Footer Area -->
<footer class="footer-area pt-100 pb-70 bg-dark">
    <div class="container">
        <div class="row">
            <!-- <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <h3>Newsletters</h3>
                    <p>Don’t miss our future updates! Get Subscribed now!</p>

                    <form class="newsletter-form" data-toggle="validator">
                        <input type="email" class="form-control" placeholder="Your email address" name="EMAIL" required autocomplete="off">

                        <button class="default-btn" type="submit">
                            Subscribe now
                        </button>

                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div> -->

            <div class="col-lg-4 col-md-6">
                <div class="single-footer-widget">
                    <h3 class="text-white">Contact Information</h3>

                    <ul class="address text-white">
                        <li class="location">
                            <span class="text-white">Address</span>
                            65 riviera Drive, Markham, Ontario L3R 5J6
                        </li>
                        <li>
                            <span class="text-white">Email</span>
                            <a href="mailto:rushsales@cjrush.com " class="text-white">rushsales@cjrush.com </a>
                        </li>
                        <li>
                            <span class="text-white">Phone</span>
                            <a href="tel:905-944-8005" class="text-white">905-944-8005</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-footer-widget">
                    <h3 class="text-white">Company</h3>

                    <ul class="import-link text-white">
                        <li>
                            <a href="<?php echo site_url('/products-services');?>">Products & Services</a> 
                        </li>
                        <li>
                            <a href="<?php echo site_url('/gallery');?>" class="text-white">Gallery</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('/downloads');?>" class="text-white">Downloads</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('/about-us');?>" class="text-white">About Us</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('/contact-us');?>" class="text-white">Contact Us</a>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" id="quote">
                <div class="single-footer-widget download">
                    <h3>Talk to us!</h3>
                    <!-- <p>Don’t miss our future updates! Get Subscribed now!</p> -->

                    <form class="newsletter-form" data-toggle="validator" novalidate="true">
                        <input type="email" class="form-control" placeholder="Your email address" name="EMAIL" required="" autocomplete="off">

                        <button class="default-btn disabled" type="submit" style="pointer-events: all; cursor: pointer;">
                            REQUEST A QUOTE
                        </button>

                        <div id="validator-newsletter" class="form-result"></div>
                    </form>	
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Area -->

<!-- Start Copy Right Area -->
<div class="copy-right-area bg-dark">
    <div class="container">
        <p class="text-white">
            Copyright © 2023 CJRush.

        </p>
    </div>
</div>
<!-- End Copy Right Area -->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class="ri-arrow-up-s-fill"></i>
    <i class="ri-arrow-up-s-fill"></i>
</div>
<!-- End Go Top Area -->

<?php wp_footer(); ?>

</body>
</html>