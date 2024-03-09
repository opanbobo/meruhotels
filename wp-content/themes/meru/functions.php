<?php

require( get_template_directory() . '/shortcode/post.php' );
require( get_template_directory() . '/shortcode/form-newsletter.php' );
require( get_template_directory() . '/shortcode/select-destination.php' );
require( get_template_directory() . '/shortcode/slider.php' );
require( get_template_directory() . '/shortcode/suite.php' );
require( get_template_directory() . '/shortcode/home-popup.php' );

require( get_template_directory() . '/blocks/init.php' );

function rk_enqueue_styles() {

    // Vendor CSS Files
    wp_register_style( 'rk-bootstrap', get_stylesheet_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', [], '0.0.7' );
    wp_register_style( 'rk-bootstrap-icons', get_stylesheet_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', [], '0.0.7' );
    wp_register_style( 'rk-fontawesome-free', get_stylesheet_directory_uri() . '/assets/vendor/fontawesome-free/css/all.min.css', [], '0.0.7' );
    wp_register_style( 'rk-glightbox', get_stylesheet_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css', [], '0.0.7' );
    wp_register_style( 'rk-select2', get_stylesheet_directory_uri() . '/assets/vendor/select2/css/select2.min.css', [], '0.0.7' );
    wp_register_style( 'rk-slick', get_stylesheet_directory_uri() . '/assets/vendor/slick/css/slick.css', [], '0.0.7' );
    wp_register_style( 'rk-slick-theme', get_stylesheet_directory_uri() . '/assets/vendor/slick/css/slick-theme.css', [], '0.0.7' );

    // Template Main CSS File
    wp_register_style( 'rk-style', get_stylesheet_directory_uri() . '/assets/css/style.css', [], '0.0.7' );

    wp_enqueue_style( 'rk-bootstrap' );
    wp_enqueue_style( 'rk-bootstrap-icons' );
    wp_enqueue_style( 'rk-fontawesome-free' );
    wp_enqueue_style( 'rk-glightbox' );
    wp_enqueue_style( 'rk-select2' );
    wp_enqueue_style( 'rk-slick' );
    wp_enqueue_style( 'rk-slick-theme' );
    wp_enqueue_style( 'rk-style' );


    wp_enqueue_script('rk-bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '0.0.7', true);
    wp_enqueue_script('rk-glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array('jquery'), '0.0.7', true);
    wp_enqueue_script('rk-select2', get_template_directory_uri() . '/assets/vendor/select2/js/select2.min.js', array('jquery'), '0.0.7', true);
    wp_enqueue_script('rk-slick', get_template_directory_uri() . '/assets/vendor/slick/js/slick.min.js', array('jquery'), '0.0.7', true);
    wp_enqueue_script('rk-lenis', get_template_directory_uri() . '/assets/vendor/lenis/lenis.min.js', array('jquery'), '0.0.7', true);
    wp_enqueue_script('rk-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '0.0.7', true);

    wp_localize_script('rk-script', 'rkData', array(
        'themeUrl' => get_stylesheet_directory_uri(),
    ));
}
add_action( 'wp_enqueue_scripts', 'rk_enqueue_styles' );

function rk_add_editor_styles() {
    add_editor_style(get_stylesheet_directory_uri() . '/assets/css/editor.css');
}
add_action('init', 'rk_add_editor_styles');

function custom_theme_menu_location() {
    register_nav_menu('menu_location', __('Menu Location', 'theme-textdomain'));
}
add_action('after_setup_theme', 'custom_theme_menu_location');

function rk_image_sizes() {
    add_image_size('img-slider-bfb', 432, 202, true);
    add_image_size('suite', 681, 440, true);

    add_image_size('cover-1536', 3072, 1964, true);
    add_image_size('cover-1024', 2048, 1964, true);
    add_image_size('cover-768', 1536, 1964, true);
    add_image_size('cover-300', 600, 1964, true);

    add_image_size('slider-suite', 1674, 1116, true);

    add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme', 'rk_image_sizes');

function rk_image_size_names_choose() {
    return [
		'thumbnail'      => __( 'Thumbnail', 'rk' ), // 150x150
		'medium'         => __( 'Medium', 'rk' ), // 300x300
		'medium_large'   => __( 'Medium Large', 'rk' ), // 768x768
		'img-slider-bfb' => __( 'Image Slider BFB 432x202', 'rk' ),
		'suite'          => __( 'Suite 681x440', 'rk' ),
		'large'          => __( 'Large', 'rk' ), // 1024x1024
		'full'           => __( 'Full Size', 'rk' ),
	];
}
add_filter( 'image_size_names_choose', 'rk_image_size_names_choose');

function rk_calculate_image_srcset( $sources, $size_array, $image_src, $image_meta, $attachment_id ) {

    $is_custom = false;
    $is_cover = false;
    $is_slider_suite = false;

    if (preg_match('/cover-982-/', $image_src)) {
        $is_custom = true;
        $is_cover = true;
    };

    if (preg_match('/slider-558-/', $image_src)) {
        $is_custom = true;
        $is_slider_suite = true;
    };

    if (!$is_custom) return $sources;

    $image_meta = apply_filters( 'wp_calculate_image_srcset_meta', $image_meta, $size_array, $image_src, $attachment_id );

    if ( empty( $image_meta['sizes'] ) || ! isset( $image_meta['file'] ) || strlen( $image_meta['file'] ) < 4 ) {
        return false;
    }

    $image_sizes = $image_meta['sizes'];

	$image_width  = (int) $size_array[0];
	$image_height = (int) $size_array[1];

	if ( $image_width < 1 ) {
		return false;
	}

    $image_basename = wp_basename( $image_meta['file'] );

    if ( ! isset( $image_sizes['thumbnail']['mime-type'] ) || 'image/gif' !== $image_sizes['thumbnail']['mime-type'] ) {
		$image_sizes[] = array(
			'width'  => $image_meta['width'],
			'height' => $image_meta['height'],
			'file'   => $image_basename,
		);
	} elseif ( str_contains( $image_src, $image_meta['file'] ) ) {
		return false;
	}

	$dirname = _wp_get_attachment_relative_path( $image_meta['file'] );

	if ( $dirname ) {
		$dirname = trailingslashit( $dirname );
	}

	$upload_dir    = wp_get_upload_dir();
	$image_baseurl = trailingslashit( $upload_dir['baseurl'] ) . $dirname;

    if ( is_ssl() && ! str_starts_with( $image_baseurl, 'https' ) && parse_url( $image_baseurl, PHP_URL_HOST ) === $_SERVER['HTTP_HOST'] ) {
		$image_baseurl = set_url_scheme( $image_baseurl, 'https' );
	}

    $image_edited = preg_match( '/-e[0-9]{13}/', wp_basename( $image_src ), $image_edit_hash );

    $max_srcset_image_width = apply_filters( 'max_srcset_image_width', 2048, $size_array );

    $sources = array();

    $src_matched = false;

    foreach ( $image_sizes as $image ) {
		$is_src = false;

		if ( ! is_array( $image ) ) {
			continue;
		}

		if ( ! $src_matched && str_contains( $image_src, $dirname . $image['file'] ) ) {
			$src_matched = true;
			$is_src      = true;
		}

		if ( $image_edited && ! strpos( $image['file'], $image_edit_hash[0] ) ) {
			continue;
		}

		// if ( $max_srcset_image_width && $image['width'] > $max_srcset_image_width && ! $is_src ) {
		// 	continue;
		// }


        $is_pass = false;
        if ($is_cover && $image['height'] >= 1964 ) {
            $is_pass = true;
        } elseif ($is_slider_suite && $image['height'] >= 1116 ) {
            $is_pass = true;
        }

		if ( $is_pass || $is_src ) {

            $source = array(
				'url'        => $image_baseurl . $image['file'],
				'descriptor' => 'w',
				'value'      => $image['width'] / 2,
			);

			if ( $is_src ) {
				$sources = array( $image['width'] => $source ) + $sources;
			} else {
				$sources[ $image['width'] ] = $source;
			}
		}
	}

    return $sources;
}

add_filter( 'wp_calculate_image_srcset', 'rk_calculate_image_srcset', 1000, 5 );

add_filter( 'big_image_size_threshold', '__return_false' );

function rk_gsc_insert() {
?><!-- Google Search Console Meta Tag Code -->

<!-- End Google Search Console Meta Tag Code -->
<?php
}
add_action('wp_head', 'rk_gsc_insert');

function rk_ga_insert() {
?><!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TFB25TQ3');</script>
<!-- End Google Tag Manager -->
<?php
}
add_action('wp_head', 'rk_ga_insert');

function rk_ga_body_insert() {
?><!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TFB25TQ3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
}
add_action('wp_body_open', 'rk_ga_body_insert');

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
            ['rk-is-layout-constrained'], $block_content);
    }

    if ( 'wp-bootstrap-blocks/button' == $block['blockName'] ) {
        $pattern = '/<a([^>]*)>(.*?)<\/a>/si';

        preg_match($pattern, $block_content, $matches);

        if (count($matches) > 0) {
            $open = '<a' . $matches[1] . '>';
            $close = '</a>';
            $text = trim($matches[2]);

            $block_content = $open . '<span>' . $text . '</span>' . $close;
        }
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
