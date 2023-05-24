<?php

/**
 * The template for displaying the About Us
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 *  Template Name: Balanced Swing Doors
 * @package jitutheme
 */

get_header();

?>


    <!-- Page Title -->
    <div class="page-title-area" style="background-color: #EFFFFD;">
        <div class="container">
            <div class="page-title-content">
                <h2>Balanced & Swing Doors</h2>
                <ul>
                    <li>
                        <a href="">
                            Home
                        </a>
                    </li>
                    <li class="active">Balanced & Swing Doors</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Balanced Doors -->
    <section class="why-choose-this-area ptb-100">
        <div class="container">
            <div class="why-choose-bg pb-100 border-0">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="why-choose-this-content">
                            <h2>BALANCED DOORS</h2>
                            <p>Say goodbye to heavy doors trapped in perpetual wind tunnels. These cleverly designed CJ Rush balanced doors utilize the pressure differential between inside and outside air to make door operation a breeze.</p>
                            <p>By achieving a perfect equilibrium, these doors skillfully counterbalance the forces on either side of the pivot, ensuring a smooth and pleasant experience.</p>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="text-center">
                            <img src="<?php echo __(get_template_directory_uri()); ?>/assets/images/balanced-doors.jpg" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="background-color: #EFFFFD;">
            <div class="container">
                <div class="why-choose-bg ptb-100 border-0">
                    <div class="row align-items-center justify-content-around">
                        <div class="col-lg-6 mb-3 mb-lg-4">
                            <h4 class="text-center">CONVENTIONAL HINGED DOOR</h4>
                        </div>
                        <div class="col-lg-5 mb-5 mb-lg-0 order-lg-1">
                            <div class="text-center">
                                <img src="<?php echo __(get_template_directory_uri()); ?>/assets/images/conventional-hinged-door-illustration.png" alt="Conventional Hinged Door">
                            </div>
                        </div>

                        <div class="col-lg-6 mb-3 mb-lg-4">
                            <h4 class="text-center">CJ RUSH BALANCED DOOR</h4>
                        </div>
                        <div class="col-lg-5 order-lg-2">
                            <div class="text-center">
                                <img src="<?php echo __(get_template_directory_uri()); ?>/assets/images/balanced-door-illustration.png" alt="balanced-door">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <style>
                .advanced-analytics-content ul {
                    margin-top: 0;
                    display: flex;
                    flex-direction: column;
                }

                .advanced-analytics-content ul li {
                    font-size: inherit;
                    font-weight: 500;
                }

                .advanced-analytics-content ul li i {
                    top: 0;
                }
            </style>
            <div class="advanced-analytics-content pt-100">
                <ul>
                    <li>
                        <i class="ri-check-line"></i> Single or pair doors.
                    </li>
                    <li>
                        <i class="ri-check-line"></i> Fully framed classic look or “all glass” modern look.
                    </li>
                    <li>
                        <i class="ri-check-line"></i> Wide stile (1/4″ tempered glass), narrow stile (1/2″ tempered glass) or top and bottom rails only (1/2″ tempered glass).
                    </li>
                </ul>
            </div>

            <div class="pt-4 pt-lg-5 text-center">
                <button type="submit" class="default-btn" style="pointer-events: all; cursor: pointer;">
                    <span>Learn More</span>
                </button>
            </div>
        </div>
    </section>

<?php

get_footer();
