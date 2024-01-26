<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function rk_home_popup( $atts, $content = null ) {
    $atts = shortcode_atts( [
		'posts_per_page' => 8,
	], $atts );


    $output = '';

    $output .= '<div class="modal fade " id="arunikaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
    $output .= '<div class="modal-dialog modal-dialog-centered modal-xl" role="document">';
    $output .= '<div class="modal-content">';

    $output .= '<div class="modal-body">';

    $output .= '<div class="row">';
    $output .= '<div class="col-md-6">';
    $output .= '<figure class="wp-block-image size-full "><img src="//localhost/meruhotels/wp-content/themes/meru/assets/img/arunika.jpg" alt="" class="wp-image-9999"></figure>';
    $output .= '</div>';
    $output .= '<div class="col-md-6 d-flex align-items-center">';
    $output .= '<div class="px-5 py-4">';
    $output .= '<h2 class="wp-block-heading voyage-48">Arunika</h2>';
    $output .= '<p class="universe-20">Set in the midst of lan expansive pool within the main gardens, Arunika features live cooking stations with an extensive array of local and international cuisines. It serves as the perfect setting for day-long relaxation, creating an ideal space to unwind with friends and family.</p>';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '</div>'; // row
    $output .= '<div class="rk-close close" data-dismiss="modal" aria-label="Close"></div>';

    $output .= '</div>'; // body

    $output .= '</div>';
    $output .= '</div>';
    $output .= '</div>';




    $output .= '<div class="modal fade " id="sutasomaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
    $output .= '<div class="modal-dialog modal-dialog-centered modal-xl" role="document">';
    $output .= '<div class="modal-content">';


    $output .= '<div class="modal-body">';

    $output .= '<div class="row">';
    $output .= '<div class="col-md-6">';
    $output .= '<figure class="wp-block-image size-full "><img src="//localhost/meruhotels/wp-content/themes/meru/assets/img/arunika.jpg" alt="" class="wp-image-9999"></figure>';
    $output .= '</div>';
    $output .= '<div class="col-md-6 d-flex align-items-center">';
    $output .= '<div class="px-5 py-4">';
    $output .= '<h2 class="wp-block-heading voyage-48">Sutasoma</h2>';
    $output .= '<p class="universe-20">Discover serenity at Sutasoma Lounge, a haven where history meets relaxation. Indulge in coffee, tea, and a welcoming Jamu. This intimate space doubles as a library, featuring curated books on Bali, Indonesia’s history, and more—an ideal retreat for every guest.</p>';
    $output .= '</div>    ';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '<div class="rk-close close" data-dismiss="modal" aria-label="Close"></div>';

    $output .= '</div>';

    $output .= '</div>';
    $output .= '</div>';
    $output .= '</div>';





    $output .= '<div class="modal fade " id="svasanaspaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
    $output .= '<div class="modal-dialog modal-dialog-centered modal-xl" role="document">';
    $output .= '<div class="modal-content">';


    $output .= '<div class="modal-body">';

    $output .= '<div class="row">';
    $output .= '<div class="col-md-6">';
    $output .= '<figure class="wp-block-image size-full "><img src="//localhost/meruhotels/wp-content/themes/meru/assets/img/arunika.jpg" alt="" class="wp-image-9999"></figure>';
    $output .= '</div>';
    $output .= '<div class="col-md-6 d-flex align-items-center">';
    $output .= '<div class="px-5 py-4">';
    $output .= '<h2 class="wp-block-heading voyage-48">Svasana Spa</h2>';
    $output .= '<p class="universe-20">A harmonious sanctuary dedicated to the well-being of mind, body, and soul, we warmly welcome you to embark on a transformative wellness journey. Our array of services, rooted in local wisdom, is designed to engage each of your five senses—sound, sight, scent, taste, and touch—creating a holistic and rejuvenating experience.</p>';
    $output .= '</div>    ';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '<div class="rk-close close" data-dismiss="modal" aria-label="Close"></div>';

    $output .= '</div>';

    $output .= '</div>';
    $output .= '</div>';
    $output .= '</div>';



    $output .= '<div class="modal fade " id="fitnesscentreModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
    $output .= '<div class="modal-dialog modal-dialog-centered modal-xl" role="document">';
    $output .= '<div class="modal-content">';


    $output .= '<div class="modal-body">';

    $output .= '<div class="row">';
    $output .= '<div class="col-md-6">';
    $output .= '<figure class="wp-block-image size-full "><img src="//localhost/meruhotels/wp-content/themes/meru/assets/img/arunika.jpg" alt="" class="wp-image-9999"></figure>';
    $output .= '</div>';
    $output .= '<div class="col-md-6 d-flex align-items-center">';
    $output .= '<div class="px-5 py-4">';
    $output .= '<h2 class="wp-block-heading voyage-48">Fitness Centre</h2>';
    $output .= '<p class="universe-20">Our fitness center features advanced equipment, providing you with access to the latest tools for your workout needs. Operating 24 hours a day, our fitness facility is designed to accommodate your schedule, allowing you the flexibility to exercise at your convenience.</p>';
    $output .= '</div>    ';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '<div class="rk-close close" data-dismiss="modal" aria-label="Close"></div>';

    $output .= '</div>';

    $output .= '</div>';
    $output .= '</div>';
    $output .= '</div>';




    $output .= '<div class="modal fade " id="swimmingpoolModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
    $output .= '<div class="modal-dialog modal-dialog-centered modal-xl" role="document">';
    $output .= '<div class="modal-content">';


    $output .= '<div class="modal-body">';

    $output .= '<div class="row">';
    $output .= '<div class="col-md-6">';
    $output .= '<figure class="wp-block-image size-full "><img src="//localhost/meruhotels/wp-content/themes/meru/assets/img/arunika.jpg" alt="" class="wp-image-9999"></figure>';
    $output .= '</div>';
    $output .= '<div class="col-md-6 d-flex align-items-center">';
    $output .= '<div class="px-5 py-4">';
    $output .= '<h2 class="wp-block-heading voyage-48">Swimming Pool</h2>';
    $output .= '<p class="universe-20">Surrounded by lush tropical gardens and offering breathtaking views of the Sanur Beach, our impressive 60-meter swimming pool provides an ideal setting to swim laps or a leisurely, refreshing dip at your convenience.</p>';
    $output .= '</div>    ';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '<div class="rk-close close" data-dismiss="modal" aria-label="Close"></div>';

    $output .= '</div>';

    $output .= '</div>';
    $output .= '</div>';
    $output .= '</div>';



    $output .= '<div class="modal fade " id="kidsclubModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
    $output .= '<div class="modal-dialog modal-dialog-centered modal-xl" role="document">';
    $output .= '<div class="modal-content">';


    $output .= '<div class="modal-body">';

    $output .= '<div class="row">';
    $output .= '<div class="col-md-6">';
    $output .= '<figure class="wp-block-image size-full "><img src="//localhost/meruhotels/wp-content/themes/meru/assets/img/arunika.jpg" alt="" class="wp-image-9999"></figure>';
    $output .= '</div>';
    $output .= '<div class="col-md-6 d-flex align-items-center">';
    $output .= '<div class="px-5 py-4">';
    $output .= '<h2 class="wp-block-heading voyage-48">Kids Club</h2>';
    $output .= '<p class="universe-20">Our kids club enhances the family-friendly atmosphere at The Meru Sanur, making it an ideal destination for quality time with your loved ones.</p>';
    $output .= '</div>    ';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '<div class="rk-close close" data-dismiss="modal" aria-label="Close"></div>';

    $output .= '</div>';

    $output .= '</div>';
    $output .= '</div>';
    $output .= '</div>';



    return $output;
}
add_shortcode( 'rk_home_popup', 'rk_home_popup' );
