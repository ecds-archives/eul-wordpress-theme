<?php
/**
 * EULTheme Options
 * @package EULTheme
 * @since EULTheme 0.3.0
 */
global $sections;
$sections = array(
    'header' => array(
        'id' => 'header',
        'title' => __('Header', 'eultheme'),
        'description' => __('Options related to the header of the page')
    )
);

global $options;
$options = array(
    'header_site_title' => array(
        'id' => 'header_site_title',
        'title' => __('Header Title', 'eultheme'),
        'description' => 'The title of the site next to the Emory Logo',
        'section' => 'header',
        'type' => 'text',
        'default' => ''
    ),
    'header_nav_color' => array(
        'id' => 'header_nav_color',
        'title' => __('Navigation Color', 'eultheme'),
        'description' => 'The background color of the header navigation bar',
        'section' => 'header',
        'type' => 'select',
        'valid_options' => array(
            'gold' => array(
                'value' => 'gold',
                'title' => 'Gold'
            ),
            'grey' => array(
                'value' => 'grey',
                'title' => 'Grey'
            )
        ),
        'default' => 'gold'
    )
);

function eul_theme_options_init() {
    register_setting(
        'eul_theme_options',       // Options group, see settings_fields() call in twentyeleven_theme_options_render_page()
        'eul_theme_options', // Database option, see twentyeleven_get_theme_options()
        'eul_theme_options_validate' // The sanitization callback, see twentyeleven_theme_options_validate()
    );
    
    global $sections;
    foreach ($sections as $section) {
        add_settings_section(
            $section['id'], 
            $section['title'], 
            'eul_theme_sections_callback', 
            'theme_options');
    }

    global $options;
    foreach ($options as $option) {
        add_settings_field(
            $option['id'], 
            $option['title'], 
            'eul_theme_options_callback', 
            'theme_options', 
            $option['section'],
            $option
        );
    }
}
add_action( 'admin_init', 'eul_theme_options_init' );

function eul_theme_options_add_menu() {
    // responsible for actually creating the settings page and adding it to the appropriate menu
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
    // early return for failed authorization
    if ( !current_user_can( 'manage_options' ) )  {
        wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }

    // done to keep this function from getting unwieldy
    include("theme-options-content.php");
}

function eul_theme_sections_callback($section) {
    global $sections;
    echo "<p>" . $sections[$section['id']]['description'] . "</p>";
}

function eul_theme_options_callback($option) {
    // $oenology_options = oenology_get_options();
    // $option_parameters = oenology_get_option_parameters();
    $optionname = $option['name'];
    $optiontitle = $option['title'];
    $optiondescription = $option['description'];
    $fieldtype = $option['type'];
    $fieldname = 'eul_theme_options[' . $optionname . ']';
    
    // build out code for custom option types here
    // Output select form field markup
    if ( 'text' == $fieldtype) {
        // for value echo wp_filter_nohtml_kses( $oenology_options[$optionname] ); 
        ?>
        <input type="text" name="<?php echo $fieldname; ?>" value="" />
        <?php
    }
    else if ( 'select' == $fieldtype ) {
        $valid_options = array();
        $valid_options = $option['valid_options'];
        ?>
        <select name="<?php echo $fieldname; ?>">
        <?php 
        foreach ( $valid_options as $valid_option ) {
            echo $valid_option;?>
            <option value="<?php echo $valid_option['name']; ?>"><?php echo $valid_option['title']; ?></option>
            <?php
        }
        ?>
        </select>
        <?php
    } 
}

function pre($array) {
    echo "<pre>" . print_r($array, true) . "</pre>";
}

?>