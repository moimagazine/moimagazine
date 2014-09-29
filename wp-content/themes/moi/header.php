<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Moi Magazine
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="/assets/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="/assets/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="/assets/apple-touch-icon-152x152.png" />
<link rel="icon" type="image/png" href="/assets/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="/assets/favicon-16x16.png" sizes="16x16" />
<meta name="application-name" content="Moi Magazine"/>
<meta name="msapplication-TileColor" content="#FFFFFF" />
<meta name="msapplication-TileImage" content="/assets/mstile-144x144.png" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="content-outer">
    <div id="content-inner">
        <header>
            <a id="logo" href="/">
                <img src="<?= get_stylesheet_directory_uri() ?>/images/moi.svg" width="200" height="100" alt="Moi Magazine" />
            </a>
            <nav>
                <ul class="social-icons ss-icon">
                    <li><a href="https://www.instagram.com/">Instagram</a></li>
                    <li><a href="https://www.tumblr.com/">Tumblr</a></li>
                    <li><a href="https://www.twitter.com/">Twitter</a></li>
                    <li><a href="https://www.facebook.com/">Facebook</a></li>
                </ul>
                <ul class="main-navigation">
                    <li><a href="/">Fashion</a></li>
                    <li><a href="/">Beauty</a></li>
                    <li><a href="/">Store</a></li>
                    <li class="search-container">
                        <?php get_search_form() ?>
                    </li>
                </ul>
            </nav>
        </header>
        <article>