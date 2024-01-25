<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function rk_slider( $atts, $content = null ) {
    $atts = shortcode_atts( [
		'posts_per_page' => 8,
	], $atts );

    $output  = '<div class="rk-retreat">';

    $output .= rk_slider_item('Relaxation Lounge');
    $output .= rk_slider_item('Steam Room');
    $output .= rk_slider_item('Foot Massage');
    $output .= rk_slider_item('Aromatherapy Corner');
    $output .= rk_slider_item('Hydrotherapy Pool');
    $output .= rk_slider_item('Meditation Zone');
    $output .= rk_slider_item('Low-Level Lighting');
    $output .= rk_slider_item('Beauty Bar');
    $output .= rk_slider_item('Zen Garden');


    $output .= '</div>';

    return $output;
}
add_shortcode( 'rk_slider', 'rk_slider' );

function rk_slider_item($title) {

    $output = '<div class="rk-retreat-item">';
    $output .= '<div class="rk-retreat-box">';
    $output .= '<h3>'. $title .'</h3>';
    $output .= '<div class="rk-retreat-content">';
    $output .= '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam Lorem ipsum dolor</p>';
    $output .= '<a href="#">Explore More</a>';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '</div>';

    return $output;
}
