<?php

require( get_template_directory() . '/shortcode/post.php' );
require( get_template_directory() . '/shortcode/form-newsletter.php' );

require( get_template_directory() . '/blocks/init.php' );

function rk_enqueue_styles() {

    // Vendor CSS Files
    wp_register_style( 'rk-bootstrap', get_stylesheet_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', [], '0.0.1' );
    wp_register_style( 'rk-bootstrap-icons', get_stylesheet_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', [], '0.0.1' );
    wp_register_style( 'rk-fontawesome-free', get_stylesheet_directory_uri() . '/assets/vendor/fontawesome-free/css/all.min.css', [], '0.0.1' );
    wp_register_style( 'rk-glightbox', get_stylesheet_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css', [], '0.0.1' );
    wp_register_style( 'rk-select2', get_stylesheet_directory_uri() . '/assets/vendor/select2/css/select2.min.css', [], '0.0.1' );
    wp_register_style( 'rk-slick', get_stylesheet_directory_uri() . '/assets/vendor/slick/css/slick.css', [], '0.0.1' );
    wp_register_style( 'rk-slick-theme', get_stylesheet_directory_uri() . '/assets/vendor/slick/css/slick-theme.css', [], '0.0.1' );

    // Template Main CSS File
    wp_register_style( 'rk-main', get_stylesheet_directory_uri() . '/assets/css/main.css', [], '0.0.1' );

    wp_enqueue_style( 'rk-bootstrap' );
    wp_enqueue_style( 'rk-bootstrap-icons' );
    wp_enqueue_style( 'rk-fontawesome-free' );
    wp_enqueue_style( 'rk-glightbox' );
    wp_enqueue_style( 'rk-select2' );
    wp_enqueue_style( 'rk-slick' );
    wp_enqueue_style( 'rk-slick-theme' );
    wp_enqueue_style( 'rk-main' );


    wp_enqueue_script('rk-bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '0.0.1', true);
    wp_enqueue_script('rk-glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array('jquery'), '0.0.1', true);
    wp_enqueue_script('rk-select2', get_template_directory_uri() . '/assets/vendor/select2/js/select2.min.js', array('jquery'), '0.0.1', true);
    wp_enqueue_script('rk-slick', get_template_directory_uri() . '/assets/vendor/slick/js/slick.min.js', array('jquery'), '0.0.1', true);
    wp_enqueue_script('rk-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '0.0.1', true);

    wp_localize_script('rk-script', 'rkData', array(
        'themeUrl' => get_stylesheet_directory_uri(),
    ));
}
add_action( 'wp_enqueue_scripts', 'rk_enqueue_styles' );

function rk_add_editor_styles() {
    // add_editor_style(get_stylesheet_directory_uri() . '/assets/css/editor.css');
}
add_action('init', 'rk_add_editor_styles');

function rk_image_sizes() {
    add_image_size('img-slider-bfb', 432, 202, true);

    add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme', 'rk_image_sizes');

function rk_image_size_names_choose() {
    return [
		'thumbnail'      => __( 'Thumbnail', 'rk' ),
		'medium'         => __( 'Medium', 'rk' ),
		'img-slider-bfb' => __( 'Image Slider BFB', 'rk' ),
		'large'          => __( 'Large', 'rk' ),
		'full'           => __( 'Full Size', 'rk' ),
	];
}
add_filter( 'image_size_names_choose', 'rk_image_size_names_choose');

function rk_html_id($output) {
	$output .= ' id="rk"';

    return $output;
}
add_filter('language_attributes', 'rk_html_id');

function rk_button($btn_classes) {

	array_shift($btn_classes);
	array_pop($btn_classes);

	return $btn_classes;
}
add_filter( 'wp_bootstrap_blocks_button_classes', 'rk_button' );

function rk_update_theme_file_on_save_post($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    if (wp_is_post_revision($post_id) || wp_is_post_autosave($post_id)) return;

    $theme_file_path = get_template_directory() . '/nothing.php';

    $updated_content = '<?php //' . time();
    file_put_contents($theme_file_path, $updated_content);
}
add_action('save_post', 'rk_update_theme_file_on_save_post');

function rk_post_template_structure_update( $block_content, $block ) {

    if ( 'core/post-content' == $block['blockName'] && !is_single()) {
        $block_content = str_replace(['is-layout-constrained'],
            ['rl-is-layout-constrained'], $block_content);
    }

	return $block_content;
}
add_filter( 'render_block', 'rk_post_template_structure_update', 10, 2 );

function rk_archive_query($query) {
    if (is_post_type_archive('hotel') && $query->is_main_query()) {
        $query->set('post_status', array('publish', 'draft'));
    }
}
add_action('pre_get_posts', 'rk_archive_query');

function rk_wp_title($title) {
    if ( is_post_type_archive( 'hotel' ) ) {
        $title = 'Hotel - ' . get_bloginfo('name');
    } elseif ( is_post_type_archive( 'restaurant' ) ) {
        $title = 'Restaurant - ' . get_bloginfo('name');
    }
    return $title;
}
// add_filter( 'wp_title', 'rk_wp_title', 50);

function rk_body_classes($classes) {

    if (is_post_type_archive( 'hotel' )) {
        $classes[] = 'archive-hotel-custom';
    }

    return $classes;
}
// add_filter('body_class', 'rk_body_classes');

function rk_get_template_part($id) {
    $block_id = $id;
    $block_post = get_post($block_id);

    return apply_filters('the_content', $block_post->post_content);
}
