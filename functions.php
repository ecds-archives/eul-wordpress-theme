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

?>
