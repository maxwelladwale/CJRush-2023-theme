<?php
/**
 * Theme Name: CJ RUSH
 * Theme URI: thejitu.com
 * Description: CJRUSH Theme
 * Author: THE Jitu
 * Author URI: https://thejitu.com
 * Version: 1.0
 * License: License Name
 * License URI: License URI
 * Text Domain: cjrush
 */

// Begin the HTML rendering.
get_header(); ?>

    <main id="main-content">
        <div class="container">
            <?php
            // Start the loop.
            while (have_posts()) {
                the_post();
                // Display the post content.
                the_content();
            }
            ?>
        </div>
    </main>

<?php get_footer(); ?>