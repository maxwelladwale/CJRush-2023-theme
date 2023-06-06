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
        <h2>About Us</h2>

        <ul>
            <li>
                <a href="<?php echo site_url(); ?>">
                    Home
                </a>
            </li>

            <li class="active">About Us</li>
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

            <div class="download-btn">
                <a href="<?php echo site_url('contact-us');?>" class="default-btn">
                    WORK WITH US
                </a>
                <a href="<?php echo site_url('products-services');?>" class="default-btn google">
                    VIEW PRODUCTS
                </a>
            </div>

        </div>
    </section>
    <!-- End About Area -->

    <style>
        .year-desc{
            display:flex;
            flex-direction:row;
        }
        .download-btn a {
            margin-right:40px;
        }
        @media only screen and (max-width: 600px) {
            .desc-2021 {
                margin-top: var(--bs-gutter-y);
            }

            .about-img{
                border-left: none;
                padding-top:10px;
            }
            .year-desc {
                justify-content:center;
                padding-top: 10px;
            }
            .download-btn{
            flex-direction: column;
            justify-content: center;
            align-items: stretch;
            }
            .download-btn a {
                margin-bottom: 20px;
                margin-right: 0px;
            }

        }


    </style>
<?php

get_footer();
