<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function rk_form_newsletter( $atts, $content = null ) {
    $atts = shortcode_atts( [
		'posts_per_page' => 8,
	], $atts );

    $output  = '<div class="form text-center my-5">';
    $output .= '<form class="form-subs form-inline">';
    $output .= '<div class="form-group w-70">';
    $output .= '<input type="text" class="form-control" id="" placeholder="Enter email">';
    $output .= '</div>';
    $output .= '<div class="column-btn-footer">';
    $output .= '<button type="submit" class="btn btn-primary btn-submit-subs mb-2 ml-4 px-4 py-1 text-uppercase">Submit</button>';
    $output .= '</div>';
    $output .= '</form>';
    $output .= '</div>';

    return $output;
}
add_shortcode( 'rk_form_newsletter', 'rk_form_newsletter' );
