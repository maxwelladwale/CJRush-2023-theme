<?php

/**
 * The template for displaying the About Us
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 *  Template Name: About us
 * @package jitutheme
 */

get_header();

?>


<!-- Start Page Title Area -->
<div class="page-title-area" style="background-color: #EFFFFD;>
			<div class=" container">
    <div class="page-title-content">
        <h2>About us</h2>

        <ul>
            <li>
                <a href="<?php echo site_url(); ?>">
                    Home
                </a>
            </li>

            <li class="active">About us</li>
        </ul>
    </div>
</div>
<div class="page-title-shape">
    <!-- <img src="assets/images/page-title-shape.png" alt="Image"> -->
</div>
</div>
<!-- End Page Title Area -->

<!-- Start Partner Area -->
<div class="partner-area partner-area-style-three pb-100">
    <div class="container">

    </div>
</div>
<!-- End Partner Area -->

<!-- Start About Area -->
<section class="about-area pb-100">
    <div class="container">
        <?php get_template_part('./template-parts/timeline'); ?>
    </div>
</section>
<!-- End About Area -->


<?php

get_footer();
