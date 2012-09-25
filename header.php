<?php
/**
 * Header for EULTheme
 *
 * Description
 * @file header.php
 * @package EULTheme
 * @author Kyle Bock
 * @filesource wp-content/themes/eultheme/header.php
 * @since EULTheme 0.1
 */
?><!DOCTYPE html>
<!--[if IE 6]><html id="ie6" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7]><html id="ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html id="ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />

    <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="global_nav">
        <ul class="links">
            <li><a href="#">Woodruff</a></li>
            <li><a href="#">Business</a></li>
            <li><a href="#">Health Sciences</a></li>
            <li><a href="#">Law</a></li>
            <li><a href="#">Marbl</a></li>
            <li><a href="#">Oxford College</a></li>
            <li><a href="#">Theology</a></li>
            <li class="last"><a href="#">EMORY</a></li>
        </ul>
    </div>
    <div id="page_wrapper">
        <header class="page-header">
            <div id="logo">
                <a href="/">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-trimmed.png" />
                </a>
            </div>
        </header>
        <div id="main_nav" role="navigation">
            <?php 
                wp_nav_menu(array(
                    'container'         => false,
                    'theme_location'    => 'primary'
                )); 
            ?>
        </div>