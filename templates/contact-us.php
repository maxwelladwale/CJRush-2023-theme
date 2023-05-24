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
</div>
<!-- End Page Title Area -->

<!-- Start Contact Area -->
<section class="main-contact-area pt-100 pb-100">
    <div class="container">
        <div class="forms">
            <?php
                echo the_content();
            ?>
        </div>
    </div>
</section>
<!-- End Contact Area -->

<?php

get_footer();
?>