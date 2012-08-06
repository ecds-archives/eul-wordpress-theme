<?php
/**
 *  Loop Content Template
 *
 * @file content.php
 * @package EULTheme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1 class="entry-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h1>
    </header>
    <?php if( 'post' == get_post_type() ) : ?>
    <div class="entry-meta">

    </div>
    <?php endif; ?>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <footer>
        <!-- post meta stuff here -->
    </footer>
</article>