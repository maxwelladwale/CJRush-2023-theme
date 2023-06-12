<?php

/**
 * The template for displaying the About Us
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 *  Template Name: Products and Services
 * @package jitutheme
 */

get_header();

?>


    <!-- Start Page Title Area -->
    <div class="page-title-area" style="background-color: #EFFFFD;">
			<div class="container">
    <div class="page-title-content">
        <h2>Products & Services</h2>

        <ul>
            <li>
                <a href="<?php echo site_url(); ?>">
                    Home
                </a>
            </li>

            <li class="active">Products & Services</li>
        </ul>
    </div>
    </div>
    <div class="page-title-shape">
        <!-- <img src="assets/images/page-title-shape.png" alt="Image"> -->
    </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Products and services Area -->
    <section class="about-area pb-100 pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="d-flex flex-column align-items-center">
                        <h3 class="pb-5">Revolving Doors</h3>                
                        <img src="<?php echo __(get_template_directory_uri()); ?>/assets/images/masr-min.webp" alt="Image">
                    </div>
                    <div class="advanced-analytics-content plc-40" style="font-size:18px;">
                        <ul class="products-service-ul">
                            <li>
                                <i class="ri-check-line rev-check"></i>
                                Superior Air Filtration Technology
                            </li>
                            <li>
                                <i class="ri-check-line rev-check"></i>
                                Maintains HVAC Integrity
                            </li>
                            <li>
                                <i class="ri-check-line rev-check"></i>
                                Maximizes Traffic Flow
                            </li>
                        </ul>
                    </div>
                    <div class="download-btn d-flex justify-content-center pb-5 lbtn">
                        <a href="<?php echo site_url('revolving-doors');?>" class="default-btn">
                            LEARN MORE
                        </a>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="d-flex flex-column align-items-center">
                        <h3 class="pb-5">Balanced & Swing Doors</h3>
                        <img src="<?php echo __(get_template_directory_uri()); ?>/assets/images/bphd-min.webp" alt="Image">
                    </div>
                    <div class="advanced-analytics-content plc-40" style="font-size:18px;">
                        <ul class="products-service-ul">
                            <li>
                                <i class="ri-check-line rev-check"></i>
                                Maintains Stack Pressure
                            </li>
                            <li>
                                <i class="ri-check-line rev-check"></i>
                                Secure Without Being Heavy
                            </li>
                            <li>
                                <i class="ri-check-line rev-check"></i>
                                Controlled Movement
                            </li>
                        </ul>
                    </div>
                    <div class="download-btn d-flex justify-content-center pb-5 lbtn">
                        <a href="<?php echo site_url('balanced-swing');?>" class="default-btn">
                            LEARN MORE
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Products and Services Area -->



    <!-- Start Products and services Area -->
    <section class="about-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sticking">
                        <div class="section-title white-title">
                            <h2 class="text-black text-start">Exceptional Customer Service from Start to Finish</h2>
                        </div>

                        <p>
                            Delivering impeccable results that exceed your expectations is our top priority. The renowned white-glove service we provide on every job is not merely a promise but an unwavering commitment that permeates every aspect of our work.
                        </p>
                        <div class="download-btn pb-5 pt-5">
                            <a href="#quote" class="default-btn">
                                REQUEST QUOTE
                            </a>
                        </div>
                    </div>

                </div>


                <div class="col-lg-6">

                    <div class="advanced-analytics-content" style="font-size:18px;">
                        <ul class="products-service-ul mt-0 services-listed">
                            <li class="about-img mb-0 timelinetext">
                                <h5>Consultation</h5>
                                <p>
                                    We begin by actively listening to your needs and requirements, ensuring a comprehensive understanding of your vision.
                                </p>
                            </li>
                            <li class="about-img mb-0 timelinetext">
                                <h5>Design</h5>
                                <p>
                                    Our team of expert artisans collaborate close with you and offer personalized guidance during the design phase.
                                </p>
                                <img src="https://www.cjrush.jitudevops.com/wp-content/uploads/2023/05/design-1.png" style="height: 100%;">
                            </li>
                            <li class="about-img mb-0 timelinetext">
                                <h5>Manufacturing</h5>
                                <p>
                                    We guarantee quality at every stage of the manufacturing process, utilizing cutting-edge technology and maintaining rigorous quality control measures.
                                </p>
                            </li>
                            <li class="about-img mb-0 timelinetext">
                                <h5>Project Management</h5>
                                <p>
                                    We maintain transparent and proactive communication, keeping you informed of project progress and promptly addressing any concerns.
                                </p>
                            </li>
                            <li class="about-img mb-0 timelinetext">
                                <h5>Installation Support</h5>
                                <p>
                                    We provide technical assistance for installation and supply our customers with a list of Certified Installers from our Distribution Network.
                                </p>
                            </li>
                            <li class="about-img-rounder mb-0 timelinetext">
                                <h5>Maintenance Support</h5>
                                <p>
                                    We provide technical assistance on maintenance and repairs and supply our customers with a list of Certified Repair Technicians from our Network.
                                </p>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Products and Services Area -->

    <!-- Start Benefit our Software Area -->
    <section class="benefit-our-software-area bg-color pt-100 pb-70" style="background-color: #EFFFFD;">
        <div class="container">
            <div class="section-title white-title" style="max-width: 100%;">
                <h2 class="text-black">Bring your unique entryway vision to life</h2>
            </div>

            <div class="row single-benefit-cards">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-benefit-our-software bg-dark pe-0 ps-0">
                        <h4 class="">Every element is <br>custom designed</h4>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-benefit-our-software bg-dark pe-0 ps-0">
                        <h4 class="">Mechanical elements are kept hidden</h4>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-benefit-our-software bg-dark pe-0 ps-0">
                        <h4 class="">Any aesthetic criteria can be met</h4>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-benefit-our-software bg-dark pe-0 ps-0">
                        <h4 class="">Extensive variety of finishes available</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Benefit our Software Area -->

    <!-- Start signature area -->
    <section class="benefit-our-software-area pt-100 pb-35">
        <div class="container">
            <div class="white-title pb-100">
                <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/signature.png" class="text-black"></img>

                <h2 class="text-end solutiontxt">CJ RUSH Solutions</h2>
            </div>

            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="">
                        <p>
                            CJ Rush has the capabilities to offer a wide variety of services to our customers, going beyond the ability to manufacture exceptional products.
                        </p>
                        <p>
                            See below for a selection of services. We can partner together and identify creative solutions for any and all of your requests, no matter how niche!                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Signature Area -->

    <!-- Start signature area -->
    <section class="benefit-our-software-area pb-70">
        <div class="container">
            <div class="advanced-analytics-content" style="font-size:18px;">
                <ul class="products-service-ul">
                    <li>
                        <i class="ri-check-line rev-check"></i>
                        Replacement or restoration of period doors, preserving the original façade
                    </li>
                    <li>
                        <i class="ri-check-line rev-check"></i>
                        Restoration or replacement of vestibules, sidelights, and transoms
                    </li>
                    <li>
                        <i class="ri-check-line rev-check"></i>
                        Cladding for all types of doors, columns, vestibules, sidelights, and transoms
                    </li>

                    <li>
                        <i class="ri-check-line rev-check"></i>
                        Refurbishment of most makes of revolving doors to accommodate CJ Rush’s standard door wings, collapsing mechanism, and hardware
                    </li>

                    <li>
                        <i class="ri-check-line rev-check"></i>
                        Manufacturing of speciality handrails and spindles made of glass, stainless steel or aluminum
                    </li>

                    <li>
                        <i class="ri-check-line rev-check"></i>
                        Manufacturing of bollards, stanchions, and access control terminals
                    </li>

                    <li>
                        <i class="ri-check-line rev-check"></i>
                        Manufacturing of column covers, spandrels, balustrades, stairways, and railings to complete your prestige entranceway
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Signature Area -->

<style>
    @media only screen and (min-width: 768px) and (max-width: 991px){
        .about-img-rounder {
        margin: auto;
        margin-left: 26px;
        }
    }
    .timelinetext{
        text-align:start;
    }
    .sticking {
  position: sticky;
  top: 116px;
  left: 0;
}
.lbtn{
    padding-top:50px;
}

    .single-benefit-our-software>h4
    {
        color:white;
    }
    .single-benefit-our-software>h4:hover
    {
        color: var(--main-color);
    }
    .serv-lst{
        padding-bottom: 15px;
    }
    .serv-lst::marker{
        color:#31D372;
    }
    .serv-lst:hover{
        color: #31D372;
    }
    .pb-35{
        padding-bottom: 35px;
    }

    .plc-40{
        padding-left:40px;
    }
    .solutiontxt{
        font-size: 80px;
    }

    @media only screen and (max-width: 767px)
    {
    .solutiontxt{
        font-size: 39px;
    }

    .plc-40{
        padding-left:0px;
    }
    .about-img{
        border-left:none;
        text-align:start;
    }
    .about-img-rounder{
        text-align:start;
        margin-left:0px;
    }
    .about-img-rounder::before{
        display: none;
    }
    .timelinetext{
        padding-left:0px !important;
        text-align:start;
    }
    }

    @media only screen and (min-width: 768px) and (max-width: 991px){
    .plc-40{
            padding-left:70px;
        }
        .lbtn{
            padding-top:0px;
        }
    }

</style>
<?php

get_footer();

