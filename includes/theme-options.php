<?php
/**
 * EULTheme Options
 * @package EULTheme
 * @since EULTheme 0.3.0
 */


function eul_theme_options_init() {
    register_setting(
        'eul_options',       // Options group, see settings_fields() call in twentyeleven_theme_options_render_page()
        'eul_theme_options', // Database option, see twentyeleven_get_theme_options()
        'eul_theme_options_validate' // The sanitization callback, see twentyeleven_theme_options_validate()
    );
}
add_action( 'admin_init', 'eul_theme_options_init' );

function eul_theme_options_add_menu() {
    add_theme_page(
        __( 'Theme Options', 'eultheme' ),      // Name of page
        __( 'Theme Options', 'eultheme' ),      // Label in menu
        'edit_theme_options',                   // Capability required
        'theme_options',                        // Menu slug, used to uniquely identify the page
        'eul_theme_options_render_page'         // Function that renders the options page
    );
}
add_action( 'admin_menu', 'eul_theme_options_add_menu' );

function eul_theme_options_render_page() {
    if ( !current_user_can( 'manage_options' ) )  {
        wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }
    // done to keep this function from getting unwieldy
    include("theme-options-content.php");
}

?>