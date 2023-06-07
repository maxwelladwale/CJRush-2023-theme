<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->

<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title><?php echo page_title(); ?></title>

    <?php wp_head();?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
<!-- Start Preloader Area -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="pl-flip-1 pl-flip-2"></div>
    </div>
</div>
<!-- End Preloader Area -->

<!-- Start Navbar Area -->
<div class="navbar-area pages-navbar-style">
    <div class="mobile-responsive-nav">
        <div class="container">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a href="<?php site_url()?>/home">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="CJRushlogo">
                    </a>

                </div>
            </div>
        </div>
    </div>

    <div class="desktop-nav desktop-nav-style-three">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.php">
                    <?php if ( has_custom_logo() ) : ?>
                        <?php the_custom_logo();?>
                    <?php endif; ?>
                </a>

                <a class="navbar-brand" href="<?php echo site_url();?>">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="CJRushlogo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="<?php echo site_url('/products-services');?>" class="nav-link" id="prod-serve">
                                Product & Services
                                <i class="ri-arrow-down-s-line"></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="<?php echo site_url('/revolving-doors');?>" class="nav-link">Revolving Doors</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('/balanced-swing');?>" class="nav-link">Balanced & Swing Doors</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo site_url('/gallery');?>" class="nav-link">Gallery</a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo site_url('/downloads');?>" class="nav-link">Downloads</a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo site_url('/about-us');?>" class="nav-link">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo site_url('/contact-us');?>" class="nav-link">Contact</a>
                        </li>
                    </ul>

                    <div class="others-options">
                        <ul>
                            <li>
                                <a href="#quote" class="default-btn" style="padding: 10px 20px;">REQUEST A QUOTE</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
        </div>
    </div>

    <!-- <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>

            <div class="container">
                <div class="option-inner">
                    <div class="others-options justify-content-center d-flex align-items-center">
                        <ul>
                            <li>
                                <a href="sign-in.html" class="sign-in">Sign in</a>
                            </li>
                            <li>
                                <a href="pricing-plan.html" class="default-btn btn-style-two">Try for free</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>
<!-- End Navbar Area -->