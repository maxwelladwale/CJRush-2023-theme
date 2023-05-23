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
<div class="container table-responsive">

    <table class="table table-borderless">
      <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/classic-revolving-odrrs.scaled.png" alt="Image">
          </th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row"></th>
          <td>Classic Doors</td>
          <td>Contemporary Doors</td>
          <td>Security Doors</td>
        </tr>
        <tr>
          <th scope="row">Description</th>
          <td>Foundational revolving doorwith classic framing and customization options</td>
          <td>Classic styleor modern, sleek, "all glass" look,with all the bells & whistles</td>
          <td>Classic style door with access control and optional security enhancements</td>
        </tr>
        <tr>
          <th scope="row">Control System</th>
          <td>Manual</td>
          <td>Manual or Automatic</td>
          <td>Automatic</td>
        </tr>
        <tr>
          <th scope="row">Suitable Site</th>
          <td>
          <ul class=""><li>Commercial offices</li><li>Restaurants</li><li>Medical centers</li><li>Retail shops</li><li>Grocery stores</li></ul>
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

<?php

get_footer();
?>