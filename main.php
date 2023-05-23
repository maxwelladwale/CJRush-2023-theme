<?php


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