<?php
/**
 * The template for displaying single posts
 *
 * @package EULTheme
 */

?>
<?php get_header(); ?>

        <div id="content">
            <div id="main" role="main">
                <?php while( have_posts() ) : the_post(); ?>

                <?php get_template_part('content', get_post_format()); ?>

                <?php endwhile;  // end of hte loop?>

                <?php //TODO: add comments here ?>
                
            </div><!-- /#main <?php echo get_post_format(); ?>-->

            <?php get_sidebar(); ?>

            <div class="clearfix"></div>
        </div><!-- /#content -->

<?php get_footer(); ?>