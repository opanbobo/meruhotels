<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function rk_div_render_callback( $block_attributes, $content, $block ) {

	$class = '';
	if (!empty($block_attributes['className'])) {
		$class = $block_attributes['className'];
	}

	$output  = '<div class="'.$class.'">';
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
