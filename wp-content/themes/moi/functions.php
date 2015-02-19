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
        'gallery',
    ));

    add_theme_support('post-thumbnails');

    add_image_size('vertical', 300, 375, true);
    add_image_size('vertical-large', 600, 750, true);
    add_image_size('horizontal-large', 800, 400, true);
}

add_action('wp_enqueue_scripts', 'moi_scripts');
function moi_scripts() {
    wp_enqueue_style('moi-style', get_stylesheet_uri());
}

add_filter('image_size_names_choose', 'moi_image_sizes');
function moi_image_sizes($presets) {
    $custom = array(
        "vertical" => __("Vertical"),
        "vertical-large" => __("Vertical (Large)"),
        "horizontal-large" => __("Horizontal (Large)")
    );
    return array_merge($presets, $custom);
}

add_filter( 'wp_title', 'moi_wp_title', 10, 2 );
function moi_wp_title( $title, $sep ) {
    global $paged, $page;

    if ( is_feed() )
        return $title;

    // Add the site name.
    $title .= get_bloginfo( 'name' );

    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";

    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 )
        $title = "$title $sep " . sprintf( __( 'Page %s', 'moi' ), max( $paged, $page ) );

    return $title;
}

add_filter( 'wp_default_scripts', 'remove_jquery_migrate' );
function remove_jquery_migrate(&$scripts) {
    if ( ! is_admin()) {
        $scripts->remove('jquery');
        $scripts->add('jquery', false, array('jquery-core'));
    }
}


function the_main_category_link() {
    $category = get_the_category();
    echo get_category_link($category[0]->cat_ID);
}

function the_main_category() {
    $category = get_the_category();
    echo $category[0]->name;
}

function the_main_category_slug() {
    $category = get_the_category();
    echo $category[0]->slug;
}