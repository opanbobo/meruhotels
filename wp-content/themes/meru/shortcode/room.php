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
            'content' => 'Indulge in our Deluxe Suite Garden View, a spacious 83-square-meter retreat with a private balcony or terrace. Experience modern elegance seamlessly blending with nature, creating a tranquil escape for your resort stay.',
        ],
        [
            'title' => 'Corner Suite',
            'content' => 'Unwind in our Corner Suite Garden View at the resort, boasting a spacious 98 square meters, a private balcony or terrace, and a dedicated dining table. This elegantly appointed sanctuary invites you to savor tranquility amid lush surroundings. Immerse yourself in modern comfort and luxury for an extraordinary retreat.',
        ],
        [
            'title' => 'Premier Suite',
            'content' => 'Experience lavish comfort in our Premier Suite, a sprawling retreat of 125 square meters at the resort. This grand suite offers an abundance of space, complemented by a private balcony or terrace and the convenience of a dedicated dining table. Immerse yourself in the serene beauty of the resort\'s gardens while enjoying modern amenities. Your stay promises to be an indulgent blend of sophistication and relaxation in this generously appointed suite.',
        ],
        [
            'title' => 'Meru Suite',
            'content' => 'Elevate your resort experience with the Meru Suite, a luxurious haven spanning an impressive 160 square meters. This spacious retreat boasts a private balcony or terrace, a dedicated dining table, and modern amenities that redefine indulgence. Immerse yourself in the grandeur of this expansive suite, promising an unparalleled blend of comfort and sophistication amid the resort\'s stunning surroundings.',
        ],
        [
            'title' => 'Presidential Suite',
            'content' => 'Indulge in our Deluxe Suite Garden View, a spacious 83-square-meter retreat with a private balcony or terrace. Experience modern elegance seamlessly blending with nature, creating a tranquil escape for your resort stay.',
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
