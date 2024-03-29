<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

    <!-- Start 404 Error -->

    <div class="error-area ptb-100">

        <div class="d-table">

            <div class="d-table-cell">

                <div class="error-content">

                    <h1>4 <span>0</span> 4</h1>

                    <h3>Oops! Page Not Found</h3>

                    <p>The page you were looking for could not be found.</p>



                    <a href="<?php echo site_url();?>" class="default-btn two">

                        Return to home page

                    </a>

                </div>

            </div>

        </div>

    </div>

    <!-- End 404 Error -->


<?php get_footer(); ?>