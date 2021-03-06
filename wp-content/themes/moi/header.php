<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <article>
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
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="header-outer" class="clearfix">
    <div id="header-inner" class="page-width">
        <a id="logo" href="/">
            <img src="<?= get_stylesheet_directory_uri() ?>/images/moi-logo.svg" alt="Moi Magazine" />
        </a>
        <nav>
            <ul class="main-navigation">
                <?php wp_nav_menu( array(
                    'menu' => 'header-menu',
                    'container' => '',
                    'fallback_cb' => false,
                    'items_wrap' => '%3$s'
                ) ); ?>
                <li class="search-container">
                    <?php get_search_form(); ?>
                </li>
            </ul>
        </nav>
        <div id="menu-toggle" onclick="jQuery('.main-navigation').toggleClass('open')"></div>
    </div>
</div>
<div id="sub-header" class="page-width">
    <div class="pull-right">
        <ul class="social-icons ss-icon">
            <li><a href="https://www.twitter.com/" title="Twitter">Twitter</a></li>
            <li><a href="https://www.facebook.com/" title="Facebook">Facebook</a></li>
            <li><a href="https://www.tumblr.com/" title="Tumblr">Tumblr</a></li>
            <li><a href="https://www.instagram.com/" title="Instagram">Instagram</a></li>
            <li><a href="<?= bloginfo('rss2_url') ?>" title="RSS 2.0 Feed">RSS</a></li>
        </ul>
        <div class="subscribe-box">
            <div class="title">Subscribe</div>
            <div class="text"><span>sign up</span> today for daily updates from Moi</div>
            <form>
                <input type="email" placeholder="Email Address" />
            </form>
        </div>
    </div>
    <div class="ad leaderboard">
        <img src="http://placehold.it/728x90&text=Leaderboard+(728x90)" width="728" height="90" />
    </div>
</div>
<div id="content-outer">
    <div id="content-inner" class="page-width">