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
                <article class="post-<?php the_ID(); ?> post" role="article">
                    <header class="post-header">
                        <h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                        <p class="meta"><?php _e('Posted', 'bonestheme'); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(get_option('date_format')); ?></time> <?php _e('by', 'bonestheme'); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e('filed under', 'bonestheme'); ?> <?php the_category(', '); ?>.</p>
                    </header><!-- /.post-header -->
                    <section class="post-content">
                        <?php the_content(); ?>
                    </section><!-- /.post-content -->
                    <footer class="post-footer">
                        <p class="tags"><?php the_tags('<span class="tags-title">Tags:</span> ', ', ', ''); ?></p>
                    </footer>
                </article>
                <?php endwhile; else: ?>

                <?php endif; ?>
                <!-- /The Loop -->
            </div><!-- /#main -->
            <?php get_sidebar(); ?>
            <div class="clearfix"></div>
        </div>
<?php get_footer(); ?>
