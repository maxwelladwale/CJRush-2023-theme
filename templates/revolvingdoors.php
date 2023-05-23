<?php

/**
 * The template for displaying the home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 *  Template Name: Revolving Doors
 * @package jitutheme
 */

get_header();

?>

<!-- Start Page Title Area -->
<div class="page-title-area" style="background-color: #EFFFFD;>
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
<div class="container table-responsive cont">

  <table class="table table-borderless">
    <thead>
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
        <td>
          <h4>Classic Doors</h4>
        </td>
        <td>
          <h4>Contemporary Doors</h4>
        </td>
        <td>
          <h4>Security Doors</h4>
        </td>
      </tr>
      <tr>
        <th scope="row">Description</th>
        <td>
          <p>Foundational revolving doorwith classic framing and customization options</p>
        </td>
        <td>
          <p>Classic style or modern, sleek, "all glass" look,with all the bells & whistles</p>
        </td>
        <td>
          <p>Classic style door with access control and optional security enhancements</p>
        </td>
      </tr>
      <tr>
        <th scope="row">Control System</th>
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
        <th scope="row">Suitable Site</th>
        <td>
          <ul class="">
            <li>Commercial offices</li>
            <li>Restaurants</li>
            <li>Medical centers</li>
            <li>Retail shops</li>
            <li>Grocery stores</li>
          </ul>
        </td>
        <td>
          <ul>
            <li>Banks</li>
            <li>Convention Centers</li>
            <li>Hotels</li>
            <li>Corporate HQ</li>
            <li>Airports</li>
            <li>Casinoa</li>
          </ul>
        </td>
        <td>
          <ul>
            <li>Government buildings</li>
            <li>Insurance buildings</li>
            <li>Large financial institutions</li>
          </ul>
        </td>
      </tr>
      <tr>
        <th scope="row">Applications</th>
        <td></td>
        <td></td>
        <td>Tailgating prevention Piggybacking prevention Simultaneous, bi-directional traffic Ideal for unmanned, high traffic entrances Bulletproof glass Hours of operation</td>
      </tr>
      <tr>
        <th scope="row"></th>
        <td>
          <button class="submit-button default-btn" type="submit">
            LEARN MORE
          </button>

        </td>
        <td>
          <button class="submit-button default-btn" type="submit">
            LEARN MORE
          </button>
        </td>
        <td>
          <button class="submit-button default-btn" type="submit">
            LEARN MORE
          </button>
        </td>
      </tr>
    </tbody>
  </table>
</div>
<!-- End of Revolving Doors Table -->

<!-- Start of Features -->
<div class="page-title-area" style="background-color: #EFFFFD;>
			<div class=" container">
  <div class="page-title-content">
    <section class="about-area pb-100">
      <div class="container">
        <div class="row align-items-center">
          <h5 class="features-h5">Unrivaled enhancements & customization surpassing all other providers</h5>
          <div class="col-lg-6">
            <?php
            echo do_shortcode('[custom_accordion title="Speed Control" image="https://www.cjrush.jitudevops.com/wp-content/uploads/2023/05/Speed.png" class="accordion-group"] Added boost to door rotation once the door wing is pushed – accessibility, disabled, elderly [/custom_accordion]');
            echo do_shortcode('[custom_accordion title="Glass Ceiling" image="https://www.cjrush.jitudevops.com/wp-content/uploads/2023/05/Glass-ceiling.png" class="accordion-group"] Added boost to door rotation once the door wing is pushed – accessibility, disabled, elderly [/custom_accordion]');
            echo do_shortcode('[custom_accordion title="Power Assist" image="https://www.cjrush.jitudevops.com/wp-content/uploads/2023/05/Power-assist.png" class="accordion-group"] Added boost to door rotation once the door wing is pushed – accessibility, disabled, elderly [/custom_accordion]');
            echo do_shortcode('[custom_accordion title="Automatic Locking" image="https://www.cjrush.jitudevops.com/wp-content/uploads/2023/05/Automatic-locking.png" class="accordion-group"] Added boost to door rotation once the door wing is pushed – accessibility, disabled, elderly [/custom_accordion]');
            echo do_shortcode('[custom_accordion title="Cladding" image="https://www.cjrush.jitudevops.com/wp-content/uploads/2023/05/Cladding.png" class="accordion-group"] Added boost to door rotation once the door wing is pushed – accessibility, disabled, elderly [/custom_accordion]');
            ?>
          </div>

          <div class="col-lg-6">
            <?php
            echo do_shortcode('[custom_accordion title="Floor Grills" image="https://www.cjrush.jitudevops.com/wp-content/uploads/2023/05/Floor-Grilling.png" class="accordion-group"] Added boost to door rotation once the door wing is pushed – accessibility, disabled, elderly [/custom_accordion]');
            echo do_shortcode('[custom_accordion title="Finishes" image="https://www.cjrush.jitudevops.com/wp-content/uploads/2023/05/Finishes.png" class="accordion-group"] Added boost to door rotation once the door wing is pushed – accessibility, disabled, elderly [/custom_accordion]');
            echo do_shortcode('[custom_accordion title="Sweeps" image="https://www.cjrush.jitudevops.com/wp-content/uploads/2023/05/Sweeping.png" class="accordion-group"] Added boost to door rotation once the door wing is pushed – accessibility, disabled, elderly [/custom_accordion]');
            echo do_shortcode('[custom_accordion title="Canopy Lighting" image="https://www.cjrush.jitudevops.com/wp-content/uploads/2023/05/Lighting.png" class="accordion-group"] Added boost to door rotation once the door wing is pushed – accessibility, disabled, elderly [/custom_accordion]');
            echo do_shortcode('[custom_accordion title="Insulation" image="https://www.cjrush.jitudevops.com/wp-content/uploads/2023/05/Insulation.png" class="accordion-group"] Added boost to door rotation once the door wing is pushed – accessibility, disabled, elderly [/custom_accordion]');
            ?>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<!-- End of Features -->

<!-- Start of Classic Revolving Doors Section -->
<section class="about-area pb-100">
  <div class="container">
    <div class="row align-items-center">
      <h5 class="revolving-title">Classic Revolving Doors</h5>
      <div class="col-lg-6">
        <img class="classic-revolving-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/Revolving-door-banner.jpg" alt="Image">
      </div>

      <div class="col-lg-6">
        <div class="about-content ml-15">
          <p class="revolving-description">An <b>innovative, environmentally friendly</b> manual revolving door designed for versatile applications, offering <b>enhanced energy efficiency, improved comfort</b>, and <b>long-lasting durability</b>.</p>
          <div class="advanced-analytics-content">
            <ul>
              <li>
                <i class="ri-check-line"></i>
                Effectively reduces infiltration of dust and dirt
              </li>
              <li>
                <i class="ri-check-line"></i>
                Surface mounted collapsing mechanism designed with long-lasting quality
              </li>
              <li>
                <i class="ri-check-line"></i>
                Overhead mechanical speed control provides decades of trouble-free service
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End of Classic Revolving Doors Section -->

<?php

get_footer();
?>