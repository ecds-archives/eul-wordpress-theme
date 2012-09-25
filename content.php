<?php
/**
 *  The default template for displaying content
 *
 * @file content.php
 * @package EULTheme
 */
?>

<article class="post-<?php the_ID(); ?> post" role="article">
    <header class="post-header">
        <h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
        <p class="meta"><?php _e('Posted', 'eultheme'); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(get_option('date_format')); ?></time> <?php _e('by', 'eultheme'); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e('filed under', 'eultheme'); ?> <?php the_category(', '); ?>.</p>
    </header><!-- /.post-header -->
    <?php if (is_search()) : ?>
    <section class="post-excerpt">
        <?php the_excerpt(); ?>
    </section> <!-- /.post-excerpt -->
    <?php else : ?>
    <section class="post-content">
        <?php the_content(); ?>
    </section><!-- /.post-content -->
    <?php endif; ?>
    <footer class="post-footer">
        <p class="tags"><?php the_tags('<span class="tags-title">Tags:</span> ', ', ', ''); ?></p>
        <p>
            This post currently has
            <?php comments_number( 'no responses', 'one response', '% responses' ); ?>.
        </p>
    </footer>
</article>