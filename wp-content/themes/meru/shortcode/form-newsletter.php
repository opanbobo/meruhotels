<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function rk_form_newsletter( $atts, $content = null ) {
    $atts = shortcode_atts( [
		'posts_per_page' => 8,
	], $atts );

    $output  = '<div class="form text-center">';
    $output .= '<form>';
    $output .= '<div class="form-group">';
    $output .= '<input type="text" class="form-control" id="" placeholder="Enter email">';
    $output .= '</div>';
    $output .= '</form>';
    $output .= '</div>';

    return $output;
}
add_shortcode( 'rk_form_newsletter', 'rk_form_newsletter' );
