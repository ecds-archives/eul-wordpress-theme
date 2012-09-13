<?php
/** 
 * The template for displaying Comments.
 *
 * @package EULTheme
 */
?>
    <div id="comments">
    <?php if ( post_password_required() ) : ?>
        <p class="no-password"></php _e('This post is password protected. Enter the password to view any comments.', 'eultheme');</p>
    </div>

    <?php 
            return;
        endif;
    ?>

    <h1 id="comments-title"><?php _e('Comments', 'eultheme') ?></h1>
    <?php if( have_comments() ) : ?>

    <ol class="comment-list">
        <?php wp_list_comments(); ?>
    </ol>

    <?php elseif (!comments_open() && !is_page() && post_type_supports(get_post_type(), 'comments') ) : ?>
        
        <p class="nocomments"><?php _e( 'Comments are closed.', 'eultheme' ); ?></p>
    
    <?php endif; ?>
        
        <?php comment_form(); ?>
    </div>