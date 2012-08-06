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
        <div id="content-wrapper">
            <div id="content" role="main">
            <?php if ( have_posts() ) : ?>
                <?php /* Beginning of the loop*/ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </div>
<?php get_footer(); ?>
