<?php
add_action('after_setup_theme', 'moi_setup');

function moi_setup() {

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    /*
     * Enable support for Post Formats.
     * See http://codex.wordpress.org/Post_Formats
     */
    add_theme_support('post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
    ));

    add_theme_support('post-thumbnails');

    add_image_size('featured', 800, 400, true);
    add_image_size('vertical', 300, 375, true);
}

add_action('wp_enqueue_scripts', 'moi_scripts');

function moi_scripts() {
    wp_enqueue_style('moi-style', get_stylesheet_uri());
}

add_filter('image_size_names_choose', 'moi_image_sizes');

function moi_image_sizes($presets) {
    $custom = array(
        "featured" => __("Featured Image"),
        "vertical" => __("Vertical Image")
    );
    return array_merge($presets, $custom);
}