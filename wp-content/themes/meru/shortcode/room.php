<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function rk_room( $atts, $content = null ) {
    $atts = shortcode_atts( [
		'posts_per_page' => 8,
        'id' => 0,
	], $atts );

    $content = [
        [
            'title' => 'Deluxe Suite',
            'content' => 'Experience the luxury of our Deluxe Suite, a spacious 83-square-meter retreat features a private balcony or expansive terrace overlooking our serene garden.',
        ],
        [
            'title' => 'Corner Suite',
            'content' => 'Indulge in the expansive comfort of our Corner Suite, featuring serene garden views. Offering a spacious 98 square meters, this suite includes a private balcony or terrace and a dedicated dining table for your convenience.',
        ],
        [
            'title' => 'Premier Suite',
            'content' => 'Experience our Premier Suites, feature 125 square meters of space and a stunning view of our tranquil garden. Each suite is adorned with refined furnishings includes a private balcony or terrace, providing the ultimate of luxurious resort-style living.',
        ],
        [
            'title' => 'Meru Suite',
            'content' => 'An expansive comfort of our Meru Suite, featuring a separate living room with a terrace or balcony overlooking the tranquil garden. With a generous 160 square meters of space, this suite offers an exceptional living experience.',
        ],
        [
            'title' => 'Presidential Suite',
            'content' => 'Revel in the pinnacle of luxury with our Presidential Suite, the most prestigious accommodation at the resort. Spanning a lavish 209 square meters, this expansive haven offers unparalleled opulence and sophistication. With a private balcony or terrace, exclusive amenities, and a dedicated dining space, the Presidential Suite promises an extraordinary retreat, ensuring an unparalleled experience in the lap of resort luxury.',
        ],
    ];

    $images = [
        ['deluxe.jpg', 'corner.jpg', 'premier.jpg', 'meru.jpg'],
        ['corner.jpg', 'premier.jpg', 'meru.jpg','deluxe.jpg'],
        ['premier.jpg', 'meru.jpg','deluxe.jpg', 'corner.jpg'],
        ['meru.jpg','deluxe.jpg', 'corner.jpg', 'premier.jpg'],
        ['presidential.jpg','presidential.jpg','presidential.jpg','presidential.jpg']
    ];



    $output  = '<div class="rk-room rk-room-'. $atts['id'] .'">';
    $output .= '<div class="rk-room-images">';


    foreach($images[$atts['id']] as $image) {
        $output .= '<div class="rk-room-image">';
        $output .= '<a class="rk-room-image-link" href="'. get_stylesheet_directory_uri() .'/assets/img/'. $image .'"><img class="img-fluid" src="'. get_stylesheet_directory_uri() .'/assets/img/'. $image .'" /></a>';
        $output .= '</div>';
    }

    $output .= '</div>';

    $output .= '<div class="rk-room-content">';
    $output .= '<div class="rk-room-text">';
    $output .= '<h2 class="rk-room-title">'. $content[$atts['id']]['title'] .'</h2>';
    $output .= '<p>'. $content[$atts['id']]['content'] .'</p>';
    $output .= '</div>';
    $output .= '</div>';


    $output .= '</div>';

    return $output;
}
add_shortcode( 'rk_room', 'rk_room' );
