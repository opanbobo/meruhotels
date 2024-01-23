<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function rk_post( $atts, $content = null ) {
    $atts = shortcode_atts( [
		'posts_per_page' => 8,
	], $atts );

    $args = array(
        'post_type' => 'post',
        'posts_per_page' => $atts['posts_per_page'],
        'orderby' => 'date',
        'order' => 'desc',
    );

    $custom_query = new WP_Query($args);

    $output = '<div class="rk-posts rk-o-h">
    <div class="rk-d-f rk-post-wrapper">';

    if ($custom_query->have_posts()) {

        while ($custom_query->have_posts()) {
            $custom_query->the_post();

            $title = get_the_title();
            $link = get_permalink();

            $image_html = '<img class="rk-img-fluid" alt="'. $title .'" src="'. get_stylesheet_directory_uri() . '/assets/images/post-none.jpg" />';

            $cover_id = get_post_meta(get_the_ID(), 'cover', true);
            $cover_src = wp_get_attachment_image_src($cover_id, 'ja-650-9999');

            $image = get_the_post_thumbnail(get_the_ID(), 'ja-650-9999', ['class' => 'rk-img-fluid']);


            if (!empty($cover_src)) {
                $image_html = '<img src="'. esc_url($cover_src[0]) .'" alt="cover" class="rk-img-fluid" />';
            } elseif (!empty($image)) {
                $image_html = $image;
            }


            $output .= '<div class="rk-post">';
            $output .= '<div class="rk-post-image rk-br-30 rk-o-h rk-lh-0 rk-mb-20"><a href="'. $link .'">'. $image_html .'</a></div>';
            $output .= '<div class="rk-post-content">';
            $output .= '<h3 class="rk-post-title h4 md-h4"><a class="rk-td-n" href="'. $link .'">'. $title .'</a></h3>';
            $output .= '<div class="rk-post-date subtitle rk-c-grey">'. get_the_date('d M Y') .'</div>';
            $output .= '</div>';
            $output .= '</div>';

        }
    }

    $output .= '</div>';
    $output .= '</div>';

    return $output;
}
add_shortcode( 'rk_post', 'rk_post' );
