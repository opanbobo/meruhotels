<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function rk_select_destination( $atts, $content = null ) {
    $atts = shortcode_atts( [
		'posts_per_page' => 8,
	], $atts );

    $output = '';

    // $output  = '<div class="form text-center">';
    $output .= '<form action="#" method="get">';
    $output .= '<select name="destination" class="rk-select2">';
    $output .= '<option value="bali">Bali</option>';
    $output .= '<option value="madura">Madura</option>';
    $output .= '<option value="yogyakarta">Yogyakarta</option>';
    $output .= '</select>';
    $output .= '</form>';
    // $output .= '</div>';

    return $output;
}
add_shortcode( 'rk_select_destination', 'rk_select_destination' );
