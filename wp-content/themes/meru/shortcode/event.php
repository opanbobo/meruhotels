<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function rk_event( $atts, $content = null ) {
    $atts = shortcode_atts( [
		'posts_per_page' => 8,
	], $atts );

    $args = array(
        'post_type' => 'event',
        'posts_per_page' => $atts['posts_per_page'],
        'orderby' => 'menu_order',
        'order' => 'asc',
    );

    $custom_query = new WP_Query($args);

    $output = '';

    if ($custom_query->have_posts()) {

        while ($custom_query->have_posts()) {
            $custom_query->the_post();

            $summary = get_post_meta(get_the_ID(), 'summary', true);
            $link = get_permalink();
            $image = get_the_post_thumbnail(get_the_ID(), 'full', ['class' => 'rk-event-image']);
            $title = get_the_title();

            $output .= '<div class="rk-event">';
            $output .= '<div class="row">';

            $output .= '<div class="col-md-5">';

            $output .= '<a href="'. esc_url($link) .'" class="rk-event-thumbnail">';
            $output .= $image;
            $output .= '</a>'; // rk-event-thumbnail

            $output .= '<h2 class="rk-event-title"><a href="'. esc_url($link) .'">' . $title . '</a></h2>';
            $output .= '</div>'; // col-md-5

            $output .= '<div class="col-md-7">';
            $output .= '<div class="rk-event-content">';

            $output .= '<div class="rk-event-text">';
            $output .= $summary;
            $output .= '</div>'; // rk-event-text

            $output .= '<div><a class="btn btn-gold" href="'. esc_url($link) .'"><span>View Details</span></a></div>';
            $output .= '</div>'; // rk-event-content

            $output .= '</div>'; // col-md-7
            $output .= '</div>'; // row
            $output .= '</div>'; // rk-event
        }
    }

    return $output;
}
add_shortcode( 'rk_event', 'rk_event' );
