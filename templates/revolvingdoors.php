<?php

/**
 * The template for displaying the Revolving Doors
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 *  Template Name: Revolving Doors
 * @package jitutheme
 */

get_header();

?>

    <style>
        .no-border-row{
            border-bottom: white 2px solid;
        }
    </style>
    <!-- Start Page Title Area -->
    <div class="page-title-area" style="background-color: #EFFFFD;">
			<div class=" container">
    <div class="page-title-content">
        <h2>Revolving Doors</h2>

        <ul>
            <li>
                <a href="<?php echo site_url(); ?>">
                    Home
                </a>
            </li>

            <li class="active">Revolving Doors</li>
        </ul>
    </div>
    </div>
    <div class="page-title-shape">
        <!-- <img src="assets/images/page-title-shape.png" alt="Image"> -->
    </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start of Revolving Doors Table -->
    <section class="about-area pb-100">
        <div class="container table-responsive cont">

            <table class="table doors-det">
                <thead class="no-border-row">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">
                        <img class="revolving-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/classic-revolving-doors-scaled.jpg" alt="Image">
                    </th>
                    <th scope="col">
                        <img class="revolving-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/Contempary-revolving-doors.jpg" alt="Image">
                    </th>
                    <th scope="col">
                        <img class="revolving-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/Security-Revolving-Doors.jpg" alt="Image">
                    </th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <th scope="row"></th>
                    <th>
                        <h4>Classic <br/> Doors</h4>
                    </th>
                    <th>
                        <h4>Contemporary <br/> Doors</h4>
                    </th>
                    <th>
                        <h4>Security <br/> Doors</h4>
                    </th>
                </tr>
                <tr>
                    <th scope="row"><p><b>Description</b></p></th>
                    <td>
                        <p>Foundational revolving door with classic framing and customization options</p>
                    </td>
                    <td>
                        <p>Classic style or modern, sleek, "all glass" look, with all the bells and whistles</p>
                    </td>
                    <td>
                        <p>Classic style door with access control and optional security enhancements</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><p><b>Control System</b></p></th>
                    <td>
                        <p>Manual</p>
                    </td>
                    <td>
                        <p>Manual or Automatic</p>
                    </td>
                    <td>
                        <p>Automatic</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><p><b>Suitable Sites</b></p></th>
                    <td>
                        <ul class="text-start">
                            <li>Commercial offices</li>
                            <li>Restaurants</li>
                            <li>Medical centers</li>
                            <li>Retail shops</li>
                            <li>Grocery stores</li>
                            <li>Fitness studios</li>
                        </ul>
                    </td>
                    <td>
                        <ul class="text-start">
                            <li>Banks</li>
                            <li>Convention Centers</li>
                            <li>Hotels</li>
                            <li>Corporate HQ</li>
                            <li>Airports</li>
                            <li>Casinos</li>
                        </ul>
                    </td>
                    <td>
                        <ul class="text-start">
                            <li>Government buildings</li>
                            <li>Insurance buildings</li>
                            <li>Large financial institutions</li>
                            <li>Research labs</li>
                            <li>Data centers</li>
                        </ul>
                    </td>
                </tr>
                <tr class="no-border-row">
                    <th scope="row"></th>
                    <td>
                        <a href="#classic-doors">
                            <button class="submit-button default-btn mt-3" type="submit">
                                LEARN MORE
                            </button>
                        </a>
                    </td>
                    <td>
                        <a href="#contemporary_doors">
                            <button class="submit-button default-btn mt-3" type="submit">
                                LEARN MORE
                            </button>
                        </a>
                    </td>
                    <td>
                        <a href="#security_doors">
                            <button class="submit-button default-btn mt-3" type="submit">
                                LEARN MORE
                            </button>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
    <!-- End of Revolving Doors Table -->

    <!-- Start of Features -->
    <section class="about-area pb-100">
        <div class="page-title-area" style="background-color: #EFFFFD;">
                <div class=" container">
            <div class="page-title-content">
                <section class="about-area pb-100">
                    <div class="container">
                        <div class="row align-items-center">
                            <h5 class="features-h5">Unrivaled enhancements & customization surpassing all other providers</h5>
                            <div class="col-lg-6">
                                <?php
                                echo do_shortcode('[custom_accordion title="Power Assist" image="https://www.cjrush.jitudevops.com/wp-content/uploads/2023/05/Power-assist.png" class="accordion-group"] Provides an added boost to door rotation, enhancing accessibility for individuals with disabilities or the elderly. [/custom_accordion]');
                                echo do_shortcode('[custom_accordion title="Speed Control" image="https://www.cjrush.jitudevops.com/wp-content/uploads/2023/05/Speed.png" class="accordion-group"] Ensures safe operation and velocity, allowing multiple pedestrians to use the door simultaneously. [/custom_accordion]');
                                echo do_shortcode('[custom_accordion title="Automatic Locking" image="https://www.cjrush.jitudevops.com/wp-content/uploads/2023/05/Automatic-locking.png" class="accordion-group"] Pauses door operation at designated times of the day and allows for immediate lockdown during emergencies. [/custom_accordion]');
                                echo do_shortcode('[custom_accordion title="Glass Ceiling" image="https://www.cjrush.jitudevops.com/wp-content/uploads/2023/05/Glass-ceiling.png" class="accordion-group"] Allows an abundance of natural light to shine down on the revolving door, creating a bright and airy entrance. [/custom_accordion]');
                                echo do_shortcode('[custom_accordion title="Canopy Lighting" image="https://www.cjrush.jitudevops.com/wp-content/uploads/2023/05/Lighting.png" class="accordion-group"] Illuminates the interior of the door with LED lights, enhancing visibility in low-light conditions. [/custom_accordion]');
                                ?>
                            </div>
                            
                            <div class="col-lg-6">
                                <?php
                                echo do_shortcode('[custom_accordion title="Cladding" image="https://www.cjrush.jitudevops.com/wp-content/uploads/2023/05/Cladding.png" class="accordion-group"] Covers door surfaces, offering a sophisticated appearance with materials like stainless steel (satin/mirror) or muntz. [/custom_accordion]');
                                echo do_shortcode('[custom_accordion title="Finishes" image="https://www.cjrush.jitudevops.com/wp-content/uploads/2023/05/Finishes.png" class="accordion-group"] Large variety of anodized and paint finishes available for a polished look. [/custom_accordion]');
                                echo do_shortcode('[custom_accordion title="Floor Grills" image="https://www.cjrush.jitudevops.com/wp-content/uploads/2023/05/Floor-Grilling.png" class="accordion-group"] Facilitates efficient drainage of water, ice and snow through the floor of the revolving door to prevent slips and falls. [/custom_accordion]');
                                echo do_shortcode('[custom_accordion title="Sweeps" image="https://www.cjrush.jitudevops.com/wp-content/uploads/2023/05/Sweeping.png" class="accordion-group"] Ensures cleanliness and temperature control by covering gaps and preventing air from escaping. [/custom_accordion]');
                                echo do_shortcode('[custom_accordion title="Insulation" image="https://www.cjrush.jitudevops.com/wp-content/uploads/2023/05/Insulation.png" class="accordion-group"] Provides added warmth, protection and comfort against inclement weather, while remaining energy efficient. [/custom_accordion]');
                                ?>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <span id="classic-doors"></span>
    </section>
    <!-- End of Features -->

    <!-- Start of Classic Revolving Doors Section -->
    <section class="rev-doors classic-door pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center">
                    <img class="classic-revolving-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/Revolving-door-banner2.jpg" alt="Image">
                </div>

                <div class="col-lg-6">
                    <div class="about-content revolving-div ml-15 d-flex flex-column align-items-start">
                        <div class="section-title">
                            <span>Classic revolving doors</span>
                            <h2>Affordable & Versatile</h2>
                        </div>
                        <p>Innovative, low maintenance, and environmentally friendly manual revolving doors designed for many commercial applications, offering enhanced energy efficiency, comfort, and long-lasting durability.</p>
                        <div class="advanced-analytics-content">
                            <ul>
                                <p><b>High-Level Specifications</b></p>
                                <li>
                                    <i class="ri-check-line rev-check"></i>
                                    Surface-mount design allows for seamless retrofitting and hassle-free installation
                                </li>
                                <li>
                                    <i class="ri-check-line rev-check"></i>
                                    Available with three or four wings
                                </li>
                                <li>
                                    <i class="ri-check-line rev-check"></i>
                                    Choose from a range of sizes up to 8' in diameter
                                </li>
                                <li>
                                    <i class="ri-check-line rev-check"></i>
                                    Custom fabrication and finishing options
                                </li>
                            </ul>
                        </div>
                        <a href="#quote" class="default-btn green_btn mt-auto">REQUEST QUOTE</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Classic Revolving Doors Section -->

        <!-- Start of Contemporary revolving doors Section -->
    <section class="rev-doors contemporary-doors ptb-100" id="contemporary_doors">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-stretch"">
                    <img class="classic-revolving-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/Contemporary-revolving-door2.jpg" alt="Image">
                </div>

                <div class="col-lg-6 d-flex align-items-stretch"">
                    <div class="about-content revolving-div ml-15 d-flex flex-column align-items-start">
                        <div class="section-title">
                            <span>Contemporary revolving doors</span>
                            <h2>Sleek & Sophisticated</h2>
                        </div>
                        <p>An elegant collection of manual or automatic revolving doors built to make your entrance stand out, offering a wide range of customization options for maximum style with zero compromises on functionality / service.</p>

                        
                        <div class="advanced-analytics-content">
                            <ul>
                            <p><b>High-Level Specifications</b></p>
                                <!-- <li>
                                    <i class="ri-check-line rev-check"></i>
                                    Safest door in the industry with advanced sensors
                                </li> -->
                                <li>
                                    <i class="ri-check-line rev-check"></i>
                                    Concealed features for a clean, “all glass” look
                                </li>
                                <li>
                                    <i class="ri-check-line rev-check"></i>
                                    Available with three or four wings
                                </li>
                                <li>
                                    <i class="ri-check-line rev-check"></i>
                                    Standard and customizable sizes
                                </li>
                                <li>
                                    <i class="ri-check-line rev-check"></i>
                                    Custom fabrication and finishing options
                                </li>
                            </ul>
                        </div>
                        <a href="#quote" class="default-btn green_btn mt-auto">REQUEST QUOTE</a>
                    </div>
                </div>

                
            </div>
        </div>
    </section>
    <!-- End of Contemporary revolving doors Section -->

        <!-- Start of Security revolving doors Section -->
        <section class="rev-doors security-doors ptb-100" id="security_doors">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center">
                    <img class="classic-revolving-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/Security-Revolving-Doors2.jpg" alt="Image">
                </div>

                <div class="col-lg-6">
                    <div class="about-content revolving-div ml-15 d-flex flex-column align-items-start">
                        <div class="section-title">
                            <span>Security revolving doors</span>
                            <h2>Award Winning Safety</h2>
                        </div>
                        <p>Protect what matters most with the highly impressive automatic security revolving door from CJ Rush – your trusted safety solutions provider.</p>

                        
                        <div class="advanced-analytics-content">
                            <ul>
                            <p><b>High-Level Specifications</b></p>
                                <li>
                                    <i class="ri-check-line rev-check"></i>
                                    Anti-tailgating and optional anti-piggybacking detection using Time-of-Flight (TOF) technology
                                </li>
                                <li>
                                    <i class="ri-check-line rev-check"></i>
                                    Versatile one-way or two-way security options
                                </li>
                                <li>
                                    <i class="ri-check-line rev-check"></i>
                                    Advanced features such as PLC control pre-programmed to ANSI standards, bulletproof glass, single person detection, and entry / exit flow control
                                </li>
                                <li>
                                    <i class="ri-check-line rev-check"></i>
                                    Wireless phone app for monitoring and diagnostics
                                </li>
                            </ul>
                        </div>
                        <a href="#quote" id="lastRequestBtn" class="default-btn green_btn mt-auto">REQUEST QUOTE</a>
                    </div>
                </div>

                
            </div>
        </div>
    </section>
    <!-- End of Security revolving doors Section -->
<?php

get_footer();
?>