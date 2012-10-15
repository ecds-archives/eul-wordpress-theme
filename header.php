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

$eul_options = get_option('eul_theme_options');
?><!DOCTYPE html>
<!--[if IE 6]><html id="ie6" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7]><html id="ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html id="ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?> class="<?php echo $eul_options['header_nav_color']; ?>">
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
            <li><a href="http://web.library.emory.edu">Woodruff</a></li>
            <li><a href="http://business.library.emory.edu/">Business</a></li>
            <li><a href="http://health.library.emory.edu/">Health Sciences</a></li>
            <li><a href="http://www.law.emory.edu/library/">Law</a></li>
            <li><a href="http://marbl.library.emory.edu/">Marbl</a></li>
            <li><a href="http://oxford.library.emory.edu/">Oxford College</a></li>
            <li><a href="http://www.pitts.emory.edu/">Theology</a></li>
            <li class="last"><a href="http://www.emory.edu/">EMORY</a></li> 
        </ul>
    </div>
    <div id="page_wrapper">
        <header class="page-header">
            <div id="logo">
                <a href="/">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-trimmed.png" />
                </a>
            </div>
            <div class="header-text">
                <?php echo $eul_options['header_site_title']; ?>
            </div>
        </header>
        <div id="main_nav" class="" role="navigation">
            <?php 
                wp_nav_menu(array(
                    'container'         => false,
                    'theme_location'    => 'primary'
                )); 
            ?>
        </div>