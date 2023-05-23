<?php

add_action( 'after_setup_theme', 'cjrush_fn_setup', 50 );
function cjrush_fn_setup()
{
    add_action('wp_enqueue_scripts', 'cjrush_enqueue_scripts');
    add_action('wp_enqueue_scripts', 'cjrush_enqueue_styles');

    // CONSTANT
    $my_theme 		= wp_get_theme( 'thejitu' );
    $version		= '1.0.0';

    if ( $my_theme->exists() ){
        $version 	= (string)$my_theme->get( 'Version' );
    }

    $version		= 'ver_'.$version;
    define('cjrush_VERSION', $version);
    define('cjrush_THEME_URL', get_template_directory_uri());
}

/**
 * Enqueue Scripts
 */

function cjrush_enqueue_scripts()
{
    // Register and enqueue scripts
    wp_enqueue_script('Jquery-Min-JS', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '1.0', true);
    wp_enqueue_script('Bootstrap-Bundle-Min-JS', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0', true);
    wp_enqueue_script('Meanmenu-Min-JS', get_template_directory_uri() . '/assets/js/meanmenu.min.js', array(), '1.0', true);
    wp_enqueue_script('Owl-Carousel-Min-JS', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.0', true);
    wp_enqueue_script('Wow-Min-JS', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '1.0', true);
    wp_enqueue_script('Magnific-Popup-Min-JS', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array(), '1.0', true);
    wp_enqueue_script('Appear-Min-JS', get_template_directory_uri() . '/assets/js/appear.min.js', array(), '1.0', true);
    wp_enqueue_script('Odometer-Min-JS', get_template_directory_uri() . '/assets/js/odometer.min.js', array(), '1.0', true);
    wp_enqueue_script('Form-Validator-Min-JS', get_template_directory_uri() . '/assets/js/form-validator.min.js', array(), '1.0', true);
    wp_enqueue_script('Contact-JS', get_template_directory_uri() . '/assets/js/contact-form-script.js', array(), '1.0', true);
    wp_enqueue_script('Ajaxchimp-Min-JS', get_template_directory_uri() . '/assets/js/ajaxchimp.min.js', array(), '1.0', true);
    wp_enqueue_script('Custom-JS', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0', true);
}


/**
 * Enqueue Stylesheets
 */

function cjrush_enqueue_styles() {
    // Register and enqueue stylesheets
    wp_enqueue_style('bootstrapmin', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), cjrush_VERSION, 'all');
    wp_enqueue_style('owltheme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), cjrush_VERSION, 'all');
    wp_enqueue_style('owlthemecarousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), cjrush_VERSION, 'all');
    wp_enqueue_style('remixicon', get_template_directory_uri() . '/assets/css/remixicon.css', array(), cjrush_VERSION, 'all');
    wp_enqueue_style('flaticon', get_template_directory_uri() . '/assets/css/flaticon.css', array(), cjrush_VERSION, 'all');
    wp_enqueue_style('meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.min.css', array(), cjrush_VERSION, 'all');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), cjrush_VERSION, 'all');
    wp_enqueue_style('popup', get_template_directory_uri() . '/assets/css/magnific-popup.min.css', array(), cjrush_VERSION, 'all');
    wp_enqueue_style('odometer', get_template_directory_uri() . '/assets/css/odometer.min.css', array(), cjrush_VERSION,'all');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), cjrush_VERSION, 'all');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), cjrush_VERSION, 'all');
}



add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo', array(
    'height' => 480,
    'width'  => 720,
) );

add_theme_support('automatic-feed-links');

function register_navwalker(){
    require_once get_template_directory() . '/functions/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


if ( ! file_exists(get_template_directory() . '/functions/class-wp-bootstrap-navwalker.php') ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/functions/class-wp-bootstrap-navwalker.php';
}

register_nav_menus(
    array(
        'top-menu' => __( 'Primary Menu', 'cjrush' ),
        'top-bar' => __( 'Topbar Menu', 'cjrush' ),
        'footer-menu' => __('Footer Menu', 'cjrush')
    )
);

