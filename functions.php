<?php
/**
 *
 *
 */

function eul_theme_setup() {
    register_nav_menus(array(
        'primary' => 'The main page navigation in the header'
    ));
}
add_action('after_setup_theme', 'eul_theme_setup');

function eul_add_first_and_last($output) {
  $output = preg_replace('/class="menu-item/', 'class="first-menu-item menu-item', $output, 1);
  $output = substr_replace($output, 'class="last-menu-item menu-item', strripos($output, 'class="menu-item'), strlen('class="menu-item'));
  return $output;
}
add_filter('wp_nav_menu', 'eul_add_first_and_last');

/** 
 * Register sidebars and widgets
 */
function eul_widgets_init() {
    register_sidebar( array(
        'name'  => __('Main Sidebar', 'eul'),
        'id'    => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   =>  '</h3>'
    ) );
}
add_action( 'widgets_init', 'eul_widgets_init');
?>
