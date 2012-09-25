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
        <div id="content">
            <div id="main" role="main">
                <!-- The Loop -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part('content', get_post_format()); ?>
                <?php endwhile; ?>
                <?php eul_content_nav('nav-below'); ?>
                <?php else: ?>

                <?php endif; ?>
                <!-- /The Loop -->
            </div><!-- /#main -->
            <?php get_sidebar(); ?>
            <div class="clearfix"></div>
        </div>
<?php get_footer(); ?>
