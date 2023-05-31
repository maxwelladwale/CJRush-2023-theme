<?php

/**
 * The template for displaying the home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 *  Template Name: Downloads
 * @package jitutheme
 */
get_header();
?>

    <!-- Page Title -->
    <div class="page-title-area" style="background-color: #EFFFFD;">
        <div class="container">
            <div class="page-title-content">
                <h2>Downloads</h2>
                <ul>
                    <li>
                        <a href="<?php echo site_url(); ?>">
                            Home
                        </a>
                    </li>
                    <li class="active">Downloads</li>
                </ul>
            </div>
        </div>
    </div>

<?php
get_footer();