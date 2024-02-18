<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function rk_div_render_callback( $block_attributes, $content, $block ) {

	$class_html = '';
	if (!empty($block_attributes['className'])) {
		$class_html = ' class="'. $block_attributes['className'] .'"';
	}

	$id_html = '';
	if (!empty($block_attributes['rkId'])) {
		$id_html = ' id="'. $block_attributes['rkId'] .'"';
	}

	$output  = '<div'. $id_html . $class_html .'>';
	$output .= $content;
	$output .= '</div>';

    return $output;
}

function rk_block_init() {
	register_block_type( __DIR__ . '/build/div', array(
		'render_callback' => 'rk_div_render_callback'
	) );
}
add_action( 'init', 'rk_block_init' );
