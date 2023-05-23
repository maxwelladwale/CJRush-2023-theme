<?php

/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage cjrush
 *
 */

$blog_info    = get_bloginfo( 'name' );
$description  = get_bloginfo( 'description', 'display' );
$show_title   = ( true === get_theme_mod( 'display_title_and_tagline', true ) );
$header_class = $show_title ? 'site-title' : 'screen-reader-text';

if ( has_custom_logo() ) : ?>

<img src="<?php the_custom_logo();?> alt="CJRushlogo">
<?php endif; ?>

<a class="navbar-brand" href="index.php">
<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="CJRushlogo">
</a>

