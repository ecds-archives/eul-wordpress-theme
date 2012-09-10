<?php
/**
 * Index Template
 *
 * @file index.php
 * @package EULTheme
 * @filesource wp-content/themes/eultheme/index.php
 *
 */
?>
<?php get_header(); ?>
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
            header
        </header>
        <div id="main_nav" role="navigation">
            <?php 
                wp_nav_menu(array(
                    'container'         => false,
                    'theme_location'    => 'primary'
                )); 
            ?>
        </div>
        <div id="main_content">
            testing content
        </div>
    </div>
<?php get_footer(); ?>
