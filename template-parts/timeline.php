<?php
/**
 * Displays the about us timeline.
 *
 * @package WordPress
 * @subpackage cjrush
 *
 */

?>

<div class="row">

    <div class="col-lg-8 col-sm-12">
        <div class="about-content ml-15 pb-22">
            <p>
                Founded in 1965, CJ Rush quickly became a globally renowned designer and manufacturer of commercial entrance systems. To this day, CJ Rush doors can be found in some of the world's most prestigious buildings, such as the Rockefeller Center, Federal Reserve of Boston, Harvard Medical School and even the Capital One Arena. These entrances are architectural masterpieces in themselves, reflecting the excellence and unparalleled craftsmanship that CJ Rush is known for.
            </p>
        </div>

        <div class="about-content ml-15 pb-22">
            <p>
                In 2002, CJ Rush was acquired by Stanley Access Technologies. The valuable CJ Rush brand the world had come to know and love was all but hidden under Stanley's ownership, but in truth, CJ Rush did not go anywhere. The team never ceased to create bespoke masterpieces behind the scenes, delivering the same excellence and unparalleled craftsmanship, just under a different name.
            </p>
        </div>

        <div class="about-content ml-15 pb-22">
            <p>
                Since 1965, each and every entrance system has been built with care, precision, and creativity. Generations of highly skilled artisans have gone to great lengths to ensure that each customized entrance fits perfectly into the building it was designed for, as though it is the missing puzzle piece to bring the look together.
            </p>
        </div>

        <div class="about-content ml-15 pb-22">
            <p>
                In May 2021, CJ Rush was acquired by Ten Oaks Group, a preeminent family office. Under Ten Oaks, CJ Rush has once again taken center stage as a flourishing business with its heritage brand, evolved and modernized but still the same iconic name that makes no compromises when it comes to artistry and masterful engineering. Just like the CJ Rush entrance systems, the CJ Rush brand has lasting durability too.
            </p>
        </div>


    </div>


    <div class="col-lg-4 col-sm-12 timeline-start">
        <div class="about-img mr-15 pb-20 abut-img-300">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1st image-min.webp" alt="cjrush-timeline-image">
        </div>

        <div class="about-img mr-15 pb-20 abut-img-300">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2nd image-min.webp" alt="cjrush-timeline-image">
        </div>

        <div class="about-img about-img-nb mr-15 pb-20 abut-img-300">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/3rdimage-min.webp" alt="cjrush-timeline-image">
        </div>
    </div>

</div>

<style>
    .desc-2021{
        margin-top: -60px;
    }
    .pb-20{
        /*padding-bottom: 0px;*/
    }
    .pb-22 {
        padding-bottom: 20px;
    }
    .abut-img-300 img{
        height: 250px !important;
    }

    @media only screen and (min-width: 768px) and (max-width: 991px){
        .abut-img-300{
            border-left:none;
            padding:0;
            
        }
        .timeline-start{
            display:flex;
            flex-direction:row;
        }
        .abut-img-300::before{
            display:none;
        }
        .download-btn{
            display:flex;
            flex:fit-content;
        }
    }

    @media only screen and (max-width: 600px){
        .download-btn{
            display: flex;
            flex:fit-content;
        }
    }
</style>