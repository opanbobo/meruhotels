<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function rk_suite( $atts, $content = null ) {
    $atts = shortcode_atts( [
		'posts_per_page' => 8,
	], $atts );

    $args = array(
        'post_type' => 'suite',
        'posts_per_page' => $atts['posts_per_page'],
        'orderby' => 'menu_order',
        'order' => 'asc',
    );

    $custom_query = new WP_Query($args);

    $output = '';

    $output .= '<div class="row pb-5">';

    if ($custom_query->have_posts()) {

        while ($custom_query->have_posts()) {
            $custom_query->the_post();

            $wide = get_post_meta(get_the_ID(), 'wide', true);
            $detail_link = get_post_meta(get_the_ID(), 'detail_link', true);

            $class = [];
            $class[] = 'rk-room';
            $class[] = 'rk-room-'. get_the_ID();

            if ($wide) {
                $output .= '<div class="col-md-12">';
                $class[] = 'rk-room-wide';
            } else {
                $output .= '<div class="col-md-6">';
            }

            $class_string = implode(' ', $class);

            $output .= '<div class="'. $class_string .'" data-id="'. get_the_ID() .'">';
            $output .= '<div class="rk-room-images">';

            $output .= rk_suite_get_image('image_1');
            $output .= rk_suite_get_image('image_2');
            $output .= rk_suite_get_image('image_3');
            $output .= rk_suite_get_image('image_4');

            $output .= '</div>'; // rk-room-images


            $output .= '<div class="rk-room-content">';
            $output .= '<div class="rk-room-text">';

            $output .= '<h2 class="rk-room-title"><a href="'. $detail_link .'">'. get_the_title() .'</a></h2>';
            $output .= '<p class="desc">'. get_the_excerpt() .'</p>';

            $output .= '<p class="btn-reserve-room">';
            $output .= '<a class="btn btn-gold" href="'. esc_url(get_post_meta(get_the_ID(), 'button_link', true)) .'"><span>'. esc_html(get_post_meta(get_the_ID(), 'button_text', true)) .'</span></a>';
            $output .= '</p>';



            $output .= '</div>'; // rk-room-text
            $output .= '</div>'; // rk-room-content

            $output .= '</div>'; // rk-room

            $output .= '</div>'; // col-md-6
        }
    }

    $output .= '</div>'; // row


    return $output;
}
add_shortcode( 'rk_suite', 'rk_suite' );

function rk_suite_get_image($field_name = 'image_1') {

    $output = '';

    $image_id = get_post_meta(get_the_ID(), $field_name, true);
    $image_src = wp_get_attachment_image_src($image_id, 'full');
    $thumb_src = wp_get_attachment_image_src($image_id, 'suite');

    if (empty($image_src)) return;

    $output .= '<div class="rk-room-image">';
    $output .= '<a class="rk-room-image-link" href="'. esc_url($image_src[0]) .'"><img class="img-fluid" src="'. esc_url($thumb_src[0]) .'" /></a>';
    $output .= '</div>'; // rk-room-image

    return $output;
}
