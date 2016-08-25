<?php
/**
 * Vola Theme Header
 *
 * @package     TMXVola
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="author" content="MD. Hasan Shahriar, hsleonis2@gmail.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2" />
    <meta name="tagline" content="Perfect Choice for individuals and Agencies" />
    
    <?php wp_head(); ?>
</head>
<body class="home page page-id-1804 page-template-default layout-wide responsive wpb-js-composer js-comp-ver-4.8.1 vc_responsive" <?php // body_class();?>>

<div id="mobile-menu-container">
    <div id="mobile-menu-wrapper" class="mobile-menu">
        <?php wp_nav_menu( array('theme_location' => 'main-menu' )); ?>
    </div>
</div>

<header id="beau-header" class="header-style-1">
    <nav class="container">
        <div class="mobile-nav">
            <button type="button" id="navbar-toggle" class="toggle-button" data-target="mobile-menu-container">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div id="logo-header">
            <a href="<?php bloginfo( 'url' ); ?>">
                <img class="logo" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php echo bloginfo('title'); ?>" />
            </a>
        </div>

        <div class="nav-wrapper">
            <div id="main-menu-wrapper" class="main-menu">
                <?php wp_nav_menu( array('theme_location' => 'main-menu' )); ?>
            </div>
        </div>
    </nav>
</header>

<div id="main-container">
    <div class="page-content container page-page">
