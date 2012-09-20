<?php
/**
 * EUL Theme functions and definitions
 *
 * @package EULTheme
 */

function eul_theme_setup() {
    register_nav_menus(array(
        'primary' => 'The main page navigation in the header'
    ));
}
add_action('after_setup_theme', 'eul_theme_setup');

/**
 * Adds first and last classes onto navigation menus for easy styling
 *
 */
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
        'name'  => __('Main Sidebar', 'eultheme'),
        'id'    => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   =>  '</h3>'
    ) );
}
add_action( 'widgets_init', 'eul_widgets_init');

if ( ! function_exists( 'eul_content_nav' ) ) :
/**
 * Display navigation to next/previous pages when applicable
 */
function eul_content_nav( $nav_id ) {
  global $wp_query;

  if ( $wp_query->max_num_pages > 1 ) : ?>
    <nav id="<?php echo $nav_id; ?>">
      <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'eultheme' ) ); ?></div>
      <div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'eultheme' ) ); ?></div>
    </nav><!-- #nav-above -->
  <?php endif;
}
endif;

/**
 * customize display of the comments form
 */
function eul_comment_fields($arg) {
  $arg['author'] = '';
  $arg['url'] = '';
  $arg['email'] = '';

  return $arg;
}
add_filter('comment_form_default_fields', 'eul_comment_fields');

/** 
 * Template for comments
 * Used as a callback by wp_list_comments() for displaying the comments.
 */
function eul_comment( $comment, $args, $depth ) {
  $GLOBALS['comment'] = $comment;

?>
  <li <?php comment_class(); ?> id="li-comment<?php comment_ID(); ?>">

    <article id="comment-<?php comment_ID(); ?>" class="comment">
      <div class="comment-meta">
        <?php echo get_avatar( $comment, $args['avatar_size'] ); ?>
      </div>
      <div class="comment-content"><?php comment_author_link(); ?> <?php comment_text(); ?></div>
      <footer>
      </footer>
    </article>

  </li>
<?php
}

?>
