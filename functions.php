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

if ( ! function_exists( 'twentyeleven_content_nav' ) ) :
/**
 * Display navigation to next/previous pages when applicable
 */
function eul_content_nav( $nav_id ) {
  global $wp_query;

  if ( $wp_query->max_num_pages > 1 ) : ?>
    <nav id="<?php echo $nav_id; ?>">
      <h3 class="assistive-text"><?php _e( 'Post navigation', 'twentyeleven' ); ?></h3>
      <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyeleven' ) ); ?></div>
      <div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></div>
    </nav><!-- #nav-above -->
  <?php endif;
}
endif;
?>
