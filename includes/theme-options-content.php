<?php
/**
 * Theme Options Content
 * The content to be rendered for the theme options page
 */
?>
<div class="wrap">
    <div id="icon-themes" class="icon32">
        <br />
    </div>
    <h2><?php _e('Theme Options', 'eultheme'); ?></h2>
    <form action="options.php" method="post">
        <?php
            settings_fields('eul_theme_options');
            do_settings_sections('theme_options');
        ?>
        <input name="eul_theme_options[submit-<?php echo $tab; ?>]" type="submit" class="button-primary" value="<?php esc_attr_e('Save Settings', 'eultheme'); ?>" />
        <input name="eul_theme_options[reset-<?php echo $tab; ?>]" type="submit" class="button-secondary" value="<?php esc_attr_e('Reset Defaults', 'eultheme'); ?>" />
    </form>
</div>  